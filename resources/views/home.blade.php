@extends('layouts.main')

@section('content')

<h1 class="text-center mt-5">Trenitalia</h1>


<table class="table table-striped mt-5 text-center">
<thead>
<tr>
    <th scope="col"></th>
    <th scope="col">Azienda</th>
    <th scope="col">Stazione di Partenza</th>
    <th scope="col">Stazionde di arrivo</th>
    <th scope="col">Orario di partenza</th>
    <th scope="col">Orario di arrivo</th>
    <th scope="col">Codice treno</th>
    <th scope="col">In orario</th>
    <th scope="col">Numero carroze</th>
    <th scope="col">Cancellato</th>
</tr>
</thead>
<tbody>

    @foreach ($trains as $train)
    <tr>
        <td>{{$train->reference}}</td>
        <td>{{$train->Azienda}}</td>
        <td>{{$train->Stazione_di_Partenza}}</td>
        <td>{{$train->Stazione_di_arrivo}}</td>
        <td>{{$train->Orario_di_partenza}}</td>
        <td>{{$train->Orario_di_arrivo}}</td>
        <td>{{$train->Codice_treno}}</td>
        <td>{{$train->In_orario}}</td>
        <td>{{$train->carrozze}}</td>
        <td>{{$train->Cancellato}}</td>


    </tr>

    @endforeach

@endsection
