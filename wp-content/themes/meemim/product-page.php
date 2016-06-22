<?php /* Template Name: Product Template */ ?>
<?php get_header(); ?>



    <div class="main-heading-title">
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
                Searching for information, getting new employees up to speed, and doing redundant work translate into significant cost to your company. Do you know how much? Use the tool below to find out.<br/><br/>
		How many employees does your company have?
            </p>

            <div class="slider" data-value="10"></div>
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
                            employee turnover
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
				they needed
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
                    <p>Meemim can reduce this waste by up to 25%</p><br/>
                </div>
		<p>And costs only a fraction of the savings it delivers</p><br/>
                <img src="<?php bloginfo('template_url'); ?>/images/icons/graph.png">

                <p>Potential savings &nbsp; Meemim’s Cost &nbsp;&nbsp;&nbsp;&nbsp;</p>
            </div>
            
            
             <?php if ( AboutPageHelper::getAllImages($post->ID, 'medium') ):?>
                <div class="leadership-user-title">
                    <p>Meemim is already helping these and many other wonderful companies</p>
                </div>

                <div class="leadership-user">
                    <?php foreach(AboutPageHelper::getAllImages($post->ID, 'medium') as $index=>$image): ?>
                        <?php if ( $index <= 3 ):?>
                            <article class="company post-1154 type-company status-publish hentry category-lsa-2 category-lsi-1">

                                <div class="company-logo" style="background: url('<?php echo $image['src']; ?>') no-repeat center center; background-size: 100% auto;">
                                    <a href="http://www.meemim.com/clients-and-partners/" class="open-modal" data-open="company-1154-2">
                                    </a>
                                </div>

                            </article>
                        <?php endif;?>
                    <?php endforeach; ?>
                </div>
            <?php endif?>
            
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
                    The COMPANY
                </div>

