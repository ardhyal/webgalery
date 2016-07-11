<div class="panel-group panel-group-joined" id="Poles"> 
    <div class="panel panel-default"> 
        <div class="panel-heading bg-inverse"> 
            <h4 class="panel-title text-white"> 
                <a data-toggle="collapse" data-parent="#Poles" href="#collapsePoles" class="collapsed">
                    Poles
                </a> 
            </h4> 
        </div> 
        <div class="row">
            <div id="collapsePoles" class="panel-collapse collapse"> 
                <div class="col-md-12">
                    <div class="panel-heading">
                        <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labellebdy="myModalLabel"
                             aria-hidden="true" style="display: none;">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                                        <h4 class="modal-title">Add a Pole</h4>
                                    </div>
                                    <!--header modal-->
                                    <?php foreach ($nomer as $q){} $no = $q->TowerNumber; $no++;?>
                                    <div class="modal-body">
                                        <?php echo form_open('sites/add_tower')?>
                                        <div class="form-group">
                                            <label for="inputpole">Pole</label>
                                            <input type="text" class="form-control" id="pole" name="pole" value="<?php if (isset($no)){echo $no;}{echo '';} ?>" placeholder="Enter id">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputbts">BTS Group</label>
                                            <select id="btsgroup" name="btsgroup" class="form-control" style="width: 100%;">
                                                <option value="Macro" selected="selected">Macro</option>
                                                <option value="Micro">Micro</option>
                                            </select> 
                                        </div>
                                        <div class="form-group">
                                            <label for="poleheight">Pole Height(m)</label>
                                            <input type="text" class="form-control" id="poleheight" name="poleheight" placeholder="Enter Pole Height">
                                        </div>
                                        <div class="form-group">
                                            <label for="polebase">Pole Base Height(m)</label>
                                            <input type="text" class="form-control" id="polebase" name="polebase" placeholder="Enter Pole Base Height">
                                        </div>
                                        <div class="form-group">
                                            <label for="poletype">Pole Type</label>
                                            <select id="poletype" name="poletype" class="form-control" style="width: 100%;">
                                                <option value="HD" selected="selected">HD</option>
                                                <option value="MD">MD</option>
                                                <option value="LD">LD</option>
                                                <option value="MT">MT</option>
                                                <option value="Monopole">Monopole</option>
                                                <option value="Pole">Pole</option>
                                                <option value="Wall Mount">Wall Mount</option>
                                                <option value="Masjid">Masjid</option>
                                                <option value="Guyed Mas">Guyed Mas</option>
                                                <option value="COW">COW</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--body modal-->

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-info waves-effect waves-light">Save changes</button>
                                    </div>
                                    <!--modal footer-->
                                    <?php echo form_close(); ?>
                                </div>
                                <!--modal content-->
                            </div> 
                            <!--modal dialog-->
                        </div>
                        <!--modal-->
                        <div class="button-list">
                            <button class="btn btn-white waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal">Add a Pole</button>
                        </div>
                    </div>
                    <div class="panel-body form-group">
                        <!--modals add pole-->
                        <div class="col-md-12">
                            <div class="nav-tabs-custom">
                                <ul class="nav nav-tabs">
                                        <?php foreach ($tower as $q) {} $no = $tower[0]->id_tower; 
                                        foreach ($tower as $q): 
                                                $active = ($no == $q->id_tower) ? 'active' : '';
                                                echo '<li class="'.$active.'"><a href="#tabs_'.$q->id_tower.'"  data-toggle="tab">Pole '.$q->TowerNumber.'</a></li>';
                                           
                                        endforeach; ?>
                                         </ul>
                                <!--tabs-->
                                    <div class="tab-content">
                                        <?php foreach ($tower as $q):
                                                $active = ($no == $q->id_tower) ? 'active' : '';
                                                $this->session->set_userdata("tower",$q->id_tower);
                                                echo '<div class="tab-pane '.$active.'" id="tabs_'.$q->id_tower.'">'; ?>
                                                
                                        <h3>General Pole Information</h3>
                                        <dl class="dl-horizontal well">
                                            <dt>Bts group</dt><dd><?php echo $q->BtsGroup ?></dd>
                                            <dt>Pole height (m)</dt><dd><?php echo $q->TowerHeight ?></dd>
                                            <dt>Pole Base height (m)</dt><dd><?php echo $q->TowerBaseHeight ?></dd>
                                            <dt>Action</dt>
                                            <dd><a href="delete" onclick="javascript: return confirm('Are you sure to delete ?')">Hapus</a>
                                                <div id="MyModal" class="modal fade" tabindex="-1" role="dialog" aria-labellebdy="myModalLabel"
                                                        contenteditable=""accesskey="" aria-hidden="true" style="display: none;">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Are you sure to delete <?php echo 'Pole '.$q->TowerNumber ?>?
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                                                                <button type="submit" class="btn btn-info waves-effect waves-light">Yes, I'm sure</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <!--<button type="button" data-toggle="modal" data-target="#MyModal" class="btn btn-danger btn-xs">delete</button>-->
                                            </dd>
                                        </dl>
                                    </div>
                                       <?php endforeach; ?>
                                    </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div> 
        </div>
        <!--rows-->
    </div> 
</div>  
</div>