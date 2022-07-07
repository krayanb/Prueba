<!DOCTYPE html>
<html>
  
<head>
    <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js">
    </script>
  
    <link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  
    <script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js">
    </script>
  
    <style>
        .box {
            width: 750px;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 100px;
        }
    </style>
</head>
  
<body>
    <div class="container box">
        <h3 align="center">
           Valores de UF
        </h3><br />
          
        <?php
          
             $connect = mysqli_connect("localhost", "root", "", "indicadores"); 
              
            $query = '';
            $table_data = '';
            
            // json file name
            $filename = "us.json";
            //echo $filename;
            // Read the JSON file in PHP
            $data = file_get_contents($filename); 
            // Convert the JSON String into PHP Array
            $array = json_decode($data, true); 
            //print_r($array);
            
            // Extracting row by row
            foreach($array as $row) {
  
               //echo"<pre>";
               //print_r($row);
               //echo"</pre>";
               $fecha=$row['fecha'];
               $valor=$row['valor'];
                // Database query to insert data 
                // into database Make Multiple 
                // Insert Query 
                $query .= 
                "INSERT INTO uf(fecha,valor) VALUES 
                ('".$row["fecha"]."', '".$row["valor"]."'); "; 
               
                $table_data .= '
                <tr>
                    <td>'.$row["fecha"].'</td>
                    <td>'.$row["valor"].'</td>

                </tr>
                '; // Data for display on Web page
            }
  
            if(mysqli_multi_query($connect, $query)) {
                echo '<h3>Datos Insertados JSON</h3><br />';
                echo '
                <table class="table table-bordered">
                <tr>
                    <th width="45%">Fecha</th>
                    <th width="10%">Valor</th>
                
                </tr>
                ';
                echo $table_data;  
                echo '</table>';
            }
          ?>
        <br />
    </div>
</body>
  
</html>
