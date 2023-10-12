@extends('app')


@section('title', 'Create')


@section('content')
    <form action="">
        <div class="mb-3">
            <label for="" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" placeholder="" autocomplete="off">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Price</label>
            <input type="number" name="price" class="form-control" placeholder="" autocomplete="off">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Qty</label>
            <input type="number" name="qty" class="form-control" placeholder="" autocomplete="off">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Status</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="status" id="">
                <label class="form-check-label" for="">
                    True
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="status" id="" checked>
                <label class="form-check-label" for="">
                    False
                </label>
            </div>
        </div>

        <button class="btn btn-primary" type="submit">Save</button>
    </form>


@endsection
