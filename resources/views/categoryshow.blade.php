@extends('layouts.site')
@section('content')
<div id="content">

<div id="left">
  <font size="6" color="black" face="Arial"> {!!$category->name!!}</font>
@foreach($articles->where('cat','=',$category->id) as $article)
<p>
 <h4 class="colortext"><a href="{{ route('articleShow',['cat'=>$category->alias,'id'=>$article->alias]) }}"> {{$article->title}}</a></h4>
 <font size="4" color="black" face="Arial">{!!$article->des!!}</font>
<a class="btn btn-default" href="{{ route('articleShow',['cat'=>$category->alias,'id'=>$article->alias]) }}" role="button">Подробнее &raquo;</a></p>
@endforeach
</div> <!-- close left -->

<div id="right">
{!!$m2!!}
</div> <!-- close right -->

<div class="spacer"></div>

</div> <!-- close content -->
@endsection
