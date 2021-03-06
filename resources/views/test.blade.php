@extends('welcome')
@section('content_body')


<div class="container">

    <div id="content">
        <div class="content-page">
            <div class="container">
                <div class="bread-crumb radius">
                    <a href="#">Home</a> <span>Fashion</span>
                </div>
                <!-- End Bread Crumb -->
                <div class="row">
                    <div class="col-md-9 col-sm-8 col-col-xs-12">
                        <div class="product-detail accordion-detail border radius">
                            <div class="row">
                                <div class="col-md-5 col-sm-12 col-xs-12">
                                    <div class="detail-gallery">
                                        <div class="mid"> 
                                            <img src="/frontend/images/photos/homeware/8.jpg" alt=""/>
                                        </div>
                                        <div class="gallery-control">
                                            <a href="#" class="prev"><i class="fa fa-angle-left"></i></a>
                                            <div class="carousel">
                                                <ul>
                                                    <li><a href="#" class="active"><img src="/frontend/images/photos/homeware/8.jpg" alt=""/></a></li>
                                                    <li><a href="#"><img src="/frontend/images/photos/homeware/3.jpg" alt=""/></a></li>
                                                    <li><a href="#"><img src="/frontend/images/photos/homeware/2.jpg" alt=""/></a></li>
                                                    <li><a href="#"><img src="/frontend/images/photos/homeware/4.jpg" alt=""/></a></li>
                                                    <li><a href="#"><img src="/frontend/images/photos/homeware/5.jpg" alt=""/></a></li>
                                                    <li><a href="#"><img src="/frontend/images/photos/homeware/7.jpg" alt=""/></a></li>
                                                </ul>
                                            </div>
                                            <a href="#" class="next"><i class="fa fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                    <!-- End Gallery -->
                                    <div class="detail-social">
                                        <ul class="list-social-detail list-inline-block">
                                            <li><a href="#" class="soci-fa soc-tumblr"><i class="fa fa-tumblr" aria-hidden="true"></i></a></li>
                                            <li><a href="#" class="soci-fa soc-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li><a href="#" class="soci-fa soc-twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="#" class="soci-fa soc-print"><i class="fa fa-print" aria-hidden="true"></i></a></li>
                                            <li>
                                                <div class="more-social">
                                                    <a class="soci-fa add-link soc-add" href="#"><i aria-hidden="true" class="fa fa-plus"></i><span>7</span></a>
                                                    <ul class="list-social-share list-none">
                                                        <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i><span>Youtute</span></a></li>
                                                        <li><a href="#"><i class="fa fa-linkedin"></i><span>linkedin</span></a></li>
                                                        <li><a href="#"><i class="fa fa-pinterest"></i><span>pinterest</span></a></li>
                                                        <li><a href="#"><i class="fa fa-google"></i><span>google</span></a></li>
                                                        <li><a href="#"><i class="fa fa-instagram"></i><span>instagram</span></a></li>
                                                        <li><a href="#"><i class="fa fa-flickr"></i><span>flickr</span></a></li>
                                                        <li><a href="#"><i class="fa fa-reddit"></i><span>reddit</span></a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-7 col-sm-12 col-xs-12">
                                    <div class="detail-info">
                                        <h2 class="title-detail">New Favorite</h2>
                                        <div class="product-rate">
                                            <div class="product-rating" style="width:90%"></div>
                                        </div>
                                        <p class="desc">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla paria tur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        <div class="product-price">
                                            <ins><span>$360.00</span></ins>
                                        </div>
                                        <div class="available">
                                            <strong>Availability: </strong>
                                            <span class="in-stock">In Stock</span>
                                        </div>
                                        <a class="mail-to-friend" href="#">Email to a Friend</a>
                                        <div class="attr-detail attr-color">
                                            <div class="attr-title">
                                                <strong><sup>*</sup>color:</strong><span class="current-color">White</span>
                                            </div>
                                            <ul class="list-filter color-filter"> 
                                                <li><a href="#" data-color="Red"><span style="background:#ff596d"></span></a></li>
                                                <li><a href="#" data-color="Yellow"><span style="background:#ffdb33"></span></a></li>
                                                <li class="active"><a href="#" data-color="White"><span style="background:#ffffff"></span></a></li>
                                                <li><a href="#" data-color="Orange"><span style="background:#ffbb51"></span></a></li>
                                                <li><a href="#" data-color="Cyan"><span style="background:#80e6ff"></span></a></li>
                                                <li><a href="#" data-color="Green"><span style="background:#38cf46"></span></a></li>
                                                <li><a href="#" data-color="Purple"><span style="background:#ff8ff8"></span></a></li>
                                            </ul>
                                        </div>	
                                        <div class="attr-detail attr-size">
                                            <div class="attr-title">
                                                <strong><sup>*</sup>Size:</strong><span class="current-size">M</span>
                                            </div>
                                            <ul class="list-filter size-filter">
                                                <li><a href="#">s</a></li>
                                                <li class="active"><a href="#">m</a></li>
                                                <li><a href="#">l</a></li>
                                                <li><a href="#">xl</a></li>
                                                <li><a href="#">2xl</a></li>
                                            </ul> 
                                        </div>	
                                        <div class="detail-extralink">
                                            <div class="detail-qty border radius">
                                                <a href="#" class="qty-down"><i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                                <span class="qty-val">1</span>
                                                <a href="#" class="qty-up"><i class="fa fa-caret-up" aria-hidden="true"></i></a>
                                            </div>
                                            <div class="product-extra-link2">
                                                <a class="addcart-link" href="#">Add to Cart</a>
                                                <a class="wishlist-link" href="#"><i aria-hidden="true" class="fa fa-heart"></i></a>
                                                <a class="compare-link" href="#"><i aria-hidden="true" class="fa fa-refresh"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Detail Info -->
                                </div>
                            </div>
                            <div class="tab-detal toggle-tab">
                                <div class="item-toggle-tab active">
                                    <h2 class="toggle-tab-title title14 radius border">Description</h2>
                                    <div class="toggle-tab-content">
                                        <div class="content-detail-tab">
                                            <div class="detail-tab-thumb">
                                                <img src="/frontend/images/shop/tab-img.png" alt="" />
                                            </div>
                                            <div class="detail-tab-info">
                                                <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid unt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercit a tion ulla mco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehen derit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident est laborum.</p>
                                                <ul>
                                                    <li>Any Product types that You want - Simple, Configurable, Bundled and Grouped Products</li>
                                                    <li>Downloadable/Digital Products, Virtual Products</li>
                                                    <li>Inventory Management with Backordered items</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-toggle-tab">
                                    <h2 class="toggle-tab-title title14 radius border">Tags</h2>
                                    <div class="toggle-tab-content">
                                        <div class="content-detail-tab">
                                            <div class="detail-tab-thumb">
                                                <img src="/frontend/images/shop/tab-img.png" alt="" />
                                            </div>
                                            <div class="detail-tab-info">
                                                <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid unt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercit a tion ulla mco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehen derit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident est laborum.</p>
                                                <ul>
                                                    <li>Any Product types that You want - Simple, Configurable, Bundled and Grouped Products</li>
                                                    <li>Downloadable/Digital Products, Virtual Products</li>
                                                    <li>Inventory Management with Backordered items</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-toggle-tab">
                                    <h2 class="toggle-tab-title title14 radius border">Reviews</h2>
                                    <div class="toggle-tab-content">
                                        <div class="content-detail-tab">
                                            <div class="detail-tab-thumb">
                                                <img src="/frontend/images/shop/tab-img.png" alt="" />
                                            </div>
                                            <div class="detail-tab-info">
                                                <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid unt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercit a tion ulla mco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehen derit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident est laborum.</p>
                                                <ul>
                                                    <li>Any Product types that You want - Simple, Configurable, Bundled and Grouped Products</li>
                                                    <li>Downloadable/Digital Products, Virtual Products</li>
                                                    <li>Inventory Management with Backordered items</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-toggle-tab">
                                    <h2 class="toggle-tab-title title14 radius border">Sizing Guide</h2>
                                    <div class="toggle-tab-content">
                                        <div class="content-detail-tab">
                                            <div class="detail-tab-thumb">
                                                <img src="/frontend/images/shop/tab-img.png" alt="" />
                                            </div>
                                            <div class="detail-tab-info">
                                                <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid unt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercit a tion ulla mco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehen derit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident est laborum.</p>
                                                <ul>
                                                    <li>Any Product types that You want - Simple, Configurable, Bundled and Grouped Products</li>
                                                    <li>Downloadable/Digital Products, Virtual Products</li>
                                                    <li>Inventory Management with Backordered items</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-toggle-tab">
                                    <h2 class="toggle-tab-title title14 radius border">Custom Tab</h2>
                                    <div class="toggle-tab-content">
                                        <div class="content-detail-tab">
                                            <div class="detail-tab-thumb">
                                                <img src="/frontend/images/shop/tab-img.png" alt="" />
                                            </div>
                                            <div class="detail-tab-info">
                                                <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid unt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercit a tion ulla mco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehen derit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident est laborum.</p>
                                                <ul>
                                                    <li>Any Product types that You want - Simple, Configurable, Bundled and Grouped Products</li>
                                                    <li>Downloadable/Digital Products, Virtual Products</li>
                                                    <li>Inventory Management with Backordered items</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Main Detail -->
                        <div class="product-related border radius">
                            <h2 class="title18">ALSO PURCHASED</h2>
                            <div class="product-related-slider">
                                <div class="wrap-item" data-itemscustom="[[0,1],[480,2],[980,3],[1200,4]]" data-pagination="false" data-navigation="true">
                                    <div class="item-pro-color">
                                        <div class="product-thumb">
                                            <a href="detail.html" class="product-thumb-link">
                                                <img data-color="black" class="active" src="/frontend/images/photos/fashion/2.jpg" alt="">
                                                <img data-color="purple" src="/frontend/images/photos/fashion/1.jpg" alt="">
                                                <img data-color="blue" src="/frontend/images/photos/fashion/3.jpg" alt="">
                                                <img data-color="cyan" src="/frontend/images/photos/fashion/4.jpg" alt="">
                                            </a>
                                            <a href="quick-view.html" class="quickview-link plus fancybox.iframe"><span>quick view</span></a>
                                        </div>
                                        <div class="product-info">
                                            <div class="list-color">
                                                <a href="#" data-color="black" style="background:#404040"></a>
                                                <a href="#" data-color="purple" style="background:#ff8ff8"></a>
                                                <a href="#" data-color="blue" style="background:#868fff"></a>
                                                <a href="#" data-color="cyan" style="background:#80e6ff"></a>
                                            </div>
                                            <h3 class="product-title"><a href="detail.html">new favorite</a></h3>
                                            <div class="product-price">
                                                <ins><span>$360.00</span></ins>
                                                <del><span>$400.00</span></del>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-pro-color">
                                        <div class="product-thumb">
                                            <div class="product-label">
                                                <span class="new-label">new</span>
                                                <span class="sale-label">sale</span>
                                            </div>
                                            <a href="detail.html" class="product-thumb-link">
                                                <img data-color="yellow" class="active" src="/frontend/images/photos/fashion/9.jpg" alt="">
                                                <img data-color="red" src="/frontend/images/photos/fashion/10.jpg" alt="">
                                            </a>
                                            <a href="quick-view.html" class="quickview-link plus fancybox.iframe"><span>quick view</span></a>
                                        </div>
                                        <div class="product-info">
                                            <div class="list-color">
                                                <a href="#" data-color="yellow" style="background:#ffdb33"></a>
                                                <a href="#" data-color="red" style="background:#ff596d"></a>
                                            </div>
                                            <h3 class="product-title"><a href="detail.html">new favorite</a></h3>
                                            <div class="product-price">
                                                <ins><span>$360.00</span></ins>
                                                <del><span>$400.00</span></del>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-pro-color">
                                        <div class="product-thumb">
                                            <a href="detail.html" class="product-thumb-link">
                                                <img data-color="purple" class="active" src="/frontend/images/photos/fashion/8.jpg" alt="">
                                                <img data-color="blue" src="/frontend/images/photos/fashion/7.jpg" alt="">
                                            </a>
                                            <a href="quick-view.html" class="quickview-link plus fancybox.iframe"><span>quick view</span></a>
                                        </div>
                                        <div class="product-info">
                                            <div class="list-color">
                                                <a href="#" data-color="purple" style="background:#ff8ff8"></a>
                                                <a href="#" data-color="blue" style="background:#868fff"></a>
                                            </div>
                                            <h3 class="product-title"><a href="detail.html">new favorite</a></h3>
                                            <div class="product-price">
                                                <ins><span>$360.00</span></ins>
                                                <del><span>$400.00</span></del>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-pro-color">
                                        <div class="product-thumb">
                                            <a href="detail.html" class="product-thumb-link">
                                                <img data-color="black" class="active" src="/frontend/images/photos/fashion/10.jpg" alt="">
                                                <img data-color="green" src="/frontend/images/photos/fashion/9.jpg" alt="">
                                                <img data-color="blue" src="/frontend/images/photos/fashion/8.jpg" alt="">
                                            </a>
                                            <a href="quick-view.html" class="quickview-link plus fancybox.iframe"><span>quick view</span></a>
                                        </div>
                                        <div class="product-info">
                                            <div class="list-color">
                                                <a href="#" data-color="black" style="background:#404040"></a>
                                                <a href="#" data-color="green" style="background:#c3f1c7"></a>
                                                <a href="#" data-color="blue" style="background:#868fff"></a>
                                            </div>
                                            <h3 class="product-title"><a href="detail.html">new favorite</a></h3>
                                            <div class="product-price">
                                                <ins><span>$360.00</span></ins>
                                                <del><span>$400.00</span></del>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-pro-color">
                                        <div class="product-thumb">
                                            <a href="detail.html" class="product-thumb-link">
                                                <img data-color="purple" class="active" src="/frontend/images/photos/fashion/12.jpg" alt="">
                                                <img data-color="blue" src="/frontend/images/photos/fashion/7.jpg" alt="">
                                            </a>
                                            <a href="quick-view.html" class="quickview-link plus fancybox.iframe"><span>quick view</span></a>
                                        </div>
                                        <div class="product-info">
                                            <div class="list-color">
                                                <a href="#" data-color="purple" style="background:#ff8ff8"></a>
                                                <a href="#" data-color="blue" style="background:#868fff"></a>
                                            </div>
                                            <h3 class="product-title"><a href="detail.html">new favorite</a></h3>
                                            <div class="product-price">
                                                <ins><span>$360.00</span></ins>
                                                <del><span>$400.00</span></del>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-pro-color">
                                        <div class="product-thumb">
                                            <a href="detail.html" class="product-thumb-link">
                                                <img data-color="black" class="active" src="/frontend/images/photos/fashion/13.jpg" alt="">
                                                <img data-color="green" src="/frontend/images/photos/fashion/9.jpg" alt="">
                                                <img data-color="blue" src="/frontend/images/photos/fashion/8.jpg" alt="">
                                            </a>
                                            <a href="quick-view.html" class="quickview-link plus fancybox.iframe"><span>quick view</span></a>
                                        </div>
                                        <div class="product-info">
                                            <div class="list-color">
                                                <a href="#" data-color="black" style="background:#404040"></a>
                                                <a href="#" data-color="green" style="background:#c3f1c7"></a>
                                                <a href="#" data-color="blue" style="background:#868fff"></a>
                                            </div>
                                            <h3 class="product-title"><a href="detail.html">new favorite</a></h3>
                                            <div class="product-price">
                                                <ins><span>$360.00</span></ins>
                                                <del><span>$400.00</span></del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Product Related -->
                    </div>
                    <div class="col-md-3 col-sm-4 col-col-xs-12">
                        <div class="sidebar sidebar-right">
                            <div class="list-detail-adv">
                                <div class="detail-adv">
                                    <a href="#"><img class="radius wobble-horizontal" alt="" src="/frontend/images/shop/pro-adv1.jpg"></a>
                                </div>
                                <div class="detail-adv">
                                    <a href="#"><img class="radius wobble-horizontal" alt="" src="/frontend/images/shop/pro-adv2.jpg"></a>
                                </div>
                                <div class="detail-adv">
                                    <a href="#"><img class="radius wobble-horizontal" alt="" src="/frontend/images/shop/pro-adv3.jpg"></a>
                                </div>
                            </div>
                            <div class="widget widget-seller">
                                <h2 class="widget-title title14">best sellers</h2>
                                <div class="widget-content">
                                    <div class="wrap-item" data-pagination="false" data-navigation="true" data-items="[[0,1]]">
                                        <div class="list-pro-seller">
                                            <div class="item-pro-seller">
                                                <div class="product-thumb">
                                                    <a href="#" class="product-thumb-link"><img src="/frontend/images/photos/homeware/8.jpg" alt="" /></a>
                                                </div>
                                                <div class="product-info">
                                                    <h3 class="product-title"><a href="detail.html">new favorite</a></h3>
                                                    <div class="product-price">
                                                        <ins><span>$360.00</span></ins>
                                                        <del><span>$400.00</span></del>
                                                    </div>
                                                    <div class="product-rate">
                                                        <div style="width:90%" class="product-rating"></div>
                                                    </div>
                                                </div>
                                            </div>	
                                            <div class="item-pro-seller">
                                                <div class="product-thumb">
                                                    <a href="#" class="product-thumb-link"><img src="/frontend/images/photos/homeware/2.jpg" alt="" /></a>
                                                </div>
                                                <div class="product-info">
                                                    <h3 class="product-title"><a href="detail.html">new favorite</a></h3>
                                                    <div class="product-price">
                                                        <ins><span>$360.00</span></ins>
                                                        <del><span>$400.00</span></del>
                                                    </div>
                                                    <div class="product-rate">
                                                        <div style="width:90%" class="product-rating"></div>
                                                    </div>
                                                </div>
                                            </div>	
                                            <div class="item-pro-seller">
                                                <div class="product-thumb">
                                                    <a href="#" class="product-thumb-link"><img src="/frontend/images/photos/homeware/9.jpg" alt="" /></a>
                                                </div>
                                                <div class="product-info">
                                                    <h3 class="product-title"><a href="detail.html">new favorite</a></h3>
                                                    <div class="product-price">
                                                        <ins><span>$360.00</span></ins>
                                                        <del><span>$400.00</span></del>
                                                    </div>
                                                    <div class="product-rate">
                                                        <div style="width:90%" class="product-rating"></div>
                                                    </div>
                                                </div>
                                            </div>		
                                        </div>	
                                        <div class="list-pro-seller">
                                            <div class="item-pro-seller">
                                                <div class="product-thumb">
                                                    <a href="#" class="product-thumb-link"><img src="/frontend/images/photos/homeware/3.jpg" alt="" /></a>
                                                </div>
                                                <div class="product-info">
                                                    <h3 class="product-title"><a href="detail.html">new favorite</a></h3>
                                                    <div class="product-price">
                                                        <ins><span>$360.00</span></ins>
                                                        <del><span>$400.00</span></del>
                                                    </div>
                                                    <div class="product-rate">
                                                        <div style="width:90%" class="product-rating"></div>
                                                    </div>
                                                </div>
                                            </div>	
                                            <div class="item-pro-seller">
                                                <div class="product-thumb">
                                                    <a href="#" class="product-thumb-link"><img src="/frontend/images/photos/homeware/4.jpg" alt="" /></a>
                                                </div>
                                                <div class="product-info">
                                                    <h3 class="product-title"><a href="detail.html">new favorite</a></h3>
                                                    <div class="product-price">
                                                        <ins><span>$360.00</span></ins>
                                                        <del><span>$400.00</span></del>
                                                    </div>
                                                    <div class="product-rate">
                                                        <div style="width:90%" class="product-rating"></div>
                                                    </div>
                                                </div>
                                            </div>	
                                            <div class="item-pro-seller">
                                                <div class="product-thumb">
                                                    <a href="#" class="product-thumb-link"><img src="/frontend/images/photos/homeware/10.jpg" alt="" /></a>
                                                </div>
                                                <div class="product-info">
                                                    <h3 class="product-title"><a href="detail.html">new favorite</a></h3>
                                                    <div class="product-price">
                                                        <ins><span>$360.00</span></ins>
                                                        <del><span>$400.00</span></del>
                                                    </div>
                                                    <div class="product-rate">
                                                        <div style="width:90%" class="product-rating"></div>
                                                    </div>
                                                </div>
                                            </div>		
                                        </div>									
                                    </div>
                                </div>
                            </div>
                            <!-- End widget -->
                        </div>
                    </div>
                </div>
            </div>	
        </div>
    </div>
      
</div>



@endsection