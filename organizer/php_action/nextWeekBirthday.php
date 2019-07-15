<?php
            require_once('connection.php');  
                $dbobj=new dbconnect();
	            $con=$dbobj->getcon();
	   
			//Select Query to fetch all the records in a table
			$query = "SELECT * FROM  users WHERE  DATE_ADD(dateOfBirthday, INTERVAL YEAR(CURDATE())-YEAR(dateOfBirthday)+ IF(DAYOFYEAR(CURDATE()) > DAYOFYEAR(dateOfBirthday),1,0)YEAR)  BETWEEN CURDATE() AND DATE_ADD(CURDATE(), INTERVAL 14 DAY)";
			
			$exec = mysqli_query($con,$query);
			if($exec){
				$nor =  mysqli_num_rows($exec);//Get the number of matching records.
				if($nor>0)
				{	
					echo "<table id='tableUsersToday' border=1 width=100%>
						<tr>
							<th height=50px >User ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>                    
                            <th>Mobile</th>  
							<th>Group </th>
							<th>DOB</td> 
							
							
						</tr>";
					while($record = mysqli_fetch_array($exec))
					{
						echo "<tr>
							<td>".$record["userID"]."</td>
							<td>".$record["firstName"]."</td>
                            <td>".$record["lastName"]."</td>
                            <td>".$record["mobile"]."</td>
                            <td>".$record["userType"]."</td>
                            <td>".$record["dateOfBirthday"]."</td>
							
							
						</tr>";
					}
					echo "</table>";
				}
				else
				{
					echo "No Birthday This Week! ".mysqli_error($con);
				}
			}
			else{
				echo "User DB could not be Found! ".mysqli_error($con);
			}
			
			$dbobj->close();
		?>
