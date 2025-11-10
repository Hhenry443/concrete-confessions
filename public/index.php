<?php

require '../php/db.php';

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $result->fetch_assoc();
}

$conn->close();

// Dummy data for the example confession
$published_date = date("d-m-y");
$like_count = 1;
$confession_text = "This is a confession, a vey long one! This is a confession, a vey long one! This is a confession, a vey long one! This is a confession, a vey long one! This is a confession, a vey long one! This is a confession, a vey long one!";
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
  <div id="mobile-navbar" class="w-full h-auto bg-neutral-950 md:hidden">
    <div id="mobile-navbar-logo" class="w-full flex flex-col items-center">
      <h1 class="text-2xl py-2 font-bold text-neutral-300">Concrete Confessions</h1>
    </div>
    <div id="mobile-navbar-menu" class="w-full flex items-center justify-center bg-neutral-900">
      <form class="p-2 w-8/10">
        <input type="text" class="bg-neutral-800 text-neutral-300 w-full h-10 rounded-lg px-4 border border-[1px] focus:border-1 border-neutral-700" placeholder="Search Confessions..." />
      </form>
      <div id="mobile-dropdown-button" class="p-2  rounded-sm hover:bg-neutral-800">
        <i class="fa-solid fa-user text-neutral-300"></i>
        <i class="fa-solid fa-chevron-down text-neutral-300"></i>
      </div>
    </div>
  </div>

  <div id="mobile-content" class="bg-neutral-950 w-full h-screen md:hidden">
    <div id="mobile-post-form" class="w-full h-auto flex items-center justify-center pt-4">
      <div id="mobile-post-button-container" class="w-9/10 h-14 bg-neutral-900 flex items-center justify-evenly rounded-sm border border-[1px] border-neutral-700">
        <a href="/post.php" class="bg-neutral-800 text-neutral-500 border border-[1px] focus:border-1 border-neutral-700 h-8/10 text-sm flex items-center w-9/10 p-2 rounded-lg">Post a Confession</a>
        <a href="/post.php" class="w-10 rounded-sm flex items-center justify-center hover:bg-neutral-800 h-8/10"><i class="fa-solid fa-paper-plane text-lg text-neutral-300"></i></a>
      </div>
    </div>

    <div id="mobile-filter-menu" class="w-full h-auto flex items-center justify-center pt-4">
      <div id="mobile-post-button-container" class="w-9/10 h-14 bg-neutral-900 flex items-center justify-evenly rounded-sm border border-[1px] border-neutral-700">
        <div id="mobile-best-filter" class="flex items-center hover:bg-neutral-800 hover:cursor-pointer p-2 rounded-sm">
          <i class="fa-solid fa-star mr-2 text-neutral-300"></i>
          <p class="text-neutral-300">Best</p>
        </div>

        <div id="mobile-trending-filter" class="flex items-center hover:bg-neutral-800 hover:cursor-pointer p-2 rounded-sm">
          <i class="fa-solid fa-arrow-trend-up mr-2 text-neutral-300"></i>
          <p class="text-neutral-300">Trending</p>
        </div>

        <div id="mobile-new-filter" class="flex items-center hover:bg-neutral-800 hover:cursor-pointer p-2 rounded-sm">
          <i class="fa-solid fa-hourglass mr-2 text-neutral-300"></i>
          <p class="text-neutral-300">New</p>
        </div>
      </div>
    </div>

    <div id="mobile-confessions-container" class="w-full h-auto flex items-center justify-center pt-4">

      <!-- Example Confession -->
      <div id="mobile-confession-1" class="w-9/10 h-auto py-2 bg-neutral-900 flex flex-col items-center justify-left rounded-sm border border-[1px] border-neutral-700">
        <div id="mobile-confession-date-likes" class="w-full flex">
          <div class="w-1/2 flex justify-start">
            <p class="text-sm text-neutral-500 pl-4">Published: <?= $published_date; ?></p>
          </div>

          <div class="w-1/2 flex justify-end">
            <p class="text-sm text-neutral-500 pr-4"><?= $like_count; ?> likes</p>
          </div>

        </div>

        <div id="mobile-confession-text" class="w-full ">
          <p class="p-4 text-xl text-neutral-300"><?= $confession_text; ?></p>
        </div>

        <div id="mobile-confession-actions" class="w-full flex">
          <div class="flex justify-center items-center ml-4 hover:bg-neutral-800 p-2 rounded-lg">
            <i class="fa-solid fa-thumbs-up text-md text-neutral-500"></i>
            <p class="text-neutral-500 ml-1">Like</p>
          </div>

          <div class="flex justify-center items-center ml-4 hover:bg-neutral-800 p-2 rounded-lg">
            <i class="fa-solid fa-comment text-md text-neutral-500"></i>
            <p class="text-neutral-500 ml-1">Like</p>
          </div>

          <div class="flex justify-center items-center ml-4 hover:bg-neutral-800 p-2 rounded-lg">
            <i class="fa-solid fa-flag text-md text-neutral-500"></i>
            <p class="text-neutral-500 ml-1">Report</p>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div id="navbar" class="w-full flex items-center justify-center bg-neutral-900">
    <div class="w-3/10 flex justify-start">
      <h1 class="text-2xl py-2 px-4 font-bold text-neutral-300">Concrete Confessions</h1>
    </div>

    <form class="p-2 w-5/10 flex justify-center">
      <input type="text" class="bg-neutral-800 text-neutral-300 w-9/10 h-10 rounded-lg px-4 border border-[1px] focus:border-1 border-neutral-700" placeholder="Search Confessions..." />
    </form>

    <div id="navbar-actions" class="w-2/10 flex justify-end items-center space-x-1 pr-4">
      <div class="hover:bg-neutral-800 p-2 rounded-sm">
        <i class="fa-solid fa-plus text-neutral-300"></i>
      </div>

      <div class="hover:bg-neutral-800 p-2 rounded-sm">
        <i class="fa-solid fa-user text-neutral-300"></i>
        <i class="fa-solid fa-chevron-down text-neutral-300"></i>
      </div>
    </div>
  </div>

  <div id="content" class="w-auto h-screen bg-red-300 flex justify-center">
    <div id="confessions-container" class="w-1/3 justify-end">
      <div id="post-form" class="w-full h-auto flex items-center justify-center pt-4">
        <div id="post-button-container" class="w-9/10 h-14 bg-neutral-900 flex items-center justify-evenly rounded-sm border border-[1px] border-neutral-700">
          <a href="/post.php" class="bg-neutral-800 text-neutral-500 border border-[1px] focus:border-1 border-neutral-700 h-8/10 text-sm flex items-center w-9/10 p-2 rounded-lg">Post a Confession</a>
          <a href="/post.php" class="w-10 rounded-sm flex items-center justify-center hover:bg-neutral-800 h-8/10"><i class="fa-solid fa-paper-plane text-lg text-neutral-300"></i></a>
        </div>
      </div>
    </div>

    <div id="info-boxes" class="w-1/3 pt-4 space-y-4 flex flex-col items-center">
      <div id="info-container" class="p-2 w-1/2 h-auto flex flex-col space-y-2 justify-start bg-neutral-900 rounded-sm border border-[1px] border-neutral-700">
        <p class="text-neutral-300 italic">Confessions are good for you UEA.</p>
        <p class="text-neutral-400">We all have skeletons in our closets, so confess your sins for your peers to see.</p>
        <p class="text-neutral-400">All posts are anonymous, and untraceable. We (usually) don't judge</p>
      </div>
    </div>
  </div>
</body>

</html>