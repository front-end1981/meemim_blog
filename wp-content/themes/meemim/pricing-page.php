<?php /* Template Name: Pricing Template */ ?>
<?php get_header(); ?>


    <section class="pricing-page">
        <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>

        <div class="container-fluid">
<!--            <div class="row">-->
                <div class="column">
                    <div class="title-casuta"><span>FREE</span></div>
                    <div class="casuta">

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
                <div class="column">
                    <div class="title-casuta"><span>PRO</span></div>
                    <div class="casuta selected">
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
                <div class="column">
                    <div class="title-casuta"><span>ENTERPRISE</span></div>
                    <div class="casuta">
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
<!--            </div>-->
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
            <button type="submit" class="btn btn-default">Sign Up</button>
        </form>


        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>&nbsp;</th>
                    <th class="bg-table">
                        <div class="corner-lf"></div>
                        FREE
                    </th>
                    <th class="bg-table">PRO</th>
                    <th class="bg-table">
                        <div class="corner-rt"></div>
                        <span>ENTERPRISE</span>
                    </th>
                </tr>
                </thead>
                <tbody>

                <tr>
                    <td class="first-cell">Meeting participants</td>
                    <td></td>
                    <td class="pro-cell">8$</td>
                    <td></td>
                </tr>


                <tr>
                    <td class="first-cell">Mobile apps</td>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <td class="first-cell">Video conferencing</td>
                    <td>Larry the Bird</td>
                    <td>@twitter</td>
                    <td>@twitter</td>
                </tr>
                <tr>
                    <td class="first-cell">Meeting participants</td>
                    <td><img src="<?php bloginfo('template_url'); ?>/images/square_ok_07.png"></td>
                    <td><img src="<?php bloginfo('template_url'); ?>/images/square_ok_07.png"></td>
                    <td><img src="<?php bloginfo('template_url'); ?>/images/square_ok_07.png"></td>
                </tr>
                <tr>
                    <td class="first-cell">Mobile apps</td>
                    <td>Larry the Bird</td>
                    <td>@twitter</td>
                    <td>@twitter</td>
                </tr>
                </tbody>
            </table>
        </div>


    </section>
<?php get_footer(); ?>