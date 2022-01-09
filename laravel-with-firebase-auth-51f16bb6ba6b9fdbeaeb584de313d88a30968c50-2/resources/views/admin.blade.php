<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Kocaeli Üniversitesi Başuruları</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text /css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"   />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css'>
  <link rel="stylesheet" href="./style.css">
  <link href="{{URL::asset('/css/style.css')}}" rel=stylesheet>
</head>




<body style="background-color: #fffdd0;">
  <h2 style="text-align: center;">Admin Paneli</h2>
  <hr>

  <!-- 1. row -->
  <div class='dashboard-content'>
    <div class='container-fluid'>
      <div class="row">
        <div class="col-12">
          <table class="table-responsive-lg table table-striped table-success">
            <h2>Yaz Okulu Başvuruları</h2>
            <thead>
              <tr>
                <th scope="col">Gelen Başvurular</th>
                <th scope="col">İşlemler</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($yazOkuluList as $yazOkulu)
              <tr>
                <td>{{ $yazOkulu->name }}, <a href="https://firebasestorage.googleapis.com/v0/b/yazlabprojeveritabani.appspot.com/o/pdf%2Fyazokulu%2F{{ $yazOkulu->name }}?alt=media&token=2563f054-1e5b-41e8-9253-85e14f8c8df0">Görüntüle</a></td>
                <td>
                  <a href="{{ route('status.store', [$yazOkulu->id, 1]) }}"> <button type="button" class="btn btn-success"><i class="fa fa-check"></i></button></a>
                  <a href="{{ route('status.store', [$yazOkulu->id, 2]) }}"> <button type="button" class="btn btn-danger"><i class="fa fa-times"></i></button></a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!-- 2. row -->
  <div class='dashboard-content'>
    <div class='container-fluid'>
      <div class="row">
        <div class="col-12">
          <table class="table-responsive-lg table table-striped table-success">
            <h2>Çap Başvuruları</h2>
            <thead>
              <tr>
                <th scope="col">Gelen Başvurular</th>
                <th scope="col">İşlemler</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($capList as $cap)
              <tr>
                <td>{{ $cap->name }}, <a href="https://firebasestorage.googleapis.com/v0/b/yazlabprojeveritabani.appspot.com/o/pdf%2Fcap%2F{{ $cap->name }}?alt=media&token=2563f054-1e5b-41e8-9253-85e14f8c8df0">Görüntüle</a></td>
                <td>
                  <a href="{{ route('status.store', [$cap->id, 1]) }}"> <button type="button" class="btn btn-success"><i class="fa fa-check"></i></button></a>
                  <a href="{{ route('status.store', [$cap->id, 2]) }}"> <button type="button" class="btn btn-danger"><i class="fa fa-times"></i></button></a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!-- 3. row -->
  <div class='dashboard-content'>
    <div class='container-fluid'>
      <div class="row">
        <div class="col-12">
          <table class="table-responsive-lg table table-striped table-success">
            <h2>DGS Başvuruları</h2>
            <thead>
              <tr>
                <th scope="col">Gelen Başvurular</th>
                <th scope="col">İşlemler</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($dgsList as $dgs)
              <tr>
                <td>{{ $dgs->name }}, <a href="https://firebasestorage.googleapis.com/v0/b/yazlabprojeveritabani.appspot.com/o/pdf%2Fdgs%2F{{ $dgs->name }}?alt=media&token=">Görüntüle</a></td>
                <td>
                  <a href="{{ route('status.store', [$dgs->id, 1]) }}"> <button type="button" class="btn btn-success"><i class="fa fa-check"></i></button></a>
                  <a href="{{ route('status.store', [$dgs->id, 2]) }}"> <button type="button" class="btn btn-danger"><i class="fa fa-times"></i></button></a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!-- 4. row -->
  <div class='dashboard-content'>
    <div class='container-fluid'>
      <div class="row">
        <div class="col-12">
          <table class="table-responsive-lg table table-striped table-success">
            <h2>Yatay Geçiş Başvuruları</h2>
            <thead>
              <tr>
                <th scope="col">Gelen Başvurular</th>
                <th scope="col">İşlemler</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($yatayList as $yatay)
              <tr>
                <td>{{ $yatay->name }}, <a href="https://firebasestorage.googleapis.com/v0/b/yazlabprojeveritabani.appspot.com/o/pdf%2Fyatay%2F{{ $yatay->name }}?alt=media&token=2563f054-1e5b-41e8-9253-85e14f8c8df0">Görüntüle</a></td>
                <td>
                  <a href="{{ route('status.store', [$yatay->id, 1]) }}"> <button type="button" class="btn btn-success"><i class="fa fa-check"></i></button></a>
                  <a href="{{ route('status.store', [$yatay->id, 2]) }}"> <button type="button" class="btn btn-danger"><i class="fa fa-times"></i></button></a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!-- 5. row -->
  <div class='dashboard-content'>
    <div class='container-fluid'>
      <div class="row">
        <div class="col-12">
          <table class="table-responsive-lg table table-striped table-success">
            <h2>Ders İntibak Başvuruları</h2>
            <thead>
              <tr>
                <th scope="col">Gelen Başvurular</th>
                <th scope="col">İşlemler</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($dersintibakList as $dersintibak)
              <tr>
                <td>{{ $dersintibak->name }}, <a href="https://firebasestorage.googleapis.com/v0/b/yazlabprojeveritabani.appspot.com/o/pdf%2Fdersintibak%2F{{ $dersintibak->name }}?alt=media&token=2563f054-1e5b-41e8-9253-85e14f8c8df0">Görüntüle</a></td>
                <td>
                  <a href="{{ route('status.store', [$dersintibak->id, 1]) }}"> <button type="button" class="btn btn-success"><i class="fa fa-check"></i></button></a>
                  <a href="{{ route('status.store', [$dersintibak->id, 2]) }}"> <button type="button" class="btn btn-danger"><i class="fa fa-times"></i></button></a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  </div>
      <!-- Base styles-->

      <!-- Base styles Ends-->

    </div>
  </div>
  </div>


  {{--Firebase Tasks--}}
  <!-- The core Firebase JS SDK is always required and must be listed first -->
  <script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-app.js"></script>
  <!-- TODO: Add SDKs for Firebase products that you want to use
https://firebase.google.com/docs/web/setup#available-libraries -->
  <script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-analytics.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.0/dist/sweetalert2.all.min.js"></script>
  <script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-database.js"></script>
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
    firebase.database().ref('CapBasvuru/').on('value', function(snapshot) {
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
    $('body').on('click', '.updateData', function() {
      updateID = $(this).attr('data-id');
      firebase.database().ref('CapBasvuru/' + updateID).on('value', function(snapshot) {
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

</body>

</html>