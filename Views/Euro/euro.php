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
            data:[953.07,960.9,976.72,974.29,966.88,973.63,990.49],
            backgroundColor:[
                'rgb(138, 43, 226,0.5)'
            ]
        },
        {
            label:'Mes de Junio',
            data:[881.67,890.85,885.54,874.48,887.95,880.29,879.05],
            backgroundColor:[
                'rgb(128, 0, 0,0.5)'
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
    