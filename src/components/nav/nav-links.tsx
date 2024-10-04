'use client'
import React from 'react'
import { usePathname } from 'next/navigation'

export function NavLinks() {
    const pathname = usePathname()

    return (
        <nav className="flex sm:justify-center space-x-4 bg-black">
            {[
                ['Inicio', '/'],
                ['Estudantes', '/students'],
                ['Pagamentos', '/payments'],
                ['Parcelas', '/installments'],
            ].map(([title, url]) => (
                <a key={title} href={url} className={`rounded-lg px-3 py-2 text-white font-bold hover:bg-slate-100 hover:text-slate-900 ${pathname === url ? 'bg-slate-200 text-black' : ''}`}>{title}</a>
            ))}
        </nav>
    )
}