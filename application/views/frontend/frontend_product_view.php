<?php $this->load->view('frontend/frontend_navbar');?>
<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <title>
   Product Page
  </title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <style>
   body {
            /* font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; */
        }
        
        .product-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
            text-align: center;
        }
        .product-card img {
            width: 100%;
            border-radius: 10px;
        }
        .product-card h3 {
            font-size: 18px;
            margin: 10px 0;
        }
        .product-card p {
            font-size: 16px;
            color: #333;
        }
        .product-card select, .product-card input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .product-card .quantity {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .product-card .quantity button {
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
        }
        .product-card .add-to-cart {
            background-color: #d4a017;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
  </style>
 </head>
 <body>
  <div class="container">

<div class="row" id="product_card">
  <?php foreach ($products as $key => $product) { ?>

    <div class="col-md-4 mb-2">

   <div class="product-card">
    <img alt="" src="<?=base_url('public/uploads/products/'.$product->file)?>"/>
    <h3>
    <?=$product->name?>
    </h3>
    <p>
    <b>
        <div  class="price"><?=$product->price?></div>
    </b>
    </p>
    <select class="qty">
      <b>
     <option> 250 </option>
     <option> 500 </option>
  </b>
    </select> 
    <div class="quantity buttons_added">
  <input id="minus" type="button" class="minus" value="-">
  <input id="theInput" type="number" size="4" class="input-text qty text" title="Qty" value="1" min="0" step="1">
  <input id="plus" type="button" class="plus" value="+">
</div>
<script>
var input = document.getElementById('theInput');
document.getElementById('plus').onclick = function(){
    input.value = parseInt(input.value, 10) +1
}
document.getElementById('minus').onclick = function(){
    input.value = parseInt(input.value, 10) -1
}
</script>
    <button class="add-to-cart">
     Add to cart
    </button>
   </div>
  </div>
        <?php } ?>
  </div>
  </div>
  <script>
     $(document).ready(function () {
    // Use event delegation for dynamically generated content
    $('#product_card').on('change', '.qty', function () {
      var selectVal = $(this).val(); // Get the selected value from the dropdown
      var productCard = $(this).closest('.product-card'); // Find the closest product card

      var final_price = parseInt(productCard.find('.price').text()); // Get the price for the specific product
      if (selectVal == 500) {
        productCard.find('.price').text(final_price * 2); // Update the price based on quantity
      } else {
        productCard.find('.price').text(final_price / 2); // Update the price based on quantity
      }
    });
  });

   


   
  </script>
 </body>
</html>
