<template>
    <div class="apollo-property-option">
        <img :src="iconDirectory" alt="">
        <div>{{ option.title }}</div>
    </div>
</template>

<script>
    export default {
        props: [
            'option',
            'icon'
        ],
        data() {
            return {
                iconDirectory: this.icon
            }
        },
        name: "PropertyOption"
    }
</script>

<style lang="scss" scoped>
    .apollo-property-option {

        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background-color: #fff;
        padding: 10px;
        border-radius: 6px;
        width: 140px;
        min-width: 140px;
        height: 140px;
        min-height: 140px;
        text-align: center;
        font-family: Karla, sans-serif;
        font-size: 16px;
        color: #001730;
        cursor: pointer;
        transition: 500ms;
        box-shadow: 1px 3px 6px 0 rgba(0, 0, 0, 0.25);

        &:hover {
            box-shadow: 9px 9px 9px 3px rgba(0, 0, 0, 0.25);
            margin-top: 10px;
            transition: 300ms;
            font-weight: bold;
            opacity: 0.8;
        }

        &:not(:first-child) {
            margin-left: 20px;
        }

        & > img {
            max-width: 64px;
            max-height: 64px;
        }
    }
</style>
