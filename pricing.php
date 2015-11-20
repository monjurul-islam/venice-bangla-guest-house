<div class="section-header" style="padding-bottom:0; margin-bottom:0;">
  <h2 class="section-title wow fadeInDown">Pricing</h2>
  
</div>
<div class="row">

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
	
	$sql = "SELECT * FROM `pricing` WHERE `status` =1 ";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) 
	{	
		$i = 1;
		// output data of each row
		while($row = $result->fetch_assoc()) 
		{
			if($i %2 == 0)
			{
				$feature = 'featured';
			}
			else
			{
				$feature = '';
			}
						
			echo '<div class="col-xs-6 col-sm-4">
					<div class="wow zoomIn" >
					  <ul class="pricing '.$feature.'">
						<li class="plan-header">
						  <div class="price-duration"> <span class="price"> '. $row["prize"].' € </span> <span class="duration"> <strong>'. $row["person"].'</strong> </span> </div>
						  <div class="plan-name">'. $row["room_type"].' </div>
						</li>
						<li><strong>'. $row["capacity"].'</strong></li>
						<li class="plan-purchase"><a class="btn btn-primary" href="#booking">Book Now!</a></li>
					  </ul>
					</div>
				  </div>';		
			$i++;
		}
	} 
	else 
	{
    	echo "Nothing Found";
	}
	
	$conn->close();
?> 




<!--  <div class="col-xs-6 col-sm-4">
    <div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="0ms">
      <ul class="pricing">
        <li class="plan-header">
          <div class="price-duration"> <span class="price"> 25 € </span> <span class="duration"> <strong>PER PERSONE PER NIGHT </strong> </span> </div>
          <div class="plan-name">Camera Matrimoniale Deluxe (2 Adulti + 1 Bambino) </div>
        </li>
        <li><strong>CAPITICY 3 BED FOR 4 FAMILY PERSONE</strong></li>
        <li class="plan-purchase"><a class="btn btn-primary" href="#booking">Book Now!</a></li>
      </ul>
    </div>
  </div>
  <div class="col-xs-6 col-sm-4">
    <div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="200ms">
      <ul class="pricing featured">
        <li class="plan-header">
          <div class="price-duration"> <span class="price"> 35 € </span> <span class="duration"> <strong>PER PERSONE PER NIGHT</strong></span> </div>
          <div class="plan-name"> DELUX CLASSIC ROOM WITH CITY VEW</div>
        </li>
        <li><strong>CAPACITY TWO BED  FOR 2 PERSONE</strong></li>
        <li class="plan-purchase"><a class="btn btn-primary" href="#booking">Book Now!</a></li>
      </ul>
    </div>
  </div>
  <div class="col-xs-6 col-sm-4">
    <div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="400ms">
      <ul class="pricing">
        <li class="plan-header">
          <div class="price-duration"> <span class="price"> 30 € </span> <span class="duration"> <strong>PER PERSONE PER NIGHT</strong></span> </div>
          <div class="plan-name"> CAMERA TRIPILA WITH SHEARED BATHROOM</div>
        </li>
        <li><strong>CAPACITY 3 BED  FOR 3 PERSONE</strong></li>
        <li class="plan-purchase"><a class="btn btn-primary" href="#booking">Book Now!</a></li>
      </ul>
    </div>
  </div>
  <div class="col-xs-6 col-sm-4">
    <div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="600ms">
      <ul class="pricing featured">
        <li class="plan-header">
          <div class="price-duration"> <span class="price"> 25 € </span> <span class="duration"><strong>PER PERSONE PER NIGHT</strong> </span> </div>
          <div class="plan-name"> ECONOMY QUADRUPLE ROOM WITH SHARED BATHROOM </div>
        </li>
        <li><strong>CAPACITY 4 BED FOR 4 PEOPLE</strong></li>
        <li class="plan-purchase"><a class="btn btn-primary" href="#booking">Book Now!</a></li>
      </ul>
    </div>
  </div>
  <div class="col-xs-6 col-sm-4">
    <div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="600ms">
      <ul class="pricing">
        <li class="plan-header">
          <div class="price-duration"> <span class="price"> 30 € </span> <span class="duration"><strong>PER PERSONE PER NIGHT</strong> </span> </div>
          <div class="plan-name"> DELUX ROOM <br /><br /></div>
        </li>
        <li><strong>CAPACITY 2 BED FOR 2 PRESONE</strong></li>
        <li class="plan-purchase"><a class="btn btn-primary" href="#booking">Book Now!</a></li>
      </ul>
    </div>
  </div>-->
  
  <!--<div class="col-xs-6 col-sm-4">
    <div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="600ms">
      <ul class="pricing featured">
          <li class="plan-purchase"><a class="btn btn-primary" href="#booking">Book Now!</a></li>        
      </ul>
    </div>
  </div>
  -->
</div>
