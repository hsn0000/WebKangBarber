@extends('layouts.master')

@section('header')
  {{!! config('barber.title_bodycare') !!}}
@stop

@section('content')
  <div class="main"> 
    <div class="main-content">
       <div class="container-fluid">
         <div class="row">
          <div class="col-md-12">
           <div class="panel">
						<div class="panel-heading">
              <h3 class="panel-title" style="color:black;font-weight:bold;"><i class="lnr lnr-cart">BODYCARE</i></h3>
              <div class="right">
                <button class="btn" data-toggle="modal" data-target="#exampleModal" id="tambahBodycare" ><b><i class="lnr lnr-plus-circle" >Tambah Barang BodyCare</i></b></button>
               </div>
							</div>
								<div class="panel-body">
									<table class="table table-hover" id="tableBodycare">
										<thead class="thead-info">
										<tr>
                       <th style=" text-align: center;">Photo</th>
                       <th style=" text-align: center;">Nama Produk</th>
                       <th style=" text-align: center;">Harga</th>
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

     
  
 <!-- Modal Tambah-->
 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"><b><i class="lnr lnr-plus-circle"></i> TAMBAH PRODUK BODYCARE</h5></b>
            <p id="p-lookbook">klik tombol tambahkan <span style="color:red;font-weight:bold;text-decoration:underline;">2 kali</span> untuk memastikan file ter upload seluruhnyah</p>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
      <form action="" enctype="multipart/form-data">
         <div class="modal-body">
       <div class="form-group ">
          <label for="avatar">Ambil Gambar</label>
          <input type="file" value="upload" name="avatar" class="form-control padding-bottom-30" id="imageBodycare" required>
       </div>
       <div class="form-group ">
          <label for="namaProduk">Nama Produk</label>
          <input name="namaProduk" type="text" class="form-control" id="nameBodycare" 
              aria-describedby="text" placeholder="Nama Produk" required>
       </div>
       <div class="form-group ">
          <label for="deskripsi">Harga</label>
          <input name="deskripsi" type="number" class="form-control" id="priceBodycare" 
              aria-describedby="number" placeholder="Harga Barang" required>
       </div>
         </div>
         <progress value="0" max="100" id="progressBodycare">0%</progress>
           <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
             <button type="button" class="btn btn-primary" onclick=" uploadBodycare();"><i class="lnr lnr-plus-circle"></i>Tambahkan</button>
          </div>
        </form> 
     </div>

  


@stop



@section('footer')

<script src="{{asset('admin/assets/scripts/bodycare.js')}}"></script>

@stop
