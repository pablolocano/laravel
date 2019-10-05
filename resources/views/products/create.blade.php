@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <form action="{{ url('products')}}" method="POST">
                @csrf
                <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                    <label for="">Nombre</label>
                    <input type="text" class="form-control" name='name' value="{{ old('name')}}">
                    @if($errors->has('name'))
						@foreach($errors->get('name') as $message)
							<span class="text-danger">{{$message}}</span>
						@endforeach
					@endif
				</div>
                <div class="form-group {{ $errors->has('Stock') ? 'has-error' : ''}}">
                    <label for="">Stock</label>
                    <input type="text" class="form-control" name='stock' value="{{ old('stock')}}">
                    @if($errors->has('stock'))
                        @foreach($errors->get('stock') as $message)
                            <span class="text-danger">{{$message}}</span>
                        @endforeach
                    @endif
                </div>
                <div class="form-group {{ $errors->has('price') ? 'has-error' : ''}}">
                    <label for="">Precio</label>
                    <input type="text" class="form-control" name='price' value="{{ old('price')}}">
                    @if($errors->has('price'))
                        @foreach($errors->get('price') as $message)
                            <span class="text-danger">{{$message}}</span>
                        @endforeach
                    @endif
                </div>
                <div class="row">
					<button type="submit" class="btn btn-info">Guardar</button>
				</div>
            </form>
        </div>
    </div>
    
@endsection