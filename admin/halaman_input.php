<?php include "inc_header.php" ?>

<?php


$judul = '';
$kutipan = '';
$isi = '';
$sukses = '';
$error = [
   "pesan" => "",
   "tipe" => ""
];;

if (isset($_POST['submit'])) {
   $judul = $_POST['judul'];
   $isi = $_POST['isi'];
   $kutipan = $_POST['kutipan'];

   if ($judul == "" || $isi = "") {
      $error = [
         "pesan" => "Isi Semua Field Yang Kosong",
         "tipe" => "danger"
      ];
   }

   if ($error['tipe'] == '') {
      $sql1 = "INSERT INTO `halaman` (`judul`,`kutipan`,`isi`) VALUES ('$judul','$kutipan', '$isi')";
      $query = mysqli_query($koneksi, $sql1);
      if ($query) {
         $error = [
            "pesan" => "Sukses Memasukkan Data",
            "tipe" => "success"
         ];
      } else {
         $error = [
            "pesan" => "Gagal Memasukkan Data",
            "tipe" => "danger"
         ];
      }
   }
}

?>

<h1>Halaman Admin Input Data</h1>
<div class="mb-3 row">
   <a href="halaman.php">
      << Kembali Ke Halaman Admin </a>
</div>

<?php if (isset($error)) : ?>
   <div class="alert alert-<?= $error['tipe'] ?>" role="alert">
      <?= $error['pesan']; ?>
   </div>
<?php endif; ?>

<form action="" method="post">
   <div class=" mb-3 row">
      <label for="judul" class="col-sm-2 col-form-label">Judul</label>
      <div class="col-sm-10">
         <input type="text" class="form-control" id="judul" name="judul" value="<?= $judul; ?>">
      </div>
   </div>
   <div class="mb-3 row">
      <label for="kutipan" class="col-sm-2 col-form-label">Kutipan</label>
      <div class="col-sm-10">
         <input type="text" class="form-control" id="kutipan" name="kutipan" value="<?= $kutipan; ?>">
      </div>
   </div>
   <div class="mb-3 row">
      <label for="isi" class="col-sm-2 col-form-label">Isi</label>
      <div class="col-sm-10">
         <textarea name="isi" id="summernote" class="form-control" cols="30" rows="10"><?= $isi; ?></textarea>
      </div>
   </div>

   <div class="mb-3 row">
      <div class="col-sm-2"></div>
      <div class="col-sm-10">
         <button type="submit" name="submit" class="btn btn-primary">Simpan Data</button>
      </div>
   </div>
</form>

<?php include "inc_footer.php" ?>