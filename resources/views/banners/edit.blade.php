@extends('layouts.master')

@section('content')

<div class="main">
    <div class="main-content">
       <div class="container-fluid">
         <div class="row">
          <div class="col-md-12">
           <div class="panel">
				<div class="panel-heading">
				<h3 class="panel-title"><i class="fa fa-paper-plane-o">UBAH BANNER</i> </h3>
				</div>
				<div class="panel-body">
              <form action="/siswa/{{$siswa->id}}/update" method="post" enctype="multipart/form-data">
           {{csrf_field()}}

       <div class="form-group">
          <label for="textarea">Ambil Gambar</label>
          <input type="file" name="avatar" class="form-control padding-bottom-30">
       </div>
       <button type="submit" class="btn btn-warning mt-5 "><i class="fa fa-paper-plane-o"></i> Update</button>
         </div>
            </form>
					
          </div>
         </div>
       </div>
    </div>
</div>

@stop