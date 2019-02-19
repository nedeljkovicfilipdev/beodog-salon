@extends('admin.panelLayout')

@section('panelContent')
    <form method="POST" action="{{ route('reservations.delete', ['id' => $reservation->id]) }}" class="col-md-6 offset-md-3">
        @csrf
        <p>Da li ste sigurni da želite da obrišete rezervaciju {{ $reservation->getTitle() }}?</p>

        <div class="btn-group btn-block">
            <button type="submit" class="btn btn-block btn-primary col-md-6">Potvrdi</button>
            <a href="{{ route('reservations.single', ['id' => $reservation->id]) }}" class="btn btn-light col-md-6">Odustani</a>
        </div>
    </form>
@endsection
