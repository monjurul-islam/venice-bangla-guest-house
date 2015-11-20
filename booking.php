<div class="section-header">
  <h2 class="section-title wow fadeInDown" style="color:aliceblue !important">Hotel Booking</h2>
</div>
<div class="panel panel-success">
  <div class="panel-heading">
    <h3 class="panel-title">Request a Reservation</h3>
  </div>
  <div class="panel-body">
    <div class="row">
      <form class="form-horizontal" method="post" action="adminv/publics/request_booking" >
        <div class="col-md-6">
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Your Reservation</h3>
            </div>
            <div class="panel-body">
              <div class="form-group">
                <label for="datepicker_check_in" class="col-sm-3 control-label">Check-in</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="datepicker_check_in" name="check_in" placeholder="dd-mm-yy" required>
                </div>
              </div>
              <div class="form-group">
                <label for="datepicker_check_out" class="col-sm-3 control-label">Check-out</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="datepicker_check_out" name="check_out" placeholder="dd-mm-yy" requires>
                </div>
              </div>
              <div class="form-group">
                <label for="room_type" class="col-sm-3 control-label">Reserve </label>
                <div class="col-sm-9">
                  <select class="form-control" name="room_type" id="room_type" requires>
                    <option value="NULL">Select Room Type</option>
                    <option >Camera Matrimoniale Deluxe (2 Adulti + 1 Bambino) </option>
                    <option >DELUX CLASSIC ROOM WITH CITY VEW </option>
                    <option >CAMERA TRIPILA WITH SHEARED BATHROOM </option>
                    <option >ECONOMY QUADRUPLE ROOM WITH SHARED BATHROOM</option>
                    <option >DELUX ROOM </option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="adults" class="col-sm-3 control-label">Adult(s)</label>
                <div class="col-sm-9">
                  <select class="form-control" name="adults" id="adults" requires>
                    <option value="NULL">Select no. adults</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3 </option>
                    <option value="4">4 </option>
                    <option value="5">5</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="children" class="col-sm-3 control-label">Children</label>
                <div class="col-sm-9">
                  <select class="form-control" name="children" id="children"  requires>
                    <option value="NULL">Select no. children</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3 </option>
                    <option value="4">4 </option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Do you wish to reserve an indoor parking space?</h3>
            </div>
            <div class="panel-body">
              <div class="form-group">
                <div class="col-sm-3"> </div>
                <div class="col-sm-9">
                  <div class="radio">
                    <label class="col-sm-4">
                      <input type="radio" name="parking_space" id="blankRadio1" value="yes" aria-label="Yes">
                      Yes </label>
                    <label class="col-sm-8">
                      <input type="radio" name="parking_space" id="blankRadio1" value="no" aria-label="No">
                      No </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="car_type" class="col-sm-3 control-label">Type of Car</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="car_type" name="car_type" placeholder="Please Enter Car Type" >
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Your Contact Information</h3>
            </div>
            <div class="panel-body">
              <div class="form-group">
                <label for="last_name" class="col-sm-3 control-label">Last Name</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" required>
                </div>
              </div>
              <div class="form-group">
                <label for="first_name" class="col-sm-3 control-label">First Name</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" required>
                </div>
              </div>
              <div class="form-group">
                <label for="telephone" class="col-sm-3 control-label">Telephone </label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="telephone" name="telephone" placeholder="Telephone" required>
                </div>
              </div>
              <div class="form-group">
                <label for="email" class="col-sm-3 control-label">Email</label>
                <div class="col-sm-9">
                  <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="nationality" class="col-sm-3 control-label">Nationality</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="nationality" name="nationality" placeholder="Nationality" required>
                </div>
              </div>
              <div class="form-group">
                <label for="passport" class="col-sm-3 control-label">Passport No.</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="passport" name="passport" placeholder="Passport No." required>
                </div>
              </div>
            </div>
          </div>
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Comments / Messages </h3>
            </div>
            <div class="panel-body">
              <div class="form-group">
                <label for="message" class="col-sm-3 control-label">Your Message</label>
                <div class="col-sm-9">
                  <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3"> </div>
        <div class="col-md-6">
          <input type="submit" class="btn btn-primary btn-lg btn-block " value="Send Booking Request " name="request_submit">
        </div>
        <div class="col-md-3"> </div>
      </form>
    </div>
  </div>
</div>
