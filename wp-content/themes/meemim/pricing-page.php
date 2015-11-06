<?php /* Template Name: Pricing Template */ ?>
<?php get_header(); ?>

<!--    <div class="main-heading-title">-->
<!--        <h1>--><?php //the_title(); ?><!--</h1>-->
<!--    </div>-->
    <section class="pricing-page">
        <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>

        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-6 col-sm-3">
                    <div class="casuta">
                        <div class="title-casuta"><span>FREE</span></div>
                        <span class="text1">
                            Premium meetings with advanced
                            management capabilities
                        </span>
                        <span class="text2">
                            free
                        </span>
                        <span class="text3">
                            Online meetings with unlimited
                            audio conferencing
                        </span>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <div class="casuta">
                        <div class="title-casuta"><span>PRO</span></div>
                        <span class="text1">
                           Online meetings with unlimited
                            audio conferencing
                        </span>
                        <span class="text2">
                            8 $
                        </span><br>
                        <span style="font-size: 16px;color: #5d052a;text-transform: uppercase">per user/month</span>
                        <span class="text3">
                            Online meetings with unlimited
                            audio conferencing
                        </span>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <div class="casuta">
                        <div class="title-casuta"><span>ENTERPRISE</span></div>
                        <span class="text1">
                            Premium meetings with advanced
                            management capabilities
                        </span>
                        <span class="text2">
                            free
                        </span>
                        <span class="text3">
                            Online meetings with unlimited
                            audio conferencing
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="massage-sign-up">
            <span>
                Choose your plan and enter your email to get started
            </span>
            <div class="arrow-bottom"></div>
        </div>

        <form class="form-inline" role="form">
            <div class="form-group">
                <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
            </div>
            <button type="submit" class="btn btn-default">sing up</button>
        </form>


<!--        <div class="table-responsive">-->
<!--            <table class="table">-->
<!---->
<!--            </table>-->
<!--        </div>-->


    </section>
<?php get_footer(); ?>