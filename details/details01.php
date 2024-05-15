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
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />


    <title>Sách hay nhà Huế</title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
    <link href=
    "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous" />
    <!-- font awesome style -->
    <link href="../css/font-awesome.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="../css/style.css" rel="stylesheet" />

    <!-- responsive style -->
    <link href="../css/responsive.css" rel="stylesheet" />
    <style>
        h3{
            font-weight:bold:
        }
    </style>
</head>
<?php
    require_once ('../php/CreateDb.php');
    $database = new CreateDb("Productdb", "Producttb");
    if (isset($_POST['add'])){

        if(isset($_SESSION['cart'])){
    
            $item_array_id = array_column($_SESSION['cart'], "product_id");
    
            if(in_array($_POST['product_id'], $item_array_id)){
                echo "<script>alert('Sản phẩm đã có trong giỏ hàng..!')</script>";
                //echo "<script>window.location = 'de'</script>";
            }else{
    
                $count = count($_SESSION['cart']);
                $item_array = array(
                    'product_id' => $_POST['product_id']
                );
    
                $_SESSION['cart'][$count] = $item_array;
            }
    
        }else{
    
            $item_array = array(
                    'product_id' => $_POST['product_id']
            );
    
            // Create new session variable
            $_SESSION['cart'][0] = $item_array;
            //print_r($_SESSION['cart']);
        }
    }
