@extends('components.Layout')

@section('title', 'HTML Roadmap - User Info')

@section('content')
<div class="container">
    <div class="welcome-box">
        <h1>Welcome, {{ $username ? $username : 'Guest' }}</h1>
        <p>Enjoy exploring HTML!</p>
        <button class="submit" onclick="location.href='{{ url('/chapters') }}'">Explore</button>
    </div>
</div>
@endsection

