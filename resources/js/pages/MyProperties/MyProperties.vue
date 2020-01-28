<template>
    <div class="apollo-my_properties container">
        <div class="apollo-my_properties-list col-md-6">
            asdasdasd
        </div>
        <div class="apollo-my_properties-bar col-md-6">
            <div class="apollo-my_properties-bar-heading">
                <div class="heading">Property Options</div>
                <div class="apollo-my_properties-bar-subheading">
                    Please note that you can modify anything regarding your property
                    with the approval of Apollo Certified Staff or the Real-Estate agent you've hired.
                </div>
            </div>
            <div class="apollo-my_properties-bar-setting">
                <div class="apollo-my_properties-bar-setting-heading">
                    Select an option to change
                </div>
                <div class="apollo-my_properties-bar-setting-items">
                    <div class="apollo-my_properties-bar-setting-items-item" v-for="i in 10">
                        <img src="/svg/apollo_energylabel.svg" alt="">
                        <div>Update Energy Label</div>
                    </div>
                </div>
            </div>
            <div class="apollo-my_properties-bar-btn">
                Apply Changes
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "MyProperties"
    }
</script>

<style lang="scss" scoped>

    .apollo-my_properties {

        display: flex;
        height: 100vh;
        max-height: calc(100vh - 73px);
        margin-top: 73px;
        margin-right: 0;
        padding-right: 0;

        &-bar {

            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 20px 20px;
            background: linear-gradient(#36d1dc, #5b86e5);


            &-heading {
                font-family: Karla, sans-serif;
                color: #fff;
                font-size: 28px;
                font-weight: bold;

                & > .heading {
                    width: fit-content;
                    border-radius: 6px;
                    border-bottom: 4px solid #FE4A49;
                }
            }

            &-subheading {
                margin-top: 20px;
                opacity: 0.6;
                font-size: 14px;
            }

            &-btn {
                display: flex;
                justify-content: center;
                align-items: center;
                padding: 30px 20px;
                box-shadow: 0 6px 8px 4px rgba(0, 0, 0, 0.25);
                border-radius: 6px;
                border-bottom: 4px solid #FE4A49;
                background-color: #fff;
                color: #FE4A49;
                font-family: Karla, sans-serif;
                font-size: 18px;
                text-transform: uppercase;
                transition: 500ms;

                &:hover {

                }
            }

            &-setting {

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

                    &-item {
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
                }
            }
        }
    }
</style>
