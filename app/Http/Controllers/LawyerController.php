<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lawyer;

class LawyerController extends Controller
{
    public function index()
    {
        $id = session()->get('id');
        $views = Lawyer::select('id', 'name', 'email', 'phone', 'address', 'description')->where('id', '!=', $id)->get()->toArray();
        return view('lawyers.index')->with('views', $views);
    }

    public function view(){
        return view('lawyers.index');
    }
    

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:lawyers',
            'phone' => 'required',
            'address' => 'required',
            'description' => 'required',
        ]);

        $lawyer = new Lawyer();
        $lawyer->name = $validatedData['name'];
        $lawyer->email = $validatedData['email'];
        $lawyer->phone = $validatedData['phone'];
        $lawyer->address = $validatedData['address'];
        $lawyer->description = $validatedData['description'];
        $lawyer->save();

        return redirect()->route('lawyers.index')->with('success', 'Lawyer created successfully.');
    }

    public function edit($id)
    {
        $lawyer = Lawyer::find($id);
        return view('lawyers.edit', compact('lawyer'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:lawyers,email,'.$id,
            'phone' => 'required',
            'address' => 'required',
            'description' => 'required',
        ]);

        $lawyer = Lawyer::find($id);
        $lawyer->name = $validatedData['name'];
        $lawyer->email = $validatedData['email'];
        $lawyer->phone = $validatedData['phone'];
        $lawyer->address = $validatedData['address'];
        $lawyer->description = $validatedData['description'];
        $lawyer->save();

        return redirect()->route('lawyers.index')->with('success', 'Lawyer updated successfully.');
    }

    public function destroy($id)
    {
        $Lawyer = Lawyer::find($id);

        if ($Lawyer) {
            $Lawyer->delete();

            return redirect()->route('users.index')->with('success', 'User has been deleted successfully');
        }

        return redirect()->route('users.index')->with('error', 'User not found');
    }
}
