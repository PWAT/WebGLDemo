<?php #Script 1.3 - index.php

$ptitle = 'Demo project';
$page_header = 'Index Page';

include ('includes/header.php');
?> 

 <div class="sidebar">
        <!-- insert your sidebar items here -->
        <h3>Image Files</h3>
        <h5>October 1st, 2012</h5>
  				<form>
					Select a file to upload:
					<input type="file" id="files" name="files[]" multiple="multiple" accept="OBJ/*" />
								<output id="list"></output>
					</form>			
		
	
		<br /><a href="#">Read more</a>
        <h5>October 1st, 2012</h5>
        <p>2011 sees the redesign of our website.<br /><a href="#">Read more</a></p>
        <h3>Useful Links</h3>
        <ul>
          <li><a href="#">link 1</a></li>
          <li><a href="#">link 2</a></li>
          <li><a href="#">link 3</a></li>
          <li><a href="#">link 4</a></li>
        </ul>
        <h3>Search</h3>
        <form method="post" action="#" id="search_form">
          <p>
            <input class="search" type="text" name="search_field" value="Enter keywords....." />
            <input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px;" src="style/search.png" alt="Search" title="Search" />
          </p>
        </form>
      </div>
      <div id="content">
        <!-- insert the page content here -->
      
        <h1>Welcome to the Facial Gesture Analysis template</h1>
					<p>This standards compliant, simple, fixed width website template is released as an 'open source' design (under a <a href="http://creativecommons.org/licenses/by/3.0">Creative Commons Attribution 3.0 Licence</a>), which means that you are free to download and use it for anything you want.</p>
					<p align="center">
					<span style="font-family:Helvetica;font-size:40px;">WebGL OBJ and STL loader</span>
					</p>
			<div id="fileDrop" class="fileDrop" ><h2 align="center">Drag to here an OBJ or STL file</h2>
				<h5 align="center" style="color:red">Left mouse button to rotate, middle button to move and mouse wheel to zoom.<br>Right click to switch between wireframe or solid rendering.
				<a href="galleon.obj" onclick="example('galleon.obj')">galleon.obj </a>
				</h5>
			</div>
		<div id="webgl" oncontextmenu="return false;">
		</div>
				<div class="navbar">
					<div class="navbar-inner">
						<div class="container">
							<span class="btn-navheader">4D image data Demo - Facial Gestures</span>
							<a href="#" class="btn reset btn-navbar" style="display: block;">Reset</a>
							<a href="#" class="btn pause btn-navbar" style="display: block;">Pause</a>
							<a href="#" class="btn start btn-navbar" style="display: block;">Start</a>
						</div>
					</div>
				</div>
	  </div>  
	<script src="js/objstl.js"></script>	
<?php
include ('includes/footer.php');
?>