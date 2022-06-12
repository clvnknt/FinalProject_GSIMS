@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-20">
        <h1>Inventory</h1><br>
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
                <a class="btn btn-sm btn-primary" href="/add-item-form">Add New Item</a>
            </div><br>

            <table class="table" id="items-table">
                <thead>
                    <tr>
                        <th>Item ID</th>
                        <th>Item Name</th>
                        <th>Item Company</th>
                        <th>Console Type</th>
                        <th>Item Quantity</th>
                        <th>Price</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $itm)
                    <tr>
                        <td>{{ $itm->getId() }}</td>
                        <td>{{ $itm->getItemName() }}</td>
                        <td>{{ $itm->getItemCompany() }}</td>
                        <td>{{ $itm->getConsoleType() }}</td>
                        <td>{{ $itm->getItemQuantity() }}</td>
                        <td>{{ $itm->getPrice() }}</td>
                        <td>
                        @if (Auth::user()->is_admin == 1)
                            <a href="/edit-item/{{ $itm->getId() }}" class="btn btn-primary btn-sm">
                                Edit
                            </a>
                            <a onclick="return confirmDelete()" href="/delete-item/{{ $itm->getId() }}" class="btn btn-danger btn-sm">
                                Delete
                            </a>
                             @endif
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
    $('#items-table').DataTable();
} );
$(document).ready( function () {
    $('#items-table').DataTable();
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