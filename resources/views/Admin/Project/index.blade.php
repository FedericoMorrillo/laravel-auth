
@extends('layouts.admin')

@section('content')
@foreach ($projects as $project)

    <!--card-->
<div class="card">

    <!--nome progetto-->
    <div class="row">
        <div>
            <strong class="me-1">Nome del Progetto: </strong>   
        </div>
        <div>
            <strong>{{$project->title}}</strong>  
        </div>
        
    </div>
    <!--/nome progetto-->

    <!--descrizione progetto-->
    <div class="row">
        <strong class="me-1">Descrizione: </strong> 
        <div>{{$project->description}}</div>
    </div>
    <!--/descrizione progetto-->

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
<button class="create-btn">
    <a href="{{route('admin.project.create')}}"> Aggiungi progetto</a>
</button>

@endsection   
