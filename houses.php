<?php include('db_connect.php');?>

<div class="container-fluid">
	
	<div class="col-lg-12">
		<div class="row">
			<!-- FORM Panel -->
			<div class="col-md-4">
			<form method="POST" enctype="multipart/form-data" action="save_house.php">
				<div class="card">
					<div class="card-header">
						    House Form
				  	</div>
					<div class="card-body">
							<div class="form-group" id="msg"></div>
							<input type="hidden" name="id">
							<div class="form-group">
								<label class="control-label">House No</label>
								<input type="text" class="form-control bg-light" name="house_no" required="">
							</div>
							<!-- category__section -->
							 <div class="form-group">
								<label class="control-label">Category</label>
								<select name="category_id" id="" class="custom-select" required>
								
									<?php 
									$categories = $conn->query("SELECT * FROM categories order by name asc");
									if($categories->num_rows > 0):
									while($row= $categories->fetch_assoc()) :
									?>
									<option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
								<?php endwhile; ?>
								<?php else: ?>
									<option selected="" value="" disabled="">Please check the category list.</option>
								<?php endif; ?>
								</select>
							</div>
							<!-- category__section -->

							<!-- Description__section -->

								 <div class="form-group">
									<label for="" class="control-label">Description</label>
									<textarea name="description" id="" cols="30" rows="4" class="form-control bg-light" required></textarea>
								</div>
							
							<!-- Description__section -->

							
							<!-- Price__section -->
							<div class="form-group">
								<label class="control-label">Price</label>
								<input type="number" class="form-control bg-light text-right" name="price" step="any" required="">
							</div> 
							<!-- Price__section -->


							
							<!-- image__section -->
							<div class="upload photo">
								<div class="label">
									<input type="file" name = "image">
									<!-- <input type="submit" name = "submit" value ="upload"> -->
								</div>
							</div>
							<!-- image__section -->
					</div>
					<div class="card-footer">
						<div class="row">
							<div class="col-md-12">
								<button class="btn btn-sm btn-primary col-sm-5 offset-md-3" name="submit" type="submit"> Save</button>
								<button class="btn btn-sm btn-default col-sm-5" type="reset" > Cancel</button>
							</div>
						</div>
					</div>
				</div>
			</form>
			</div>
			<!-- FORM Panel -->

			<!-- Table Panel -->
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">
						<b>House List</b>
					</div>
					<div class="card-body">
						<table class="table table-bordered table-hover">
							<thead>
								<tr>
									<th class="text-center">#</th>
									<th class="text-center">House</th>
									<th class="text-center">Image</th>
									<th class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								$i = 1;
								$house = $conn->query("SELECT h.*,c.name as cname FROM houses h inner join categories c on c.id = h.category_id order by id desc");
								while($row=$house->fetch_assoc()):
								?>
								<tr>
									<td class="text-center"><?php echo $i++ ?></td>
									<td class="">
										<p>House #: <b><?php echo $row['house_no'] ?></b></p>
										<p><small>House Type:
										<b><?php echo $row['cname'] ?></b></small></p>
										<p><small>Description: <b><?php echo $row['description'] ?></b></small></p>
										<p><small>Price: <b><?php echo number_format($row['price'],2) ?></b></small></p>
									</td>
									<!-- image__section -->
									<td> 
										<img src="uploads/<?php echo $row['image'];?>" class="img-fluid " style="width:100px" alt="">
									</td>
										<!-- image__section -->
									<td class="text-center">
										<a href="editHouses.php?id=<?php echo $row['id'];?>" class="btn btn-sm btn-primary edit_house">Edit</a>
			
										<button class="btn btn-sm btn-danger delete_house" type="button" data-id="<?php echo $row['id'] ?>">Delete</button>
									</td>
								</tr>
								<?php endwhile; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- Table Panel -->
		</div>
	</div>	

</div>
<style>
	
	td{
		vertical-align: middle !important;
	}
	td p {
		margin: unset;
		padding: unset;
		line-height: 1em;
	}
</style>
<script>

	


	




	
	$('.delete_house').click(function(){
		_conf("Are you sure to delete this house?","delete_house",[$(this).attr('data-id')])
	})
	function delete_house($id){
		start_load()
		$.ajax({
			url:'ajax.php?action=delete_house',
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
	$('table').dataTable()
</script>