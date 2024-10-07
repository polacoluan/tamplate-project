import { setUniCookie } from "@/actions/set-cookie";
import apiLogin from "@/api/api-login";
import { Login } from "@/types/login";

export async function login(params: Login) {
    const route = "/clients/web/login";
    try {
        const response = await apiLogin.post(route, params);
        
        if(response.status == 200){                    
            
            setUniCookie(response.data.data.access_token);

            return response.data.data;
        }

        throw new Error()
    } catch (error: any) {
        
        const {data, status} = error.response;
        throw new Error(data.message)
    }
    
}