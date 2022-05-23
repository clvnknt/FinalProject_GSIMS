<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;

class AccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function viewAccounts()
    {
        $user = Auth::user();

        if ($user->isAdmin()) {
            Log::info('Listing All Accounts');
            $user = User::all();
            return view('accounts.account', compact('accounts'));
        } else {
            Session::flash('Error', 'only admins are allowed to open this page');
        }

        return redirect('/dasboard');

    }
}
