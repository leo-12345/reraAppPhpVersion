
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



  <div class="jumbotron" style="text-align:justify;opacity: 0.96;padding-left: 80px;padding-right: 80px;">
    <form action="projectreg2Validate" method="post" enctype="multipart/form-data">
  	<h2>Add project</h2>
  <div class="progress">
  <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar"
  aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:23%">
  </div>
  <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" style="width:23%">
    </div>
    
</div>
  
    <label><h3 style="color:#7E94FF">Documents to be enclosed:</h3></label><br>
 
  <div class="form-group col-sm-8">
  <p>Land Title search Report from an Advocate having experience of at least ten years
in land related matters:</p>
</div>
<div class="form-group col-sm-4">
  <input type="file" class="form-control" id="text" placeholder="Report" name="ltrfile" value="upload Report">
    <small id="emailHelp" class="form-text text-muted">Upload Report.</small><br><br>
 </div>
 <div class="form-group col-sm-8">
  <p>Details of the Encumbrances on such land including any rights, title, interest or
name of any party in or over such land (Latest by 30 days):</p>
</div>
  <div class="form-group col-sm-4">
  <input type="file" class="form-control" id="text" placeholder="Encumbrances" name="encumfile" value="upload Encumbrances">
    <small id="emailHelp" class="form-text text-muted">Upload Encumbrances.</small><br><br><br><br>
  </div>
  <div class="form-group col-sm-8">
  <p>Copy of the plan and proceedings issued by the competent Authority for approval of
plans:</p>
</div>
<div class="form-group col-sm-4">
  <input type="file" class="form-control" id="text" placeholder="plan" name="planaprovefile" value="upload plan">
    <small id="emailHelp" class="form-text text-muted">Upload Plan.</small><br><br>
  </div>
  <div class="form-group col-sm-8">
  <p>Details of the area mortgaged to the competent Authority for approval of plans:</p>
</div>
<div class="form-group col-sm-4">
  <input type="file" class="form-control" id="text" placeholder="area" name="areaaprovefile" value="upload area">
    <small id="emailHelp" class="form-text text-muted">Upload Area.</small><br><br>
  </div>
  <div class="form-group col-sm-8">
  <p>Details of the Cases Pending before the Authorities or in Courts of Law and their
current status along with the copies of the orders issued/ Self declaration in case of
no pending cases:</p>
</div>
<div class="form-group col-sm-4">
  <input type="file" class="form-control" id="text" placeholder="cases" name="casefile" value="upload cases">
    <small id="emailHelp" class="form-text text-muted">Upload Cases.</small><br><br>
  </div>
  <div class="form-group col-sm-8">
  <p>If the project is proposed to be developed in phases, the details of the phases,
Visible Copies of the plans and proceedings for Phase wise approvals (phase wise)
to be enclosed to be specified:</p>
</div>
<div class="form-group col-sm-4">
  <input type="file" class="form-control" id="text" placeholder="Phases" name="phaseaprovefile" value="upload Phases">
    <small id="emailHelp" class="form-text text-muted">Upload Phases.</small><br><br>
  </div>
  <div class="form-group col-sm-8">
  <p>Specifications of the facilities proposed in the project as sanctioned by the
competent Authority:</p>
</div>
<div class="form-group col-sm-4">
  <input type="file" class="form-control" id="text" placeholder="facilities" name="fcltyaprovefile" value="upload facilities">
    <small id="emailHelp" class="form-text text-muted">Upload facilities.</small><br><br>
  </div>
  <div class="form-group col-sm-8">
  <p>Detailed list and plan showing the development works to be executed in proposed
project and facilities to be provided such as firefighting, drinking water, emergency evacuation services, use of renewable energy etc:</p>
</div>
<div class="form-group col-sm-4">
  <input type="file" class="form-control" id="text" placeholder="development" name="dvlpmtfile" value="upload development">
    <small id="emailHelp" class="form-text text-muted">Upload Development Works.</small><br><br>
  </div>
  <div class="form-group col-sm-8">
  <p>Full address of the proposed development project along with the land mark nearby
and a location plan/ Topo Plan drawn to a scale:</p>
</div>
<div class="form-group col-sm-4">
  <input type="file" class="form-control" id="text" placeholder="Address" name="adrsfile" value="upload Address">
    <small id="emailHelp" class="form-text text-muted">Upload Address.</small><br><br>
  </div>
  <div class="form-group col-sm-8">
  <p>Location details of the project along with clear details of the land dedicated for the
development project along with its boundaries including the Latitude and Longitude
at end points of the project site:</p>
</div>
<div class="form-group col-sm-4">
  <input type="file" class="form-control" id="text" placeholder="Location" name="locfile" value="upload Location Details">
    <small id="emailHelp" class="form-text text-muted">Upload Location Details.</small><br><br><br><br>
  </div>
 <p style="text-align: center;">
      <input type="submit" value="Submit">
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


