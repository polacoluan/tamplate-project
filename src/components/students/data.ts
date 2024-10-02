
import { useEffect, useState } from "react";
import { listStudents } from "@/api/students/list-students";
import { Student } from "@/types/student";

const columns = [
    { "key": "name", "label": "Nome" },
    { "key": "email", "label": "Email" },
    { "key": "cellphone", "label": "Celular" },
    { "key": "birth_date", "label": "Data Nasc." },
    { "key": "cpf", "label": "CPF" }
];

const students = () => {
    const [students, setStudents] = useState<Student[]>([]);

    const loadStudents = async () => {
        try {
            const response = await listStudents();
            setStudents(response);
        } catch (error) {
            alert(error);
        }
    };

    useEffect(() => {
        loadStudents();
    }, []);

    return (students);
}
export { columns, students };