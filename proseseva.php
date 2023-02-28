<?php

$nomorsurat = $_POST['nomorsurat'];
$dasar      = $_POST['dasar'];
$untuk      = $_POST['untuk'];
$tanggal    = $_POST['tanggal'];


$document = file_get_contents("surat.rtf");

$document = str_replace("#nomorsurat", $nomorsurat, $document);
$document = str_replace("#dasar", $dasar, $document);
$document = str_replace("#untuk", $untuk, $document);
$document = str_replace("#tanggal", date('d-m-Y', strtotime($tanggal)), $document);

header("Content-type: application/msword");
header("Content-disposition: inline; filename=surat.doc");
header("Content-length: " . strlen($document));
echo $document;
