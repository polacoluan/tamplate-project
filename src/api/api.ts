'use client';

import axios from 'axios';
import { Cookies } from "react-cookie";
const cookie = new Cookies();
const cookieValue = cookie.get("cookieUni");

const api = axios.create({
    baseURL: 'http://apiato.test/v1/',
    headers: { 'Content-type': 'application/json', 'Accept': 'application/json', 'Authorization': `Bearer ${cookieValue}` }
});

export default api;