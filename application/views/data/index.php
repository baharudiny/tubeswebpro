<!doctype html>
<html lang="en">
  <head>
  	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="shortcut icon" href="http://example.com/favicon.ico" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css.css">
    <title><?php echo $judul; ?></title>
  </head>
  <body style="background-color: rgb(237, 236, 251);">
  	<a style="margin-left: 50px; margin-bottom: : -30px; color: black; font-size: 13px; font-weight: bold;" href="<?= base_url(); ?>home/index">Home</a>
<div class="container">
	<?php if( $this->session->flashdata() ) : ?>
	<div class="row mt-3">	
		<div class="col-md-6">
			<div class="alert alert-success alert-dismissible fade show" role="alert">
			  Data Makanan<strong> berhasil</strong> <?= $this->session->flashdata('flash'); ?>
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>
		</div>
	</div>														
	<?php endif; ?>
	<div class="jumbotron"></div>
	<div class="row mt-3">
		<div class="col-md-6">	
			<form action="" method="post">
				<div class="input-group">
				  <input type="text" class="form-control" placeholder="Cari Data Makanan.." name="keyword">
				  
				</div>
		
			</form>
		</div>
	</div>
	<div class="row mt-3">
		<div class="col-md-6">
			<h1 style="text-align: center;">Daftar Makanan</h1>
			<?php if( empty($dataa)) : ?>
				<div class="alert alert-danger" role="alert">
 					 Data Mahasiswa Tidak Ditemukan

				</div>
				<?php endif; ?>
				
			<table width="150%" height="100%" border="1">

			<tr style="text-align: center;">
				<th>ID</th>
				<th>NAMA MAKANAN</th>
				<th>JENIS MAKANAN</th>			
				<th>KOMPOSISI</th>
				<th>AKSI</th>

			</tr>

			<?php foreach($dataa as $d) : ?>
			<tr  style="text-align: center;">
				<td><?php echo $d['id'];?></td>
				<td><?php echo $d['namamakanan']; ?> </td>
  				<td><?php echo $d['jenismakanan']; ?> </td>
  				<td><?php echo $d['komposisi']; ?> </td>
  			
  				<td ><a style="margin: 0px 0px 0px 110px; font-size: 17px;" href="<?= base_url(); ?>data/ubah/<?= $d['id']; ?>" class="badge badge-success float-left" onclick="return confirm('yakin?');">ubah</a>
  				<a style="margin: 0px 110px 0px 0px; font-size: 17px;" href="<?= base_url(); ?>data/hapus/<?= $d['id']; ?>" class="badge badge-danger float-right" onclick="return confirm('yakin menghapus data?');">hapus</a> </td>
  			<?php endforeach; ?>
         	</tr>
         	</table>
         	<a style="margin: 30px 0px 0px 250px; color: white;" href="<?= base_url(); ?>data/tambah" type="button" class="btn btn-primary">Tambah Data Makanan</a>
		</div>
	</div>
</div>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

