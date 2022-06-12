@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Edit Account Information</h1>

            <form action="/save-edit-user" method="POST">
                <input type="hidden" name="id" value="{{ $user->getId() }}" />
                @csrf
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" value="{{ $user->getName() }}" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" value="{{ $user->getEmail() }}" required>
                </div>

                <div class="form-group">
                    <label>Role</label>
                    <select name="role" class="form-control">
                        <option value= 0>User</option>
                        <option value= 1>Admin</option>

                    </select>
                </div>
                <br><button type="submit" class="btn btn-primary">Save Changes</button>
                <a class="btn btn-danger" href="{{ url('user') }}">Cancel</a>

            </form>
        </div>
    </div>
</div>
@endsection