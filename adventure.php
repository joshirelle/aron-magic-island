<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <title>Aron Magic Island</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="css/main.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <!-- <link href="css/calendar.css" type="text/css" rel="stylesheet" media="screen,projection" /> -->

</head>

<body>
    <nav class="light-blue lighten-1" role="navigation">
        <div class="nav-wrapper container"><a id="logo-container" href="index.php" class="brand-logo">AronMagicIsland</a>

            <ul class="right hide-on-med-and-down">
                <li><a href="#adventures">Adventures</a></li>
                <li><a href="#cottages">Cottages</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#" id="sign-in">Log in/Sign up</a></li>
            </ul>

            <ul id="nav-mobile" class="sidenav">
                <li>
                    <div class="user-view">
                        <div class="background">
                            <img src="./assets/images/raw/image5.jpg" />
                        </div>
                        <a href="#user"><img class="circle" src="./assets/images/raw/image5.jpg" /></a>
                        <a href="#name"><span class="white-text name">Aron Magic Island</span></a>
                        <a href="#email"><span class="white-text email">aronmagicislandpicnic2@gmail.com</span></a>
                    </div>
                </li>
                <li>
                    <a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a>
                </li>
                <li><a href="#!">Second Link</a></li>
                <li>
                    <div class="divider"></div>
                </li>
                <li><a class="subheader">Subheader</a></li>
                <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
            </ul>
            <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
    </nav>

    <div class="fixed-action-btn">
        <a class="btn-floating btn-large red" id="menu">
            <i class="large material-icons">mode_edit</i>
        </a>
        <ul>
            <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
            <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
            <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
            <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
        </ul>
    </div>


    <div class="section no-pad-bot" id="index-banner">
        <div class="container">
            <br><br>
            <div class="carousel carousel-slider">
                <a class="carousel-item" href="#one!"><img src="./assets/images/raw/scuba-1.jpg"></a>
                <a class="carousel-item" href="#two!"><img src="./assets/images/raw/scuba-2.jpg"></a>
                <a class="carousel-item" href="#three!"><img src="./assets/images/raw/scuba-3.jpg"></a>
                <a class="carousel-item" href="#four!"><img src="./assets/images/raw/scuba-4.jpg"></a>
            </div>

            <h5><strong>Scuba Diving Adventure</strong></h5>
            <br>
            <p>Location: Beach in Nabas, Aklan | Duration: 30 mins - 1 hour | Free Cancellation 2 day(s) prior</p>
            <hr>
            <p>Scuba diving is a mode of underwater diving where the diver uses a self-contained underwater breathing apparatus (scuba), which is completely independent of surface supply, to breathe underwater.</p>
            <hr><br>
            <p>
                <h5>Package Options</h5>
                <br>
            </p>
            <div class="col s12 m7">
                <ul class="collapsible popout">
                    <li>
                        <div class="collapsible-header"><i class="material-icons">place</i>Beach in Nabas, Aklan</div>
                        <div class="collapsible-body"><span>Note: Aron Magic Island is only reachable within Boracay Island Hoping Tour. Private transportation directly going to the island is not yet available. </span></div>
                    </li>
                    <li>
                        <div class="collapsible-header"><i class="material-icons">access_time</i>Duration</div>
                        <div class="collapsible-body"><span>30 mins - 1 hour</span></div>
                    </li>
                    <li>
                        <div class="collapsible-header"><i class="material-icons">date_range</i>Select date and options</div>
                        <div class="collapsible-body">
                            Check in: <input type="text" class="datepicker">
                            Check out: <input type="text" class="datepicker">
                            <!-- <div class="app-calendar"></div> -->
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Tap Target Structure -->
    <div class="tap-target" data-target="menu">
        <div class="tap-target-content">
            <h5>Title</h5>
            <p>A bunch of text</p>
        </div>
    </div>

    <footer class="page-footer blue">

        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Island Bio</h5>
                    <p class="grey-text text-lighten-4">Island description ...</p>
                </div>

                <div class="col l3 s12">
                    <h5 class="white-text">Aron Magic Island</h5>
                    <ul>
                        <li><a class="white-text" href="#!">About Us</a></li>
                        <li><a class="white-text" href="#!">Terms & Conditions</a></li>
                        <li><a class="white-text" href="#!">Privacy Policy</a></li>
                        <li><a class="white-text" href="#!">FAQ</a></li>
                    </ul>
                </div>

                <div class="col l3 s12">
                    <h5 class="white-text">Connect</h5>
                    <ul>
                        <li><a class="white-text" href="#!">Link 1</a></li>
                        <li><a class="white-text" href="#!">Link 2</a></li>
                        <li><a class="white-text" href="#!">Link 3</a></li>
                        <li><a class="white-text" href="#!">Link 4</a></li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="footer-copyright">
            <div class="container">
                Copyright &copy; 2020 <a class="orange-text text-lighten-3" href="https://www.facebook.com/aronmagicislandislove">AM Island</a>. All Rights Reserved
            </div>
        </div>

    </footer>

    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <!-- <script src="js/calendar.js" type="module"></script> -->
    <script src="js/main.js"></script>

</body>

</html>