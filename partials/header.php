<header>
    <div class="container1">
        <h1>Aikya</h1>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#feedback">Feedback</a></li>
                <?php
                session_start();
                if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
                ?>
                    <li class="dropdown">
                        <a href="#" class="dropbtn">Authentication</a>
                        <div class="dropdown-content">
                            <a href="login.php">Sign In</a>
                            <a href="register.php">Sign Up</a>
                        </div>
                    </li>
                <?php

                } else {
                    echo "<li>Welcome, " . $_SESSION["username"] . "</li>";
                    ?>
                    <li><a href="server.php?logout=1">Logout</a></li>

                <?php

                }

                ?>
            </ul>
        </nav>
    </div>
</header>
