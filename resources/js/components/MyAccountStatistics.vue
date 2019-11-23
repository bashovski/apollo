<template>

</template>

<script>
    import store from '../store/index';
    export default {
        name: "MyAccountStatistics",
        computed: {
            getViewStyle() {
                return store.getters.getViewStyles[4];
            }
        }
    }
</script>

<style scoped>

</style>
