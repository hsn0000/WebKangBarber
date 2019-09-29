   // tambah spray
  
   function uploadSpray() {

    var foto = "";
    var firestore = firebase.firestore();
    var docRef = firestore.collection("Shopping").doc("Spray").collection("Items");
    var progress=document.getElementById('progressSpray')
    var image=document.getElementById("imageSpray").files[0];
    var name = $('#nameSpray').val();
    var price = parseInt($('#priceSpray').val());
    var imageName=image.name;
    var storageRef=firebase.storage().ref('Spray/'+imageName);
    var uploadTask=storageRef.put(image);
    // ambil url image stelah di upload
    uploadTask.snapshot.ref.getDownloadURL().then(function(downloadURL) { 
        foto = downloadURL;
        // alert(foto)
        console.log(foto)
    //  upload firestore
            console.log("Quotes "+name,price);
            docRef.add({
                image:foto,
                name:name,
                price:price,
            }).then(function(){
              
            console.log("Berhasil di tambahkan");

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


// load from firebase firestore

        
        var firestore = firebase.firestore();
        var docRef = firestore.collection("Shopping").doc("Spray").collection("Items");
        var storage = firebase.storage();
        var storageRef = storage.ref();

            $('#tablespray').find('tbody').html('');
            var i=0;

            firestore.collection("Shopping").doc("Spray").collection("Items").get().then(function(querySnapshot) {
            console.log(querySnapshot);
            querySnapshot.forEach(function(doc) {

                i++;
                    displayDoc(i, doc.data(),doc.id);

                    console.log(doc.id, " => ", doc.data());
                });
            });
            function displayDoc(row, data, id) {
 
            let hasil = id.toString();
            console.log(hasil);

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
            new_html += "<button class='btn btn-danger btn-sm ml-5 float-right' input type='button' onclick='deleteSpray(\""+hasil+"\");'><i class='lnr lnr-trash'> Hapus</i></button>";
            new_html += '</td>';
            new_html += '<td>';
            new_html += '<a href="/ubah" class="btn btn-warning btn-sm float-right" data-target="#moadalUbah"> <i class="fa fa-paper-plane-o"> Ubah</i> </a>';
            new_html += '</td>';
            new_html += '</tr>';

            $('#tablespray').find('tbody').append(new_html);


     }

      //  delete data
        
    function deleteSpray(id) {
        console.log(id);
        var firestore = firebase.firestore();    
    
    firestore.collection("Shopping").doc("Spray").collection("Items").doc(id).delete().then(function() {

        Swal.fire({
            title: 'Apa anda yakin?',
            text: "Ingin menghapus file ini?",
            type: 'danger',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yakin !'

        }).then((result) => {
            if (result.value) {
                Swal.fire({
                    position: 'top-end',
                    type: 'success',
                    title: 'File Berhasil Di Hapus',
                    showConfirmButton: false,
                    timer: 1500
            })
            } 
            window.location.href =('/spray');

        })

            }).catch(function(error) {
            alert('error');
            console.error("Error removing document: ", error);
        });
    
    }