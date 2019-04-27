<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Perpustakaan</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">Perpustakaan</a>

  <!-- Links -->
  <ul class="navbar-nav">
    <!-- <li class="nav-item">
      <a class="nav-link" href="#">Link 1</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link 2</a>
    </li> -->

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Anggota
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="/perpus/anggota/pinjambuku">Pinjam Buku</a>
        <a class="dropdown-item" href="/perpus/anggota/riwayatPeminjam">Riwayat Peminjaman</a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Petugas
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="/perpus/">Tambah Anggota</a>
        <a class="dropdown-item" href="#">Tambah Buku</a>
        <a class="dropdown-item" href="#">Data Pinjaman</a>
        <a class="dropdown-item" href="#">Data Buku</a>
      </div>
    </li>
  </ul>
</nav>