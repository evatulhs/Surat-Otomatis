<?php

$nomor_agenda = $_POST['nomor_agenda'];
$nama_agenda = $_POST['nama_agenda'];
$dasar      = $_POST['lokasi'];
$untuk      = $_POST['tanggal'];
$jam    = $_POST['jam'];

echo ($nama_agenda);

$document = file_get_contents("surat.rtf");

$document = str_replace("#nomor_agenda", $nomor_agenda, $document);
$document = str_replace("#nama_agenda", $nama_agenda, $document);
$document = str_replace("#lokasi", $lokasi, $document);
$document = str_replace("#tanggal", date('d-m-Y', strtotime($tanggal)), $document);
$document = str_replace("#jam", $jam, $document);

header("Content-type: application/msword");
header("Content-disposition: inline; filename=surat.doc");
header("Content-length: " . strlen($document));
echo $document;
