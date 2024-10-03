"use client";

import React, { useEffect, useState } from 'react';
import { Student } from '@/types/student';
import CustomModal from '@/components/modal/modal';
import StudentForm from '@/components/students/student-form';
import { listStudents } from '@/api/students/list-students';
import { deleteStudent } from '@/api/students/delete-student';
import StudentsTableHeader from '@/components/students/students-table-header';
import StudentsTableBody from '@/components/students/students-table-body';

const StudentsPage = () => {
  const [isAddModalOpen, setAddModalOpen] = useState(false);
  const [isEditModalOpen, setEditModalOpen] = useState(false);
  const [currentStudent, setCurrentStudent] = useState<Student | null>(null);
  const [students, setStudents] = useState<Student[]>([]);

  const loadStudents = async () => {
    try {
      const response = await listStudents();
      setStudents(response);
    } catch (error) {
      console.error('Erro ao Buscar Estudantes:', error);
    }
  };

  const openEditModal = (student: Student) => {
    setCurrentStudent(student);
    setEditModalOpen(true);
  };

  const openAddModal = () => {
    setCurrentStudent(null);
    setAddModalOpen(true);
  };

  const handleDelete = async (id: number) => {
    try {
      await deleteStudent(id);
      await loadStudents();
    } catch (error) {
      console.error('Erro ao Remover Estudante:', error);
    }
  };

  const closeModal = () => {
    setEditModalOpen(false);
    setAddModalOpen(false);
  };

  const handleFormSubmit = () => {
    loadStudents();
    setAddModalOpen(false);
    setEditModalOpen(false);
  };

  useEffect(() => {
    loadStudents();
  }, []);

  return (
    <div className="container mx-auto">
      <h1 className="text-2xl font-bold mb-4 mt-4 text-center">Lista de Estudantes</h1>
      <div className="container mx-auto mt-8">
        <button
          onClick={openAddModal}
          className="bg-blue-500 text-white px-4 py-2 rounded mb-4"
        >
          <i aria-hidden className="fa-solid fa-user-plus"></i> Adicionar Estudante
        </button>
        <table className="min-w-full">
          <StudentsTableHeader />
          <StudentsTableBody students={students} openEditModal={openEditModal} handleDelete={handleDelete} />
        </table>

        <CustomModal isOpen={isAddModalOpen} onRequestClose={closeModal}>
          <h2 className="text-xl font-bold mb-4 text-center">Adicionar Estudante</h2>
          <StudentForm onSuccess={handleFormSubmit} />
        </CustomModal>

        <CustomModal isOpen={isEditModalOpen} onRequestClose={closeModal}>
          <h2 className="text-xl font-bold mb-4 text-center">Editar Estudante</h2>
          {currentStudent && <StudentForm student={currentStudent} onSuccess={handleFormSubmit} />}
        </CustomModal>
      </div>
    </div>
  )
};

export default StudentsPage;