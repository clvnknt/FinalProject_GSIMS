<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use Session;
use Log;
use Auth;

class InventoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function viewInventory()
    {
        $user = Auth::user();

        if ($user->isAdmin()) {
            Log::info('Listing All Items');
            $inventories = Inventory::all();
            return view('inventories.inventory', compact('inventories'));
        } else {
            Session::flash('Only Admins are allowed to access this page');
        }

        return redirect('/view-dashboard');
    }

    public function createNewItem()
    {
        return view('inventories.add-item');
    }
    
}
