<!DOCTYPE html>
<html>
<head>
	<!-- Memberi Judul Pada Jendela Browser -->
	<title>Form Validasi</title>
	<!-- Memasukkan link boostrap -->
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
	<!-- Memasukan css -->
	<style>
		.warning {
		color: #FF0000;
	}
		.form-group-row {
		font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
	}
	.judul{
		color: white;
		background-color: black;
		margin-top: 1px;
		margin-bottom: 1px;
	}
</style>	
</head>
<body>
<!-- Memasukkan file koneksi2.php untuk menjalankan perintah -->
<?php
include "koneksi2.php";
?>

<!-- Mendeklarasikan variabel error tiap nama-nama pada tabel database untuk fungsi yang error dan tidak -->
<?php
	$error_jenispend = "";
	$error_tglmsk = "";
	$error_nis = "";
	$error_nopeserta = "";
	$error_paud = "";
	$error_tk = "";
	$error_seriskhun = "";
	$error_seriijazah = "";
	$error_hobi = "";
	$error_cita = "";
	$error_namalengkap = "";
	$error_jkel = "";
	$error_nisn = "";
	$error_nik = "";
	$error_tempatlahir = "";
	$error_tgllahir = "";
	$error_agama = "";
	$error_abk = "";
	$error_alamat = "";
	$error_rt = "";
	$error_rw = "";
	$error_dusun = "";
	$error_desa = "";
	$error_kecamatan = "";
	$error_kdpos = "";
	$error_tempattinggal = "";
	$error_transport = "";
	$error_nohp = "";
	$error_notelp = "";
	$error_email = "";
	$error_kps = "";
	$error_nokps = "";
	$error_kwn = "";

	$jenispend = "";
	$tglmsk = "";
	$nis = "";
	$nopeserta = "";
	$paud = "";
	$tk = "";
	$seriskhun = "";
	$seriijazah = "";
	$hobi = "";
	$cita = "";
	$namalengkap = "";
	$jkel = "";
	$nisn = "";
	$nik = "";
	$tempatlahir = "";
	$tgllahir = "";
	$agama = "";
	$abk = "";
	$alamat = "";
	$rt = "";
	$rw = "";
	$dusun = "";
	$desa = "";
	$kecamatan = "";
	$kdpos = "";
	$tempattinggal = "";
	$transport = "";
	$nohp = "";
	$notelp = "";
	$email = "";
	$kps = "";
	$nokps = "";
	$kwn = "";

	// Menngunakan method post untuk perekaman data
	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		// jenis pendaftaran dengan kondisi if else apabila ada variabel error karena kosong sesuai jenisnya
		if (empty($_POST["jenispend"]))
		{
			$error_jenispend = "Jenis Pendaftaran tidak boleh kosong";
		}
		// jenis pendaftaran apabila terisi akan dicek dan direkam isi datanya dengan method post
		else
		{ 
			$jenispend = cek_input($_POST["jenispend"]);
			if (!filter_var($jenispend))
			{
				$jenispend = "";
			}
		}
		}

		// tanggal masuk dengan kondisi if else apabila ada variabel error karena kosong sesuai jenisnya
		if (empty($_POST["tglmsk"]))
			{
				$error_tglmsk = "Tanggal Masuk Tidak Boleh Kosong";
			}
			// apabila terisi akan dicek dan direkam isi datanya dengan method post
			else
			{
				$tglmsk = cek_input ($_POST["tglmsk"]);
			}

		// nis dengan kondisi if else apabila ada variabel error karena kosong sesuai jenisnya
		if (empty($_POST["nis"]))
			{
				$error_nis = "NIS Tidak Boleh Kosong";
			}
			// apabila terisi akan dicek dan direkam isi datanya dengan method post
			else
			{
				$nis = cek_input ($_POST["nis"]);
				if(!is_numeric($nis))
				{
					$nisErr = "Inputan hanya boleh angka";
				}
			}

		// nomor peserta dengan kondisi if else apabila ada variabel error karena kosong sesuai jenisnya
		if (empty($_POST["nopeserta"]))
			{
				$error_nopeserta = "Nomor Peserta Tidak Boleh Kosong";
			}
			// apabila terisi akan dicek dan direkam isi datanya dengan method post
			else
			{
				$nopeserta = cek_input ($_POST["nopeserta"]);
				if(!is_numeric($nopeserta))
				{
					$nopesertaErr = "Inputan hanya boleh angka";
				}
			}

		// Apakah pernah PAUD? dengan kondisi if else apabila ada variabel error karena kosong sesuai jenisnya
		if (empty($_POST["paud"]))
				{
					$error_paud = "PAUD tidak boleh kosong";
				}
				// apabila terisi akan dicek dan direkam isi datanya dengan method post
				else
				{ 
					$paud = cek_input($_POST["paud"]);
					if (!filter_var($paud))
					{
						$error_paud = "";
					}
				}

		// Apakah pernah TK? dengan kondisi if else apabila ada variabel error karena kosong sesuai jenisnya
		if (empty($_POST["tk"]))
				{
					$error_tk = "TK tidak boleh kosong";
				}
				// apabila terisi akan dicek dan direkam isi datanya dengan method post
				else
				{ 
					$tk = cek_input($_POST["tk"]);
					if (!filter_var($tk))
					{
						$error_tk = "";
					}
				}

		// Seri SKHUN dengan kondisi if else apabila ada variabel error karena kosong sesuai jenisnya
		if (empty($_POST["seriskhun"]))
		{
			$error_seriskhun = "Data Seri SKHUN Tidak Boleh Kosong";
		}
		// apabila terisi akan dicek dan direkam isi datanya dengan method post
		else
		{
			$seriskhun = cek_input ($_POST["seriskhun"]);
			if(!is_numeric($seriskhun))
			{
				$seriskhunErr = "Inputan hanya boleh angka";
			}
		}

		// Seri Ijazah dengan kondisi if else apabila ada variabel error karena kosong sesuai jenisnya
		if (empty($_POST["seriijazah"]))
		{
			$error_seriijazah = "Data Seri Ijazah Tidak Boleh Kosong";
		}
		// apabila terisi akan dicek dan direkam isi datanya dengan method post
		else
		{
			$seriijazah = cek_input ($_POST["seriijazah"]);
			if(!is_numeric($seriijazah))
			{
				$seriijazahErr = "Inputan hanya boleh angka";
			}
		}

		// Hobi dengan kondisi if else apabila ada variabel error karena kosong sesuai jenisnya
		if (empty($_POST["hobi"]))
				{
					$error_hobi = "Hobi tidak boleh kosong";
				}
				// apabila terisi akan dicek dan direkam isi datanya dengan method post
				else
				{ 
					$hobi = cek_input($_POST["hobi"]);
					if (!filter_var($hobi))
					{
						$error_hobi = "";
					}
				}

		// Cita-Cita dengan kondisi if else apabila ada variabel error karena kosong sesuai jenisnya
		if (empty($_POST["cita"]))
				{
					$error_cita = "Cita-Cita tidak boleh kosong";
				}
				// apabila terisi akan dicek dan direkam isi datanya dengan method post
				else
				{ 
					$cita = cek_input($_POST["cita"]);
					if (!filter_var($cita))
					{
						$error_cita = "";
					}
				}

		// Nama Lengkap dengan kondisi if else apabila ada variabel error karena kosong sesuai jenisnya
		if (empty($_POST["namalengkap"]))
		{
			$error_namalengkap = "Nama Tidak Boleh Kosong";
		}
		// apabila terisi akan dicek dan direkam isi datanya dengan method post
		else
		{
			$namalengkap = cek_input ($_POST["namalengkap"]);
			if(!preg_match("/^[a-zA-Z ]*$/", $namalengkap))
			{
				$namaErr = "Inputan hanya boleh huruf dan spasi";
			}
		}

		//jenis kelamin dengan kondisi if else apabila ada variabel error karena kosong sesuai jenisnya
		if (empty($_POST["jkel"]))
		{
			$error_jkel = "Jenis kelamin tidak boleh kosong";
		}
		// apabila terisi akan dicek dan direkam isi datanya dengan method post
		else
		{ 
			$jkel = cek_input($_POST["jkel"]);
			if (!filter_var($jkel))
			{
				$error_jkel = "";
			}
		}

		// nisn dengan kondisi if else apabila ada variabel error karena kosong sesuai jenisnya
		if (empty($_POST["nisn"]))
		{
			$error_nisn = "NISN Tidak Boleh Kosong";
		}
		// apabila terisi akan dicek dan direkam isi datanya dengan method post
		else
		{
			$nisn = cek_input ($_POST["nisn"]);
			if(!is_numeric($nisn))
			{
				$nisnErr = "Inputan hanya boleh angka";
			}
		}

		// nik dengan kondisi if else apabila ada variabel error karena kosong sesuai jenisnya
		if (empty($_POST["nik"]))
		{
			$error_nik = "NIK Tidak Boleh Kosong";
		}
		// apabila terisi akan dicek dan direkam isi datanya dengan method post
		else
		{
			$nik = cek_input ($_POST["nik"]);
			if(!is_numeric($nik))
			{
				$nikErr = "Inputan hanya boleh angka";
			}
		}


		// Tempat Lahir dengan kondisi if else apabila ada variabel error karena kosong sesuai jenisnya
		if (empty($_POST["tempatlahir"]))
		{
			$error_tempatlahir = "Tempat Lahir Tidak Boleh Kosong";
		}
		// apabila terisi akan dicek dan direkam isi datanya dengan method post
		else
		{
			$tempatlahir = cek_input ($_POST["tempatlahir"]);
			if(!preg_match("/^[a-zA-Z ]*$/", $tempatlahir))
			{
				$tempatlahirErr = "Inputan hanya boleh huruf dan spasi";
			}
		}

		// Tanggal Lahir dengan kondisi if else apabila ada variabel error karena kosong sesuai jenisnya
		if (empty($_POST["tgllahir"]))
		{
		$error_tgllahir = "Tanggal lahir tidak boleh kosong";
		}
		// apabila terisi akan dicek dan direkam isi datanya dengan method post
		else
		{ 
			$tgllahir = cek_input($_POST["tgllahir"]); 
		}

		// Agama dengan kondisi if else apabila ada variabel error karena kosong sesuai jenisnya
		if (empty($_POST["agama"]))
		{
			$error_agama = "Agama tidak boleh kosong";
		}
		// apabila terisi akan dicek dan direkam isi datanya dengan method post
		else
		{ 
			$agama = cek_input($_POST["agama"]);
			if (!filter_var($agama))
			{
				$agamaerr = "Pilih Salah Satu";
			}
		}

		//Bekebutuhan Khusus dengan kondisi if else apabila ada variabel error karena kosong sesuai jenisnya
		if (empty($_POST["abk"]))
		{
			$error_abk = "Berkebutuhan khusus tidak boleh kosong";
		}
		// apabila terisi akan dicek dan direkam isi datanya dengan method post
		else
		{ 
			$abk = cek_input($_POST["abk"]);
			if (!filter_var($abk))
			{
				$abkerr = "Pilih Salah Satu";
			}
		}

		// Alamat dengan kondisi if else apabila ada variabel error karena kosong sesuai jenisnya
		if (empty($_POST["alamat"]))
		{
			$error_alamat = "Alamat Tidak Boleh Kosong";
		}
		// apabila terisi akan dicek dan direkam isi datanya dengan method post
		else
		{
			$alamat = cek_input ($_POST["alamat"]);
			if(!preg_match("/^[a-zA-Z ]*$/", $alamat))
			{
				$alamatErr = "Inputan hanya boleh huruf dan spasi";
			}
		}			

		//RT dengan kondisi if else apabila ada variabel error karena kosong sesuai jenisnya
		if (empty($_POST["rt"]))
		{
			$error_rt = "RT tidak boleh kosong";
		}
		// apabila terisi akan dicek dan direkam isi datanya dengan method post
		else
		{
			$rt = cek_input($_POST["rt"]);
			if (!is_numeric($rt))
			{
				$rterr = 'RT hanya boleh angka';
			}	
		}

		//RW dengan kondisi if else apabila ada variabel error karena kosong sesuai jenisnya
		if (empty($_POST["rw"]))
		{
			$error_rw = "RW tidak boleh kosong";
		}
		// apabila terisi akan dicek dan direkam isi datanya dengan method post
		else
		{
			$rw = cek_input($_POST["rw"]);
			if (!is_numeric($rw))
			{
				$rwerr = 'RW hanya boleh angka';
			}	
		}

		// Dusun dengan kondisi if else apabila ada variabel error karena kosong sesuai jenisnya
		if (empty($_POST["dusun"]))
		{
			$error_dusun = "Dusun Tidak Boleh Kosong";
		}
		// apabila terisi akan dicek dan direkam isi datanya dengan method post
		else
		{
			$nama = cek_input ($_POST["dusun"]);
			if(!preg_match("/^[a-zA-Z ]*$/", $dusun))
			{
				$dusunErr = "Inputan hanya boleh huruf dan spasi";
			}
		}

		// Desa dengan kondisi if else apabila ada variabel error karena kosong sesuai jenisnya
		if (empty($_POST["desa"]))
		{
			$error_desa = "Desa Tidak Boleh Kosong";
		}
		// apabila terisi akan dicek dan direkam isi datanya dengan method post
		else
		{
			$desa = cek_input ($_POST["desa"]);
			if(!preg_match("/^[a-zA-Z ]*$/", $desa))
			{
				$desaErr = "Inputan hanya boleh huruf dan spasi";
			}
		}

		// Kecamatan dengan kondisi if else apabila ada variabel error karena kosong sesuai jenisnya
		if (empty($_POST["kecamatan"]))
		{
			$error_kecamatan = "Kecamatan Tidak Boleh Kosong";
		}
		// apabila terisi akan dicek dan direkam isi datanya dengan method post
		else
		{
			$kecamatan = cek_input ($_POST["kecamatan"]);
			if(!preg_match("/^[a-zA-Z ]*$/", $kecamatan))
			{
				$kecamatanErr = "Inputan hanya boleh huruf dan spasi";
			}
		}

		// Kode Pos dengan kondisi if else apabila ada variabel error karena kosong sesuai jenisnya
		if (empty($_POST["kdpos"]))
		{
			$error_kdpos = "Kode Pos tidak boleh kosong";
		}
		// apabila terisi akan dicek dan direkam isi datanya dengan method post
			else
			{
				$kdpos = cek_input($_POST["kdpos"]);
				if (!is_numeric($kdpos))
				{
					$error_kdpos = 'Kode Pos hanya boleh angka';
				}
			}
		
		//Tempat Tinggal dengan kondisi if else apabila ada variabel error karena kosong sesuai jenisnya
		if (empty($_POST["tempattinggal"]))
		{
			$error_tempattinggal = "Tempat tinggal tidak boleh kosong";
		}
		// apabila terisi akan dicek dan direkam isi datanya dengan method post
		else
		{ 
			$tempattinggal = cek_input($_POST["tempattinggal"]);
			if (!filter_var($tempattinggal))
			{
				$error_tempattinggal = "Pilih Salah Satu";
			}
		}

		//Moda Transportasi dengan kondisi if else apabila ada variabel error karena kosong sesuai jenisnya
		if (empty($_POST["transport"]))
		{
			$error_transport = "Moda transportasi tidak boleh kosong";
		}
		// apabila terisi akan dicek dan direkam isi datanya dengan method post
		else
		{ 
			$transport = cek_input($_POST["transport"]);
			if (!filter_var($transport))
			{
				$error_transport = "Pilih Salah Satu";
			}
		}

		// Nomor Handphone dengan kondisi if else apabila ada variabel error karena kosong sesuai jenisnya
		if (empty($_POST["nohp"]))
			{
				$error_nohp = "Nomor HP tidak boleh kosong";
			}
			// apabila terisi akan dicek dan direkam isi datanya dengan method post
				else
				{
					$nohp = cek_input($_POST["nohp"]);
					if (!is_numeric($nohp))
					{
						$error_nohp = 'Nomor HP hanya boleh angka';
					}
				}
			
		// Nomor Telepon dengan kondisi if else apabila ada variabel error karena kosong sesuai jenisnya
		if (empty($_POST["notelp"]))
		{
			$error_notelp = "Nomor Telepon tidak boleh kosong";
		}
		// apabila terisi akan dicek dan direkam isi datanya dengan method post
			else
			{
				$notelp = cek_input($_POST["notelp"]);
				if (!is_numeric($notelp))
				{
					$error_notelp = 'Nomor Telepon hanya boleh angka';
				}
			}

		// Email dengan kondisi if else apabila ada variabel error karena kosong sesuai jenisnya
		if (empty($_POST["email"]))
		{
			$error_email = "Email tidak boleh kosong";
		}
		// apabila terisi akan dicek dan direkam isi datanya dengan method post
		else
		{
		$email = cek_input($_POST["email"]);
		if (!filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			$error_email = "Format email invalid";
		}
	}

		// Penerima KPS dengan kondisi if else apabila ada variabel error karena kosong sesuai jenisnya
		if (empty($_POST["kps"]))
		{
			$error_kps = "Penerima KPS tidak boleh kosong";
		}
		// apabila terisi akan dicek dan direkam isi datanya dengan method post
		else
		{ 
			$kps = cek_input($_POST["kps"]);
			if (!filter_var($kps))
			{
				$error_kps = "Pilih Salah Satu";
			}
		}

		// Nomor KPS dengan kondisi if else apabila ada variabel error karena kosong sesuai jenisnya
		if (empty($_POST["nokps"]))
		{
			$error_nokps = "Nomor KPS tidak boleh kosong";
		}
		// apabila terisi akan dicek dan direkam isi datanya dengan method post
			else
			{
				$telp = cek_input($_POST["nokps"]);
				if (!is_numeric($nokps))
				{
					$error_nokps = 'Nomor KPS hanya boleh angka';
				}
			}
		
		// Kewarganegaraan dengan kondisi if else apabila ada variabel error karena kosong sesuai jenisnya
		if (empty($_POST["kwn"]))
		{
			$error_kwn = "Kewarganegaraan tidak boleh kosong";
		}
		// apabila terisi akan dicek dan direkam isi datanya dengan method post
		else
		{ 
			$kwn = cek_input($_POST["kwn"]);
			if (!filter_var($kwn))
			{
				$error_kwn = "";
			}
		}

