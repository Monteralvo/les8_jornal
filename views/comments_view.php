<div>
  <table>
    <tr>
      <th>User</th>
      <th>Comment</th>
    </tr>
    <?php
      for ($row_no = 0; $row_no < $data->num_rows; $row_no++) {
        $data->data_seek($row_no);
        extract($data->fetch_assoc());
        echo "
          <tr>
            <td>".$user."</td>
            <td>".$comment."</td>
          </tr>
        ";
      }
    ?>
  </table>
</div>