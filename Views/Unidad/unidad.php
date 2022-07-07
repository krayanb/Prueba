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
        labels:['01','02','03','04','05','06','07'],
        datasets:[{
            label:'Mes de Julio',
            data:[33099.99,33113.16,33126.33,33139.5,33152.68,33165.86,33179.05],
            backgroundColor:[
                'rgb(66,134,244,0.5)'
            ]
        },
        {
            label:'Mes de Junio',
            data:[32782.29,32797,32811.71,32824.76,32837.81,32850.87,32863.94],
            backgroundColor:[
                'rgb(74,135,72,0.5)'
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
    