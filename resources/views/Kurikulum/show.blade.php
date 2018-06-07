@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Kelas 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Nama</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $a->nama }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Wali Kelas</label>	
			  			<input type="text" name="wali_kelas" class="form-control" value="{{ $a->wali_kelas }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Siswa</label>	
			  			<textarea rows="10" class="form-control" readonly>@foreach($a->Siswa as $data)
			  				-{{ $data->nama }}
			  				@endforeach
			  			</textarea> 
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection