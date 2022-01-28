<?php
// array all Method

$var = array('i1o'=>'1.2L','i20'=>'1.5L','creata'=>'2.0L');
	//print_r (array_change_key_case($var,CASE_UPPER//LOWER_CASE));
	//print_r(array_chunk($var,2));
$a = array(
	array(
		'id' => 101,
		'first_name' => 'Vivek',
		'last_name' => 'Dodiya',
		),
		array(
		'id' => 201,
		'first_name' => 'Jigar',
		'last_name' => 'Parmar',
		)
		);
		
	$last_name =array_column($a, 'first_name');
	//print_r($last_name);

$fname=array('vivek','jigar','somnath');
$age=array('23','22','21');
$age2=array('23','22','25');
$merge=array_combine($fname,$age);

	//print_r($merge);
	//print_r(array_count_values($merge));
	//print_r(array_diff($age2,$age));
	//print_r(array_diff_assoc($var,$last_name));
	//$var=array_fill(3,1,'venue');
	//print_r($var);
	//print_r(array_flip($var));
	//print_r(array_key_exists('i10',$var));
	//print_r(array_keys($var));
	//array_multisort($fname);
	//print_r($fname);
	//array_pop($fname);
	//print_r($fname);
	//echo(array_product($age));
	//return the total length of array //print_r(array_push($fname,"Yashpal","jaymin"));
	//print_r($fname);
	//$a1=array("red","green");
	//$a2=array("blue","yellow");
	//print_r(array_replace($a1,$a2));
	//print_r(array_reverse($fname));
	//echo array_search("vivek",$fname);
	//array_shift($fname);
	//print_r($fname);
	//$a=array("red","green","blue","yellow","brown");
	//print_r(array_slice($a,2));
	//array_splice($fname,0,1,"jay");
	//print_r($fname);
	//echo array_sum($age);
	//$people = array("Peter", "Joe", "Glenn", "Cleveland");
	//echo current($people) . "<br>";
?>
