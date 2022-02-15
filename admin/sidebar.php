			<?php

				if(!isset($_SESSION['email_address'])){

					echo "
						<script>
							window.open('../login.php','_self')
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
	          				<p><?php echo $staff_name; ?></p>
	        			</div>
	      			</div>
	      			<!-- search form -->
	      			
	      			<!-- /.search form -->
	      			<!-- sidebar menu: : style can be found in sidebar.less -->
	      			<ul class="sidebar-menu" data-widget="tree">
	      				<li class="treeview <?php if(isset($_GET['waiting_applicants'])){ echo "active"; } ?> <?php if(isset($_GET['processing_applicants'])){ echo "active"; } ?>">
	      					<a href="">
		            				<i class="fa fa-dashboard"></i> <span>Dashboard</span>
		            				<span class="pull-right-container">
		              					<i class="fa fa-angle-left pull-right"></i>
		            				</span>
	          					</a>

	          					<ul class="treeview-menu">
	          						<li class="<?php if(isset($_GET['waiting_applicants'])){ echo "active"; } ?>">
		            					<a href="index.php?waiting_applicants"><i class="fa fa-users"></i>
		            						Waiting Applicants
		            				</a>
		            				</li>

		            				<li class="<?php if(isset($_GET['processing_applicants'])){ echo "active"; } ?>">
		            					<a href="index.php?processing_applicants"><i class="fa fa-black-tie"></i> Processing List</a>
		            				</li>
	          					</ul>

	          					</li>
	          					

	        					<li class="<?php if(isset($_GET['employer'])){ echo "active"; } ?>">
					                <a href="index.php?employer">
					                    <i class="fa fa-bolt"></i><span>Employer</span>
					                    <span class="pull-right-container"></span>
					                </a>
					            
					            </li>
					           
					            <li class="<?php if(isset($_GET['documents'])){ echo "active"; } ?>">
					                <a href="index.php?documents">
					                    <i class="fa fa-file-text-o"></i><span>Documents</span>
					                    <span class="pull-right-container"></span>
					                </a>
					            
					            </li>
					            <li class="<?php if(isset($_GET['staffs'])){ echo "active"; } ?>">
					                <a href="index.php?staffs">
					                    <i class="fa fa-bolt"></i><span>Staff</span>
					                    <span class="pull-right-container"></span>
					                </a>
					            
					            </li>
					           
					 


					            <li class="<?php if(isset($_GET['profile'])){ echo "active"; } ?>">
					                <a href="index.php?profile=<?php echo $account_id; ?>">
					                    <i class="fa fa-gear"></i><span>Edit Profile</span>
					                    <span class="pull-right-container"></span>
					                </a>
					            
					            </li>
					            	
					            <li>
					               <a href="../logout.php">
					                   <i class="fa fa-sign-out"></i><span>Logout</span>
					                   <span class="pull-right-container"></span>
					               </a> 
					            </li> 
	        				
	      			</ul>
	    		</section>
	    	<!-- /.sidebar -->
	  		</aside>
	  		<?php

				}

			?>