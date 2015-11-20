<div class="panel panel-primary"> 
  <!-- Default panel contents -->
  <div class="panel-heading">Room Pricing</div>
  <div class="panel-body">
    <div class="row">
      <div class="col-md-6 col-md-offset-3"> <span class="btn btn-block btn-info btn-lg " disabled="disabled">Pricing Edit. Serial #<strong>0<?php echo $id;?></strong></span></div>
    </div>
    <hr />
    <form class="form-horizontal" action="" method="post">
      <div class="form-group">
        <label for="prize" class="col-sm-2 control-label">Prize</label>
        <div class="col-sm-2">
          <input type="number" class="form-control" id="prize" required placeholder="Prize" value="<?php echo $prize; ?>" name="prize">
        </div>
      </div>
      <div class="form-group">
        <label for="person" class="col-sm-2 control-label">Persons</label>
        <div class="col-sm-7">
          <input type="text" class="form-control" id="person" required placeholder="Persons" value="<?php echo $person; ?>" name="person">
        </div>
      </div>
      <div class="form-group">
        <label for="room_type" class="col-sm-2 control-label">Room Type</label>
        <div class="col-sm-7">
          <select id="room_type" name="room_type" class="form-control" required>
            <option selected="selected"><?php echo $room_type; ?></option>
             <option value="">Select Room Type</option>
            <option>Camera Matrimoniale Deluxe (2 Adulti + 1 Bambino) </option>
            <option>DELUX CLASSIC ROOM WITH CITY VEW </option>
            <option>CAMERA TRIPILA WITH SHEARED BATHROOM </option>
            <option>ECONOMY QUADRUPLE ROOM WITH SHARED BATHROOM</option>
            <option>DELUX ROOM </option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label for="capacity" class="col-sm-2 control-label">Room Capicity</label>
        <div class="col-sm-7">
          <input type="text" class="form-control" id="capacity" required placeholder="Room Capicity" value="<?php echo $capacity; ?>" name="capacity" >
          <input type="hidden" class="form-control" id="id" required name="id"  value="<?php echo $id; ?>">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <input type="submit" value="Update Room Pricing" class="btn btn-success" name="update_pricing">
        </div>
      </div>
    </form>
  </div>
</div>
</div>
