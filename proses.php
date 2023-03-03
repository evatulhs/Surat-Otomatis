<?php

$no_agenda  = $_POST['no_agenda'];
$tanggal     = $_POST['tanggal'];
$nama1       = $_POST['nama1'];
$jabatan1    = $_POST['jabatan1'];
$nama2       = $_POST['nama2'];
$jabatan2    = $_POST['jabatan2'];
$nama3      = $_POST['nama3'];
$jabatan3    = $_POST['jabatan3'];
$nama_acara = $_POST['nama_acara'];

echo ($no_agenda . "<br>" . $tanggal . "<br>" . $nama1 . " - " . $jabatan1 . "<br>" . $nama2 . " - " . $jabatan2 . "<br>" . $nama3 . " - " . $jabatan3 . "<br>" . $nama_acara);

// $document = file_get_contents("surat.rtf");

// $document = str_replace("#noagenda", $no_agenda, $document);
// $document = str_replace("#tanggal", $tanggal, $document);
// $document = str_replace("#nama1", $nama1, $document);
// $document = str_replace("#jabatan1", $jabatan1, $document);
// $document = str_replace("#nama2", $nama2, $document);
// $document = str_replace("#jabatan2", $jabatan2, $document);
// $document = str_replace("#nama3", $nama3, $document);
// $document = str_replace("#jabatan3", $jabatan3, $document);
// $document = str_replace("#namaacara", $nama_acara, $document);

// header("Content-type: application/msword");
// header("Content-disposition: inline; filename=surat.doc");
// header("Content-length: " . strlen($document));
// echo $document;
