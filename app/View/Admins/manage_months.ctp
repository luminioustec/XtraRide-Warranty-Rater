<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="page-header">Add Months</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Month Count

                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <?php echo $this->Form->create('Month',array('class'=>'form-horizontal form-without-legend')); ?>
                                        <div class="form-group">
                                            <label>Month Count</label>
											<?php echo $this->Form->input('month_count', array('class'=>'form-control','placeholder'=>'Enter number of months','label'=>false,'type'=>'text')); ?>
                                           
                                        </div>
                                                                            
                                        
                                        <button type="submit" class="btn btn-default">Submit Button</button>
                                    <?php echo $this->form->end(); ?>
                                </div>
                             
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Added Months
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Month Count</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php foreach($allmnths as $key=>$get): ?>
                                        <tr>
                                            <td><?= $key+1;?></td>
                                            <td><?php echo $get['Month']['month_count'].' months'; ?></td>
                                            <td><?= $this->Form->postLink(
												'Delete',
												['action' => 'delete_month', $get['Month']['id']],
												['confirm' => 'Are you sure?'])
											?>
										</td>
                                        </tr>
                                    <?php endforeach; ?>    
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
            </div>
            <!-- /.row -->
        </div>