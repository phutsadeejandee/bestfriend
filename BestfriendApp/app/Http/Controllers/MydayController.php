<?php

namespace App\Http\Controllers;
use App\Models\Myday;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class MydayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($userId)
    {
        $userId = Auth::id(); // ดึง user_id ของผู้ใช้ที่ login อยู่
        $mydays = Myday::where('user_id', $userId)->get();
        return view('myday.index', compact('mydays'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('myday.index', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'detail' => 'required|string',
        ]);
    
        // สร้างข้อมูลใหม่
        Myday::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'detail' => $request->detail,
        ]);
    
        session()->flash('success', 'เพิ่ม Myday สำเร็จ!');
        return redirect()->route('myday', ['userId' => Auth::id()]);
    }
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $myday = Myday::findOrFail($id);
        return view('myday.show', compact('myday'));
    }

    public function view()
    {
        $mydays = Myday::where('user_id', Auth::id())->get();
        return view('dashboard', compact('mydays'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = "Update Myday";
        $edit = Myday::findOrFail($id);
        return view('myday.edit', compact('edit', 'title'));

        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'title' => 'required|string',
                'detail' => 'required|string',
            ]
        );
        $userId = Auth::id();
        $update = Myday::findOrFail($id);
        $update->title = $request->input('title');
        $update->detail = $request->input('detail');
 
        $result = $update->save();
        Session::flash('success', 'Myday updated successfully');
        return redirect()->route('myday', ['userId' => $userId]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request,string $id)
    {
        $myday = Myday::findOrFail($id);

        if ($myday->user_id != Auth::id()) {
            abort(403); // ไม่อนุญาต
        }
        
        $userId = $myday->user_id; // เก็บ user_id ก่อนลบ
        $myday->delete();
  
        return redirect()->route('myday', ['userId' => $userId]);
    }
}

