<div class="section-header">
  <h2 class="section-title wow fadeInDown">Our Facilities</h2>
  <p class="wow fadeInDown">Lakefront B&B with casino, near San Giuliano Park. Free buffet breakfast and WiFi .</p>
</div>
<div class="row">
  <div class="features">
  
<?php
$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "venicebangla";
	
	
	
	/*$servername = "localhost";
	$username = "veniceba_bangla";
	$password = "v_15_b_f_i";
	$dbname = "veniceba_bangla";*/
	

	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	
	$sql = "SELECT * FROM `facilities`";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) 
	{	
		$i = 1;
		// output data of each row
		while($row = $result->fetch_assoc()) 
		{
			echo ' <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="100ms" >
					  <div class="media service-box">
						<div class="pull-left"> <i class="'.$row["icon"].'"></i> </div>
						<div class="media-body">
						  <h4 class="media-heading">'. $row["title"].'</h4>
						  <p>'. $row["desc"].'</p>
						</div>
					  </div>
					</div>';
			
		}
	} 
	else 
	{
    	echo "No Facilities Found";
	}
	
	$conn->close();
?>   
  
  
    
    
  </div>
  
</div>

<p class="text-center"><a href="#booking" class="get-started btn-success">Book Room Now!!</a></p>
