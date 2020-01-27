<template>
    <div id="apollo_place_property">
        <div id="apollo_place_property_container" class="container shadow-lg">
            <div class="row mt-5" style="min-height: 100vh;">
                <div class="col-md-8">
                    <div id="apollo_step_one" v-bind:style="displayManagement.flow.display[0]">
                        <div class="apollo_post_flow_question_item">
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
                        <div class="mt-5 apollo_post_flow_question_item">
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
                        <div class="apollo_post_flow_question_item mt-5">
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
                    <div id="apollo_step_two" class="" v-bind:style="displayManagement.flow.display[1]">
                        <div class="apollo_post_flow_question_item">
                            <div class="apollo_step_one_question">
                                Select <span style="color: #4AD7D1; font-weight: bold;">location</span> of your property
                            </div>
                            <div>
                                Please choose which country/autonomous region is your property located in?
                            </div>
                            <div class="apollo_location_btn" style="margin: auto;" data-toggle="dropdown">
                            <span>
                                <button type="button" class="btn dropdown-toggle w-50 align-items-center">
                                    <span v-if="countries.selected.acronym === null">
                                        <span class="pl-1">Select a country</span>
                                        <span class="caret"></span>
                                    </span>
                                    <span v-else>
                                        <img :src="countries.selected.flag" :alt="countries.selected.name" width="25" height="13">
                                        <span class="pl-1">{{ countries.selected.name }}</span>
                                        <span class="caret"></span>
                                    </span>
                                </button>
                            </span>
                                <ul class="dropdown-menu scrollable-menu w-100" role="menu">
                                    <li class="gff_li_dropdown_main" v-for="country, index in countries.names" @click="selectCountry(index)" style="cursor: pointer;">
                                        <img class="pl-2" :src="countries.flags[index]" width="25" height="13" :alt="country">
                                        <a class="pl-1 gff_country-listitem">{{country}}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="apollo_post_flow_question_item">
                            <div class="apollo_step_one_question">
                                Insert the <span style="color: #4AD7D1; font-weight: bold;">ZIP/Postal code</span> of your property
                            </div>
                            <div>
                                Please insert the ZIP/Postal code of the property you are {{getProcessVerb}}.
                            </div>
                            <input class="form-control apollo_input_field" type="text" v-model="flowInput.location.postcode"
                                   placeholder="Please insert the ZIP/Postal code of the property you are selling.">
                        </div>
                        <div class="apollo_post_flow_question_item">
                            <div class="apollo_step_one_question">
                                Insert the <span style="color: #4AD7D1; font-weight: bold;">address</span> of your property
                            </div>
                            <div>
                                Please insert the address (street name, number) of the property you are {{getProcessVerb}}.
                            </div>
                            <input class="form-control apollo_input_field" type="text" v-model="flowInput.location.address"
                                   placeholder="Please insert the ZIP/Postal code of the property you are selling.">
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
                        <div class="apollo_todo_sidebar_item active">
                            <span class=""></span>
                            <span>Tell us about your property.</span>
                        </div>
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
        <div class="modal fade" id="apollo_error_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Mistakes were made!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {{ getValidationError }}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="apollo_error-btn" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

    import ValidationSvc from '../../services/properties/validation.js';

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
                    location: {
                        postcode: '',
                        address: ''
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

                displayedError: '',

                displayManagement: {
                    sidebar: {
                        progressLinkDisplay: false,
                        progressLinkNotice: true
                    },
                    flow: {
                        display: new Array(9).fill('', 0, 1).fill('display: none', 1, 9)
                    }
                },

                progressLink: null,

                api: {
                    // https://laravel.com/docs/5.1/controllers#restful-resource-controllers
                    endpoints: {
                        UPDATE: '/api/progresslink/update',
                        CREATE: '/api/progresslink/',
                        SHOW: '/api/progresslink/',
                        COUNTRIES_GET: 'https://restcountries.eu/rest/v2/all'
                    },
                    calls: 0,
                    lastCallTimestamp: 0,
                    apiQueue: false,
                    methods: {
                        UPDATE: '_UPDATE',
                        CREATE: '_CREATE',
                        SHOW: '_SHOW',
                        COUNTRIES_GET: '_COUNTRIES_GET'
                    },
                    proxy: 'https://fast-journey-35621.herokuapp.com/'
                },

                countries: {
                    names: [],
                    acronyms: [],
                    flags: [],
                    selected: {
                        name: null,
                        acronym: null,
                        flag: null
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
                        console.log(response.data);
                    }).catch(errors => {
                        console.log(errors);
                });
            },
            proceed() {
                try {
                    if(!this.validateInput()) return;
                } catch(errors) { // later display
                    return console.log('greška');
                }
                this.loadFlowStep(this.flowInput.currentFlowStep+1);
                this.displayManagement.flow.display[this.flowInput.currentFlowStep-1] = 'display: none';
                this.displayManagement.flow.display[this.flowInput.currentFlowStep] = '';
                this.flowInput.currentFlowStep++;
                console.log(this.flowInput.currentFlowStep);
                this.$forceUpdate();

                this.mutateProgressLink();
            },
            constructApiEndpoint(method) {
                if(method === this.api.methods.UPDATE) {
                    return this.api.endpoints.UPDATE;
                } else if(method === this.api.methods.CREATE) {
                    return this.api.endpoints.CREATE;
                } else if( method === this.api.methods.COUNTRIES_GET) {
                    return this.api.proxy + this.api.endpoints.COUNTRIES_GET;
                }
            },
            loadFlowStep(stepId) {
                if(stepId === 2) {
                    this.loadLocations();
                }
            },
            flowSelect(dest, val) {
                if(dest === this.flowCategories.about.PROPERTY_TYPE) this.flowInput.about.propertyType.current = val;
                else if(dest === this.flowCategories.about.TRANSACTION_TYPE) this.flowInput.about.transactionType.current = val;
                else if(dest === this.flowCategories.about.USE_PROGRESS_LINK) this.flowInput.about.useProgressLink.current = val;
                return this.updateFlowSelectionDisplay(dest, val);
            },
            loadLocations() {
                this.loadCountries();
            },
            loadCountries() {
                axios.get(this.constructApiEndpoint(this.api.methods.COUNTRIES_GET))
                    .then(response => {
                        for(let i = 0; i < response.data.length; i++) {
                            this.countries.names[i] = response.data[i].name;
                            this.countries.acronyms[i] = response.data[i].alpha2Code;
                            this.countries.flags[i] = response.data[i].flag;
                        }
                    }).catch(errors => {
                    console.log(errors);
                });
            },
            selectCountry(index) {
                this.countries.selected.acronym = this.countries.acronyms[index];
                this.countries.selected.flag = this.countries.flags[index];
                this.countries.selected.name = this.countries.names[index];
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

                } else if(this.flowInput.currentFlowStep === 2) {
                    if(this.countries.selected.acronym === null)
                        return this.displayError(ValidationSvc.validationErrors.location.countryNotSelected);
                    else if(this.flowInput.location.postcode.toString().length === 0)
                        return this.displayError(ValidationSvc.validationErrors.location.postalCodeEmpty);
                    else if(this.flowInput.location.address.toString().length < 4)
                        return this.displayError(ValidationSvc.validationErrors.location.addressInvalid);
                }

                return true;
            },
            displayError(string, displayLength = null) {
                this.displayedError = string;
                $('#apollo_error_modal').modal({show: true});
                return false;
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
            },
            getProcessVerb() {
                return (this.flowInput.about.transactionType.current === 'Sell') ? ('selling') : ('renting');
            },
            getValidationError() {
                return this.displayedError;
            }
        },
        props: [
            'domain'
        ]
    }
</script>

<style scoped>
</style>
