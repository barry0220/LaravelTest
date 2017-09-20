@extends('news.layout')

@section('title','新闻浏览系统--修改新闻')

@section('h3','修改新闻')

@section('content')
		<form action="/news/{{ $res->id }}" method='post'>
			<table border='0' width='400'> 
				<tr>
					<td align='right'>标题:</td>
					<td><input type="text" name='title' value="{{ $res->title }}"></td>
				</tr>
				<tr>
					<td align='right'>关键字:</td>
					<td><input type="text" name='keywords' value="{{ $res->keywords }}"></td>
				</tr>
				<tr>
					<td align='right'>作者:</td>
					<td><input type="text" name='author' value="{{ $res->author }}"></td>
				</tr>
				<tr>
					<td align='right'>内容:</td>
					<td><textarea name="content" id="" cols="30" rows="5" width='300px' height='200px' style='resize:none' >{{ $res->content }}</textarea></td>
				</tr>
				<tr>
					<td colspan='3' align='center'>
						{{ csrf_field() }}
						{{ method_field('PUT') }}
						<input type="submit" value='修改' />&nbsp;&nbsp;&nbsp;
						<input type="reset" value='重置' />
					</td>
					
				</tr>

			</table>
		</form>
@endsection