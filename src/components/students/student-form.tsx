"use client";

import React from 'react';
import InputMask from 'react-input-mask';
import { createStudent } from '@/api/students/create-student';
import { updateStudent } from '@/api/students/update-student';
import { Student } from '@/types/student';
import { useForm, SubmitHandler } from 'react-hook-form';

interface StudentFormProps {
  student?: Student;
  onSuccess: () => void;
}

const StudentForm: React.FC<StudentFormProps> = ({ student, onSuccess }) => {
  const { register, handleSubmit } = useForm<Student>()
  const onSubmit: SubmitHandler<Student> = async (data) => {
    try {
      if (student) {
        await updateStudent(student.id, data);
      } else {
        await createStudent(data);
      }
      onSuccess();
    } catch (error) {
      console.error('Falha ao enviar o formulário:', error);
    }
  };

  return (
    <form onSubmit={handleSubmit(onSubmit)} className="space-y-4">
      <label htmlFor="name" className="block mb-2">Nome:</label>
      <input
        id="name"
        type="text"
        placeholder="Nome"
        className="block w-full px-4 py-2 border rounded"
        {...register("name", { required: true, value: student?.name })}
      />

      <label htmlFor="email" className="block mb-2">Email:</label>
      <input
        id="email"
        type="email"
        placeholder="Email"
        className="block w-full px-4 py-2 border rounded"
        {...register("email", { required: true, value: student?.email })}
      />

      <label htmlFor="cellphone" className="block mb-2">Celular:</label>
      <InputMask
        id="cellphone"
        mask="(99) 99999-9999"
        type="text"
        placeholder="(00) 00000-0000"
        className="block w-full px-4 py-2 border rounded"
        {...register("cellphone", { required: true, maxLength: 15, value: student?.cellphone })}
      />

      <label htmlFor="birth_date" className="block mb-2">Data de Nascimento:</label>
      <input
        id="birth_date"
        type="date"
        className="block w-full px-4 py-2 border rounded"
        {...register("birth_date", { required: true, valueAsDate: true, value: student?.birth_date })}
      />

      <label htmlFor="cpf" className="block mb-2">CPF:</label>
      <InputMask
        id="cpf"
        mask="999.999.999-99"
        type="text"
        placeholder="000.000.000-00"
        className="block w-full px-4 py-2 border rounded"
        {...register("cpf", { required: true, maxLength: 14, value: student?.cpf })}
      />
      <button
        type="submit"
        className="bg-blue-500 text-white px-4 py-2 rounded mt-4"
      >
        <i className="fa-solid fa-floppy-disk"></i> Salvar
      </button>
    </form>
  );
};

export default StudentForm;
