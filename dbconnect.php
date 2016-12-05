<html><head>
<link href="css/bootstrap.css" rel="stylesheet">
</head>
<body>
  <?php
  $conn = new mysqli('localhost', 'root', '', 'oncost') 
  or die ('Cannot connect to db');


//FORM 1
  function pilihmerek($conn){
    $result = $conn->query("SELECT DISTINCT merekmobil FROM mobil ORDER BY merekmobil ASC");
    echo "<select class='form-control' id='first' name='merekmobil'>";

    while ($row = $result->fetch_assoc()) {

      unset($merekmobil);
      $merekmobil = $row['merekmobil']; 
      echo '<option value="'.$merekmobil.'">'.$merekmobil.'</option>';

    }
    echo "</select>";
  }



//FORM 2



  function pilihtahun($conn){
    $result = $conn->query("SELECT DISTINCT tahun FROM mobil /*WHERE MEREK merekmobil='BMW'*/ORDER BY tahun ASC");
    echo "<select class='form-control' id='second' name='tahun'>";
    while ($row = $result->fetch_assoc()) {

      unset($tahun);
      $tahun = $row['tahun']; 
      echo '<option value="'.$tahun.'">'.$tahun.'</option>';

    }

    echo "</select>";
  }


//FORM 3


  function pilihmodel($conn){
    $result = $conn->query("SELECT DISTINCT merekmobil, tahun, model, konsumsi FROM mobil /*WHERE merekmobil='BMW' and tahun='1996'*/ORDER BY merekmobil ASC");
    echo "<select class='form-control' id='model' name='model'>";
    while ($row = $result->fetch_assoc()) {

      unset($model);
      $merekmobil = $row['merekmobil'];
      $tahun = $row['tahun'];
      $model = $row['model'];
      $konsumsi = $row['konsumsi'];  
      echo '<option value="'.$model.'">'.$merekmobil." ".$model." (".$tahun.") | " .$konsumsi. " km/l".'</option>';

    }
    echo "</select>";
  }


//FORM 4


  function pilihjenis($conn){
    $result = $conn->query("SELECT DISTINCT merekbbm, jenis, harga FROM bbm /*WHERE tipebbm='High-Octane Gasoline'*/ORDER BY harga ASC");
    echo "<select class='form-control' id='jenis' name='jenis'>";
    while ($row = $result->fetch_assoc()) {

      unset($jenis);
      $jenis= $row['jenis'];
      $harga= $row['harga'];
      $merekbbm= $row['merekbbm'];
      echo '<option value="'.$jenis.'">'.$merekbbm." ".$jenis." | Rp." .$harga.'</option>';
    }
    echo "</select>";
  }



?>

<!--<script src="https://code.jquery.com/jquery-3.1.1.min.js" charset="utf-8"></script>
<script type="text/javascript">
  function getFirstValue () {
    return $('#first').val()
  }

  function updateDisplay () {
    $('#second option').each(function () {
      if (this.dataset.type === getFirstValue()) {
        $(this).show()
      } else {
        $(this).hide()
      }
    })
    $('#second')[0].selectedIndex = -1
  }

  updateDisplay()
  $('#first').on('change', updateDisplay)
</script>-->
</body>
</html>

