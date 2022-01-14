</main>
<footer class="bg-light">
   <div class="text-center p-3" style="background-color: #CCC;">
      Copyright &copy; 2022;
   </div>
</footer>

<script>
   $(document).ready(function() {
      $('#summernote').summernote({
         callbacks: {
            onImageUpload: function(files) {
               for (let i = 0; i < files.length; i++) {
                  $.upload(files[i]);
               }
            }
         },
         height: 200
      });

      $.upload = function(file) {
         let out = new FormData();
         out.append('file', file, file.name);

         $.ajax({
            method: 'POST',
            url: 'upload_gambar.php',
            contentType: false,
            cache: false,
            processData: false,
            data: out,
            success: function(img) {
               $('#summernote').summernote('insertImage', img);
            },
            error: function(jqXHR, textStatus, errorThrown) {
               console.error(textStatus + " " + errorThrown);
            }
         });
      };
   });
</script>

</div>


<!-- bootstrap 5 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>