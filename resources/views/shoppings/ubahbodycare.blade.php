@extends('layouts.master')

@section('header')
  {{!! config('barber.title_ubahBodycare') !!}}
@stop

@section('content')

<div class="main">
    <div class="main-content">
       <div class="container-fluid">
         <div class="row">
          <div class="col-md-12">
           <div class="panel">
				<div class="panel-heading">
				<h3 class="panel-title"><i class="fa fa-paper-plane-o"> UBAH PRODUK BODYCARE</i> </h3>
				</div>
				<div class="panel-body">
              <form action="" method="" enctype="multipart/form-data">
           {{csrf_field()}}
        <div class="form-group ">
          <img src="" id="imageLamaBodycare" width ="250" alt="Gambar Lama"> <br><br>
          <label for="avatar">Ambil Gambar Baru</label>
          <input type="file" value="upload" name="avatar" class="form-control padding-bottom-30" id="imageUbahBodycare" required>
       </div>
       <div class="form-group ">
          <label for="deskripsi">Nama Produk</label>
          <input name="deskripsi" type="text" class="form-control" id="nameProdukBodycare" 
              aria-describedby="text" placeholder="Nama Produk" required>
       </div>
        <div class="form-group ">
            <label for="harga">Harga</label>
            <input name="harga" type="number" class="form-control" id="priceBodycareUpdate" 
                aria-describedby="number" placeholder="Harga Barang" required>
        </div>
         </div>
         <progress value="0" max="100" id="progressUbahBodycare">0%</progress> <br><br>
       <button type="button" class="btn btn-warning mt-5 " onclick="ubahBodycare();" style="margin-left: 25px;"><i class="fa fa-paper-plane-o"></i> Update</button> <br><br>
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
               var docRef = firebase.firestore().collection("Shopping").doc("BodyCare").collection("Items").doc(id);

         docRef.get().then(function(doc) {
            if (doc.exists) {
               //   console.log("Document data:", doc.data().image);
               $('#imageLamaBodycare').attr('src', doc.data().image)
               $('#nameProdukBodycare').val(doc.data().name)
               $('#priceBodycareUpdate').val(doc.data().price)
            } else {
               // doc.data() will be undefined in this case
               console.log("Id tidak ada !");
            }
         }).catch(function(error) {
            
            console.log("Error getting document:", error);
       });
  
    });      
                
            
      //   update data existing  

          function ubahBodycare() {

            var foto = "";
            var id = <?php echo json_encode($id) ?>;
            var firestore = firebase.firestore();
            var docRef = firestore.collection("Shopping").doc("BodyCare").collection("Items").doc(id);
            var progress=document.getElementById('progressUbahBodycare')
            var image=document.getElementById("imageUbahBodycare").files[0];
            var name = $('#nameProdukBodycare').val();
            var price =  parseInt($('#priceBodycareUpdate').val());
            var imageName=image.name;
            var storageRef=firebase.storage().ref('BodyCare/'+imageName);
            var uploadTask=storageRef.put(image);
         // ambil url image stelah di upload
            uploadTask.snapshot.ref.getDownloadURL().then(function(downloadURL) { 
               foto = downloadURL;
               // alert(foto)
               console.log(foto)
         //  upload firestore
                     console.log("Quotes "+name+price);
                     docRef.update({
                        image:foto,
                        name:name,
                        price:price,
                     }).then(function(){
                        window.location.href = "/bodycare"
                     console.log("name di simpan");
                        
            
                     }).catch(function(error){
            
                        Swal.fire({
                        type: 'error',
                        title: 'Oops...',
                        text: 'Update Bodycare Gagal!',
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
                     title: 'Udate Bodycare Berhasil',
                     showConfirmButton: false,
                     timer: 1500
               })
               
         })

      }


      </script>


@stop