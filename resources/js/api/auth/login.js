import axios from 'axios';

const getValidationResponse = (type, email, password) => {
    return(
        axios.get(`/api/validate/?type='${type}'&email='${email}'&password=${password}`)
    );
};

export default {
    getValidationResponse
}
