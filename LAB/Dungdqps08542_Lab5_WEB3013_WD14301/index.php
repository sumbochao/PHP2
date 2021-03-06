<html>
<head>
    <title>PHP2 | Lab 5</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <div class="container">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php?ctrller=home">Trang chủ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?ctrller=products">Danh sách Product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?ctrller=customer">Danh sách khách hàng</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?ctrller=sanpham">Danh sách sản phẩm</a>
        </li>
      </ul>
    </nav>
        <?php
            $ctr="home";
            if(isset($_GET['ctrller']))
                $ctr=$_GET['ctrller'];
            include 'controller/'.$ctr.'Controller.php'; 
        ?>
  </div>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>