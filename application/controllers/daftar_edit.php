<?php
	if ($query == NULL) {
		$title = "Tambah";
	}else{
		$title = "Edit";

	}
	if($query->num_rows() == 0 ) redirect('pendaftar');
	$r = $query->result()[0];
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
				<form method="post" action="../update/<?php echo $r->daftar_id; ?>">
					<div class="form-group"> 
						<label>No KTP</label>
						<input type="text" name="daftar_no_ktp" value="<?php echo $r->no_ktp; ?>"
						class="form-control" placeholder=".."> 
						<small class="form-text text-muted"> Isikan
						NISN sesuai dengan data dari Website : 
						http://nisn.kemendikbud.go.id </small>
					</div>

					<div class="form-group"> 
						<label>Nama Lengkap</label>
						<input type="text" name="daftar_nama_lengkap" value="<?php echo $r->nama_lengkap; ?>"
						class="form-control" placeholder="..."> 
					</div>

					<div class="form-group">
						<label>Tanggal Lahir</label>
						<input type="date" name="daftar_tanggal_lahir" value="<?php echo $r->tanggal_lahir; ?>"
						class="form-control" placeholder="...">
					</div>

					<div class="form-group">
						<label>Umur</label>
						<input type="text" name="daftar_umur" value="<?php echo $r->umur; ?>"
						class="form-control" placeholder="...">
					</div>
					

						<button type="submit" class="btn btn-primary mb-2"> Simpan </button>
					</form>
				</div>
				<div class="col-md-3"></div>
			</div>
			</div>