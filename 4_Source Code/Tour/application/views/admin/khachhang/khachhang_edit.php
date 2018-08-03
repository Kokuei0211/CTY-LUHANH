<script type="text/javascript">
$( document ).ready(function() {
	$('#cancel').on({
		'click': function(){
			window.location.href = "<?php echo base_url()."admin/khachhang"?>";
		}
	});
})
</script>
<div class="">
	<div class="content-wrapper">
		<div class="content-heading">
         	 <!-- END Language list--><a style="color: #929292; cursor: pointer;" href="<?php echo base_url()?>admin/khachhang">Khách Hàng</a> <a style="color: #fcba2f;"> > Sửa thông tin khách hàng</a>
   		</div>
	</div>
	<div class="row">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="col-sm-3">
				</div>
				<div class="col-sm-6">
					<form id="form_create_kh" method="post" enctype="multipart/form-data" data-parsley-validate="">
						<div class="row" style="text-align: center;">
							<label style="color: #555555;text-decoration: underline" class="h4 text-center">Thông Tin Khách hàng</label>
						</div>
						<div class="row" style="margin: 5px 20px">
							<div class="div_margin_bottom">
	                        	<label class="row control-label" for="inputContact11">Mã KH</label>
	                            <div class="row">
	                            	<p class="form-control"><?php echo $khach_hang->MA_KH?> </p>
		                       	</div>
							</div>
							<div class="div_margin_bottom">
	                        	<label class="row control-label" for="inputContact11">Họ và Tên</label>
	                            <div class="row">
	                            	<input type="text" id="fullname_from" name="ho_ten_kh" class="form-control" required="required" value="<?php echo $khach_hang->HO_TEN_KH?>">
		                       	</div>
	                       	</div>
							<div class="div_margin_bottom">
	                        	<label class="row control-label" for="inputContact11">CMND</label>
	                            <div class="row">
	                            	<input class="form-control" required type="number" name="cmnd" value="<?php echo $khach_hang->CMND?>">
		                       	</div>
							</div>
							<div class="div_margin_bottom">
	                        	<label class="row control-label" for="inputContact11">SĐT</label>
	                            <div class="row">
	                            	<input class="form-control" required type="number" name="sdt" value="<?php echo $khach_hang->SDT?>">
		                       	</div>
							</div>
							<div class="div_margin_bottom">
	                        	<label class="row control-label" for="inputContact11">Email</label>
	                            <div class="row">
	                            	<input type="text" id="email_from" name="email" class="form-control" required="required" value="<?php echo $khach_hang->Email?>">
		                       	</div>
	                       	</div>
	                       	<div class="" style="margin-top:20px">
							    <div class="col-sm-6 center_item">
	                       			<input class="btn btn-default" value="Cancel" id="cancel" type="button">
	                       		</div> 
	                       		<div class="col-sm-6 center_item">
	                       			<input name="Edit_KhachHang" class="btn btn-info" value="Save" type="submit">
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