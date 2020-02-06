import axios from 'axios';

const getCurrencyRate = (currencyCode) => {
    return axios.get(`/api/currencies/${currencyCode}`);
};

export default {
    getCurrencyRate
}
