<?php
    // global header -- do not write file extension (.php)
    $this->view('/include/header');

    // Account detail
    $profile = $model['user_profile'];
    $name = $profile->full_name;
    $email = $profile->email;
    $phone = $profile->phone_number;
    $address = $profile->address;

?>

<title>{TITLE}</title>

                <div class="col-lg-6 col-md-6">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><a href="/shop">Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="./about.html">About Us</a></li>
                                    <li><a href="./shop-details.html">Shop Details</a></li>
                                    <li><a href="./shopping-cart.html">Shopping Cart</a></li>
                                    <li><a href="/shop/checkout">Check Out</a></li>
                                    <li><a href="./blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="./blog.html">Blog</a></li>
                            <li><a href="./contact.html">Contacts</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="header__nav__option">
                        <a href="#" class="search-switch"><img src="/assets/img/icon/search.png" alt=""></a>
                        <a href="#"><img src="/assets/img/icon/heart.png" alt=""></a>
                        <a href="/shop/checkout"><img src="/assets/img/icon/cart.png" alt=""> <span>0</span></a>
                        <div class="price">$0.00</div>
                    </div>
                </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>My Account</h4>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tabs-to-dropdown">
                        <div class="nav-wrapper" style="text-align: center;">
                            <ul class="nav nav-pills d-md-flex " id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="account-detail-tab" data-toggle="pill" href="#account-detail" role="tab" aria-controls="account-detail" aria-selected="true">Account Detail</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="orders-tab" data-toggle="pill" href="#orders" role="tab" aria-controls="orders" aria-selected="false">Orders</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="wish-list-tab" data-toggle="pill" href="#wish-list" role="tab" aria-controls="wish-list" aria-selected="false">Wish Lists</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="rewards-tab" data-toggle="pill" href="#rewards" role="tab" aria-controls="rewards" aria-selected="false">Rewards</a>
                                </li>
                            </ul>

                        </div>

                        <div class="tab-content authentication_form" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="account-detail" role="tabpanel" aria-labelledby="account-detail-tab">
                                <div class="container-fluid">
                                    <h2 class="mb-3 font-weight-bold">Account Detail</h2>
                                    <form method="post">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="checkout__input">
                                                    <p>Name<span>*</span></p>
                                                    <input type="text" name="full_name" id="full_name" >
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="checkout__input">
                                                    <p>Email<span>*</span></p>
                                                    <input type="email" name="email" id="email" >
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="checkout__input">
                                                    <p>Phone<span>*</span></p>
                                                    <input type="text" name="phone_number" id="phone_number" >
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="checkout__input">
                                                    <p>Address<span>*</span></p>
                                                    <input type="text" name="address" id="address" >
                                                </div>
                                            </div>
                                        </div>

                                        <button type="submit" name="update-account" class="site-btn">UDPATE</button>
                                    </form>
                                    
                                </div>
                            </div>
                            <div class="tab-pane fade" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                                <div class="container-fluid">
                                    <h2 class="mb-3 font-weight-bold">Orders</h2>
                                    
                                </div>
                            </div>
                            <div class="tab-pane fade" id="wish-list" role="tabpanel" aria-labelledby="wish-list-tab">
                                <div class="container-fluid">
                                    <h2 class="mb-3 font-weight-bold">Wish Lists</h2>
                                    
                                </div>
                            </div>
                            <div class="tab-pane fade" id="rewards" role="tabpanel" aria-labelledby="rewards-tab">
                                <div class="container-fluid">
                                    <h2 class="mb-3 font-weight-bold">Rewards</h2>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Checkout Section End -->

<?php
    // global footer - do not write file extension (.php)
    $this->view('include/footer');
?>