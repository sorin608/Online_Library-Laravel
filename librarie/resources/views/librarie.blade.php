<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Library</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        header {
            background-color: #007BFF;
            color: #fff;
            padding: 1em;
            text-align: center;
        }

        section {
            
            padding: 2em;
            padding-top: 0em;
            padding-bottom: 1em;
            
        }

        h1, h2 {
            color: #007BFF;
        }

        .library-img {
            width: 100%;
            max-width: 600px;
            height: auto;
            display: block;
            margin: 2em auto;
        }

        .cta-button {
            display: inline-block;
            padding: 1em 2em;
            font-size: 1.2em;
            text-decoration: none;
            background-color: #007BFF;
            color: #fff;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .cta-button:hover {
            background-color: #0056b3;
        }

        .user-section {
    position: absolute;
    top: 20px;
    right: 20px;
    display: flex;
    align-items: center;
    color: white;
}

.user-section a {
    margin-left: 10px;
    color:white;
}
.user-section button {
    margin-left: 10px;
}
    </style>

</head>
<body>
<div class="user-section">
    @auth
        <p>Welcome, {{ auth()->user()->name }}</p>
        <a href="/dashboard">Profil</a>
        <form method="POST" action="/logout">
            @csrf
            <button type="submit">Logout</button>
        </form>
    @else
        <a href="/login">Login</a>
        @if (Route::has('register'))
            <a href="/register">Register</a>
        @endif
    @endauth
</div>
    <header>
        <h1>Student Library</h1>
        <p>Explore a world of knowledge at your fingertips</p>
    </header>

    <section>
        <h2>Welcome to the Online Student Library</h2>
        <p>Access a vast collection of books, articles, and resources to support your studies.</p>
       

        <p>Ready to dive in?</p>
        <a href="/explore" class="cta-button">Explore the Library</a>
    </section>

    <section id="explore">
        <h2>Explore Our Collection</h2>
        <p>Discover a wide range of materials to enhance your learning experience.</p>

        <ul>
            <li>Textbooks</li>
            <li>Research Papers</li>
            <li>E-books</li>
            <li>Journals</li>
            <!-- Add more categories as needed -->
        </ul>

        <p>Start exploring now and unlock a wealth of knowledge!</p>
        <a href="/register" class="cta-button">Join the Library</a>
    </section>


    <footer>
        <p>&copy; 2023 Student Library. All rights reserved.</p>
    </footer>
</body>
</html>
