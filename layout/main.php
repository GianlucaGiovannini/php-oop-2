<main class="py-5">
    <div class="container">
        <div class="row row-cols-2 row-cols-sm-3 row-cols-md-3 row-cols-lg-5 g-4">
            <?php foreach ($products as $product) : ?>
                <div class="col">
                    <div class="card">
                        <img class="img-fluid" src="<?= $product->poster ?>" alt="">
                        <div class="card-body">
                            <small>
                                Categoria:
                                    <?= $product->category ?>
                            </small>
                            <h6 class="text-capitalize mt-1">
                                <?= $product->name ?>
                            </h6>
                            <p>
                            <?= $product->description ?>
                            </p>
                            <small>
                                Fornitore: 
                                <?= $product->getSupplierName() ?>
                            </small>
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