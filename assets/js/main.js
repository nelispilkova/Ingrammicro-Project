

function listAllVendorsAndSuppliers() {
	
	
	
	var vendor = document.getElementById('vendor').value;
	var amount = document.getElementById('amount').value;
	var supplier = document.getElementById('supplier').value;
	var amount2 = document.getElementById('amount2').value;
	
	
	
	var vendorDiv = document.createElement('div');
	vendorDiv.className = "one-two";
	
	var inputVendor = document.createElement('input');
	inputVendor.value = vendor;
	
	var inputAmount = document.createElement('input');
	inputAmount.value = amount;
	inputAmount.className = 'sumAmount';
	
	var dellDiv = document.createElement('div');
	dellDiv.className = "dellDiv";
	var dell = document.createElement('button');
	dell.className = "dell";
	dell.onclick = "dellRow()";
	dell.innerHTML="Dell Revenue Line";
	dellDiv.appendChild(dell);
	
	

	vendorDiv.appendChild(inputVendor);
	vendorDiv.appendChild(inputAmount);
	vendorDiv.appendChild(dellDiv);
	
	
	
	var supplierDiv = document.createElement('div');
	supplierDiv.className = "one-two";
	
	var inputSupplier = document.createElement('input');
	inputSupplier.value = supplier;
	
	var inputAmount2 = document.createElement('input');
	inputAmount2.value = amount2;
	inputAmount2.className = 'sumAmount2';
	
	
	supplierDiv.appendChild(inputSupplier);
	supplierDiv.appendChild(inputAmount2);
	
	
	
		
			  var totalV = document.getElementById('totalVendors');
	
			  totalV.appendChild(vendorDiv);
			  

			  var totalS = document.getElementById('totalSuppliers');
	
			  totalS.appendChild(supplierDiv);
			  
	

	  var sum1 = document.getElementsByClassName('sumAmount');
	  var sumAmount=0;
	  
	  for (var i=0; i<sum1.length; i++){
		  sumAmount = sumAmount + parseInt(sum1[i].value);
		  
	  }
	  
	  

	  var spanForSum = document.getElementById('sum1');

	  if(spanForSum){
		  spanForSum.parentNode.removeChild(spanForSum);
	  }
	  
	  var totalVendors = document.getElementById('pisnami');		  
	  var newSpan = document.createElement('span');
	  newSpan.id='sum1';
	  newSpan.innerHTML = sumAmount;
	  totalVendors.appendChild(newSpan);
	  
	  
	


	var sum2 = document.getElementsByClassName('sumAmount2');
	var sumAmount2=0;
	
	for (var i=0; i<sum2.length; i++){
		  sumAmount2 = sumAmount2 + parseInt(sum2[i].value);
		  
	}
	
	
	var spanForSum2 = document.getElementById('sum2');
	
	if(spanForSum2){
		  spanForSum2.parentNode.removeChild(spanForSum2);
	}
	
	
	
	var totalSuppliers = document.getElementById('pisnami2');		  
	var newSpan2 = document.createElement('span');
	newSpan2.id='sum2';
	newSpan2.innerHTML = sumAmount2;
	totalSuppliers.appendChild(newSpan2);
}

function dellRow(){
	 var rows = document.getElementsByClassName('one-two');

	  if(spanForSum){
		  spanForSum.parentNode.removeChild(spanForSum);
	  }
	
}

