         <div class="box">
            <!-- /.box-header -->
            <div class="box-header with-border">
              <h3 class="box-title">Table Comment</h3>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Title</th>
                  <th>Comment</th>
                  <th>Time</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $no = 1;
                foreach ($comment as $key)
                 {
                ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $key->comment_name;?>
                  </td>
                  <td><?php echo $key->comment_email;?></td>
                  <td><?php echo $key->title;?></td>
                  <td><?php echo $key->comment;?></td>
                  <td><?php echo $key->time; ?></td>
                  <td><?php 
                          $status = $key->comment_status;
                          if ($status == 1)
                          {
                            echo "<a class='btn btn-primary btn-xs'>Approve</a>";
                          }
                          else if ($status == 2) 
                          {
                            echo "<a class='btn btn-danger btn-xs'>Rejected</a>";
                          }
                          else
                          {
                            echo "<a class='btn btn-warning btn-xs'>Pending</a>";
                          }
                      ?>
                  </td>
                  <td>
                    <div class="btn-group">
                      <button type="button" class="btn btn-default">Action</button>
                      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                      </button>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="">Action</a></li>
                        <li><a href="<?php echo site_url('comment/approve/'.$key->id_comment); ?>">Approve</a></li>
                        <li><a href="<?php echo site_url('comment/reject/'.$key->id_comment); ?>">Rejected</a></li>
                      </ul>
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
                  <th>Name</th>
                  <th>Email</th>
                  <th>Title</th>
                  <th>Comment</th>
                  <th>Time</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>