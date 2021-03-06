<?php require("../includes/header.php"); ?>

<main>

    <div class="main-body">
        <section class="col-left">
            <div class="user-info">
                <p>Role: <?= $_SESSION['role_name'] ?></p>
            </div>
            <hr>
            <div class="main-menu">
                <div class="menu-list">
                    <h2><a href="?page=course-home">Courses</a></h2>
                </div>
                <div class="menu-list">
                    <h2><a href="?page=group-home">Groups</a></h2>
                </div>
            </div>
        </section>

        <section class="col-right">

            <div class="content-body">
                <?php

                if (isset($_GET['page'])) {
                    $page = $_GET['page'];
                    if (file_exists("../includes/" . $page . ".php")) {
                        include("../includes/" . $page . ".php");
                    }
                    if (file_exists("../CRUD/" . $page . ".php")) {
                        include("../CRUD/" . $page . ".php");
                    }
                    if (file_exists("../course/" . $page . ".php")) {
                        include("../course/" . $page . ".php");
                    }
                    if (file_exists("../group/" . $page . ".php")) {
                        include("../group/" . $page . ".php");
                    }
                } else {
                    include("../includes/home.php");
                }
                ?>

            </div>
        </section>
    </div>

</main>
<?php require("../includes/footer.php"); ?>