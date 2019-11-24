<template>
    <div id="apollo_myaccount_profile_container" class="container" style="margin-left: 7.5%">
        <div id="apollo_myaccount_left" class="col-md-8">
            <div id="apollo_myaccount_profile" class="row shadow">
                <img id="apollo_myaccount_avatar" src="/img/profile.jpg" alt="">
                <div id="apollo_myaccount_profile_info">
                    <div id="apollo_myaccount_profile_info_heading">
                        <div id="apollo_myaccount_profile_info_name">Avatar</div>
                        <div>Click to change your avatar</div>
                    </div>
                </div>
            </div>
            <div class="apollo_myaccount_item row shadow">
                <img src="/svg/apollo_email.svg" width="24" height="24" alt="">
                <div>Change your e-mail</div>
                <div class="apollo_myaccount_item_right">
                    <input class="apollo_settings_input" name="email" type="text" placeholder="user@email.com">
                    <img src="/svg/apollo_edit.svg" style="margin-left: 10px" width="16" height="16" alt="">
                </div>
            </div>
            <div class="apollo_myaccount_item row shadow">
                <img src="/svg/apollo_location_pin.svg" width="24" height="24" alt="">
                <div>Change your location</div>
                <div class="apollo_myaccount_item_right">
                    <input class="apollo_settings_input" name="location" type="text" placeholder="Santa Monica, CA">
                    <img src="/svg/apollo_edit.svg" style="margin-left: 10px" width="16" height="16" alt="">
                </div>
            </div>
            <div class="apollo_myaccount_item row shadow">
                <img src="/svg/apollo_location_pin.svg" width="24" height="24" alt="">
                <div>Set ZIP/Postal-Code</div>
                <div class="apollo_myaccount_item_right">
                    <input class="apollo_settings_input" name="location" type="text" placeholder="71000">
                    <img src="/svg/apollo_edit.svg" style="margin-left: 10px" width="16" height="16" alt="">
                </div>
            </div>
            <div id="apollo_myaccount_settings_access" class="row shadow">
                <img src="/svg/apollo_access_view.svg" width="24" height="24" alt="">
                <div>Choose who can access your profile page</div>
                <div class="dropdown apollo_settings_dropdown" style="width: 26%">
                    <button class="btn apollo_settings_dropdown_btn dropdown-toggle " type="button" id="dropdownMenuButton"
                            style="width: 100%;"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span>Public</span>
                        <img src="/svg/apollo_down_caret.svg" height="14" width="14" style="vertical-align: middle;" alt="">
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Everyone</a>
                        <a class="dropdown-item" href="#">Only registered users</a>
                        <a class="dropdown-item" href="#">Only real estate agents</a>
                        <a class="dropdown-item" href="#">Only Me</a>
                    </div>
                </div>
            </div>
            <div class="apollo_myaccount_item row shadow">
                <img src="/svg/apollo_balloon.svg" width="24" height="24" alt="">
                <div>Change date of Birth</div>
                <div class="apollo_myaccount_item_right">
                    <input class="apollo_settings_input" name="dateOfBirth" type="text" placeholder="DD-MM-YYYY">
                    <img src="/svg/apollo_edit.svg" style="margin-left: 10px" width="16" height="16" alt="">
                </div>
            </div>
            <div class="apollo_myaccount_item row shadow">
                <img src="/svg/apollo_password.svg" width="24" height="24" alt="">
                <div>Change password</div>
                <div class="apollo_myaccount_item_right">
                    <input class="apollo_settings_input" name="password" type="password" placeholder="Insert your new password.">
                    <img src="/svg/apollo_edit.svg" style="margin-left: 10px" width="16" height="16" alt="">
                </div>
            </div>
            <div class="apollo_myaccount_item row shadow">
                <img src="/svg/apollo_password.svg" width="24" height="24" alt="">
                <div>Confirm your new password</div>
                <div class="apollo_myaccount_item_right">
                    <input class="apollo_settings_input" name="password_confirmation" type="password" placeholder="Confirm new password...">
                    <img src="/svg/apollo_edit.svg" style="margin-left: 10px" width="16" height="16" alt="">
                </div>
            </div>
            <div id="apollo_myaccount_settings_access" class="row shadow">
                <img src="/svg/apollo_globe.svg" width="24" height="24" alt="">
                <div>Language</div>
                <div class="dropdown apollo_settings_dropdown" style="width: 26%">
                    <button class="btn apollo_settings_dropdown_btn dropdown-toggle " type="button" id="dropdownMenuButton"
                            style="width: 100%;"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span>English</span>
                        <img src="/svg/apollo_down_caret.svg" height="14" width="14" style="vertical-align: middle;" alt="">
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Bosanski</a>
                        <a class="dropdown-item" href="#">English</a>
                        <a class="dropdown-item" href="#">Nederlands</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import store from "../store/index"
    export default {
        name: "MyAccountSettings",
        computed: {
            getViewStyle() {
                return store.getters.getViewStyles[5];
            }
        }
    }
</script>

<style scoped>

</style>
