<script src="<?= base_url();?>data/vendor/chart.js/chart.js@2.8.0"></script>
<script>
        var ctx = document.getElementById("myChart").getContext('2d');
        ctx.canvas.width = 800;
        ctx.canvas.height = 320;
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: [
                    'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober','November','Desember'               
                        ],
            datasets: [
            {
              label: "Meja",
              backgroundColor: "rgba(255, 99, 132, 0.4)",
              borderColor: "rgba(255, 99, 132, 1)",
              borderWidth: 1,
              data: [
                    1,2,3,4,5,9
                    ]
                
            },
            {
              label: "Kursi",
              backgroundColor: "rgba(54, 162, 235, 0.4)",
              borderColor: "rgba(54, 162, 235, 1)",
              borderWidth: 1,
              data: [
                    

                    ]
            },
            {
              label: "Lemari",
              backgroundColor: "rgba(255, 206, 86, 0.4)",
              borderColor: "rgba(255, 206, 86, 1)",
              borderWidth: 1,
              data: [
                    


                    ]
            },
            {
              label: "Kitchen Set",
              backgroundColor: "rgba(75, 192, 192, 0.4)",
              borderColor: "rgba(75, 192, 192, 1)",
              borderWidth: 1,
              data: [
                    

                    ]
            },
            {
              label: "Pintu",
              backgroundColor: "rgba(153, 102, 255, 0.4)",
              borderColor: "rgba(153, 102, 255, 1)",
              borderWidth: 1,
              data: [
                    

                    ]
            },            {
              label: "Tempat Tidur",
              backgroundColor: "rgba(255, 159, 64, 0.4)",
              borderColor: "rgba(255, 159, 64, 1)",
              borderWidth: 1,
              data: [
                    

                    ]
            },
            {
              label: "Triplek",
              backgroundColor: "rgba(160, 160, 160, 0.4)",
              borderColor: "rgba(160, 160, 160, 1)",
              borderWidth: 1,
              data: [
                    

                    ]
            },
            {
              label: "Rak Buku",
              backgroundColor: "rgba(255, 0, 127, 0.4)",
              borderColor: "rgba(255, 0, 127, 1)",
              borderWidth: 1,
              data: [
                    

                    ]
            }]
            },
            options: {
                legend: {
                    display: true
                },
                scales: {
                  xAxes:[{
                        gridLines: {
                            color: "rgba(0,0,0,0)", 
                        },
                        ticks:{
                          display: true,
                          maxTicksLimit: 10,
                          autoSkip: false
                      }
                  }],
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        },
                    }]
                }
            },
        });
</script>

