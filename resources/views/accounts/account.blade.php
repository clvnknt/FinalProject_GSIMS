@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <h1>Accounts</h1><br>
            <table class="table" id="accounts-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $act)
                    <tr>
                        <td>{{ $act->getId() }}</td>
                        <td>{{ $act->getName() }}</td>
                        <td>{{ $act->getEmail() }}</td>
                        <td>{{ $act->getRole() }}</td>
                        <td>
                        </a>
                        <a href="/edit-account/{{ $act->getId() }}" class="btn btn-primary btn-sm">
                                Edit
                            </a>
                            <a onclick="return confirmDelete()" href="/delete-account/{{ $act->getId() }}" class="btn btn-danger btn-sm">
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
    $('#accounts-table').DataTable();
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