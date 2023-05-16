<?php

namespace App\Http\Controllers;

use App\Models\Cases;
use App\Models\Lawyer;
use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        // $id = session()->get('id');
        // $views = Users::select('id', 'email', 'firstname')->where('id', '!=', $id)->get()->toArray();
        $views = Users::orderBy('updated_at', 'desc')->get();
        return view('admin.manage-users')->with('views', $views);
    }

    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            $user = Users::find($id);
            $user->delete();
            DB::commit();
        } catch(\Exception $e) {
            DB::rollback();
            return redirect('admin.manage-users')->with('error', 'Failed to delete user. please try again');
        }
        return redirect()->route('viewuser')->with('success', 'user delete sucessfully');
    }

    // public function document()
    // {
    //     return view('admin.document');
    // }
}
