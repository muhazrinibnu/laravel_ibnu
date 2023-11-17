<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mahasisawa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Laravel C1</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/mahasiswa">mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about">about</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/profile">profile</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            tugas-menu
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/tugas">tugas1</a></li>
            <li><a class="dropdown-item" href="/table">table</a></li>
            <li><a class="dropdown-item" href="/table">table</a></li>
            <li><a class="dropdown-item" href="/table">table</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div class="container">

      <h1>Halaman Mahasiswa</h1>
      <div class="row">
        <div class="col-sm-6">
          <h4>Tabel Mahasiswa</h4>
          
          <table class="table table-danger table-sm table-hover table-bordered text-center">
            <thead>
              <tr>
                <th>NPM</th>
                <th>Nama Mahasiswa</th>
                <th>Jenis Kelamin</th>
                <th colspan="2">TTL</th>
            </tr>
            </thead>
            <tbody>
              <?php $nilai_awal = 0; ?>
              @while ($nilai_awal < $jumlah)
                  
              <tr>
                  <td>{{$npm[$nilai_awal]}}</td>
                  <td>{{$nama[$nilai_awal]}}</td>
                  <td>LK</td>
                  <td>02-05-2000</td>
                  <td>tembung</td>
              </tr> 
              <?php $nilai_awal++ ?>
              @endwhile
            </tbody>
          </table>
        </div>                
       <div class="col-sm-6">
        <h4>Form Mahasiswa</h4>
        <form action="" method="get">
          <div class="row">
            <div class="col-sm-6">
              <label for="">NPM</label>
              <input type="number" name="npm" class="form-control" placeholder="input NPM">
            </div>
            <div class="col-sm-6">
              <label for="">Nama Mahasiswa</label>
              <input type="text" name="nama_mahasiswa" class="form-control" placeholder="input Nama Mahasiswa">
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <label for="">Tanggal Lahir</label>
              <input type="date" name="tgl_lahir"  class="form-control">
            </div>
            <div class="col-sm-6">
              <label for="">Prodi</label>
              <select name="prodi" class="form-control">
                <option value="1">Sistem Informasi</option>
                <option value="2">Teknologi Informasi</option>
                <option value="3">Data Sains</option>
              </select>
            </div>
          </div>
          <div class="form-group mt-2">
            <button class="btn btn-primary" style="width: 100%" type="submit">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>