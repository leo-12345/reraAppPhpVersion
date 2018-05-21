
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
    <form action="projectreg3Validate" method="post" enctype="multipart/form-data">
<h2>Add project</h2>
  <div class="progress">
  <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar"
  aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:23%">
  </div>
  <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" style="width:23%">
    </div>
    <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" style="width:23%">
    </div>
  </div>

  <label><h3 style="color:#7E94FF">Documents to be enclosed:</h3></label><br>
  <div class="form-group col-sm-6">
  <p>Number of floors to be constructed in the project:</p>
</div>
<div class="form-group col-sm-6">
  <input type="text" class="form-control" id="text" placeholder="Number of Floors" name="floornos"><br>
</div>
  <div class="form-group col-sm-6">
  <p>Number of apartments for sale in the project in each floor:</p>
</div>
<div class="form-group col-sm-6">
  <input type="text" class="form-control" id="text" placeholder="Number of Apartments" name="aprmtnos"><br>
</div>
  <div class="form-group col-sm-6">
  <p>Carpet area of each apartment for sale in the project:</p>
</div>
<div class="form-group col-sm-6">
  <input type="text" class="form-control" id="text" placeholder="Carpet Area" name="carpetarea"><br>
</div>
  <div class="form-group col-sm-6">
  <p>Area of the balcony or verandah or exclusive open terrace area if any of each
apartment:</p>
</div>
<div class="form-group col-sm-6">
  <input type="text" class="form-control" id="text" placeholder="balconyarea" name="barea"><br>
</div>
  <div class="form-group col-sm-8">
  <p>Plinth area of each apartment, each floor and total Plinth area of all the floors of the
project:</p>
</div>
<div class="form-group col-sm-4">
  <input type="file" class="form-control" id="text" placeholder="Plinth Area" name="plinthfile" value="upload Plinth Area">
    <small id="emailHelp" class="form-text text-muted">Upload Plinth Area.</small><br><br>
  </div>
  <div class="form-group col-sm-8">
  <p>Disclosure of number and areas of garages/parking areas for sale in the project:</p>
</div>
<div class="form-group col-sm-4">
  <input type="file" class="form-control" id="text" placeholder="Disclosure" name="parkingfile" value="upload Disclosure">
    <small id="emailHelp" class="form-text text-muted">Upload Disclosure of number and area of garages/parking areas.</small><br><br>
  </div>
  <div class="form-group col-sm-8">
  <p>Names and addresses of the Civil Contractors, or turnkey contractor, or EPC
Contractors, Structural Engineer of the project along with phone numbers, email
details along with copies of Licenses/Enrolment form:</p>
</div>
<div class="form-group col-sm-4">
  <input type="file" class="form-control" id="text" placeholder="List" name="ccfile" value="upload List">
    <small id="emailHelp" class="form-text text-muted">Upload List.</small><br><br>
  </div>
  <div class="form-group col-sm-8">
  <p>Names and addresses of Architect, Engineer, Chartered Accountant or name of
firm or company together with their office addresses along with phone numbers,
email details along with copies of Licenses/Enrolment form:</p>
</div>
<div class="form-group col-sm-4">
  <input type="file" class="form-control" id="text" placeholder="details" name="aecafile" value="upload details">
    <small id="emailHelp" class="form-text text-muted">Upload Details.</small><br><br>
  </div>
  <div class="form-group col-sm-8">
  <p>Disclose the names and addresses, phone numbers and email addresses of his
real estate agents if any, for the proposed project along with their registration
number under DxRERA:</p>
</div>
<div class="form-group col-sm-4">
  <input type="file" class="form-control" id="text" placeholder="details and address" name="agentdetailfile" value="upload details and address">
    <small id="emailHelp" class="form-text text-muted">Upload Details and Address.</small><br><br>
  </div>
<div class="form-group col-sm-8">
  <p>Detailed Technical Specifications of the construction of the buildings as approved
by the Competent Authority under any law for the time being in force:</p>
</div>
<div class="form-group col-sm-4">
  <input type="file" class="form-control" id="text" placeholder="Technical Specifications" name="specaprovefile" value="upload Technical Specifications">
    <small id="emailHelp" class="form-text text-muted">Upload Technical Specifications.</small><br><br><br>
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
