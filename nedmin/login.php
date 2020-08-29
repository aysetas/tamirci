<?php include ("netting/baglan.php");?>
<?php
     $sorgula = $db -> prepare("select * from admin");
     $sorgula -> execute (array());
     $adminliste= $sorgula -> FetchALL(PDO::FETCH_ASSOC);
foreach($adminliste as $admincek){
?>
<?php
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo $admincek["admin_adi"];?></title>

  <!-- BOOTSTRAP STYLES-->
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
  <!-- FONTAWESOME STYLES-->
  <link href="assets/css/font-awesome.css" rel="stylesheet" />
  <!-- GOOGLE FONTS-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

  <style>
      body {
 background-image: url("assets/img/bg.jpg");

 background-attachment:fixed;
 -moz-background-size:100% 100%;  /*firefox  3.6*/
 -o-background-size:100% 100%;    /*opera  9.5*/
 -webkit-background-size:100% 100%;  /*safari  3.0, chome*/
 background-size:100% 100%;          /*w3c, firefox  4.0, ie9*/



}
  </style>
</head>
<body >
    <div class="container">
        <div class="row text-center " style="padding-top:100px;">
            
        </div>
        <div class="row ">

            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">

                <div style="background-color:white; opacity:0.8; margin-top:50px;" class="panel-body">
                <form class="login100-form validate-form" action="netting/islem.php" method="POST">
                        <hr />
                        <center><h3><B>ADMİN GİRİŞİ</B></h3></center>
                         
                        <br/>
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                            <div class="wrap-input100 validate-input" data-validate = "Lütfen Kullanıcı Adınızı Giriniz.">
                              <input class="form-control" type="text" name="admin_kadi" placeholder="Admin Adınız">
                            </div>
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                            <div class="wrap-input100 validate-input" data-validate = "Lütfen Şifrenizi Giriniz.">
                                  <input class="form-control" type="password" name="admin_sifre" placeholder="Şifreniz">
                         
                           </div>
                      
                       
                        </div>
                        <?php
                        if(@$_GET['login']=="no"){
                            echo "Kullanıcı bulunamadı.";
                        }


                        ?>


                     <button style="width:100%" type="submit" name="loggin" class="btn btn-primary" >GİRİŞ YAP </button>
                     <hr />
                     
                </form>
             </div>

         </div>


     </div>
 </div>

</body>
</html>
