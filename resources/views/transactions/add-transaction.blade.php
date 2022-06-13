@extends('layouts.master')

@section('content')
<link href="{{ asset('assets/css/addwall.css') }}" rel="stylesheet">
<div class="container">
<div class="p-3 mb-2 bg-white text-dark">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Add a New Transaction</h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="/save-new-transaction" method="POST">
                @csrf
                <div class="form-group">
                    <label>Customer Name</label>
                    <input type="text" class="form-control" name="customer_name">
                </div>
                <div class="form-group">
                    <label>Number of Items Purchased</label>
                    <input type="text" class="form-control" name="customer_number_of_items_purchased">
                </div>
                <div class="form-group">
                    <label>Total</label>
                    <input type="text" class="form-control" name="customer_total">
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