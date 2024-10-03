import api from "@/api/api";
import { Payment } from "@/types/payment";

export async function updatePayment(id: number, params: Payment) {
    const route = "payment/"+id;

    try {
        const response = await api.patch(route, params);

        return response.data.data;
    } catch (error) {
        
        console.error(error);
    }
}