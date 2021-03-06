<div id="sidebar-right">
  <div class="sidebar-qc">
    <a href="#"><img src="img/quangcao/qc_1.gif" alt="" class="img-responsive center-block"></a>
  </div>
  <div class="sidebar-qc">
    <a href="#"><img src="img/quangcao/qc_2.gif" alt="" class="img-responsive center-block"></a>
  </div>
  <div class="sidebar-qc">
    <a href="#"><img src="img/quangcao/qc_3.gif" alt="" class="img-responsive center-block"></a>
  </div>
  <div class="sidebar-qc">
    <a href="#"><img src="img/quangcao/qc_4.gif" alt="" class="img-responsive center-block"></a>
  </div>

  <div class="tinmoi">
    <h2>Tin mới nhất</h2>
    <div class="tin-content">
        <?php
        //lấy tin mói nhất.
        $tins = tinMoiNhat();
        while($tin = mysqli_fetch_array($tins)):
        ?>
          <article>
            <div class="row">
              <div class="col-md-4">
                <div class="hinh-tin">
                  <img src="img/tintuc/<?php echo $tin['urlHinh'] ?>" alt="<?php echo $tin['tieuDe'] ?>" class="img-responsive center-block">
                </div>
              </div>
              <div class="col-md-8">
                <div class="tin">
                  <p><?php echo $tin['tieuDe'] ?></p>
                </div>
              </div>
            </div>
          </article>
        <?php endwhile; ?>
    </div>
  </div>

  <div class="thongke">
    <h2>Thống kê kết quả xổ số</h2>
    <ul>
      <?php
          $q = "
            SELECT * FROM thongke
          ";
          $r = mysqli_query($dbc, $q);
          while($thongke = mysqli_fetch_array($r)):
      ?>
      <li><a href="index.php?id=<?php echo $thongke['idThongKe']; ?>" title="<?php echo $thongke['tenThongKe']; ?>"><?php echo $thongke['tenThongKe']; ?></a></li>
    <?php endwhile; ?>
    </ul>
  </div>

  <div class="lien-ket">
    <h2>Liên kết hay</h2>
    <img src="img/lienket.jpg" alt="" class=img-responsive center-block>
  </div>
</div><!--/.sidebar-right-->
