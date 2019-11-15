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
                selectedId: 0
            }
        },
        methods: {
            selectFilter(filterId) {
                this.selectedFilterStylesheets = this.selectedFilterStylesheets.map( i => '' );
                this.selectedFilterStylesheets[filterId] = 'filter-active';
                this.selectedId = filterId;
            }
        }
    }
</script>

<style scoped>

</style>
