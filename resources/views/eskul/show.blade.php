@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Eskul 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Nama Eskul</label>	
			  			<input type="text" name="title" class="form-control" value="{{ $eskul->nama }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Nama Siswa</label>	
			  			<input type="text" name="title" class="form-control" value="{{ $eskul->Siswa->nama }}"  readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection