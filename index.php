<!DOCTYPE html>
<html lang="en">

<head>
  <title>GoPlane</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Link bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
  <!-- Link style css -->
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="./assets/image/plane.png" alt="Logo" width="40" height="34" class="d-inline-block align-text-top" />
        GoPlane
      </a>
    </div>
  </nav>
  <div class="container">
    <!-- Banner -->
    <div class="banner">
      <img src="./assets/image/banner.png" class="" alt="banner" />
      <h1 class="display-3">Pendaftaran Rute Penerbangan</h1>
    </div>

    <!-- Form -->
    <div class="containerForm">
      <form action="data.php" method="post">
        <legend>Harap isi data dibawah ini !!</legend>
        <div class="mb-3">
          <label for="namaMaskapai" class="form-label">Nama Maskapai</label>
          <input type="text" id="namaMaskapai" name="maskapai" class="form-control" required />
        </div>
        <div class="mb-3">
          <label for="asalBrngkt" class="form-label">Asal Penerbangan</label>
          <select id="asalBrngkt" name="asal" class="form-select">
            <option>Soekarno-Hatta (CGK)</option>
            <option>Husein Sastranegara (BDO)</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="tujuanBrngkt" class="form-label">Tujuan Penerbangan</label>
          <select id="tujuanBrngkt" name="tujuan" class="form-select">
            <option>Sultan Iskandarmuda (BTJ)</option>
            <option>Hasanuddin (UPG)</option>
            <option>Ngurah Rai (DPS)</option>
            <option>Inanwatan (INX)</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="hargaTiket" class="form-label">Harga Tiket</label>
          <input type="text" id="hargaTiket" name="hargaTiket" class="form-control" required />
        </div>
        <div class="cardBtn">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>

    <!-- Table penerbangan -->
    <div class="table">
      <h1 class="display-3">Daftar Rute Tersedia</h1>
      <table class="table table-dark table-striped">
        <tr>
          <td class="table-dark">Maskapai</td>
          <td class="table-dark">Asal Penerbangan</td>
          <td class="table-dark">Tujuan Penerbangan</td>
          <td class="table-dark">Harga Tiket</td>
          <td class="table-dark">Pajak</td>
          <td class="table-dark">Total Harga Tiket</td>
        </tr>
        <tr>
          <td class="table-primary">Adam Air</td>
          <td class="table-primary">Soekarno-Hatta (CGK)</td>
          <td class="table-primary">Sultan Iskandarmuda (BTJ)</td>
          <td class="table-primary">2000000</td>
          <td class="table-primary">120000</td>
          <td class="table-primary">2120000</td>
        </tr>
        <tr>
          <td class="table-primary">Batik</td>
          <td class="table-primary">Husein Sastranegara (BDO)</td>
          <td class="table-primary">Sultan Iskandarmuda (BTJ)</td>
          <td class="table-primary">100000</td>
          <td class="table-primary">100000</td>
          <td class="table-primary">200000</td>
        </tr>
        <tr>
          <td class="table-primary">Batik</td>
          <td class="table-primary">Soekarno-Hatta (CGK)</td>
          <td class="table-primary">Hasanuddin (UPG)</td>
          <td class="table-primary">890000</td>
          <td class="table-primary">120000</td>
          <td class="table-primary">1010000</td>
        </tr>
        <tr>
          <td class="table-primary">Citilink</td>
          <td class="table-primary">Soekarno-Hatta (CGK)</td>
          <td class="table-primary">Sultan Iskandarmuda (BTJ)</td>
          <td class="table-primary">89000</td>
          <td class="table-primary">120000</td>
          <td class="table-primary">209000</td>
        </tr>
        <tr>
          <td class="table-primary">Garuda Indonesia</td>
          <td class="table-primary">Soekarno-Hatta (CGK)</td>
          <td class="table-primary">Ngurah Rai (DPS)</td>
          <td class="table-primary">1500000</td>
          <td class="table-primary">130000</td>
          <td class="table-primary">1630000</td>
        </tr>
        <tr>
          <td class="table-primary">Mala</td>
          <td class="table-primary">Husein Sastranegara (BDO)</td>
          <td class="table-primary">Inanwatan (INX)</td>
          <td class="table-primary">190000</td>
          <td class="table-primary">120000</td>
          <td class="table-primary">310000</td>
        </tr>
        <tr>
          <td class="table-primary">Oli</td>
          <td class="table-primary">Soekarno-Hatta (CGK)</td>
          <td class="table-primary">Ngurah Rai (DPS)</td>
          <td class="table-primary">12345</td>
          <td class="table-primary">130000</td>
          <td class="table-primary">142345</td>
        </tr>
      </table>
    </div>
  </div>

  <!-- Footer -->
  <footer class="text-center text-lg-start mt-4" style="background-color: #000">
    <!-- Copyright -->
    <div class="text-center text-white p-3" style="background-color: rgba(0, 0, 0, 0.2)">
      © 2023 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/">GoPlane</a>
    </div>
    <!-- Copyright -->
  </footer>

  <!-- Link js bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
</body>

</html>