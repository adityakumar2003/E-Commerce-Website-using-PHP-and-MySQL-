<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/payment.css">
  <title>Hello, world!</title>
</head>
  <body>
  <h1>Checkout Page</h1>

		<div class="tab_container">
			<!-- <input id="tab1" type="radio" name="tabs">
      <label for="tab1"><span class="numberCircle">1</span><span>Cart</span></label>

			<input id="tab2" type="radio" name="tabs">
			<label for="tab2"><span class="numberCircle">2</span><span>Customer Information</span></label>

			<input id="tab3" type="radio" name="tabs" >
			<label for="tab3"><span class="numberCircle">3</span><span>Shipping</span></label> -->

			<input id="tab4" type="radio" name="tabs" checked>
			<label for="tab4"><span class="numberCircle">1</span><span>Payment</span></label>


			<section id="content1" class="tab-content">
				<h3>Cart Items</h3>
		      	<p></p>
			</section>

			<section id="content2" class="tab-content">
				<h3>Customer Information</h3>
		      	<p></p>
			</section>

			<section id="content3" class="tab-content">
				<h3>Shipping</h3>
		      	<p></p>
			</section>

			<section id="content4" class="tab-content">
				<h4 class="payment-title">Choose your payment method</h4>
		      	<form action="" method="post">
      <div class="pymt-radio">
      
      
    <div class="row-payment-method payment-row">
      <div class="select-icon">
        <input type="radio" id="radio1" name="radios" value="pp">
        <label for="radio1"></label>
      </div>
      <div class="select-txt">
        <p class="pymt-type-name">Paypal</p>
        <p class="pymt-type-desc">Safe payment online. Credit card needed. PayPal account is not necessary.</p>
      </div>
      <div class="select-logo">
        <img src="https://www.dropbox.com/s/pycofx0gngss4ef/logo-paypal.png?raw=1" alt="PayPal"/>
      </div> 
    </div>
      
      </div>
      <div class="row-payment-method payment-row">
      <div class="select-icon">
        <input type="radio" id="radio1" name="radios" value="pp">
        <label for="radio1"></label>
      </div>
      <div class="select-txt">
        <p class="pymt-type-name">cod</p>
        <p class="pymt-type-desc">Safe payment online. Credit card needed. PayPal account is not necessary.</p>
      </div>
      <div class="select-logo">
        <img src="https://www.dropbox.com/s/pycofx0gngss4ef/logo-paypal.png?raw=1" alt="PayPal"/>
      </div> 
    </div>
      
      </div>
      <div class="pymt-radio">
      
    <div class="row-payment-method payment-row-last">
      <div class="select-icon hr">
        <input type="radio" id="radio2" name="radios" value="pp" checked>
        <label for="radio2"></label>
      </div>
      <div class="select-txt hr">
        <p class="pymt-type-name">Credit Card</p>
        <p class="pymt-type-desc">Safe money transfer using your bank account. Safe payment online. Credit card needed. Visa, Maestro, Discover, American Express</p>
      </div>
      <div class="select-logo">
        <div class="select-logo-sub logo-spacer">
          <img src="https://www.dropbox.com/s/by52qpmkmcro92l/logo-visa.png?raw=1" alt="Visa"/>
        </div>
        <div class="select-logo-sub">
        <img src="https://www.dropbox.com/s/6f5dorw54xomw7p/logo-mastercard.png?raw=1" alt="MasterCard"/></div>
      </div>
      
      </div>
      </div>
    <div class="form-cc">
      <div class="row-cc">
        <div class="cc-field">
          <div class="cc-title">Credit Card Number
          </div>
          <input type="text" class="input cc-txt text-validated" value="4542 9931 9292 2293" />
        </div>
      </div>
      <div class="row-cc">
        <div class="cc-field">
          <div class="cc-title">Expiry Date
          </div>
          <select class="input cc-ddl">
            <option selected>01</option>
            <option>02</option>
            <option>03</option>
            <option>04</option>
            <option>05</option>
            <option>06</option>
            <option>07</option>
            <option>08</option>
            <option>09</option>
            <option>10</option>
            <option>11</option>
            <option>12</option>          
          </select>
          <select class="input cc-ddl">
            <option>01</option>
            <option>02</option>
            <option>03</option>
            <option>04</option>
            <option>05</option>
            <option>06</option>
            <option>07</option>
            <option>08</option>
            <option>09</option>
            <option>10</option>
            <option>11</option>
            <option>12</option>
            <option>13</option>
            <option>14</option>
            <option>15</option>
            <option selected>16</option>
            <option>17</option>
            <option>18</option>
            <option>19</option>
            <option>20</option>
            <option>21</option>
            <option>22</option>
            <option>23</option>
            <option>24</option>
            <option>25</option>
            <option>26</option>
            <option>27</option>
            <option>28</option>
            <option>29</option>
            <option>30</option>
            <option>31</option>            
          </select>
        </div>
        <div class="cc-field">
          <div class="cc-title">CVV Code<span class="numberCircle">?</span>
          </div>
          <input type="text" class="input cc-txt"/>
        </div>
      </div>
      <div class="row-cc">
        <div class="cc-field">
          <div class="cc-title">Name on Card
          </div>
          <input type="text" class="input cc-txt"/>
        </div>
      </div>    
            
    </div>
    <div class="button-master-container">
      <div class="button-container"><a href="#">Return to Shipping</a>
      </div>
      <div class="button-container button-finish"><a href="#">Finish Order</a>
      </div>
    </div>
    </form>
			</section>
		</div>  
    
  
  
  <!-- Option 1: Bootstrap Bundle with Popper -->
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>