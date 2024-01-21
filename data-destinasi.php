<?php include "header.php"; ?>
		
		<!-- Awal Page -->
		<div class="container">
		<!-- Awal baris -->
		<div class="row">
			<div class="col-md-12"><!-- Awal Kolom  -->
			<div class="panel panel-default">
				<div class="panel-body">
				<h2 style="text-muted"><span class="glyphicon glyphicon-list"></span> Data Destinasi Wisata</h2>
					<table class="table table-bordered table-hover" id="data-table">
						<thead>
						<tr>
							<th>Nama Destinasi</th>
							<th>Lokasi</th>
							<th>Deskripsi</th>
							<th>Tanggal Dibuka</th>
							<th>Telepon</th>
							<th>Email</th>
							<th></th>
						</tr>
						</thead>
						<?php

						include "koneksi.php";
						$sql=$koneksi->query("select * from destinasi order by email ASC");

						while($row= $sql->fetch_assoc()){
						?>
						<tr>
							<td><?php echo $row['nama_destinasi']?></td>
							<td><?php echo $row['lokasi']?></td>
							<td><?php echo $row['deskripsi']?></td>
							<td><?php echo $row['tanggal_dibuka']?></td>
							<td><?php echo $row['telepon']?></td>
							<td><?php echo $row['email']?></td>
							<td><a href="detail-destinasi.php?id=<?php echo $row['destinasi_id']?>">
                    <button class="btn btn-xs btn-danger glyphicon glyphicon-zoom-in"></button>
                </a></td>
						</tr>
						<?php } ?>
						</table>
				</div>
      </div>
			</div><!-- Akhir Kolom -->
		</div><!-- Akhir Baris -->
		</div><!--  Akhir Page -->
	