import PropertyOption from "../../models/PropertyOption";

export const propertyOptions = [

    new PropertyOption('Update Energy Label', 'energylabel', 'onEnergyLabelUpdateClicked'),

    new PropertyOption('Update Location Info', 'location', 'onUpdateLocationInfoClicked'),

    new PropertyOption('Update Cadastre', 'cadastre', 'onUpdateCadastreClicked'),

    new PropertyOption('Update Photos', 'photo', 'onUpdatePhotosClicked'),

    new PropertyOption('Brochure', 'brochure', 'onBrochureClicked'),
];
