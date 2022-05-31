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
                                <h2>Docentes</h2>                                               
                                @can('crear-blog')
                                <a class="btn btn-warning" href="{{ route('docentes.create') }}">Nuevo</a>
                                @endcan                 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

