<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datrastoco</title>
    <link rel="stylesheet" href="{{asset('bootstrap-5.0.2-dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('app.css')}}">
    <script src="{{asset('bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js')}}"></script>
</head>
<body>
    <div class="wrapper">
        <div class="banner"></div>
        <div class ="content-container">
            <div class = "datrastoco-nav">
                <nav class="navbar navbar-expand-lg navbar-light ">
                    <div class="container">
                        <div class="logo-container">
                            <a class="navbar-brand " href="/home"><b class = "logo">Datrastoco</b></a>
                        </div>
                        <div class="nav-container">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div  class="collapse navbar-collapse" id="navbarNavDropdown">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a id="nav-link"  class="nav-link active" aria-current="page" href="/home">Home</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a id="link-text" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Products
                                        </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <li><a class="dropdown-item" href="/add-product">Add product</a></li>
                                        <li><a class="dropdown-item" href="#">Sold products</a></li>
                                        <li><a class="dropdown-item" href="#">Stock</a></li>
                                    </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="container">
                <div class="body-container p-4">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</body>
</html>