@extends('layouts.main')

@section('title', $event->title)

@section('content')

<div class="col-md10 offset-md-1">
    <div class="row">
        <div id="image-container" classe="col-md-6">
            <img src="/img/events/{{ $event->image }}" class="img-fluid" alt="{{ $event->title" >
        </div>
        <div id="info-container" class="col-md-6">
            
        </div>
    </div>
</div>

@endsection