



<form  action="{{route('addtocart.store')}}" method="post">
   @csrf



   <div class="product_count">
     <label for="qty">Quantity:</label>
     <input type="text" name="product_qty" id="sst" maxlength="12" value="1" title="Quantity:" class="input-text qty">
     <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
      class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
     <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
      class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
   </div>



   <input type="hidden" name="product_id" value="{{$single_product->id}}">
   <input type="hidden" name="user_id" value=" @if(Auth::check()){{auth::user()->id}} @endif">
   <input type="hidden" name="ip_address" value="{{Request::ip()}}">
   <input type="hidden" name="order_id" value="">

   <div class="card_area d-flex align-items-center">
     <button class="primary-btn" type="submit">Add to Cart</button>
     <a class="icon_btn" href="#"><i class="lnr lnr lnr-diamond"></i></a>
     <a class="icon_btn" href="#"><i class="lnr lnr lnr-heart"></i></a>
   </div>

</form>
