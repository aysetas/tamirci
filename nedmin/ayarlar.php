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
                        <h1 class="page-head-line">SİTE GENEL AYARLARI</h1>


                       <?php
                       if(@$_GET['durum']=="ok"){
                       ?>
                    <h1 class="page-subhead-line">kayıtlar başarıyla güncellendi...</h1>
                    <?php } 
                        elseif(@$_GET['durum']=="no"){ ?>

                        <h1 class="page-subhead-line">kayıtlar güncellenemedi değişiklik yapmamış olabilirsiniz...</h1>
                        <?php 
                        }
                      else {
                       ?>
                    <h1 class="page-subhead-line">kayıtlar güncellenemedi değişiklik yapmamış olabilirsiniz...</h1>
                    <?php 
                        }?> 
                    </div>
                </div>
                <!-- /. ROW  -->
            <form action="netting/islem.php" method="POST">
              
        <div class=" col-md-12">   
            <div class="form-group  col-md-6">
               <label>Site Başlığı</label>                   
                <input class="form-control" type="text" name="ayar_title" value="<?php echo $ayarcek['ayar_title'];?>">

            </div>
        </div>
        <div class=" col-md-12">
            <div class="form-group  col-md-6">
               <label>Site Açıklaması</label>                   
                <input class="form-control" type="text" name="ayar_description" value="<?php echo $ayarcek['ayar_description'];?>">

            </div>
        </div>
        <div class=" col-md-12">
            <div class="form-group  col-md-6">
               <label>Site Anahtar Kelime</label>                   
                <input class="form-control" type="text" name="ayar_keyword" value="<?php echo $ayarcek['ayar_keyword'];?>">

            </div>
        </div>
        <div class=" col-md-12">
            <div class="form-group  col-md-6">
               <label>Telefon Numarası</label>                   
                <input class="form-control" type="text" name="ayar_telefon" value="<?php echo $ayarcek['ayar_telefon'];?>">

            </div>
        </div>
        <div class=" col-md-12">
            <div class="form-group  col-md-3">
               <label>Facebook Adresiniz</label>                   
                <input class="form-control" type="text" name="ayar_facebook" value="<?php echo $ayarcek['ayar_facebook'];?>">

            </div>
     
            <div class="form-group  col-md-3">
               <label>Twitter Adresiniz</label>                   
                <input class="form-control" type="text" name="ayar_twitter" value="<?php echo $ayarcek['ayar_twitter'];?>">

            </div>
       
            <div class="form-group  col-md-3">
               <label>İnstagram Adresiniz</label>                   
                <input class="form-control" type="text" name="ayar_instagram" value="<?php echo $ayarcek['ayar_instagram'];?>">

            </div>
        </div>
        <div class=" col-md-12">
            <div class="form-group  col-md-12">
               <label>Site Footer</label>                   
                <input class="form-control" type="text" name="ayar_footer" value="<?php echo $ayarcek['ayar_footer'];?>">

            </div>
        </div>    
         <div class=" col-md-12">
            <div class="form-group  col-md-12">
               <label>Adresiniz</label>                   
                <input class="form-control" type="text" name="ayar_adres" value="<?php echo $ayarcek['ayar_adres'];?>">

            </div>
        </div>   
          <div class=" col-md-12">
            <div class="form-group  col-md-6">
               <label>Mail Adresiniz</label>                   
                <input class="form-control" type="text" name="ayar_mail" value="<?php echo $ayarcek['ayar_mail'];?>">

            </div>
       
            <div class="form-group  col-md-6">
               <label>Faks Adresiniz</label>                   
                <input class="form-control" type="text" name="ayar_fax" value="<?php echo $ayarcek['ayar_fax'];?>">

            </div>
        </div>
        
    <div class=" col-md-12 ">
        <div class="form-group  col-md-12">               
                <input style="width:%100" class="btn btn-success" type="submit" name="ayarkaydet" value="Ayarları Kaydet">
        </div>
        </form>
        </div>
            <!-- /. PAGE INNER  -->
       
</div>

<?php include("footer.php");?>