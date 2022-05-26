@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <h1>Transactions</h1><br>
            @if (Session::has('message'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('message') }}
            </div>
            @endif
            @if (Session::has('error'))
            <div class="alert alert-danger" role="alert">
                {{ Session::get('error') }}
            </div>
            @endif

            <div>
                <a class="btn btn-sm btn-primary" href="/add-transaction-form">
                    Add New Transaction
                </a>
            </div><br>

            <table class="table" id="transactions-table">
                <thead>
                    <tr>
                        <th>Transaction ID</th>
                        <th>Customer Name</th>
                        <th>Number of Items Purchased</th>
                        <th>Total</th>
                        <th>Payment Method</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transactions as $trn)
                    <tr>
                        <td>{{ $trn->getId() }}</td>
                        <td>{{ $trn->getCustomerName() }}</td>
                        <td>{{ $trn->getCustomerNumberOfItemsPurchased() }}</td>
                        <td>{{ $trn->getCustomerTotal() }}</td>
                        <td>{{ $trn->getCustomerPaymentMethod() }}</td>
                        <td>
                            <a href="/edit-transaction/{{ $trn->getId() }}" class="btn btn-primary btn-sm">
                                Edit
                            </a>
                            <a onclick="return confirmDelete()" href="/delete-transaction/{{ $trn->getId() }}" class="btn btn-danger btn-sm">
                                Delete
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    $(document).ready( function () {
    $('#transactions-table').DataTable();
} );
$(document).ready( function () {
    $('#transactions-table').DataTable();
} );
function confirmDelete() {
    var answer = confirm('Are you sure you want to delete this record? this is not reversible');
    if (answer == true) {
        return true;
    }
    return false;
}
</script>

@endsection