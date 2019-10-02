@extends('layouts.master')

@section('header')
  {{!! config('barber.title_postmodel') !!}}
@stop

@section('content')
  <div class="main"> 
    <div class="main-content">
       <div class="container-fluid">
         <div class="row">
          <div class="col-md-12">
           <div class="panel">
						<div class="panel-heading">
              <h3 class="panel-title" style="color:black;font-weight:bold;"><i class="fa fa-line-chart"> POSTINGAN RAMBUT TERPOPULER</i></h3>
              <p id="p-lookbook">apa sajah model rambut terpopuler saat ini, hanya ada di <span style="color:black;font-weight:bold;text-decoration:underline;"> BOOKING KANG BARBER</span></p>
              <div class="right">
              <button class="btn" data-toggle="modal" data-target="#exampleModal" id="tambahPost" ><b><i class="lnr lnr-plus-circle" >Tambahkan Postingan</i></b></button>
               </div>
							</div>
								<div class="panel-body">
									<table class="table table-hover" id="tablePostModel">
										<thead class="thead-info">
											<tr>
                         <th style=" color:black; text-align: center;">TANGGAL</th>
                         <th style=" color:black; text-align: center;">PHOTO</th>
                         <th style=" color:black; text-align: center;">NAMA MODEL</th>
                         <th style=" color:black; text-align: center;">DESKRIPSI</th>
                         <th style=" color:black; text-align: right;">AKSI</th>
                         <th></th>
											</tr>
										</thead>
			 							<tbody>
             <!-- LOOP -->
										</tbody>
									</table>
              
								</div>
							</div>
           </div>
         </div>
       </div>
    </div>
  </div>


   <!-- Modal Tambah-->
   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"><b><i class="lnr lnr-plus-circle"></i> TAMBAHKAN MODEL RAMBUT</h5></b>
            <p id="p-lookbook">klik tombol tambahkan <span style="color:red;font-weight:bold;text-decoration:underline;">2 kali</span> untuk memastikan file ter upload seluruhnyah.</p>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
      <form action="" enctype="multipart/form-data">
         <div class="modal-body">
       <div class="form-group ">
          <label for="avatar">Ambil Gambar</label>
          <input type="file" value="upload" name="avatar" class="form-control padding-bottom-30" id="imagePostModel" required>
       </div>
       <div class="form-group ">
          <label for="namamodel">NAMA MODEL</label>
          <input name="namamodel" type="text" class="form-control" id="namePostModel" 
              aria-describedby="text" placeholder="Nama Model" required>
       </div>
       <div class="form-group">
         <label for="deskripsi">Deskripsi</label>
         <textarea name="deskripsi" class="form-control" placeholder="Deskripsi" value="" id="deskPostModel" rows="3" ></textarea>
       </div>
         </div>
         <progress value="0" max="100" id="progressPostModel">0%</progress> <br><br>
           <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
             <button type="button" class="btn btn-primary" onclick=" uploadPostModel();"><i class="lnr lnr-plus-circle"></i>Tambahkan</button>
          </div>
        </form>
     </div>

     
  


@stop




@section('footer')

 <script src="{{asset('admin/assets/scripts/postmodel.js')}}"></script>
    
@stop

