
<?php 
	$errorMessage = isset($errorMessage) ? $errorMessage : '';
	$success = isset($success) ? $success : '';
?>


<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>Budget Info</title>
	
	
    <link rel="stylesheet" href="../assets/css/style.css" type="text/css" />
</head>
<body>

	<div class="wrraper">
		<div class="wrrap">
	
			<div class="project">
				<h2><span class="bold">Budget Info</span></h2>		
			</div>
				
				<div class="projectForm">
					
					<fieldset id="">
						<form action="/ProjectController.php" method="post" > 
						
							<div class="oneRow">
								<div class="addDiv" id="">
								
									<div id=""  class="labels2">
										<label for="revenue"> Revenue</label>
									</div>
										<input class="addInput" id="revenue" type="text"  name="revenue" />
								</div>
								
								<div class="addDiv" id ="">
										<div id="" class="labels2">
											<label for="expenses">Expenses </label>
										</div>			
										<input type="text" name="expenses" id="expenses" class="addInput" />
								</div>
								
		
							</div>
									
									
							
							<div class="oneRowB">
								<div><h3><span>Revenue - Vendor Information</span></h3></div>
								
								<div class="addDiv5">
									
									
									<div id=""  class="labels2">
										<label for="vendor">Vendor Name</label>
									</div>
									<select name="vendor" id="vendor" class="">
										<option selected="selected" >Choose Vendor</option>
										<?php foreach ($vendors as $vendor) { ?>
										<option value="<?=$vendor['vendor_name']?>"><?=$vendor['vendor_name']?></option>
										<?php } ?>
									</select>
								</div>
								
								<div class="addDiv5">
									<div id="" class="labels2">
											<label for="amount">Amount</label>
									</div>			
									<input type="text" name="amount" id="amount" class="addInput" />
									
								</div>
								
								<div class="addDiv5">
									<div id="" class="labels2">
										<label for="expenses">Approuved?</label>
									</div>			
										<input type="checkbox" name="approuved" id="approuved" class="addInput" />
								</div>
								
								<div class="addDiv5">
									<div id=""  class="labels2">
										<label for="funded">Funded by</label>
									</div>
									<select name="funded" id="funded" class="">
										<option selected="selected" >???</option>
										
									</select>
								</div>
								
								
								<div class="addDiv5">
									<div id="" class="labels2">
											<label for="poN">PO №</label>
									</div>			
									<input type="text" name="poN" id="poN" class="addInput" />
									
								</div>
							</div>
									
							<div class="oneRowB">		
								<div><h3><span>Expenditure - Supplier Information</span></h3></div>	
								<div class="addDiv5">
									
									<div id=""  class="labels2">	
										<label for="supplier">Supplier name </label>
									</div>
									<select name="supplier" id="supplier" class="" >
							
										<option selected="selected">Choose Supplier</option>
										<?php foreach ($suppliers as $supplier) { ?>
										<option value="<?=$supplier['supplier_name']?>"><?=$supplier['supplier_name']?></option>
										<?php } ?>
									</select>
								</div>
								
								
								<div class="addDiv5">
									<div id="" class="labels2">
											<label for="ammount2">Amount </label>
									</div>			
									<input type="number" name="amount2" id="amount2" class="addInput" required/>
									
								</div>
								
								<div class="addDiv5">
									<div id="" class="labels2">
										<label for="quoted">Quoted?</label>
									</div>			
										<input type="checkbox" name="quoted" id="quoted" class="addInput" />
								</div>
								
								
								
								<div class="addDiv5">
									<div id="" class="labels2">
											<label for="comm">Comments</label>
									</div>			
									<input type="text" name="comm" id="comm" class="addInput" />
									
								</div>
								
							
						</div>	
						
						<div class="oneRowB">	
						
									<div class="addDiv" id="listButt">
										<input type="button" class = "buttons" onclick ="listAllVendorsAndSuppliers()" value="Add To List"/>
									</div>
								
								
						</div>
					</fieldset>
						
					<fieldset>	
						<div id="lisVS">
							<div id="totalVendors" class="oneRowVS">
								<div class="totals">
									<h4 class="totalSum"><span>Total Revenue</span></h4>
									<div class="totalSum" id = "pisnami"></div>
									<input type="button" onclick="dellVenRow" value="Delete Revenue Lines" class="dellButt">
								</div>
								
								<div id="totalVen" >
									<div id=""  class="labels3">
										<label for="vendor">Vendor Name</label>
									</div>
									<div id="" class="labels3">
											<label for="amount">Amount</label>
									</div>	
									
									<div id="" class="labels3">
										<label for="expenses">Approuved?</label>
									</div>
									
									
									<div id="" class="labels3">
											<label for="poN">PO №</label>
									</div>			
								
								
								</div>	
								
							</div>
							
							<div id="totalSuppliers" class="oneRowVS">
								<div class="totals">
									<h4 class="totalSum"><span>Total Expense</span></h4>
									<div class="totalSum" id = "pisnami2"></div>
									<input type="button" onclick="dellSupRow" value="Delete Revenue Lines" class="dellButt">
								</div>
								
								<div id="totalSupp" >
								
									<div id=""  class="labels3">	
										<label for="supplier">Supplier name </label>
									</div>
									
									<div id="" class="labels3">
										<label for="ammount2">Amount </label>
									</div>	
									
									<div id="" class="labels3">
										<label for="quoted">Quoted?</label>
									</div>	
									
									<div id="" class="labels3">
											<label for="comm">Comments</label>
									</div>	
								</div>
							
							</div>		
						</div>
									
							
							
<!-- 						<div class="oneRow">	 -->
<!-- 							<div class="submit"> -->
<!-- 								<input name="submit"  type="submit" value="Save" id="saveBudgetIfo"/> -->
<!-- 							</div> -->
							
<!-- 							<div class="submit" id="exit"> -->
<!-- 								 <a href="/LogoutController.php"> <input type="button" class="logout" value="Exit"/></a> -->
<!-- 							</div> -->
<!-- 						</div> -->
						
							
 					</form> 
					
					<div class="errorr"><?=$errorMessage?></div>
							
				</fieldset>
			</div>
		</div>
		
	</div>

<script src="../assets/js/jquery-3.1.1.min.js"></script> 
<script src="../assets/js/main.js"></script> 	


