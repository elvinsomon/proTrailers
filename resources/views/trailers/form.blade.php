<div class="form-group {{ $errors->has('Titulo') ? 'has-error' : ''}}">
    <label for="Titulo" class="control-label">{{ 'Titulo' }}</label>
    <input class="form-control" name="Titulo" type="text" id="Titulo" value="{{ isset($trailer->Titulo) ? $trailer->Titulo : ''}}" >
    {!! $errors->first('Titulo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Sinopsis') ? 'has-error' : ''}}">
    <label for="Sinopsis" class="control-label">{{ 'Sinopsis' }}</label>
    <textarea class="form-control" rows="5" name="Sinopsis" type="textarea" id="Sinopsis" >{{ isset($trailer->Sinopsis) ? $trailer->Sinopsis : ''}}</textarea>
    {!! $errors->first('Sinopsis', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Genero') ? 'has-error' : ''}}">
    <label for="Genero" class="control-label">{{ 'Genero' }}</label>
    <input class="form-control" name="Genero" type="text" id="Genero" value="{{ isset($trailer->Genero) ? $trailer->Genero : ''}}" >
    {!! $errors->first('Genero', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Director') ? 'has-error' : ''}}">
    <label for="Director" class="control-label">{{ 'Director' }}</label>
    <input class="form-control" name="Director" type="text" id="Director" value="{{ isset($trailer->Director) ? $trailer->Director : ''}}" >
    {!! $errors->first('Director', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Fecha') ? 'has-error' : ''}}">
    <label for="Fecha" class="control-label">{{ 'Fecha' }}</label>
    <input class="form-control" name="Fecha" type="text" id="Fecha" value="{{ isset($trailer->Fecha) ? $trailer->Fecha : ''}}" >
    {!! $errors->first('Fecha', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Video') ? 'has-error' : ''}}">
    <label for="Video" class="control-label">{{ 'Video' }}</label>
    <input class="form-control" name="Video" type="text" id="Video" value="{{ isset($trailer->Video) ? $trailer->Video : ''}}" >
    {!! $errors->first('Video', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
