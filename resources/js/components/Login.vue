<template>
    <div id="apollo_jumbotron_landing" class="jumbotron" style="margin-bottom: 0">
        <div id="apollo_jumbotron_items">
            <div id="apollo_jumbotron_heading" class="apollo_jumbotron_centered_parent">
                <h1 class="apollo_jumbotron_heading1">Login</h1>
            </div>
            <div id="apollo_jumbotron_desc" class="apollo_jumbotron_centered_parent">
                <p class="apollo_jumbotron_paragraph">Welcome back. Please insert your credentials to proceed.</p>
            </div>
        </div>
        <div id="apollo_login_form_mail" v-bind:style="loginFlowEmailStyle">
            <div class="apollo_flex_item" style="padding-top: 50px">
                <img src="/img/apollo_logo.png" width="50" height="50" alt="">
            </div>
            <div class="apollo_flex_item">
                <input v-model="email" class="form-control login_form_input" type="text" :placeholder="emailPlaceholder"
                       autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false">
            </div>
            <div class="apollo_flex_item" style="margin-top: 10px;">
                <span>Don't have an account? <a id="apollo_login_no_acc" :href="routeRegister">Register here</a>.</span>
            </div>
            <div class="apollo_flex_item apollo_login_proceed">
                <form id="apollo_login_form_hidden" :action="routeLogin" method="post">
                    <input type="hidden" name="_token" :value="csrf">
                    <input type="hidden" name="email" v-model="email">
                    <input type="hidden" name="password" v-model="password">
                </form>
                <button class="apollo_btn_primary" @click="proceed('email')">Proceed</button>
            </div>
        </div>
        <div id="apollo_login_form_password" class="animated slideInLeft" v-bind:style="loginFlowPasswordStyle">
            <div class="apollo_flex_item" style="padding-top: 50px">
                <img src="/img/apollo_logo.png" width="50" height="50" alt="">
            </div>
            <div class="apollo_flex_item">
                <input v-model="password" class="form-control login_form_input" type="password" :placeholder="passwordPlaceholder"
                       autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false">
            </div>
            <div class="apollo_flex_item apollo_login_proceed">
                <button class="apollo_btn_primary" @click="proceed('final')">Proceed</button>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Login",
        props: [
            'emailPlaceholderDefault',
            'passwordPlaceholderDefault',
            'routeLogin',
            'routeRegister'
        ],
        data() {
            return {
                apiEndpoint: '/api/validate',
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                email: '',
                previousEmail: '',
                password: '',
                previousPassword: '',
                loginFlowPasswordStyle: 'display: none',
                loginFlowEmailStyle: '',
                emailPlaceholder : this.emailPlaceholderDefault,
                passwordPlaceholder: this.passwordPlaceholderDefault
            }
        },
        methods: {
            isValidMail(email) {
                let exp = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                return exp.test(String(email).toLowerCase());
            },
            proceed(type) {
                if(!this.isValidMail(this.email)) return this.displayError('EMAIL', 'Invalid e-mail');
                axios.get(this.constructApiEndpoint(type))
                .then(response => {
                    if(type === 'email') {
                        if(response.data.exists === 0)
                            return this.displayError('EMAIL', 'Account with this e-mail doesn\'t exist.');
                        else {
                            this.loginFlowPasswordStyle = '';
                            this.loginFlowEmailStyle = 'display: none';
                        }
                    } else if(type === 'final') {
                        if(response.data.correct_pass === 0)
                            return this.displayError('FINAL', 'You\'ve entered wrong password.');
                         else this.login();
                    } else return console.log('error');
                }).catch(errors => {
                    console.log(errors);
                });
            },
            constructApiEndpoint(type) {
                let endpoint = this.apiEndpoint;
                endpoint += '?type='+ type + '&email='+ this.email + '&password=' + this.password;
                return endpoint;
            },
            displayError(type, error) {
                if(type === 'FINAL') {
                    this.passwordPlaceholder = error;
                    this.password = '';
                } else if(type === 'EMAIL') {
                    this.emailPlaceholder = error;
                    this.email = '';
                }
            },
            login() {
                document.getElementById('apollo_login_form_hidden').submit();
            }
        }
    }
</script>

<style scoped>

</style>
