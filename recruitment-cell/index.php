<?php 

$ROOT = "../"; 
include($ROOT . "includes/_init.php");
$CURRENTDIRURL = $ROOTURL . "recruitment-cell/";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Government Dental College & Hospital Chhatrapati Sambhajinagar</title>
    <link rel="icon" type="image/x-icon" href="<?php echo $ROOTURL ?>public/assets/gdclogo1.png">

    <script src="<?php echo $ROOTURL ?>public/js/_navbar.js" defer></script>
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/global.css"></link>
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/_navbar.css"></link>
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/_footer.css"></link>
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/about-us/about-us.css"></link>
</head>
<body>

    <?php include($ROOT . "includes/_navbar.php"); ?>

    <div class="pageBanner">
        <img src="<?php echo $ROOTURL ?>public/assets/pageBanner.jpg" loading="lazy" />
        <h1>
            RECRUITMENT CELL
        </h1>
    </div>
    <div>
        <div class="main">
            <div class="certificate-container">
                <ol class="unOrderedList">
                    <li><a style="font-weight:400" href="<?php echo $ROOTURL ?>public/assets/antim_nivad_yadi_CA_Ship_Oct_2024.pdf" target="_blank">अंतिम निवड यादी CA Ship 2024</a></li> 
                    <li><a style="font-weight:400" href="<?php echo $CURRENTDIRURL ?>/assets/Final Merit list for the post of Clinical Assistant October 2024.pdf" target="_blank">Final Merit List For The Post of Clinical Assistant October 2024</a></li> 
                    <li><a style="font-weight:400" href="<?php echo $CURRENTDIRURL ?>assets/Provisional Merit list for the post of Clinical Assistant Oct-2024.pdf" target="_blank">Provisional Merit list for the Post of Clinical Assistant Oct-2024</a></li> 
                    <li><a href="<?php echo $CURRENTDIRURL ?>assets/सहयोगी प्राध्यापक सामाजिक दंतशास्त्र करार पद्धतीने पदभरती जाहिरात.pdf" target="_blank">सहयोगी प्राध्यापक सामाजिक दंतशास्त्र करार पद्धतीने पदभरती जाहिरात</a></li>
                    <li><a href="<?php echo $CURRENTDIRURL ?>assets/जाहिरात शुद्धिपत्रक सहयोगी प्राध्यापक, सामाजिक दंतशास्त्र.pdf" target="_blank">जाहिरात शुद्धिपत्रक सहयोगी प्राध्यापक, सामाजिक दंतशास्त्र</a></li>
                    <li><a href="<?php echo $CURRENTDIRURL ?>assets/CA Ship October 2024.pdf" target="_blank">चिकित्सालीन सहाय्यक पदभरती</a></li> 
                    <!-- added new job file -->
                </ol>
            </div> 
        </div>             
    </div>

    <?php include($ROOT . "includes/_footer.php"); ?>

</body>
</html>