// Menggunakan mysqli_connect agar terkoneksi dengan database
$koneksi = $koneksi = mysqli_connect($host, $user, $password, $database);
// Apanila tidak terkoneksi akan memunculkan koneksi gagal
if (!$koneksi) {
	die ("Koneksi Gagal:".mysqli_connect_error());
}

// Query untuk memasukkan data ke dalam tabel database
$sql = "INSERT INTO formdaftar ( jenispend, tglmsk, nis, nopeserta, paud, tk, seriskhun, seriijazah, hobi, cita, namalengkap, jkel, nisn, nik, tempatlahir, tgllahir, agama, abk, alamat, rt, rw, dusun, desa, kecamatan, kdpos, tempattinggal, transport, nohp, notelp, email, kps, nokps, kwn)

VALUES ('$jenispend', '$tglmsk', '$nis', '$nopeserta', '$paud', '$tk', '$seriskhun', '$seriijazah', '$hobi', '$cita', '$namalengkap', '$jkel', '$nisn', '$nik', '$tempatlahir', '$tgllahir', '$agama', '$abk', '$alamat', '$rt', '$rw', '$dusun', '$desa', '$kecamatan', '$kdpos', '$tempattinggal', '$transport', '$nohp', '$notelp', '$email', '$kps', '$nokps', '$kwn')";

