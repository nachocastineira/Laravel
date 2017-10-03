<div class="form-group">
	{!!Form::label('name','Nombre:')!!}
	{!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del Articulo'])!!}
</div>
<div class="form-group">
	{!!Form::label('description','Descripcion:')!!}
	{!!Form::textarea('description',null,['class'=>'form-control','placeholder'=>'Ingresa la Descripcion'])!!}
</div>