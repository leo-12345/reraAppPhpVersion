
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
<h2 style="color:#7E94FF">For PROMOTERS</h2>
<img src="{{URL::asset('/img/servicesimg1.jpg')}}" style="height:350px;width:350px;padding:15px;float:right;">
	<p>
	<ul><li>All the Real Estate Projects for development of plots, buildings and apartments for the purpose of selling, must be registered with DxRERA </li>
		<li>Without DxRERA registration of the Project, the promoter should not advertise or sell any plot, apartment/building.</li>
	</ul>
	<h3 style="color:#30B1C8;">Promoter will be provided the following services:</h3>
	<ol><li>Registration of the Real Estate Project.</li>
		<li>Extension of registration upon valid reasons as per the provisions of Act.</li>
		<li>Designated web page for each project, where the promoter can display the project information for the allottees reference.</l>
		<li>Provision for updating Quarterly updates on the projects.</li>
		<li>Complaint filing is case of any grievance with the allottee or agent.</li>
		<li>Claim interest on the amount to be paid by the allotee in case of delay on the allottees part (deviation from payment schedule by the allottee)</li>
	</ol></p><br>
<h2 style="color:#7E94FF">For AGENTS</h2>
	<img src="{{URL::asset('/img/servicesimg2.jpg')}}" style="height:350px;width:350px;padding:15px;float:right">
	<p>
	<ul><li>No real estate agent shall facilitate the sale or purchase of or act on behalf of any person to facilitate the sale or
		purchase of any plot, apartment or building without obtaining registration from APRERA.</li>
		<li>Every Real Estate Agent who is registered with the Authority shall quote the registration number granted by DxRERA in every sale facilitated by him under The Real Estate (Regulation &development) Act, 2016</li>
	</ul>
	<h3 style="color:#30B1C8;">Real Estate Agents will be provided the following services:</h3>
		<ol><li>Registration of the Real Estate Agents upon application.</li>
			<li>Renewal of registration.</li>
			<li>Complaint filing Allottees will be provided the following servicesis case of any grievance with the allottee or promoter.</li>
		</ol></p><br>
<h2 style="color:#7E94FF">For ALLOTTEES</h2>
	<p><img src="{{URL::asset('/img/servicesimg3.jpg')}}" style="height:350px;width:350px;padding:15px;float:right;">
	<h3 style="color:#30B1C8;">Allottees will be provided the following services:</h3>
		<ol><li>Access to information regarding sanctioned plan, specifications approved by the competent authority.</li>
			<li>Access to stage-wise time schedule of completion of the project (including amenities) as agreed in Agreement for Sale.</li>
			<li>Claim the refund (along with interest) of the amount paid to builder/promoter in case 
			<ul><li>Promoter fails to give possession on time or fails to comply with Agreement for Sale.</li>
				<li> Promoter discontinues his business on account of suspension or revocation of his registration as per this act. </li>
			</ul>
			</li>
			<li>Any aggrieved person (or group of allottees) may file a complaint with the "Authority" or the adjudicating officer for any violation or contravention of the provisions of this Act.</li>
			<li>Any person aggrieved by any decision or order of the Authority or by an adjudicating officer under this Act may appeal before the "Appellate Tribunal" having jurisdiction over the matter.</li>
			<li>Get compensation if allottee (within five years of getting physical possession) brings to the notice of promoters any structural defect or any other defect in workmanship, quality or provision of services or any other obligations of the promoter as per the agreement for sale relating to such development, and promoter fails to rectify such defects within 30 days</li>
		</ol></p><br>
<p><img src="{{URL::asset('/img/servicesimg4.jpg')}}" style="height:300px;width:400px;padding:15px;float:right;">
	<h2 style="color:#7E94FF">For CITIZENS</h2>
	<h3 style="color:#30B1C8;">Citizens will be provided the following services:</h3>
		<ol><li>Access to information regarding all the Real estate projects and agents in the State.</li>
			<li>Complaint filing on any promoter or agent in case of any default.</li>
		</ol>
	</p>
	<br><br><br><br>
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

