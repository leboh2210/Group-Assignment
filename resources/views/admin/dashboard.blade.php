@extends('layouts.app')

@section('content')
<div class="container-fluid" style="background-color:#1B2A59;">
    <!-- Main Content Header Section -->
    <main role="main" class="main-content" style="background-color: #F24C27; padding: 20px;">
        <div class="text-center text-white">
            <h2>Welcome to the Admin Dashboard</h2>
            <p>This is the admin dashboard where you can manage institutions, faculties, courses, and admissions.</p>
        </div>
    </main>

    <!-- Horizontal Navigation Links in Boxes on Black Background -->
    <div class="nav-container d-flex justify-content-center" style="background-color: #1B2A59; padding: 20px;">
        <nav class="nav-links d-flex flex-wrap justify-content-center">
            <a class="nav-link-box text-white text-center" href="{{ route('admin.dashboard') }}">Dashboard</a>
            <a class="nav-link-box text-white text-center" href="{{ route('admin.institutions') }}">Add Institutions</a>
            <a class="nav-link-box text-white text-center" href="{{ route('admin.faculties.add') }}">Add Faculties</a>
            <a class="nav-link-box text-white text-center" href="{{ route('admin.courses.add') }}">Add Courses</a>
            <a class="nav-link-box text-white text-center" href="{{ route('admin.institutions') }}">Delete Institutions</a>
            <a class="nav-link-box text-white text-center" href="{{ route('admin.admissions') }}">Publish Admissions</a>
            <a class="nav-link-box text-white text-center" href="{{ route('admin.profile.edit') }}">Profile</a>
            <form method="POST" action="{{ route('admin.logout') }}" class="m-2">
                @csrf
                <button class="nav-link-box btn text-white">Logout</button>
            </form>
        </nav>
    </div>

    <!-- Dynamic Content Area -->
    <div class="content" style="padding: 20px;">
        <div id="contentArea">
            <!-- JavaScript-based content display here -->
        </div>
    </div>
</div>

<script>
    function showSection(section) {
        let contentArea = document.getElementById('contentArea');
        switch(section) {
            case 'dashboard':
                contentArea.innerHTML = '<h2 class="mt-3">Admin Dashboard</h2><p>This is the admin dashboard where you can manage institutions and courses.</p>';
                break;
            // Additional cases for each menu item can be added here
            default:
                contentArea.innerHTML = '<h2 class="mt-3">Welcome to the Admin Dashboard</h2><p>This is the admin dashboard where you can manage institutions and courses.</p>';
        }
    }
</script>

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