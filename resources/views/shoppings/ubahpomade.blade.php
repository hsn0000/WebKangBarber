@extends('layouts.master')

@section('header')
  {{!! config('barber.title_ubahPomade') !!}}
@stop

@section('content')

<div class="main">
    <div class="main-content">
       <div class="container-fluid">
         <div class="row">
          <div class="col-md-12">
           <div class="panel">
				<div class="panel-heading">
				<h3 class="panel-title"><i class="fa fa-paper-plane-o"> UBAH PRODUK POMADE</i> </h3>
				</div>
				<div class="panel-body">
              <form action="" method="" enctype="multipart/form-data">
           {{csrf_field()}}
        <div class="form-group ">
          <img src="" id="imageLamaPomade" width ="250" alt="Gambar Lama"> <br><br>
          <label for="avatar">Ambil Gambar Baru</label>
          <input type="file" value="upload" name="avatar" class="form-control padding-bottom-30" id="imageUbahPomade" required>
       </div>
       <div class="form-group ">
          <label for="deskripsi">Nama Produk</label>
          <input name="deskripsi" type="text" class="form-control" id="nameProdukPomade" 
              aria-describedby="text" placeholder="Nama Produk" required>
       </div>
        <div class="form-group ">
            <label for="harga">Harga</label>
            <input name="harga" type="number" class="form-control" id="pricePomadeUpdate" 
                aria-describedby="number" placeholder="Harga Barang" required>
        </div>
         </div>
         <progress value="0" max="100" id="progressUbahPomade">0%</progress> <br><br>
       <button type="button" class="btn btn-warning mt-5 " onclick="ubahPomade();" style="margin-left: 25px;"><i class="fa fa-paper-plane-o"></i> Update</button> <br><br>
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
               var docRef = firebase.firestore().collection("Shopping").doc("Wax").collection("Items").doc(id);

         docRef.get().then(function(doc) {
            if (doc.exists) {
               //   console.log("Document data:", doc.data().image);
               $('#imageLamaPomade').attr('src', doc.data().image)
               $('#nameProdukPomade').val(doc.data().name)
               $('#pricePomadeUpdate').val(doc.data().price)
            } else {
               // doc.data() will be undefined in this case
               console.log("Id tidak ada !");
            }
         }).catch(function(error) {
            
            console.log("Error getting document:", error);
       });
  
    });      
                
            
      //   update data existing  

          function ubahPomade() {

            var foto = "";
            var id = <?php echo json_encode($id) ?>;
            var firestore = firebase.firestore();
            var docRef = firestore.collection("Shopping").doc("Wax").collection("Items").doc(id);
            var progress=document.getElementById('progressUbahPomade')
            var image=document.getElementById("imageUbahPomade").files[0];
            var name = $('#nameProdukPomade').val();
            var price =  parseInt($('#pricePomadeUpdate').val());
            var imageName=image.name;
            var storageRef=firebase.storage().ref('Pomade/'+imageName);
            var uploadTask=storageRef.put(image);
         // ambil url image stelah di upload
            uploadTask.snapshot.ref.getDownloadURL().then(function(downloadURL) { 
               foto = downloadURL;
               // alert(foto)
               console.log(foto)
         //  upload firestore
                     console.log("Quotes "+name);
                     docRef.update({
                        image:foto,
                        name:name,
                        price:price,
                     }).then(function(){
                        window.location.href = "/pomade"
                     console.log("name di simpan");
                        
            
                     }).catch(function(error){
            
                        Swal.fire({
                        type: 'error',
                        title: 'Oops...',
                        text: 'Update Banner Gagal!',
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
                     title: 'Udate Pomade Berhasil',
                     showConfirmButton: false,
                     timer: 1500
               })
              
            
               
         })


      }


      </script>


@stop