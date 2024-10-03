"use client";

import { Login } from "@/types/login";
import React from "react";
import { login } from "@/api/login/login";
import { useForm, SubmitHandler } from "react-hook-form";
import { useRouter } from 'next/navigation';

const LoginPage = () => {
    const { register, handleSubmit } = useForm<Login>();
    const router = useRouter();
    const onSubmit: SubmitHandler<Login> = async (data) => {
        try {
            const response = await login(data);  
            console.log(response);
            if(response.status == 401){
                alert("Usuário ou senha inválidos");
            }else if(response.status == 500){
                alert("Formulário enviado inválido");
            }else if(response.status == 200){
                router.push("/");
            }else{
                alert("Ocorreu um erro inesperado");
            }

        } catch (error) {
            console.error('Falha ao enviar o formulário:', error);
        }
    };

    return (
        <div className="border border-slate-700 rounded-lg w-1/5 m-auto mt-48 p-10">
            <h1 className="text-center m-4">Realizar Login</h1>
            <form onSubmit={handleSubmit(onSubmit)} className="space-y-4">
                <label htmlFor="installment" className="block mb-2">Número da parcela:</label>
                <input
                    id="email"
                    type="text"
                    placeholder="Email"
                    className="block w-full px-4 py-2 border rounded"
                    {...register("email", { required: true })}
                />

                <label htmlFor="amount" className="block mb-2">Valor da parcela:</label>
                <input
                    id="password"
                    type="password"
                    placeholder="Senha"
                    className="block w-full px-4 py-2 border rounded"
                    {...register("password", { required: true })}
                />
                <div className="text-right">
                    <button
                        type="submit"
                        className="bg-blue-500 text-white px-4 py-2 rounded mt-4"
                    >
                        <i aria-hidden className="fa-solid fa-right-to-bracket"></i> Logar
                    </button>
                </div>
            </form>
        </div>
    );
};


export default LoginPage;