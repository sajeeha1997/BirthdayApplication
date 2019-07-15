<?php
            require_once('connection.php');  
                $dbobj=new dbconnect();
	            $con=$dbobj->getcon();
	   
			//Select Query to fetch all the records in a table
			$query = "SELECT userID,firstName,lastName,mobile,userType FROM users where  MONTH(dateOfBirthday)=MONTH(CURRENT_DATE) AND DAY(dateOfBirthday)=DAY(CURRENT_DATE+ INTERVAL 2 day)";
		
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
							<th>DOB</th>
							
							
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
					echo "No Birthday Day After Tomorrow! ".mysqli_error($con);
				}
			}
			else{
				echo "User DB could not be Found! ".mysqli_error($con);
			}
			
			$dbobj->close();
		?>
