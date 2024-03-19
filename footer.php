<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="container">
        <!-- Your footer content goes here -->

        <div class="row">
            <div class="col">
                <div class="footer-widget-area">
                    <div class="footer-widget">
                        <?php if (is_active_sidebar('footer-1')) : ?>
                            <div id="footer-widget-1" class="widget-area" role="complementary">
                                <?php dynamic_sidebar('footer-1'); ?>
                            </div><!-- #footer-widget-1 -->
                        <?php endif; ?>
                    </div>
                </div>

                <div class="col">
                    <div class="footer-widget">
                        <?php if (is_active_sidebar('footer-2')) : ?>
                            <div id="footer-widget-2" class="widget-area" role="complementary">
                                <?php dynamic_sidebar('footer-2'); ?>
                            </div><!-- #footer-widget-2 -->
                        <?php endif; ?>
                    </div>
                </div>

                <div class="col">
                    <div class="footer-widget">
                        <?php if (is_active_sidebar('footer-3')) : ?>
                            <div id="footer-widget-3" class="widget-area" role="complementary">
                                <?php dynamic_sidebar('footer-3'); ?>
                            </div><!-- #footer-widget-3 -->
                        <?php endif; ?>
                    </div>
                </div>

            </div>
        </div><!-- .footer-widget-area -->


    </div><!-- .container -->



    <div class="site-info container">
        <?php
        /* translators: %s: WordPress */
        printf(esc_html__('Proudly powered by %s', 'your-theme-text-domain'), '<a href="' . esc_url(__('https://wordpress.org/', 'your-theme-text-domain')) . '">WordPress</a>');
        ?>
        <span class="sep"> | </span>
        <?php
        /* translators: 1: Theme name, 2: Theme author. */
        printf(esc_html__('Theme: %1$s by %2$s.', 'your-theme-text-domain'), 'YourThemeName', '<a href="https://yourwebsite.com/">Your Name</a>');
        ?>
    </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #content -->

<?php wp_footer(); ?>

</body>

</html>