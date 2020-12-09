<?php
include('header.php');


 ?>
<section role="main" class="content-body">
					<header class="page-header">
						<h2>Contact Message</h2>
					
						<div class="right-wrapper text-right">
							<ol class="breadcrumbs">
								
								
							</ol>
					
							
						</div>
					</header>

					<!-- start: page -->
						<section class="card">
							<header class="card-header">
								<div class="card-actions">
									<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
									<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
								</div>
						
								<h2 class="card-title">Contact Message</h2>
							</header>
							<div class="card-body">
								<!-- <div class="row">
									<div class="col-sm-6"> -->
										<!-- <div class="mb-3">
											<a href="product.php"><button id="addToTable" class="btn btn-primary">Add <i class="fas fa-plus"></i></button></a>
										</div> -->
									<!-- </div> -->
								</div>
<?php 

if(isset($_GET['del'])){
	echo "<div class='alert alert-primary'><center>Data Deleted!</center></div>";
}
elseif(isset($_GET['error'])){
	echo "<div class='alert alert-info'><center>Error on Action!</center></div>";
}
elseif(isset($_GET['success'])){
	echo "<div class='alert alert-primary'><center>Data Updated!</center></div>";
}

else{
	echo '';
}

?>
								<table class="table table-bordered table-striped mb-0" id="datatable-editable">
									<thead>
										<tr>
											<th>Name</th>
											<th>Email</th>
											<th>Phone</th>
											<th>Subject</th>
											<th>Message</th>
											<th>Date</th>
											<th>Response</th>
										</tr>
									</thead>
									<tbody>
<?php 

	$fetchdata = new Database();
	$sql=$fetchdata->contact();
	while($row= mysqli_fetch_array($sql)){
?>
	<tr data-item-id="1">
		<td><?php echo $row['name']; ?></td>
		<td><?php echo $row['email']; ?></td>
		<td><?php echo $row['phone']; ?></td>
		<td><?php echo $row['subject']; ?></td>
		<td><?php echo $row['message']; ?></td>
		<td><?php echo $row['messagedate']; ?></td>
		
		

		<td class="actions">
		<a href="#" class="hidden on-editing save-row"><i class="fas fa-save"></i></a>
		<a href="#" class="hidden on-editing cancel-row"><i class="fas fa-times"></i></a>
		<a href="update-gallery.php?update=<?php echo $row['id']; ?>" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
		<a href="gallery-delete.php?delete=<?php echo $row['id']; ?>" class="on-default remove-row"><i class="far fa-trash-alt"></i></a>
		</td>
	</tr>
<?php } ?>										
										
										
										
									</tbody>
								</table>
							</div>
						</section>
					<!-- end: page -->
				</section>




 <?php include('footer.php'); ?>