// Menggunakan mysqli_query untuk pengecekan variabel koneksi dan sql apabila error akan emmunculkan koneksi gagal dengan mysqli_error
mysqli_query($koneksi, $sql) or die (mysqli_error($koneksi));

// Menggunakan function untuk variabel data dengan trim, stripslashes htmlspecialchats, dan return
function cek_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>

<!-- Berisi kerangka berupa kelas tiap masing - masing variabel -->
<div class="row">
<div class="col-md-6">
<div class="card">
	<div class="card-header"><center><h1>
		FORMULIR PESERTA DIDIK</h1></center>
		
	</div>
<div class="judul"><h3>REGISTRASI PESERTA DIDIK</h3></div>
<div class="card-body">
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 

	<div class="form-group row">
		<label for="jenispend" class="col-sm-10 col-form-label">Jenis Pendaftaran</label>
		<div class="col-sm-10">
			<input type="radio" name="jenispend" <?php if (isset($jenispend) && $jenispend=="Siswa Baru") echo "checked";?>  value="Siswa Baru">01)Siswa Baru
			<input type="radio" name="jenispend" <?php if (isset($jenispend) && $jenispend=="Pindahan") echo "checked";?>  value="Pindahan">02)Pindahan<span class="warning">
			<?php echo $error_jenispend;?></span> 
		</div>
	</div>	

