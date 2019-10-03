// load file firestore
var firestore = firebase.firestore();
var docRef = firestore.collection("AllSalon").doc("Bogor").collection("Branch").doc("UWxToOJkMlQ3bbfcjIsb").collection("Barber");
$('#tableHaeril').find('tbody').html('');
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
    new_html += data.name;
    new_html += '</td>';
    new_html += '<td>';
    new_html += data.username;
    new_html += '</td>';
    new_html += '<td>';
    new_html += '<p style="text-align: center;">'+data.rating+'</p>';
    new_html += '</td>';
    new_html += '<td>';
    new_html += '<p>1234**</p>';
    new_html += '</td>';
    new_html += '</tr>';

    $('#tableHaeril').find('tbody').append(new_html);


}
