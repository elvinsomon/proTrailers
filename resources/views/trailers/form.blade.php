<div class="form-group {{ $errors->has('Titulo') ? 'has-error' : ''}}">
    <label for="Titulo" class="control-label">{{ 'Titulo' }}</label>
    <input class="form-control" name="Titulo" type="text" id="Titulo" value="{{ isset($trailer->Titulo) ? $trailer->Titulo : ''}}" required>
    {!! $errors->first('Titulo', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('Sinopsis') ? 'has-error' : ''}}">
    <label for="Sinopsis" class="control-label">{{ 'Sinopsis' }}</label>
    <textarea class="form-control" rows="5" name="Sinopsis" type="textarea"required id="Sinopsis" >{{ isset($trailer->Sinopsis) ? $trailer->Sinopsis : ''}}</textarea>
    {!! $errors->first('Sinopsis', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('Genero') ? 'has-error' : ''}}">
    <label for="Genero" class="control-label">{{ 'Genero' }}</label>
    <input class="form-control" name="Genero" type="text" id="Genero" value="{{ isset($trailer->Genero) ? $trailer->Genero : ''}}" required>
    {!! $errors->first('Genero', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('Director') ? 'has-error' : ''}}">
    <label for="Director" class="control-label">{{ 'Director' }}</label>
    <input class="form-control" name="Director" type="text" id="Director" value="{{ isset($trailer->Director) ? $trailer->Director : ''}}" required>
    {!! $errors->first('Director', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('Fecha') ? 'has-error' : ''}}">
    <label for="Fecha" class="control-label">{{ 'Fecha' }}</label>
    <input class="form-control" name="Fecha" type="date" id="Fecha" value="{{ isset($trailer->Fecha) ? $trailer->Fecha : ''}}" required>
    {!! $errors->first('Fecha', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('Video') ? 'has-error' : ''}}">
    <label for="Video" class="control-label">{{ 'Video' }}</label>
    <input class="form-control" name="Video" type="text" id="Video" value="{{ isset($trailer->Video) ? $trailer->Video : ''}}" required>
    {!! $errors->first('Video', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
