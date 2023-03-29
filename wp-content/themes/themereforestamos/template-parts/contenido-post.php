
<main class="container espacio-general">
    <div class="row justify-content-center align-items-center">
        <div class="col">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-transparent border-0 p-4">
                    <div class="p-3">
                        <h1 class="text-primary text-center display-4"> <?php echo the_title();?> </h1>
                    </div>

                    <div class="fw-bold">
                        <?php  get_template_part('template-parts/meta', 'posts'); ?>
                        <div class="sharethis-inline-share-buttons"></div>
                        <p class="mt-3">Comparte esta nota en tus Redes Sociales</p>

                        <hr class="p-2 text-primary">
                    </div>
                </div>
                <div class="card-body px-3 px-md-5 fs-5">
                    <div class="text-justify">
                        <?php echo the_content(); ?>    
                    </div>
                </div>

                <div class="card-footer bg-transparent border-0 p-4">
                    <div class="fw-bold">
                        <hr class="p-2 text-primary">
                        <div class="sharethis-inline-share-buttons"></div>
                        <p class="mt-3">Comparte esta nota en tus Redes Sociales</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>

