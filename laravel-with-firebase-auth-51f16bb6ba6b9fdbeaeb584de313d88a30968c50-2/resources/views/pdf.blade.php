<!DOCTYPE html>
<html>
<head>
    <title>PDF</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
<!--  <table class="table table-sm">
    <thead>
      <tr>
        <th scope="col">Ad</th>
        <th scope="col">Email</th>
          <th scope="col">Adres</th>
            <th scope="col">Telefon Numarasi</th>
            <th scope="col">Fakulte</th>
            <th scope="col">Bolum</th>
            <th scope="col">Ders Alinmasi Istenen Fakulte</th>
            <th scope="col">Ders Alinmasi Istenen Bolum</th>


      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">{{ $name }}</th>
        <td>{{ $email }}</td>
          <td>{{ $adress }}</td>
          <td>{{ $phonenum }}</td>
          <td>{{ $fakülte }}</td>
          <td>{{ $bölüm }}</td>
          <td>{{ $yazfakülte }}</td>
          <td>{{ $yazbölüm }}</td>

      </tr>
    </tbody>
  </table> -->
  <h1>Yaz Okulu Basvuru Belgesi</h1>
    <hr>
    <p>Ad: {{ $name }}</p>
    <p>Email: {{ $email }}</p>
    <p>Adres: {{ $adress }}</p>
    <p>Telefon Numarasi: {{ $phonenum }}</p>
    <p>Ogrenci Numarasi: {{ $studentnumber }}</p>
    <hr>
    <p>Fakulte: {{ $fakülte }}</p>
    <p>Bolum: {{ $bölüm }}</p>
    <hr>
    <p>Ders Alinmasi Istenen Fakulte: {{ $yazfakülte }}</p>
    <p>Ders Alinmasi Istenen Bolum: {{ $yazbölüm }}</p>
    <hr>
    <p>Alinmak Istenen Ders 1: {{ $ders1 }}</p>
    <p>Alinmak Istenen Ders 2: {{ $ders2 }}</p>
    <p>Alinmak Istenen Ders 3: {{ $ders3 }}</p>
    <p>Alinmak Istenen Ders 4: {{ $ders4 }}</p>
    <p>Alinmak Istenen Ders 5: {{ $ders5 }}</p>

    <br>
    <p>Imza: </p>


</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</html>
