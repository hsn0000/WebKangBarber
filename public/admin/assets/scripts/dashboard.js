

     	var ctx = document.getElementById('myChart');
         var ctx = document.getElementById('myChart').getContext('2d');
         var ctx = $('#myChart');
         var ctx = 'myChart';
     
         var ctx = document.getElementById('myChart');
         var myChart = new Chart(ctx, {
         type: 'bar',
         data: {
             labels: ['App Terdownloads', 'Produk Terjual', 'Kunjungan Website', 'Pengguna aktip'],
             datasets: [{
                 label: 'Saat Ini',
                 data: [190, 175, 150, 112],
                 backgroundColor: [
                     'rgba(255, 99, 132, 0.2)',
                     'rgba(54, 162, 235, 0.2)',
                     'rgba(255, 206, 86, 0.2)',
                     'rgba(75, 192, 192, 0.2)',
                 ],
                 borderColor: [
                     'rgba(255, 99, 132, 1)',
                     'rgba(54, 162, 235, 1)',
                     'rgba(255, 206, 86, 1)',
                     'rgba(75, 192, 192, 1)',
                 ],
                 borderWidth: 1
             }]
         },
         options: {
             scales: {
                 yAxes: [{
                     ticks: {
                         beginAtZero: true
                     }
                 }]
             }
         }
     });