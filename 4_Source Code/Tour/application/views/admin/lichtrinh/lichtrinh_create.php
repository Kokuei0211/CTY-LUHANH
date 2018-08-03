<script type="text/javascript">
$( document ).ready(function() {
	$('#cancel').on({
		'click': function(){
			window.location.href = "<?php echo base_url()."admin/lichtrinh"?>";
		}
	});
})

function changeTour(item) {
	var tour = <?php echo json_encode($list_tour)?>;
	$('#lichtrinh').remove();
	for (i=0; i<tour.length; i++) {
		if (tour[i]['MA_TOUR'] == $(item).val()) {
			var date1 = new Date(tour[i]['NGAY_DI']);
			var date2 = new Date(tour[i]['NGAY_VE']);
			var timeDiff = Math.abs(date2.getTime() - date1.getTime());
			var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));
			
			var html = '<div class="div_margin_bottom" id="lichtrinh">';
			html += '		<label class="row control-label" for="inputContact11">Lịch Trình Cụ Thể</label>';
			for (j = 0; j < diffDays; j++) {
				date1.setDate(date1.getDate() + j)
				var datestring = date1.getDate()  + "-" + (date1.getMonth()+1) + "-" + date1.getFullYear();
				html += '	<div class="row">';
                html += '		<div class="col-sm-8">';
                html += '			<p>'+datestring+'</p>';
                html += '		</div>';
                html += '		<div class="col-sm-4">';
                html +=	'			<input type="hidden" name="date_'+j+'" value="'+datestring+'">';
                html += '			<input type="hidden" name="number_date" value="'+diffDays+'">';
                html +=	'			<input type="button" class="btn btn-default" value="+ Thời Gian" onclick="addTime(this, \'date_'+j+'\')">';
                html +=	'		</div>';
                html += '	</div>';
                html += '<hr>';
			}
		
			html += '	</div>';

			$(html).insertAfter('#select_tour');
			//$('#select_tour').parent().after(html);
			
			return
		}
	}
}

function addTime(item, date) {
	var html = '<div>';
	html += '		<div class="div_margin_bottom">';
	html += '			<label class="row control-label" for="inputContact11">Thời Gian</label>';
	html += '			<div class="row">';
    html += '				<input required name="time_'+date+'[]" type="time" class="form-control">';
   	html += '			</div>';
	html += '		</div>';
	html += '		<div class="div_margin_bottom">';
	html += '			<label class="row control-label" for="inputContact11">Địa Điểm Du Lịch</label>';
	html += '			<div class="row">';
    html += '				<input required name="dd_'+date+'[]" type="text" class="form-control">';
   	html += '			</div>';
	html += '		</div>';
	html += '		<div class="div_margin_bottom">';
	html += '			<input type="button" onclick="deleteTime(this)" class="btn btn-danger" value="Xóa">';
	html += '		</div>';
	html += '	</div>';

	$(item).parent().parent().append(html);
}

function deleteTime(item) {
	$(item).parent().parent().remove();
}

</script>
<div class="">
	<div class="content-wrapper">
		<div class="content-heading">
         	 <!-- END Language list--><a style="color: #929292; cursor: pointer;" href="<?php echo base_url()?>admin/lichtrinh">Lịch Trình</a> <a style="color: #fcba2f;"> > Tạo Lịch Trình</a>
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
							<div class="div_margin_bottom" id="select_tour">
								<label class="row control-label" for="inputContact11">Tour</label>
	                            <div class="row">
	                            	<select name="tour_lt" class="form-control" required="required" onchange="changeTour(this)">
	                            		<option value="">Selected</option>
	                            		<?php for ($i=0; $i<count($list_tour); $i++) 
	                            		{?>
	                            		<option value="<?php echo $list_tour[$i]->MA_TOUR?>"><?php echo $list_tour[$i]->TEN_TOUR?></option>
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
	                       			<input name="Create_LT" class="btn btn-info" value="Create" type="submit">
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