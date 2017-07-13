
<?php 
	$errorMessage = isset($errorMessage) ? $errorMessage : '';
	$success = isset($success) ? $success : '';
?>


<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>New Project</title>
	
	
    <link rel="stylesheet" href="../assets/css/style.css" type="text/css" />
</head>
<body>

	<div class="wrraper">
		<div class="wrrap">
	
			<div class="project">
				<h2><span class="bold">Marketing Project Control</span></h2>		
			</div>
				
				<div class="projectForm">
					
					<fieldset id="fiel">
						<form action="./AddFormController.php" method="post">
						
							<div class="oneRow">
								<div class="addDiv" id="titleDiv">
								
									<div id="labelForName"  class="labels">
										<label for="activity">Project Name <span class="mandatory"> *</span></label>
									</div>
										<input class="addInput" id="title" type="text"  name="title" />
								</div>
								
								<div class="addDiv" id ="numberDiv">
										<div id="labelForNum" class="labels">
											<label for="number">Project №</label>
										</div>			
										<input type="text" name="number" id="num" class="addInput" />
									</div>
								
		
									<div class="addDiv" id="buttonBudgetDiv">
										<a href="./BudgetInfoController.php"><input type="button" value = "Budget Info"></input></a>
									</div>
							</div>
									
									
							<div class="oneRow">
								<div class="addDiv2" >
									<div id="labelForActivity"  class="labels">
										<label for="activity">Activity Type <span class="mandatory">*</span></label>
									</div>
									<select name="activity" id="select-activity" class="acty-pro">
										<option selected="selected" disabled="">Choose activity</option>
										<?php foreach ($activities as $activity) { ?>
										<option value="<?=$activity['activity_id']?>"><?=$activity['activity_name']?></option>
										<?php } ?>
									</select>
								</div>
								
								<div class="addDiv2">
									<div id="labelForType"  class="labels">
										<label for="type">Project Type <span class="mandatory"> *</span></label>
									</div>
									<select name="type" id="select-type" class="acty-pro">
										<option selected="selected">Choose Project Type</option>
									</select>
								</div>
								
								
							
									<div id ="marginDiv" class="addDiv2">
										<div id="labelForMargin"  class="labels">
											<label for="margin">Margin %</label>
										</div>
										
										<input type="text" name="margin" id="margin" class="addInput" />
									</div>
									
									<div id="startDateDiv" class="addDiv2">
										<div id="labelForStart"  class="labels">
							
											<label for="startDate"> Start Date<span class="mandatory"> *</span></label>
										</div>
										<input type="date" name="startDate" id="startDate"  value="2017-07-10" class="default-input" />
										
									</div>
									
									<div id="endDateDiv" class="addDiv2">
										<div id="labelForEnd"  class="labels">
										
											<label for="endtDate"> End Date<span class="mandatory"> *</span></label>
										</div>
								
										<input type="date" name="endDate" id="endDate"  value="2017-07-10" class="default-input" />
									</div>
								
							</div>
							
							<div class="oneRow">	
								<div class="addDiv3">
									<div id="labelForCamp"  class="labels">
										<label for="campManager">Campaign Manager<span class="mandatory"> *</span></label>
									</div>
									<select name="cmpManager" id="campManager" class="managers">
										<option selected="selected" >Choose Campaign Mannager</option>
										<?php foreach ($campaignManagers as $manager) { ?>
										<option value="<?=$manager['approver_id']?>"><?=$manager['approver_name']?></option>
										<?php } ?>
									</select>
								</div>
									
									
									
								<div class="addDiv3">
									<div id="labelForBusin"  class="labels">	
										<label for="businessManager">Business Manager<span class="mandatory"> *</span></label>
									</div>
									<select name="businessManager" id="businessManager" class="managers">
							
										<option selected="selected">Choose Business Manager</option>
										<?php foreach ($businessManagers as $manager) { ?>
										<option value="<?=$manager['approver_id']?>"><?=$manager['approver_name']?></option>
										<?php } ?>
									</select>
								</div>
								
								
								<div class="addDiv3">
									<div id="labelForDirector"  class="labels">
										<label for="director">Director<span class="mandatory"> *</span></label>
									</div>
									<select name="director" id="director" class="managers">
										<option selected="selected">Choose Director</option>
										<?php foreach ($directors as $manager) { ?>
										<option value="<?=$manager['approver_id']?>"><?=$manager['approver_name']?></option>
										<?php } ?>
									</select>
								</div>
								
						</div>	
						
						<div class="oneRow">	
								
								<div class="addDiv4" id="detailsDiv">
									<div id="labelForDiscr"  class="labels">
										<label for="description">Project Description</label>
									</div>
									<textarea class="addInput"  id="details" name="details"></textarea>
								</div>
									
							
							
								<div class="addDiv4" id="commentsDiv">
									<div id="labelForComm"  class="labels">
										<label for="comments">Comments</label>
									</div>
									<textarea class="addInput"  id="comments" name="commennts"  ></textarea>
								</div>
							</div>
									
							
							
						<div class="oneRow" id="submitDiv">	
							<div class="submit">
								<input name="submit"  type="submit" value="Save" id="add"/>
							</div>
							
							<div class="submit" id="exit">
								 <a href="/LogoutController.php"> <input type="button" class="logout" value="Exit"></input></a>
							</div>
						</div>
						
							
					</form>
					
					<div class="errorr"><?=$errorMessage?></div>
							
				</fieldset>
			</div>
		</div>
	</div>

<script src="../assets/js/jquery-3.1.1.min.js"></script> 	


<script type="text/javascript">
	$(function() {
		$('#select-activity').on('change', function() {
			var activity = $('#select-activity').val();

			$.getJSON('../controller/ajaxController.php', { activity: activity }, function(response) {
				var typeSelect = $('#select-type');

				$(typeSelect).find('option').remove();
				$(typeSelect).append('<option selected="selected">Choose Project Type</option>');

				$(typeSelect).val('Choose Project Type').change();

				if (response) {
					$.each(response, function(key, value) {
						var option = '<option value="'+value.type_id+'">'+value.type_name+'</option>';
						$(typeSelect).append(option);
					});
				}
			});
		});
	});


	$(function() {
		$('#select-type').on('change', function() {
			var type = $('#select-type').val();

			$.getJSON('../controller/ajaxController.php', {type: type }, function(response) {
				var marginDiv = $('#marginDiv');

				$(marginDiv).find('input').remove();
 				$(marginDiv).append('<input value=" " id="margin"></input>');
 				

				if (response) {
					$.each(response, function(key, value) {
						$(marginDiv).find('input').remove();
						var input = '<input id="margin" value="'+value.margin+'"></input>';
						
						$(marginDiv).append(input);
					});
				}
			});
		});
	});



	
</script>

	


