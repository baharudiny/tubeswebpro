
<html>
<head>
	 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="shortcut icon" href="http://example.com/favicon.ico" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title></title>
</head>
<body style="background-color: rgb(237, 236, 251);">
	<a style="margin-left: 50px; margin-bottom: : -30px; color: black; font-size: 13px; font-weight: bold;" href="<?= base_url(); ?>home/index">Home</a>
	<div class="row">
  <div class="col-8">
    <h2 style="margin-top: 30px; margin-left: 50px; font-weight: bold;"><?php echo $judul; ?></h2>
    <div style="background-color: white; margin-top: 20px;  margin-left: 50px;" class="card-body">
     <div>
      <a style="color: black; font-weight: bold; font-size: 20px;" href="">How to Turn a Pound of Ground Turkey into Dinner</a>
      </div>    
  			<?php foreach($past as $p) : ?>
			<p><?php echo $p['namamakanan']; ?></p>
			<p><?php echo $p['jenismakanan']; ?></p>
			<p><?php echo $p['komposisi']; ?></p>
			<?php endforeach; ?>
    </div>
  </div>
</div>

</body>
 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>