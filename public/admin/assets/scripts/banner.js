    
//   tambah banner
        function upload() {

            var image=document.getElementById("imageBanner").files[0];
            var deskripsi = $('#deskBanner').val();
            var imageName=image.name;
            var storageRef=firebase.storage().ref('Banner/'+imageName);
            var uploadTask=storageRef.put(image);

            //Firestore
            var firestore = firebase.firestore();
            var docRef = firestore.doc("Banner/4sy3TgaJ9HZp2XAZNaTest ");
            console.log("Quotes "+deskripsi);
            docRef.set({
                image:imageName,
                deskripsi:deskripsi
            }).then(function(){
            Swal.fire(
            'Berhasil!',
            'Upload Banner Sukses!',
            'success'
            )
                console.log("Quote Save");
            }).catch(function(error){

                Swal.fire({
                type: 'error',
                title: 'Oops...',
                text: 'Upload Banner Gagal!',
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
            window.location.href = "/banner"

            uploadTask.snapshot.ref.getDownloadURL().then(function(downloadURL) { 
            console.log(downloadURL);

        })

     })

  }

//    <!-- load image dari firebase -->
            
        var storage = firebase.storage();
        var storageRef = storage.ref();

        $('#tablebanner').find('tbody').html('');
            var i=0;
            storageRef.child('Banner/').listAll().then(function (result) {
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
                new_html += '<img src=" '+url+'" width="100px" style="float:left">';
                new_html += '</td>';
                new_html += '<td>';
                new_html += 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, quibusdam tenetur et corrupti quae,';
                new_html += '</td>';
                new_html += '<td>';
                new_html += '<a href="#" class="btn btn-danger btn-sm ml-5 float-right delete" siswa-id=""><i class="lnr lnr-trash"> Hapus</i></a>';
                new_html += '<a href="#" class="btn btn-warning btn-sm float-right"> <i class="fa fa-paper-plane-o"> Ubah</i> </a>';
                new_html += '</td>';
                new_html += '</tr>';
            
                $('#tablebanner').find('tbody').append(new_html);

        });

   }
        