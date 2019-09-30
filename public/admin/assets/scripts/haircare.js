    //    tambah produc bodycare
  
   function uploadHaircare() { 

    var foto = "";
    var firestore = firebase.firestore();
    var docRef = firestore.collection("Shopping").doc("HairCare").collection("Items");
    var progress=document.getElementById('progressHaircare')
    var image=document.getElementById("imageHaircare").files[0];
    var name = $('#nameHaircare').val();
    var price = parseInt($('#priceHaircare').val());
    var imageName=image.name;
    var storageRef=firebase.storage().ref('HairCare/'+imageName);
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
                window.location.href = "/haircare"
            console.log("Berhasil di tambahkan");

            }).catch(function(error){

                Swal.fire({
                type: 'error',
                title: 'Oops...',
                text: 'Upload HairCare Gagal!',
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
            title: 'Upload HairCare Berhasil',
            showConfirmButton: false,
            timer: 1500
        })
    
      
    })


 }


// load from firebase store

        var firestore = firebase.firestore();
        var docRef = firestore.collection("Shopping").doc("HairCare").collection("Items");
        var storage = firebase.storage();
        var storageRef = storage.ref();

        $('#tableHair').find('tbody').html('');
        var i=0;

        firestore.collection("Shopping").doc("HairCare").collection("Items").get().then(function(querySnapshot) {
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
        new_html += "<button class='btn btn-danger btn-sm ml-5 float-right' input type='button' onclick='deleteHaircare(\""+hasil+"\");'><i class='lnr lnr-trash'> Hapus</i></button>";
        new_html += '</td>';
        new_html += '<td>';
        new_html += '<a href="/ubahhaircare/'+hasil+'" class="btn btn-warning btn-sm float-right" data-target="#moadalUbah"> <i class="fa fa-paper-plane-o"> Ubah</i> </a>';
        new_html += '</td>';
        new_html += '</tr>';

        $('#tableHair').find('tbody').append(new_html);


 }


 
  //  delete data
        
  function deleteHaircare(id) {
    console.log(id);
    var firestore = firebase.firestore();    

  firestore.collection("Shopping").doc("HairCare").collection("Items").doc(id).delete().then(function() {

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
        window.location.href =('/haircare');

    })

        }).catch(function(error) {
        alert('error');
        console.error("Error removing document: ", error);
    });

}





