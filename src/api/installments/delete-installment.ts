import api from "@/api/api";

export async function deleteInstallment(id: number) {
    const route = "installment/"+id;

    try {
        const response = await api.delete(route);

        return response.data.data;
    } catch (error) {
        
        console.error(error);
    }
}