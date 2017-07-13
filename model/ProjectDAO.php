<?php

class ProjectDAO  {

	
	const SELECT_ACTIVITIES_SQL = "SELECT activity_id, activity_name FROM activities ORDER BY activity_name";
	
	const SELECT_MANAGERS_SQL = "SELECT approver_id, approver_name  FROM approvers WHERE departament_id=? ORDER BY approver_name";
	
	const SELECT_PROJECT_TYPES_SQL = "SELECT type_id, type_name FROM project_types WHERE activity_id =? ORDER BY type_name";
	
	const SELECT_MARGIN_SQL = "SELECT margin FROM project_types WHERE type_id =? ";
	

	
	public function getActivities() {
		$db = DBConnection::getDb();

		$sql = $db->query(self::SELECT_ACTIVITIES_SQL);

		return $sql->fetchAll(PDO::FETCH_ASSOC);
	}

	
	public function getTypes($activity) {
		$db = DBConnection::getDb();

		$pstmt = $db->prepare(self::SELECT_PROJECT_TYPES_SQL);
		$pstmt->execute(array($activity));
			
		return $pstmt->fetchAll(PDO::FETCH_ASSOC);
	}
	
	
	
	public function getMargin($type) {
		$db = DBConnection::getDb();
	
		$pstmt = $db->prepare(self::SELECT_MARGIN_SQL);
		$pstmt->execute(array($type));
			
		return $pstmt->fetchAll(PDO::FETCH_ASSOC);
	}
	
	
	
	public function getManagers($departamentId) {
		$db = DBConnection::getDb();
	
		$pstmt = $db->prepare(self::SELECT_MANAGERS_SQL);
		$pstmt->execute(array($departamentId));
		
	
	
		return $pstmt->fetchAll(PDO::FETCH_ASSOC);
	}

}



