@extends('master')
@section('title')
    All Products
@endsection
@section('header')
    @include('includes.header')
@endsection

@section('main')
    <!-- All Products Section Starts Here -->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-lg-6">
                    <form action="" method="">
                        <input type="text" name="" id="" class="form-control shadow-none border-dark border border-2"
                               placeholder="Search Here">
                    </form>
                </div>
            </div>
            <div class="row">
                <!-- All Products Starts Here -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-4">
                    <div class="card">
                        <img src="{{ asset('assets/images/products/01.jpg') }}" class="card-img-top" alt="Product Image">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <h5 class="card-title text-uppercase mb-0">sauvage</h5>
                                <h6 class="card-text">$10</h6>
                            </div>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                content.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-4">
                    <div class="card">
                        <img src="{{ asset('assets/images/products/01.jpg') }}" class="card-img-top" alt="Product Image">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <h5 class="card-title text-uppercase mb-0">sauvage</h5>
                                <h6 class="card-text">$10</h6>
                            </div>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                content.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-4">
                    <div class="card">
                        <img src="{{ asset('assets/images/products/01.jpg') }}" class="card-img-top" alt="Product Image">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <h5 class="card-title text-uppercase mb-0">sauvage</h5>
                                <h6 class="card-text">$10</h6>
                            </div>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                content.</p>
                        </div>
                    </div>
                </div>
                <!-- All Products Ends Here -->

                <!-- Pagination Starts Here -->
                <nav>
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <span class="page-link">Previous</span>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
                <!-- Pagination Ends Here -->
            </div>
        </div>
    </section>
    <!-- All Products Section Ends Here -->
@endsection
