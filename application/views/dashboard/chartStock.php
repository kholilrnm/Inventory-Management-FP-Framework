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
              backgroundColor: "rgba(255, 0, 255, 0.4)",
              borderColor: "rgba(255, 0, 255, 1)",
              borderWidth: 1,
              data: [

                    <?= $calc_mejaJanuari; ?>,
                    <?= $calc_mejaFebruari; ?>,
                    <?= $calc_mejaMaret; ?>,
                    <?= $calc_mejaApril; ?>, 
                    <?= $calc_mejaMei; ?>,
                    <?= $calc_mejaJuni; ?>,
                    <?= $calc_mejaJuli; ?>,
                    <?= $calc_mejaAgustus; ?>,
                    <?= $calc_mejaSeptember; ?>,
                    <?= $calc_mejaOktober; ?>,
                    <?= $calc_mejaNovember; ?>,
                    <?= $calc_mejaDesember; ?>

                    
                    ]
                
            },
            {
              label: "Kursi",
              backgroundColor: "rgba(54, 162, 235, 0.4)",
              borderColor: "rgba(54, 162, 235, 1)",
              borderWidth: 1.2,
              data: [

                    <?= $calc_kursiJanuari; ?>,
                    <?= $calc_kursiFebruari; ?>,
                    <?= $calc_kursiMaret; ?>,
                    <?= $calc_kursiApril; ?>, 
                    <?= $calc_kursiMei; ?>,
                    <?= $calc_kursiJuni; ?>,
                    <?= $calc_kursiJuli; ?>,
                    <?= $calc_kursiAgustus; ?>,
                    <?= $calc_kursiSeptember; ?>,
                    <?= $calc_kursiOktober; ?>,
                    <?= $calc_kursiNovember; ?>,
                    <?= $calc_kursiDesember; ?>

                    ]
            },
            {
              label: "Lemari",
              backgroundColor: "rgba(255, 206, 86, 0.4)",
              borderColor: "rgba(255, 206, 86, 1)",
              borderWidth: 1.5,
              data: [

                    <?= $calc_lemariJanuari; ?>,
                    <?= $calc_lemariFebruari; ?>,
                    <?= $calc_lemariMaret; ?>,
                    <?= $calc_lemariApril; ?>, 
                    <?= $calc_lemariMei; ?>,
                    <?= $calc_lemariJuni; ?>,
                    <?= $calc_lemariJuli; ?>,
                    <?= $calc_lemariAgustus; ?>,
                    <?= $calc_lemariSeptember; ?>,
                    <?= $calc_lemariOktober; ?>,
                    <?= $calc_lemariNovember; ?>,
                    <?= $calc_lemariDesember; ?>

                    ]
            },
            {
              label: "Kitchen Set",
              backgroundColor: "rgba(75, 192, 192, 0.4)",
              borderColor: "rgba(75, 192, 192, 1)",
              borderWidth: 1.4,
              data: [

                    <?= $calc_kitchenJanuari; ?>,
                    <?= $calc_kitchenFebruari; ?>,
                    <?= $calc_kitchenMaret; ?>,
                    <?= $calc_kitchenApril; ?>, 
                    <?= $calc_kitchenMei; ?>,
                    <?= $calc_kitchenJuni; ?>,
                    <?= $calc_kitchenJuli; ?>,
                    <?= $calc_kitchenAgustus; ?>,
                    <?= $calc_kitchenSeptember; ?>,
                    <?= $calc_kitchenOktober; ?>,
                    <?= $calc_kitchenNovember; ?>,
                    <?= $calc_kitchenDesember; ?>


                    ]
            },
            {
              label: "Pintu",
              backgroundColor: "rgba(153, 102, 255, 0.4)",
              borderColor: "rgba(153, 102, 255, 1)",
              borderWidth: 1.3,
              data: [
                    
                    <?= $calc_pintuJanuari; ?>,
                    <?= $calc_pintuFebruari; ?>,
                    <?= $calc_pintuMaret; ?>,
                    <?= $calc_pintuApril; ?>, 
                    <?= $calc_pintuMei; ?>,
                    <?= $calc_pintuJuni; ?>,
                    <?= $calc_pintuJuli; ?>,
                    <?= $calc_pintuAgustus; ?>,
                    <?= $calc_pintuSeptember; ?>,
                    <?= $calc_pintuOktober; ?>,
                    <?= $calc_pintuNovember; ?>,
                    <?= $calc_pintuDesember; ?>
                    
                    ]
            },            
            {
              label: "Tempat Tidur",
              backgroundColor: "rgba(240, 0, 0, 0.4)",
              borderColor: "rgba(240, 0, 0, 1)",
              borderWidth: 0.6,
              data: [

                    <?= $calc_bedJanuari; ?>,
                    <?= $calc_bedFebruari; ?>,
                    <?= $calc_bedMaret; ?>,
                    <?= $calc_bedApril; ?>, 
                    <?= $calc_bedMei; ?>,
                    <?= $calc_bedJuni; ?>,
                    <?= $calc_bedJuli; ?>,
                    <?= $calc_bedAgustus; ?>,
                    <?= $calc_bedSeptember; ?>,
                    <?= $calc_bedOktober; ?>,
                    <?= $calc_bedNovember; ?>,
                    <?= $calc_bedDesember; ?>

                    ]
            },
            {
              label: "Triplek",
              backgroundColor: "rgba(160, 160, 160, 0.4)",
              borderColor: "rgba(160, 160, 160, 1)",
              borderWidth: 1.4,
              data: [

                    <?= $calc_triplekJanuari; ?>,
                    <?= $calc_triplekFebruari; ?>,
                    <?= $calc_triplekMaret; ?>,
                    <?= $calc_triplekApril; ?>, 
                    <?= $calc_triplekMei; ?>,
                    <?= $calc_triplekJuni; ?>,
                    <?= $calc_triplekJuli; ?>,
                    <?= $calc_triplekAgustus; ?>,
                    <?= $calc_triplekSeptember; ?>,
                    <?= $calc_triplekOktober; ?>,
                    <?= $calc_triplekNovember; ?>,
                    <?= $calc_triplekDesember; ?>


                    ]
            },
            {
              label: "Rak Buku",
              backgroundColor: "rgba(0, 255, 0, 0.4)",
              borderColor: "rgba(0, 255, 0, 1)",
              borderWidth: 1.4,
              data: [

                    <?= $calc_rakJanuari; ?>,
                    <?= $calc_rakFebruari; ?>,
                    <?= $calc_rakMaret; ?>,
                    <?= $calc_rakApril; ?>, 
                    <?= $calc_rakMei; ?>,
                    <?= $calc_rakJuni; ?>
                    <?= $calc_rakJuli; ?>,
                    <?= $calc_rakAgustus; ?>,
                    <?= $calc_rakSeptember; ?>,
                    <?= $calc_rakOktober; ?>,
                    <?= $calc_rakNovember; ?>,
                    <?= $calc_rakDesember ?>

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
                },

            },
        });
</script>
