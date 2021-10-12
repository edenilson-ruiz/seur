<div class="row">
    <div class="mb-1 col-md-4">
        <label class="form-label" for="departamento_id">Departamento</label>
        <select wire:model="departamento" class="form-select" id="departamento_id" name="departamento_id">
            <option value="">Seleccione</option>
            @foreach ($departamentos as $departamento)
                <option value="{{ $departamento->id }}">{{ $departamento->departamento_nombre }}</option>
            @endforeach
        </select>
    </div>

    @if(!is_null($municipios))
        <div class="mb-1 col-md-4">
            <label class="form-label" for="municipio_id">Municipio</label>
            <select class="form-select" id="municipio_id" name="municipio_id">
                <option value="" selected>Seleccione</option>
                @foreach ($municipios as $municipio)
                    <option value={{ $municipio->id }}>{{ $municipio->municipio_nombre }}</option>
                @endforeach
            </select>
        </div>
    @endif
</div>
