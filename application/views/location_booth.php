    <!-- begin::Header -->
    <?php
        include('include/header.php');
    ?>
    <!-- end::Header -->

	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-mobile-fixed">
		<!--begin::Main--> 
			<!--begin::Page-->
			<div class="d-flex flex-column-fluid"> 
				<!--begin::Wrapper-->
				<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
					<!--begin::Header-->
					<div id="kt_header" class="header header-fixed">
						<!--begin::Container-->
						<div class="container-fluid d-flex align-items-stretch justify-content-between py-2" style="background-color: #27316A;">
							<!--begin::Header Menu Wrapper-->
							<div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
								<!--begin::Header Menu-->
								<div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
									<img alt="Logo" src="assets/media/logos/Logo_ICAN_Education.png" />
								</div>
								<!--end::Header Menu-->
							</div>
							<!--end::Header Menu Wrapper--> 
						</div>
						<!--end::Container-->
					</div>
					<!--end::Header-->
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content"> 
						<!--begin::Entry-->
						<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
								<!--begin::Dashboard-->
								<!--begin::Row-->
								<div class="row"> 
									<div class="col-12">
										<!--begin::Advance Table Widget 2-->
										<div class="card card-custom card-stretch gutter-b">
											<!--begin::Header-->
											<ul class="nav nav-tabs mt-5 mx-5">
												<li class="nav-item">
													<a class="nav-link" aria-current="page" href="get_ticket.php">Get Tickets</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" href="list_ticket.php">List Tickets</a>
												</li> 
												<li class="nav-item">
													<a class="nav-link active" href="location_booth.php">Location</a>
												</li> 
											</ul>
											<div class="card-header border-0 pt-5">
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label font-weight-bolder text-dark">Check Your Booth Location!</span>
													<span class="text-muted mt-3 font-weight-bold font-size-sm">Consult Your Education Now</span>
												</h3> 
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-2 pb-0 mt-n3">
												<div class="tab-content mt-5" id="myTabTables11"> 
													<!--begin::Tap pane-->
													<div class="tab-pane fade show active" id="kt_tab_pane_11_3" role="tabpanel" aria-labelledby="kt_tab_pane_11_3">
														<!--begin::Table-->
														<div class="row">
															<div class="col-md-6 col-sm-12 col-xs-12">
                                                                <select class="custom-select mt-3 mb-3">
                                                                    <option selected>Select a Booth</option>
                                                                    <option value="1">01. Harvard University</option>
                                                                    <option value="2">02. Massachusetts Institute of Technology</option>
                                                                    <option value="3">03. Stanford University</option>
                                                                    <option value="4">04. University of Cabridge</option>
                                                                    <option value="5">05. University of Oxford</option>
                                                                    <option value="6">06. Callifornia Institute of Technology</option>
                                                                    <option value="7">07. Imperial College</option>
                                                                    <option value="8">08. National University of Singapore</option>
                                                                    <option value="9">09. Columbia University</option>
                                                                    <option value="10">10. Michigan University</option> 
                                                                </select>
                                                                <button type="button" class="btn btn-primary btn-sm mb-10" data-toggle="modal" data-target="#mappingExpo">Lihat Design Visual</button>
															</div>
															<div class="col-md-6 col-sm-12 col-xs-12">
																<div class="table-responsive">
																	<table class="table table-borderless table-vertical-center"> 
																		<tr>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="table-success text-center font-weight-bold"><span class="coba m-0">01</span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class="">02</span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class="">03</span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class="">04</span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class="">05</span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-center"><span class=""></span></td> 
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class="">06</span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class="">07</span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class="">08</span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class="">09</span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class="">10</span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-center"><span class=""></span></td> 
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class="">11</span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class="">12</span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class="">13</span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class="">14</span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-center"><span class=""></span></td> 
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class="">15</span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class="">16</span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class="">17</span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class="">18</span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-center"><span class=""></span></td> 
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class="">19</span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class="">20</span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-center"><span class=""></span></td> 
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-center"><span class=""></span></td> 
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-center"><span class=""></span></td> 
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-center"><span class=""></span></td> 
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-center"><span class=""></span></td> 
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-center"><span class=""></span></td> 
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                            <td class="text-center"><span class=""></span></td>
                                                                        </tr>
																	</table>
																</div>
															</div> 
														</div>
														<!--end::Table-->
                                                        <?php
															include('modal/show_mapping.php');
														?>
													</div>
													<!--end::Tap pane-->
												</div>
											</div>
											<!--end::Body-->
										</div>
										<!--end::Advance Table Widget 2-->
									</div>  
								</div>
								<!--end::Row--> 
								<!--end::Dashboard-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->
					</div>
					<!--end::Content-->
    <!-- begin::Footer -->
    <?php
        include('include/footer.php');
    ?>
    <!-- end::Footer -->