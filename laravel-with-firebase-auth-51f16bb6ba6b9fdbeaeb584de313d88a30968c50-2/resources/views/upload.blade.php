
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Kocaeli Üniversitesi Başuruları</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css'><link rel="stylesheet" href="./style.css">
<<link href="{{URL::asset('/css/style.css')}}"  rel=stylesheet>
<<link href="{{URL::asset('/css/table.css')}}"  rel=stylesheet>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<!-- partial:index.partial.html -->
<div class='dashboard'>
    <div class="dashboard-nav">
        <header><a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a><a href="{{URL::asset('images/logo.png')}}"
                                                                                   class="brand-logo"><i
                class="fas fa-graduation-cap"></i> <span>BAŞVURULAR</span></a></header>
        <nav class="dashboard-nav-list"><a href="#" class="dashboard-nav-item"><i class="fas fa-home"></i>
            AnaSayfa </a><a
                href="#" class="dashboard-nav-item active"><i class="fas fa-tachometer-alt"></i> Admin
        </a><a
                href="#" class="dashboard-nav-item"><i class="fas fa-file-upload"></i> Yüklemeler </a>
            <div class='dashboard-nav-dropdown'><a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i
                    class="fas fa-file-alt"></i> Başvurular </a>
                <div class='dashboard-nav-dropdown-menu'><a href="#"

                        href="yazokulu" class="dashboard-nav-dropdown-item">Yaz Okulu Başvurusu</a><a
                        href="capbasvuru" class="dashboard-nav-dropdown-item">ÇAP Başvurusu</a><a
                        href="dgs" class="dashboard-nav-dropdown-item">DGS Başvurusu</a><a
                        href="yataygecis" class="dashboard-nav-dropdown-item">Yatay Geçiş Başvurusu</a><a
                        href="dersintibak" class="dashboard-nav-dropdown-item">Ders İntibakı Başvurusu</a></div>
            </div>


            <a href="#" class="dashboard-nav-item"><i class="fas fa-cogs"></i> Settings </a><a
                    href="#" class="dashboard-nav-item"><i class="fas fa-user"></i> Profile </a>
          <div class="nav-item-divider"></div>
          <a
                    href="#" class="dashboard-nav-item"><i class="fas fa-sign-out-alt"></i> Logout </a>
        </nav>
    </div>
    <div class='dashboard-app'>
        <header class='dashboard-toolbar'><a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a></header>
        <div class='dashboard-content'>
            <div class='container'>
              <div class="row">
    <div class="col-12">
      <table class="table table-striped table-bordered">
        <thead>
          <tr>

            <th scope="col">Başvuru Türleri</th>


            <th scope="col">Yükle</th>
          </tr>
        </thead>
        <tbody>
          <tr>

            <td>Yaz Okulu Başvurusu</td>

            <td>
              <button type="button" class="btn btn-danger"><i class="far fa-folder"></i></button>

            </td>
          </tr>
          <tr>

            <td>Çap Başvurusu</td>

            <td>
              <button type="button" class="btn btn-danger"><i class="far fa-folder"></i></button>

            </td>
          </tr>
          <tr>

            <td>Ders İntibakı Başvurusu</td>

            <td>
              <button type="button" class="btn btn-danger"><i class="far fa-folder"></i></button>

            </td>
          </tr>
          <tr>

            <td>Dgs Başvurusu</td>

            <td>
              <button type="button" class="btn btn-danger"><i class="far fa-folder"></i></button>

            </td>
          </tr>
          <tr>

            <td>Ders İntibakı Başvurusu</td>

            <td>
              <button type="button" class="btn btn-danger"><i class="far fa-folder"></i></button>

            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
            </div>
        </div>
    </div>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script><script  src="./site.js"></script>
<script  src="{{ URL::asset('js/site.js') }}"></script>

</body>
</html>
