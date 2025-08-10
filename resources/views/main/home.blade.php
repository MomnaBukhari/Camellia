@extends('layouts.app')

@section('title', 'Home')

@section('custom-css')
    /* Example page-specific styles */
    h1 {
    font-size: 2.5rem;
    color: #264653;
    }
    p {
    font-size: 1.2rem;
    color: #555;
    max-width: 600px;
    line-height: 1.6;
    }
    .intro-box {
    background: white;
    padding: 2rem;
    border-radius: 12px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.05);
    margin-top: 2rem;
    transition: transform 0.3s ease;
    }
    .intro-box:hover {
    transform: translateY(-5px);
    }
@endsection

@section('content')
    <div class="intro-box">
        <h1>Welcome to Camellia 🌿</h1>
        <p>
            Camellia is your clean and minimal space to share, explore, and grow your ideas.
            Designed with simplicity in mind, so you can focus on what truly matters — creating.
        </p>
    </div>
@endsection

@section('custom-script')
    // Example animation or future interactivity
    console.log('Home page loaded');
@endsection
