<template>
    <div id="apollo_myaccount_jumbotron" class="jumbotron shadow-lg">
        <div id="apollo_jumbotron_heading" style="justify-content: inherit; margin-left: 7.5%;" class="apollo_jumbotron_centered_parent">
            <img style="align-self: center; margin-right: 10px;" src="/svg/apollo_agent.svg" height="32" width="32">
            <h1 class="apollo_jumbotron_heading1">My Account</h1>
        </div>
        <div class="apollo_jumbotron_listitems">
            <div class="apollo_jumbotron_listitem apollo_jumbotron_listitem_active">Profile</div>
            <div class="apollo_jumbotron_listitem">My Properties</div>
            <div class="apollo_jumbotron_listitem">Private Messages</div>
            <div class="apollo_jumbotron_listitem">History</div>
            <div class="apollo_jumbotron_listitem">Statistics</div>
            <div class="apollo_jumbotron_listitem">Settings</div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "MyAccountNav"
    }
</script>

<style scoped>

</style>