<!--                <div class="employee-blocks company" rel="popover1" data-employees="company" data-placement="right">-->
<!--                    The COMPANY-->
<!--                </div>-->

                <div class="additional_block employee hide">
                    <div class="user-photo">
                        <img src="http://www.meemim.com/wp-content/uploads/2015/12/Jonathan-Fernando.jpg" class="img-responsive">
                    </div>
                    <div class="user_block">
                        <div class="name">Jonathan Fernando</div>
                        <div class="position">Media @ Meemim</div>
                        <div class="user_text">
                            Meemim lets me keep track of sources I need, and the documents I’m using, and lets me share them quickly with anyone else who needs them. Now everyone knows where to find the current text we’re using for a project or press release, or our group list of new blog ideas.
                        </div>
                    </div>
                </div>
                <div class="additional_block manager hide">
                    <div class="user-photo">
                        <img src="http://www.meemim.com/wp-content/uploads/2016/01/Marian-Bukal.jpg" class="img-responsive">
                    </div>
                    <div class="user_block">
                        <div class="name">Marian Bukal</div>
                        <div class="position">CTO @ Meemim</div>
                        <div class="user_text">
                            No more wrestling with the software every step of the way. With Meemim I’ve finally found a knowledge base for my team that’s easy to build and maintain. 
                        </div>
                    </div>
                </div>
                <div class="additional_block hr hide">
                    <div class="user-photo">
                        <img src="http://www.meemim.com/wp-content/uploads/2015/12/Alec-Pestov.jpg" class="img-responsive">
                    </div>
                    <div class="user_block">
                        <div class="name">Alec Pestov</div>
                        <div class="position">CEO @ Meemim</div>
                        <div class="user_text">
                            Meemim helps our company move faster. Now everyone’s able to quickly find the information they need, and share what needs to be shared. Most importantly, knowledge collected and organized in one place rather than being scattered on individual PC’s—or even worse, locked away in people’s heads.
                        </div>
                    </div>
                </div>
                <div class="additional_block company hide">
                    <div class="user-photo">
                        <img src="http://www.meemim.com/wp-content/uploads/2015/12/Alec-Pestov.jpg" class="img-responsive">
                    </div>
                    <div class="user_block">
                        <div class="name">Alec Pestov</div>
                        <div class="position">CEO @ Meemim</div>
                        <div class="user_text">
                            Meemim helps our company move faster. Now everyone’s able to quickly find the information they need, and share what needs to be shared. Most importantly, knowledge collected and organized in one place rather than being scattered on individual PC’s—or even worse, locked away in people’s heads.
                        </div>
                    </div>
                </div>

            </div>
        </div>

	<div class="responsive" data-employees="manager" style="display: none">
            <div>
                <div class="statement">
                    <div class="user-photo">
                        <img src="http://www.meemim.com/wp-content/uploads/2016/01/Marian-Bukal.jpg" class="img-responsive">
                    </div>
                    <div class="name"><span>Marian Bukal</span>, CTO @ Meemim</div>
                    <div class="user_text">
                        Before Meemim, finding information at our company was like looking in that warehouse from Raiders of the Lost Ark with boxes labelled in 8 point font. 
                    </div>
                </div>
  	    </div>
	    <div>
		<div class="statement">
                    <div class="user-photo">
                        <img src="http://www.meemim.com/wp-content/uploads/2016/02/Arny-1.jpg" class="img-responsive">
                    </div>
                    <div class="name"><span>Arny</span>, PDU</div>
                    <div class="user_text">
                       Meemim makes data search and recall a lot more intuitive, a lot less frustrating and a lot faster, especially for the user who may not know the proper technical nomenclature, but know what they are "looking" for.
                    </div>
                </div>
	    </div>
	    <div>
		<div class="statement">
                    <div class="user-photo">
                        <img src="http://www.meemim.com/wp-content/uploads/2016/02/Igor-Omelianchuk.jpg" class="img-responsive">
                    </div>
                    <div class="name"><span>Igor Omelianchuk</span>, MIF Projects</div>
                    <div class="user_text">
                        A very easy and convenient solution to manage knowledge bases in the company. It simply helps to save time. A lot of time. 
                    </div>
                </div>
            </div>
		<div>
		<div class="statement">
                    <div class="user-photo">
                        <img src="http://www.meemim.com/wp-content/uploads/2016/02/CLunn-1.jpg" class="img-responsive">
                    </div>
                    <div class="name"><span>Courtney</span>, DVI Lighting</div>
                    <div class="user_text">
                        Meemim is a tool I wish I had years ago.The ability to organize everything visually is a huge improvement with my workflow when I’m looking for that one file within thousands. 
                    </div>
                </div>
            </div>
        </div>

        <div class="responsive" data-employees="employee" style="display: none">
            <div>
                <div class="statement">
                    <div class="user-photo">
                        <img src="http://www.meemim.com/wp-content/uploads/2016/01/Marian-Bukal.jpg" class="img-responsive">
                    </div>
                    <div class="name"><span>Marian Bukal</span>, CTO @ Meemim</div>
                    <div class="user_text">
                        Before Meemim, finding information at our company was like looking in that warehouse from Raiders of the Lost Ark with boxes labelled in 8 point font. 
                    </div>
                </div>
  	    </div>
	    <div>
		<div class="statement">
                    <div class="user-photo">
                        <img src="http://www.meemim.com/wp-content/uploads/2016/02/Arny-1.jpg" class="img-responsive">
                    </div>
                    <div class="name"><span>Arny</span>, PDU</div>
                    <div class="user_text">
                       Meemim makes data search and recall a lot more intuitive, a lot less frustrating and a lot faster, especially for the user who may not know the proper technical nomenclature, but know what they are "looking" for.
                    </div>
                </div>
	    </div>
	    <div>
		<div class="statement">
                    <div class="user-photo">
                        <img src="http://www.meemim.com/wp-content/uploads/2016/02/Igor-Omelianchuk.jpg" class="img-responsive">
                    </div>
                    <div class="name"><span>Igor Omelianchuk</span>, MIF Projects</div>
                    <div class="user_text">
                        A very easy and convenient solution to manage knowledge bases in the company. It simply helps to save time. A lot of time. 
                    </div>
                </div>
            </div>
		<div>
		<div class="statement">
                    <div class="user-photo">
                        <img src="http://www.meemim.com/wp-content/uploads/2016/02/CLunn-1.jpg" class="img-responsive">
                    </div>
                    <div class="name"><span>Courtney</span>, DVI Lighting</div>
                    <div class="user_text">
                        Meemim is a tool I wish I had years ago.The ability to organize everything visually is a huge improvement with my workflow when I’m looking for that one file within thousands. 
                    </div>
                </div>
            </div>
        </div>

        <div class="responsive" data-employees="hr" style="display: none">
            <div>
                <div class="statement">
                    <div class="user-photo">
                        <img src="http://www.meemim.com/wp-content/uploads/2016/01/Marian-Bukal.jpg" class="img-responsive">
                    </div>
                    <div class="name"><span>Marian Bukal</span>, CTO @ Meemim</div>
                    <div class="user_text">
                        Before Meemim, finding information at our company was like looking in that warehouse from Raiders of the Lost Ark with boxes labelled in 8 point font. 
                    </div>
                </div>
  	    </div>
	    <div>
		<div class="statement">
                    <div class="user-photo">
                        <img src="http://www.meemim.com/wp-content/uploads/2016/02/Arny-1.jpg" class="img-responsive">
                    </div>
                    <div class="name"><span>Arny</span>, PDU</div>
                    <div class="user_text">
                       Meemim makes data search and recall a lot more intuitive, a lot less frustrating and a lot faster, especially for the user who may not know the proper technical nomenclature, but know what they are "looking" for.
                    </div>
                </div>
	    </div>
	    <div>
		<div class="statement">
                    <div class="user-photo">
                        <img src="http://www.meemim.com/wp-content/uploads/2016/02/Igor-Omelianchuk.jpg" class="img-responsive">
                    </div>
                    <div class="name"><span>Igor Omelianchuk</span>, MIF Projects</div>
                    <div class="user_text">
                        A very easy and convenient solution to manage knowledge bases in the company. It simply helps to save time. A lot of time. 
                    </div>
                </div>
            </div>
		<div>
		<div class="statement">
                    <div class="user-photo">
                        <img src="http://www.meemim.com/wp-content/uploads/2016/02/CLunn-1.jpg" class="img-responsive">
                    </div>
                    <div class="name"><span>Courtney</span>, DVI Lighting</div>
                    <div class="user_text">
                        Meemim is a tool I wish I had years ago.The ability to organize everything visually is a huge improvement with my workflow when I’m looking for that one file within thousands. 
                    </div>
                </div>
            </div>
        </div>

        <div class="responsive" data-employees="company" style="display: none">
            <div>
                <div class="statement">
                    <div class="user-photo">
                        <img src="http://www.meemim.com/wp-content/uploads/2016/01/Marian-Bukal.jpg" class="img-responsive">
                    </div>
                    <div class="name"><span>Marian Bukal</span>, CTO @ Meemim</div>
                    <div class="user_text">
                        Before Meemim, finding information at our company was like looking in that warehouse from Raiders of the Lost Ark with boxes labelled in 8 point font. 
                    </div>
                </div>
  	    </div>
	    <div>
		<div class="statement">
                    <div class="user-photo">
                        <img src="http://www.meemim.com/wp-content/uploads/2016/02/Arny-1.jpg" class="img-responsive">
                    </div>
                    <div class="name"><span>Arny</span>, PDU</div>
                    <div class="user_text">
                       Meemim makes data search and recall a lot more intuitive, a lot less frustrating and a lot faster, especially for the user who may not know the proper technical nomenclature, but know what they are "looking" for.
                    </div>
                </div>
	    </div>
	    <div>
		<div class="statement">
                    <div class="user-photo">
                        <img src="http://www.meemim.com/wp-content/uploads/2016/02/Igor-Omelianchuk.jpg" class="img-responsive">
                    </div>
                    <div class="name"><span>Igor Omelianchuk</span>, MIF Projects</div>
                    <div class="user_text">
                        A very easy and convenient solution to manage knowledge bases in the company. It simply helps to save time. A lot of time. 
                    </div>
                </div>
            </div>
		<div>
		<div class="statement">
                    <div class="user-photo">
                        <img src="http://www.meemim.com/wp-content/uploads/2016/02/CLunn-1.jpg" class="img-responsive">
                    </div>
                    <div class="name"><span>Courtney</span>, DVI Lighting</div>
                    <div class="user_text">
                        Meemim is a tool I wish I had years ago.The ability to organize everything visually is a huge improvement with my workflow when I’m looking for that one file within thousands. 
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
                Sign up for a free 30-day trial
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