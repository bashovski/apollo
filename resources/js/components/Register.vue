<template>
    <div id="apollo_jumbotron_landing" class="jumbotron" style="margin-bottom: 0">
        <div id="apollo_jumbotron_items">
            <div id="apollo_jumbotron_heading" class="apollo_jumbotron_centered_parent">
                <h1 class="apollo_jumbotron_heading1">Register</h1>
            </div>
            <div id="apollo_jumbotron_desc" class="apollo_jumbotron_centered_parent">
                <p class="apollo_jumbotron_paragraph">Welcome to Apollo. Please insert your data to complete the registration.</p>
            </div>
        </div>

        <div id="apollo_login_form_mail" v-bind:style="divStyles[0]">
            <div class="apollo_flex_item" style="padding-top: 50px">
                <img src="/img/apollo_logo.png" width="50" height="50" alt="">
            </div>
            <div class="apollo_flex_item">
                <input name="email" v-model="email" class="form-control login_form_input" type="text" :placeholder="emailPlaceholder"
                       autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false">
            </div>
            <div class="apollo_flex_item" style="margin-top: 10px;">
                <span>Already have an account? <a id="apollo_login_no_acc" :href="routeRegister">Log back in</a>.</span>
            </div>
            <div class="apollo_flex_item apollo_register_proceed">
                <form id="apollo_register_form_hidden" :action="routeRegister" method="post">
                    <input type="hidden" name="_token" :value="csrf">
                    <input type="hidden" name="email" v-model="email" >
                    <input type="hidden" name="password" v-model="password" >
                    <input type="hidden" name="password_confirmation" v-model="passwordConfirmation" >
                    <input type="hidden" name="firstName" v-model="firstName" >
                    <input type="hidden" name="lastName" v-model="lastName ">
                    <input type="hidden" name="birthDay" v-model="birthDay" >
                    <input type="hidden" name="birthMonth" v-model="birthMonth" >
                    <input type="hidden" name="birthYear" v-model="birthYear">
                    <input type="hidden" name="location" v-model="location" >
                    <input type="hidden" name="accountType" v-model="getAccountType">
                </form>
                <button class="apollo_btn_primary" @click="next('email')">Next</button>
            </div>
        </div>

        <div id="apollo_register_form_name" class="apollo_login_form_box animated slideInLeft" v-bind:style="divStyles[1]">
            <div class="apollo_flex_item" style="padding-top: 50px">
                <img src="/img/apollo_logo.png" width="50" height="50" alt="">
            </div>
            <div class="apollo_flex_item">
                <input v-model="firstName" class="form-control login_form_input" type="text" :placeholder="namePlaceholder"
                       autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false">
            </div>
            <div class="apollo_flex_item">
                <input v-model="lastName" style="margin-top: 25px;" class="form-control login_form_input" type="text" :placeholder="surnamePlaceholder"
                       autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false">
            </div>
            <div class="apollo_flex_item apollo_register_proceed">
                <button class="apollo_btn_primary" @click="next('names')">Next</button>
            </div>
        </div>

        <div id="apollo_register_form_password" class="apollo_login_form_box animated slideInLeft" v-bind:style="divStyles[2]">
            <div class="apollo_flex_item" style="padding-top: 50px">
                <img src="/img/apollo_logo.png" width="50" height="50" alt="">
            </div>
            <div class="apollo_flex_item">
                <input v-model="password" class="form-control login_form_input" type="password" placeholder="Password"
                       autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false">
            </div>
            <div class="apollo_flex_item">
                <input v-model="passwordConfirmation" style="margin-top: 25px;" class="form-control login_form_input" type="password" placeholder="Confirm your password"
                       autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false">
            </div>
            <div class="apollo_flex_item apollo_register_proceed">
                <button class="apollo_btn_primary" @click="next('password')">Next</button>
            </div>
        </div>

        <div id="apollo_register_form_birth_loc" class="apollo_login_form_box animated slideInLeft" v-bind:style="divStyles[3]">
            <div class="apollo_flex_item" style="padding-top: 50px">
                <img src="/img/apollo_logo.png" width="50" height="50" alt="">
            </div>
            <div class="apollo_flex_item" style="padding-top: 50px">
                <h5 class="apollo_register_form_label">Date of birth</h5>
            </div>
            <div class="apollo_flex_item" style="padding-top: 10px">
                <h5 class="apollo_register_form_error">{{dateError}}</h5>
            </div>
            <div class="apollo_flex_item">
                <div class="dropdown show" style="width: 25%;">
                    <a id="apollo_dropdown_button" class="btn dropdown-toggle" href="#" role="button" data-toggle="dropdown" >
                        <span style="vertical-align: middle;">{{birthDay}}</span>
                        <img src="/svg/apollo_down_caret.svg" height="14" width="14" style="vertical-align: middle;" alt="">
                    </a>
                    <div class="dropdown-menu" style="overflow-y: auto; height: 200px;">
                        <a v-for="i in 31" class="dropdown-item" style="cursor: pointer;" @click="selectDate('day', i)">{{i}}</a>
                    </div>
                </div>

                <div class="dropdown show" style="width: 25%;">
                    <a id="apollo_dropdown_button" class="btn dropdown-toggle" href="#" role="button" data-toggle="dropdown" >
                        <span style="vertical-align: middle;">{{displaySelectedMonth}}</span>
                        <img src="/svg/apollo_down_caret.svg" height="14" width="14" style="vertical-align: middle;" alt="">
                    </a>
                    <div class="dropdown-menu" style="overflow-y: auto; height: 200px;">
                        <a v-for="i in 12" class="dropdown-item" style="cursor: pointer;" @click="selectDate('month', i)">{{monthNames[i-1]}}</a>
                    </div>
                </div>

                <div class="dropdown show" style="width: 25%;">
                    <a id="apollo_dropdown_button" class="btn dropdown-toggle" href="#" role="button" data-toggle="dropdown" >
                        <span style="vertical-align: middle;">{{birthYear}}</span>
                        <img src="/svg/apollo_down_caret.svg" height="14" width="14" style="vertical-align: middle;" alt="">
                    </a>
                    <div class="dropdown-menu" style="overflow-y: auto; height: 200px;">
                        <a v-for="i in 101" class="dropdown-item" style="cursor: pointer;" @click="selectDate('year', yearNow+1-i)">{{yearNow+1-i}}</a>
                    </div>
                </div>
            </div>
            <div class="apollo_flex_item" style="padding-top: 50px">
                <h5 class="apollo_register_form_label">Where are you from?</h5>
            </div>
            <div class="apollo_flex_item">
                <input v-model="location" style="margin-top: 25px;" class="form-control login_form_input" type="text" :placeholder="locationPlaceholder"
                       autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false">
            </div>
            <div class="apollo_flex_item apollo_register_proceed">
                <button class="apollo_btn_primary" @click="next('birthloc')">Next</button>
            </div>
        </div>

        <div id="apollo_register_form_account_type" class="apollo_login_form_box animated slideInLeft" v-bind:style="divStyles[4]" >
            <div class="apollo_flex_item" style="padding-top: 50px">
                <img src="/img/apollo_logo.png" width="50" height="50" alt="">
            </div>
            <div class="apollo_flex_item" style="padding-top: 30px">
                <h5 class="apollo_register_form_label">Select type of an account</h5>
            </div>

            <div class="apollo_flex_item" style="padding-top: 30px">
                <div class="apollo_standard_user_btn" :class="standardStyle" @click="selectAccountType(0)">
                    <svg width="50" height="50" :fill="standardButtonStyle" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                         viewBox="0 0 318.75 318.75" style="enable-background:new 0 0 318.75 318.75;" xml:space="preserve">
