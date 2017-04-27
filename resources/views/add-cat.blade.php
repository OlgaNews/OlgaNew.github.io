
@extends('layouts.site')
@section('content')
<div id="content">

<div id="left">
	<div class="form">
	<form enctype="multipart/form-data" method="POST" action="{!!route('storeCat')!!}">	
            
                <div class="form-group">
			<label for="title">Категория</label>
			<input type="text" class="form-control" id="title" name="name" style="width:520px;padding:4px;">
		</div> <!-- close form-group -->
				<div class="form-group">
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

