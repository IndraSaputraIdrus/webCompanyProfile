<?php include "../inc/inc_koneksi.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- summernote -->
   <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
   <!-- bootstrap 5 -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <title>Admin Company Profile</title>
</head>

<body>
   <div class="container">

      <header>
         <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
               <a class="navbar-brand" href="#">Navbar</a>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                     <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Admin Halaman</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">Admin Tutors</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">Admin Partner</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">Admin Contact</a>
                     </li>
                     <li>
                        <a class="nav-link" href="#">Logout>></a>
                     </li>

                  </ul>
               </div>
            </div>
         </nav>
      </header>
      <main>