<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>SmartAttendanceSystem</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<style type="text/css">
		.btnmid{
			background-color: #9c7329;
			padding: 15px 20px;
			font-size: 20px;
			color: #fff;
			width: 180px;
    		height: 100px;
		}
		@media(max-width: 768px){
			.btnmid{
			background-color: #9c7329;
			color: #000;
			font-size: unset;
			width: unset;
		}
		}
	</style>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php" style="color: gray">SmartAttendanceSystem</a>
  
</nav>
<div class="container-fluid">
	 <img src="mnerega2.jpg" width="100%" height="400" alt="Responsive image">	
</div>
 
<div class="container-fluid">
	<div class="row">
		<div class="col-md-3">
			<div class="card">
			  <div class="card-header bg-dark">
			    <span class="text-center text-light">What's New</span>
			  </div>
			  <div class="card-body">
			   <ul class="updates">
				        <li><a href="https://nrega.nic.in/netnrega/SupremeCourtMatter.aspx"> Supreme Court matter: Important communication on pending wage liability.</a></li>
				        
				        <li><a href="https://nrega.nic.in/Netnrega/WriteReaddata/Circulars/VRP_TraningManual.pdf"> Village Resource Persons Training Manual for Social Audit of MGNREGS.</a></li>

				        <li><a href="https://nrega.nic.in/Netnrega/Data/SoP_TimelypaymentMGNREGA.pdf">SOP for Streamlining Timely Payment MGNREGA</a></li>

				        <li><a href="https://nrega.nic.in/netnrega/Janmanrega.htm"> Janmanrega - Citizen-centric Mobile Application (Beta Version)</a></li>
				</ul>
				  	
				  <div class="card-header bg-dark">
						<span class="text-center text-light">Documents/ Plans</span>
					</div>
				      <ul class="updates">
				        <li><a href="https://nrega.nic.in/Circular_Archive/archive/nrega_doc_FAQs.pdf"> FAQs</a></li>

				        <li><a href="http://mnregaweb4.nic.in/Netnrega/dgs.rar">DGS&D Rate Contract for Finger Print Devices</a> </li>
				       </ul>
			  </div>
			</div>

		</div>
		<div class="col-md-6">
			<div class="d-flex align-content-around flex-wrap justify-content-around m-5">
				<div class="row">	
					<div class="col-6">
						<button class="btn btn-lg btnmid"><a href="http://mnregaweb4.nic.in/netnrega/all_lvl_details_dashboard_new.aspx?Fin_Year=2020-2021&Digest=ueg/HtV54GGJ8ZQ6GUB2ew"  style="color: black"> At a Glance</a></button>
					</div>
					<div class="col-6">
						<button class="btn btn-lg btnmid"><a href="http://mnregaweb4.nic.in/netnrega/MISreport4.aspx"  style="color: black"> MIS Reports</a></button>
					</div>
				</div>
			</div>		

			<div class="d-flex align-content-around flex-wrap justify-content-around m-5">
				<div class="row">	
					<div class="col-6">
						<button class="btn btn-lg btnmid"><a href="http://mnregaweb4.nic.in/netnrega/individual_asset_report.aspx?lflag=eng&fin_year=2017-2018&source=national&labels=labels&Digest=cT/J7ChEq5LOfEr0AmsuAQ"  style="color: black"> Individual Asset Creation</a></button>
					</div>
					<div class="col-6">
						<button class="btn btn-lg btnmid"><a href="http://mnregaweb4.nic.in/netnrega/nrm_works_report.aspx?lflag=eng&fin_year=2017-2018&source=national&labels=labels&Digest=cT/J7ChEq5LOfEr0AmsuAQ"  style="color: black"> MWS 2264 Block</a></button>
					</div>
				</div>
			</div>			
			<div class="d-flex align-content-around flex-wrap justify-content-around m-5">
				<div class="row">	
					<div class="col-6">
						<button class="btn btn-lg btnmid" ><a href="http://mnregaweb4.nic.in/netnrega/water_related_report.aspx?lflag=eng&fin_year=2017-2018&source=national&labels=labels&Digest=cT/J7ChEq5LOfEr0AmsuAQ"  style="color: black"> Water Related Works</a></button>
					</div>
					<div class="col-6">
						<button class="btn btn-lg btnmid"><a href="http://mnregaweb4.nic.in/netnrega/nrm_related_report.aspx?lflag=eng&fin_year=2017-2018&source=national&labels=labels&Digest=cT/J7ChEq5LOfEr0AmsuAQ"  style="color: black"> NRM Works</a></button>
					</div>
				</div>
			</div>
			<div class="d-flex align-content-around flex-wrap justify-content-around m-5">
				<div class="row">	
					<div class="col">
						<button class="btn btn-lg btnmid"><a href="attendance/" style="color: black">Attendance</a></button>
					</div>
				</div>
			</div>			
		</div>
		<div class="col-md-3">
				<div class="card">
			  <div class="card-header bg-dark">
			    <span class="text-center text-light">Transparency & Accountability</span>
			  </div>
			  <div class="card-body">
			    <ul class="updates">
				        <li><a href="https://nrega.nic.in/netnrega/Janmanrega.htm">Janmanrega - Citizen-centric Mobile Application (Beta Version)</a> </li>

				        <li><a href="http://mnregaweb4.nic.in/netnrega/Feedbacknrega.aspx">Feedback on Janmanrega App</a> </li>

				        <li><a href="https://nrega.nic.in/netnrega/statepage.aspx?Page=C&Digest=GmpYzpnzFJIVhl6rY0MeSw"> Job Cards</a> </li>

				        <li><a href="https://nrega.nic.in/netnrega/statepage.aspx?check=ml&Digest=VybWnGOdBWpr6yAbzIt/pg">Muster rolls</a></li> 				        
				        <li><a href="http://mnregaweb4.nic.in/netnrega/morelabour.aspx">Labour Budget</a> </li>
				        <li><a href="http://mnregaweb4.nic.in/Netnrega/UserMasterReport.aspx">State-wise Janmanrega user report</a> </li>
				      </ul>

				  	<div class="card-header bg-dark">
						    <span class="text-center text-light">GeoMGNREGA</span>
					</div>
				      <ul class="updates">

				        <li><a href="#">Demo Site Block</a></li>

				        <li><a href="#">Demo Site Panchayat</a></li>

				        <li><a href="#">FAQ (English / Hindi)</a></li>
				      </ul>
			  </div>
			</div>
		</div>
	</div>
</div>


	<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="js/popper.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	
	<!-- FOOTER -->
	<div style="margin-left: 410px">
      <footer style="background:; height:;">
        <p>&copy; 2020 Ministry of Rural Development, Inc. &middot;  developed by  <a href="https://www.facebook.com/profile.php?id=100042268988607">Pradeep Choudhary </a><a href="https://www.nrega.nic.in/">Privacy</a> &middot; <a href="https://www.nrega.nic.in/">Terms</a></p>
      </footer>
      </div>
</body>
</html>