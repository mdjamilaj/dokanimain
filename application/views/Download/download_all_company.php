<<<<<<< HEAD
<?php 
	ini_set('memory_limit', '-1');
	//ini_set('MAX_EXECUTION_TIME', '-1');
	ini_set('max_execution_time', 300);
?>
<style>
	.simpleTable{
		text-align:left;
	}
	
	.simpleTable th, .simpleTable td{
		line-height:normal;
		text-align:left;
		font-weight:normal;
	}
	
	#subjectNameList{
		line-height:20px;
	}

	@media print{
		pageBreak{
			page-break-after:always;
			page-break-inside:avoid;
		}
	}
</style>

<html>
	<head>
		<title> Dokani: It Lab Solutions </title>
		<link rel="stylesheet" href="<?php echo base_url(); ?>style/transcript_style.css" type="text/css"/> 
		<!--script src="<?php echo base_url();?>assets/js/jquery.min.js"></script-->
	</head>
	
	<body>
		<div id="main">
			<div id="controller">
				<htmlpageheader name="myheader">
					<div id="header">
						<img style="width:10%;" class="schoolLogoHeaderSmall" src="<?php echo base_url();?>images/top_logo.png"/>
						<h1 style="font-size:18px; line-height:normal;width:90%;" class="schoolNameHeaderSmall"> 
							<?php echo $this->tank_auth->get_shopname().' ( '. $this->tank_auth->get_shopaddress().' ) '; ?>
						</h1>
						<h3 class="pageTitleSmall" style="margin:10px 0px 5px 0px;"> Company Report </h3>
					</div>
				</htmlpageheader>
				<htmlpagefooter name="myfooter">
					<div id="printFooter">
						<div class="part70P"> 
							<div class="developPart">
								<img class="companyLogo" src="<?php echo base_url();?>images/itlablogo.png" alt="IT Lab Solutions Ltd."/>
								
								<p> 
									Generated By : <b>Dokani</b> 
									<br/>
									Developed By : <b>IT Lab Solutions Ltd.</b> +8801842485222, www.itlabsolutions.com
								</p> 
							</div>
						</div>
						
						
						<div class="part30P">
							<div class="orgNameBottom textAlginRight">
								<p> <b>&copy; Copyright </b> <br/>  <?php echo $this->tank_auth->get_shopname();?>  </p>
								<p> <?php echo $this->tank_auth->get_shopaddress();?> </p>
							</div>
						</div>
					</div>
				</htmlpagefooter>
				<sethtmlpageheader name="myheader" value="on" show-this-page="1" />
				<sethtmlpagefooter name="myfooter" value="on" />

				<div class="row">
					<table class="simpleTable" style="margin-top:30px;">
						<thead>
							<tr class="tableRowBG">
								<th colspan="3" style="color:black;">SL</th>
								<th colspan="3" style="color:black;">Company Id</th>
								<th colspan="3" style="text-align:left;color:black;">Name</th>
								<th colspan="3" style="text-align:left;color:black;">Phone</th>
								<th colspan="3" style="text-align:left;color:black;">Email</th>
								<th colspan="3" style="text-align:left;color:black;">Address</th>
								<th colspan="3" style="text-align:left;color:black;">Description</th>
							</tr>
						</thead>	
						<tbody>	
						<?php
						$index = 1;
						foreach($down_data_company -> result() as $field):
						?>
							<tr>
								<th colspan="3"> <?php echo $index; ?>  </th>
								<th colspan="3"> <?php echo $field->company_id; ?>  </th>
								<th colspan="3"> <?php echo $field->company_name; ?>  </th>
								<th colspan="3"> <?php echo $field->company_contact_no; ?>  </th>
								<th colspan="3"> <?php echo $field->company_email; ?>  </th>
								<th colspan="3" style="text-align:left;"> <?php echo $field->company_address; ?>  </th>
								<th colspan="3" style="text-align:left;"> <?php echo $field->company_description; ?>  </th>
							</tr>
						<?php
							$index++;
							endforeach;
							
						?>
						</tbody>
					</table>	
				</div>
			</div> <!---------- END OF DIV CONTROLLER ---------->
		</div>	<!--------- END OF DIV MAIN --------->
	</body>
