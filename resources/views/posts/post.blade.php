@extends('layouts.master')

@section('content')
  <div class="main"> 
    <div class="main-content">
       <div class="container-fluid">
         <div class="row">
          <div class="col-md-12">
           <div class="panel">
						<div class="panel-heading">
              <h3 class="panel-title" style="color:black;font-weight:bold;"><i class="lnr lnr-dice"> DAFTAR POSTINGAN</i></h3>
              <p id="p-lookbook">apa sajah berita terbaru tentang <span style="color:black;font-weight:bold;text-decoration:underline;"> BOOKING KANG BARBER</span> untuk di posting</p>
              <div class="right">
              <button class="btn" data-toggle="modal" data-target="#exampleModal" id="tambahPost" ><b><i class="lnr lnr-plus-circle" >Tambahkan Postingan</i></b></button>
               </div>
							</div>
								<div class="panel-body">
									<table class="table table-hover" id="tablePost">
										<thead class="thead-info">
											<tr>
                         <th style=" text-align: center;">TANGGAL</th>
                         <th style=" text-align: center;">PHOTO</th>
                         <th style=" text-align: center;">DARI</th>
                         <th style=" text-align: center;">JUDUL</th>
                         <th style=" text-align: center;">DESKRIPSI</th>
                         <th style=" text-align: right;">AKSI</th>
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
            <h5 class="modal-title" id="exampleModalLabel"><b><i class="lnr lnr-plus-circle"></i> TAMBAHKAN POSTINGAN</h5></b>
            <p id="p-lookbook">klik tombol tambahkan <span style="color:red;font-weight:bold;text-decoration:underline;">2 kali</span> untuk memastikan file ter upload seluruhnyah</p>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
      <form action="" enctype="multipart/form-data">
         <div class="modal-body">
       <div class="form-group ">
          <label for="avatar">Ambil Gambar</label>
          <input type="file" value="upload" name="avatar" class="form-control padding-bottom-30" id="imagePost" required>
       </div>
       <div class="form-group ">
          <label for="dari">Dari</label>
          <input name="dari" type="text" class="form-control" id="dariPost" 
              aria-describedby="text" placeholder="Dari" required>
       </div>
       <div class="form-group ">
          <label for="judul">Judul</label>
          <input name="judul" type="text" class="form-control" id="judulPost" 
              aria-describedby="text" placeholder="Judul" required>
       </div>
       <div class="form-group">
         <label for="deskripsi">Deskripsi</label>
         <textarea name="deskripsi" class="form-control" placeholder="Deskripsi" value="" id="deskPost" rows="3" ></textarea>
       </div>
         </div>
         <progress value="0" max="100" id="progressPost">0%</progress> <br><br>
           <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
             <button type="button" class="btn btn-primary" onclick=" uploadPost();"><i class="lnr lnr-plus-circle"></i>Tambahkan</button>
          </div>
        </form>
     </div>

     
  


@stop




@section('footer')

 <script src="{{asset('admin/assets/scripts/post.js')}}"></script>
    
@stop

