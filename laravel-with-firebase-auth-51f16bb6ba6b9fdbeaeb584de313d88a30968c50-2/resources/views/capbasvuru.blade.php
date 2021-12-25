
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Kocaeli Üniversitesi Başuruları</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css'><link rel="stylesheet" href="./style.css">
<<link href="{{URL::asset('/css/style.css')}}"  rel=stylesheet>
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
                    <div class='dashboard-nav-dropdown-menu'><a

                      href="yazokulu" class="dashboard-nav-dropdown-item">Yaz Okulu Başvurusu</a><a
                      href="capbasvuru" class="dashboard-nav-dropdown-item">ÇAP Başvurusu</a><a
                      href="/dgs" class="dashboard-nav-dropdown-item">DGS Başvurusu</a><a
                      href="/yataygecis" class="dashboard-nav-dropdown-item">Yatay Geçiş Başvurusu</a><a
                      href="/dersintibak" class="dashboard-nav-dropdown-item">Ders İntibakı Başvurusu</a></div>
                      <a href="#" class="dashboard-nav-item"><i class="fas fa-cogs"></i> Settings </a><a
                              href="#" class="dashboard-nav-item"><i class="fas fa-user"></i> Profile </a>
                    <div class="nav-item-divider"></div>
                    <li class="nav-item">
                      <a class="nav-link text-dark" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
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
 <h1 class="card-title">ÇAP Başvuru Formu</h1>
</div>

</div>
<h5></h5>
<div class="card ">
<div class="card-body">

<div class="card card-default">
<div class="card-body">
    <div class="card card-header bg-success">Kişisel Bilgiler</div>
</br>
<form id="addUser" class="form-inline" method="POST" action="">

<div class="form-group mb-2">
<label for="name" class="sr-only">Name</label>
<input id="name" type="text" class="form-control" name="name" placeholder="İsim"
required autofocus>
</div>
<div class="form-group mx-sm-3 mb-2">
<label for="email" class="sr-only">Email</label>
<input id="email" type="email" class="form-control" name="email" placeholder="Email"
required autofocus>
</div>
<div class="form-group mx-sm-3 mb-2">
<label for="adress" class="sr-only">Adress</label>
<input id="adress" type="text" class="form-control" name="adress" placeholder="Adress"
required autofocus>
</div>
<div class="form-group mx-sm-3 mb-2">
<label for="phonenum" class="sr-only">Phone Number</label>
<input id="phonenum" type="number" class="form-control" name="phonenum" placeholder="Telefon Numarası"
required autofocus>
</div>



</div>
</div>
<div class="card card-default">
<div class="card-body">
  <div class="card card-header bg-success">Bölüm Bilgileri</div>
</br>
<div class="form-group mx-sm-3 mb-2">

<input id="numara" type="number" class="form-control" name="numara" placeholder="Öğrenci Numaranız"
required autofocus>
</div>
  <div class="form-group mx-sm-3 mb-2">
    <input id="fakülte" type="text" class="form-control" name="fakülte" placeholder="Bağlı olduğunuz fakülte"
    required autofocus>
  </div>
  <div class="form-group mx-sm-3 mb-2">

    <input id="bölüm" type="text" class="form-control" name="bölüm" placeholder="Bölümünüz"
    required autofocus>

</div>
<div class="form-group mx-sm-3 mb-2">

  <input id="not" type="number" class="form-control" name="not" placeholder="Not ortalamanız"
  required autofocus>

</div>

</div>
<div class="card card-default">
<div class="card-body">
    <div class="card card-header bg-success">Çap Başvuru Bilgileri</div>
</br>
<div class="form-group mx-sm-3 mb-2">

<input id="capfakülte" type="text" class="form-control" name="capfakülte" placeholder="Fakülte "
required autofocus>
</div>
  <div class="form-group mx-sm-3 mb-2">
    <input id="capbölüm" type="text" class="form-control" name="capbölüm" placeholder="Bölüm"
    required autofocus>
  </div>


</div>
<button id="submitUser" type="button" class="btn btn-dark mb-2">Kaydet</button>
</form>
</div>
</div>
<br>


<tbody id="tbody">
</tbody>
</table>
</div>
<!-- Update Model -->
<form action="" method="POST" class="users-update-record-model form-horizontal">
<div id="update-modal" data-backdrop="static" data-keyboard="false" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel"
aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" style="width:55%;">
<div class="modal-content" style="overflow: hidden;">
<div class="modal-header">
<h4 class="modal-title" id="custom-width-modalLabel">Update</h4>
<button type="button" class="close" data-dismiss="modal"
aria-hidden="true">×
</button>
</div>
<div class="modal-body" id="updateBody">
</div>
<div class="modal-footer">
<button type="button" class="btn btn-light"
data-dismiss="modal">Close
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
<div id="remove-modal" data-backdrop="static" data-keyboard="false" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel"
aria-hidden="true" style="display: none;">
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
<button type="button" class="btn btn-default waves-effect remove-data-from-delete-form"
data-dismiss="modal">Close
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
<script  src="{{ URL::asset('js/site.js') }}"></script>
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
firebase.database().ref('CapBasvuru/').on('value', function (snapshot) {
var value = snapshot.val();
var htmls = [];
$.each(value, function (index, value) {
if (value) {

}
lastIndex = index;
});
$('#tbody').html(htmls);
$("#submitUser").removeClass('desabled');
});
// Add Data
$('#submitUser').on('click', function () {
var values = $("#addUser").serializeArray();
var name = values[0].value;
var email = values[1].value;
var address =values[2].value;
var phonenum = values[3].value;
var numara = values[4].value;
var fakülte = values[5].value;
var bölüm = values[6].value;
var not = values[7].value;
var capfakülte = values[8].value;
var capbölüm = values[9].value;
var userID = lastIndex + 1;

console.log(values);
firebase.database().ref('CapBasvuru/' + userID).set({
name: name,
email: email,
address: address,
phonenum: phonenum,
numara: numara,
fakülte: fakülte,
bölüm: bölüm,
not: not,
capfakülte: capfakülte,
capbölüm: capbölüm,
});

// Reassign lastID value
lastIndex = userID;
$("#addUser input").val("");
});
// Update Data
var updateID = 0;
$('body').on('click', '.updateData', function () {
updateID = $(this).attr('data-id');
firebase.database().ref('CapBasvuru/' + updateID).on('value', function (snapshot) {
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
$('.updateUser').on('click', function () {
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
$("body").on('click', '.removeData', function () {
var id = $(this).attr('data-id');
$('body').find('.users-remove-record-model').append('<input name="id" type="hidden" value="' + id + '">');
});
$('.deleteRecord').on('click', function () {
var values = $(".users-remove-record-model").serializeArray();
var id = values[0].value;
firebase.database().ref('CapBasvuru/' + id).remove();
$('body').find('.users-remove-record-model').find("input").remove();
$("#remove-modal").modal('hide');
});
$('.remove-data-from-delete-form').click(function () {
$('body').find('.users-remove-record-model').find("input").remove();
});
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script  src="{{ URL::asset('js/site.js') }}"></script>

</body>
</html>
