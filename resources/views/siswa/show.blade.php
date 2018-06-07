@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Siswa 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Nama</label>	
			  			<input type="text" name="title" class="form-control" value="{{ $mhs->nama }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">NIS</label>
						<input type="number" name="title" class="form-control" value="{{ $mhs->nis }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Kelas</label>
						<input type="text" name="title" class="form-control" value="{{ $mhs->kelas->nama }}"  readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection