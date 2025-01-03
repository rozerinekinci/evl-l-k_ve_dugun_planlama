@extends('layouts.app')

@section('title', 'Düğün Ekle')

@section('content')
    <h1>Yeni Düğün Ekle</h1>

    <form action="{{ route('dugun.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="dugun_ismi" class="form-label">Düğün İsmi</label>
            <input type="text" class="form-control" id="dugun_ismi" name="dugun_ismi" required>
        </div>
        <div class="mb-3">
            <label for="dugun_tarihi" class="form-label">Düğün Tarihi</label>
            <input type="date" class="form-control" id="dugun_tarihi" name="dugun_tarihi" required>
        </div>
        <button type="submit" class="btn btn-primary">Ekle</button>
    </form>
@endsection
