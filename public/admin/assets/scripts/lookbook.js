  // tambah lookbook 
  
       function uploadBook() {

            var foto = "";
            var firestore = firebase.firestore();
            var docRef = firestore.collection("Lookbook");
            var progress=document.getElementById('progressLookbook')
            var image=document.getElementById("imageLookbook").files[0];
            var deskripsi = $('#deskLookbook').val();
            var imageName=image.name;
            var storageRef=firebase.storage().ref('Lookbook/'+imageName);
            var uploadTask=storageRef.put(image);
    // ambil url image stelah di upload
            uploadTask.snapshot.ref.getDownloadURL().then(function(downloadURL) { 
                foto = downloadURL;
                // alert(foto)
                console.log(foto)
  //  upload firestore
                    console.log("Quotes "+deskripsi);
                    docRef.add({
                        image:foto,
                        deskripsi:deskripsi
                    }).then(function(){
                       
                     console.log("Deskripsi di simpan");
           
                    }).catch(function(error){
           
                        Swal.fire({
                        type: 'error',
                        title: 'Oops...',
                        text: 'Upload LookBook Gagal!',
                    })
                        console.log("Gagal: ",error);
                        
                });
               

            })
             
            uploadTask.on('state_changed', function(snapshot) {
                //
                var percent=(snapshot.bytesTransferred/snapshot.totalBytes)*100;    
                progress.value = percent
                console.log("upload is" + progress + "done");

                
    
                },function(error) {
                
                console.log(error.message);
    
                },function() {
                // handle upload suksesful on complete
                Swal.fire({
                    position: 'top-end',
                    type: 'success',
                    title: 'Upload LookBook Berhasil',
                    showConfirmButton: false,
                    timer: 1500
                })
             
              
        })

        
 }

//    <!-- load image dari firebase -->
            
        var storage = firebase.storage();
        var storageRef = storage.ref();

        $('#tablelookbook').find('tbody').html('');
            var i=0;
            storageRef.child('Lookbook/').listAll().then(function (result) {
                result.items.forEach(function (imageRef) {
                
                    i++;
                    displayImage(i, imageRef); 
                });

            });
            
            function displayImage(row, images) {

                images.getDownloadURL().then(function (url) {  

                console.log(url);

                let new_html = '';
                new_html += '<tr>';
                new_html += '<td>';
                new_html += '<img src=" '+url+'" width="250px" style="float:left">';
                new_html += '</td>';
                new_html += '<td>';
                new_html += 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, quibusdam tenetur et corrupti quae,';
                new_html += '</td>';
                new_html += '<td>';
                new_html += '<button class="btn btn-danger btn-sm ml-5 float-right delete" onclick="delete()" siswa-id=""><i class="lnr lnr-trash"> Hapus</i></button>';
                new_html += '</td>';
                new_html += '<td>';
                new_html += '<button class="btn btn-warning btn-sm float-right"> <i class="fa fa-paper-plane-o"> Ubah</i> </button>';
                new_html += '</td>';
                new_html += '</tr>';
            
                $('#tablelookbook').find('tbody').append(new_html);
        });
   }
//    function delete(row, images){
//     storageRef.child('Lookbook/').listAll().delete().then(function() {
//         // File deleted successfully
//       }).catch(function(error) {
//         // Uh-oh, an error occurred!
//       });
      
// }
        
