
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

  <div class="jumbotron" style="text-align:justify;opacity: 0.96;padding-right: 80px;padding-left: 80px;">
<h2 style="color:#7E94FF"> Form Downloads </h2>
<table style="text-align: center;">
  <tr>
    <th> </th>
	<th style="text-align: center;"> FORM CODE </th>
    <th style="text-align: center;"> SUBJECT </th>
    <th style="text-align: center;"> DOWNLOADS </th>
	
  </tr>
  <tr>
    <td rowspan='10'>PROJECT</td>
	<td> P1 </td>
    <td style="text-align: left;padding-left: 10px;">Web Application Format for Project Individual Registration </td>
    <td><a href="{{url('/docs/p1.pdf')}}" class="btn btn-info btn-lg"> <span class="glyphicon glyphicon-download-alt"></span></td>
	
  </tr>
  <tr>
    
    <td> P2 </td>
	<td style="text-align: left;padding-left: 10px;">Web Application for Project Other-than Individual Registration </td>
    <td> <a href="{{url('/docs/p2.pdf')}}" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-download-alt"></span> </td>
  </tr>
  <tr>
    
	<td> P3</td>
    <td style="text-align: left;padding-left: 10px;"> Withdrawal Form - Web Application format for Withdrawal of Application Form </td>
    <td> <a href="{{url('/docs/p3.pdf')}}" class="btn btn-info btn-lg"> <span class="glyphicon glyphicon-download-alt"></span> </td>
  </tr>
  <tr>
    
	<td>P4</td>
    <td style="text-align: left;padding-left: 10px;"> CR Form - Web Application format for Change Requests </td>
    <td><a href="{{url('/docs/p4.pdf')}}" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-download-alt"></span></td>
  </tr>
  <tr>
   
	<td>P5</td>
    <td style="text-align: left;padding-left: 10px;">Area Details of Appartments</td>
    <td><a href="{{url('/docs/p5.xlsx')}}" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-download-alt"></span> </td>
  </tr>
  
   
	<td>P6</td>
    <td style="text-align: left;padding-left: 10px;">Area Details of Villas</td>
    <td><a href="{{url('/docs/p6.xlsx')}}" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-download-alt"></span> </td>
  </tr>
  
 
	<td>P7</td>
    <td style="text-align: left;padding-left: 10px;">Area Details of Plots</td>
    <td><a href="{{url('/docs/p7.xlsx')}}" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-download-alt"></span> </td>
  </tr>
 <tr>
    
	<td>P8</td>
    <td style="text-align: left;padding-left: 10px;">Area Details of Commercial</td>
    <td><a href="{{url('/docs/p8.xlsx')}}" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-download-alt"></span> </td>
  </tr>
  <tr>
  
	<td>P9</td>
    <td style="text-align: left;padding-left: 10px;">Statement of Source of funds for construction of buildings</td>
    <td><a href="{{url('/docs/p9o.xlsx')}}" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-download-alt"></span> </td>
  </tr>
  <tr>
    
	<td>P10</td>
    <td style="text-align: left;padding-left: 10px;">No Litigations Affidavit Cum Declaration</td>
    <td><a href="{{url('/docs/p10.pdf')}}" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-download-alt"></span> </td>
  </tr>
  <tr>
     <td rowspan="3">AGENT</td>
	<td>A1</td>
    <td style="text-align: left;padding-left: 10px;">Web Application for Agent Individual</td>
    <td><a href="{{url('/docs/a1.pdf')}}" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-download-alt"></span> </td>
  </tr>
  <tr>
   
	<td>A2</td>
    <td style="text-align: left;padding-left: 10px;">Web Application for Agent Other-than Individual Registration</td>
    <td><a href="{{url('/docs/a2.pdf')}}" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-download-alt"></span> </td>
  </tr>
  <tr>
   
	<td>A3</td>
    <td style="text-align: left;padding-left: 10px;">Sample Affidavit - if ITR not Applicable</td>
    <td><a href="{{url('/docs/a3.pdf')}}" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-download-alt"></span> </td>
  </tr>
  <tr>
    <td>COMPLAINT</td>
	<td>C1</td>
    <td style="text-align: left;padding-left: 10px;">Web Application for Complaint Registration</td>
    <td><a href="{{url('/docs/c1.pdf')}}" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-download-alt"></span> </td>
  </tr>
   <tr>
    <td>ARCHITECT CERTIFICATE</td>
	<td>F1</td>
    <td style="text-align: left;padding-left: 10px;">To be submitted at the time of Registration of Ongoing Project and for withdrawal of Money from Designated Account</td>
    <td><a href="{{url('/docs/f1.pdf')}}" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-download-alt"></span> </td>
  </tr>
   <tr>
    <td>ENGINEER CERTIFICATE</td>
	<td>F2</td>
    <td style="text-align: left;padding-left: 10px;">To be submitted at the time of Registration of Ongoing Project and for withdrawal of Money from Designated Account</td>
    <td><a href="{{url('/docs/f2.pdf')}}" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-download-alt"></span> </td>
  </tr>
  <tr>
    <td>CA CERTIFICATE</td>
	<td>F3</td>
    <td style="text-align: left;padding-left: 10px;">To be submitted at the time of Registration of Ongoing Project and for withdrawal of Money from Designated Account</td>
    <td><a href="{{url('/docs/f3.pdf')}}" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-download-alt"></span> </td>
  </tr>
   <tr>
    <td>ARCHITECT'S CERTIFICATE</td>
	<td>F4</td>
    <td style="text-align: left;padding-left: 10px;">To be submitted on completion of each of the Building/Wing</td>
    <td><a href="{{url('/docs/f4.pdf')}}" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-download-alt"></span> </td>
  </tr>
  
</table>
<br><br>
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


