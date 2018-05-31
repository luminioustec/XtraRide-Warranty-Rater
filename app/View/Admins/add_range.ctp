<ul class="page-breadcrumb breadcrumb">
				<li>
					<a href="#">Home</a><i class="fa fa-circle"></i>
				</li>
				<li>
					<a href="#">Dashboard</a>
					<i class="fa fa-circle"></i>
				</li>
				<li class="active">
					Add Prices
				</li>
			</ul>
			
			<!-- END PAGE BREADCRUMB -->
			<!-- BEGIN PAGE CONTENT INNER -->
			<div class="row">
				<div class="col-md-12">					
					<div class="tab-content">
											
							<div class="tab-pane active" id="tab_2">
								<div class="portlet box green">
									<div class="portlet-title">
										<div class="caption">
											<i class="fa fa-gift"></i>Add Prices
										</div>
										
									</div>
									<div class="portlet-body form">
										<!-- BEGIN FORM-->
										<?php echo $this->Form->create('Price',array('class'=>'form-horizontal')); ?>
											<div class="form-body">
												<h3 class="form-section"> Prices packages,milesage,class deductible wise</h3>
												<div class="row">
													<div class="col-md-6">
													<div class="form-group">
														<label class="control-label col-md-3">Choose Plan</label>
														<div class="col-md-9">
														<?php echo $this->Form->input('plan_id', array('class'=>'form-control','empty'=>'Select','type'=>'select','options'=>$plans,'label'=>false,'required'=>'required')); ?>
														</div>
													</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
													<div class="form-group">
													<label class="control-label col-md-3">Vehcile Type</label>
													<div class="col-md-9">
													<?php echo $this->Form->input('vehicle_type_id', array('class'=>'form-control','empty'=>'Select','type'=>'select','options'=>$vtype,'label'=>false,'required'=>'required')); ?>
													</div>
												</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Current Mileage</label>
															<div class="col-md-9">
																<select required class="form-control" name="data[Price][mileage_id]">
																<option value="">Select</option>
																<?php foreach($mileage as $key=>$get) { ?>
																<option value="<?= $get['Mileage']['id']; ?>"><?= $get['Mileage']['from']; ?> - <?= $get['Mileage']['to']; ?></option>
																<?php } ?>
																</select>
																<span class="help-block">
																Choose Current Mileage</span>
															</div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Selling price</label>
															<div class="col-md-9">
																<select required class="form-control" name="data[Price][selling_price_id]">
																<option value="">Select</option>
																<?php foreach($sp as $key=>$get) { ?>
																<option value="<?= $get['SellingPrice']['id']; ?>"><?= '$'.$get['SellingPrice']['from']; ?> - <?= '$'.$get['SellingPrice']['to']; ?></option>
																<?php } ?>
																</select>
																<span class="help-block">
																Choose Selling Price </span>
															</div>
														</div>
													</div>
													
													<!--/span-->
												</div>
												<!--/row-->
												
												<div class="row">
												<!--/span-->
													<div class="col-md-6">
													
														<div class="form-group">
															<label class="control-label col-md-3">Deductible Amount</label>
															<div class="col-md-9">
															<?php echo $this->Form->input('deductible_id', array('class'=>'form-control','empty'=>'Select','type'=>'select','options'=>$deds,'label'=>false,'required'=>'required')); ?>	
															</div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Months</label>
															<div class="col-md-9">
																<select required name="data[Price][month_id]" class="form-control">
																<option value="">Select</option>
																<?php foreach($allmonths as $key=>$get) { ?>
																<option value="<?= $get['Month']['id']; ?>"><?= $get['Month']['month_count']; ?> months</option>
																<?php } ?>
																</select>
															</div>
														</div>
													</div>	
												</div>
												<div class="row">
												<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Price</label>
															<div class="col-md-9">
															<?php echo $this->Form->input('price', array('class'=>'form-control','empty'=>'Select','type'=>'text','label'=>false,'required'=>'required')); ?>
																												
															</div>
														</div>
													</div>
												</div>
												
												<!--/row-->
											</div>
											<div class="form-actions">
												<div class="row">
													<div class="col-md-6">
														<div class="row">
															<div class="col-md-offset-3 col-md-9">
																<button type="submit" class="btn green">Submit</button>
																<button type="button" class="btn default">Cancel</button>
															</div>
														</div>
													</div>
													<div class="col-md-6">
													</div>
												</div>
											</div>
										<?php echo $this->form->end(); ?>
										<!-- END FORM-->
									</div>
								</div>
							</div>
						</div>				
				</div>
			</div>	
