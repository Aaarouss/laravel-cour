@extends('base')

@section('title')

@section('content')
<h2>Confirmation</h2>

<p>Votre réservation a bien été prise en compte</p>
<ul>
<li>{{ $reservation ->nom}}</li>
<li>{{ $reservation ->couverts}}</li>
{{-- convertit une date au format Y-m-d en date au format d/m/Y --}}
<li>{{ date('d/m/Y', strtotime($reservation ->jour))}}</li>
<li>{{ $reservation ->heure}}</li>
<li>{{ $reservation ->telephone}}</li>
@if (( $reservation ->commentaires))
<li>{{ $reservation ->commentaires}}</li>
@endif
</ul>
@endsection
