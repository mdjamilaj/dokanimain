<<<<<<< HEAD
<?php $this -> load -> view('include/header_for_new_sale'); ?>
<!--script  src="<?php echo base_url(); ?>assets/js/jquery-2.1.3.min.js"></script-->
<script type='text/javascript' charset='utf-8' src='<?php echo base_url();?>js/jquery-1.10.2.js'></script>
<div class="content-wrapper">
<style>
.form-control-2{
	border-color: #d2d6de;
    border-radius: 0;
    box-shadow: none;
	background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
    color: #555;
    display: block;
    font-size: 14px;
    height: 34px;
    line-height: 1.42857;
    padding: 6px 14px;
    transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;
    width: 100%;
}
.col-xs-4{
	min-height: 1px;
    padding-left: 150px;
    padding-right: 19px;
    position: relative
}
.col-sm-33{
	width:21.75%;
	float:left;
	min-height: 1px;
    padding-left: 15px;
    padding-right: 15px;
    position: relative;
}
.col-sm-222{
	width:52.8%;
	float:left;
	min-height: 1px;
    padding-left: 15px;
    padding-right: 15px;
    position: relative;
}
.col-sm-122{
	width:11.7%;
	float:left;
	min-height: 1px;
    padding-left: 15px;
    padding-right: 0px;
    position: relative;
}
.col-sm-1{
	width:6.333333%;
	float:left;
}
.content-2{
    margin-left: auto;
    margin-right: auto;
    min-height: 2px;
    padding: 4px;
}
.content-3{
    margin-left: auto;
    margin-right: auto;
    min-height: 2px;
    padding: 4px;
}
.listStyl a{
font-size: 16px;
color: #777;
font-family : arial;
}
#product_show{
	min-width: 382px;
}
#product_show li{
background-color: #f7f7f7;
border: 1px solid #00c0ef;
}
.listStyl a:hover{
    background-color: #00c0ef;
    color:#ffffff;
}
.listStyl a:focus {
    background-color: #00c0ef;
	color: #ffffff;
}

input[type="text"]:disabled {
    background: #dddddd;
}
.wrap {
    width: 100%;
	margin:0px 0px 0px 0px;
}
.wrap table {
    width: 100%;
    table-layout: fixed;
}
.wrap-11 {
    width: 100%;
	margin:0px 0px 0px 0px;
}
.wrap-11 table {
    width: 100%;
    table-layout: fixed;
}
table .new_data tr td {
    border: 1.5px solid #ffe8e8;
	background: white;
}
table tr td {
    padding: 5px;
    border: 1.5px solid #ffe8e8;
    width: 100px;
    word-wrap: break-word;
	background: white;
}
table.head tr td {
    color:white;
	background: #4d89a7;
	font-size:14px;
	font-family:Sans Pro; 
	font-weight:bold;
}

.new_data_2 tr:nth-child(even) td {
    background-color: #e4f1ff;
}
.new_data_2 tr:nth-child(odd) td {
    background-color: #fff;
}
.inner_table {
	color:#666768;
    height: 280px;
	width: 100%;
	font-size:12px;
	font-family:Sans Pro; 
	font-weight:bold;
    overflow-y: auto !important;
}

.inner_table22 {
	color:#666768;
    height: 280px;
	width: 100%;
	font-size:12px;
	font-family:Sans Pro; 
	font-weight:bold;
    overflow-y: auto !important;
}
.inner_table_2 {
	color:#403e3e;
    height: 33px;
	width: 100%;
	font-size:12px;
	font-family:Sans Pro; 
	font-weight:bold;
    overflow-y: auto !important;
}
.inner_table::-webkit-scrollbar {
    width: 1px;
	background-color: #2d3335;
}

.inner_table::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
	background-color: white;
}

.inner_table::-webkit-scrollbar-thumb {
   background-color: #448ca6;
   background-image: -webkit-linear-gradient(45deg,rgba(255, 255, 255, .2) 25%,transparent 25%,transparent 50%,rgba(255, 255, 255, .2) 50%,rgba(255, 255, 255, .2) 75%,transparent 75%,transparent)

}
.modal
{
	position: fixed;
	z-index: 999;
	height: 100%;
	width: 100%;
	top: 0;
	left: 0;
	background-color: white;
	filter: alpha(opacity=60);
	opacity: 0.6;
	-moz-opacity: 0.8;
}
.center
{
	z-index: 1000;
	margin: 300px auto;
	width: 350px;
	border-radius: 10px;
	filter: alpha(opacity=100);
	opacity: 1;
	-moz-opacity: 1;
}
.center img
{
	margin:0px 0px 0px 100px;
}
</style>
	<section class="content-2" style="margin:0px 0px 0px 0px;">
		<div class="row">
			<div class="col-md-12">
				<div class="box">
					<div class="box-header with-border" style="background: #0f77ab;">
						<h3 class="box-title" style="color:white;font-family:Helvetica Neue,Helvetica,Arial,sans-serif;">Purchase Return Report</h3>
					</div>
					<div class="box-body">
						<form aclass="form-horizontal" autocomplete="off" enctype="multipart/form-data">
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-1 control-label">Distributor</label>
								<div class="col-sm-3">
									<?php 
										echo form_dropdown('distributor_id',$distributor_info, '','class="form-control-2 select8" id="distributor_id" tabindex="-1" aria-hidden="true"');
									?>
								</div>
								<label for="inputEmail3" class="col-sm-1 control-label">Start</label>
								<div class="col-sm-2">
									<?php echo form_input(array('type' => 'text','placeholder' => $bd_date , 'name' => "start_date",'class' => "form-control",'id' => "datepickerrr",'value' => $bd_date, 'tabindex' => 3, 'title' => "Start Date" ));?>
								</div>
								<div class="col-sm-2">
									<?php echo form_input(array('type' => 'text','placeholder' => $bd_date , 'name' => "end_date",'class' => "form-control",'id' => "datepickerr", 'value' => $bd_date, 'tabindex' => 3, 'title' => "End Date" ));?>
								</div>
								<div class="col-sm-3">
									<button type="button" class="btn btn-success btn-sm" name="search_random" id="search_random" style="width:100px;"><i class="fa fa-fw fa-search"></i> Search</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php
	$distributor_id= $this->uri->segment(3);
	$start_date=$this->uri->segment(4);
	$end_date=$this->uri->segment(5);
	if($distributor_id!='' || $start_date!='' || $end_date!='')
	{
	?>
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box">
					<div class="box-header with-border" style="background: #0f77ab;">
						<h3 class="box-title" style="color:white;font-family:Helvetica Neue,Helvetica,Arial,sans-serif;">Purchase Return Report</h3>
						<a href="<?php echo base_url();?>report_controller/download_data_purchase_return/<?php echo $distributor_id;?>/<?php echo $start_date;?>/<?php echo $end_date;?>" id="down" target="_blank" class="btn btn-primary btn-sm pull-right"><i class="fa fa-download"></i> Download</a>
					</div>
					<!-- /.box-header -->
					<!-- form start -->
					<div class="box-body">
						<div class="col-md-12">
							<table class="table table-bordered reduce_space" >
								<tr>
									<td style="text-align:center;">No</td>
									<td style="text-align:center;">Date</td>
									<td style="text-align:center;">Distributor Name</td>
									<td style="text-align:center;">Product Name</td>
									<td style="text-align:center;">Quantity</td>
									<td style="text-align:center;">Buy Price</td>
								</tr>
								<?php
								$i=1;
								$ii=1;
								foreach($return_main_product->result() as $tmp)
								{
								?>
								<tr>
									<td><?php echo $i;?></td>
									<td><?php echo $tmp->doc;?></td>
									<td><?php echo $tmp->distributor_name;?></td>
									<td><b>Main Product:</b> <?php echo $tmp->product_name;?><br>
										<?php
										
										foreach($return_warranty_product[$ii]->result() as $new_tmp)
										{
											echo '<b>Warranty Product:</b> '.$new_tmp->sl_no.'<br>';

										}
										?>
									</td>
									<td style="text-align:center;"><?php echo $tmp->return_quantity;?></td>
									<td style="text-align:center;"><?php echo $tmp->buy_price;?></td>
									
								</tr>
								<?php
									$ii++;
									$i++;
								}
								?>
							</table>
						</div>    
					</div>    
				</div>    
			</div>
		</div>
	</section>
	<?php
	}
	?>
