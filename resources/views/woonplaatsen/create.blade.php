@extends('woonplaatsen.layout')
@section('content')
<div class="card">
  <div class="card-header">Create/Add</div>
  <div class="card-body">
      
      <form action="{{ url('woonplaatsen') }}" method="post">
        {!! csrf_field() !!}

        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>

        <label>Surname</label></br>
        <input type="text" name="surname" id="surname" class="form-control"></br>

        <label>Home</label></br>
        <input type="text" name="home" id="home" class="form-control"></br>

    <fieldset>
    <legend>Select travel:</legend>

    <div>
      <input type="radio" id="auto" name="travel" value="auto"
             checked>
      <label for="auto">Auto</label>
    </div>
    <div>
      <input type="radio" id="fiets" name="travel" value="fiets">
      <label for="fiets">Fiets</label>
    </div>
    <div>
      <input type="radio" id="OV" name="travel" value="OV">
      <label for="OV">OV</label>
    </div>
    </fieldset>

        <input type="submit" value="Save" class="btn btn-success"></br>
        <a href="{{ url('/woonplaatsen') }}" class="Homepage" title="Backtohome"></i> Back to Homepage
    </form>
  
  </div>
</div>
@stop