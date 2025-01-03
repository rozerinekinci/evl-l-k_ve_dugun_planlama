@extends('layouts.app')

@section('title', 'Düğünler')

@section('content')
    <div class="container my-5">
        <h1 class="text-center mb-4">Düğünler</h1>
        <p class="text-center text-muted">Geçmiş ve gelecekteki düğünler hakkında detaylar.</p>

        @if($dugunler->isEmpty())
            <div class="alert alert-warning text-center" role="alert">
                Şu anda listelenecek düğün bulunmamaktadır.
            </div>
        @else
            <table class="table table-striped table-hover mt-4">
                <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Düğün İsmi</th>
                    <th>Tarih</th>
                    <th>Mekan</th>
                    <th>Müzik ve Eğlence</th>
                </tr>
                </thead>
                <tbody>
                @foreach($dugunler as $index => $dugun)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $dugun->dugun_ismi }}</td>
                        <td>{{ $dugun->dugun_tarihi }}</td>
                        <td>{{ $dugun->mekan }}</td>
                        <td>{{ $dugun->muzik_eglence_id }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
