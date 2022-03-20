@extends('layout')
@section('title', 'Add Product')
@section('content')
<div class="row">
    <div class="col-md-12">
    <div class="row border-bottom border-warning mb-3 ">
            <h3 class= "top-header">ADD PRODUCTS</h3>
        </div>
        <form action="{{route('products.store')}}" method="post">
            @csrf
            <div class="form-group ">
                <input class="form-control" name="product_name" type="text" placeholder="Product Name">
                <span style="color:red">
                    @error('product_name')
                    {{$message}}
                    @enderror
                </span>
            </div>
            <div class="mt-2">
                <div class="form-group ">
                    <input class="form-control" name="product_company" type="text" placeholder="Product Company">
                    <span style="color:red">
                        @error('product_company')
                        {{$message}}
                        @enderror
                    </span>
                </div>
            </div>
            <div class="mt-2">
                <div class="form-group">
                    <input class="form-control" name="product_quantity" type="text" placeholder="Product Quantity">
                    <span style="color:red">
                        @error('product_quantity')
                        {{$message}}
                        @enderror
                    </span>
                </div>
            </div>
            <div class="mt-2">
                <div class="form-group">
                    <input class="form-control" name="total_number_of_product" type="text" placeholder="Total Number Of Product">
                    <span style="color:red">
                        @error('total_number_of_product')
                        {{$message}}
                        @enderror
                    </span>
                </div>
            </div>
            <div class="mt-2">
                <div class="form-group">
                    <input class="form-control" name="price_per_product" type="text" placeholder="Price Per Product">
                    <span style="color:red">
                        @error('price_per_product')
                        {{$message}}
                        @enderror
                    </span>
                </div>
            </div>
            <div class="form-group mt-2">
                <input type="submit" class="btn btn-warning text-light" value="submit">
            </div>
        </form>
    </div>
</div>
@endsection