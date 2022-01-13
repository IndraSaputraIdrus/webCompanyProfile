<?php

if (isset($_GET['katakunci'])) {
   $katakunci = $_GET['katakunci'];
} else {
   $katakunci = '';
}

?>


<?php include "inc_header.php"; ?>
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
      <tr>
         <td>1</td>
         <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, ratione.</td>
         <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</td>
         <td>
            <span class="badge bg-warning text-dark">Edit</span>
            <span class="badge bg-danger">Delete</span>
         </td>
      </tr>
   </tbody>
</table>
<?php include "inc_footer.php"; ?>