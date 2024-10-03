const PaymentTableHeader = () => (
    <thead className='bg-slate-100'>
        <tr>
            <th className="px-6 py-3 border-b-2">Nome do Estudante</th>
            <th className="px-6 py-3 border-b-2">Forma de Pagamento</th>
            <th className="px-6 py-3 border-b-2">Quantidade de Parcelas</th>
            <th className="px-6 py-3 border-b-2">Valor</th>
            <th className="px-6 py-3 border-b-2">Valor Pago</th>
            <th className="px-6 py-3 border-b-2">Ações</th>
        </tr>
    </thead>
);

export default PaymentTableHeader;