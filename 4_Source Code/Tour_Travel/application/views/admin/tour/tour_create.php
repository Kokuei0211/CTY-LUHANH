<script type="text/javascript">
</script>
<div class="">
	<div class="content-wrapper">
		<div class="content-heading">
         	 <!-- END Language list--><a style="color: #929292; cursor: pointer;" href="<?php echo base_url()?>admin/tour">Tour</a> <a style="color: #fcba2f;"> > Add Tour</a>
   		</div>
	</div>
	<div class="row">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="col-sm-3">
				</div>
				<div class="col-sm-6">
					<form id="form_create_tour" method="post" enctype="multipart/form-data" data-parsley-validate="">
						<input type="submit" style="display: none" name="staff_register_account" id="staff_register_account">
						<div class="row" style="text-align: center;">
							<label style="color: #555555;text-decoration: underline" class="h4 text-center">Tour Info</label>
						</div>
						<div class="row" style="margin: 5px 20px">
							<div class="div_margin_bottom">
	                        	<label class="row control-label" for="inputContact11">Name Tour</label>
	                            <div class="row">
	                            	<input class="form-control" required type="text" name="title_tour">
		                       	</div>
	                       	</div>
	                       	<div class="div_margin_bottom">
	                        	<label class="row control-label" for="inputContact11">Address From</label>
	                            <div class="row">
	                            	<input type="text" id="address_from" name="address_from" class="form-control" required="required">
		                       	</div>
	                       	</div>
	                       	<div class="div_margin_bottom">
	                        	<label class="row control-label" for="inputContact11">DateTime From</label>
	                            <div class="row">
	                            	<input type="text" id="date_from" name="date_from" class="form-control" required="required">
		                       	</div>
	                       	</div>
	                       	<div class="div_margin_bottom">
	                        	<label class="row control-label" for="inputContact11">Address To</label>
	                            <div class="row">
	                            	<input type="text" id="address_to" name="address_to" class="form-control" required="required">
		                       	</div>
	                       	</div>
	                       	<div class="div_margin_bottom">
	                        	<label class="row control-label" for="inputContact11">DateTime To</label>
	                            <div class="row">
	                            	<input type="text" id="date_to" name="date_to" class="form-control" required="required">
		                       	</div>
	                       	</div>
	                       	<div id="div_email" class="row"></div>
	                       	<div class="div_margin_bottom">
	                        	<label class="row control-label" for="inputContact11">Price</label>
	                            <div class="row">
	                            	<input type="password" id="price" name="price" class="form-control" required="required" placeholder="Min 6 Alphanumeric" required pattern=".{6,}" title="Min 6 Alphanumeric">
		                       	</div>
	                       	</div>
	                       	<div class="div_margin_bottom">
	                        	<label class="row control-label" for="inputContact11">Car Number</label>
	                            <div class="row">
	                            	<input type="text" id="car_number" name="car_number" class="form-control" required="required">
		                       	</div>
	                       	</div>
	                       	<div class="" style="margin-top:20px">
	                       		<div class="col-sm-6 center_item">
	                       			<input class="btn btn-default" value="Cancel" type="button">
	                       		</div> 
	                       		<div class="col-sm-6 center_item">
	                       			<input name="Create_Tour" class="btn btn-info" value="Create" type="submit">
	                       		</div>
	                       	</div>
						</div>
					</form>
				</div>
				<div class="col-sm-3">
				</div>
       		</div>
		</div>
	</div>
</div>