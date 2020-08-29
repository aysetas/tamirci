<?php include ("baglan.php");?>
<?php

if(isset($_POST['ayarkaydet']))
{
 $id = 1;

 $ayarguncelle = $db->prepare( "UPDATE ayarlar set ayar_title='".$_POST['ayar_title']."',
             ayar_description='".$_POST['ayar_description']."',
             ayar_keyword='".$_POST['ayar_keyword']."',
             ayar_telefon='".$_POST['ayar_telefon']."',
             ayar_facebook='".$_POST['ayar_facebook']."',
             ayar_twitter='".$_POST['ayar_twitter']."',
             ayar_footer='".$_POST['ayar_footer']."',
             ayar_adres='".$_POST['ayar_adres']."',
             ayar_mail='".$_POST['ayar_mail']."',
             ayar_fax='".$_POST['ayar_fax']."' where ayar_id='$id'");

    $ayarguncelle->execute();

    if($ayarguncelle->rowCount() > 0) //Bu kısım PDO için değiştirilmiştir.
    {
     header("Location:../ayarlar.php?durum=ok");
    }
    else
    {
     header("Location:../ayarlar.php?durum=no"); 
    }

}
if (isset($_POST['loggin'])) {
    $admin_kadi = $_POST['admin_kadi'];
    $admin_sifre = md5($_POST['admin_sifre']);
  if ($admin_kadi && $admin_sifre) {
      
               $sorgula = $db -> prepare("SELECT admin_kadi, admin_sifre  FROM admin WHERE admin_kadi='$admin_kadi' AND admin_sifre='$admin_sifre' ");
               $sorgula->execute(array($admin_kadi,$admin_sifre));
               $row = $sorgula->fetch(PDO::FETCH_BOTH);
      if ($sorgula->rowCount() > 0) {
       $_SESSION['admin_kadi'] = $admin_kadi;
       header('Location:../index.php');
      }
       else
       {
         header('Location:../login.php?login=no');
       }
  }

 
}

if(isset($_POST['menukaydet'])) {
  
  $kaydet=$db->prepare("INSERT INTO menuler SET menu_ad=:menu_ad, menu_link=:menu_link, menu_icon=:menu_icon");

  $ekle=$kaydet->execute(array(
   'menu_ad' =>$_POST['menu_ad'],
   'menu_link'=>$_POST['menu_link'],
   'menu_icon'=>$_POST['menu_icon'] 
   ));
 
 
   if($ekle){
    header("Location:../menu-ekle.php?durum=ok");
   }
   else{
    header("Location:../menu-ekle.php?durum=no");
   }
 


 }

if(isset($_POST['menuduzenle']))
{

  $menu_id=$_POST['menu_id'];
 $ayarguncelle = $db->prepare( "UPDATE menuler set menu_ad='".$_POST['menu_ad']."',
             menu_link='".$_POST['menu_link']."',
            menu_icon='".$_POST['menu_icon']."' where menu_id='$menu_id'");

    $ayarguncelle->execute();

    if($ayarguncelle->rowCount() > 0) //Bu kısım PDO için değiştirilmiştir.
    {
     header("Location:../menu-duzenle.php?durum=ok&menu_id=$menu_id");
    }
    else
    {
     header("Location:../menu-duzenle.php?durum=no&menu_id=$menu_id"); 
    }

}
if(isset($_GET['menusil'])) {
  
  $sil=$db->exec("DELETE FROM  menuler WHERE menu_id='".$_GET['menu_id']."'");

  
 
  
   if($sil){
    header("Location:../menuler.php?durum=ok");
   }
   else{
    header("Location:../menuler.php?durum=no");
   }
 
 }

if(isset($_POST['sliderekle'])) {

  $uploads_dir = '../uploads';
 
  @$tmp_name = $_FILES['slidegorsel']["tmp_name"];
 
  @$name = $_FILES['slidegorsel']["name"];
 
  $benzersizsayi1=rand(20000,32000);
 
  $benzersizsayi2=rand(20000,32000);
 
  $benzersizsayi3=rand(20000,32000);
 
  $benzersizsayi4=rand(20000,32000);
 
  $benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
 
  $refimgyol=substr($uploads_dir, 3)."/".$benzersizad.$name;
 
  @move_uploaded_file($tmp_name, $uploads_dir . "/" . $benzersizad . $name);
 
    $sliderekle=$db->prepare("INSERT INTO slider SET  slider_resimyolu=:slider_resimyolu, slider_url=:slider_url, slider_sira=:slider_sira, slider_ad=:slider_ad");

    $ekle=$sliderekle->execute(array(
     'slider_resimyolu' =>$refimgyol,
     'slider_url'=>$_POST['slider_url'],
     'slider_sira'=>$_POST['slider_sira'],
     'slider_ad'=>$_POST['slider_ad']
     ));
 
  if($ekle) {
 
   header('Location:../slider-ekle.php?durum=ok');
 
 
  } else {
 
   header('Location:../slider-ekle.php?durum=no');
  }
 }

 if(isset($_GET['slidersil'])) {
  
  $sil=$db->exec("DELETE FROM  slider WHERE slider_id='".$_GET['slider_id']."'");

  
   if($sil){
    
    $resim_sil=$_GET['sliderresimsil']; //Dosyadan(Klasörden) resim silme kodu
    unlink("../$resim_sil");
    header("Location:../slider.php?durum=ok");

   }
   else{
    header("Location:../slider.php?durum=no");
   }
 }

if(isset($_POST['sliderduzenle']))
{
  
  $uploads_dir = '../uploads';
 
  @$tmp_name = $_FILES['slidegorsel']["tmp_name"];
 
  @$name = $_FILES['slidegorsel']["name"];
 
  $benzersizsayi1=rand(20000,32000);
 
  $benzersizsayi2=rand(20000,32000);
 
  $benzersizsayi3=rand(20000,32000);
 
  $benzersizsayi4=rand(20000,32000);
 
  $benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
 
  $refimgyol=substr($uploads_dir, 3)."/".$benzersizad.$name;
 
  @move_uploaded_file($tmp_name, $uploads_dir . "/" . $benzersizad . $name);

  $slider_id=$_POST['slider_id'];
 $sliderguncelle = $db->prepare( "UPDATE slider set slider_ad='".$_POST['slider_ad']."',
             slider_resimyolu='".$_POST['slider_resimyolu']."',
            slider_url='".$_POST['slider_url']."', slider_sira='".$_POST['slider_sira']."' where slider_id='$slider_id'");

    $sliderguncelle->execute();

    if($sliderguncelle->rowCount() > 0) //Bu kısım PDO için değiştirilmiştir.
    {
     header("Location:../slider.php?durum=ok&slider_id=$slider_id");
    }
    else
    {
     header("Location:../slider.php?durum=no&slider_id=$slider_id"); 
    }


}

if(isset($_POST['sayfakaydet'])) {
  $zaman=date('Y-m-d H-i');
  
  $kaydet=$db->prepare("INSERT INTO sayfalar SET
  sayfa_ad=:sayfa_ad,
  sayfa_icerik=:sayfa_icerik,
  sayfa_sira=:sayfa_sira,
  sayfa_anasayfa=:sayfa_anasayfa,
  sayfa_tarih=:sayfa_tarih");

  $sayfaekle=$kaydet->execute(array(
   'sayfa_ad' =>$_POST['sayfa_ad'],
   'sayfa_icerik'=>$_POST['sayfa_icerik'],
   'sayfa_sira'=>$_POST['sayfa_sira'],
   'sayfa_anasayfa'=>$_POST['sayfa_anasayfa'],
   'sayfa_tarih'=>$zaman
   ));
 
 
   if($sayfaekle){
    header("Location:../sayfalar.php?durum=ok");
   }
   else{
    header("Location:../sayfalar.php?durum=no");
   }

 }

 if(isset($_GET['sayfasil'])) {
  
  $sil=$db->exec("DELETE FROM  sayfalar WHERE sayfa_id='".$_GET['sayfa_id']."'");

  
 
  
   if($sil){
    header("Location:../sayfalar.php?durum=ok");
   }
   else{
    header("Location:../sayfalar.php?durum=no");
   }
 }

 if(isset($_POST['sayfaduzenle']))
 {
 
  $sayfa_id=$_POST['sayfa_id'];
  $sayfaguncelle = $db->prepare( "UPDATE sayfalar set
              sayfa_ad='".$_POST['sayfa_ad']."',
              sayfa_icerik='".$_POST['sayfa_icerik']."',
             sayfa_sira='".$_POST['sayfa_sira']."',
             sayfa_anasayfa='".$_POST['sayfa_anasayfa']."'
              where sayfa_id='$sayfa_id'");
 
     $sayfaguncelle->execute();
 
     if($sayfaguncelle->rowCount() > 0) //Bu kısım PDO için değiştirilmiştir.
     {
      header("Location:../sayfa-duzenle.php?durum=ok&sayfa_id=$sayfa_id");
     }
     else
     {
      header("Location:../sayfa-duzenle.php?durum=no&sayfa_id=$sayfa_id"); 
     }
 
 }

 if(isset($_POST['resimekle'])) {

  $galerim_dir='../galerim';
 
  @$tmp_name = $_FILES['slidegorsel']["tmp_name"];
 
  @$name = $_FILES['slidegorsel']["name"];
 
  $benzersizsayi1=rand(20000,32000);
 
  $benzersizsayi2=rand(20000,32000);
 
  $benzersizsayi3=rand(20000,32000);
 
  $benzersizsayi4=rand(20000,32000);
 
  $benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
 
  $refimgyol=substr($galerim_dir, 3)."/".$benzersizad.$name;
 
  @move_uploaded_file($tmp_name, $galerim_dir . "/" . $benzersizad . $name);  
 
    $resimekle=$db->prepare("INSERT INTO galeri SET  galeri_resim=:galeri_resim, galeri_sira=:galeri_sira, galeri_ad=:galeri_ad");

    $ekle=$resimekle->execute(array(
     'galeri_resim' =>$refimgyol,
     'galeri_sira'=>$_POST['galeri_sira'],
     'galeri_ad'=>$_POST['galeri_ad']
     ));
 
  if($ekle) {
 
   header('Location:../galeri-ekle.php?durum=ok');
 
 
  } else {
 
   header('Location:../galeri-ekle.php?durum=no');
  }
 }

 if(isset($_GET['resimsil'])) {
  
  $sil=$db->exec("DELETE FROM  galeri WHERE galeri_id='".$_GET['galeri_id']."'");
 
   if($sil){
    
    $resim_sil=$_GET['galeriresimsil']; //Dosyadan(Klasörden) resim silme kodu
    unlink("../$resim_sil");
    header("Location:../galeri.php?durum=ok");

   }
   else{
    header("Location:../galeri.php?durum=no");
   }
 }






 if(isset($_POST['galeriduzenle']))
{
  
  $galerim_dir = '../galerim';
 
  @$tmp_name = $_FILES['slidegorsel']["tmp_name"];
 
  @$name = $_FILES['slidegorsel']["name"];
 
  $benzersizsayi1=rand(20000,32000);
 
  $benzersizsayi2=rand(20000,32000);
 
  $benzersizsayi3=rand(20000,32000);
 
  $benzersizsayi4=rand(20000,32000);
 
  $benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
 
  $refimgyol=substr($galerim_dir, 3)."/".$benzersizad.$name;
 
  @move_uploaded_file($tmp_name, $galerim_dir . "/" . $benzersizad . $name);

  $galeri_id=$_POST['galeri_id'];
 $galeriguncelle = $db->prepare( "UPDATE galeri set  galeri_resim=:galeri_resim, galeri_sira=:galeri_sira, galeri_ad=:galeri_ad where galeri_id='$galeri_id'");

   
    $guncelle=$galeriguncelle->execute(array(
      'galeri_resim' =>$refimgyol,
      'galeri_sira'=>$_POST['galeri_sira'],
      'galeri_ad'=>$_POST['galeri_ad']
      ));

    if($guncelle) //Bu kısım PDO için değiştirilmiştir.
    {
     header("Location:../galeri.php?durum=ok&galeri_id=$galeri_id");
    }
    else
    {
     header("Location:../galeri.php?durum=no&galeri_id=$galeri_id"); 
    }


}
?>