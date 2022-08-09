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
												<a class="nav-link active" href="<?php echo base_url('list_ticket');?>">List Tickets</a>
											</li> 
											<li class="nav-item">
												<a class="nav-link" href="<?php echo base_url('location_booth');?>">Location</a>
											</li>
										</ul>
										<div class="card-header border-0 pt-5">
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label font-weight-bolder text-dark">Keep Checking Your Tickets!</span>
												<span class="text-muted mt-3 font-weight-bold font-size-sm">Consult Your Education Now</span>
											</h3> 
										</div> 
										<div class="card-body pt-2 pb-0 mt-n3">
											<div class="tab-content mt-5" id="myTabTables11">  
												<div class="tab-pane fade show active" id="kt_tab_pane_11_3" role="tabpanel" aria-labelledby="kt_tab_pane_11_3">
													<div class="row">
														<?php foreach ($ticket->result() as $ticket) {  ?>
														<div class="col-md-6 col-sm-12 col-xs-12">
															<div class="table-responsive">
																<table class="table table-borderless table-vertical-center">
																	<thead>
																		<tr>
																			<th class="p-0 w-40px"></th>
																			<th class="p-0 min-w-200px"></th>
																			<th class="p-0 min-w-100px"></th>
																		</tr>
																	</thead>
																	<tbody>
																		<tr>
																			<td class="pl-0 py-4">
																				<div class="symbol symbol-50 symbol-light mr-1">
																				<span class="symbol-label">
																					<?php if(empty($ticket->IMAGE) OR $ticket->IMAGE==null){ ?>
																						<img src="assets/media/logo-campus/no-image.png" class="max-h-100 align-self-center" alt="logo-campus" />
																					<?php } elseif($ticket->IMAGE){ ?>
																						<img src="assets/media/logo-campus/<?= $booth->IMAGE;?>" class="max-h-100 align-self-center" alt="logo-campus" />
																					<?php } else{ ?>
																						<img src="assets/media/logo-campus/no-image.png" class="max-h-100 align-self-center" alt="logo-campus" />
																					<?php } ?> 
																				</span>
																				</div>
																			</td>
																			<td class="pl-0">
																				<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg"><?= $ticket->NAME_BOOTH;?></a>
																				<div>
																					<span class="font-weight-bolder">Negara : USA</span> 
																				</div>
																				<div>
																					<span class="font-weight-bolder">Nomor Anda : <?= $ticket->TICKET_NUMBER;?></span> 
																				</div>
																				<?php
																					if($ticket->STATUS == 'DONE'){
																						$warna = 'badge badge-primary';
																						$keterangan = 'DONE';
																					} else{
																						if($ticket->TICKET_NUMBER < $ticket->CURRENTLY_NUMBER){
																							$warna = 'badge badge-danger';
																							$keterangan = 'TERLEWAT!';
																						} elseif($ticket->TICKET_NUMBER == $ticket->CURRENTLY_NUMBER){
																							$warna = 'badge badge-success';
																							$keterangan = 'SEKARANG!';
																						} elseif($ticket->TICKET_NUMBER > $ticket->CURRENTLY_NUMBER){
																							$warna = 'badge badge-secondary';
																							$keterangan = 'MENUNGGU!';
																						}
																					}
																				?>
																				<div>
																					<span class="font-weight-bolder">Status : <p class="<?= $warna;?>"><?= $keterangan; ?></p></span> 
																				</div>
																			</td> 
																			<td class="text-right">
																				<h2> <span class="badge badge-success"> <?= $ticket->CURRENTLY_NUMBER;?> </span> </h2>
																			</td>
																		</tr> 
																	</tbody>
																</table>
															</div>
														</div> 
														<?php } ?>
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
				<?php include('include/footer.php'); ?> 
			</div> 
		</div>
    <?php include('include/javascript.php'); ?> 
	</body>
</html>