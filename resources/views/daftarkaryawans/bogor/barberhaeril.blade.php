@extends('layouts.master')

@section('foorter')

@stop

@section('content')

<div class="main"> 
    <div class="main-content">
       <div class="container-fluid">
         <div class="row">
          <div class="col-md-12">
            <div class="col-md-12">
                    <!-- BORDERED TABLE -->
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title" style=" text-align: center; color:black; font-weight:bold; margin-top:40px;">DAFTAR KARYAWAN/STAFF DI SALON HAERIL @SHOP THE BARBER</h3>
                        </div>
                            <button class="btn" data-toggle="modal" data-target="#exampleModal" id="tambahKaryawan" style="float:right; margin-right:28px; margin-bottom:7px;" >
                                <b><i class="lnr lnr-plus-circle" >Tambah Data Karyawan</i></b></button>
                        <div class="panel-body">
                            <table class="table table-bordered" id="tableHaeril">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th style=" text-align: center;">Nama Panggilan</th>
                                    <th style=" text-align: center;">UserName</th>
                                    <th style=" text-align: center;">Rating Bintang</th>
                                    <th style=" text-align: center;">Password</th>
                                </tr>
                                </thead>
                            <tbody>
                               <!-- looping -->
                             </tbody>
                          </table>
                        </div>
                    </div>
                 </div>
                </div>
			 </div>
           </div>
         </div>
       </div>
    </div>
  </div>


<!-- modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"><b><i class="lnr lnr-plus-circle"></i> TAMBAH DATA KARYAWAN/STAFF</h5></b>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
      <form action="" enctype="multipart/form-data">
         <div class="modal-body">
       <div class="form-group ">
          <label for="namaProduk">Nama Staff</label>
          <input name="namaProduk" type="text" class="form-control" id="nameStaff" 
              aria-describedby="text" placeholder="Nama Produk" required>
       </div>
       <div class="form-group ">
          <label for="username">UserName</label>
          <input name="username" type="text" class="form-control" id="userNameStaff" 
              aria-describedby="text" placeholder="UserName" required>
       </div>
       <div class="form-group ">
          <label for="password">Password</label>
          <input name="password" type="text" class="form-control" id="passwordStaff" 
              aria-describedby="text" placeholder="Password" required>
       </div>
       <div class="form-group ">
          <label for="Rating">Rating</label>
          <input name="Rating" type="number" class="form-control" id="ratingStaff" 
              aria-describedby="number" placeholder="Rating" required>
       </div>
         </div>
         <progress value="0" max="100" id="progressStaff">0%</progress>
           <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
             <a href="{{url('/perhatian')}}" type="button" class="btn btn-primary"><i class="lnr lnr-plus-circle"></i>Tambahkan</a>
          </div>
        </form>
     </div>

     
     
  


@stop


@section('footer')
<!--  -->
<script src="{{asset('admin/assets/scripts/barberhaeril.js')}}"></script>



@stop