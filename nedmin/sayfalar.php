<?php include 'netting/baglan.php'; ?>

<?php
include 'header.php';
include 'sidebar.php';

?>
<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                
                    <div class="col-md-12">
                        <h1 class="page-head-line">SAYFALAR</h1>
                        <h1 class="page-subhead-line">Sitedeki sayfaları bu sayfadan yönetebilirsiniz.. </h1>
                    
                    </div>
                <div class="col-md-12">
              
                    <center><a href="sayfa-ekle.php"><button  style="width:200px;" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i>Sayfa Ekle</button></a></center>
                     <hr>
                  
                </div>
                    <div class="col-md-12">
                     <!--    Hover Rows  -->

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Ekli olan Sayfalar
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th >Sayfa İd</th>
                                            <th>Sayfa Tarih</th>
                                            <th style="width:300px;">Sayfa Ad</th>
                                            <th>Sayfa Sıra</th>
                                            <th>Sayfa Anasayfa </th>
                                            <th style="width:30px;">Düzenle</th>
                                            <th style="width:30px;">Sil</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                    $sayfasorgu = $db -> prepare("select * from sayfalar");
                    $sayfasorgu -> execute (array());
                    $sayfaliste= $sayfasorgu -> FetchALL(PDO::FETCH_ASSOC);
                    foreach($sayfaliste as $sayfacek){
                    ?>
                                            <tr>
                                            <td><?php echo  $sayfacek['sayfa_id']; ?></td>
                                            <td><?php echo  $sayfacek['sayfa_tarih']; ?></td>
                                            <td><?php echo  $sayfacek['sayfa_ad']; ?></td>
                                           <td><?php echo  $sayfacek['sayfa_sira']; ?></td>

                                            <td><?php 

                                        if($sayfacek['sayfa_anasayfa']==0){
                                              echo "HAYIR";
                                        }
                                        else{
                                            echo "EVET";
                                        }
                                             ?></td>
                                            <td><a href="sayfa-duzenle.php?sayfa_id=<?php echo $sayfacek['sayfa_id'];?>"><button class="btn btn-primary">Düzenle</button></a></td>
                                            <td> <a href="netting/islem.php?sayfa_id=<?php echo $sayfacek['sayfa_id'];?>&sayfasil=ok"><button class="btn btn-danger">Sil</button></a></td>
                                           
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
