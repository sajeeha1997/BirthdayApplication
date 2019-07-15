<?php
            require_once('connection.php');  
                $dbobj=new dbconnect();
	            $con=$dbobj->getcon();
	   
			//Select Query to fetch all the records in a table
			$query = "SELECT * FROM users;";
		
			$exec = mysqli_query($con,$query);
			if($exec){
				$nor =  mysqli_num_rows($exec);//Get the number of matching records.
				if($nor>0)
				{	
					echo "<table id='tableUsersAll' border=1 width=100%>
						<tr>
							<th height=50px >User ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Perferred Name</th>
                            <th>DOB </th>
                            <th>Official Email</th>
                            <th>Personal Email</th>
                            <th>Mobile</th>
                            <th>Facebook Link</th>
                            <th>Designation</th>
                            <th>NIC</th>
                            <th>Student NO</th>
                            <th>Food</th>
                            <th>Note</th>
                            <th>User Type </th>
							
							
						</tr>";
					while($record = mysqli_fetch_array($exec))
					{
						echo "<tr>
							<td>".$record["userID"]."</td>
							<td>".$record["firstName"]."</td>
                            <td>".$record["lastName"]."</td>
                            <td>".$record["perferredName"]."</td>
                            <td>".$record["dateOfBirthday"]."</td>
                            <td>".$record["officialEmail"]."</td>
                            <td>".$record["personalEmail"]."</td>
                            <td>".$record["mobile"]."</td>
                            <td>".$record["facebookLink"]."</td>
                            <td>".$record["designaion"]."</td>
                            <td>".$record["nic"]."</td>
                            <td>".$record["studentNo"]."</td>
                            <td>".$record["foodPreference"]."</td>
                            <td>".$record["note"]."</td>
                            <td>".$record["userType"]."</td>
							
							
						</tr>";
					}
					echo "</table>";
				}
				else
				{
					echo "User DB Empty! ".mysqli_error($con);
				}
			}
			else{
				echo "User DB could not be Found! ".mysqli_error($con);
			}
			
			$dbobj->close();
		?>
