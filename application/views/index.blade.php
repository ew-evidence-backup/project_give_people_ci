@include('header')
<body>


<div class="container">

    <div><table align="right" cellpadding='5'>

            <tr>

                <td>

                    <a href="#">Login</a>

                </td>

                <td>



                </td>

                <td>

                    <a href="#">Customer Support</a>

                </td>

            </tr>

    </table></div>
    <div class="masthead">
        <h3 class="muted"><img src="/img/logo.png" alt=""/></h3>
        <div class="navbar">
            <div class="navbar-inner">
                <div class="container">
                    <ul class="nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">Give</a></li>
<!--                        <li><a href="#">Services</a></li>-->
<!--                        <li><a href="#">Downloads</a></li>-->
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div><!-- /.navbar -->
    </div>

    <!-- Jumbotron -->
<!--    <div>-->
<!---->
<!--        <p class="lead">-->
<!---->
<!--        <div class = "left">-->
<!--            <div class = "custimage">Widget<img src = "img/products/widget.png" alt = "notch"/><p>Notch</p></div>-->
<!--            <div class = "custimage">Widget<img src = "img/peak.jpg" alt = "peak"/><p>Peak</p></div>-->
<!--            <div class = "custimage">Widget<img src = "img/shawl.jpg" alt = "shawl"/><p>Shawl</p></div>-->
<!--        </div>-->
<!---->
<!--        </p>-->
<!---->
<!--    </div>-->
<!--    <div> <a class="btn btn-large btn-success" href="#">Get Started</a></div>-->
<!---->
<!--    <br/>-->

    <!-- Jumbotron -->
    <div class="jumbotron">
        <h1>Gifts Done Right!</h1>
        <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <a class="btn btn-large btn-success" href="#">Get Started</a>
    </div>

    <hr>

    <!-- Example row of columns -->
    <div class="row-fluid">
        <div class="span4">
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
        <div class="span4">
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
        <div class="span4">
            <h2>Heading</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
            <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
    </div>

    <hr>
    @include('footer')

