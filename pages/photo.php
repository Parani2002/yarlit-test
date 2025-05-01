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
.container{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
   gap: 30px;
    align-content: space-around;
}
    </style>

</head>
<body>
<ul>
<li><a href="../index.php">Home page</a></li>
  <li><a href="about.php">About page</a></li>
  <li><a href="photo.php" class="active">Photo page</a></li>
  <li><a href="video.php">Video page</a></li>
  <li><a href="contact.php">Contact page</a></li>
</ul>
    <h1>Photo Page</h1>
    <div class="container">
        <img src="../images/sample.jpg" alt="" width="400" height="400">
        <img src="../images/sample.jpg" alt="" width="400" height="400">
        <img src="../images/sample.jpg" alt="" width="400" height="400">
        <img src="../images/sample.jpg" alt="" width="400" height="400">
        <img src="../images/sample.jpg" alt="" width="400" height="400">
        <img src="../images/sample.jpg" alt="" width="400" height="400">
        

    </div>
</body>
</html>