<main role="main" class="container">
	<?php $this->load->view('templates/_alert'); ?>
	<div class="row">
		<div class="col-md-10 mx-auto">
			<div class="card mb-3">
				<div class="card-header">
					<span>Kategori</span>
					<a href="<?= base_url('category/addCategory') ?>" class="btn btn-sm btn-secondary">Tambah</a>
						<div class="float-right">
								<?= form_open('category/search',['method'=>'POST']); ?>
							<div class="input-group float-right">
								<input type="text" name="keyword" class="form-control form-control-sm text-center" placeholder="Cari" value="<?= $this->session->userdata('keyword') ?>">
								<div class="input-group-append">
									<button class="btn btn-info btn-sm" type="submit">
										<i class="fas fa-search"></i>
									</button>
									<a href="<?= base_url('category/reset') ?>" class="btn btn-info btn-sm">
										<i class="fas fa-eraser"></i>
									</a>
								</div>
								<?= form_close() ?>
							</div>
						</div>
				</div>
				<div class="card-body">
					<table class="table">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Title</th>
								<th scope="col">Slug</th>
								<th scope="col"></th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 0; foreach ($content as $row) :  $no++;?>
							<tr>
								<td><?= $no ?></td>
								<td><?= $row->title ?></td>
								<td><?= $row->slug ?></td>
								<td>
								<?= form_open("category/delete/$row->id",['method'=> 'POST']) ?>
								<?= form_hidden('id',$row->id) ?>
									<a href="<?= base_url('category/edit/').$row->id ?>" class="btn btn-sm">
										<i class="fas fa-edit text-info"></i>
									</a>
									<button type="submit" class="btn btn-sm" onclick="return confirm('apakah anda yakin akan menghapusnya?')">
										<i class="fas fa-trash text-danger"></i>
									</button>
								</td>
								<?= form_close() ?>
							</tr>
							<?php endforeach ?>
						</tbody>
					</table>
					
					<nav aria-label="Page navigation example">
						<?= $pagination ?>
					</nav>
				</div>
			</div>
		</div>
	</div>
</main>