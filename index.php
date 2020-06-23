<?php   
        include_once('config/config.php');
        include_once('partials/header.php');
?>

    <section id="topmost">
        <div class="container">
            <div class="rowe">
                <div class="box text-center">
                    <p class="text-center">WE HAVE NEW DELIVERIES NOW |  <a href="#">VISIT SHOP</a></p>
                </div>
            </div>
        </div>
    </section>

    <section id="headertop" class="section">
        <div class="container">

            <div class="boxholder">

                <!-- holds social links name and some icons -->
                <div class="lineone">
                    <div class="sociallinks">
                        <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                    </div>
                    <div class="sitename"><a href="index.php" target="_blank" rel="noopener noreferrer">REENZA</a></div>
                    <div class="icons">
                        <i class="fa fa-shopping-cart" data-count="4b"><small class="text-primary" id="cartnum"></small></i>
                        <a href=""><i class="fa fa-user" aria-hidden="true"></i></a>
                    </div>
                </div>

                <!-- holds links to the site -->
                <div class="linetwo">
                    <a href="index.php">Home</a> 
                    |
                    <a href="shop.php">Shop</a>
                </div>
                <!-- holds main site mission for seo purpose -->
                <div class="linethree">
                    <h1>
                        Your Number One Online retail shop is here 
                    </h1>
                </div>
                <div class="linefour">
                    <a href="shop.php" type="button" class="btn btn-danger btn-lg">Visit Store</a>
                </div>
            </div>
        </div>
    </section>
    <section class="latestproducts text-center py-5">
        <div class="container">
            <div class="mainbox">
                <h2>LATEST PRODUCTS</h2>
                <P>We just got new deliveries</P>
                <div class="productbox">

                  <!--
                        product will be dynamically filled in 
                      -->
                </div>
            </div>
        </div>
    </section>

    <section class="singleproductnodal my-5 py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 px-5">
                    <div class="imgcontainer">
                        <img src="img/ree2.jpg"  alt=""  id="prdimg" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-6 px-5">
                    <h3>Product 101</h3>
                    <h5>#50000</h5>
                    <p class="text-justify">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aperiam corrupti nobis aliquid officiis, cupiditate omnis quas repellat similique numquam voluptatem obcaecati consequatur voluptas. Id impedit, soluta aliquid qui nemo harum?
                    </p>

                    <div class="lastdetail mt-5">
                        <input type="number"  id="qty" value="1">
                        <button type="button" class="btn btn-primary" id="">Add To Cart</button>
                    </div>
                </div>

            </div>
        </div>
        <button type="button" class="btn btn-danger" id="closespmodal">X</button>
    </section>


    <div class="cartcontent">
        <div class="container">
            <div class="row">

            </div>
        </div>
    </div>

    <section id="whyus">
        <div class="container">
            <div class="heading">
                <h2>WHY US?</h2>
                <p>Wonder what made us different from the rest?</p>
            </div>
            <div class="whyusbox">

                <div class="box">
                    <div class="icon">
                        <i class="fa fa-bus" aria-hidden="true"></i>
                    </div>
                    <div class="words">
                        <p class="head">
                            Free Delivery 
                        </p>
                        <p class="follow">
                            You get your product at no extra cost
                        </p>
                    </div>
                </div>

                <div class="box">
                    <div class="icon">
                        <i class="fa fa-fighter-jet" aria-hidden="true"></i>
                    </div>
                    <div class="words">
                        <p class="head">
                            Fast Delivery 
                        </p>
                        <p class="follow">
                            You get your product in three days or less
                        </p>
                    </div>
                </div>

                <div class="box">
                    <div class="icon">
                        <i class="fa fa-id-badge" aria-hidden="true"></i>
                    </div>
                    <div class="words">
                        <p class="head">
                            Quality Product
                        </p>
                        <p class="follow">
                            We sell only quality product, nothing less
                        </p>
                    </div>
                </div>






            </div>
        </div>
    </section>

    <section id="promopck">
        <div class="container">
            <div class="boxholder">
                <div class="imagepart">
                    <img src="img/reenzacombo.jpg" alt="" class="img-fluid">
                </div>
                <div class="textplace">
                    <p class="title">You get Discount on Combo Packs</p>
                    <h2>10% off</h2>
                    <a href="" class="btn btn-primary">View Combo Offer</a>
                    <small>Limited Time Offer</small>
                </div>
            </div>
        </div>
    </section>

    <section id="bestselling">
        <div class="container">
            <h2>BEST SELLERS</h2>
            <div class="bestsellingbox">

            <div class="box bsbox">
                <div class="imgcontainer">
                    <img src="img/ree1.jpg" alt="" class="img-fluid">
                </div>
                <div class="detail">
                    <p class="productname">PRODUCT NAME</p>
                    <p class="price">#20000</p>
                </div>
                <div class="hiddendetails">
                    <i class="fa fa-eye detailbtn" data-type="detail" data-product-id="${product.prdid}"> Detail </i>
                    <i class="fa fa-cart-plus buybtn" aria-hidden="true" data-type="buy" data-product-id="${product.prdid}"> Buy</i>               
                </div>
            </div>

            <div class="box bsbox">
                <div class="imgcontainer">
                    <img src="img/ree4.jpg" alt="" class="img-fluid">
                </div>
                <div class="detail">
                    <p class="productname">PRODUCT NAME</p>
                    <p class="price">#20000</p>
                </div>
                <div class="hiddendetails">
                    <i class="fa fa-eye detailbtn" data-type="detail" data-product-id="${product.prdid}"> Detail </i>
                    <i class="fa fa-cart-plus buybtn" aria-hidden="true" data-type="buy" data-product-id="${product.prdid}"> Buy</i>               
                </div>
            </div>

            </div>
        </div>
    </section>


    <section id="footer">
        <div class="container">
            <div class="falsefooter">
                <div class="boxone box">
                    <h3>REENZA STORE</h3>
                    <p>The best quality you can get online at the cheapest price is here. 
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos corporis sequi, doloribus quaerat necessitatibus itaqu
                    </p>
                </div>
                <div class="boxtwo box">
                    <div class="imgbox">
                    <img src="img/logo.jpg" class="img-fluid rounded-circle" alt="">
                    </div>
                    <div class="links">
                        <a href="">Home</a>
                        <a href="shop.php">Shop</a> 
                        <a href="admin2/index.php">Admin</a>
                    </div>
                    
                </div>
                <div class="boxthree box">
                    <h3>Contact Us</h3>
                    <div class="conbox">
                        <p class="text"><span><i class="fa fa-building" aria-hidden="true"></i></span> No 20 Detunde Street, Ketu</p>
                    </div>

                    <div class="conbox">
                        <p class="text"><span><i class="fa fa-phone" aria-hidden="true"></i></span> 08092346789 | 08097654323</p>
                    </div>

                    <div class="conbox">
                        <p class="text"> <span><i class="fa fa-envelope" aria-hidden="true"></i></span> enquries@reenza.com</p>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="copyrightsection">
                <p class="text-center">Copyright ©2019 All rights reserved </p>
            </div>
    </section>







<?php
        include_once('partials/footer.php');
?>