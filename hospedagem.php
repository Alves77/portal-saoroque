<?php include 'header.php'; ?>

    <div class="container text-center">
        <img src="img/imghistoria2.png" class="w-70 sm-w-100 md-w-80 p-2">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 text-center">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque totam in odit qui blanditiis
                    ullam optio soluta non. Ut laborum veniam delectus dicta itaque debitis commodi autem iste, quo
                    neque?
                    Deserunt rem iusto omnis obcaecati quam autem asperiores! Sed culpa explicabo veritatis iusto
                    voluptatibus sapiente eveniet voluptas voluptatem velit magnam molestias eos, laudantium, quaerat
                    tempore ullam exercitationem necessitatibus quos magni?
                    Laboriosam, molestiae repellendus. Illum ipsa quisquam aliquam tenetur molestiae placeat, amet enim
                    numquam debitis corrupti iusto autem distinctio rem asperiores minima ducimus modi. Iusto expedita
                    odio consectetur assumenda totam sed!</p>
            </div>
        </div>
    </div>


    <hr>

    <h2 class="mt-3 text-center">Lorem Ipsum</h2>

    <!--Galeria de imagens que se transforma em carrossel quando a página está em modo mobile-->
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
            <div id="carrossel" class="carousel slide" data-bs-ride="carousel">
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
                <button class="carousel-control-prev" type="button" data-bs-target="#carrossel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carrossel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Próximo</span>
                </button>
            </div>
        </div>
    </div>
    <!--Fim da primeira galeria-->







    <h2 class="mt-3 text-center">Lorem ipsum</h2>

    <div class="container">
        <div class="row justify-content-center p-3">
            <div class="col-md-3 box-not-lg">
                <div class="box bg-dark text-white text-center fs-5">
                    <h4><a href="gastronomia.html">ONDE COMER?</a></h4>
                </div>
            </div>
            <div class="col-md-3 box-not-lg">
                <div class="box bg-dark text-white text-center fs-5">
                    <h4><a href="hospedagem.html">PONTOS TURÍSTICOS</a></h4>
                </div>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>