?>
<body class="sub_page">
    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container">
                    <a class="navbar-brand" href="index.php">
                        <img src="images/LOGO.png" alt="" style="width:100px; ">
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class=""> </span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="../index.php">Trang chủ </a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="../laptop.php"> Sách hay </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../about.php">
                                    Giới thiệu <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../contact.php">Liên hệ</a>
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
                        echo '<a href="../admin/table_user.php">Thành viên</a>';
                        echo '<a href="../admin/table_product.php">Xem sản phẩm</a>';
                        echo '<a href="../admin/edit_add.php">Thêm, sửa sản phẩm</a>';
                        echo '<a href="../admin/comment.php">Xem bình luận</a>';
                      echo '</div>';
                    echo '</div>';
                  }
                  else {
                    echo '<div class="drop_down">';
                      echo '<span style="text-transform: none;">';
                      echo $_SESSION["username"];
                      echo'</span>';

                      echo '<div class="dd_content">';
                        echo '<a href="../login/users_info.php">Tài khoản của tôi</a>';
                        echo '<a href="../login/change_pw.php">Đổi mật khẩu</a>';
                      echo '</div>';
                    echo '</div>';
                  }
                  echo  '<a href="../login/logout.php">
                              <i class="fa fa-sign-out"></i>
                            </a>';
                } else
                  echo '<a href="../login/login.php">
                        <i class="fa fa-user" aria-hidden="true"></i>
                      </a>' ;
                ?>
               
                
               <a href="../cart.php" class="nav-item nav-link active">
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
                                    <form action="../search.php" method="POST">
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
    </div>

    <!-- details section -->
    <section class="detail_section ">
        <div class="container">
            <div class="title">
                <p><a href="#">Sách hay</a> &gt; <a href="#">Chi tiết</a> &gt; <a href="#">Trưởng thành là khi nỗi buồn cũng có deadline
                    </a></p>
            </div>
            <div class="row">

                <div class=" box-large col-md-6 ">

                    <div class="box-top">
                        <img id="big_img" class="img-fluid" src="../images/Book1.jpg" alt="Product">
                    </div>
                    <div class="box-bottom">
                        <div class="row">
                            <div class="col">
                                <a href="#" onclick="changeImage(1)"><img src="../images/detail01.jpg"
                                        alt="Product"></a>
                            </div>
                            <div class="col">
                                <a href="#" onclick="changeImage(2)"><img src="../images/detail02.jpg"
                                        alt="Product"></a>
                            </div>
                            <div class="col">
                                <a href="#" onclick="changeImage(3)"><img src="../images/detail03.jpg"
                                        alt="Product"></a>
                            </div>
                            <div class="col">
                                <a href="#" onclick="changeImage(4)"><img src="../images/detail04.jpg"
                                        alt="Product"></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="summary col-md-6 ">

                    <h2>Trưởng thành là khi nỗi buồn cũng có deadline</h2>
                    <p>Tác giả : Writinman</p>
                    <p>Thể loại : Tản Văn</p>
                    <p>Thương hiệu : Người Trẻ Việt</p>
                    <p>Khổ : 13x20.5 cm</p>
                    <p>NXB: Văn học </p>
                    <p>Số trang :200 trang</p>
                    <p>Hình thức :Bìa mềm</p>
                    <h3>Giá: 70.0000 VND</h3>
                    <form method="POST">
                        <button class="btn btn-outline-primary btn-block" type="submit" name="add">Thêm vào giỏ hàng</button>
                        <input type='hidden' name='product_id' value="1">            
                    </form>
                    <a href="../cart.php"><button class="btn btn-success btn-block" type="button" style="margin-top:5px">Mua ngay</button></a>
                </div>

                <div class=" detail col">
                    <h2 style="font-weight: bold;" >MÔ TẢ SẢN PHẨM</h2>
                    <h3 style="font-weight: bold;">Giới thiệu về sách<h3>
                    <p>“Trưởng thành là khi nỗi buồn cũng có deadline” gồm 5 phần:</p>
                    <p>Phần 1: Trưởng thành là bức tranh mang chất liệu cô đơn.</P>
                    <p>Phần 2: Lạc giữa miền ký ức.</p>
                    <p>Phần 3: Hôm nay bạn có sẵn sàng để trưởng thành chưa?</p>
                    <p>Phần 4: Dấu vết của trưởng thành là những nỗi buồn lơ lửng.</p>
                    <p>Phần 5: Cố gắng bao nhiêu là đủ đầy cho một tương lai hạnh phúc.</p>
                    <p>Chất liệu từ những cảm xúc tình yêu đơn thuần, những lần bị cuộc sống “thử thách” đến nhếch nhác,…
                        cuốn sách <span class="fw-bold">Trưởng thành là khi nỗi buồn cũng có deadline</span> mang đến cho 
                        bạn đọc vô vàn cảm xúc nơi tuổi trẻ đầy những ký ức vô giá. 5 phần 
                        của cuốn sách là những giọng văn khác nhau mang những câu chuyện, 
                        trải nghiệm chân thật thổi hồn thành những dòng tản văn thúc đẩy động 
                        lực cho bạn trẻ, gợi lại những miền ký ức đặc biệt trong mỗi con người.</P>
                    <p>Trưởng thành là khi chúng ta nhận ra bản thân không thể tùy hứng, có bị cuộc sống đối xử tệ bạc như thế nào cũng không thể gục ngã. Bởi phía sau chúng ta còn rất nhiều thứ phải lo, cơm áo, gạo tiền là thứ mà chúng ta nghĩ đến mỗi khi cảm thấy mệt mỏi. Thế nhưng bạn không cần phải lo lắng vì tất cả mọi người đều phải trải qua giai đoạn này dù muốn hay không? Thực ra trưởng thành cũng giúp bạn được trải nghiệm nhiều thứ vui vẻ lắm vậy nên chúng ta hãy suy nghĩ tích cực lên nhé, dù thế nào đi chăng nữa thì trưởng thành rồi bạn cũng đừng quên đặt deadline cho nỗi buồn của mình!</p>
                    <h3 style="font-weight: bold;">Tóm tắt nội dung<h3>
                    <p>Ngày trước cứ nghĩ rằng lớn lên sẽ thích lắm, muốn làm gì cũng được, không ai quản. Đúng là như vậy, nhưng cái giá phải trả chính là sự cô đơn.</p>
                    <p>Ngày trước lúc còn vô tư, thơ ngây luôn mộng tưởng cuộc sống trải đầy hoa hồng nhưng những điều hoa mỹ đó đều được sách vở “mài giũa” một cách khéo léo.</P>
                    <p>Ngày trước có thể tuỳ hứng, thích thì làm không thích thì bỏ đi. Nhưng bây giờ, mệt cũng phải gắng gượng hoàn thành cho hết công việc, thất tình cũng không thể bỏ cả thế giới lại sau lưng.</p>
                    <p>Sự trưởng thành ập đến mà không báo trước, tựa cơn mưa ồ ạt đổ ngang, xối xả ồn ào, mãnh liệt gột trôi mọi nét ngây thơ non nớt của mỗi người. Buộc chúng ta phải mang một chiếc ô nhỏ chống đỡ cơn mưa, mang một cái mũ rộng vành che đi giọt nắng gay gắt. Nhưng dù có che chắn tốt đến đâu, vẫn ướt bởi những giọt mưa, vẫn để lại những vết sạm do nắng đi qua.</p>
                    <p>Trưởng thành ấy mà, ai cũng giống nhau, đều phải trải qua những ngày mơ hồ về tương lai, những ngày mang trong mình một nỗi buồn.
                        “Trưởng thành là khi nỗi buồn cũng có deadline” sẽ tưới mát sự cô đơn “héo mòn” từng ngày của bạn, kéo bạn phần nào thoát khỏi cuộc sống khắc nghiệt để giúp bạn nhận ra phía trước còn rất nhiều điều tốt đẹp, bạn không được từ bỏ mọi thứ dễ dàng như thế.</p>
                    <p> Hy vọng bất kể ngày nắng hay mưa, dù vui hay buồn, bạn cũng có thể nở nụ cười tự nhiên nhất, khoác lên mình dáng vẻ yêu thích và trở thành phiên bản độc nhất.</p>
                    <p>Và hãy ghi nhớ rằng “KHI CHÚNG TA TRƯỞNG THÀNH, ĐỪNG QUÊN ĐẶT DEADLINE CHO CẢ NỖI BUỒN”.</p>
                </div>

    </section>

    <!-- end details section -->

    <!-- footer section -->
    <footer class="footer_section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4 footer-col">
                    <div class="footer_detail">
                        <h4>Giới thiệu</h4>
                        <p>
                            Đơn vị cung cấp laptop hàng đầu Việt Nam bảo hành chính hãng. Mua online nhận ngay nhiều ưu
                            đãi hấp dẫn.
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
                                <span> Call +84 123456789 </span>
                            </a>
                            <a href="">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <span> demo@gmail.com </span>
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
    <!-- Chang images details -->
    <script>
    function changeImage(image) {
        document.getElementById("big_img").src = "../images/detail0" + image + ".jpg";
    }
    </script>
    <!-- jQery -->
    <script src="../js/jquery-3.4.1.min.js"></script>

    <!-- bootstrap js -->
    <script src="../js/bootstrap.js"></script>

    <!-- custom js -->
    <script src="../js/script.js"></script>

    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
    </script>
    <!-- End Google Map -->
</body>

</html>