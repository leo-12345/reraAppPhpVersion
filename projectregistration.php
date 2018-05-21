
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


	<div class="jumbotron" style="text-align:justify;opacity: 0.96;padding-right: 80px;padding-left: 80px;">
		<h2 style="color:#7E94FF">Project Registration</h2>
	<h3 style="color:#30B1C8">General Instructions:</h3>
		<ul><li>This is not a mobile App (however can be viewed on mobile screen) so kindly use laptop/desktop for use of this site.</li>
			<li>Clear the cookies before filling the online form.</li>
			<li>Remove pop-up block from your browser.</li>
			<li>Photograph - Passport size (35mm x 45mm, 300 DPI, Straight view/Light background) and in JPEG format.</li>
			<li>All the documents that are to be uploaded in the application should be in PDF format and should not be password protected,
Drawings in DWG format and self-attested (every page of every document).</li>
			<li>Site best viewed in "Google Chrome (Version 62.0.3202.94)"</li>
			<li>Fields marked with*are mandatory.</li>
		</ul>
	<h3 style="color:#30B1C8">Guide to fill online registration form:</h3>
	<ul><li>Many details are required for the registration of project which involves information regarding promoter, co-promoters, plan approvals,
Time schedule, Location details of project, Bank account of the project, Associate details etc.</li>
			<li>For step by step understanding of filing online application, kindly refer Guidelines for Registration page.</li>
			<li>Select "New" as application type, if you are a new applicant.</li>
			<li>Select "Existing" as application type, if application was incomplete / Shortfall / Withdraw / Change Request.</li>
			<li>The entire form is divided to various parts with "Save and Continue" facilities for each part.</li>
			<li>List of Address Proof: Aadhaar/Ration Card/Bank Book/Driving License/Voter Id/Gas/Phone Bill/Passport (Any one)</li>
		</ul>
	<br>
	<form>
	<p style="text-align:center"><b>Application Type</b>
		  <input type="radio" name="type" value="New"> New
		  <input type="radio" name="type" value="Existing"> Existing<br>
		</form>
		<div class="container" align="center">
  <button type="button" class="btn btn-success btn-md"><a href="{{url('/projectreg1')}}">Proceed</a></button>    
</div>
	</p>
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



