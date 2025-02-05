@extends('layouts.app')

@push('style')
<link rel="stylesheet" href="https://cdn.datatables.net/2.2.1/css/dataTables.dataTables.css" />
@endpush

@section('content')
<div class="page-content">
	<div class="col-12">
		<div class="card mb-4">
			<div class="card-body py-2 px-5">
				<h4 class="text-center py-3">Data Barang</h4>
				<div class="table-responsive mt-3 mb-3">
					<table class="table table-bordered table-striped display" id="dataTable" width="100%"
						cellspacing="0">
						<thead>
							<tr>
								<th>No</th>
								<th>Kode Barang</th>
								<th>Nama Barang</th>
								<th>Jenis Barang</th>
								<th>Jumlah Stok</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($data as $item)
							<tr>
								<td>{{ $loop->iteration }}</td>
								<td>{{ $item->kode_barang }}</td>
								<td>{{ $item->nama_barang }}</td>
								<td>{{ $item->jenis_barang }}</td>
								<td>{{ $item->stok_barang }}</td>
								<td class="text-center d-flex gap-2">
									<a href="#"
										class="btn btn-sm btn-info  position-relative d-flex">
										<i class="bx bx-check"></i> Edit
									</a>
									<form action="#" method="POST">
										@csrf
										@method('delete')
										<button
											class="btn btn-sm btn-danger  position-relative d-flex show_confirm">
											<i class="bx bx-cross"></i> Delete
										</button>
									</form>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@push('script')
<script src="https://cdn.datatables.net/2.2.1/js/dataTables.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

<script>
	$(document).ready( function () {
			$('#dataTable').DataTable();
		});
</script>

<script type="text/javascript">
	$('.show_confirm').click(function(event) {

			var form =  $(this).closest("form");

			event.preventDefault();

			new swal({

				title: `Hapus Data?`,

				text: "Data tidak akan bisa dikembalikan",

				icon: "warning",

				buttons: true,

				dangerMode: true,

			})

			.then((willDelete) => {

			if (willDelete) {

				form.submit();

			}

			});

		});
</script>
@endpush