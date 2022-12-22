@extends('master')
@section('title')
    Manage Products
@endsection
@section('main')
    <!-- Manage Products Starts Here -->
    <section class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mb-4">
                        <!-- Product Add Modal Starts Here -->
                        <button type="button" class="btn btn-success me-3 shadow-none" data-bs-toggle="modal" data-bs-target="#addModal">
                            Add Product
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="addModal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5 text-capitalize text-dark" id="exampleModalLabel">Add A New Product</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="" method="">
                                            <div class="row align-items-center">
                                                <div class="col-lg-6 mb-4">
                                                    <label for="name" class="mb-2 text-dark fw-bold">Product Name</label>
                                                    <input type="text" name="" id="name" class="form-control shadow-none border border-dark border-2" placeholder="Enter The Product Name" required>
                                                </div>
                                                <div class="col-lg-6 mb-4">
                                                    <label for="price" class="mb-2 text-dark fw-bold">Product Price</label>
                                                    <input type="number" name="" id="price" class="form-control shadow-none border border-dark border-2" placeholder="Enter The Product Price" required>
                                                </div>
                                                <div class="col-lg-6 mb-4">
                                                    <label class="mb-2 text-dark fw-bold">Product Image Preview</label>
                                                    <div>
                                                        <img src="{{ asset('assets/images/products/placeholderImage.jpg') }}" alt="Product Image" id="image" class="rounded-2" style="width: 100%; height: 200px; object-fit: cover;">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mb-4">
                                                    <label class="mb-2 text-dark fw-bold">Choose Product Image</label>
                                                    <input type="file" name="" id="fileInput" class="form-control shadow-none border border-dark border-2" required>
                                                </div>
                                                <div class="col-lg-12 mb-3">
                                                    <label class="mb-2 text-dark fw-bold" for="shortDescription">Short Description</label>
                                                    <textarea name="" id="" class="form-control shadow-none border border-dark border-2" placeholder="Enter The Short Description of This Product" required></textarea>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="mb-2 text-dark fw-bold">Product Status</label>
                                                    <div class="d-flex align-items-center">
                                                        <div class="form-check">
                                                            <input class="form-check-input shadow-none border-1 border-primary border" type="radio" name="status" id="activate" checked>
                                                            <label class="form-check-label" for="activate">
                                                                Activate
                                                            </label>
                                                        </div>
                                                        <div class="form-check ms-2">
                                                            <input class="form-check-input shadow-none border-1 border-primary border" type="radio" name="status" id="deactivate">
                                                            <label class="form-check-label" for="deactivate">
                                                                Deactivate
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 offset-1">
                                                    <button type="submit" class="btn btn-dark text-uppercase">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product Add Modal Ends Here -->
                        <a href="{{ route('home') }}" class="btn btn-primary">Go To Home Page</a>
                    </div>
                    <!-- Product Data Table Starts Here -->
                    <table id="dataTable" class="table table-striped" style="width:100%">
                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Short Description</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>01</td>
                            <td class="text-uppercase">sauvage</td>
                            <td>$10</td>
                            <td>
                                <img src="{{asset('assets/images/products/01.jpg')}}" class="card-img-top rounded rounded-2" alt="Product Image" style="height: 60px; width: 60px; object-fit: cover;">
                            </td>
                            <td class="text-capitalize">active</td>
                            <td>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, maxime!
                            </td>
                            <td>
                                <a href="{{ route('edit.product') }}" class="text-success fs-5 me-2">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <a href="" class="text-danger fs-5">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <!-- Product Data Table Ends Here -->
                </div>
            </div>
        </div>
    </section>
    <!-- Manage Products Ends Here -->
@endsection
