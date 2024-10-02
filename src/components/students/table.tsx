'use client';

import {Table, TableHeader, TableColumn, TableBody, TableRow, TableCell} from "@nextui-org/react";
import HeadTable from "./table-header";

export default function App() {
  const headers = [
    {"id": 1, "name": "Nome"},
    {"id": 2, "name": "Email"},
    {"id": 3, "name": "Celular"},
    {"id": 4, "name": "Email"},
    {"id": 5, "name": "CPF"},
    {"id": 6, "name": "Ações"},
  ]
  
  return (
    <Table aria-label="Example static collection table">
      <HeadTable headers={headers} />
      <TableBody>
        <TableRow key="1">
          <TableCell>Tony Reichert</TableCell>
          <TableCell>CEO</TableCell>
          <TableCell>Active</TableCell>
        </TableRow>
        <TableRow key="2">
          <TableCell>Zoey Lang</TableCell>
          <TableCell>Technical Lead</TableCell>
          <TableCell>Paused</TableCell>
        </TableRow>
        <TableRow key="3">
          <TableCell>Jane Fisher</TableCell>
          <TableCell>Senior Developer</TableCell>
          <TableCell>Active</TableCell>
        </TableRow>
        <TableRow key="4">
          <TableCell>William Howard</TableCell>
          <TableCell>Community Manager</TableCell>
          <TableCell>Vacation</TableCell>
        </TableRow>
      </TableBody>
    </Table>
  );
}