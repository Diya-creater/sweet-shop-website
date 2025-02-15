<html>
 <head>
  <title>
   Shopping Cart
  </title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <style>
   body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .cart-container {
            width: 100%;
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #fff;
        }
        .cart-header {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .cart-item {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        .cart-item img {
            width: 80px;
            height: 80px;
            border-radius: 8px;
            margin-right: 20px;
        }
        .cart-item-details {
            flex-grow: 1;
        }
        .cart-item-details h4 {
            margin: 0;
            font-size: 18px;
        }
        .cart-item-details p {
            margin: 5px 0;
            color: #666;
        }
        .cart-item-details .price {
            font-size: 16px;
            font-weight: bold;
        }
        .cart-item-actions {
            display: flex;
            align-items: center;
        }
        .cart-item-actions input {
            width: 40px;
            text-align: center;
            margin: 0 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .cart-item-actions a {
            color: #007bff;
            text-decoration: none;
        }
        .cart-item-actions a:hover {
            text-decoration: underline;
        }
        .delivery-info {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        .delivery-info i {
            margin-right: 10px;
            color: #666;
        }
        .subtotal {
            display: flex;
            justify-content: space-between;
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .checkout-btn {
            width: 100%;
            padding: 10px;
            background-color: #ffc107;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }
        .view-cart {
            display: block;
            text-align: center;
            margin-top: 10px;
            color: #007bff;
            text-decoration: none;
        }
        .view-cart:hover {
            text-decoration: underline;
        }
  </style>
 </head>
 <body>
  <div class="cart-container">
   <div class="cart-header">
    Shopping Cart
   </div>
   <div class="cart-item">
    <img alt="Image of Motichur Laddu" src="https://placehold.co/80x80"/>
    <div class="cart-item-details">
     <h4>
      Motichur Laddu
     </h4>
     <p>
      Weight: 200g
     </p>
     <p class="price">
      ₹ 195
     </p>
    </div>
    <div class="cart-item-actions">
     <button>
      -
     </button>
     <input type="text" value="1"/>
     <button>
      +
     </button>
     <a href="#">
      Remove
     </a>
    </div>
   </div>
   <div class="cart-item">
    <img alt="Image of Coconut Burfi" src="https://placehold.co/80x80"/>
    <div class="cart-item-details">
     <h4>
      Coconut Burfi
     </h4>
     <p>
      Weight: 200g
     </p>
     <p class="price">
      ₹ 195
     </p>
    </div>
    <div class="cart-item-actions">
     <button>
      -
     </button>
     <input type="text" value="1"/>
     <button>
      +
     </button>
     <a href="#">
      Remove
     </a>
    </div>
   </div>
   <div class="delivery-info">
    <i class="fas fa-truck">
    </i>
    <p>
     Delivered fresh in 2-5 days
    </p>
   </div>
   <div class="subtotal">
    <span>
     Subtotal
    </span>
    <span>
     ₹ 390
    </span>
   </div>
   <button class="checkout-btn">
    Check out
   </button>
   <a class="view-cart" href="#">
    View Cart
   </a>
  </div>
 </body>
</html>
