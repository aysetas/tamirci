<?php include("header.php")?>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <script src="assets/js/galleryCustom.js"></script>

<?php

     $galerisorgula = $db -> prepare("select * from galeri ");
     $galerisorgula -> execute (array());
     $galeriliste= $galerisorgula -> FetchALL(PDO::FETCH_ASSOC);
     foreach($galeriliste as $galericek){
?>
<div id="page-wrapper">
  <div id="page-inner"> 
       <div style="height:300px;" class="col-md-3 ">
          <div class="portfolio-item awesome mix_all" data-cat="awesome" > 
           <img src="<?php echo 'nedmin/' . $galericek['galeri_resim'];?>" class="img-responsive " alt="" />
                <div class="overlay">
                   <p>
                     <span>
                     <?php echo $galericek['galeri_ad'];?>
                     </span>
          
                     </p>
                   <a class="preview btn btn-info " title="Image Title Here" href="<?php echo 'nedmin/' . $galericek['galeri_resim'];?>"><i class="fa fa-plus fa-2x"></i></a>
                </div>
          </div>
       
  </div>
</div>   
        <?php
        }
        ?> 

<?php include("footer.php")?>