@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged as: {{ Auth::user()->name }}
                    @foreach($notes as $note)
                      <h2>{{$note->data_event}}</h2>
                      <div>{{Str::limit($note->content, 200)}}</div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>

@endsection
