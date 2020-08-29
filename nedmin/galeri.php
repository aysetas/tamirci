<?php include 'netting/baglan.php'; ?>

<?php
include 'header.php';
include 'sidebar.php';

?>
<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                
                    <div class="col-md-12">
                        <h1 class="page-head-line">GALERİ</h1>
                        <h1 class="page-subhead-line">Sitedeki galeriyi bu sayfadan yönetebilirsiniz.. </h1>
                    
                    </div>
                <div class="col-md-12">
              
                    <center><a href="galeri-ekle.php"><button  style="width:200px;" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i>Resim Ekle</button></a></center>
                     <hr>
                  
                </div>
                    <div class="col-md-12">
                     <!--    Hover Rows  -->

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Ekli olan Resim
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th >Galeri İd</th>
                                            <th >Galeri Adı</th>
                                            <th>Galeri Resim </th>
                                            <th>Galeri Sıra</th>
                                            <th style="width:30px;">Düzenle</th>
                                            <th style="width:30px;">Sil</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                    $galerisorgu = $db -> prepare("select * from galeri");
                 $galerisorgu -> execute (array());
                $galeriliste= $galerisorgu -> FetchALL(PDO::FETCH_ASSOC);
                foreach($galeriliste as $galericek){
                  ?>
                                            <tr>
                                            <td><?php echo  $galericek['galeri_id']; ?></td>
                                            <td><?php echo  $galericek['galeri_ad']; ?></td>
                                            <td>
                                            <img width="200" src="<?php echo  $galericek['galeri_resim']; ?>" alt="galeri resmi">    
                                            </td>
                                            <td><?php echo  $galericek['galeri_sira']; ?></td>
                                            <td><a href="galeri-duzenle.php?galeri_id=<?php echo $galericek['galeri_id'];?>"><button class="btn btn-primary">Düzenle</button></a></td>
                                            <td> <a href="netting/islem.php?galeri_id=<?php echo $galericek['galeri_id'];?>&resimsil=ok&galeriresimsil=<?php echo $galericek['galeri_resim'];?>"><button class="btn btn-danger">Sil</button></a></td>
                                            
                                            
                                        </tr>
                   <?php
                   }
                   ?>
                                    
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- End  Hover Rows  -->
                </div>
                </div>
                <!-- /. ROW  -->
                

            </div>
            <!-- /. PAGE INNER  -->
        </div>
<?php include("footer.php");?>