<div class="form-group row">
		<label for="tglmsk" class="col-sm-10 col-form-label">Tanggal Masuk</label>
		<div class="col-sm-10">
			<input type="date" name="tglmsk" class="<?php echo($error_tglmsk !="" ? "is-invalid" : ""); ?>" id="tglmsk" placeholder="Tanggal Masuk" value="<?php echo $tglmsk; ?>"><span class="warning"><?php echo $error_tglmsk; ?></span>
		</div>
	</div>

<div class="form-group row">
		<label for="nis" class="col-sm-10 col-form-label">NIS</label>
		<div class="col-sm-10">
			<input type="text" name="nis" class="form-control <?php echo($error_nis !="" ? "is-invalid" : ""); ?>" id="nis" placeholder="10 digit" value="<?php echo $nis; ?>"><span class="warning"><?php echo $error_nis; ?></span>
		</div>
	</div>

<div class="form-group row">
		<label for="nopeserta" class="col-sm-10 col-form-label">Nomor Peserta</label>
		<div class="col-sm-10">
			<input type="text" name="nopeserta" class="form-control <?php echo($error_nopeserta !="" ? "is-invalid" : ""); ?>" id="nopeserta" placeholder="20 digit" value="<?php echo $nopeserta; ?>"><span class="warning"><?php echo $error_nopeserta; ?></span>
		<label for="nopeserta" class="col-sm-10 col-form-label">*Nomor Peserta Ujian adalah 20 Digit yang tertera dalam sertifikat SKHUN SD, diisi bagi peserta didik jenjang SMP</label>	
		</div>
	</div>

<div class="form-group row">
		<label for="paud" class="col-sm-10 col-form-label">Apakah pernah PAUD?</label>
		<div class="col-sm-10">
			<input type="radio" name="paud" <?php if (isset($paud) && $paud=="yapaud") echo "checked";?>  value="Ya">Ya
			<input type="radio" name="paud" <?php if (isset($paud) && $paud=="tidakpaud") echo "checked";?>  value="Tidak">Tidak<span class="warning">
			<?php echo $error_paud;?></span> 
		</div>
	</div>

