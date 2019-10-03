// load file firestore
           var firestore = firebase.firestore();
           var docRef = firestore.collection("AllSalon").doc("Bekasi").collection("Branch");
           $('#tableBekasi').find('tbody').html('');
           var i=0;
   
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
               console.log(hasil)
   
               let new_html = '';
               new_html += '<tr>';
               new_html += '<td>';
               new_html +=  row;
               new_html += '</td>';
               new_html += '<td>';
               new_html += '<a href="/daftkaryawan/'+hasil+'">'+data.name+'</a>';
               new_html += '</td>';
               new_html += '<td>';
               new_html += data.address;
               new_html += '</td>';
               new_html += '<td>';
               new_html += data.openHours;
               new_html += '</td>';
               new_html += '<td>';
               new_html += data.phone;
               new_html += '</td>';
               new_html += '<td>';
               new_html += data.website;
               new_html += '</td>';
               new_html += '</tr>';
   
               $('#tableBekasi').find('tbody').append(new_html);
   
   
       }
   