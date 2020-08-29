<?php include 'netting/baglan.php'; ?>

<?php
include 'header.php';
include 'sidebar.php';


?>
<?php
$sayfa_id=@$_GET['sayfa_id'];
$sayfasorgu = $db -> prepare("select * from sayfalar where sayfa_id='$sayfa_id'");
$sayfasorgu -> execute (array());
$sayfaliste= $sayfasorgu -> FetchALL(PDO::FETCH_ASSOC);
foreach($sayfaliste as $sayfacek){
?>
 <?php
 }
 ?>
<?php
error_reporting(E_ALL ^ E_NOTICE);
ini_set('error_reporting', E_ALL ^ E_NOTICE);
?>
<div id="page-wrapper">
    <div id="page-inner">
  <head>
  <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
  </head>           
    <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">SAYFA DÜZENLE</h1>


                       <?php
                       if(@$_GET['durum']=="ok"){
                       ?>

                    <h1 class="page-subhead-line">Sayfa başarıyla düzenlendi...</h1>
                    <?php } 
                        elseif(@$_GET['durum']=="no"){ ?>

                        <h1 class="page-subhead-line">Sayfa düzenlenemedi..</h1>
                        <?php 
                        }
                      else {
                       ?>
                    <h1 class="page-subhead-line">Sitedeki sayfayı düzenliyorsunuz...</h1>
                    <?php 
                        }?> 
                    </div>
                </div>
                <!-- /. ROW  -->
         <form action="netting/islem.php" method="POST">
        <div class=" col-md-12 ">
            <div class="form-group  col-md-3">               
                <input style="width:%100" class="btn btn-success" type="submit" name="sayfaduzenle" value="Sayfa Düzenle">
            </div>
        </div>
        <input class="form-control" type="hidden" name="sayfa_id"  value="<?php echo $sayfacek['sayfa_id'];?>">
            <div class=" col-md-12">   
                <div class="form-group  col-md-6">
                  <label>Sayfa Adı</label>                   
                  <input class="form-control" type="text" name="sayfa_ad"  value="<?php echo $sayfacek['sayfa_ad'];?>">
                </div>
            </div>
            <div class=" col-md-12">   
                <div class="form-group  col-md-12">
                  <label>Sayfa İçerik</label>                   
                  <textarea name="sayfa_icerik" class="ckeditor"><?php echo $sayfacek["sayfa_icerik"];?> </textarea>
                </div>
            </div>
            <div class=" col-md-12">   
                <div class="form-group  col-md-6">
                 <label>Sayfa Sıra</label>                   
                  <input class="form-control" type="text" name="sayfa_sira"  value="<?php echo $sayfacek['sayfa_sira'];?>">
                </div>
            </div>
           
            <div class="col-md-12">   
              <div class="form-group  col-md-6">
                <div class="form-group">
                 <label>Sayfada Göster</label>
                  <select name="sayfa_anasayfa" class="form-control">
                  <?php
                  if($sayfacek['sayfa_anasayfa']==0){
                                              echo "HAYIR";
                                        }
                                        else{
                                            echo "EVET";
                                        }
                    ?>                    
                     <option value="1">Evet</option>
                     <option value="0">Hayır</option>
                  </select>
                </div>
              </div>
           </div>
      </form>
    </div>
            <!-- /. PAGE INNER  -->
       
</div>

<?php include("footer.php");?>