@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Data Artikel 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('artikel.update',$artikel->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
					  {{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('judul_artikel') ? ' has-error' : '' }}">
			  			<label class="control-label">judul_artikel</label>	
			  			<input type="text" name="judul_artikel" class="form-control"  required>
			  			@if ($errors->has('judul_artikel'))
                            <span class="help-block">
                                <strong>{{ $errors->first('judul_artikel') }}</strong>
                            </span>
                        @endif
			  		</div>

					  	<div class="form-group {{ $errors->has('dibuat') ? ' has-error' : '' }}">
			  			<label class="control-label">Tahun Rilis</label>	
			  			<input type="date" name="dibuat" class="form-control"  required>
			  			@if ($errors->has('dibuat'))
                            <span class="help-block">
                                <strong>{{ $errors->first('dibuat') }}</strong>
                            </span>
                        @endif
			  		</div>

					  
					  <div class="form-group {{ $errors->has('ket_artikel') ? ' has-error' : '' }}">
			  			<label class="control-label">Keterangan Artikel</label>	
			  			<input type="text" name="ket_artikel" class="form-control"  required>
			  			@if ($errors->has('ket_artikel'))
                            <span class="help-block">
                                <strong>{{ $errors->first('ket_artikel') }}</strong>
                            </span>
                        @endif
			  		</div>


			  		<div class="form-group {{ $errors->has('kategoriartikel_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Kategori Artikel</label>	
			  			<select name="kategoriartikel_id" class="form-control">
			  				@foreach($kategoriartikel as $data)
			  				<option value="{{ $data->id }}">{{ $data->nama_artikel }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('kategoriartikel_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kategoriartikel_id') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Tambah</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection