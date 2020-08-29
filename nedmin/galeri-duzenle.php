<?php include 'netting/baglan.php'; ?>
<?php
$galeri_id=@$_GET['galeri_id'];
     $galerisorgula = $db -> prepare("select * from galeri where galeri_id='$galeri_id'");
     $galerisorgula -> execute (array());
     $galeriliste= $galerisorgula -> FetchALL(PDO::FETCH_ASSOC);
     foreach($galeriliste as $galericek){}
?>
               
<?php
include 'header.php';
include 'sidebar.php';
?>
<?php
error_reporting(E_ALL ^ E_NOTICE);
ini_set('error_reporting', E_ALL ^ E_NOTICE);
?>
<div id="page-wrapper">
    <div id="page-inner">
    <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">GALERİ DÜZENLE</h1>


                       <?php
                       if(@$_GET['durum']=="ok"){
                       ?>

                    <h1 class="page-subhead-line">Galeri başarıyla düzenlendi...</h1>
                    <?php } 
                        elseif(@$_GET['durum']=="no"){ ?>

                        <h1 class="page-subhead-line">Galeri düzenlemedi..</h1>
                        <?php 
                        }
                      else {
                       ?>
                    <h1 class="page-subhead-line">Galeri düzenliyorsunuz...</h1>
                    <?php 
                        }?> 
                    </div>
                </div>

                <!-- /. ROW  -->
         <form action="netting/islem.php" method="POST" enctype="multipart/form-data">

        
         <input type="hidden" name="galeri_id" value="<?php echo $galericek['galeri_id'];?>">   <!-- /gizli post gönderme"""-->

        <div class=" col-md-12 ">
            <div class="form-group  col-md-3">               
                <input style="width:%100" class="btn btn-success" type="submit" name="galeriduzenle" value="Galeri Düzenle">
            </div>
        </div>
            <div class=" col-md-12">   
                <div class="form-group  col-md-6">
                  <label>Galeri Adı</label>  
                                   
                  <input class="form-control" type="text" name="galeri_ad"  value="<?php echo $galericek['galeri_ad'];?>">
                </div>
            </div>

          


    <div class=" col-md-12">  
        <div class=" col-md-6"> 
            <div class="form-group">
                        <label class="control-label col-lg-4">Galeri Resim</label>
                        
                        <div class="">
                        
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <span class="btn btn-file btn-default">
                                    <span class="fileupload-new" >Resim Seç</span>
                                    <span class="fileupload-exists">Değiştir</span>
                                    <input type="file" name="slidegorsel" >
                                </span>
                                <span class="fileupload-preview"></span>
                                <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none"></a>
                                <br>
                               
                            </div>
                        </div>
                    </div>
        </div>
</div>
            <div class=" col-md-12">   
                <div class="form-group  col-md-6">
                 <label>Galeri Sıra</label>                   
                  <input class="form-control" type="text" name="galeri_sira"  value="<?php echo $galericek['galeri_sira'];?>">
                </div>
            </div>
      </form>
    </div>
            <!-- /. PAGE INNER  -->
       
</div>

<?php include("footer.php");?>