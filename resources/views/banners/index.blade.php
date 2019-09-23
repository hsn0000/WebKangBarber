@extends('layouts.master')

@section('content')
  <div class="main">
    <div class="main-content">
       <div class="container-fluid">
         <div class="row">
          <div class="col-md-12">
           <div class="panel">
						<div class="panel-heading">
              <h3 class="panel-title"><i class="lnr lnr-file-empty"></i> <B>BANNER</B></h3>
             @if(session('sukses'))
			      	<div class="aler alert-success" role="alert">
				        {{session('sukses')}}
			      	</div>
			    	@endif
              <div class="right">
              <button class="btn" data-toggle="modal" data-target="#exampleModal" id="tambahBanner" ><i class="lnr lnr-plus-circle" >Tambah Banner</i></button>
               </div>
							</div>
								<div class="panel-body">
									<table class="table table-hover" id="tablebanner">
										<thead class="thead-info">
											<tr>
                         <th>BANNNER</th>
                         <th>DESKRIPSI</th>
                         <th>AKSI</th>
											</tr>
										</thead>
			 							<tbody>
          <!-- loop -->
										</tbody>
									</table>
              
								</div>
							</div>
           </div>
         </div>
       </div>
    </div>
  </div>


   <!-- Modal -->
   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"><b><i class="lnr lnr-plus-circle"></i> TAMBAH BANNER</h5></b>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
      <form action="" enctype="multipart/form-data">
         <div class="modal-body">
       <div class="form-group ">
          <label for="avatar">Ambil Gambar</label>
          <input type="file" value="upload" name="avatar" class="form-control padding-bottom-30" id="imageBanner">
       </div>
       <div class="form-group ">
          <label for="deskripsi">Deskripsi</label>
          <input name="deskripsi" type="text" class="form-control" id="deskBanner" 
              aria-describedby="text" placeholder="Deskripsi" required>
       </div>
         </div>
         <progress value="0" max="100" id="uploadProgress">0%</progress>
           <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
              <button type="button" class="btn btn-primary" onclick="upload();"><i class="lnr lnr-plus-circle"></i>Tambahkan</button>
          </div>
        </form>
     </div>


@stop


@section('footer')
<script src="{{asset('admin/assets/scripts/banner.js')}}"></script>


 <script>
   $(document).ready(function() {
    $('#tablebanner').DataTable()
    
 </script>
    
@stop

