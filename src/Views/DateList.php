<html>
    <?php
        require_once("layout.php");
    ?>
    <body>
        <?php
        require_once("components/header.php");
        ?>
        <main class="container">
            <h1>This works mf</h1>

            <?php
            foreach($data["dates"] as $date) {
                echo <<<TAG
                    <article class="col-sm d-flex align-space-around justify-content-center">
                        <div class="card text-center" style="width: 15rem">
                            <h3 class="card-title">{$date -> get_date_people()}</h3>
                            <div class="card-body">
                                <h5 class="card-title">{$date -> get_type()}</h5>
                                <h6 class="card-text">{$date -> get_activity()}</h6>
                                <p class="card-text">{$date ->get_date_time()}</p>
                                <p class="card-text">{$date->get_id()}</p>
                            </div>
                        </div>
                    </article>
                    TAG;
            }
            ?>
        </main>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>