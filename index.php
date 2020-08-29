<?php include("header.php")?>
<?php include ("slider.php");?>
<?php 
$sayfasorgu = $db -> prepare("select * from sayfalar where sayfa_anasayfa='1' order by sayfa_id desc limit 3");
                    $sayfasorgu -> execute (array());
                    $sayfaliste= $sayfasorgu -> FetchALL(PDO::FETCH_ASSOC);
                    foreach($sayfaliste as $sayfacek){
                 
                ?>
        <div style="padding-Left:13px; padding-top:10px;" class="column-2">
          <div class="box">
            <div class="aligncenter">
              <h4><?php echo $sayfacek["sayfa_ad"];?></h4>
            </div>
            <div class="box-bg maxheight">
              <div class="padding">
                <p><?php echo substr($sayfacek["sayfa_icerik"],0,135);?></p>
              </div>
              <div class="aligncenter"> <a class="button" href="sayfa-detay.php?sayfa_id=<?php echo $sayfacek['sayfa_id']?>">Devamını Oku</a> </div>
            </div>
          </div>
        </div>
        <?php
  }
  ?>
<aside>
      <div class="wrapper">
        
      </div>
    </aside>
 
    <!--==============================content================================-->
    <section id="content">
      <div class="wrapper">
      
      </div>
      <div class="block"></div>
    </section>
  </div>
</div>
<?php include("footer.php")?>