
            // POSTING BERITA
            
            var docRef = firebase.firestore().collection("Posting");
			var firestore = firebase.firestore();
			var storage = firebase.storage();
			var storageRef = storage.ref();

            $('#post').find('tbody').html('');
            var i = 0;

            docRef.get().then(function(querySnapshot) {
            console.log(querySnapshot);
            querySnapshot.forEach(function(doc) {

                i++;
                    displayDoc(i, doc.data(),doc.id);

                    console.log(doc.id, " => ", doc.data());
                });
            });
            function displayDoc(row, data, id) {
 
				let hasil = id.toString();

				let new_html = '';
				new_html = '<div class="col-lg-3 col-md-6 single-blog"><div class="thumb"><img class="img-fluid"  src="'+data.image+'" alt=""></div><p class="meta">'+data.tanggal+' Dari | <a href="#"> '+data.dari+'</a></p><a href="#"><h5>'+data.judul+'</h5></a><p>'+data.deskripsi+'.</p><a href="#" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Details</span><span class="lnr lnr-arrow-right"></span></a></div>'; 
            	$('#post').find('#postItem').append(new_html);
			}

			
         docRef.get().then(function(doc) {
            if (doc.exists) {
               //   console.log("Document data:", doc.data().image);
              
            } else {
               // doc.data() will be undefined in this case
               console.log("Id tidak ada !");
            }
         }).catch(function(error) {
            
            console.log("Error getting document:", error);
       });
  
    
