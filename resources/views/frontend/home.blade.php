@extends('layouts.site')
@section('title','Home')
@section('content')
<div class="slider-container">
        <div class="slide active">
            <img src="https://via.placeholder.com/1200x300/0000FF/808080?Text=Slide1" alt="Slide 1">
        </div>
        <div class="slide">
            <img src="https://via.placeholder.com/1200x300/FF0000/FFFFFF?Text=Slide2" alt="Slide 2">
        </div>
        <div class="slide">
            <img src="https://via.placeholder.com/1200x300/00FF00/000000?Text=Slide3" alt="Slide 3">
        </div>
        <a class="prev" onclick="moveSlide(-1)">&#10094;</a>
        <a class="next" onclick="moveSlide(1)">&#10095;</a>
    </div>

    <script src="./assets/cript.js"></script>

    <!-- Products New -->
    <div class="product-section">
        <h2 class="product-heading">Product New</h2>
        <div class="product-container">
            <div class="product-item">
                <img src="./assets/image/product-1.png" alt="Product 1">
                <h3>Product 1</h3>
                <p>$29.99</p>
            </div>
            <div class="product-item">
                <img src="./assets/image/product-2.png" alt="Product 2">
                <h3>Product 2</h3>
                <p>$39.99</p>
            </div>
            <div class="product-item">
                <img src="./assets/image/product-3.png" alt="Product 3">
                <h3>Product 3</h3>
                <p>$39.99</p>
            </div>
            <div class="product-item">
                <img src="./assets/image/product-4.png" alt="Product 4">
                <h3>Product 4</h3>
                <p>$39.99</p>
            </div>
        </div>
    </div>
    <!-- Products New -->

<!-- Products Sale -->
<div class="product-section">
    <h2 class="product-heading">Product Sale</h2>
    <div class="product-container">
        <div class="product-item">
            <img src="./assets/image/product-1.png" alt="Product 1">
            <h3>Product 1</h3>
            <p>$29.99</p>
        </div>
        <div class="product-item">
            <img src="./assets/image/product-2.png" alt="Product 2">
            <h3>Product 2</h3>
            <p>$39.99</p>
        </div>
        <div class="product-item">
            <img src="./assets/image/product-3.png" alt="Product 3">
            <h3>Product 3</h3>
            <p>$39.99</p>
        </div>
        <div class="product-item">
            <img src="./assets/image/product-4.png" alt="Product 4">
            <h3>Product 4</h3>
            <p>$39.99</p>
        </div>
    </div>
</div>
<!-- Products Sale -->
<!-- Post New -->
<div class="post-new-container">
    <h2>Create New Post</h2>
    <form action="#" method="post" class="post-form">
        <div class="form-group">
            <label for="postTitle">Title</label>
            <input type="text" id="postTitle" name="title" placeholder="Enter post title">
        </div>
        <div class="form-group">
            <label for="postDescription">Description</label>
            <textarea id="postDescription" name="description" placeholder="Enter post description"></textarea>
        </div>
        <div class="form-group">
            <label for="postImage">Upload Image</label>
            <input type="file" id="postImage" name="image">
        </div>
        <button type="submit" class="submit-btn">Submit Post</button>
    </form>
</div>
<!-- Post New -->
@endsection