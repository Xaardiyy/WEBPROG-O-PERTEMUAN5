<?php
   $pathimg = "img/";
    if(isset($_POST["KIRIMFILE"])){

       // print_r($_FILES);
        $namafile = $pathimg.basename($_FILES["IMGFILE"]["name"]);
        move_uploaded_file($_FILES["IMGFILE"]["tmp_name"], $namafile);

        echo "<img src='$namafile' width='300'>";
    
    }
