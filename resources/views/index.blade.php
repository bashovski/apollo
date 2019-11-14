@extends('layouts.app')
@section('content')
    <div id="apollo_jumbotron_landing" class="jumbotron shadow-lg">
        <div id="apollo_jumbotron_items">
            <div id="apollo_jumbotron_heading" class="apollo_jumbotron_centered_parent">
                <h1 class="apollo_jumbotron_heading1">Find yourself a new Home</h1>
            </div>
            <div id="apollo_jumbotron_desc" class="apollo_jumbotron_centered_parent">
                <p class="apollo_jumbotron_paragraph">When it comes to real estate, Apollo is crème de la crème.</p>
            </div>
            <div id="apollo_jumbotron_btn" class="apollo_jumbotron_centered_parent">
                <button class="apollo_btn_primary">See what do we have to offer</button>
            </div>
            <form id="apollo_jumbotron_search_form" action="">
                <div class="p-1 bg-light w-50 rounded rounded-pill shadow-sm mb-4">
                    <div class="input-group">
                        <input id="apollo_jumbotron_search_input" placeholder="Search for properties without any effort (e.g. Address, City, State)..." style="border-radius: 50px;"
                               class="form-control border-0 bg-light" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false">
                        <div class="input-group-append">
                            <button id="button-addon1" type="submit" class="btn btn-link text-primary">
                                <img src="/svg/apollo_search.svg" alt="" width="24" height="24">
                            </button>
                        </div>
                    </div>
                </div>
            </form>
            <div id="apollo_jumbotron_arrow_scrolldown" class="apollo_jumbotron_centered_parent">
                <img height="48" width="48" src="/svg/apollo_down_arrow.svg">
            </div>
        </div>
    </div>
    <div id="apollo_search" style="margin-bottom: 10vh">
        <div id="apollo_search_filter_tools">
            <div id="apollo_search_banner" class="row">
                <div style="vertical-align: middle">
                    <img style="vertical-align: text-bottom;" height="52" width="52" src="/svg/apollo_properties_lg.svg" alt="">
                    <span style="padding-left: 10px;">SEARCH FOR PROPERTIES</span>
                </div>
            </div>
        </div>
        <div id="apollo_search_property_filter">
            <div class="apollo_search_property_filter_item">
                <img class="apollo_search_filter_icon" height="18" width="18" src="/svg/apollo_forsale.svg">
                <span>For sale</span>
            </div>
            <div class="apollo_search_property_filter_item">
                <img class="apollo_search_filter_icon" height="18" width="18" src="/svg/apollo_rent.svg">
                <span>For rent</span>
            </div>
            <div class="apollo_search_property_filter_item">
                <img class="apollo_search_filter_icon" height="18" width="18" src="/svg/apollo_office.svg">
                <span>Office</span>
            </div>
            <div class="apollo_search_property_filter_item">
                <img class="apollo_search_filter_icon" height="18" width="18" src="/svg/apollo_business.svg">
                <span>Business</span>
            </div>
            <div class="apollo_search_property_filter_item">
                <img class="apollo_search_filter_icon" height="18" width="18" src="/svg/apollo_detached.svg">
                <span>Detached</span>
            </div>
            <div class="apollo_search_property_filter_item">
                <img class="apollo_search_filter_icon" height="18" width="18" src="/svg/apollo_new.svg">
                <span>Newly built</span>
            </div>
        </div>
        <div id="apollo_search_properties_container">
            <form id="apollo_search_fields" action="" method="post" enctype="multipart/form-data">
                @csrf
                <div id="apollo_search_left_half">
                    <input id="apollo_search_field" placeholder="Address, City, State, etc." type="text" class="form-control">
                    <div class="dropdown show" style="width: 20%;">
                        <a id="apollo_dropdown_button" class="btn dropdown-toggle" href="#" role="button" data-toggle="dropdown" >
                            <span style="vertical-align: middle;">+ 0 km</span>
                            <img src="/svg/apollo_down_caret.svg" height="14" width="14" style="vertical-align: middle;" alt="">
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item">+ 1 km</a>
                            <a class="dropdown-item">+ 2 km</a>
                            <a class="dropdown-item">+ 5 km</a>
                            <a class="dropdown-item">+ 10 km</a>
                            <a class="dropdown-item">+ 25 km</a>
                            <a class="dropdown-item">+ 50 km</a>
                            <a class="dropdown-item">+ 100 km</a>
                        </div>
                    </div>
                </div>
                <div id="apollo_search_right_half">
                    <div class="dropdown show" style="width: 30%;">
                        <a id="apollo_dropdown_button" class="btn dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                           style="border-radius: 3px 0 0 3px;">
                            <span style="vertical-align: middle;">From</span>
                            <span style="vertical-align: middle;">€ 0</span>
                            <img src="/svg/apollo_down_caret.svg" height="14" width="14" style="vertical-align: middle;" alt="">
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item">€ 0</a>
                            <a class="dropdown-item">€ 25 000</a>
                            <a class="dropdown-item">€ 50 000</a>
                            <a class="dropdown-item">€ 100 000</a>
                            <a class="dropdown-item">€ 250 000</a>
                            <a class="dropdown-item">€ 500 000</a>
                            <a class="dropdown-item">€ 750 000</a>
                            <a class="dropdown-item">€ 1 000 000</a>
                            <a class="dropdown-item">€ Over a million</a>
                        </div>
                    </div>
                    <div class="dropdown show" style="width: 30%; margin-left: 3px">
                        <a id="apollo_dropdown_button" class="btn dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                           style="border-radius: 0 3px 3px 0;">
                            <span style="vertical-align: middle;">To</span>
                            <span style="vertical-align: middle;">€ 0</span>
                            <img src="/svg/apollo_down_caret.svg" height="14" width="14" style="vertical-align: middle;" alt="">
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item">€ 0</a>
                            <a class="dropdown-item">€ 25 000</a>
                            <a class="dropdown-item">€ 50 000</a>
                            <a class="dropdown-item">€ 100 000</a>
                            <a class="dropdown-item">€ 250 000</a>
                            <a class="dropdown-item">€ 500 000</a>
                            <a class="dropdown-item">€ 750 000</a>
                            <a class="dropdown-item">€ 1 000 000</a>
                            <a class="dropdown-item">€ Over a million</a>
                        </div>
                    </div>
                    <button id="apollo_search_button" class="apollo_btn_primary" type="button">
                        <img class="apollo_search_filter_icon" height="18" width="18" src="/svg/apollo_search_sm.svg">
                        <span>Search</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div id="apollo_recent_properties" class="container apollo_container" style="margin-bottom: 300px">
        <h2 class="apollo_heading2 d-flex justify-content-center">Recently added</h2>
        <div class="row mt-5">
            <div class="col">
                <div class="apollo_recent_item" style="background-image: url(/img/examplum1.jpg)">
                    <div class="apollo_recent_item_visits">
                        <img src="/svg/apollo_visits.svg" width="18" height="18" alt="">
                        <span style="padding-left: 4px;">3.4k</span>
                    </div>
                </div>
                <h6 class="apollo_recent_item_heading">Eperweg 13</h6>
                <p class="apollo_recent_item_city">7313 AV Apeldoorn</p>
                <h6 class="apollo_recent_item_price">€ 99 000 000</h6>
            </div>
            <div class="col">
                <div class="apollo_recent_item" style="background-image: url(/img/examplum2.jpg)">
                    <div class="apollo_recent_item_visits">
                        <img src="/svg/apollo_visits.svg" width="18" height="18" alt="">
                        <span style="padding-left: 4px;">3.4k</span>
                    </div>
                </div>
                <h6 class="apollo_recent_item_heading">Eperweg 13</h6>
                <p class="apollo_recent_item_city">7313 AV Apeldoorn</p>
                <h6 class="apollo_recent_item_price">€ 99 000 000</h6>
            </div>
            <div class="col">
                <div class="apollo_recent_item" style="background-image: url(/img/examplum3.jpg)">
                    <div class="apollo_recent_item_visits">
                        <img src="/svg/apollo_visits.svg" width="18" height="18" alt="">
                        <span style="padding-left: 4px;">3.4k</span>
                    </div>
                </div>
                <h6 class="apollo_recent_item_heading">Eperweg 13</h6>
                <p class="apollo_recent_item_city">7313 AV Apeldoorn</p>
                <h6 class="apollo_recent_item_price">€ 99 000 000</h6>
            </div>
        </div>
    </div>
@endsection
