@extends('master')

@section('title', 'Daftar Pertanyaan')

@section('content')

	<div class="card">
	  <div class="card-header">
	    <h3 class="card-title">Daftar Pertanyaan</h3>
	    <a href="/pertanyaan/create" class="btn btn-info float-right" role="button"><i class="fa fa-plus"></i> Tambah Pertanyaan</a>
	  </div>
	  <!-- /.card-header -->
	  <div class="card-body">
	    <table id="example1" class="table table-bordered table-striped">
		  <thead>                  
		    <tr>
		      <th style="width: 10px">#</th>
		      <th>Judul</th>
		      <th>Penanya</th>
		      <th>Detail</th>
		    </tr>
		  </thead>
		  <tbody>
		  	@foreach($pertanyaan as $key => $item)
		    <tr>
		      <td>{{ $key+1 }}</td>
		      <td>{{ $item->judul }}</td>
		      <td>{{ $item->name }}</td>
		      <td>
		      	<a href="/jawaban/{{$item->id}}"><i class="fa fa-search"></i> Lihat Pertanyaan</a>
		      </td>
		    </tr>
		    @endforeach
		  </tbody>
		</table>
	   </div>
	  <!-- /.card-body -->
	</div>

@endsection

@push('scripts')

	<script src="{{asset('/adminlte/plugins/datatables/jquery.dataTables.js')}}"></script>
	<script src="{{asset('/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
	<script>
	  $(function () {
	    $("#example1").DataTable();
	  });
	</script>

@endpush