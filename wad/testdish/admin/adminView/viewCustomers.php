<div >
  <h2>All USers</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">UserID</th>
        <th class="text-center">Username </th>
        <th class="text-center">Email</th>
        <th class="text-center">Password</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from users where isAdmin=0";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
           
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["first_name"]?> <?=$row["last_name"]?></td>
      <td><?=$row["email"]?></td>
      <td><?=$row["password"]?></td>

    </tr>
    <?php
            $count=$count+1;
           
        }
    }
    ?>
  </table>