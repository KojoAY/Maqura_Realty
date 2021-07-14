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
                        <ul>
                            <li><a href="/apanel/realestate/addnew">Add New</a></li>
                        </ul>
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
        <h1>real estate</h1>

        <form action="" method="" class="filterFrm">
            <input type="text" name="" placeholder="Filter List"><!--
            --><button class="fa fa-search"></button>
        </form>

        <article class="topTabs">
            <a href="/apanel/realestate">List</a>
            | 
            <a href="/apanel/realestate/addnew">Add New</a>
        </article>

        <article class="latest-list">
            <ul class="list-ul">
                    <?php
                    $category_arr = array('1' => 'house', '2' => 'apartment', '3' => 'office space', '4' => 'store', '5' => 'warehouse', '6' => 'land');
                
                    $status_arr = array('1' => 'for sale', '2' => 'for rent');

                    $cnt = 1;
                    $cntList = 0;

                    foreach ($propertyList as $propList) {
                        $cntList = 1;
                        if($propList->rel_bed == 0){
                            $title = '';
                            /*$specs = '';*/

                        } else {
                            $title = $propList->rel_bed . ' bedroom';
                            /*$specs = '<article id="specs">
                                    <i class="fa fa-bed"></i> ' . $propList->rel_bed . '
                                    <span id="sep-h">|</span>
                                    <i class="re re-bathroom"></i> ' . $propList->rel_bath . '
                                </article>';*/
                        }
                    

                        /*
                        @$categ_link = explode(' ', $category_arr[$propList->rel_category]);
                        @$categ_link = implode('-', $categ_link);

                        @$status_link = explode(' ', $status_arr[$propList->rel_status_type]);
                        @$status_link = implode('-', $status_link);*/


                        if ($cnt%3 == 2) { echo '<li id="mid">'; }
                        else { echo '<li>'; }
                        echo '
                            <section id="photo" style="background: url(/photos/thumbs/' . $propList->rel_photo_rep . ') no-repeat bottom center; background-size: cover;">';
                                
                                echo ($propList->rel_featured == 1) ? "<span id=\"featTag\">Featured</span>" : "";
                            
                            echo '
                            </section>

                                

                            <article id="title">
                                ' . @$title . ' ' . @$category_arr[$propList->rel_category] . ' ' . @$status_arr[$propList->rel_status_type] . '
                            </article>

                            <article id="loc">
                                <i class="fa fa-map-marker"></i> ' . @$propList->rel_address . ', ' . @$propList->rel_town . '
                            </article>
                            
                            <article id="price">';
                                echo ($propList->rel_curr == 1) ? 'GH&cent;' : '$';
                                echo number_format($propList->rel_price, 0);

                                echo ($propList->rel_status_type == 2) ? "/mon" : "";

                                echo '
                            </article>
                            
                            <article id="refID">
                            ' . $propList->rel_ref_id . '
                            </article>
                            
                            <article class="actionsBtn">
                                <a href="' . url('apanel/realestate/edit/' . $propList->rel_ref_id) . '" class="fa fa-edit"></a>
                                <a href="' . url('apanel/realestate/delete/' . $propList->rel_ref_id) . '" class="fa fa-trash"></a>
                                <a href="' . url('apanel/realestate/details/' . $propList->rel_ref_id) . '" id="viewDetails">Details</a>
                            </article>
                        </li>';

                        $cnt++;
                    }
                    ?>
                </ul>

                @if($cntList == 0)
                <center style="display: block; margin-top: 50px;">
                    
                    No properties list yet!
                    <p>
                        Call: +233 <strong>24 406 2242</strong> / +233 <strong>27 703 1337</strong><br>
                        or Email: <a href="mailto:info@maqurarealty.com">info@maqurarealty.com</a><br>
                        for more information.

                    </p>
                </center>
                @endif

                <article id="paginate">
                    {!! $propertyList->render() !!}
                </article>
        </article>
    </section>
</section>
@endsection
