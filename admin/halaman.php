<?php include "inc_header.php"; ?>
<?php

if (isset($_GET['katakunci'])) {
   $katakunci = $_GET['katakunci'];
} else {
   $katakunci = '';
}

$sql1 = "SELECT * FROM halaman ORDER BY id DESC";
$query = mysqli_query($koneksi, $sql1);
$no = 1;
?>


<h1>Halaman Admin</h1>
<p>
   <a href="halaman_input.php">
      <button type="submit" class="btn btn-primary">Buat Halaman Baru</button>
   </a>
</p>

<form action="" class="row g-3" method="get">
   <div class="col-auto">
      <input type="text" class="form-control" placeholder="Masukkan Kata Kunci" name="katakunci" value="<?= $katakunci; ?>">
   </div>
   <div class="col-auto">
      <button type="submit" name="cari" class="btn btn-secondary">Cari Tulisan</button>
   </div>
</form>

<table class="table table-striped">
   <thead>
      <tr>
         <th class="col-1">#</th>
         <th>Judul</th>
         <th>Kutipan</th>
         <th class="col-2">Aksi</th>
      </tr>
   </thead>
   <tbody>
      <?php while ($row = mysqli_fetch_assoc($query)) : ?>
         <tr>
            <td><?= $no++; ?></td>
            <td><?= $row['judul']; ?></td>
            <td><?= $row['kutipan']; ?></td>
            <td>
               <span class="badge bg-warning text-dark">Edit</span>
               <span class="badge bg-danger">Delete</span>
            </td>
         </tr>
      <?php endwhile; ?>
   </tbody>
</table>
<?php include "inc_footer.php"; ?>