</html>
=======
<?php 
	ini_set('memory_limit', '-1');
	//ini_set('MAX_EXECUTION_TIME', '-1');
	ini_set('max_execution_time', 300);
?>
<style>
	.simpleTable{
		text-align:left;
	}
	
	.simpleTable th, .simpleTable td{
		line-height:normal;
		text-align:left;
		font-weight:normal;
	}
	
	#subjectNameList{
		line-height:20px;
	}

	@media print{
		pageBreak{
			page-break-after:always;
			page-break-inside:avoid;
		}
	}
</style>

<html>
	<head>
		<title> Dokani: It Lab Solutions </title>
		<link rel="stylesheet" href="<?php echo base_url(); ?>style/transcript_style.css" type="text/css"/> 
		<!--script src="<?php echo base_url();?>assets/js/jquery.min.js"></script-->
	</head>
	
	<body>
		<div id="main">
			<div id="controller">
				<htmlpageheader name="myheader">
					<div id="header">
						<img style="width:10%;" class="schoolLogoHeaderSmall" src="<?php echo base_url();?>images/top_logo.png"/>
						<h1 style="font-size:18px; line-height:normal;width:90%;" class="schoolNameHeaderSmall"> 
							<?php echo $this->tank_auth->get_shopname().' ( '. $this->tank_auth->get_shopaddress().' ) '; ?>
						</h1>
						<h3 class="pageTitleSmall" style="margin:10px 0px 5px 0px;"> Company Report </h3>
					</div>
				</htmlpageheader>
				<htmlpagefooter name="myfooter">
					<div id="printFooter">
						<div class="part70P"> 
							<div class="developPart">
								<img class="companyLogo" src="<?php echo base_url();?>images/itlablogo.png" alt="IT Lab Solutions Ltd."/>
								
								<p> 
									Generated By : <b>Dokani</b> 
									<br/>
									Developed By : <b>IT Lab Solutions Ltd.</b> +8801842485222, www.itlabsolutions.com
								</p> 
							</div>
						</div>
						
						
						<div class="part30P">
							<div class="orgNameBottom textAlginRight">
								<p> <b>&copy; Copyright </b> <br/>  <?php echo $this->tank_auth->get_shopname();?>  </p>
								<p> <?php echo $this->tank_auth->get_shopaddress();?> </p>
							</div>
						</div>
					</div>
				</htmlpagefooter>
				<sethtmlpageheader name="myheader" value="on" show-this-page="1" />
				<sethtmlpagefooter name="myfooter" value="on" />

				<div class="row">
					<table class="simpleTable" style="margin-top:30px;">
						<thead>
							<tr class="tableRowBG">
								<th colspan="3" style="color:black;">SL</th>
								<th colspan="3" style="color:black;">Company Id</th>
								<th colspan="3" style="text-align:left;color:black;">Name</th>
								<th colspan="3" style="text-align:left;color:black;">Phone</th>
								<th colspan="3" style="text-align:left;color:black;">Email</th>
								<th colspan="3" style="text-align:left;color:black;">Address</th>
								<th colspan="3" style="text-align:left;color:black;">Description</th>
							</tr>
						</thead>	
						<tbody>	
						<?php
						$index = 1;
						foreach($down_data_company -> result() as $field):
						?>
							<tr>
								<th colspan="3"> <?php echo $index; ?>  </th>
								<th colspan="3"> <?php echo $field->company_id; ?>  </th>
								<th colspan="3"> <?php echo $field->company_name; ?>  </th>
								<th colspan="3"> <?php echo $field->company_contact_no; ?>  </th>
								<th colspan="3"> <?php echo $field->company_email; ?>  </th>
								<th colspan="3" style="text-align:left;"> <?php echo $field->company_address; ?>  </th>
								<th colspan="3" style="text-align:left;"> <?php echo $field->company_description; ?>  </th>
							</tr>
						<?php
							$index++;
							endforeach;
							
						?>
						</tbody>
					</table>	
				</div>
			</div> <!---------- END OF DIV CONTROLLER ---------->
		</div>	<!--------- END OF DIV MAIN --------->
	</body>
</html>
>>>>>>> 126491c5b956413b4ebc35a0628acbc4d375a4e7
