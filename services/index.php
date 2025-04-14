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
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-template-rows: repeat(5, 1fr);
            width: 100%;
            border: 2px solid var(--primary-color);
            border-radius: 1rem;
            overflow: hidden;
        }

        .department-container li {
            padding: 1rem;
            border: 1px solid var(--primary-color);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .department-container li:nth-child(odd) {
            border-left: none;
        }

        .department-container li:nth-child(even) {
            border-right: none;
        }

        .department-container li:first-child,
        .department-container li:nth-child(2) {
            border-top: none;
        }

        .department-container li:last-child,
        .department-container li:nth-last-child(2) {
            border-bottom: none;
        }

        .contentContainer a {
            font-size: 1rem;
            font-weight: bold;
            color: var(--primary-color);
            text-transform: uppercase;
            text-align: center;
            display: block;
            width: 100%;
        }

        @media screen and (max-width: 768px) {
            .department-container {
                grid-template-columns: 1fr;
                grid-template-rows: repeat(9, 1fr);
            }

            .department-container li {
                border-left: none;
                border-right: none;
            }

            .department-container li:first-child {
                border-top: none;
            }

            .department-container li:last-child {
                border-bottom: none;
            }

            .contentContainer a {
                font-size: 0.8rem;
                padding: 0.5rem;
            }
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
       
            <li><a href="<?php echo $ROOTURL ?>services/oral-medicine-and-radiology.php">Oral Medicine & Radiology</a></li>
       <li><a href="<?php echo $ROOTURL ?>services/oral-and-maxillofacial-surgery.php">Oral And Maxillofacial Surgery</a></li>
       <li><a href="<?php echo $ROOTURL ?>services/oral-and-maxillofacial-pathology-and-oral-microbiology.php">Oral And Maxillofacial Pathology & Oral Microbiology</a></li>
       <li><a href="<?php echo $ROOTURL ?>services/periodontology.php">Periodontology</a></li>
       <li><a href="<?php echo $ROOTURL ?>services/community-dentistry.php">Community Dentistry</a></li>
       <li><a href="<?php echo $ROOTURL ?>services/conservative-dentistry-and-endodontics.php">Conservative Dentistry And Endodontics</a></li>
       <li><a href="<?php echo $ROOTURL ?>services/pediatric-and-preventive-dentistry.php">Pediatric And Preventive Dentistry</a></li>
       <li><a href="<?php echo $ROOTURL ?>services/orthodontics-and-dentofacial-orthopedics.php">Orthodontics And Dentofacial Orthopedics</a></li>
       <li><a href="<?php echo $ROOTURL ?>services/prosthodontics.php">Prosthodontics</a></li>
    </div>


    <?php include($ROOT . "includes/_footer.php"); ?>

</body>

</html>