<?php
// memasukkan vendor/autoload.php untuk menjalankan perintah
require 'vendor/autoload.php';
// menggunakan fungsi dibawah ini
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// membuat variabel spreadsheet baru dan mengaktifkan sheetnya dimana didalam sheet dideklarasikan pada cell A1 berupa Hello World!
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'Hello World!');

// membuat file xslx dengan variabel spreadsheet dan diberi nama file hello world
$writer = new Xlsx($spreadsheet);
$writer->save('hello world.xlsx');
?>