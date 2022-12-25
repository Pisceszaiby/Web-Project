<div class="col-md-4 col-lg-3 col-sm-6 d-flex align-items-stretch">
    <a href="/productInfo/{{$productID}}"><div class="card">
        <img onmouseover="mouseOver(this)"  onmouseout="mouseOut(this)" class="card-img-top img1-card"
            src="{{$picPath}}"
            alt="{{$picPath2}}">
        <div class="card-body ">
            <h4 class="card-title">{{$productTitle}}</h4>
        <p class="card-text ">{{$productCategory}}</p>
            
            @if(isset($discounted))
            <p class="price card-text initial-price">$ {{$productPrice}}</p>
            <p class="price card-text">$ {{$discounted}}</p>
            @else
            <p class="price card-text">Original Price</p>
            <p class="price card-text">$ {{$productPrice}}</p>
            @endif

            <a href="{{ url('/add-to-cart', $productID) }}" class="codeBtn btn btn-primary ">Add to Cart</a>
        </div>
    </div>
</a>
</div>
<script>
    var prevImg;
    var newImg;
   function mouseOver(img) {
    prevImg = img.src;
    newImg = img.alt;
    img.src =newImg
   }
   function mouseOut(img) {
    img.src =prevImg;
   }

</script>


