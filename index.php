<?php
include 'database.php';
$sql = 'SELECT activity_id, activity_name, activity_image FROM tbl_activities WHERE activity_type=1';
$sql2 = 'SELECT activity_id, activity_name, activity_image FROM tbl_activities WHERE activity_type=2';
$resultset = mysqli_query($conn, $sql);
$resultset2 = mysqli_query($conn, $sql2);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="styles.css">
    <title>Hodari Junior Club</title>
    <link rel="icon" type="image/x-icon" href="logo.png">
</head>
<body>

    <section id="header">

        <div id="logo">
            <img src="logo.png" alt="Hodari Logo" width="100" height="100">
        </div>

        <div id="headertext">
            <h1>HODARI JUNIOR CLUB</h1>
        </div>

    </section>

    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="images/red.jpg"></div>
        <div class="swiper-slide"><img src="images/blue.jpg"></div>
        <div class="swiper-slide"><img src="images/green.jpg"></div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>

    <section id="intro">

        <div class="animate__animated animate__fadeInDown" id="intro-heading">
            <h2>WHO WE ARE</h2>
        </div>

        <div id="intro-text">
            <p>
                Hodari Junior Club is a member's club offering sports and cultural activities for primary school boys.
                We are located along Naushad Merali Drive in Lavington.
            </p>
        </div>

    </section>

    <section id="activity">

        <div class="animate__animated animate__fadeInUp" id="activity-heading">
            <h2>OUR ACTIVITIES</h2>
        </div>

        <div id="activity-text">

            <p>Our activities are categorised into sports and cultural activities. Find out more below.</p>

        </div>

        <div id="activity-header">
            <h2>Sports</h2>
        </div>

        <div id="activity-links">
            <?php
            while($record = mysqli_fetch_assoc($resultset) ) {
            $id=$record['activity_id'];
            ?>

            <div class="cardhovercard">
                <div class="cardheader">
                    <div class="avatar">
                        <?php echo "<img src='images/".$record["activity_image"]."'>"?>
                    </div>
                </div>

                <div class="card-body-info">
                    <div class="name">
                        <?php echo $record['activity_name']; ?>
                    </div>

                   <!-- <div class="price"><?php echo $record['activity_cost']."/="; ?></div> -->
                </div>
            </div>
            <?php
            }
            ?>


        </div>
        <div id="activity-header">
            <h2>Culture</h2>
        </div>
        <div id="activity-links">
            <?php
            while($record = mysqli_fetch_assoc($resultset2) ) {
            $id=$record['activity_id'];
            ?>

            <div class="cardhovercard">
                <div class="cardheader">
                    <div class="avatar">
                        <?php echo "<img src='images/".$record["activity_image"]."'>"?>
                    </div>
                </div>

                <div class="card-body-info">
                    <div class="name">
                        <?php echo $record['activity_name']; ?>
                    </div>

                   <!-- <div class="price"><?php echo $record['activity_cost']."/="; ?></div> -->
                </div>
            </div>
            <?php
            }
            ?>

    </section>
</body>
</html>
