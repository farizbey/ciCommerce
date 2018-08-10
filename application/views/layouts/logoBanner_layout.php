<div class="col-xs-6 logo"></div>
<div class="col-xs-6 banner">
		<!-- Button trigger modal -->
	<i class="fa fa-shopping-cart fa-5x pull-right" aria-hidden="true" data-toggle="modal" data-target="#myModal"><span class="badge">
	<?php
	// $cart = $this->session->cart;
	// $cart = array("2");
	if(isset($this->session->cart)) {
		if(!$this->utility_model->isarrayempty($this->session->cart)) {
			$cart =  $this->shoppingcart_model->getTotalQty();
			// $data['cart'] = array('1');
			echo $cart;
		}
		else {
			echo "0";
		}
	}
	else {
		echo "0";
	}
	// $utility_obj = new utility();
	// if (isset($_SESSION["cart"])) {
	// 	if (!$utility_obj->isarrayempty($_SESSION["cart"])) {
	// 		$cart = new shoppingCart();
	// 		// $cart = $_SESSION["cart"];
	// 		echo $cart->getTotalQty();
	// 	}
	// 	else {
	// 		echo "0";
	// 	}
	// }
	// else {
	// 	echo "0";
	// }
	// echo $cart;
	?></span></i>

	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  	<div class="modal-dialog" role="document">
	    	<div class="modal-content">
	      		<div class="modal-header">
	        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        		<h4 class="modal-title" id="myModalLabel">Shopping Cart</h4>
	      		</div>
	      		<div class="modal-body">
	      			<table id="cart" class="table table-hover table-condensed">
	      				<!-- ajax calling -->
					</table>
	      		</div>
<!-- 		      	<div class="modal-footer">
			    	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			    	<button type="button" class="btn btn-primary">Save changes</button>
				</div> -->
	    	</div>
	  	</div>
	</div>
</div>