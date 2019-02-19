@extends('admin.layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ $panelTitle }}</div>

                    <div class="card-body">
                        @yield('panelContent')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
