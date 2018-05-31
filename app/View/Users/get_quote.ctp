
 <div class="main">
      <div class="container">
        <ul class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li><a href="javascript:;">Pages</a></li>
            <li class="active">Login</li>
        </ul>
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN SIDEBAR -->
          <div class="sidebar col-md-3 col-sm-3">
            <ul class="list-group margin-bottom-25 sidebar-menu">
              <li class="list-group-item clearfix"><a href="<?= SITE_URL;?>users/login"><i class="fa fa-angle-right"></i> Login</a></li>
              <li class="list-group-item clearfix"><a href="javascript:;"><i class="fa fa-angle-right"></i> Request Quote</a></li>
            </ul>
          </div>
          <!-- END SIDEBAR -->

          <!-- BEGIN CONTENT -->
          <div class="col-md-9 col-sm-9">
            <h1>Get Quotation</h1>
            <div class="content-form-page">
              <div class="row">
                <div class="col-md-7 col-sm-7">
                  <form class="form-horizontal" role="form">
                    <fieldset>
                      <legend>Vehicle Information</legend>
                      <div class="form-group">
                        <label for="firstname" class="col-lg-4 control-label">Engine Type<span class="require">*</span></label>
                        <div class="col-lg-8">
						<select class="form-control" name="ctl00$cphContent$ddlCoverages" id="m_291838034319454497gmail-ctl00_cphContent_ddlCoverages" style="margin:0px">
                          <option selected="" value="-1" style="margin:0px">Select</option>
						  <option value="FED" style="margin:0px">Front Engine Diesel</option>
						  <option value="GAS" style="margin:0px">Gas</option>
						  <option value="RED" style="margin:0px">Rear Engine Diesel</option>	
						 </select> 
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="lastname" class="col-lg-4 control-label">Mileage <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <input type="text" class="form-control" id="lastname">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="email" class="col-lg-4 control-label">Manufacturer <span class="require">*</span></label>
                        <div class="col-lg-8">
						<select class="form-control" name="ctl00$cphContent$ddlCoverages" id="m_291838034319454497gmail-ctl00_cphContent_ddlCoverages" style="margin:0px">		
                         <option selected="" value="-1" style="margin:0px">Select</option>
						 <option value="Beaver" style="margin:0px">Beaver</option>
						 <option value="Holiday Rambler" style="margin:0px">Holiday Rambler</option>
						 <option value="McKenzie" style="margin:0px">McKenzie</option>
						 <option value="Monaco" style="margin:0px">Monaco</option>
						 <option value="Monaco Coach" style="margin:0px">Monaco Coach</option>
						 <option value="Navistar" style="margin:0px">Navistar</option>
						 <option value="R-Vision" style="margin:0px">R-Vision</option>
						 <option value="Safari" style="margin:0px">Safari</option>
						 <option value="0" style="margin:0px">All Other Units</option>
						</select>		
                        </div>
                      </div>
					  <div class="form-group">
                        <label for="lastname" class="col-lg-4 control-label">Model Year <span class="require">*</span></label>
                        <div class="col-lg-8">
						<select class="form-control" name="ctl00$cphContent$ddlCoverages" id="m_291838034319454497gmail-ctl00_cphContent_ddlCoverages" style="margin:0px">
                        <option value="2019" style="margin:0px">2019</option>
						<option selected="" value="2018" style="margin:0px">2018</option>
						<option value="2017" style="margin:0px">2017</option>
						<option value="2016" style="margin:0px">2016</option>
						<option value="2015" style="margin:0px">2015</option>
						<option value="2014" style="margin:0px">2014</option>
						<option value="2013" style="margin:0px">2013</option>
						<option value="2012" style="margin:0px">2012</option>
						<option value="2011" style="margin:0px">2011</option>
						<option value="2010" style="margin:0px">2010</option>
						<option value="2009" style="margin:0px">2009</option>
						<option value="2008" style="margin:0px">2008</option>
						<option value="2007" style="margin:0px">2007</option>
						<option value="2006" style="margin:0px">2006</option>
						<option value="2005" style="margin:0px">2005</option> 
							</select>						  
                        </div>
                      </div>
					  <div class="form-group">
                        <label for="lastname" class="col-lg-4 control-label">Price <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <input type="text" class="form-control" id="lastname">
                        </div>
                      </div>
					   <div class="form-group">
                        <label for="lastname" class="col-lg-4 control-label">In-Service Date <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <input type="text" class="form-control" id="lastname">
                        </div>
                      </div>
					  <div class="form-group">
                        <label for="lastname" class="col-lg-4 control-label">Number of Slide-Outs<span class="require">*</span></label>
                        <div class="col-lg-8">
						<select class="form-control" name="ctl00$cphContent$ddlCoverages" id="m_291838034319454497gmail-ctl00_cphContent_ddlCoverages" style="margin:0px">
                        <option value="-1" style="margin:0px">Select</option>
						<option value="0" style="margin:0px">0-2</option>
						<option value="3" style="margin:0px">3+</option> 
									</select>
						</div>						  
                        </div>
                      </div>
                    </fieldset>
                    <fieldset>
                      <legend>Plan Information</legend>
                      <div class="form-group">
                        <label for="password" class="col-lg-4 control-label">Choose a coverage <span class="require">*</span></label>
                        <div class="col-lg-8">
						<select class="form-control" name="ctl00$cphContent$ddlCoverages" id="m_291838034319454497gmail-ctl00_cphContent_ddlCoverages" style="margin:0px">
                         <option selected="" value="Platinum" style="margin:0px">Platinum</option>
						 <option value="Gold" style="margin:0px">Gold</option>
						 <option value="Select All" style="margin:0px">Select All</option>
						</select>
						</div>	
                        </div>
					<div class="form-group">
					<label class="col-lg-4 control-label">Vehicle Plan <span class="require">*</span></label>
				<div class="col-md-8">
					<div class="radio-list">
						<label class="radio-inline">
						<div class="radio">
						<span><input name="optionsRadios2" value="option1" type="radio"></span>
						</div>New </label>
						<label class="radio-inline">
						<div class="radio"><span class="checked"><input name="optionsRadios2" value="option2" checked="" type="radio"></span></div>Pre-Owned </label>
							</div>
															</div>
														</div>	
                      </div>
                     
                    </fieldset>
                    
                    <div class="row">
                      <div class="col-lg-8 col-md-offset-4 padding-left-0 padding-top-20">                        
                        <button type="submit" class="btn btn-primary">Get quote</button>
                        <button type="button" class="btn btn-default">Cancel</button>
                      </div>
                    </div>
                  </form>
                </div>
               
              </div>
            </div>
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
      </div>
    </div>