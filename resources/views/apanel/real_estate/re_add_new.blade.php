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
            <form action="{{ url('/apanel/realestate/addnew') }}" method="POST" enctype="multipart/form-data" class="addNewFrm">
                {{ csrf_field() }}
                <article>
                    <h2>Reference Number:</h2>
                    <input type="text" name="anRefID" value="{{ $refID = 'MR-' . rand(11,99) . '-' . rand(1111,9999) }}" disabled="disabled">
                    <input type="hidden" name="anRefID" value="{{ $refID }}">
                </article>

                <article>
                    <h2>Category:</h2>
                    <select name="anCateg">
                        @foreach($getMainCategories as $mainCategs)
                        <option value="{{ $mainCategs->rec_id }}">{{ $mainCategs->rec_name }}</option>
                        @endforeach
                    </select>
                </article>

                <article class="stat">
                    <h2>Status:</h2>
                    <label><input type="radio" name="anStatus" value="1" checked="checked"> For Sale</label>
                    <label><input type="radio" name="anStatus" value="2"> For Rent</label>
                </article>

                <article class="offer-photos">
                    <h2>photos:</h2>

                    <?php
                    for($i = 0; $i < 8; $i++) {
                        echo '
                        <label class="picHolder">
                            <article id="imgHolder' . $i . '">
                                <i class="fa fa-camera"></i>
                            </article>
                            <input type="file" name="anPhotos[]" onchange="readURL(this, \'#imgHolder' . $i . '\');" />
                            
                        </label>';
                    }?>

                    <script type="text/javascript">
                        function readURL(input, imgHolder) {
                            $(imgHolder).empty();

                            if (input.files && input.files[0]) {

                                var imgPath = $(input)[0].value;
                                var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();

                                
                                if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
                                    if (typeof (FileReader) != "undefined") {
                                        var reader = new FileReader();

                                        reader.onload = function (e) {
                                            
                                            $("<img />", {
                                                "src": e.target.result,
                                                "class": "thumb-image"
                                            }).appendTo(imgHolder);

                                            /**/$("<input />", {
                                                "type": "radio",
                                                "name": "anDefImg",
                                                "class": "default-img",
                                                "checked": "checked",
                                                "value": imgHolder
                                            }).appendTo(imgHolder);

                                        }
                                        $(imgHolder).show();

                                        $(imgHolder+" .fa-camera").hide();
                                        reader.readAsDataURL(input.files[0]);

                                    } else {
                                        alert("This browser does not support FileReader.");
                                    }

                                } else {
                                    alert("Pls select only images");
                                }
                            }
                        }
                    </script>
                </article>


                <article>
                    <h2>Price:</h2>
                    <select name="anCurr" id="small">
                        @foreach($getCurrencies as $curr)
                        <option value="{{ $curr->curr_id }}">{{ $curr->curr_sign }}</option>
                        @endforeach
                    </select>
                    <input type="number" name="anPrice" placeholder="0" id="smallPrice">
                </article>

                <article>
                    <h2>bed:</h2>
                    <input type="number" name="anBed" placeholder="0" id="small">
                </article>
                <article>
                    <h2>bath:</h2>
                    <input type="number" name="anBath" placeholder="0" id="small">
                </article>
                <article>
                    <h2>garage:</h2>
                    <input type="number" name="anGarage" placeholder="0" id="small">
                </article>
                <article>
                    <h2>gym:</h2>
                    <input type="number" name="anGym" placeholder="0" id="small">
                </article>
                <article>
                    <h2>pool:</h2>
                    <input type="number" name="anPool" placeholder="0" id="small">
                </article>

                <article>
                    <h2>region:</h2>
                    <select name="anRegion">
                        @foreach($getRegions as $getRegions)
                        <option value="{{ $getRegions->reg_id }}">{{ $getRegions->reg_name }}</option>
                        @endforeach
                    </select>
                </article>

                <article>
                    <h2>town:</h2>
                    <input type="text" name="anTown">
                </article>

                <article>
                    <h2>address:</h2>
                    <input type="text" name="anAddress">
                </article>

                <article>
                    <h2>description:</h2>
                    <textarea name="anDesc"></textarea>
                </article>

                <article>
                    <label><input type="checkbox" name="anFeat" value="1"> Featured</label>
                </article>

                <article>
                    <label><input type="checkbox" name="anVisible" value="0"> Visible</label>
                </article>

                <button>Save</button>
            </form>
        </section>
    </section>
</section>
@endsection
