@extends('layouts.master')

@section('content')
<link href="{{ asset('assets/css/addwall.css') }}" rel="stylesheet">
<div class="container">
<div class="p-3 mb-2 bg-white text-dark">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Add a New Supplier</h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="/save-new-supplier" method="POST">
                @csrf
                <div class="form-group">
                    <label>Company Name</label>
                    <input type="text" class="form-control" name="company_name">
                </div>
                <div class="form-group">
                    <label>Company Province</label>
                    <input type="text" class="form-control" name="company_province">
                </div>
                <div class="form-group">
                    <label>Company City</label>
                    <input type="text" class="form-control" name="company_city">
                </div>
                <div class="form-group">
                    <label>Company Email</label>
                    <input type="text" class="form-control" name="company_email">
                </div>
                <div class="form-group">
                    <label>Company Phone Number</label>
                    <input type="text" class="form-control" name="company_phone_number">
                </div>
                <br><button type="submit" class="btn btn-primary">Save Changes</button>
                <a class="btn btn-danger" href="{{ url('supplier') }}">Cancel</a>
            </form>
        </div>
    </div>
</div>
</div>
@endsection