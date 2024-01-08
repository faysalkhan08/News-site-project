<?php

// session_start();

// session_write_close();

$hostname = "http://localhost/news-site";

$conn = new mysqli("localhost", "root", "", "news-site") or die("connection failed : " . mysqli_connect_error());
