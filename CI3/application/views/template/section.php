

<!-- start section contain -->
 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800"><?php echo $nama; ?></h1>
<h1 class="h3 mb-4 text-gray-800"><?php echo $kelas; ?></h1>
<div class ="row">
<?php foreach ($database as $key => $dbs) :?>
<div class="col-md-3">
<div class="card" style="width: 18rem;">
  <img src="<?php echo $dbs->img;?>" class="card-img-top" height="200px" alt="...">
  <div class="card-body">
    <h5 class="card-title">nama : <?php echo $dbs->nama;?></h5>
    <p class="card-text">kelas : <?php echo $dbs->kelas;?></p>
	<p class="card-text">jurusan : <?php echo $dbs->jurusan;?></p>
	<p class="card-text"></p>
	<p class="card-text"></p>
	<p class="card-text"></p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>
<?php endforeach?>
</div>
</div>
<!-- /.container-fluid -->
<!-- end section contein-->