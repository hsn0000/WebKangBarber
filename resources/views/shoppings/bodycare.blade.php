@extends('layouts.master')

@section('content')
  <div class="main"> 
    <div class="main-content">
       <div class="container-fluid">
         <div class="row">
          <div class="col-md-12">
           <div class="panel">
						<div class="panel-heading">
              <h3 class="panel-title" style="color:black;font-weight:bold;"><i class="lnr lnr-cart">BODYCARE</i></h3>
             @if(session('sukses'))
			      	<div class="aler alert-success" role="alert">
				        {{session('sukses')}}
			      	</div>
			    	@endif
              <div class="right">
               </div>
							</div>
								<div class="panel-body">
									<table class="table table-hover" id="tableBody">
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

     
  


@stop




@section('footer')

  <script>
      
      var firestore = firebase.firestore();
      var docRef = firestore.collection("Shopping").doc("BodyCare").collection("Items");
      var storage = firebase.storage();
      var storageRef = storage.ref();
    
      $('#tableBody').find('tbody').html('');
      var i=0;

      firestore.collection("Shopping").doc("BodyCare").collection("Items").get().then(function(querySnapshot) {
      console.log(querySnapshot);
      querySnapshot.forEach(function(doc) {

      i++;
          displayDoc(i, doc.data());

          console.log(doc.id, " => ", doc.data());
        });
    });
    function displayDoc(row, data) {

        console.log(data);

        let new_html = '';
        new_html += '<tr>';
        new_html += '<td>';
        new_html += '<img src=" '+data.image+'" width="250px" style="float:left">';
        new_html += '</td>';
        new_html += '<td>';
        new_html += data.name;
        new_html += '</td>';
        new_html += '<td>';
        new_html += '<p>Rp.('+data.price+')</p>';
        new_html += '</td>';
        new_html += '<td>';
        new_html += '<button class="btn btn-danger btn-sm ml-5 float-right delete" onclick="delete()" siswa-id=""><i class="lnr lnr-trash"> Hapus</i></button>';
        new_html += '</td>';
        new_html += '<td>';
        new_html += '<a href="/ubah" class="btn btn-warning btn-sm float-right" data-target="#moadalUbah"> <i class="fa fa-paper-plane-o"> Ubah</i> </a>';
        new_html += '</td>';
        new_html += '</tr>';

        $('#tableBody').find('tbody').append(new_html);


    }


  </script>


    
@stop

