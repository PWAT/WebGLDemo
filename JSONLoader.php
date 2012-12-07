<?php #Script 1.3 - index.php

$ptitle = 'Demo project';
$page_header = 'JSON Loader Page';

include ('includes/header.php');
?> 
  	<div class="sidebar">
        <!-- insert your sidebar items here -->
        <h3>Latest News</h3>
        <h4>New Website Launched</h4>
        <h5>October 26th, 2012</h5>
        <p>3D and 4D viewer website.<br /><a href="#">Read more</a></p>
        <p></p>
        <h4>New Website Launched</h4>
        <h5>October 26th, 2012</h5>
        <h3>Useful Links</h3>
        <ul>
          <li><a href="http://dev.opera.com/articles/view/an-introduction-to-webgl/">Opera webGL</a></li>
          <li><a href="https://developer.mozilla.org/en-US/docs/WebGL">Mozilla webGL</a></li>
          <li><a href="http://www.kadrmasconcepts.com/blog/2012/01/24/from-blender-to-threefab-exporting-three-js-morph-animations/">JSON export</a></li>
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
				<center><h1>Loading a Model in Three.js JSON Format</h1></center>
				<div id="container" style="width:70%; height:70%; position:absolute;"></div>
				<div id="prompt" style="width:95%; height:6%; bottom:30px; text-align:center; position:absolute;">
					Click the mouse to manipulate the model: Left = rotate, Right = Pan
				</div>				
      </div>
    </div>
<?php
include ('includes/footer.php');
?>