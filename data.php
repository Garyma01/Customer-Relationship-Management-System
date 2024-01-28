
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Data</title>
    <link href="css/cutomer_data.css" type="text/css" rel="stylesheet">
</head>

<body>
    
        <body>
        <h1> <u>Customer Data </u></h1>
    <header>
    <nav class="navbar">
        <ul>
        <li><a href="logout.php"> <button class="logbtn">Log out</button></a></li>
            <!-- <li><a href="#">About</a></li> -->
            <li><a href="FAQs Page(customers).php">FAQs</a></li>
            <li><a href="profiles.php">Customer Profiles</a></li>
            <li><a href="reports.php">Reports</a></li>
            <li><a href="complaints.php"> Complaints</a></li>
            <li><a href="data.php" class="active"> Customer Data</a></li>
            <li><a href="target_data.php"> Target customers</a></li>
            <li><a href="emp_offer.php">Offers</a></li>
            <li><a href="employee page.php" >Home </a></li>
            <img src="img/crm-icon-png.png" alt="logo">
        </ul>
    </nav>
   </header>
 
    <button class="btn" name="add" onclick="fun()">+Add</button>
    <script>
    function fun(){
        location.replace("customer_data.php");
    }
    </script>
    
    <input id="searchbar" onkeyup="search_animal()" type="text"
        name="search" placeholder="Search customer..">
<br>
    <table class="container">
	
   <tr>
       <th>Customer Id</th>
       <th>E-mail</th>
       <th>Full Name</th>
       <th>Phone No.</th>
       <th>Age</th>
	   <th>gender</th>
       <th>Address</th>
       
       <th>Purchase Frequency</th>
       <th>Avg. Price   </th>
       <th>Action</th>
   </tr>
   <?php
	require_once "config.php";
    error_reporting(0);
	$sql = "SELECT * FROM customer_data ";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
               
        echo"<tr class='element'><td>" .  $row['id'] . "</td>
       <td>" . $row['email'] . "</td> 
       <td>" .  $row['full_name'] . "</td> <td>" . $row['phone'] . "</td><td>" .   $row['gender'] . "</td>
       <td>" .  $row['age'] . "</td>
       <td>" .  $row['address'] . "</td>
       <td>" .  $row['purchase_frequency'] . "</td>
	   <td>" .  $row['avg_price']. "</td>
       
      
      <td> <a ' href='purchase_history.php?id=" .$row['id']. "'><button class='history_btn'>Purchase History </button> </a>
      <a ' href='edit_customer.php?id=" .$row['id']. "'><button class='delete'>Edit </button> </a>
     <a onClick=\"javascript: return confirm('Are you sure to delete this record?');\"href='customer_delete.php?id=" .$row['id']. "'> <button class='delete'>Delete </button></a>
       </td>
    </tr>";
    

	
}}
 else{
	echo "something went wrong.";
}
		


?> 

<script>

        </script>  
 <script src="js/search.js"></script>    

 </table>
</body>
</html>
   