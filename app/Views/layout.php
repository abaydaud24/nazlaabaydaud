<!DOCTYPE html>
<html>
<head>
  <title>Website</title>
</head>
<body>
  <header>
    <h1>Header</h1>
  </header>
  <nav>
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Skills</a></li>
    </ul>
  </nav>
  <main>
    <?= $this->renderSection('content') ?>
    <?= $this->renderSection('content') ?>
  </main>
  <footer>
    <p>Footer</p>
  </footer>
</body>

  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    header, nav, main, footer {
      padding: 20px;
    }

    header {
      background-color: #333;
      color: #fff;
    }

    nav ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
    }

    nav ul li {
      display: inline;
      margin-right: 10px;
    }

    nav ul li a {
      color: #333;
      text-decoration: none;
    }

    nav ul li a:hover {
      color: #fff;
    }

    main {
      background-color: #f2f2f2;
    }

    footer {
      background-color: #333;
      color: #fff;
    }
    /* app/Views/profile.css */
    h2 {
      color: #333;
    }

    p {
      color: #666;
      margin-bottom: 10px;
    }
    /* app/Views/skills.css */
    h2 {
      color: #333;
    }

    ul {
      list-style-type: disc;
      color: #666;
      margin-left: 20px;
    }

  </style>
</html>