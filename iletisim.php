<?php include("header.php")?>
<section id="content">
      <div class="wrapper">
        <article class="col-1">
          <div class="indent-left">
            <h3 class="p1">Bize ulaşın...</h3>
            


            <form id="contact-form" action="http://www.emrahyuksel.com.tr/phpmail/index.php" method="post" enctype="multipart/form-data">
              
              <fieldset>
                
                <label><span class="text-form">Ad Soyad:</span>
                  <input type="text" name="adsoyad">
                </label>

                <label><span class="text-form">Mail:</span>
                  <input type="text" name="eposta">
                </label>

                <label><span class="text-form">Telefon:</span>
                  <input type="text" name="telefon">
                </label>

                 <label><span class="text-form">Konu:</span>
                  <input type="text" name="konu">
                </label>

                <div class="wrapper">
                  <div class="text-form">Message:</div>
                  <div class="extra-wrap">
                    <textarea type="text" name="mesaj"></textarea>
                  </div>
                </div>
                <br>
                <center><button type="submit" name="iletisimform" class="button-2" >Mail Gönder</button></center>
              </fieldset>
            </form>

            <?php
     $ayarsorgu = $db -> prepare("select * from ayarlar");
     $ayarsorgu -> execute (array());
     $ayarliste= $ayarsorgu -> FetchALL(PDO::FETCH_ASSOC);
foreach($ayarliste as $ayarcek){
?>
<?php
}
?>
          </div>
        </article>
        <article class="col-2">
          <h3 class="p1">İletişim Adresimiz</h3>
          <h6>Türkiye</h6>
          <dl class="img-indent-bot">
            <dd><span><h6>Adresimiz:</h6></span><strong><?php echo $ayarcek['ayar_adres'];?></strong></dd>
            <dd><span><h6>Telefon:</h6></span><strong><?php echo $ayarcek['ayar_telefon'];?></strong></dd>
            <dd><span><h6>Fax:</h6></span><strong><?php echo $ayarcek['ayar_fax'];?></strong></dd>
            <dd><span><h6>Email:</h6></span><strong><a href="#"><?php echo $ayarcek['ayar_mail'];?></a></strong></dd>
          <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25102.558381334027!2d40.99540692172902!3d38.144382951772215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4074a94f5326358b%3A0xc7decadbdb47f5cd!2sSilvan%2C%20Diyarbak%C4%B1r!5e0!3m2!1str!2str!4v1595789106372!5m2!1str!2str" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></p>
          </dl>
      
        </article>
      </div>
      <div class="block"></div>
    </section>
  </div>
</div>
<?php include("footer.php")?>