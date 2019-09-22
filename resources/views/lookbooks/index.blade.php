@extends('layouts.master')

@section('content')
  <div class="main">
    <div class="main-content">
       <div class="container-fluid">
         <div class="row">
          <div class="col-md-12">
           <div class="panel">
						<div class="panel-heading">
              <h3 class="panel-title"><B><i class="lnr lnr-dice"> LOOKBOOK</B></i></h3>
             @if(session('sukses'))
			      	<div class="aler alert-success" role="alert">
				        {{session('sukses')}}
			      	</div>
			    	@endif
              <div class="right">
              <button class="btn" data-toggle="modal" data-target="#exampleModal" id="tambahEvident" ><b><i class="lnr lnr-plus-circle" >Tambah Evident Lookbook</i></b></button>
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
            <h5 class="modal-title" id="exampleModalLabel"><b><i class="lnr lnr-plus-circle"></i> TAMBAH LOOKBOOK</h5></b>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
      <form action="" enctype="multipart/form-data">
         <div class="modal-body">
       <div class="form-group ">
          <label for="avatar">Ambil Gambar</label>
          <input type="file" value="upload" name="avatar" class="form-control padding-bottom-30" id="imageLookbook">
       </div>
       <div class="form-group ">
          <label for="deskripsi">Deskripsi</label>
          <input name="deskripsi" type="text" class="form-control" id="deskLookbook" 
              aria-describedby="text" placeholder="Deskripsi" required>
       </div>
         </div>
         <progress value="0" max="100" id="uploadProgress">0%</progress>
           <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
              <button type="button" class="btn btn-primary" onclick=" uploadBook();"><i class="lnr lnr-plus-circle"></i>Tambahkan</button>
          </div>
        </form>
     </div>


@stop




@section('footer')

   <script>
       function uploadBook() {

            var image=document.getElementById("imageLookbook").files[0];
            var deskripsi = $('#deskLookbook').val();
            var imageName=image.name;
            var storageRef=firebase.storage().ref('Lookbook/'+imageName);
            var uploadTask=storageRef.put(image);

            //Firestore
            var firestore = firebase.firestore();
            var docRef = firestore.doc("Lookbook/4sy3TgaJ9HZp2XAZNaTest ");
            console.log("Quotes "+deskripsi);
            docRef.set({
                image:imageName,
                deskripsi:deskripsi
            }).then(function(){
              Swal.fire(
              'Berhasil!',
              'Upload LookBook Sukses!',
              'success'
            )
                console.log("Quote Save");
            }).catch(function(error){

                Swal.fire({
                  type: 'error',
                  title: 'Oops...',
                  text: 'Upload LookBook Gagal!',
              })
                console.log("Got an error: ",error);
            });


            uploadTask.on('state_changed', function(snapshot) {
              //
            var progress=(snapshot.bytesTransferred/snapshot.totalBytes)*100;

              console.log("upload is" + progress + "done");

            },function(error) {

            console.log(error.message);

            },function() {
            // handle upload suksesful on complete
            Swal.fire(
                'Berhasil!',
                'Upload Banner Sukses!',
                'success'
              )
            window.location.href = "{{url('/lookbook')}}"

            uploadTask.snapshot.ref.getDownloadURL().then(function(downloadURL) { 
            console.log(downloadURL);

           })

        })

    }


   </script>
   
    <script>
       $(document).ready(function() {
          $('#datatable').DataTable()

    });

    </script>
@stop

