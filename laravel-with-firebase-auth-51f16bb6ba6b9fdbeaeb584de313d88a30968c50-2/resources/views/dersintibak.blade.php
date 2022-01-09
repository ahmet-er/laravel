<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Kocaeli Üniversitesi Başuruları</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css'>
  <link rel="stylesheet" href="./style.css">
  <<link href="{{URL::asset('/css/style.css')}}" rel=stylesheet>

    <script>
      var fakülteObject = {
        "Mühendislik Fakültesi": {
          "Bilgisayar Mühendisliği": {},
          "İnşaat Mühendisliği": {},
          "Endüstri Mühendisliği": {},
          "Makine Mühendisliği": {},
          "Çevre Mühendisliği": {}
        },
        "Fen Edebiyat Fakültesi": {
          "Biyoloji": {},
          "Coğrafya": {},
          "Fizik": {},
          "Kimya": {},
          "Matematik": {}
        },
        "Teknoloji Fakültesi": {
          "Bilişim Sistemleri Mühendisliği": {},
          "Biyomedikal Mühendisliği": {},
          "Otomotiv Mühendisliği": {},
          "Enerji Sistemleri Mühendisliği": {},
          "Yazılım Mühendisliği": {}
        },
        "İletişim Fakültesi": {
          "Reklamcılık": {},
          "İletişim ve Tasarımı": {},
          "Gazetecilik": {},
          "Radyo ve Televizyon": {},
          "Halkla İlişkiler": {}
        },
        "Eğitim Fakültesi": {
          "Özel Eğitim Öğretmenliği": {},
          "Temel Eğitim Öğretmenliği": {},
          "Bilgisayar Öğretmenliği": {},
          "Yabancı Dil Öğretmenliği": {},
          "Güzel Sanatlar Öğretmenliği": {}
        }
      }
      window.onload = function() {
        var fakülteSel = document.getElementById("fakülte");
        var bölümSel = document.getElementById("bölüm");

        for (var x in fakülteObject) {
          fakülteSel.options[fakülteSel.options.length] = new Option(x, x);
        }
        fakülteSel.onchange = function() {
          //empty Chapters- and Topics- dropdowns
          bölümSel.length = 1;
          //display correct values
          for (var y in fakülteObject[this.value]) {
            bölümSel.options[bölümSel.options.length] = new Option(y, y);
          }
        }

      }
    </script>

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
          <div class='card'>
            <div class="card text-center">

              <div class="card-body">


                <img src="{{URL::asset('/images/logo.png')}}" alt="profile Pic" height="200" width="200">
                <h1 class="card-title">Ders İntibak Başvuru Formu</h1>
              </div>

            </div>
            <h5></h5>
            <div class="card ">
              <div class="card-body">

                <div class="card card-default">
                  <div class="card-body">
                    <div class="card card-header bg-success">Kişisel Bilgiler</div>
                    </br>
                    <form id="addUser" class="form-inline" method="POST" action="{{ route('dersintibakPDF') }}">
                      {{ csrf_field() }}

                      <div class="form-group mb-2">
                        <label for="name" class="sr-only">Name</label>
                        <input id="name" type="text" class="form-control" name="name" placeholder="İsim" required autofocus>
                      </div>
                      <div class="form-group mx-sm-3 mb-2">
                        <label for="email" class="sr-only">Email</label>
                        <input id="email" type="email" class="form-control" name="email" placeholder="Email" required autofocus>
                      </div>
                      <div class="form-group mx-sm-3 mb-2">
                        <label for="adress" class="sr-only">Adress</label>
                        <input id="adress" type="text" class="form-control" name="adress" placeholder="Adress" required autofocus>
                      </div>
                      <div class="form-group mx-sm-3 mb-2">
                        <label for="phonenum" class="sr-only">Phone Number</label>
                        <input id="phonenum" type="text" class="form-control" name="phonenum" placeholder="Telefon Numarası" required autofocus>
                      </div>



                  </div>
                </div>
                <div class="card card-default">
                  <div class="card-body">
                    <div class="card card-header bg-success"> Önceki Okul Bilgileri</div>
                    </br>
                    <div class="form-group mx-sm-3 mb-2">

                      <input id="numara" type="text" class="form-control" name="numara" placeholder="Öğrenci Numarası" required autofocus>
                    </div>
                    <div class="form-group mx-sm-3 mb-2">
                      <select name="fakülte" id="fakülte" class="form-control">
                        <option value="" selected="selected">Fakültenizi Seçin</option>
                      </select>
                    </div>

                    <div class="form-group mx-sm-3 mb-2">
                      <select name="bölüm" id="bölüm" class="form-control">
                        <option value="" selected="selected">Bölümünüzü Seçin</option>
                      </select>

                    </div>


                  </div>
                  <div class="card card-default">
                    <div class="card-body">
                      <div class="card card-header bg-success">Daha Önce Alınmış Olan Ders-Dersler</div>
                      </br>
                      <div class="form-group mx-sm-3 mb-2">


                        <div class="row clearfix">
                          <div class="col-md-12 table-responsive">
                            <table class="table table-bordered table-hover table-sortable" id="tab_logic">
                              <thead>
                                <tr>
                                  <th class="text-center">
                                    Ders İsmi
                                  </th>
                                  <th class="text-center">
                                    Teorik Ders Saati
                                  </th>
                                  <th class="text-center">
                                    Laboratuvar Saati
                                  </th>
                                  <th class="text-center">
                                    Akts
                                  </th>
                                  <th class="text-center" style="border-top: 1px solid #ffffff; border-right: 1px solid #ffffff;">
                                  </th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr id='addr0' data-id="0" class="hidden">
                                  <td data-name="name">
                                    <input id="dersadi" type="text" name='dersadi' placeholder='Adı' class="form-control" />
                                  </td>
                                  <td data-name="mail">
                                    <input id="derssaati" type="text" name='derssaati' placeholder='Ders saati' class="form-control" />
                                  </td>
                                  <td data-name="desc">
                                    <input id="labsaati" name="labsaati" type="text" placeholder="Laboratuvar saati" class="form-control"></>
                                  </td>
                                  <td data-name="sel">
                                    <input id="akts" name="akts" type="text" placeholder="Dersin Kredisi" class="form-control"></>
                                  </td>
                                  <td data-name="del">
                                    <button name="del0" class='btn btn-danger glyphicon glyphicon-remove row-remove'><span aria-hidden="true">×</span></button>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <a id="add_row" class="btn btn-success float-right">Ders Ekle</a>


                      </div>

                    </div>
                  </div>
                  <div class="card card-default">
                    <div class="card-body">
                      <div class="card card-header bg-success">Muaf Olunması İstenen Dersler</div>
                      </br>
                      <div class="form-group mx-sm-3 mb-2">


                        <div class="row clearfix">
                          <div class="col-md-12 table-responsive">
                            <table class="table table-bordered table-hover table-sortable" id="tab_logic">
                              <thead>
                                <tr>
                                  <th class="text-center">
                                    Ders Kodu
                                  </th>
                                  <th class="text-center">
                                    Ders İsmi
                                  </th>
                                  <th class="text-center">
                                    Teorik Ders Saati
                                  </th>
                                  <th class="text-center">
                                    Laboratuvar Saati
                                  </th>
                                  <th class="text-center">
                                    Akts
                                  </th>
                                  <th class="text-center" style="border-top: 1px solid #ffffff; border-right: 1px solid #ffffff;">
                                  </th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr id='addr0' data-id="0" class="hidden">
                                  <td data-name="name">
                                    <input id="derskodu" type="text" name='derskodu' placeholder='Ders Kodu' class="form-control" />
                                  </td>
                                  <td data-name="name">
                                    <input id="dersadimuaf" type="text" name='dersadi' placeholder='Adı' class="form-control" />
                                  </td>
                                  <td data-name="mail">
                                    <input id="derssaatimuaf" type="text" name='derssaati' placeholder='Ders saati' class="form-control" />
                                  </td>
                                  <td data-name="desc">
                                    <input id="labsaatimuaf" name="labsaati" type="text" placeholder="Laboratuvar saati" class="form-control"></>
                                  </td>
                                  <td data-name="sel">
                                    <input id="aktsmuaf" name="akts" type="text" placeholder="Dersin Kredisi" class="form-control"></>
                                  </td>
                                  <td data-name="del">
                                    <button name="del0" class='btn btn-danger glyphicon glyphicon-remove row-remove'><span aria-hidden="true">×</span></button>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <a id="add_row" class="btn btn-success float-right">Ders Ekle</a>


                      </div>

                    </div>
                  </div>
                  <button id="submitUsexr" type="submit" class="btn btn-dark mb-2">Kaydet</button>
                  </form>
                </div>
                <div class="card card-default">
                  <div class="card-body">
                  <div class="card card-header bg-success">Ek Belgeler</div>
                    </br>
                    <div class="form-group mx-sm-3 mb-2">
                    <input type="file" id="files" multiple /><br /><br />

