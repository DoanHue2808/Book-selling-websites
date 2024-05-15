<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <title>Sách hay nhà Huế</title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <!-- font awesome style -->
    <link href="css/font-awesome.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />

    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
    <style>
      .about_section {
        background-color: #000066;
        color: #ffffff;
      }

      .bold_black{
        font-size:22px;
        font-weight:bold;
      }
    </style>
  </head>

  <body class="sub_page">
    <div class="hero_area">
      <!-- header section strats -->
      <header class="header_section">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.php">
              <img src="images/LOGO.png" alt="" style="width:100px; ">
          </a>

            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Trang chủ </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="laptop.php"> Sách hay</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="about.php">
                    Giới thiệu <span class="sr-only">(current)</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">Liên hệ</a>
                </li>
              </ul>
              <div class="user_option-box">
              <?php
                if (isset($_SESSION["username"])) {
                   
                  if ($_SESSION["admin"] =='Y') {
                    echo '<span style="text-transform: uppercase;">';
                    echo $_SESSION["username"];
                    echo'</span>';
                    echo '<div class="drop_down" style=" min-width:50px; margin-left: 20px;">';
                      echo '<span style="text-transform: none;">';
                      echo '<i class="fa fa-cogs"></i>';
                      echo'</span>';

                      echo '<div class="dd_content">';
                        echo '<a href="admin/table_user.php">Thành viên</a>';
                        echo '<a href="admin/table_product.php">Xem sản phẩm</a>';
                        echo '<a href="admin/edit_add.php">Thêm, sửa sản phẩm</a>';
                        echo '<a href="admin/comment.php">Xem bình luận</a>';
                      echo '</div>';
                    echo '</div>';
                    
                  }
                  else {
                    echo '<div class="drop_down">';
                      echo '<span style="text-transform: none;">';
                      echo $_SESSION["username"];
                      echo'</span>';

                      echo '<div class="dd_content">';
                        echo '<a href="login/users_info.php">Tài khoản của tôi</a>';
                        echo '<a href="login/change_pw.php">Đổi mật khẩu</a>';
                      echo '</div>';
                    echo '</div>';
                  }
                  echo  '<a href="./login/logout.php">
                              <i class="fa fa-sign-out"></i>
                            </a>';
                } else
                  echo '<a href="./login/login.php">
                        <i class="fa fa-user" aria-hidden="true"></i>
                      </a>' ;
                ?>
                <a href="cart.php" class="nav-item nav-link active">
                                <i class="fa fa-cart-plus"></i>
                                <?php

                                    if (isset($_SESSION['cart'])){
                                        $count = count($_SESSION['cart']);
                                        echo "<span id=\"cart_count\" class=\"text-black bg-light\">$count</span>";
                                    }else{
                                        echo "<span id=\"cart_count\" class=\"text-black bg-light\">0</span>";
                                    }

                                ?>
                            </a>
                <a href=""></a>
                <div class="search">
                                <i class="fa fa-search" aria-hidden="true"></i>
                                <div class="search-box">
                                    <form action="search.php" method="POST">
                                        <input type="text" name="search" placeholder="Search By Name" value="" />
                                        <button class="btn btn-primary">Search</button>
                                    </form>
                                </div>
                            </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <!-- end header section -->
    </div>

    <!-- about section -->

    <section class="about_section layout_padding">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-5">
            <div class="img-box">
              <img src="images/LOGO.png" alt="" />
            </div>
          </div>
          <div class="col-md-6 col-lg-7">
            <div class="detail-box">
              <div class="heading_container">
                <h2>Công ty Đoàn Huế</h2>
              </div>
              <p>
              Dù công ty chỉ mới được thành lập nhưng chúng tôi luôn tự tin cung cấp cho khách hàng những sản phẩm tốt nhất.
              Luôn là “Đối tác vàng” của các nhà sách lớn và các tác giả nổi tiêngs chungs tôi cam kết 100% sản phẩm của chúng
               rôi là hàng chính hãng, là sản phẩm chất lượng, giá cả cạnh tranh và dịch vụ ưu việt.
              </p>
            </div>
            
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row" style="padding-top: 50px;">
          <div class="col-md-6 col-lg-6">
            <div class="detail-box">
                <div class="heading_container">
                  <h2>Tiền thân</h2>
                </div>
                <p>
                  Xuất phát từ một cô sinh viên năm 3, có đam mê đọc sách đặc biệt là các thể loại sách về tâm lý, kỹ năng sống.
                  Cùng với sự đam mê đó cô mang cho mình một mong ước trở thành một nhà phân phối sách để có 
                  thể lan tỏa đến cho nguòi tiêu dùng nói chung và sinh viên nói riêng những cuốn sách hay, chất lượng và giá cả phù hợp. 
                </p>
               
            </div>
          </div>
          <div class="col-md-6 col-lg-6">
            <div class="detail-box">
              <div class="heading_container">
                <h2>Thị trường mục tiêu</h2>
              </div>
              <p>
                Phát triển hệ thống bán sách online ngày càng rộng lớn trên các sàn thương mại.
              </p>
              <p>Đa dạng thêm được nhiều thể loại sách trong năm tới</p>
              <p>Cung cấp thêm các hình thức khác về sách cho khách hàng như Ebook, review Sách, Các loại sách cũ,...</p>

            </div>
            
          </div>
        </div>
      </div>
    </section>

    <!-- end about section -->

    <!-- footer section -->
    <footer class="footer_section" >
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 footer-col">
            <div class="footer_detail">
              <h4>Giới thiệu</h4>
              <p>
              <span class="bold_black">Đoàn Huế</span> là đơn vị cung cấp cho độc giả những cuốn sách hay, chất lượng, cam hết hàng chính hãng 100%, thường xuyên có các chương trình khuyến mãi và các phần quà hấp dẫn khi khách hàng mua online tại website của cửa hàng.
              </p>
              <div class="footer_social">
                <a href="">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 footer-col">
            <div class="footer_contact">
              <h4>Liên hệ</h4>
              <div class="contact_link_box">
                <a href="">
                  <i class="fa fa-map-marker" aria-hidden="true"></i>
                  <span> Thu Duc, Ho Chi Minh City </span>
                </a>
                <a href="">
                  <i class="fa fa-phone" aria-hidden="true"></i>
                  <span> Call +84 325610811 </span>
                </a>
                <a href="">
                  <i class="fa fa-envelope" aria-hidden="true"></i>
                  <span> doanthihue2808@gmail.com </span>
                </a>
              </div>
            </div>
          </div>
          
          <div class="col-md-6 col-lg-4 footer-col">
            <div class="map_container">
              <div class="map">
                <div id="googleMap"></div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </footer>
    <!-- footer section -->

    <!-- jQery -->
    <script src="js/jquery-3.4.1.min.js"></script>
 
    <!-- bootstrap js -->
    <script src="js/bootstrap.js"></script>

    <!-- custom js -->
    <script src="js/script.js"></script>
    
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
    <!-- End Google Map -->
  </body>
</html>
