@extends('layouts.Head')

<title>Flights</title>

<div class="header" style="background-color:lightblue;">
    <h1>Find a low flight fare</h1>
    <p>Here are the sheapest flights for you to explore the country with us</p>
  </div>
  
  @yield('content')

@if(count($flights)<5)

    @foreach($flights  as $flight)
    
    <div class="well" style="background-color:lightblue;">
        <h2>{{$flight->Departure}} to {{$flight->Destination}} {{$flight->Date}} {{$flight->DepartTime}} - {{$flight->ArrivalTime}} <a href="/PassengerDetails" class="button">{{$flight->Price}}</a></h2>
        
    </div>
   
    @endforeach

 

    @else
    <p>No flights found</p>
    @endif
    <a href="/VutshilaAirlines" class="button">Back</a>