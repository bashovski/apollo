<template>
    <nav id="apollo_nav" class="navbar navbar-light navbar-expand-md fixed-top" v-bind:class="getNavigationStyle">
        <div class="container-fluid">
            <a class="navbar-brand" :href="routeHome" style="color: #fff;">
                <img src="/img/apollo_logo.png" width="42" height="42" alt="">
                <span id="apollo_nav_brand_span">APOLLO</span>
            </a>
            <button data-toggle="collapse" class="navbar-toggler" data-target="#"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                 href="#" style="color: #fff;" ver="">
                <ul class="nav navbar-nav ml-auto">
                    <li class="apollo_nav_item nav-item" role="presentation"><a class="nav-link" :href="routeMyAccount" style="color: #4AD7D1;padding-right: 30px;">
                        <img id="apollo_nav_main_btn_pin" src="/svg/apollo_account.svg" height="18" width="18" alt="">
                        <span>My Account</span>
                    </a>
                    </li>
                    <li class="apollo_nav_item nav-item" role="presentation"><a class="nav-link" href="#">
                        <img id="apollo_nav_main_btn_pin" src="/svg/apollo_properties.svg" height="18" width="18" alt="">
                        <span>My Properties</span>
                    </a>
                    </li>
                    <li class="nav-item" role="presentation"><a class="nav-link" :href="routePlaceProperty" id="apollo_nav_main_btn">
                        <img id="apollo_nav_main_btn_pin" src="/svg/apollo_pin.svg" height="18" width="18" alt="">
                        <span>Place a Property</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</template>

<script>
    import {fixedLinks} from '../../helpers/navbar/fixedLinks';
    export default {
        name: "Navbar",
        props: [
            'fixedByDefault',
            'routeHome',
            'routeMyAccount',
            'routePlaceProperty'
        ],
        data() {
            return {
                state: ''
            }
        },
        methods: {
            handleScroll() {
                console.log(fixedLinks);
                if(!this.isPageRequiringFixedNavbar() && typeof window !== 'undefined') {
                    window.addEventListener('scroll', () => {
                        if(window.scrollY > 73) this.state = 'fixed';
                        else this.state = '';
                    });
                } else this.state = 'fixed';
            },

            isPageRequiringFixedNavbar() {
                const route = window.location.pathname;

                for(let i = 0, length = fixedLinks.length; i < length; i++) {
                    if(route === fixedLinks[i]) {
                        return true;
                    }
                }
                return false;
            }
        },
        computed: {
            getNavigationStyle() {
                return this.state;
            }
        },
        mounted() {
            this.handleScroll();
        }
    }
</script>

<style lang="scss" scoped>
    .fixed {
        background-color: #ffffff !important;
        box-shadow: 0 5px 6px -6px #999;
    }
</style>
