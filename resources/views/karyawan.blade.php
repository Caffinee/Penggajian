@extends('layout.main')

@section('content')
      <div>
      	<h4 class="fw-bold">Data Karyawan</h4>
      	<a class="btn btn-info btn-md p-2 mb-3 fw-bold">Tambah data</a>
      </div>
      <div class="col-12 ps-1" style="white-space:nowrap">
      	<table class="table table-bordered border-dark ">
      		<thead>
      			<tr>
      				<th scope="col">No.</th>
      				<th scope="col">ID Karyawan</th>
      				<th scope="col">Nama</th>
      				<th scope="col">Alamat</th>
      				<th scope="col">Nomor HP</th>
                    <th scope="col">Tempat Lahir</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
      			</tr>
      		</thead>
      		<tbody>
      		    
      			<tr>
      				<th>01</th>
      				<td>12345</td>
      				<td>Tono</td>
      				<td>Bogor</td>
                    <td>0823587342</td>
                    <td>Bogor</td>
                    <td>20 April 1999</td>
                    <td>Laki-Laki</td>
                    <td>Kawin</td>
      				<td>
      					<a class="btn btn-primary btn-sm">Edit</a>
      					<a class="btn btn-danger btn-sm">Delete</a>
      				</td>
      			</tr>
      			
      		</tbody>
</table>
      	</div>
      </div>
      @endsection
