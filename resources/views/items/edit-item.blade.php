@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Edit Item Record</h1>

            <form action="/save-edit-item" method="POST">
                <input type="hidden" name="id" value="{{ $item->getId() }}" />
                @csrf
                <div class="form-group">
                    <label>Item Name</label>
                    <input type="text" class="form-control" name="item_name" value="{{ $item->getItemName() }}" required>
                </div>
                <div class="form-group">
                    <label>item Company</label>
                    <input type="text" class="form-control" name="item_company" value="{{ $item->getItemCompany() }}" required>
                </div>
                <div class="form-group">
                    <label>Console Type</label>
                    <select name="console_type" class="form-control">
                        <option value="nintendo_switch">Nintendo Switch</option>
                        <option value="ps4">PS4</option>
                        <option value="ps5">PS5</option>
                        <option value="xbox">Xbox</option>
                    </select>
                    <div class="form-group">
                    <label>Item Quantity</label>
                    <input type="text" class="form-control" name="item_quantity" value="{{ $item->getItemQuantity() }}" required>
                </div>
                <br><button type="submit" class="btn btn-primary">Save Changes</button>
                <a class="btn btn-danger" href="{{ url('item') }}">Cancel</a>

            </form>
        </div>
    </div>
</div>
@endsection
