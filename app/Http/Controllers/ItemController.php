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
    public function viewItems()
    {
            Log::info('Listing the Items');
            // SELECT * FROM transactions
            $items = Item::all();
            return view('items.item', compact('items'));
        }

    public function viewEditItemForm($id)
    {
        // SELECT * FROM suppliers WHERE id=$id
        $item = Item::find($id);
        if (!is_null($item)) {
            return view('items.edit-item', compact('item'));
        }
        Session::flash('error', 'We cannot find the record you are looking for.');
        return redirect()->back();
    }

    public function viewAddItemForm()
    {
        return view('items.add-item');
    }

    public function saveTransactionChanges(Request $request)
    {
        $validated = $request->validate([
            'item_name' => 'required|max:300',
            'item_company' => 'required|max:300',
            'item_quantity' => 'required|max:300',
        ]);

        try {
            $id = $request->id;
            $item = Item::find($id);
            // UPDATE organizations SET
            // name=$request->name,
            // type=$request->type,
            // contact_number=$request->contact_number,
            // address=$request->address,
            // website_url=$request->website_url
            // WHERE id=$request->id
            $item->update([
                'item_name' => $request->item_name,
                'item_company' => $request->item_company,
                'console_type' => $request->console_type,
                'item_quantity' => $request->item_quantity,
            ]);
            // $organization->setName($request->name);
            // $organization->setAddress($request->address);
            // $organization->setContactNumber($request->contact_number);
            // $organization->setType($request->type);
            // $organization->setWebsiteURL($request->website_url);

            Session::flash('message', 'Successfully updated Item Information');
        } catch (Exception $e) {
            Session::flash('error', 'Something went wrong, please try again later');
        }
        
        return redirect('item');
    }

    public function saveNewItem(Request $request)
    {
        $validated = $request->validate([
            'item_name' => 'required|max:300',
            'item_company' => 'required|max:300',
            'item_quantity' => 'required|max:300',
        ]);

        try {
            $itm = Item::create([
                'item_name' => $request->item_name,
                'item_company' => $request->item_company,
                'console_type' => $request->console_type,
                'item_quantity' => $request->item_quantity,
            ]);
            if (!is_null($itm)) {
                Session::flash('message', 'Successfully added a new item');
            } else {
                throw new Exception('Unable to create a new item');
            }
            
        } catch (Exception $e) {
            Session::flash('error', 'Something went wrong, please try again later');
        }

        return redirect('item');
    }

    public function deleteItem($id)
    {
        $item = Item::find($id);
        $item->delete();
        // DELETE FROM organizations WHERE id=$id

        Session::flash('message', 'Successfully removed a record');
        return redirect('item');
    }
}
