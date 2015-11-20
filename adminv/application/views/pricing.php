<div class="panel panel-primary"> 
  <!-- Default panel contents -->
  <div class="panel-heading">Room Pricing</div>
  <div class="panel-body">
  
  
  <?php 
  	
	$data = "<h2>Pricing List</h2><hr>";
  	foreach($qry->result() as $qry_res)
	{
		$data.= '<div class="row"><div class="col-xs-12 col-sm-6 col-md-12"> ';
		
		$data.= '<table class="table table-striped">';
		
			$data.= '<tr>';
				$data.= '<th class="col-md-2" rowspan="5">Room Serial : #<span class="label label-default">0'.$qry_res->id.'</span></th>';
					
			$data.= '</tr>';
			
			$data.= '<tr>';
				$data.= '<th class="col-md-2">Prize</th> <th>'.$qry_res->prize.' €</th>';					
			$data.= '</tr>';
			
			$data.= '<tr>';
				$data.= '<th class="col-md-2">Persons </th> <th>'.$qry_res->person.'</th>';					
			$data.= '</tr>';
			
			$data.= '<tr>';
				$data.= '<th class="col-md-2">Room Type</th> <th>'.$qry_res->room_type.'</th>';					
			$data.= '</tr>';
			
			$data.= '<tr>';
				$data.= '<th class="col-md-2">Room Capicity</th> <th>'.$qry_res->capacity.'</th>';					
			$data.= '</tr>';
			
			$data.= '<tr>';
				$data.= '<th align="right" colspan="3" class="col-md-12"><a style="float:right !important;" class="btn btn-lg btn-info" href="'.base_url().'vbangla/pricing_edit/'.$qry_res->id.'" >  <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit Pricing</a></th>';					
			$data.= '</tr>';
		
		$data.= '</table>';
		
		$data.= '</div></div>';
		
	}
  	
	echo $data;
  
  ?>
  
  
  </div>
</div>
</div>
