      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Form Input</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>
        <?php echo form_open_multipart('picture/upload'); ?>
        <div class="box-body">
          <div class="form-group">
            <label for="image">Upload Image</label>
            <input type="file" name="image">
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <button type="submit" class="btn btn-info pull-right">Submit</button>
        </div>
        <!-- /.box-footer-->
        <?php echo form_close(); ?>
      </div>
      <!-- /.box -->

      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Image galery</h3>
            <div class="box-tool pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
            </div>
          </div>
        <div class="box-body">
          
          <div class="row">
        <!-- <header class="page-header">
          <h1 class="page-title">Portfolio</h1>
        </header> -->
                
       <section id="portfolio" class="page-section section appear clearfix">
        <div class="container">
            <!-- <div class="heading"> 
                <p>At lorem Ipsum available, but the majority have suffered alteration in some form by injected humour.</p>
            </div> -->
<!-- <br/> -->
          <div class="container">
            <div class="row col-md-12">
                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="row">
                        <div class="thumbnail">
                            <img src="<?php echo base_url()?>assets/image/avatar.png" alt="Generic Placeholder Thumbnail" width="128" height="128">
                        </div>
                        <div class="caption">
                            <h3>Thumbnail label</h3>
                            <p>Some sample text. Some sample text.</p>
                            <a href="#" class="btn btn-primary" role="button">button</a>
                            <a href="#" class="btn btn-default" role="button">button</a>
                        </div>    
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="row">
                        <div class="thumbnail">
                            <img src="<?php echo base_url()?>assets/image/avatar.png" alt="Generic Placeholder Thumbnail" width="128" height="128">
                        </div>
                        <div class="caption">
                            <h3>Thumbnail label</h3>
                            <p>Some sample text. Some sample text.</p>
                            <a href="#" class="btn btn-primary" role="button">button</a>
                            <a href="#" class="btn btn-default" role="button">button</a>
                        </div>    
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="row">
                        <div class="thumbnail">
                            <img src="<?php echo base_url()?>assets/image/avatar.png" alt="Generic Placeholder Thumbnail" width="128" height="128">
                        </div>
                        <div class="caption">
                            <h3>Thumbnail label</h3>
                            <p>Some sample text. Some sample text.</p>
                            <a href="#" class="btn btn-primary" role="button">button</a>
                            <a href="#" class="btn btn-default" role="button">button</a>
                        </div>    
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="row">
                        <div class="thumbnail">
                            <img src="<?php echo base_url()?>assets/image/avatar.png" alt="Generic Placeholder Thumbnail" width="128" height="128">
                        </div>
                        <div class="caption">
                            <h3>Thumbnail label</h3>
                            <p>Some sample text. Some sample text.</p>
                            <a href="#" class="btn btn-primary" role="button">button</a>
                            <a href="#" class="btn btn-default" role="button">button</a>
                        </div>    
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="row">
                        <div class="thumbnail">
                            <img src="<?php echo base_url()?>assets/image/avatar.png" alt="Generic Placeholder Thumbnail" width="128" height="128">
                        </div>
                        <div class="caption">
                            <h3>Thumbnail label</h3>
                            <p>Some sample text. Some sample text.</p>
                            <a href="#" class="btn btn-primary" role="button">button</a>
                            <a href="#" class="btn btn-default" role="button">button</a>
                        </div>    
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="row">
                        <div class="thumbnail">
                            <img src="<?php echo base_url()?>assets/image/avatar.png" alt="Generic Placeholder Thumbnail" width="128" height="128">
                        </div>
                        <div class="caption">
                            <h3>Thumbnail label</h3>
                            <p>Some sample text. Some sample text.</p>
                            <a href="#" class="btn btn-primary" role="button">button</a>
                            <a href="#" class="btn btn-default" role="button">button</a>
                        </div>    
                    </div>
                </div>
                </div>
            </div>

        </div>
    </section>
   
    
    </div>
    </div>


        </div>
        <!-- /.box-body -->
      </div>