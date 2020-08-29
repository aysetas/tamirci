<?php include 'netting/baglan.php'; ?>
<?php
$menu_id=@$_GET['menu_id'];
     $menusorgula = $db -> prepare("select * from menuler where menu_id='$menu_id'");
     $menusorgula -> execute (array());
     $menuliste= $menusorgula -> FetchALL(PDO::FETCH_ASSOC);
     foreach($menuliste as $menucek){}
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
                        <h1 class="page-head-line">MENÜ DÜZENLE</h1>


                       <?php
                       if(@$_GET['durum']=="ok"){
                       ?>

                    <h1 class="page-subhead-line">Menü başarıyla düzenlendi...</h1>
                    <?php } 
                        elseif(@$_GET['durum']=="no"){ ?>

                        <h1 class="page-subhead-line">Menü düzenlemedi..</h1>
                        <?php 
                        }
                      else {
                       ?>
                    <h1 class="page-subhead-line">Menü düzenliyorsunuz...</h1>
                    <?php 
                        }?> 
                    </div>
                </div>

                <!-- /. ROW  -->
         <form action="netting/islem.php" method="POST">

        
         <input type="hidden" name="menu_id" value="<?php echo $menucek['menu_id'];?>">   <!-- /gizli post gönderme"""-->

        <div class=" col-md-12 ">
            <div class="form-group  col-md-3">               
                <input style="width:%100" class="btn btn-success" type="submit" name="menuduzenle" value="Menü Düzenle">
            </div>
        </div>
            <div class=" col-md-12">   
                <div class="form-group  col-md-6">
                  <label>Menü Adı</label>  
                                   
                  <input class="form-control" type="text" name="menu_ad"  value="<?php echo $menucek['menu_ad'];?>">
                </div>
            </div>
            <div class=" col-md-12">   
                <div class="form-group  col-md-6">
                  <label>Menü Linki</label>                   
                  <input class="form-control" type="text" name="menu_link" value="<?php echo $menucek['menu_link'];?>">
                </div>
            </div>
            <div class=" col-md-12">   
                <div class="form-group  col-md-6">
                 <label>Menü İconu</label>                   
                  <input class="form-control" type="text" name="menu_icon"  value="<?php echo $menucek['menu_link'];?>">
                </div>
            </div>
        
      </form>
    </div>
            <!-- /. PAGE INNER  -->
       
</div>

<?php include("footer.php");?>