
<?php
 //       ["Full Name","Department","image"]
/*Team leaders 0-3*/
$team_leaders[0]=["Shubham Singh","Team Captain","Shubham Singh, Captain"];
$team_leaders[]=["Dhruv Manchanda","Team Vice-Captain","Dhruv Manchanda, Vice Captain"];
$team_leaders[]=["Tuhin Sharma","Team Manager","Tuhin Sharma, Manager"];
$team_leaders[]=["Palash Agrawal","Manufacturing Head","Palash Agrawal, Manufacturing Head"];

/*Vehicle Dynamics*/
$team_vehicle[0]=["Yash Jajoo","Vehicle Dynamics Head","Yash Jajoo, Vehicle Dynamics Head"];
$team_vehicle[]=["Lakshya Jhalani","Suspension Head","Lakshay Jhalani, Suspension Lead"];
$team_vehicle[]=["Pulkit Sharma","Steering Head","Pulkit Sharma, Steering Lead"];
$team_vehicle[]=["Ayush Sharma","Vehicle Dynamics","Ayush Sharma, Vehicle Dynamics"];
$team_vehicle[]=["Srijan Lawrence","Vehicle Dynamics","Srijan Lawrence, Vehicle Dynamics"];
$team_vehicle[]=["Karan Waghela","Vehicle Dynamics","Karan Waghela, Vehicle Dynamics"];
$team_vehicle[]=["Dhruvin Vora","Vehicle Dynamics","Dhruvin Vohra,Vehicle Dynamics"];
$team_vehicle[]=["Govind Karwa","Vehicle Dynamics","Govind Karwa, Vehicle Dynamics"];
$team_vehicle[]=["Devanshi Bansal","Vehicle Dynamics","Devanshi Bansal, Vehicle Dynamics"];

/*Transmission*/
$team_transmission[0]=["Felix J Mangaly","Transmission Head","Felix J. Mangaly, Transmission Head"];
$team_transmission[]=["S P Nikhil Kumar","CVT Tuning Head","Nikhil Kumar, CVT and Clutch Tuner"];
$team_transmission[]=["Yash Patil","Transmission","Yash Patil, Transmission"];
$team_transmission[]=["Tarashekhar Padhy","Transmission","Tarashekhar Padhy,Transmission"];
$team_transmission[]=["Dinesh","Transmission","Dinesh, Transmission"];
$team_transmission[]=["Bill Jason Duckworth","Transmission","Bill Jason Duckworth, Transmission"];
$team_transmission[]=["Sidakdeep Chadha","Transmission","Sidakdeep Chadha, Transmission"];
$team_transmission[]=["Tanmay Joshi","Transmission","Tanmay Joshi, Transmission"];

/*Brakes*/
$team_brakes[0]=["Naman Soni","Brakes Head","Naman Soni, Brakes Head"];
$team_brakes[]=["Yashaswi Arora","Brakes Head","Yashaswi Arora, Brakes Co-Head"];
$team_brakes[]=["Ankush Kumar","Brakes","Ankush Kumar, Brakes"];
$team_brakes[]=["Rohan Kumar","Brakes","Rohan Kumar, Brakes"];
$team_brakes[]=["Sidhanth Digvijay","Brakes","Sidhant Digvijay, Brakes"];
$team_brakes[]=["Devashish Verma","Brakes","Devashish Verma, Brakes"];

/*Designs 3-6*/
$team_design[0]=["Vigneshwar Venkatesan","Design Head","Vignesh Venkat, Design Head"];
$team_design[]=["Aayush Jain","Aerodynamics Head","Aayush Jain, Aerodynamics Head"];
$team_design[]=["Varun Rao","Design","Varun Rao, Design"];
$team_design[]=["Ganpati Goel","Design","Ganpati Goel, Design"];
$team_design[]=["Vigknesh Ranjan","Design","Vigknesh Rajan, Design"];
$team_design[]=["Atharva Daware","Design","Atharva Daware, Design"];

/*Marketing and Management-*/
$team_marketing[0]=["Arizul Islam","Digital Marketing Head","Arizul Islam, Digital Marketing Lead"];
$team_marketing[]=["Divyansh Chandaniha","Management","Divyansh, Management"];
$team_marketing[]=["Suhas HG","Media Head","Suhas HG, Media Head"];
$team_marketing[]=["Tejas Bajpai","Marketing","Tejas Bajpai,Management"];
$team_marketing[]=["Ayush Vaja","Marketing","Ayush Vaja, Managment"];
$team_marketing[]=["Aravind Chandrashekhar","Marketing","Aravind Chandrasekhar, Managment"];
$team_marketing[]=["Sriram Prakash","Marketing","------"];

