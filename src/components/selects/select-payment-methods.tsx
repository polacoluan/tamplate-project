"use client";

import React, { useEffect, useState } from 'react';
import { listPaymentMethods } from '@/api/payment-methods/list-payment-methods';
import { useFormContext } from 'react-hook-form';

interface DataOption {
  id: number;
  method: string;
}

interface SelectComponentProps {
  payment_method_id: number | undefined;
}

const SelectPaymentMethods: React.FC<SelectComponentProps> = ({ payment_method_id }) => {
  const { register } = useFormContext();
  const [options, setOptions] = useState<DataOption[]>([]);

  useEffect(() => {
    const loadOptions = async () => {
      const response = await listPaymentMethods();
      setOptions(response);
    };

    loadOptions();
  }, []);

  return (
    <div>
      <label htmlFor="select-payment-methods" className="block mb-2">Selecione a forma de pagamento:</label>
      <select
        className="block w-full px-4 py-2 border rounded"
        value={payment_method_id}
        {...register("payment_method_id", { required: true })}
      >
        <option value="">Selecione</option>
        {options.map(option => (
          <option key={option.id} value={option.id}>
            {option.method}
          </option>
        ))}
      </select>
    </div>
  );
};

export default SelectPaymentMethods;