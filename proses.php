<?php

$no_agenda  = $_POST['no_agenda'];
$tangal     = $_POST['tanggal'];
$nama       = $_POST['nama'];
$jabatan    = $_POST['jabatan'];
$nama_acara = $_POST['nama_acara'];

echo ($nama_agenda);

$document = file_get_contents("surat.rtf");

$document = str_replace("#no_agenda", $no_agenda, $document);
$document = str_replace("#tanggal", $tanggal, $document);
$document = str_replace("#nama", $nama, $document);
$document = str_replace("#jabatan", $jabatan, $document);
$document = str_replace("#nama_acara", $nama_acara, $document);

header("Content-type: application/msword");
header("Content-disposition: inline; filename=surat.doc");
header("Content-length: " . strlen($document));
echo $document;
