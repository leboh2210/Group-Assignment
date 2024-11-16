@extends('layouts.app')

@section('content')
<div class="container-fluid" style="background-color:#1B2A59;">
    <!-- Header Section -->
    <main role="main" class="main-content" style="background-color: #F24C27; padding: 20px;">
        <div class="text-center text-white">
            <h2>Welcome to the Institution Dashboard</h2>
            <p>This is the institution dashboard where you can manage faculties, courses, and view applications.</p>
        </div>
    </main>

    <!-- Horizontal Navigation Links in Boxes on Black Background -->
    <div class="nav-container d-flex justify-content-center" style="background-color: #1B2A59; padding: 20px;">
        <nav class="nav-links d-flex flex-wrap justify-content-center">
            <a class="nav-link-box text-white text-center" href="{{ route('institution.dashboard') }}">Dashboard</a>
            <a class="nav-link-box text-white text-center" href="{{ route('institution.faculties') }}">Manage Faculties</a>
            <a class="nav-link-box text-white text-center" href="{{ route('institution.courses') }}">Manage Courses</a>
            <a class="nav-link-box text-white text-center" href="{{ route('institution.applications') }}">View Applications</a>
            <a class="nav-link-box text-white text-center" href="{{ route('institution.profile.edit') }}">Profile</a>
            <form method="POST" action="{{ route('institution.logout') }}" class="m-2">
                @csrf
                <button class="nav-link-box btn text-white">Logout</button>
            </form>
        </nav>
    </div>

    <!-- Main Content Area -->
    <div class="content" style="padding: 20px;">
        <div id="contentArea">
            <!-- Content displayed here -->
        </div>
    </div>
</div>

<!-- CSS Styling -->
<style>
    body {
        background-color: black;
        color: white;
        margin: 0;
    }

    .nav-container {
        display: flex;
        justify-content: center;
        background-color: #1B2A59;
        padding: 20px;
    }

    .nav-link-box {
        background-color: black; /* Box color */
        border: 2px solid orange; /* Box border */
        padding: 10px 20px;
        margin: 10px;
        border-radius: 5px;
        font-weight: bold;
        text-decoration: none;
        color: white;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .nav-link-box:hover {
        background-color: orange; /* Hover color */
        color: #1B2A59; /* Text color on hover */
    }

    .nav-links a,
    .nav-links form {
        display: inline-block;
    }

    .main-content {
        padding: 20px;
    }

    .content {
        text-align: center;
    }
</style>
@endsection