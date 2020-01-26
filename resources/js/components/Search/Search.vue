<template>
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
            <div v-bind:class="selectedFilterStylesheets[0]" class="apollo_search_property_filter_item" @click="selectFilter(0)">
                <img class="apollo_search_filter_icon" height="18" width="18" src="/svg/apollo_forsale.svg">
                <span>For sale</span>
            </div>
            <div v-bind:class="selectedFilterStylesheets[1]" class="apollo_search_property_filter_item" @click="selectFilter(1)">
                <img class="apollo_search_filter_icon" height="18" width="18" src="/svg/apollo_rent.svg">
                <span>For rent</span>
            </div>
            <div v-bind:class="selectedFilterStylesheets[2]" class="apollo_search_property_filter_item" @click="selectFilter(2)">
                <img class="apollo_search_filter_icon" height="18" width="18" src="/svg/apollo_office.svg">
                <span>Office</span>
            </div>
            <div v-bind:class="selectedFilterStylesheets[3]" class="apollo_search_property_filter_item" @click="selectFilter(3)">
                <img class="apollo_search_filter_icon" height="18" width="18" src="/svg/apollo_business.svg">
                <span>Business</span>
            </div>
            <div v-bind:class="selectedFilterStylesheets[4]" class="apollo_search_property_filter_item" @click="selectFilter(4)">
                <img class="apollo_search_filter_icon" height="18" width="18" src="/svg/apollo_detached.svg">
                <span>Detached</span>
            </div>
            <div v-bind:class="selectedFilterStylesheets[5]" class="apollo_search_property_filter_item" @click="selectFilter(5)">
                <img class="apollo_search_filter_icon" height="18" width="18" src="/svg/apollo_new.svg">
                <span>Newly built</span>
            </div>
        </div>
        <div id="apollo_search_properties_container">
            <form id="apollo_search_fields" action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" :value="csrf">
                <input type="hidden" name="filter" v-model="selectedId">
                <input type="hidden" name="range" v-model="propertyRange">
                <input type="hidden" name="priceFrom" v-model="priceFrom">
                <input type="hidden" name="priceTo" v-model="priceTo">
                <div id="apollo_search_left_half">
                    <input id="apollo_search_field" v-model="query" name="searchQuery" placeholder="Address, City, State, etc." type="text" class="form-control">
                    <div class="dropdown show" style="width: 20%;">
                        <a id="apollo_dropdown_button" class="btn dropdown-toggle" href="#" role="button" data-toggle="dropdown" >
                            <span style="vertical-align: middle;">+ {{propertyRange}} km</span>
                            <img src="/svg/apollo_down_caret.svg" height="14" width="14" style="vertical-align: middle;" alt="">
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" style="cursor: pointer;" @click="selectPropertyRange(1)">+ 1 km</a>
                            <a class="dropdown-item" style="cursor: pointer;" @click="selectPropertyRange(2)">+ 2 km</a>
                            <a class="dropdown-item" style="cursor: pointer;" @click="selectPropertyRange(5)">+ 5 km</a>
                            <a class="dropdown-item" style="cursor: pointer;" @click="selectPropertyRange(10)">+ 10 km</a>
                            <a class="dropdown-item" style="cursor: pointer;" @click="selectPropertyRange(25)">+ 25 km</a>
                            <a class="dropdown-item" style="cursor: pointer;" @click="selectPropertyRange(50)">+ 50 km</a>
                            <a class="dropdown-item" style="cursor: pointer;" @click="selectPropertyRange(100)">+ 100 km</a>
                        </div>
                    </div>
                </div>
                <div id="apollo_search_right_half">
                    <div class="dropdown show" style="width: 30%;">
                        <a id="apollo_dropdown_button" class="btn dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                           style="border-radius: 3px 0 0 3px;">
                            <span style="vertical-align: middle;">From</span>
                            <span style="vertical-align: middle;">{{displayPriceFrom}}</span>
                            <img src="/svg/apollo_down_caret.svg" height="14" width="14" style="vertical-align: middle;" alt="">
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" style="cursor: pointer;" @click="selectPriceRangeFrom(0)">€ 0</a>
                            <a class="dropdown-item" style="cursor: pointer;" @click="selectPriceRangeFrom(25000)">€ 25 000</a>
                            <a class="dropdown-item" style="cursor: pointer;" @click="selectPriceRangeFrom(50000)">€ 50 000</a>
                            <a class="dropdown-item" style="cursor: pointer;" @click="selectPriceRangeFrom(100000)">€ 100 000</a>
                            <a class="dropdown-item" style="cursor: pointer;" @click="selectPriceRangeFrom(250000)">€ 250 000</a>
                            <a class="dropdown-item" style="cursor: pointer;" @click="selectPriceRangeFrom(500000)">€ 500 000</a>
                            <a class="dropdown-item" style="cursor: pointer;" @click="selectPriceRangeFrom(750000)">€ 750 000</a>
                            <a class="dropdown-item" style="cursor: pointer;" @click="selectPriceRangeFrom(1000000)">€ 1 000 000</a>
                            <a class="dropdown-item" style="cursor: pointer;" @click="selectPriceRangeFrom(-1)">€ Over a million</a>
                        </div>
                    </div>
                    <div class="dropdown show" style="width: 30%; margin-left: 3px">
                        <a id="apollo_dropdown_button" class="btn dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                           style="border-radius: 0 3px 3px 0;">
                            <span style="vertical-align: middle;">To</span>
                            <span style="vertical-align: middle;">{{displayPriceTo}}</span>
                            <img src="/svg/apollo_down_caret.svg" height="14" width="14" style="vertical-align: middle;" alt="">
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" style="cursor: pointer;" @click="selectPriceRangeTo(0)">€ 0</a>
                            <a class="dropdown-item" style="cursor: pointer;" @click="selectPriceRangeTo(25000)">€ 25 000</a>
                            <a class="dropdown-item" style="cursor: pointer;" @click="selectPriceRangeTo(50000)">€ 50 000</a>
                            <a class="dropdown-item" style="cursor: pointer;" @click="selectPriceRangeTo(100000)">€ 100 000</a>
                            <a class="dropdown-item" style="cursor: pointer;" @click="selectPriceRangeTo(250000)">€ 250 000</a>
                            <a class="dropdown-item" style="cursor: pointer;" @click="selectPriceRangeTo(500000)">€ 500 000</a>
                            <a class="dropdown-item" style="cursor: pointer;" @click="selectPriceRangeTo(750000)">€ 750 000</a>
                            <a class="dropdown-item" style="cursor: pointer;" @click="selectPriceRangeTo(1000000)">€ 1 000 000</a>
                            <a class="dropdown-item" style="cursor: pointer;" @click="selectPriceRangeTo(-1)">€ Over a million</a>
                        </div>
                    </div>
                    <button id="apollo_search_button" class="apollo_btn_primary" type="submit">
                        <img class="apollo_search_filter_icon" height="18" width="18" src="/svg/apollo_search_sm.svg">
                        <span>Search</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Search",
        props: [

        ],
        data() {
            return {
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                selectedFilterStylesheets: ['filter-active', '', '', '', '', ''],
                selectedId: 0,
                propertyRange: 0, // in kilometers,
                priceFrom: 0, // -1 is for 'over a million' for both
                priceTo: 0,
                query: ''
            }
        },
        methods: {
            selectFilter(filterId) {
                this.selectedFilterStylesheets = this.selectedFilterStylesheets.map( i => '' );
                this.selectedFilterStylesheets[filterId] = 'filter-active';
                this.selectedId = filterId;
            },
            selectPropertyRange(range) {
                this.propertyRange = range;
            },
            selectPriceRangeFrom(price) {
                this.priceFrom = price;
            },
            selectPriceRangeTo(price) {
                this.priceTo = price;
            }
        },
        computed: {
            displayPriceFrom() {
                return (this.priceFrom === -1) ? ('over a million') : ('€ '+ this.priceFrom.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " "));
            },
            displayPriceTo() {
                return (this.priceTo === -1) ? ('over a million') : ('€ '+ this.priceTo.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " "));
            }
        }
    }
</script>

<style scoped>

</style>
