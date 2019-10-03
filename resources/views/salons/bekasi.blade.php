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
                            <h3 class="panel-title" style=" text-align: center; color:black; font-weight:bold">DAFTAR SALON DI BEKASI</h3>
                        </div>
                        <div class="panel-body">
                            <table class="table table-bordered" id="tableBekasi">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th style=" text-align: center;">Nama salon</th>
                                    <th style=" text-align: center;">Alamat</th>
                                    <th style=" text-align: center;">Buka/Tutup</th>
                                    <th style=" text-align: center;">Telphone</th>
                                    <th style=" text-align: center;">Website</th>
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


@stop


@section('footer')

<script src="{{asset('admin/assets/scripts/bekasi.js')}}"></script>

@stop