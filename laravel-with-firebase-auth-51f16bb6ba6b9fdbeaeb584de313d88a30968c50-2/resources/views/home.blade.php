<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Kocaeli Üniversitesi Başvuruları</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css'>
    <link rel="stylesheet" href="./style.css">
    <<link href="{{URL::asset('/css/style.css')}}" rel=stylesheet>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <!-- partial:index.partial.html -->
    <div class='dashboard'>
        <div class="dashboard-nav">
            <header>
                <a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a>
                <a href="{{URL::asset('images/logo.png')}}" class="brand-logo"><i class="fas fa-graduation-cap"></i> <span>BAŞVURULAR</span></a>
            </header>
            <nav class="dashboard-nav-list">
                <a href="anasayfa" class="dashboard-nav-item">
                    <i class="fas fa-home"></i>AnaSayfa 
                </a>
                    
                    
                    
                   <!-- <a href="upload" class="dashboard-nav-item"><i class="fas fa-file-upload"></i> Yüklemeler </a> -->

                   <div class='dashboard-nav-dropdown'><a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i class="fas fa-file-alt"></i> Yüklemeler </a>
                    <div class='dashboard-nav-dropdown-menu'>
                        <a href="yazokuluupload" class="dashboard-nav-dropdown-item">Yaz Okulu Başvuru Yükleme</a>
                        <a href="capupload" class="dashboard-nav-dropdown-item">ÇAP Başvurusu Yükleme</a>
                        <a href="dgsupload" class="dashboard-nav-dropdown-item">DGS Başvurusu Yükleme</a>
                        <a href="yatayupload" class="dashboard-nav-dropdown-item">Yatay Geçiş Başvurusu Yükleme</a>
                        <a href="dersintibakupload" class="dashboard-nav-dropdown-item">Ders İntibakı Başvurusu Yükleme</a>
                    </div>





                <div class='dashboard-nav-dropdown'><a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i class="fas fa-file-alt"></i> Başvurular </a>
                    <div class='dashboard-nav-dropdown-menu'><a href="yazokulu" class="dashboard-nav-dropdown-item">Yaz Okulu Başvurusu</a>
                        <a href="capbasvuru" class="dashboard-nav-dropdown-item">ÇAP Başvurusu</a>
                        <a href="/dgs" class="dashboard-nav-dropdown-item">DGS Başvurusu</a>
                        <a href="/yataygecis" class="dashboard-nav-dropdown-item">Yatay Geçiş Başvurusu</a>
                        <a href="/dersintibak" class="dashboard-nav-dropdown-item">Ders İntibakı Başvurusu</a>
                    </div>
                    <a href="#" class="dashboard-nav-item"><i class="fas fa-cogs"></i> Settings </a><a href="profil" class="dashboard-nav-item"><i class="fas fa-user"></i> Profile </a>
                    <div class="nav-item-divider"></div>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="{{ route('logout') }}" onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
            </nav>
        </div>
        <div class='dashboard-app'>
            <header class='dashboard-toolbar'><a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a></header>
            <div class='dashboard-content'>
                <div class='container'>
                    <div class='card'>
                        <div class='card-header'>
                        <h1> KOCAELİ ÜNİVERSİTESİ BAŞVURU SİSTEMİNE HOŞGELDİNİZ</h1>
                        </div>
                        <div class='card-body'>
                            <!-- deneme -->
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="https://static.daktilo.com/sites/814/uploads/2017/07/16/470-0.jpg" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="https://www.gundemsaglik.net/wp-content/uploads/2018/07/kocaeli-universitesi-188-sozlesmeli-personel-alacak.jpg" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="https://static.daktilo.com/sites/830/uploads/2020/08/29/30509-0.jpg" alt="Third slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <!-- deneme son -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="./site.js"></script>
    <script src="{{ URL::asset('js/site.js') }}"></script>

</body>

</html>