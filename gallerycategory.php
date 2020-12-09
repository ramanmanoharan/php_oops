<?php include('header.php'); ?>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Gallery Category</h2>
					
						<div class="right-wrapper text-right">
							<ol class="breadcrumbs">
								<li>
									<a href="gallery.php">
										<i class="fab fa-servicestack"></i>
									</a>
								</li>
								
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
					<div class="row">
							<div class="col">
								<section class="card">
									<header class="card-header">
										<div class="card-actions">
											<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
											<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
										</div>
						
										<h2 class="card-title">Add Gallery Category</h2>
									</header>
									<div class="card-body">
									<?php if(isset($_GET['success'])){
							echo "<div id='div' class='alert alert-primary'><center>Gallery Category Added!</center></div>";
						}elseif(isset($_GET['error'])){
							echo "<div id='div' class='alert alert-warning'><center>Failed to add Gallery Category!</center></div>";
						} else{
							echo "";
						}
						
						?>
<script type="text/javascript">
			function formclick(){
				document.getElementById('div').style.display = "none";
			}
		</script>	
											
										<form onclick="formclick()" method="post" class="form-horizontal form-bordered form-bordered" action="gallery-category.php" >
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2" for="textareaDefault">Category</label>
												<div class="col-lg-6">
													<input required class="form-control" data-plugin-maxlength maxlength="100"  name="category" />
													
												</div>
											</div>
											
										
									
								
									
											
											<div class="form-group row" >
											
											</div>
											<input type="submit" class="btn btn-primary" style="float:right"   value="Add Category">
										</form>
									</div>
								</section>
							</div>
						</div>
					
					
					<!-- end: page -->
				</section>
			</div>
			<section role="main" class="content-body">
					<header class="page-header">
						<h2>Gallery Category List</h2>
					
						<div class="right-wrapper text-right">
							<ol class="breadcrumbs">
								<!-- <li>
									<a href="services.php">
										<i class="fab fa-servicestack"></i>
									</a>
								</li> -->
								
							</ol>
					
							<!-- <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a> -->
						</div>
					</header>

					<!-- start: page -->
						<section class="card">
							<header class="card-header">
								<div class="card-actions">
									<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
									<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
								</div>
						
								<h2 class="card-title">Gallery Category</h2>
							</header>
							<div class="card-body">
								<div class="row">
									<div class="col-sm-6">
										<div class="mb-3">
											<a href="gallerycategory.php"><button id="addToTable" class="btn btn-primary">Add <i class="fas fa-plus"></i></button></a>
										</div>
									</div>
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
											<th>Category</th>
											
											<th>Actions</th>
										</tr>
									</thead>
									<tbody>
<?php 
	$fetchdata = new Database();
	$sql=$fetchdata->gallerycategoryfetch();
	while($row= mysqli_fetch_array($sql)){
?>
	<tr data-item-id="1">
		<td><?php echo $row['categoryname']; ?></td>
	
		
		<td class="actions">
		<a href="#" class="hidden on-editing save-row"><i class="fas fa-save"></i></a>
		<a href="#" class="hidden on-editing cancel-row"><i class="fas fa-times"></i></a>
		<a href="galcategory-edit.php?update=<?php echo $row['id']; ?>" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
		<a href="galcategory-delete.php?delete=<?php echo $row['id']; ?>" class="on-default remove-row"><i class="far fa-trash-alt"></i></a>
		</td>
	</tr>
<?php } ?>										
										
										
										
									</tbody>
								</table>
							</div>
						</section>
					<!-- end: page -->
				</section>

			<aside id="sidebar-right" class="sidebar-right">
				<div class="nano">
					<div class="nano-content">
						<a href="#" class="mobile-close d-md-none">
							Collapse <i class="fas fa-chevron-right"></i>
						</a>
			
						<div class="sidebar-right-wrapper">
			
							<div class="sidebar-widget widget-calendar">
								<h6>Upcoming Tasks</h6>
								<div data-plugin-datepicker data-plugin-skin="dark"></div>
			
								
							</div>
			
							
			
						</div>
					</div>
				</div>
			</aside>

		</section>
		

	<?php include('footer.php'); ?>