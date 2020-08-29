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
  <head>
  <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
  </head>           
    <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">SAYFA EKLE</h1>


                       <?php
                       if(@$_GET['durum']=="ok"){
                       ?>

                    <h1 class="page-subhead-line">Sayfa başarıyla eklendi...</h1>
                    <?php } 
                        elseif(@$_GET['durum']=="no"){ ?>

                        <h1 class="page-subhead-line">Sayfa eklenemedi..</h1>
                        <?php 
                        }
                      else {
                       ?>
                    <h1 class="page-subhead-line">Sitenize sayfa ekliyorsunuz...</h1>
                    <?php 
                        }?> 
                    </div>
                </div>
                <!-- /. ROW  -->
         <form action="netting/islem.php" method="POST">
        <div class=" col-md-12 ">
            <div class="form-group  col-md-3">               
                <input style="width:%100" class="btn btn-success" type="submit" name="sayfakaydet" value="Sayfa Kaydet">
            </div>
        </div>
            <div class=" col-md-12">   
                <div class="form-group  col-md-6">
                  <label>Sayfa Adı</label>                   
                  <input class="form-control" type="text" name="sayfa_ad"  placeholder="Sayfa Adını Giriniz">
                </div>
            </div>
            <div class=" col-md-12">   
                <div class="form-group  col-md-12">
                  <label>Sayfa İçerik</label>                   
                  <textarea name="sayfa_icerik" class="ckeditor"> </textarea>
                </div>
            </div>
            <div class=" col-md-12">   
                <div class="form-group  col-md-6">
                 <label>Sayfa Sıra</label>                   
                  <input class="form-control" type="text" name="sayfa_sira"  placeholder="Sayfa Sırasını Giriniz">
                </div>
            </div>
            <div class=" col-md-12">   
              <div class="form-group  col-md-6">
                <div class="form-group">
                 <label>Sayfada Göster</label>
                  <select name="sayfa_anasayfa" class="form-control">
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