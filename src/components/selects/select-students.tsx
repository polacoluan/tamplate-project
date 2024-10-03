"use client";

import React, { useEffect, useState } from 'react';
import { listStudents } from '@/api/students/list-students';
import { useFormContext } from 'react-hook-form';

interface DataOption {
  id: number;
  name: string;
}

interface SelectComponentProps {
  student_id: number | undefined;
}

const SelectStudents: React.FC<SelectComponentProps> = ({ student_id }) => {
  const { register } = useFormContext();
  const [options, setOptions] = useState<DataOption[]>([]);

  useEffect(() => {
    const loadOptions = async () => {
      const response = await listStudents();
      setOptions(response);
    };

    loadOptions();
  }, []);

  return (
    <div>
      <label htmlFor="select-students" className="block mb-2">Selecione um Estudante:</label>
      <select
        id="select-students"
        className="block w-full px-4 py-2 border rounded"
        value={student_id}
        {...register("student_id", { required: true })}
      >
        <option value="">Selecione</option>
        {options.map(option => (
          <option key={option.id} value={option.id}>
            {option.name}
          </option>
        ))}
      </select>
    </div>
  );
};

export default SelectStudents;
