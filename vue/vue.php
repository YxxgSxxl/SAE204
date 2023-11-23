<!-- Vue: Page de selection des SAE -->

<!-- Initialisation de la page HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/sae.css">
    <title>SAE</title>
</head>

<body>
    <!-- Background Video -->
    <div class="back-vid">
        <video autoplay loop muted plays-inline class="back-vid">
            <source src="../img/video/back-vid-3.mp4" type="video/mp4">
        </video>
    </div>

    <div class="page_show"> 

        <div class="pageshow-wrapper">
            <h1>
                <div class="decode-text">
                    <div class="text">S</div>
                    <div class="text">A</div>
                    <div class="text">E</div>
                    <div class="text">'</div>
                    <div class="text">s</div>
                    <div class="space"></div>

                    <div class="text">L</div>
                    <div class="text">I</div>
                    <div class="text">S</div>
                    <div class="text">T</div>
                </div>
            </h1>

            <div class="filterWrapper">
                <div class="zoneFiltresSem">
                    <!-- Semester Filters -->
                    <i>Semestre</i>
                    <input type="checkbox" name="s1" value="s1" id="s1" <?php ?> checked>
                    <label for="s1">Semestre 1</label>

                    <input type="checkbox" name="s2" value="s2" id="s2" <?php ?> checked>
                    <label for="s2">Semestre 2</label>

                    <input type="checkbox" name="s3" value="s3" id="s3" <?php ?> checked>
                    <label for="s3">Semestre 3</label>

                    <input type="checkbox" name="s4" value="s4" id="s4" <?php ?> checked>
                    <label for="s4">Semestre 4</label>
                </div>

                <div class="zoneFiltresComp">
                    <!-- Competences Filters -->
                    <i>Compétences</i>
                    <input type="checkbox" name="Comprendre" value="comprendre" id="comprendre" <?php ?> checked>
                    <label for="comprendre">Comprendre</label>

                    <input type="checkbox" name="Concevoir" value="concevoir" id="concevoir" <?php ?> checked>
                    <label for="concevoir">Concevoir</label>

                    <input type="checkbox" name="Exprimer" value="exprimer" id="exprimer" <?php ?> checked>
                    <label for="exprimer">Exprimer</label>

                    <input type="checkbox" name="Developper" value="developper" id="developper" <?php ?> checked>
                    <label for="developper">Developper</label>

                    <input type="checkbox" name="Entreprendre" value="entreprendre" id="entreprendre" <?php ?> checked>
                    <label for="entreprendre">Entreprendre</label>
                </div>

                <main>
                    <!-- Carousel Slide LEFT btn -->
                    <div class="carousel-slideL">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none"
                            stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10" />
                            <path d="M12 8l-4 4 4 4M16 12H9" />
                        </svg>
                    </div>
                    <div class="carousel">

                        <div class="carousel-elements">
                            <a href="../controleur/sae.php?sae=101"><div class="sae-box s1 Comprendre SAE SAE101">SAE1.01</div></a>
                            <a href="../controleur/sae.php?sae=102"><div class="sae-box s1 Concevoir SAE SAE102">SAE1.02</div></a>
                            <a href="../controleur/sae.php?sae=103"><div class="sae-box s1 Exprimer SAE SAE103">SAE1.03</div></a>
                            <a href="../controleur/sae.php?sae=104"><div class="sae-box s1 Exprimer SAE SAE104">SAE1.04</div></a>
                            <a href="../controleur/sae.php?sae=105"><div class="sae-box s1 Developper SAE SAE105">SAE1.05</div></a>
                            <a href="../controleur/sae.php?sae=106"><div class="sae-box s1 Entreprendre SAE SAE106">SAE1.06</div></a>
                            <a href="../controleur/sae.php?sae=201"><div class="sae-box s2 Comprendre SAE SAE201">SAE2.01</div></a>
                            <a href="../controleur/sae.php?sae=202"><div class="sae-box s2 Concevoir Exprimer Developper Entreprendre SAE SAE202">SAE2.02</div></a>
                            <a href="../controleur/sae.php?sae=203"><div class="sae-box s2 Developper SAE SAE203">SAE2.03</div></a>
                            <a href="../controleur/sae.php?sae=204"><div class="sae-box s2 Entreprendre SAE SAE204">SAE2.04</div></a>
                        </div>
                        
                    </div>
                    <!-- Carousel Slide RIGHT btn -->
                    <div class="carousel-slideR">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none"
                            stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10" />
                            <path d="M12 8l4 4-4 4M8 12h7" />
                        </svg>
                    </div>
                    <!-- Carousel add SAE btn -->
                    <div class="carousel-addsae" id="addSAE">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none"
                            stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <line x1="12" y1="8" x2="12" y2="16"></line>
                            <line x1="8" y1="12" x2="16" y2="12"></line>
                        </svg>
                    </div>
                    <!-- Modal Popup for SAE adding -->
                    <div id="myModal" class="modal">

                        <!-- Modal content -->
                        <div class="modal-content">
                            <span class="close">&times;</span>
                            <p>Add a SAE exemple modal</p><br>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum veniam deleniti at aperiam
                                esse nesciunt ab qui error quos consectetur laudantium facere, voluptatum atque odio ut
                                nemo beatae sed sunt. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum
                                veniam deleniti at aperiam
                                esse nesciunt ab qui error quos consectetur laudantium facere, voluptatum atque odio ut
                                nemo beatae sed sunt. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum
                                veniam deleniti at aperiam
                                esse nesciunt ab qui error quos consectetur laudantium facere, voluptatum atque odio ut
                                nemo beatae sed sunt.</p>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>

    <noscript>Please, activate javascript to make the website work perfectly.</noscript>
    <script src="../js/sae.js"></script>
</body>

</html>