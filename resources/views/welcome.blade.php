<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7 ]> <html class="ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
  <head>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="googlebot" content="index,follow">

    <!-- Title -->
    <title>iCloud Removal</title>

    <!-- Templates core CSS -->
	{!! Html::style('stylesheets/application.css') !!}


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- Modernizr Scripts -->
    {!! Html::script('javascript/vendor/modernizr-2.7.1.min.js') !!}

  </head>
  <body class="index" id="to-top">

    <!-- Side nav -->
    <nav class="side-nav" role="navigation">

      <ul class="nav-side-nav">
        <li><a class="tooltip-side-nav" href="#section-1" title="" data-original-title="Services" data-placement="left"></a></li>
        <li><a class="tooltip-side-nav" href="#section-2" title="" data-original-title="Features" data-placement="left"></a></li>
        <li><a class="tooltip-side-nav" href="#section-3" title="" data-original-title="Subscribe" data-placement="left"></a></li>
        <li><a class="tooltip-side-nav" href="#to-top" title="" data-original-title="Back" data-placement="left"></a></li>
      </ul>
      
    </nav> <!-- /.side-nav -->




    <!-- Jumbotron -->
    <header class="jumbotron" role="banner">

      <div class="container">

        <div class="row">

          <div class="col-md-7">

            <!-- Logo -->
            <figure class="text-center">
              <a href="./index.html">
                <img class="img-logo" src="images/logo.png" alt="">
              </a>
            </figure> <!-- /.text-center -->

            <!-- Title -->
            <h1>Unlock your iPhone in seconds</h1>

            <!-- Sub title -->
            <p>With the iCloud Removal, you can unlock your Device in a few seconds and enjoy 
              using your iPhone, iPad quickly</p>


              <div class="form-group">
                {!! Form::open(array('url' => 'unlock', 'method' => 'post')) !!}

                <input style="padding:30px 30px;border:solid 0px;opacity:0.4;color:#000" autofocus class="form-control" type="text" placeholder="Your IMEI here" name="imei" />
                <br />
                <input style="padding:30px 30px;border:solid 0px;opacity:0.4;color:#000" class="form-control" type="email" placeholder="Your Email here" name="email" />
                <br />
                <input class="btn btn-danger btn-lg" type="submit" value="Unlock Now" />
              
                {!! Form::close() !!}
              </div>

          </div> <!-- /.col-md-7 -->

          <div class="col-md-5">

            <!-- Images showcase -->
            <figure>
              <img class="img-iPhone" src="images/iphone/2.png" alt="">
            </figure>

          </div> <!-- /.col-md-5 -->
          
        </div> <!-- /.row -->
        
      </div> <!-- /.container -->

    </header> <!-- /.jumbotron -->




    <!-- Services -->
    <section class="services-section" id="section-1">

      <div class="container">

        <div class="row">

          <div class="col-md-4 col-services">
            
            <!-- Icons -->
            <figure>
              <img class="img-services" src="images/icons/flag.png" alt="">
            </figure>

            <!-- Title -->
            <h4>Flag</h4>

            <!-- Description -->
            <p>Harum sunt atque quod reprehenderit voluptates dolores nisi quas dolorum ipsa ad consequatur impedit.</p>

          </div> <!-- /.col-md-4 -->

          <div class="col-md-4 col-services">
            
            <!-- Icons -->
            <figure>
              <img class="img-services" src="images/icons/search.png" alt="">
            </figure>

            <!-- Title -->
            <h4>Search</h4>

            <!-- Description -->
            <p>Quaerat, quisquam, perspiciatis, ipsam eveniet a ducimus repellat rem nobis similique.</p>

          </div> <!-- /.col-md-4 -->

          <div class="col-md-4 col-services">
            
            <!-- Icons -->
            <figure>
              <img class="img-services img-margin" src="images/icons/world-map.png" alt="">
            </figure>

            <!-- Title -->
            <h4>World Map</h4>

            <!-- Description -->
            <p>Aperiam iure doloremque tempora explicabo praesentium eos dicta laudantium corrupti ipsam.</p>

          </div> <!-- /.col-md-4 -->
          
        </div> <!-- /.row -->
        
      </div> <!-- /.container -->
      
    </section> <!-- /.services-section -->




    <!-- Features -->
    <section class="features-section" id="section-2">

      <div class="container">

        <div class="row">

          <div class="col-md-5 col-features text-center">
            
            <!-- Images showcase -->
            <figure>
              <img class="img-iPhone" src="images/iphone/2.png" alt="">
            </figure>

          </div> <!-- /.col-md-5 -->

          <div class="col-md-7 col-features features-content">
            
            <!-- Title -->
            <h3 id="title-1">First title features</h3>

            <!-- Description -->
            <p>Omnis, esse quo natus soluta minima facilis ratione dignissimos necessitatibus quod dolorem labore molestiae maxime veritatis laudantium aut odio ullam laboriosam autem!</p>

            <p>
              <a class="btn btn-danger" href="#title-2">LEARN MORE</a>
            </p>

          </div> <!-- /.col-md-7 -->
          
        </div> <!-- /.row -->




        <div class="row media-screen-800">

          <div class="col-md-7 col-features features-content">
            
            <!-- Title -->
            <h3 id="title-2">Second title features</h3>

            <!-- Description -->
            <p>Omnis, esse quo natus soluta minima facilis ratione dignissimos necessitatibus quod dolorem labore molestiae maxime veritatis laudantium aut odio ullam laboriosam autem!</p>

            <p>
              <a class="btn btn-danger-border" href="./sign-up.html">UNLOCK NOW</a>
            </p>

          </div> <!-- /.col-md-7 -->

          <div class="col-md-5 col-features text-center">
            
            <!-- Images showcase -->
            <figure>
              <img class="img-iPhone margin-top margin-screen-800" src="images/iphone/2.png" alt="">
            </figure>

          </div> <!-- /.col-md-5 -->
          
        </div> <!-- /.row -->


      </div> <!-- /.container -->

    </section> <!-- /.features-section -->




    <!-- Subscribe -->
    <section class="subscribe-section" id="section-3">

      <div class="container">

        <div class="row">

          <div class="col-md-12">

            <!-- Title -->
            <h2>Subscribe to get delightfully infrequent updates</h2>

            <!-- Subscribe form -->
            <div class="row">

              <div class="col-md-6 col-md-offset-3 col-subscribe">

                <form class="subscribe-form form-inline" action="./index.html" role="form">

                  <!-- Input -->
                  <div class="form-group">

                    <label class="sr-only" for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email address">

                  </div> <!-- /.form-group -->

                  <!-- Button -->
                  <button class="btn btn-success" type="submit">Subscribe</button>
                  
                </form> <!-- /.subscribe-form -->



                <section class="subscribe-description">

                  <p>Don't worry. We do not spam :)</p>
                  
                </section> <!-- /.subscribe-description -->
                
              </div> <!-- /.col-md-6 -->

            </div> <!-- /.row -->
            
          </div> <!-- /.col-md-12 -->
          
        </div> <!-- /.row -->

      </div> <!-- /.container -->

    </section> <!-- /.subscribe-section -->




    <!-- Footer -->
    <footer class="footer-section" role="contentinfo">

      <div class="container">

        <div class="row">

          <div class="col-md-4 col-footer">
            
            <!-- Footer 1 -->
            <section>
              <p>Made with <i class="fa fa-heart"></i> Badr.</p>
            </section>

            <!-- AddThis Button -->
            <ul class="addthis_toolbox addthis_default_style">

              <li><a class="addthis_button_facebook_like"></a></li>
              <li><a class="addthis_button_tweet"></a></li>

            </ul> <!-- /.addthis_toolbox -->
  
          </div> <!-- /.col-md-4 -->

          <div class="col-md-4 col-footer col-padding">
            
            <!-- Footer 1 -->
            <section class="text-center">
              <p>Be sure to read <a href="#fakelinks">Terms</a> and <a href="#fakelinks">Privacy Policy</a>.</p>
            </section>

            <!-- Social media links -->
            <ul class="social-media-links">

              <li><a class="fa fa-twitter tw" href="#fakelinks"></a></li>
              <li><a class="fa fa-facebook fb" href="#fakelinks"></a></li>
              
            </ul> <!-- /.social-media-links -->

          </div> <!-- /.col-md-4 -->

          <div class="col-md-4 col-footer">
            
            <!-- Footer 1 -->
            <section>
              <p><strong>iCloud Removal</strong> <br>Address here <br>Morocco.</p>
            </section>

          </div> <!-- /.col-md-4 -->
          
        </div> <!-- /.row -->

      </div> <!-- /.container -->

    </footer> <!-- /.footer-section -->

    <!-- Placed at the end of the document so the pages load faster -->
    {!! Html::script('javascript/vendor/jquery-2.1.0.min.js') !!}
    {!! Html::script('javascript/bootstrap.min.js') !!}
    {!! Html::script('javascript/assets/application.js') !!}
  </body>
</html>
