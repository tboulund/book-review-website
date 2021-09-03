<?php get_header() ?>

    <?php if(have_posts()): ?>
        <div class="container-fluid">
            <div class="row">
                <?php while(have_posts()): the_post() ?>
                    <div class="col-4 card">
                        <div class="card-body">
                            <div class="card-title"><?php the_title() ?></div>
                            <a href="<?php the_permalink() ?>" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    <?php else: ?>
        <p>This category contains no books.</p>
    <?php endif; ?>

<?php get_footer() ?>