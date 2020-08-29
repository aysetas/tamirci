<?php include ("nedmin/netting/baglan.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php
     $ayarsorgu = $db -> prepare("select * from ayarlar");
     $ayarsorgu -> execute (array());
     $ayarliste= $ayarsorgu -> FetchALL(PDO::FETCH_ASSOC);
foreach($ayarliste as $ayarcek){
?>
<title><?php echo $ayarcek["ayar_title"];?></title>
<?php
}
?>
 
<meta charset="utf-8">
<meta name="description" content="<?php echo $ayarcek['ayar_description'];?>">
<meta name="keywords" content="<?php echo $ayarcek['ayar_keyword'];?>">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">

<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen">
<script src="js/jquery-1.6.3.min.js"></script>
<script src="js/cufon-yui.js"></script>
<script src="js/cufon-replace.js"></script>
<script src="js/FF-cash.js"></script>
<script src="js/script.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/tms-0.3.js"></script>
<script src="js/tms_presets.js"></script>
<script src="js/easyTooltip.js"></script>



    
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
<![endif]-->
</head>
<body id="page1">
<div class="extra">
  <div class="main">
    <!--==============================header=================================-->
    <header>
      <div class="indent">
        <div class="row-top">
          <div class="wrapper">

            <img  style="margin-top:30px; margin-left:30px;"src="<?php echo $ayarcek['ayar_logo'];?>">

            <strong class="support"><?php echo $ayarcek['ayar_telefon'];?></strong>
          </div>
        </div>
        <nav>
          <ul class="menu">
            <li><a class="active" href="index.php">Anasayfa</a></li>
            <?php
            $menu_id=@$_GET['menu_id'];
                $menusorgu = $db -> prepare("select * from menuler order by menu_id='$menu_id' ASC");
                $menusorgu -> execute (array());
                $menuliste= $menusorgu -> FetchALL(PDO::FETCH_ASSOC);
                foreach($menuliste as $menucek){
                 
              ?>
               <li><a href="<?php echo $menucek['menu_link'];?>"><?php echo $menucek['menu_ad'];?></a></li>
            <?php
                }
            ?>

          </ul>
        </nav>
      </div>

    </header>
 
