			<?php

				if(!isset($_SESSION['email_address'])){

					echo "
						<script>
							window.open('login.php','_self')
						</script>
					";

				}else{

			?>
			<aside class="main-sidebar">
	    		<!-- sidebar: style can be found in sidebar.less -->
	    		<section class="sidebar">
	      			<!-- Sidebar user panel -->
	      			<div class="user-panel">
	        			<div class="pull-left image">
	          				<img src="../account_images/download.png" class="img-circle" alt="User Image">
	        			</div>
	        			<div class="pull-left info">
	          				<p><?php echo $employer_name; ?></p>
	          				
	        			</div>
	      			</div>
	      			<!-- search form -->
	      			
	      			<!-- /.search form -->
	      			<!-- sidebar menu: : style can be found in sidebar.less -->
	      			<ul class="sidebar-menu" data-widget="tree">
	        			<li class="treeview <?php if(isset($_GET['employees'])){ echo "active"; } ?>">
		          				
		          				<li class="<?php if(isset($_GET['employees'])){ echo "active"; } ?>">
					                <a href="index.php?employees">
					                    <i class="fa fa-users"></i><span>Employees</span>
					                    <span class="pull-right-container"></span>
					                </a>
					            
					            </li>
					            <li class="<?php if(isset($_GET['profile'])){ echo "active"; } ?>">
					                <a href="index.php?profile=<?php echo $employer_id; ?>">
					                    <i class="fa fa-gear"></i><span>Edit Profile</span>
					                    <span class="pull-right-container"></span>
					                </a>
					            
					            </li>
					            <li>
					               <a href="logout.php">
					                   <i class="fa fa-sign-out"></i><span>Logout</span>
					                   <span class="pull-right-container"></span>
					               </a> 
					            </li> 
	        				
	        			</li>
	      			</ul>
	    		</section>
	    	<!-- /.sidebar -->
	  		</aside>
	  		<?php

				}

			?>