import apiLogin from "@/api/api-login";
import { User } from "@/types/user";


export async function signup(params: User) {
    const route = "/register"; 
    try {
        const response = await apiLogin.post(route, params);
        
        if(response.status == 200){                    

            return response.data.data;
        }

        throw new Error()
    } catch (error: any) {

        const {data, status} = error.response;
        throw new Error(data.message)
    }
}