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


<main role="main">


    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="first-slide" src="/images/computer.jpeg" alt="First slide">
                <div class="container">
                    <div class="carousel-caption text-left">
                        <h1>Example headline.</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="second-slide" src="/images/guitar.jpeg" alt="Second slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Another example headline.</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container marketing">
        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-lg-4">
                <img class="rounded-circle" src="/images/res.jpeg" alt="Generic placeholder image" width="140"
                     height="140">
                <h2>Responsive</h2>
                <p>Sowohl auf dem Desktop als auch Mobil erleben</p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="rounded-circle" src="/images/dynamic.jpeg" alt="Generic placeholder image" width="140"
                     height="140">
                <h2>Dynamisch</h2>
                <p>Es wird Komplexer. <br> Dynamisch gelöst mit einem Webstack</p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="rounded-circle" src="/images/customized.jpg" alt="Generic placeholder image" width="140"
                     height="140">
                <h2>SEO</h2>
                <p>Suchmaschienen Optimiert. <br> Nach den aktuell bekannten Algorythmen.</p>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-lg-4">
                <p><a class="btn btn-secondary" href="<?=$this->httpPath(
                        'app.processor',
                        array('processor' => 'ideas')
                    )?>" role="button">View details &raquo;</a></p></div>
            <div class="col-lg-4">
                <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
            </div>

        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Eine <span
                            class="text-muted">Idee</span></h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis
                    euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus,
                    tellus ac cursus commodo.</p>
            </div>
            <div class="col-md-5">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">Ein <span
                            class="text-muted">Konzept </span></h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis
                    euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus,
                    tellus ac cursus commodo.</p>
            </div>
            <div class="col-md-5 order-md-1">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Ein <span class="text-muted">Produkt </span></h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis
                    euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus,
                    tellus ac cursus commodo.</p>
            </div>
            <div class="col-md-5">
            </div>
        </div>

        <hr class="featurette-divider">


        <div class="row featurette">
            <div class="col-md-7 offset-md-3"">
                <h2 class="featurette-heading">Wer  <span class="text-muted"> sind wir</span></h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis
                    euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus,
                    tellus ac cursus commodo.</p>
            </div>
                <div class="col-md-5 order-md-1">
            </div>
        </div>
        <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->
    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
        <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
            <div class="my-3 py-3">
                <div class="col-lg-4 offset-md-8">
                <img class="rounded-circle" src="/images/res.jpeg" alt="Generic placeholder image" width="140"
                     height="140">
            </div>
                <h2 class="display-5">Andreas Muth</h2>
                <p class="lead nice-font">- Fachinformatiker Anwendungsentwicklung</p>
            </div>
            <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                            <p class="lead black-font">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta
                                felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
            <div class="my-3 p-3">
                <div class="col-lg-4">
                <img class="rounded-circle" src="/images/res.jpeg" alt="Generic placeholder image" width="140"
                     height="140">
            </div>
                <h2 class="display-5">Leon Sander</h2>
                <p class="lead nice-font">- B. Sc. Wirtschaftsinformatik</p>
            </div>
            <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">


                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <p class="lead white-font">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta
                            felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                    </div>
                </div>


            </div>
        </div>
    </div>
</main>