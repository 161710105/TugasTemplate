@extends('templates.master5')
@section('konten')
<table class="table">
				<thead>
					<tr>
						<th>
							#
						</th>
						<th>
							Kode Barang
						</th>
						<th>
							Nama barang
						</th>
					</tr>
				</thead>
				<tbody>
					@php $no=1; @endphp
					@foreach($barang as $tab)
					<tr>
						<td>
							{{$no++}}
						</td>
						<td>
							{{$tab->Kode_barang}}
						</td>
						<td>
							{{$tab->Nama_barang}}
						</td>
					</tr>
					@endforeach
					
				</tbody>
			</table> 
			<button type="button" class="btn btn-primary">
				Default
			</button>
			@endsection