<g>
	<path d="M159.375,150c41.355,0,75-33.645,75-75s-33.645-75-75-75s-75,33.645-75,75S118.02,150,159.375,150z M159.375,30
		c24.813,0,45,20.187,45,45s-20.187,45-45,45s-45-20.187-45-45S134.562,30,159.375,30z"/>
    <path d="M159.375,180c-68.236,0-123.75,55.514-123.75,123.75v15h247.5v-15C283.125,235.514,227.611,180,159.375,180z
		 M66.824,288.75c7.202-44.588,45.962-78.75,92.551-78.75s85.35,34.162,92.551,78.75H66.824z"/>
</g>
                        <g>
</g>
                        <g>
</g>
                        <g>
</g>
                        <g>
</g>
                        <g>
</g>
                        <g>
</g>
                        <g>
</g>
                        <g>
</g>
                        <g>
</g>
                        <g>
</g>
                        <g>
</g>
                        <g>
</g>
                        <g>
</g>
                        <g>
</g>
                        <g>
</g>
</svg>
                </div>
                <div class="apollo_agent_user_btn" :class="agentStyle" @click="selectAccountType(1)">
                    <svg width="50" height="50" :fill="agentButtonStyle" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         viewBox="0 0 320 320" style="enable-background:new 0 0 320 320;" xml:space="preserve">
