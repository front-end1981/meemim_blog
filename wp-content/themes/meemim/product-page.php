<?php /* Template Name: Product Template */ ?>
<?php get_header(); ?>



    <div class="main-heading-title" style="margin-bottom: 50px">
        <h1><?php the_title(); ?></h1>
    </div>
    <div class="main-img" style="background-image: url(' <?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' )[0]?>')">
        <div class="rectangle product-page">
             <span>
                 <?php echo get_post(get_post_thumbnail_id())->post_excerpt;?>
             </span>
        </div>
    </div>
    <section class="product-page">
        <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>
        <div class="container">
            <?php foreach($dynamic_featured_image->get_featured_images($post->ID) as $index=>$imageOption):?>
               <div class="row <?php echo $index % 2? 'even': ''?>">
                    <?php if ( $index % 2 == 0):?>
                    <div class="col-md-6"><img src="<?php echo $imageOption['full']?>"></div>
                    <?php endif?>
                    <div class="col-md-5">
                       <h1><?php echo $dynamic_featured_image->get_image_title_by_id($dynamic_featured_image->get_featured_images($post->ID )[$index]['attachment_id'])?></h1>
                       <p><?php  echo $dynamic_featured_image->get_image_description_by_id($dynamic_featured_image->get_featured_images($post->ID )[$index]['attachment_id'])?></p>
                   </div>
                   <?php if ( $index % 2 == 1):?>
                       <div class="col-md-6"><img src="<?php echo $imageOption['full']?>"></div>
                   <?php endif?>
               </div>
            <?php endforeach?>
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
            <div class="block-employees">
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

