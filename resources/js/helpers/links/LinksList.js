import Link from '../../models/Link';

const footerLinks = {
    features: [
        new Link('Home', '/'),
        new Link('Place a Property', '/properties/create'),
        new Link('Search', '/search'),
        new Link('Login', '/login')
    ],
    userSupport: [
        new Link('FAQ', '/faq'),
        new Link('Privacy', '/privacy'),
        new Link('Terms of Service', '/tos'),
        new Link('Support', '/support')
    ]
};

const getFooterLinks = () => {
    return footerLinks;
};

export default {
    getFooterLinks
};
