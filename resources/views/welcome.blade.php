@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    
</head>
<body>
    <div class="landing-page">
        <div class="gambar"><img src="{{ asset('css/images/kost.png') }}"></div>
        <div class="overlay"></div>
        <div class="content">
            <h1>Sistem Informasi Kost-Kost an</h1>
            <p>Berikan pelayanan yang terbaik untuk costumer</p>
            <a href="https://github.com/YOULLOGIC" class="button">Info Kost</a>
        </div>
    </div>
</body>
</html>

@endsection
