
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
<h2 style="color:#7E94FF"> User Manual </h2>
<table style="text-align: center;" width="100%">
  <tr>
    <th> </th>
    <th style="text-align: center;"> SUBJECT </th>
    <th style="text-align: center;"> DOWNLOADS </th>
  </tr>
  <tr>
    <td rowspan='2'>PROJECT</td>
    <td style="text-align: left;padding-left: 10px;">User Manual for Project Individual Registration</td>
    <td><a href="#" class="btn btn-info btn-lg"> <span class="glyphicon glyphicon-download-alt"></span></td>
  </tr>
  <tr>
   
    <td style="text-align: left;padding-left: 10px;"> User Manual for Project Other-than Individual Registration </td>
    <td> <a href="#" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-download-alt"></span> </td>
  </tr>
  <tr>
    <td rowspan='2'> AGENT </td>
    <td style="text-align: left;padding-left: 10px;">User Manual for Agent Individual Registration </td>
    <td> <a href="#" class="btn btn-info btn-lg"> <span class="glyphicon glyphicon-download-alt"></span> </td>
  </tr>
  <tr>
    
    <td style="text-align: left;padding-left: 10px;"> User Manual for Agent Other-than Individual Registration </td>
    <td><a href="#" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-download-alt"></span></td>
  </tr>
  <tr>
    <td>COMPLAINT REGISTRATION</td>
    <td style="text-align: left;padding-left: 10px;">User Manual for Complaint Registration</td>
    <td><a href="#" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-download-alt"></span></a> </td>
  </tr>
 
</table>
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


