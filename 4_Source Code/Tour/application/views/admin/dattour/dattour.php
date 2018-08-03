<script type="text/javascript">
function editDatTour (id) {
	window.location.href = "<?php echo base_url()."admin/dattour_edit/"?>" + id;
}
function removeDatTour (id, pos) {
	var url = "<?php echo base_url(); ?>" + "admin/dattour_remove";
	swal({
       title : "Would you want to delete?",
       text : "",
       type : "warning",
       showCancelButton : true,
       confirmButtonColor : "#ff0000",
       confirmButtonText : "Delete",
       closeOnConfirm : false
     },
       function () {
    	 $.ajax({
    			url: url,
    	        type: "post",
    	        dataType: 'json',
    	        timeout: 30000, // sets timeout to 30 seconds
    	        data: {
    	        	dtID: id
    	        },
    	        beforeSend: function(){
    	            console.log('beforeSend');
    	        },
    	        success: function(data){
    	        	$('#table-ext-6').dataTable().fnDeleteRow($('#lt_'+pos));
    	            console.log("success");
    	        },
    	        error:function(data){
    	        	console.log(data);
    	            alert('Can\'t update because network error! Please try again');
    	        }
    	   });
   	 	swal("Deleted!", "Branch has been deleted.", "success");
     });
}
</script>

<div class="">
	<div class="content-wrapper">
		<div class="content-heading">
        	<!-- START Language list-->
        	<div class="pull-right">
            	<div class="btn-group" style="display: block">
                	<a class="btn btn-default" href="<?php echo base_url(); ?>admin/dattour_create"> + Đặt Tour </a>
                </div>
            </div>
         	 <!-- END Language list--> Đặt Tour
   		</div>
	</div>
	<div class="row">
		<div class="panel panel-default show">
			<div class="row">
				<div class="table-responsive">
		        	<table class="table table-bordered table-hover" id="table-ext-6" style="padding: 10px;">
		            	<thead>
		                	<tr>
		                		<th>Mã Đặt Tour</th>
		                    	<th>Mã Khách Hàng</th>
		                        <th>Số Lượng Đặt</th>
		                        <th>Mã Tour</th>
		                        <th>Ghi Chú</th>
		                        <th></th>
		                      	<th></th>
		                   	</tr>
		                 </thead>
		                 <tbody>
		                 <?php 
		                 for ($i=0; $i< count($list_dt); $i++) {
		                 ?>
		                    <tr id="lt_<?php echo $i?>">
		                    	<td><?php echo $list_dt[$i]->MA_DATTOUR?></td>
		                   		<td><?php echo $list_dt[$i]->MA_KH?></td>
		                    	<td><?php echo $list_dt[$i]->SL_DAT?></td>
		                     	<td><?php echo $list_dt[$i]->MA_TOUR?></td>
		                    	<td><?php echo $list_dt[$i]->GHI_CHU?></td>
		                        <td style="text-align: center;">
		                          <input class="btn btn-info" type="button" value="Edit" onclick="editDatTour(<?php echo $list_dt[$i]->MA_DATTOUR?>)">
		                        </td>
		                        <td style="text-align: center;">
		                        	<input class="btn btn-danger" type="button" value="Delete" onclick="removeDatTour(<?php echo $list_dt[$i]->MA_DATTOUR?>, <?php echo $i?>)">
		                       </td>
		                	</tr>
		                <?php 
		                 }?>
		          		</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>