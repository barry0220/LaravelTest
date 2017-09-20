<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form',function(){
	return view('form');
});

Route::get('/login',['middleware'=>'login',function(){
	return "这是/login页面";
}]);

Route::get('/home',function(){
	session(['id'=>10]);
});

Route::controller('/admin/use','LoginController');

Route::get('/news', 'NewsController@index');

// Route::resource('/news','NewsController');

// Route::controller('/admin/users','LoginController');

// Route::get('/admin/user/{name}',['as'=>'ad','middleware'=>'login','uses'=>'LoginController@getAdd']);

// Route::get('/admin/users/add/{name}',['as'=>'aus','middleware'=>'login','uses'=>'LoginController@getAdd']);
// Route::get('/admin/users/add/{name}',function(){
// 	echo "ahahhahah ";
// });
// Route::get('/admin/users/add/{name}','LoginController@getAdd');

// Route::controller('/admin/users','LoginController');

// Route::get('/login',function(){
// 	echo '登录成功拉<br/><a href="/form">点击跳转到表单测试页面</a>';
// });

// Route::get('/user',function(){
// 	echo 'asdfasdfasdfasdf';
// 	echo 'app.timezone是'.Config::get("app.timezone").'<br />';
// 	echo 'app.url是'.Config::get('app.url').'<br />';
// 	echo 'database.fetch是'.Config::get('database.fetch').'<br />';
// 	echo 'database.default是'.Config::get('database.default').'<br />';
// 	echo 'DB_PASSWORD是'.env("DB_PASSWORD");


// 	echo "<br /><a href='/form'>点击跳转到表单测试页面</a>";
// });

// Route::get('/show/user/test/{name}-{id}',function($name,$id){
// 		echo "name是".$name."<br />";
// 		echo "id是".$id;
// 		echo '<br/><a href="/form">点击跳转到表单测试页面</a>';
// })->where(['name'=>'\w+','id'=>'\d+']);

// Route::get('/show/user/test/{name}',['as'=>'sname',function($name){
// 		echo "name是".$name."<br />";
// 		echo "别名是".Route::CurrentRouteName();
// 		echo '<br/><a href="/form">点击跳转到表单测试页面</a>';

// }]);

// Route::get('/goods/{id}',function($id){
// 	echo $id;
// 	echo '<br/><a href="/form">点击跳转到表单测试页面</a>';
// })->where('id','\d+');

// Route::group([], function(){
// 	Route::get('/admin', function(){
// 		echo '这是后台';
// 			echo '<br/><a href="/form">点击跳转到表单测试页面</a>';
// 	});
// });

// Route::group([], function(){
// 	Route::get('/home', function(){
// 		echo '这是前台';
// 		echo '<br/><a href="/form">点击跳转到表单测试页面</a>';
// 	});
// });

// Route::post('/posttest',function(){
// 	echo "这里是POST方式提交的<br />";
// 	echo "<pre>";
// 	// var_dump(Input::get());
// 	var_dump($_POST);
// 	echo '<br/><a href="/form">点击跳转到表单测试页面</a><br />';
// });

// Route::get('/404',function(){
// 	abort(404,'页面不存在');
// 	return redirect('/form');
// });


