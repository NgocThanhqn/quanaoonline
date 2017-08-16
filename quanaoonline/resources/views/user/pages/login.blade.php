@extends('user.master')
@section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="special-deal leftbar" style="margin-top:0;">
                        <h4 class="title">
                            Special
                            <strong>
                                Deals
                            </strong>
                        </h4>
                        <div class="special-item">
                            <div class="product-image">
                                <a href="details.html">
                                    <img src="images/products/thum/products-01.png" alt="">
                                </a>
                            </div>
                            <div class="product-info">
                                <p>
                                    <a href="details.html">
                                        Licoln Corner Unit
                                    </a>
                                </p>
                                <h5 class="price">
                                    $300.00
                                </h5>
                            </div>
                        </div>
                        <div class="special-item">
                            <div class="product-image">
                                <a href="details.html">
                                    <img src="images/products/thum/products-02.png" alt="">
                                </a>
                            </div>
                            <div class="product-info">
                                <p>
                                    <a href="details.html">
                                        Licoln Corner Unit
                                    </a>
                                </p>
                                <h5 class="price">
                                    $300.00
                                </h5>
                            </div>
                        </div>
                        <div class="special-item">
                            <div class="product-image">
                                <a href="details.html">
                                    <img src="images/products/thum/products-03.png" alt="">
                                </a>
                            </div>
                            <div class="product-info">
                                <p>
                                    <a href="details.html">
                                        Licoln Corner Unit
                                    </a>
                                </p>
                                <h5 class="price">
                                    $300.00
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="product-tag leftbar">
                        <h3 class="title">
                            Products
                            <strong>
                                Tags
                            </strong>
                        </h3>
                        <ul>
                            <li>
                                <a href="#">
                                    Lincoln us
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    SDress for Girl
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Corner
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Window
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    PG
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Oscar
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Bath room
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    PSD
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="fbl-box leftbar">
                        <h3 class="title">
                            Facebook
                        </h3>
                        <span class="likebutton">
                  <a href="#">
                    <img src="images/fblike.png" alt="">
                  </a>
                </span>
                        <p>
                            12k people like Flat Shop.
                        </p>
                        <ul>
                            <li>
                                <a href="#">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                </a>
                            </li>
                        </ul>
                        <div class="fbplug">
                            <a href="#">
                    <span>
                      <img src="images/fbicon.png" alt="">
                    </span>
                                Facebook social plugin
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="checkout-page">
                        @if (session('thongbao'))
                            <div class="alert alert-success">{{ session('thongbao') }}</div>
                        @endif
                        <ol class="checkout-steps">
                            <li class="steps active">
                                <a href="checkout.html" class="step-title">
                                    Login Account
                                </a>
                                <div class="step-description">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="new-customer">
                                                <h5>
                                                    Create New Customer
                                                </h5>
                                                <label>
                              <span class="input-radio">
                                <input type="radio" name="user">
                              </span>
                                                    <span class="text">
                                I wish to subscribe to the Fashion Store
                              </span>
                                                </label>
                                                <label>
                              <span class="input-radio">
                                <input type="radio" name="user">
                              </span>
                                                    <span class="text">
                                My delivery and billing addresses are the same.
                              </span>
                                                </label>
                                                <p class="requir">
                                                    By creating an account you will be able to shop faste be up to date on an order's status, and keep track of the orders you have previously made.
                                                </p>
                                                   <a href="dangki"><button> Continue </button></a>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="run-customer">
                                                <h5>
                                                    Rerunning Customer
                                                </h5>
                                                <form method="post" action="dangnhap">
                                                    {{csrf_field()}}
                                                    <div class="form-row">
                                                        <label class="lebel-abs">
                                                            Email
                                                            <strong class="red">
                                                                *
                                                            </strong>
                                                        </label>
                                                        <input type="text" class="input namefild" name="email">
                                                    </div>
                                                    <div class="form-row">
                                                        <label class="lebel-abs">
                                                            Password
                                                            <strong class="red">
                                                                *
                                                            </strong>
                                                        </label>
                                                        <input type="password" class="input namefild" name="password">
                                                    </div>
                                                    <p class="forgoten">
                                                        <a href="#">
                                                            Forgoten your password?
                                                        </a>
                                                    </p>
                                                    <button type="submit">
                                                        Login
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="clearfix">
            </div>
            <div class="our-brand">
                <h3 class="title">
                    <strong>
                        Our
                    </strong>
                    Brands
                </h3>
                <div class="control">
                    <a id="prev_brand" class="prev" href="#">
                        &lt;
                    </a>
                    <a id="next_brand" class="next" href="#">
                        &gt;
                    </a>
                </div>
                <ul id="braldLogo">
                    <li>
                        <ul class="brand_item">
                            <li>
                                <a href="#">
                                    <div class="brand-logo">
                                        <img src="images/envato.png" alt="">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="brand-logo">
                                        <img src="images/themeforest.png" alt="">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="brand-logo">
                                        <img src="images/photodune.png" alt="">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="brand-logo">
                                        <img src="images/activeden.png" alt="">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="brand-logo">
                                        <img src="images/envato.png" alt="">
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <ul class="brand_item">
                            <li>
                                <a href="#">
                                    <div class="brand-logo">
                                        <img src="images/envato.png" alt="">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="brand-logo">
                                        <img src="images/themeforest.png" alt="">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="brand-logo">
                                        <img src="images/photodune.png" alt="">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="brand-logo">
                                        <img src="images/activeden.png" alt="">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="brand-logo">
                                        <img src="images/envato.png" alt="">
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        @endsection