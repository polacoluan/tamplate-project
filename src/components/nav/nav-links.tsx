'use client';

import React, { useEffect, useState } from 'react'
import { usePathname } from 'next/navigation'
import { Cookies } from "react-cookie";

export function NavLinks() {
    const pathname = usePathname()
    const [cookieUni, setCookieUni] = useState<string | null>(null);
    const cookie = new Cookies();

    useEffect(() => {
        const cookieValue = cookie.get("cookieUni");
        setCookieUni(cookieValue || null);
    }, []);

    const logout = () => {
        cookie.remove("cookieUni");
    }

    return (
        <nav className="relative flex items-center bg-black px-4">
            <div className="flex-grow flex justify-center space-x-4">
                {[
                    ['Inicio', '/'],
                    ['Estudantes', '/students'],
                    ['Pagamentos', '/payments'],
                    ['Parcelas', '/installments'],
                ].map(([title, url]) => (
                    <a key={title} href={url} className={`rounded-lg px-3 py-2 text-white font-bold hover:bg-slate-100 hover:text-slate-900 ${pathname === url ? 'bg-slate-200 text-slate-900' : ''}`}>
                        {title}
                    </a>
                ))}
            </div>
            <div className="absolute right-0 flex space-x-4">
                {cookieUni !== null ? (
                    <a onClick={logout} href="/login" className="rounded-lg px-3 py-2 text-white font-bold hover:bg-slate-100 hover:text-slate-900">Sair</a>
                ) : (
                    <>
                        <a href="/login" className="rounded-lg px-3 py-2 text-white font-bold hover:bg-slate-100 hover:text-slate-900">Logar</a>
                        <a href="/signup" className="rounded-lg px-3 py-2 text-white font-bold hover:bg-slate-100 hover:text-slate-900">Cadastrar</a>
                    </>
                )}
            </div>
        </nav>
    )
}
