'use client';

import {TableHeader, TableColumn} from "@nextui-org/react";

export default function HeadTable() {

  const columns = [
    {"uid": 1, "label": "Nome"},
    {"uid": 2, "label": "Email"},
    {"uid": 3, "label": "Celular"},
    {"uid": 4, "label": "Email"},
    {"uid": 5, "label": "CPF"},
    {"uid": 6, "label": "Ações"},
  ];

    return (
      <TableHeader columns={columns}>
        {(column) => <TableColumn key={column.uid}>{column.label}</TableColumn>}
      </TableHeader>
  );
}