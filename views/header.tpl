<body>
<header>
    <div id="headerimg">
    <img src="img/headerimg.jpg" alt="">
    </div>
    <nav>
        <ul>
            <li {if $curr_page eq 'home'}class="selected"{/if}><a href="index.php">Home</a>
            <li {if $curr_page eq 'about'}class="selected"{/if}><a href="?page=about">About</a></li>
            <li {if $curr_page eq 'contact'}class="selected"{/if}><a href="?page=contact">Contact</a></li>
            <li {if $curr_page eq 'tourdates'}class="selected"{/if}><a href="?page=tourdates">Tour dates</a></li>
        </ul>
    </nav>
    <br>
</header>
</body>
