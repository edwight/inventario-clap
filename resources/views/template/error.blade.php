<div>dsfsdfsds</div>
@if(count($errors))
	<div class="alert alert-danger">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<ul>
			@foreach($error->all() as $error)
				<li>{{$error}}</li>
				<li>dsdsaadadasd</li>
			@endforeach
			<li>adadada</li>
		</ul>
	</div>
@endif