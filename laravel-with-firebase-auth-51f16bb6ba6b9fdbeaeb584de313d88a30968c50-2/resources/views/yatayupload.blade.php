<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Kocaeli Üniversitesi Başuruları</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css'>
  <link rel="stylesheet" href="./style.css">
  <<link href="{{URL::asset('/css/style.css')}}" rel=stylesheet>
    <<link href="{{URL::asset('/css/table.css')}}" rel=stylesheet>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>

  <!-- partial:index.partial.html -->
  <div class='dashboard'>
    <div class="dashboard-nav">
      <header><a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a><a href="{{URL::asset('images/logo.png')}}" class="brand-logo"><i class="fas fa-graduation-cap"></i> <span>BAŞVURULAR</span></a></header>
      <nav class="dashboard-nav-list"><a href="anasayfa" class="dashboard-nav-item"><i class="fas fa-home"></i>
          AnaSayfa </a><div class='dashboard-nav-dropdown'><a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i class="fas fa-file-alt"></i> Yüklemeler </a>
                    <div class='dashboard-nav-dropdown-menu'>
                        <a href="yazokuluupload" class="dashboard-nav-dropdown-item">Yaz Okulu Başvuru Yükleme</a>
                        <a href="capupload" class="dashboard-nav-dropdown-item">ÇAP Başvurusu Yükleme</a>
                        <a href="dgsupload" class="dashboard-nav-dropdown-item">DGS Başvurusu Yükleme</a>
                        <a href="yatayupload" class="dashboard-nav-dropdown-item">Yatay Geçiş Başvurusu Yükleme</a>
                        <a href="dersintibakupload" class="dashboard-nav-dropdown-item">Ders İntibakı Başvurusu Yükleme</a>
                    </div>
        <div class='dashboard-nav-dropdown'><a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i class="fas fa-file-alt"></i> Başvurular </a>
          <div class='dashboard-nav-dropdown-menu'><a href="yazokulu" class="dashboard-nav-dropdown-item">Yaz Okulu Başvurusu</a><a href="capbasvuru" class="dashboard-nav-dropdown-item">ÇAP Başvurusu</a><a href="/dgs" class="dashboard-nav-dropdown-item">DGS Başvurusu</a><a href="/yataygecis" class="dashboard-nav-dropdown-item">Yatay Geçiş Başvurusu</a><a href="/dersintibak" class="dashboard-nav-dropdown-item">Ders İntibakı Başvurusu</a></div>
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
          <div class="row">
            <div class="col-12">
              <table class="table table-striped table-bordered">
                <h2> Yatay Geçiş Başvuru Yükleme Alanı</h2>
                <thead>
                  <tr>

                    <th scope="col">Dosya Tipi</th>


                    <th scope="col">Yükle</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>

                    <td>PDF</td>

                    <td>
                      <div>
                        Upload Files<br />
                        <form method="POST" id="uploadForm" action="{{ route('upload.store', ['yatay']) }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input name="image" type="file" id="files" /><br /><br />
                            <button id="send">Upload</button>
                        </form>
                        <p id="uploading"></p>
                        <progress value="0" max="100" id="progress"></progress>
                      </div>
                    </td>
                  </tr>
                  <tr>

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
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>
  <script src="./site.js"></script>
  <script src="{{ URL::asset('js/site.js') }}"></script>


  <!-- The core Firebase JS SDK is always required and must be listed first -->
  <script src="https://www.gstatic.com/firebasejs/7.13.1/firebase-app.js"></script>

  <!-- TODO: Add SDKs for Firebase products that you want to use -->
  <script src="https://www.gstatic.com/firebasejs/7.13.1/firebase-storage.js"></script>

  <script>
    // Your web app's Firebase configuration
    var firebaseConfig = {
      apiKey: "AIzaSyAkiW1OxH3fATENTTlG-VgyiQtuGUkLkB0",
      authDomain: "yazlabprojeveritabani.firebaseapp.com",
      databaseURL: "https://yazlabprojeveritabani-default-rtdb.europe-west1.firebasedatabase.app",
      projectId: "yazlabprojeveritabani",
      storageBucket: "yazlabprojeveritabani.appspot.com",
      messagingSenderId: "811704115578",
      appId: "1:811704115578:web:bafba929c9ccbaa1a0b6c3",
      measurementId: "G-E3XY48Y3P7"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
  </script>

  <script>
    var files = [];
    document.getElementById("files").addEventListener("change", function(e) {
      files = e.target.files;
      for (let i = 0; i < files.length; i++) {
        console.log(files[i]);
      }
    });

    document.getElementById("send").addEventListener("click", function() {
      //checks if files are selected
      if (files.length != 0) {
        //Loops through all the selected files
        for (let i = 0; i < files.length; i++) {
          //create a storage reference
          var storage = firebase.storage().ref('pdf/yatay/' + files[i].name);

          //upload file
          var upload = storage.put(files[i]);

          //update progress bar
          upload.on(
            "state_changed",
            function progress(snapshot) {
              var percentage =
                (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
              document.getElementById("progress").value = percentage;
            },

            function error() {
              alert("error uploading file");
            },

            function complete() {
              document.getElementById(
                "uploading"
              ).innerHTML += `${files[i].name} upoaded <br />`;
            }
          );
        }
      } else {
        alert("No file chosen");
      }
    });
    document.getElementById("send").addEventListener("click", function() {
      //checks if files are selected
      if (files.length != 0) {
        //Loops through all the selected files
        for (let i = 0; i < files.length; i++) {
          //create a storage reference
          var database = firebase.database().ref('pdf/yatay/' + files[i].name);

          //upload file
          var upload = database.put(files[i]);

          //update progress bar
          upload.on(
            "state_changed",
            function progress(snapshot) {
              var percentage =
                (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
              document.getElementById("progress").value = percentage;
            },

            function error() {
              alert("error uploading file");
            },

            function complete() {
              document.getElementById(
                "uploading"
              ).innerHTML += `${files[i].name} upoaded <br />`;
            }
          );
        }
      } else {
        alert("No file chosen");
      }
    });
  </script>

</body>

</html>