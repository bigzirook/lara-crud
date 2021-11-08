
@extends('layouts.app')
@section('content')   
   @include('flash')
   {{--auth()->user()->id--}}
	<div class="main-body">
        <form method="post" action="{{route('update_form',[$form_details->id])}}" id="form">
            {{csrf_field()}}
			{{ method_field('PUT') }}
		<div class="container">
				<div class="heading-top">
				<img src="{{asset('img/logo.jpg')}}" class="float-start"><h4>DOGS NSW AFFILIATE ANNUAL REPORT</h4>
				</div>
				<div class="table-responsive-md mt-4">
					<table class="table-bordered table-sm">
					    <thead class="table-head">
					      <tr>
					      	<th colspan="3">
						      	<div class="row">
						      		<div class="col-sm-5">
						      			  CHECKLIST
						      		</div>
						      		<div class="col-sm-6">
						      			Reporting Period
						      			<!-- <input type="date" name="date"> -->
						      		</div>
						      	</div>
					      	</th>
					      

					      </tr>
					    </thead>
					    <tbody>
						    <tr>
						      	<td colspan="3">
							      	<b>
							      		An Affiliate shall, within two months of its Annual General Meeting in each year, but in any case, not 	later than the 31st day of October,
										forward to the Secretary of the DOGS NSW the following documents:-
									</b>
								</td>
						    </tr>
					      <tr>
					        <td width="40px"><b>1</b></td>
					        <td>Anural Report Cover Sheet</td>
					        <td class="text-center" width="100px">
								<div class="form-check">
								  <label class="form-check-label">
								    <input type="checkbox" class="form-check-input" value="yes" name="anural_report_cover_sheet" {{$form_details->anural_report_cover_sheet ? 'checked': ''}}>
									@if ($errors->has('anural_report_cover_sheet'))
										<span class="help-block text-danger">
											<strong>{{ $errors->first('anural_report_cover_sheet') }}</strong>
										</span>
                                    @endif
								  </label>
								</div>
							</td>
					      </tr>
					      <tr>
					        <td><b>2</b></td>
					        <td>Profit & Loss Statement</td>
					        <td class="text-center">
								<div class="form-check">
								  <label class="form-check-label">
								    <input type="checkbox" class="form-check-input" value="yes" name="profit_loss_smt" {{$form_details->profit_loss_smt ? 'checked': ''}}>
									@if ($errors->has('profit_loss_smt'))
                                                <span class="help-block text-danger">
                                                    <strong>{{ $errors->first('profit_loss_smt') }}</strong>
                                                </span>
                                    @endif
								</label>
								</div>
							</td>
					      </tr>
					      <tr>
					        <td><b>3</b></td>
					        <td>Balance Sheet</td>
					        <td class="text-center">
								<div class="form-check">
								  <label class="form-check-label">
								    <input type="checkbox" class="form-check-input" value="yes" name="balance_sheet" {{$form_details->balance_sheet ? 'checked': ''}}>
									@if ($errors->has('balance_sheet'))
										<span class="help-block text-danger">
											<strong>{{ $errors->first('balance_sheet') }}</strong>
										</span>
                                    @endif
								  </label>
								</div>
							</td>
					      </tr>
					      <tr>
					        <td><b>4</b></td>
					        <td>Assets Register</td>
					        <td class="text-center">
								<div class="form-check">
								  <label class="form-check-label">
								    <input type="checkbox" class="form-check-input" value="yes" name="assets_reg" {{$form_details->assets_reg ? 'checked': ''}}>
									@if ($errors->has('balance_sheet'))
										<span class="help-block text-danger">
											<strong>{{ $errors->first('balance_sheet') }}</strong>
										</span>
                                    @endif
								  </label>
								</div>
							</td>
					      </tr>
					    </tbody>
					</table>
				</div>
				<div class="table-responsive-md mt-4">
					<table class="table-bordered table-sm">
					    <thead class="table-head">
					      <tr>
					      	<th colspan="3">
						      	<div class="row">
						      		<div class="col-sm-12">
						      			 1. ANNUAL REPORT COVER SHEET
						      		</div>
						      		
						      	</div>
					      	</th>
					      </tr>
					    </thead>
					    <tbody>
						    <tr>
						      	<td colspan="3">
							      	<p>
							      		Please Note: DOGS NSW Regulations Part X – Affiliates, Section 10 (a) & (b), requires that all Office Bearers of an Affiliated Club MUST be
									Members or Associate Members of DOGS NSW and reside in NSW. <b class="text-danger">**** PLEASE LIST CURRENT SITTING OFFICE BEARERS ****</b>
							      	</p>
								</td>
						    </tr>
						    <tr>
						    	<td>
						    		To be completed and signed, by either the President and/or Secretary, together with the following attachments:
									<p class="mb-0">	a) Copy of insurance policy for</p>
									<ul class="table-listing">
										<li>Public Liability	</li>
										<li>Voluntary Workers</li>
										<li>Workers Compensation (if applicable)</li>
									</ul>
									<p>** Items (1) and (3) does not apply to Affiliates who pay for Insurance coverage of Public  Liability, and Voluntary Workers Personal Accident, along
									with their Affiliation Fee.
									</p>
									<p class="">b) A complete List of Financial Members showing the names, addresses, Dogs NSW Membership number and respective categories of
									membership of all members of the affiliate as at the date of the Annual General Meeting signed by the President OR Secretary;</p>
									<p>c) A copy of the Minutes of the Annual General Meeting; and ‘Minutes’ of any other subsequent meeting where office bearers were elected.</p>
						    	</td>
						    </tr>
					    </tbody>
					</table>
				</div>

				<div class="table-responsive-md mt-4">
					<table class="table-bordered table-sm">
					    <thead class="table-head">
					      <tr>
					      	<th colspan="3">
						      	<div class="row">
						      		<div class="col-sm-12">
						      			 2. ANNUAL REPORT PROFIT & LOSS STATEMENT
						      		</div>
						      		
						      	</div>
					      	</th>
					      </tr>
					    </thead>
					    <tbody>
						    <tr>
						      	<td colspan="3">
							      	Should a complete copy of the Auditors’ report be supplied to the DOGS NSW Office, then this section is not required to be completed.
									Notwithstanding the above, without a full and complete copy of the Auditor’s Report, then the information is required to be completed in full.
							      	
								</td>
						    </tr>
						   
					    </tbody>
					</table>
				</div>
				<div class="table-responsive-md mt-4">
					<table class="table-bordered table-sm">
					    <thead class="table-head">
					      <tr>
					      	<th colspan="3">
						      	<div class="row">
						      		<div class="col-sm-12">
						      			3. ANNUAL REPORT BALANCE SHEET
						      		</div>
						      		
						      	</div>
					      	</th>
					      </tr>
					    </thead>
					    <tbody>
						    <tr>
						      	<td colspan="3">
							      	Should a complete copy of the Auditors’ report be supplied to the DOGS NSW Office, then this section is not required to be completed.
									Notwithstanding the above, without a full and complete copy of the Auditor’s Report, then the information is required to be completed in full.
									The Treasurer of the Affiliate must sign the Balance Sheet.
							      	
								</td>
						    </tr>
						   
					    </tbody>
					</table>
				</div>

				<div class="table-responsive-md mt-4">
					<table class="table-bordered table-sm">
					    <thead class="table-head">
					      <tr>
					      	<th colspan="3">
						      	<div class="row">
						      		<div class="col-sm-12">
						      			4. ANNUAL REPORT ASSET REGISTER
						      		</div>
						      		
						      	</div>
					      	</th>
					      </tr>
					    </thead>
					    <tbody>
						    <tr>
						      	<td colspan="3">
									Should a complete copy of the Auditors’ report be supplied to the DOGS NSW Office, then this section is not required to be completed.
									Notwithstanding the above, without a full and complete copy of the Auditor’s Report, then the information is required to be completed in full.
									The Treasurer of the Affiliate must sign the Balance Sheet.
									Without the full copy of the <b>original</b> Accounts from the Auditor, this page must be completed and signed by Auditor and Treasurer of the
									Affiliate.
							      	
								</td>
						    </tr>
						   
					    </tbody>
					</table>
				</div>

				<div class="table-responsive-md mt-4">
					<table class="table-bordered table-sm">
					    <thead class="table-head">
					      <tr>
					      	<th colspan="3">
						      	<div class="row">
						      		<div class="col-sm-12">
						      		 IMPORTANT NOTE
						      		</div>
						      		
						      	</div>
					      	</th>
					      </tr>
					    </thead>
					    <tbody>
						    <tr>
						      	<td colspan="3">
							      	<p>
										IMPORTANT NOTE: The Audited Accounts must be prepared by a member of one of the professional accounting bodies. Please note DOGS
										NSW Regulations Part X – Affiliates, Section 2: Administration, Clause 2.2(a) which reads as follows:-
									</p>
									<div class="important-listing">
										<p class="mb-0">2.2. An Affiliate shall:-</p>
								      	<ul>
								      		
								      		<li>
								      			a) within two (2) months of its Annual General Meeting in each year, but in any case, not later than the 31st day of October, forward to the
												DOGS NSW Secretary a copy of its Balance Sheet and Financial Statements as adopted and duly prepared by a member of one of the
												following professional accounting bodies:
								      		</li>
								      		<li class="mt-3">
												Association of Chartered Certified Accountants Australia and New Zealand CPA Australia
												Institute of Public Accountants National Tax Agents' Association Ltd The Tax Institute (TTI)
												Australian Bookkeepers Association Ltd
												Chartered Accountants Australia and New Zealand Institute of Certified Bookkeepers
												Institute of Chartered Accountants in England and Wales (ICAEW) National Tax Agents’ Association Ltd (NTAA+)
												The Institute of Chartered Accountants Australia (ICAA)
												TAI Practitioners & Advisers Limited
								      		</li>
								      		<li class="mt-3">
								      			together with a copy of the Accountant’s Audit, or Compilation Report (prepared in accordance with Accounting Standard APES 315), duly
												signed by the Accountant stating whether such Balance Sheet and Financial Statements give a true and fair view of the activities of the
												Affiliate for the preceding twelve (12) months and at Balance Date and, if qualified, details of the reasons for the qualification.
								      		</li>

								      	</ul>
								      </div>
								</td>
						    </tr>
						   
					    </tbody>
					</table>
				</div>	
		</div>
		<div class="container mt-5">
			<div class="heading-top">
			<img src="{{asset('img/logo.jpg')}}" class="float-start"><h4>DOGS NSW AFFILIATE ANNUAL REPORT</h4>
			</div>
			<div class="table-responsive-md mt-4">
				<table class="table-bordered table-sm" width="100%">
				    <thead class="table-head">
				      <tr>
				      	<th colspan="6">
					      	<div class="row">
					      		<div class="col-sm-12">
					      			 1. ANNUAL REPORT COVER SHEET
					      		</div>
					      	</div>
				      	</th>
				      </tr>
				    </thead>
				    <tbody>
				      <tr>
				        <td>Affiliate Name:</td>
				        <td colspan="5"><input type="text" class="border-0" name="annual_report_affiliate_name" value="{{$form_details->annual_report_affiliate_name}}"/>
						@if($errors->has('annual_report_affiliate_name'))
						<span class="help-block text-danger">
							<strong>{{ $errors->first('annual_report_affiliate_name') }}</strong>
						</span>
						@endif
					</td>
				        
				      </tr>
				      <tr>
					      <td>Membership No:</td>
					      <td colspan="5"><input type="text" class="border-0" name="annual_report_membership_no" value="{{$form_details->annual_report_membership_no}}"/></td>
				      </tr>
				      <tr>
					      <td>Insurance With:</td>
					      <td>DOGS NSW:</td>
						     <td class="text-center">
								<div class="form-check">
								  <label class="form-check-label">
								    <input type="checkbox" class="form-check-input" value="yes" name="dogs_nsw" {{isset($form_details->dogs_nsw) ? 'checked':''}}>
									
								  </label>
								</div>
							</td>
							<td>Other:</td>
							 <td class="text-center">
								<div class="form-check">
								  <label class="form-check-label">
								    <input type="checkbox" class="form-check-input" value="yes" name="annual_report_other" {{isset($form_details->annual_report_other) ? 'checked':''}}>
									
								  </label>
								</div>
							</td>
							<td>If Other, a copy of the Insurance Policy is required</td>
							
				      </tr>
				       <tr>
					      <td colspan="5">The following Office Bearers were elected at the Annual General Meeting held on:</td>
					      <td><input type="date" name="annual_report_general_meeting" value="{{$form_details->annual_report_general_meeting}}">
						 			
						</td>
				      </tr>
				    </tbody>
				</table>
			</div>

			<div class="table-responsive-md mt-4">
				<table class="table-bordered table-sm" width="100%">
				    <thead class="table-head">
				      <tr>
				      	<th colspan="4">
					      	<div class="row">
					      		<div class="col-sm-12">
					      			PRESIDENT
					      		</div>
					      	</div>
				      	</th>
				      </tr>
				    </thead>
				    <tbody>

				    	<tr>
				    		<td width="40%" style="height: 0px;padding: 0 !important; border-color: #fff !important;"></td>
				    		<td width="15%" style="height: 0px;padding: 0 !important;  border-color: #fff !important;" ></td>
				    		<td width="15%" style="height: 0px;padding: 0 !important;  border-color: #fff !important;"></td>
				    		<td width="30%" style="height: 0px;padding: 0 !important;  border-color: #fff !important;"></td>
				    	</tr>
				    	
				      <tr>
				        <td colspan="4">
							<div class="form-check-inline">
							  <label class="form-check-label">
							    <input type="radio" class="form-check-input" value="miss" name="president_name_title" {{$form_details->president_name_title == 'miss'?'checked':''}}> Miss
							  </label>
							</div>
							<div class="form-check-inline">
							  <label class="form-check-label">
							    <input type="radio" class="form-check-input" value="ms" name="president_name_title" {{$form_details->president_name_title == 'ms'?'checked':''}}> Ms
							  </label>
							</div>
							<div class="form-check-inline">
							  <label class="form-check-label">
							    <input type="radio" class="form-check-input" value="mrs" name="president_name_title" {{$form_details->president_name_title == 'mrs'?'checked':''}}> Mrs
							  </label>
							</div>
							<div class="form-check-inline">
							  <label class="form-check-label">
							    <input type="radio" class="form-check-input" value="mr" name="president_name_title" {{$form_details->president_name_title == 'mr'?'checked':''}}> Mr
							  </label>
							</div>
							<div class="form-check-inline">
							  <label class="form-check-label">
							    <input type="radio" class="form-check-input" value="other" name="president_name_title" {{$form_details->president_name_title == 'other'?'checked':''}}> Other (please specify):
							  </label>
							</div>
				        </td> 
				      </tr>
				      <tr>
				      	<td colspan="2"> 
							 First Name:
							 <input type="text" class="border-0" name="president_f_name" value="{{$form_details->president_f_name}}">
						</td>
					      
					    <td colspan="2"> 
							Last Name:
							 <input type="text" class="border-0" name="president_l_name" value="{{$form_details->president_l_name}}">
						</td>
				      </tr>
				      <tr>
				      	<td colspan="2"> 
							 Email:
							 <input type="email" class="border-0" name="president_email" value="{{$form_details->president_email}}">
						</td>
					    <td colspan="2"> 
							Membership No:
							 <input type="text" class="border-0" name="president_membership_no" value="{{$form_details->president_membership_no}}">
						</td>
				      </tr>
						<tr>
					      	<td colspan="4"> 
								Address:
								 <input type="text" class="border-0" name="president_address" value="{{$form_details->president_address}}">
							</td>
						</tr>
						<tr>
					      	<td> 
								 State:
								 <input type="text" class="border-0" name="president_state" value="{{$form_details->president_state}}">
							</td>
						    <td colspan="2"> 
								Postcode:
								 <input type="text" class="border-0" name="president_postcode" value="{{$form_details->president_postcode}}">
							</td>
							<td>Country (if overseas):
								<input type="text" class="border-0" name="president_country" value="{{$form_details->president_country}}">
							</td>
					     </tr>
					     <tr>
					      	<td> 
								 Phone (H):
								 <input type="text" class="border-0" name="president_phone_h" value="{{$form_details->president_phone_h}}">
							</td>
						    <td colspan="2"> 
								Phone (B):
								 <input type="text" class="border-0" name="president_phone_b" value="{{$form_details->president_phone_b}}">
							</td>
							<td>Phone (M):
								<input type="text" class="border-0" name="president_phone_m" value="{{$form_details->president_phone_m}}">
							</td>
					     </tr>
				    </tbody>
				</table>
			</div>

			<div class="table-responsive-md mt-4">
				<table class="table-bordered table-sm" width="100%">
				    <thead class="table-head">
				      <tr>
				      	<th colspan="4">
					      	<div class="row">
					      		<div class="col-sm-12">
					      			SECRETARY
					      		</div>
					      	</div>
				      	</th>
				      </tr>
				    </thead>
				    <tbody>
				    	
				    	<tr>
				    		<td width="40%" style="height: 0px;padding: 0 !important; border-color: #fff !important;"></td>
				    		<td width="15%" style="height: 0px;padding: 0 !important;  border-color: #fff !important;" ></td>
				    		<td width="15%" style="height: 0px;padding: 0 !important;  border-color: #fff !important;"></td>
				    		<td width="30%" style="height: 0px;padding: 0 !important;  border-color: #fff !important;"></td>
				    	</tr>
				    	
				      <tr>
				        <td colspan="4">
							<div class="form-check-inline">
							  <label class="form-check-label">
							    <input type="radio" class="form-check-input" value="miss" name="secretary_name_title"  {{$form_details->secretary_name_title == 'miss'?'checked':''}}> Miss
							  </label>
							</div>
							<div class="form-check-inline">
							  <label class="form-check-label">
							    <input type="radio" class="form-check-input" value="ms" name="secretary_name_title"  {{$form_details->secretary_name_title == 'ms'?'checked':''}}> Ms
							  </label>
							</div>
							<div class="form-check-inline">
							  <label class="form-check-label">
							    <input type="radio" class="form-check-input" value="mrs" name="secretary_name_title"  {{$form_details->secretary_name_title == 'mrs'?'checked':''}}> Mrs
							  </label>
							</div>
							<div class="form-check-inline">
							  <label class="form-check-label">
							    <input type="radio" class="form-check-input" value="mr" name="secretary_name_title"  {{$form_details->secretary_name_title == 'mr'?'checked':''}}> Mr
							  </label>
							</div>
							<div class="form-check-inline">
							  <label class="form-check-label">
							    <input type="radio" class="form-check-input" value="other" name="secretary_name_title"  {{$form_details->secretary_name_title == 'other'?'checked':''}}> Other (please specify):
							  </label>
							</div>
				        </td> 
				      </tr>
				      <tr>
				      	<td colspan="2"> 
							 First Name:
							 <input type="text" class="border-0" name="secretary_f_name" value="{{$form_details->secretary_f_name}}">
						</td>
					      
					    <td colspan="2"> 
							Last Name:
							 <input type="text" class="border-0" name="secretary_l_name" value="{{$form_details->secretary_l_name}}">
						</td>
				      </tr>
				      <tr>
				      	<td colspan="2"> 
							 Email:
							 <input type="email" class="border-0" name="secretary_email" value="{{$form_details->secretary_email}}">
						</td>
					    <td colspan="2"> 
							Membership No:
							 <input type="text" class="border-0" name="secretary_membership_no" value="{{$form_details->secretary_membership_no}}">
						</td>
				      </tr>
						<tr>
					      	<td colspan="4"> 
								Address:
								 <input type="text" class="border-0" name="secretary_address" value="{{$form_details->secretary_address}}">
							</td>
						</tr>
						<tr>
					      	<td> 
								 State:
								 <input type="text" class="border-0" name="secretary_state" value="{{$form_details->secretary_state}}">
							</td>
						    <td colspan="2"> 
								Postcode:
								 <input type="text" class="border-0" name="secretary_postcode" value="{{$form_details->secretary_postcode}}">
							</td>
							<td>Country (if overseas):
								<input type="text" class="border-0" name="secretary_country" value="{{$form_details->secretary_country}}">
							</td>
					     </tr>
					     <tr>
					      	<td> 
								 Phone (H):
								 <input type="text" class="border-0" name="secretary_phone_h" value="{{$form_details->secretary_phone_h}}">
							</td>
						    <td colspan="2"> 
								Phone (B):
								 <input type="text" class="border-0" name="secretary_phone_b" value="{{$form_details->secretary_phone_b}}">
							</td>
							<td>Phone (M):
								<input type="text" class="border-0" name="secretary_phone_m" value="{{$form_details->secretary_phone_m}}">
							</td>
					     </tr>
				    </tbody>
				</table>
			</div>

			<div class="table-responsive-md mt-4">
				<table class="table-bordered table-sm" width="100%">
				    <thead class="table-head">
				      <tr>
				      	<th colspan="4">
					      	<div class="row">
					      		<div class="col-sm-12">
					      			1<sup>st</sup> VICE PRESIDENT
					      		</div>
					      	</div>
				      	</th>
				      </tr>
				    </thead>
				    <tbody>
				    	
				    	<tr>
				    		<td width="40%" style="height: 0px;padding: 0 !important; border-color: #fff !important;"></td>
				    		<td width="15%" style="height: 0px;padding: 0 !important;  border-color: #fff !important;" ></td>
				    		<td width="15%" style="height: 0px;padding: 0 !important;  border-color: #fff !important;"></td>
				    		<td width="30%" style="height: 0px;padding: 0 !important;  border-color: #fff !important;"></td>
				    	</tr>
				    	
				      <tr>
				        <td colspan="4">
							<div class="form-check-inline">
							  <label class="form-check-label">
							    <input type="radio" class="form-check-input" value="miss" name="f_vp_name_title"  {{$form_details->f_vp_name_title == 'miss'?'checked':''}}> Miss
							  </label>
							</div>
							<div class="form-check-inline">
							  <label class="form-check-label">
							    <input type="radio" class="form-check-input" value="ms" name="f_vp_name_title"  {{$form_details->f_vp_name_title == 'ms'?'checked':''}}> Ms
							  </label>
							</div>
							<div class="form-check-inline">
							  <label class="form-check-label">
							    <input type="radio" class="form-check-input" value="mrs" name="f_vp_name_title"  {{$form_details->f_vp_name_title == 'mrs'?'checked':''}}> Mrs
							  </label>
							</div>
							<div class="form-check-inline">
							  <label class="form-check-label">
							    <input type="radio" class="form-check-input" value="mr" name="f_vp_name_title"  {{$form_details->f_vp_name_title == 'mr'?'checked':''}}>  Mr
							  </label>
							</div>
							<div class="form-check-inline">
							  <label class="form-check-label">
							    <input type="radio" class="form-check-input" value="other" name="f_vp_name_title"  {{$form_details->f_vp_name_title == 'other'?'checked':''}}> Other (please specify):
							  </label>
							</div>
				        </td> 
				      </tr>
				      <tr>
				      	<td colspan="2"> 
							 First Name:
							 <input type="text" class="border-0" name="f_vp_f_name" value="{{$form_details->f_vp_f_name}}">
						</td>
					      
					    <td colspan="2"> 
							Last Name:
							 <input type="text" class="border-0" name="f_vp_l_name" value="{{$form_details->f_vp_l_name}}">
						</td>
				      </tr>
				      <tr>
				      	<td colspan="2"> 
							 Email:
							 <input type="email" class="border-0" name="f_vp_email" value="{{$form_details->f_vp_email}}">
						</td>
					    <td colspan="2"> 
							Membership No:
							 <input type="text" class="border-0" name="f_vp_membership_no" value="{{$form_details->f_vp_membership_no}}">
						</td>
				      </tr>
						<tr>
					      	<td colspan="4"> 
								Address:
								 <input type="text" class="border-0" name="f_vp_address" value="{{$form_details->f_vp_address}}">
							</td>
						</tr>
						<tr>
					      	<td> 
								 State:
								 <input type="text" class="border-0" name="f_vp_state" value="{{$form_details->f_vp_state}}">
							</td>
						    <td colspan="2"> 
								Postcode:
								 <input type="text" class="border-0" name="f_vp_postcode" value="{{$form_details->f_vp_postcode}}">
							</td>
							<td>Country (if overseas):
								<input type="text" class="border-0" name="f_vp_country" value="{{$form_details->f_vp_country}}">
							</td>
					     </tr>
					     <tr>
					      	<td> 
								 Phone (H):
								 <input type="text" class="border-0" name="f_vp_phone_h" value="{{$form_details->f_vp_phone_h}}">
							</td>
						    <td colspan="2"> 
								Phone (B):
								 <input type="text" class="border-0" name="f_vp_phone_b" value="{{$form_details->f_vp_phone_b}}">
							</td>
							<td>Phone (B):
								<input type="text" class="border-0" name="f_vp_phone_m" value="{{$form_details->f_vp_phone_m}}">
							</td>
					     </tr>
				    </tbody>
				</table>
			</div>

			<div class="table-responsive-md mt-4">
				<table class="table-bordered table-sm" width="100%">
				    <thead class="table-head">
				      <tr>
				      	<th colspan="4">
					      	<div class="row">
					      		<div class="col-sm-12">
					      			2<sup>st</sup> VICE PRESIDENT
					      		</div>
					      	</div>
				      	</th>
				      </tr>
				    </thead>
				    <tbody>
				    	
				    	<tr>
				    		<td width="40%" style="height: 0px;padding: 0 !important; border-color: #fff !important;"></td>
				    		<td width="15%" style="height: 0px;padding: 0 !important;  border-color: #fff !important;" ></td>
				    		<td width="15%" style="height: 0px;padding: 0 !important;  border-color: #fff !important;"></td>
				    		<td width="30%" style="height: 0px;padding: 0 !important;  border-color: #fff !important;"></td>
				    	</tr>
				    	
				      <tr>
				        <td colspan="4">
							<div class="form-check-inline">
							  <label class="form-check-label">
							    <input type="radio" class="form-check-input" value="miss" name="s_vp_name_title"  {{$form_details->s_vp_name_title == 'miss'?'checked':''}}> Miss
							  </label>
							</div>
							<div class="form-check-inline">
							  <label class="form-check-label">
                              <input type="radio" class="form-check-input" value="ms" name="s_vp_name_title" {{$form_details->s_vp_name_title == 'ms'?'checked':''}}> Ms
							  </label>
							</div>
							<div class="form-check-inline">
							  <label class="form-check-label">
                              <input type="radio" class="form-check-input" value="mrs" name="s_vp_name_title" {{$form_details->s_vp_name_title == 'mrs'?'checked':''}}> Mrs
							  </label>
							</div>
							<div class="form-check-inline">
							  <label class="form-check-label">
                              <input type="radio" class="form-check-input" value="mr" name="s_vp_name_title" {{$form_details->s_vp_name_title == 'mr'?'checked':''}}> Mr
							  </label>
							</div>
							<div class="form-check-inline">
							  <label class="form-check-label">
                              <input type="radio" class="form-check-input" value="other" name="s_vp_name_title" {{$form_details->s_vp_name_title == 'other'?'checked':''}}> Other (please specify):
							  </label>
							</div>
				        </td> 
				      </tr>
				      <tr>
				      	<td colspan="2"> 
							 First Name:
							 <input type="text" class="border-0" name=" s_vp_f_name" value="{{$form_details-> s_vp_f_name}}">
						</td>
					      
					    <td colspan="2"> 
							Last Name:
							 <input type="text" class="border-0" name=" s_vp_l_name" value="{{$form_details-> s_vp_l_name}}">
						</td>
				      </tr>
				      <tr>
				      	<td colspan="2"> 
							 Email:
							 <input type="email" class="border-0" name=" s_vp_email" value="{{$form_details-> s_vp_email}}">
						</td>
					    <td colspan="2"> 
							Membership No:
							 <input type="text" class="border-0" name=" s_vp_membership_no" value="{{$form_details-> s_vp_membership_no}}">
						</td>
				      </tr>
						<tr>
					      	<td colspan="4"> 
								Address:
								 <input type="text" class="border-0" name=" s_vp_address" value="{{$form_details-> s_vp_address}}">
							</td>
						</tr>
						<tr>
					      	<td> 
								 State:
								 <input type="text" class="border-0" name=" s_vp_state" value="{{$form_details-> s_vp_state}}">
							</td>
						    <td colspan="2"> 
								Postcode:
								 <input type="text" class="border-0" name=" s_vp_postcode" value="{{$form_details-> s_vp_postcode}}">
							</td>
							<td>Country (if overseas):
								<input type="text" class="border-0" name=" s_vp_country" value="{{$form_details-> s_vp_country}}">
							</td>
					     </tr>
					     <tr>
					      	<td> 
								 Phone (H):
								 <input type="text" class="border-0" name=" s_vp_phone_h" value="{{$form_details-> s_vp_phone_h}}">
							</td>
						    <td colspan="2"> 
								Phone (B):
								 <input type="text" class="border-0" name=" s_vp_phone_b" value="{{$form_details-> s_vp_phone_b}}">
							</td>
							<td>Phone (M):
								<input type="text" class="border-0" name=" s_vp_phone_m" value="{{$form_details-> s_vp_phone_m}}">
							</td>
					     </tr>
				    </tbody>
				</table>
			</div>

			<div class="table-responsive-md mt-4">
				<table class="table-bordered table-sm" width="100%">
				    <thead class="table-head">
				      <tr>
				      	<th colspan="4">
					      	<div class="row">
					      		<div class="col-sm-12">
					      			TREASURER
					      		</div>
					      	</div>
				      	</th>
				      </tr>
				    </thead>
				    <tbody>
				    	
				    	<tr>
				    		<td width="40%" style="height: 0px;padding: 0 !important; border-color: #fff !important;"></td>
				    		<td width="15%" style="height: 0px;padding: 0 !important;  border-color: #fff !important;" ></td>
				    		<td width="15%" style="height: 0px;padding: 0 !important;  border-color: #fff !important;"></td>
				    		<td width="30%" style="height: 0px;padding: 0 !important;  border-color: #fff !important;"></td>
				    	</tr>
				    	
				      <tr>
				        <td colspan="4">
							<div class="form-check-inline">
							  <label class="form-check-label">
							    <input type="radio" class="form-check-input" value="miss" name="treasurer_name_title" {{$form_details->treasurer_name_title == 'miss'?'checked':''}}> Miss
							  </label>
							</div>
							<div class="form-check-inline">
							  <label class="form-check-label">
                              <input type="radio" class="form-check-input" value="ms" name="treasurer_name_title" {{$form_details->treasurer_name_title == 'ms'?'checked':''}}> Ms
							  </label>
							</div>
							<div class="form-check-inline">
							  <label class="form-check-label">
                              <input type="radio" class="form-check-input" value="mrs" name="treasurer_name_title" {{$form_details->treasurer_name_title == 'mrs'?'checked':''}}> Mrs
							  </label>
							</div>
							<div class="form-check-inline">
							  <label class="form-check-label">
                              <input type="radio" class="form-check-input" value="mr" name="treasurer_name_title" {{$form_details->treasurer_name_title == 'mr'?'checked':''}}> Mr
							  </label>
							</div>
							<div class="form-check-inline">
							  <label class="form-check-label">
                              <input type="radio" class="form-check-input" value="other" name="treasurer_name_title" {{$form_details->treasurer_name_title == 'other'?'checked':''}}> Other (please specify):
							  </label>
							</div>
				        </td> 
				      </tr>
				      <tr>
				      	<td colspan="2"> 
							 First Name:
							 <input type="text" class="border-0" name="treasurer_f_name" value="{{$form_details->treasurer_f_name}}">
						</td>
					      
					    <td colspan="2"> 
							Last Name:
							 <input type="text" class="border-0" name="treasurer_l_name" value="{{$form_details->treasurer_l_name}}">
						</td>
				      </tr>
				      <tr>
				      	<td colspan="2"> 
							 Email:
							 <input type="email" class="border-0" name="treasurer_email" value="{{$form_details->treasurer_email}}">
						</td>
					    <td colspan="2"> 
							Membership No:
							 <input type="text" class="border-0" name="treasurer_membership_no" value="{{$form_details->treasurer_membership_no}}">
						</td>
				      </tr>
						<tr>
					      	<td colspan="4"> 
								Address:
								 <input type="text" class="border-0" name="treasurer_address" value="{{$form_details->treasurer_address}}">
							</td>
						</tr>
						<tr>
					      	<td> 
								 State:
								 <input type="text" class="border-0" name="treasurer_state" value="{{$form_details->treasurer_state}}">
							</td>
						    <td colspan="2"> 
								Postcode:
								 <input type="text" class="border-0" name="treasurer_postcode" value="{{$form_details->treasurer_postcode}}">
							</td>
							<td>Country (if overseas):
								<input type="text" class="border-0" name="treasurer_country" value="{{$form_details->treasurer_country}}">
							</td>
					     </tr>
					     <tr>
					      	<td> 
								 Phone (H):
								 <input type="text" class="border-0" name="treasurer_phone_h" value="{{$form_details->treasurer_phone_h}}">
							</td>
						    <td colspan="2"> 
								Phone (B):
								 <input type="text" class="border-0" name="treasurer_phone_b" value="{{$form_details->treasurer_phone_b}}">
							</td>
							<td>Phone (M):
								<input type="text" class="border-0" name="treasurer_phone_m" value="{{$form_details->treasurer_phone_m}}">
							</td>
					     </tr>
				    </tbody>
				</table>
			</div>
		</div>
		<div class="container mt-4">
			<div class="heading-top">
			<img src="{{asset('img/logo.jpg')}}" class="float-start"><h4>DOGS NSW AFFILIATE ANNUAL REPORT</h4>
			</div>
			<div class="table-responsive-md mt-4">
				<table class="table-bordered table-sm" width="100%">
				    <thead class="table-head">
				      <tr>
				      	<th colspan="3">
					      	<div class="row">
					      		<div class="col-sm-12">
					      			DECLARATION
					      		</div>
					      	</div>
				      	</th>
				      </tr>
				    </thead>
				    <tbody>
				    	<tr>
				    		<td width="65%" style="height: 0px;padding: 0 !important; border-color: #fff !important;"></td>
				    		<td width="25%" style="height: 0px;padding: 0 !important;  border-color: #fff !important;" ></td>
				    		<td width="10%" style="height: 0px;padding: 0 !important;  border-color: #fff !important;"></td>
				    		
				    	</tr>
				    	
					    <tr>
					      	<td colspan="3">
						      	<p>The copies of the following documents are attached, which were presented at our Annual General Meeting held on the above date:
						      	</p>
							</td>
					    </tr>
				      <tr>
				        
				        <td class="font-italic" colspan="2">Financials Reports, including the Balance Sheet</td>
				        <td class="text-center">
							<div class="form-check">
							  <label class="form-check-label">
							    <input type="checkbox" class="form-check-input" value="yes" name="financial_report_blns_sheet" {{isset($form_details->financial_report_blns_sheet) ? 'checked':''}}>
							  </label>
							</div>
						</td>
				      </tr>
				      <tr>
				        
				        <td class="font-italic" colspan="2">Minutes of the Annual General Meeting</td>
				        <td class="text-center">
							<div class="form-check">
							  <label class="form-check-label">
							    <input type="checkbox" class="form-check-input" value="yes" name="annual_general_meeting" {{isset($form_details->annual_general_meeting) ? 'checked':''}}>
							  </label>
							</div>
						</td>
				      </tr>
				      <tr>
				        
				        <td class="font-italic" colspan="2">President & Secretary’s Report</td>
				        <td class="text-center">
							<div class="form-check">
							  <label class="form-check-label">
							    <input type="checkbox" class="form-check-input" value="yes" name="secretary_report" {{isset($form_details->secretary_report) ? 'checked':''}}>
							  </label>
							</div>
						</td>
				      </tr>
				      <tr>
				        
				        <td class="font-italic" colspan="2">List of Financial Members, signed by the President & Secretary</td>
				        <td class="text-center">
							<div class="form-check">
							  <label class="form-check-label">
							    <input type="checkbox" class="form-check-input" value="yes" name="signed_by_president_secretary" {{isset($form_details->signed_by_president_secretary) ? 'checked':''}}>
							  </label>
							</div>
						</td>
				      </tr>
				      <tr>
				        <td class="font-italic" colspan="2">Attached details of any other information you consider necessary</td>
				        <td class="text-center">
							<div class="form-check">
							  <label class="form-check-label">
							    <input type="checkbox" class="form-check-input" value="yes" name="info_consider_necessary" {{isset($form_details->info_consider_necessary) ? 'checked':''}}>
							  </label>
							</div>
						</td>
				      </tr>
						<tr>
					        <td >Signature
					        	<input type="text"  name="treasurer_declaration_sign" value="{{$form_details->treasurer_declaration_sign}}">
					        </td>
					        <td colspan="2">
								Date: <input type="date"   class="border-0" name="treasurer_declaration_date" value="{{$form_details->treasurer_declaration_date}}">
							</td>
					    </tr>
					    <tr>
					    	<td colspan="3"> Position held as above: <input type="text"   class="border-0" name="treasurer_declaration_position_held_above" value="{{$form_details->treasurer_declaration_position_held_above}}"></td>
					    </tr>
				    </tbody>
				</table>
			</div>
			<div class="table-responsive-md mt-4">
				<table class="table-bordered table-sm" width="100%">
				    <thead class="table-head">
				      <tr>
				      	<th colspan="4">
					      	<div class="row">
					      		<div class="col-sm-12">
					      			LIST OF FINANCIAL MEMBERS
					      		</div>
					      	</div>
				      	</th>
				      </tr>
				    </thead>
				    <tbody>
						<tr>
							<td>Initial</td>
							<td>Surname</td>
							<td>DOGS NSW Membership No</td>
							<td width="55%">Address</td>
						</tr>
						<tr>
							<td><input type="text" class="border-0" name="financial_member_initial_1" value="{{$form_details->financial_member_initial_1}}"></td>
							<td><input type="text" class="border-0" name="financial_member_surname_1" value="{{$form_details->financial_member_surname_1}}"></td>
							<td><input type="text" class="border-0" name="financial_member_dog_membership_1" value="{{$form_details->financial_member_dog_membership_1}}"></td>
							<td><input type="text" class="border-0" style="width:100%" name="financial_member_address_1" value="{{$form_details->financial_member_address_1}}"></td>
						</tr>
						<tr>
							<td><input type="text" class="border-0" name="financial_member_initial_2" value="{{$form_details->financial_member_initial_2}}"></td>
							<td><input type="text" class="border-0" name="financial_member_surname_2" value="{{$form_details->financial_member_surname_2}}"></td>
							<td><input type="text" class="border-0" name="financial_member_dog_membership_2" value="{{$form_details->financial_member_dog_membership_2}}"></td>
							<td><input type="text" class="border-0" style="width:100%" name="financial_member_address_2" value="{{$form_details->financial_member_address_2}}"></td>
						</tr>
						<tr>
							<td><input type="text" class="border-0" name="financial_member_initial_3" value="{{$form_details->financial_member_initial_3}}"></td>
							<td><input type="text" class="border-0" name="financial_member_surname_3" value="{{$form_details->financial_member_surname_3}}"></td>
							<td><input type="text" class="border-0" name="financial_member_dog_membership_3" value="{{$form_details->financial_member_dog_membership_3}}"></td>
							<td><input type="text" class="border-0" style="width:100%" name="financial_member_address_3" value="{{$form_details->financial_member_address_3}}"></td>
						</tr>
						<tr>
							<td><input type="text" class="border-0" name="financial_member_initial_4" value="{{$form_details->financial_member_initial_4}}"></td>
							<td><input type="text" class="border-0" name="financial_member_surname_4" value="{{$form_details->financial_member_surname_4}}"></td>
							<td><input type="text" class="border-0" name="financial_member_dog_membership_4" value="{{$form_details->financial_member_dog_membership_4}}"></td>
							<td><input type="text" class="border-0" style="width:100%" name="financial_member_address_4" value="{{$form_details->financial_member_address_4}}"></td>
						</tr>
						<tr>
							<td><input type="text" class="border-0" name="financial_member_initial_5" value="{{$form_details->financial_member_initial_5}}"></td>
							<td><input type="text" class="border-0" name="financial_member_surname_5" value="{{$form_details->financial_member_surname_5}}"></td>
							<td><input type="text" class="border-0" name="financial_member_dog_membership_5" value="{{$form_details->financial_member_dog_membership_5}}"></td>
							<td><input type="text" class="border-0" style="width:100%" name="financial_member_address_5" value="{{$form_details->financial_member_address_5}}"></td>
						</tr>
						<tr>
							<td><input type="text" class="border-0" name="financial_member_initial_6" value="{{$form_details->financial_member_initial_6}}"></td>
							<td><input type="text" class="border-0" name="financial_member_surname_6" value="{{$form_details->financial_member_surname_6}}"></td>
							<td><input type="text" class="border-0" name="financial_member_dog_membership_6" value="{{$form_details->financial_member_dog_membership_6}}"></td>
							<td><input type="text" class="border-0" style="width:100%" name="financial_member_address_6" value="{{$form_details->financial_member_address_6}}"></td>
						</tr>
						<tr>
							<td><input type="text" class="border-0" name="financial_member_initial_7" value="{{$form_details->financial_member_initial_7}}"></td>
							<td><input type="text" class="border-0" name="financial_member_surname_7" value="{{$form_details->financial_member_surname_7}}"></td>
							<td><input type="text" class="border-0" name="financial_member_dog_membership_7" value="{{$form_details->financial_member_dog_membership_7}}"></td>
							<td><input type="text" class="border-0" style="width:100%" name="financial_member_address_7" value="{{$form_details->financial_member_address_7}}"></td>
						</tr>
						<tr>
							<td><input type="text" class="border-0" name="financial_member_initial_8" value="{{$form_details->financial_member_initial_8}}"></td>
							<td><input type="text" class="border-0" name="financial_member_surname_8" value="{{$form_details->financial_member_surname_8}}"></td>
							<td><input type="text" class="border-0" name="financial_member_dog_membership_8" value="{{$form_details->financial_member_dog_membership_8}}"></td>
							<td><input type="text" class="border-0" style="width:100%" name="financial_member_address_8" value="{{$form_details->financial_member_address_8}}"></td>
						</tr>
						<tr>
							<td><input type="text" class="border-0" name="financial_member_initial_9" value="{{$form_details->financial_member_initial_9}}"></td>
							<td><input type="text" class="border-0" name="financial_member_surname_9" value="{{$form_details->financial_member_surname_9}}"></td>
							<td><input type="text" class="border-0" name="financial_member_dog_membership_9" value="{{$form_details->financial_member_dog_membership_9}}"></td>
							<td><input type="text" class="border-0" style="width:100%" name="financial_member_address_9" value="{{$form_details->financial_member_address_9}}"></td>
						</tr>
						<tr>
							<td><input type="text" class="border-0" name="financial_member_initial_10" value="{{$form_details->financial_member_initial_10}}"></td>
							<td><input type="text" class="border-0" name="financial_member_surname_10" value="{{$form_details->financial_member_surname_10}}"></td>
							<td><input type="text" class="border-0" name="financial_member_dog_membership_10" value="{{$form_details->financial_member_dog_membership_10}}"></td>
							<td><input type="text" class="border-0" style="width:100%" name="financial_member_address_10" value="{{$form_details->financial_member_address_10}}"> </td>
						</tr><tr>
							<td><input type="text" class="border-0" name="financial_member_initial_11" value="{{$form_details->financial_member_initial_11}}"></td>
							<td><input type="text" class="border-0" name="financial_member_surname_11" value="{{$form_details->financial_member_surname_11}}"></td>
							<td><input type="text" class="border-0"name="financial_member_dog_membership_11" value="{{$form_details->financial_member_dog_membership_11}}"></td>
							<td><input type="text" class="border-0" style="width:100%" name="financial_member_address_11" value="{{$form_details->financial_member_address_11}}"></td>
						</tr>
						<tr>
							<td><input type="text" class="border-0" name="financial_member_initial_12" value="{{$form_details->financial_member_initial_12}}"></td>
							<td><input type="text" class="border-0" name="financial_member_surname_12" value="{{$form_details->financial_member_surname_12}}"></td>
							<td><input type="text" class="border-0" name="financial_member_dog_membership_12" value="{{$form_details->financial_member_dog_membership_12}}"></td>
							<td><input type="text" class="border-0" style="width:100%" name="financial_member_address_12" value="{{$form_details->financial_member_address_12}}"></td>
						</tr>
						<tr>
							<td><input type="text" class="border-0" name="financial_member_initial_13" value="{{$form_details->financial_member_initial_13}}"></td>
							<td><input type="text" class="border-0" name="financial_member_surname_13" value="{{$form_details->financial_member_surname_13}}"></td>
							<td><input type="text" class="border-0" name="financial_member_dog_membership_13" value="{{$form_details->financial_member_dog_membership_13}}"></td>
							<td><input type="text" class="border-0" style="width:100%" name="financial_member_address_13" value="{{$form_details->financial_member_address_13}}"></td>
						</tr>
						<tr>
							<td><input type="text" class="border-0" name="financial_member_initial_14" value="{{$form_details->financial_member_initial_14}}"></td>
							<td><input type="text" class="border-0" name="financial_member_surname_14" value="{{$form_details->financial_member_surname_14}}"></td>
							<td><input type="text" class="border-0" name="financial_member_dog_membership_14" value="{{$form_details->financial_member_dog_membership_14}}"></td>
							<td><input type="text" class="border-0" style="width:100%" name="financial_member_address_14" value="{{$form_details->financial_member_address_14}}"></td>
						</tr>
						<tr>
							<td><input type="text" class="border-0" name="financial_member_initial_15" value="{{$form_details->financial_member_initial_15}}"></td>
							<td><input type="text" class="border-0" name="financial_member_surname_15" value="{{$form_details->financial_member_surname_15}}"></td>
							<td><input type="text" class="border-0" name="financial_member_dog_membership_15" value="{{$form_details->financial_member_dog_membership_15}}"></td>
							<td><input type="text" class="border-0" style="width:100%" name="financial_member_address_15" value="{{$form_details->financial_member_address_15}}"></td>
						</tr>
						<tr>
							<td><input type="text" class="border-0" name="financial_member_initial_16" value="{{$form_details->financial_member_initial_16}}"></td>
							<td><input type="text" class="border-0" name="financial_member_surname_16" value="{{$form_details->financial_member_surname_16}}"></td>
							<td><input type="text" class="border-0" name="financial_member_dog_membership_16" value="{{$form_details->financial_member_dog_membership_16}}"></td>
							<td><input type="text" class="border-0" style="width:100%" name="financial_member_address_16" value="{{$form_details->financial_member_address_16}}"></td>
						</tr>
						<!-- <tr>
							<td><input type="text" class="border-0"></td>
							<td><input type="text" class="border-0"></td>
							<td><input type="text" class="border-0"></td>
							<td><input type="text" class="border-0" style="width:100%"></td>
						</tr> -->
						<tr>
							<td><input type="text" class="border-0" name="financial_member_initial_17" value="{{$form_details->financial_member_initial_17}}"></td>
							<td><input type="text" class="border-0" name="financial_member_surname_17" value="{{$form_details->financial_member_surname_17}}"></td>
							<td><input type="text" class="border-0" name="financial_member_dog_membership_17" value="{{$form_details->financial_member_dog_membership_17}}"></td>
							<td><input type="text" class="border-0" style="width:100%" name="financial_member_address_17" value="{{$form_details->financial_member_address_17}}"></td>
						</tr>
						<tr>
							<td><input type="text" class="border-0" name="financial_member_initial_18" value="{{$form_details->financial_member_initial_18}}"></td>
							<td><input type="text" class="border-0" name="financial_member_surname_18" value="{{$form_details->financial_member_surname_18}}"></td>
							<td><input type="text" class="border-0" name="financial_member_dog_membership_18" value="{{$form_details->financial_member_dog_membership_18}}"></td>
							<td><input type="text" class="border-0" style="width:100%" name="financial_member_address_18" value="{{$form_details->financial_member_address_18}}"></td>
						</tr>
						<tr>
							<td><input type="text" class="border-0" name="financial_member_initial_19" value="{{$form_details->financial_member_initial_19}}"></td>
							<td><input type="text" class="border-0" name="financial_member_surname_19" value="{{$form_details->financial_member_surname_19}}"></td>
							<td><input type="text" class="border-0" name="financial_member_dog_membership_19" value="{{$form_details->financial_member_dog_membership_19}}"></td>
							<td><input type="text" class="border-0" style="width:100%" name="financial_member_address_19" value="{{$form_details->financial_member_address_19}}"></td>
						</tr>
						<tr>
							<td><input type="text" class="border-0" name="financial_member_initial_20" value="{{$form_details->financial_member_initial_20}}"></td>
							<td><input type="text" class="border-0" name="financial_member_surname_20" value="{{$form_details->financial_member_surname_20}}"></td>
							<td><input type="text" class="border-0" name="financial_member_dog_membership_20" value="{{$form_details->financial_member_dog_membership_20}}"></td>
							<td><input type="text" class="border-0" style="width:100%" name="financial_member_address_20" value="{{$form_details->financial_member_address_20}}"></td>
						</tr>
						<tr> 
							<td><input type="text" class="border-0" name="financial_member_initial_21" value="{{$form_details->financial_member_initial_21}}"></td>
							<td><input type="text" class="border-0" name="financial_member_surname_21" value="{{$form_details->financial_member_surname_21}}"></td>
							<td><input type="text" class="border-0" name="financial_member_dog_membership_21" value="{{$form_details->financial_member_dog_membership_21}}"></td>
							<td><input type="text" class="border-0" style="width:100%" name="financial_member_address_21" value="{{$form_details->financial_member_address_21}}"></td>
						</tr>
						<tr>
							<td><input type="text" class="border-0" name="financial_member_initial_22" value="{{$form_details->financial_member_initial_22}}"></td>
							<td><input type="text" class="border-0" name="financial_member_surname_22" value="{{$form_details->financial_member_surname_22}}"></td>
							<td><input type="text" class="border-0" name="financial_member_dog_membership_22" value="{{$form_details->financial_member_dog_membership_22}}"></td>
							<td><input type="text" class="border-0" style="width:100%" name="financial_member_address_22" value="{{$form_details->financial_member_address_22}}"></td>
						</tr><tr>
							<td><input type="text" class="border-0" name="financial_member_initial_23" value="{{$form_details->financial_member_initial_23}}"></td>
							<td><input type="text" class="border-0" name="financial_member_surname_23" value="{{$form_details->financial_member_surname_23}}"></td>
							<td><input type="text" class="border-0" name="financial_member_dog_membership_23" value="{{$form_details->financial_member_dog_membership_23}}"></td>
							<td><input type="text" class="border-0" style="width:100%" name="financial_member_address_23" value="{{$form_details->financial_member_address_23}}"></td>
						</tr>
						<tr>
							<td><input type="text" class="border-0" name="financial_member_initial_24" value="{{$form_details->financial_member_initial_24}}"></td>
							<td><input type="text" class="border-0" name="financial_member_surname_24" value="{{$form_details->financial_member_surname_24}}"></td>
							<td><input type="text" class="border-0" name="financial_member_dog_membership_24" value="{{$form_details->financial_member_dog_membership_24}}"></td>
							<td><input type="text" class="border-0" style="width:100%" name="financial_member_address_24" value="{{$form_details->financial_member_address_24}}"></td>
						</tr>
						<tr>
							<td><input type="text" class="border-0" name="financial_member_initial_25" value="{{$form_details->financial_member_initial_25}}"></td>
							<td><input type="text" class="border-0" name="financial_member_surname_25" value="{{$form_details->financial_member_surname_25}}"></td>
							<td><input type="text" class="border-0" name="financial_member_dog_membership_25" value="{{$form_details->financial_member_dog_membership_25}}"></td>
							<td><input type="text" class="border-0" style="width:100%" name="financial_member_address_25" value="{{$form_details->financial_member_address_25}}"></td>
						</tr>
				    </tbody>
				</table>
			</div>
			<div class="table-responsive-md mt-4">
				<table class="table-bordered table-sm" width="100%">
				    <thead class="table-head">
				      <tr>
				      	<th colspan="4">
					      	<div class="row">
					      		<div class="col-sm-12">
					      			DECLARATION
					      		</div>
					      	</div>
				      	</th>
				      </tr>
				    </thead>
				    <tbody>
						<tr>
					        <td>Signature
					        	<input type="text"   name="financial_member_sign" value="{{$form_details->financial_member_sign}}">
					        </td>
					        <td>
								Date: <input type="date"   class="border-0" name="financial_member_date" value="{{$form_details->financial_member_date}}">
							</td>
					    </tr>
					    <tr>
					    	<td colspan="2"> Position held as above: <input type="text"   class="border-0" name="financial_member_position_held_above" value="{{$form_details->financial_member_position_held_above}}"></td>
					    </tr>
				    </tbody>
				</table>
			</div>
		</div>
		<div class="container mt-4">
			<div class="heading-top">
			<img src="{{asset('img/logo.jpg')}}" class="float-start"><h4>DOGS NSW AFFILIATE ANNUAL REPORT</h4>
			</div>
			<div class="table-responsive-md mt-2">

				<table class="table-bordered table-sm" width="100%">
				    <thead class="table-head">
				      <tr>
				      	<th colspan="4">
					      	<div class="row">
					      		<div class="col-sm-12">
					      			2. ANNUAL REPORT PROFIT & LOSS STATEMENT
					      		</div>
					      	</div>
				      	</th>
				      </tr>
				    </thead>
				    <tbody>
				    	<tr>
				    		<td width="35%" style="height: 0px;padding: 0 !important; border-color: #fff !important;"></td>
				    		<td width="25%" style="height: 0px;padding: 0 !important;  border-color: #fff !important;" ></td>
				    		<td width="20%" style="height: 0px;padding: 0 !important;  border-color: #fff !important;"></td>
				    		<td width="20%" style="height: 0px;padding: 0 !important;  border-color: #fff !important;"></td>
				    	</tr>
				    	
						<tr>
					        <td>Affiliate Name:
					        	
					        </td>
					        <td colspan="3">
								<input type="text"   class="border-0" name="s_annual_report_affiliate_name" value="{{$form_details->s_annual_report_affiliate_name}}">
							</td>
					    </tr>
					    <tr>
					        <td>Membership No:</td>
					        <td colspan="3">
								<input type="text"   class="border-0" name="s_annual_report_membership_no" value="{{$form_details->s_annual_report_membership_no}}">
							</td>
					    </tr>
					    <tr>
					    	<td colspan="2">Our Financial Statement presented at our Annual General Meeting held on:</td>
					    	<td><input type="date" name="s_annual_report_annual_deneral_meeting" value="{{$form_details->s_annual_report_annual_deneral_meeting}}"> (Date)</td>
					    	<td>is shown hereunder</td>
					    </tr>
					    <tr>
					    	<td>Profit & Loss Statement for the period form:</td>
					    	<td><input type="date" name="s_annual_report_period_from" value="{{$form_details->s_annual_report_period_from}}"> (Date)</td>
					    	<td>to</td>
					    	<td> (Date) <input type="date" name="s_annual_report_period_to" value="{{$form_details->s_annual_report_period_to}}"></td>
					    </tr>
					   
				    </tbody>
				</table>
			</div>
			<div class="table-responsive-md mt-2">
				<table class="table-bordered table-sm" width="100%">
				    <thead class="table-head">
				      <tr>
				      	<th colspan="2">	
					      	INCOM
				      	</th>
				      	<th colspan="2">
					      	EXPENDITURE
				      	</th>
				      </tr>
				    </thead>
				    <tbody>
				    	<tr>
				    		<th colspan="2">
				    			From Shows/Trials 
				    		</th>
				    		<th colspan="2">
				    			From Shows/Trials 
				    		</th>
				    	</tr>
				    	<tr>
				    		<td width="25%">
				    			Entry Fees
				    		</td>
				    		<td>
				    			$ <input type="text" class="border-0" name="s_annual_report_entry_fees" value="{{$form_details->s_annual_report_entry_fees}}">
				    		</td>
				    		<td>
				    			Prizes, Trophies & Ribbons
				    		</td>
				    		<td>
				    			$ <input type="text" class="border-0" name="s_annual_report_pr_tr_ribbons" value="{{$form_details->s_annual_report_pr_tr_ribbons}}">
				    		</td>
				    	</tr>
				    	<tr>
				    		<td>
				    			Catalogue Sales 
				    		</td>
				    		<td>
				    			$ <input type="text" class="border-0" name="s_annual_report_catalouge_sales" value="{{$form_details->s_annual_report_catalouge_sales}}">
				    		</td>
				    		<td>
				    			Judges’ Expenses
				    		</td>
				    		<td>
				    			$ <input type="text" class="border-0" name="s_annual_report_judges_expenses" value="{{$form_details->s_annual_report_judges_expenses}}">
				    		</td>
				    	</tr>
				    	<tr>
				    		<td>
				    			Catering Receipts
				    		</td>
				    		<td>
				    			$ <input type="text" class="border-0" name="s_annual_report_catering_receipts" value="{{$form_details->s_annual_report_catering_receipts}}">
				    		</td>
				    		<td>
				    			Gifts Fees Accommodation
				    		</td>
				    		<td>
				    			$ <input type="text" class="border-0" name="s_annual_report_gifts_fees" value="{{$form_details->s_annual_report_gifts_fees}}">
				    		</td>
				    	</tr>
				    	<tr>
				    		<td>
				    			Other Show Income
				    		</td>
				    		<td>
				    			$ <input type="text" class="border-0" name="s_annual_report_other_show_income" value="{{$form_details->s_annual_report_other_show_income}}">
				    		</td>
				    		<td>
				    			Catalogue Expenses
				    		</td>
				    		<td>
				    			$ <input type="text" class="border-0" name="s_annual_report_catalogue_expenses" value="{{$form_details->s_annual_report_catalogue_expenses}}">
				    		</td>
				    	</tr>
				    	<tr>
				    		<td colspan="2">
				    			<b>Other</b>
				    		</td>
				    		
				    		<td>
				    			Catering Expenses
				    		</td>
				    		<td>
				    			<input type="text" class="border-0" name="s_annual_report_catering_expenses" value="{{$form_details->s_annual_report_catering_expenses}}">
				    		</td>
				    	</tr>
				    	<tr>
				    		<td>
				    			Membership Fees 
				    		</td>
				    		<td>
				    			$ <input type="text" class="border-0" name="s_annual_report_membership_fees" value="{{$form_details->s_annual_report_membership_fees}}">
				    		</td>
				    		<td>
				    			Ground Hire
				    		</td>
				    		<td>
				    			$ <input type="text" class="border-0" name="s_annual_report_ground_hire" value="{{$form_details->s_annual_report_ground_hire}}">
				    		</td>
				    	</tr>
				    	<tr>
				    		<td>
				    			Function Receipts
				    		</td>
				    		<td>
				    			$ <input type="text" class="border-0" name="s_annual_report_function_receipts" value="{{$form_details->s_annual_report_function_receipts}}">
				    		</td>
				    		<td>
				    			Exhibitor Levies
				    		</td>
				    		<td>
				    			$ <input type="text" class="border-0" name="s_annual_report_exhibitor_levies" value="{{$form_details->s_annual_report_exhibitor_levies}}">
				    		</td>
				    	</tr>
				    	<tr>
				    		<td>
				    			Other Fundraising
				    		</td>
				    		<td>
				    			$ <input type="text" class="border-0" name="s_annual_report_other_fundraising" value="{{$form_details->s_annual_report_other_fundraising}}">
				    		</td>
				    		<td>
				    			Other Show Expenses
				    		</td>
				    		<td>
				    			$ <input type="text" class="border-0" name="s_annual_report_other_show_expenses" value="{{$form_details->s_annual_report_other_show_expenses}}">
				    		</td>
				    	</tr>
				    	<tr>
				    		<td>
				    			Activity Receipts
				    		</td>
				    		<td>
				    			$ <input type="text" class="border-0" name="s_annual_report_activity_receipts" value="{{$form_details->s_annual_report_activity_receipts}}">
				    		</td>
				    		<td colspan="2">
				    			<b>Other</b>
				    		</td>
				    	</tr>
				    	<tr>
				    		<td>
				    			Newsletter (Advertising, etc)
				    		</td>
				    		<td>
				    			$ <input type="text" class="border-0" name="s_annual_report_newsletter" value="{{$form_details->s_annual_report_newsletter}}">
				    		</td>
				    		<td>
				    			Affiliation Fees
				    		</td>
				    		<td>
				    			$ <input type="text" class="border-0" name="s_annual_report_affiliation_fees" value="{{$form_details->s_annual_report_affiliation_fees}}">
				    		</td>
				    	</tr>
				    	<tr>
				    		<td>
				    			Interest from Investments
				    		</td>
				    		<td>
				    			$ <input type="text" class="border-0" name="s_annual_report_interest_from_investments" value="{{$form_details->s_annual_report_interest_from_investments}}">
				    		</td>
				    		<td>
				    			Function Costs
				    		</td>
				    		<td>
				    			$ <input type="text" class="border-0" name="s_annual_report_function_costs" value="{{$form_details->s_annual_report_function_costs}}">
				    		</td>
				    	</tr>
				    	<tr>
				    		<td>
				    			Donations
				    		</td>
				    		<td>
				    			$ <input type="text" class="border-0" name="s_annual_report_donations" value="{{$form_details->s_annual_report_donations}}">
				    		</td>
				    		<td>
				    			Other Fundraising
				    		</td>
				    		<td>
				    			$ <input type="text" class="border-0" name="s_annual_report_other_fundraising" value="{{$form_details->s_annual_report_other_fundraising}}">
				    		</td>
				    	</tr>
				    	<tr>
				    		<td colspan="2">
				    			<b>Other Income</b>
				    		</td>
				    		
				    		<td>
				    			Activity Costs
				    		</td>
				    		<td>
				    			$ <input type="text" class="border-0" name="s_annual_report_activity_costs" value="{{$form_details->s_annual_report_activity_costs}}">
				    		</td>
				    	</tr>

				    	<tr>
				    		<td><input type="text" class="border-0" name="other_income_name_1"  value="{{$form_details->other_income_name_1}}">	 </td>
				    		<td> $ <input type="text" class="border-0" name="other_income_value_1" value="{{$form_details->other_income_value_1}}" >		</td>
				    		<td>
				    			Newsletter Costs
				    		</td>
				    		<td>
				    			$ <input type="text" class="border-0" name="s_annual_report_newsletter_costs" value="{{$form_details->s_annual_report_newsletter_costs}}">
				    		</td>
				    	</tr>
				    	<tr>
				    		<td> <input type="text" class="border-0" name="other_income_name_2" value="{{$form_details->other_income_name_2}}">	</td>
				    		<td> $ <input type="text" class="border-0" name="other_income_value_2" value="{{$form_details->other_income_value_2}}">		</td>
				    		<td>
				    			Depreciation
				    		</td>
				    		<td>
				    			$ <input type="text" class="border-0" name="s_annual_report_depreciation" value="{{$form_details->s_annual_report_depreciation}}">
				    		</td>
				    	</tr>
				    	<tr>
				    		<td> <input type="text" class="border-0" name="other_income_name_3" value="{{$form_details->other_income_name_3}}">	</td>
				    		<td> $ <input type="text" class="border-0" name="other_income_value_3" value="{{$form_details->other_income_value_3}}">		</td>
				    		<td>
				    			Printing & Stationary
				    		</td>
				    		<td>
				    			$ <input type="text" class="border-0" name="s_annual_report_printing_stationary" value="{{$form_details->s_annual_report_printing_stationary}}">
				    		</td>
				    	</tr>
				    	<tr>
				    		<td><input type="text" class="border-0" name="other_income_name_4"  value="{{$form_details->other_income_name_4}}">	 </td>
				    		<td> $ <input type="text" class="border-0" name="other_income_value_4"  value="{{$form_details->other_income_value_4}}">		</td>
				    		<td>
				    			Secretary’s Expenses
				    		</td>
				    		<td>
				    			$ <input type="text" class="border-0" name="s_annual_report_secretary_expenses"  value="{{$form_details->s_annual_report_secretary_expenses}}">
				    		</td>
				    	</tr>
				    	<tr>
				    		<td> <input type="text" class="border-0" name="other_income_name_5"  value="{{$form_details->other_income_name_5}}">	</td>
				    		<td> $ <input type="text" class="border-0" name="other_income_value_5"  value="{{$form_details->other_income_value_5}}">		</td>
				    		<td>
				    			Stamps, telephone, etc
				    		</td>
				    		<td>
				    			$ <input type="text" class="border-0" name="s_annual_report_stamps_telephone"  value="{{$form_details->s_annual_report_stamps_telephone}}">
				    		</td>
				    	</tr>
				    	<tr>
				    		<td><input type="text" class="border-0" name="other_income_name_6"  value="{{$form_details->other_income_name_6}}">	 </td>
				    		<td> $ <input type="text" class="border-0" name="other_income_value_6"  value="{{$form_details->other_income_value_6}}">		</td>
				    		<td>
				    			Meeting Room Hire
				    		</td>
				    		<td>
				    			$ <input type="text" class="border-0" name="s_annual_report_meeting_room_hire"  value="{{$form_details->s_annual_report_meeting_room_hire}}">
				    		</td>
				    	</tr>
				    	<tr>
				    		<td><input type="text" class="border-0" name="other_income_name_7"  value="{{$form_details->other_income_name_7}}">	 </td>
				    		<td> $ <input type="text" class="border-0" name="other_income_value_7"  value="{{$form_details->other_income_value_7}}">		</td>
				    		<td>
				    			Bank Fees & Charges
				    		</td>
				    		<td>
				    			$ <input type="text" class="border-0" name="s_annual_report_bank_fees"  value="{{$form_details->s_annual_report_bank_fees}}">
				    		</td>
				    	</tr>
				    	<tr>
				    		<td> <input type="text" class="border-0" name="other_income_name_8"  value="{{$form_details->other_income_name_8}}">	</td>
				    		<td> $ <input type="text" class="border-0" name="other_income_value_8"  value="{{$form_details->other_income_value_8}}">		</td>
				    		<td>
				    			Donations
				    		</td>
				    		<td>
				    			$ <input type="text" class="border-0" name="s_annual_report_donations"  value="{{$form_details->s_annual_report_donations}}">
				    		</td>
				    	</tr>
				    	<tr>
				    		<td> <input type="text" class="border-0" name="other_income_name_9"  value="{{$form_details->other_income_name_9}}">	</td>
				    		<td> $ <input type="text" class="border-0" name="other_income_value_9"  value="{{$form_details->other_income_value_9}}">		</td>
				    		<td colspan="2">
				    			<b>Other Expenses</b>
				    		</td>
				    	</tr>
				    	<tr>
				    		<td> <input type="text" class="border-0" name="other_income_name_10"  value="{{$form_details->other_income_name_10}}">	</td>
				    		<td> $ <input type="text" class="border-0" name="other_income_value_10"  value="{{$form_details->other_income_value_10}}">		</td>
				    		<td>
				    			<input type="text" class="border-0" name="other_expenses_name_1"  value="{{$form_details->other_expenses_name_1}}">	
				    		</td>
				    		<td>
				    			$ <input type="text" class="border-0" name="other_expenses_value_1"  value="{{$form_details->other_expenses_value_1}}">
				    		</td>
				    	</tr>
				    	<tr>
				    		<td> <input type="text" class="border-0" name="other_income_name_11"  value="{{$form_details->other_income_name_11}}">	</td>
				    		<td> $ <input type="text" class="border-0" name="other_income_value_11"  value="{{$form_details->other_income_value_11}}">		</td>
				    		<td>
				    			<input type="text" class="border-0" name="other_expenses_name_2"  value="{{$form_details->other_expenses_name_2}}">	
				    		</td>
				    		<td>
				    			$ <input type="text" class="border-0" name="other_expenses_value_2"  value="{{$form_details->other_expenses_value_2}}">
				    		</td>
				    	</tr>
				    	<tr>
				    		<td> <input type="text" class="border-0" name="other_income_name_12"  value="{{$form_details->other_income_name_12}}">	</td>
				    		<td> $ <input type="text" class="border-0" name="other_income_value_12"  value="{{$form_details->other_income_value_12}}">		</td>
				    		<td>
				    			<input type="text" class="border-0" name="other_expenses_name_3"  value="{{$form_details->other_expenses_name_3}}">	
				    		</td>
				    		<td>
				    			$ <input type="text" class="border-0" name="other_expenses_value_3"  value="{{$form_details->other_expenses_value_3}}">
				    		</td>
				    	</tr>
				    	<tr>
				    		<td> <input type="text" class="border-0" name="other_income_name_13"  value="{{$form_details->other_income_name_13}}">	</td>
				    		<td> $ <input type="text" class="border-0" name="other_income_value_13"  value="{{$form_details->other_income_value_13}}">		</td>
				    		<td>
				    			<input type="text" class="border-0" name="other_expenses_name_4"  value="{{$form_details->other_expenses_name_4}}">	
				    		</td>
				    		<td>
				    			$ <input type="text" class="border-0" name="other_expenses_value_4"  value="{{$form_details->other_expenses_value_4}}">
				    		</td>
				    	</tr>
				    	<tr>
				    		<td> <input type="text" class="border-0" name="other_income_name_14"  value="{{$form_details->other_income_name_14}}">	</td>
				    		<td> $ <input type="text" class="border-0" name="other_income_value_14"  value="{{$form_details->other_income_value_14}}">		</td>
				    		<td>
				    			<input type="text" class="border-0" name="other_expenses_name_5"  value="{{$form_details->other_expenses_name_5}}">	
				    		</td>
				    		<td>
				    			$ <input type="text" class="border-0" name="other_expenses_value_5"  value="{{$form_details->other_expenses_value_5}}">
				    		</td>
				    	</tr>
				    	<tr>
				    		<td> <input type="text" class="border-0" name="other_income_name_15"  value="{{$form_details->other_income_name_15}}">	</td>
				    		<td> $ <input type="text" class="border-0" name="other_income_value_15"  value="{{$form_details->other_income_value_15}}">		</td>
				    		<td>
				    			<input type="text" class="border-0" name="other_expenses_name_6"  value="{{$form_details->other_expenses_name_6}}">	
				    		</td>
				    		<td>
				    			$ <input type="text" class="border-0" name="other_expenses_value_6"  value="{{$form_details->other_expenses_value_6}}">
				    		</td>
				    	</tr>
				    	<tr>
				    		<td> <input type="text" class="border-0" name="other_income_name_16"  value="{{$form_details->other_income_name_16}}">	</td>
				    		<td> $ <input type="text" class="border-0" name="other_income_value_16"  value="{{$form_details->other_income_value_16}}">		</td>
				    		<td>
				    			<input type="text" class="border-0" name="other_expenses_name_7"  value="{{$form_details->other_expenses_name_7}}">	
				    		</td>
				    		<td>
				    			$ <input type="text" class="border-0" name="other_expenses_value_7"  value="{{$form_details->other_expenses_value_7}}">
				    		</td>
				    	</tr>
				    	<tr>
				    		<td> <input type="text" class="border-0" name="other_income_name_17"  value="{{$form_details->other_income_name_17}}">	</td>
				    		<td> $ <input type="text" class="border-0" name="other_income_value_17"  value="{{$form_details->other_income_value_17}}">		</td>
				    		<td>
				    			<input type="text" class="border-0" name="other_expenses_name_8"  value="{{$form_details->other_expenses_name_8}}">	
				    		</td>
				    		<td>
				    			$ <input type="text" class="border-0" name="other_expenses_value_8"  value="{{$form_details->other_expenses_value_8}}">
				    		</td>
				    	</tr>
				    	<tr>
				    		<td> <input type="text" class="border-0" name="other_income_name_18"  value="{{$form_details->other_income_name_18}}">	</td>
				    		<td> $ <input type="text" class="border-0" name="other_income_value_18"  value="{{$form_details->other_income_value_18}}">		</td>
				    		<td>
				    			<input type="text" class="border-0" name="other_expenses_name_9"  value="{{$form_details->other_expenses_name_9}}">	
				    		</td>
				    		<td>
				    			$ <input type="text" class="border-0" name="other_expenses_value_9"  value="{{$form_details->other_expenses_value_9}}">
				    		</td>
				    	</tr>
				    	<tr>
				    		<td> <input type="text" class="border-0" name="other_income_name_19"  value="{{$form_details->other_income_name_19}}">	</td>
				    		<td> $ <input type="text" class="border-0" name="other_income_value_19"  value="{{$form_details->other_income_value_19}}">		</td>
				    		<td>
				    			<input type="text" class="border-0" name="other_expenses_name_10"  value="{{$form_details->other_expenses_name_10}}">	
				    		</td>
				    		<td>
				    			$ <input type="text" class="border-0" name="other_expenses_value_10"  value="{{$form_details->other_expenses_value_10}}">
				    		</td>
				    	</tr>
				    	<tr>
				    		<td> <input type="text" class="border-0" name="other_income_name_20"  value="{{$form_details->other_income_name_20}}">	</td>
				    		<td> $ <input type="text" class="border-0" name="other_income_value_20"  value="{{$form_details->other_income_value_20}}">		</td>
				    		<td>
				    			<input type="text" class="border-0" name="other_expenses_name_11"  value="{{$form_details->other_expenses_name_11}}">	
				    		</td>
				    		<td>
				    			$ <input type="text" class="border-0" name="other_expenses_value_11"  value="{{$form_details->other_expenses_value_11}}">
				    		</td>
				    	</tr>
				    	<tr>
				    		<td> <input type="text" class="border-0" name="other_income_name_21"  value="{{$form_details->other_income_name_21}}">	</td>
				    		<td> $ <input type="text" class="border-0" name="other_income_value_21"  value="{{$form_details->other_income_value_21}}">		</td>
				    		<td>
				    			<input type="text" class="border-0" name="other_expenses_name_12"  value="{{$form_details->other_expenses_name_12}}">	
				    		</td>
				    		<td>
				    			$ <input type="text" class="border-0" name="other_expenses_value_12"  value="{{$form_details->other_expenses_value_12}}">
				    		</td>
				    	</tr>
				    	<tr>
				    		<td> <input type="text" class="border-0" name="other_income_name_22"  value="{{$form_details->other_income_name_22}}">	</td>
				    		<td> $ <input type="text" class="border-0" name="other_income_value_22"  value="{{$form_details->other_income_value_22}}">		</td>
				    		<td class="bg-2">
				    			<b>Sub Total </b>
								<!-- <input type="text" class="border-0">	 -->
				    		</td>
				    		<td class="bg-2">
				    			$ <input type="text" class="border-0" name="other_expenses_sub_total"  value="{{$form_details->other_expenses_sub_total}}">
				    		</td>
				    	</tr>
				    	<tr class="bg-2">
				    		<td> <b>Sub Total</b> 
							<!-- <input type="text" class="border-0" >	</td> -->
				    		<td> $ <input type="text" class="border-0" name="other_income_sub_total"  value="{{$form_details->other_income_sub_total}}">		</td>
				    		<td>
				    			<b>Surplus/Deficit </b>
								<!-- <input type="text" class="border-0">	 -->
				    		</td>
				    		<td>
				    			($ <input type="text" name="other_expenses_surplus"  value="{{$form_details->other_expenses_surplus}}">)
				    		</td>
				    	</tr>
				    	<tr class="bg-2">
				    		<td> <b>Total</b> 
							<!-- <input type="text" class="border-0">	</td> -->
				    		<td> $ <input type="text" class="border-0" name="other_income_total"  value="{{$form_details->other_income_total}}">		</td>
				    		<td>
				    			<b>Total </b>	
				    		</td>
				    		<td>
				    			<input type="text" class="border-0" name="other_expenses_total"  value="{{$form_details->other_expenses_total}}">	
				    		</td>
				    	</tr>
				    	
				    </tbody>
				</table>
			</div>
			<div class="table-responsive-md mt-2">
				<table class="table-bordered table-sm" width="100%">
				    <tbody class="table-head">
				    	<tr>
				    		<td><b>IMPORTANT NOTE:</b> The Income & Expenditure Totals must match.</td>
				    	</tr>
				    </tbody>
				</table>
			</div>
			<div class="table-responsive-md mt-2">
				<table class="table-bordered table-sm" width="100%">
				    <thead class="table-head">
				      <tr>
				      	<th colspan="4">
					      	<div class="row">
					      		<div class="col-sm-12">
					      			DECLARATION
					      		</div>
					      	</div>
				      	</th>
				      </tr>
				    </thead>
				    <tbody>
						<tr>
					        <td>Signature
					        	<input type="text"    name="s_annual_report_signature"  value="{{$form_details->s_annual_report_signature}}">
					        </td>
					        <td>
								Date: <input type="date"   class="border-0"  name="s_annual_report_date" value="{{$form_details->s_annual_report_date}}"> 
							</td>
					    </tr>
					    <tr>
					    	<td colspan="2"> Position held as above: <input type="text"  class="border-0"  name="s_annual_report_position_held"  value="{{$form_details->s_annual_report_position_held}}"></td>
					    </tr>
				    </tbody>
				</table>
			</div>
		</div>

		<div class="container mt-4">
			<div class="heading-top">
			<img src="{{asset('img/logo.jpg')}}" class="float-start"><h4>DOGS NSW AFFILIATE ANNUAL REPORT</h4>
			</div>
			<div class="table-responsive-md mt-2">
				<table class="table-bordered table-sm" width="100%">
				    <thead class="table-head">
				      <tr>
				      	<th colspan="4">
					      			3. ANNUAL REPORT BALANCE SHEET
					      
				      	</th>
				      </tr>
				    </thead>
				    <tbody>
						<tr>
					        <td width="20%">Affiliate Name:</td>
					        <td>
								<input type="text"   class="border-0" name="t_annual_report_affiliate_name"  value="{{$form_details->t_annual_report_affiliate_name}}">
							</td>
					    </tr>
					    <tr>
					        <td>Membership No:</td>
					        <td>
								<input type="text"   class="border-0" name="t_annual_report_affiliate_member_ship"  value="{{$form_details->t_annual_report_affiliate_member_ship}}">
							</td>
					    </tr>
					    <tr>
					        <td class="font-italic">Balance Sheet as at: </td>
					        <td class="text-end font-italic">
								<!-- <input type="date"   class="border-0"> --> (Date)
							</td>
					    </tr>
				    </tbody>
				</table>
			</div>
			<div class="table-responsive-md mt-2">
				<table class="table-bordered table-sm" width="100%">
				    <thead class="table-head">
				      <tr>
				      	<th colspan="2">Year	<input type="date" name="t_annual_report_start_year" value="{{$form_details->t_annual_report_start_year}}"></th>
				      	<th class="text-end" colspan="2" >Year	<input type="date" name="t_annual_report_end_year" value="{{$form_details->t_annual_report_end_year}}"> </th>
				      </tr>
				       <tr>
				      	
				      	<th class="text-center" colspan="4">Assets: </th>
				      </tr>
				    </thead>
				    <tbody>
						<tr>
				    		<td width="25%" style="height: 0px;padding: 0 !important; border-color: #fff !important;"></td>
				    		<td width="25%" style="height: 0px;padding: 0 !important;  border-color: #fff !important;" ></td>
				    		<td width="25%" style="height: 0px;padding: 0 !important;  border-color: #fff !important;"></td>
				    		<td width="25%" style="height: 0px;padding: 0 !important;  border-color: #fff !important;"></td>
				    	</tr>
				    	<tr>
				    		<td>$ <input type="text" class="border-0" name="t_annual_report_cash_at_bank_start"  value="{{$form_details->t_annual_report_cash_at_bank_start}}"></td>
				    		<td colspan="2" class="text-center">Cash at Bank</td>
				    		<td>$ <input type="text" class="border-0" name="t_annual_report_cash_at_bank_end"  value="{{$form_details->t_annual_report_cash_at_bank_end}}"></td>
				    	</tr>
				    	<tr>
				    		<td>$ <input type="text" class="border-0" name="t_annual_report_investment_start"  value="{{$form_details->t_annual_report_investment_start}}"></td>
				    		<td colspan="2" class="text-center">Investment</td>
				    		<td>$ <input type="text" class="border-0" name="t_annual_report_investment_end"  value="{{$form_details->t_annual_report_investment_end}}"></td>
				    	</tr>
				    	<tr>
				    		<td>$ <input type="text" class="border-0" name="t_annual_report_fixed_deposits_start"  value="{{$form_details->t_annual_report_fixed_deposits_start}}"></td>
				    		<td colspan="2" class="text-center">Fixed Deposits</td>
				    		<td>$ <input type="text" class="border-0" name="t_annual_report_fixed_deposits_end"  value="{{$form_details->t_annual_report_fixed_deposits_end}}"></td>
				    	</tr>
				    	<tr>
				    		<td>$ <input type="text" class="border-0" name="t_annual_report_debtors_start"  value="{{$form_details->t_annual_report_debtors_start}}"></td>
				    		<td colspan="2" class="text-center">Debtors </td>
				    		<td>$ <input type="text" class="border-0" name="t_annual_report_debtors_end"  value="{{$form_details->t_annual_report_debtors_end}}"></td>
				    	</tr>
				    	<tr>
				    		<td>$ <input type="text" class="border-0" name="t_annual_report_prepayments_start"  value="{{$form_details->t_annual_report_prepayments_start}}"></td>
				    		<td colspan="2" class="text-center">Prepayments</td>
				    		<td>$ <input type="text" class="border-0" name="t_annual_report_prepayments_end"  value="{{$form_details->t_annual_report_prepayments_end}}"></td>
				    	</tr>
				    	<tr>
				    		<td>$ <input type="text" class="border-0" name="t_annual_report_assets_subtotal_start"  value="{{$form_details->t_annual_report_assets_subtotal_start}}"></td>
				    		<td colspan="2" class="text-center"><b>Sub Total </b></td>
				    		<td>$ <input type="text" class="border-0" name="t_annual_report_assets_subtotal_end"  value="{{$form_details->t_annual_report_assets_subtotal_end}}"></td>
				    	</tr>
					    <tr class="bg-1">
					      	
					      	<td class="text-center" colspan="4"><b>Non-Current Assets:</b> </td>
					    </tr>
					    <tr>
				    		<td>$ <input type="text" class="border-0" name="t_annual_report_land_building_start"  value="{{$form_details->t_annual_report_land_building_start}}"></td>
				    		<td colspan="2" class="text-center">Land & Building </td>
				    		<td>$ <input type="text" class="border-0" name="t_annual_report_land_building_end"  value="{{$form_details->t_annual_report_land_building_end}}"></td>
				    	</tr>
				    	<tr>
				    		<td>$ <input type="text" class="border-0" name="t_annual_report_vehicles_start"  value="{{$form_details->t_annual_report_vehicles_start}}"></td>
				    		<td colspan="2" class="text-center">Vehicles </td>
				    		<td>$ <input type="text" class="border-0" name="t_annual_report_vehicles_end"  value="{{$form_details->t_annual_report_vehicles_end}}"></td>
				    	</tr>
				    	<tr>
				    		<td>$ <input type="text" class="border-0" name="t_annual_report_equipment_start"  value="{{$form_details->t_annual_report_equipment_start}}"></td>
				    		<td colspan="2" class="text-center">Equipment</td>
				    		<td>$ <input type="text" class="border-0" name="t_annual_report_equipment_end"  value="{{$form_details->t_annual_report_equipment_end}}"></td>
				    	</tr>
				    	<tr>
				    		<td>$ <input type="text" class="border-0" name="t_annual_report_subtotal_start"  value="{{$form_details->t_annual_report_subtotal_start}}"></td>
				    		<td colspan="2" class="text-center"><b>Sub Total </b></td>
				    		<td>$ <input type="text" class="border-0" name="t_annual_report_subtotal_end"  value="{{$form_details->t_annual_report_subtotal_end}}"></td>
				    	</tr>



				    	<tr>
				    		<td class="bg-2"><b>$</b> <input type="text" class="border-0" name="t_annual_report_total_assets_start"  value="{{$form_details->t_annual_report_total_assets_start}}"></td>
					      	<td class="text-center bg-1" colspan="2"><b>TOTAL ASSETS</b> </td>
					      	<td class="bg-2"><b>$</b> <input type="text" class="border-0" name="t_annual_report_total_assets_end"  value="{{$form_details->t_annual_report_total_assets_end}}"></td>
					    </tr>
					    <tr class="bg-1">
				    		
					      	<td class="text-center" colspan="4"><b>Current Liabilities:</b> </td>
					      	
					    </tr>
					    <tr>
				    		<td>$ <input type="text" class="border-0" name="t_annual_report_accrued_liabilities_start"  value="{{$form_details->t_annual_report_accrued_liabilities_start}}"></td>
				    		<td colspan="2" class="text-center">Accrued Liabilities</td>
				    		<td>$ <input type="text" class="border-0" name="t_annual_report_accured_liabilities_end"  value="{{$form_details->t_annual_report_accured_liabilities_end}}"></td>
				    	</tr>

				    	<tr>
				    		<td class="bg-2"><b>$</b> <input type="text" class="border-0" name="t_annual_report_net_assets1_start"  value="{{$form_details->t_annual_report_net_assets1_start}}"></td>
					      	<td class="text-center bg-1" colspan="2"><b>NET ASSETS THIS YEAR</b> </td>
					      	<td class="bg-2"><b>$</b><input type="text" class="border-0" name="t_annual_report_net_assets1_end"  value="{{$form_details->t_annual_report_net_assets1_end}}"> </td>
					    </tr>
					    <tr class="bg-1">
					      	<td class="text-center" colspan="4"><b> Funds:</b> </td>
					    </tr>
				    	<tr>
				    		<td>$ <input type="text" class="border-0" name="t_annual_report_blnc_30_june_start"  value="{{$form_details->t_annual_report_blnc_30_june_start}}"></td>
				    		<td colspan="2" class="text-center">Balance as at 30th June</td>
				    		<td>$ <input type="text" class="border-0" name="t_annual_report_blnc_30_june_end"  value="{{$form_details->t_annual_report_blnc_30_june_end}}"></td>
				    	</tr>
				    	<tr>
				    		<td>$ <input type="text" class="border-0" name="t_annual_report_surplus_deficit_start"  value="{{$form_details->t_annual_report_surplus_deficit_start }}"></td>
				    		<td colspan="2" class="text-center">Add Surplus & Deficit</td>
				    		<td>$ <input type="text" class="border-0" name="t_annual_report_surplus_deficit_end"  value="{{$form_details->t_annual_report_surplus_deficit_end}}"></td>
				    	</tr>
				    	<tr>
				    		<td>$ <input type="text" class="border-0" name="t_annual_report_other_adj_start"  value="{{$form_details->t_annual_report_other_adj_start}}"></td>
				    		<td colspan="2" class="text-center">Other Adjustments </td>
				    		<td>$ <input type="text" class="border-0" name="t_annual_report_other_adj_end"  value="{{$form_details->t_annual_report_other_adj_end}}"></td>
				    	</tr>
				    	<tr>
				    		<td class="bg-2"><b>$</b> <input type="text" class="border-0" name="t_annual_report_net_assets2_start"  value="{{$form_details->t_annual_report_net_assets2_start}}"></td>
					      	<td class="text-center bg-1" colspan="2"><b>NET ASSETS THIS YEAR</b> </td>
					      	<td class="bg-2"><b>$</b> <input type="text" class="border-0" name="t_annual_report_net_assets2_end"  value="{{$form_details->t_annual_report_net_assets2_end}}"></td>
					    </tr>
				    </tbody>
				</table>
			</div>
			<div class="table-responsive-md mt-2">
				<table class="table-bordered table-sm" width="100%">
				    <thead class="table-head">
				      <tr>
				      	<th colspan="4">
					      	AUDITOR’S DECLARATION
					      
				      	</th>
				      </tr>
				    </thead>
				    <tbody>
						<tr>
					        <td>I,</td>
					        <td class="font-italic">
								<input type="text"  name="auditor1"  value="{{$form_details->auditor1}}"> (Auditor)
							</td>
							<td class="font-italic">
								being a member of
							</td>
							<td class="font-italic">
								<input type="text"  name="prof_body"  value="{{$form_details->prof_body}}"> (Professional Body)
							</td>
					    </tr>
					    <tr>
					        <td>of</td>
					        <td class="font-italic">
								<input type="text"  name="auditor2"  value="{{$form_details->auditor2}}"> (Auditor)
							</td>
							
							<td class="font-italic text-end" colspan="4">
								<input type="text"   name="auditor_address"  value="{{$form_details->auditor_address}}"> (Auditor Address)
							</td>
					    </tr>
					    <tr>
					        <td>have been engaged by</td>
					        <td class="font-italic text-end" colspan="4">
								<input type="text"  name="engaged_by"  value="{{$form_details->engaged_by}}"> (Affiliate Name)
							</td>
					    </tr>
					    <tr>
					        <td>for the Financial Year end</td>
					        <td class="font-italic text-end" colspan="4">
								<input type="date"  name="financial_year_end"  value="{{$form_details->financial_year_end}}"> (Date)
							</td>
					    </tr>
					    <tr>
					    	<td colspan="5">
					    		Except for my involvement in undertaking the audit, I am not otherwise concerned with the management of, nor am I an employee, Office Bearer
					    	</td>
					    </tr>
					    <tr>
					        <td>or otherwise associated with</td>
					        <td class="font-italic text-end" colspan="4">
								<input type="text"  name="associated_with"  value="{{$form_details->associated_with}}"> (Affiliate Name)
							</td>
					    </tr>
					    <tr>
					        <td>In my opinion, the Financial Statements of</td>
					        <td class="font-italic text-end" colspan="4">
								<input type="text"  name="financial_statements_of"  value="{{$form_details->financial_statements_of}}"> (Affiliate Name)
							</td>
					    </tr>
					    <tr>
					    	<td class="font-italic" colspan="5">
					    		and the Income and Expenditure Statement for the year ended. We certify that the attached Financial Statement and above Balance Sheet is an

					    	</td>
					    </tr>
					     <tr>
					        <td class="font-italic">exact copy of that submitted at our Annual General Meeting held on</td>
					        <td class="font-italic text-end" colspan="4">
								<input type="date" name="annual_general_meeting_held_on" value="{{$form_details->annual_general_meeting_held_on}}"> (Date)
							</td>
					    </tr>
					    <tr>
						    <td>
						    	Auditor Name
						    </td>
						    <td colspan="4">
						    	<input type="text" class="border-0" name="auditor_name"  value="{{$form_details->auditor_name}}">
						    </td>
					    </tr>

					     <tr>
						    <td colspan="3">
						    	Signature: <input type="text" name="auditor_sign"  value="{{$form_details->auditor_sign}}">
						    </td>
						    <td colspan="2">
						    	Date: <input type="date" class="border-0" name="audior_date" value="{{$form_details->audior_date}}">
						    </td>
					    </tr>
				    </tbody>
				</table>
			</div>
			<div class="table-responsive-md mt-2">
				<table class="table-bordered table-sm" width="100%">
				    <thead class="table-head">
				      <tr>
				      	<th colspan="4">
					      	<div class="row">
					      		<div class="col-sm-12">
					      			DECLARATION
					      		</div>
					      	</div>
				      	</th>
				      </tr>
				    </thead>
				    <tbody>
						<tr>
					        <td>Signature
					        	<input type="text"  name="t_annual_report_signature"  value="{{$form_details->t_annual_report_signature}}">
					        </td>
					        <td>
								Date: <input type="date"   class="border-0" name="t_annual_report_date" value="{{$form_details->t_annual_report_date}}">
							</td>
					    </tr>
					    <tr>
					    	<td colspan="2"> Position held as above: <input type="text"  class="border-0" name="t_annual_report_postiton_held"  value="{{$form_details->t_annual_report_postiton_held}}"></td>
					    </tr>
				    </tbody>
				</table>
			</div>
			<p class="mt-3 text-center">
				This completed application should be forwarded to: DOGS NSW, PO Box 632, St Marys NSW 1790 or <a href="mailto:info@dogsnsw.org.au" target="_blank">info@dogsnsw.org.au</a><br>
				Royal New South Wales Canine Council Ltd ABN 69 062 986 118 trading as DOGS NSW<br>
				Phone 02 9834 3022 or email <a href="mailto:info@dogsnsw.org.au" target="_blank">info@dogsnsw.org.au</a>
			</p>
		</div>
		
		<div class="container mt-5 ">
			
				
				<button class="btn btn-theme" type="submit">Update</button>
			
		</div>
        </form>
	</div>
	@endsection 
	