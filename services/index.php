<?php

$ROOT = "../";
include($ROOT . "includes/_init.php");
$CURRENTDIRURL = $ROOTURL . "/services";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Government Dental College & Hospital Chhatrapati Sambhajinagar</title>
    <link rel="icon" type="image/x-icon" href="<?php echo $ROOTURL ?>public/assets/gdclogo1.png">

    <script src="<?php echo $ROOTURL ?>public/js/_navbar.js" defer></script>
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/global.css">
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/_navbar.css">
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/_footer.css">
    <style>
        .department-container {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .department-container>a {
            flex: 1 1 40%;
            min-width: 250px;
        }
    </style>
</head>

<body>

    <?php include($ROOT . "includes/_navbar.php"); ?>

    <div class="pageBanner">
        <img src="<?php echo $ROOTURL ?>public/assets/pageBanner.jpg" loading="lazy" />
        <h1>
            SERVICES
        </h1>
    </div>
    <div class="contentContainer department-container">
        <a href="<?php echo $ROOTURL ?>services/oral-medicine-and-radiology.php">Oral Medicine & Radiology</a>
        <a href="<?php echo $ROOTURL ?>services/oral-and-maxillofacial-surgery.php">Oral And Maxillofacial Surgery</a>
        <a href="<?php echo $ROOTURL ?>services/oral-and-maxillofacial-pathology-and-oral-microbiology.php">Oral And Maxillofacial Pathology & Oral Microbiology</a>
        <a href="<?php echo $ROOTURL ?>services/periodontology.php">Periodontology</a>
        <a href="<?php echo $ROOTURL ?>services/community-dentistry.php">Community Dentistry</a>
        <a href="<?php echo $ROOTURL ?>services/pediatric-and-preventive-dentistry.php">Pediatric And Preventive Dentistry</a>
        <a href="<?php echo $ROOTURL ?>services/prosthodontics.php">Prosthodontics</a>
    </div>


    <?php include($ROOT . "includes/_footer.php"); ?>

</body>

</html>