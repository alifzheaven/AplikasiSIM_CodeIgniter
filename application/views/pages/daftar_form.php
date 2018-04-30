<?php
	if ($query == NULL) {
		$title = "Tambah";
	}else{
		$title = "Edit";

	}
?> 
<div class="card card-default" style="border-radius: 0px; margin: 20px 0;">
	<div class="card-header"><?php echo $title; ?> Data Pendaftar</div>
	<div class="card-body">
		<?php echo anchor ('pendaftar','kembali','class="btn btn-secondary"
		style="margin: 0 5px; margin-bottom: 5px;"'); ?> 
		<hr/> 
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<form method="post" action="simpan">
					<div class="form-group"> 
						<label>No KTP</label>
						<input type="text" name="daftar_no_ktp"
						class="form-control" placeholder=".."> 
						<small class="form-text text-muted"> Isikan
						No KTP Asli anda </small>
					</div>

					<div class="form-group"> 
						<label>Nama Lengkap</label>
						<input type="text" name="daftar_nama_lengkap"
						class="form-control" placeholder="..."> 
					</div>

					<div class="form-group">
						<label>Tanggal Lahir</label>
						<input type="date" name="daftar_tanggal_lahir"
						class="form-control" placeholder="...">
					</div>

					<div class="form-group">
						<label>Umur</label>
						<input type="text" name="daftar_umur"
						class="form-control" placeholder="...">
					</div>
					

						<button type="submit" class="btn btn-primary mb-2"> Simpan </button>
					</form>
				</div>
				<div class="col-md-3"></div>
			</div>
			</div>