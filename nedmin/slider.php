<?php include 'netting/baglan.php'; ?>

<?php
include 'header.php';
include 'sidebar.php';

?>
<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                
                    <div class="col-md-12">
                        <h1 class="page-head-line">SLİDER</h1>
                        <h1 class="page-subhead-line">Sitedeki sliderları bu sayfadan yönetebilirsiniz.. </h1>
                    
                    </div>
                <div class="col-md-12">
              
                    <center><a href="slider-ekle.php"><button  style="width:200px;" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i>Slider Ekle</button></a></center>
                     <hr>
                  
                </div>
                    <div class="col-md-12">
                     <!--    Hover Rows  -->

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Ekli olan Slider
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th >Slider İd</th>
                                            <th >Slider Adı</th>
                                            <th>Slider Resim </th>
                                            <th>Slider Link</th>
                                            <th>Slider Sıra</th>
                                            <th style="width:30px;">Düzenle</th>
                                            <th style="width:30px;">Sil</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                    $slidersorgu = $db -> prepare("select * from slider");
                 $slidersorgu -> execute (array());
                $sliderliste= $slidersorgu -> FetchALL(PDO::FETCH_ASSOC);
                foreach($sliderliste as $slidercek){
                  ?>
                                            <tr>
                                            <td><?php echo  $slidercek['slider_id']; ?></td>
                                            <td><?php echo  $slidercek['slider_ad']; ?></td>
                                            <td>
                                            <img width="200" src="<?php echo  $slidercek['slider_resimyolu']; ?>" alt="slider resmi">    
                                            </td>
                                            <td><?php echo  $slidercek['slider_url']; ?></td>
                                            <td><?php echo  $slidercek['slider_sira']; ?></td>
                                            <td><a href="slider-duzenle.php?slider_id=<?php echo $slidercek['slider_id'];?>"><button class="btn btn-primary">Düzenle</button></a></td>
                                            <td> <a href="netting/islem.php?slider_id=<?php echo $slidercek['slider_id'];?>&slidersil=ok&sliderresimsil=<?php echo $slidercek['slider_resimyolu'];?>"><button class="btn btn-danger">Sil</button></a></td>
                                            
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
