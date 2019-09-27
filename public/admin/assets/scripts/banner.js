  // tambah lookbook 
  
  function uploadBanner() {

    var foto = "";
    var firestore = firebase.firestore();
    var docRef = firestore.collection("Banner");
    var progress=document.getElementById('progressBanner')
    var image=document.getElementById("imageBanner").files[0];
    var deskripsi = $('#deskBanner').val();
    var imageName=image.name;
    var storageRef=firebase.storage().ref('Banner/'+imageName);
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
                text: 'Upload Banner Gagal!',
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
            title: 'Upload Banner Berhasil',
            showConfirmButton: false,
            timer: 1500
        })
     
      
 })


}

    //    <!-- load image dari firebase -->
    var firestore = firebase.firestore();
    var docRef = firestore.collection("Banner");
    var storage = firebase.storage();
    var storageRef = storage.ref();
   
    $('#tablebanner').find('tbody').html('');
    var i=0;

    firestore.collection("Banner").get().then(function(querySnapshot) {
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
        new_html += data.deskripsi;
        new_html += '</td>';
        new_html += '<td>';
        new_html += '<button class="btn btn-danger btn-sm ml-5 float-right delete" onclick="delete()" siswa-id=""><i class="lnr lnr-trash"> Hapus</i></button>';
        new_html += '</td>';
        new_html += '<td>';
        new_html += '<a href="/ubah" class="btn btn-warning btn-sm float-right" data-target="#moadalUbah"> <i class="fa fa-paper-plane-o"> Ubah</i> </a>';
        new_html += '</td>';
        new_html += '</tr>';

        $('#tablebanner').find('tbody').append(new_html);


    }



