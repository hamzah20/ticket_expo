<!DOCTYPE html> 
<html lang="en"> 
	<?php $this->load->view('include/header'); ?>  
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
										<div class="card-header border-0 pt-5">
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label font-weight-bolder text-dark">Print Your Tickets!</span>
												<span class="text-muted mt-3 font-weight-bold font-size-sm">Consult Your Education Now</span>
											</h3> 
										</div> 
										<div class="card-body pt-2 pb-0 mt-n3">
											<div class="tab-content mt-5" id="myTabTables11">  
												<div class="tab-pane fade show active" id="kt_tab_pane_11_3" role="tabpanel" aria-labelledby="kt_tab_pane_11_3">
													<div class="row">
													<?php 
														foreach ($data_booth->result() as $booth) { 
													?>
														<div class="col-md-6 col-sm-12 col-xs-12">
															<div class="table-responsive">
																<table class="table table-borderless table-vertical-center">
																	<thead>
																		<tr>
																			<th class="p-0 w-40px min-w-40 max-w-40"></th>
																			<th class="p-0 w-200px min-w-200 max-w-200"></th> 
																			<th class="p-0 w-100px min-w-100 max-w-100"></th>
																		</tr>
																	</thead>
																	<tbody>
																		<tr>
																			<td class="pl-0">
																				<div class="symbol symbol-50 symbol-light">
																					<span class="symbol-label">
																						<?php if(empty($booth->IMAGE) OR $booth->IMAGE==null){ ?>
																							<img src="assets/media/logo-campus/no-image.png" class="max-h-100 align-self-center" alt="logo-campus" />
																						<?php } elseif($booth->IMAGE){ ?>
																							<img src="assets/media/logo-campus/<?= $booth->IMAGE;?>" class="max-h-100 align-self-center" alt="logo-campus" />
																						<?php } else{ ?>
																							<img src="assets/media/logo-campus/no-image.png" class="max-h-100 align-self-center" alt="logo-campus" />
																						<?php } ?> 
																					</span>
																				</div>
																			</td>
																			<td class="pl-0">
																				<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg"><?= $booth->NAME_BOOTH;?></a>
																				<div>
																					<span class="font-weight-bolder">Country : <?= $booth->ID_COUNTRY;?></span> 
																				</div> 
																				<div>
																					<span class="font-weight-bolder">Ticket Number : <?= $booth->CURRENTLY_NUMBER-1; ?></span> 
																				</div>
																			</td>   
																			<td class="text-right"> 
                                                                                <a class="btn btn-primary confirmation btnClick btnClass btn_booth" href="#" value="" data-id_booth="<?= $booth->ID_BOOTH; ?>"> Print Ticket </a>  
																			</td>
																		</tr> 
																	</tbody>
																</table>
															</div>
														</div> 
													<?php   
														}
													?>
													</div>  
												</div> 
											</div>
										</div> 
									</div> 
								</div>  
							</div> 
						</div> 
					</div>  
				</div>  
				<?php $this->load->view('include/footer.php'); ?> 
			</div> 
		</div> 
    <?php $this->load->view('include/javascript.php'); ?> 

	<script>
		$(document).ready(function() {
			var nama_event;
			var lokasi_event;
			var nama_kampus;
			var nomor_tiket;
			$(".btn_booth").click(function(){

				var id_booth = $(this).data('id_booth');

				$.ajax({
					url : BASE_URL + 'C_Print/dataTicketPrint',
					method : 'get',
					data : {
						'id_booth' : id_booth
					},
					success : function(response){
						data = JSON.parse(response);
						console.log(data);

						nama_event 		= data.nama_event;
						lokasi_event 	= data.lokasi_event;
						nama_kampus 	= data.nama_kampus;
						nomor_tiket		= data.nomor_tiket;
					},
					complete: function(resp) {

						const WinPrint = window.open(
							"",
							"",
							"left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=0"
						);

						WinPrint.document.write(`<!DOCTYPE html>
							<html lang="en">
								<head>
									<title>ICAN Education Consultant</title>
									<meta charset="utf-8">
									<link rel='stylesheet' type='text/css' href='assets/css/style1_landscape.css' />
									<link rel='stylesheet' type='text/css' href='assets/css/print.css' media="print" />
								</head>
								<body> 
									<div class="main" style="width: 290px;">
										<section id="content"  width:290px;">
											<div>
												<div>   
													<div style="margin-bottom:50px; margin-top:50px;padding:0px; padding-bottom: 50px;"> 
														<center>
															<div style="text-align:center; font-size:15px; font-weight:bolder; color:#000000; margin: 0px">
																`+nama_kampus+`
																<p style="clear:both;">------------------------------------</p>
															</div>
														</center>
														<center>
															<div style="text-align:center; margin-bottom:50px; font-size:30px; font-weight:bolder; color:#000000;"> 
																`+nomor_tiket+`
															</div>
															<p style="clear:both;">ICAN EDUCATION EXPO</p>
														</center>
													</div>
												</div>
											</div>
										</section>
									</div> 
								</body>
						</html>`);

						WinPrint.document.close();
						WinPrint.focus(); 

						setTimeout(() => {
							WinPrint.print()
							WinPrint.close()
						}, 500);

					}
				}); 
			});
		});
	</script> 

	</body> 
</html>