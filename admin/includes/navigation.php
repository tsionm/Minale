
 <nav class="navbar navbar-default navbar-fixed-top  navbar-inverse navbg" id="navigate">
            <div class="container">
                <div class="row">

                    <div class="navbar-header">
                        <div class="navbar-left">
                            <a href="index.php" class="navbar-brand"><b>Dashboard</b></a>
                        </div>
                        <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
				            <span class="sr-only">Toggle navigation</span>
				            <span class="icon-bar"></span>
				            <span class="icon-bar"></span>
				            <span class="icon-bar"></span>
				            <span class="icon-bar"></span>
		        		</button>
                        
                    </div>

                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="nav navbar-nav">
                            <li><a href="orders_report.php">Orders</a></li>
                             <li><a href="menu">Edit Menu</a></li>

                            <!-- <?php if(has_permission('admin')):?>-->
                             <li><a href="users.php">Users</a></li>
                            <!-- <?php endif;?>-->
                             <li class="dropdown pull-right">
                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Signed in as <?=$user_data['first'];?>
                                     <span class="caret"></span>
                                 </a>
                                 <ul class="dropdown-menu" role="menu">
                                    <li><a href="changePassword.php">Change password</a></li> 
                                     <li><a href="logout.php">Logout</a></li>
                                 </ul>
                             </li>
                               <!-- <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                    
                                        <li>
                                            <a href="#">
                                               
                                            </a>
                                        </li>
                                       
                                    </ul>
                                </li>-->

                               
                        </ul>


                    </div>
                </div>
               
            </div>
        </nav>