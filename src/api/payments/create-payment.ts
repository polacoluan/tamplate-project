import api from "@/api/api";
import { Payment } from "@/types/payment";

export async function createPayment(params: Payment) {
    const route = "payment/";

    try {
        const response = await api.post(route, params);

        return response.data.data;
    } catch (error) {
        
        console.error(error);
    }
}