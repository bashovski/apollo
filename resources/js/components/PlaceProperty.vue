<template>
    <div id="apollo_place_property">
        <div id="apollo_place_property_container" class="container">
            <div class="d-flex justify-content-center">
                <div class="apollo_div_awaits_input">So, you 've decided to
                    <span class="apollo_span_awaits_input">sell</span> your <span class="apollo_span_awaits_input">house</span>?
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-8">
                    <div id="apollo_step_one">
                        <div>
                            <div class="apollo_step_one_question">What kind of
                                <span style="color: #4AD7D1; font-weight: bold;">property</span> do you have?
                            </div>
                            <div>
                                Choose type of property you want to sell/rent.
                            </div>
                            <div class="d-flex mt-2">
                                <div class="apollo_step_one_choose_prop" v-bind:class="flowInput.about.propertyType.style[0]"
                                     @click="flowSelect(flowCategories.about.PROPERTY_TYPE, 'House')">
                                    <img width="40" src="/svg/apollo_detached.svg" alt="">
                                    <span class="apollo_step_one_choose_prop_label">House</span>
                                </div>
                                <div class="apollo_step_one_choose_prop" v-bind:class="flowInput.about.propertyType.style[1]"
                                     @click="flowSelect(flowCategories.about.PROPERTY_TYPE, 'Office')">
                                    <img width="40" src="/svg/apollo_office.svg" alt="">
                                    <span class="apollo_step_one_choose_prop_label">Office</span>
                                </div>
                                <div class="apollo_step_one_choose_prop" v-bind:class="flowInput.about.propertyType.style[2]"
                                     @click="flowSelect(flowCategories.about.PROPERTY_TYPE, 'Business')">
                                    <img width="40" src="/svg/apollo_business.svg" alt="">
                                    <span class="apollo_step_one_choose_prop_label">Business</span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5">
                            <div class="apollo_step_one_question">What would you
                                <span style="color: #4AD7D1; font-weight: bold;">like</span> to do with it?
                            </div>
                            <div>
                                Choose if you either want to sell or rent your house.
                            </div>
                            <div class="d-flex mt-2">
                                <div class="apollo_step_one_choose_prop" v-bind:class="flowInput.about.transactionType.style[0]"
                                     @click="flowSelect(flowCategories.about.TRANSACTION_TYPE, 'Sell')">
                                    <img width="40" src="/svg/apollo_forsale.svg" alt="">
                                    <span class="apollo_step_one_choose_prop_label">I'd like to sell it</span>
                                </div>
                                <div class="apollo_step_one_choose_prop" v-bind:class="flowInput.about.transactionType.style[1]"
                                     @click="flowSelect(flowCategories.about.TRANSACTION_TYPE, 'Rent')">
                                    <img width="40" src="/svg/apollo_rent.svg" alt="">
                                    <span class="apollo_step_one_choose_prop_label">I'd like to rent it</span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5">
                            <div class="apollo_step_one_question">Use
                                <span style="color: #4AD7D1; font-weight: bold;">Progress</span> link?
                            </div>
                            <div>
                                You can generate a unique link to track and update your progress.
                            </div>
                            <div class="d-flex mt-2">
                                <div class="apollo_step_one_choose_prop" v-bind:class="flowInput.about.useProgressLink.style[0]"
                                     @click="flowSelect(flowCategories.about.USE_PROGRESS_LINK, true)">
                                    <img width="40" src="/svg/apollo_forsale.svg" alt="">
                                    <span class="apollo_step_one_choose_prop_label">Yes, please.</span>
                                </div>
                                <div class="apollo_step_one_choose_prop" v-bind:class="flowInput.about.useProgressLink.style[1]"
                                     @click="flowSelect(flowCategories.about.USE_PROGRESS_LINK, false)">
                                    <img width="40" src="/svg/apollo_rent.svg" alt="">
                                    <span class="apollo_step_one_choose_prop_label">No, I'll finish this right away.</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <div id="apollo_place_property_side_todo">
                        <div>Tell us about your property.</div>
                        <div>Where is it located?</div>
                        <div>Give us some details.</div>
                        <div>More boring details.</div>
                        <div>Cadastre</div>
                        <div>Extras</div>
                        <div>Photos</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "PlaceProperty",
        data() {
            return {
                flowInput: {
                    about:      {
                        propertyType: {
                            current: 'House',
                            enum: ['House', 'Office', 'Business'],
                            style: ['active', '', '']
                        },
                        transactionType: {
                            current: 'Sell',
                            enum: ['Sell', 'Rent'],
                            style: ['active', '']
                        },
                        useProgressLink: {
                            current: true,
                            enum: [true, false],
                            style: ['active', '']
                        }
                    }
                },
                flowCategories: {
                    about: {
                        PROPERTY_TYPE: '_PROPERTY_TYPE',
                        TRANSACTION_TYPE: '_TRANSACTION_TYPE',
                        USE_PROGRESS_LINK: '_USE_PROGRESS_LINK'
                    }
                }
            }
        },
        methods: {
            flowSelect(dest, val) {
                if(dest === this.flowCategories.about.PROPERTY_TYPE) this.flowInput.about.propertyType.current = val;
                else if(dest === this.flowCategories.about.TRANSACTION_TYPE) this.flowInput.about.transactionType.current = val;
                else if(dest === this.flowCategories.about.USE_PROGRESS_LINK) this.flowInput.about.useProgressLink.current = val;
                return this.updateFlowSelectionDisplay(dest, val);
            },
            updateFlowSelectionDisplay(dest, val) {
                if(dest === this.flowCategories.about.PROPERTY_TYPE) {
                    this.flowInput.about.propertyType.style = this.flowInput.about.propertyType.style.map( i => '');
                    for(let i in this.flowInput.about.propertyType.style) {
                        if(this.flowInput.about.propertyType.enum[i] === val) {
                            this.flowInput.about.propertyType.style[i] = 'active';
                            break;
                        }
                    }
                } else if(dest === this.flowCategories.about.TRANSACTION_TYPE) {
                    this.flowInput.about.transactionType.style = this.flowInput.about.transactionType.style.map( i => '');
                    for(let i in this.flowInput.about.transactionType.style) {
                        if(this.flowInput.about.transactionType.enum[i] === val) {
                            this.flowInput.about.transactionType.style[i] = 'active';
                            break;
                        }
                    }
                }
                else if(dest === this.flowCategories.about.USE_PROGRESS_LINK) {
                    this.flowInput.about.useProgressLink.style = this.flowInput.about.useProgressLink.style.map( i => '');
                    for(let i in this.flowInput.about.useProgressLink.style) {
                        if(this.flowInput.about.useProgressLink.enum[i] === val) {
                            this.flowInput.about.useProgressLink.style[i] = 'active';
                            break;
                        }
                    }
                }
                return this.$forceUpdate();
            }
        }
    }
</script>

<style scoped>

</style>
