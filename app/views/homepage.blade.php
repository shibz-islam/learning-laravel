<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Homepage</title>
  {{ HTML::style('css/bootstrap.min.css') }}
  {{ HTML::style('css/homepage.css') }}
  {{ HTML::style('css/layout.css') }}
  {{ HTML::style('css/ninja-slider.css') }}
  {{ HTML::style('css/footer.css') }}
  {{ HTML::script('js/jquery.min.js') }}
  {{ HTML::script('js/bootstrap.min.js') }}
  {{ HTML::script('js/bootstrap-hover-dropdown.js') }}
  {{ HTML::script('js/docs.min.js') }}
  {{ HTML::script('js/ninja-slider.min.js') }}

</head>
<!-- NAVBAR
  ================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <a class="navbar-brand" href="#">
                <img alt="Brand" src="img/favicon.ico">
              </a>
              <p class="navbar-text text-primary">Beautiful accounting software</p>
            </div>
            <div id="navbar" class="navbar-collapse">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Small Businesses</a></li>
                <li><a href="#">Accountants & Bookkeepers</a></li>                
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-hover="dropdown">More <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Features</a></li>
                    <li><a href="#">Pricing</a></li>
                    <li><a href="#">Add-on Marketplace</a></li>
                    <br>                    
                    <li><a href="#">Videos & guides</a></li>
                    <li><a href="#">Training & Events</a></li>
                    <li><a href="#">Case studies</a></li>
                    <li><a href="#">Support</a></li>
                    <li><a href="#">Blog</a></li>
                    <br> 
                    <li><a href="#">Small Businesses</a></li>
                    <li><a href="#">Accountants & Bookkeepers</a></li>  
                  </ul>
                </li>
                <li class="active"><a href="#">Login</a></li>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Background Image">
          <div class="container">
            <div class="carousel-caption">
              <div class="header_title">
                <h2>Xero is online accounting software <br> for your small business</h2>
              </div>
              <div class="header_button">
                <a class="btn btn-lg btn-primary header_btn" href="#" role="button">Try Xero For Free</a>
              </div>
              <p class="header_text"><a href="">Pricing plans from just $20/month</a></p>

              <div class="header_find_out">
                <a class="find_out_more" href="#">FIND OUT MORE
                  <div class="bar"><div class="bounce"></div></div>
                </a>
              </div>
            </div>
          </div>
        </div>      
      </div>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="marketing">

      <div class="section_des_1">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-lg-6 col-md-offset-3">
              <h2 id="real_time_1">Get a real-time view of your cashflow</h2>        
              <h4 id="real_time_2">Log in online anytime, anywhere on your Mac, PC, tablet or phone and see up-to-date financials. It’s small business accounting software that’s simple, smart and occasionally magical.
              </h4>
            </div>
            <div class="montage_image">
              <a class="laptop" href="link1"><img class="laptop_img" src="img/sprite-montage-laptop.png"></a>

              <a class="tablet" href="link2"><img class="tablet_img" src="img/sprite-montage-tablet.png"></a>

              <a class="phone" href="link3"><img class="phone_img" src="img/sprite-montage-phone.png"></a>
              <div class="vr hidden-xs hidden-sm">&nbsp;</div>
            </div>       
          </div>
        </div>
      </div>
      <!-- Three columns of text below the carousel -->
      <div class="montage">
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-lg-4">

              <a class="link1" href="#1">
                <canvas class="hidden-xs hidden-sm" id="myCanvas2" width="200" height="100"></canvas>
                <h5 id="link_text">Get paid faster with online invoicing</h5>

                <p>Send online invoices to your customers and get updated when they are opened.</p>

              </a>

            </div>

            <div class="col-md-4 col-lg-4">

              <a class="link2" href="">
                <h5 id="link_text">Run your business on the go</h5>

                <p>Use our mobile app to reconcile, send invoices, create expense claims from anywhere.</p>

              </a>

            </div>

            <div class="col-md-4 col-lg-4">
              <canvas class="hidden-xs hidden-sm" id="myCanvas1" width="200" height="100"></canvas>
              <a class="link3" href="">
                <h5 id="link_text">Reconcile in seconds</h5>

                <p>Simply click OK to reconcile your latest imported and categorised bank transactions.</p>

              </a>

            </div>

          </div>
        </div>
      </div>
      
      <div class="credibility_seals">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-sm-offset-3 col-md-5 col-md-offset-3">
              <h3 id="xero1">Xero is featured by:</h3>
            </div>
          </div>
          <div class="row">
            <div class="hidden-xs col-sm-3 col-md-3">
              <h1 id="xero2">Macworld</h1>
            </div>
            <!-- <div class="clearfix visible-xs-block"></div> -->
            <div class="col-sm-3 col-sm-offset-1 col-md-3 col-md-offset-1">
              <h1 id="xero2">Forbes</h1>
              <h6 id="xero3">"Most Innovative Growth Company in the World"</h6>
            </div>
            <!-- <div class="clearfix visible-xs-block"></div> -->
            <div class="hidden-xs col-sm-3 col-sm-offset-1 col-md-3 col-md-offset-1">
              <h1 id="xero2">accountingTODAY</h1>
            </div>
          </div>
        </div>
      </div>

      <div class="section_des_2">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3">
              <h2 id="popular_features_1">Popular features that will change your life</h2>        
              <h4 id="popular_features_2">Accounting software with all the time-saving tools you need to grow your business. Xero is always secure and reliable and our experts are here to support you 24/7.
              </h4>
            </div>
          </div>
          <div class="row">
            <div class="feature_list">
              <div class="col-sm-3 col-sm-offset-0 col-md-3 col-md-offset-1">
                <a href="">
                  <div class="feature">                   
                    <h2><span class="glyphicon glyphicon-file"></span> </h2>
                    <h4>Easy invoicing</h4>
                    <p>Create professional recurring invoices and receive updates when they're opened.</p>
                  </div>
                </a>
              </div>
              <div class="col-sm-3 col-sm-offset-1 col-md-3 col-md-offset-0">
                <a href="">
                  <div class="feature">                    
                    <h2><span class="glyphicon glyphicon-phone"></span> </h2> 
                    <h4>Go mobile</h4>
                    <p>The Xero mobile app works with iPhone and iPad & Android phones and tablets.</p>
                  </div>
                </a>
              </div>
              <div class="col-sm-3 col-sm-offset-1 col-md-3 col-md-offset-0">
                <a href="">
                  <div class="feature">                   
                    <h2><span class="glyphicon glyphicon-user"></span> </h2>
                    <h4>Unlimited users, for free</h4>
                    <p>Invite your financial advisor to view data remotely for valuable real-time advice.</p>
                  </div>
                </a>
              </div>
            </div>         
          </div>
          <div class="row">
            <div class="feature_list">
              <div class="col-sm-3 col-sm-offset-0 col-md-3 col-md-offset-1">
                <a href="">
                  <div class="feature">                   
                    <h2><span class="glyphicon glyphicon-usd"></span> </h2>
                    <h4>Multi-currency</h4>
                    <p>Reconcile foreign currency accounts, with exchange rates updated hourly.</p>
                  </div>
                </a>
              </div>
              <div class="col-sm-3 col-sm-offset-1 col-md-3 col-md-offset-0">
                <a href="">
                  <div class="feature">                    
                    <h2><span class="glyphicon glyphicon-link"></span> </h2> 
                    <h4>Connect to 300+ third-party apps</h4>
                    <p>Inventory, invoicing, time tracking, expenses and more all integrate with Xero.</p>
                  </div>
                </a>
              </div>
              <div class="col-sm-3 col-sm-offset-1 col-md-3 col-md-offset-0">
                <a href="">
                  <div class="feature">                   
                    <h2><span class="glyphicon glyphicon-folder-close"></span> </h2>
                    <h4>Attach files to data</h4>
                    <p>Attach source documents to almost anything in Xero – invoices, bills and more.</p>
                  </div>
                </a>
              </div>
            </div>         
          </div>
          <div class="row">
            <div class="feature_list">
              <div class="col-sm-3 col-sm-offset-0 col-md-3 col-md-offset-1">
                <a href="">
                  <div class="feature">                   
                    <h2><span class="glyphicon glyphicon-th-large"></span> </h2>
                    <h4>Create purchase orders</h4>
                    <p>Create and email custom purchase orders and copy to bills for payment.</p>
                  </div>
                </a>
              </div>
              <div class="col-sm-3 col-sm-offset-1 col-md-3 col-md-offset-0">
                <a href="">
                  <div class="feature">                    
                    <h2><span class="glyphicon glyphicon-list-alt"></span> </h2> 
                    <h4>Claim those expenses</h4>
                    <p>It’s easy to handle personal expenses – just review and approve receipts.</p>
                  </div>
                </a>
              </div>
              <div class="col-sm-3 col-sm-offset-1 col-md-3 col-md-offset-0">
                <a href="">
                  <div class="feature">                   
                    <h2><span class="glyphicon glyphicon-credit-card"></span> </h2>
                    <h4>Pay bills</h4>
                    <p>Manage your cashflow by scheduling payments and paying suppliers.</p>
                  </div>
                </a>
              </div>
            </div>         
          </div>
          <div class="row">
            <div class="col-md-4 col-lg-4 col-md-offset-4">
              <div class="more_features">
                <a href="" class="more_features_btn">Explore More Features</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="customer_story">
        <div class="container">

          <div class="row">
            <div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3">
              <div class="customer_story_heading">
                <h2>Over 300,000 small businesses love Xero</h2>
                <h4>Here's what Xero customers had to say:</h4>
              </div>
            </div>             
          </div>

          <div class="row">
            <div class="customer_list">
              <div class="col-xs-6 col-sm-3 col-md-3 customer">
                <div class="customer_1">
                  <a href="" class="thumbnail" id="">
                    <img src="img/img (1).jpg">
                  </a>
                  <div class="customer_name">
                    AJ Kulatunga
                  </div>
                  <div class="customer_business">
                    Motivational Speaker
                  </div> 
                </div>
              </div>
              <div class="col-xs-6 col-sm-3 col-md-3 customer">
                <div class="customer_2">
                  <a href="" class="thumbnail" id="">
                    <img src="img/img (2).jpg">
                  </a>
                  <div class="customer_name">
                    Dave Lamason
                  </div>
                  <div class="customer_business">
                    Coffee House Owner
                  </div>
                </div>
              </div>
              <div class="clearfix visible-xs-block"></div>
              <div class="col-xs-6 col-sm-3 col-md-3 customer">
                <div class="customer_3">
                  <a href="" class="thumbnail">
                    <img src="img/img (3).jpg">
                  </a> 
                  <div class="customer_name">
                    Kajal Sanghrajka
                  </div>
                  <div class="customer_business">
                    Eyewear Boutique Founder
                  </div>                       
                </div>
              </div>
              <div class="col-xs-6 col-sm-3 col-md-3 customer">
                <div class="customer_4">
                  <a href="" class="thumbnail">
                    <img src="img/img (4).jpg">
                  </a>
                  <div class="customer_name">
                    Rochelle Harrison
                  </div>
                  <div class="customer_business">
                    Chocolatier
                  </div>
                </div>
              </div>
            </div>  
          </div>  

          <div class="row">
            <div class="col-md-6 col-md-offset-3 customer_content">
              <div class="twitter_link">
                <a href=""><h4>@ICT_GURU</h4></a>
              </div>
              <div class="customer_comment">
                <h4>In case I haven't said it enough already, I LOVE @Xero. 2 quarters done in just over an hour vs 6+ hrs on old system.</h4>
              </div> 
              <div class="more_customer">
                <a href="" class="more_customer_btn">See Customer Stories</a>
              </div> 
            </div>
          </div>

        </div>  
      </div>


      <div class="signup">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3">
              <div class="signup_heading">
                <h2>30-day free trial</h2>
                <h4>Try every feature, add unlimited users, no credit card required</h4>
              </div>

              <div class="signup_form">
                {{ Form::open(['url' => 'signup_validation', 'class' => 'form-horizontal']) }}
                <div class="form-group">
                  <div class="col-sm-6">
                    {{ Form::text('first_name',null,['class' => 'form-control','placeholder'=>'First name']) }}
                    <p class="text-danger">{{ $errors->first('first_name') }}</p>
                  </div>
                  <div class="col-sm-6">
                    {{ Form::text('last_name',null,['class' => 'form-control','placeholder'=>'Last name']) }}
                    <p class="text-danger">{{ $errors->first('last_name') }}</p>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    {{ Form::email('email',null,['class' => 'form-control','placeholder'=>'Email Address']) }}
                    <p class="text-danger">{{ $errors->first('email') }}</p>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    {{ Form::password('password',['class' => 'form-control','placeholder'=>'Your password']) }}
                    <p class="text-danger">{{ $errors->first('password') }}</p>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    {{ Form::text('phone_number',null,['class' => 'form-control','placeholder'=>'Phone Number']) }}
                    <p class="text-danger">{{ $errors->first('phone_number') }}</p>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                  {{ Form::label('business_location','Business location') }}
                  </div>
                  <div class="col-sm-12">
                    {{ Form::select('business_location',[
                    'AR' => 'Argentina',
                    'BD' => 'Bangladesh',
                    'CN' => 'China',
                    'IN' => 'India',
                    'HK' => 'Hong Kong',
                    'GB' => 'United Kingdom',
                    'US' => 'United States'
                    ],null,['class'=>'form-control']) }}
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12 checkbox">
                    <label>
                      {{ Form::checkbox('activation_status','yes') }}
                      I have read and I agree to the <a href="">Terms of Use</a>
                    </label>
                    <p class="text-danger">{{ $errors->first('activation_status') }}</p>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-6 col-sm-offset-3">
                  {{ Form::submit('Get Started', array('class' => 'btn btn-default signup_btn')) }}
                  </div> 
                </div> 
                {{ Form::close() }}
              </div>  

              <div class="register_option">
                <p>Or register interest as an <a href="">accountant or bookkeeper</a>
                </p>
              </div> 

            </div>
          </div>

        </div>
      </div>  

    </div><!-- /.marketing -->


    <!-- FOOTER -->
    <footer>
      <div class="container">
        <div class="row footer_head">
          <div class="col-md-3 col-lg-3">
            <p id="head">LEARN ABOUT EBiT</p>
            <ul id="list1">
              <li><a href="">Why EBiT?</a></li>
              <li><a href="">Features</a></li>
              <li><a href="">Pricing</a></li>
              <li><a href="">Case studies</a></li>
              <li><a href="">Add-on Marketplace</a></li>

            </ul>
          </div>

          <div class="col-md-3 col-lg-3">
            <p id="head">GETTING STARTED</p>
            <ul id="list2">
              <li><a href="">Videos & guides: EBiT TV</a></li>
              <li><a href="">Training & events: EBiT U</a></li>
              <li><a href="">Advisors directory</a></li>
              <li><a href="">Support</a></li>
            </ul>
          </div>

          <div class="col-md-3 col-lg-3">
            <p id="head">PARTNER WITH US</p>
            <ul id="list3">
              <li><a href="">Accountants & bookkeepers</a></li>
              <li><a href="">Financial institutions</a></li>
              <li><a href="">Developer tools</a></li>
            </ul>
          </div>

          <div class="col-md-3 col-lg-3">
            <p id="head">CONTACT &amp; INFO</p>
            <ul id="list4">
              <li><a href="">About us</a></li>
              <li><a href="">Blog</a></li>
              <li><a href="">Media</a></li>
              <li><a href="">Careers</a></li>
              <li><a href="">Contact us</a></li>
            </ul>
          </div>

        </div>

        <div class="row footer_row">
          <div class="col-sm-3 col-md-3">
            <a href="" class="footer_links">
              <div class="logo_link1">
                <div class="row">
                  <div class="col-sm-4 col-md-4">
                    <h5 id="logo">EBiT</h5>
                  </div>
                  <div class="col-sm-6 col-md-8">
                    <h4>
                      <p>EBit Touch</p>
                      <p id="sub_text">For iPhone & Android</p>
                    </h4>
                  </div>
                </div>

              </div>
            </a>
          </div>
          <div class="col-sm-6 col-md-6">
            <div id='ninja-slider'>
              <ul>
                <li><a href="">
                  <h5>Small Business guides</h5>
                  <h6>Invoice Payment Terms: Top 7 Tips</h6>
                </a></li>
                <li><a href="">
                  <h5>Small Business guides</h5>
                  <h6>Mac accounting software that's elegant and intuitive</h6>
                </a></li>
                <li><a href="">
                  <h5>Small Business guides</h5>
                  <h6>How to succeed in the online retail business</h6>
                </a></li>
                <li><a href="">
                  <h5>Small Business guides</h5>
                  <h6>When you should hire an accountant</h6>
                </a></li>
                <li><a href="">
                  <h5>Small Business guides</h5>
                  <h6>Why cloud accounting is good for business</h6>
                </a></li>
                <li><a href="">
                  <h5>Small Business guides</h5>
                  <h6>Make small business accounting fun</h6>
                </a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-3 col-md-3">
            <div class="row">
              <div class="col-sm-8 col-sm-offset-4 col-md-12 col-md-offset-0">
                <form class="navbar-form navbar-right">
                  <input type="text" class="form-control search" placeholder="Search...">
                  <button type="button" class="btn btn-info search_btn"><span class="glyphicon glyphicon-search"></span></button>
                </form>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12 col-md-12">
                <select class="form-control country_select">
                  <option>Australia</option>
                  <option>New Zealand</option>
                  <option>United Kingdom</option>
                  <option>United States</option>
                  <option>Global</option>
                </select> 
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-6 col-md-6">
            <a href="" class="social_logo"><img src="img/twitter_logo.png" alt="Twitter Logo">Twitter</a>

            <a href="" class="social_logo"><img src="img/facebook_logo.png" alt="Facebook Logo">Facebook</a>

            <a href="" class="social_logo"><img src="img/youtube_logo.png" alt="Youtube Logo">Youtube</a>

            <a href="" class="social_logo"><img src="img/g+_logo.png" alt="Google+ Logo">Google+</a>

            <a href="" class="social_logo"><img src="img/linkedin_logo.png" alt="Linked In Logo">Linked In</a>
          </div>

          <div class="col-sm-3 col-sm-offset-3 col-md-3 col-md-offset-3">
            <a href="" class="footer_extra">Terms of Use</a>
            <a href="" class="footer_extra">Site map</a>
            <a href="" class="footer_extra">Privacy</a>
          </div>
        </div>

        <div class="row">
          <p id="footer_last">&copy; 2014 Euro Bangla iT Limited. All rights reserved.</p>
        </div>

      </div>
    </footer>


    <script type="text/javascript">
      // Arrow Bounce
      $(".find_out_more").click(function() {
        $('html,body').animate({
          scrollTop: $(".marketing").offset().top},
          'slow');
      });
      $(".header_btn").click(function() {
        $('html,body').animate({
          scrollTop: $(".signup").offset().top},
          'slow');
      });
      </script>
      <script>
      var c = document.getElementById("myCanvas1");
      var ctx = c.getContext("2d");
      ctx.beginPath();
      ctx.arc(100,75,50,1.5*Math.PI,0.5*Math.PI);
      ctx.stroke();

      </script> 

      <script>

      var c = document.getElementById("myCanvas2");
      var ctx = c.getContext("2d");
      ctx.beginPath();
      ctx.arc(100,75,50,0.5*Math.PI,1.5*Math.PI);
      ctx.stroke();

      </script>

    </body>
    </html>
