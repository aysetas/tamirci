<?php include 'netting/baglan.php'; ?>

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
                        <h1 class="page-head-line">SLİDER EKLE</h1>


                       <?php
                       if(@$_GET['durum']=="ok"){
                       ?>

                    <h1 class="page-subhead-line">Slider başarıyla eklendi...</h1>
                    <?php } 
                        elseif(@$_GET['durum']=="no"){ ?>

                        <h1 class="page-subhead-line">Slider eklenemedi..</h1>
                        <?php 
                        }
                      else {
                       ?>
                    <h1 class="page-subhead-line">Sitenize slider ekliyorsunuz...</h1>
                    <?php 
                        }?> 
                    </div>
                </div>
                <!-- /. ROW  -->
         <form action="netting/islem.php" method="POST" enctype="multipart/form-data">
        <div class=" col-md-12 ">
            <div class="form-group  col-md-3">               
                <input style="width:%100" class="btn btn-success" type="submit" name="sliderekle" value="Slider Kaydet">
            </div>
        </div>
        <div class=" col-md-6"> 
            <div class="form-group">
                        <label class="control-label col-lg-4">Slider Resim</label>
                        <div class="">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <span class="btn btn-file btn-default">
                                    <span class="fileupload-new">Resim Seç</span>
                                    <span class="fileupload-exists">Değiştir</span>
                                    <input type="file" name="slidegorsel">
                                </span>
                                <span class="fileupload-preview"></span>
                                <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none"></a>
                            </div>
                        </div>
                    </div>


               
    
        </div>
            <div class=" col-md-12">   
                <div class="form-group  col-md-6">
                  <label>Slider Adı</label>                   
                  <input class="form-control" type="text" name="slider_ad"  placeholder="Slider adını giriniz">
                </div>
            </div>
            <div class=" col-md-12">   
                <div class="form-group  col-md-6">
                  <label>Slider URL</label>                   
                  <input class="form-control" type="text" name="slider_url" placeholder="Slider yönlendirmek için link giriniz">
                </div>
            </div>
            <div class=" col-md-12">   
                <div class="form-group  col-md-6">
                 <label>Slider Sıra</label>                   
                  <input class="form-control" type="number" name="slider_sira"  placeholder="Slider sırasını giriniz">
                </div>
            </div>
        
      </form>
    </div>
            <!-- /. PAGE INNER  -->
       
</div>

<?php include("footer.php");?>