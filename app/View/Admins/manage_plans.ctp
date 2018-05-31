
<ul class="page-breadcrumb breadcrumb">
				<li>
					<a href="#">Admin</a><i class="fa fa-circle"></i>
				</li>
				<li>
					<a href="<?= SITE_URL;?>admins/index">Dasboard</a>
					<i class="fa fa-circle"></i>
				</li>
				<li>
					<a href="#">Manage Plans</a>
					<i class="fa fa-circle"></i>
				</li>
			</ul>
			<!-- END PAGE BREADCRUMB -->
			<!-- BEGIN PAGE CONTENT INNER -->
			<div class="row">
			<div class="col-md-4">					
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-cogs font-green-sharp"></i>
								<span class="caption-subject font-green-sharp bold uppercase">Plan Coverage</span>
							</div>							
						</div>
						<div class="portlet-body form">
							    <?php echo $this->Form->create('Plan',array('class'=>'form-horizontal form-without-legend')); ?>
								<div class="form-body">
									<div class="form-group">
										<label>Plan Name</label>
											<?php echo $this->Form->input('plan_name', array('class'=>'form-control input-lg','placeholder'=>'Enter plan name','label'=>false,'type'=>'text','div'=>false)); ?>
									</div>																	
								</div>
								<div class="form-actions right">
									<button type="button" class="btn default">Cancel</button>
									<button type="submit" class="btn green">Submit</button>
									
								</div>
							 <?php echo $this->form->end(); ?>
						</div>
					</div>					
				</div>
				<div class="col-md-8">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-cogs font-green-sharp"></i>
								<span class="caption-subject font-green-sharp bold uppercase"> Added Plans</span>
							</div>
						
						</div>
						<div class="portlet-body">
							<div id="sample_editable_1_wrapper" class="dataTables_wrapper no-footer"><div class="row"><div class="col-md-6 col-sm-12"></div></div><div class="table-scrollables">
							<table class="table table-striped table-hover table-bordered dataTable no-footer" id="sample_editable_1" role="grid" aria-describedby="sample_editable_1_info">
							<thead>
							<tr role="rows">
                                            <th>#</th>
                                            <th>Plan Name</th>
                                            <th>Actions</th>
                                        
							</tr>
							</thead>
							<tbody>
							<?php foreach($allplns as $key=>$get): ?>
                                        <tr>
                                            <td><?= $key+1;?></td>
                                            <td><?php echo $get['Plan']['plan_name']; ?></td>
                                            <td><?= $this->Form->postLink(
												'Delete',
												['action' => 'delete_plan', $get['Plan']['id']],
												['confirm' => 'Are you sure?'])
											?>
										</td>
                                        </tr>
                                    <?php endforeach; ?> 
									</tbody>
							</table></div></div>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
				</div>
					
				</div>		