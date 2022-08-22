<!DOCTYPE html>
<html>

<head>
	<title>Kalkulator Agam Surya</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<?php

	function tambah($bil1, $bil2)
	{
		return $bil1 + $bil2;
	}
	function kurang($bil1, $bil2)
	{
		return $bil1 - $bil2;
	}
	function kali($bil1, $bil2)
	{
		return $bil1 * $bil2;
	}
	function bagi($bil1, $bil2)
	{
		return $bil1 / $bil2;
	}
	function pangkat($bil1, $bil2)
	{
		$hasil = $bil1;
		for ($i = 1; $i < $bil2; $i++) {
			$hasil *= $bil1;
		}
		if ($hasil == "INF") {
			$hasil = "diluar jangkauan";
		}
		return $hasil;
	}

	if (isset($_POST['hitung'])) {
		$bil1 = $_POST['bil1'];
		$bil2 = $_POST['bil2'];
		$operasi = $_POST['operasi'];
		switch ($operasi) {
			case 'tambah':
				$hasil = tambah($bil1, $bil2);
				break;
			case 'kurang':
				$hasil = kurang($bil1, $bil2);
				break;
			case 'kali':
				$hasil = kali($bil1, $bil2);
				break;
			case 'bagi':
				$hasil = bagi($bil1, $bil2);
				break;
			case 'pangkat':
				$hasil = pangkat($bil1, $bil2);
				break;
		}
	}
	?>
	<div class="kalkulator">
		<h2 class="judul">KALKULATOR</h2>
		<form method="post" action="index.php">
			<input type="number" name="bil1" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Pertama">
			<input type="number" name="bil2" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Kedua">
			<select class="opt" name="operasi">
				<option value="tambah">+</option>
				<option value="kurang">-</option>
				<option value="kali">x</option>
				<option value="bagi">/</option>
				<option value="pangkat">^</option>
			</select>
			<input type="submit" name="hitung" value="Hitung" class="tombol">
		</form>
		<?php if (isset($_POST['hitung'])) { ?>
			<input type="text" value="<?php echo $hasil; ?>" class="bil">
		<?php } else { ?>
			<input type="text" value="0" class="bil">
		<?php } ?>
	</div>
</body>

</html>