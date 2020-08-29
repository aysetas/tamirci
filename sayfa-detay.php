<?php include("header.php")?>
<?php
 
$sayfa_id=@$_GET['sayfa_id'];
$sayfasorgu = $db -> prepare("select * from sayfalar where sayfa_id='$sayfa_id'");
                    $sayfasorgu -> execute (array());
                    $sayfaliste= $sayfasorgu -> FetchALL(PDO::FETCH_ASSOC);
                    foreach($sayfaliste as $sayfacek){
                 
                ?>
     
        <div style="padding-Left:13px; padding-top:10px;" class="column-6">
          <div class="box">
            <div class="aligncenter">
              <h4><?php echo $sayfacek["sayfa_ad"];?></h4>
            </div>
            <div class="box-bg maxheight">
              <div class="padding">
                <p><?php echo $sayfacek["sayfa_icerik"];?></p>
              </div>
              
            </div>
          </div>
        </div>
        <?php
  }
  ?>    
   
 
    <!--==============================content================================-->
    <section id="content">
      <div class="wrapper">
       
        
      </div>
      <div class="block"></div>
    </section>
  </div>
</div>
<?php include("footer.php")?>