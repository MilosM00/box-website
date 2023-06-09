<!-- START NAVBAR -->

<nav class="nav">
    <a href="index.php#" class="nav-image"><img src="images/box-logo.jpg" alt="Box Website" /></a>
    <ul>
        <li><a href="index.php#">Home</a></li>
        <li><a href="index.php#about">About</a></li>
        <li><a href="index.php#instructors">Instructors</a></li>
        <li><a href="index.php#pricelist">Pricelist</a></li>
        <li><a href="index.php#gallery">Gallery</a></li>
        <li><a href="index.php#contact">Contact</a></li>
        <li><a href="index.php#testimonials">Testimonials</a></li>
    </ul>

    <i class="fa fa-bars" id="hamburger-button"></i>
</nav>

<ul class="hamburger-menu">
    <li class="hamburger-li"><a href="index.php#">Home</a></li>
    <li class="hamburger-li"><a href="index.php#about">About</a></li>
    <li class="hamburger-li"><a href="index.php#instructors">Instructors</a></li>
    <li class="hamburger-li"><a href="index.php#pricelist">Pricelist</a></li>
    <li class="hamburger-li"><a href="index.php#gallery">Gallery</a></li>
    <li class="hamburger-li"><a href="index.php#contact">Contact</a></li>
    <li class="hamburger-li"><a href="index.php#testimonials">Testimonials</a></li>
</ul>

<style>
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Raleway', sans-serif;
}

.nav{
    position: sticky;
    top: 0;
    padding-top: 10px;
    padding-bottom: 10px;
    box-shadow: 0px 0px 5px 5px rgba(0,0,0, 0.1);
    background-color: #fff;
    color: #000;
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    z-index: 100;
}

.nav > a > img{
    width: 50px;
    height: 50px;
}

.nav > ul{
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 10px;
    list-style: none;
}

.nav > ul > li > a{
    text-decoration: none;
    color: #000;
    font-weight: 600;
}

#hamburger-button{
    font-size: 20px;
    display: none;
}

.hamburger-menu{
    position: fixed;
    top: 75px;
    right: 0;
    box-shadow: 0px 0px 5px 5px rgba(0,0,0, 0.1);
    background-color: #fff;
    width: 200px;
    height: 200px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    gap: 5px;
    font-weight: 600;
    border-radius: 10px;
    list-style: none;
    transition: all 0.5s;
    opacity: 0;
    z-index: 100;
}

.hamburger-menu > li > a{
    color: #000;
    text-decoration: none;
}

@media (max-width: 750px) {
    #hamburger-button{
        display: block;
    }

    .nav > ul{
        display: none;
    }

    .nav{
        justify-content: space-between;
        padding-left: 20px;
        padding-right: 20px;
    }
}
</style>

<!-- END NAVBAR -->

<?php // THIS IS PHP ?>