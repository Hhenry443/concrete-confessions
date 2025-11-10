<?php

require '../php/db.php';

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $result->fetch_assoc();
}

$conn->close();

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Concrete Confessions</title>
  <link href="/css/output.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/01e87deab9.js" crossorigin="anonymous"></script>
</head>

<body>
  <div id="mobile-navbar" class="w-full h-auto bg-neutral-950">
    <div id="mobile-navbar-logo" class="w-full flex flex-col items-center">
      <h1 class="text-2xl py-2 font-bold text-neutral-300">Concrete Confessions</h1>
    </div>
    <div id="mobile-navbar-menu" class="w-full flex items-center justify-center bg-neutral-900">
      <form class="p-2 w-8/10">
        <input type="text" class="bg-neutral-800 text-neutral-300  w-full h-10 rounded-lg px-4 border border-[1px] focus:border-1 border-neutral-700" placeholder="Search Confessions..." />
      </form>
      <div id="mobile-dropdown-button" class="p-2  rounded-lg hover:bg-neutral-800">
        <i class="fa-solid fa-user text-neutral-300"></i>
        <i class="fa-solid fa-chevron-down text-neutral-300"></i>
      </div>
    </div>
  </div>

  <div id="mobile-content" class="bg-red-300 w-full h-screen">
    <div id="mobile-post-form" class="bg-blue-300 w-full h-auto flex items-center justify-center py-4">
      <div id="mobile-post-button-container" class="w-9/10 h-12 bg-green-300">
        <a href="/post">wda</a>
      </div>
    </div>
  </div>
</body>

</html>