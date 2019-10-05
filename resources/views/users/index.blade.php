@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-4 offset-md-4">
            @foreach ($forms as $competencia)
                <a class="mt-2 btn {{ ($form != null && $form->id == $competencia->id) ? 'btn-success' : 'btn-info'}}" href="{{ url('users/competencia/'.$competencia->id)}}">{{$competencia->name}}</a>
                <br>
                
            @endforeach
        </div>
        <div class="col-md-6">
            @if($form != null)
                <form action="{{url('users/competencia')}}" method="POST">
                    @csrf
                    <input type="hidden" name="id_form" value="{{$form->id}}"/>
                    @foreach ($form->questions as $question)
                        @component('layouts.component_form', ['question'=> $question])
                        @endcomponent
                    @endforeach
                    <div class='row'>
                        <button type="submit" class="btn btn-success">Enviar</button>
                    </div>

                </form>
            @else
                <h1>No has elegido ninguna competencia</h1> 
            @endif
        </div>
    </div>    
@endsection

@section('js')
    
@endsection