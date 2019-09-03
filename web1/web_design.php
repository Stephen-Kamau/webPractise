
<?php
include "admin_details.php"
?>
<!DOCTYPE html>
<html>
<head>
	<title>Responsive web desigh layouts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="web_design.css">
</head>
<body>
	<div class="header">
		<ul>
			<div>
				<h1>
					<a href="cms_system.php">CMS SYSTEM</a>
				</h1>
			</div>
		  <li><a class="active" href="#home">About</a></li>
		  <li><a href="#news">CONTACTS</a></li>
		  <li><a href="#contact">News</a></li>
		  <li><a href="#about">Home</a></li>
		</ul>
	</div>
     <div class="row">
     	<div class="col-3 menu">
            <?php

            $sel="SELECT * FROM post";
            $run_sel=mysqli_query($conn,$sel);
            while ($rows=mysqli_fetch_assoc($run_sel))
            {
                echo '
                    <div class="post">
                        <h1>
                                    The post area
                        </h1>
                        <img src="tree.JPEG">
                            <p>
                                This tutorial is written with the total Linux n00b in mind.
                                I\'ve seen too many n00bs get totally left in the dark by asking what
                                the best distro is. They seem to only get flooded with too many
                                answers in so short a time. I\'m a little bit of a n00b too, so I know
                                how it feels. I will cover a grand total of two basic distros. You may
                                learn to strongly prefer other ones (I do!) but this is just to get
                                you started. I touch on a number of topics that would be impossible to
                                go into in depth in one tutorial, so I encourage you to actively seek
                                out more about the concepts I make reference to.
                            </p>
                     </div> 
                    '; 
            }
            ?>

        </div>
<!--right side area-->
        <div class="col-9">
        	<form>
        		<div class="aside">
        			<h4>
        				Search:<input type="text" name="serch" placeholder="seaching.....">
        			    <button id="search"><img class="image" src="search.JPEG"></button>
        			</h4>
        		</div>
        	</form>
        	<div class="login">
        	  <form>
        	  	<h4>
        	  		Login Area
        	  	</h4>
        	    <label for="username">Username:</label>
        	    <input type="text" id="username" name="username">

        	    <label for="password">Password</label>
        	    <input type="password" id="Password" name="password">

        	    <input type="submit" value="Submit">
        	  </form>
        	</div>
        	<div class="login">
        		<h2>
        			Div Element Test1
        		</h2>
        		<p>
                     Just as there are many Linux distros, so there are also many types of
                     Knoppix. I won?t go into using any of them, but they should all be
                     somewhat similar. Some of them include: Gnoppix, Knoppix STD, Morphix,
                     and PHLAK. Other distros also have live-CDs.
        		</p>
        	</div>
        		<div class="login">
        			<h2>
        				Div Element Test2
        			</h2>
        			<p>
        	             Just as there are many Linux distros, so there are also many types of
        	             Knoppix. I won?t go into using any of them, but they should all be
        	             somewhat similar. Some of them include: Gnoppix, Knoppix STD, Morphix,
        	             and PHLAK. Other distros also have live-CDs.
        			</p>
        		</div>
        			<div class="login">
        				<h2>
        					Div Element Test3
        				</h2>
        				<p>
        		             Just as there are many Linux distros, so there are also many types of
        		             Knoppix. I won?t go into using any of them, but they should all be
        		             somewhat similar. Some of them include: Gnoppix, Knoppix STD, Morphix,
        		             and PHLAK. Other distros also have live-CDs.
        				</p>
        			</div>
     	</div>

    </div>
    <div class="footer">
    	<footer>
    	<p>&copy;2019 stiveckamashx@gmail.com.... All rights reserved.</p>
    	</footer>
    </div>
</body>
</html>