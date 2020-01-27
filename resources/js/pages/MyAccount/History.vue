<template>

</template>

<script>
    import store from '../../store/index';
    export default {
        name: "MyAccountHistory",
        computed: {
            getViewStyle() {
                return store.getters.getViewStyles[3];
            }
        }
    }
</script>

<style scoped>

</style>
