import React from "react";
import { Installment } from "@/types/installment"

interface InstallmentTableBodyProps {
    installments: Installment[];
    openEditModal: (payment: Installment) => void;
    handleDelete: (id: number) => void;
}

const InstallmentsTableBody: React.FC<InstallmentTableBodyProps> = ({ installments, openEditModal, handleDelete }) => {
    return (
        <tbody>
            {installments.map((installment) => (
                <tr key={installment.id} className='odd:bg-white even:bg-slate-100 text-center text-slate-600'>
                    <td className="px-6 py-4 border-b">{installment.student_name}</td>
                    <td className="px-6 py-4 border-b">{installment.installment}</td>
                    <td className="px-6 py-4 border-b">R$ {installment.amount.replace('.', ',')}</td>
                    <td className="px-6 py-4 border-b">{installment.payment_date ?? 'Não Pago'}</td>
                    <td className="px-6 py-4 border-b">
                        <button
                            onClick={() => openEditModal(installment)}
                            className="bg-blue-500 text-white px-4 py-2 rounded"
                        >
                            <i className="fa-solid fa-pen"></i>
                        </button>
                        <button
                            onClick={() => handleDelete(installment.id)}
                            className="bg-red-500 text-white px-4 py-2 rounded ml-2"
                        >
                            <i className="fa-solid fa-minus"></i>
                        </button>
                    </td>
                </tr>
            ))}
        </tbody>
    )
}

export default InstallmentsTableBody;