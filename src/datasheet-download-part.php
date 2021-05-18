<section class="homeFreeDataSheet">
    <div class="container">
        <div class="homeFreeDataSheetCopy" data-aos="fade-up">
            <h3><?php the_field('datasheet_title', 25); ?></h3>
            <?php the_field('datasheet_copy', 25); ?>
            <div class="homeFreeDataSheetCopyForm">
                <div class="homeFreeDataSheetCopyFormWrapper">
                    <?php echo do_shortcode('[formidable id=3]'); ?>
                </div>
                <i class="fa fa-download" aria-hidden="true"></i>
            </div>
        </div>
        <div class="homeFreeDataSheetImage" data-aos="fade-left">
            <img src="<?php the_field('datasheet_image', 25); ?>" alt="" class="logoWatermarkHomeAbout">
        </div>
    </div>
</section>