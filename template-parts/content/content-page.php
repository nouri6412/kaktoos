			<!--Inner Home Banner Start-->
			<div class="wt-haslayout wt-innerbannerholder">
			    <div class="container">
			        <div class="row justify-content-md-center">
			            <div class="col-xs-12 col-sm-12 col-md-8 push-md-2 col-lg-6 push-lg-3">
			                <div class="wt-innerbannercontent">
			                    <div class="wt-title">
			                        <h2><?php  echo get_the_title(); ?></h2>
			                    </div>
			                    <ol class="wt-breadcrumb">
			                        <li><a href="index-2.html">صفحه اصلی</a></li>
			                        <li><a href="javascript:void(0);">مقالات</a></li>
			                        <li class="wt-active">جزئیات مقاله</li>
			                    </ol>
			                </div>
			            </div>
			        </div>
			    </div>
			</div>
			<!--Inner Home End-->
			<!--Main Start-->
			<main id="wt-main" class="wt-main wt-haslayout wt-innerbgcolor">
			    <!--Categories Start-->
			    <div class="wt-haslayout wt-main-section">
			        <div class="container">
			            <div class="row justify-content-md-center">
			                <div class="col-12 col-sm-12 col-md-12 col-lg-12 float-left">
			                    <div class="wt-articlesingle-holder wt-bgwhite">
			                        <div class="wt-articlesingle-content">
			                            <figure class="wt-singleimg-one">
			                                <img src="<?php the_post_thumbnail_url(); ?>" alt="img description">
			                            </figure>
			                            <div class="wt-title">
			                                <h2> <?php  echo get_the_title(); ?></h2>
			                            </div>
			                            <ul class="wt-postarticlemeta">
			                                <li>
			                                    <a href="javascript:void(0);">
			                                        <i class="lnr lnr-calendar-full"></i>
			                                        <span><?php echo get_the_date() ?></span>
			                                    </a>
			                                </li>
			                                <li>
			                                    <a href="javascript:void(0);">
			                                        <i class="lnr lnr-user"></i>
			                                        <span> <?php  get_the_author_meta('first_name').' '.get_the_author_meta('last_name') ?></span>
			                                    </a>
			                                </li>
			                            </ul>
			                            <div class="wt-description">
			                            <?php echo get_the_content(); ?>
			                            </div>
			                            <div class="wt-tagsshare">
			                                <div class="wt-tag wt-widgettag">
			                                    <span>برچسب ها:</span>
                                                <?php 
                                                $post_tags = get_the_tags();
                                                if ( ! empty( $post_tags ) ) {
                                                  
                                                    foreach( $post_tags as $post_tag ) {
                                                        echo '<li><a href="' . get_tag_link( $post_tag ) . '">' . $post_tag->name . '</a></li>';
                                                    }
                                                  
                                                }
                                                ?>
			                                </div>
			                                <ul class="wt-socialiconssimple wt-blogsocialicons">
			                                    <li class="wt-sharejob"><span> این وبلاگ را به اشتراک بگذارید </span></li>
			                                    <li class="wt-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook-f"></i></a></li>
			                                    <li class="wt-twitter"><a href="javascript:void(0);"><i class="fab fa-twitter"></i></a></li>
			                                    <li class="wt-linkedin"><a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a></li>
			                                    <li class="wt-clone"><a href="javascript:void(0);"><i class="far fa-clone"></i></a></li>
			                                </ul>
			                            </div>

			                        </div>
			                    </div>
			                </div>
			            </div>
			        </div>
			    </div>
			    <!--Limitless Experience End-->
			</main>
			<!--Main End-->