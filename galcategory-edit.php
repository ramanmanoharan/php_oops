<?php include('header.php');



if(isset($_GET['update'])){
	$updateid = intval($_GET['update']);

	$fetchone = new Database;

	$sql = $fetchone->galcatfetchone($updateid);

	$row = mysqli_fetch_array($sql);
}


?>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Gallery Category Update</h2>
					
						<div class="right-wrapper text-right">
							<ol class="breadcrumbs">
								<li>
									<a href="gallerycategory.php">
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
						
										<h2 class="card-title">Gallery Category Update</h2>
									</header>
									<div class="card-body">
									<?php if(isset($_GET['success'])){
							echo "<div id='div' class='alert alert-primary'><center>Gallery Category Updated!</center></div>";
						}elseif(isset($_GET['error'])){
							echo "<div id='div' class='alert alert-warning'><center>Failed to Update Gallery Category!</center></div>";
						} else{
							echo "";
						}
						
						?>
<script type="text/javascript">
			function formclick(){
				document.getElementById('div').style.display = "none";
			}
		</script>	
											
										<form onclick="formclick()" method="post" class="form-horizontal form-bordered form-bordered" action="galcat-update.php">
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2" for="textareaDefault">Category Name</label>
												<div class="col-lg-6">
													<input required class="form-control" data-plugin-maxlength maxlength="100" value="<?php echo $row['categoryname']; ?>"  name="category" />
													<input  type="hidden"  name="catid" value="<?php echo $row['id']; ?>" />
													
												</div>
											</div>
											
											<div class="form-group row" >
											
											</div>
											<input type="submit" class="btn btn-primary" style="float:right"   value="Submit">
										</form>
									</div>
								</section>
							</div>
						</div>
					
					
					<!-- end: page -->
				</section>
			</div>
			
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