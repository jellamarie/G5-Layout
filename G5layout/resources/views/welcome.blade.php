@extends('components.Layout')

@section('title', 'HTML Roadmap - Welcome')

@section('content')
<header>
    <h1>HTML Roadmap</h1>
    <img src="{{ asset('/images/html.png') }}" alt="Description of the image" class="welcome-image">
</header>

<div class="container">
    <div class="form-box">
        <h2>Enter Your Username</h2>
        <form action="{{ url('/user') }}" method="GET">
            <label for="username">Enter your username:</label>
            <input type="text" name="username" id="username" pattern="[A-Za-z]+" title="Only alphabetic characters are allowed" required >
            <br><br>
            <button type="submit">Submit</button>
        </form>

        

        <div class="link-container">
            <p>or</p>
            <a href="{{ url('/user') }}" class="button-link">Continue as Guest</a>
        </div>
    </div>
</div>

@endsection

