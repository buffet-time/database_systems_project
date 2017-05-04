<html>
    <head>
    <link rel="stylesheet" href="footer.css">
    </head>
    <body>
        <div class="footer">
            <?php   if(isset($_SESSION['id']) && $_SESSION['loggedin'] == true)
                {   ?>      
            		<form class="unibtn" action = 'register.php'>
            			<input type = "submit" value ="Register a new User"></button>
            		</form>
    	<?php   }   ?>
    		
        <?php
            if(isset($_SESSION['id']) && $_SESSION['manage'] == 1 && $_SESSION['loggedin'] == true)
                {
            ?>
        	        <form class="unibtn" action = 'employees.php'>
        			    <input type = "submit" value ="Employee Management"></button>
        			</form>
    	<?php   }	?>
    	
    	<?php
    		if(isset($_SESSION['id']) && $_SESSION['owner'] == 1 && $_SESSION['manage'] == 1 && $_SESSION['loggedin'] == true)
    		    {
    		?>
        			<form class="unibtn" action = 'stock.php'>
        			    <input type = "submit" value ="Stock"></button>
        			</form>
    	<?php   }   ?>
		</div>
	</body>
</html>