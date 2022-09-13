@extends('woonplaatsen.layout')
@section('content')
<div class="card">
  <div class="card-header">Zoom in on chosen one </div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">name : {{ $woonplaatsen->name }}</h5>
        <p class="card-text">surname : {{ $woonplaatsen->surname }}</p>
        <p class="card-text">home : {{ $woonplaatsen->home }}</p>
        <p class="card-text">travel : {{ $woonplaatsen->travel }}</p>
        <a href="{{ url('/woonplaatsen') }}" class="Homepage" title="Backtohome"></i> Back to Homepage
  </div>
      
    </hr>
  
  </div>
</div>