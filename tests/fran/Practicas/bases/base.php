<!DOCTYPE html>
<html>
  <head>
    <title>bases de datos en PHP</title>
  </head>
  <body>
  <ol>
  <?php 
  
$servername = "127.0.0.1";
$database = "world";
$username = "text";
$password = "text";

// Crear conecction
$conn = mysqli_connect($servername, $username, $password, $database);


$query = "SELECT * FROM City ORDER BY Name desc LIMIT 10 ";  

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if ($resultado = $conn->query($query)) {
    
    while( $row = $resultado->fetch_array() )
    {
        
        echo "<li> La ciudad " . $row['Name'] . " con codigo " . $row['CountryCode'] . " pertenece al distrito " . $row['District'] . "</li>";
        echo "<br/>";
        
    }
     /* liberar el conjunto de resultados */
     $resultado->close();
    }
   
    mysqli_close($conn);

  ?> 
  </ol>
  </body>
</html>




   