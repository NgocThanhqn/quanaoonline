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
                        @if (session('message'))
                            <div class="alert alert-success">{{ session('message') }}</div>
                        @endif
                        <ol class="checkout-steps">
                            <li class="steps active">
                                <a href="dangki" class="step-title">
                                    Register Account:
                                </a>
                                <div class="step-description">
                                    <form  action="{{route('user.CreateCustomer')}}" method="post">
                                        {{csrf_field()}}
                                        {{--{{ csrf_token() }}--}}
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <div class="your-details">
                                                    <h5>
                                                        Your Persional Details
                                                    </h5>
                                                    <div class="form-row {{ $errors->has('name') ? 'has-error' : '' }}">
                                                        <label class="lebel-abs">
                                                            User Name
                                                            <strong class="red">
                                                                *
                                                            </strong>
                                                        </label>
                                                        <input type="text" class="input namefild" name="name" value="{{ old('name') }}">
                                                        <span class="help-block">{{ $errors->first('name') }}</span>
                                                    </div>

                                                    <div class="form-row {{ $errors->has('email') ? 'has-error' : '' }}">
                                                        <label class="lebel-abs">
                                                            Email
                                                            <strong class="red">
                                                                *
                                                            </strong>
                                                        </label>
                                                        <input type="email" class="input namefild" name="email" value="{{ old('email') }}">
                                                        <span class="help-block">{{ $errors->first('email') }}</span>
                                                    </div>
                                                    <div class="form-row {{ $errors->has('telephone') ? 'has-error' : '' }}">
                                                        <label class="lebel-abs">
                                                            Telephone
                                                            <strong class="red">
                                                                *
                                                            </strong>
                                                        </label>
                                                        <input type="text" class="input namefild" name="telephone" value="{{ old('telephone') }}">
                                                        <span class="help-block">{{ $errors->first('telephone') }}</span>
                                                    </div>
                                                    <div class="pass-wrap">
                                                        <div class="form-row {{ $errors->has('password') ? 'has-error' : '' }}">
                                                            <label class="lebel-abs">
                                                                Your Password
                                                                <strong class="red">
                                                                    *
                                                                </strong>
                                                            </label>
                                                            <input type="password" class="input namefild" name="password">
                                                            <span class="help-block">{{ $errors->first('password') }}</span>
                                                        </div>
                                                        <div class="form-row">
                                                            <label class="lebel-abs">
                                                                Confird Your Password
                                                                <strong class="red">
                                                                    *
                                                                </strong>
                                                            </label>
                                                            <input type="password" class="input cpass" name="password_confirmation">
                                                            <span class="help-block">{{ $errors->first('password_confirmation') }}</span>
                                                        </div>
                                                    </div>
                                                    <p>
                                <span class="input-radio">
                                  <input type="radio" name="user">
                                </span>
                                                        <span class="text">
                                  I wish to subscribe to the Herbal Store newsletter.
                                </span>
                                                    </p>
                                                    <p>
                                <span class="input-radio">
                                  <input type="radio" name="user">
                                </span>
                                                        <span class="text">
                                  My delivery and billing addresses are the same.
                                </span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <div class="your-details">
                                                    <h5>
                                                        Your Address
                                                    </h5>
                                                    <div class="form-row">
                                                        <label class="lebel-abs">
                                                            Address
                                                            <strong class="red">
                                                                *
                                                            </strong>
                                                        </label>
                                                        <input type="text" class="input namefild" name="address" value="{{ old('address') }}">
                                                        <span class="help-block">{{ $errors->first('address') }}</span>
                                                    </div>
                                                    <button type="submit">
                                                        Continue
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
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
                                        <img src="tempuser/images/envato.png" alt="">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="brand-logo">
                                        <img src="tempuser/images/themeforest.png" alt="">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="brand-logo">
                                        <img src="tempuser/images/photodune.png" alt="">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="brand-logo">
                                        <img src="tempuser/images/activeden.png" alt="">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="brand-logo">
                                        <img src="tempuser/images/envato.png" alt="">
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
                                        <img src="tempuser/images/envato.png" alt="">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="brand-logo">
                                        <img src="tempuser/images/themeforest.png" alt="">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="brand-logo">
                                        <img src="tempuser/images/photodune.png" alt="">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="brand-logo">
                                        <img src="tempuser/images/activeden.png" alt="">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="brand-logo">
                                        <img src="tempuser/images/envato.png" alt="">
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
@endsection
