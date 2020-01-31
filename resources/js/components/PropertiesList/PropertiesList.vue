<template>
    <div class="apollo-properties_list col-md-6">
        <PropertiesListCard v-for="(card, key) in 10" v-bind:key="key"/>
        <div class="apollo-properties_list-scroll_gradient"/>
    </div>
</template>

<script>
    import PropertiesListCard from '../PropertiesListCard/PropertiesListCard';
    export default {
        name: "PropertiesList",
        components: {
            PropertiesListCard
        }
    }
</script>

<style lang="scss" scoped>
    .apollo-properties_list {
        max-height: 100vh;
        overflow-y: scroll;
        width: 70%;
        max-width: 70%;
        min-width: 70%;
        padding-left: calc(7.5% + 15px);

        &::-webkit-scrollbar {
            display: none;
        }

        &-scroll_gradient {
            width: 100%;
            height: 250px;
            width: 100%;
            background: linear-gradient(#fff0, #fff);
            position: sticky;
            bottom: 0;
        }
    }
</style>
