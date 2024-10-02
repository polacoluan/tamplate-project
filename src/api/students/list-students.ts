import api from "../api";

const students = {
    "data": [
        {
            "name": "Luan de Carvalho",
            "email": "polacoluan@gmail.com",
            "cellphone": "(41) 99615-1998",
            "birth_date": "1999-03-24",
            "cpf": "100.642.479-29"
        }]
};

export async function listStudents() {
    const route = "student";

    try {
        const response = await api.get(route);

        // return response.data.data;
        return students.data;
    } catch (error) {

        console.error(error);
    }
}