<g>
	<path d="M308.719,182.794l-70-50c-5.216-3.725-12.222-3.725-17.438,0l-49.225,35.16C155.995,159.792,138.195,155.5,120,155.5
		c-63.411,0-115,51.589-115,115c0,8.284,6.716,15,15,15h125V305c0,8.284,6.716,15,15,15h140c8.284,0,15-6.716,15-15V195
		C315,190.155,312.661,185.609,308.719,182.794z M36.325,255.5c7.106-39.739,41.923-70,83.675-70c8.903,0,17.675,1.387,26.029,4.068
		C145.364,191.279,145,193.115,145,195v60.5H36.325z M285,290H175v-87.28l6.61-4.722c0.018-0.012,0.036-0.025,0.054-0.038
		L230,163.434l55,39.286V290z"/>
    <path d="M120,125.5c34.601,0,62.751-28.149,62.751-62.75S154.601,0,120,0S57.249,28.149,57.249,62.75S85.399,125.5,120,125.5z
		 M120,30c18.059,0,32.751,14.691,32.751,32.75S138.059,95.5,120,95.5S87.249,80.809,87.249,62.75S101.941,30,120,30z"/>
</g>
                        <g>
</g>
                        <g>
</g>
                        <g>
</g>
                        <g>
</g>
                        <g>
</g>
                        <g>
</g>
                        <g>
</g>
                        <g>
</g>
                        <g>
</g>
                        <g>
</g>
                        <g>
</g>
                        <g>
</g>
                        <g>
</g>
                        <g>
</g>
                        <g>
