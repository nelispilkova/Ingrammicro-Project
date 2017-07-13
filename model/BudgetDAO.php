<?php

class BudgetDAO  {

	
	const SELECT_VENDORS_SQL = "SELECT vendor_id, vendor_name FROM vendors ORDER BY vendor_name";
	
	
	const SELECT_SUPPLIERS_SQL = "SELECT supplier_id, supplier_name FROM suppliers ORDER BY supplier_name";
	
	
	public function getVendors() {
		$db = DBConnection::getDb();

		$sql = $db->query(self::SELECT_VENDORS_SQL);

		return $sql->fetchAll(PDO::FETCH_ASSOC);
	}

	public function getSuppliers() {
		$db = DBConnection::getDb();
	
		$sql = $db->query(self::SELECT_SUPPLIERS_SQL);
	
		return $sql->fetchAll(PDO::FETCH_ASSOC);
	}
	

}



