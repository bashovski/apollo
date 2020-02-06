import Currencies from './list';

const getCurrencies = () => {
    return Currencies;
};

const getCurrencyByCode = (code) => {
    for(let i = 0, length = Currencies.length; i < length; i++) {
        if(code === Currencies[i].code)
            return Currencies[i];
    }
    return null;
};

export default {
    getCurrencies,
    getCurrencyByCode
}
