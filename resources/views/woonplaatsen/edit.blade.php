@extends('woonplaatsen.layout')
@section('content')
<div class="card">
  <div class="card-header">Edit selected individual</div>
  <div class="card-body">
      
      <form action="{{ url('woonplaatsen/' .$woonplaatsen->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$woonplaatsen->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$woonplaatsen->name}}" class="form-control"></br>
        <label>Achternaam</label></br>
        <input type="text" name="surname" id="surname" value="{{$woonplaatsen->surname}}" class="form-control"></br>
        <label>Home</label></br>
        <input type="text" name="home" id="home" value="{{$woonplaatsen->home}}" class="form-control"></br>

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


        <input type="submit" value="Update" class="btn btn-success"></br><br>
        <a href="{{ url('/woonplaatsen') }}" class="Homepage" title="Backtohome"></i> Back to Homepage
    </form>
  
  </div>
</div>


@stop