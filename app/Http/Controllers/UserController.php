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
        // SELECT * FROM suppliers WHERE id=$id
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
            // UPDATE organizations SET
            // name=$request->name,
            // type=$request->type,
            // contact_number=$request->contact_number,
            // address=$request->address,
            // website_url=$request->website_url
            // WHERE id=$request->id
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'role' => $request->role,
            ]);
            // $organization->setName($request->name);
            // $organization->setAddress($request->address);
            // $organization->setContactNumber($request->contact_number);
            // $organization->setType($request->type);
            // $organization->setWebsiteURL($request->website_url);

            Session::flash('message', 'Successfully updated Supplier Information');
        } catch (Exception $e) {
            Session::flash('error', 'Something went wrong, please try again later');
        }
        
        return redirect('user');
    }


    public function profileUpdate(Request $request){
        //validation rules

        $request->validate([
            'name' =>'required|min:4|string|max:255',
            'email'=>'required|email|string|max:255'
        ]);
        $user =Auth::user();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->save();
        return back()->with('message','Profile Updated');
    }

    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();
        // DELETE FROM organizations WHERE id=$id

        Session::flash('message', 'Successfully removed a record');
        return redirect('transaction');
    }
}
