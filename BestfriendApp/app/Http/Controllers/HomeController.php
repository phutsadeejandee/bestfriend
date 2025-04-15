<?php


namespace App\Http\Controllers;
use App\Models\Advice;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $advices = Advice::paginate(10);
        return view('welcome', compact('advices'));
    }
    public function show($id)
    {
        $advice = Advice::findOrFail($id);
        return view('show', compact('advice'));
    }
    
}