<div class="form-group row">
		<label for="tk" class="col-sm-10 col-form-label">Apakah pernah TK?</label>
		<div class="col-sm-10">
			<input type="radio" name="tk" <?php if (isset($tk) && $tk=="yatk") echo "checked";?>  value="Ya">Ya
			<input type="radio" name="tk" <?php if (isset($tk) && $tk=="tidaktk") echo "checked";?>  value="Tidak">Tidak<span class="warning">
			<?php echo $error_tk;?></span> 
		</div>
	</div>

<div class="form-group row">
		<label for="seriskhun" class="col-sm-10 col-form-label">No. Seri SKHUN Sebelumnya</label>
		<div class="col-sm-10">
			<input type="text" name="seriskhun" class="form-control <?php echo($error_seriskhun !="" ? "is-invalid" : ""); ?>" id="seriskhun" placeholder="16 digit" value="<?php echo $seriskhun; ?>"><span class="warning"><?php echo $error_seriskhun; ?></span>
		<label for="seriskhun" class="col-sm-10 col-form-label">Diisi 16 Digit yang tertera di SKHUN SD - diisi bagi PD jenjang SMP</label>	
		</div>
	</div>

<div class="form-group row">
				<label for="seriijazah" class="col-sm-2 col-form-label">No. Seri Ijazah Sebelumnya</label>
				<div class="col-sm-10">
					<input type="text" name="seriijazah" class="form-control<?php echo ($error_seriijazah!=""?"is-invalid":"");?>" id = "seriijazah" placeholder = "16 digit" value="<?php echo $seriijazah; ?>"><span class="warning"><?php echo $error_seriijazah;?></span>
				<label for="seriijazah" class="col-sm-10 col-form-label">Diisi 16 Digit yang tertera di Ijazah SD - diisi bagi PD jenjang SMP</label>		
				</div>
			</div>

<div class="form-group row">
		<label for="hobi" class="col-sm-10 col-form-label">Hobi</label>
		<div class="col-sm-10">
			<input type="radio" name="hobi" <?php if (isset($hobi) && $hobi=="olahraga") echo "checked";?>  value="Olahraga">A) Olah Raga
			<input type="radio" name="hobi" <?php if (isset($hobi) && $hobi=="kesenian") echo "checked";?>  value="Kesenian">B) Kesenian
			<input type="radio" name="hobi" <?php if (isset($hobi) && $hobi=="membaca") echo "checked";?>  value="Membaca">C) Membaca
			<input type="radio" name="hobi" <?php if (isset($hobi) && $hobi=="menulis") echo "checked";?>  value="Menulis">D) Menulis
			<input type="radio" name="hobi" <?php if (isset($hobi) && $hobi=="travelling") echo "checked";?>  value="Travelling">E) Travelling
			<span class="warning">
			<?php echo $error_hobi;?></span> 
		</div>
	</div>

<div class="form-group row">
		<label for="cita" class="col-sm-10 col-form-label">Cita - Cita</label>
		<div class="col-sm-10">
			<input type="radio" name="cita" <?php if (isset($cita) && $cita=="pns") echo "checked";?>  value="PNS">A) PNS
			<input type="radio" name="cita" <?php if (isset($cita) && $cita=="tnipolri") echo "checked";?>  value="TNI/POLRO">B) TNI/POLRI
			<input type="radio" name="cita" <?php if (isset($cita) && $cita=="gurudosen") echo "checked";?>  value="Guru/Dosen">C) Guru/Dosen
			<input type="radio" name="cita" <?php if (isset($cita) && $cita=="dokter") echo "checked";?>  value="Dokter">D) Dokter
			<input type="radio" name="cita" <?php if (isset($cita) && $cita=="politikus") echo "checked";?>  value="Politikus">E) Politikus
			<input type="radio" name="cita" <?php if (isset($cita) && $cita=="wiraswasta") echo "checked";?>  value="Wiraswasta">F) Wiraswasta
			<input type="radio" name="cita" <?php if (isset($cita) && $cita=="seni") echo "checked";?>  value="Seni/Lukis/Artis/Sejenis">G) Seni/Lukis/Artis/Sejenis
			<input type="radio" name="cita" <?php if (isset($cita) && $cita=="lainnya") echo "checked";?>  value="Lainnya">H) Lainnya	
			<span class="warning">
			<?php echo $error_cita;?></span> 
		</div>
	</div>


