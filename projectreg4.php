
<!DOCTYPE html>
<html >
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

<body style="background-image:url('/image/clg.jpg');background-size: 100%;">
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
    <form action="projectreg1Validate" method="post" enctype="multipart/form-data">
<h2>Add project</h2>
  <div class="progress">
  <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar"
  aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:23%">
  </div>
  <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" style="width:23%">
    </div>
    <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" style="width:23%">
    </div>
    <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" style="width:23%">
    </div>
</div>
<label><h3 style="color:#7E94FF">Documents to be enclosed:</h3></label><br>
<div class="form-group col-sm-8">
  <p>Detailed Estimate of the Expenditure for construction of the building:</p>
</div>
<div class="form-group col-sm-4">
  <input type="file" class="form-control" id="text" placeholder="Estimate" name="expfile" value="upload Estimate">
    <small id="emailHelp" class="form-text text-muted">Upload Estimate.</small><br><br>
  </div>
  <div class="form-group col-sm-8">
  <p>Details of source of finances to meet the expenditure for construction of building:</p>
</div>
<div class="form-group col-sm-4">
  <input type="file" class="form-control" id="text" placeholder="Finance" name="sourcefile" value="upload Finance">
    <small id="emailHelp" class="form-text text-muted">Upload Source of Finance.</small><br><br>
  </div>
  <div class="form-group col-sm-8">
  <p>Details of Financial Agreement made with banks or other financial institution
recognized by the Reserve Bank of India and legal safeguards taken, if any, for
the construction of building, or transfer of building by sale, gift or mortgage:</p>
</div>
<div class="form-group col-sm-4">
  <input type="file" class="form-control" id="text" placeholder="Finance Agreement" name="fagreefile" value="upload Finance Agreement">
    <small id="emailHelp" class="form-text text-muted">Upload Financial Agreement.</small><br><br><br>
  </div>
  <div class="form-group col-sm-8">
  <p>The period within which the physical possession of the apartment is to be handed
over to allottees:</p>
</div>
<div class="form-group col-sm-4">
  <input type="file" class="form-control" id="text" placeholder="Period" name="allotfile" value="upload Period">
    <small id="emailHelp" class="form-text text-muted">Upload Period.</small><br><br>
  </div>
  <div class="form-group col-sm-8">
  <p>The certificates issued by the Project Architect(Form 1) , Project Engineer
(Form 2), Chartered accountant (Form 3)for ongoing projects and Form 4
to be issued on completion of each of the building:</p>
</div>
<div class="form-group col-sm-4">
  <input type="file" class="form-control" id="text" placeholder="Certificates" name="formsfile" value="upload Certificates">
    <small id="emailHelp" class="form-text text-muted">Upload Certificates.</small><br><br><br>
  </div>
  <div class="form-group col-sm-8">
  <p>Proforma of the Allotment Letter, Agreement for Sale and the Conveyance
Deed proposed to be signed with the Allottee:</p>
</div>
<div class="form-group col-sm-4">
  <input type="file" class="form-control" id="text" placeholder="Proforma" name="proforfile" value="upload Proforma">
    <small id="emailHelp" class="form-text text-muted">Upload Proforma.</small><br><br>
  </div>
  <div class="form-group col-sm-8">
  <p>Details of the nature of the fixtures, fittings(Brands & Specifications), amenities and
common areas of the apartment, plot or building, as the case may be, as approved
by the Competent Authority</p>
</div>
<div class="form-group col-sm-4">
  <input type="file" class="form-control" id="text" placeholder="nature" name="ffafile" value="nature">
    <small id="emailHelp" class="form-text text-muted">Upload nature.</small><br><br><br>
  </div>
  <div class="form-group col-sm-8">
  <p>Structural Stability Certificate duly issued by Certified Structural
Consultant/Engineer along with the details of parameters followed for verification of
structural stability:</p>
</div>
<div class="form-group col-sm-4">
  <input type="file" class="form-control" id="text" placeholder="Structural Stability" name="stabfile" value="Structural Stability">
    <small id="emailHelp" class="form-text text-muted">Upload Structural Stability Certificate.</small><br><br><br>
  </div>
  <div class="form-group col-sm-8">
  <p>Copy of Insurance of Title of the Land:</p>
</div>
<div class="form-group col-sm-4">
  <input type="file" class="form-control" id="text" placeholder="Insurance" name="linsurfile" value="Insurance">
    <small id="emailHelp" class="form-text text-muted">Upload Insurance.</small><br><br>
  </div>
  <div class="form-group col-sm-8">
  <p>Copy of Insurance of Building or Contractor All Risks(CAR) Policy</p>
</div>
<div class="form-group col-sm-4">
  <input type="file" class="form-control" id="text" placeholder="CAR" name="carfile" value="CAR">
    <small id="emailHelp" class="form-text text-muted">Upload CAR.</small><br><br>
  </div>
  <div class="form-group col-sm-8">
  <p>FORM - B, Declaration, supported by an affidavit, which shall be signed by the
promoter or any person authorized by the promoter:</p>
</div>
<div class="form-group col-sm-4">
  <input type="file" class="form-control" id="text" placeholder="Affidavit" name="affidavitfile" value="Affidavit">
    <small id="emailHelp" class="form-text text-muted">Upload Declaration Affidavit.</small><br><br><br>
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

