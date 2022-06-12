<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use Exception;
use Session;
use Log;
use Auth;

class TransactionController extends Controller
{
    public function viewTransactions()
    {
            Log::info('Listing the Transactions');
            // SELECT * FROM transactions
            $transactions = Transaction::all();
            return view('transactions.transaction', compact('transactions'));
        }

    public function viewEditTransactionForm($id)
    {
        // SELECT * FROM suppliers WHERE id=$id
        $transaction = Transaction::find($id);
        if (!is_null($transaction)) {
            return view('transactions.edit-transaction', compact('transaction'));
        }
        Session::flash('error', 'We cannot find the record you are looking for.');
        return redirect()->back();
    }

    public function viewAddTransactionForm()
    {
        return view('transactions.add-transaction');
    }

    public function saveTransactionChanges(Request $request)
    {
        $validated = $request->validate([
            'customer_name' => 'required|max:300',
            'customer_payment_method' => 'required|max:300',
            'customer_number_of_items_purchased' => 'required|max:300',
            'customer_total' => 'required|max:300',
        ]);

        try {
            $id = $request->id;
            $transaction = Transaction::find($id);
            $transaction->update([
                'customer_name' => $request->customer_name,
                'customer_payment_method' => $request->customer_payment_method,
                'customer_number_of_items_purchased' => $request->customer_number_of_items_purchased,
                'customer_total' => $request->customer_total,
            ]);
            Session::flash('message', 'Successfully updated Supplier Information');
        } catch (Exception $e) {
            Session::flash('error', 'Something went wrong, please try again later');
        }
        
        return redirect('transaction');
    }

    public function saveNewTransaction(Request $request)
    {
        $validated = $request->validate([
            'customer_name' => 'required|max:300',
            'customer_number_of_items_purchased' => 'required|max:300',
            'customer_total' => 'required|max:300',
        ]);

        try {
            $trn = Transaction::create([
                'customer_name' => $request->customer_name,
                'customer_payment_method' => $request->customer_payment_method,
                'customer_number_of_items_purchased' => $request->customer_number_of_items_purchased,
                'customer_total' => $request->customer_total,
            ]);
            if (!is_null($trn)) {
                Session::flash('message', 'Successfully added a new transaction');
            } else {
                throw new Exception('Unable to create a new transaction');
            }
            
        } catch (Exception $e) {
            Session::flash('error', 'Something went wrong, please try again later');
        }

        return redirect('transaction');
    }

    public function deleteTransaction($id)
    {
        $transaction = Transaction::find($id);
        $transaction->delete();
        // DELETE FROM organizations WHERE id=$id

        Session::flash('message', 'Successfully removed a record');
        return redirect('transaction');
    }
}