<div class="judul"><h3>DATA PRIBADI</h3></div>

	<div class="form-group row">
		<label for="namalengkap" class="col-sm-10 col-form-label">Nama Lengkap</label>
		<div class="col-sm-10">
			<input type="text" name="namalengkap" class="form-control <?php echo ($error_namalengkap !="" ? "is-invalid" : "");?>" id="namalengkap" placeholder="Nama lengkap" value="<?php echo $namalengkap; ?>"><span class="warning"> <?php echo $error_namalengkap; ?></span>
		</div>
	</div>

	<div class="form-group row">
		<label for="jkel" class="col-sm-10 col-form-label">Jenis Kelamin</label>
		<div class="col-sm-10">
			<input type="radio" name="jkel" <?php if (isset($jkel) && $jkel=="Laki-laki") echo "checked";?> value="Laki-laki">Laki-laki 
			<input type="radio" name="jkel" <?php if (isset($jkel) && $jkel=="Perempuan") echo "checked";?> value="Perempuan">Perempuan<span class="warning"><?php echo $error_jkel; ?></span> 
		</div>
	</div>

	<div class="form-group row">
		<label for="nisn" class="col-sm-10 col-form-label">NISN</label>
		<div class="col-sm-10">
			<input type="text" name="nisn" class="form-control <?php echo($error_nisn !="" ? "is-invalid" : ""); ?>" id="nisn" placeholder="10 digit" value="<?php echo $nisn; ?>"><span class="warning"><?php echo $error_nisn; ?></span>
		</div>
	</div>

	<div class="form-group row">
		<label for="nik" class="col-sm-10 col-form-label">NIK / No. KITAS (Untuk WNA)</label>
		<div class="col-sm-10">
			<input type="text" name="nik" class="form-control <?php echo($error_nik !="" ? "is-invalid" : ""); ?>" id="nik" placeholder="16 digit" value="<?php echo $nik; ?>"><span class="warning"><?php echo $error_nik; ?></span>
		</div>
	</div>

	<div class="form-group row">
		<label for="tempatlahir" class="col-sm-10 col-form-label">Tempat Lahir</label>
		<div class="col-sm-10">
			<input type="text" name="tempatlahir" class="form-control <?php echo($error_tempatlahir !="" ? "is-invalid" : ""); ?>" id="tempatlahir" placeholder="Tempat lahir" value="<?php echo $tempatlahir; ?>"><span class="warning"><?php echo $error_tempatlahir; ?></span>
		</div>
	</div>

	<div class="form-group row">
		<label for="tgllahir" class="col-sm-10 col-form-label">Tanggal Lahir</label>
		<div class="col-sm-10">
			<input type="date" name="tgllahir" class="<?php echo($error_tgllahir !="" ? "is-invalid" : ""); ?>" id="tgllahir" placeholder="Tanggal lahir" value="<?php echo $tgllahir; ?>"><span class="warning"><?php echo $error_tgllahir; ?></span>
		</div>
	</div>

<div class="form-group row">
		<label for="agama" class="col-sm-10 col-form-label">Agama & Kepercayaan</label>
		<div class="col-sm-10">
			<input type="radio" name="agama" <?php if (isset($agama) && $agama=="Islam") echo "checked";?> value="Islam">01) Islam 
			<input type="radio" name="agama" <?php if (isset($agama) && $agama=="kristen") echo "checked";?> value="Kristen">02) Kristen/Protestan
			<input type="radio" name="agama" <?php if (isset($agama) && $agama=="katolik") echo "checked";?> value="Katolik">03) Katolik 
			<input type="radio" name="agama" <?php if (isset($agama) && $agama=="hindu") echo "checked";?> value="Hindu">04) Hindu
			<input type="radio" name="agama" <?php if (isset($agama) && $agama=="budha") echo "checked";?> value="Budha">05) Budha 
			<input type="radio" name="agama" <?php if (isset($agama) && $agama=="konghucu") echo "checked";?> value="Konghucu">06) Konghucu
			<input type="radio" name="agama" <?php if (isset($agama) && $agama=="lainagama") echo "checked";?> value="Lainnya">99) Lainnya
			<span class="warning"><?php echo $error_agama; ?></span> 
		</div>
	</div>

