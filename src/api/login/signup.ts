import api from "@/api/api";
import { User } from "@/types/user";


export async function signup(params: User) {
    const route = "/register"; 
    try {
        const response = await api.post(route, params);
        
        if(response.status == 200){                    

            return response.data.data;
        }

        throw new Error()
    } catch (error) {

        throw new Error("Ocorreu um erro ao cadastrar o usuário!")
    }
}