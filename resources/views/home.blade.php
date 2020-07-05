@extends('layouts.app')

@section('content')

            <div class="card">
                <div class="card-header">Materi Tutorial Tsn_Ngoding</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Belajar Rest Api Full menggunakan laravel 7 ') }}
                    <br>{{ __('Crated By Tegar Satya Negara') }}
                </div>
            </div>

@endsection
