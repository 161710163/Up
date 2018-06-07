@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data artikel 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Nama Artikel</label>	
			  			<input type="text" name="judul_artikel" class="form-control" value="{{ $artikel->judul_artikel }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Tahun Rilis</label>	
			  			<input type="date" name="dibuat" class="form-control" value="{{ $artikel->dibuat }}"  readonly>
			  		</div>
					  <div class="form-group">
			  			<label class="control-label">Keterangan Artikel</label>	
			  			<input type="text" name="ket_artikel" class="form-control" value="{{ $artikel->ket_artikel }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Kategori Artikel</label>	
			  			<input type="text" name="kategoriartikel_id" class="form-control" value="{{ $artikel->KategoriArtikel->nama_artikel }}"  readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection