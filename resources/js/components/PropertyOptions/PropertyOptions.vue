<template>
    <div class="apollo-my_properties-bar-setting">
        <div class="apollo-my_properties-bar-setting-heading">
            Select an option to change
        </div>
        <div class="apollo-my_properties-bar-setting-items">
            <PropertyOption
                v-for="(option, key) in propertyOptions"
                v-bind:key="key"
                :icon="getOptionIcon(option.icon)"
                @click="emitOptionEvent(option.callback)"
                :option="option" />
        </div>
    </div>
</template>

<script>

    import PropertyOption from "../PropertyOption/PropertyOption";
    import {propertyOptions} from '../../helpers/myproperties/options';

    export default {
        name: "PropertyOptions",
        components: {
            PropertyOption
        },
        data() {
            return {
                propertyOptions: propertyOptions
            }
        },
        methods: {
            getOptionIcon(icon) {
                return (`/svg/propertyOptions/apollo_${icon}.svg`);
            },
            emitOptionEvent(callback) {

            }
        },
    }
</script>

<style lang="scss" scoped>
    .apollo-my_properties-bar-setting {

        &-heading {
            font-family: Karla, sans-serif;
            color: #fff;
        }

        &-items {
            display: flex;
            overflow-x: scroll;
            width: 100%;
            max-width: 100%;
            padding-top: 5px;
            padding-bottom: 10px;

            &::-webkit-scrollbar {
                height: 10px;
            }

            &::-webkit-scrollbar-thumb {
                background: #fff;
                border-radius: 50px;
            }

            &::-webkit-scrollbar-track {
                background-color: #fff5;
                border: 4px solid transparent;
                border-radius: 9px;
                background-clip: content-box;
            }
        }
    }
</style>
