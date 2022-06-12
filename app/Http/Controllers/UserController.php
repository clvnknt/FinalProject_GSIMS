<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Exception;
use Session;
use Log;
use Auth;


class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::all();
        return view('user',compact('users'));
    }

    public function viewEditUserForm($id)
    {
        $user = User::find($id);
        if (!is_null($user)) {
            return view('edit-user', compact('user'));
        }
        Session::flash('error', 'We cannot find the record you are looking for.');
        return redirect()->back();
    }

    public function saveUserChanges(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:300',
            'email' => 'required|max:300',
            'role' => 'required|max:300',
        ]);

        try {
            $id = $request->id;
            $user = User::find($id);

            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'role' => $request->role,
            ]);
            Session::flash('message', 'Successfully updated User Information');
        } catch (Exception $e) {
            Session::flash('error', 'Something went wrong, please try again later');
        }
        
        return redirect('user');
    }

    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();
        Session::flash('message', 'Successfully removed a record');
        return redirect('user');
    }
}
