<template>
    <div class="apollo-my_properties container">
        <PropertiesList/>
        <div class="apollo-my_properties-bar col-md-6">
            <div class="apollo-my_properties-bar-heading">
                <div class="heading">Property Options</div>
                <div class="apollo-my_properties-bar-subheading">
                    Please note that you can modify anything regarding your property
                    with the approval of Apollo Certified Staff or the Real-Estate agent you've hired.
                </div>
            </div>
            <PropertyOptions/>
            <div class="apollo-my_properties-bar-btn">
                Apply Changes
            </div>
        </div>
    </div>
</template>

<script>

    import PropertyOptions from '../../components/PropertyOptions/PropertyOptions';
    import PropertiesList from '../../components/PropertiesList/PropertiesList';
    export default {
        name: "MyProperties",
        components: {
            PropertyOptions,
            PropertiesList
        },
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
        padding-left: 0;

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
                cursor: pointer;

                &:hover {
                    opacity: 0.8;
                }
            }
        }
        &-list {
            padding-left: 0;
        }
    }
</style>
