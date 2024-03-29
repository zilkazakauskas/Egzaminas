<?php
require "./logic.php";
?>

<!DOCTYPE html>
<html lang="lt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>U1_Zilvinas_Kazakauskas</title>
    <link rel="stylesheet" href="./css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/ab8656d9ec.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo:wght@100&display=swap" rel="stylesheet">

</head>

<body>
    <div class="container">
        <header id="header">
            <!-- <div class="container"> -->
            <div class="row">
                <div class="col">
                    <p> <img src="./img/logo.png" alt="logo" id="logo"></p>
                </div>
            </div>
            <!-- </div> -->

        </header>
        <div id="main_and_footer" class="ps-3">
            <main id="main">
                <section id="section-1" class="mx-5">
                    <!-- <div class="container mx-5"> -->
                    <div class="row">
                        <div class="col">
                            <h2 class="mt-5" id="section-header">Naujausi kursai</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="card mt-5" style="width: 18rem;">
                                <img src="./img/php.jpg" class="card-img-top" alt="...">
                                <div class="card-body mx-4">
                                    <a href="#">
                                        <h5 class="card-title">PHP Pagrindai</h5>
                                    </a>
                                    <p id="author" class="card-text">Autorius</p>
                                </div>
                                <ul class="list-group list-group-flush mx-4">
                                    <li id="description" class="list-group-item">Lorem ipsum dolor sit amet,
                                        consectetur
                                        adipisicing
                                        elit.
                                        Ipsa voluptatum explicabo soluta sequi possimus. Numquam, consectetur minus,
                                        repellat ad totam labore odit id eius eaque quae odio vel, corrupti aliquid!
                                    </li>
                                </ul>
                                <div class="card-body d-flex justify-content-between mx-4">
                                    <div>
                                        <span class="pe-1">4</span>
                                        <i class="fas fa-star" style="color: #6eb92b"></i>
                                        <i class="fas fa-star" style="color: #6eb92b"></i>
                                        <i class="fas fa-star" style="color: #6eb92b"></i>
                                        <i class="fas fa-star" style="color: #6eb92b"></i>
                                        <i class="fas fa-star" style="color: rgb(194, 194, 194)"></i>
                                    </div>
                                    <div>
                                        <i class="fas fa-comment" style="color: #6eb92b"></i>
                                        <span class="ps-1">
                                            <?php echo($result1['komentarai']); ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card mt-5" style="width: 18rem;">
                                <img src="./img/css.jpg" class="card-img-top" alt="...">
                                <div class="card-body mx-4">
                                    <a href="#">
                                        <h5 class="card-title">HTML/CSS Įvadas</h5>
                                    </a>
                                    <p id="author" class="card-text">Autorius</p>
                                </div>
                                <ul class="list-group list-group-flush mx-4">
                                    <li id="description" class="list-group-item">Lorem ipsum dolor sit amet,
                                        consectetur
                                        adipisicing
                                        elit.
                                        Ipsa voluptatum explicabo soluta sequi possimus. Numquam, consectetur minus,
                                        repellat ad totam labore odit id eius eaque quae odio vel, corrupti aliquid!
                                    </li>
                                </ul>
                                <div class="card-body d-flex justify-content-between mx-4">
                                    <div> <span class="pe-1">4</span>
                                        <i class="fas fa-star" style="color: #6eb92b"></i>
                                        <i class="fas fa-star" style="color: #6eb92b"></i>
                                        <i class="fas fa-star" style="color: #6eb92b"></i>
                                        <i class="fas fa-star" style="color: #6eb92b"></i>
                                        <i class="fas fa-star" style="color: rgb(194, 194, 194)"></i>
                                    </div>
                                    <div>
                                        <i class="fas fa-comment" style="color: #6eb92b"></i>
                                        <span class="ps-1">
                                            <?php echo($result2['komentarai']); ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card mt-5" style="width: 18rem;">
                                <img src="./img/git.jpg" class="card-img-top" alt="...">
                                <div class="card-body mx-4">
                                    <a href="#">
                                        <h5 class="card-title">Pažintis Su GIT</h5>
                                    </a>
                                    <p id="author" class="card-text">Autorius</p>
                                </div>
                                <ul class="list-group list-group-flush mx-4">
                                    <li id="description" class="list-group-item">Lorem ipsum dolor sit amet,
                                        consectetur
                                        adipisicing
                                        elit.
                                        Ipsa voluptatum explicabo soluta sequi possimus. Numquam, consectetur minus,
                                        repellat ad totam labore odit id eius eaque quae odio vel, corrupti aliquid!
                                    </li>
                                </ul>
                                <div class="card-body d-flex justify-content-between mx-4">
                                    <div>
                                        <span class="pe-1">3</span>
                                        <i class="fas fa-star" style="color: #6eb92b"></i>
                                        <i class="fas fa-star" style="color: #6eb92b"></i>
                                        <i class="fas fa-star" style="color: #6eb92b"></i>
                                        <i class="fas fa-star" style="color: rgb(194, 194, 194)"></i>
                                        <i class="fas fa-star" style="color: rgb(194, 194, 194)"></i>
                                    </div>
                                    <div>
                                        <i class="fas fa-comment" style="color: #6eb92b"></i>
                                        <span class="ps-1">
                                            <?php echo($result3['komentarai']); ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card mt-5" style="width: 18rem;">
                                <img src="./img/js.jpg" class="card-img-top" alt="...">
                                <div class="card-body mx-4">
                                    <a href="#">
                                        <h5 class="card-title">JavaScript Žaliems</h5>
                                    </a>
                                    <p id="author" class="card-text">Autorius</p>
                                </div>
                                <ul class="list-group list-group-flush mx-4">
                                    <li id="description" class="list-group-item">Lorem ipsum dolor sit amet,
                                        consectetur
                                        adipisicing
                                        elit.
                                        Ipsa voluptatum explicabo soluta sequi possimus. Numquam, consectetur minus,
                                        repellat ad totam labore odit id eius eaque quae odio vel, corrupti aliquid!
                                    </li>
                                </ul>
                                <div class="card-body d-flex justify-content-between mx-4">
                                    <div>
                                        <span class="pe-1">5</span>
                                        <i class="fas fa-star" style="color: #6eb92b"></i>
                                        <i class="fas fa-star" style="color: #6eb92b"></i>
                                        <i class="fas fa-star" style="color: #6eb92b"></i>
                                        <i class="fas fa-star" style="color: #6eb92b"></i>
                                        <i class="fas fa-star" style="color: #6eb92b"></i>
                                    </div>
                                    <div>
                                        <i class="fas fa-comment" style="color: #6eb92b"></i>
                                        <span class="ps-1">
                                            <?php echo($result4['komentarai']); ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- </div> -->
                </section>
                <section id="section-2" class="mx-5">
                    <!-- <div class="container mx-5"> -->
                    <div class="row">
                        <div class="col mt-3">
                            <h2 class="mt-5" id="section-header">Sekite naujienas</h2>
                            <p id="section-2-description">Norite gauti pranešimus apie naujus kursus? Užsisakykite
                                mūsų
                                naujienlaiškį!</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <form class="mt-5">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Vardas</label>
                                    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">El. Paštas</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                                <button id="submit" type="submit">Užsisakyti</button>
                            </form>
                            <h2 class="pt-3" id="alert" style="color: green;"></h2>
                        </div>
                    </div>
                    <!-- </div> -->
                    <hr class="mt-5">
                </section>

            </main>
            <footer class="mx-5">
                <!-- <div class="container mx-5"> -->
                <div class="row">
                    <div class="col-md-12">
                        <p id="footer-text"> &copy; 2021 Žilvinas Kazakauskas</p>
                    </div>
                </div>
                <!-- </div> -->
            </footer>
        </div>
    </div>
    <script type="text/javascript" src="./js/script.js"></script>
</body>

</html>