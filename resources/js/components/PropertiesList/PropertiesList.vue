<template>
    <div class="apollo-properties_list col-md-6">
        <PropertiesListCard/>
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
        padding-left: 0;
    }
</style>
