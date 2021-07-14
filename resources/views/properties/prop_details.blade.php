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
                <h1><i class="fa fa-th"></i> property details</h1>

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
                            <a href="' . url('photos/originals/' . $pic) . '" data-lightbox="propPic">
                                <img src="' . url('photos/thumbs/' . $pic) . '" border="0" width="120">
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
                            echo number_format($refID->rel_price, 0);
                            echo ($categ->rel_status_type == 2)? "<span style=\"font-size:15px;\">/mon</span>" : "";
                            echo '
                        </article>
                    </li>';

                    ?>
                </ul>
            </section>

    @endsection