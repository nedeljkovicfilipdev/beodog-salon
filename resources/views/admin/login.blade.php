@extends('admin.panelLayout')

@section('panelContent')
    <form method="POST" action="{{ route('login') }}" class="col-md-6 offset-md-3">
        @csrf

        <div class="form-group">
            <label for="email" class="">Email</label>

            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <label for="password" class="">Lozinka</label>

            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group row">
            <div class="form-check">
                <input class="form-check-input ml-0" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label ml-3" for="remember">Zapamti me</label>
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-block btn-primary">Prijava</button>
        </div>
    </form>
@endsection
