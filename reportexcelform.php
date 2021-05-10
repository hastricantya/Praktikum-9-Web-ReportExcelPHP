<!-- Perintah untuk download file excel dengan nama report formulir pendaftaran1 -->
<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Report Formulir Pendaftaran1.xlsx");
?>
<!-- memasukkan vendor/autoload.php untuk menjalankan perintah dan inlcude untuk mengkoneksikan file dengan database melalui file koneksi2.php -->
<?php
include('koneksi2.php');
require 'vendor/autoload.php';
// Menggunakan fungsi dibawah ini
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// membuat variabel spreadsheet baru dan mengaktifkan sheetnya dimana didalam sheet dideklarasikan isi dari data yang ada
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'Jenis Pendaftaran');
$sheet->setCellValue('B1', 'Tanggal Masuk');
$sheet->setCellValue('C1', 'NIS');
$sheet->setCellValue('D1', 'Nomor Peserta');
$sheet->setCellValue('E1', 'PAUD');
$sheet->setCellValue('F1', 'TK');
$sheet->setCellValue('G1', 'Nomor Seri SKHUN');
$sheet->setCellValue('H1', 'Nomor Seri Ijazah');
$sheet->setCellValue('I1', 'Hobi');
$sheet->setCellValue('J1', 'Cita - Cita');
$sheet->setCellValue('K1', 'Nama Lengkap');
$sheet->setCellValue('L1', 'Jenis Kelamin');
$sheet->setCellValue('M1', 'NISN');
$sheet->setCellValue('N1', 'NIK/No.KITAS');
$sheet->setCellValue('O1', 'Tempat Lahir');
$sheet->setCellValue('P1', 'Tanggal Lahir');
$sheet->setCellValue('Q1', 'Agama');
$sheet->setCellValue('R1', 'Berkebutuhan Khusus');
$sheet->setCellValue('S1', 'Alamat Jalan');
$sheet->setCellValue('T1', 'RT');
$sheet->setCellValue('U1', 'RW');
$sheet->setCellValue('V1', 'Nama Dusun');
$sheet->setCellValue('W1', 'Nama Kelurahan/Desa');
$sheet->setCellValue('X1', 'Nama Kecamatan');
$sheet->setCellValue('Y1', 'Kode POS');
$sheet->setCellValue('Z1', 'Tempat Tinggal');
$sheet->setCellValue('AA1', 'Moda Transportasi');
$sheet->setCellValue('AB1', 'Nomor HP');
$sheet->setCellValue('AC1', 'Nomor Telepon');
$sheet->setCellValue('AD1', 'Email');
$sheet->setCellValue('AE1', 'Penerima KPS/KPH');
$sheet->setCellValue('AF1', 'Nomor KPS/PKH');
$sheet->setCellValue('AG1', 'Kewarganegaraan');

// agae data tampil menggunakan mysqli_query pada tabel formdaftar dan tiap sel telah dideklarasikan untuk masing" isi dari entitas yang ada
$query = mysqli_query($koneksi,"select * from formdaftar");
$i = 2;
while($row = mysqli_fetch_array($query))
{
	$sheet->setCellValue('A'.$i, $row['jenispend']);
	$sheet->setCellValue('B'.$i, $row['tglmsk']);
	$sheet->setCellValue('C'.$i, $row['nis']);
	$sheet->setCellValue('D'.$i, $row['nopeserta']);
	$sheet->setCellValue('E'.$i, $row['paud']);
	$sheet->setCellValue('F'.$i, $row['tk']);
	$sheet->setCellValue('G'.$i, $row['seriskhun']);
	$sheet->setCellValue('H'.$i, $row['seriijazah']);
	$sheet->setCellValue('I'.$i, $row['hobi']);
	$sheet->setCellValue('J'.$i, $row['cita']);
	$sheet->setCellValue('K'.$i, $row['namalengkap']);
	$sheet->setCellValue('L'.$i, $row['jkel']);
	$sheet->setCellValue('M'.$i, $row['nisn']);
	$sheet->setCellValue('N'.$i, $row['nik']);
	$sheet->setCellValue('O'.$i, $row['tempatlahir']);
	$sheet->setCellValue('P'.$i, $row['tgllahir']);
	$sheet->setCellValue('Q'.$i, $row['agama']);
	$sheet->setCellValue('R'.$i, $row['abk']);
	$sheet->setCellValue('S'.$i, $row['alamat']);
	$sheet->setCellValue('T'.$i, $row['rt']);
	$sheet->setCellValue('U'.$i, $row['rw']);
	$sheet->setCellValue('V'.$i, $row['dusun']);
	$sheet->setCellValue('W'.$i, $row['desa']);
	$sheet->setCellValue('X'.$i, $row['kecamatan']);
	$sheet->setCellValue('Y'.$i, $row['kdpos']);
	$sheet->setCellValue('Z'.$i, $row['tempattinggal']);
	$sheet->setCellValue('AA1'.$i, $row['transport']);
	$sheet->setCellValue('AB1'.$i, $row['nohp']);
	$sheet->setCellValue('AC1'.$i, $row['notelp']);
	$sheet->setCellValue('AD1'.$i, $row['email']);
	$sheet->setCellValue('AE1'.$i, $row['kps']);
	$sheet->setCellValue('AF1'.$i, $row['nokps']);
	$sheet->setCellValue('AG1'.$i, $row['kwn']);
	$i++;
}

// membuat style border untuk sel hasil data tabel formdaftar
$styleArray = [
			'borders' => [
				'allBorders' => [
					'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
				],
			],
		];
$i = $i - 1;
$sheet->getStyle('A1:AG1'.$i)->applyFromArray($styleArray);

// membuat file xslx dengan variabel spreadsheet dan diberi nama file report formulir perndaftaran
$writer = new Xlsx($spreadsheet);
$writer->save('Report Formulir Pendaftaran.xlsx');
?>