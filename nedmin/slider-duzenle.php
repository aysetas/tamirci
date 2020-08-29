<?php include 'netting/baglan.php'; ?>
<?php
$slider_id=@$_GET['slider_id'];
     $slidersorgula = $db -> prepare("select * from slider where slider_id='$slider_id'");
     $slidersorgula -> execute (array());
     $sliderliste= $slidersorgula -> FetchALL(PDO::FETCH_ASSOC);
     foreach($sliderliste as $slidercek){}
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
                        <h1 class="page-head-line">SLİDER DÜZENLE</h1>


                       <?php
                       if(@$_GET['durum']=="ok"){
                       ?>

                    <h1 class="page-subhead-line">Slider başarıyla düzenlendi...</h1>
                    <?php } 
                        elseif(@$_GET['durum']=="no"){ ?>

                        <h1 class="page-subhead-line">Slider düzenlemedi..</h1>
                        <?php 
                        }
                      else {
                       ?>
                    <h1 class="page-subhead-line">Slider düzenliyorsunuz...</h1>
                    <?php 
                        }?> 
                    </div>
                </div>

                <!-- /. ROW  -->
         <form action="netting/islem.php" method="POST">

        
         <input type="hidden" name="slider_id" value="<?php echo $slidercek['slider_id'];?>">   <!-- /gizli post gönderme"""-->

        <div class=" col-md-12 ">
            <div class="form-group  col-md-3">               
                <input style="width:%100" class="btn btn-success" type="submit" name="sliderduzenle" value="Slider Düzenle">
            </div>
        </div>
            <div class=" col-md-12">   
                <div class="form-group  col-md-6">
                  <label>Slider Adı</label>  
                                   
                  <input class="form-control" type="text" name="slider_ad"  value="<?php echo $slidercek['slider_ad'];?>">
                </div>
            </div>
            <div class=" col-md-12">   
                <div class="form-group  col-md-6">
                  <label>Slider Resim</label>                   
                  <input class="form-control" type="text" name="slider_resimyolu" value="<?php echo $slidercek['slider_resimyolu'];?>">
                </div>
            </div>
            <div class=" col-md-12">   
                <div class="form-group  col-md-6">
                 <label>Slider Link</label>                   
                  <input class="form-control" type="text" name="slider_url"  value="<?php echo $slidercek['slider_url'];?>">
                </div>
            </div>
            <div class=" col-md-12">   
                <div class="form-group  col-md-6">
                 <label>Slider Sıra</label>                   
                  <input class="form-control" type="text" name="slider_sira"  value="<?php echo $slidercek['slider_sira'];?>">
                </div>
            </div>
      </form>
    </div>
            <!-- /. PAGE INNER  -->
       
</div>

<?php include("footer.php");?>