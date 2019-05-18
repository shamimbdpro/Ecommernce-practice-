@extends('layouts.frontend')
@section('contents')


    <!--================Checkout Area =================-->
    <section class="checkout_area section_gap">
        <div class="container">
            <div class="returning_customer">
                <div class="check_title">
                    <h2>Returning Customer? <a href="#">Click here to login</a></h2>
                </div>
                <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new
                    customer, please proceed to the Billing & Shipping section.</p>
                <form class="row contact_form" action="#" method="post" novalidate="novalidate">
                    <div class="col-md-6 form-group p_star">
                        <input type="text" class="form-control" id="name" name="name">
                        <span class="placeholder" data-placeholder="Username or Email"></span>
                    </div>
                    <div class="col-md-6 form-group p_star">
                        <input type="password" class="form-control" id="password" name="password">
                        <span class="placeholder" data-placeholder="Password"></span>
                    </div>
                    <div class="col-md-12 form-group">
                        <button type="submit" value="submit" class="primary-btn">login</button>
                        <div class="creat_account">
                            <input type="checkbox" id="f-option" name="selector">
                            <label for="f-option">Remember me</label>
                        </div>
                        <a class="lost_pass" href="#">Lost your password?</a>
                    </div>
                </form>
            </div>
            <div class="cupon_area">
                <div class="check_title">
                    <h2>Have a coupon? <a href="#">Click here to enter your code</a></h2>
                </div>
                <input type="text" placeholder="Enter coupon code">
                <a class="tp_btn" href="#">Apply Coupon</a>
            </div>
          <form action="{{route('confirm')}}" method="post">
            @csrf
            <div class="billing_details">
                <div class="row">
                    <div class="col-lg-8">
                        <h3>Billing Details</h3>

                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="first" name="name" required>
                                <span class="placeholder" data-placeholder="First name"></span>
                            </div>

                            <input type="hidden" name="product_id" value="3434">
                            <input type="hidden" name="product_qty" value="3434">
                            <input type="hidden" name="payment_type" value="3434">
                            <input type="hidden" name="ip_address" value="{{request()->ip()}}">
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="number" name="Phone" required>
                                <span class="placeholder" data-placeholder="Phone number"></span>
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="email" name="email" required>
                                <span class="placeholder" data-placeholder="Email Address"></span>
                            </div>


                            <div class="col-md-12 form-group">

                                <textarea class="form-control" name="shipping_address"" rows="3" placeholder="Shipping Address" required ></textarea>
                            </div>
                            <div class="col-md-12 form-group">

                                <textarea class="form-control" name="message"  rows="5" placeholder="Order Notes" required></textarea>
                            </div>

                    </div>
                    <div class="col-lg-4">
                        <div class="order_box">
                            <h2>Your Order</h2>
                            <ul class="list">
                                <li><a href="#">Product <span>Total</span></a></li>
                                <?php $total=0;?>
                                @foreach($cartinfo as $data)

                                <?php $total +=$data->product->final_price *$data->product_qty; ?>

                                <li><a href="#">{{$data->product->title}} <span class="middle"> {{$data->product_qty}}</span> <span class="last">${{$data->product->final_price ==null ? '' : $data->product->final_price *$data->product_qty}}</span></a></li>
                                 @endforeach
                            </ul>
                            <ul class="list list_2">
                                <li><a href="#">Subtotal <span>${{$total}}</span></a></li>
                                <li><a href="#">Shipping <span>Flat rate: $50.00</span></a></li>
                                <li><a href="#">Total <span>${{$total}}4543</span></a></li>
                            </ul>
                            <div class="payment_item">
                                <div class="radion_btn">
                                    <input type="radio" id="f-option5" name="payment_type" value="Check Payment">
                                    <label for="f-option5">Check payments</label>
                                    <div class="check"></div>
                                </div>
                                <p>Please send a check to Store Name, Store Street, Store Town, Store State / County,
                                    Store Postcode.</p>
                            </div>
                            <div class="payment_item active">
                                <div class="radion_btn">
                                    <input type="radio" id="f-option6" name="payment_type" value="paypal">
                                    <label for="f-option6">Paypal </label>
                                    <img src="img/product/card.jpg" alt="">
                                    <div class="check"></div>
                                </div>
                                <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal
                                    account.</p>
                            </div>
                            <div class="creat_account">
                                <input type="checkbox" id="f-option4" name="selector" required>
                                <label for="f-option4">I’ve read and accept the </label>
                                <a href="#">terms & conditions*</a>
                            </div>

                            <button type="submit" name="button" class="primary-btn">Confirm</button>
                        </div>
                    </div>
                </div>
            </div>
          </form>
        </div>
    </section>
    <!--================End Checkout Area =================-->

    @endsection
