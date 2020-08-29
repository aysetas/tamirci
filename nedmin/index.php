<?php 
include 'netting/baglan.php';

if(!isset($_SESSION['admin_kadi'])){  //logine giriş yapmadan admin paneline girmene izin vermez.
    header('location:login.php');
}

include 'header.php';
include 'sidebar.php';

?>
<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">TAMİRCİ ADMİN PANELİNE HOŞGELDİNİZ..</h1>
                        <h1 class="page-subhead-line">Admin panelini kullanmak için yan taraftaki menüleri kullanabilirsiniz. </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                

            </div>
            <!-- /. PAGE INNER  -->
        </div>
<?php include("footer.php");?>
