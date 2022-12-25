<div class="box pad">
    <img src={{$img}}>
    <div class="content">
        <h3>{{ $name }}</h3>
        <h2>Price: {{ $price }}</h2>
        <p class="unit" style="color:  #082142;">Quantity: {{ $quantity }} </p>
        <form action="/update-cart" method=GET>
            <input type="number" id="Quantity" name="quantity">
            <input type="number" id="Quantity" hidden name="productID" value={{$productID }}><br>
            <br>
            <input type="submit" style="background:  #082142;" class="codeBtn btn btn-primary " value="Add to cart">
          </form>
    </div>
</div>