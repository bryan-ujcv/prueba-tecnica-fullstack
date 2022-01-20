<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="//ssl.gstatic.com/gnews/logo/google_news_512.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Google News</title>
   <style>
       .div_centrado{
           margin: 0 auto;
       }
   </style>
</head>

<body>
    <nav class="navbar sticky-top navbar-light bg-light border-bottom">
        <div class="d-flex justify-content-start align-items-center">
            <a class="btn btn-light" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span><i class="fas fa-bars fa-lg"></i></span>
            </a>
            <a class="navbar-brand" href="{{ route('noticias') }}"><img src="https://upload.wikimedia.org/wikipedia/commons/3/33/Google_News.png" height="40" width="110"></a>
            
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="https://news.google.com/topstories?hl=es-419&gl=US&ceid=US:es-419"><i class="fas fa-globe"></i> Noticias Destacadas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://news.google.com/foryou?hl=es-419&gl=US&ceid=US%3Aes-419"><i class="fas fa-dice-d6"></i> Para Ti</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://news.google.com/my/library?hl=es-419&gl=US&ceid=US%3Aes-419"><i class="far fa-star"></i> Siguiendo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://news.google.com/my/searches?hl=es-419&gl=US&ceid=US%3Aes-419"><i class="fas fa-search"></i> Busquedas Guardadas</a>
                        </li>
                        <div class="dropdown-divider"></div>
                        <li class="nav-item">
                            <a class="nav-link" href="https://play.google.com/store/apps/details?id=com.google.android.apps.magazines&referrer=news.google.com?utm_source=web&utm_medium=menu&utm_campaign=side_menu_promotion">Descarga la App para Android <i class="fas fa-external-link-alt"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://apps.apple.com/us/app/apple-store/id459182288?l=es-419">Descarga la App para IOS <i class="fas fa-external-link-alt"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://support.google.com/googlenews?p=web&hl=es-419&authuser=0#topic=7688381">Ayuda <i class="fas fa-external-link-alt"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>   
        <div class="d-flex  align-items-center">
            <div class="container">
                <div class="row" >
                    <div class="col-md-23">
                        <input class="form-control " type="text" placeholder='Buscar' aria-label="Search" >
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end align-items-center">
            <a href="#" class="btn btn-light"><i class="fas fa-th"></i></a>
        <a class="btn btn-light" href="{{route('agregar')}}"><i class="fas fa-plus-circle fa-lg"></i></a>
        </div>
        
    </nav>

    @yield('content')

</body>

</html>