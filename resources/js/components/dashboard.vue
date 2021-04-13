<template>
    <div class="container" style="margin-top: 50px;margin-bottom: 200px;">

        <div class="row d-none">
            <div class="col">
                <div class="banner-image banner-image6">
				    <a href="#"><img src="frontend/images/home6/bn1.jpg" alt=""></a>
			    </div>
            </div>
        </div>


        <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-col-xs-12">
						<div class="sidebfadsfarr sidefasdfbar-righasdftt">
							<div class="list-detail-adv">
								<div class="detail-adv">
									<div class="custom" style="width: 100%;height: 100px;margin-left: 0%;background-color: #009BDB">
                                        <div class="d-flex flex-row">
                                            <div class="p-4 align-self-start mt-2">
                                                <i class="fas fa-money-check-alt" style="font-size: 25px; color: #fff;"></i> 
                                            </div>
                                            <div class="text-light">
                                                <span class="d-block pt-4 px-4" style="font-weight: 600; font-size: 20px;">{{user.user_main_balance}} BDT</span>
                                                <span class="d-block pt-4 px-4" style="font-size: 18px;">Main Balance</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
							</div>
						</div>
				</div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-col-xs-12">
						<div class="sidebfadsfarr sidefasdfbar-righasdftt">
							<div class="list-detail-adv">
								<div class="detail-adv">
									<div class="custom" style="width: 100%;height: 100px;margin-left: 0%;background-color: #00D396">
                                        <div class="d-flex flex-row">
                                            <div class="p-4 align-self-start mt-2">
                                                <i class="fas fa-money-check-alt" style="font-size: 25px; color: #fff;"></i> 
                                            </div>
                                            <div class="text-light">
                                                <span class="d-block pt-4 px-4" style="font-weight: 600; font-size: 20px;">{{user.user_cashback_balance}} BDT</span>
                                                <span class="d-block pt-4 px-4" style="font-size: 18px;">Cashback</span>
                                            </div>
                                        </div>
                                    </div>
								</div>
							</div>
						</div>
				</div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-col-xs-12">
						<div class="sidebfadsfarr sidefasdfbar-righasdftt">
							<div class="list-detail-adv">
								<div class="detail-adv">
									<div class="custom" style="width: 100%;height: 100px;margin-left: 0%;background-color: #FF6A66">
                                        <div class="d-flex flex-row">
                                            <div class="p-4 align-self-start mt-2">
                                                <i class="fas fa-money-check-alt" style="font-size: 25px; color: #fff;"></i> 
                                            </div>
                                            <div class="text-light">
                                                <span class="d-block pt-4 px-4" style="font-weight: 600; font-size: 20px;">0</span>
                                                <span class="d-block pt-4 px-4" style="font-size: 18px;">Demo</span>
                                            </div>
                                        </div>
                                    </div>
								</div>
							</div>
						</div>
				</div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-col-xs-12">
						<div class="sidebfadsfarr sidefasdfbar-righasdftt">
							<div class="list-detail-adv">
								<div class="detail-adv">
									<!-- <a href="#"><img class="radius wobble-horizontal" alt="" src="frontend/images/shop/pro-adv3.jpg"></a> -->
                                    <div class="custom" style="width: 100%;height: 100px;margin-left: 0%;background-color: #FF6A66">
                                        <div class="d-flex flex-row">
                                            <div class="p-4 align-self-start mt-2">
                                                <i class="fas fa-money-check-alt" style="font-size: 25px; color: #fff;"></i> 
                                            </div>
                                            <div class="text-light">
                                                <span class="d-block pt-4 px-4" style="font-weight: 600; font-size: 20px;">0</span>
                                                <span class="d-block pt-4 px-4" style="font-size: 18px;">Demo</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
							</div>
						</div>
				</div>
        </div>

        <div class="row">
            <div class="col">
                <div class="alert" style="background: #009AD8;" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"> 
                    <strong class="text-light">Upload Money!</strong> <span class="text-light" >Indicates a successful or positive action.</span>
                </div>

                <div class="collapse my-3" id="collapseExample">
                    <div class="card card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <form class="user" > 

                                        <div class="form-group">

                                        <div class="form-row">
                                            <div class="col-12 mb-2">
                                                <label id="money">Input Upload Amount </label>
                                                <input type="number" class="form-control" id="money" min="100">
                                                <small class="text-danger">  </small> 
                                            </div>

                                        </div>
                                        </div>

                                        <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-block">Proceed</button>
                                        </div>

                                    </form>
                            </div>
                            <div class="col-md-6">
                                <ul class="list-none">
										<li>
											<div class="shop-thumb6">
												<a href="#"><img src="frontend/images/home6/ic1.png" alt=""></a>
											</div>
											<div class="shop-info6 mt-2">
												<strong>Upload money added to Main Balance</strong>
												<p>Minimum Upload 100 BDT</p>
											</div>
										</li>
										
									</ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <section>
            <div class="row">
					<div class="col-md-3 col-sm-4 col-xs-12">
						<div class="sidebar sidebar-left">
                            <!--FIRST LAYER-->
							<div class="widget widget-product-cat">
								<h2 class="widget-title title14">Activity</h2>
								<div class="widget-content">
									<ul>
										<li><a href="#">Order History</a></li>
										<li><a href="#">Transaction History</a></li>
										<li><a href="#">Active Order</a></li>
										<li><a href="#">Complete Order</a></li>
										<li><a href="#">My Wishlist</a></li>
									</ul>
								</div>
							</div>

                            <!--SECOND LAYER-->
                                            
                            <div class="widget widget-product-cat">
								<h2 class="widget-title title14">Profile</h2> 
								<div class="widget-content">
									<ul> 
										<li><router-link to="edit-profile">Edit Profile</router-link></li>
										<li><router-link to="password-change">Password Change</router-link></li>
										<li><router-link to="logout"  class="text-danger">Logout</router-link></li>
										
									</ul>
								</div>
							</div>
							
						</div>
					</div>
					<div class="col-md-9 col-sm-8 col-xs-12">
						<div class="content-blog-page border radius">

							<!-- End Sort PagiBar -->
							<div class="content-blog-small">
								<div class="item-post-small">
									<div class="row">
										<div class="col-md-4 col-sm-6 col-xs-12">
											<div class="post-thumbb mt-2">
												<div class="wrap-item" data-itemscustom="[[0,1]]" data-navigation="false" data-pagination="false">
													<a href="javascript:void(0)" style="cursor: text;" class="post-thumb-link"><img :src="user.avatar" style="width: 60%;margin-left: 0%;" alt="" /></a>
												</div>
											</div> 
										</div> 
										<div class="col-md-8 col-sm-6 col-xs-12"> 
											<div class="post-info">
												<!-- <ul class="post-date-comment">
													<li><i class="fa fa-calendar-o" aria-hidden="true"></i><span>Dec.8.2016</span></li>
												</ul> -->
												<h3 class="post-title">{{user.name}}</h3>  
												<h5 class="a" ><i class="fas fa-phone-volume" style="color: #0099D5;font-size: 20px;"></i> <span style="font-size: 16px;"> {{user.phone}}</span> </h5>
                                                <h5 class="a" ><i class="far fa-envelope" style="color: #0099D5;font-size: 19px;"></i> <span style="font-size: 16px;"> {{user.email}}</span></h5>
                                                <h5 class="a" ><i class="fas fa-map-marker-alt" style="color: #0099D5;font-size: 19px;"></i> <span style="font-size: 16px;"> {{location.city}}</span></h5>

											</div>
										</div>
									</div>
                                    <div class="row ml-3 mt-5">
                                                    <div class="col-12">
                                                        <div class="order-return">
                                                            <ul class="list-none">
                                                                <li>
                                                                    <a href="#"><img class="pulse" src="frontend/images/home3/icon3.png" alt="" /></a>
                                                                    <strong>Hassle Free</strong>
                                                                </li>

                                                                <li>
                                                                    <a href="#"><img class="pulse" src="frontend/images/home3/icon1.png" alt="" /></a>
                                                                    <strong>Quick Delivery</strong>
                                                                </li>
                                                                <li>
                                                                    <a href="#"><img class="pulse" src="frontend/images/home3/icon2.png" alt="" /></a>
                                                                    <strong>Low Cost</strong>
                                                                </li>
                                                                
                                                            </ul>
                                                        </div>
						                            </div>
                                                </div>
								</div>
                                                
							</div>
                                                
						</div>
                        
					</div>
				</div>
        </section>

        
    </div>
</template>

<script>
    export default {
        created() {
            if (window.location.pathname=='/dashboardd') {
                //document.getElementById('reg').style.display='none'; 
                console.log('Auth Id: '+window.auth); 
            }  
                let id = window.auth            
                axios.get('/api/get/user/data/'+id)
                .then(({data}) =>(this.user=data)) 
                .catch(console.log('error')) 

                axios.get('/api/get/user/location')
                .then(({data}) =>(this.location=data)) 
                .catch(console.log('error'))

                

        },
        data(){ 
                return {
                    user:{
                        name: '',
                        email: '',
                        phone: '',
                        phone_verify: '',
                        last_otp: '',
                        avatar: '',
                        gender: '',
                        birthday: '',
                        nid: '',
                        user_main_balance: '',
                        user_cashback_balance: '',
                        district: '',
                        postcode: '',
                        thana: '',
                        date: '',
                        time: '',
                    },
                    location:{
                        ip: '',
                        city: '',
                    },
                    product:{
                        product_name:null,
                    },
                errors:{}
                }
        },
    }
</script>
