<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insta Clone User Profile</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .profile-img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
        }

        .post-img {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }

        .bio {
            font-size: 14px;
            color: #6c757d;
        }

        .stats {
            font-weight: bold;
        }

        .post-grid {
            margin-top: 30px;
        }

        .highlight-circle {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #ddd;
        }

        .highlight-title {
            font-size: 12px;
            text-align: center;
            margin-top: 5px;
            color: #6c757d;
        }

        .highlight-container {
            display: flex;
            justify-content: space-around;
            margin: 20px 0;
        }

        .hover-effect {
            position: relative;
            overflow: hidden;
        }

        .hover-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            opacity: 0;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: opacity 0.3s ease;
        }

        .hover-effect:hover .hover-overlay {
            opacity: 1;
        }

        .navbar-custom {
            background-color: #fff;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            font-size: 28px;
            font-weight: bold;
            color: #262626;
        }

        .navbar-nav .nav-link {
            font-size: 16px;
            color: #262626;
            margin-left: 20px;
            transition: color 0.3s;
        }

        .navbar-nav .nav-link:hover {
            color: #0095f6; /* Instagram blue */
        }

        .navbar-toggler {
            border-color: #0095f6; /* Instagram blue */
        }

        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 30 30'%3E%3Cpath stroke='%230095f6' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
        }

        .footer {
            margin-top: 40px;
            text-align: center;
            padding: 20px 0;
            color: #6c757d;
            border-top: 1px solid #ddd;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light navbar-custom">
    <div class="container">
        <!-- Brand Name -->
        <a class="navbar-brand" href="#">Insta Clone</a>

        <!-- Navbar Toggle Button for Mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navigation Links -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Explore</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Messages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Profile</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- User Info Section -->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-4 text-center">
            <img src="https://picsum.photos/400/400" class="profile-img" alt="Profile Image">
        </div>
        <div class="col-md-8">
            <div class="d-flex align-items-center mb-3">
                <h2 class="me-3">Babur Shah Sayer</h2>
                <button class="btn btn-primary btn-sm me-2">Follow</button>
                <button class="btn btn-outline-secondary btn-sm">Message</button>
            </div>
            <div class="d-flex mb-3">
                <div class="me-4">
                    <span class="stats">150</span> posts
                </div>
                <div class="me-4">
                    <span class="stats">5.6k</span> followers
                </div>
                <div>
                    <span class="stats">300</span> following
                </div>
            </div>
            <div class="bio">
                <p><strong>Coding.....</strong></p>
                <p> Learning, improving, evolving...</p>
            </div>
        </div>
    </div>

    <!-- Highlights Section -->
    <div class="highlight-container">
        <div>
            <img src="https://picsum.photos/80/80?random=1" class="highlight-circle" alt="Highlight 1">
            <div class="highlight-title">Highlight 1</div>
        </div>
        <div>
            <img src="https://picsum.photos/80/80?random=2" class="highlight-circle" alt="Highlight 2">
            <div class="highlight-title">Highlight 2</div>
        </div>
        <div>
            <img src="https://picsum.photos/80/80?random=3" class="highlight-circle" alt="Highlight 3">
            <div class="highlight-title">Highlight 3</div>
        </div>
        <div>
            <img src="https://picsum.photos/80/80?random=4" class="highlight-circle" alt="Highlight 4">
            <div class="highlight-title">Highlight 4</div>
        </div>
    </div>

    <!-- Posts Section -->
    <div class="post-grid row">
        <div class="col-md-4 mb-4 hover-effect">
            <img src="https://picsum.photos/300/300?random=5" class="post-img" alt="Post 1">
            <div class="hover-overlay">Description 1</div>
        </div>
        <div class="col-md-4 mb-4 hover-effect">
            <img src="https://picsum.photos/300/300?random=6" class="post-img" alt="Post 2">
            <div class="hover-overlay">Description 2</div>
        </div>
        <div class="col-md-4 mb-4 hover-effect">
            <img src="https://picsum.photos/300/300?random=7" class="post-img" alt="Post 3">
            <div class="hover-overlay">Description 3</div>
        </div>
        <div class="col-md-4 mb-4 hover-effect">
            <img src="https://picsum.photos/300/300?random=8" class="post-img" alt="Post 4">
            <div class="hover-overlay">Description 4</div>
        </div>
        <div class="col-md-4 mb-4 hover-effect">
            <img src="https://picsum.photos/300/300?random=9" class="post-img" alt="Post 5">
            <div class="hover-overlay">Description 5</div>
        </div>
        <div class="col-md-4 mb-4 hover-effect">
            <img src="https://picsum.photos/300/300?random=10" class="post-img" alt="Post 6">
            <div class="hover-overlay">Description 6</div>
        </div>
    </div>
</div>

<!-- Footer -->
<div class="footer">
    &copy; 2024 Insta Clone. All rights reserved.
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>



    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <!-- <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link> -->
                </form>
            </div>
        </div>
    </div>
</nav>
