@foreach($articles as $article)
<article class="row">
<h2>{!!$article->title!!}</h2>
<table border="1">
{!! str_limit($article->content, 250) !!}
{!! link_to(route('articles.show', $article->id), 'Read More') !!}
</table>
</article>
@endforeach