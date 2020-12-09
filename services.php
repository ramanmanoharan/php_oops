<?php include('header.php'); ?>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Services</h2>
					
						<div class="right-wrapper text-right">
							<ol class="breadcrumbs">
								<li>
									<a href="services.php">
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
						
										<h2 class="card-title">Services Upload</h2>
									</header>
									<div class="card-body">
									<?php if(isset($_GET['success'])){
							echo "<div id='div' class='alert alert-primary'><center>Services Added!</center></div>";
						}elseif(isset($_GET['error'])){
							echo "<div id='div' class='alert alert-warning'><center>Failed to add Services!</center></div>";
						} else{
							echo "";
						}
						
						?>
<script type="text/javascript">
			function formclick(){
				document.getElementById('div').style.display = "none";
			}
		</script>	
											
										<form onclick="formclick()" method="post" class="form-horizontal form-bordered form-bordered" action="service-upload.php" enctype="multipart/form-data">
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2" for="textareaDefault">Title</label>
												<div class="col-lg-6">
													<input required class="form-control" data-plugin-maxlength maxlength="100"  name="title" />
													
												</div>
											</div>
											
										<div class="form-group row">
										<div class="card-body">
										
											<div class="row">
							<div class="col">
								<section class="card">
									
									<div class="card-body">
										
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2">Description</label>
												<div class="col-lg-9 note-editable card-block">
													<textarea class="ckeditor" required name="content"  rows="10"></textarea>
												</div>
											</div>
										
									</div>
								</section>
							</div>
						</div>
									
										</div>
										</div>
									
								
									
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2" for="textareaDefault">Image File</label>
												<div class="col-lg-6">
													<input class="form-control" required type="file" name="fileToUpload" />
													
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