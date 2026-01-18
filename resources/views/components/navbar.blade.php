    <!-- Navigation Bar -->
    <style>
        /* Navbar */
        .navbar {
            background-color: #2c3e50;
            padding: 1rem 0;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .nav-logo {
            font-size: 1.5rem;
            font-weight: bold;
            color: white;
            text-decoration: none;
        }

        .nav-menu {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-link {
            color: white;
            text-decoration: none;
            transition: color 0.3s;
        }

        .nav-link:hover {
            color: #3498db;
        }
    </style>

    <nav class="navbar">
        <div class="nav-container">
            <a href="/" class="nav-logo">D&D Assist</a>
            <ul class="nav-menu">
                <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Encounters</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Characters</a></li>
            </ul>
        </div>
    </nav>
