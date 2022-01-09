<!DOCTYPE html>
<html>

<head>
    <title>PDF</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body>
    <h1>Ders Intibak Basvuru Belgesi</h1>
    <hr>
    <p>Ad: {{ $name }}</p>
    <p>Email: {{ $email }}</p>
    <p>Adres: {{ $adress }}</p>
    <p>Telefon Numarasi: {{ $phonenum }}</p>
    <hr>
    <p>Numara: {{ $numara }}</p>
    <p>Fakulte: {{ $fakülte }}</p>
    <p>Bolum: {{ $bölüm }}</p>
    <hr>
    <h3>Ders Bilgisi</h3>
    <p>Ders Adi: {{ $dersadi }}</p>
    <p>Ders Saati: {{ $derssaati }}</p>
    <p>Lab Saati: {{ $labsaati }}</p>
    <p>AKTS: {{ $akts }}</p>
    <p>Ders Kodu: {{ $derskodu }}</p>
    <hr>
    <h3>Muafiyet Bilgileri</h3>
    <p>Muaf Olunmasi Icin Basvurulan Ders: {{ $dersadimuaf }}</p>
    <p>>Muaf Olunmasi Istenen Ders Saati: {{ $derssaatimuaf }}</p>
    <p>Muaf Olunacak Dersin Lab Saati: {{ $labsaatimuaf }}</p>
    <p>Muaf Olunacak Dersin AKTS: {{ $aktsmuaf }}</p>
    <hr>
    <br>
    <p>Imza: </p>


</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</html>