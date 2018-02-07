<body class="off-canvas-nav-left" style="padding-top:70px;">





<div class="container">

    <!-- Main component for a primary marketing message or call to action -->
    <div class="jumbotron">
        <h1 class="text-center">Modal Example</h1>
        <p>This example is a quick exercise to illustrate how the Modals would work within the site.</p>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary btn-lg text-center" data-toggle="modal" data-target="#myModal">
            Launch demo modal
        </button>

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="jumbotron">
        <h1 class="text-center">Carousel Example</h1>
        <p>This example is a quick exercise to illustrate how the carousel works. It includes the responsive CSS and HTML, so it also adapts to your viewport and device.</p>
        <div id="demoCarousel" class="carousel slide" data-ride="carousel">
            <!-- INdicators for the carousel -->
            <ol class="carousel-indicators">
                <li data-target="#demoCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#demoCarousel" data-slide-to="1"></li>
                <li data-target="#demoCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrappers for the slides -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block img-fluid" src="https://placeimg.com/640/480/tech" alt="First slide" style="width:100%;">
                </div>
                <div class="carousel-item">
                    <img class="d-block img-fluid" src="https://placeimg.com/640/480/people" alt="Second slide" style="width:100%;">
                </div>
                <div class="carousel-item">
                    <img class="d-block img-fluid" src="https://placeimg.com/640/480/nature" alt="Third slide" style="width:100%;">
                </div>
            </div>
            <!-- Left and Right controlls -->
            <a class="carousel-control-prev" href="#demoCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#demoCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div> <!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<!--
<script src="src/bootstrap-off-canvas-nav.js"></script>
-->
</body>