<?php

  $content=file_get_contents("response.json");

  //mengubah standar encoding
  $content=utf8_encode($content);

  //mengubah data json menjadi data array asosiatif
  $result=json_decode($content,true);

  $results = $result["results"];

  $curr_val = $result["curr_val"];

?>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<h1><?= $curr_val; ?></h1>
<table class="table" id="tb_provinsi">
  <thead>
  <tr>
    <th>No</th>
    <th>Key</th>
    <th>Value</th>
  </tr>
  </thead>
  <tbody> 
  <?php $i = 1; ?>
    <?php foreach ($results as $row):?>
    <tr>
      <td><?= $i; ?></td>
      <td><?= $row["key"]; ?></td>
      <td><?= $row["value"]; ?></td>
    </tr>
  <?php $i++; ?>
    <?php endforeach; ?>
  </tbody>
</table>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.1/css/dataTables.bootstrap4.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">
 $(document).ready( function () {
    $('#tb_provinsi').DataTable();
} );          
        
    </script>