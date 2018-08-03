<script type="text/javascript">
$( document ).ready(function() {
	$('#cancel').on({
		'click': function(){
			window.location.href = "<?php echo base_url()."admin/tour"?>";
		}
	});
})

function addImage(item) {
	if (item.files && item.files[0]) {
		var reader = new FileReader();              
        reader.onload = function ( e )
        {
        	var img = e.target.result;
        	$('#image_tour').attr('src', img);
        };
        reader.readAsDataURL(item.files[0]);
	}
}
</script>
<div class="">
	<div class="content-wrapper">
		<div class="content-heading">
         	 <!-- END Language list--><a style="color: #929292; cursor: pointer;" href="<?php echo base_url()?>admin/tour">Tour</a> <a style="color: #fcba2f;"> > Edit Tour</a>
   		</div>
	</div>
	<div class="row">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="col-sm-3">
				</div>
				<div class="col-sm-6">
					<form  method="post" enctype="multipart/form-data" data-parsley-validate="">
						<input type="submit" style="display: none" name="staff_register_account" id="staff_register_account">
						<div class="row" style="text-align: center;">
							<label style="color: #555555;text-decoration: underline" class="h4 text-center">Tour Info</label>
						</div>
						<div class="row" style="margin: 5px 20px">
							<div class="div_margin_bottom">
								<label class="row control-label" for="inputContact11">Picture</label>
	                            <div class="row">
	                            	<input <?php if (empty($tour->Cover)) { echo 'selected'; }?> required type="file" name="picture_tour" accept="image/png,image/jpg,image/jpeg" onchange="addImage(this)" >
	                            	<img id="image_tour" alt="" style="max-width: 200px;max-height: 100%;" src="<?php echo base_url().$tour->Cover?>">
		                       	</div>
							</div>
							<div class="div_margin_bottom">
	                        	<label class="row control-label" for="inputContact11">Name Tour</label>
	                            <div class="row">
	                            	<input class="form-control" required type="text" name="title_tour" value="<?php echo $tour->TEN_TOUR?>">
		                       	</div>
	                       	</div>
	                       	<div class="div_margin_bottom">
	                        	<label class="row control-label" for="inputContact11">Address From</label>
	                            <div class="row">
	                            	<select name="address_from" class="form-control" required="required">
	                            		<?php for ($i=0; $i<count($listDD); $i++) 
	                            		{?>
	                            		<option <?php echo $tour->DD_DI == $listDD[$i]->MA_DD? 'selected' : '';?> value="<?php echo $listDD[$i]->MA_DD?>"><?php echo $listDD[$i]->DIA_CHI?></option>
	                            		<?php 
	                            		}?>
	                            	</select>
		                       	</div>
	                       	</div>
	                       	<div class="div_margin_bottom">
	                        	<label class="row control-label" for="inputContact11">DateTime From</label>
	                            <div class="row">
	                            	<input type="date" id="date_from" name="date_from" class="form-control" required="required" value="<?php echo $tour->NGAY_DI?>">
		                       	</div>
	                       	</div>
	                       	<div class="div_margin_bottom">
	                        	<label class="row control-label" for="inputContact11">Address To</label>
	                            <div class="row">
	                            	<select name="address_to" class="form-control" required="required">
	                            		<?php for ($i=0; $i<count($listDD); $i++) 
	                            		{?>
	                            		<option  <?php echo $tour->DD_DEN == $listDD[$i]->MA_DD? 'selected' : '';?> value="<?php echo $listDD[$i]->MA_DD?>"><?php echo $listDD[$i]->DIA_CHI?></option>
	                            		<?php 
	                            		}?>
	                            	</select>
		                       	</div>
	                       	</div>
	                       	<div class="div_margin_bottom">
	                        	<label class="row control-label" for="inputContact11">DateTime To</label>
	                            <div class="row">
	                            	<input type="date" id="date_to" name="date_to" class="form-control" required="required" value="<?php echo $tour->NGAY_VE?>">
		                       	</div>
	                       	</div>
	                       	<div class="div_margin_bottom">
	                        	<label class="row control-label" for="inputContact11">Price</label>
	                            <div class="row">
	                            	<input type="number" id="price" name="price" class="form-control" required="required" required value="<?php echo $tour->GIA_TOUR?>">
		                       	</div>
	                       	</div>
	                       	<div class="div_margin_bottom">
	                        	<label class="row control-label" for="inputContact11">Car Number</label>
	                            <div class="row">
	                            	<select name="car_number" class="form-control" required="required">
	                            		<option>Selected</option>
	                            		<?php for ($i=0; $i<count($listXe); $i++) 
	                            		{?>
	                            		<option <?php echo $tour->MA_XE == $listXe[$i]->MA_XE? 'selected' : '';?> value="<?php echo $listXe[$i]->MA_XE?>"><?php echo $listXe[$i]->MA_XE?></option>
	                            		<?php 
	                            		}?>
	                            	</select>
		                       	</div>
	                       	</div>
	                       	<div class="" style="margin-top:20px">
	                       		<div class="col-sm-6 center_item">
	                       			<input class="btn btn-default" id="cancel" value="Cancel" type="button">
	                       		</div> 
	                       		<div class="col-sm-6 center_item">
	                       			<input name="Edit_Tour" class="btn btn-info" value="Save" type="submit">
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