<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Data Transaksi</h1>
		</div>

		<div class="table-responsive">
		<table class="table table-bordered table-striped">
			
			<tr>
				<th>No</th>
				<th>Customer</th>
				<th>Mobil</th>
				<th>Tgl. Rental</th>
				<th>Tgl. Kembali</th>
				<th>Harga/Hari</th>
				<th>Denda/Hari</th>
				<th>Tgl. Dikembalikan</th>
				<th>Status Pengembalian</th>
				<th>Status Rental</th>
				<th>Action</th>
			</tr>

			<?php $no=1;
			foreach($transaksi as $tr) : ?>

				<tr>
					<td><?php echo $no++?></td>
					<td><?php echo $tr->nama ?></td>
					<td><?php echo $tr->merk ?></td>
					<td><?php echo date('d/m/y', strtotime($tr->tanggal_rental)); ?></td>
					
				</tr>

			<?php endforeach; ?>
		</table>
		</div>
	</section>
</div>