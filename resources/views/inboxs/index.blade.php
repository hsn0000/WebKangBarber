@extends('layouts.master')

@section('header')
  {{!! config('barber.title_inbox') !!}}
@stop

@section('content')
  <div class="main">
    <div class="main-content">
       <div class="container-fluid">
         <div class="row">
          <div class="col-md-12">
           <div class="panel">
						<div class="panel-heading">
              <h3 class="panel-title" style="color:black;font-weight:bold;"><i class="lnr lnr-inbox"></i>KOTAK MASUK</h3>
              <p id="p-banner">Kritik dan saran masuk dari pelanggan</p>
				</div>
					<div class="panel-body">
			           <table class="table table-hover" id="tableinbox">
							<thead class="thead-info">
			         <tr>
                   <th style="">NAMA</th>
                   <th style="">EMAIL</th>
                   <th style="">SUBJECT</th>
                   <th style="">PESAN</th>
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
      var docRef = firestore.collection("Inbok");
     // const db = firebase.firestore();
      $('#tableInbox').find('tbody').html('');
            var i=0;

        firestore.collection("Inbox").get().then(function(querySnapshot) {
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
                new_html += data.name;
                new_html += '</td>';
                new_html += '<td>';
                new_html += data.email;
                new_html += '</td>';
                new_html += '<td>';
                new_html += data.subject;
                new_html += '</td>';
                new_html += '<td>';
                new_html += data.message;
                new_html += '</td>';
                new_html += '</tr>';
            
                $('#tableinbox').find('tbody').append(new_html);
 }


  </script>


@stop

