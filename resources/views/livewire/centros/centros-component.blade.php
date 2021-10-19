<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Administración de Centros</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <span>Por Página</span>
                    <div class="col-sm-1">
                      <select class="form-select" wire:model="perPage" id="perPage">
                        <option>2</option>
                        <option>5</option>
                        <option>10</option>
                        <option>15</option>
                        <option>25</option>
                        <option>50</option>
                      </select>
                    </div>
                    <div class="col-sm-7"></div>
                    <div class="col-sm-4">
                        <input wire:model.debounce.300ms="search" type="text" class="form-control form-inline" placeholder="buscar">
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th  wire:click="sortBy('centro_codigo')" style="cursor: pointer">
                                Código del Centro
                                @include('partials._sort-icon', ['field'=>'centro_codigo'])
                            </th>
                            <th wire:click="sortBy('centro_nombre')" style="cursor: pointer">
                                Nombre del Centro
                                @include('partials._sort-icon', ['field'=>'centro_nombre'])
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($centros as $centro)
                            <tr>
                                <td>{{ $centro->centro_codigo }}</td>
                                <td>{{ $centro->centro_nombre }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="row">
        <p>Mostrando del {{ $centros->firstItem() }} al {{ $centros->lastItem() }} de un total de {{ $centros->total() }} usuarios</p>
        <p>{{ $centros->links() }}</p>
    </div>
</div>

