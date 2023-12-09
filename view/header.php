

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="?page=/index"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="?page=/index">Home</a></li>
                            <li ><a href="?page=/shop">Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="?page=/details">Shop Details</a></li>
                                    <li><a href="?page=/cart">Shoping Cart</a></li>
                                    <li><a href="?page=/checkout">Check Out</a></li>
                                    <li><a href="?page=/blog_details">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="?page=/blog">Blog</a></li>
                            <li><a href="?page=/contact">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                <?php 
                                if (empty($_SESSION['cart']) || count($_SESSION['cart']) == 0 ){
                                    echo '<div class="header__cart">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                                    </ul>
                                    <div class="header__cart__price">item: <span>$</span></div>
                                </div>';
                                } 
                                else {
                            ?>
                                <tr>
                                <?php
                                $i = 0;
                                $total_money = 0;
                                $sum = 0;
                                foreach($_SESSION["cart"] as $product){
                                    $int = (int)$product['quantity'];
                                    $product_price = $product['book_price']; 
                                    $total_money += $product_price * $int;
                                    $sum += $total_money;
                                    
                            ?>
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-bag"></i><?php echo '<span>'.$int.'</span>' ?></a></li>
                        </ul>
                        <div class="header__cart__price">item: <span>$<?php echo $sum?></span></div>
                    </div>
                    <?php 
                            $i++;
                                }
                                }
                            ?>
                    </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->


    <!-- Hero Section Begin -->
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All departments</span>
                        </div>
                        <ul>
                            <li><a href="#">Fresh Meat</a></li>
                            <li><a href="#">Vegetables</a></li>
                            <li><a href="#">Fruit & Nut Gifts</a></li>
                            <li><a href="#">Fresh Berries</a></li>
                            <li><a href="#">Ocean Foods</a></li>
                            <li><a href="#">Butter & Eggs</a></li>
                            <li><a href="#">Fastfood</a></li>
                            <li><a href="#">Fresh Onion</a></li>
                            <li><a href="#">Papayaya & Crisps</a></li>
                            <li><a href="#">Oatmeal</a></li>
                            <li><a href="#">Fresh Bananas</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                    All Categories
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                            <?php if(!isset($_SESSION['user']['user_name'])){
                                    echo '<a href="?page=/login"><i class="fa fa-user" style="color: #7fad39;"></i></a>';
                                    }
                            ?>
                            </div>
                            <div class="hero__search__phone__text">
                            <?php 
                                if(isset($_SESSION['user']['user_name'])){
                                    echo '<h5>'.'XIN CHÀO '.$_SESSION['user']['user_name'].'</h5>';
                                    echo '<a href="?page=/logout"><span>THOÁT</span></a>';
                                }
                                else {
                                    echo '
                                    <h5>Login</h5>
                                    <span>support 24/7 time</span>';
                                }
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>