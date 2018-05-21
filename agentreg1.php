
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
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

    <title>{{ config('app.name', 'Laravel') }}</title>

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

<div class="jumbotron" style="text-align:justify;opacity: 0.96;padding-left: 80px;padding-right: 80px;">
  
  <form action="{{url('/agentreg1Validate')}}" method="post" enctype="multipart/form-data">
    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
  <h2>Add builder</h2>
  <div class="progress">
  <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar"
  aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
  </div>
</div>
  
  <label><h3 style="color:#7E94FF">personal details:</h3></label>
  <div class="form-group col-sm-12">
      <input type="text" class="form-control" id="text" placeholder="Organisation type" name="orgtype">
    </div>
    <div class="form-group col-sm-6">
      <input type="text" class="form-control" id="text" placeholder="Registration no/CIN no" name="regno">
    </div>
    <div class="form-group col-sm-6">
      <input type="text" class="form-control" id="text" placeholder="Organisation name" name="orgname">
    </div>
    <div class="form-group col-sm-6">
      <input type="text" class="form-control" id="text" placeholder="Email id" name="mailid">
    </div>
    <div class="form-group col-sm-6">
      <input type="file" class="form-control" id="text" placeholder="ROC" name="rocfile" value="upload ROC">
    <small id="emailHelp" class="form-text text-muted">Upload ROC here.</small>
    </div>
  <div class="form-group col-sm-6">
      <input type="text" class="form-control" id="text" placeholder="PAN number" name="pan">
    </div>
  <div class="form-group col-sm-6">
      <input type="file" class="form-control" id="text" placeholder="PAN number" name="panfile" value="upload pan number">
    <small id="emailHelp" class="form-text text-muted">Upload pan card here.</small>
    </div>
    <div class="form-group col-sm-6">
      <input type="text" class="form-control" id="text" placeholder="GST no" name="gst">
    </div>
    <div class="form-group col-sm-6">
      <input type="file" class="form-control" id="text" placeholder="GST certificate" name="gstnofile" value="upload GST certificate">
    <small id="emailHelp" class="form-text text-muted">Upload GST certificate.</small>
    </div>
    
  
  <br><br>

  <label><h3 style="color:#7E94FF">Company Address For communication:</h3></label>
  <br>
    <div class="form-group col-sm-6">
      <input type="text" class="form-control" id="text" placeholder="Address Line1" name="add1">
    </div>
    <div class="form-group col-sm-6">
      <input type="text" class="form-control" id="text" placeholder="Address Line2" name="add2">
    </div>
    <div class="form-group col-sm-6">
      <input type="text" class="form-control" id="text" placeholder="Mandal" name="mandal">
    </div>
    <div class="form-group col-sm-6">
      <input type="text" class="form-control" id="text" placeholder="Local Area/village" name="area">
    </div>
  <div class="form-group col-sm-6">
    <input type="text" class="form-control" id="text" placeholder="District" name="district">
    </div>
  <div class="form-group col-sm-6">
      <input type="text" class="form-control" id="text" placeholder="State" name="state">
    </div>
  <div class="form-group col-sm-6">
      <input type="text" class="form-control" id="text" placeholder="PIN CODE" name="pincode">
    </div>
  <div class="form-group col-sm-6">
      <input type="file" class="form-control" id="text" placeholder="Address Proof" name="addproof" value="upload address proof">
    <small id="emailHelp" class="form-text text-muted">Upload Address Proof here.</small>
    </div>
   
   <label><h3 style="color:#7E94FF">Authorized Signatory Details:</h3></label>
  <br>
    <div class="form-group col-sm-6">
      <input type="text" class="form-control" id="text" placeholder="Name" name="authname">
    </div>
    <div class="form-group col-sm-6">
      <input type="file" class="form-control" id="text" placeholder="Address Proof" name="authaddproof" value="upload address proof">
    <small id="emailHelp" class="form-text text-muted">Upload Photo    here.</small>
    </div>
    <div class="form-group col-sm-6">
      <input type="text" class="form-control" id="text" placeholder="Address Line1" name="authadd1">
    </div>
    <div class="form-group col-sm-6">
      <input type="text" class="form-control" id="text" placeholder="Address Line2" name="authadd2">
    </div>
    <div class="form-group col-sm-6">
      <input type="text" class="form-control" id="text" placeholder="Mandal" name="authmandal">
    </div>
    <div class="form-group col-sm-6">
      <input type="text" class="form-control" id="text" placeholder="Local Area/village" name="autharea">
    </div>
  <div class="form-group col-sm-6">
    <input type="text" class="form-control" id="text" placeholder="District" name="authdistrict">
    </div>
  <div class="form-group col-sm-6">
      <input type="text" class="form-control" id="text" placeholder="State" name="authstate">
    </div>
  <div class="form-group col-sm-6">
      <input type="text" class="form-control" id="text" placeholder="PIN CODE" name="authpincode">
    </div>
    <div class="form-group col-sm-6">
      <input type="file" class="form-control" id="text" placeholder="Address Proof" name="authadd" value="upload address proof">
    <small id="emailHelp" class="form-text text-muted">Upload Address Proof here.</small>
    </div>
    <div class="form-group col-sm-6">
      <input type="text" class="form-control" id="text" placeholder="Email ID" name="authmail">
    </div>
  <div class="form-group col-sm-6">
      <input type="text" class="form-control" id="text" placeholder="Mobile no." name="authmob">
    </div>
  <div class="form-group col-sm-6">
      <input type="file" class="form-control" id="text" placeholder="Address Proof" name="resolution" value="upload address proof">
    <small id="emailHelp" class="form-text text-muted">Board Resolution for Authorized Signatory </small>
    </div>
    <div class="form-group col-sm-6">
      <br><br><br>
    </div>
    <p style="text-align: center;">
    <b>Have Past Years:</b>
      <input type="radio" name="type" value="Yes"> Yes
      <input type="radio" name="type" value="No"> No<br><br>
      <input type="submit" placeholder="Proceed" />
</p>
  </form>
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



