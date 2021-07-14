<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $pageTitle }}</title>
        <meta name="description" content="{{ $pageDescription }}">
        <meta name="keywords" content="{{ $pageKeywords }}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Segoe UI:100,200,300,400,500,600,700,800" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{ url('css/font-awesome.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('css/font-bathtub.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('css/app-home-style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('css/app-list-style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('css/app-form-style.css') }}">

        <style>
            
            /* jssor slider bullet navigator skin 05 css */
            /*
            .jssorb05 div           (normal)
            .jssorb05 div:hover     (normal mouseover)
            .jssorb05 .av           (active)
            .jssorb05 .av:hover     (active mouseover)
            .jssorb05 .dn           (mousedown)
            */
            .jssorb05 {
                position: absolute;
            }
            .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
                position: absolute;
                /* size of bullet elment */
                width: 16px;
                height: 16px;
                background: url('img/b05.png') no-repeat;
                overflow: hidden;
                cursor: pointer;
            }
            .jssorb05 div { background-position: -7px -7px; }
            .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
            .jssorb05 .av { background-position: -67px -7px; }
            .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }

            /* jssor slider arrow navigator skin 22 css */
            /*
            .jssora22l                  (normal)
            .jssora22r                  (normal)
            .jssora22l:hover            (normal mouseover)
            .jssora22r:hover            (normal mouseover)
            .jssora22l.jssora22ldn      (mousedown)
            .jssora22r.jssora22rdn      (mousedown)
            */
            .jssora22l, .jssora22r {
                display: block;
                position: absolute;
                /* size of arrow element */
                width: 40px;
                height: 58px;
                cursor: pointer;
                background: url('img/a22.png') center center no-repeat;
                overflow: hidden;
            }
            .jssora22l { background-position: -10px -31px; }
            .jssora22r { background-position: -70px -31px; }
            .jssora22l:hover { background-position: -130px -31px; }
            .jssora22r:hover { background-position: -190px -31px; }
            .jssora22l.jssora22ldn { background-position: -250px -31px; }
            .jssora22r.jssora22rdn { background-position: -310px -31px; }
        </style>

        <script type="text/javascript" src="{{ url('/js/jquery.min.js') }}"></script>
    </head>
    <body>
        <section class="main-block-holder">
            <header>
                <section class="top-bar">
                    <article class="left-side">
                        <a href="{{ url('/') }}" class="fa fa-home"></a>
                        <span id="sep-h">|</span>
                        <a href="{{ url('about-us') }}">about us</a>
                    </article>

                    <article class="right-side">
                        <span id="mobi-hide">
                            +233 <strong>24 406 2242</strong> / +233 <strong>20 704 9559</strong>
                        </span>
                        <span>
                            <span id="sep-h">|</span>
                            <a href="{{ url('contact-us') }}" class="fa fa-envelope"></a>
                            <span id="sep-h">|</span>
                            <a href="https://www.facebook.com/maqurarealty" target="_blank" class="fa fa-facebook"></a>
                            <a href="https://www.instagram.com/maqurarealty" target="_blank" class="fa fa-instagram"></a>
                            <a href="https://www.twitter.com/maqurarealty" target="_blank" class="fa fa-twitter"></a>
                            <a href="https://www.linkedin.com/maqurarealty" target="_blank" class="fa fa-linkedin"></a>
                        </span>
                    </article>
                </section>

                <section class="siteName-menu">
                    <article class="site-name">
                        <a href="{{ url('/') }}">
                            <img src="{{ url('images/maqura-realty-logo.png') }}" alt="Maqura Realty" title="Maqura Realty" border="0">
                        </a>
                    </article>

                    <nav class="main-menu">
                        <a class="navicon">
                            <i class="fa fa-navicon"></i> MENU
                        </a>
                        <ul>
                            <li id="l-red">
                                <a>properties <i class="fa fa-angle-down"></i></a>

                                <ol>
                                    <li>
                                        <a href="{{ url('properties/houses') }}">houses</a>
                                        <article id="stat">
                                            <a href="{{ url('properties/houses/for-sale') }}">for sale</a>
                                            <a href="{{ url('properties/houses/for-rent') }}">for rent</a>
                                        </article>
                                    </li>
                                    <li>
                                        <a href="{{ url('properties/apartments') }}">apartments</a>
                                        <article id="stat">
                                            <a href="{{ url('properties/apartments/for-sale') }}">for sale</a>
                                            <a href="{{ url('properties/apartments/for-rent') }}">for rent</a>
                                        </article>
                                    </li>
                                    <li>
                                        <a href="{{ url('properties/office-spaces') }}">office spaces</a>
                                        <article id="stat">
                                            <a href="{{ url('properties/office-spaces/for-sale') }}">for sale</a>
                                            <a href="{{ url('properties/office-spaces/for-rent') }}">for rent</a>
                                        </article>
                                    </li>
                                    <li>
                                        <a href="{{ url('properties/lands') }}">lands</a>
                                        <article id="stat">
                                            <a href="{{ url('properties/lands/for-sale') }}">for sale</a>
                                        </article>
                                    </li>
                                </ol>
                            </li>
                            <li id="l-gold">
                                <a>what we do</a>
                                <ol>
                                    <li>
                                        <a href="">real estate agency</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('property-management') }}">property management</a>
                                    </li>
                                    <!--li>
                                        <a href="{{ url('property-management') }}">architectual design</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('property-management') }}">interior design</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('property-management') }}">building construction</a>
                                    </li-->
                                </ol>
                            </li>
                            <li id="l-green">
                                <a href="{{ url('contact-us') }}">contact us</a>
                            </li>
                        </ul>
                    </nav>
                </section>
            </header>

            <section class="banner">
                
                <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; min-width: 100% !important; min-height: 100vh; overflow:hidden; visibility: hidden; z-index: 999">
                    <!-- Loading Screen -->
                    <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                        <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100vh;"></div>
                        <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100vh;"></div>
                    </div>
        
                    <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; min-width: 100vw !important; min-height: 100vh; overflow: hidden;">
                        
                            
                            <?php
                            $category_arr = array('1' => 'house', '2' => 'apartment', '3' => 'office space', '4' => 'store', '5' => 'warehouse', '6' => 'land');

                            $status_arr = array('1' => 'for sale', '2' => 'for rent');
                                
                            foreach ($featuredlist as $featlist) {
                                echo '
                                <div data-p="225.00" style="display: none; background: url(photos/thumbs/' . $featlist->rel_photo_rep . ') no-repeat bottom center; background-size: cover;">
                                <section class="banner-block" style="">
                                <article class="banner-details">';
                                        if($featlist->rel_bed == 0){
                                            $title = '';
                                            $specs = '';
                                        } else {
                                            $title = $featlist->rel_bed . ' bedroom';
                                            $specs = '<article class="specs">
                                                    <span><i class="fa fa-bed"></i> ' . $featlist->rel_bed . '</span>

                                                    <span id="sep-h">|</span>

                                                    <span><i class="re re-bathroom"></i> ' . $featlist->rel_bath . '</span>
                                                </article>';
                                        }


                                        $categ_link = explode(' ', $category_arr[$featlist->rel_category]);
                                        $categ_link = implode('-', $categ_link);

                                        $status_link = explode(' ', $status_arr[$featlist->rel_status_type]);
                                        $status_link = implode('-', $status_link);

                                        echo '
                                    <article id="prop-title">
                                        <h1>' . $title . ' ' . $category_arr[$featlist->rel_category] . ' ' . $status_arr[$featlist->rel_status_type] . '</h1>
                                        <div id="loc">
                                            <i class="fa fa-map-marker"></i> ' . $featlist->rel_town . '
                                        </div>
                                    </article>

                                    <article id="desc">';
                                        $description = '';

                                        $desc = preg_replace('/\s+/', ' ', strip_tags($featlist->rel_description));
                                        $desc = explode(' ', $desc);

                                        for($i = 0; $i < 15; $i++){
                                            @$description .= $desc[$i] . ' ';
                                        }
                                        echo  $description . ' ...
                                    </article>
                                    
                                    ' . $specs . '

                                    <article id="price">';
                                        echo ($featlist->rel_curr == 1) ? 'GH&cent;' : '$';
                                            echo number_format($featlist->rel_price, 0) . '
                                    </article>

                                    <a href="' . url('/properties/' . $categ_link .'/'. $status_link . '/' . $featlist->rel_ref_id) . '" id="details">details</a>';
                                    
                                    echo '</div>';
                                }
                                
                            ?>
                    </div>
                    <!-- Bullet Navigator -->
                    <!--div data-u="navigator" class="jssorb05" style="bottom:50px;right:16px;" data-autocenter="1"-->
                        <!-- bullet navigator item prototype -->
                        <!--div data-u="prototype" style="width:16px;height:16px;"></div>
                    </div-->
                    <!-- Arrow Navigator -->
                    <span data-u="arrowleft" class="jssora22l" style="top:0px;left:12px;width:40px;height:58px;" data-autocenter="2"><i class="fa fa-angle-left"></i></span>
                    <span data-u="arrowright" class="jssora22r" style="top:0px;right:12px;width:40px;height:58px;text-align: right;" data-autocenter="2"><i class="fa fa-angle-right"></i></span>
                </div>

            </section>

            <section class="filter-block">
                <form action="{{ url('/filter') }}" method="GET" enctype="">

                    <h1><i class="fa fa-filter"></i> filter</h1>
                    <div id="cap">
                        Find a desired property by your specifications.
                    </div>

                    <span>
                        <select name="fc">
                            <option value="">[Property Type]</option>
                            <option <?php echo (@$_GET['fc'] == 'house') ? 'selected="selected"' :'';?>>house</option>
                            <option <?php echo (@$_GET['fc'] == 'apartment') ? 'selected="selected"' :'';?>>apartment</option>
                            <option <?php echo (@$_GET['fc'] == 'office space') ? 'selected="selected"' :'';?>>office space</option>
                            <option <?php echo (@$_GET['fc'] == 'land') ? 'selected="selected"' :'';?>>land</option>
                        </select>
                    </span>

                    <span>
                        <select name="fs">
                            <option value="">[Status]</option>
                            <option <?php echo (@$_GET['fs'] == 'For Sale') ? 'selected="selected"' :'';?>>For Sale</option>
                            <option <?php echo (@$_GET['fs'] == 'For Rent') ? 'selected="selected"' :'';?>>For Rent</option>
                        </select>
                    </span>

                    <span>
                        <select name="fl">
                            <option value="">[Location]</option>
                            <option <?php echo (@$_GET['fl'] == 'Oyibi') ? 'selected="selected"' :'';?>>Oyibi</option>
                            <option <?php echo (@$_GET['fl'] == 'Oyarifa') ? 'selected="selected"' :'';?>>Oyarifa</option>
                            <option <?php echo (@$_GET['fl'] == 'Pokuase') ? 'selected="selected"' :'';?>>Pokuase</option>
                            <option <?php echo (@$_GET['fl'] == 'Kwabenya') ? 'selected="selected"' :'';?>>Kwabenya</option>
                            <option <?php echo (@$_GET['fl'] == 'Tema') ? 'selected="selected"' :'';?>>Tema</option>
                        </select>
                    </span>

                    <span class="bed-bath">
                        <select name="fbd">
                            <option value="">[Beds]</option>
                            <option <?php echo (@$_GET['fbd'] == '1') ? 'selected="selected"' :'';?>>1</option>
                            <option <?php echo (@$_GET['fbd'] == '2') ? 'selected="selected"' :'';?>>2</option>
                            <option <?php echo (@$_GET['fbd'] == '3') ? 'selected="selected"' :'';?>>3</option>
                            <option <?php echo (@$_GET['fbd'] == '4') ? 'selected="selected"' :'';?>>4</option>
                            <option <?php echo (@$_GET['fbd'] == '5') ? 'selected="selected"' :'';?>>5</option>
                            <option <?php echo (@$_GET['fbd'] == '6') ? 'selected="selected"' :'';?>>6</option>
                            <option <?php echo (@$_GET['fbd'] == '7') ? 'selected="selected"' :'';?>>7</option>
                            <option <?php echo (@$_GET['fbd'] == '8') ? 'selected="selected"' :'';?>>8</option>
                            <option <?php echo (@$_GET['fbd'] == '9') ? 'selected="selected"' :'';?>>9</option>
                            <option <?php echo (@$_GET['fbd'] == '10') ? 'selected="selected"' :'';?>>10</option>
                        </select>
                    </span>

                    <span class="bed-bath">
                        <select name="fbt">
                            <option value="">[Baths]</option>
                            <option <?php echo (@$_GET['fbt'] == '1') ? 'selected="selected"' :'';?>>1</option>
                            <option <?php echo (@$_GET['fbt'] == '2') ? 'selected="selected"' :'';?>>2</option>
                            <option <?php echo (@$_GET['fbt'] == '3') ? 'selected="selected"' :'';?>>3</option>
                            <option <?php echo (@$_GET['fbt'] == '4') ? 'selected="selected"' :'';?>>4</option>
                            <option <?php echo (@$_GET['fbt'] == '5') ? 'selected="selected"' :'';?>>5</option>
                            <option <?php echo (@$_GET['fbt'] == '6') ? 'selected="selected"' :'';?>>6</option>
                            <option <?php echo (@$_GET['fbt'] == '7') ? 'selected="selected"' :'';?>>7</option>
                            <option <?php echo (@$_GET['fbt'] == '8') ? 'selected="selected"' :'';?>>8</option>
                            <option <?php echo (@$_GET['fbt'] == '9') ? 'selected="selected"' :'';?>>9</option>
                            <option <?php echo (@$_GET['fbt'] == '10') ? 'selected="selected"' :'';?>>10</option>
                        </select>
                    </span>

                    <span class="price">
                        <select name="fcur">
                            <option <?php echo (@$_GET['fcur'] == 'GHS') ? 'selected="selected"' :'';?>>GHS</option>
                            <option <?php echo (@$_GET['fcur'] == 'USD') ? 'selected="selected"' :'';?>>USD</option>
                        </select>
                        <input type="text" name="fmxp" value="<?php echo @$_GET['fmxp'];?>" placeholder="Max. Price">
                    </span>

                    <span id="submit">
                        <button type="submit">
                            <i class="fa fa-search"></i> Start Search
                        </button>
                    </span>
                </form>
            </section>

            <section class="latest-list">
                <h1><i class="fa fa-th"></i> latest listing</h1>
                <ul class="list-ul">
                    <?php
                    $cnt = 1;
                    $category_arr = array('1' => 'house', '2' => 'apartment', '3' => 'office space', '4' => 'store', '5' => 'warehouse', '6' => 'land');
                    $status_arr = array('1' => 'for sale', '2' => 'for rent');

                    foreach ($propertylist as $proplist) {
                        if($proplist->rel_bed == 0){
                            $title = '';
                            $specs = '
                                    <article id="specs">
                                        <i class="fa fa-bed"></i> 3
                                        <span id="sep-h">|</span>
                                        <i class="re re-bathroom"></i> 4
                                    </article>';

                        } else {
                            $title = $proplist->rel_bed . ' bedroom';
                            $specs = '<article id="specs">
                                    <i class="fa fa-bed"></i> ' . $proplist->rel_bed . '
                                    <span id="sep-h">|</span>
                                    <i class="re re-bathroom"></i> ' . $proplist->rel_bath . '
                                </article>';
                        }



                        $categ_link = explode(' ', $category_arr[$proplist->rel_category]);
                        $categ_link = implode('-', $categ_link);

                        $status_link = explode(' ', $status_arr[$proplist->rel_status_type]);
                        $status_link = implode('-', $status_link);



                        if ($cnt%3 == 2) { echo '<li id="mid">'; }
                        else { echo '<li>'; }
                        echo '
                            <section id="photo" style="background: url(photos/thumbs/' . $proplist->rel_photo_rep . ') no-repeat bottom center; background-size: cover;"></section>

                            <article id="title">
                                <a href="' . url('/properties/' . $categ_link .'/'. $status_link . '/' . $proplist->rel_ref_id) . '">' . $title . ' ' . $category_arr[$proplist->rel_category] . ' ' . $status_arr[$proplist->rel_status_type] . '</a>
                            </article>

                            <article id="loc">
                                <i class="fa fa-map-marker"></i> ' . $proplist->rel_town . '
                            </article>
                            
                            ' . $specs . '
                            
                            <article id="price">';
                                echo ($proplist->rel_curr == 1) ? 'GH&cent;' : '$';
                                echo number_format($proplist->rel_price, 0) . '
                            </article>
                            
                            <article id="view-details">
                                <a href="' . url('/properties/' . $categ_link .'/'. $status_link . '/' . $proplist->rel_ref_id) . '">view details</a>
                            </article>
                        </li>';

                        $cnt++;
                    }
                    ?>
                </ul>

                <article class="browse-list">
                    <a href="{{ url('properties') }}" id="more">browse properties</a>
                </article>
            </section>

            <section class="about-services">
                <ul>
                    <li class="about">
                        <h1>welcome to Maqura Realty</h1>
                        <p>
                            Maqura Realty is a real estate agency and property management company with a commitment to delivering high-quality, efficient and personal service covering sale, acquisition, letting and management of properties.
                        </p>
                        <a href="{{ url('about-us') }}" id="more">learn more</a>
                    </li>
                    <li class="services">
                        <article>
                            <i class="fa fa-institution"></i>
                            <h3>property sale &amp; rent</h3>
                            <p>
                                 Are you looking to sell or let your property? As prime real estate market leaders we work closely with very experienced partners across the globe to ensure our properties for sale &amp; lettings get maximum national and international coverage. Or are you looking for a property to buy or rent...?
                            </p>
                            <a href="{{ url('properties') }}" id="more">browse properties</a>
                        </article>

                        <article>
                            <i class="fa fa-cogs"></i>
                            <h3>property management</h3>
                            <p>
                                Our property management services involves the application of value added strategies and excellent innovative solutions required to manage the life cycle of all acquired property, including acquisition, control, accountability, responsibility, maintenance, utilization, and disposition.
                            </p>
                            <a href="{{ url('property-management') }}" id="more">learn more</a>
                        </article>
                    </li>
                </ul>
            </section>

            <section class="contact-info">
                <ul>
                    <li>
                        <h3><i class="fa fa-map-marker"></i> location</h3>
                        Star Tower, R2, Abia, Ningo-Prampram, <br>Greater Accra, Ghana.
                    </li>
                    <li>
                        <h3><i class="fa fa-clock-o"></i> work hours</h3>
                        Monday to Friday - 8am to 5pm<br>
                        Saturday - 8am to 2pm
                    </li>
                    <li>
                        <h3><i class="fa fa-phone"></i> telephone</h3>
                        +233 24 406 2242<br>
                        +233 20 704 9559
                    </li>
                    <li>
                        <h3><i class="fa fa-envelope-o"></i> email</h3>
                        <a href="mailto:info@maqurarealty.com">info@maqurarealty.com</a><br>
                        <a href="mailto:maqurarealty@gmail.com">maqurarealty@gmail.com</a>
                    </li>
                </ul>
            </section>

            <footer>
                <ul class="color-bars">
                    <li id="c-red"></li>
                    <li id="c-gold"></li>
                    <li id="c-green"></li>
                    <li id="c-black"></li>
                </ul>
                <article class="info">
                    <article class="socmed">
                        <a href="https://www.facebook.com/maqurarealty" target="_blank" class="fa fa-facebook"></a>
                        <a href="https://www.instagram.com/maqurarealty" target="_blank" class="fa fa-instagram"></a>
                        <a href="https://www.twitter.com/maqurarealty" target="_blank" class="fa fa-twitter"></a>
                        <a href="https://www.linkedin.com/maqurarealty" target="_blank" class="fa fa-linkedin"></a>
                    </article>
                    Copyright &copy;{{ date("Y") }} Maqura Realty<br>
                    
                </article>
            </footer>
        </section>
    </body>
</html>


<script type="text/javascript" src="{{ url('/js/jssor.slider.mini.js') }}"></script>
    <!-- use jssor.slider.debug.js instead for debug -->
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            
            var jssor_1_SlideshowTransitions = [
              {$Duration:500,$Opacity:2}
            ];
            
            var jssor_1_options = {
              $AutoPlay: true,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1920);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 100);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>