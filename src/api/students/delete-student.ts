import api from "@/api/api";

export async function deleteStudent(id: number) {
    const route = "student/"+id;

    try {
        const response = await api.delete(route);

        return response.data.data;
    } catch (error) {
        
        console.error(error);
    }
}