<script type="text/javascript">
$( document ).ready(function() {
	$('#cancel').on({
		'click': function(){
			window.location.href = "<?php echo base_url()."admin/xe"?>";
		}
	});
})
</script>
<div class="">
	<div class="content-wrapper">
		<div class="content-heading">
         	 <!-- END Language list--><a style="color: #929292; cursor: pointer;" href="<?php echo base_url()?>admin/xe">Xe</a> <a style="color: #fcba2f;"> > Tạo Xe</a>
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
							<label style="color: #555555;text-decoration: underline" class="h4 text-center">Thông Tin Xe</label>
						</div>
						<div class="row" style="margin: 5px 20px">
							<?php include dirname(__FILE__) . '/../message.php';?>
							<div class="div_margin_bottom">
	                        	<label class="row control-label" for="inputContact11">Biển Số Xe</label>
	                            <div class="row">
	                            	<input type="number" name="ma_xe" class="form-control" required="required" value="<?php echo $ma_xe?>">
		                       	</div>
	                       	</div>
							<div class="div_margin_bottom">
	                        	<label class="row control-label" for="inputContact11">Loại Xe</label>
	                            <div class="row">
	                            	<input class="form-control" required type="text" name="loai_xe" value="<?php echo $loai_xe?>">
		                       	</div>
	                       	</div>
	                       	<div class="div_margin_bottom">
	                        	<label class="row control-label" for="inputContact11">Mẫu Xe</label>
	                            <div class="row">
	                            	<input type="text" name="mau_xe" class="form-control" required="required" value="<?php echo $mau_xe?>">
		                       	</div>
	                       	</div>
	                       	<div class="div_margin_bottom">
	                        	<label class="row control-label" for="inputContact11">Số Chổ</label>
	                            <div class="row">
	                            	<input type="number" name="so_cho" class="form-control" required="required" value="<?php echo $so_cho?>">
		                       	</div>
	                       	</div>
	                       	<div class="div_margin_bottom">
	                        	<label class="row control-label" for="inputContact11">Ngày Bảo Trì</label>
	                            <div class="row">
	                            	<input type="date" name="ngay_btri" class="form-control" required="required" value="<?php echo $ngay_btri?>">
		                       	</div>
	                       	</div>
	                       	<div class="div_margin_bottom">
	                        	<label class="row control-label" for="inputContact11">Tài Xế</label>
	                            <div class="row">
	                            	<input type="text" name="tai_xe" class="form-control" required="required" value="<?php echo $tai_xe?>">
		                       	</div>
	                       	</div>
	                       	<div class="" style="margin-top:20px">
	                       		<div class="col-sm-6 center_item">
	                       			<input class="btn btn-default" value="Cancel" id="cancel" type="button">
	                       		</div> 
	                       		<div class="col-sm-6 center_item">
	                       			<input name="Create_Xe" class="btn btn-info" value="Create" type="submit">
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