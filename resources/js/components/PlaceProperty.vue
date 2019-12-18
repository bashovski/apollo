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
                        <div class="apollo_post_flow_question_item shadow-lg">
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
                        <div class="mt-5 apollo_post_flow_question_item shadow-lg">
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
                        <div class="apollo_post_flow_question_item shadow-lg mt-5">
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
                    <div class="apollo_flow_pagination">
                        <button class="apollo_copy_progress_link_btn" @click="proceed()">
                            <img src="/svg/apollo_right.svg" width="20" alt="">
                            <span>Proceed</span>
                        </button>
                    </div>
                </div>
                <div class="col-md-4 apollo_sidebar_parent">
                    <div id="apollo_place_property_side_todo">
                        <div class="apollo_todo_sidebar_item active">Tell us about your property.</div>
                        <div class="apollo_todo_sidebar_item">Where is it located?</div>
                        <div class="apollo_todo_sidebar_item">Give us some details.</div>
                        <div class="apollo_todo_sidebar_item">More boring details.</div>
                        <div class="apollo_todo_sidebar_item">Cadastre</div>
                        <div class="apollo_todo_sidebar_item">Extras</div>
                        <div class="apollo_todo_sidebar_item">Photos</div>
                        <div class="apollo_todo_sidebar_item">Confirm your Identity</div>
                        <div class="apollo_todo_sidebar_item">Hire an Agent</div>
                    </div>
                    <div id="apollo_copy_progress_link">
                        <div id="apollo_progress_link_notice">
                            <div>
                                You can copy and reuse the progress link <br>in case you can't complete everything now.
                            </div>
                            <button class="apollo_copy_progress_link_btn"
                                    @click="displayProgressLink()" v-bind:style="getProgressLinkButtonDisplay">
                                <img src="/svg/apollo_clipboard.svg" width="20" alt="">
                                <span>Copy Progress link to Clipboard</span>
                            </button>
                        </div>
                        <div id="apollo_progress_link_display" v-bind:style="getProgressLinkDisplay">
                            <input id="apollo_progress_link_field" readonly class="form-control" type="text"
                                   v-bind:value="getFormattedProgressLink">
                            <button id="apollo_progress_link_copy" @click="copyProgressLink()">
                                <img src="/svg/apollo_clipboard.svg" width="20" alt="">
                            </button>
                        </div>
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
                    },
                    currentFlowStep: 1
                },

                flowCategories: {
                    about: {
                        PROPERTY_TYPE: '_PROPERTY_TYPE',
                        TRANSACTION_TYPE: '_TRANSACTION_TYPE',
                        USE_PROGRESS_LINK: '_USE_PROGRESS_LINK'
                    }
                },

                displayManagement: {
                    sidebar: {
                        progressLinkDisplay: false,
                        progressLinkNotice: true
                    }
                },

                progressLink: null,

                api: {
                    // https://laravel.com/docs/5.1/controllers#restful-resource-controllers
                    endpoints: {
                        UPDATE: '/api/progresslink/update',
                        CREATE: '/api/progresslink/',
                        SHOW: '/api/progresslink/'
                    },
                    calls: 0,
                    lastCallTimestamp: 0,
                    apiQueue: false,
                    methods: {
                        UPDATE: '_UPDATE',
                        CREATE: '_CREATE'
                    }
                },

                view: {
                    endpoints: {
                        SHOW: '/progresslink/'
                    }
                }
            }
        },
        methods: {
            displayProgressLink() {
                if(this.progressLink === null) return;
                this.displayManagement.sidebar.progressLinkDisplay = true;
                this.displayManagement.sidebar.progressLinkNotice = false;
                this.$forceUpdate();
            },
            mutateProgressLink() {
                if(this.progressLink === null) return this.createProgressLink();
                else this.updateProgressLink();

                this.copyProgressLink();
            },
            copyProgressLink() {
                let link = document.getElementById("apollo_progress_link_field");

                link.select();
                link.setSelectionRange(0, 99999);
                document.execCommand("copy");
            },
            createProgressLink() {
                if(this.apiQueue === true) return; this.apiQueue = true;
                axios.post(this.constructApiEndpoint(this.api.methods.CREATE), this.flowInput)
                .finally(() => {
                    this.apiQueue = false;
                })
                .then(response => {
                    console.log('progresslink created');
                    this.progressLink = response.data.progress_link;
                    this.updateProgressLink();
                    this.$forceUpdate();
                }).catch(errors => {
                    console.log(errors);
                });
            },
            updateProgressLink() {
                console.log(JSON.stringify(this.flowInput));

                if(this.apiQueue === true) return;
                this.apiQueue = true;

                axios.patch(this.constructApiEndpoint(this.api.methods.UPDATE), this.flowInput)
                .finally(() => {
                    this.apiQueue = false;
                })
                .then(response => {
                        console.log('progresslink updated');
                        console.log(response.data);
                    }).catch(errors => {
                        console.log(errors);
                });
            },
            proceed() {
                try {
                    this.validateInput();
                } catch(errors) { // later display
                    return console.log(errors);
                }

                this.mutateProgressLink();
            },
            constructApiEndpoint(method) {
                if(method === this.api.methods.UPDATE) {
                    return this.api.endpoints.UPDATE;
                } else if(method === this.api.methods.CREATE) {
                    return this.api.endpoints.CREATE;
                }
            },
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
            },
            validateInput() {
                let validationsPassed = 0;
                if(this.flowInput.currentFlowStep === 1) {
                    // validate property type
                    for(let i = 0; i < 3; i++) {
                        if(this.flowInput.about.propertyType.enum[i] === this.flowInput.about.propertyType.current) {
                            validationsPassed++;
                            break;
                        }
                    }
                    // validate transaction type
                    for(let i = 0; i < 3; i++) {
                        if(this.flowInput.about.transactionType.enum[i] === this.flowInput.about.transactionType.current) {
                            validationsPassed++;
                            break;
                        }
                    }
                    // validate progress link
                    for(let i = 0; i < 3; i++) {
                        if(this.flowInput.about.useProgressLink.enum[i] === this.flowInput.about.useProgressLink.current) {
                            validationsPassed++;
                            break;
                        }
                    }
                    if(validationsPassed < 3) throw "validation failed";
                }
            }
        },
        computed: {
            getProgressLinkDisplay() {
                return (this.displayManagement.sidebar.progressLinkDisplay && this.progressLink !== null) ? ('') : ('display: none');
            },
            getFormattedProgressLink() {
                return (
                    this.domain + this.view.endpoints.SHOW + this.progressLink
                );
            },
            getProgressLinkButtonDisplay() {
                return (this.displayManagement.sidebar.progressLinkNotice) ? ('') : ('display: none');
            }
        },
        props: [
            'domain'
        ]
    }
</script>

<style scoped>

</style>
