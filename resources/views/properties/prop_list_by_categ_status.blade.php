@extends('layouts.app')
    @section('content')

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
                <?php
                $categType = explode('-', $categName);
                $categType = implode(' ', $categType);

                $statusType = explode('-', $statType);
                $statusType = implode(' ', $statusType);
                ?>
                <h1><i class="fa fa-th"></i> {!! $categType !!} {!! $statusType !!}</h1>
                <ul class="list-ul">
                    <?php
                
                    $category_arr = array('1' => 'house', '2' => 'apartment', '3' => 'office space', '4' => 'store', '5' => 'warehouse', '6' => 'land');
                
                    $status_arr = array('1' => 'for sale', '2' => 'for rent');

                    $cnt = 1;
                    $cntList = 0;

                    foreach ($getLists as $proplist) {
                        $cntList = 1;
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
                    


                        $proplist_link = explode(' ', $category_arr[$proplist->rel_category]);
                        $proplist_link = implode('-', $proplist_link);

                        $status_link = explode(' ', $status_arr[$proplist->rel_status_type]);
                        $status_link = implode('-', $status_link);


                        if ($cnt%3 == 2) { echo '<li id="mid">'; }
                        else { echo '<li>'; }
                        echo '
                            <section id="photo" style="background: url(photos/thumbs/' . $proplist->rel_photo_rep . ') no-repeat bottom center; background-size: cover;"></section>

                            <article id="title">
                                <a href="' . url('/properties/' . $proplist_link .'/'. $status_link . '/' . $proplist->rel_ref_id) . '">' . $title . ' ' . $category_arr[$proplist->rel_category] . ' ' . $status_arr[$proplist->rel_status_type] . '</a>
                            </article>

                            <article id="loc">
                                <i class="fa fa-map-marker"></i> ' . $proplist->rel_address . ', ' . $proplist->rel_town . '
                            </article>
                            
                            ' . $specs . '
                            
                            <article id="price">';
                                echo ($proplist->rel_curr == 1) ? 'GH&cent;' : '$';
                                echo number_format($proplist->rel_price, 0);
                                echo ($proplist->rel_status_type == 2)? "<span style=\"font-size:15px;\">/mon</span>" : "";
                                echo '
                            </article>
                            
                            <article id="view-details">
                                <a href="' . url('/properties/' . $proplist_link .'/'. $status_link . '/' . $proplist->rel_ref_id) . '">view details</a>
                            </article>
                        </li>';

                        $cnt++;
                    }
                    ?>
                </ul>
                
                @if($cntList == 0)
                <center style="display: block; margin-top: 50px;">
                    
                    <strong>0</strong> results for <strong>{!! $categType !!} {!! $statusType !!}</strong>
                    <p>
                        Call: +233 <strong>24 406 2242</strong> / +233 <strong>20 704 9559</strong><br>
                        or Email: <a href="mailto:info@maqurarealty.com">info@maqurarealty.com</a><br>
                        for more information.

                    </p>
                </center>
                @endif

                <article id="paginate">
                    {!! $getLists->render() !!}
                </article>
            </section>

    @endsection