<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Steamin's Mug cafe</title>
        <!--Scritp to find google map-->
        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom fonts for this template -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/business-casual.min.css" rel="stylesheet">

        <!--My style sheet-->
        <link href="css/style.css" rel="stylesheet">

        <!--my javascript-->
        <script src="js/script.js"></script>
        <style>
            /* Always set the map height explicitly to define the size of the div
             * element that contains the map. */
            #map {
                height: 425px;
            }
            /* Optional: Makes the sample page fill the window. */
            .googlemap {
                height: 100%;
                margin: 0;
                padding: 0;
            }
        </style>
    </head>

    
    <?php
    include "myHeader.php";
    ?>
    <body>

        <section class="page-section cta">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner text-center rounded">
                            <h2 class="section-heading mb-5">
                                <span class="section-heading-upper">Come On In</span>
                                <span class="section-heading-lower">We're Open</span>
                            </h2>
                            <ul class="list-unstyled list-hours mb-5 text-left mx-auto">

                                <li class="list-unstyled-item list-hours-item d-flex">
                                    Monday
                                    <span class="ml-auto">7:00 AM to 8:00 PM</span>
                                </li>
                                <li class="list-unstyled-item list-hours-item d-flex">
                                    Tuesday
                                    <span class="ml-auto">7:00 AM to 8:00 PM</span>
                                </li>
                                <li class="list-unstyled-item list-hours-item d-flex">
                                    Wednesday
                                    <span class="ml-auto">7:00 AM to 8:00 PM</span>
                                </li>
                                <li class="list-unstyled-item list-hours-item d-flex">
                                    Thursday
                                    <span class="ml-auto">7:00 AM to 8:00 PM</span>
                                </li>
                                <li class="list-unstyled-item list-hours-item d-flex">
                                    Friday
                                    <span class="ml-auto">7:00 AM to 8:00 PM</span>
                                </li>
                                <li class="list-unstyled-item list-hours-item d-flex">
                                    Saturday
                                    <span class="ml-auto">9:00 AM to 5:00 PM</span>
                                </li>
                                <li class="list-unstyled-item list-hours-item d-flex">
                                    Sunday
                                    <span class="ml-auto">Closed</span>
                                </li>
                            </ul>
                            <p class="address mb-5">
                                <em>
                                    <strong>Kirkgate Centre,</strong>
                                    <br>
                                    Bradford, West Yorkshire BD1 1TQ
                                </em>
                            </p>
                            <p class="mb-0">
                                <small>
                                    <em>Call Anytime</em>
                                </small>
                                <br>
                                0808 156 5533
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        
        
        <section class="page-section">
        <div class="container">
            <div id="map" class="googlemap"></div>        
        </div>
        </section>        

 
        
        
        
        
        
<!--        <div id="map" class="googlemap"></div>-->
        <script>
            var map;
            function initMap() {
                map = new google.maps.Map(document.getElementById('map'), {
                    center: {lat: 53.749997, lng: -1.83333},
                    zoom: 8
                });
            }
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap"
        async defer></script>


        <section class="page-section about-heading">
            <div class="container">
                <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="img/about.jpg" alt="">
                <div class="about-heading-content">
                    <div class="row">
                        <div class="col-xl-9 col-lg-10 mx-auto">
                            <div class="bg-faded rounded p-5">
                                <h2 class="section-heading mb-4">
                                    <span class="section-heading-upper">Strong Coffee, Strong Roots</span>
                                    <span class="section-heading-lower">About Our Cafe</span>
                                </h2>
                                <p>Founded in 1987 by the Hernandez brothers, our establishment has been serving up rich coffee sourced from artisan farmers in various regions of South and Central America. We are dedicated to travelling the world, finding the best coffee, and bringing back to you here in our cafe.</p>
                                <p class="mb-0">We guarantee that you will fall in
                                    <em>lust</em>
                                    with our decadent blends the moment you walk inside until you finish your last sip. Join us for your daily routine, an outing with friends, or simply just to enjoy some alone time.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php
        include "footer.php";
        ?>

    </body>

    <!-- Script to highlight the active date in the hours list -->
    <script>
        $('.list-hours li').eq(new Date().getDay()).addClass('today');
    </script>

</html>
