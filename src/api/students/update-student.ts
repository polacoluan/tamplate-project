import api from "@/api/api";
import { Student } from "@/types/payment-table";

export async function updateStudent(id: number, params: Student) {
    const route = "student/"+id;

    try {
        const response = await api.patch(route, params);

        return response.data.data;
    } catch (error) {
        
        console.error(error);
    }
}