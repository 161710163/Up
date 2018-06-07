@extends('layouts.admin')
@section('content')
<br><br><br><br><br>
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Data Kategori Artikel
			  	<div class="panel-title pull-right"><a href="{{ route('kategoriartikel.create') }}">Tambah</a>
			  	</div>
			  </div>
			  <div class="panel-body">
				<div class="table-responsive table--no-card m-b-40">
				  <table class="table table-borderless table-striped table-earning">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Nama Artikel</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($a as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->nama_artikel }}</td>
					<td>
						<a class="btn btn-warning" href="{{ route('kategoriartikel.edit',$data->id) }}">Edit</a>
					</td>
					<td>
						<a href="{{ route('kategoriartikel.show',$data->id) }}" class="btn btn-success">Show</a>
					</td>
					<td>
						<form method="post" action="{{ route('kategoriartikel.destroy',$data->id) }}">
							<input name="_token" type="hidden" value="{{ csrf_token() }}">
							<input type="hidden" name="_method" value="DELETE">
					
							<button type="submit" class="btn btn-danger">Delete</button>
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
</div>
@endsection