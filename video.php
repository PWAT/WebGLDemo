<?php #Script 1.3 - index.php

$ptitle = 'Demo project';
$page_header = 'Second Page';

include ('includes/header.php');
?> 
      <div class="sidebar">
        <!-- insert your sidebar items here -->
        <h3>Latest News</h3>
        <h4>New Website Launched</h4>
        <h5>October 22, 2012</h5>
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
        <h1>A Video Player Page</h1>
  			<iframe width="420" height="315" src="http://www.youtube.com/embed/pU7dbd5zT7c" frameborder="0" allowfullscreen></iframe>
      </div>
<?php
include ('includes/footer.php');
?>
