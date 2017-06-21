<?php

//Incluyo el framework slim
require_once 'vendor/autoload.php';

//Creo la aplicacion
$app = new \Slim\Slim();

//Ruteo
$app->map('/', function() use($app){
	$data = file_get_contents('employees.json');
	$employees = json_decode($data, true);

	if ($app->request->isGet()){
		$app->render('index.php', compact('employees'));
	}elseif ($app->request->isPost()){
		$email = $app->request->post('email');
		if (in_array($email, array_column($employees, 'email'))) {
	        $key = array_search($email, array_column($employees, 'email'));
	        $employee = $employees[$key];
	        $app->render("detail.php",compact('employee'));
	    } else {
	        echo "<h1 style='text-align: center;'>El Email ingresado no existe, por favor ingrese un Email correcto</h1>";
	    }
	}
})->via(['GET', 'POST']);

$app->map('/salario', function() use($app){
	$data = file_get_contents('employees.json');
	$employees = json_decode($data, true);

	if ($app->request->isGet()){
	    $app->render('salario.php',compact('employees'));
	}elseif ($app->request->isPost()){
	    $salario_min = $app->request->post('min');
	    $salario_max = $app->request->post('max');
	    $result = array();

	    foreach ($employees as $employee){
	    	$employee['salary'] = str_replace(",", "", $employee['salary']);
	        $employee['salary'] = str_replace("$", "", $employee['salary']);
	        if (intval($employee['salary']) >= $salario_min AND intval($employee['salary']) <= $salario_max ) {
	            array_push($result, $employee);
	        }
	    }

	    foreach ($result as $value) {
	    	print_r($value['name']." - ".$value['salary']);
	    	echo "<br>";
	    }
	}
})->via(['GET','POST']);

//Correr la aplicacion
$app->run();