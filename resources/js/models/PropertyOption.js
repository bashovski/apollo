export default class PropertyOption {
    constructor(title, icon, callback, defaultValue = null) {
        this.title = title;
        this.icon = icon;
        this.callback = callback;
        this.defaultValue = defaultValue;
    }
}
