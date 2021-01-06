<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	return view('root');
});

Route::get('/contactus', function () {
	return view('contact us');
});

Route::get('/ourteam', function () {
	$emp_info = array( 
        "emp1" => array (   
            "id" => '1',
            "name" => 'Salameh Yassin',    
            "email" => "salamehyassen33@gmail.com",
            "phone" => "0787144960",
            "path" =>'../images/salameh.jpg',
            'facebook' =>'https://web.facebook.com/salameh.yasin',
            "inst" =>'https://www.instagram.com/salameh_yaseen/',
            "linkedin" =>'https://www.linkedin.com/in/salamehyasin/'
            ),
        "emp2" => array (
           "id" => '2',
            "name" => 'Saif Aldeen Alawneh',    
            "email" => "siafalawneh70@gmail.com",
            "phone" => "0795163090",
            "path" =>'../images/90317648_108174784152519_4729199476151943168_o.jpg',
            "facebook" =>'https://web.facebook.com/saifaldeen.alawneh.75/',
            "inst" =>'https://www.instagram.com/saifaldeenalawneh/',
            "linkedin" =>'https://www.linkedin.com/in/saif-aldeen-alawneh-52117419b/'
        ),

        "emp3" => array (
           "id" => '3',
            "name" => 'Mohammad Alawneh',    
            "email" => "mohammadalawneh20@gmail.com",
            "phone" => "0778854158",
            "path" =>'../images/Mohammad.JPEG',
            "facebook" =>'https://web.facebook.com/mohmmadjor.alawneh.5/',
            "inst" =>'https://www.instagram.com/jamil_alawneh/',
            "linkedin" =>'https://www.linkedin.com/in/mohammad-alawneh-62b0181a3/'
        ),
     );

	return view('ourteam',['allinfo'=>$emp_info]);
});
