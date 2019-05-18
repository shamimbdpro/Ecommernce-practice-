
@extends('layouts.frontend')
@section('contents')

    <!--================Cart Area =================-->
    <section class="cart_area">
        <div class="container">
            <div class="cart_inner">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php $total=0;?>
                          @foreach($cart  as $cartdata)
                          <?php  $total +=$cartdata->product->final_price * $cartdata->product_qty ?>

                            <tr>
                                <td>
                                    <div class="media">
                                        <div class="d-flex">
                                            <img src="img/cart.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <p>{{$cartdata->product->title ==null ? '' : $cartdata->product->title}}</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h5>${{$cartdata->product->final_price ==null ? '' : $cartdata->product->final_price}}</h5>
                                </td>

                                <td>
                                    <div class="product_count">
                                        <input type="number" name="qty" maxlength="12" value="{{$cartdata->product_qty ==null ? '' : $cartdata->product_qty}}" title="Quantity:"
                                            >

                                    </div>
                                </td>
                                <td>
                                    <h5>${{$cartdata->product->final_price ==null ? '' : $cartdata->product->final_price *$cartdata->product_qty}}</h5>
                                </td>
                            </tr>

                          @endforeach
                            <tr class="bottom_button">
                                <td>
                                    <a class="gray_btn" href="#">Update Cart</a>
                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>
                                    <div class="cupon_text d-flex align-items-right">
                                        <input type="text" placeholder="Coupon Code">
                                        <a class="primary-btn" href="#">Apply</a>

                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>
                                    <h5>Subtotal</h5>
                                </td>
                                <td>
                                    <h5>${{$total}}</h5>
                                </td>
                            </tr>

                            <tr class="out_button_area">
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>
                                    <div class="checkout_btn_inner d-flex align-items-center">

                                        <a class="primary-btn" href="{{route('checkout')}}">Proceed to checkout</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!--================End Cart Area =================-->

@endsection
