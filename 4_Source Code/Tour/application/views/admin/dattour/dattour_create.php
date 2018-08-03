<script type="text/javascript">
$( document ).ready(function() {
	$('#cancel').on({
		'click': function(){
			window.location.href = "<?php echo base_url()."admin/dattour"?>";
		}
	});
})

</script>
<div class="">
	<div class="content-wrapper">
		<div class="content-heading">
         	 <!-- END Language list--><a style="color: #929292; cursor: pointer;" href="<?php echo base_url()?>admin/dattour">Đặt Tour</a>
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
							<label style="color: #555555;text-decoration: underline" class="h4 text-center">Thông Tin Đặt Tour</label>
						</div>
						<div class="row" style="margin: 5px 20px">
							<div class="div_margin_bottom">
								<label class="row control-label" for="inputContact11">Khách Hàng</label>
	                            <div class="row">
	                            	<select name="kh_dt" class="form-control" required>
	                            		<option>Selected</option>
	                            		<?php for ($i = 0; $i < count($list_kh); $i++) {?>
	                            		<option value="<?php echo $list_kh[$i]->MA_KH?>"><?php echo $list_kh[$i]->HO_TEN_KH?></option>
	                            		<?php }?>
	                            	</select>
		                       	</div>
							</div>
							<div class="div_margin_bottom">
								<label class="row control-label" for="inputContact11">Tour</label>
	                            <div class="row">
	                            	<select name="tour_dt" class="form-control" required>
	                            		<option>Selected</option>
	                            		<?php for ($i = 0; $i < count($list_tour); $i++) {?>
	                            		<option value="<?php echo $list_tour[$i]->MA_TOUR?>"><?php echo $list_tour[$i]->TEN_TOUR?></option>
	                            		<?php }?>
	                            	</select>
		                       	</div>
							</div>
							<div class="div_margin_bottom">
	                        	<label class="row control-label" for="inputContact11">Số Lượng</label>
	                            <div class="row">
	                            	<input class="form-control" required type="number" name="so_luong">
		                       	</div>
	                       	</div>
	                       	<div class="div_margin_bottom">
	                        	<label class="row control-label" for="inputContact11">Ghi Chú</label>
	                            <div class="row">
	                            	<input class="form-control" required type="text" name="ghi_chu">
		                       	</div>
	                       	</div>
	                       
	                       	<div class="" style="margin-top:20px">
	                       		<div class="col-sm-6 center_item">
	                       			<input class="btn btn-default" id="cancel" value="Cancel" type="button">
	                       		</div> 
	                       		<div class="col-sm-6 center_item">
	                       			<input name="Create_DatTour" class="btn btn-info" value="Create" type="submit">
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