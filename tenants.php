<?php include('db_connect.php');?>

<div class="container-fluid">
	
	<div class="col-lg-12">
		<div class="row mb-4 mt-4">
			<div class="col-md-12">
				
			</div>
		</div>
		<div class="row">
			<!-- FORM Panel -->
			<!-- "javascript:void(0)"id="new_booking" -->
			<!-- Table Panel -->
			<!-- tenats booking -->
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<b>List of booking</b>
						<span class="float:right"><a class="btn btn-primary btn-block btn-sm col-sm-2 float-right" href="index.php">
					<i class="fa fa-plus"></i> New booking</a></span>
				
					</div>
					<div class="card-body">
						<table class="table table-condensed table-bordered table-hover">
							<thead>
								<tr>
									<th class="text-center">#</th>
									<th class="">house_no</th>
									<th class="">category_id</th>
									<th class="">tenant name</th>
									<th class="">contact</th>
									<th class="">email</th>
									<th class="">nin</th>
									<th class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
								

								<?php
								$sql="SELECT * FROM `booking`";
								$query=mysqli_query($conn,$sql);
								while($row=mysqli_fetch_array($query))
								{
									?>
									<tr>		
									<td><?php echo $row['bid'];?></td>
									<td><?php echo $row['house_no'];?></td>
									<td><?php echo $row['category_id'];?></td>
									<td><?php echo $row['tname'];?></td>
									<td><?php echo $row['tcontact'];?></td>
									<td><?php echo $row['temail'];?></td>
									<td><?php echo $row['tnin'];?></td>
									<td><a href="tenantsBookingInfo.php?id=<?php echo $row['bid'];?>" class="btn btn-sm btn-warning ">View</a></td>
									</tr>
									<?php
								}

								?>
							
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- Table Panel -->
		</div>
	</div>	

</div>
<!-- tenats booking -->

<!-- tenats booking -->

<style>
	
	td{
		vertical-align: middle !important;
	}
	td p{
		margin: unset
	}
	img{
		max-width:100px;
		max-height: :150px;
	}
</style>
<script>
	$(document).ready(function(){
		$('table').dataTable()
	})
	
	$('#new_booking').click(function(){
		uni_modal("New Tenant","manage_tenant.php","mid-large")
		
	})

	$('.view_payment').click(function(){
		uni_modal("Tenants Payments","view_payment.php?id="+$(this).attr('data-id'),"large")
		
	})
	$('.edit_tenant').click(function(){
		uni_modal("Manage Tenant Details","manage_tenant.php?id="+$(this).attr('data-id'),"mid-large")
		
	})
	$('.delete_tenant').click(function(){
		_conf("Are you sure to delete this Tenant?","delete_tenant",[$(this).attr('data-id')])
	})
	
	function delete_tenant($id){
		start_load()
		$.ajax({
			url:'ajax.php?action=delete_tenant',
			method:'POST',
			data:{id:$id},
			success:function(resp){
				if(resp==1){
					alert_toast("Data successfully deleted",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
			}
		})
	}
</script>