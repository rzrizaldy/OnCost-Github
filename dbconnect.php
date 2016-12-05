<html><head>
<link href="css/bootstrap.css" rel="stylesheet">
</head>
<body>
  <?php
  $conn = new mysqli('localhost', 'root', '', 'oncost') 
  or die ('Cannot connect to db');

//FORM 1
  function pilihmerek($conn){
    $result = $conn->query("SELECT DISTINCT merekmobil FROM mobil");
    echo "<select class='form-control' id='merek' name='merekmobil'>";

    while ($row = $result->fetch_assoc()) {

      unset($merekmobil);
      $merekmobil = $row['merekmobil']; 
      echo '<option value="'.$merekmobil.'">'.$merekmobil.'</option>';

    }
    echo "</select>";
  }



//FORM 2



  function pilihtahun($conn){
    $result = $conn->query("SELECT DISTINCT tahun FROM mobil WHERE merekmobil='BMW'");
    echo "<select class='form-control' id='tahun' name='tahun'>";
    while ($row = $result->fetch_assoc()) {

      unset($tahun);
      $tahun = $row['tahun']; 
      echo '<option value="'.$tahun.'">'.$tahun.'</option>';

    }

    echo "</select>";
  }


//FORM 3


  function pilihmodel($conn){
    $result = $conn->query("SELECT DISTINCT model FROM mobil WHERE merekmobil='BMW' and tahun='1996'");
    echo "<select class='form-control' id='model' name='model'>";
    while ($row = $result->fetch_assoc()) {

      unset($model);
      $model = $row['model']; 
      echo '<option value="'.$model.'">'.$model.'</option>';

    }
    echo "</select>";
  }


//FORM 4


  function pilihjenis($conn){
    $result = $conn->query("SELECT DISTINCT jenis FROM bbm WHERE tipebbm='High-Octane Gasoline'");
    echo "<select class='form-control' id='jenis' name='jenis'>";
    while ($row = $result->fetch_assoc()) {

      unset($jenis);
      $jenis= $row['jenis'];
      echo '<option value="'.$jenis.'">'.$jenis.'</option>';
    }
    echo "</select>";
  }

  ?>

</body>
</html>

