import { Student } from '@/types/student';
import React from 'react';

interface StudentsTableBodyProps {
  students: Student[];
  openEditModal: (student: Student) => void;
  handleDelete: (id: number) => void;
}

const StudentsTableBody: React.FC<StudentsTableBodyProps>  = ({students, openEditModal, handleDelete }) => {

    return (
    <tbody>
    {students.map((student) => (
      <tr key={student.id} className='odd:bg-white even:bg-slate-100 text-center text-slate-600'>
        <td className="px-6 py-4 border-b">{student.name}</td>
        <td className="px-6 py-4 border-b">{student.email}</td>
        <td className="px-6 py-4 border-b">{student.cellphone}</td>
        <td className="px-6 py-4 border-b">{student.birth_date}</td>
        <td className="px-6 py-4 border-b">{student.cpf}</td>
        <td className="px-6 py-4 border-b">
          <button
            onClick={() => openEditModal(student)}
            className="bg-blue-500 text-white px-4 py-2 rounded"
          >
            <i aria-hidden className="fa-solid fa-user-pen"></i>
          </button>
          <button
            onClick={() => handleDelete(student.id)}
            className="bg-red-500 text-white px-4 py-2 rounded ml-2"
          >
            <i aria-hidden className="fa-solid fa-user-minus"></i>
          </button>
        </td>
      </tr>
    ))}
  </tbody>
)};

export default StudentsTableBody;