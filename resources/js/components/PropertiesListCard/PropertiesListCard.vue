<template>
    <div class="apollo-properties_list-card">
        <div class="apollo-properties_list-card-property-heading">
            <div class="apollo-properties_list-card-property-heading-icon">
                <img src="/svg/apollo_detached.svg" alt="">
            </div>
            <div class="apollo-properties_list-card-property-heading-details">
                <div class="address">Sunset Boulevard, LA 90210</div>
                <div class="price">
                    <div class="amount">
                        3 840 000.00
                    </div>
                    <div class="currency">USD</div>
                </div>
            </div>
        </div>
        <div class="apollo-properties_list-card-property-content">
            <div class="apollo-properties_list-card-property-content-item">
                <RoundedIcon :src="`/svg/apollo_visits.svg`" :width="28" :height="28" />
                <div>9817</div>
            </div>
            <div class="apollo-properties_list-card-property-content-item">
                <RoundedIcon :src="`/svg/apollo_qa.svg`" :width="28" :height="28" />
                <a href="/">3 new questions <span class="disabled">(32 read)</span></a>
            </div>
        </div>
        <div class="apollo-properties_list-card-property-selection">

        </div>
    </div>
</template>

<script>
    import RoundedIcon from "../RoundedIcon/RoundedIcon";
    export default {
        name: "PropertiesListCard",
        props: [
            'property'
        ],
        components: {
            RoundedIcon
        }
    }
</script>

<style lang="scss" scoped>
    .apollo-properties_list-card {
        width: 100%;
        border-radius: 10px;
        background-color: #ffffff;
        box-shadow: 0 0 17px 1px rgba(0, 0, 0, 0.25);
        margin-top: 20px;
        padding: 20px;

        &-property {
            &-heading {

                display: flex;

                &-icon {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    border-radius: 50%;
                    background-image: linear-gradient(#36d1dc, #5b86e5);
                    width: 65px;
                    height: 65px;

                    & > img {
                        max-width: 42px;
                        max-height: 42px;
                    }
                }

                &-details {

                    display: flex;
                    margin-left: 10px;
                    justify-content: center;
                    flex-direction: column;

                    .address {
                        font-family: Karla, sans-serif;
                        font-weight: bold;
                        font-size: 16px;
                        color: #001730;
                    }

                    .price {

                        display: flex;
                        align-items: center;
                        font-family: Karla, sans-serif;
                        font-size: 14px;

                        .amount {
                            padding-right: 5px;
                        }

                        .currency {
                            background-image: linear-gradient(#36d1dc, #5b86e5);
                            border-radius: 50px;
                            padding: 2px 5px;
                            color: #fff;
                        }
                    }
                }
            }
            &-content {

                &-item {

                    display: flex;
                    align-items: center;
                    justify-content: flex-end;

                    & > a, div {
                        padding-left: 5px;
                        text-decoration: none !important;
                        color: #001730;
                        font-family: Karla, sans-serif;
                        & > .disabled {
                            opacity: 0.7;
                        }
                    }
                }
            }
        }
    }
</style>
