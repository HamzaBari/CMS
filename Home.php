<?php
    //Include the PHP functions to be used on the page 
    include('common.php'); 
	
    //Output header and navigation 
    outputHeader("Content Managment System");
    outputBannerNavigation("CMS");
?>

<!-- Contents of the page -->
<div class="box">
<form action="Home.php" method="post" class="text">
  Staff-id: <input type="text" name="Staff-id" required><br>
  Password: <input type="password" name="password" required><br>
  <button onclick="login">Login</button>
  <button onclick="register">Add Staff</button>
</form>
</div>

<!--footer-->
<div class="footer">
<a>Content Managment System</a>
</div>


<?php
    //Output the footer
    outputFooter();