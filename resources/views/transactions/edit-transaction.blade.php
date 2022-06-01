@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Edit Transaction Record</h1>

            <form action="/save-edit-transaction" method="POST">
                <input type="hidden" name="id" value="{{ $transaction->getId() }}" />
                @csrf
                <div class="form-group">
                    <label>Customer Name</label>
                    <input type="text" class="form-control" name="customer_name" value="{{ $transaction->getCustomerName() }}" required>
                </div>
                <div class="form-group">
                    <label>Number of Items Purchased</label>
                    <input type="text" class="form-control" name="customer_number_of_items_purchased" value="{{ $transaction->getCustomerNumberOfItemsPurchased() }}" required>
                </div>
                <div class="form-group">
                    <label>Total</label>
                    <input type="text" class="form-control" name="customer_total" value="{{ $transaction->getCustomerTotal() }}" required>
                </div>
                <div class="form-group">
                    <label>Payment Method</label>
                    <select name="customer_payment_method" class="form-control">
                        <option value="cash">Cash</option>
                        <option value="credit_card">Credit Card</option>
                        <option value="debit_card">Debit Card</option>
                        <option value="virtual_wallet">Virtual Wallet</option>
                    </select>
                </div>
                <br><button type="submit" class="btn btn-primary">Save Changes</button>
                <a class="btn btn-danger" href="{{ url('transaction') }}">Cancel</a>

            </form>
        </div>
    </div>
</div>
@endsection
