<?php

namespace App\Http\Controllers;
use App\Models\Advice;
use App\Models\Myday;
use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class AdviceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userId = Auth::id(); // ดึง user_id ของผู้ใช้ที่ login อยู่
        $advices = Advice::where('user_id', $userId)->get();
        return view('advice.advice', compact('advices'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('advice.advice', compact('title'));
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
        Advice::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'detail' => $request->detail,
        ]);
    
        session()->flash('success', 'เพิ่ม คำแนะนำ สำเร็จ!');
        return redirect()->route('advice', ['userId' => Auth::id()]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $advice = Advice::findOrFail($id);
        return view('advice.show', compact('advice'));
    }

    public function Welcomeshow($id)
{
    $advice = Advice::findOrFail($id);
    return view('welcome', compact('advice'));
}

    public function showAllData()
    {
        $advices = Advice::paginate(5);
        $mydays = Myday::paginate(5);
        $tests = Test::paginate(5);
        return view('dashboard', compact('advices','mydays','tests'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = "Update Myday";
        $edit = Advice::findOrFail($id);
        return view('advice.edit', compact('edit', 'title'));
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
        $update = Advice::findOrFail($id);
        $update->title = $request->input('title');
        $update->detail = $request->input('detail');
 
        $result = $update->save();
        Session::flash('success', 'advice updated successfully');
        return redirect()->route('advice', ['userId' => $userId]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request,string $id)
    {
        $advice = Advice::findOrFail($id);

        if ($advice->user_id != Auth::id()) {
            abort(403); // ไม่อนุญาต
        }
        
        $userId = $advice->user_id; // เก็บ user_id ก่อนลบ
        $advice->delete();
  
        return redirect()->route('advice', ['userId' => $userId]);
    }
}
