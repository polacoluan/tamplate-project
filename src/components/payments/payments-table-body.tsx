import React from "react";
import { PaymentTable } from "@/types/payment-table"

interface PaymentTableBodyProps {
    payments: PaymentTable[];
    openEditModal: (payment: PaymentTable) => void;
    handleDelete: (id: number) => void;
}

const PaymentsTableBody: React.FC<PaymentTableBodyProps>  = ({payments, openEditModal, handleDelete }) => {
    return (
        <tbody>
        {payments.map((payment) => {

          const totalPaid = payment.installments.data
            .filter(installment => installment.payment_date !== null)
            .reduce((acc, curr) => acc + parseFloat(curr.amount), 0)
            .toFixed(2);

          return (
            <tr key={payment.id} className='odd:bg-white even:bg-slate-100 text-center text-slate-600'>
              <td className="px-6 py-4 border-b">{payment.student.data.name}</td>
              <td className="px-6 py-4 border-b">{payment.paymentMethod.data.method}</td>
              <td className="px-6 py-4 border-b">{payment.installments.data.length}</td>
              <td className="px-6 py-4 border-b">R$ {payment.amount.replace('.', ',')}</td>
              <td className="px-6 py-4 border-b">
                R$ {totalPaid.replace('.', ',')}
              </td>
              <td className="px-6 py-4 border-b">
                <button
                  onClick={() => openEditModal(payment)}
                  className="bg-blue-500 text-white px-4 py-2 rounded"
                >
                  <i className="fa-solid fa-pen"></i>
                </button>
                <button
                  onClick={() => handleDelete(payment.id)}
                  className="bg-red-500 text-white px-4 py-2 rounded ml-2"
                >
                  <i className="fa-solid fa-minus"></i>
                </button>
              </td>
            </tr>
          )
        }
        )}
      </tbody>
    )
}

export default PaymentsTableBody;