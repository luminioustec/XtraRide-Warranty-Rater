<ul class="page-breadcrumb breadcrumb">
				<li>
					<a href="#">Home</a><i class="fa fa-circle"></i>
				</li>
				<li>
					<a href="table_editable.html">Extra</a>
					<i class="fa fa-circle"></i>
				</li>
				<li>
					<a href="table_editable.html">Data Tables</a>
					<i class="fa fa-circle"></i>
				</li>
				<li class="active">
					 Editable Datatables
				</li>
			</ul>
			<!-- END PAGE BREADCRUMB -->
			<!-- BEGIN PAGE CONTENT INNER -->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-cogs font-green-sharp"></i>
								<span class="caption-subject font-green-sharp bold uppercase">Added Records</span>
							</div>
							
						</div>
						<div class="portlet-body">
							
							<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
							<thead>
							<tr>
							<th>#</th>
								<th>
									 Plan
								</th>
								<th>
									 Vehicle Type
								</th>
								<th>
									 Deductible
								</th>
								<th>
									 Current Mileage
								</th>
								<th>
									 Vehicle Selling Price
								</th>
								<th>
									 Tenure(Months)
								</th>
								<th>
									 Price
								</th>
							</tr>
							</thead>
							<tbody>
							<?php foreach($allprices as $key=>$get) { ?>
							<tr>
								<td><?= $key+1; ?></td>
								<td>
									 <?php echo $get['Plan']['plan_name']; ?>
								</td>
								<td>
									<?php echo $get['VehicleType']['vehicle_type']; ?>
								</td>
								<td>
									 <?php echo $get['Deductible']['amount']; ?>
								</td>
								<td class="center">
									<?php echo $get['Mileage']['from'].'-'.$get['Mileage']['to']; ?>
								</td>
								<td><?php echo '$'.$get['SellingPrice']['from'].'-'.'$'.$get['SellingPrice']['to']; ?>
								</td>
								<td> <?php echo $get['Month']['month_count']; ?>
								</td>
								<td><?php echo '$'.$get['Price']['price']; ?></td>
							</tr>
							<?php } ?>
							</tbody>
							</table>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
				</div>
			</div>