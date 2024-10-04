import axios from 'axios';

const api = axios.create({
    baseURL: 'http://apiato.test/v1/',
    headers: { 'Content-type': 'application/json', 'Accept': 'application/json' }
});

export default api;