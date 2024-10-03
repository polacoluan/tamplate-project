import api from "@/api/api";
import { Student } from "@/types/payment-table";

export async function createStudent(params: Student) {
    const route = "student/";

    try {
        const response = await api.post(route, params);

        return response.data.data;
    } catch (error) {
        
        console.error(error);
    }
}