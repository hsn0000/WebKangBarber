  // tambah pomade
  
  function uploadPostModel() { 

    var foto = "";
    var firestore = firebase.firestore();
    var docRef = firestore.collection("PostModel");
    var progress=document.getElementById('progressPostModel')
    var image=document.getElementById("imagePostModel").files[0];
    var name = $('#namePostModel').val();
    var deskripsi = $('#deskPostModel').val();
    var imageName=image.name;
    var storageRef=firebase.storage().ref('PostModel/'+imageName);
    var uploadTask=storageRef.put(image);
    // ambil url image stelah di upload
    uploadTask.snapshot.ref.getDownloadURL().then(function(downloadURL) { 
        foto = downloadURL;
        // alert(foto)
        console.log(foto)
    //  upload firestore
            var date = new Date();
            var dd = date.getDate();
            var mm = date.getMonth();
            var yyy = date.getFullYear();
            console.log("Quotes "+name,deskripsi);
            docRef.add({
                tanggal:dd + '/' + mm +'/'+yyy,
                image:foto,
                name:name,
                deskripsi:deskripsi,
            }).then(function(){
              window.location.href = "/postmodel";
            console.log("Berhasil di tambahkan");

            }).catch(function(error){

                Swal.fire({
                type: 'error',
                title: 'Oops...',
                text: 'Upload Post Gagal!',
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
            title: 'Upload Post Berhasil',
            showConfirmButton: false,
            timer: 1500
        })
    
      
    })


}


// load from firebase firestore

        
        var firestore = firebase.firestore();
        var docRef = firestore.collection("PostModel");
        var storage = firebase.storage();
        var storageRef = storage.ref();

            $('#tablePostModel').find('tbody').html('');
            var i=0;

            firestore.collection("PostModel").get().then(function(querySnapshot) {
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
            new_html += data.tanggal;
            new_html += '</p>';
            new_html += '<td>';
            new_html += '<img src=" '+data.image+'" width="110px" style="float:left">';
            new_html += '</td>';
            new_html += '<td>';
            new_html += '<p style="color:black"><b>"'+data.name+'"</b></p>';
            new_html += '</td>';
            new_html += '<td>';
            new_html += '<p>"'+data.deskripsi+'"</p>';
            new_html += '</td>';
            new_html += '<td>';
            new_html += '<a href="ubahpostmodel/'+hasil+'" class="btn btn-warning btn-sm float-right" data-target="#moadalUbah"> <i class="fa fa-paper-plane-o"> Ubah</i> </a>';
            new_html += '</td>';
            new_html += '<td>';
            new_html += "<button class='btn btn-danger btn-sm ml-5 float-right' input type='button' onclick='deletePost(\""+hasil+"\");'><i class='lnr lnr-trash'> Hapus</i></button>";
            new_html += '</td>';
            new_html += '<td>';
            new_html += '<a href="" class="btn btn-info btn-sm ml-5 float-right"><i class="lnr lnr-thumbs-up"></i> Pratinjau </a>';
            new_html += '</td>';
            new_html += '</tr>';
           
            $('#tablePostModel').find('tbody').append(new_html);


     }

    //  delete data
        
    function deletePost(id) {
        console.log(id);
        var firestore = firebase.firestore();    
    
    firestore.collection("PostModel").doc(id).delete().then(function() {

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
            window.location.href = "/postmodel";

        })

            }).catch(function(error) {
            alert('error');
            console.error("Error removing document: ", error);
        });
    
    }

