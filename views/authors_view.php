<h1>Список авторов нашего сайта</h1>
<table>
  <tr><th>ID</th><th>Ф.И.О.</th><th>Возраст</th><th>Узнать подробнее</th></tr>
  <?php
  for ($row_no = 0; $row_no <= $data->num_rows - 1; $row_no++) {
  $data->data_seek($row_no);
  $row = $data->fetch_assoc();
  echo "
   <tr>
     <td>".$row['id_author']."</td>
     <td>".$row['full_name']."</td>
     <td>".$row['age']."</td>
     <td><a href='/lesson8/journal/about/author/?id=".$row['id_author']."'target='_blank'>Подробнее</a></td>
    </tr>
   ";
  }
  ?>
</table>