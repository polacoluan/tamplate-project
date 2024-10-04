'use client';

import { User } from '@/types/user';
import { signup } from "@/api/login/signup"
import { useRouter } from 'next/navigation';
import { useForm, SubmitHandler } from 'react-hook-form';
import { AxiosError } from 'axios';
import { useState } from 'react';

const SignupPage = () => {
    const [errorMessage, setErrorMessage] = useState("")
    const { register, handleSubmit } = useForm<User>();
    const router = useRouter();
    const onSubmit: SubmitHandler<User> = async (data) => {
        await signup(data).then(() => {

            alert("Cadastrado com sucesso");
            router.push("/login");
        }).catch((error) => {

            setErrorMessage(error.message)
        });
    };

    return (
        <div className="border border-slate-700 rounded-lg w-2/5 m-auto mt-20 p-10">
            <div className={`${errorMessage ? 'block' : 'hidden'} bg-red-200 rounded-lg mt-2 mb-2 p-5 text-center`}>
                <span className='text-red-900'>{errorMessage}</span>
            </div>
            <h1 className="text-center m-4">Realizar Cadastro</h1>
            <form onSubmit={handleSubmit(onSubmit)} className="space-y-4">
                <div>
                    <label htmlFor="name" className="block mb-2">Nome</label>
                    <input
                        id="name"
                        type="text"
                        placeholder="Nome"
                        className="block w-full px-4 py-2 border rounded"
                        {...register("name", { required: true })}
                    />
                </div>
                <div>
                    <label htmlFor="email" className="block mb-2">Email</label>
                    <input
                        id="email"
                        type="email"
                        placeholder="Email"
                        className="block w-full px-4 py-2 border rounded"
                        {...register("email", { required: true })}
                    />
                </div>
                <div>
                    <label htmlFor="password" className="block mb-2">Senha</label>
                    <input
                        id="password"
                        type="password"
                        placeholder="Senha"
                        className="block w-full px-4 py-2 border rounded"
                        {...register("password", { required: true })}
                    />
                </div>
                <div>
                    <label htmlFor="birth" className="block mb-2">Aniversário</label>
                    <input
                        id="birth"
                        type="date"
                        className="block w-full px-4 py-2 border rounded"
                        {...register("birth", { required: true })}
                    />
                </div>
                <div>
                    <label htmlFor="gender" className="block mb-2">Genero</label>
                    <select
                        id="gender"
                        className="block w-full px-4 py-2 border rounded"
                        {...register("gender", { required: true, value: 'male' })}
                    >
                        <option value="male">Masculino</option>
                        <option value="female">Feminino</option>
                    </select>
                </div>
                <div className="text-right">
                    <button
                        type="submit"
                        className="bg-blue-500 text-white px-4 py-2 rounded mt-4"
                    >
                        <i aria-hidden className="fa-solid fa-user-plus"></i> Cadastrar
                    </button>
                </div>
            </form>
        </div>
    )
}

export default SignupPage;