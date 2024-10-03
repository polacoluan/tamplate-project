"use client";

import React from 'react';
import { Installment } from '@/types/installment';
import { updateInstallment } from '@/api/installments/update-installment';
import { useForm, SubmitHandler } from 'react-hook-form';

interface InstallmentFormProps {
  installment?: Installment;
  onSuccess: () => void;
}

const InstallmentForm: React.FC<InstallmentFormProps> = ({ installment, onSuccess }) => {
  const { register, handleSubmit } = useForm<Installment>()
  const onSubmit: SubmitHandler<Installment> = async (data) => {
    try {
      if (installment) {
        await updateInstallment(installment.id, data);
      }    
      onSuccess();
    } catch (error) {
      console.error('Falha ao enviar o formulário:', error);
    }
  };
  return (
    <form onSubmit={handleSubmit(onSubmit)} className="space-y-4">
      <label htmlFor="installment" className="block mb-2">Número da parcela:</label>
      <input
        id="installment"
        type="text"
        placeholder="Nome"
        className="block w-full px-4 py-2 border rounded"
        {...register("installment", { required: true, value: installment?.installment })}
      />

      <label htmlFor="amount" className="block mb-2">Valor da parcela:</label>
      <input
        id="amount"
        type="text"
        placeholder="Valor"
        className="block w-full px-4 py-2 border rounded"
        {...register("amount", { required: true, value: installment?.amount })}
      />

      <label htmlFor="payment_date" className="block mb-2">Data do Pagamento:</label>
      <input
        id="payment_date"
        type="datetime-local"
        className="block w-full px-4 py-2 border rounded"
        {...register("payment_date", { required: true, value: installment?.payment_date })}
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

export default InstallmentForm;
