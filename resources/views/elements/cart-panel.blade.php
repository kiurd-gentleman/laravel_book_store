<div class="shopping__cart">
    <div class="shopping__cart__inner">
        <div class="offsetmenu__close__btn">
            <a href="#"><i class="zmdi zmdi-close"></i></a>
        </div>
        <div class="shp__cart__wrap">
            @foreach(App\Models\AddToCart:: orderby('id' , 'asc')->where('username', Session('name'))->get() as $cartItem)
            <div class="shp__single__product">
                <div class="shp__pro__thumb">
                    <a href="{{route('home.product-details', $cartItem->product_id)}}">
                        @php $i=1;/*$productID = $cartItem->product_id*/ @endphp
                        @foreach(App\Models\productImage::where('product_id',$cartItem->product_id)->get() as $image)
                            @if($i>0)
                        <img src="{{asset($image->product_image)}}" alt="product images" style="width: 99px;height: 119px;">
                            @endif
                            @php $i=0 @endphp
                        @endforeach
                    </a>
                </div>
                <div class="shp__pro__details">
                    <h2><a href="{{route('home.product-details', $cartItem->product_id)}}">{{$cartItem->product_name}}</a></h2>
                    <span class="quantity">{{$cartItem->quantity}}</span>
                    <span class="shp__price">${{$cartItem->total_price}}</span>
                </div>
                <div class="remove__btn">
                    <a href="{{route('product.remove' ,$cartItem->id)}}" title="Remove this item"><i class="zmdi zmdi-close"></i></a>
                </div>
            </div>
            @endforeach
            {{--<div class="shp__single__product">
                <div class="shp__pro__thumb">
                    <a href="#">
                        <img src="{{asset('images/product-2/sm-smg/2.jpg')}}" alt="product images">
                    </a>
                </div>
                <div class="shp__pro__details">
                    <h2><a href="product-details.html">Brone Candle</a></h2>
                    <span class="quantity">QTY: 1</span>
                    <span class="shp__price">$25.00</span>
                </div>
                <div class="remove__btn">
                    <a href="#" title="Remove this item"><i class="zmdi zmdi-close"></i></a>
                </div>
            </div>--}}
        </div>
        <ul class="shoping__total">
            <li class="subtotal">Subtotal:</li>
            <li class="total__price">$130.00</li>
        </ul>
        <ul class="shopping__btn">
            <li><a href="{{route('home.view-cart')}}">View Cart</a></li>
            <li class="shp__checkout"><a href="{{route('home.checkout')}}">Checkout</a></li>
        </ul>
    </div>
</div>
