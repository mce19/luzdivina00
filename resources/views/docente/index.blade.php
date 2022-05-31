@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Docentes</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                
            
                        @can('crear-docente')
                        <a class="btn btn-warning" href="{{ route('docente.create') }}">Nuevo</a>
                        @endcan
            
                        <table class="table table-striped mt-2">
                                <thead style="background-color:#6777ef">                                     
                                    <th style="display: none;">ID</th>
                                    <th style="color:#fff;">Nombre</th>
                                    <th style="color:#fff;">Correo</th>                                    
                                    <th style="color:#fff;">Dirección actual</th>                                                                   
                                    <th style="color:#fff;">Telefono</th>                                                                   
                              </thead>
                              <tbody>
                            @foreach ($docente as $docente)
                            <tr>
                                <td style="display: none;">{{ $docente->id }}</td>                                
                                <td>{{ $docente->nombre }}</td>
                                <td>{{ $docente->correo }}</td>
                                <td>{{ $docente->direccion_actual }}</td>
                                <td>{{ $docente->telefono }}</td>
                                <td>
                                    <form action="{{ route('docente.destroy',$docente->id) }}" method="POST">                                        
                                        @can('editar-docente')
                                        <a class="btn btn-info" href="{{ route('docente.edit',$docente->id) }}">Editar</a>
                                        @endcan

                                        @csrf
                                        @method('DELETE')
                                        @can('borrar-docente')
                                        <button type="submit" class="btn btn-danger">Borrar</button>
                                        @endcan
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>

                        <!-- Ubicamos la paginacion a la derecha -->
                        <div class="pagination justify-content-end">
                            {!! $docente->links() !!}
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