<button id="send">Upload</button>

<p id="uploading"></p>
<progress value="0" max="100" id="progress"></progress>
</div>
                      

      </div>


                  </div>
              </div>
              <br>


              <tbody id="tbody">
              </tbody>
              </table>
            </div>
            <!-- Update Model -->
            <form action="" method="POST" class="users-update-record-model form-horizontal">
              <div id="update-modal" data-backdrop="static" data-keyboard="false" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" style="width:55%;">
                  <div class="modal-content" style="overflow: hidden;">
                    <div class="modal-header">
                      <h4 class="modal-title" id="custom-width-modalLabel">Update</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
                      </button>
                    </div>
                    <div class="modal-body" id="updateBody">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-light" data-dismiss="modal">Close
                      </button>
                      <button type="button" class="btn btn-success updateUser">Update
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
            <!-- Delete Model -->
            <form action="" method="POST" class="users-remove-record-model">
              <div id="remove-modal" data-backdrop="static" data-keyboard="false" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-dialog-centered" style="width:55%;">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title" id="custom-width-modalLabel">Delete</h4>
                      <button type="button" class="close remove-data-from-delete-form" data-dismiss="modal" aria-hidden="true">×
                      </button>
                    </div>
                    <div class="modal-body">
                      <p>Do you want to delete this record?</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default waves-effect remove-data-from-delete-form" data-dismiss="modal">Close
                      </button>
                      <button type="button" class="btn btn-danger waves-effect waves-light deleteRecord">Delete
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
            {{--Firebase Tasks--}}
            <!-- The core Firebase JS SDK is always required and must be listed first -->
            <script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-app.js"></script>
            <!-- TODO: Add SDKs for Firebase products that you want to use
