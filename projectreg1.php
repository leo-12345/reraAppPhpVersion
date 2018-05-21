
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
  <form action="projectreg1Validate" method="post" enctype="multipart/form-data">
  <h2>Add project</h2>
  <div class="progress">
  <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar"
  aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:23%">
  </div>
</div>
  
  <label><h3 style="color:#7E94FF">Required documents:</h3></label><br>
  <div class="form-group col-sm-12">
    <input type="text" class="form-control" id="text" placeholder="Name of the project" name="pnmae">
  </div>
  <div class="form-group col-sm-8">
  <p>Income tax returns of the promoter for three preceding Financial Years:</p>
  </div>
  <div class="form-group col-sm-4">
  <input type="file" class="form-control" id="text" placeholder="IT Returns" name="itfile" value="upload IT Returns">
    <small id="emailHelp" class="form-text text-muted">Upload IT Returns.</small><br><br>
  </div>
  <div class="form-group col-sm-8">
  <p>Detail of the projects launched by promoter, in the Past Five Years, whether already
completed or being developed, including the current status of the said projects,
any delay in its completion, details of cases pending, type of land and
payments:</p>
</div>
<div class="form-group col-sm-4">
  <input type="file" class="form-control" id="text" placeholder="Details" name="pdetailfile" value="upload Details">
    <small id="emailHelp" class="form-text text-muted">Upload Details.</small><br><br><br><br><br>
    </div>
    <div class="form-group col-sm-8">
  <p>Name, passport size photograph, registered address, authenticated copies of pan
card & Aadhar card, Telephone number and e-mail address for official
correspondence of all Land owners (Co-promoter), if any:</p>
</div>
<div class="form-group col-sm-4">
  <input type="file" class="form-control" id="text" placeholder="reqdetails" name="copdetailfile" value="upload Required Details">
    <small id="emailHelp" class="form-text text-muted">Upload Required Details.</small>
  </div>

  <div class="form-group col-sm-8">
  <p>Separate bank account including copy of pass book:</p>
</div>
<div class="form-group col-sm-4">
  <input type="file" class="form-control" id="text" placeholder="bank" name="bankaccfile" value="upload Bank Account">
    <small id="emailHelp" class="form-text text-muted">Upload Bank Account .</small><br><br>
</div>
<div class="form-group col-sm-8">
  <p> Detailed statement showing the names of the Co-promoters (land owners), survey
numbers and extent of the site proposed for construction of the project:</p>
</div>
<div class="form-group col-sm-4">
  <input type="file" class="form-control" id="text" placeholder="statement" name="stmtfile" value="upload Statement">
    <small id="emailHelp" class="form-text text-muted">Upload Statement.</small><br><br>
</div>
<div class="form-group col-sm-8">
  <p>
  Copies of the registered Ownership Documents/ attested copies of the pattadar pass
books issued by the Revenue department.(Attested by Notary /Gazetted officer):</p>
</div>
<div class="form-group col-sm-4">
  <input type="file" class="form-control" id="text" placeholder="copies" name="docfile" value="upload copies">
    <small id="emailHelp" class="form-text text-muted">Upload Copies.</small><br><br>
  </div>
  <div class="form-group col-sm-8">
  <p>Copies of the Field Sketches duly marking the proposed site with measurements
along with combined field sketch:
</p></div>
<div class="form-group col-sm-4">
  <input type="file" class="form-control" id="text" placeholder="fieldsketches" name="fieldfile" value="upload field sketch">
    <small id="emailHelp" class="form-text text-muted">Upload Field Sketches.</small><br><br>
  </div>
  <div class="form-group col-sm-8">
  <p> Detailed Site Plan showing the measurements as on ground including the diagonals:</p>
</div>
<div class="form-group col-sm-4">
  <input type="file" class="form-control" id="text" placeholder="siteplan" name="planfile" value="upload site plan">
    <small id="emailHelp" class="form-text text-muted">Upload Site Plan.</small><br><br>
  </div>
  <div class="form-group col-sm-8">
  <p> Copy of the registered Development Agreement between the Owner of the land and
the Promoter along with the link documents:</p>
</div>
<div class="form-group col-sm-4">
  <input type="file" class="form-control" id="text" placeholder="Agreement" name="agreefile" value="upload Agreement">
    <small id="emailHelp" class="form-text text-muted">Upload Agreement.</small><br><br>
  </div>
  <div class="form-group col-sm-8">
  <p> Authorization letter given by the Land owner (Co-promoter) to undertake the
construction of the building by the promotor (Copy of the Registered development
Agreement to be Annexed) ( If the possesion was already given to the promotor by
the land owner through development agreement to undertake the construction, no
separate authorization letter is required.):</p>
</div>
<div class="form-group col-sm-4">
  <input type="file" class="form-control" id="text" placeholder="auletter" name="copperfile" value="upload Authorization Letter">
    <small id="emailHelp" class="form-text text-muted">Upload Authorization Letter.</small><br><br><br><br><br><br><br>
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
