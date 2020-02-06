export default class Currency {
    constructor(code, name, symbol = null, rate = null) {
        this.code = code;
        this.name = name;
        this.symbol = symbol;
        this.rate = rate;
    }
}
