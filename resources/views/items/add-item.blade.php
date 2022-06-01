@extends('layouts.app')

@section('content')
<div class="container">
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
            <form action="/save-new-item" method="POST">
                @csrf
                <div class="form-group">
                    <label>Item Name</label>
                    <input type="text" class="form-control" name="item_name">
                </div>
                <div class="form-group">
                    <label>Item Company</label>
                    <input type="text" class="form-control" name="item_company">
                </div>
                <div class="form-group">
                    <label>Console Type</label>
                    <select name="console_type" class="form-control">
                        <option value="nintendo_switch">Nintendo Switch</option>
                        <option value="ps4">PS4</option>
                        <option value="ps5">PS5</option>
                        <option value="xbox">Xbox</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Item Quantity</label>
                    <input type="text" class="form-control" name="item_quantity">
                </div>
                <br><button type="submit" class="btn btn-primary">Save Changes</button>
                <a class="btn btn-danger" href="{{ url('item') }}">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection