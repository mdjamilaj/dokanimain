<<<<<<< HEAD
<?php $this -> load -> view('include/header'); ?>
<!--script  src="<?php echo base_url(); ?>assets/js/jquery-2.1.3.min.js"></script-->
<script type='text/javascript' charset='utf-8' src='<?php echo base_url();?>js/jquery-1.10.2.js'></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>style/print_style.css" type="text/css"/>
<link rel="stylesheet" href="<?php echo base_url(); ?>style/table_style.css" type="text/css"/>
<div class="content-wrapper">
    <section class="content-header" style="padding:1px 0px 0px 0px;">
      <!--ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Reports</a></li>
        <li class="active">Finacial Report</li>
      </ol-->
    </section>
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
	margin:-19px 0px 0px 0px;
}
.wrap table {
    width: 100%;
    table-layout: fixed;
}
.wrap-11 {
    width: 100%;
	margin:-19px 0px 0px 0px;
}
.wrap-11 table {
    width: 100%;
    table-layout: fixed;
}
.wrap-1 {
	margin:-8px 0px 0px 0px;
    width: 100%;
}
.wrap-1 table {
    width: 100%;
    table-layout: fixed;
}
table .new_data tr td {
    border: 1.5px solid #e1e1e1;
	background: white;
}
table tr td {
    padding: 5px;
    border: 1.5px solid #e1e1e1;
    width: 100px;
    word-wrap: break-word;
	background: white;
}
table.head tr td {
    color:white;
	background: #494b4c;
	font-size:14px;
	font-family:Sans Pro; 
	font-weight:bold;
}

.new_data_2 tr:nth-child(even) td {
    background-color: #f4f4f4;
}
.new_data_2 tr:nth-child(odd) td {
    background-color: #fff;
}
.inner_table {
	color:#666768;
    height: 190px;
	width: 100%;
	font-size:12px;
	font-family:Sans Pro; 
	font-weight:bold;
    overflow-y: auto !important;
}

.inner_table_222 {
	color:#666768;
    height: 330px;
	width: 100%;
	font-size:12px;
	font-family:Sans Pro; 
	font-weight:bold;
    overflow-y: auto !important;
}
.inner_table_2 {
	color:#403e3e;
    height: 62px;
	width: 100%;
	font-size:12px;
	font-family:Sans Pro; 
	font-weight:bold;
    overflow-y: auto !important;
}
.inner_table::-webkit-scrollbar {
    width: 8px;
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
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

    <div class="mid_box_top">
		<?php
			$seg_4= $this -> uri -> segment(4);
		?>

	</div>
	<?php
	if(!$seg_4)
	{
		$total_payable = 0;
		$total_receivable = 0;
		$temp_payable_1 =0; 
		$temp_payable_2 = 0;
		$temp_receivable_1 = 0;
		$temp_receivable_2 = 0;
		$expense_total_amount = 0;
		$purchase_total_amount = 0;
		$purchase_total_amount_for_transport = 0;
		$purchase_total_amount_for_transport1 = 0;
		$expense_total_electric = 0;
		$expense_total_salary = 0;
		$expense_total_rent = 0;
		$expense_total_internet = 0;
		$expense_total_others = 0;
		$gift_total_amount = 0;
		$total_withdrawal = 0;
		$total_investment = 0;
		$loan_payable = 0;
		$loan_receivable = 0;
		$salary_payable =0;
		$salary_receivable =0;
		//print_r($payable_receivable_financial_statement );
		//print_r($expense_financial_statement );
		foreach($payable_receivable_financial_statement['updated_expense'] -> result() as $field):	
			 $temp_payable_2 = $field -> unpaid_grand_total - $field -> total_paid_amount;
			 $expense_total_amount = $field -> total_expense_amount;
			 $purchase_total_amount_for_transport = $field -> transport_cost;
			 $total_withdrawal = $field -> total_withdrawal;
		endforeach;
		foreach($payable_receivable_financial_statement['updated_transport'] -> result() as $field):	

			 $purchase_total_amount_for_transport1 = $field -> total_transport_amount;
		endforeach;
		
		foreach($payable_receivable_financial_statement['updated_purchase'] -> result() as $field):	
			 $temp_payable_1 = $field -> unpaid_grand_total - $field -> total_paid_amount;
			 $purchase_total_amount = $field -> total_purchase_amount;
		endforeach;
		foreach($payable_receivable_financial_statement['updated_gift'] -> result() as $field):	
			 $gift_total_amount = $field -> total_gift_amount;
			 $temp_receivable_2 = $field -> unpaid_gift_amount;
		endforeach;
		
		foreach($payable_receivable_financial_statement['sale'] -> result() as $field):	
			$temp_receivable_1 = $field -> grand_total - $field -> total_paid;
		endforeach;
		foreach($payable_receivable_financial_statement['investment'] -> result() as $field):	
			$total_investment = $field -> total_investment;
		endforeach;

		foreach($payable_receivable_financial_statement['loan_details'] -> result() as $field):	
			$loan_payable = $field -> payable_loan;
			$loan_receivable = $field -> receivable_loan;
		endforeach;
		
		foreach($payable_receivable_salary_statement -> result() as $field):	
			if(($field -> total_due) < 0)
				$salary_receivable =abs($field -> total_due);
			else $salary_payable = $field -> total_due;
		endforeach;

		$total_payable = $temp_payable_1 + $temp_payable_2;
		$total_receivable = $temp_receivable_1+ $temp_receivable_2;
		
		
		foreach($expense_financial_statement['updated_expense_electric'] -> result() as $field):	

			 $expense_total_electric = $field -> total_expense_amount_electric;
		endforeach;
		foreach($expense_financial_statement['updated_expense_salary'] -> result() as $field):	

			 $expense_total_salary = $field -> total_expense_amount_salary;
		endforeach;
		foreach($expense_financial_statement['updated_expense_house_rent'] -> result() as $field):	

			 $expense_total_rent = $field -> total_expense_amount_house_rent;
		endforeach;
		foreach($expense_financial_statement['updated_expense_internet'] -> result() as $field):	

			 $expense_total_internet = $field -> total_expense_amount_internet;
		endforeach;
		foreach($expense_financial_statement['updated_expense_other'] -> result() as $field):	

			 $expense_total_others = $field -> total_expense_amount_others;
		endforeach;
	}
	?>

	
	
	<!--?php
	$total_in = 0;$total_out = 0; $date_wise_total_expense = 0;
	if($financial_statement_info['cash'] -> num_rows() > 0 ||  $financial_statement_info['cheque'] -> num_rows() > 0)
	{
	?>      
	           
	        <!--?php
				$index = 1;
				foreach($financial_statement_info['cash'] -> result() as $field):	
			    $transaction_purpose = $field -> transaction_purpose;
				if($transaction_purpose == 'expense')
				{	
					$date_wise_total_expense += $field -> transaction_amount;
				}				
				$index++;
				endforeach;
			?>
			<!--?php
				foreach($financial_statement_info['cheque'] -> result() as $field):	
				$index = 1;
				$transaction_purpose = $field -> cheque_ref_purpose;
				if($transaction_purpose == 'expense')
				{	
					$date_wise_total_expense += $field -> transaction_amount;
				}
				$index++;
				endforeach;
			?>	   
	           
	           
	           
			<!--?php
				$index = 1;
				$total_in = 0;
				foreach($financial_statement_info['cash'] -> result() as $field):	
				$transaction_type = $field -> transaction_type;
				if($transaction_type == 'in')
				{	
					$total_in += $field -> transaction_amount;
				}				
				$index++;
				endforeach;
			?>
			<!--?php
				foreach($financial_statement_info['cheque'] -> result() as $field):	
				$transaction_type = $field -> transaction_type;
				if($transaction_type == 'in')
				{	
					$total_in += $field -> transaction_amount;
				}
				$index++;
				endforeach;
				
				foreach($financial_statement_info['card'] -> result() as $field):	
				$transaction_type = $field -> transaction_type;
				if($transaction_type == 'in')
				{	
					$total_in += $field -> transaction_amount;
				}
				$index++;
				endforeach;
			?>					
			<!--?php
				$index = 1;
				$total_out = 0; 
				foreach($financial_statement_info['cash'] -> result() as $field):
				$transaction_type = $field -> transaction_type;
				if($transaction_type == 'out')
				{			
					$total_out += $field -> transaction_amount;
				}
				$index++;
				endforeach;
			?>
			<!--?php
				foreach($financial_statement_info['cheque'] -> result() as $field):
					$transaction_type = $field -> transaction_type;
					if($transaction_type == 'out')
					{			
						$total_out += $field -> transaction_amount;
					}
					$index++;
				endforeach;
			?>	
	<?php
	//}
		$i = 1;
		$total_asset = 0;
		foreach($all_stock -> result() as $individual):
			$total_asset += ( $individual -> stock_amount * $individual -> bulk_unit_buy_price );
			$i++;
		endforeach;
	?>
	<!--cash in hand calculation-->
	<?php
		$total_in_amount = 0.00;
		$total_out_amount = 0.00;
		$temp_cash_in_hand_final_amount = 0.00;
		$temp_cash_in_bank_final_amount = 0.00;
		if($cash_status_report_info['total_in_out_cash_status'] -> num_rows() > 0 )
		{
			foreach($cash_status_report_info['total_in_out_cash_status'] -> result() as $field):	
				$total_in_amount = $field -> total_in;
				$total_out_amount = $field -> total_out;
			endforeach;						
									
			$total_in_amount = round($total_in_amount, 2);
			$total_out_amount = round($total_out_amount, 2);
			$temp_cash_in_hand_final_amount = round($total_in_amount - $total_out_amount, 2);
		}
	?>
	<section class="content-2" style="margin:0px 0px 0px 0px;">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="box">
					<div class="box-header with-border" style="background: #0f77ab;">
						<h3 class="box-title" style="color:white;font-family:Helvetica Neue,Helvetica,Arial,sans-serif;">Financial Statement Search</h3>
					</div>
					<div class="box-body">
						<form action ="<?php echo base_url();?>report_controller/specific_date_report_for_financial_statement_1" method="post" enctype="multipart/form-data" id="form_3" class="form-horizontal" autocomplete="off">
							<div class="form-group">
								<label for="inputPassword3" class="col-sm-1 control-label">Single</label>
								<div class="col-sm-2">
									<?php echo form_input(array('type' => 'text','placeholder' => $bd_date , 'name' => "specific_date",'class' => "form-control",'id' => "datep", 'tabindex' => 3, 'title' => "Start Date" ));?>
								</div>
								<label for="inputPassword3" class="col-sm-1 control-label">Duration</label>
								<div class="col-sm-2">
									<?php echo form_input(array('type' => 'text','placeholder' => $bd_date , 'name' => "start_date",'class' => "form-control",'id' => "datepickerrr", 'tabindex' => 3, 'title' => "Start Date" ));?>
								</div>
								<div class="col-sm-2">
									<?php echo form_input(array('type' => 'text','placeholder' => $bd_date , 'name' => "end_date",'class' => "form-control",'id' => "datepickerr", 'tabindex' => 3, 'title' => "End Date" ));?>
								</div>
								<div class="col-sm-4">
									<button type="submit" class="btn btn-success btn-sm" name="search_random" style="width:100px;"><i class="fa fa-fw fa-search"></i> Search</button>
									<button type="reset" id="reset_btn" class="btn btn-warning btn-sm" style="width:100px;"><i class="fa fa-fw fa-refresh"></i> Reset</button>
								</div>
							</div>
						</form>	
					</div>
				</div>
			</div>
		</div>
	</section>			
	<section class="content-2" style="margin:0px 0px 0px 0px;">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="box">
					<div class="box-body">
						<div class="wrap-1">
							<div class="inner_table_2">
								<table class="new_data">
									<tr>
									  <td colspan="1" style="text-align:left;text-indent:5px;font-size:13px;width:7%; font-family:Sans Pro; color:#444;font-weight:bold;">S.Date</td>
									  <td colspan="2" style="overflow: hidden;text-overflow: ellipsis; white-space: nowrap;text-align:left;text-indent:5px;font-size:15px;color:#377ba6"><?php echo date("d-m-Y", strtotime($start_date)).nbs(5); ?></td>
									  <td colspan="1" style="text-align:left;text-indent:5px;font-size:13px;width:7%; font-family:Sans Pro; color:#444;font-weight:bold;">E.Date</td>
									  <td colspan="2" style="overflow: hidden;text-overflow: ellipsis; white-space: nowrap;text-align:left;text-indent:5px;font-size:15px;color:#377ba6"><?php echo date("d-m-Y", strtotime($end_date)); ?></td>
									  <!--td colspan="2" style="overflow: hidden;text-overflow: ellipsis; white-space: nowrap;text-align:left;text-indent:5px;font-size:15px;color:#377ba6"><?php
												echo form_open('report_controller/financial_statement_details_result_view');
												echo form_submit('submit', 'Read More', 'class="btn btn-primary btn-xs" style="color:white;width:100px;"');
												echo form_hidden('start_date',$start_date);
												echo form_hidden('end_date',$end_date);
												echo form_close();
											?></td-->
									  <td colspan="2" style="text-align:left;text-indent:5px;font-size:15px;color:#377ba6"><?php echo anchor('report_controller/print_financial_report_1/'.$start_date.'/'.$end_date, img('images/print.png'),' target="_blank" title="Print Financial Report"');?></td>
									</tr>
								</table>
							</div>
						</div>
						<div class="inner_table_222">
						<div class = "Field_Container_Box" style="margin: 10px 0px 0px 60px; width: 610px;" >
							<p style="text-indent:28px; margin-top:0px; font-size:12px;">Total Sale</p>
								<?php 
									echo '<div class = "h8" style="margin:0px 0px 0px 108px;">'.nbs(10).'<big style = "font-size: 11px; font-weight:bold;"> &#2547; </big> ';
									$sale_price_info1 = round(($sale_price_info), 2);
									if($sale_price_info1 == round($sale_price_info1, 0))
										$sale_price_info1 = $sale_price_info1.'.00';
									else if(round($sale_price_info1, 1) == round($sale_price_info1, 2))
										$sale_price_info1 = $sale_price_info1.'0';
									echo $sale_price_info1.'</div>'; 
								?>
						</div>
						<div class = "Field_Container_Box" style="margin: 10px 0px 0px 60px; width: 610px;" >
							<p style="text-indent:28px; margin-top:0px; font-size:12px;">Total Sale Return</p>
								<?php 
									echo '<div class = "h8" style="margin:0px 0px 0px 108px;">'.nbs(10).'<big style = "font-size: 11px; font-weight:bold;"> &#2547; </big> ';
									$sale_return_info1 = round(($sale_return_info), 2);
									if($sale_return_info1 == round($sale_return_info1, 0))
										$sale_return_info1 = $sale_return_info1.'.00';
									else if(round($sale_return_info1, 1) == round($sale_return_info1, 2))
										$sale_return_info1 = $sale_return_info1.'0';
									echo $sale_return_info1.'</div>'; 
								?>
						</div>
						<div class = "Field_Container_Box" style="margin: 10px 0px 0px 60px; width: 610px;" >
							<p style="text-indent:28px; margin-top:0px; font-size:12px;">Total Delivery Charge</p>
								<?php 
									echo '<div class = "h8" style="margin:0px 0px 0px 108px;">'.nbs(10).'<big style = "font-size: 11px; font-weight:bold;"> &#2547; </big> ';
									$delivery_charge_info1 = round(($delivery_charge_info), 2);
									if($delivery_charge_info1 == round($delivery_charge_info1, 0))
										$delivery_charge_info1 = $delivery_charge_info1.'.00';
									else if(round($delivery_charge_info1, 1) == round($delivery_charge_info1, 2))
										$delivery_charge_info1 = $delivery_charge_info1.'0';
									echo $delivery_charge_info1.'</div>'; 
								?>
						</div>
						<div class = "Field_Container_Box" style="margin: 10px 0px 0px 60px; width: 610px;" >
							<p style="text-indent:28px; margin-top:0px; font-size:12px;">Revenue</p>
								<?php 
									echo '<div class = "h8" style="margin:0px 0px 0px 108px;">'.nbs(10).'<big style = "font-size: 11px; font-weight:bold;"> &#2547; </big> ';
									$today_sale = round(($sale_price_info - $sale_return_info + $delivery_charge_info), 2);
									if($today_sale == round($today_sale, 0))
										$today_sale = $today_sale.'.00';
									else if(round($today_sale, 1) == round($today_sale, 2))
										$today_sale = $today_sale.'0';
									echo $today_sale.'</div>'; 
								?>
						</div>
						<div id = "mid_box_left" style="width:496px;margin: 0px 0px 0px 64px;" >
							<div class = "TitleBox">
								<div class ="pp">Cost of Sales</div>
							</div>

								<div class = "Field_Container_Box" >
									<div class = "purpose_controller"> Opening Inventory</div>	
									<?php 
										echo '<div class = "h8">'.nbs(10).'<big style = "font-size: 11px; font-weight:bold;"> &#2547; </big> '.$opening_stock.'</div>'; 
									?> 
								</div>
								<div class = "Field_Container_Box" >
									<div class = "purpose_controller">Purchase</div>
									<?php 
										echo '<div class = "h8">'.nbs(10).'<big style = "font-size: 11px; font-weight:bold;"> &#2547; </big> ';
										$result = round($purchase_total_amount, 2);
										if($result == round($result, 0))
											$result = $result.'.00';
										else if(round($result, 1) == round($result, 2))
											$result = $result.'0';
										echo $result.'</div>'; 
									?> 
								</div>
									
								<div class = "Field_Container_Box" >
									<div class = "purpose_controller">Carriage Inward</div>
									<?php 
										echo '<div class = "h8">'.nbs(10).'<big style = "font-size: 11px; font-weight:bold;"> &#2547; </big> ';
										$result = round($purchase_total_amount_for_transport1, 2);
										if($result == round($result, 0))
											$result = $result.'.00';
										else if(round($result, 1) == round($result, 2))
											$result = $result.'0';
										echo $result.'</div>'; 
									?>  
								</div>
								<div class = "Field_Container_Box" >
									<p style="width:217px; margin-top:0px; font-size:12px;">Cost of Goods Available for Sale</p>
									<?php
										echo '<div class = "h8" style="margin:0px 0px 0px 54px;">'.nbs(6).'<big style = "font-size: 11px; font-weight:bold;"> &#2547; </big> ';
										$cost_sale = round(($opening_stock + $purchase_total_amount + $purchase_total_amount_for_transport1), 3);
										if($cost_sale == round($cost_sale, 0))
											$cost_sale = $cost_sale.'.00';
										else if(round($cost_sale, 1) == round($cost_sale, 2))
											$cost_sale = $cost_sale.'0';
										echo $cost_sale.'</div>' ;
									?>
								</div>
								<div class = "Field_Container_Box">
									<div class = "purpose_controller"> (-) Closing Stock.</div>	
									<?php 
										echo '<div class = "h8">'.nbs(10).'<big style = "font-size: 11px; font-weight:bold;"> &#2547; </big> '.$closing_stock.'</div>'; 
									?>
								</div>
								<div class = "Field_Container_Box"  style="margin: 0px 0px 0px 5px; width: 610px;"  >
									<p style="font-size: 12px; margin: 0px 0px 0px 2px; width: 193px;">Cost of Goods Sold</p>
									<?php
										echo '<div class = "h8" style="margin:0px 0px 0px 187px;">'.nbs(6).'<big style = "font-size: 11px; font-weight:bold;"> &#2547; </big> ';
										
										
										$result2 = round(($cost_sale - $closing_stock), 2);
										
										if($result2 == round($result2, 0))
											$result2 = $result2.'.00';
										else if(round($result2, 1) == round($result2, 2))
											$result2 = $result2;
										echo $result2.'</div>' ;
									?>
								</div>
								<div class = "Field_Container_Box"  style="margin: 2px 0px 0px 5px; width: 610px;"  > 
									<?php 
										$result3 = round(($today_sale - $result2), 2);
								
										if($result3 != 0 && $result2 != 0)
										{
											$profit_in_percent = ($result3/$result2)*100;
										}
										else
										{
											$profit_in_percent = 0;
										}
										if($result3 <0 ){
											echo '<p style="text-indent:6px; margin-top:0px; font-size:12px; color:red;">Gross Loss</p>';
											
											echo '<div class = "h8" style="margin:0px 0px 0px 108px; color:red;"><big style = "font-size: 11px; font-weight:bold;"> &#2547; </big> ';

										
										
										if($result3 == round($result3, 0))
											$result3 = $result3.'.00';
										else if(round($result3, 1) == round($result3, 2))
											$result3 = $result3;
										echo $result3.'</div>';
											
										}
										else if($result3>=0){
											echo '<p style="text-indent:6px; margin-top:0px; font-size:12px; color:green;">Gross Profit</p>';
											
											echo '<div class = "h8" style="margin:0px 0px 0px 108px;color:green;"><big style = "font-size: 11px; font-weight:bold;"> &#2547; </big> ';

										
										
										if($result3 == round($result3, 0))
											$result3 = $result3.'.00';
										else if(round($result3, 1) == round($result3, 2))
											$result3 = $result3;
										echo $result3.'</div>';
										}
										
									?>
								</div>
								<div class = "Field_Container_Box"  style="margin: 0px 0px 0px 5px; width: 610px;"  >
									<p style="font-size: 12px; margin: 0px 0px 0px 2px; width: 193px;">Comission</p>
									<?php
										echo '<div class = "h8" style="margin:0px 0px 0px 187px;">'.nbs(6).'<big style = "font-size: 11px; font-weight:bold;"> &#2547; </big> ';
										
										
										$total_comission = round(($date_wise_total_comission), 2);
										
										if($total_comission == round($total_comission, 0))
											$total_comission = $total_comission.'.00';
										else if(round($total_comission, 1) == round($total_comission, 2))
											$total_comission = $total_comission;
										echo $total_comission.'</div>' ;
									?>
								</div>
								<div class = "Field_Container_Box"  style="margin: 0px 0px 0px 5px; width: 610px;"  >
									<p style="font-size: 12px; margin: 0px 0px 0px 2px; width: 193px;">Total Profit</p>
									<?php
										echo '<div class = "h8" style="margin:0px 0px 0px 187px;">'.nbs(6).'<big style = "font-size: 11px; font-weight:bold;"> &#2547; </big> ';
										
										
										$total_comission = round(($date_wise_total_comission + $result3), 2);
										
										if($total_comission == round($total_comission, 0))
											$total_comission = $total_comission.'.00';
										else if(round($total_comission, 1) == round($total_comission, 2))
											$total_comission = $total_comission;
										echo $total_comission.'</div>' ;
									?>
								</div>
						</div>	 <!--End of mid box left-->
						
						
						<div id = "mid_box_left" style="width:496px;margin: 9px 0px 0px 64px;" >
							<div class = "TitleBox">
								<div class ="pp">Operating Expenses</div>
							</div>

								<div class = "Field_Container_Box" >
									<div class = "purpose_controller">Salary</div>
									<?php 
										echo '<div class = "h8">'.nbs(10).'<big style = "font-size: 11px; font-weight:bold;"> &#2547; </big> ';
										$salary_all = round($expense_total_salary, 2);
										if($salary_all == round($salary_all, 0))
											$salary_all = $salary_all.'.00';
										else if(round($salary_all, 1) == round($salary_all, 2))
											$salary_all = $salary_all;
										echo $salary_all.'</div>'; 
									?> 
								</div>
								<div class = "Field_Container_Box" >
									<div class = "purpose_controller">Rent</div>
									<?php 
										echo '<div class = "h8">'.nbs(10).'<big style = "font-size: 11px; font-weight:bold;"> &#2547; </big> ';
										$rent_all = round($expense_total_rent, 2);
										if($rent_all == round($rent_all, 0))
											$rent_all = $rent_all.'.00';
										else if(round($rent_all, 1) == round($rent_all, 2))
											$rent_all = $rent_all;
										echo $rent_all.'</div>'; 
									?> 
								</div>
									
								<div class = "Field_Container_Box" >
									<div class = "purpose_controller">Electricity</div>
									<?php 
										echo '<div class = "h8">'.nbs(10).'<big style = "font-size: 11px; font-weight:bold;"> &#2547; </big> ';
										$electricity_all = round($expense_total_electric, 2);
										if($electricity_all == round($electricity_all, 0))
											$electricity_all = $electricity_all.'.00';
										else if(round($electricity_all, 1) == round($electricity_all, 2))
											$electricity_all = $electricity_all;
										echo $electricity_all.'</div>'; 
									?>  
								</div>
								<div class = "Field_Container_Box" >
									<div class = "purpose_controller">Internet</div>
									<?php 
										echo '<div class = "h8">'.nbs(10).'<big style = "font-size: 11px; font-weight:bold;"> &#2547; </big> ';
										$internet_all = round($expense_total_internet, 2);
										if($internet_all == round($internet_all, 0))
											$internet_all = $internet_all.'.00';
										else if(round($internet_all, 1) == round($internet_all, 2))
											$internet_all = $internet_all;
										echo $internet_all.'</div>'; 
									?>  
								</div>
								<div class = "Field_Container_Box" >
									<div class = "purpose_controller"><a href="#" style="text-decoration:none;" title="Details Expense View" class='modal_load_2' valuu ="<?php echo $start_date; ?>" valuuu ="<?php echo $end_date; ?>" data-toggle="modal" data-target="#add_shop">Others</a></div>
									<?php 
										echo '<div class = "h8">'.nbs(10).'<big style = "font-size: 11px; font-weight:bold;"> &#2547; </big> ';
										$others_all = round($expense_total_others, 2);
										if($others_all == round($others_all, 0))
											$others_all = $others_all.'.00';
										else if(round($others_all, 1) == round($others_all, 2))
											$others_all = $others_all;
										echo $others_all.'</div>'; 
									?>  
								</div>
								
								<div class = "Field_Container_Box"  style="margin: 0px 0px 0px 5px; width: 610px;"  >
									<p style="margin-top: 0px; font-size: 12px; width: 183px;">Operating Expenses</p>
									<?php
										echo '<div class = "h8" style="margin:0px 0px 0px 199px;">'.nbs(6).'<big style = "font-size: 11px; font-weight:bold;"> &#2547; </big> ';
										
										
										$result22 = round(($salary_all + $rent_all + $electricity_all + $internet_all + $others_all), 2);
										
										if($result22 == round($result22, 0))
											$result22 = $result22.'.00';
										else if(round($result22, 1) == round($result22, 2))
											$result22 = $result22;
										echo $result22.'</div>' ;
									?>
								</div>
								<div class = "Field_Container_Box"  style="margin: 2px 0px 0px 5px; width: 610px;"  > 
									<?php 
							
										$result33 = round(($total_comission - $result22), 2);
										
										if($result33 != 0){
										$net_profit_in_percent = ($result2/$result33)*100;
										}
										else{
										$net_profit_in_percent = 0;
										}
										
										if($result33 <0 ){
											echo '<p style="text-indent:6px; margin-top:0px; font-size:12px; color:red;">Net Loss</p>';
											echo '<div class = "h8" style="margin:0px 0px 0px 108px; color:red;"><big style = "font-size: 11px; font-weight:bold;"> &#2547; </big> ';
											if($result33 == round($result33, 0))
												$result33 = $result33.'.00';
											else if(round($result33, 1) == round($result33, 2))
												$result33 = $result33;
											echo $result33.'</div>';
										}
										else if($result33>=0){
											echo '<p style="text-indent:6px; margin-top:0px; font-size:12px; color:green;">Net Profit</p>';
											
											echo '<div class = "h8" style="margin:0px 0px 0px 108px;color:green;"><big style = "font-size: 11px; font-weight:bold;"> &#2547; </big> ';
											if($result33 == round($result33, 0))
												$result33 = $result33.'.00';
											else if(round($result33, 1) == round($result33, 2))
												$result33 = $result33;
											echo $result33.'</div>';
											
										}
										
										 
									?>
								</div>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>		
</div>
<div class="modal fade" id="add_shop" style="z-index: 999999;background: transparent !important;"  data-backdrop="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title"><i class="fa fa-plus"></i> Details Expense</h4>
      </div>
      <div class="modal-body">
        <div class="wrap-11">
			<table class="head">
				<tr>
					<td style="font-family:Helvetica Neue,Helvetica,Arial,sans-serif;width:20px;"><center>Expense Type</center></td>
					<td style="font-family:Helvetica Neue,Helvetica,Arial,sans-serif;width:14px;"><center>Amount</center></td>
					<td style="font-family:Helvetica Neue,Helvetica,Arial,sans-serif;width:14px;"><center>Date</center></td>
				</tr>
			</table>
			<div class="inner_table22">
				<table class="new_data_2" id="expense_details"></table>
			</div>
		</div>
        
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
$('.modal_load_2').click(function(){
		var start_date = $(this).attr('valuu');
		var end_date = $(this).attr('valuuu');
		var outputs2="";
		$.ajax({
			url: '<?php echo base_url();?>report_controller/get_other_expense_details', 
			dataType:'json',
			method: 'POST',
			data: {'start_date' : start_date,'end_date' : end_date},
			success: function(result){
				for (i = 0; i < result.length; i++) 
				{
					outputs2+='<tr class="even pointer"><td style="font-family:Helvetica Neue,Helvetica,Arial,sans-serif;width:20px;"><center>'+result[i].type_type+'</center></td><td style="font-family:Helvetica Neue,Helvetica,Arial,sans-serif;width:14px;"><center>'+result[i].expense_amount+'</center></td><td style="font-family:Helvetica Neue,Helvetica,Arial,sans-serif;width:14px;"><center>'+result[i].expense_doc+'</center></td></tr>';
					
				}
				$("#expense_details").html(outputs2);
			}
			
		});
	});
</script>
=======
<?php $this -> load -> view('include/header'); ?>
<!--script  src="<?php echo base_url(); ?>assets/js/jquery-2.1.3.min.js"></script-->
<script type='text/javascript' charset='utf-8' src='<?php echo base_url();?>js/jquery-1.10.2.js'></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>style/print_style.css" type="text/css"/>
<link rel="stylesheet" href="<?php echo base_url(); ?>style/table_style.css" type="text/css"/>
<div class="content-wrapper">
    <section class="content-header" style="padding:1px 0px 0px 0px;">
      <!--ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Reports</a></li>
        <li class="active">Finacial Report</li>
      </ol-->
    </section>
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
	margin:-19px 0px 0px 0px;
}
.wrap table {
    width: 100%;
    table-layout: fixed;
}
.wrap-11 {
    width: 100%;
	margin:-19px 0px 0px 0px;
}
.wrap-11 table {
    width: 100%;
    table-layout: fixed;
}
.wrap-1 {
	margin:-8px 0px 0px 0px;
    width: 100%;
}
.wrap-1 table {
    width: 100%;
    table-layout: fixed;
}
table .new_data tr td {
    border: 1.5px solid #e1e1e1;
	background: white;
}
table tr td {
    padding: 5px;
    border: 1.5px solid #e1e1e1;
    width: 100px;
    word-wrap: break-word;
	background: white;
}
table.head tr td {
    color:white;
	background: #494b4c;
	font-size:14px;
	font-family:Sans Pro; 
	font-weight:bold;
}

.new_data_2 tr:nth-child(even) td {
    background-color: #f4f4f4;
}
.new_data_2 tr:nth-child(odd) td {
    background-color: #fff;
}
.inner_table {
	color:#666768;
    height: 190px;
	width: 100%;
	font-size:12px;
	font-family:Sans Pro; 
	font-weight:bold;
    overflow-y: auto !important;
}

.inner_table_222 {
	color:#666768;
    height: 330px;
	width: 100%;
	font-size:12px;
	font-family:Sans Pro; 
	font-weight:bold;
    overflow-y: auto !important;
}
.inner_table_2 {
	color:#403e3e;
    height: 62px;
	width: 100%;
	font-size:12px;
	font-family:Sans Pro; 
	font-weight:bold;
    overflow-y: auto !important;
}
.inner_table::-webkit-scrollbar {
    width: 8px;
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
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

    <div class="mid_box_top">
		<?php
			$seg_4= $this -> uri -> segment(4);
		?>

	</div>
	<?php
	if(!$seg_4)
	{
		$total_payable = 0;
		$total_receivable = 0;
		$temp_payable_1 =0; 
		$temp_payable_2 = 0;
		$temp_receivable_1 = 0;
		$temp_receivable_2 = 0;
		$expense_total_amount = 0;
		$purchase_total_amount = 0;
		$purchase_total_amount_for_transport = 0;
		$purchase_total_amount_for_transport1 = 0;
		$expense_total_electric = 0;
		$expense_total_salary = 0;
		$expense_total_rent = 0;
		$expense_total_internet = 0;
		$expense_total_others = 0;
		$gift_total_amount = 0;
		$total_withdrawal = 0;
		$total_investment = 0;
		$loan_payable = 0;
		$loan_receivable = 0;
		$salary_payable =0;
		$salary_receivable =0;
		//print_r($payable_receivable_financial_statement );
		//print_r($expense_financial_statement );
		foreach($payable_receivable_financial_statement['updated_expense'] -> result() as $field):	
			 $temp_payable_2 = $field -> unpaid_grand_total - $field -> total_paid_amount;
			 $expense_total_amount = $field -> total_expense_amount;
			 $purchase_total_amount_for_transport = $field -> transport_cost;
			 $total_withdrawal = $field -> total_withdrawal;
		endforeach;
		foreach($payable_receivable_financial_statement['updated_transport'] -> result() as $field):	

			 $purchase_total_amount_for_transport1 = $field -> total_transport_amount;
		endforeach;
		
		foreach($payable_receivable_financial_statement['updated_purchase'] -> result() as $field):	
			 $temp_payable_1 = $field -> unpaid_grand_total - $field -> total_paid_amount;
			 $purchase_total_amount = $field -> total_purchase_amount;
		endforeach;
		foreach($payable_receivable_financial_statement['updated_gift'] -> result() as $field):	
			 $gift_total_amount = $field -> total_gift_amount;
			 $temp_receivable_2 = $field -> unpaid_gift_amount;
		endforeach;
		
		foreach($payable_receivable_financial_statement['sale'] -> result() as $field):	
			$temp_receivable_1 = $field -> grand_total - $field -> total_paid;
		endforeach;
		foreach($payable_receivable_financial_statement['investment'] -> result() as $field):	
			$total_investment = $field -> total_investment;
		endforeach;

		foreach($payable_receivable_financial_statement['loan_details'] -> result() as $field):	
			$loan_payable = $field -> payable_loan;
			$loan_receivable = $field -> receivable_loan;
		endforeach;
		
		foreach($payable_receivable_salary_statement -> result() as $field):	
			if(($field -> total_due) < 0)
				$salary_receivable =abs($field -> total_due);
			else $salary_payable = $field -> total_due;
		endforeach;

		$total_payable = $temp_payable_1 + $temp_payable_2;
		$total_receivable = $temp_receivable_1+ $temp_receivable_2;
		
		
		foreach($expense_financial_statement['updated_expense_electric'] -> result() as $field):	

			 $expense_total_electric = $field -> total_expense_amount_electric;
		endforeach;
		foreach($expense_financial_statement['updated_expense_salary'] -> result() as $field):	

			 $expense_total_salary = $field -> total_expense_amount_salary;
		endforeach;
		foreach($expense_financial_statement['updated_expense_house_rent'] -> result() as $field):	

			 $expense_total_rent = $field -> total_expense_amount_house_rent;
		endforeach;
		foreach($expense_financial_statement['updated_expense_internet'] -> result() as $field):	

			 $expense_total_internet = $field -> total_expense_amount_internet;
		endforeach;
		foreach($expense_financial_statement['updated_expense_other'] -> result() as $field):	

			 $expense_total_others = $field -> total_expense_amount_others;
		endforeach;
	}
	?>

	
	
	<!--?php
	$total_in = 0;$total_out = 0; $date_wise_total_expense = 0;
	if($financial_statement_info['cash'] -> num_rows() > 0 ||  $financial_statement_info['cheque'] -> num_rows() > 0)
	{
	?>      
	           
	        <!--?php
				$index = 1;
				foreach($financial_statement_info['cash'] -> result() as $field):	
			    $transaction_purpose = $field -> transaction_purpose;
				if($transaction_purpose == 'expense')
				{	
					$date_wise_total_expense += $field -> transaction_amount;
				}				
				$index++;
				endforeach;
			?>
			<!--?php
				foreach($financial_statement_info['cheque'] -> result() as $field):	
				$index = 1;
				$transaction_purpose = $field -> cheque_ref_purpose;
				if($transaction_purpose == 'expense')
				{	
					$date_wise_total_expense += $field -> transaction_amount;
				}
				$index++;
				endforeach;
			?>	   
	           
	           
	           
			<!--?php
				$index = 1;
				$total_in = 0;
				foreach($financial_statement_info['cash'] -> result() as $field):	
				$transaction_type = $field -> transaction_type;
				if($transaction_type == 'in')
				{	
					$total_in += $field -> transaction_amount;
				}				
				$index++;
				endforeach;
			?>
			<!--?php
				foreach($financial_statement_info['cheque'] -> result() as $field):	
				$transaction_type = $field -> transaction_type;
				if($transaction_type == 'in')
				{	
					$total_in += $field -> transaction_amount;
				}
				$index++;
				endforeach;
				
				foreach($financial_statement_info['card'] -> result() as $field):	
				$transaction_type = $field -> transaction_type;
				if($transaction_type == 'in')
				{	
					$total_in += $field -> transaction_amount;
				}
				$index++;
				endforeach;
			?>					
			<!--?php
				$index = 1;
				$total_out = 0; 
				foreach($financial_statement_info['cash'] -> result() as $field):
				$transaction_type = $field -> transaction_type;
				if($transaction_type == 'out')
				{			
					$total_out += $field -> transaction_amount;
				}
				$index++;
				endforeach;
			?>
			<!--?php
				foreach($financial_statement_info['cheque'] -> result() as $field):
					$transaction_type = $field -> transaction_type;
					if($transaction_type == 'out')
					{			
						$total_out += $field -> transaction_amount;
					}
					$index++;
				endforeach;
			?>	
	<?php
	//}
		$i = 1;
		$total_asset = 0;
		foreach($all_stock -> result() as $individual):
			$total_asset += ( $individual -> stock_amount * $individual -> bulk_unit_buy_price );
			$i++;
		endforeach;
	?>
	<!--cash in hand calculation-->
	<?php
		$total_in_amount = 0.00;
		$total_out_amount = 0.00;
		$temp_cash_in_hand_final_amount = 0.00;
		$temp_cash_in_bank_final_amount = 0.00;
		if($cash_status_report_info['total_in_out_cash_status'] -> num_rows() > 0 )
		{
			foreach($cash_status_report_info['total_in_out_cash_status'] -> result() as $field):	
				$total_in_amount = $field -> total_in;
				$total_out_amount = $field -> total_out;
			endforeach;						
									
			$total_in_amount = round($total_in_amount, 2);
			$total_out_amount = round($total_out_amount, 2);
			$temp_cash_in_hand_final_amount = round($total_in_amount - $total_out_amount, 2);
		}
	?>
	<section class="content-2" style="margin:0px 0px 0px 0px;">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="box">
					<div class="box-header with-border" style="background: #0f77ab;">
						<h3 class="box-title" style="color:white;font-family:Helvetica Neue,Helvetica,Arial,sans-serif;">Financial Statement Search</h3>
					</div>
					<div class="box-body">
						<form action ="<?php echo base_url();?>report_controller/specific_date_report_for_financial_statement_1" method="post" enctype="multipart/form-data" id="form_3" class="form-horizontal" autocomplete="off">
							<div class="form-group">
								<label for="inputPassword3" class="col-sm-1 control-label">Single</label>
								<div class="col-sm-2">
									<?php echo form_input(array('type' => 'text','placeholder' => $bd_date , 'name' => "specific_date",'class' => "form-control",'id' => "datep", 'tabindex' => 3, 'title' => "Start Date" ));?>
								</div>
								<label for="inputPassword3" class="col-sm-1 control-label">Duration</label>
								<div class="col-sm-2">
									<?php echo form_input(array('type' => 'text','placeholder' => $bd_date , 'name' => "start_date",'class' => "form-control",'id' => "datepickerrr", 'tabindex' => 3, 'title' => "Start Date" ));?>
								</div>
								<div class="col-sm-2">
									<?php echo form_input(array('type' => 'text','placeholder' => $bd_date , 'name' => "end_date",'class' => "form-control",'id' => "datepickerr", 'tabindex' => 3, 'title' => "End Date" ));?>
								</div>
								<div class="col-sm-4">
									<button type="submit" class="btn btn-success btn-sm" name="search_random" style="width:100px;"><i class="fa fa-fw fa-search"></i> Search</button>
									<button type="reset" id="reset_btn" class="btn btn-warning btn-sm" style="width:100px;"><i class="fa fa-fw fa-refresh"></i> Reset</button>
								</div>
							</div>
						</form>	
					</div>
				</div>
			</div>
		</div>
	</section>			
	<section class="content-2" style="margin:0px 0px 0px 0px;">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="box">
					<div class="box-body">
						<div class="wrap-1">
							<div class="inner_table_2">
								<table class="new_data">
									<tr>
									  <td colspan="1" style="text-align:left;text-indent:5px;font-size:13px;width:7%; font-family:Sans Pro; color:#444;font-weight:bold;">S.Date</td>
									  <td colspan="2" style="overflow: hidden;text-overflow: ellipsis; white-space: nowrap;text-align:left;text-indent:5px;font-size:15px;color:#377ba6"><?php echo date("d-m-Y", strtotime($start_date)).nbs(5); ?></td>
									  <td colspan="1" style="text-align:left;text-indent:5px;font-size:13px;width:7%; font-family:Sans Pro; color:#444;font-weight:bold;">E.Date</td>
									  <td colspan="2" style="overflow: hidden;text-overflow: ellipsis; white-space: nowrap;text-align:left;text-indent:5px;font-size:15px;color:#377ba6"><?php echo date("d-m-Y", strtotime($end_date)); ?></td>
									  <!--td colspan="2" style="overflow: hidden;text-overflow: ellipsis; white-space: nowrap;text-align:left;text-indent:5px;font-size:15px;color:#377ba6"><?php
												echo form_open('report_controller/financial_statement_details_result_view');
												echo form_submit('submit', 'Read More', 'class="btn btn-primary btn-xs" style="color:white;width:100px;"');
												echo form_hidden('start_date',$start_date);
												echo form_hidden('end_date',$end_date);
												echo form_close();
											?></td-->
									  <td colspan="2" style="text-align:left;text-indent:5px;font-size:15px;color:#377ba6"><?php echo anchor('report_controller/print_financial_report_1/'.$start_date.'/'.$end_date, img('images/print.png'),' target="_blank" title="Print Financial Report"');?></td>
									</tr>
								</table>
							</div>
						</div>
						<div class="inner_table_222">
						<div class = "Field_Container_Box" style="margin: 10px 0px 0px 60px; width: 610px;" >
							<p style="text-indent:28px; margin-top:0px; font-size:12px;">Total Sale</p>
								<?php 
									echo '<div class = "h8" style="margin:0px 0px 0px 108px;">'.nbs(10).'<big style = "font-size: 11px; font-weight:bold;"> &#2547; </big> ';
									$sale_price_info1 = round(($sale_price_info), 2);
									if($sale_price_info1 == round($sale_price_info1, 0))
										$sale_price_info1 = $sale_price_info1.'.00';
									else if(round($sale_price_info1, 1) == round($sale_price_info1, 2))
										$sale_price_info1 = $sale_price_info1.'0';
									echo $sale_price_info1.'</div>'; 
								?>
						</div>
						<div class = "Field_Container_Box" style="margin: 10px 0px 0px 60px; width: 610px;" >
							<p style="text-indent:28px; margin-top:0px; font-size:12px;">Total Sale Return</p>
								<?php 
									echo '<div class = "h8" style="margin:0px 0px 0px 108px;">'.nbs(10).'<big style = "font-size: 11px; font-weight:bold;"> &#2547; </big> ';
									$sale_return_info1 = round(($sale_return_info), 2);
									if($sale_return_info1 == round($sale_return_info1, 0))
										$sale_return_info1 = $sale_return_info1.'.00';
									else if(round($sale_return_info1, 1) == round($sale_return_info1, 2))
										$sale_return_info1 = $sale_return_info1.'0';
									echo $sale_return_info1.'</div>'; 
								?>
						</div>
						<div class = "Field_Container_Box" style="margin: 10px 0px 0px 60px; width: 610px;" >
							<p style="text-indent:28px; margin-top:0px; font-size:12px;">Total Delivery Charge</p>
								<?php 
									echo '<div class = "h8" style="margin:0px 0px 0px 108px;">'.nbs(10).'<big style = "font-size: 11px; font-weight:bold;"> &#2547; </big> ';
									$delivery_charge_info1 = round(($delivery_charge_info), 2);
									if($delivery_charge_info1 == round($delivery_charge_info1, 0))
										$delivery_charge_info1 = $delivery_charge_info1.'.00';
									else if(round($delivery_charge_info1, 1) == round($delivery_charge_info1, 2))
										$delivery_charge_info1 = $delivery_charge_info1.'0';
									echo $delivery_charge_info1.'</div>'; 
								?>
						</div>
						<div class = "Field_Container_Box" style="margin: 10px 0px 0px 60px; width: 610px;" >
							<p style="text-indent:28px; margin-top:0px; font-size:12px;">Revenue</p>
								<?php 
									echo '<div class = "h8" style="margin:0px 0px 0px 108px;">'.nbs(10).'<big style = "font-size: 11px; font-weight:bold;"> &#2547; </big> ';
									$today_sale = round(($sale_price_info - $sale_return_info + $delivery_charge_info), 2);
									if($today_sale == round($today_sale, 0))
										$today_sale = $today_sale.'.00';
									else if(round($today_sale, 1) == round($today_sale, 2))
										$today_sale = $today_sale.'0';
									echo $today_sale.'</div>'; 
								?>
						</div>
						<div id = "mid_box_left" style="width:496px;margin: 0px 0px 0px 64px;" >
							<div class = "TitleBox">
								<div class ="pp">Cost of Sales</div>
							</div>

								<div class = "Field_Container_Box" >
									<div class = "purpose_controller"> Opening Inventory</div>	
									<?php 
										echo '<div class = "h8">'.nbs(10).'<big style = "font-size: 11px; font-weight:bold;"> &#2547; </big> '.$opening_stock.'</div>'; 
									?> 
								</div>
								<div class = "Field_Container_Box" >
									<div class = "purpose_controller">Purchase</div>
									<?php 
										echo '<div class = "h8">'.nbs(10).'<big style = "font-size: 11px; font-weight:bold;"> &#2547; </big> ';
										$result = round($purchase_total_amount, 2);
										if($result == round($result, 0))
											$result = $result.'.00';
										else if(round($result, 1) == round($result, 2))
											$result = $result.'0';
										echo $result.'</div>'; 
									?> 
								</div>
									
								<div class = "Field_Container_Box" >
									<div class = "purpose_controller">Carriage Inward</div>
									<?php 
										echo '<div class = "h8">'.nbs(10).'<big style = "font-size: 11px; font-weight:bold;"> &#2547; </big> ';
										$result = round($purchase_total_amount_for_transport1, 2);
										if($result == round($result, 0))
											$result = $result.'.00';
										else if(round($result, 1) == round($result, 2))
											$result = $result.'0';
										echo $result.'</div>'; 
									?>  
								</div>
								<div class = "Field_Container_Box" >
									<p style="width:217px; margin-top:0px; font-size:12px;">Cost of Goods Available for Sale</p>
									<?php
										echo '<div class = "h8" style="margin:0px 0px 0px 54px;">'.nbs(6).'<big style = "font-size: 11px; font-weight:bold;"> &#2547; </big> ';
										$cost_sale = round(($opening_stock + $purchase_total_amount + $purchase_total_amount_for_transport1), 3);
										if($cost_sale == round($cost_sale, 0))
											$cost_sale = $cost_sale.'.00';
										else if(round($cost_sale, 1) == round($cost_sale, 2))
											$cost_sale = $cost_sale.'0';
										echo $cost_sale.'</div>' ;
									?>
								</div>
								<div class = "Field_Container_Box">
									<div class = "purpose_controller"> (-) Closing Stock.</div>	
									<?php 
										echo '<div class = "h8">'.nbs(10).'<big style = "font-size: 11px; font-weight:bold;"> &#2547; </big> '.$closing_stock.'</div>'; 
									?>
								</div>
								<div class = "Field_Container_Box"  style="margin: 0px 0px 0px 5px; width: 610px;"  >
									<p style="font-size: 12px; margin: 0px 0px 0px 2px; width: 193px;">Cost of Goods Sold</p>
									<?php
										echo '<div class = "h8" style="margin:0px 0px 0px 187px;">'.nbs(6).'<big style = "font-size: 11px; font-weight:bold;"> &#2547; </big> ';
										
										
										$result2 = round(($cost_sale - $closing_stock), 2);
										
										if($result2 == round($result2, 0))
											$result2 = $result2.'.00';
										else if(round($result2, 1) == round($result2, 2))
											$result2 = $result2;
										echo $result2.'</div>' ;
									?>
								</div>
								<div class = "Field_Container_Box"  style="margin: 2px 0px 0px 5px; width: 610px;"  > 
									<?php 
										$result3 = round(($today_sale - $result2), 2);
								
										if($result3 != 0 && $result2 != 0)
										{
											$profit_in_percent = ($result3/$result2)*100;
										}
										else
										{
											$profit_in_percent = 0;
										}
										if($result3 <0 ){
											echo '<p style="text-indent:6px; margin-top:0px; font-size:12px; color:red;">Gross Loss</p>';
											
											echo '<div class = "h8" style="margin:0px 0px 0px 108px; color:red;"><big style = "font-size: 11px; font-weight:bold;"> &#2547; </big> ';

										
										
										if($result3 == round($result3, 0))
											$result3 = $result3.'.00';
										else if(round($result3, 1) == round($result3, 2))
											$result3 = $result3;
										echo $result3.'</div>';
											
										}
										else if($result3>=0){
											echo '<p style="text-indent:6px; margin-top:0px; font-size:12px; color:green;">Gross Profit</p>';
											
											echo '<div class = "h8" style="margin:0px 0px 0px 108px;color:green;"><big style = "font-size: 11px; font-weight:bold;"> &#2547; </big> ';

										
										
										if($result3 == round($result3, 0))
											$result3 = $result3.'.00';
										else if(round($result3, 1) == round($result3, 2))
											$result3 = $result3;
										echo $result3.'</div>';
										}
										
									?>
								</div>
								<div class = "Field_Container_Box"  style="margin: 0px 0px 0px 5px; width: 610px;"  >
									<p style="font-size: 12px; margin: 0px 0px 0px 2px; width: 193px;">Comission</p>
									<?php
										echo '<div class = "h8" style="margin:0px 0px 0px 187px;">'.nbs(6).'<big style = "font-size: 11px; font-weight:bold;"> &#2547; </big> ';
										
										
										$total_comission = round(($date_wise_total_comission), 2);
										
										if($total_comission == round($total_comission, 0))
											$total_comission = $total_comission.'.00';
										else if(round($total_comission, 1) == round($total_comission, 2))
											$total_comission = $total_comission;
										echo $total_comission.'</div>' ;
									?>
								</div>
								<div class = "Field_Container_Box"  style="margin: 0px 0px 0px 5px; width: 610px;"  >
									<p style="font-size: 12px; margin: 0px 0px 0px 2px; width: 193px;">Total Profit</p>
									<?php
										echo '<div class = "h8" style="margin:0px 0px 0px 187px;">'.nbs(6).'<big style = "font-size: 11px; font-weight:bold;"> &#2547; </big> ';
										
										
										$total_comission = round(($date_wise_total_comission + $result3), 2);
										
										if($total_comission == round($total_comission, 0))
											$total_comission = $total_comission.'.00';
										else if(round($total_comission, 1) == round($total_comission, 2))
											$total_comission = $total_comission;
										echo $total_comission.'</div>' ;
									?>
								</div>
						</div>	 <!--End of mid box left-->
						
						
						<div id = "mid_box_left" style="width:496px;margin: 9px 0px 0px 64px;" >
							<div class = "TitleBox">
								<div class ="pp">Operating Expenses</div>
							</div>

								<div class = "Field_Container_Box" >
									<div class = "purpose_controller">Salary</div>
									<?php 
										echo '<div class = "h8">'.nbs(10).'<big style = "font-size: 11px; font-weight:bold;"> &#2547; </big> ';
										$salary_all = round($expense_total_salary, 2);
										if($salary_all == round($salary_all, 0))
											$salary_all = $salary_all.'.00';
										else if(round($salary_all, 1) == round($salary_all, 2))
											$salary_all = $salary_all;
										echo $salary_all.'</div>'; 
									?> 
								</div>
								<div class = "Field_Container_Box" >
									<div class = "purpose_controller">Rent</div>
									<?php 
										echo '<div class = "h8">'.nbs(10).'<big style = "font-size: 11px; font-weight:bold;"> &#2547; </big> ';
										$rent_all = round($expense_total_rent, 2);
										if($rent_all == round($rent_all, 0))
											$rent_all = $rent_all.'.00';
										else if(round($rent_all, 1) == round($rent_all, 2))
											$rent_all = $rent_all;
										echo $rent_all.'</div>'; 
									?> 
								</div>
									
								<div class = "Field_Container_Box" >
									<div class = "purpose_controller">Electricity</div>
									<?php 
										echo '<div class = "h8">'.nbs(10).'<big style = "font-size: 11px; font-weight:bold;"> &#2547; </big> ';
										$electricity_all = round($expense_total_electric, 2);
										if($electricity_all == round($electricity_all, 0))
											$electricity_all = $electricity_all.'.00';
										else if(round($electricity_all, 1) == round($electricity_all, 2))
											$electricity_all = $electricity_all;
										echo $electricity_all.'</div>'; 
									?>  
								</div>
								<div class = "Field_Container_Box" >
									<div class = "purpose_controller">Internet</div>
									<?php 
										echo '<div class = "h8">'.nbs(10).'<big style = "font-size: 11px; font-weight:bold;"> &#2547; </big> ';
										$internet_all = round($expense_total_internet, 2);
										if($internet_all == round($internet_all, 0))
											$internet_all = $internet_all.'.00';
										else if(round($internet_all, 1) == round($internet_all, 2))
											$internet_all = $internet_all;
										echo $internet_all.'</div>'; 
									?>  
								</div>
								<div class = "Field_Container_Box" >
									<div class = "purpose_controller"><a href="#" style="text-decoration:none;" title="Details Expense View" class='modal_load_2' valuu ="<?php echo $start_date; ?>" valuuu ="<?php echo $end_date; ?>" data-toggle="modal" data-target="#add_shop">Others</a></div>
									<?php 
										echo '<div class = "h8">'.nbs(10).'<big style = "font-size: 11px; font-weight:bold;"> &#2547; </big> ';
										$others_all = round($expense_total_others, 2);
										if($others_all == round($others_all, 0))
											$others_all = $others_all.'.00';
										else if(round($others_all, 1) == round($others_all, 2))
											$others_all = $others_all;
										echo $others_all.'</div>'; 
									?>  
								</div>
								
								<div class = "Field_Container_Box"  style="margin: 0px 0px 0px 5px; width: 610px;"  >
									<p style="margin-top: 0px; font-size: 12px; width: 183px;">Operating Expenses</p>
									<?php
										echo '<div class = "h8" style="margin:0px 0px 0px 199px;">'.nbs(6).'<big style = "font-size: 11px; font-weight:bold;"> &#2547; </big> ';
										
										
										$result22 = round(($salary_all + $rent_all + $electricity_all + $internet_all + $others_all), 2);
										
										if($result22 == round($result22, 0))
											$result22 = $result22.'.00';
										else if(round($result22, 1) == round($result22, 2))
											$result22 = $result22;
										echo $result22.'</div>' ;
									?>
								</div>
								<div class = "Field_Container_Box"  style="margin: 2px 0px 0px 5px; width: 610px;"  > 
									<?php 
							
										$result33 = round(($total_comission - $result22), 2);
										
										if($result33 != 0){
										$net_profit_in_percent = ($result2/$result33)*100;
										}
										else{
										$net_profit_in_percent = 0;
										}
										
										if($result33 <0 ){
											echo '<p style="text-indent:6px; margin-top:0px; font-size:12px; color:red;">Net Loss</p>';
											echo '<div class = "h8" style="margin:0px 0px 0px 108px; color:red;"><big style = "font-size: 11px; font-weight:bold;"> &#2547; </big> ';
											if($result33 == round($result33, 0))
												$result33 = $result33.'.00';
											else if(round($result33, 1) == round($result33, 2))
												$result33 = $result33;
											echo $result33.'</div>';
										}
										else if($result33>=0){
											echo '<p style="text-indent:6px; margin-top:0px; font-size:12px; color:green;">Net Profit</p>';
											
											echo '<div class = "h8" style="margin:0px 0px 0px 108px;color:green;"><big style = "font-size: 11px; font-weight:bold;"> &#2547; </big> ';
											if($result33 == round($result33, 0))
												$result33 = $result33.'.00';
											else if(round($result33, 1) == round($result33, 2))
												$result33 = $result33;
											echo $result33.'</div>';
											
										}
										
										 
									?>
								</div>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>		
</div>
<div class="modal fade" id="add_shop" style="z-index: 999999;background: transparent !important;"  data-backdrop="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title"><i class="fa fa-plus"></i> Details Expense</h4>
      </div>
      <div class="modal-body">
        <div class="wrap-11">
			<table class="head">
				<tr>
					<td style="font-family:Helvetica Neue,Helvetica,Arial,sans-serif;width:20px;"><center>Expense Type</center></td>
					<td style="font-family:Helvetica Neue,Helvetica,Arial,sans-serif;width:14px;"><center>Amount</center></td>
					<td style="font-family:Helvetica Neue,Helvetica,Arial,sans-serif;width:14px;"><center>Date</center></td>
				</tr>
			</table>
			<div class="inner_table22">
				<table class="new_data_2" id="expense_details"></table>
			</div>
		</div>
        
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
$('.modal_load_2').click(function(){
		var start_date = $(this).attr('valuu');
		var end_date = $(this).attr('valuuu');
		var outputs2="";
		$.ajax({
			url: '<?php echo base_url();?>report_controller/get_other_expense_details', 
			dataType:'json',
			method: 'POST',
			data: {'start_date' : start_date,'end_date' : end_date},
			success: function(result){
				for (i = 0; i < result.length; i++) 
				{
					outputs2+='<tr class="even pointer"><td style="font-family:Helvetica Neue,Helvetica,Arial,sans-serif;width:20px;"><center>'+result[i].type_type+'</center></td><td style="font-family:Helvetica Neue,Helvetica,Arial,sans-serif;width:14px;"><center>'+result[i].expense_amount+'</center></td><td style="font-family:Helvetica Neue,Helvetica,Arial,sans-serif;width:14px;"><center>'+result[i].expense_doc+'</center></td></tr>';
					
				}
				$("#expense_details").html(outputs2);
			}
			
		});
	});
</script>
>>>>>>> 126491c5b956413b4ebc35a0628acbc4d375a4e7
<?php $this -> load -> view('include/footer'); ?>	