<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>表单测试页面</title>
	<!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->
</head>
<body>　
	<table border="1" style="text-align:center;color:red;" height='200' width="700">	
		<tr>
			<td><a href="/login">/login</a></td>
			<td><a href="/admin/users/add/张三">/admin/users/add/{$name}</a></td>
		</tr>
		<tr>
			<td>
					<!-- <a href="/show/user/test/zhangsan-33">/show/user/test/{name}-{id} 多条件</a> -->
			<td><a href="/admin/users/do-add/张三">/admin/users/doadd/{$name}</a></td>
			</td>
			<td><a href="/show/user/test/hancy">/show/user/test/{name}  别名加条件</a></td>
		</tr>
		<tr>
			<td><a href="/goods/7a">/goods/{id}   单条件</a></td>
			<td><a href="/admin/use/do-add/zhangsan/35/haha/55">/admin  group</a></td>
		</tr>
		<tr>
			<td><a href="/home">/home   group</a></td>
			<td></td>
		</tr>
	</table>
	<h1>我是form表单POST方式</h1>
	<form action="/posttest" method="post">
		姓名: <input type="text" name="name">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<!-- {{ csrf_field() }} -->
		<button>提交</button>
	</form>
</body>
</html>