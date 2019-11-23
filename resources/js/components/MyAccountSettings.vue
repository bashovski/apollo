<template>
    <div id="apollo_myaccount_profile_container" class="container" style="margin-left: 7.5%">
        Ahoy!
    </div>
</template>

<script>
    import store from "../store/index"
    export default {
        name: "MyAccountSettings",
        computed: {
            getViewStyle() {
                return store.getters.getViewStyles[5];
            }
        }
    }
</script>

<style scoped>

</style>
