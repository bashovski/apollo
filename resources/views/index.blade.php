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
    <search></search>
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
    <div id="apollo_verified_partners" style="margin-bottom: 10vh;">
        <div id="apollo_search_filter_tools">
            <div id="apollo_verified_banner" class="row">
                <div style="vertical-align: middle">
                    <img style="vertical-align: text-bottom;" height="52" width="52" src="/svg/apollo_qa.svg" alt="">
                    <span style="padding-left: 10px;">WHY US</span>
                </div>
            </div>
        </div>
        <div class="apollo_why_us_cl">
            <div class="container">
                <div class="row features">
                    <div class="col-sm-6 col-lg-4 item">
                        <img src="/svg/apollo_monitor.svg" class="icon" height="32" width="32" alt="">
                        <h3 class="name">Everything is online</h3>
                        <p class="description">We know filling complicated forms and signing different documents,
                        while dealing with all of kinds of real-estate agents is a pain. Hence, we 've decided
                        to simplify the process as much as possible. From now on, everything can be done in a few clicks.</p>
                    </div>
                    <div class="col-sm-6 col-lg-4 item">
                        <img src="/svg/apollo_properties.svg" class="icon" height="32" width="32" alt="">
                        <h3 class="name">Access properties easily</h3>
                        <p class="description">
                            You can access properties you are selling, renting or interested in buying via 'My Properties' feature.
                            Therefore, you don't need to waste your valuable time for nonsense.
                        </p>
                    </div>
                    <div class="col-sm-6 col-lg-4 item">
                        <img src="/svg/apollo_agent.svg" class="icon" height="32" width="32" alt="">
                        <h3 class="name">Find Agents with a single click</h3>
                        <p class="description">
                            Finding verified and professional Real-Estate agents can take a lot of time.
                            By using our 'Find an Agent' feature, you 'll save a lot of time by selecting
                            affordable and trusted agents.
                        </p>
                    </div>
                    <div class="col-sm-6 col-lg-4 item">
                        <img src="/svg/apollo_signature.svg" class="icon" height="32" width="32" alt="">
                        <h3 class="name">Digital Paperwork</h3>
                        <p class="description">
                            Say no more to 'Do you have a pen, sir?' by signing and previewing paperwork,
                            licenses, documents, agreements, brochures online. Signing paperwork has never been any easier.
                        </p>
                    </div>
                    <div class="col-sm-6 col-lg-4 item">
                        <img src="/svg/apollo_movein.svg" class="icon" height="32" width="32" alt="">
                        <h3 class="name">Coupons for our partners</h3>
                        <p class="description">Please be sure to read EULA and ToS before in order to receive free bonuses and coupons. You can use our Premium pack and unlock free services.</p>
                    </div>
                    <div class="col-sm-6 col-lg-4 item">
                        <img src="/svg/apollo_amount.svg" class="icon" height="32" width="32" alt="">
                        <h3 class="name">Season of Home sales</h3>
                        <p class="description">
                            Since bank-loan interest-rates and Mortgage have been slightly decreased, prices of real estate has grown.
                            Therefore, this is a great chance for you as a seller to sell your house or to buy one as a buyer.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
