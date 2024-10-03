import api from "@/api/api";
import { Installment } from "@/types/installment";

export async function updateInstallment(id: number, params: Installment) {
    const route = "installment/"+id;

    try {
        const response = await api.patch(route, params);

        return response.data.data;
    } catch (error) {
        
        console.error(error);
    }
}