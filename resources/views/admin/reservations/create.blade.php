@extends('admin.panelLayout')

@section('panelContent')
    <form method="POST" action="{{ route('reservations.store') }}" class="col-md-6 offset-md-3">
        @csrf

        <div class="form-group">
            <label for="dog_name" class="">Ime psa</label>

            <input id="dog_name" type="text" class="form-control{{ $errors->has('dog_name') ? ' is-invalid' : '' }}" name="dog_name" value="{{ old('dog_name') }}" required autofocus>

            @if ($errors->has('dog_name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('dog_name') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <label for="dog_breed" class="">Rasa psa</label>

            <input id="dog_breed" type="text" class="form-control{{ $errors->has('dog_breed') ? ' is-invalid' : '' }}" name="dog_breed" value="{{ old('dog_breed') }}" required>

            @if ($errors->has('dog_breed'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('dog_breed') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <label for="client_name" class="">Ime vlasnika</label>

            <input id="client_name" type="text" class="form-control{{ $errors->has('client_name') ? ' is-invalid' : '' }}" name="client_name" value="{{ old('client_name') }}" required>

            @if ($errors->has('client_name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('client_name') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <label for="reservation_date" class="">Datum i vreme</label>

            <input id="reservation_date" type="text" class="form-control{{ $errors->has('reservation_date') ? ' is-invalid' : '' }}" name="reservation_date" value="{{ old('reservation_date') }}" required>

            @if ($errors->has('reservation_date'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('reservation_date') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <label for="phone" class="">Telefon</label>

            <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}">

            @if ($errors->has('phone'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('phone') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-block btn-primary">Sačuvaj</button>
        </div>
    </form>
@endsection