<script type="text/javascript">
$(document).ready(function() 
{
	$("#search_random").click(function(event2) 
	{
		event2.preventDefault();
		submiturl = '<?php echo base_url();?>report_controller/purchase_return_report_new';
		var distributor_id = $('#distributor_id').val();
		var start = $('#datepickerrr').val();
		var end = $('#datepickerr').val();

		if(distributor_id == ''){
			distributor_id = 'null';
		}
		if(start == ''){
			start = 'null';
		}
		if(end == ''){
			end = 'null';
		}

		window.open(submiturl+'/'+distributor_id+'/'+start+'/'+end,'_self');
	});
});
</script>
<script type="text/javascript">
$(document).ready(function() {
		$("#reset_btn").click(function(event) {
		event.preventDefault();
			$('#lock22').val('');
			$('#datep').val('');
			$('#datep2').val('');
		});
	});
</script>
</div>
=======
<?php $this -> load -> view('include/header_for_new_sale'); ?>
<!--script  src="<?php echo base_url(); ?>assets/js/jquery-2.1.3.min.js"></script-->
<script type='text/javascript' charset='utf-8' src='<?php echo base_url();?>js/jquery-1.10.2.js'></script>
<div class="content-wrapper">
<style>
.form-control-2{
	border-color: #d2d6de;
    border-radius: 0;
    box-shadow: none;
	background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
    color: #555;
    display: block;
    font-size: 14px;
    height: 34px;
    line-height: 1.42857;
    padding: 6px 14px;
    transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;
    width: 100%;
}
.col-xs-4{
	min-height: 1px;
    padding-left: 150px;
    padding-right: 19px;
    position: relative
}
.col-sm-33{
	width:21.75%;
	float:left;
	min-height: 1px;
    padding-left: 15px;
    padding-right: 15px;
    position: relative;
}
.col-sm-222{
	width:52.8%;
	float:left;
	min-height: 1px;
    padding-left: 15px;
    padding-right: 15px;
    position: relative;
}
.col-sm-122{
	width:11.7%;
	float:left;
	min-height: 1px;
    padding-left: 15px;
    padding-right: 0px;
    position: relative;
}
.col-sm-1{
	width:6.333333%;
	float:left;
}
.content-2{
    margin-left: auto;
    margin-right: auto;
    min-height: 2px;
    padding: 4px;
}
.content-3{
    margin-left: auto;
    margin-right: auto;
    min-height: 2px;
    padding: 4px;
}
.listStyl a{
font-size: 16px;
color: #777;
font-family : arial;
}
#product_show{
	min-width: 382px;
}
#product_show li{
background-color: #f7f7f7;
border: 1px solid #00c0ef;
}
.listStyl a:hover{
    background-color: #00c0ef;
    color:#ffffff;
}
.listStyl a:focus {
    background-color: #00c0ef;
	color: #ffffff;
}

input[type="text"]:disabled {
    background: #dddddd;
}
.wrap {
    width: 100%;
	margin:0px 0px 0px 0px;
}
.wrap table {
    width: 100%;
    table-layout: fixed;
}
.wrap-11 {
    width: 100%;
	margin:0px 0px 0px 0px;
}
.wrap-11 table {
    width: 100%;
    table-layout: fixed;
}
table .new_data tr td {
    border: 1.5px solid #ffe8e8;
	background: white;
}
table tr td {
    padding: 5px;
    border: 1.5px solid #ffe8e8;
    width: 100px;
    word-wrap: break-word;
	background: white;
}
table.head tr td {
    color:white;
	background: #4d89a7;
	font-size:14px;
	font-family:Sans Pro; 
	font-weight:bold;
}

