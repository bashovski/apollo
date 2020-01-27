import axios from 'axios';

const getUserProperties = (userId) => {
    return (
        axios.get(`/api/properties?user_id=${userId}`)
    );
};

const getRecentProperties = () => {
    return (
        axios.get(`/api/properties?recent=true&limit=3`)
    );
};

export default {
    getUserProperties,
    getRecentProperties
}
