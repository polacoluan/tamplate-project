"use client";

import React, { useEffect, useState } from 'react';
import { PaymentTable } from '@/types/payment-table';
import { Payment } from '@/types/payment';
import CustomModal from '@/components/modal/modal';
import PaymentForm from '@/components/payments/payment-form';
import { listPayments } from '@/api/payments/list-payments';
import { deletePayment } from '@/api/payments/delete-payment';
import PaymentsTableHeader from '@/components/payments/payments-table-header';
import PaymentsTableBody from '@/components/payments/payments-table-body';

const PaymentsPage = () => {
  const [payments, setPayments] = useState<PaymentTable[]>([]);
  const [isAddModalOpen, setAddModalOpen] = useState(false);
  const [isEditModalOpen, setEditModalOpen] = useState(false);
  const [currentPayment, setCurrentPayment] = useState<PaymentTable | null>(null);

  const loadPayments = async () => {
    try {
      const response = await listPayments();
      setPayments(response);
    } catch (error) {
      console.error('Erro ao Buscar Pagamento:', error);
    }
  };

  const handleDelete = async (id: number) => {
    try {
      await deletePayment(id);
      await loadPayments();
    } catch (error) {
      console.error('Erro ao Remover Pagamento:', error);
    }
  };

  const openEditModal = (payment: PaymentTable) => {
    setCurrentPayment(payment);
    setEditModalOpen(true);
  };

  const openAddModal = () => {
    setCurrentPayment(null);
    setAddModalOpen(true);
  };

  const closeModal = () => {
    setEditModalOpen(false);
    setAddModalOpen(false);
  };

  const handleFormSubmit = () => {
    loadPayments();
    setAddModalOpen(false);
    setEditModalOpen(false);
  };

  const mapPaymentTableToPayment = (paymentTable: PaymentTable): Payment => {
    return {
      id: paymentTable.id,
      student_id: paymentTable.student_id,
      payment_method_id: paymentTable.payment_method_id,
      amount: parseFloat(paymentTable.amount),
    };
  };

  useEffect(() => {
    loadPayments();
  }, []);

  return (
    <div className="container mx-auto">
      <h1 className="text-2xl font-bold mb-4 text-center">Lista de Pagamentos</h1>
      <div className="container mx-auto mt-8">
        <button
          onClick={openAddModal}
          className="bg-blue-500 text-white px-4 py-2 rounded mb-4"
        >
          <i className="fa-solid fa-plus"></i> Adicionar Pagamento
        </button>
        <table className="min-w-full bg-white">
          <PaymentsTableHeader />
          <PaymentsTableBody payments={payments} openEditModal={openEditModal} handleDelete={handleDelete} />
        </table>

        <CustomModal isOpen={isAddModalOpen} onRequestClose={closeModal}>
          <h2 className="text-xl font-bold mb-4 text-center">Adicionar Pagamento</h2>
          <PaymentForm onSuccess={handleFormSubmit} />
        </CustomModal>

        <CustomModal isOpen={isEditModalOpen} onRequestClose={closeModal}>
          <h2 className="text-xl font-bold mb-4 text-center">Editar Pagamento</h2>
          {currentPayment && <PaymentForm payment={mapPaymentTableToPayment(currentPayment)} onSuccess={handleFormSubmit} />}
        </CustomModal>
      </div>
    </div>
  )
};

export default PaymentsPage;