@extends('user.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="products-details">
                <div class="preview_image">
                    <div class="preview-small">
                        <img id="zoom_03" style="width: 100%" src="upload/{{$product_detail->image}}" data-zoom-image="upload/{{$product_detail->image}}" alt="">
                    </div>
                    <div class="thum-image">
                        <ul id="gallery_01" class="prev-thum">
                            @foreach($image_phu as $image)
                            <li>
                                <a href="#" data-image="upload/imagephu/{{$image->image}}" data-zoom-image="upload/imagephu/{{$image->image}}">
                                    <img src="upload/imagephu/{{$image->image}}" alt="">
                                </a>
                            </li>
                                @endforeach
                        </ul>
                        <a class="control-left" id="thum-prev" href="javascript:void(0);">
                            <i class="fa fa-chevron-left">
                            </i>
                        </a>
                        <a class="control-right" id="thum-next" href="javascript:void(0);">
                            <i class="fa fa-chevron-right">
                            </i>
                        </a>
                    </div>
                </div>
                <div class="products-description">
                    <h5 class="name">
                        {!! $product_detail->name !!}
                    </h5>
                    <p>
                        <img alt="" src="tempuser/images/star.png">
                        <a class="review_num" href="#">
                            02 Review(s)
                        </a>
                    </p>
                    <p>
                        Availability:
                        <span class=" light-red">
                      In Stock
                    </span>
                    </p>
                    <p>
                       {!! $product_detail->intro !!}
                    </p>
                    <hr class="border">
                    <div class="price">
                        Price :
                        <span class="new_price">
                      {!!number_format($product_detail->price,0,',','.')  !!}
                      <sup>
                        VNĐ
                      </sup>
                    </span>
                        <span class="old_price">
                      450.00
                      <sup>
                        $
                      </sup>
                    </span>
                    </div>
                    <hr class="border">
                    <div class="wided">
                        <div class="qty">
                            Qty &nbsp;&nbsp;:
                            <select>
                                <option>
                                    1
                                </option>
                            </select>
                        </div>
                        <div class="button_group">
                            <a href="{{url('mua-hang',[$product_detail->id, $product_detail->alias])}}"><button class="button" >Thêm Giõ Hàng</button></a>
                            <a href="{{url('mua-hang-nhanh',[$product_detail->id, $product_detail->alias])}}"><button class="button">Đặt Hàng</button></a>

                            <button class="button favorite">
                                <i class="fa fa-heart-o">
                                </i>
                            </button>
                        </div>
                    </div>
                    <div class="clearfix">
                    </div>
                    <hr class="border">
                    <img src="images/share.png" alt="" class="pull-right">
                </div>
            </div>
            <div class="clearfix">
            </div>
            <div class="tab-box">
                <div id="tabnav">
                    <ul>
                        <li>
                            <a href="#Descraption">
                                DESCRIPTION
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content-wrap">
                    <div class="tab-content" id="Descraption">
                        <p>
                            Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultri ces posuere cubilia curae Aenean eleifend laoreet congue. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibu um ante ipsum primis in faucibus orci luctus et ultri ces posuere cubilia curae Aenean eleifend laoreet congue. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultri ces posuere cubilia curae Aenean eleifend laoreet congue. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultri ces posuere cubilia curae...
                        </p>
                        <p>
                            Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultri ces posuere cubilia curae Aenean eleifend laoreet congue. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibu um ante ipsum primis in faucibus orci luctus et ultri ces posuere cubilia curae Aenean eleifend laoreet congue. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc...
                        </p>
                    </div>
                    <div class="tab-content" id="Reviews">
                        <form>
                            <table>
                                <thead>
                                <tr>
                                    <th>
                                        &nbsp;
                                    </th>
                                    <th>
                                        1 star
                                    </th>
                                    <th>
                                        2 stars
                                    </th>
                                    <th>
                                        3 stars
                                    </th>
                                    <th>
                                        4 stars
                                    </th>
                                    <th>
                                        5 stars
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        Quality
                                    </td>
                                    <td>
                                        <input type="radio" name="quality" value="Blue"/>
                                    </td>
                                    <td>
                                        <input type="radio" name="quality" value="">
                                    </td>
                                    <td>
                                        <input type="radio" name="quality" value="">
                                    </td>
                                    <td>
                                        <input type="radio" name="quality" value="">
                                    </td>
                                    <td>
                                        <input type="radio" name="quality" value="">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Price
                                    </td>
                                    <td>
                                        <input type="radio" name="price" value="">
                                    </td>
                                    <td>
                                        <input type="radio" name="price" value="">
                                    </td>
                                    <td>
                                        <input type="radio" name="price" value="">
                                    </td>
                                    <td>
                                        <input type="radio" name="price" value="">
                                    </td>
                                    <td>
                                        <input type="radio" name="price" value="">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Value
                                    </td>
                                    <td>
                                        <input type="radio" name="value" value="">
                                    </td>
                                    <td>
                                        <input type="radio" name="value" value="">
                                    </td>
                                    <td>
                                        <input type="radio" name="value" value="">
                                    </td>
                                    <td>
                                        <input type="radio" name="value" value="">
                                    </td>
                                    <td>
                                        <input type="radio" name="value" value="">
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-row">
                                        <label class="lebel-abs">
                                            Your Name
                                            <strong class="red">
                                                *
                                            </strong>
                                        </label>
                                        <input type="text" name="" class="input namefild">
                                    </div>
                                    <div class="form-row">
                                        <label class="lebel-abs">
                                            Your Email
                                            <strong class="red">
                                                *
                                            </strong>
                                        </label>
                                        <input type="email" name="" class="input emailfild">
                                    </div>
                                    <div class="form-row">
                                        <label class="lebel-abs">
                                            Summary of You Review
                                            <strong class="red">
                                                *
                                            </strong>
                                        </label>
                                        <input type="text" name="" class="input summeryfild">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-row">
                                        <label class="lebel-abs">
                                            Your Name
                                            <strong class="red">
                                                *
                                            </strong>
                                        </label>
                                        <textarea class="input textareafild" name="" rows="7" >
                            </textarea>
                                    </div>
                                    <div class="form-row">
                                        <input type="submit" value="Submit" class="button">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-content" >
                        <div class="review">
                            <p class="rating">
                                <i class="fa fa-star light-red">
                                </i>
                                <i class="fa fa-star light-red">
                                </i>
                                <i class="fa fa-star light-red">
                                </i>
                                <i class="fa fa-star-half-o gray">
                                </i>
                                <i class="fa fa-star-o gray">
                                </i>
                            </p>
                            <h5 class="reviewer">
                                Reviewer name
                            </h5>
                            <p class="review-date">
                                Date: 01-01-2014
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer a eros neque. In sapien est, malesuada non interdum id, cursus vel neque.
                            </p>
                        </div>
                        <div class="review">
                            <p class="rating">
                                <i class="fa fa-star light-red">
                                </i>
                                <i class="fa fa-star light-red">
                                </i>
                                <i class="fa fa-star light-red">
                                </i>
                                <i class="fa fa-star-half-o gray">
                                </i>
                                <i class="fa fa-star-o gray">
                                </i>
                            </p>
                            <h5 class="reviewer">
                                Reviewer name
                            </h5>
                            <p class="review-date">
                                Date: 01-01-2014
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer a eros neque. In sapien est, malesuada non interdum id, cursus vel neque.
                            </p>
                        </div>
                    </div>
                    <div class="tab-content" id="tags">
                        <div class="tag">
                            Add Tags :
                            <input type="text" name="">
                            <input type="submit" value="Tag">
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix">
            </div>
            <div id="productsDetails" class="hot-products">
                <h3 class="title">
                    <strong>
                        Related
                    </strong>
                    Products
                </h3>
                <div class="control">
                    <a id="prev_hot" class="prev" href="#">
                        &lt;
                    </a>
                    <a id="next_hot" class="next" href="#">
                        &gt;
                    </a>
                </div>
                <ul id="hot">
                    <li>
                        @foreach($product_relate->chunk(3) as $product_relate)
                        <div class="row">
                            @foreach($product_relate as $item_relate)
                            <div class="col-md-4 col-sm-4">
                                <div class="products">
                                    <div class="offer">
                                        - %20
                                    </div>
                                    <div class="thumbnail">
                                        <a href="{{url('chitietsanpham',[$item_relate->id, $item_relate->alias])}}"> <img src="upload/{{$item_relate->image}}" style="width: 220px; height: 250px; margin-top: -30px;" alt="Product Name"></a>
                                    </div>
                                    <div class="productname">
                                        {{$item_relate->name}}
                                    </div>
                                    <h4 class="price">
                                        {{$item_relate->price}}
                                    </h4>
                                    <div class="button_group">
                                        <a href="{{url('mua-hang',[$item_relate->id, $item_relate->alias])}}">
                                        <button class="button add-cart" type="button">
                                            Thêm Giỏ Hàng
                                        </button>
                                        </a>
                                        <button class="button wishlist" type="button">
                                            <i class="fa fa-heart-o">
                                            </i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        @endforeach
                    </li>
                </ul>
            </div>
            <div class="clearfix">
            </div>
        </div>
        <div class="col-md-3">
            <div class="special-deal leftbar">
                <h4 class="title">
                    Special
                    <strong>
                        Deals
                    </strong>
                </h4>
                <div class="special-item">
                    <div class="product-image">
                        <a href="#">
                            <img src="images/products/thum/products-01.png" alt="">
                        </a>
                    </div>
                    <div class="product-info">
                        <p>
                            Licoln Corner Unit
                        </p>
                        <h5 class="price">
                            $300.00
                        </h5>
                    </div>
                </div>
                <div class="special-item">
                    <div class="product-image">
                        <a href="#">
                            <img src="images/products/thum/products-02.png" alt="">
                        </a>
                    </div>
                    <div class="product-info">
                        <p>
                            Licoln Corner Unit
                        </p>
                        <h5 class="price">
                            $300.00
                        </h5>
                    </div>
                </div>
                <div class="special-item">
                    <div class="product-image">
                        <a href="#">
                            <img src="images/products/thum/products-03.png" alt="">
                        </a>
                    </div>
                    <div class="product-info">
                        <p>
                            Licoln Corner Unit
                        </p>
                        <h5 class="price">
                            $300.00
                        </h5>
                    </div>
                </div>
            </div>
            <div class="clearfix">
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
            <div class="clearfix">
            </div>
            <div class="get-newsletter leftbar">
                <h3 class="title">
                    Get
                    <strong>
                        newsletter
                    </strong>
                </h3>
                <p>
                    Casio G Shock Digital Dial Black.
                </p>
                <form>
                    <input class="email" type="text" name="" placeholder="Your Email...">
                    <input class="submit" type="submit" value="Submit">
                </form>
            </div>
            <div class="clearfix">
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
            <div class="clearfix">
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