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
        labels:['01-Ene','01-Feb','01-Mar','01-Abr','01-May','01-Jun','01-Jul'],
        datasets:[{
            label:'Año 2022',
            data:[54442,54878,55537,55704,56762,57557,58248],
            backgroundColor:[
                'rgb(255, 0, 0,0.5)'
            ]
        },
        {
            label:'Año 2021',
            data:[50978,51131,51489,51592,51798,52005,52161],
            backgroundColor:[
                'rgb(255, 69, 0, 0.5)'
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
    