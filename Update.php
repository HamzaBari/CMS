<?php
    //Include the PHP functions to be used on the page 
    include('common.php'); 
	
    //Output header and navigation 
    outputHeader("Content Managment System");
    outputBannerNavigation("CMS");
?>

<!-- Contents of the page -->
<!--form for update product-->

<!--To view and Add product to website-->
<div contenteditable>
<div class="box">
<table>
  <tr>
    <th>Product Name</th>
    <th>Product Id</th>
    <th>Product Type</th>
    <th>Product Price</th>
    <th>Description</th>
    
  </tr>
  <tr>
    <td>ASUS TUF B450M-PLUS GAMING AM4 M0THERBOARD</td>
    <td>1</td>
    <td>MOTHERBOARD</td>
    <td>£80</td>
    <td>THE ASUS TUF B450M-PLUS GAMING AM 4 IS SPECIALLY DESIGNED FOR GAMING</td>
    
  </tr>
  <tr>
    <td>AMD RYZEN 5 3600 PROCESSOR</td>
    <td>2</td>
    <td>CPU</td>
    <td>£150</td>
    <td>THE AMD RYZEN 3RD GEN PROCESSORS GIVE YOU HUGE BOOST IN POWER</td>

  </tr>
  <tr>
    <td>MSI RADEON RX 580 8 GB ARMOR OC GRAPHIC CARD</td>
    <td>3</td>
    <td>GRAPHIC CARD</td>
    <td>£90</td>
    <td>ENHANCE YOUR PC'S CAPABILITIES WITH CORSAIR VENGEANCE RGB PRO DDR4 DRAM 3000MHZ PC RAM</td>
  </tr>
  <tr>
    <td>CORSAIR VEGEANCE RGB PRO DRAM 3000 MHZ PC RAM </td>
    <td>4</td>
    <td>RAM</td>
    <td>£90</td>
    <td>ENHANCE YOUR PC'S CAPABILITIES WITH CORSAIR VENGEANCE RGB PRO DDR4 DRAM 3000MHZ PC RAM</td>
  </tr>
  <tr>
    <td>DYNAMODE 4-PORT USD 3.0 PCIE CARD</td>
    <td>5</td>
    <td>USB PORT CARD</td>
    <td>£40</td>
    <td>YOU CAN ADD FOUR USB 3.0 PORTS TO YOUR DESKTOP TO THE 4-PORT USB 3.0 CARD</td>
  </tr>
  <tr>
    <td> <button><a href="Add.html">Add Product</a></button></td>
    <td><button><a href="update.html">Update Products</a></button></td>
  </tr>
</table>
</div>
</div>

<!--footer-->
<div class="footer">
<a>Content Managment System</a>
</div>

<?php
    //Output the footer
    outputFooter();