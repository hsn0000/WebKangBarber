@extends('layouts.master')

@section('header')
  {{!! config('barber.title_dashboard') !!}}
@stop

@section('content')

<div class="main">
    <div class="main-content">
       <div class="container-fluid">
         <div class="row">
          <div class="col-md-6">
            
            <div class="panel">
             <div class="panel-heading">
               <h3 class="panel-title"><b><i class="lnr lnr-bookmark"></i> SELAMAT DATANG ADMIN </b></h3>
              </div>
               <div class="panel-body">
                 <table class="table table-bordered">
                  <thead>
                     <tr>
                       <th>BANNER</th>
                       <th>LOOKBOOK</th>
                     </tr> 
                  </thead>
                         <tbody>
                      <tr>
                         <td>satu </td>
                         <td>dua</td>
                      </tr>
                             </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            <!-- Total Siswa -->
                   <div class="col-md-3">
					  <div class="metric">
					    <span class="icon"><i class="lnr lnr-file-empty"></i></span>
						 <p>
						  <span class="number">1</span>
						  <span class="title">TOTAL BANNER</span>
					     </p>
					  </div>
                    </div>
			<!-- Akhir Total Siswa  -->

            <div class="col-md-3">
					  <div class="metric">
					    <span class="icon"><i class="lnr lnr-dice"></i></span>
						 <p>
						  <span class="number"> 2</span>
						  <span class="title">TOTAL LOOKBOOK</span>
					     </p>
					  </div>
                    </div>

                </div>
            </div>
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
