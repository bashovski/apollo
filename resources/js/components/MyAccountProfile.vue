<template>
    <div id="apollo_myaccount_profile_container" class="container" style="margin-left: 7.5%" v-bind:style="getViewStyle">
        <div id="apollo_myaccount_left" class="col-md-8">
            <div id="apollo_myaccount_profile" class="row shadow">
                <img id="apollo_myaccount_avatar" src="/img/profile.jpg" alt="">
                <div id="apollo_myaccount_profile_info">
                    <div id="apollo_myaccount_profile_info_heading">
                        <div id="apollo_myaccount_profile_info_name">Anur Bašić</div>
                        <div>Member since July, 2018.</div>
                    </div>
                </div>
            </div>
            <div class="apollo_myaccount_item row shadow">
                <img src="/svg/apollo_email.svg" width="24" height="24" alt="">
                <div class="apollo_myaccount_item_right">
                    <div>anur@blink.ba</div>
                    <img src="/svg/apollo_edit.svg" style="margin-left: 10px" width="16" height="16" alt="">
                </div>
            </div>
            <div class="apollo_myaccount_item row shadow">
                <img src="/svg/apollo_balloon.svg" width="24" height="24" alt="">
                <div class="apollo_myaccount_item_right">
                    <div>1. April 1989.</div>
                    <img src="/svg/apollo_edit.svg" style="margin-left: 10px" width="16" height="16" alt="">
                </div>
            </div>
            <div class="apollo_myaccount_item row shadow">
                <img src="/svg/apollo_location_pin.svg" width="24" height="24" alt="">
                <div class="apollo_myaccount_item_right">
                    <div>71000 Sarajevo, Kanton Sarajevo, BiH</div>
                    <img src="/svg/apollo_edit.svg" style="margin-left: 10px" width="16" height="16" alt="">
                </div>
            </div>
            <div class="apollo_myaccount_item row shadow">
                <img src="/svg/apollo_phone.svg" width="24" height="24" alt="">
                <div class="apollo_myaccount_item_right">
                    <div>+387 61 999 999 (Verified)</div>
                    <img src="/svg/apollo_edit.svg" style="margin-left: 10px" width="16" height="16" alt="">
                </div>
            </div>
            <div class="row d-flex justify-content-between" style="margin-top: 15px">
                <div class="">
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
                <div>
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
            </div>
        </div>
        <div class="col-md-4 col-md-4 mb-4">

        </div>
    </div>
</template>

<script>

    import store from '../store/index';
    export default {
        name: "MyAccountProfile",
        data() {
            return {

            }
        },
        computed: {
            getViewStyle() {
                return store.getters.getViewStyles[0];
            }
        }
    }
</script>

<style scoped>

</style>
