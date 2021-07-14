@extends('layouts.apanel')

@section('content')
<section class="container">
    <header>
        <article class="leftSide">
            <nav class="mmenu">
                <a class="fa fa-navicon"></a>
                <ul class="mmenuUl">
                    <li>
                        <a href="">Dashboard</a>
                    </li>
                    <li>
                        <a href="/apanel/realestate">Real Estate</a>
                    </li>
                </ul>
            </nav>
            <img src="{{ asset('images/brimstonecms_logo.png') }}" alt="Brimstone CMS">
        </article>

        <article class="rightSide">
            <nav>
                {{ Session::get("AdminName") }} <a class="fa fa-caret-down"></a>
            </nav>
        </article>
    </header>

    <section class="contentBlock">
        <h1>real estate details</h1>

        <form action="" method="" class="filterFrm">
            <input type="text" name="" placeholder="Filter List"><!--
            --><button class="fa fa-search"></button>
        </form>

        <article class="topTabs">
            <a href="/apanel/realestate">List</a>
            | 
            <a href="/apanel/realestate/addnew">Add New</a>
        </article>

        <section class="latest-list">

            <ul class="details-ul">
                <?php
                $category_arr = array('1' => 'house', '2' => 'apartment', '3' => 'office space', '4' => 'store', '5' => 'warehouse', '6' => 'land');
                $status_arr = array('1' => 'for sale', '2' => 'for rent');

                if($refID->rel_bed == 0){
                    $title = '';
                    $specs = '
                            <article id="specs">
                                <i class="fa fa-bed"></i> 3
                                <span id="sep-h">|</span>
                                <i class="re re-bathroom"></i> 4
                            </article>';

                } else {
                    $title = $refID->rel_bed . ' bedroom';
                    $specs = '<article id="specs">
                            <i class="fa fa-bed"></i> ' . $refID->rel_bed . '
                            <span id="sep-h">|</span>
                            <i class="re re-bathroom"></i> ' . $refID->rel_bath . '
                        </article>';
                }

                $photos = explode(' ', $refID->rel_photos);

                
                echo '
                <li id="mid">
                    <h2 id="title">
                        ' . $title . ' ' . $category_arr[$refID->rel_category] . ' ' . $status_arr[$refID->rel_status_type] . '
                    </h2>

                    <article id="loc">
                        <i class="fa fa-map-marker"></i> ' . $refID->rel_address . ', ' . $refID->rel_town . '
                    </article>

                    <article id="photos">';
                    foreach ($photos as $pic) {
                        echo '
                        <a href="' . url('photos/' . $pic) . '" data-lightbox="propPic">
                            <img src="' . url('photos/' . $pic) . '" border="0">
                        </a>';
                    }
                    
                    echo '
                    </article>
                </li>
                
                <li>
                    <article id="prop-id">
                        <strong>Property ID:</strong> <b>' . $refID->rel_ref_id . '</b>
                    </article>

                    <article id="description">
                        <h3>Description</h3>
                        '. $refID->rel_description .'
                    </article>
                    
                    ' . $specs . '
                    
                    <article id="price">';
                        echo ($refID->rel_curr == 1) ? 'GH&cent;' : '$';
                        echo number_format($refID->rel_price, 0) . '
                    </article>
                </li>';

                ?>
            </ul>
        </section>
    </section>
</section>
@endsection
