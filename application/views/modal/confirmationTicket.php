<?php foreach($data_booth->result() as $booth); ?> 
  	
<div class="form-group"> 
    <input type="hidden" name="id_booth" value="<?= $booth->ID_BOOTH ?>"> 
    <p class="text-center"> Anda Yakin Ingin Mengambil Tiket Ini? </p>
    <h3 class="text-center"><?= $booth->NAME_BOOTH; ?></h3> 
</div>

  					