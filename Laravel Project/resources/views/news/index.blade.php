@extends('news.layout')

@section('title','新闻管理系统--浏览新闻')

@section('h3','浏览新闻')

@section('content')
		{{ isset($_GET['page']) ? "存在" : "不存在" }}
		@if ($num == 10) "selected" @endif
		@if ($num == 15) "selected123123" @endif
	<table border='1' width='880'>
			<tr>
				<th width="70">新闻ID</th>
				<th>新闻标题</th>
				<th width="100">新闻关键字</th>
				<th width="50">作者</th>
				<th>新闻内容</th>
				<th width="80">操作</th>
			</tr>

	@foreach ($res as $k => $v)
		<tr>
			<td>{{ $v -> id }}</td>
			<td>{{ $v -> title }}</td>
			<td>{{ $v -> keywords }}</td>
			<td>{{ $v -> author }}</td>
			<td>{{ $v -> content }}</td>
			<td>
				<a href="/news/{{ $v -> id }}/edit" class="btn btn-sm btn-info">修改</a>
				<form action="/news/{{ $v -> id }}" method="post">
					{{ csrf_field() }}
					{{ method_field('DELETE') }}
					<button class="btn btn-sm btn-danger">删除</button>
				</form>
			</td>
		</tr>
	@endforeach
	</table>
	<div id="pages">
		{!! $res -> render() !!}
	</div>

@endsection