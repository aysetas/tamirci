<?php include 'netting/baglan.php'; ?>

<?php
include 'header.php';
include 'sidebar.php';

?>
<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                
                    <div class="col-md-12">
                        <h1 class="page-head-line">MENÜLER</h1>
                        <h1 class="page-subhead-line">Sitedeki menüleri bu sayfadan yönetebilirsiniz.. </h1>
                    
                    </div>
                <div class="col-md-12">
              
                    <center><a href="menu-ekle.php"><button  style="width:200px;" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i>Menü Ekle</button></a></center>
                     <hr>
                  
                </div>
                    <div class="col-md-12">
                     <!--    Hover Rows  -->

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Ekli olan Menüler
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th >Menü İd</th>
                                            <th style="width:250px;">Menü Adı</th>
                                            <th>Menü Link</th>
                                            <th>Menü İcon</th>
                                            <th style="width:30px;">Düzenle</th>
                                            <th style="width:30px;">Sil</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                    $menusorgu = $db -> prepare("select * from menuler");
                 $menusorgu -> execute (array());
                $menuliste= $menusorgu -> FetchALL(PDO::FETCH_ASSOC);
                foreach($menuliste as $menucek){
                  ?>
                                            <tr>
                                            <td><?php echo  $menucek['menu_id']; ?></td>
                                            <td><?php echo  $menucek['menu_ad']; ?></td>
                                            <td><?php echo  $menucek['menu_link']; ?></td>
                                            <td><?php echo  $menucek['menu_icon']; ?></td>
                                            <td><a href="menu-duzenle.php?menu_id=<?php echo $menucek['menu_id'];?>"><button class="btn btn-primary">Düzenle</button></a></td>
                                            <td> <a href="netting/islem.php?menu_id=<?php echo $menucek['menu_id'];?>&menusil=ok"><button class="btn btn-danger">Sil</button></a></td>

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
