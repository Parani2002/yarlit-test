<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change the link color to #111 (black) on hover */
li a:hover {
  background-color: #111;
}
.active {
  background-color: #04AA6D;
}
    </style>
</head>
<body>
<ul>
<li><a href="../index.php">Home page</a></li>
  <li><a href="about.php">About page</a></li>
  <li><a href="photo.php">Photo page</a></li>
  <li><a href="video.php" class="active">Video page</a></li>
  <li><a href="contact.php">Contact page</a></li>
</ul>
    <h1>Video Page</h1>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/Vefijgtfat8?si=xMG8ErA9dRVnekq7" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    
</body>
</html>