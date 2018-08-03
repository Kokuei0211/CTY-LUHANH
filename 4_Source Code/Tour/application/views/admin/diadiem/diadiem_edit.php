<script type="text/javascript">
$( document ).ready(function() {
	$('#cancel').on({
		'click': function(){
			window.location.href = "<?php echo base_url()."admin/diadiem"?>";
		}
	});
})
</script>
<div class="">
	<div class="content-wrapper">
		<div class="content-heading">
         	 <!-- END Language list--><a style="color: #929292; cursor: pointer;" href="<?php echo base_url()?>admin/diadiem">Địa Điểm</a> <a style="color: #fcba2f;"> > Sửa Địa Điểm</a>
   		</div>
	</div>
	<div class="row">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="col-sm-3">
				</div>
				<div class="col-sm-6">
					<form id="form_create_dd" method="post" enctype="multipart/form-data" data-parsley-validate="">
						<div class="row" style="text-align: center;">
							<label style="color: #555555;text-decoration: underline" class="h4 text-center">Thông Tin Địa Điểm</label>
						</div>
						<div class="row" style="margin: 5px 20px">
							<div class="div_margin_bottom">
	                        	<label class="row control-label" for="inputContact11">Mã DD</label>
	                            <div class="row">
	                            	<p class="form-control"><?php echo $dia_diem->MA_DD?> </p>
		                       	</div>
	                       	</div>
							<div class="div_margin_bottom">
	                        	<label class="row control-label" for="inputContact11">Mã Tỉnh</label>
	                            <div class="row">
	                            	<input class="form-control" required type="number" name="ma_tinh" value="<?php echo $dia_diem->MA_TINH?>">
		                       	</div>
	                       	</div>
	                       	<div class="div_margin_bottom">
	                        	<label class="row control-label" for="inputContact11">Địa chỉ</label>
	                            <div class="row">
	                            	<input type="text" id="address_from" name="dia_diem" class="form-control" required="required" value="<?php echo $dia_diem->DIA_CHI?>">
		                       	</div>
	                       	</div>
	                       	<div class="div_margin_bottom">
	                        	<label class="row control-label" for="inputContact11">Mô tả</label>
	                            <div class="row">
	                            	<textarea row="8" required maxlength="1000" name="mo_ta" class="form-control"><?php echo $dia_diem->MO_TA?></textarea>
		                       	</div>
	                       	</div>
	                       	<div class="" style="margin-top:20px">
	                       		<div class="col-sm-6 center_item">
	                       			<input class="btn btn-default" value="Cancel" id="cancel" type="button">
	                       		</div> 
	                       		<div class="col-sm-6 center_item">
	                       			<input name="Edit_DiaDiem" class="btn btn-info" value="Save" type="submit">
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