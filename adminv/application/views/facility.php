<div class="panel panel-primary"> 
  <!-- Default panel contents -->
  <div class="panel-heading">Hotel Facilities</div>
  <div class="panel-body"> 
  
  <h3>All Facilities</h3>
  
	<?php
	
	$data = '<hr>';
	
		foreach($qry->result() as $qry_res)
		{
			$data.= '<div class="row"><div class="col-md-1">
						<button class="btn btn-default btn-lg" type="button">							
							<span class="badge">'.$qry_res->id.' </span>
						</button>
					 </div> 
					 <div class="col-md-10">';
			
			$data.= '<dl>
					  <dt><span aria-hidden="true" style="font-size:36px;" class="'.$qry_res->icon.'"></span><br /> '.$qry_res->title.'</dt>
					  <dd>'.$qry_res->desc.'</dd>
					</dl>';
			$data.= '<a class="btn btn-info" href="'.base_url().'vbangla/edit_facility/'.$qry_res->id.'" role="button">Edit Facility</a> <hr >';
			
			$data.= '</div></div>';
		}
		
		$data.= '<a class="btn btn-primary" href="'.base_url().'vbangla/add_facility" role="button">Add New Facility</a>';
		
		echo $data;
	 
	?> 
  
  </div>
</div>

<script type="text/javascript">
        $(function () {
            $(".icon-picker").iconPicker();
        });
</script>
<!--
<form method="post" >
<input type="text" name="someName" class="icon-picker" />
</form>
-->