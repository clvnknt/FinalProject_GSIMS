@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <h1>Suppliers</h1><br>
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
                <a class="btn btn-sm btn-primary" href="add-supplier-form">
                    Add New Supplier
                </a>
            </div>

            <table class="table" id="suppliers-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Company Name</th>
                        <th>Province</th>
                        <th>City</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($suppliers as $sup)
                    <tr>
                        <td>{{ $sup->getId() }}</td>
                        <td>{{ $sup->getCompanyName() }}</td>
                        <td>{{ $sup->getCompanyProvince() }}</td>
                        <td>{{ $sup->getCompanyCity() }}</td>
                        <td>{{ $sup->getCompanyEmail() }}</td>
                        <td>{{ $sup->getCompanyPhoneNumber() }}</td>
                        <td>
                            <a href="/edit-supplier/{{ $sup->getId() }}" class="btn btn-primary btn-sm">
                                Edit
                            </a>
                            <a onclick="return confirmDelete()" href="/delete-supplier/{{ $sup->getId() }}" class="btn btn-danger btn-sm">
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
    $('#suppliers-table').DataTable();
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