"use client";

import React, { useEffect, useState } from 'react';
import { Installment } from '@/types/installment';
import CustomModal from '@/components/modal/modal';
import InstallmentForm from '@/components/installments/installment-form';
import { listInstallments } from '@/api/installments/list-installments';
import { deleteInstallment } from '@/api/installments/delete-installment';
import InstallmentsTableHeader from '@/components/installments/installments-table-header';
import InstallmentsTableBody from '@/components/installments/installments-table-body';

const InstallmentPage = () => {
  const [installments, setInstallments] = useState<Installment[]>([]);
  const [isAddModalOpen, setAddModalOpen] = useState(false);
  const [isEditModalOpen, setEditModalOpen] = useState(false);
  const [currentInstallment, setCurrentInstallment] = useState<Installment | null>(null);

  const loadInstallments = async () => {
    try {
      const response = await listInstallments();
      setInstallments(response);
    } catch (error) {
      console.error('Erro ao Buscar Parcelas:', error);
    }
  };

  const handleDelete = async (id: number) => {
    try {
      await deleteInstallment(id);
      await loadInstallments();
    } catch (error) {
      console.error('Erro ao Remover Parcela:', error);
    }
  };

  const openEditModal = (installment: Installment) => {
    setCurrentInstallment(installment);
    setEditModalOpen(true);
  };

  const openAddModal = () => {
    setCurrentInstallment(null);
    setAddModalOpen(true);
  };

  const closeModal = () => {
    setEditModalOpen(false);
    setAddModalOpen(false);
  };

  const handleFormSubmit = () => {
    loadInstallments();
    setAddModalOpen(false);
    setEditModalOpen(false);
  };

  useEffect(() => {
    loadInstallments();
  }, []);


  return (
    <div className="container mx-auto">
      <h1 className="text-2xl font-bold mb-4 text-center">Lista de Parcelas</h1>
      <div className="container mx-auto mt-8">
        <table className="min-w-full bg-white">
          <InstallmentsTableHeader />
          <InstallmentsTableBody installments={installments} openEditModal={openEditModal} handleDelete={handleDelete} />
        </table>

        <CustomModal isOpen={isAddModalOpen} onRequestClose={closeModal}>
          <h2 className="text-xl font-bold mb-4 text-center">Adicionar Parcela</h2>
          <InstallmentForm onSuccess={handleFormSubmit} />
        </CustomModal>
        
        <CustomModal isOpen={isEditModalOpen} onRequestClose={closeModal}>
          <h2 className="text-xl font-bold mb-4 text-center">Editar Parcela</h2>
          {currentInstallment && <InstallmentForm installment={currentInstallment} onSuccess={handleFormSubmit} />}
        </CustomModal>
      </div>
    </div>
  )
};

export default InstallmentPage;