</g>
</svg>
                </div>
            </div>

            <div class="apollo_flex_item apollo_register_proceed">
                <button class="apollo_btn_primary" @click="next('account_type')">Complete registration</button>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Register",
        props: [
            'routeLogin',
            'routeRegister'
        ],
        data() {
            return {
                apiEndpoint: '/api/validateregister',
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                divStyles: ['', 'display: none', 'display: none', 'display: none', 'display: none'],
                email: '',
                firstName: '',
                lastName: '',
                password: '',
                location: '',
                previousLocation: '_',
                passwordConfirmation: '',
                previousMail: '_',
                previousPassword: '_',
                birthDay: -1,
                birthMonth: -1,
                birthYear: -1,
                yearNow: -1,
                monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                emailPlaceholder: 'E-mail',
                namePlaceholder: 'Name',
                surnamePlaceholder: 'Surname',
                passwordPlaceholder: 'Password',
                confirmPasswordPlaceholder: 'Confirm your password',
                dateError: '',
                locationPlaceholder: 'Insert your location (e.g. City, Region, Country)',
                accountType: 'STANDARD', // Default: STANDARD, needs option for AGENT account
                standardStyle: 'apollo_account_selected',
                standardButtonStyle: '#FFFFFF',
                agentStyle: '',
                agentButtonStyle: '#001730',
                selectedMonth: 0
            }
        },
        methods: {
            next(type) {
                if(type === 'email') this.proceedEmail(type);
                else if(type === 'names') this.proceedNames(type);
                else if(type === 'password') this.proceedPassword(type);
                else if(type === 'birthloc') this.proceedBirthLocation(type);
                else if(type === 'account_type') this.proceedAccountType(type);
            },
            constructApiEndpoint(type) {
                let endpoint = this.apiEndpoint;
                endpoint += '?type='+ type +
                    '&email=' + this.email +
                    '&firstname=' + this.firstName +
                    '&lastname=' + this.lastName +
                    '&password=' + this.password +
                    '&password_confirmation=' + this.passwordConfirmation +
                    '&birthDay=' + this.birthDay +
                    '&birthMonth=' + this.birthMonth +
                    '&birthYear=' + this.birthYear +
                    '&location=' + this.location;
                return endpoint;
            },
            proceedEmail(type) {
                if(!this.isValidMail(this.email)) return this.displayError('EMAIL', 'Invalid e-mail');
                if(this.email === this.previousMail) return true;
                axios.get(this.constructApiEndpoint(type))
                .then(response => {
                    if(response.data.account_exists === 0) {
                        this.divStyles[0] = 'display: none';
                        this.divStyles[1] = '';
                        this.$forceUpdate();
                    } else {
                        // link this to login
                        this.displayError('EMAIL', 'An account with this e-mail already exists.');
                    }
                }).catch(errors => {
                    console.log(errors);
                });
            },
            proceedNames(type) {
                if(this.firstName.length < 1) return this.displayError('NAME', 'Please insert your name.');
                if(this.lastName.length < 1) return this.displayError('SURNAME', 'Please insert your surname.');
                this.divStyles[1] = 'display: none';
                this.divStyles[2] = '';
                this.$forceUpdate();
            },
            proceedPassword(type) {
                axios.get(this.constructApiEndpoint(type))
                .then(response => {
                    if(response.data.password !== undefined) return this.displayError('PASSWORD', response.data.password[0]);
                    this.divStyles[2] = 'display: none';
                    this.divStyles[3] = '';
                    this.$forceUpdate();
                }).catch(errors => {
                    console.log(errors);
                });
            },
            proceedBirthLocation(type) {
                axios.get(this.constructApiEndpoint(type))
                    .then(response => {

                        if(response.data.yearsEligible !== undefined) return this.displayError('DATE', response.data.yearsEligible);
                        if(response.data.concatenatedDate !== undefined) return this.displayError('DATE', response.data.concatenatedDate);
                        if(response.data.location !== undefined) return this.displayError('LOCATION', response.data.location);
                        this.divStyles[3] = 'display: none';
                        this.divStyles[4] = '';
                        this.$forceUpdate();
                    }).catch(errors => {
                        console.log(errors);
                });
            },
            proceedAccountType(type) {
                this.completeRegistration();
            },
            completeRegistration() {
                event.preventDefault();
                document.getElementById('apollo_register_form_hidden').submit();
            },
            isValidMail(email) {
                let exp = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                return exp.test(String(email).toLowerCase());
            },
            initializeDate() {
                let date = new Date();
                this.birthDay = date.getDate();
                this.birthMonth = date.getMonth() + 1;
                this.birthYear = date.getFullYear();
                this.yearNow = date.getFullYear();
                this.$forceUpdate();
            },
            selectDate(type, int) {
                if(type === 'year') {
                    this.birthYear = int;
                } else if(type === 'month') {
                    this.birthMonth = int;
                } else if(type === 'day') {
                    this.birthDay = int;
                }
                this.$forceUpdate();
            },
            displayError(type, error) {
                console.log(type + ' '+ error);
                if(type === 'EMAIL') {
                    this.emailPlaceholder = error;
                    this.email = '';
                } else if(type === 'NAME') {
                    this.namePlaceholder = error;
                    this.name = '';
                } else if(type === 'SURNAME') {
                    this.surnamePlaceholder = error;
                    this.surname = '';
                } else if(type === 'DATE') {
                    this.dateError = error;
                } else if(type === 'LOCATION') {
                    this.locationPlaceholder = error;
                    this.location = '';
                }
            },
            selectAccountType(id) {
                this.selectedAccount = id;
                console.log(id);
                if(id === 1) {
                    this.standardStyle = '';
                    this.standardButtonStyle = '#001730';
                    this.agentStyle = 'apollo_account_selected';
                    this.agentButtonStyle = '#ffffff';
                } else {
                    this.standardStyle = 'apollo_account_selected';
                    this.standardButtonStyle = '#ffffff';
                    this.agentStyle = '';
                    this.agentButtonStyle = '#001730';
                }
            }
        },
        computed: {
            displaySelectedMonth() {
                return this.monthNames[this.birthMonth-1];
            },
            getAccountType() {
                return (this.selectedAccount === 0) ? ('STANDARD') : ('AGENT');
            }
        },
        mounted() {
            this.initializeDate();
        }
    }
</script>

<style scoped>

</style>
