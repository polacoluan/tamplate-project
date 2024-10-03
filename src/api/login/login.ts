import api from "@/api/api";
import { Login } from "@/types/login";

export async function login(params: Login) {
    const route = "/clients/web/login";

    const response = await api.post(route, params, {
        headers: { 'Content-type': 'application/json', 'Accept': 'application/json' }
    }).then(function (response) {
        
        return response;
    }).catch(function (error) {
        if (error.response) {

            return error.response;
        } else if (error.request) {

           return error.request;
        } else {

            return error.message;
        }
    });

    return response;
}