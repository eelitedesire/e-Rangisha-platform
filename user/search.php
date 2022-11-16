<?php

// Create connection
$conn = mysqli_connect("localhost", "root", "", "ads_db");
$sql = "SELECT * FROM doc_lost WHERE doc_number LIKE '%".$_POST['name']."%'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
	while ($row=mysqli_fetch_assoc($result)) {
		echo "	<tr>
		          <td>".$row['doc_number']."</td>
		          <td>".$row['fullname1']."</td>
		          <td>".$row['UserEmail']."</td>
		          <td>".$row['phone']."</td>
                  <td>".$row['country']."</td>
                  <td > ".$row['fullname1']." &nbsp Losting Document</td>
                  
		        </tr>";
	}
}
else{
	echo "<tr><td>0 result's found</td></tr>";
}

?>