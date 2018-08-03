<script type="text/javascript">
function editDD (id) {
	window.location.href = "<?php echo base_url()."admin/xe_edit/"?>" + id;
}
function removeDD (id, pos) {
	var url = "<?php echo base_url(); ?>" + "admin/xe_remove";
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
    	        	xeId: id
    	        },
    	        beforeSend: function(){
    	            console.log('beforeSend');
    	        },
    	        success: function(data){
    	        	$('#table-ext-6').dataTable().fnDeleteRow($('#dd_'+pos));
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
                	<a class="btn btn-default" href="<?php echo base_url(); ?>admin/xe_create"> + Xe </a>
                </div>
            </div>
         	 <!-- END Language list--> Xe
   		</div>
	</div>
	<div class="row">
		<div class="panel panel-default show">
			<div class="row">
				<div class="table-responsive">
		        	<table class="table table-bordered table-hover" id="table-ext-6" style="padding: 10px;">
		            	<thead>
		                	<tr>
		                    	<th>Mã Xe</th>
		                        <th>Loại Xe</th>
		                        <th>Mẫu Xe</th>
		                        <th>Số Chổ</th>
		                        <th>Ngày Bảo Trì</th>
		                        <th>Tài Xế</th>
		                        <th></th>
		                      	<th></th>
		                   	</tr>
		                 </thead>
		                 <tbody>
		                 	<?php
		                    for ($i = 0; $i < count($listXe); $i++) {
		                    ?>
		                    <tr id="dd_<?php echo $i?>">
		                    	<td><?php echo $listXe[$i]->MA_XE?></td>
		                   		<td><?php echo $listXe[$i]->LOAI_XE?></td>
		                     	<td><?php echo $listXe[$i]->MAU_XE?></td>
		                        <td><?php echo $listXe[$i]->SO_CHO?></td>
		                        <td><?php echo $listXe[$i]->NGAY_BTRI?></td>
		                        <td><?php echo $listXe[$i]->TAI_XE?></td>
		                        <td style="text-align: center;">
		                          <input class="btn btn-info" type="button" id="edit_diadiem" value="Edit" onclick="editDD(<?php echo $listXe[$i]->MA_XE?>)">
		                        </td>
		                        <td style="text-align: center;">
		                        	<input class="btn btn-danger" type="button" value="Delete" onclick="removeDD(<?php echo $listXe[$i]->MA_XE?>, <?php echo $i?>)">
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