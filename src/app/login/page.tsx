"use client";

import { Login } from "@/types/login";
import React, { useState} from "react";
import { login } from "@/api/login/login";
import { useForm, SubmitHandler } from "react-hook-form";
import { useRouter } from 'next/navigation';

const LoginPage = () => {
    const [errorMessage, setErrorMessage] = useState("")
    const { register, handleSubmit } = useForm<Login>();
    const router = useRouter();
    const onSubmit: SubmitHandler<Login> = async (data) => {
        await login(data).then(() => {

            alert("Logado com sucesso");
            router.push("/");
        }).catch((error) => {

            setErrorMessage(error.message)
        });
    };

    return (
        <div className="border border-slate-700 rounded-lg w-1/5 m-auto mt-48 p-10">
            <div className={`${errorMessage ? 'block' : 'hidden'} bg-red-200 rounded-lg mt-2 mb-2 p-5 text-center`}>
                <span className='text-red-900'>{errorMessage}</span>
            </div>
            <h1 className="text-center m-4">Realizar Login</h1>
            <form onSubmit={handleSubmit(onSubmit)} className="space-y-4">
                <label htmlFor="email" className="block mb-2">Email:</label>
                <input
                    id="email"
                    type="text"
                    placeholder="Email"
                    className="block w-full px-4 py-2 border rounded"
                    {...register("email", { required: true })}
                />

                <label htmlFor="password" className="block mb-2">Senha:</label>
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