@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Edit Supplier Record</h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="/save-edit-supplier" method="POST">
                <input type="hidden" name="id" value="{{ $supplier->getId() }}" />
                @csrf
                <div class="form-group">
                    <label>Company Name</label>
                    <input type="text" class="form-control" name="company_name" value="{{ $supplier->getCompanyName() }}" required>
                </div>
                <div class="form-group">
                    <label>Company Province</label>
                    <input type="text" class="form-control" name="company_province" value="{{ $supplier->getCompanyProvince() }}" required>
                </div>
                <div class="form-group">
                    <label>Company City</label>
                    <input type="text" class="form-control" name="company_city" value="{{ $supplier->getCompanyCity() }}" required>
                </div>
                <div class="form-group">
                    <label>Company Email</label>
                    <input type="text" class="form-control" name="company_email" value="{{ $supplier->getCompanyEmail() }}" required>
                </div>
                <div class="form-group">
                    <label>Phone Number</label>
                    <input type="text" class="form-control" name="company_phone_number" value="{{ $supplier->getCompanyPhoneNumber() }}" required>
                </div>
                <br><button type="submit" class="btn btn-primary">Save Changes</button>

                <a class="btn btn-danger" href="{{ url('supplier') }}">Cancel</a>

            </form>
        </div>
    </div>
</div>
@endsection
