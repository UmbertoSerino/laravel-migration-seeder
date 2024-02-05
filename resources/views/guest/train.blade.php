@extends('layouts.home')
@section('main-content')
<h1 class="text-center">
    Trenito, spera che arriva, spera che parta
</h1>
    <article class="container">
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Compagnia</th>
                        <th scope="col">Stazione di Partenza</th>
                        <th scope="col">Orario di Partenza</th>
                        <th scope="col">Stazione d'arrivo</th>
                        <th scope="col">Orario d'arrivo</th>
                        <th scope="col">Codice treno</th>
                        <th scope="col">Binario</th>
                        <th scope="col">Ritardo</th>
                        <th scope="col">Altro</th>   
                    </tr>
                </thead>
                <tbody>
                    @forelse ($tranisList as $train )
                    <tr>
                    <th scope="row">{{ $train['id'] }}</th>
                    <td>{{ $train['name_company'] }}</td>
                    <td>{{ $train['departure_station'] }}</td>
                    <td>{{ $train['arrival_station'] }}</td>
                    <td>{{ $train['departure_time'] }}</td>
                    <td>{{ $train['arrival_time'] }}</td>
                    <td>{{ $train['code_train'] }}</td>
                    <td>{{ $train['carriage_number'] }}</td>
                    @if ($train->on_time == true)
                        <td>In orario</td>
                     @else
                        <td>In ritardo</td>
                    @endif
                    @if ($train->on_time == false && $train->cancelled == true)
                        <td>Cancellato</td>
                    @endif
                    @empty
                    <th>Non ci sono treni per oggi!</th>
                    @endforelse
                  </tr>
                </tbody>
              </table>
        </div>
</article>
@endsection