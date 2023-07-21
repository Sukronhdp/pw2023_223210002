<?php

function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'pw_223210002');
}

function query($query)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $query);

  //jika ingin memanggil 1 data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  //jika ingin memanggil semua data di tabel
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}
