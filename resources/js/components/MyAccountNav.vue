<template>
    <div id="apollo_myaccount_jumbotron" class="jumbotron shadow-lg">
        <div id="apollo_jumbotron_heading" style="justify-content: inherit; margin-left: 7.5%;" class="apollo_jumbotron_centered_parent">
            <img style="align-self: center; margin-right: 10px;" src="/svg/apollo_agent.svg" height="32" width="32">
            <h1 class="apollo_jumbotron_heading1">My Account</h1>
        </div>
        <div class="apollo_jumbotron_listitems">
            <div class="apollo_jumbotron_listitem" @click="selectNavItem(0)" v-bind:class="navItemStyles[0]">Profile</div>
            <div class="apollo_jumbotron_listitem" @click="selectNavItem(1)" v-bind:class="navItemStyles[1]">My Properties</div>
            <div class="apollo_jumbotron_listitem" @click="selectNavItem(2)" v-bind:class="navItemStyles[2]">Private Messages</div>
            <div class="apollo_jumbotron_listitem" @click="selectNavItem(3)" v-bind:class="navItemStyles[3]">History</div>
            <div class="apollo_jumbotron_listitem" @click="selectNavItem(4)" v-bind:class="navItemStyles[4]">Statistics</div>
            <div class="apollo_jumbotron_listitem" @click="selectNavItem(5)" v-bind:class="navItemStyles[5]">Settings</div>
        </div>
    </div>
</template>

<script>
    import store from '../store/index';

    export default {
        name: "MyAccountNav",
        data() {
            return {
                navItemStyles: ['apollo_jumbotron_listitem_active', '', '', '', '', ''],
            }
        },
        methods: {
            selectNavItem(item) {
                store.dispatch('selectNavItem', item).then(() => {
                    this.updateStyles(item);
                }).then(() => {

                }).catch(errors => {
                    console.log(errors);
                })
            },
            updateStyles(item) {
                this.navItemStyles = this.navItemStyles.map( i => '' );
                this.navItemStyles[item] = 'apollo_jumbotron_listitem_active';
                this.$forceUpdate();
            }
        }
    }
</script>

<style scoped>

</style>
