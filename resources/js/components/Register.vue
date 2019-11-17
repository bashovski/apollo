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
                <input name="email" v-model="email" class="form-control login_form_input" type="text" placeholder="E-mail"
                       autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false">
            </div>
            <div class="apollo_flex_item" style="margin-top: 10px;">
                <span>Already have an account? <a id="apollo_login_no_acc" :href="routeRegister">Log back in</a>.</span>
            </div>
            <div class="apollo_flex_item apollo_register_proceed">
                <form id="apollo_login_form_hidden" :action="routeLogin" method="post">
                    <input type="hidden" name="_token" :value="csrf">
                    <input type="hidden" name="email" >
                    <input type="hidden" name="password" >
                    <input type="hidden" name="password_confirmation" >
                    <input type="hidden" name="firstName" >
                    <input type="hidden" name="lastName" >
                </form>
                <button class="apollo_btn_primary" @click="next('email')">Next</button>
            </div>
        </div>

        <div id="apollo_register_form_name" class="apollo_login_form_box animated slideInLeft" v-bind:style="divStyles[1]">
            <div class="apollo_flex_item" style="padding-top: 50px">
                <img src="/img/apollo_logo.png" width="50" height="50" alt="">
            </div>
            <div class="apollo_flex_item">
                <input v-model="firstName" class="form-control login_form_input" type="text" placeholder="Name"
                       autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false">
            </div>
            <div class="apollo_flex_item">
                <input v-model="lastName" style="margin-top: 25px;" class="form-control login_form_input" type="text" placeholder="Surname"
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
                <input v-model="password" class="form-control login_form_input" type="text" placeholder="Password"
                       autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false">
            </div>
            <div class="apollo_flex_item">
                <input v-model="passwordConfirmation" style="margin-top: 25px;" class="form-control login_form_input" type="text" placeholder="Confirm your password"
                       autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false">
            </div>
            <div class="apollo_flex_item apollo_register_proceed">
                <button class="apollo_btn_primary" @click="next('password')">Next</button>
            </div>
        </div>

        <div id="apollo_register_form_birth_loc" class="apollo_login_form_box animated slideInLeft" >
            <div class="apollo_flex_item" style="padding-top: 50px">
                <img src="/img/apollo_logo.png" width="50" height="50" alt="">
            </div>
            <div class="apollo_flex_item" style="padding-top: 50px">
                <h5 class="apollo_register_form_label">Date of birth</h5>
            </div>
            <div class="apollo_flex_item">
                <div class="dropdown show" style="width: 25%;">
                    <a id="apollo_dropdown_button" class="btn dropdown-toggle" href="#" role="button" data-toggle="dropdown" >
                        <span style="vertical-align: middle;">16</span>
                        <img src="/svg/apollo_down_caret.svg" height="14" width="14" style="vertical-align: middle;" alt="">
                    </a>
                    <div class="dropdown-menu" style="overflow-y: auto; height: 200px;">
                        <a v-for="i in 31" class="dropdown-item" style="cursor: pointer;" @click="selectDate('month', i)">{{i}}</a>
                    </div>
                </div>

                <div class="dropdown show" style="width: 25%;">
                    <a id="apollo_dropdown_button" class="btn dropdown-toggle" href="#" role="button" data-toggle="dropdown" >
                        <span style="vertical-align: middle;">November</span>
                        <img src="/svg/apollo_down_caret.svg" height="14" width="14" style="vertical-align: middle;" alt="">
                    </a>
                    <div class="dropdown-menu" style="overflow-y: auto; height: 200px;">
                        <a v-for="i in 12" class="dropdown-item" style="cursor: pointer;" @click="selectDate('month', i)">{{i}}</a>
                    </div>
                </div>

                <div class="dropdown show" style="width: 25%;">
                    <a id="apollo_dropdown_button" class="btn dropdown-toggle" href="#" role="button" data-toggle="dropdown" >
                        <span style="vertical-align: middle;">2019</span>
                        <img src="/svg/apollo_down_caret.svg" height="14" width="14" style="vertical-align: middle;" alt="">
                    </a>
                    <div class="dropdown-menu" style="overflow-y: auto; height: 200px;">
                        <a v-for="i in 101" class="dropdown-item" style="cursor: pointer;" @click="selectDate('month', i)">{{2019+1-i}}</a>
                    </div>
                </div>
            </div>
            <div class="apollo_flex_item" style="padding-top: 50px">
                <h5 class="apollo_register_form_label">Where are you from?</h5>
            </div>
            <div class="apollo_flex_item">

            </div>
            <div class="apollo_flex_item apollo_register_proceed">
                <button class="apollo_btn_primary" @click="next('birthloc')">Next</button>
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
                passwordConfirmation: '',
                previousMail: '_',
                previousPassword: '_'
            }
        },
        methods: {
            next(type) {
                if(type === 'email') this.proceedEmail(type);
                else if(type === 'names') this.proceedNames(type);
                else if(type === 'password') this.proceedPassword(type);
            },
            constructApiEndpoint(type) {
                let endpoint = this.apiEndpoint;
                endpoint += '?type='+ type +
                    '&email=' + this.email +
                    '&firstname=' + this.firstName +
                    '&lastname=' + this.lastName +
                    '&password=' + this.password +
                    '&password_confirmation=' + this.passwordConfirmation;
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

                    }
                }).catch(errors => {
                    console.log(errors);
                });
            },
            proceedNames(type) {
                if(this.firstName.length < 1) return this.displayError('NAMES', 'Please insert your name.');
                if(this.lastName.length < 1) return this.displayError('NAMES', 'Please insert your surname.');
                this.divStyles[1] = 'display: none';
                this.divStyles[2] = '';
                this.$forceUpdate();
            },
            proceedPassword(type) {
                axios.get(this.constructApiEndpoint(type))
                .then(response => {
                    if(response.data.password !== undefined) return this.displayError('PASSWORD', response.data.password[0]);
                    console.log(response.data);
                    this.divStyles[2] = 'display: none';
                    this.divStyles[3] = '';
                    this.$forceUpdate();
                }).catch(errors => {
                    console.log(errors);
                });
            },
            isValidMail(email) {
                let exp = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                return exp.test(String(email).toLowerCase());
            },
            selectDate(type, int) {

            },
            displayError(type, error) {
                console.log(type + ' '+ error);
                /*if(type === 'FINAL') {
                    this.passwordPlaceholder = error;
                    this.password = '';
                } else if(type === 'EMAIL') {
                    this.emailPlaceholder = error;
                    this.email = '';
                }*/
            }
        }
    }
</script>

<style scoped>

</style>