<div class="form-group row">
		<label for="abk" class="col-sm-10 col-form-label">Berkebutuhan Khusus</label>
		<div class="col-sm-10">
			<input type="radio" name="abk" <?php if (isset($abk) && $abk=="tidakabk") echo "checked";?> value="Tidak Abk">01) Tidak 
			<input type="radio" name="abk" <?php if (isset($abk) && $abk=="netra") echo "checked";?> value="Netra">02) Netra
			<input type="radio" name="abk" <?php if (isset($abk) && $abk=="rungu") echo "checked";?> value="Rungu">03) Rungu
			<input type="radio" name="abk" <?php if (isset($abk) && $abk=="grahitaringan") echo "checked";?> value="Grahita Ringan">04) Grahita Ringan
			<input type="radio" name="abk" <?php if (isset($abk) && $abk=="grahitasedang") echo "checked";?> value="Grahita Sedang">05) Grahita Sedang
			<input type="radio" name="abk" <?php if (isset($abk) && $abk=="daksaringan") echo "checked";?> value="Daksa Ringan">06) Daksa Ringan
			<input type="radio" name="abk" <?php if (isset($abk) && $abk=="daksasedang") echo "checked";?> value="Daksa Sedang">07) Daksa Sedang
			<input type="radio" name="abk" <?php if (isset($abk) && $abk=="laras") echo "checked";?> value="Laras">08) Laras 
			<input type="radio" name="abk" <?php if (isset($abk) && $abk=="wicara") echo "checked";?> value="Wicara">09) Wicara
			<input type="radio" name="abk" <?php if (isset($abk) && $abk=="tunaganda") echo "checked";?> value="Tuna Ganda">10) Tuna Ganda
			<input type="radio" name="abk" <?php if (isset($abk) && $abk=="hiperaktif") echo "checked";?> value="Hiperaktif">11) Hiperaktif
			<input type="radio" name="abk" <?php if (isset($abk) && $abk=="cerdas") echo "checked";?> value="Cerdas Istimewa">12) Cerdas Istimewa
			<input type="radio" name="abk" <?php if (isset($abk) && $abk=="bakat") echo "checked";?> value="Bakat">13) Bakat Istimewa
			<input type="radio" name="abk" <?php if (isset($abk) && $abk=="kesulitan") echo "checked";?> value="Kesulitan Belajar">14) Kesulitan Belajar
			<input type="radio" name="abk" <?php if (isset($abk) && $abk=="narkoba") echo "checked";?> value="Narkoba">15) Narkoba
			<input type="radio" name="abk" <?php if (isset($abk) && $abk=="indigo") echo "checked";?> value="Indigo">16) Indigo
			<input type="radio" name="abk" <?php if (isset($abk) && $abk=="sindrome") echo "checked";?> value="Down Sindrome">17) Down Sindrome
			<input type="radio" name="abk" <?php if (isset($abk) && $abk=="autis") echo "checked";?> value="Autis">18) Autis
			<span class="warning"><?php echo $error_abk; ?></span> 
		</div>
	</div>


	<div class="form-group row">
		<label for="alamat" class="col-sm-10 col-form-label">Alamat Jalan</label>
		<div class="col-sm-10">
		<input type="text" name="alamat" class="form-control <?php echo ($error_alamat !="" ? "is-invalid" : "");?>" id="alamat" placeholder="Alamat" value="<?php echo $alamat; ?>"><span class="warning"><?php echo $error_alamat; ?></span>
		</div>
	</div>

	<div class="form-group row">
		<label for="rt" class="col-sm-10 col-form-label">RT</label>
		<div class="col-sm-10">
			<input type="text" name="rt" class="form-control <?php echo ($error_rt !="" ? "is-invalid" : "");?>" id="rt" placeholder="RT" value="<?php echo $rt; ?>"><span class="warning"><?php echo $error_rt; ?></span>
		</div>
	</div>

	<div class="form-group row">
		<label for="rw" class="col-sm-10 col-form-label">RW</label>
		<div class="col-sm-10">
			<input type="text" name="rw" class="form-control <?php echo ($error_rw !="" ? "is-invalid" : "");?>" id="rw" placeholder="RW" value="<?php echo $rw; ?>"><span class="warning"><?php echo $error_rw; ?></span>
		</div>
	</div>

	<div class="form-group row">
		<label for="dusun" class="col-sm-10 col-form-label">Nama Dusun</label>
		<div class="col-sm-10">
			<input type="text" name="dusun" class="form-control <?php echo ($error_dusun !="" ? "is-invalid" : "");?>" id="dusun" placeholder="Nama dusun" value="<?php echo $dusun; ?>"><span class="warning"><?php echo $error_dusun; ?></span>
		</div>
	</div>

	<div class="form-group row">
		<label for="desa" class="col-sm-10 col-form-label">Nama Kelurahan / Desa</label>
		<div class="col-sm-10">
			<input type="text" name="desa" class="form-control <?php echo ($error_desa !="" ? "is-invalid" : "");?>" id="desa" placeholder="Nama kelurahan" value="<?php echo $desa; ?>"><span class="warning"><?php echo $error_desa; ?></span>
		</div>
	</div>

	<div class="form-group row">
		<label for="kecamatan" class="col-sm-10 col-form-label">Kecamatan</label>
		<div class="col-sm-10">
			<input type="text" name="kecamatan" class="form-control <?php echo ($error_kecamatan !="" ? "is-invalid" : "");?>" id="kecamatan" placeholder="Nama kecamatan" value="<?php echo $kecamatan; ?>"><span class="warning"><?php echo $error_kecamatan; ?></span>
		</div>
	</div>

	<div class="form-group row">
		<label for="kdpos" class="col-sm-10 col-form-label">Kode Pos</label>
		<div class="col-sm-10">
		<input type="text" name="kdpos" class="form-control <?php echo ($error_kdpos !="" ? "is-invalid" : "");?>" id="kdpos" placeholder="Kode pos" value="<?php echo $kdpos; ?>"><span class="warning"><?php echo $error_kdpos; ?></span>
		</div>
	</div>

	<div class="form-group row">
		<label for="tempattinggal" class="col-sm-10 col-form-label">Tempat Tinggal</label>
		<div class="col-sm-10">
			<input type="radio" name="tempattinggal" <?php if (isset($tempattinggal) && $tempattinggal=="ortu") echo "checked";?> value="Bersama Orang Tua">01) Bersama Orang Tua 
			<input type="radio" name="tempattinggal" <?php if (isset($tempattinggal) && $tempattinggal=="wali") echo "checked";?> value="Wali">02) Wali
			<input type="radio" name="tempattinggal" <?php if (isset($tempattinggal) && $tempattinggal=="kos") echo "checked";?> value="Kos">03) Kos 
			<input type="radio" name="tempattinggal" <?php if (isset($tempattinggal) && $tempattinggal=="asrama") echo "checked";?> value="Asrama">04) Asrama
			<input type="radio" name="tempattinggal" <?php if (isset($tempattinggal) && $tempattinggal=="panti") echo "checked";?> value="Panti">05) Panti Asuhan 
			<input type="radio" name="tempattinggal" <?php if (isset($tempattinggal) && $tempattinggal=="tempatlain") echo "checked";?> value="Lainnya">09) Lainnya
			<span class="warning"><?php echo $error_tempattinggal; ?></span> 
		</div>
	</div>

	<div class="form-group row">
		<label for="transport" class="col-sm-10 col-form-label">Moda Transportasi</label>
		<div class="col-sm-10">
			<input type="radio" name="transport" <?php if (isset($transport) && $transport=="jalankaki") echo "checked";?> value="Jalan Kaki">01) Jalan Kaki
			<input type="radio" name="transport" <?php if (isset($transport) && $transport=="kendaraanpribadi") echo "checked";?> value="Kendaraan Pribadi">02) Kendaraan Pribadi
			<input type="radio" name="transport" <?php if (isset($transport) && $transport=="kendaraanumum") echo "checked";?> value="Kendaraan Umum">03) Kendaraan Umum 
			<input type="radio" name="transport" <?php if (isset($transport) && $transport=="ojek") echo "checked";?> value="Ojek">04) Ojek
			<span class="warning"><?php echo $error_transport; ?></span> 
		</div>
	</div>


	<div class="form-group row">
				<label for="nohp" class="col-sm-2 col-form-label">28 Nomor HP</label>
				<div class="col-sm-10">
					<input type="text" name="nohp" class="form-control<?php echo ($error_nohp!=""?"is-invalid":"");?>" id = "nohp" placeholder = "nohp" value="<?php echo $nohp; ?>"><span class="warning"><?php echo $error_nohp;?></span>
				</div>
			</div>

	<div class="form-group row">
				<label for="notelp" class="col-sm-2 col-form-label">29 Nomor Telepon</label>
				<div class="col-sm-10">
					<input type="text" name="notelp" class="form-control<?php echo ($error_notelp!=""?"is-invalid":"");?>" id = "notelp" placeholder = "notelp" value="<?php echo $notelp; ?>"><span class="warning"><?php echo $error_notelp;?></span>
				</div>
			</div>		

	<div class="form-group row">
				<label for="email" class="col-sm-2 col-form-label">30 Email</label>
				<div class="col-sm-10">
					<input type="text" name="email" class="form-control<?php echo ($error_email!=""?"is-invalid":"");?>" id = "email" placeholder = "email" value="<?php echo $email; ?>"><span class="warning"><?php echo $error_email;?></span>
				</div>
			</div>

	<div class="form-group row">
		<label for="kps" class="col-sm-10 col-form-label">31 Penerima KPS/PKH</label>
		<div class="col-sm-10">
			<input type="radio" name="kps" class="<?php if (isset($kps) && $penerima=="Iyakps") echo "checked";?>"  value="Iya">Iya 
			<input type="radio" name="kps" class="<?php if (isset($kps) && $penerima=="Tidakkps") echo "checked";?>"  value="Tidak">Tidak<span class="warning"><?php echo $error_kps; ?></span> 
		</div>
	</div>		

	<div class="form-group row">
		<label for="nokps" class="col-sm-10 col-form-label">Nomor KPS/PKH (apabila menerima)</label>
		<div class="col-sm-10">
			<input type="text" name="nokps" class="form-control <?php echo ($error_nokps !="" ? "is-invalid" : "");?>" id="nokps" placeholder="*apabila menerima" value="<?php echo $nokps; ?>"><span class="warning"><?php echo $error_nokps; ?></span>
		</div>
	</div>

	<div class="form-group row">
		<label for="kwn" class="col-sm-10 col-form-label">Kewarganegaraan</label>
		<div class="col-sm-10">
			<input type="radio" name="kwn" <?php if (isset($kwn) && $kwn=="Indonesia") echo "checked";?>  value="Indonesia">Indonesia (WNI) 
			<input type="radio" name="kwn" <?php if (isset($kwn) && $kwn=="Asing") echo "checked";?>  value="Asing">Asing (WNA)<span class="warning"><?php echo $error_kwn; ?></span> 
		</div>
	</div>	

	<div class="form-group row">
		<div class="col-sm-10">
			<button type="submit" class="btn-primary">Daftar</button>
			<a target="_blank" href="reportexcelform.php">EXPORT KE EXCEL</a>
		</div>
	</div>
