<?php
    //Include the PHP functions to be used on the page 
    include('common.php'); 
	
    //Output header and navigation 
    outputHeader("Content Managment System");
    outputBannerNavigation("CMS");
?>

<!--form for adding products-->
<div class="box">
    <form action="Add.php" method="post" class="text">
     Product type: <input type="text" name="Update Product" required><br>
      Name: <input type="text" name="Name" required><br>
      Price: <input type="number" name="Price" required><br>
       Image: <input type="file" name="Image" required><br>
      Description: <input type="text" name="Description" required><br>
      <button onclick="submit">Add Product</button>
    </form>



<?php
    //Output the footer
    outputFooter();