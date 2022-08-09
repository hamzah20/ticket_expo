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
												<a class="nav-link active" href="<?php echo base_url('get_ticket');?>">Get Tickets</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="<?php echo base_url('list_ticket');?>">List Tickets</a>
											</li> 
											<li class="nav-item">
												<a class="nav-link" href="<?php echo base_url('location_booth');?>">Location</a>
											</li> 
										</ul>
										<div class="card-header border-0 pt-5">
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label font-weight-bolder text-dark">Take Your Tickets!</span>
												<span class="text-muted mt-3 font-weight-bold font-size-sm">Consult Your Education Now</span>
											</h3> 
										</div> 
										<div class="card-body pt-2 pb-0 mt-n3">
											<div class="tab-content mt-5" id="myTabTables11">  
												<div class="tab-pane fade show active" id="kt_tab_pane_11_3" role="tabpanel" aria-labelledby="kt_tab_pane_11_3">
													<div class="row">
													<?php 
														foreach ($data_booth->result() as $booth) {  
														if (isset($array_ticket_student[$booth->ID_BOOTH])) {
															$sudah_ambil = true; 
														}else {
															$sudah_ambil = false; 
														}
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
																				<?php
																					$jumlah_character = strlen($booth->CURRENTLY_NUMBER);
																					if($jumlah_character == 1){
																						$tambah_character = '0';
																					}else{
																						$tambah_character = '';
																					}
																				?>
																				<div>
																					<span class="font-weight-bolder">Currently Number :  <?= $tambah_character.''.$booth->CURRENTLY_NUMBER;?></span> 
																				</div>
																			</td>   
																			<td class="text-right">
																				<?php if($sudah_ambil == true){ ?> 
																					<span class="btn btn-secondary"> Ambil Tiket </span> 
																				<?php } else{ ?>
																					<a class="btn btn-primary confirmation" href="#" data-toggle="modal" data-target="#confTicket" data-id="<?= $booth->ID_BOOTH; ?>" title="Confirmation Ticket" href="#" role="button">
																						Ambil Tiket
																					</a> 
																				<?php } ?> 
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

					<div class="modal fade" id="confTicket" tabindex="-1" aria-labelledby="confirmationTicket" aria-hidden="true">
						<div class="modal-dialog">
							<form class="needs-validation" id="confTicket" action="<?= base_url('C_Ticket/confirmationTicket'); ?>" method="POST">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="confTicket">Confirmation Ticket</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body modal-confirmation">
									Loading
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
									<button type="submit" class="btn btn-primary btn-sm">Accept</button>
								</div>
							</div>
							</form>
						</div>
					</div> 
					<!-- Begin:: Modal Confirmation Ticket -->
					<script>
						jQuery(document).ready(function($) {
							$(function() {
								$('[data-toggle="tooltip"]').tooltip()
							})

							$(document).on('click', '.confirmation', function(event){
								var button 		= $(event.relatedTarget);
								var id			= $(this).data('id');
								var getAccount 	= '<?php echo base_url('C_Ticket/showConfirmationTicket?id='); ?>'; 
								$('.modal-confirmation').load(getAccount + id, function() {});
							});
						});
					</script>
					<!-- End:: Modal Confirmation Ticket -->
				</div>  
				<?php include('include/footer.php'); ?> 
			</div> 
		</div> 
    <?php include('include/javascript.php'); ?> 
	</body> 
</html>