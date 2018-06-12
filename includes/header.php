<nav class="nav navbar-nav navbar-fixed-top navbar-inverse">
            <div class="container-fluid">
            <div class="container">
                <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mytarget">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span> 
                     <span class="icon-bar"></span>
                </button>
                
                <div class="navbar-nav">
                    <a class="navbar-brand" style="text-decoration: none" href="index.php"><b>Lifestyle Store</b></a>
                </div>
            </div>
                <div class="collapse navbar-collapse" id="mytarget">
            <ul class="nav navbar-nav navbar-right">
				<?php
				if (isset($_SESSION['email']))
				{
				?>
                <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span><b> Cart</b></a>
                <li><a href="settings.php"><span class="glyphicon glyphicon-user"></span><b> Settings</b></a></li>
                <li><a href="./includes/logout.php"><span class="glyphicon glyphicon-log-in"></span><b> Logout</b></a>
				
				<?php
				} 
				else
				{
					?>
                <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span><b> Sign Up</b></a></li>
				<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span><b> Login</b></a>
				
				<?php
				}
				?>
			</ul>
                </div>
                
            </div> 
            </div>
         
        </nav>