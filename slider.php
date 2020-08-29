<div class="wrapper">
        <div class="slider">
          <ul class="items">
            <?php
                 $slidersorgu = $db -> prepare("select * from slider order by slider_sira DESC");
                 $slidersorgu -> execute (array());
                 $sliderliste= $slidersorgu -> FetchALL(PDO::FETCH_ASSOC);
                 foreach($sliderliste as $slidercek){
                  ?>

            <li><img src="nedmin/<?php echo $slidercek['slider_resimyolu'];?>" alt="<?php echo $slidercek['slider_ad'];?>"></li>
             
            <?php
                }
            ?>
          </ul>
        </div>
        <a class="prev">prev</a> <a class="next">next</a>
        <div class="banner1-bg"></div>
        <div class="banner-1"></div>
</div>