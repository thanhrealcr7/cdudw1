@extends('layouts.site')
@section('title','Product_detail')
@section('content')
<div class="product-detail-container">
        <div class="product-detail-image">
            <img src="./assets/image/product-3.png" alt="Product Name">
        </div>
        <div class="product-info">
            <h1>Product Name</h1>
            <p class="product-description">This is where a detailed description of the product will go. It can elaborate on the product's features, the problems it solves, and any additional benefits.</p>
            <p class="product-price">$49.99</p>
            <div class="product-ratings">
                <span>★★★★☆</span> 
                <a href="#">Read all reviews</a>
            </div>
            <div class="product-actions">
                <button class="btn">Add to Cart</button>
                <button class="btn btn-primary">Buy Now</button>
            </div>
        </div>
    </div>
   

@endsection