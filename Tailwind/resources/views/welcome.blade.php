<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f8f9fa;
        text-align: center;
      }
      .container {
        padding: 20px;
      }
      .description {
        font-size: 18px;
        color: #555;
        margin-top: 10px;
      }
      footer {
        margin-top: 50px;
        padding: 10px;
        background-color: #333;
        color: white;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h1 class="text-3xl font-bold underline">Hello world!</h1>
      <p class="description">
        Welcome to my webpage! This is a simple example demonstrating HTML, CSS, and Laravel Vite integration.
      </p>
    </div>

    <footer>
      &copy; 2025 Hello World. All rights reserved.
    </footer>
  </body>
</html>