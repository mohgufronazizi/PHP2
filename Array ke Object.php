<?php
	$elektronik =(object)[
		'Laptop' => ['merk' => 'Lenovo', 'Type' => 'Ideapad320', 'year' => '2018'],
		'Televisi',
		'Kulkas',
		'Smartphone' => ['merk' => 'Redmi', 'Type' => 'Note 8', 'year' => '2020'],
		'Kipas Angin'
	];

	$elektronik->Laptop=(object) $elektronik->Laptop;
	$elektronik->Smartphone=(object) $elektronik->Smartphone;

	echo "<pre>"; 
	print_r($elektronik);
	echo "<pre>";
?>