import axios from 'axios';

const validateRegister = (type, email, firstName, lastName, password, passwordConfirmation, birthDay, birthMonth, birthYear, location) => {
    let query = '?type='+ type +
        '&email=' + email +
        '&firstname=' + firstName +
        '&lastname=' + lastName +
        '&password=' + password +
        '&password_confirmation=' + passwordConfirmation +
        '&birthDay=' + birthDay +
        '&birthMonth=' + birthMonth +
        '&birthYear=' + birthYear +
        '&location=' + location;
    return(
        axios.get(`/api/validateregister/${query}`)
    );
};

export default {
    validateRegister
}
