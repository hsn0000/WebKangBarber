@extends('layouts.master')

@section('content')
  <div class="main">
    <div class="main-content">
       <div class="container-fluid">
         <div class="row">
          <div class="col-md-12">
           <div class="panel">
						<div class="panel-heading">
              <h3 class="panel-title"><i class="lnr lnr-user"></i> <b>LOOKBOOK</b></h3>
             @if(session('sukses'))
			      	<div class="aler alert-success" role="alert">
				        {{session('sukses')}}
			      	</div>
			    	@endif
            @if(session('update'))
	      			<div class="aler alert-warning" role="alert">
				         {{session('update')}}
		      		</div>
		    		@endif
            @if(session('danger'))
		     		<div class="aler alert-danger" role="alert">
				       {{session('danger')}}
			    	</div>
			    	@endif
              <div class="right">
              <button class="btn" data-toggle="modal" data-target="#exampleModal" id="tambahBanner" ><i class="lnr lnr-plus-circle" >Tambah eviden lookbook</i></button>
               </div>
							</div>
								<div class="panel-body">
									<table class="table table-hover" id="datatable">
										<thead class="thead-info">
											<tr>
                         <th>LOOKBOOK</th>
                         <th>DESKRIPSI</th>
                         <th>AKSI</th>
											</tr>
										</thead>
			 							<tbody>
             <!-- ** -->
                      <tr>
                         <td>1</td>
                         <td>2</td>
                        <td> 
                        <a href="#" class="btn btn-danger btn-sm ml-5 float-right delete" siswa-id=""><i class="lnr lnr-trash"> Hapus</i></a>
                        <a href="#" class="btn btn-warning btn-sm float-right"> <i class="fa fa-paper-plane-o"> Ubah</i> </a>
                        </td>
                      </tr>
           <!-- ** -->
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
            <h5 class="modal-title" id="exampleModalLabel"><i class="lnr lnr-plus-circle"></i> TAMBAH EVIDEN LOOKBOOK</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
         <div class="modal-body">
         <form action="#" method="post" enctype="multipart/form-data">
           {{csrf_field()}}
         
       <div class="form-group ">
          <label for="textarea">Ambil Gambar</label>
          <input type="file" name="avatar" class="form-control padding-bottom-30">
     
       </div>
         </div>
           <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
              <button type="submit" class="btn btn-primary"><i class="lnr lnr-plus-circle"></i>Tambahkan</button>
            </form>
          </div>
     </div>

@stop

@section('footer')
    <script>
       $(document).ready(function() {
          $('#datatable').DataTable()

    });

    </script>
@stop

