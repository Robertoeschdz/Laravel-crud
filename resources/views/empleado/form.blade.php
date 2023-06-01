@if (count($errors)>0)

<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>

@endif

<div class="mb-3">
    <label for="Nombre">Nombre</label>
    <input class="form-control" type="text" 
    value="{{ isset($empleado->Nombre)?$empleado->Nombre:old('Nombre') }}" name="Nombre" id="Nombre">
</div>
<div class="mb-3">
    <label for="ApellidoPaterno">Apellido paterno</label>
    <input class="form-control" type="text" 
    value="{{ isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:old('ApellidoPaterno') }}" name="ApellidoPaterno" id="ApellidoPaterno">
</div>
<div class="mb-3">
    <label for="ApellidoMaterno">Apellido paterno</label>
    <input class="form-control" type="text" 
    value="{{ isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:old('ApellidoMaterno') }}" name="ApellidoMaterno" id="ApellidoMaterno">
</div>
<div class="mb-3">
    <label for="Correo">Correo</label>
    <input class="form-control" type="email" 
    value="{{ isset($empleado->Correo)?$empleado->Correo:old('Correo') }}" name="Correo" id="Correo">
</div>
<div class="mb-3">
    <label for="Foto">Foto</label>
    @if(isset($empleado->Foto))
    <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$empleado->Foto}}" width="100" alt="{{$empleado->Nombre}}">
    @endif
    <input type="file" name="Foto" id="Foto">
</div>
<input class="btn btn-success" type="submit" value="{{ $modo }}">

<a class="btn btn-primary" href="{{ url('empleado') }}">Regresar</a>