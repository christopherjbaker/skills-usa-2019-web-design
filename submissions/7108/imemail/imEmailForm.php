<?php
if(substr(basename($_SERVER['PHP_SELF']), 0, 11) == "imEmailForm") {
	include '../res/x5engine.php';
	$form = new ImForm();
	$form->setField('Name', @$_POST['imObjectForm_2_1'], '', false);
	$form->setField('', @$_POST['imObjectForm_2_2'], '', true);
	$form->setField('Email', @$_POST['imObjectForm_2_3'], '', false);
	$form->setField('', @$_POST['imObjectForm_2_4'], '', true);
	$form->setField('Phone Number', @$_POST['imObjectForm_2_5'], '', false);

	if(@$_POST['action'] != 'check_answer') {
		if(!isset($_POST['imJsCheck']) || $_POST['imJsCheck'] != '14C5D545BC85278E8BE624EEFAE9BA5C' || (isset($_POST['imSpProt']) && $_POST['imSpProt'] != ""))
			die(imPrintJsError());
		$form->mailToOwner('bvbncbvxcxvxcv@gmail.com', 'bvbncbvxcxvxcv@gmail.com', '', '', false);
		@header('Location: ../index.html');
		exit();
	} else {
		echo $form->checkAnswer(@$_POST['id'], @$_POST['answer']) ? 1 : 0;
	}
}

// End of file