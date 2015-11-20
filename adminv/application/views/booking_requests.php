<div class="panel panel-primary"> 
  <!-- Default panel contents -->
  <div class="panel-heading">Booking Requests</div>
  <div class="panel-body">
    <h1>All Booking Requests</h1>
    <div class="bootstrap-table">
      <table class="table table-striped  table-condensed table-bordered table-hover"  id="booking_requests"
           data-toolbar="#toolbar"
           data-search="true"
           data-show-refresh="true"
           data-show-toggle="true"
           data-show-columns="true"
           data-show-export="true"
           data-minimum-count-columns="2"
           data-show-pagination-switch="true"
           data-pagination="true"
           data-id-field="id"
           data-page-list="[5, 25, 50, 100, ALL]"
           data-response-handler="responseHandler">
        <thead>
          <tr>
            <th data-field="id">ID#
              <hr class="no_padding" />
              Date</th>
            <th >___Full Name___
              <hr class="no_padding" />
              Nationality</th>
            <th>Passport No.</th>
            <th>Room Type</th>
            <th>Check In
              <hr class="no_padding" />
              Check Out</th>
            <th>Members</th>
            <th>Phone No.
              <hr class="no_padding" />
              Email</th>
            <th>Car Space</th>
            <th>Status</th>
            <th>Message</th>
          </tr>
        </thead>
        <!--<tfoot>
          <tr>
            <td></td>
          </tr>
        </tfoot>-->
        <tbody>
          <?php
		
			$data = ''; 
		
			foreach($qry->result() as $qry_res)
			{
				$data.= '<tr>';				
					$data.= '<td><div class="badge">'.$qry_res->id.'</div><hr class="no_padding"> '.date("d-m-y G:i a", strtotime($qry_res->created_dt)).'</td>';
					$data.= '<td style="min-width:100px !important;"><span><strong>'.$qry_res->first_name.' '.$qry_res->last_name.'</strong></span>  <hr class="no_padding"> '.$qry_res->nationality.'</td>';							
					$data.= '<td>'.$qry_res->passport.'</td>';
					$data.= '<td>'.$qry_res->room_type.' </td>';					
					$data.= '<td align="left"><span class="btn btn-info btn-sm"> '.date("d-m-Y", strtotime($qry_res->check_in)).'</span> <hr class="no_padding"><span class="btn btn-warning btn-sm">'.date("d-m-Y", strtotime($qry_res->check_out)).'</div></td>';					
					$data.= '<td>Adult: <div class="badge">'.$qry_res->adults.'</div><hr class="no_padding"> Child: <div class="badge">'.$qry_res->children.'</div> </td>';					
					$data.= '<td>'.$qry_res->telephone.' <hr class="no_padding"> '.$qry_res->email.'</td>';					
					$data.= '<td>'.$qry_res->parking_space.' <hr class="no_padding"> '.$qry_res->car_type.' </td>';				
					
					$p = '<div class="dropdown">
								  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
									Process Booking
									<span class="caret"></span>
								  </button>
								  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
									<li > <a  class="btn btn-success" onclick="confirm_booking('.$qry_res->id.')">Confirm Booking</a></li>
									<li ><a class="btn btn-danger" onclick="cancel_booking('.$qry_res->id.')">Cancel Booking</a></li>
								  </ul>
								</div>';
					
					if($qry_res->status==0 && $qry_res->confirmed==0)
					{
						$stat = '<span class="btn btn-danger">Booking Cancelled</span> <hr class="no_padding"><span class="btn btn-default btn-xs">at '.date("d-m-Y G:i a", strtotime($qry_res->updated_dt)).'</span> ';						//$p = '';
					}
					elseif($qry_res->status==0 && $qry_res->confirmed==1)
					{
						$stat = '<span class="btn btn-success">Booking Confirmed</span> <hr class="no_padding"><span class="btn btn-default btn-xs">at '.date("d-m-Y G:i a", strtotime($qry_res->updated_dt)).'</span>';				//$p = '';
					}
					elseif($qry_res->status==1)
					{
						$stat = '<span class="btn btn-warning">Un-Processed</span>';
					}										
					
					$data.= '<td>								
								<div class="h4" id="booking_'.$qry_res->id.'">'.$stat.'</div>
								'.$p.'								
							</td>';
					$data.= '<td>'.$qry_res->message.' </td>';
				
				$data.= '</tr>';
			}
			
			echo $data;	
		?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<script>
   var $table = $('#booking_requests'),
   $remove = $('#remove'),
   selections = [];
    $(function () {
        $table.bootstrapTable({
            height: getHeight(),
            columns: 
			[                
				{
					align: 'center',
					valign: 'middle',
					sortable: true
				}, {
					
					align: 'center',
					valign: 'middle',
					sortable: true,
				}, {
					align: 'center',
					sortable: true,
				},
									{
					align: 'center',
					valign: 'middle',
					sortable: true
				}, {
					
					align: 'center',
					valign: 'middle',
					sortable: true,
				}, {
					align: 'center',
					sortable: true,
				},
									{
					align: 'center',
					valign: 'middle',
					sortable: true
				}, {
					
					align: 'center',
					valign: 'middle',
					sortable: true,
				}, {
					align: 'center',
					sortable: true,
				},
				{
					align: 'center',
					sortable: true,
				}			
            ]
        });
        // sometimes footer render error.
        setTimeout(function () {
            $table.bootstrapTable('resetView');
        }, 200);
        $table.on('check.bs.table uncheck.bs.table ' +
                'check-all.bs.table uncheck-all.bs.table', function () {
            $remove.prop('disabled', !$table.bootstrapTable('getSelections').length);
            // save your data, here just save the current page
            selections = getIdSelections();
            // push or splice the selections if you want to save all data selections
        });
        $table.on('expand-row.bs.table', function (e, index, row, $detail) {
            if (index % 2 == 1) {
                $detail.html('Loading from ajax request...');
                $.get('LICENSE', function (res) {
                    $detail.html(res.replace(/\n/g, '<br>'));
                });
            }
        });
        $table.on('all.bs.table', function (e, name, args) {
            console.log(name, args);
        });
        $remove.click(function () {
            var ids = getIdSelections();
            $table.bootstrapTable('remove', {
                field: 'id',
                values: ids
            });
            $remove.prop('disabled', true);
        });
        $(window).resize(function () {
            $table.bootstrapTable('resetView', {
                height: getHeight()
            });
        });
    });
	
	
    function totalTextFormatter(data) {
        return 'Total';
    }
    function totalNameFormatter(data) {
        return data.length;
    }
    function totalPriceFormatter(data) {
        var total = 0;
        $.each(data, function (i, row) {
            total += +(row.price.substring(1));
        });
        return '$' + total;
    }
    function getHeight() {
        return $(window).height() - $('h1').outerHeight(true);
    }

function confirm_booking(id)
{
	$.ajax({
			type: "POST",
			url: "<?php echo site_url();?>vbangla/confirm_booking/"+id,
			dataType: "html",
			success:function(data){
			 $('#booking_'+id).html(data);
			},	  
		  }); 	
}

function cancel_booking(id)
{
	$.ajax({
			type: "POST",
			url: "<?php echo site_url();?>vbangla/cancel_booking/"+id,
			dataType: "html",
			success:function(data){
			 $('#booking_'+id).html(data);
			},	  
		  }); 	
}

</script> 
