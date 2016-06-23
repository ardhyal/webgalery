        <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">New Article</h3>

              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <?php echo form_open('article/create'); ?>
            
              <div class="box-body">
              <div class="form-horizontal">
               <?php echo $this->session->flashdata('notif'); ?>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Title</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" name="title" placeholder="Title">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Article</label>
                  <div class="col-sm-10">
                    <textarea id="editor1" name="contents" rows="10" cols="80">
                    </textarea>
                  </div>
                </div>
                <!-- Date -->
                <div class="form-group">
                <label for="inputDate3" class="col-sm-2 control-label">Publish Date</label>
                <div class="col-sm-10">
                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" name="publish_date" class="form-control pull-right" id="datepicker">
                  </div>
                </div>
                <!-- /.input group -->
              </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Submit</button>
              </div>
              <!-- /.box-footer -->
            </div>
            <?php echo form_close(); ?>
          </div>
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Table Article</h3>

              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Title</th>
                  <th>Content</th>
                  <th>Post Date</th>
                  <th>Publish Date</th>
                  <th>Post By</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                  $i = 1;
                  foreach ($news as $key) {
                ?>
                <tr>
                  <td><?php echo $i++;?></td>
                  <td><?php echo $key->title; ?></td>
                  <td><?php echo $key->content; ?></td>
                  <td><?php echo $key->post_date; ?></td>
                  <td><?php echo $key->publish_date; ?></td>
                  <td><?php echo $key->name; ?></td>
                  <td>
                    <div class="btn-group">
                      <a href="<?php echo site_url('article/view/'.$key->id_news); ?>"
                        <button type="button" class="btn btn-success btn-xs">View</button></a>
                      <a href="<?php echo site_url('article/update/'.$key->id_news); ?>"
                        <button type="button" class="btn btn-info btn-xs">Update</button></a>
                      <a href="<?php echo site_url('article/delete/'.$key->id_news); ?>"
                      <button type="button" class="btn btn-danger btn-xs">Delete</button></a>
                    </div>
                  </td>
                </tr>
                <?php 
                  } 
                ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>Titel</th>
                  <th>Content</th>
                  <th>Post Date</th>
                  <th>Publish Date</th>
                  <th>Post By</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>