@extends("layouts.application")
@section("content")
<div>
<h2>{!! $article->title !!}</h2>
<div>{!! $article->content !!}</div>
<i>By {!! $article->author !!}</i>
<div>
<div>
{!! Form::open(array('route' => array('articles.destroy', $article->id), 'method' => 'delete')) !!}

{!! link_to(route('articles.index'), "Back", ['class' => 'btn btn-raised btn-info']) !!}

{!! link_to(route('articles.edit', $article->id), 'Edit', ['class'=> 'btn btn-raised btn-warning']) !!}

{!! Form::submit('Delete', array('class' => 'btn btn-raised btn-danger', "onclick" => "return confirm('are you sure?')")) !!}
{!! Form::close() !!}
</div>

<div>
<h3><i><u>Give Comments</u></i></h3>

{!! Form::open(['route' => 'comments.store', 'class' => 'form-horizontal', 'role' => 'form']) !!}

<div class="form-group">
	<div clas="rows">
	<div class="col-md-1">
{!! Form::label('article_id', 'Title', array('class' => 'col-lg-3 control-label')) !!}</div>
<div class="col-md-11">
{!! Form::text('article_id', $value = $article->id, array('class'=> 'form-control', 'readonly')) !!}
</div>
<div class="clear"></div>
</div>
</div>
<div class="form-group">
	<div clas="rows">
	<div class="col-md-1">
{!! Form::label('content', 'Content', array('class' => 'col-lg-3 control-label')) !!}
</div>
<div class="col-md-11">
{!! Form::textarea('content', null, array('class' => 'form-control', 'rows' => 10, 'autofocus' => 'true')) !!}
{!! $errors->first('content') !!}
</div>
<div class="clear"></div>
</div>
</div>
<div class="form-group">
	<div clas="rows">
	<div class="col-md-1">
{!! Form::label('user', 'User', array('class' => 'col-lg-3 control-label')) !!}
</div>
<div class="col-md-11">
{!! Form::text('user', null, array('class' => 'form-control'))
!!}
</div>
<div class="clear"></div>
</div>
</div>
<div class="form-group">
<div class="col-md-1">
{!! Form::submit('Save', array('class' => 'btn btn-raised btn-primary')) !!}
</div>
<div class="clear"></div>
</div>
{!! Form::close() !!}
</div>
@foreach($comments as $comment)
<div style="outline: 5px solid #008B8B ;">
<p>{!! $comment->content !!}</p>
<i>{!! $comment->user !!}</i><br>
{!! Form::submit('Delete', array('class' => 'btn btn-raised btn-danger', "onclick" => "return confirm('are you sure?')")) !!}
{!! Form::close() !!}
</div>
@endforeach
@stop