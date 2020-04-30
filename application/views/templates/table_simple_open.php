<div class="row">
  <div class="col-xs-<?php echo $table['width']; ?>">
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title"><?php echo $table['title']; ?></h3>

        <div class="box-tools">
          <?php if ($table['search']) : ?>
          <form action="<?php echo $table['search_url']; ?>" method="get">
            <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
              <input type="text" name="q" class="form-control pull-right" placeholder="Search">
  
              <div class="input-group-btn">
                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </form>
          <?php endif; ?>
        </div>
      </div>
      <!-- /.box-header -->
      <div class="box-body table-responsive no-padding">
        <table class="table table-<?php echo $table['theme']; ?>">