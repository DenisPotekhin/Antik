@extends('layouts.app')

@section('content')

<div class="container" id="app">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <vuejs-datepicker :inline="true" v-model="openDate"></vuejs-datepicker>
                    <h2>Notes on {{date("Y-m-d")}}</h2>
                    @foreach($notes as $note)
                      <div>{{Str::limit($note->content, 200)}}</div>
                      <small><a href="/home/notes/{{$note->id}}/edit"> Edit note</a></small>
                      <small><a href="/home" data-confirm="Are you sure?" data-method="delete" rel="nofollow">Delete</a></small>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
    <script src="https://unpkg.com/vue"></script>
    <script src="https://unpkg.com/vuejs-datepicker"></script>
    <script>
    const app = new Vue({
      el: '#app',
      components: {
        vuejsDatepicker
      },
      data() {
        return {
          selectedDate: '',
          bootstrapStyling: true,
          openDate: new Date()
        }
      }
    })
    </script>
</div>
@endsection
