@extends('layout')

@section('content')
<!--SHOP-->
<div id="shop-wrap">
    <section id="shop">
        <aside class="left">
            <!--CATEGORIES-->
            <article>
                <h2><span>Categories</span></h2>
                <hr><hr>
                <ul class="cat-menu">
                    <li><a href="sushi-rolls.html">Sushi and Rolls</a></li>
                    <li><a href="cold-entrees.html">Cold Entrees</a></li>
                    <li><a href="soups-dishes.html">Soups and Hot Dishes</a></li>
                    <li><a href="sweets-desserts.html">Sweets and Desserts</a></li>
                    <li><a href="beverages-drinks.html">Beverages and Drinks</a></li>
                </ul>						
            </article>
            <!--/CATEGORIES-->

            <!--NEW DISHES-->
            <article id="new-dishes">		
                <h2><span>New</span> Dishes</h2>
                <hr><hr>				
                <ul class="new-dishes">
                    <!--DISH ITEM-->
                    <li>
                        <div class="circle tiny">
                            <figure class="imgLiquidFill">
                                <img src="images/menu-05.jpg" alt="dish">
                            </figure>
                            <div class="shadow"></div>
                            <a href="#">
                                <div class="fill red tooltip" title="Add to cart">
                                    <img src="images/plus-icon.png" alt="plus-icon">
                                </div>
                            </a>
                        </div>
                        <a href="southern-teriyaki.html"><h6>Southern Teriyaki</h6></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp</p>
                    </li>
                    <!--/DISH ITEM-->

                    <!--DISH ITEM-->
                    <li>
                        <div class="circle tiny">
                            <figure class="imgLiquidFill">
                                <img src="images/menu-07.jpg" alt="dish">
                            </figure>
                            <div class="shadow"></div>
                            <a href="#">
                                <div class="fill red tooltip" title="Add to cart">
                                    <img src="images/plus-icon.png" alt="plus-icon">
                                </div>
                            </a>
                        </div>
                        <a href="octopus-takoyaki.html"><h6>Red Octopus Takoyaki</h6></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp</p>
                    </li>
                    <!--/DISH ITEM-->

                    <!--DISH ITEM-->
                    <li>
                        <div class="circle tiny">
                            <figure class="imgLiquidFill">
                                <img src="images/menu-04.jpg" alt="dish">
                            </figure>
                            <div class="shadow"></div>
                            <a href="#">
                                <div class="fill red tooltip" title="Add to cart">
                                    <img src="images/plus-icon.png" alt="plus-icon">
                                </div>
                            </a>
                        </div>
                        <a href="onion-soup.html"><h6>Spicy Onion Soup</h6></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp</p>
                    </li>
                    <!--/DISH ITEM-->

                    <!--DISH ITEM-->
                    <li>
                        <div class="circle tiny">
                            <figure class="imgLiquidFill">
                                <img src="images/menu-10.jpg" alt="dish">
                            </figure>
                            <div class="shadow"></div>
                            <a href="#">
                                <div class="fill red tooltip" title="Add to cart">
                                    <img src="images/plus-icon.png" alt="plus-icon">
                                </div>
                            </a>
                        </div>
                        <a href="chocolate-cookies.html"><h6>Crispy Chocolate Cookies</h6></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp</p>
                    </li>
                    <!--/DISH ITEM-->
                </ul>
            </article>
            <!--/NEW DISHES-->
            <img src="images/banner-small-01.png" alt="banner">
        </aside>
        <article class="right">
            <!--ITEM DETAIL-->
            <article id="item-detail">
                <h2><span>Cold</span> Entrees</h2>
                <hr><hr>
                <div class="circle large">
                    <figure class="imgLiquidFill">
                        <img src="images/menu-03.jpg" alt="item">
                    </figure>
                    <div class="shadow"></div>
                    <div class="fill"></div>
                </div>
                <article>
                    <h3>Kerinachi Rice<span>$67.00</span></h3>
                    <ul class="rate stars">
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li class="empty"></li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation co laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in endein uptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint.</p>
                    <div class="quantity">
                        <p>Quantity</p>
                        <div>2</div>
                        <a href="#" class="counter up"></a>
                        <a href="#" class="counter down"></a>
                    </div>
                    <!-- facebook like button -->
                    <div class="fb-like" data-href="http://www.your-domain123.com" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
                    <!-- twitter share button -->
                    <a class="twitter-share-button" href="https://twitter.com/share">Tweet</a>
                    <!-- google +1 button -->
                    <div class="google-btn">
                        <div class="g-plusone" data-size="medium" data-href="http://www.your-domain123.com"></div>
                    </div>
                    <div class="cleaner"></div>
                    <a href="#" class="button red">Add to Cart</a>
                    <p class="quantity">1 Serving</p>
                    <a href="#" class="button wishlist red">Add to Wishlist</a>
                </article>
                <div class="cleaner"></div>
            </article>
            <!--/ITEM DETAIL-->

            <!--ITEM REVIEWS-->
            <article id="item-reviews">
                <h2>Dish <span>Reviews</span></h2>
                <hr><hr>
                <!--REVIEW-->
                <article>
                    <h6>Jhonathan Envato - <span>07/23/14</span></h6>
                    <ul class="rate stars">
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation co laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in endein uptate velit esse cillum dolore eu fugiat nulla eru pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</p>
                </article>
                <!--/REVIEW-->

                <!--REVIEW-->
                <article class="last">
                    <h6>Tina Forest - <span>05/21/14</span></h6>
                    <ul class="rate stars">
                        <li></li>
                        <li></li>
                        <li></li>
                        <li class="empty"></li>
                        <li class="empty"></li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation co laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in endein uptate velit esse cillum dolore eu fugiat nulla eru pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</p>
                </article>
                <!--/REVIEW-->

                <ul id="pager">
                    <li><a href="#">&lt;</a></li>
                    <li><a href="#">1</a></li>
                    <li class="selected"><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">&gt;</a></li>
                </ul>
            </article>
            <!--/ITEM REVIEWS-->

            <!--REVIEW INPUT-->
            <article id="review-input">
                <h2>Write a <span>Review</span></h2>
                <hr><hr>
                <p>You must be logged in to write a review. Don’t you have an account yet? <a href="#">click here</a> to register!</p>
                <form>
                    <label for="review">Dish Review</label>
                    <textarea name="review" id="review" placeholder="Write your product review here!..."></textarea>
                </form>
                <article>
                    <p>Stars Review:</p>
                    <ul class="rate stars">
                        <li></li>
                        <li></li>
                        <li></li>
                        <li class="empty"></li>
                        <li class="empty"></li>
                    </ul>
                    <a href="#" class="button red">Post Your Review</a>
                </article>
            </article>
            <!--/REVIEW INPUT-->
        </article>
        <div class="cleaner"></div>
    </section>
</div>
<!--/SHOP-->

<!--PROMO-->
<div id="promo-wrap">
    <section id="promo">
        <h6>Don't Waste any time</h6>
        <h3>Create your account and save your info!</h3>
        <a href="#" class="button popup register">Click here to register</a>
    </section>
</div>
<!--/PROMO-->
@endsection

@section('js')
<!--Item-->
<script src="js/item.js"></script>
<!--Tweet Widget-->
<script>
window.twttr=(function(d,s,id){var t,js,fjs=d.getElementsByTagName(s)[0];if(d.getElementById(id)){return}js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);return window.twttr||(t={_e:[],ready:function(f){t._e.push(f)}})}(document,"script","twitter-wjs"));
</script>
@endsection