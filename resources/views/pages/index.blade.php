<!DOCTYPE html>
<html>
<head>
    <title>{{ config('app.name', 'MyProject') }}</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #00c6ff, #0072ff);
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
            overflow: hidden;
        }
        h1 {
            background: linear-gradient(90deg, rgba(33, 147, 176, 1) 0%, rgba(109, 213, 237, 1) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-size: 4em;
            margin: 0;
        }
        .background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://source.unsplash.com/random/1920x1080');
            filter: blur(10px);
            z-index: -1;
        }
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: -1;
        }
        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1;
            background-color: #333;
            display: flex;
            justify-content: space-between;
            padding: 0.5rem 1rem;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            padding: 0.5rem 1rem;
        }
        .navbar a:hover {
            background-color: #575757;
        }
        .navbar-toggler {
            background-color: #575757;
            border: none;
            cursor: pointer;
            padding: 0.5rem 1rem;
        }
        .navbar-collapse {
            display: none;
            flex-direction: column;
            width: 100%;
        }
        .navbar-collapse.show {
            display: flex;
        }
        .navbar-nav {
            display: flex;
            flex-direction: column;
            width: 100%;
        }
        .navbar-nav a {
            text-align: left;
            padding: 0.5rem 1rem;
        }
        .navbar-nav .dropdown-menu {
            display: none;
            flex-direction: column;
            background-color: #333;
        }
        .navbar-nav .dropdown:hover .dropdown-menu {
            display: flex;
        }
        .form-inline {
            display: flex;
            flex-direction: row;
        }
        .form-inline input {
            margin-left: 1rem;
            padding: 0.5rem;
            border-radius: 5px;
            border: none;
        }
        @media (min-width: 768px) {
            .navbar-collapse {
                display: flex !important;
                flex-direction: row;
                align-items: center;
                justify-content: space-between;
            }
            .navbar-nav {
                flex-direction: row;
            }
            .navbar-nav a {
                text-align: center;
                padding: 0.5rem 1rem;
            }
            .form-inline {
                flex-direction: row;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
    <nav class="navbar">
        <a class="navbar-brand" href="/">MyProject</a>
        <div class="navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="/services">Service</a>
                </li>
            </ul>
            <form class="form-inline">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
            </form>
        </div>
    </nav>
    <div class="background"></div>
    <div class="overlay"></div>
    <h1>{{$title}}</h1>

    <script>
        function toggleNavbar() {
            var navbarCollapse = document.getElementById("navbarNav");
            if (navbarCollapse.classList.contains("show")) {
                navbarCollapse.classList.remove("show");
            } else {
                navbarCollapse.classList.add("show");
            }
        }
    </script>
</body>
</html>
