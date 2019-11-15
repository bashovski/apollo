<template>
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
            <div id="apollo_jumbotron_arrow_scrolldown" @click="scrollToObj()" class="apollo_jumbotron_centered_parent">
                <img height="48" width="48" src="/svg/apollo_down_arrow.svg">
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Jumbotron",
        methods: {
            scrollToObj() {
                document.getElementById('apollo_jumbotron_arrow_scrolldown').scrollIntoView({
                    behavior: 'smooth'
                });
            }
        }
    }
</script>

<style scoped>

</style>
