<?php include "db.php"?>
<?php
$query = "SELECT * from category";
$select_all_categories = mysqli_query($connection, $query);
while ($row = mysqli_fetch_assoc($select_all_categories)) {
    $main_category = $row['main_category'];
    $sub_category = $row['sub_category'];
}

?>

<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Calvin</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/styles.css">

    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
    <script defer src="js/fontawesome/all.min.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">

</head>

<body id="top">


    <!-- preloader
    ================================================== -->
    <div id="preloader">
    	<div id="loader"></div>
    </div>


    <!-- header
    ================================================== -->
    <header class="s-header">

        <div class="s-header__logo">
            <a class="logo" href="index.html">
                <img src="images/icon.jpg" alt="Homepage">
            </a>
        </div>

        <div class="row s-header__navigation">

            <nav class="s-header__nav-wrap">

                <h3 class="s-header__nav-heading h6">Navigate to</h3>

                <ul class="s-header__nav">
                    <li class="current"><a href="index.php" title="">Home</a></li>
                    <li class="has-children">
                        <a href="#0" title="">Categories</a>
                        <ul class="sub-menu">
<?php
$query = "SELECT * from category";
$select_all_categories = mysqli_query($connection, $query);
while ($row = mysqli_fetch_assoc($select_all_categories)) {
    $main_category = $row['main_category'];
    $sub_category = $row['sub_category'];
    echo "<li><a href='category.html'>$main_category</a></li>";
    echo "<li><a href='category.html'>$sub_category</a></li>";
}?>
                            <li><a href="category.html">Photography</a></li>
                            <li><a href="category.html">Vacation</a></li>
                            <li><a href="category.html">Work</a></li>
                            <li><a href="category.html">Health</a></li>
                            <li><a href="category.html">Family</a></li>
                            <li><a href="category.html">Relationship</a></li>

                        </ul>

                    </li>
                    <li class="has-children">
                        <a href="#0" title="">Blog</a>
                        <ul class="sub-menu">
                            <li><a href="single-video.html">Video Post</a></li>
                            <li><a href="single-audio.html">Audio Post</a></li>
                            <li><a href="single-standard.html">Standard Post</a></li>
                        </ul>
                    </li>
                    <li><a href="styles.html" title="">Styles</a></li>
                    <li><a href="about.html" title="">About</a></li>
                    <li><a href="contact.html" title="">Contact</a></li>
                </ul> <!-- end s-header__nav -->
                <a href="#0" title="Close Menu" class="s-header__overlay-close close-mobile-menu">Close</a>

</nav> <!-- end s-header__nav-wrap -->

</div> <!-- end s-header__navigation -->

<a class="s-header__toggle-menu" href="#0" title="Menu"><span>Menu</span></a>

<div class="s-header__search">

<div class="s-header__search-inner">
    <div class="row wide">

        <form role="search" method="get" class="s-header__search-form" action="#">
            <label>
                <span class="h-screen-reader-text">Search for:</span>
                <input type="search" class="s-header__search-field" placeholder="Search for..." value="" name="s" title="Search for:" autocomplete="off">
            </label>
            <input type="submit" class="s-header__search-submit" value="Search">
        </form>

        <a href="#0" title="Close Search" class="s-header__overlay-close">Close</a>

    </div> <!-- end row -->
</div> <!-- s-header__search-inner -->

</div> <!-- end s-header__search wrap -->

<a class="s-header__search-trigger" href="#">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.982 17.983"><path fill="#010101" d="M12.622 13.611l-.209.163A7.607 7.607 0 017.7 15.399C3.454 15.399 0 11.945 0 7.7 0 3.454 3.454 0 7.7 0c4.245 0 7.699 3.454 7.699 7.7a7.613 7.613 0 01-1.626 4.714l-.163.209 4.372 4.371-.989.989-4.371-4.372zM7.7 1.399a6.307 6.307 0 00-6.3 6.3A6.307 6.307 0 007.7 14c3.473 0 6.3-2.827 6.3-6.3a6.308 6.308 0 00-6.3-6.301z"/></svg>
</a>

</header> <!-- end s-header -->

