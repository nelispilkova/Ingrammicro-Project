<?php

function __autoload($className) {
	require_once "../model/" . $className . '.php';	
}



	$budgetDao = new BudgetDAO();
	
	$vendors = $budgetDao->getVendors();
	
	$suppliers = $budgetDao->getSuppliers();
	
	
	include '../view/budget.php';
	
	
	
	


