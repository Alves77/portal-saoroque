<?php include 'header.php'; ?>

    <!--Carrossel-->
    <div id="carrossel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#carrossel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carrossel" data-bs-slide-to="1"></li>
            <li data-bs-target="#carrossel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/imgcarrossel.png" class="d-block w-100" alt="Imagem 1">
            </div>
            <div class="carousel-item">
                <img src="img/imgcarrossel.png" class="d-block w-100" alt="Imagem 2">
            </div>
            <div class="carousel-item">
                <img src="img/imgcarrossel.png" class="d-block w-100" alt="Imagem 3">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carrossel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carrossel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Próximo</span>
        </a>
    </div>
    <!--Fim do carrossel-->

    <div class="container-sm">
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquam nesciunt dignissimos enim, animi ab
            odit sunt officia sit iusto veniam suscipit architecto praesentium, tempora, quasi assumenda numquam
            dicta eum nisi.
            Architecto molestiae voluptatem asperiores culpa quia magnam saepe sapiente repellendus esse
            necessitatibus incidunt commodi, magni soluta aspernatur ut id quis corporis eius. Suscipit
            reprehenderit at veniam maiores facilis unde impedit.
            Laudantium ipsa beatae cum modi architecto quas explicabo recusandae, quisquam quod praesentium fuga
            deleniti et, quis dolorem doloribus? Itaque est vel soluta voluptatibus quos modi quas in minima impedit
            sunt?
        </p>
    </div>

    <h2 class="mt-3 text-center">Lorem ipsum</h2>

    <!--Primeira galeria de imagens que se transforma em carrossel quando a página está em modo mobile-->
    <div class="container carrossel-custom text-center">
        <div class="row">
            <div class="col-lg-4 d-none d-lg-block">
                <img src="img/imgfooter.png" class="img-fluid">
                <div class="mt-3 text-center">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, a excepturi. Perferendis,
                        doloremque sit! Voluptates non dolores iste itaque suscipit blanditiis corporis perspiciatis
                        aspernatur quidem, laudantium illum architecto, ipsum dolor.</p>
                </div>
            </div>
            <div class="col-lg-4 d-none d-lg-block">
                <img src="img/imgfooter.png" class="img-fluid">
                <div class="mt-3 text-center">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, a excepturi. Perferendis,
                        doloremque sit! Voluptates non dolores iste itaque suscipit blanditiis corporis perspiciatis
                        aspernatur quidem, laudantium illum architecto, ipsum dolor.</p>
                </div>
            </div>
            <div class="col-lg-4 d-none d-lg-block">
                <img src="img/imgfooter.png" class="img-fluid">
                <div class="mt-3 text-center">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, a excepturi. Perferendis,
                        doloremque sit! Voluptates non dolores iste itaque suscipit blanditiis corporis perspiciatis
                        aspernatur quidem, laudantium illum architecto, ipsum dolor.</p>
                </div>
            </div>
        </div>
        <div class="d-lg-none">
            <div id="carrossel2" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/imgfooter.png" class="d-block w-100">
                        <div class="mt-3 text-center">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, a excepturi. Perferendis,
                                doloremque sit! Voluptates non dolores iste itaque suscipit blanditiis corporis
                                perspiciatis aspernatur quidem, laudantium illum architecto, ipsum dolor.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/imgfooter.png" class="d-block w-100">
                        <div class="mt-3 text-center">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, a excepturi. Perferendis,
                                doloremque sit! Voluptates non dolores iste itaque suscipit blanditiis corporis
                                perspiciatis aspernatur quidem, laudantium illum architecto, ipsum dolor.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/imgfooter.png" class="d-block w-100">
                        <div class="mt-3 text-center">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, a excepturi. Perferendis,
                                doloremque sit! Voluptates non dolores iste itaque suscipit blanditiis corporis
                                perspiciatis aspernatur quidem, laudantium illum architecto, ipsum dolor.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carrossel2" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carrossel2" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Próximo</span>
                </button>
            </div>
        </div>
    </div>
    <!--Fim da primeira galeria-->

    <h2 class="mt-3 text-center">Lorem ipsum</h2>

    <!--Segunda galeria de imagens que se transforma em carrossel quando a página está em modo mobile-->
    <div class="container carrossel-custom text-center">
        <div class="row">
            <div class="col-lg-4 d-none d-lg-block">
                <img src="img/imgfooter.png" class="img-fluid">
                <div class="mt-3 text-center">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, a excepturi. Perferendis,
                        doloremque sit! Voluptates non dolores iste itaque suscipit blanditiis corporis perspiciatis
                        aspernatur quidem, laudantium illum architecto, ipsum dolor.</p>
                </div>
            </div>
            <div class="col-lg-4 d-none d-lg-block">
                <img src="img/imgfooter.png" class="img-fluid">
                <div class="mt-3 text-center">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, a excepturi. Perferendis,
                        doloremque sit! Voluptates non dolores iste itaque suscipit blanditiis corporis perspiciatis
                        aspernatur quidem, laudantium illum architecto, ipsum dolor.</p>
                </div>
            </div>
            <div class="col-lg-4 d-none d-lg-block">
                <img src="img/imgfooter.png" class="img-fluid">
                <div class="mt-3 text-center">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, a excepturi. Perferendis,
                        doloremque sit! Voluptates non dolores iste itaque suscipit blanditiis corporis perspiciatis
                        aspernatur quidem, laudantium illum architecto, ipsum dolor.</p>
                </div>
            </div>
        </div>

        <div class="d-lg-none">
            <div id="carrossel3" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/imgfooter.png" class="d-block w-100">
                        <div class="mt-3 text-center">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, a excepturi. Perferendis,
                                doloremque sit! Voluptates non dolores iste itaque suscipit blanditiis corporis
                                perspiciatis aspernatur quidem, laudantium illum architecto, ipsum dolor.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/imgfooter.png" class="d-block w-100">
                        <div class="mt-3 text-center">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, a excepturi. Perferendis,
                                doloremque sit! Voluptates non dolores iste itaque suscipit blanditiis corporis
                                perspiciatis aspernatur quidem, laudantium illum architecto, ipsum dolor.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/imgfooter.png" class="d-block w-100">
                        <div class="mt-3 text-center">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, a excepturi. Perferendis,
                                doloremque sit! Voluptates non dolores iste itaque suscipit blanditiis corporis
                                perspiciatis aspernatur quidem, laudantium illum architecto, ipsum dolor.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carrossel3" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carrossel3" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Próximo</span>
                </button>
            </div>
        </div>
    </div>
    <!--Fim da segunda galeria-->

    <h2 class="mt-3 text-center">Lorem ipsum</h2>

    <!--Terceira galeria de imagens que se transforma em carrossel quando a página está em modo mobile-->
    <div class="container carrossel-custom text-center">
        <div class="row">
            <div class="col-lg-4 d-none d-lg-block">
                <img src="img/imgfooter.png" class="img-fluid">
                <div class="mt-3 text-center">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, a excepturi. Perferendis,
                        doloremque sit! Voluptates non dolores iste itaque suscipit blanditiis corporis perspiciatis
                        aspernatur quidem, laudantium illum architecto, ipsum dolor.</p>
                </div>
            </div>
            <div class="col-lg-4 d-none d-lg-block">
                <img src="img/imgfooter.png" class="img-fluid">
                <div class="mt-3 text-center">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, a excepturi. Perferendis,
                        doloremque sit! Voluptates non dolores iste itaque suscipit blanditiis corporis perspiciatis
                        aspernatur quidem, laudantium illum architecto, ipsum dolor.</p>
                </div>
            </div>
            <div class="col-lg-4 d-none d-lg-block">
                <img src="img/imgfooter.png" class="img-fluid">
                <div class="mt-3 text-center">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, a excepturi. Perferendis,
                        doloremque sit! Voluptates non dolores iste itaque suscipit blanditiis corporis perspiciatis
                        aspernatur quidem, laudantium illum architecto, ipsum dolor.</p>
                </div>
            </div>
        </div>

        <div class="d-lg-none">
            <div id="carrossel4" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/imgfooter.png" class="d-block w-100">
                        <div class="mt-3 text-center">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, a excepturi. Perferendis,
                                doloremque sit! Voluptates non dolores iste itaque suscipit blanditiis corporis
                                perspiciatis aspernatur quidem, laudantium illum architecto, ipsum dolor.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/imgfooter.png" class="d-block w-100">
                        <div class="mt-3 text-center">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, a excepturi. Perferendis,
                                doloremque sit! Voluptates non dolores iste itaque suscipit blanditiis corporis
                                perspiciatis aspernatur quidem, laudantium illum architecto, ipsum dolor.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/imgfooter.png" class="d-block w-100">
                        <div class="mt-3 text-center">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, a excepturi. Perferendis,
                                doloremque sit! Voluptates non dolores iste itaque suscipit blanditiis corporis
                                perspiciatis aspernatur quidem, laudantium illum architecto, ipsum dolor.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carrossel4" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carrossel4" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Próximo</span>
                </button>
            </div>
        </div>
    </div>
    <!--Fim da terceira galeria-->


    <?php include 'footer.php'; ?>
   
</html>