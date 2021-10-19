<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Administración de Usuarios</h4>
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
                            <th wire:click="sortBy('usuario_nombre_1')" style="cursor: pointer">
                                Nombre del Usuario
                                @include('partials._sort-icon', ['field'=>'usuarios_nombre_1'])
                            </th>
                            <th  wire:click="sortBy('usuario_apellido_1')" style="cursor: pointer">
                                Primer Apellido
                                @include('partials._sort-icon', ['field'=>'usuario_apellido_1'])
                            </th>
                            <th  wire:click="sortBy('usuario_email')" style="cursor: pointer">
                                E-mail
                                @include('partials._sort-icon', ['field'=>'usuario_email'])
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($usuarios as $usuario)
                            <tr>
                                <td>{{ $usuario->usuario_nombre_1 }}</td>
                                <td>{{ $usuario->usuario_apellido_1 }}</td>
                                <td>{{ $usuario->usuario_email }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="row">
        <p>Mostrando del {{ $usuarios->firstItem() }} al {{ $usuarios->lastItem() }} de un total de {{ $usuarios->total() }} usuarios</p>
        <p>{{ $usuarios->links() }}</p>
    </div>
</div>
