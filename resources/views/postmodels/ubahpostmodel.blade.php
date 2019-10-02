@extends('layouts.master')

@section('header')
  {{!! config('barber.title_ubahPostmodel') !!}}
@stop

@section('content')

<div class="main">
    <div class="main-content">
       <div class="container-fluid">
         <div class="row">
          <div class="col-md-12">
           <div class="panel">
				<div class="panel-heading">
				<h3 class="panel-title"><i class="fa fa-paper-plane-o"> UBAH POST MODEL RAMBUT</i> </h3>
				</div>
				<div class="panel-body">
              <form action="" method="" enctype="multipart/form-data">
           {{csrf_field()}}
        <div class="form-group ">
          <img src="" id="imageLamaPostModel" width ="250" alt="Gambar Lama"> <br><br>
          <label for="avatar">Ambil Gambar Baru</label>
          <input type="file" value="upload" name="avatar" class="form-control padding-bottom-30" id="ubahImagePostModel" required>
       </div>
       <div class="form-group ">
          <label for="Judul">Nama Model Rambut</label>
          <input name="Judul" type="text" class="form-control" id="ubahNamePostModel" 
              aria-describedby="text" placeholder="Nama Model Rambut" required>
       </div>
       <div class="form-group">
         <label for="deskripsi">Deskripsi</label>
         <textarea name="deskripsi" class="form-control" placeholder="Deskripsi" value="" id="ubahDeskPostModel" rows="3" ></textarea>
       </div>
         </div>
         <progress value="0" max="100" id="progressUbahPostModel">0%</progress> <br><br>
       <button type="button" class="btn btn-warning mt-5 " onclick="ubahPostModel();" style="margin-left: 25px;"><i class="fa fa-paper-plane-o"></i> Update</button> <br><br>
         </div>
            </form>	
          </div>
         </div>
       </div>
    </div>
</div>

@stop


@section('footer')

      <script>
       
      //  get data existing

            $(document).ready(function() {
               var id = <?php echo json_encode($id) ?>;
               var docRef = firebase.firestore().collection("PostModel").doc(id);

         docRef.get().then(function(doc) {
            if (doc.exists) {
               //   console.log("Document data:", doc.data().image);
               $('#imageLamaPostModel').attr('src', doc.data().image)
               $('#ubahNamePostModel').val(doc.data().name)
               $('#ubahDeskPostModel').val(doc.data().deskripsi)
            } else {
               // doc.data() will be undefined in this case
               console.log("Id tidak ada !");
            }
         }).catch(function(error) {
            
            console.log("Error getting document:", error);
       });
  
    });      
                
            
      //   update data existing  

          function ubahPostModel() {

            var foto = "";
            var id = <?php echo json_encode($id) ?>;
            var firestore = firebase.firestore();
            var docRef = firestore.collection("PostModel").doc(id);
            var progress=document.getElementById('progressUbahPostModel')
            var image=document.getElementById("ubahImagePostModel").files[0];
            var name = $ ("#ubahNamePostModel").val();
            var deskripsi = $('#ubahDeskPostModel').val();         
            var date = new Date();
            var dd = date.getDate();
            var mm = date.getMonth();
            var yyy = date.getFullYear();
            var imageName=image.name;
            var storageRef=firebase.storage().ref('PostModel/'+imageName);
            var uploadTask=storageRef.put(image);
         // ambil url image stelah di upload
            uploadTask.snapshot.ref.getDownloadURL().then(function(downloadURL) { 
               foto = downloadURL;
               // alert(foto)
               console.log(foto)
         //  upload firestore
                     console.log("Quotes "+name+deskripsi);
                     docRef.update({
                       tanggal: dd + '/' + mm +'/'+yyy,
                        image:foto,
                        name:name,
                        deskripsi:deskripsi
                     }).then(function(){

                        window.location.href = "/postmodel"
                     console.log("Deskripsi di simpan");
                        
            
                     }).catch(function(error){
            
                        Swal.fire({
                        type: 'error',
                        title: 'Oops...',
                        text: 'Update Postingan Gagal!',
                     }) 
                        console.log("Gagal: ",error);
                            
               });

            })
            
            uploadTask.on('state_changed', function(snapshot) {
               //
               var percent=(snapshot.bytesTransferred/snapshot.totalBytes)*100;    
               progress.value = percent
               console.log("upload telah" + progress + "selesai");

               },function(error) {
                  alert('error')
               console.log(error.message);

               },function() {
               // handle upload suksesful on complete
               Swal.fire({
                     position: 'top-end',
                     type: 'success',
                     title: 'Udate Postingan Berhasil',
                     showConfirmButton: false,
                     timer: 1500
               })
               
         })


      }


      </script>


@stop