</form>
</div>
</div>
</div>
</div>

<!-- Menggunakan echo untuk print hasil input formulir yang telah diisi -->
<?php
	echo "<h2>Hasil Input Formulir Anda:</h2>";
	echo "<h3>REGISTRASI PESERTA DIDIK</h3>";
	echo "1 Jenis Pendaftaran : ".$jenispend;
	echo "<br>";
	echo "2 Tanggal Masuk Sekolah: ".$tglmsk;
	echo "<br>";
	echo "3 NIS : ".$nis;
	echo "<br>";
	echo "4 Nomor Peserta Ujian : ".$nopeserta;
	echo "<br>";
	echo "5 Apakah Pernah PAUD : ".$paud;
	echo "<br>";
	echo "6 Apakah Pernah TK : ".$tk;
	echo "<br>";
	echo "7 No Seri SKHUN Sebelumnya : ".$seriskhun;
	echo "<br>";
	echo "8 No Seri Ijazah Sebelumnya : ".$seriijazah;
	echo "<br>";
	echo "9 Hobi : ".$hobi;
	echo "<br>";
	echo "10 Cita-Cita : ".$cita;
	echo "<br>";
	echo "<h3>DATA PRIBADI</h3>";
	echo "11 Nama Lengkap  : ".$namalengkap;
	echo "<br>";
	echo "12 Jenis Kelamin : ".$jkel;
	echo "<br>";
	echo "13 NISN : ".$nisn;
	echo "<br>";
	echo "14 NIK : ".$nik;
	echo "<br>";
	echo "15 Tempat Lahir : ".$tempatlahir;
	echo "<br>";
	echo "16 Tanggal Lahir : ".$tgllahir;
	echo "<br>";
	echo "17 Agama : ".$agama;
	echo "<br>";
	echo "18 Berkebutuhan Khusus : ".$abk;
	echo "<br>";
	echo "19 Alamat Jalan : ".$alamat;
	echo "<br>";
	echo "20 RT : ".$rt;
	echo "<br>";
	echo "21 RW : ".$rw;
	echo "<br>";
	echo "22 Nama Dusun : ".$dusun;
	echo "<br>";
	echo "23 Nama Kelurahan/Desa  : ".$desa;
	echo "<br>";
	echo "24 Kecamatan : ".$kecamatan;
	echo "<br>";
	echo "25 Kode Pos  : ".$kdpos;
	echo "<br>";
	echo "26 Tempat Tinggal : ".$tempattinggal;
	echo "<br>";
	echo "27 Moda Transportasi : ".$transport;
	echo "<br>";
	echo "28 Nomor HP : ".$nohp;
	echo "<br>";
	echo "29 Nomor Telepon : ".$notelp;
	echo "<br>";
	echo "30 E-mail Pribadi : ".$email;
	echo "<br>";
	echo "31 Penerima KPS/PKH/KIP : ".$kps;
	echo "<br>";
	echo "32 No. KPS/KKS/PKH/KIP : ".$nokps;
	echo "<br>";
	echo "33 Kewarganegaraan : ".$kwn;
	echo "<br>";
	?>	
</body>
</html>