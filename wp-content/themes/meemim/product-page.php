<?php /* Template Name: Product Template */ ?>
<?php get_header(); ?>



    <div class="main-heading-title" style="margin-bottom: 50px">
        <h1><?php the_title(); ?></h1>
    </div>
    <div class="main-img">
        <div class="rectangle product-page">
                <span>COMPANIES around the world use Meemim
            to make sure EMPLOYEES can find the information
            they need to do their job.</span>
        </div>
    </div>
    <section class="product-page">
        <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>

        <div class="container">
           <div class="row">
               <div class="col-md-6"><img src="<?php bloginfo('template_url'); ?>/images/discover.png"></div>
               <div class="col-md-5">
                   <h1>Find</h1>
                   <p>With high engagement rates and over 400 million active monthly users, it comes as no surprise then that gaining more Instagram followers is a high priority for any business using the platform.</p>
               </div>
           </div>
            <div class="row even">
                <div class="col-md-5">
                    <h1>Share</h1>
                    <p>With high engagement rates and over 400 million active monthly users, it comes as no surprise then that gaining more Instagram followers is a high priority for any business using the platform.</p>
                </div>
                <div class="col-md-6"><img src="<?php bloginfo('template_url'); ?>/images/relevant.png"></div>

            </div>
            <div class="row">
                <div class="col-md-6"><img src="<?php bloginfo('template_url'); ?>/images/discover.png"></div>
                <div class="col-md-5">
                    <h1>Find</h1>
                    <p>With high engagement rates and over 400 million active monthly users, it comes as no surprise then that gaining more Instagram followers is a high priority for any business using the platform.</p>
                </div>
            </div>
            <div class="row even">
                <div class="col-md-5">
                    <h1>Share</h1>
                    <p>With high engagement rates and over 400 million active monthly users, it comes as no surprise then that gaining more Instagram followers is a high priority for any business using the platform.</p>
                </div>
                <div class="col-md-6"><img src="<?php bloginfo('template_url'); ?>/images/relevant.png"></div>

            </div>
        </div>



        <div class="sounds_good">
            <div class="title">
                <p>Sounds good</p>
                <p>But WHY do I need it?</p>
            </div>
            <p class="text">
                Companies put their trust in us when it comes to selecting ERP systems for them. 3B is not affiliated with ERP or other software vendors.
            </p>

            <div id="slider" data-value="10"></div>
            <div class="block-employees" style="display: none">
                <div class="result" data-value="10" data-step="5">10</div>
                <div>&nbsp;employees</div>
            </div>

            <div class="block_circles">
                <div id="circle1" class="circles">
                    <img src="<?php bloginfo('template_url'); ?>/images/icons/ellipse-1.png">
                    <div class="numeric" data-min="65">65</div>
                    <div class="title">new employees</div>
                    <div class="description">
                        <p>
                            are only 35% as
                            productive as those
                            they replaced
                        </p>
                    </div>
                </div>

                <div id="circle2" class="circles">
                    <img src="<?php bloginfo('template_url'); ?>/images/icons/ellipse-2.png">
                    <div class="numeric" data-min="5">5</div>
                    <div class="title">months</div>
                    <div class="description">
                        <p>
                            of productivity lost due to natural
                            employee turn-over
                        </p>
                    </div>
                </div>

                <div id="circle3" class="circles">
                    <img src="<?php bloginfo('template_url'); ?>/images/icons/ellipse-3.png">
                    <div class="numeric" data-min="25">25</div>
                    <div class="title">dollars</div>
                    <div class="description">
                        <p>
                            spent redoing work due to
                            inability to find information
                        </p>
                    </div>
                </div>

                <div id="circle4" class="circles">
                    <img src="<?php bloginfo('template_url'); ?>/images/icons/ellipse-4.png">
                    <div class="numeric" data-min="2">2</div>
                    <div class="title">hours</div>
                    <div class="description">
                        <p>
                            lost due to inability
                            to find information
                        </p>
                    </div>
                </div>

                <div id="circle5" class="circles">
                    <img src="<?php bloginfo('template_url'); ?>/images/icons/ellipse-5.png">
                    <div class="numeric" data-min="5">5</div>
                    <div class="title">hours</div>
                    <div class="description">
                        <p>
                            spent searching for information
                        </p>
                    </div>
                </div>
            </div>

            <div class="chat">
                <div class="chat-title">
                    <p>Meemim can reduce the waste</p>
                    <p>by up to 25%</p>
                </div>
                <img src="<?php bloginfo('template_url'); ?>/images/icons/graph.png">

                <p>Potential savings &nbsp; Break even point</p>
            </div>
        </div>

        <div class="meemim_and_me">
            <div class="title">
                <p>What Meemim does <span>for ME</span></p>
            </div>
            <div class="employees">
                <div class="employee-blocks employee" rel="popover1" data-employees="employee" data-placement="left">
                    I am an EMPLOYEE
                </div>

                <div class="employee-blocks manager" rel="popover1" data-employees="manager" data-placement="right">
                    I am a MANAGER
                </div>

                <div class="employee-blocks hr" rel="popover1" data-employees="hr" data-placement="left">
                    I am from HR
                </div>

                <div class="employee-blocks company" rel="popover1" data-employees="company" data-placement="right">
                    The COMPANY
                </div>

                <div class="additional_block hide">
                    <div class="user-photo">
                        <img src="<?php bloginfo('template_url'); ?>/images/user.jpg" class="img-responsive">
                    </div>
                    <div class="user_block">
                        <div class="name">Jason Elliot</div>
                        <div class="position">CEO Virgin Group</div>
                        <div class="user_text">
                            Companies put their trust in us when it comes to selecting ERP systems for them.
                            Companies put their trust in us when it comes to selecting ERP systems for them.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="multiple-items" data-employees="employee" style="display: none">
            <div >
                <div  class="statement">
                    <div class="user-photo">
                        <img src="<?php bloginfo('template_url'); ?>/images/user.jpg" class="img-responsive">
                    </div>
                    <div class="name">Jason Elliot, <span>Employee</span></div>
                    <div class="user_text">
                        Companies put their trust in us when it comes to selecting ERP systems for them.
                    </div>
                </div>

            </div>
            <div >
                <div  class="statement">
                    <div class="user-photo">
                        <img src="<?php bloginfo('template_url'); ?>/images/user.jpg" class="img-responsive">
                    </div>
                    <div class="name">Jason Elliot, <span>Employee</span></div>
                    <div class="user_text">
                        Companies put their trust in us when it comes to selecting ERP systems for them.
                    </div>
                </div>

            </div>
            <div >
                <div  class="statement">
                    <div class="user-photo">
                        <img src="<?php bloginfo('template_url'); ?>/images/user.jpg" class="img-responsive">
                    </div>
                    <div class="name">Jason Elliot, <span>Employee</span></div>
                    <div class="user_text">
                        Companies put their trust in us when it comes to selecting ERP systems for them.
                    </div>
                </div>

            </div>
            <div >
                <div  class="statement">
                    <div class="user-photo">
                        <img src="<?php bloginfo('template_url'); ?>/images/user.jpg" class="img-responsive">
                    </div>
                    <div class="name">Jason Elliot, <span>Employee</span></div>
                    <div class="user_text">
                        Companies put their trust in us when it comes to selecting ERP systems for them.
                    </div>
                </div>
            </div>
        </div>


