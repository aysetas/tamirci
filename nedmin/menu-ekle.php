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
                        <h1 class="page-head-line">MENÜ EKLE</h1>


                       <?php
                       if(@$_GET['durum']=="ok"){
                       ?>

                    <h1 class="page-subhead-line">Menü başarıyla eklendi...</h1>
                    <?php } 
                        elseif(@$_GET['durum']=="no"){ ?>

                        <h1 class="page-subhead-line">Menü eklenemedi..</h1>
                        <?php 
                        }
                      else {
                       ?>
                    <h1 class="page-subhead-line">Sitenize menü ekliyorsunuz...</h1>
                    <?php 
                        }?> 
                    </div>
                </div>
                <!-- /. ROW  -->
         <form action="netting/islem.php" method="POST">
        <div class=" col-md-12 ">
            <div class="form-group  col-md-3">               
                <input style="width:%100" class="btn btn-success" type="submit" name="menukaydet" value="Menü Kaydet">
            </div>
        </div>
            <div class=" col-md-12">   
                <div class="form-group  col-md-6">
                  <label>Menü Adı</label>                   
                  <input class="form-control" type="text" name="menu_ad"  placeholder="Menü Adını Giriniz">
                </div>
            </div>
            <div class=" col-md-12">   
                <div class="form-group  col-md-6">
                  <label>Menü Linki</label>                   
                  <input class="form-control" type="text" name="menu_link" value="http://">
                </div>
            </div>
            <div class=" col-md-12">   
                <div class="form-group  col-md-6">
                 <label>Menü İconu</label>                   
                  <input class="form-control" type="text" name="menu_icon"  placeholder="Menü İconu Giriniz">
                </div>
            </div>
        
      </form>
    </div>
            <!-- /. PAGE INNER  -->
       
</div>

<?php include("footer.php");?>