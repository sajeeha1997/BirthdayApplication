<?php
            require_once('connection.php');  
                $dbobj=new dbconnect();
	            $con=$dbobj->getcon();
	   
			//Select Query to fetch all the records in a table
			$query = "SELECT userID,concat(firstName,' ',lastName)as fullname ,userType,dateOfBirthday FROM users;";
		
			$exec = mysqli_query($con,$query);
			if($exec){
				$nor =  mysqli_num_rows($exec);//Get the number of matching records.
				if($nor>0)
				{	
					echo "<table id='tableAllBirthday' border=1 width=100%>
						<tr>
							<th height=50px >User ID</th>
                            <th>Full Name</th>
                            <th>Group </th>
                            <th>Birthday </th>
                            <th>Age </th>
							
							
						</tr>";
					while($record = mysqli_fetch_array($exec))
					{
                        $age=$record["dateOfBirthday"];
						$dob=new DateTime($age);
						$now=new DateTime();
						$difference=$now->diff($dob);
						$age=$difference->y;
						echo "<tr>
							<td>".$record["userID"]."</td>
							<td>".$record["fullname"]."</td>
                            <td>".$record["userType"]."</td>
                            <td>".$record["dateOfBirthday"]."</td>
                            <td>".$age."</td>
							
							
						</tr>";
					}
					echo "</table>";
				}
				else
				{
					echo "Birthday DB Empty! ".mysqli_error($con);
				}
			}
			else{
				echo " DB could not be Found! ".mysqli_error($con);
			}
			
			$dbobj->close();
		?>
