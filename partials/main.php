<main class="py-5">
<h3 class="py-4 text-center"> Scrivi ?login=true alla fine dell'url per essere loggato e avrai gli sconti</h3>
    <div class="container">
        <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 g-4">
            <?php foreach ($products as $product) : ?>
                <div class="col">
                    <div class="card">
                        <img class="img-fluid" src="<?= $product->poster ?>" alt="">
                        <div class="card-body">
                            <small>
                                Categoria:
                                    <?= $product->category ?>
                            </small>
                            <h5>
                                <?= $product->name ?>
                            </h5>
                            <p>
                            <?= $product->description ?>
                            </p>
                            <div class="price text-end text-danger">
                                <?= $product->getPrice() ?> €
                            </div>
                            
                        </div>
                    </div>    
                </div>
            <?php endforeach ?>
        </div>
    </div>
</main>