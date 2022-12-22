@extends('master')
@section('title')
    Edit Product
@endsection
@section('main')
    <!-- Manage Products Starts Here -->
    <section class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mb-4">
                        <!-- Product Edit Modal Starts Here -->
                        <button type="button" class="btn btn-success me-3 shadow-none" data-bs-toggle="modal" data-bs-target="#editModal">
                            Edit The Product
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="editModal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5 text-capitalize text-dark" id="exampleModalLabel">Edit Product</h1>
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
                                                    <label class="mb-2 text-dark fw-bold">Product Image</label>
                                                    <div>
                                                        <img src="assets/images/products/placeholderImage.jpg" alt="Product Image" id="image" class="rounded-2" style="width: 100%; height: 200px; object-fit: cover;">
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
                                                    <button type="submit" class="btn btn-dark text-uppercase">Update</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product Edit Modal Ends Here -->
                        <a href="{{ route('manage.product') }}" class="btn btn-primary">Go To Product Manage Page</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Manage Products Ends Here -->
@endsection