?>
<div class="modal-content">
	<div class="modal-headerr" style="padding: 10px;">
		<br>
		<button type="button" class="close"  onclick="gotomeettheteam();" data-dismiss="modal" style="color:#fff !important;"><i class="ion-close-round"></i>&nbsp;&nbsp;</button>
		<h1 class="modal-title text-center">Team 2018</h1>
	</div>
	<div class="modal-body">
		<div class="container">
			<div class="row">
				<ul class="ch-grid">
					<?php
					$i=0;
					for($i=0;$i<count($team_leaders);$i++)
					{
						$name=$team_leaders[$i][0];
						$dept=$team_leaders[$i][1];
						$img=$team_leaders[$i][2];
						?>
						<div class="col-xs-6 col-sm-3 col-md-2 boxcol box-col">
							<div class="ch-item ch-img-1 box" style="background-image: url('../img/team18/<?php echo $img;?>.JPG');">
								<div class="ch-info">
									<h3><?php echo $name;?></h3>
								</div>
							</div>
							<h3 class="text-center"><?php echo $dept;?></h3>

						</div>
						<?php
					}
					?>
				</ul>
			</div>
			<hr class="thoda-light">
			<div class="row">
				<ul class="ch-grid">
					<?php
					$i=0;
					for($i=0;$i<count($team_vehicle);$i++)
					{
						$name=$team_vehicle[$i][0];
						$dept=$team_vehicle[$i][1];
						$img=$team_vehicle[$i][2];
						?>
						<div class="col-xs-6 col-sm-3 col-md-2 boxcol box-col">
							<div class="ch-item ch-img-1 box" style="background-image: url('../img/team18/<?php echo $img;?>.JPG');">
								<div class="ch-info">
									<h3><?php echo $name;?></h3>
								</div>
							</div>
							<h3 class="text-center"><?php echo $dept;?></h3>

						</div>
						<?php
					}
					?>
				</ul>
			</div>
			<hr class="thoda-light">
			<div class="row">
				<ul class="ch-grid">
					<?php
					$i=0;
					for($i=0;$i<count($team_transmission);$i++)
					{
						$name=$team_transmission[$i][0];
						$dept=$team_transmission[$i][1];
						$img=$team_transmission[$i][2];
						?>
						<div class="col-xs-6 col-sm-3 col-md-2 boxcol box-col">
							<div class="ch-item ch-img-1 box" style="background-image: url('../img/team18/<?php echo $img;?>.JPG');">
								<div class="ch-info">
									<h3><?php echo $name;?></h3>
								</div>
							</div>
							<h3 class="text-center"><?php echo $dept;?></h3>

						</div>
						<?php
					}
					?>
				</ul>
			</div>
			<hr class="thoda-light">
			<div class="row">
				<ul class="ch-grid">
					<?php
					$i=0;
					for($i=0;$i<count($team_brakes);$i++)
					{
						$name=$team_brakes[$i][0];
						$dept=$team_brakes[$i][1];
						$img=$team_brakes[$i][2];
						?>
						<div class="col-xs-6 col-sm-3 col-md-2 boxcol box-col">
							<div class="ch-item ch-img-1 box" style="background-image: url('../img/team18/<?php echo $img;?>.JPG');">
								<div class="ch-info">
									<h3><?php echo $name;?></h3>
								</div>
							</div>
							<h3 class="text-center"><?php echo $dept;?></h3>

						</div>
						<?php
					}
					?>
				</ul>
			</div>
			<hr class="thoda-light">
			<div class="row">
				<ul class="ch-grid">
					<?php
					$i=0;
					for($i=0;$i<count($team_design);$i++)
					{
						$name=$team_design[$i][0];
						$dept=$team_design[$i][1];
						$img=$team_design[$i][2];
						?>
						<div class="col-xs-6 col-sm-3 col-md-2 boxcol box-col">
							<div class="ch-item ch-img-1 box" style="background-image: url('../img/team18/<?php echo $img;?>.JPG');">
								<div class="ch-info">
									<h3><?php echo $name;?></h3>
								</div>
							</div>
							<h3 class="text-center"><?php echo $dept;?></h3>

						</div>
						<?php
					}
					?>
				</ul>
			</div>
			<hr class="thoda-light">
			<div class="row">
				<ul class="ch-grid">
					<?php
					$i=0;
					for($i=0;$i<count($team_marketing);$i++)
					{
						$name=$team_marketing[$i][0];
						$dept=$team_marketing[$i][1];
						$img=$team_marketing[$i][2];
						?>
						<div class="col-xs-6 col-sm-3 col-md-2 boxcol box-col">
							<div class="ch-item ch-img-1 box" style="background-image: url('../img/team18/<?php echo $img;?>.JPG');">
								<div class="ch-info">
									<h3><?php echo $name;?></h3>
								</div>
							</div>
							<h3 class="text-center"><?php echo $dept;?></h3>

						</div>
						<?php
					}
					?>
				</ul>
			</div>
		</div>
	</div>
	<div class="modal-footerr text-center">
		<hr class="white-hr">
		<button type="button" class="btn btn-default font-black" data-dismiss="modal" onclick="gotomeettheteam();">Close</button>
	</div>
	
</div>
