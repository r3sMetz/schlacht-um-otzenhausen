<?php $runningOrder = build_running_order(); ?>
<main id="running_order" class="container">
    <div class="row">
        <!-- Mainstage -->
        <section class="col-md-6 mb-5 mb-md-0">
            <h2 class="underlined mb-4">Mainstage</h2>
			<?php foreach ( $runningOrder['mainstage'] as $band ): ?>
			    <?php if($band->post_status === 'publish'):?>
                <article class="single_ro_band mb-4">
                    <h3 class="h4 mb-0 text-secondary"><?= get_field( 'startzeit', $band->ID ); ?> - <?= get_field( 'endzeit', $band->ID ); ?> UHR</h3>
                    <h4 class="h2"><?= get_the_title( $band->ID ); ?></h4>
                </article>
                <?php endif;?>
			<?php endforeach; ?>
        </section>

        <!-- Clubstage -->
        <section class="col-md-6">
            <h2 class="underlined mb-4">Clubstage</h2>
			<?php foreach ( $runningOrder['clubstage'] as $band ): ?>
			    <?php if($band->post_status === 'publish'):?>
                <article class="single_ro_band mb-4">
                    <h3 class="h4 text-secondary mb-0"><?= get_field( 'startzeit', $band->ID ); ?> - <?= get_field( 'endzeit', $band->ID ); ?> UHR</h3>
                    <h4 class="h2"><?= get_the_title( $band->ID ); ?></h4>
                </article>
                <?php endif;?>
			<?php endforeach; ?>
        </section>
    </div>
    <!-- Running Order PDF -->
    <div class="row">
        <aside class="col-12">
            <a target="_blank" href="<?php echo get_template_directory_uri();?>/assets/pdf/suo_running_order.pdf" class="btn btn-secondary btn-lg">Running Order als PDF</a>
        </aside>
    </div>
</main>