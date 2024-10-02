'use client';

import {TableHeader, TableColumn} from "@nextui-org/react";

export default function HeadTable({headers}:any) {
    return (
      <TableHeader>
        {headers.map((item: any, index: number) => (
            <TableColumn key={index}>{item.name}</TableColumn>    
        ))}
      </TableHeader>
  );
}