<?php
  include("database/dbCon.php");
?>
<div id="sidebar">
  <?php
  //lay ten tinh trong database
  /**idMien :
  *0: xo so mien bac
  *1: so xo violet
  *2: xo so mien nam
  *3: xo so mien trung
  */
  ?>
    <div class="xs" >
      <h2>xổ số miền bắc</h2>
      <ul>
        <?php
            $q_mb = "
              SELECT * FROM tinh WHERE mienTinh = 0
            ";
            $mienbac = mysqli_query($dbc,$q_mb);
            while($tentinh = mysqli_fetch_array($mienbac)):
        ?>
        <li><a href="index?id=<?php echo $tentinh['idTinh'] ?>" title="<?php echo "Xo so moi nhat ".$tentinh['tenTinh'] ?>"><?php echo $tentinh['tenTinh']; ?></a></li>
      <?php endwhile; ?>
      </ul>
    </div>
    <div class="xs">
      <h2>xổ số điện toán</h2>
      <ul>
        <?php
            $q_vl = "
              SELECT * FROM tinh WHERE mienTinh = 1
            ";
            $violet = mysqli_query($dbc,$q_vl);
            while($tentinh = mysqli_fetch_array($violet)):
        ?>
        <li><a href="index?id=<?php echo $tentinh['idTinh'] ?>" title="<?php echo "Xo so moi nhat ".$tentinh['tenTinh'] ?>"><?php echo $tentinh['tenTinh']; ?></a></li>
      <?php endwhile; ?>
      </ul>
    </div>
    <div class="xs"  >
      <h2>xổ số miền nam</h2>
      <ul>
        <?php
            $q_mn = "
              SELECT * FROM tinh WHERE mienTinh = 2
            ";
            $miennam = mysqli_query($dbc,$q_mn);
            while($tentinh = mysqli_fetch_array($miennam)):
        ?>
        <li><a href="index?id=<?php echo $tentinh['idTinh'] ?>" title="<?php echo "Xo so moi nhat ".$tentinh['tenTinh'] ?>"><?php echo $tentinh['tenTinh']; ?></a></li>
        <?php endwhile; ?>
      </ul>
    </div>
    <div class="xs" >
      <h2>xổ số miền trung</h2>
      <ul>
        <?php
            $q_mt = "
              SELECT * FROM tinh WHERE mienTinh = 3
            ";
            $mientrung = mysqli_query($dbc,$q_mt);
            while($tentinh = mysqli_fetch_array($mientrung)):
        ?>
        <li><a href="index?id=<?php echo $tentinh['idTinh'] ?>" title="<?php echo "Xo so moi nhat ".$tentinh['tenTinh'] ?>"><?php echo $tentinh['tenTinh']; ?></a></li>
      <?php endwhile; ?>
      </ul>
    </div>
</div> <!--#sidebar-->
