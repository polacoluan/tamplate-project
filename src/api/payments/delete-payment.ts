import api from "@/api/api";

export async function deletePayment(id: number) {
    const route = "payment/"+id;

    try {
        const response = await api.delete(route);

        return response.data.data;
    } catch (error) {
        
        console.error(error);
    }
}