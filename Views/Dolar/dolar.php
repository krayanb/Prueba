<?php 
    headerAdmin($data); 
?>
   <div class="container">
    <div class="ros">
    <canvas id="myChart" style="width=400px; height:400px;">
    </canvas>
  
    </div>
</div>

</body>
<script>
var ctx=document.getElementById("myChart").getContext("2d");
var myChart=new Chart(ctx,{
    type:"bar",
    data:{
        labels:['30','01','04','05','06','07'],
        datasets:[{
            label:'Mes de Julio',
            data:[919.97,932.08,934.54,927.53,948.51,972.66],
            backgroundColor:[
                'rgb(127, 255,0,0.5)'
            ]
        },
        {
            label:'Mes de Junio',
            data:[822.25,824.35,825.28,815.56,813.38,817.99],
            backgroundColor:[
                'rgb(165, 42, 42,0.5)'
            ]

        }
    ]
    },
    options:{
        scales:{
            yAxes:[{
                ticks:{
                    beginAtZero:false
                }
            }]
        },
        responsive: true,
        maintainAspectRatio: false
    }
  
});

</script>
<?php footerAdmin($data); ?>
    