@extends('admin.panelLayout')

@section('panelContent')
    @if(count($reservations))
        <div class="mb-3">
            <a href="{{ route('reservations.create') }}" class="btn btn-small btn-primary">Nova rezervacija</a>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Ime psa</th>
                    <th scope="col">Rasa psa</th>
                    <th scope="col">Ime vlasnika</th>
                    <th scope="col">Datum i vreme</th>
                    <th scope="col">Telefon</th>
                    <th scope="col" class="text-right">Akcije</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reservations as $reservation)
                    <tr>
                        <th scope="row">{{ $reservation->id }}</th>
                        <td>
                            <a href="{{ route('reservations.single', ['id' => $reservation->id]) }}">{{ $reservation->dog_name }}</a>
                        </td>
                        <td>{{ $reservation->dog_breed }}</td>
                        <td>{{ $reservation->client_name  }}</td>
                        <td>{{ $reservation->reservation_date->format('d.m.Y. H:i')  }}</td>
                        <td>
                            <a href="tel:{{ $reservation->phone }}">{{ $reservation->phone }}</a>
                        </td>
                        <td class="pt-2 pb-2 text-right">
                            <div class="btn-group btn-group-sm">
                                <a href="{{ route('reservations.single', ['id' => $reservation->id]) }}" class="btn btn-secondary">
                                    Uređivanje
                                </a>
                                <a href="{{ route('reservations.confirmDelete', ['id' => $reservation->id]) }}" class="btn btn-danger">
                                    Brisanje
                                </a>
                                {{--
                                <a href="{{ $reservation->generateCalendarLink() }}" class="btn btn-primary" target="_blank" title="Dodaj u Google Kalendar">
                                    G Kalendar
                                </a>
                                --}}
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        Još uvek nije napravljena ni jedna rezervacija.

        <div class="mt-3">
            <a href="{{ route('reservations.create') }}" class="btn btn-small btn-primary">Nova rezervacija</a>
        </div>
    @endif
@endsection