.new_data_2 tr:nth-child(even) td {
    background-color: #e4f1ff;
}
.new_data_2 tr:nth-child(odd) td {
    background-color: #fff;
}
.inner_table {
	color:#666768;
    height: 280px;
	width: 100%;
	font-size:12px;
	font-family:Sans Pro; 
	font-weight:bold;
    overflow-y: auto !important;
}

.inner_table22 {
	color:#666768;
    height: 280px;
	width: 100%;
	font-size:12px;
	font-family:Sans Pro; 
	font-weight:bold;
    overflow-y: auto !important;
}
.inner_table_2 {
	color:#403e3e;
    height: 33px;
	width: 100%;
	font-size:12px;
	font-family:Sans Pro; 
	font-weight:bold;
    overflow-y: auto !important;
}
.inner_table::-webkit-scrollbar {
    width: 1px;
	background-color: #2d3335;
}

.inner_table::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
	background-color: white;
}

.inner_table::-webkit-scrollbar-thumb {
   background-color: #448ca6;
   background-image: -webkit-linear-gradient(45deg,rgba(255, 255, 255, .2) 25%,transparent 25%,transparent 50%,rgba(255, 255, 255, .2) 50%,rgba(255, 255, 255, .2) 75%,transparent 75%,transparent)

}
.modal
{
	position: fixed;
	z-index: 999;
	height: 100%;
	width: 100%;
	top: 0;
	left: 0;
	background-color: white;
	filter: alpha(opacity=60);
	opacity: 0.6;
	-moz-opacity: 0.8;
}
.center
{
	z-index: 1000;
	margin: 300px auto;
	width: 350px;
	border-radius: 10px;
	filter: alpha(opacity=100);
	opacity: 1;
	-moz-opacity: 1;
}
.center img
{
	margin:0px 0px 0px 100px;
}
</style>
	<section class="content-2" style="margin:0px 0px 0px 0px;">
		<div class="row">
			<div class="col-md-12 ">
				<div class="box">
					<div class="box-header with-border" style="background: #0f77ab;">
						<h3 class="box-title" style="color:white;font-family:Helvetica Neue,Helvetica,Arial,sans-serif;">Purchase Return Report</h3>
					</div>
					<div class="box-body">
						<form action ="<?php echo base_url();?>report_controller/all_purchase_return_report_find" class="form-horizontal" method="post" autocomplete="off" enctype="multipart/form-data" id="form_6">
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-1 control-label">Distributor</label>
								<div class="col-sm-2">
									<?php 
										echo form_dropdown('distributor_id',$distributor_name, '','class="form-control-2 select8 company_name five" id="distributor_id" tabindex="-1" aria-hidden="true"');
									?>
								</div>
								<label for="inputEmail3" class="col-sm-1 control-label">Start</label>
								<div class="col-sm-2">
									<?php echo form_input(array('type' => 'text','placeholder' => $bd_date , 'name' => "start_date",'class' => "form-control",'id' => "datepickerrr", 'tabindex' => 3, 'title' => "Start Date" ));?>
								</div>
								<div class="col-sm-2">
									<?php echo form_input(array('type' => 'text','placeholder' => $bd_date , 'name' => "end_date",'class' => "form-control",'id' => "datepickerr", 'tabindex' => 3, 'title' => "End Date" ));?>
								</div>
								<div class="col-sm-4">
									<button type="submit" class="btn btn-success btn-sm" name="search_random" style="width:100px;"><i class="fa fa-fw fa-search"></i> Search</button>
									<button type="reset" id="reset_btn" class="btn btn-warning btn-sm" style="width:100px;"><i class="fa fa-fw fa-refresh"></i> Reset</button>
									<a href="<?php echo base_url();?>report_controller/download_data_purchase_return" id="down" style="display:none;" target="_blank" class="btn btn-primary btn-sm"><i class="fa fa-download"></i> Download</a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
