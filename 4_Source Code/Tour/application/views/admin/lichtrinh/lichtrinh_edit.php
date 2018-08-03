<script type="text/javascript">
$( document ).ready(function() {
	$('#cancel').on({
		'click': function(){
			window.location.href = "<?php echo base_url()."admin/lichtrinh"?>";
		}
	});
})

</script>
<div class="">
	<div class="content-wrapper">
		<div class="content-heading">
         	 <!-- END Language list--><a style="color: #929292; cursor: pointer;" href="<?php echo base_url()?>admin/lichtrinh">Lịch Trình</a> <a style="color: #fcba2f;"> > Sửa Lịch Trình</a>
   		</div>
	</div>
	<div class="row">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="col-sm-3">
				</div>
				<div class="col-sm-6">
					<form method="post" enctype="multipart/form-data" data-parsley-validate="">
						<div class="row" style="text-align: center;">
							<label style="color: #555555;text-decoration: underline" class="h4 text-center">Thông Tin Lịch Trình</label>
						</div>
						<div class="row" style="margin: 5px 20px">
							<div class="div_margin_bottom">
								<label class="row control-label" for="inputContact11">Mã Tour</label>
	                            <div class="row">
	                            	<input class="form-control" value="<?php echo $lictrinh->MA_TOUR?>" readonly >
		                       	</div>
							</div>
							<div class="div_margin_bottom" >
								<label class="row control-label" for="inputContact11">Ngày</label>
	                            <div class="row">
	                            	<input class="form-control" value="<?php echo $lictrinh->DAY?>" readonly >
		                       	</div>
							</div>
							<div class="div_margin_bottom" >
								<label class="row control-label" for="inputContact11">Thời Gian</label>
	                            <div class="row">
	                            	<input class="form-control" name="thoi_gian" type="time" required value="<?php echo $lictrinh->THOI_GIAN?>" >
		                       	</div>
							</div>
							<div class="div_margin_bottom" >
								<label class="row control-label" for="inputContact11">Địa Điểm Du Lịch</label>
	                            <div class="row">
	                            	<input class="form-control" name="dd_lt" type="text" required value="<?php echo $lictrinh->DD_DULICH?>" >
		                       	</div>
							</div>
	                       	<div class="" style="margin-top:20px">
	                       		<div class="col-sm-6 center_item">
	                       			<input class="btn btn-default" id="cancel" value="Cancel" type="button">
	                       		</div> 
	                       		<div class="col-sm-6 center_item">
	                       			<input name="Edit_LT" class="btn btn-info" value="Save" type="submit">
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