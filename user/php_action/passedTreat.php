<?php
            require_once('connection.php');  
                $dbobj=new dbconnect();
	            $con=$dbobj->getcon();
	   
			//Select Query to fetch all the records in a table
			$query = "SELECT * FROM treat where treatStatus='celebrated' ";
		
			$exec = mysqli_query($con,$query);
			if($exec){
				$nor =  mysqli_num_rows($exec);//Get the number of matching records.
				if($nor>0)
				{	
					echo "<table id='tablePassedTreat' border=1 width=100%>
						<tr>
							<th height=50px >Treat ID</th>
                            <th>Date</th>
                            <th>Time</th>                    
                            <th>Venue</th>  
                            <th>Note </th>
							
							
							
							
						</tr>";
					while($record = mysqli_fetch_array($exec))
					{
						echo "<tr>
							<td>".$record["treat_Id"]."</td>
							<td>".$record["treatDate"]."</td>
                            <td>".$record["treatTime"]."</td>
                            <td>".$record["venue"]."</td>
                            <td>".$record["notes"]."</td>
							
						</tr>";
					}
					echo "</table>";
				}
				else
				{
					echo "No Celebrated Birthday Treats! ".mysqli_error($con);
				}
			}
			else{
				echo " DB could not be Found! ".mysqli_error($con);
			}
			
			$dbobj->close();
		?>
