<script type="text/javascript">
function editTour (id) {
	window.location.href = "<?php echo base_url()."admin/tour_edit/"?>" + id;
}
function removeTour (id, pos) {
	var url = "<?php echo base_url(); ?>" + "admin/tour_remove";
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
    	        	tourId: id
    	        },
    	        beforeSend: function(){
    	            console.log('beforeSend');
    	        },
    	        success: function(data){
    	        	$('#table-ext-6').dataTable().fnDeleteRow($('#tour_'+pos));
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
                	<a class="btn btn-default" href="<?php echo base_url(); ?>admin/tour_create"> + Tour </a>
                </div>
            </div>
         	 <!-- END Language list--> Tour
   		</div>
	</div>
	<div class="row">
		<div class="panel panel-default show">
			<div class="row">
				<div class="table-responsive">
		        	<table class="table table-bordered table-hover" id="table-ext-6" style="padding: 10px;">
		            	<thead>
		                	<tr>
		                    	<th>Mã Tour</th>
		                        <th>Giá Tour</th>
		                        <th>Mã Xe</th>
		                        <th>Ngày Đi</th>
		                       	<th>Ngày Về</th>
		                        <th>Địa Điểm Đi</th>
		                        <th>Địa Điểm Đến</th>
		                        <th></th>
		                      	<th></th>
		                   	</tr>
		                 </thead>
		                 <tbody>
		                 <?php 
		                 for ($i=0; $i< count($list_tour); $i++) {
		                 ?>
		                    <tr id="tour_<?php echo $i?>">
		                   		<td><?php echo $list_tour[$i]->MA_TOUR?></td>
		                    	<td><?php echo $list_tour[$i]->GIA_TOUR?></td>
		                     	<td><?php echo $list_tour[$i]->MA_XE?></td>
		                    	<td><?php echo $list_tour[$i]->NGAY_DI?></td>
		                   		<td><?php echo $list_tour[$i]->NGAY_VE?></td>
		                     	<td><?php echo $list_tour[$i]->ddDi_title?></td>
		                        <td><?php echo $list_tour[$i]->ddDen_title?></td>
		                        <td style="text-align: center;">
		                          <input class="btn btn-info" type="button" value="Edit" onclick="editTour(<?php echo $list_tour[$i]->MA_TOUR?>)">
		                        </td>
		                        <td style="text-align: center;">
		                        	<input class="btn btn-danger" type="button" value="Delete" onclick="removeTour(<?php echo $list_tour[$i]->MA_TOUR?>, <?php echo $i?>)">
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