<!--        <div class="multiple-items" data-employees="manager" style="display: none">-->
<!---->
<!--            <div class="statement">-->
<!--                <div class="user-photo">-->
<!--                    <img src="--><?php //bloginfo('template_url'); ?><!--/images/user.jpg" class="img-responsive">-->
<!--                </div>-->
<!--                <div class="name">Jason Elliot, <span>Manager</span></div>-->
<!--                <div class="user_text">-->
<!--                    Companies put their trust in us when it comes to selecting ERP systems for them.-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="statement">-->
<!--                <div class="user-photo">-->
<!--                    <img src="--><?php //bloginfo('template_url'); ?><!--/images/user.jpg" class="img-responsive">-->
<!--                </div>-->
<!--                <div class="name">Jason Elliot, <span>Manager</span></div>-->
<!--                <div class="user_text">-->
<!--                    Companies put their trust in us when it comes to selecting ERP systems for them.-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="statement">-->
<!--                <div class="user-photo">-->
<!--                    <img src="--><?php //bloginfo('template_url'); ?><!--/images/user.jpg" class="img-responsive">-->
<!--                </div>-->
<!--                <div class="name">Jason Elliot, <span>Manager</span></div>-->
<!--                <div class="user_text">-->
<!--                    Companies put their trust in us when it comes to selecting ERP systems for them.-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="statement">-->
<!--                <div class="user-photo">-->
<!--                    <img src="--><?php //bloginfo('template_url'); ?><!--/images/user.jpg" class="img-responsive">-->
<!--                </div>-->
<!--                <div class="name">Jason Elliot, <span>Manager</span></div>-->
<!--                <div class="user_text">-->
<!--                    Companies put their trust in us when it comes to selecting ERP systems for them.-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="multiple-items" data-employees="hr" style="display: none">-->
<!--            <div class="statement">-->
<!--                <div class="user-photo">-->
<!--                    <img src="--><?php //bloginfo('template_url'); ?><!--/images/user.jpg" class="img-responsive">-->
<!--                </div>-->
<!--                <div class="name">Jason Elliot, <span>HR</span></div>-->
<!--                <div class="user_text">-->
<!--                    Companies put their trust in us when it comes to selecting ERP systems for them.-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="statement">-->
<!--                <div class="user-photo">-->
<!--                    <img src="--><?php //bloginfo('template_url'); ?><!--/images/user.jpg" class="img-responsive">-->
<!--                </div>-->
<!--                <div class="name">Jason Elliot, <span>HR</span></div>-->
<!--                <div class="user_text">-->
<!--                    Companies put their trust in us when it comes to selecting ERP systems for them.-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="statement">-->
<!--                <div class="user-photo">-->
<!--                    <img src="--><?php //bloginfo('template_url'); ?><!--/images/user.jpg" class="img-responsive">-->
<!--                </div>-->
<!--                <div class="name">Jason Elliot, <span>HR</span></div>-->
<!--                <div class="user_text">-->
<!--                    Companies put their trust in us when it comes to selecting ERP systems for them.-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="statement">-->
<!--                <div class="user-photo">-->
<!--                    <img src="--><?php //bloginfo('template_url'); ?><!--/images/user.jpg" class="img-responsive">-->
<!--                </div>-->
<!--                <div class="name">Jason Elliot, <span>HR</span></div>-->
<!--                <div class="user_text">-->
<!--                    Companies put their trust in us when it comes to selecting ERP systems for them.-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div class="multiple-items" data-employees="company" style="display: none">-->
<!--            <div class="statement">-->
<!--                <div class="user-photo">-->
<!--                    <img src="--><?php //bloginfo('template_url'); ?><!--/images/user.jpg" class="img-responsive">-->
<!--                </div>-->
<!--                <div class="name">Jason Elliot, <span>Company</span></div>-->
<!--                <div class="user_text">-->
<!--                    Companies put their trust in us when it comes to selecting ERP systems for them.-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="statement">-->
<!--                <div class="user-photo">-->
<!--                    <img src="--><?php //bloginfo('template_url'); ?><!--/images/user.jpg" class="img-responsive">-->
<!--                </div>-->
<!--                <div class="name">Jason Elliot, <span>Company</span></div>-->
<!--                <div class="user_text">-->
<!--                    Companies put their trust in us when it comes to selecting ERP systems for them.-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="statement">-->
<!--                <div class="user-photo">-->
<!--                    <img src="--><?php //bloginfo('template_url'); ?><!--/images/user.jpg" class="img-responsive">-->
<!--                </div>-->
<!--                <div class="name">Jason Elliot, <span>Company</span></div>-->
<!--                <div class="user_text">-->
<!--                    Companies put their trust in us when it comes to selecting ERP systems for them.-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="statement">-->
<!--                <div class="user-photo">-->
<!--                    <img src="--><?php //bloginfo('template_url'); ?><!--/images/user.jpg" class="img-responsive">-->
<!--                </div>-->
<!--                <div class="name">Jason Elliot, <span>Company</span></div>-->
<!--                <div class="user_text">-->
<!--                    Companies put their trust in us when it comes to selecting ERP systems for them.-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->





        <div class="massage-sign-up">
            <span>
                Sign up to our blog updates
            </span>
            <div class="arrow-bottom"></div>
        </div>

        <form class="form-inline" role="form">
            <div class="form-group">
                <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
            </div>
            <button type="submit" class="btn btn-default">Sign Up</button>
        </form>

    </section>
<?php get_footer(); ?>