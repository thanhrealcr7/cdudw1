<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>

<body>
    <header class="bg-white py-2">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="index.html">
                        <img src="./assets/image/logo.jpg" class="img-fluid logo" alt="Company Logo">
                    </a>
                </div>
                <div class="col-md-6">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link">Product</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Register</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Contact</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" tabindex="-1" aria-disabled="true">Login</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="col-md-3 d-flex justify-content-end">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-search"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-user"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="far fa-heart"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>
    

<footer class="bg-dark text-white pt-4">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h5>Contact Information</h5>
                <p><i class="fas fa-map-marker-alt"></i> Address: Gao Giong - Cao Lanh - Dong Thap</p>
                <p><i class="fas fa-phone"></i> Phone: 0865138321</p>
                <p><i class="fas fa-envelope"></i> Email: thanhjp0108@gmail.com</p>
            </div>
            <div class="col-md-4">
                <h5>Policies</h5>
                <ul class="list-unstyled">
                    <li><i class="fas fa-user-circle"></i> Membership Policy</li>
                    <li><i class="fas fa-money-bill-wave"></i> Payment Policy</li>
                    <li><i class="fas fa-exchange-alt"></i> Product Exchange Policy</li>
                    <li><i class="fas fa-shield-alt"></i> Privacy Policy</li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5>Guides</h5>
                <ul class="list-unstyled">
                    <li><i class="fas fa-undo"></i> Return & Exchange Guide</li>
                    <li><i class="fas fa-credit-card"></i> Payment Guide</li>
                    <li><i class="fas fa-users"></i> Affiliate Program</li>
                    <li><i class="fas fa-question-circle"></i> FAQ</li>
                    <li><i class="fas fa-search"></i> Search</li>
                    <li><i class="fas fa-address-card"></i> Contact</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; Product by Vo Minh Thanh.</p>
    </div>
</footer>


</body>
</html>
