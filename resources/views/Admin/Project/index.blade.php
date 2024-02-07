
@extends('layouts.admin')

@section('content')
@foreach ($projects as $project)

    <!--card-->
<div class="card">

    <!--nome progetto-->
    <div class="row d-flex justify-content-between">
        <div class="d-flex">
            <div>
                <strong class="me-2">Nome del Progetto: </strong>   
            </div>
            <div>
                <h5>{{$project->title}}</h5>  
            </div>
        </div>
        <button class="btn">
            <a href="{{route('admin.project.show', $project)}}">mostra</a>
        </button>
        
    </div>
    <!--/nome progetto-->

    <!--linguaggio e ultimo commit-->
    <div class=" d-flex justify-content-between">
        <div class="d-flex">
            <strong class="me-1">Codice:</strong> 
            <div>{{$project->code}}</div>
        </div>
        <div class="d-flex">
            <strong class="me-1">Ultimo commit</strong>
            <div>{{$project->last_commit}}</div>
        </div>
        
    </div>
    <!--/linguaggio e ultimo commit-->
</div>
<!--/card-->

@endforeach

<!--aggiungere progetto-->
<button class="btn">
    <a href="{{route('admin.project.create')}}"> Aggiungi progetto</a>
</button>

@endsection   