https://firebase.google.com/docs/web/setup#available-libraries -->
            <script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-analytics.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.0/dist/sweetalert2.all.min.js"></script>
            <script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-database.js"></script>


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
      var storage = firebase.storage().ref('Word-Excel/' + files[i].name);

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
      var database = firebase.database().ref('Word-Excel/' + files[i].name);

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
            <script src="{{ URL::asset('js/site.js') }}"></script>
            <script>
              // Initialize Firebase
              var config = {
                apiKey: "{{ config('services.firebase.api_key') }}",
                authDomain: "{{ config('services.firebase.auth_domain') }}",
                databaseURL: "{{ config('services.firebase.database_url') }}",
                projectId: "{{ config('services.firebase.project_id') }}",
                storageBucket: "{{ config('services.firebase.storage_bucket') }}",
                messagingSenderId: "{{ config('services.firebase.messaging_sender_id') }}",
                appId: "{{ config('services.firebase.app_id') }}",
                measurementId: "{{ config('services.firebase.measurement_id') }}"
              };
              firebase.initializeApp(config);
              firebase.analytics();
              var database = firebase.database();
              var lastIndex = 0;
              // Get Data
              firebase.database().ref('Dersİntibak/').on('value', function(snapshot) {
                var value = snapshot.val();
                var htmls = [];
                $.each(value, function(index, value) {
                  if (value) {

                  }
                  lastIndex = index;
                });
                $('#tbody').html(htmls);
                $("#submitUser").removeClass('desabled');
              });
              // Add Data
              $('#submitUser').on('click', function() {
                var values = $("#addUser").serializeArray();
                var name = values[0].value;
                var email = values[1].value;
                var address = values[2].value;
                var phonenum = values[3].value;
                var numara = values[4].value;
                var fakülte = values[5].value;
                var bölüm = values[6].value;
                var dersadi = values[7].value;
                var derssaati = values[8].value;
                var labsaati = values[9].value;
                var akts = values[9].value;
                var derskodu = values[10].value;
                var dersadimuaf = values[11].value;
                var derssaatimuaf = values[12].value;
                var labsaatimuaf = values[13].value;
                var aktsmuaf = values[14].value;

                var userID = lastIndex + 1;

                console.log(values);
                firebase.database().ref('Dersİntibak/' + userID).set({
                  name: name,
                  email: email,
                  address: address,
                  phonenum: phonenum,
                  numara: numara,
                  fakülte: fakülte,
                  bölüm: bölüm,
                  dersadi: dersadi,
                  derssaati: derssaati,
                  labsaati: labsaati,
                  akts: akts,
                  derskodu: derskodu,
                  dersadimuaf: dersadimuaf,
                  derssaatimuaf: derssaatimuaf,
                  labsaatimuaf: labsaatimuaf,
                  aktsmuaf: aktsmuaf,
                });

                // Reassign lastID value
                lastIndex = userID;
                $("#addUser input").val("");
              });
              // Update Data
              var updateID = 0;
              $('body').on('click', '.updateData', function() {
                updateID = $(this).attr('data-id');
                firebase.database().ref('Dersİntibak/' + updateID).on('value', function(snapshot) {
                  var values = snapshot.val();
                  var updateData = '<div class="form-group">\
<label for="first_name" class="col-md-12 col-form-label">Name</label>\
<div class="col-md-12">\
<input id="first_name" type="text" class="form-control" name="name" value="' + values.name + '" required autofocus>\
</div>\
</div>\
<div class="form-group">\
<label for="last_name" class="col-md-12 col-form-label">Email</label>\
<div class="col-md-12">\
<input id="last_name" type="text" class="form-control" name="email" value="' + values.email + '" required autofocus>\
</div>\
</div>';
                  $('#updateBody').html(updateData);
                });
              });
              $('.updateUser').on('click', function() {
                var values = $(".users-update-record-model").serializeArray();
                var postData = {
                  name: values[0].value,
                  email: values[1].value,
                  adress: values[2].value,
                  phonenum: values[3].valu,
                };
                var updates = {};
                updates['/CapBasvuru/' + updateID] = postData;
                firebase.database().ref().update(updates);
                $("#update-modal").modal('hide');
              });
              // Remove Data
              $("body").on('click', '.removeData', function() {
                var id = $(this).attr('data-id');
                $('body').find('.users-remove-record-model').append('<input name="id" type="hidden" value="' + id + '">');
              });
              $('.deleteRecord').on('click', function() {
                var values = $(".users-remove-record-model").serializeArray();
                var id = values[0].value;
                firebase.database().ref('CapBasvuru/' + id).remove();
                $('body').find('.users-remove-record-model').find("input").remove();
                $("#remove-modal").modal('hide');
              });
              $('.remove-data-from-delete-form').click(function() {
                $('body').find('.users-remove-record-model').find("input").remove();
              });
            </script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
            <script src="{{ URL::asset('js/site.js') }}"></script>
            <script src="{{ URL::asset('js/table.js') }}"></script>

</body>

</html>