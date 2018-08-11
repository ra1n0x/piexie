<?php
/**
 * Created by PhpStorm.
 * User: and
 * Date: 11.08.18
 * Time: 01:27
 */

// Define parent layout
$this->layout('app:layout');

// Set the pageTitle variable
// that is used by the parent template uses to display page title
$this->set('pageTitle', "Welcome");
?>

<div class="container content">
<!--    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">-->
<!--        <div class="carousel-inner">-->
<!--            <div class="carousel-item active">-->
<!--                <img class="d-block w-100" src="/images/image1.jpg" alt="First slide">-->
<!--            </div>-->
<!--            <div class="carousel-item">-->
<!--                <img class="d-block w-100" src="/images/image2.jpeg" alt="Second slide">-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div id="carouse.d-blocklExampleSlidesOnly" class="carousel slide" data-ride="carousel">-->
<!--        <div class="carousel-inner">-->
<!--            <div class="carousel-item active">-->
<!--                <img class="d-block w-100" src="/images/download.svg" alt="First slide">-->
<!--            </div>-->
<!--            <div class="carousel-item">-->
<!--                <img class="d-block w-100" src="/images/download.svg" alt="Second slide">-->
<!--            </div>-->
<!--            <div class="carousel-item">-->
<!--                <img class="d-block w-100" src="/images/download.svg" alt="Third slide">-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="/images/download.svg" alt="Los Angeles">
            </div>

            <div class="item">
                <img src="/images/download.svg" alt="Chicago">
            </div>

            <div class="item">
                <img src="/images/download.svg" alt="New York">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

</div>

