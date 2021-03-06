<div class="panel panel-primary"> 
  <!-- Default panel contents -->
  <div class="panel-heading">Hotel Facility</div>
  <div class="panel-body">
    <div class="row">
      <div class="col-md-6 col-md-offset-3"> <span class="btn btn-block btn-info btn-lg " disabled="disabled">Facility Edit. Serial #<strong>0<?php echo $id;?></strong></span></div>
    </div>
    <hr />
    <form class="form-horizontal" action="" method="post">
      <div class="form-group">
        <label for="title" class="col-sm-2 control-label">Title</label>
        <div class="col-sm-7">
          <input type="text" class="form-control" id="title" required placeholder="Title" value="<?php echo $title; ?>" name="title">
        </div>
      </div>
      <div class="form-group">
        <label for="desc" class="col-sm-2 control-label">Description<br /><small class="text-warning">Max Length 110 Char</small></label>
        <div class="col-sm-7">
          <textarea maxlength="110" class="form-control" id="desc" required name="desc" placeholder="Add Description" title="max length 110 chars."><?php echo $desc; ?></textarea>
        </div>
      </div>
      
      <div class="form-group">
        <label for="icon" class="col-sm-2 control-label">Choose Icon</label>
        <div class="col-sm-2">
          <input type="text" class="form-control icon-picker" id="icon" placeholder="Select Icon From Right" value="<?php echo $icon; ?>" name="icon"> 
          <input type="hidden"  value="<?php echo $id; ?>" name="id"> 
        </div>
      </div>
     
     
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-12">
          <input type="submit" value="Add Facility" class="btn btn-success" name="update_facility">
        </div>
      </div>
    </form>
  </div>
</div>
</div>
<script type="text/javascript">
        $(function () {
            $(".icon-picker").iconPicker();
        });
</script>
