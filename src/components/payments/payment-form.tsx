"use client";

import React from 'react';
import { createPayment } from '@/api/payments/create-payment';
import { updatePayment } from '@/api/payments/update-payment';
import { Payment } from '@/types/payment';
import SelectStudents from "@/components/selects/select-students";
import SelectPaymentMethods from "@/components/selects/select-payment-methods";
import { useForm, SubmitHandler, FormProvider } from 'react-hook-form';

interface PaymentFormProps {
    payment?: Payment;
    onSuccess: () => void;
}

const PaymentForm: React.FC<PaymentFormProps> = ({ payment, onSuccess }) => {
    const methods = useForm<Payment>()
    const onSubmit: SubmitHandler<Payment> = async (data) => {
        try {
            if (payment) {
                await updatePayment(payment.id, data);
            } else {
                await createPayment(data);
            }
            onSuccess();
        } catch (error) {
            console.error('Falha ao enviar o formulário:', error);
        }
    };
    return (
        <FormProvider {...methods}>

            <form onSubmit={methods.handleSubmit(onSubmit)} className="space-y-4">
                <SelectStudents student_id={payment?.student_id} />
                <SelectPaymentMethods payment_method_id={payment?.payment_method_id} />

                <label htmlFor="amount" className="block mb-2">Valor à pagar:</label>
                <input
                    id="amount"
                    type="text"
                    placeholder="0000.00"
                    className="block w-full px-4 py-2 border rounded"
                    {...methods.register("amount", { required: true, maxLength: 14, value: payment?.amount })}
                />
                <button
                    type="submit"
                    className="bg-blue-500 text-white px-4 py-2 rounded mt-4"
                >
                    <i aria-hidden className="fa-solid fa-floppy-disk"></i> Salvar
                </button>
            </form>
        </FormProvider>
    );
};

export default PaymentForm;
