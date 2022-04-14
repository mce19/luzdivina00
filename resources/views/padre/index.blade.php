@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Blogs</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                
            
                        @can('crear-padre')
                        <a class="btn btn-warning" href="{{ route('padres.create') }}">Nuevo</a>
                        @endcan
            
                        <tr>
                            <td style="display: none;">{{$padre->id}}/td>
                            <td class="table-info">{{$padre->name}}</td>
                            <td class="table-info">{{$padre->email}}</td>
                            <td  class="table-info">
                                @if(!empty($padre->getRoleNames()))
                                @foreach($padre->getRoleNames() as $rolName)
                                <h5><span class="badge badge-dark">{{$rolName}}</span></h5>
                                @endforeach

                                @endif
                            </td>
                            <td  class="table-info">
                                <a class="btn btn-info" href="{{ route ('usuarios.edit', $usuario->id) }}">Editar</a>

                        <!-- Ubicamos la paginacion a la derecha -->
                        <div class="pagination justify-content-end">
                            {!! $blogs->links() !!}
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
