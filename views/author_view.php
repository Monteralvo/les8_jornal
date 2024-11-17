<h1>Информация об авторе нашего сайта</h1>
 <?php
  for ($row_no = 0; $row_no <= $data->num_rows - 1; $row_no++) {
    $data->data_seek($row_no);
    $row = $data->fetch_assoc();
    echo "
      <p>".$row['id_author']."</p>
      <p>".$row['full_name']."</p>
      <p>".$row['age']."</p>
      <p>".$row['location']."</p>
      <p>".$row['additional']."</p>
    ";
  }
 ?> 