<!DOCTYPE html>
<html>
<head>
	<title>Confirm Payment</title>
	<link rel="stylesheet" type="text/css" href="confirm.css">

	<script type="text/javascript">
		$(document).ready(function() { 
		  	$('.method').on('click', function() {
			    $('.method').removeClass('blue-border');
			    $(this).addClass('blue-border');	  	
		  		});
		})

		var $cardInput = $('.input-fields input');
 
		$('.next-btn').on('click', function(e) {
		 
		  $cardInput.removeClass('warning');
		 
		  $cardInput.each(function() {    
		     var $this = $(this);
		     if (!$this.val()) {
		       $this.addClass('warning');
		     }
		  })
		});
	</script>

</head>
<body>
<div class="checkout-panel">
  <div class="panel-body">
    <br><h1 style="color: #9324ac;">Confirm Payment</h1>
 
    <div class="progress-bar">
      <div class="step active"></div>
      <div class="step active"></div>
      <div class="step"></div>
      <div class="step"></div>
    </div>
 
    <div class="payment-method">
      <label for="card" class="method card">
          <img style="width: 150px;float: left;" src="img/visaa.png"/>
 
        <div class="radio-input">
          <input id="card" type="radio" name="payment">
          Pay with Credit Card
        </div>
      </label>
 
      <label for="paypal" class="method paypal">
        <img style="height: 65px" src="img/pay.png"/>
        <div class="radio-input">
          <input id="paypal" type="radio" name="payment">
          Pay with PayPal
        </div>
      </label>
    </div>
 
    <div class="input-fields">
      <div class="column-1">
        <label for="cardholder" >Cardholder's Name</label>
        <input required type="text" id="cardholder" />
 
        <div class="small-inputs">
          <div>
            <label for="date">Valid thru</label>
            <input type="text" id="date" placeholder="MM / YY" />
          </div>
 
          <div>
            <label for="verification">CVV / CVC *</label>
            <input type="password" id="verification"/>
          </div>
        </div>
 
      </div>
      <div class="column-2">
        <label for="cardnumber">Card Number</label>
        <input type="password" id="cardnumber"/>
 
        <span class="info">* CVV or CVC is the card security code, unique three digits number on the back of your card separate from its number.</span>
      </div>
    </div>
  </div>
 
  <div class="panel-footer">
    
    <a style="background-color: #9324ac;
                  color: white;
                  padding: 14px 25px;
                  text-align: center;
                  text-decoration: none;
                  display: inline-block;
                  border-radius: 23px;
                  margin-left: 700px" href="receipt.php" target="_blank">CONTINUE</a>
  </div>
</div>
</body>
</html>