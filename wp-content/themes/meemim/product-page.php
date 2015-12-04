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


<!--        --><?php //print_r(MeemimApplication::getInstance()->getMembers()->getAll())?>
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
                <?php $class_name = ['employee', 'manager', 'hr']?>
                <?php foreach(MeemimApplication::getInstance()->getMembers()->getAll() as $index => $member): ?>
                    <div class="additional_block <?php echo $class_name[$index]?> hide">
                        <div class="user-photo">
                            <img src="<?php echo $member->photo['sizes']['thumbnail']['url'] ?>" class="img-responsive">
                        </div>
                        <div class="user_block">
                            <div class="name"><?php echo trim($member->first_name) . ' ' . trim($member->last_name); ?></div>
                            <div class="position"><?php echo trim($member->position)?></div>
                            <div class="user_text"><?php echo trim(nl2br($member->description)); ?></div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <?php foreach(MeemimApplication::getInstance()->getMembers()->getAll() as $index => $member1): ?>
        <div class="responsive" data-employees="<?php echo $class_name[$index]?>" >
            <?php foreach(MeemimApplication::getInstance()->getMembers()->getAll($member1->id) as $member_child): ?>
            <div>
                <div class="statement">
                    <div class="user-photo">
                        <img src="<?php echo $member_child->photo['sizes']['thumbnail']['url'] ?>" class="img-responsive">
                    </div>
                    <div class="name"><?php echo trim($member_child->first_name) . ' ' . trim($member_child->last_name); ?>, <span><?php echo trim($member_child->position)?></span></div>
                    <div class="user_text"><?php echo trim(nl2br($member_child->description)); ?></div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endforeach; ?>

        <script>
            $(function() {

                $('.responsive').each(function(){
                    $(this).slick({
                        dots: true,
                        infinite: true,
                        speed: 500,
                        slidesToShow: 3,
                        slidesToScroll: 1,
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
                        ]
                    });
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