<div class="modal" style="display: none">
	<div class="center">
		<img src="<?php echo base_url();?>assets/assets2/spin.gif" id="loaderIcon"/>
	</div>
</div>
<input type="hidden" id="distributor">
<input type="hidden" id="start">
<input type="hidden" id="end">
<section class="content-3" id="infomsg" style="display:none;">
	<div class="row">
		<div class="col-md-12">
			<div class="box">	 
				<div class="box-body">
					<div class="wrap">
						<table class="head">
							<tr>
							  <td>No</td>
							  <td>Date</td>
							  <td>Distributor</td>
							  <td>Return ID</td>
							  <td>Product ID</td>
							  <td>Product</td>
							  <td style="text-align:center;">Quantity</td>
							  <td style="text-align:right;">Buy Price</td>
							  <td style="text-align:right;">Total</td>
							</tr>
						</table>
						<div class="inner_table" id="search_data">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
</section>
<script type="text/javascript">
$(document).ready(function() {
		$("#form_6").submit(function(event) {
		event.preventDefault();
		var submiturl = $(this).attr('action');
		var methods = $(this).attr('method');
		var output = '';
		var output2 = '';
		var output3 = '';
		var i=0;
		var k= 1;
		$.ajax({
			url: submiturl,
			type: methods,
			dataType: 'json',
			data: $(this).serialize(),
			beforeSend: function(){
				 $(".modal").show();
			},
			success: function(result) {	
				$(".modal").hide();
				for(i=0; i<result.length; i++)
				{	
					var unit_buy_price  =parseFloat(Math.round(result[i].unit_buy_price)).toFixed(2);
					var total_purchase_return1  =result[i].return_quantity * result[i].unit_buy_price;
					var total_purchase_return  =parseFloat(Math.round(total_purchase_return1)).toFixed(2);
					output2+='<table class="new_data_2"><tr><td>'+k+'</td><td>'+result[i].return_doc+'</td><td>'+result[i].distributor_name+'</td><td>'+result[i].purchase_return_id+'</td><td>'+result[i].product_id+'</td><td style="overflow: hidden;text-overflow: ellipsis; white-space: nowrap;" title="'+result[i].product_name+'">'+result[i].product_name+'</td><td style="text-align:center;">'+result[i].return_quantity+'</td><td style="text-align:right;">'+unit_buy_price+'</td><td style="text-align:right;">'+total_purchase_return+'</td></tr></table>';
					k++;
				}
				if(output2 != '')
				{
					$('#search_data').html(output2);
					$('#infomsg').show();
					$('#down').show();
				}
				else
				{
					$('#search_data').html("No Data Available");
					$('#infomsg').show();
					$('#down').hide();
				}
				var distributor1 = $('#distributor_id').val();
				var start1 = $('#datepickerrr').val();
				var end1 = $('#datepickerr').val();

				$('#distributor').val(distributor1);
				$('#start').val(start1);
				$('#end').val(end1);
			}
		});
	});
	
	$("#down").click(function(event2) {
		event2.preventDefault();
		submiturl = $(this).attr('href');
		
		var distributor = $('#distributor').val();
		var start = $('#start').val();
		var end = $('#end').val();

		if(distributor == ''){
			distributor = 'null';
		}
		if(start == ''){
			start = 'null';
		}
		if(end == ''){
			end = 'null';
		}

		window.open(submiturl+'/'+distributor+'/'+start+'/'+end,'_blank');
	});
	
});
</script>
<script type="text/javascript">
$(document).ready(function() {
		$("#reset_btn").click(function(event) {
		event.preventDefault();
			$('#lock22').val('');
			$('#datep').val('');
			$('#datep2').val('');
		});
	});
</script>
</div>
>>>>>>> 126491c5b956413b4ebc35a0628acbc4d375a4e7
<?php $this -> load -> view('include/footer'); ?>