<template>
    <footer class="apollo-footer">
        <div class="apollo-footer-container container">
            <div class="apollo-footer-item col-md-6">
                <div class="apollo-footer-item-main">
                    <div class="apollo-footer-item-main-brand">
                        <img src="/img/apollo_logo.png">
                        <span>APOLLO</span>
                    </div>

                    <div class="apollo-footer-item-main-slogan">
                        When it comes to real estate, Apollo is crème de la crème.<br>
                        Browse, place and observe world's real estate, now and for free.
                    </div>
                </div>
            </div>
            <div class="apollo-footer-links-wrapper col-md-6">
                <div class="apollo-footer-links col-md-6">
                    <h4>Explore</h4>
                    <div class="apollo-footer-item-links_list">
                        <a v-for="(link, key) in links.features"
                           v-bind:key="key"
                           :href="link.url"
                           class="apollo-footer-item-links_list-item">{{ link.name }}</a>
                    </div>
                </div>
                <div class="apollo-footer-links col-md-6">
                    <h4>Help</h4>
                    <div class="apollo-footer-item-links_list">
                        <a v-for="(link, key) in links.userSupport"
                           v-bind:key="key"
                           :href="link.url"
                           class="apollo-footer-item-links_list-item">{{ link.name }}</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="apollo-footer-rights">
            <div class="container">
                <div class="col-md-8">
                    {{ getRightsMessage }}
                </div>
            </div>
        </div>
    </footer>
</template>

<script>
    import LinksList from "../../helpers/links/LinksList";
    export default {
        name: "Footer",
        data() {
            return {
                links: []
            }
        },
        methods: {
            initializeFooterLinks() {
                this.links = LinksList.getFooterLinks();
                console.log(this.links);
            }
        },
        computed: {
            getRightsMessage() {
                return (`All rights reserved, ${new Date().getFullYear()}.`);
            }
        },
        mounted() {
            this.initializeFooterLinks();
        }
    }
</script>

<style lang="scss" scoped>

    .apollo-footer {
        background-color: #f8fafc;
        &-container {
            display: flex;
        }
        &-item {
            &-main {
                &-slogan {
                    margin-top: 20px;
                    font-family: Karla, sans-serif;
                    color: #001730;
                }
                &-brand {
                    & > img {
                        max-height: 46px;
                    }
                    & > span {
                        color: #FE4A49;
                        font-family: Montserrat, sans-serif;
                        font-style: normal;
                        font-weight: bold;
                        font-size: 15.7922px;
                        letter-spacing: 0.28em;
                        vertical-align: middle;
                        padding-left: 15px;
                    }
                }
            }
            &-links_list {
                display: flex;
                flex-direction: column;
                margin-bottom: 50px;
            }
        }
        &-links {
            &-wrapper {
                display: flex;
            }
        }
        &-rights {
            padding: 10px 0;
            box-shadow: -7px 0px 20px 0px rgba(0, 0, 0, 0.25);
            background-color: #fff;
            font-family: Karla, sans-serif;
            color: #001730;
        }
    }
</style>
