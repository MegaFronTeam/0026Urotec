<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package mega
 */

get_header();
global $post;
?>

    <!-- start sError-->
    <div class="sError section" id="sError">
        <div class="container">
            <div class="decorative-line decorative-line--error"></div>
            <div class="row">
                <div class="col-lg-6 col-12 order-1 order-lg-0 position-relative">
                    <div class="bg-text bg-text--error">page<br>not<br>found</div>
                </div>
                <div class="col-lg-6 col-12 order-0 order-lg-1">
                    <div class="sError__title">404
                    </div>
                    <div class="sError__caption">Нет такой страницы
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end sError-->

<?php
get_footer();
