<ul class="page-breadcrumb breadcrumb">
				<li>
					<a href="#">Home</a><i class="fa fa-circle"></i>
				</li>
				<li>
					<a href="#">Dashboard</a>
					<i class="fa fa-circle"></i>
				</li>
				<li>
					<a href="#">Manage Deductibles</a>
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
								<span class="caption-subject font-green-sharp bold uppercase">Add Deductible</span>
							</div>							
						</div>
						<div class="portlet-body form">
							  <?php echo $this->Form->create('Deductible',array('class'=>'form-horizontal form-without-legend')); ?>
								<div class="form-body">		
                                        <div class="form-group">
                                           <label>Deductible Amount</label>
											<?php echo $this->Form->input('amount', array('class'=>'form-control','placeholder'=>'Enter amount','label'=>false,'type'=>'text')); ?>   
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
								<span class="caption-subject font-green-sharp bold uppercase">Added Deductibles</span>
							</div>
						
						</div>
						<div class="portlet-body">
							
							<div id="sample_editable_1_wrapper" class="dataTables_wrapper no-footer"><div class="row"><div class="col-md-6 col-sm-12"></div></div><div class="table-scrollables"><table class="table table-striped table-hover table-bordered dataTable no-footer" id="sample_editable_1" role="grid" aria-describedby="sample_editable_1_info">
							<thead>
							<tr role="rows">
                                            <th>#</th>
                                            <th>Amount</th>
                                            <th>Actions</th>
							</tr>
							</thead>
							<tbody>
									<?php foreach($deds as $key=>$get): ?>
                                        <tr>
                                            <td><?= $key+1;?></td>
                                            <td><?php echo '$'.$get['Deductible']['amount']; ?></td>
                                            <td><?= $this->Form->postLink(
												'Delete',
												['action' => 'delete_deductible', $get['Deductible']['id']],
												['confirm' => 'Are you sure?'])
											?></td>
                                        </tr>
                                    <?php endforeach; ?>    
                                    </tbody>
							</table></div></div>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
				</div>
					
				</div>				