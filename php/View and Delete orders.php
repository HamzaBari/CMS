<?php
    //Include the PHP functions to be used on the page 
    include('common.php'); 
	
    //Output header and navigation 
    outputHeader("Content Managment System");
    outputBannerNavigation("CMS");
?>

<!-- Contents of the page -->
<!--table with Edit and Delete button to view,edit and delete order details-->
<div class="box">
<form action="Customerinfo.php" method="post" class="text">
  Customer-Id: <input type="number" name="Customer-Id" required><br>
  Email: <input type="email" name="Email" required><br>
  <button onclick="submit">Update</button>
</form>
</div>


<div class="box">
<table>
<tr>
    <th>Order Id</th>
    <th>Customer id</th>
    <th>Product Id</th>
    <th>Count</th>
    <th>Address Line1</th>
    <th>Address Line2</th>
    <th>City</th>
    <th>Postcode</th>
    <th>cost</th>
    <th>Date</th>
    <th>Time</th>
    
  </tr>
  <tr>
    <td>1</td>
    <td>1</td>
    <td>3<br>2</td>
    <td>3<br>3</td>
    <td>25,Darwinroad</td>
    <td>Ilford</td>
    <td>London</td>
    <td>IG2 5RT</td>
    <td>£595.00</td>
    <td>21/11/2019</td>
    <td>09:00:00</td>
  </tr>
  <tr>
    <td>2</td>
    <td>5</td>
    <td>3<br>4</td>
    <td>1<br>2</td>
    <td>78 Fencepiece road</td>
    <td>woodford</td>
    <td>London</td>
    <td>IG4 5RY</td>
    <td>£234.00</td>
    <td>31/11/2019</td>
    <td>12:00:00</td>
  </tr>
  <tr>
    <td>3</td>
    <td>3</td>
    <td>1<br>2<br>3<br>4<br>5</td>
    <td>1<br>1<br>1<br>1<br>1</td>
    <td>sutherland road</td>
    <td>southall</td>
    <td>London</td>
    <td>UB1 2DH</td>
    <td>£987.00</td>
    <td>13/12/2019</td>
    <td>13:00:00</td>
  </tr>
  <tr>
    <td>4</td>
    <td>4</td>
    <td>5<br>3</td>
    <td>10<br>6</td>
    <td>89,rutlan road</td>
    <td>Watford</td>
    <td>London</td>
    <td>NW4 5BT</td>
    <td>£940</td>
    <td>18/12/2019</td>
    <td>15:00:00</td>
  </tr>
  <tr>
    <td>5</td>
    <td>2</td>
    <td>1<br>4<br>5</td>
    <td>2<br>3<br>1</td>
    <td>78,Deanbeigh road</td>
    <td>Edgware</td>
    <td>London</td>
    <td>NW3 7SE</td>
    <td>£635</td>
    <td>19/01/2020</td>
    <td>20:00:00</td>
  </tr>
  <tr>
    <td> <button onclick="submit">Update</button></td>
    <td><button onclick="submit">Delete</button></td>
   </tr>
</table>
</div>

<!--footer-->
<div class="footer">
<a>Content Managment System</a>
</div>

<?php
    //Output the footer
    outputFooter();