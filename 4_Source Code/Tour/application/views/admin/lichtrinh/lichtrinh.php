<script type="text/javascript">
function editLT (id) {
	window.location.href = "<?php echo base_url()."admin/lichtrinh_edit/"?>" + id;
}
function removeLT (id, pos) {
	var url = "<?php echo base_url(); ?>" + "admin/lichtrinh_remove";
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
    	        	ltID: id
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
                	<a class="btn btn-default" href="<?php echo base_url(); ?>admin/lichtrinh_create"> + Lịch Trình </a>
                </div>
            </div>
         	 <!-- END Language list--> Lịch Trình
   		</div>
	</div>
	<div class="row">
		<div class="panel panel-default show">
			<div class="row">
				<div class="table-responsive">
		        	<table class="table table-bordered table-hover" id="table-ext-6" style="padding: 10px;">
		            	<thead>
		                	<tr>
		                    	<th>Mã Lịch Trình</th>
		                        <th>Thời Gian</th>
		                        <th>Địa Điểm Du Lịch</th>
		                        <th>Mã Tour</th>
		                        <th></th>
		                      	<th></th>
		                   	</tr>
		                 </thead>
		                 <tbody>
		                 <?php 
		                 for ($i=0; $i< count($list_lt); $i++) {
		                 ?>
		                    <tr id="lt_<?php echo $i?>">
		                   		<td><?php echo $list_lt[$i]->MA_LICHTRINH?></td>
		                    	<td><?php echo $list_lt[$i]->THOI_GIAN?></td>
		                     	<td><?php echo $list_lt[$i]->DD_DULICH?></td>
		                    	<td><?php echo $list_lt[$i]->MA_TOUR?></td>
		                        <td style="text-align: center;">
		                          <input class="btn btn-info" type="button" value="Edit" onclick="editLT(<?php echo $list_lt[$i]->MA_LICHTRINH?>)">
		                        </td>
		                        <td style="text-align: center;">
		                        	<input class="btn btn-danger" type="button" value="Delete" onclick="removeLT(<?php echo $list_lt[$i]->MA_LICHTRINH?>, <?php echo $i?>)">
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