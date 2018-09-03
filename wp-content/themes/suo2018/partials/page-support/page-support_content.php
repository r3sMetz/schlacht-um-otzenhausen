<main class="container mb-3">
    <div class="row">
        <section class="col-lg-7">
            <h1 class="h2">Support</h1>
            <?php the_content(); ?>
        </section>
    </div>

    <!-- The Form -->
    <form action="#" id="cwos_form">
        <div class="row">
            <div class="col-lg-7 col-xl-5">
                <label for="name"></label><br>
                <input type="text" name="name" id="name" class="form-control" placeholder="Name" required>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7 col-xl-5">
                <label for="straße"></label><br>
                <input type="text" name="street" id="straße" class="form-control" placeholder="Straße" required>
            </div>
        </div>
        <div class="row">
            <div class="col-4 col-lg-3 col-xl-2">
                <label for="plz"></label><br>
                <input type="text" name="zip" id="plz" class="form-control" placeholder="PLZ" required>
            </div>
            <div class="col-8 col-lg-4 col-xl-3">
                <label for="stadt"></label><br>
                <input type="text" name="city" id="stadt" class="form-control" placeholder="Stadt" required>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-12">
                <input type="checkbox" name="check_dsgvo" id="check_dsgvo" class="mr-2" required>
                <label for="check_dsgvo">
                    Ich habe die <a target="_blank" href="<?php echo get_permalink( 175 ); ?>">Datenschutzbestimmungen</a> gelesen und akzeptiert
                </label>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-12">
                <input type="submit" class="btn btn-secondary" id="cwos_submit_btn" value="Sende diesen Bekloppten meine Adresse">
            </div>
        </div>
    </form>

    <div class="row mt-3">
        <div class="col-12">
            <p id="user_response" class="d-none"></p>
        </div>
    </div>
</main>