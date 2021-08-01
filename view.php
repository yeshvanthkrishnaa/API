 <?php 
 
 $name=$_GET['name'];
 $age=$_GET['age'];
 $address=$_GET['address'];
 ?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Data List :: Grootan's Project</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdn.datatables.net/plug-ins/f2c75b7247b/integration/bootstrap/3/dataTables.bootstrap.css'>
<link rel='stylesheet' href='https://cdn.datatables.net/responsive/1.0.4/css/dataTables.responsive.css'><link rel="stylesheet" href="./style.css">
    <style>
    body { 
  font-size: 140%; 
}

h2 {
  text-align: center;
  padding: 20px 0;
}

table caption {
	padding: .5em 0;
}

table.dataTable th,
table.dataTable td {
  white-space: nowrap;
}

.p {
  text-align: center;
  padding-top: 140px;
  font-size: 14px;
}

    .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

    .button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}
    </style>
</head>
<body>
<center><h3>Data List :: Grootan's Project</h3></center><br><br>
<?php
   $locks = array();
$handle = fopen("https://beecep.free.beeceptor.com/my/api/path/array", "r");
if ($handle) {
    $i=0;
    while (($line = fgets($handle)) !== false) {
        $data = explode("|", $line);
        $locks[$i] = array(
            1 => $data[0],
            2 => $data[1],
            3 => $data[2]
        );
        $i++;
       //var_dump($locks);

    }
    fclose($handle);
} else {
    // error opening the file.
}

 ?>
 <table style="width:100%">
  <tr>
    <th><center>Name</center></th>
            <th><center>Age</center></th>
            <th><center>Address</center></th>
  </tr>
  <tr>
   <td><center><?php echo $name ?></center></td>
    <td><center><?php echo $age ?></center></td>
    <td><center><?php echo $address ?></center></td>
  </tr>
</table>


<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdn.datatables.net/1.10.5/js/jquery.dataTables.min.js'></script>
<script src='https://cdn.datatables.net/plug-ins/f2c75b7247b/integration/bootstrap/3/dataTables.bootstrap.js'></script>
<script src='https://cdn.datatables.net/responsive/1.0.4/js/dataTables.responsive.js'></script><script  src=""></script>
<script>
$('table').DataTable();
// See:
// http://www.sitepoint.com/responsive-data-tables-comprehensive-list-solutions
</script>
</body>
</html>
