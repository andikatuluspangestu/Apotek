<!-- Begin Page Content -->
<div class="container-fluid";>

	<!-- Page Heading -->
	<div class="col-lg-12">
		<div class="card shadow border-0">
			<div class="card-header py-3">
				<a href="http://localhost/apotek/obat/tambah" class="btn btn-sm btn-primary shadow-sm">Tambah Obat</a>
			</div>
			<div class="card-body border-0">
				<?php if ($this->session->flashdata('info')) : ?>
					<div class="alert alert-danger">
						<?php echo $this->session->flashdata('info'); ?>
					</div>
				<?php endif; ?>
				<table class="table table-bordered" id="dataTable">
					<thead>
						<tr>
							<th>No</th>
							<th>Kode Obat</th>
							<th>Nama Obat</th>
							<th>Harga</th>
							<th>Produsen</th>
							<th>Supplier</th>
							<th>Stok</th>
							<th>Gambar</th>
							<th>Opsi</th>
						</tr>
					</thead>
					<?php $no = 1; ?>
					<?php foreach($obat->result() as $o) : ?>
					<tbody>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $o->kode; ?></td>
							<td><?php echo $o->nama_obat; ?></td>
							<td><?php echo $o->harga; ?></td>
							<td><?php echo $o->produsen; ?></td>
							<td><?php echo $o->supplier_id; ?></td>
							<td><?php echo $o->stok; ?></td>
							<td><img src="<?php echo base_url('assets/img/') . $o->foto; ?>" width="100" class=""></td>
							<td>
								<a href="<?php echo site_url('obat/hapus/') . $o->kode; ?>" class="btn btn-danger btn-circle btn-sm"><i class="fa fa-trash"></i></a>
								<a href="<?php echo site_url('obat/ubah/') . $o->kode; ?>" class="btn btn-info btn-circle btn-sm"><i class="fa fa-edit"></i></a>
							</td>
						</tr>
					</tbody>
					<?php endforeach ?>
				</table>
			</div>
		</div>
	</div>
</div>
<!-- /.container-fluid -->