<!--                <div class="employee-blocks company" rel="popover1" data-employees="company" data-placement="right">-->
<!--                    The COMPANY-->
<!--                </div>-->

                <div class="additional_block employee hide">
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
                <div class="additional_block manager hide">
                    <div class="user-photo">
                        <img src="<?php bloginfo('template_url'); ?>/images/user.jpg" class="img-responsive">
                    </div>
                    <div class="user_block">
                        <div class="name">Alex Pestov</div>
                        <div class="position">CEO Virgin Group</div>
                        <div class="user_text">
                            Companies put their trust in us when it comes to selecting ERP systems for them.
                            Companies put their trust in us when it comes to selecting ERP systems for them.
                        </div>
                    </div>
                </div>
                <div class="additional_block hr hide">
                    <div class="user-photo">
                        <img src="<?php bloginfo('template_url'); ?>/images/user.jpg" class="img-responsive">
                    </div>
                    <div class="user_block">
                        <div class="name">Mario Casas</div>
                        <div class="position">CEO Virgin Group</div>
                        <div class="user_text">
                            Companies put their trust in us when it comes to selecting ERP systems for them.
                            Companies put their trust in us when it comes to selecting ERP systems for them.
                        </div>
                    </div>
                </div>
                <div class="additional_block company hide">
                    <div class="user-photo">
                        <img src="<?php bloginfo('template_url'); ?>/images/user.jpg" class="img-responsive">
                    </div>
                    <div class="user_block">
                        <div class="name">Cristiano Ronaldo</div>
                        <div class="position">CEO Virgin Group</div>
                        <div class="user_text">
                            Companies put their trust in us when it comes to selecting ERP systems for them.
                            Companies put their trust in us when it comes to selecting ERP systems for them.
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <div class="responsive" data-employees="manager" style="display: none">
            <div>
                <div class="statement">
                    <div class="user-photo">
                        <img src="<?php bloginfo('template_url'); ?>/images/user.jpg" class="img-responsive">
                    </div>
                    <div class="name">Alex Pestov, <span>Manager</span></div>
                    <div class="user_text">
                        Companies put their trust in us when it comes to selecting ERP systems for them.
                    </div>
                </div>
            </div>
            <div>
                <div class="statement">
                    <div class="user-photo">
                        <img src="<?php bloginfo('template_url'); ?>/images/user.jpg" class="img-responsive">
                    </div>
                    <div class="name">Alex Pestov, <span>Manager</span></div>
                    <div class="user_text">
                        Companies put their trust in us when it comes to selecting ERP systems for them.
                    </div>
                </div>
            </div>
            <div>
                <div class="statement">
                    <div class="user-photo">
                        <img src="<?php bloginfo('template_url'); ?>/images/user.jpg" class="img-responsive">
                    </div>
                    <div class="name">Alex Pestov, <span>Manager</span></div>
                    <div class="user_text">
                        Companies put their trust in us when it comes to selecting ERP systems for them.
                    </div>
                </div>
            </div>
            <div>
                <div class="statement">
                    <div class="user-photo">
                        <img src="<?php bloginfo('template_url'); ?>/images/user.jpg" class="img-responsive">
                    </div>
                    <div class="name">Alex Pestov, <span>Manager</span></div>
                    <div class="user_text">
                        Companies put their trust in us when it comes to selecting ERP systems for them.
                    </div>
                </div>
            </div>
        </div>

        <div class="responsive" data-employees="employee" style="display: none">
            <div>
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
            <div>
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
            <div>
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
            <div>
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

        <div class="responsive" data-employees="hr" style="display: none">
            <div>
                <div class="statement">
                    <div class="user-photo">
                        <img src="<?php bloginfo('template_url'); ?>/images/user.jpg" class="img-responsive">
                    </div>
                    <div class="name">Mario Casas, <span>HR</span></div>
                    <div class="user_text">
                        Companies put their trust in us when it comes to selecting ERP systems for them.
                    </div>
                </div>
            </div>
            <div>
                <div class="statement">
                    <div class="user-photo">
                        <img src="<?php bloginfo('template_url'); ?>/images/user.jpg" class="img-responsive">
                    </div>
                    <div class="name">Mario Casas, <span>HR</span></div>
                    <div class="user_text">
                        Companies put their trust in us when it comes to selecting ERP systems for them.
                    </div>
                </div>
            </div>
            <div>
                <div class="statement">
                    <div class="user-photo">
                        <img src="<?php bloginfo('template_url'); ?>/images/user.jpg" class="img-responsive">
                    </div>
                    <div class="name">Mario Casas, <span>HR</span></div>
                    <div class="user_text">
                        Companies put their trust in us when it comes to selecting ERP systems for them.
                    </div>
                </div>
            </div>
            <div>
                <div class="statement">
                    <div class="user-photo">
                        <img src="<?php bloginfo('template_url'); ?>/images/user.jpg" class="img-responsive">
                    </div>
                    <div class="name">Mario Casas, <span>HR</span></div>
                    <div class="user_text">
                        Companies put their trust in us when it comes to selecting ERP systems for them.
                    </div>
                </div>
            </div>
        </div>

        <div class="responsive" data-employees="company" style="display: none">
            <div>
                <div class="statement">
                    <div class="user-photo">
                        <img src="<?php bloginfo('template_url'); ?>/images/user.jpg" class="img-responsive">
                    </div>
                    <div class="name">Cristiano Ronaldo, <span>Company</span></div>
                    <div class="user_text">
                        Companies put their trust in us when it comes to selecting ERP systems for them.
                    </div>
                </div>
            </div>
            <div>
                <div class="statement">
                    <div class="user-photo">
                        <img src="<?php bloginfo('template_url'); ?>/images/user.jpg" class="img-responsive">
                    </div>
                    <div class="name">Cristiano Ronaldo, <span>Company</span></div>
                    <div class="user_text">
                        Companies put their trust in us when it comes to selecting ERP systems for them.
                    </div>
                </div>
            </div>
            <div>
                <div class="statement">
                    <div class="user-photo">
                        <img src="<?php bloginfo('template_url'); ?>/images/user.jpg" class="img-responsive">
                    </div>
                    <div class="name">Cristiano Ronaldo, <span>Company</span></div>
                    <div class="user_text">
                        Companies put their trust in us when it comes to selecting ERP systems for them.
                    </div>
                </div>
            </div>
            <div>
                <div class="statement">
                    <div class="user-photo">
                        <img src="<?php bloginfo('template_url'); ?>/images/user.jpg" class="img-responsive">
                    </div>
                    <div class="name">Cristiano Ronaldo, <span>Company</span></div>
                    <div class="user_text">
                        Companies put their trust in us when it comes to selecting ERP systems for them.
                    </div>
                </div>
            </div>
        </div>

        <script>
            $(function() {
                $('.responsive').slick({
                    dots: true,
                    infinite: false,
                    speed: 300,
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 1000,
                    responsive: [
                        {
                            breakpoint: 1280,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 1,
//                                infinite: true,
                                dots: true,
                                adaptiveHeight: true
                            }
                        },
                        {
                            breakpoint: 1024,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 1
//                                adaptiveHeight: true
                            }
                        },
                        {
                            breakpoint: 980,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
//                                adaptiveHeight: true
                            }
                        },
                        {
                            breakpoint: 480,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
//                                adaptiveHeight: true
                            }
                        }
                        // You can unslick at a given breakpoint now by adding:
                        // settings: "unslick"
                        // instead of a settings object
                    ]
                });
            })

        </script>

        <div id="FSContact2" class="massage-sign-up <?php $contact_form = $si_contact_form->si_display_thank_you_custom('2');
        if ( !is_array($contact_form) && $contact_form){ echo 'form-sent-ok';}?>">
            <?php if ( $contact_form && !is_array($contact_form) ):?>
                <span><?php echo $contact_form?></span>
            <?php elseif ( is_array($contact_form) ):?>
                <span><?php echo $contact_form['error_correct']?></span>
            <?php else:?>
                <span>
                Sign up to our blog updates
                </span>
            <?php endif?>
            <div class="arrow-bottom"></div>
        </div>


        <?php
        if ( isset($si_contact_form) )  {
            echo $si_contact_form->si_contact_form_short_code( array( 'form' => '2' ) );
        }
        ?>
<!--        <form class="form-inline" role="form">-->
<!--            <div class="form-group">-->
<!--                <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">-->
<!--            </div>-->
<!--            <button type="submit" class="btn btn-default">Sign Up</button>-->
<!--        </form>-->

    </section>
<?php get_footer(); ?>