
@extends('layouts.site')
@section('content')
<div id="content">

<div id="left">
    {!!$z!!}
	<div class="form">
	<form enctype="multipart/form-data"  method="POST" action="{{route('personStore')}}" >	
                <div class="form-group">
			<label for="name">Новое имя</label>
			<input type="text" class="form-control" id="password" name="name" style="width:520px;padding:4px;">
		</div> <!-- close form-group -->
            
                <div class="form-group">
			<label for="password">Новый пароль</label>
			<input type="password" class="form-control" id="password" name="password" style="width:520px;padding:4px;">
		</div> <!-- close form-group -->
				<div class="form-group">
         			<label for="password">Повторно введите пароль</label>
			<input type="password" class="form-control" id="password" name="password_confirmation" style="width:520px;padding:4px;">

           </div> <!-- close form-group -->	
            <button type="submit" class="btn btn-default">Добавить</button>
		{{csrf_field()}}
                 </form>


	</div> <!-- close form -->
</div> <!-- close left -->

<div id="right">

{!!$m2!!}
</div> <!-- close right -->

<div class="spacer"></div>

</div> <!-- close content -->
@endsection

