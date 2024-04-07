<div>
    <x-slot name="menud">
        @include('menud')
    </x-slot>


    <section class="breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcumb-cont">
                        <h2>Recommendeed PRODUCTs</h2>
                        <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat.</p>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcum-nav">
                        <h4>recommended Product </h4>
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li><a href="#">shop</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Breadcumb area end here-->
    <!--Recommanded products area start here-->
    <section class="recommended-products section">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="recommended-con">
                        <h4>Recommended Items for You</h4>
                        <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
                        <a href="#" class="btn1">SEE COLLECTION</a>
                    </div>
                </div>

                <div class="col-md-9 col-sm-8 col-xs-12 pd-0">
                    <div class="recommended-slider">

                        <div class="col-sm-12">
                            <div class="product-list">
                                <figure>
                                    <img src="images/products/r1.jpg" alt=""/>
                                </figure>
                                <div class="content">
                                    <h4><a href="#">Dark Scale T-Shirt</a> <span>$56</span></h4>
                                    <p>Soft and comforting outwear</p>
                                </div>
                            </div>
                        </div>



                        <div class="col-sm-12">
                            <div class="product-list">
                                <figure>
                                    <img src="images/products/r1.jpg" alt=""/>
                                </figure>
                                <div class="content">
                                    <h4><a href="#">Dark Scale T-Shirt</a> <span>$56</span></h4>
                                    <p>Soft and comforting outwear</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="product-list">
                                <figure>
                                    <img src="images/products/r1.jpg" alt=""/>
                                </figure>
                                <div class="content">
                                    <h4><a href="#">Dark Scale T-Shirt</a> <span>$56</span></h4>
                                    <p>Soft and comforting outwear</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="product-list">
                                <figure>
                                    <img src="images/products/r1.jpg" alt=""/>
                                </figure>
                                <div class="content">
                                    <h4><a href="#">Dark Scale T-Shirt</a> <span>$56</span></h4>
                                    <p>Soft and comforting outwear</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Recommanded products area end here-->
    <!--Product page area start here-->
    <section class="products-page section">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12">
                    <div class="sidebar">
                        <div class="widget">
                            <div class="heading">
                                <h4>Categories</h4>
                            </div>
                            <div class="categories-list">
                                <ul>
                                    <li><a href="#" class="active"><span><i class="fa fa-anchor"></i></span>Lifestyle Brand</a></li>
                                    <li><a href="#"><span><i class="fa fa-gavel"></i></span>Premium Stores</a></li>
                                    <li><a href="#"><span><i class="fa fa-rocket"></i></span>Thematic Stores</a></li>
                                    <li><a href="#"><span><i class="fa fa-bolt"></i></span>Originals</a></li>
                                    <li><a href="#"><span><i class="fa fa-bullhorn"></i></span>Exclusive Brands</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget">
                            <div class="heading">
                                <h4>Size</h4>
                            </div>
                            <div class="pro-size">
                                <ul class="list-inline">
                                    <li class="active"><span>m</span></li>
                                    <li><span>s</span></li>
                                    <li><span>l</span></li>
                                    <li><span>xl</span></li>
                                    <li><span>xxl</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget">
                            <div class="heading">
                                <h4>Price range</h4>
                            </div>
                            <div class="price-range">
                                <div class="range">
                                    <div id="range-price" class="range-box"></div>
                                    <span>Range :</span><input type="text" id="price" class="price-box" readonly/>
                                </div>
                                <button type="submit">FILTER</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 col-sm-12 pd-0">
                    <div class="col-sm-12">
                        <div class="pro-filter">
                            <p>Showing 1- 11 of 120 products</p>
                            <div class="gr-li">
                                <ul class="list-inline">
                                    <li><a href="#" id="gridview"><i class="fa fa-th"></i></a></li>
                                    <li><a href="#" id="listview"><i class="fa fa-list"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="pro-file">
                            <a href="#" class="btn1"><i class="fa fa-retweet pd-r5 f-16"></i>compare</a>
                            <div class="filtersd">
                                <select>
                                    <option> SORT BY LATEST ITEM</option>
                                    <option> new ITEM</option>
                                    <option> featured ITEM</option>
                                </select>
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div id="products" class="row">

                            @foreach ($products as $product)
                            <div class="item col-md-4 col-sm-6 col-xs-12">
                                <div class="product-list">
                                    <figure>
                                        <span class="offr">20%</span>
                                        <img src="/images/products/1.jpg" alt=""/>
                                        <ul>
                                            <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#"><i class="flaticon-repeat"></i></a></li>
                                            <li><a href="#"><i class="flaticon-shopping-cart"></i></a></li>
                                        </ul>
                                    </figure>
                                    <div class="content">
                                        <h4><a href="{{ route('product.singled.ecommerce', $product) }}">{{ $product->name }} </a> <span>{{ $product->productatributes->min('pricesale') }} </span></h4>
                                        <p class="grid-p">Soft and comforting outwear</p>
                                        <p class="list-p">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate.</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach


                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="paginations">
                            <ul>
                                <li><a href="#"><span>Pervious</span></a></li>
                                <li><a href="#" class="active">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">.....</a></li>
                                <li><a href="#">10</a></li>
                                <li><a href="#"><span>next</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--Product page area end here-->
    <!--Daily deal area start here-->
    <section class="daily-deal pd-t100 pd-b50 jarallax bg-img af">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="recent-post widghet">
                        <h4>Post From Blog</h4>
                        <div class="post-list">
                            <figure>
                                <img src="images/collections/4.jpg" alt=""/>
                            </figure>
                            <div class="content">
                                <h5><a href="#">This is Photoshop's version  of  lorem</a></h5>
                                <span>Dec 6 2022</span>
                            </div>
                        </div>
                        <div class="post-list">
                            <figure>
                                <img src="images/collections/4.jpg" alt=""/>
                            </figure>
                            <div class="content">
                                <h5><a href="#">This is Photoshop's version  of  lorem</a></h5>
                                <span>Dec 6 2022</span>
                            </div>
                        </div>
                        <div class="post-list">
                            <figure>
                                <img src="images/collections/4.jpg" alt=""/>
                            </figure>
                            <div class="content">
                                <h5><a href="#">This is Photoshop's version  of  lorem</a></h5>
                                <span>Dec 6 2022</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="products-deal widghet">
                        <h4>Top seller products</h4>
                        <div class="product-lists">
                            <figure>
                                <img src="images/collections/4.jpg" alt=""/>
                            </figure>
                            <div class="content">
                                <h5><a href="#">This is Photoshop's version  of  lorem</a></h5>
                                <span>$32</span>
                            </div>
                        </div>
                        <div class="product-lists">
                            <figure>
                                <img src="images/collections/5.jpg" alt=""/>
                            </figure>
                            <div class="content">
                                <h5><a href="#">This is Photoshop's version  of  lorem</a></h5>
                                <span>$32</span>
                            </div>
                        </div>
                        <div class="product-lists">
                            <figure>
                                <img src="images/collections/6.jpg" alt=""/>
                            </figure>
                            <div class="content">
                                <h5><a href="#">This is Photoshop's version  of  lorem</a></h5>
                                <span>$32</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="products-deal widghet">
                        <h4>Trendy Products</h4>
                        <div class="product-lists">
                            <figure>
                                <img src="images/collections/4.jpg" alt=""/>
                            </figure>
                            <div class="content">
                                <h5><a href="#">This is Photoshop's version  of  lorem</a></h5>
                                <span>$32</span>
                            </div>
                        </div>
                        <div class="product-lists">
                            <figure>
                                <img src="images/collections/5.jpg" alt=""/>
                            </figure>
                            <div class="content">
                                <h5><a href="#">This is Photoshop's version  of  lorem</a></h5>
                                <span>$32</span>
                            </div>
                        </div>
                        <div class="product-lists">
                            <figure>
                                <img src="images/collections/6.jpg" alt=""/>
                            </figure>
                            <div class="content">
                                <h5><a href="#">This is Photoshop's version  of  lorem</a></h5>
                                <span>$32</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="products-deal widghet">
                        <h4>Daily Deal Products</h4>
                        <div class="product-lists">
                            <figure>
                                <img src="images/collections/4.jpg" alt=""/>
                            </figure>
                            <div class="content">
                                <h5><a href="#">This is Photoshop's version  of  lorem</a></h5>
                                <span>$32</span>
                            </div>
                        </div>
                        <div class="product-lists">
                            <figure>
                                <img src="images/collections/5.jpg" alt=""/>
                            </figure>
                            <div class="content">
                                <h5><a href="#">This is Photoshop's version  of  lorem</a></h5>
                                <span>$32</span>
                            </div>
                        </div>
                        <div class="product-lists">
                            <figure>
                                <img src="images/collections/6.jpg" alt=""/>
                            </figure>
                            <div class="content">
                                <h5><a href="#">This is Photoshop's version  of  lorem</a></h5>
                                <span>$32</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





</div>
