@extends ('layout')

@section('content')
<div class="row">
    <div class="col-md-12 ">
        <div class="row border-bottom border-warning mb-3 ">
            <h3 class= "top-header">PRODUCTS</h3>
        </div>
        <div class="row">
            <table class="table table-info table-hover table-striped">
                <thead >
                    <tr >
                    <th scope="col" class="text-light bg-warning">#</th>
                    <th scope="col" class="text-light bg-warning">Product Name</th>
                    <th scope="col" class="text-light bg-warning">Product Company/th>
                    <th scope="col" class="text-light bg-warning">Product Quantity</th>
                    <th scope="col" class="text-light bg-warning">Total Number Of Product</th>
                    <th scope="col" class="text-light bg-warning">Price Per Product</th>
                    <th scope="col" class="text-light bg-warning">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if($products!=null)
                        @foreach($products as $product)
                            <tr>
                            <th scope="row">{{$product['id']}}</th>
                            <td>{{$product['product_name']}}</td>
                            <td>{{$product['product_company']}}</td>
                            <td>{{$product['product_quantity']}}</td>
                            <td>{{$product['total_number_of product']}}</td>
                            <td>{{$product['price_per_product']}}</td>
                            <td>
                                <a href="product/id?{{$product['id']}}" data-bs-toggle="modal" data-bs-target="#editModal" class="m-2" href="#"><svg  style ="color:orange" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg></a>
                                <a class="m-2" href="#"><svg style = "color:red" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a>
                            </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
        <div class="modal-header bg-warning">
            <h5 class="modal-title text-light" id="exampleModalLabel">Edit Product</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{route('products.store')}}" method="post">
                        @csrf
                        <div class="form-group ">
                            <input class="form-control border-warning rounded-pill" name="product_name" type="text" placeholder="Product Name">
                            <span style="color:red">
                                @error('product_name')
                                {{$message}}
                                @enderror
                            </span>
                        </div>
                        <div class="mt-2">
                            <div class="form-group ">
                                <input class="form-control border-warning rounded-pill" name="product_company" type="text" placeholder="Product Company">
                                <span style="color:red">
                                    @error('product_company')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="mt-2">
                            <div class="form-group">
                                <input class="form-control border-warning rounded-pill" name="product_quantity" type="text" placeholder="Product Quantity">
                                <span style="color:red">
                                    @error('product_quantity')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="mt-2">
                            <div class="form-group">
                                <input class="form-control border-warning rounded-pill" name="total_number_of_product" type="text" placeholder="Total Number Of Product">
                                <span style="color:red">
                                    @error('total_number_of_product')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="mt-2">
                            <div class="form-group">
                                <input class="form-control border-warning rounded-pill" name="price_per_product" type="text" placeholder="Price Per Product">
                                <span style="color:red">
                                    @error('price_per_product')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn border-warning rounded-pill text-dark" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-warning text-light rounded-pill">Save changes</button>
        </div>
        </div>
    </div>
    </div>
 </div>
@endsection