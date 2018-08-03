<script type="text/javascript">
function editKH (id) {
	window.location.href = "<?php echo base_url()."admin/khachhang_edit/"?>" + id;
}
function removeKH (id, pos) {
	var url = "<?php echo base_url(); ?>" + "admin/khachhang_remove";
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
    	        	khId: id
    	        },
    	        beforeSend: function(){
    	            console.log('beforeSend');
    	        },
    	        success: function(data){
    	        	$('#table-ext-6').dataTable().fnDeleteRow($('#kh_'+pos));
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
                	<a class="btn btn-default" href="<?php echo base_url(); ?>admin/khachhang_create"> + Khách Hàng </a>
                </div>
            </div>
         	 <!-- END Language list--> Khách Hàng
   		</div>
	</div>
	<div class="row">
		<div class="panel panel-default show">
			<div class="row">
				<div class="table-responsive">
		        	<table class="table table-bordered table-hover" id="table-ext-6" style="padding: 10px;">
		            	<thead>
		                	<tr>
		                    	<th>Mã Khách Hàng</th>
		                        <th>Họ Và tên</th>
		                        <th>CMND</th>
								<th>Số Điện Thoại</th>
								<th>Email</th>
		                        <th></th>
		                      	<th></th>
		                   	</tr>
		                 </thead>
		                 <tbody>
		                 	<?php
		                    for ($i = 0; $i < count($listKH); $i++) {
		                    ?>
		                    <tr id="kh_<?php echo $i?>">
		                    	<td><?php echo $listKH[$i]->MA_KH?></td>
		                   		<td><?php echo $listKH[$i]->HO_TEN_KH?></td>
		                     	<td><?php echo $listKH[$i]->CMND?></td>
								<td><?php echo $listKH[$i]->SDT?></td>
								<td><?php echo $listKH[$i]->Email?></td>
		                        <td style="text-align: center;">
		                          <input class="btn btn-info" type="button" id="edit_khachhang" value="Edit" onclick="editKH(<?php echo $listKH[$i]->MA_KH?>)">
		                        </td>
		                        <td style="text-align: center;">
		                        	<input class="btn btn-danger" type="button" value="Delete" onclick="removeKH(<?php echo $listKH[$i]->MA_KH?>, <?php echo $i?>)">
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