<template>

</template>

<script>
    import store from '../../store/index';
    export default {
        name: "MyAccountProperties",
        computed: {
            getViewStyle() {
                return store.getters.getViewStyles[1];
            }
        }
    }
</script>

<style scoped>

</style>
