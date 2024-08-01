<?php 

$ROOT = "../../../"; 
include($ROOT . "includes/_init.php");
$CURRENTDIRURL = $ROOTURL . "departments/conservative-dentistry-and-endodontics/gallery/";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Government Dental College & Hospital Sambhajinagar</title>
    <link rel="icon" type="image/x-icon" href="<?php echo $ROOTURL ?>public/assets/gdclogo1.png">

    <script src="<?php echo $ROOTURL ?>public/js/_navbar.js" defer></script>
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/global.css"></link>
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/_navbar.css"></link>
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/_footer.css"></link>
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/departments/galleryStyles.css"></link>
</head>
<body>

    <?php include($ROOT . "includes/_navbar.php"); ?>

    <div class="pageBanner">
        <img src="<?php echo $ROOTURL ?>public/assets/pageBanner.jpg"/>
        <h1>
            DEPARTMENT OF CONSERVATIVE DENTISTRY AND ENDODONTICS Gallery
        </h1>
    </div>
    <div class="contentContainer">
        <div>
            <h2>
                Gallery
            </h2>
            <div class="galleryCardContainer">
                <div class="galleryCard">
                    <img src="<?php echo $CURRENTDIRURL ?>assets/centralClinic.png" alt="Department Image" />
                    <p>Central Clinic</p>
                </div>
                <div class="galleryCard">
                    <img src="<?php echo $CURRENTDIRURL ?>assets/clinicBoard.png" alt="Department Image" />
                    <p>Clinic Board</p>
                </div>
                <div class="galleryCard">
                    <img src="<?php echo $CURRENTDIRURL ?>assets/clinic.png" alt="Department Image" />
                    <p>Clinic</p>
                </div>
                <div class="galleryCard">
                    <img src="<?php echo $CURRENTDIRURL ?>assets/dentalOperatingMicroscope.png" alt="Department Image" />
                    <p>Dental Operating Microscope</p>
                </div>
                <div class="galleryCard">
                    <img src="<?php echo $CURRENTDIRURL ?>assets/departmentBoard.png" alt="Department Image" />
                    <p>Department Board</p>
                </div>
                <div class="galleryCard">
                    <img src="<?php echo $CURRENTDIRURL ?>assets/hardAndSoftTissueLaser.png" alt="Department Image" />
                    <p>Hard And Soft Tissue Laser</p>
                </div>
                <div class="galleryCard">
                    <img src="<?php echo $CURRENTDIRURL ?>assets/preClinicalLab.png" alt="Department Image" />
                    <p>Pre Clinical Lab</p>
                </div>
            </div>
        </div>
    </div>

    <?php include($ROOT . "includes/_footer.php"); ?>

</body>
</html>