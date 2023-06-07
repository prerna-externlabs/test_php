<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Add to cart</title>
   
  </head>
  <body>

<h1>Add to Cart and Checkout</h1>
    <div id="product-list">

      <div class="product">
        <h2>Product 1</h2>
        <button onclick="addToCart(1)">Add to Cart</button>
      </div>

      <div class="product">
        <h2>Product 2</h2>
        <button onclick="addToCart(2)">Add to Cart</button>
      </div>
    </div>

    <div id="cart" >
        <h2>Add Items</h2>
        <ul id="cart-items">

        </ul>
        <button onclick="checkout()">Checkout</button>
    </div>

    <div id="checkout-form" style="display: none;">
    <div class="container">
        <h2>Checkout</h2>
        <form action="pay.php" method="post">
        <div class="mb-3">
            <label for="text" class="form-label">Price</label>
            <input type="number" class="form-control" name="price" placeholder="enter price">
        </div>

        <div class="mb-3">
            <label for="text" class="form-label">Customer name</label>
            <input type="name" class="form-control" name="customername" placeholder="enter name">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email"  placeholder="enter email">
        </div>

        <div class="mb-3">
            <label for="text" class="form-label">Contact no</label>
            <input type="number" class="form-control" name="contactno"  placeholder="enter number">
        </div>

        <div class="mb-3">
        <input type="submit" name="submit"class="btn btn-primary" value="Proceed To Pay">
        </div>
        </div>
        </form>

    </div>

    <script>
    let cartItems = [];
    
    function addToCart(productId) {
        cartItems.push({
            id: productId,
            name: "Product " + productId
        });
        
        updateCartDisplay();
    }
    
    function updateCartDisplay() {
        const cartItemsList = document.getElementById("cart-items");
        cartItemsList.innerHTML = "";
        
        cartItems.forEach(item => {
            const li = document.createElement("li");
            li.textContent = item.name;
            cartItemsList.appendChild(li);
        });
    }

function checkout() {
  document.getElementById("product-list").style.display = "none";
  document.getElementById("checkout-form").style.display = "block";
}


</script>
</body>
</html>