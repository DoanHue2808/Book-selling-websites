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

    <title>Sách hay nhà Huế </title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link href=
    "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous" />

    <!-- font awesome style -->
    <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />  
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />

    <style>
      body {
        font-family: 'Times New Roman';
        color: #0c0c0c;
        background-color: white;
        overflow-x: hidden;
      }
    </style>
    
  </head>

  <body>
    <div class="hero_area">
      <div class="hero_social">
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
                <li class="nav-item active">
                  <a class="nav-link" href="index.php" 
                    >Trang chủ <span class="sr-only">(current)</span></a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="laptop.php"> Sách hay</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php"> Giới thiệu</a>
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
      <!-- slider section -->
      <section class="slider_section">
        <div id="customCarousel1" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-6">
                    <div class="detail-box">
                      <h1>Cánh đồng bất tận - Giọt buồn của những con người miền Tây</h1>
                      <p>
                      <span class="font-weight-bold fs-1">Cánh đồng bất tận</span> là tên một tập truyện ngắn phát hành năm 2005 của Nguyễn Ngọc Tư, đồng thời cũng là tên một truyện trong tập truyện ngắn đó được đăng báo lần đầu cùng năm. Tính đến nay, tập truyện đã được phát hành dưới dạng sách in và sách nói. Một vài truyện ngắn trong tuyển tập đã được chuyển thể thành phim và kịch. Đây là một tác phẩm đặc biệt, phong cách cũng khác lạ khi viết về những con người miền sông nước, với những câu chuyện của họ, buồn da diết.                      </p>
                      <div class="btn-box">
                        <a href="contact.php" class="btn1"> Liên hệ </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="img-box">
                      <img src="images/canhdongbattan.jpg" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item ">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-6">
                    <div class="detail-box">
                      <h1>Tất cả Đều Là Chuyện Nhỏ - Richard Carlson</h1>
                      <p>
                      <span class="font-weight-bold fs-1">Tất cả đều là chuyện nhỏ</span>chính là cuốn sách hướng bạn đọc đến cuộc sống tích cực. Cuộc sống ý nghĩa là khi chúng ta gạt bỏ hết tất cả những chuyện vặt vãnh, tập trung vào những điều cần thiết để tận hưởng hạnh phúc một cách đúng nghĩa nhất.                      </p>
                      <div class="btn-box">
                      <a href="contact.php" class="btn1"> Liên hệ </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="img-box">
                      <img src="images/tatcadeulachuyennho.jpg" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-6">
                    <div class="detail-box">
                      <h1>Hạnh phúc tại tâm - liều thuốc chữa lành tinh thần</h1>
                      <p>
                      Bạn nghĩ gì về hạnh phúc? Hạnh phúc là một từ ngữ mang khái niệm trừu tượng, tùy theo nhận thức về sự vật của mỗi người. Có thể bạn muốn mình giàu có, có gia đình nhỏ, hoặc đơn thuần là muốn được sống, được tận hưởng tự do hoà nhịp vào dòng chảy tâm hồn. Chính vì thế nên nhà hiền triết Osho mới cho cuốn sách mang tên Hạnh phúc tại tâm ra đời - nhằm để cho con người tự ý thức về tiếng nói lắng sâu trong tim mình.                      </p>
                      <div class="btn-box">
                      <a href="contact.php" class="btn1"> Liên hệ </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="img-box">
                      <img src="images/hanhphuctaitam.jpg" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-6">
                    <div class="detail-box">
                      <h1>Tuổi trẻ đáng giá bao nhiêu - Đừng lãng phí tuổi trẻ!</h1>
                      <p>
                      Tuổi trẻ đáng giá bao nhiêu? Bạn có thể tự trả lời được câu hỏi này không nhỉ?
                      Tuổi trẻ được xem là lứa tuổi đẹp nhất của một đời người, thế nhưng có bao giờ khi tuổi xuân qua đi, bạn lại cảm thấy tiếc nuối vì những gì mà mình chưa làm được không? 
                      Với những lời tâm sự bình dị và gần gũi, cuốn sách Tuổi trẻ đáng giá bao nhiêu của tác giả Rosie Nguyễn sẽ giúp người đọc cảm nhận rõ nét nhất về tâm lý của những người trẻ trong xã hội ngày nay.</p>
                      <div class="btn-box">
                      <a href="contact.php" class="btn1"> Liên hệ </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="img-box">
                      <img src="images/tuoitredanggiabaonhieu.jpg" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
          <ol class="carousel-indicators">
            <li
              data-target="#customCarousel1"
              data-slide-to="0"
              class="active"
            ></li>
            <li data-target="#customCarousel1" data-slide-to="1"></li>
            <li data-target="#customCarousel1" data-slide-to="2"></li>
            <li data-target="#customCarousel1" data-slide-to="3"></li>
          </ol>                                                              
        </div>
      </section>
      <!-- end slider section -->
    </div>

    <!-- shop section -->

    <section class="shop_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>Bán chạy nhất</h2>
            </div>
            <div class="row">
                <div class="col-sm-6 col-xl-3">
                    <div class="box">
                        <a href="details/details01.php">
                            <div class="img-box">
                                <img src="images/Book1.jpg" alt="" />
                            </div>
                            <div class="detail-box row">
                                <h6>Trưởng thành là khi nỗi buồn cũng có deadline</h6>
                                <h6>
                                    Giá:
                                    <span> 79,000₫ </span>
                                </h6>
                            </div>
                            <div class="new">
                                <span> Best seller </span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="box">
                        <a href="details/details01.php">
                            <div class="img-box">
                                <img src="images/Book2.jpg" alt="" />
                            </div>
                            <div class="detail-box row">
                                <h6>Người tối giản hành trình về số 0</h6>
                                <h6>
                                    Giá:
                                    <span> 63,200₫ </span>
                                </h6>
                            </div>
                            <div class="new">
                                <span> Best seller </span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="box">
                        <a href="details/details03.php">
                            <div class="img-box">
                                <img src="images/Book3.jpg" alt="" />
                            </div>
                            <div class="detail-box row">
                                <h6>Giá trị của sự tử tế </h6>
                            </div>
                            <div class="detail-box row">
                            <h6>
                                Giá:
                                <span> 97,000₫ </span>
                            </h6>
                            </div>
                            <div class="new">
                                <span>Best seller</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="box">
                        <a href="details/details02.php">
                            <div class="img-box">
                                <img src="images/Book4.jpg" alt="" />
                            </div>
                            <div class="detail-box row">
                                <h6>Tối giản tâm trí</h6>
                                <h6>
                                    Giá:
                                    <span> 82,000₫ </span>
                                </h6>
                            </div>
                            <div class="new">
                                <span>Best seller</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="box">
                        <a href="details/details05.php">
                            <div class="img-box">
                                <img src="images/Book5.jpg" alt="" />
                            </div>
                            <div class="detail-box row">
                                <h6>Dám bị ghét</h6>
                                <h6>
                                    Giá:
                                    <span> 89,000₫ </span>
                                </h6>
                            </div>
                            <div class="new">
                                <span>Best seller</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="box">
                        <a href="details/details04.php">
                            <div class="img-box">
                                <img src="images/Book5.jpg" alt="" />
                            </div>
                            <div class="detail-box row">
                                <h6>Buổi sáng diệu kỳ</h6>
                                <h6>
                                    Giá:
                                    <span> 95,000₫ </span>
                                </h6>
                            </div>
                            <div class="new">
                                <span> Best seller </span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="box">
                        <a href="">
                            <div class="img-box">
                                <img src="images/Book7.jpg" alt="" />
                            </div>
                            <div class="detail-box row">
                                <h6>Phong thái của bậc thầy thuyết phục</h6>
                                <h6>
                                    Giá:
                                    <span> 74,000₫ </span>
                                </h6>
                            </div>
                            <div class="new">
                                <span>Best seller</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="box">
                        <a href="">
                            <div class="img-box">
                                <img src="images/Book8.jpg" alt="" />
                            </div>
                            <div class="detail-box row">
                                <h6>Bạn chỉ tưởng mình đang rất cố gắng</h6>
                                <h6>
                                    Giá:
                                    <span> 110,000₫ </span>
                                </h6>
                            </div>
                            <div class="new">
                                <span>Best seller </span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="btn-box">
          <a href="./laptop.php"> Xem thêm </a>
            </div>      
        </div>
    </section>

    <!-- end shop section -->

    

    
    

    <!-- footer section -->
    <footer class="footer_section">
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
