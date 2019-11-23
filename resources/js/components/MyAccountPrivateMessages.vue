<template>

</template>

<script>
    import store from '../store/index';
    export default {
        name: "MyAccountPrivateMessages",
        computed: {
            getViewStyle() {
                return store.getters.getViewStyles[2];
            }
        }
    }
</script>

<style scoped>

</style>
