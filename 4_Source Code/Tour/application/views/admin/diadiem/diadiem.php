<script type="text/javascript">
function editDD (id) {
	window.location.href = "<?php echo base_url()."admin/diadiem_edit/"?>" + id;
}
function removeDD (id, pos) {
	var url = "<?php echo base_url(); ?>" + "admin/diadiem_remove";
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
    	        	addressId: id
    	        },
    	        beforeSend: function(){
    	            console.log('beforeSend');
    	        },
    	        success: function(data){
    	        	$('#table-ext-6').dataTable().fnDeleteRow($('#dd_'+pos));
    	            console.log("success");
    	        },
    	        error:function(data){
    	        	hideLoading();
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
                	<a class="btn btn-default" href="<?php echo base_url(); ?>admin/diadiem_create"> + Địa Điểm </a>
                </div>
            </div>
         	 <!-- END Language list--> Địa Điểm
   		</div>
	</div>
	<div class="row">
		<div class="panel panel-default show">
			<div class="row">
				<div class="table-responsive">
		        	<table class="table table-bordered table-hover" id="table-ext-6" style="padding: 10px;">
		            	<thead>
		                	<tr>
		                    	<th>Mã DD</th>
		                        <th>Địa chỉ</th>
		                        <th>Mô tả</th>
		                        <th>Mã Tỉnh</th>
		                        <th></th>
		                      	<th></th>
		                   	</tr>
		                 </thead>
		                 <tbody>
		                 	<?php
		                    for ($i = 0; $i < count($listDD); $i++) {
		                    ?>
		                    <tr id="dd_<?php echo $i?>">
		                    	<td><?php echo $listDD[$i]->MA_DD?></td>
		                   		<td><?php echo $listDD[$i]->DIA_CHI?></td>
		                     	<td><?php echo $listDD[$i]->MO_TA?></td>
		                        <td><?php echo $listDD[$i]->MA_TINH?></td>
		                        <td style="text-align: center;">
		                          <input class="btn btn-info" type="button" id="edit_diadiem" value="Edit" onclick="editDD(<?php echo $listDD[$i]->MA_DD?>)">
		                        </td>
		                        <td style="text-align: center;">
		                        	<input class="btn btn-danger" type="button" value="Delete" onclick="removeDD(<?php echo $listDD[$i]->MA_DD?>, <?php echo $i?>)">
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