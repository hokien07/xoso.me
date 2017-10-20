<div class="logo-home">
  <h1><a href="index.php" title="">Soicau646.com</a></h1>
    <?php
    $date = getdate();
    $thu = $date['weekday'];
    $thu = strtolower($thu);
    switch($thu) {
      case 'monday':
        $thu = 'Thứ hai';
        break;
    case 'tuesday':
        $thu = 'Thứ ba';
        break;
    case 'wednesday':
        $thu = 'Thứ tư';
        break;
    case 'thursday':
        $thu = 'Thứ năm';
        break;
    case 'friday':
        $thu = 'Thứ sáu';
        break;
    case 'saturday':
        $thu = 'Thứ bảy';
        break;
    default:
        $thu = 'Chủ nhật';
        break;
}
    ?>
  <p><?php echo $thu. ", ".$date['mday']. "/ ".$date['mon']."/".$date['year'];?></p>
</div>
