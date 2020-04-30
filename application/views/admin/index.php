<div class="row">
	<div class="col-md-3">
		<div class="small-box bg-aqua">
      <div class="inner">
        <h3><?php echo $visitor; ?></h3>

        <p>Visitor</p>
      </div>
      <div class="icon">
        <i class="fa fa-bar-chart"></i>
      </div>
      <a href="<?php echo base_url('visitor'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
	</div>

	<div class="col-md-3">
		<div class="small-box bg-green">
      <div class="inner">
        <h3><?php echo $content; ?></h3>

        <p>Content</p>
      </div>
      <div class="icon">
        <i class="fa fa-table"></i>
      </div>
      <a href="<?php echo base_url('content'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
	</div>

	<div class="col-md-3">
		<div class="small-box bg-red">
      <div class="inner">
        <h3><?php echo $user; ?></h3>

        <p>User</p>
      </div>
      <div class="icon">
        <i class="fa fa-user"></i>
      </div>
      <a href="<?php echo base_url('user'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
	</div>
</div>