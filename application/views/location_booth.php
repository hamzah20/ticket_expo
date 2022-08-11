<!DOCTYPE html> 
<html lang="en">
    <?php include('include/header.php'); ?> 
	<body id="kt_body" class="header-fixed header-mobile-fixed"> 
        <div class="d-flex flex-column-fluid">  
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper"> 
            <div id="kt_header" class="header header-fixed"> 
					<div class="container-fluid d-flex align-items-stretch justify-content-between py-2" style="background-color: #27316A;">
						<div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
							<div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
								<img alt="Logo" src="assets/media/logos/Logo_ICAN_Education.png" />
							</div> 
						</div> 
					</div> 
				</div> 
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">  
                    <div class="d-flex flex-column-fluid"> 
                        <div class="container"> 
                            <div class="row"> 
                                <div class="col-12"> 
                                    <div class="card card-custom card-stretch gutter-b"> 
                                        <ul class="nav nav-tabs mt-5 mx-5">
                                            <li class="nav-item">
                                                <a class="nav-link" href="<?php echo base_url('get_ticket');?>">Get Tickets</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="<?php echo base_url('list_ticket');?>">List Tickets</a>
                                            </li> 
                                            <li class="nav-item">
                                                <a class="nav-link active" href="<?php echo base_url('location_booth');?>">Location</a>
                                            </li>
                                        </ul>
                                        <div class="card-header border-0 pt-5">
                                            <h3 class="card-title align-items-start flex-column">
                                                <span class="card-label font-weight-bolder text-dark">Check Your Booth Location!</span>
                                                <span class="text-muted mt-3 font-weight-bold font-size-sm">Consult Your Education Now</span>
                                            </h3> 
                                        </div> 
                                        <div class="card-body pt-2 pb-0 mt-n3">
                                            <div class="tab-content mt-5" id="myTabTables11">  
                                                <div class="tab-pane fade show active" id="kt_tab_pane_11_3" role="tabpanel" aria-labelledby="kt_tab_pane_11_3"> 
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-12 col-xs-12"> 
                                                            <select class="custom-select mt-3 mb-3" name="location_booth" id="location_booth">
                                                                <option value="pintu_masuk" selected>Select a Booth</option>
                                                                <?php foreach ($booth->result() as $row) { ?>
                                                                    <option class="<?= $row->ID_BOOTH;?>" value="<?= $row->ID_BOOTH;?>"> <?= $row->NAME_BOOTH;?> </option>
                                                                <?php } ?>  
                                                            </select>
                                                            <button type="button" class="btn btn-primary btn-sm mb-10" data-toggle="modal" data-target="#mappingExpo">Lihat Map</button>
                                                        </div>
                                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                                            <div class="table-responsive">
                                                                <table class="table table-borderless table-vertical-center" rules="none" border="1px solid" >
                                                                        <!--Baris 1  -->
                                                                    <tr>
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td class="text-center"><span class="BOOTH22018 m-0">01</span></td>
                                                                        <td class="text-center"><span class="BOOTH22017 m-0">02</span></td>
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td colspan="2" class="text-center"><span class="BOOTH22048 m-0">03</span></td>  
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td class="text-center"><span class=""></span></td> 
                                                                    </tr>
                                                                    <!-- Baris 2 -->
                                                                    <tr>
                                                                        <td class="text-center"><span class="BOOTH22029 m-0">04</span></td> 
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td class="text-center"><span class="BOOTH22032 m-0">05</span></td>
                                                                    </tr>
                                                                    <!-- Baris 3 -->  
                                                                    <tr>
                                                                        <td class="text-center"><span class="BOOTH22026 m-0">06</span></td> 
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td class="text-center"><span class="BOOTH22034 m-0">07</span></td>
                                                                    </tr>
                                                                    <!-- Baris 4 -->
                                                                    <tr>
                                                                        <td class="text-center"><span class="BOOTH22024 m-0">08</span></td> 
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td class="text-center"><span class="BOOTH22035 m-0">09</span></td>
                                                                    </tr>
                                                                    <!-- Baris 5 -->
                                                                    <tr>
                                                                        <td class="text-center"><span class="BOOTH22022 m-0">10</span></td> 
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td class="text-center"><span class="BOOTH22038 m-0">11</span></td>
                                                                    </tr>
                                                                    <!-- Baris 6 -->
                                                                    <tr>
                                                                        <td class="text-center"><span class="BOOTH22021 m-0">12</span></td> 
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td class="text-center"><span class="BOOTH222 m-0">13</span></td>
                                                                    </tr>
                                                                    <!-- Baris 7 -->
                                                                    <tr>
                                                                        <td class="text-center"><span class="BOOTH22051 m-0">14</span></td> 
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td class="text-center"><span class="BOOTH22043 m-0">15</span></td>
                                                                    </tr>
                                                                    <!-- Baris 8 -->
                                                                    <tr>
                                                                        <td class="text-center"><span class="BOOTH22053 m-0">16</span></td> 
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td class="text-center"><span class="BOOTH22057 m-0">17</span></td>
                                                                    </tr>
                                                                    <!-- Baris 9 -->
                                                                    <tr>
                                                                        <td class="text-center"><span class="BOOTH22054 m-0">18</span></td> 
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td class="text-center"><span class="BOOTH22058 m-0">19</span></td>
                                                                    </tr>
                                                                    <!-- Baris 10 -->
                                                                    <tr>
                                                                        <td class="text-center"><span class="BOOTH22056 m-0">20</span></td> 
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td class="text-center"><span class="BOOTH22055 m-0">21</span></td>
                                                                    </tr>
                                                                     <!-- Baris 11 -->
                                                                     <tr>
                                                                        <td class="text-center"><span class="BOOTH22005 m-0">22</span></td> 
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td class="text-center"><span class="BOOTH22014 m-0">23</span></td>
                                                                    </tr>
                                                                    <!-- Baris 12 -->
                                                                    <tr>  
                                                                        <td colspan="2" class="text-center bg-success" style="border:1px solid"><span class="font-weight-bold">PINTU MASUK</span></td>
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td class="text-center"><span class=""></span></td>
                                                                        <td class="text-center"><span class=""></span></td>  
                                                                        <td colspan="2" class="text-center bg-danger" style="border:1px solid"><span class="font-weight-bold">PINTU KELUAR</span></td> 
                                                                        <td class="text-center"><span class=""></span></td> 
                                                                    </tr> 
                                                                </table>
                                                            </div>
                                                        </div> 
                                                    </div> 
                                                    <?php include('modal/show_mapping.php'); ?>
                                                </div> 
                                            </div>
                                        </div> 
                                    </div> 
                                </div>  
                            </div> 
                        </div> 
                    </div> 
                </div> 
                <?php include('include/footer.php'); ?> 
            </div> 
        </div>
    <?php include('include/javascript.php'); ?>
    </body>
</html> 