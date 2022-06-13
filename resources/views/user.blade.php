@extends('layouts.master')

@section('content')
<link href="{{ asset('assets/css/accwall.css') }}" rel="stylesheet">
<div class="container">
<div class="p-3 mb-2 bg-white text-dark">
<div class="row justify-content-center">
        <div class="col-md-20">
        <h1>Accounts</h1><br>
  @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach($errors->all() as $error)
      <li>
        {{$error}}
      </li>
      @endforeach
    </ul>
   </div>
  @endif
  @if(session()->get('message'))
  <div class="alert alert-success" role="alert">
    <strong>Success: </strong>{{session()->get('message')}}
  </div>
  @endif
    
<div class="row">
  <div class="col-md-8 offset-2">
    <table class="table table-responsive">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Role</th>
          <th scope="col">Created At</th>
          <th scope="col">Updated At</th>
          <th scope="col">Edit</th>
          <th scope="col">Delete</th>
        </tr>
      </thead>
      <tbody>

      @if (count($users)!= 0)
        @foreach ($users as $user)
        <tr>
          <th scope="row">{{ $user->id }}</th>
          <td>{{ $user->name }}</td>
          <td>{{ $user->email }}</td>
          <td>{{ $user->is_admin }}</td>
          <td>{{ $user->created_at }}</td>
          <td>{{ $user->updated_at }}</td>
          <td><a href="/edit-user/{{ $user->getId() }}" class="btn btn-primary btn-sm">Edit</a></td>
          <td><a onclick="return confirmDelete()" href="/delete-user/{{ $user->getId() }}" class="btn btn-danger btn-sm">Delete</a></td>
        </tr>
        @endforeach
      @endif
        
      </tbody>
    </table>
  </div>
  </div>
</div>

<script>
    $(document).ready( function () {
    $('#users-table').DataTable();
} );
$(document).ready( function () {
    $('#users-table').DataTable();
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