import { setUniCookie } from "@/actions/set-cookie";
import api from "@/api/api";
import { Login } from "@/types/login";

export async function login(params: Login) {
    const route = "/clients/web/login";
    try {
        const response = await api.post(route, params);
        
        if(response.status == 200){                    
            
            setUniCookie(response.data.data.access_token);

            return response.data.data;
        }

        throw new Error()
    } catch (error) {
        
        throw new Error("Ocorreu um erro ao realizar o login, senha ou usuário inválidos")
    }
    
}