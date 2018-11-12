@extends('layouts.base')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Categories</div>
                     @foreach($cats as $cat)
                    <h2 class="title">{{$cat->name}}</h2>
                     @foreach($cat->category()->get() as $one)
                     <h4>{{$one->name}}</h4>
                     <!-- подключаем картинки -->
                     @if($one->picture !='')
                     <img src="{{asset('uploads/thumb/' .$one->picture)}}" alt="">)
                    @endif
                    {!!$one->body!!}        
                   @endforeach                 
                  @endforeach  
                <div class="card-body">
                   <!--  @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
