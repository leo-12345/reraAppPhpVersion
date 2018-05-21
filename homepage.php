
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
table, th, td {
    border: 4px solid black;
    border-collapse: collapse;
}
tr:nth-child(even) {
    background-color: #dddddd;
}
.strokeme
{
    color: #2471A3;
    font-weight: 900;
    font-size: 300%;
    font-variant: small-caps; 
    text-shadow:
    -1px -1px 0 #000,
    1px -1px 0 #000,
    -1px 1px 0 #000,
    1px 1px 0 #000;  
}
.ryt{
  float:right;
}
</style>
</head>

<body style="background-image:url('/img/clg.jpg');background-size: 100%;">
  <header>
<div class="row" style="text-align:center;background-color: #D7DBDD;background-size: 100% opacity: 0.5">
  <div class="strokeme">Real Estate Regulatory Authority Act, Delhi
  </div>

<div class="row" style="background-color:#000000;padding:5px;text-align:center;opacity: 1">
<button type="button" class="btn btn-link btn-md" style="text-decoration: none;color:white;"><a href="homepage.php">Home</a>
</button>
<button type="button" class="btn btn-link" style="" ><ul class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#" >Registrations<span class="caret"></span></a>
        <ul class="dropdown-menu">
      <li><a href="registrationguidelines.php">Guidelines</a></li>
      <li><a href="projectregistration.php">Project Registration</a></li>
    <li><a href="agentregistration.php">Agent Registration</a></li> 
    <li><a href="complaintregistration.php">Complaint Registration</a></li>
    <li><a href="formdownloadreg.php">Form Download</a></li>  
    <li><a href="usermanual.php">User Manual</a></li>
    </ul></button>
<button type="button" class="btn btn-link" >Projects</button>
<button type="button" class="btn btn-link btn-md" style="text-decoration: none;"><a href="builderlist.php">Builders</button>
<button type="button" class="btn btn-link btn-md" style="text-decoration: none;"><ul class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#" >About US<span class="caret"></span></a>
    <ul class="dropdown-menu">
      <li><a href="services.php">Our Servies</a></li>
      <li><a href="recruitment.php">Recruitment</a></li>
      <li><a href="rti.php">RTI</a></li>  
      <li><a href="reachus.php">Reach Us</a></li>
    </ul>
</button>
<button type="button" class="btn btn-link btn-md" ><a href="logn.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></button>
</div>
</header>

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
        <img src="/img/c1.png" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="/img/c2.jpg" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="/img/c3.jpg" alt="New york" style="width:100%;">
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



<div class="jumbotron " style="text-align:justify;background-color:white;opacity: 0.93;padding:50px;">
<div class="row">
<div class="col-sm-6">
<h2 style="color:#f96702;">Our philosophy</h2>
<p>DxRERA's philosophy is to have holistic approach towards promoting the interests of the consumers as well as builders and boost investments into real estate in an environment of trust and confidence. </p>

<div class="row">
<div class="col-sm-6">
<p><h4><span class="glyphicon glyphicon-asterisk" style="color:#4df902;"></span>Trust</h4> DxRERA helps developers in building credibility and go a long way in establishing a relationship of trust with the customers. </p><br><br>
<p><h4><span class="glyphicon glyphicon-asterisk" style="color:#4df902;"></span>Control</h4>DxRERA provisions would ensure stricter control on management of funds and timely delivery of projects by the developers / promoters. </p>
</div>
<div class="col-sm-6">
<p><h4><span class="glyphicon glyphicon-asterisk" style="color:#4df902;"></span>Transparency</h4>DxRERA creates a more equitable & fair transaction between the consumer and developer / promoter thus ensuring a positive environment in the real estate sector. </p><br>
<p><h4><span class="glyphicon glyphicon-asterisk" style="color:#4df902;"></span>Credibility</h4>DxRERA will facilitate the consumer while boosting the credibility of developers.</p>
</div>
</div>
</div>
<div class="col-sm-6">
<h2 style="color:#f96702;">MAGNIFYING towards</h2>
<p >
<a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a>Ensuring accountability towards allottees and protect their interest.<br>
<a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a>Establishing symmetry of information between the promoter and allottee.<br>
<a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a>Imposing certain responsibilities on both promoter and allottees.<br>
<a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a>Establishing regulatory oversight mechanism to enforce contracts.<br>
<a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a>Establishing fast-track dispute resolution mechanism.<br>
<a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a>Promoting good governance, which in turn would create investor confidence.<br>
</p>
</div>
</div>
<div class="row">
<div class="col-sm-6">
<h2  style="color:#f96702;">Reach us</h2>
<div style="text-align:center;">
<p><h4>DELHI <br>REAL ESTATE REGULATORY AUTHORITY</h4>
  <p style="font-size: 16px;color:grey;">1st Floor, PN Bus Station,<br> RTC House, xxx - 520013<br> Help Desk 8367770574 (10 AM - 6 PM) <br>
  General Queries  9985533388 (Director Planning)</p> Write to  <a href=""> helpdesk-rera.x.in</a></p> <br>
</div>
</div>
<div class="col-sm-6">
<h2 style="color:#f96702;">Feedback/Suggestion</h2>
<form action="/action_page.php">
    <div class="row">
  <div class="col-sm-6">
  <div class="form-group">
      <input type="text" class="form-control" placeholder="Name*" name="name">
    </div></div>
    <div class="col-sm-6">
  <div class="form-group">
      <input type="text" class="form-control" placeholder="Mobile*" name="mobile">
    </div></div>
  </div>
    <div class="row">
  <div class="col-sm-3">
  <div class="form-group">
      <input type="text" class="form-control" placeholder="Gender*" name="gender">
    </div></div>
    <div class="col-sm-6 col-sm-offset-3">
  <div class="form-group">
      <input type="email" class="form-control" placeholder="Email*" name="email">
    </div></div>
  </div>
  <div class="form-group">
  <textarea class="form-control" rows="5"  placeholder="Feedback* (Maximum of 1000 characters)"></textarea>
</div> 
<p align="center">
  <button type="submit" class="btn btn-primary">Submit</button>
</p>
  </form>
</div>
</div>
</div>


</body>
<footer>
<div class="row" style="background-color:#000000;padding:5px;font-color:white;text-align:center;">
<button type="button" class="btn btn-link btn-md" style="text-decoration: none;"><a href="privacy.php">Privacy</a></button>
<button type="button" class="btn btn-link btn-md" style="text-decoration: none;"><a href="hyperlinking.php">Hyperlinking</a></button>
<button type="button" class="btn btn-link btn-md" style="text-decoration: none;"><a href="copyright.php">Copyright</a></button>
<button type="button" class="btn btn-link btn-md" style="text-decoration: none;"><a href="disclaimer.php">Disclaimer</a></button>
<button type="button" class="btn btn-link btn-md" style="text-decoration: none;"><a href="accessability.php">Accessability</a></button>
<button type="button" class="btn btn-link btn-md" style="text-decoration: none;"><a href="termsandconditions.php">Terms and conditions</a></button>
<button type="button" class="btn btn-link btn-md" style="text-decoration: none;"><a href="sitemap.php">Site map</a></button>
<button type="button" class="btn btn-link btn-md" style="text-decoration: none;"><a href="rateourweb.php">Rate out website</a></button>
</div>

</footer>
    
</html>


