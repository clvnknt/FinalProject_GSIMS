<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use Exception;
use Session;
use Log;
use Auth;

class ItemController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function viewItems()
    {
        $user = Auth::user();

        if ($user->isAdmin()) {
            Log::info('Listing All Items');
            $items = Item::all();
            return view('items.item', compact('items'));
        } else {
            Session::flash('Error', 'Only ADMINS are allowed to view this page');
        }

        return redirect('/dashboard');

    }

    public function viewAddItemForm()
    {
        return view('items.add-item');
    }

    public function saveNewItem(Request $request)
    {
        $validated = $request->validate([
            'company_name' => 'required|max:300',
            'company_province' => 'required|max:300',
            'company_city' => 'required|max:300',
            'company_email' => 'required|max:300',
            'company_phone_number' => 'required|max:300'
        ]);

        try {
            $itm = Item::create([
                'company_name' => $request->company_name,
                'company_province' => $request->company_province,
                'company_city' => $request->company_city,
                'company_email' => $request->company_email,
                'company_phone_number' => $request->company_phone_number
            ]);
            if (!is_null($sup)) {
                Session::flash('message', 'Successfully added a new supplier');
            } else {
                throw new Exception('Unable to create a new supplier');
            }
            
        } catch (Exception $e) {
            Session::flash('error', 'Something went wrong, please try again later');
        }

        return redirect('supplier');
    }

    public function viewEditItemForm($id)
    {
        $item = Item::find($id);
        if (!is_null($supplier)) {
            return view('items.edit-item', compact('item'));
        }
        Session::flash('Error', 'We cannot find the record you are looking for.');
        return redirect()->back();
    }

    public function saveItemChanges(Request $request)
    {
        $validated = $request->validate([
            'company_name' => 'required|max:300',
            'company_province' => 'required|max:300',
            'company_city' => 'required|max:300',
            'company_email' => 'required|max:300',
            'company_phone_number' => 'required|max:300'
        ]);

        try {
            $id = $request->id;
            $item = Supplier::find($id);
            $item->update([
                'company_name' => $request->company_name,
                'company_province' => $request->company_province,
                'company_city' => $request->company_city,
                'company_email' => $request->company_email,
                'company_phone_number' => $request->company_phone_number
            ]);
            Session::flash('Successfully upated item information!');
        } catch (Exception $e) {
            Session::flash('Error', 'Unable to save changes, please try again.');
        }
        return redirect('items.item');
    }

    public function deleteItem($id)
    {
        $item = Item::find($id);
        $item->delete();
        Session::flash('Successfully removed an item!');
        return redirect('item');
    }
}
