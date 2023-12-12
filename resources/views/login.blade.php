<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Connexion</title>
</head>
<!-- component -->

<body class="bg-gray-300 ">
    <div class="min-h-screen bg-gray-100 flex items-center">
        <div class="container mx-auto max-w-md shadow-md hover:shadow-lg transition duration-300">
            <form method="POST" action="{{ route('login.auth') }}">
                @csrf
                <div class="py-12 p-10 bg-white rounded-xl">
                    <h1 class="text-5xl text-center font-bold mb-5">Biblio ISI</h1>
                    <div class="mb-6">
                        <label class="mr-4 text-gray-700 font-bold inline-block mb-2" for="name">Email</label>
                        <input type="email"
                            class="border bg-gray-100 py-2 px-4 w-96 outline-none focus:ring-2 focus:ring-indigo-400 focus:outline-none rounded"
                            placeholder="johndoe@groupeisi.com" name="email" required autofocus />
                        @if ($errors->has('email'))
                            <span class="text-red-600">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class="">
                        <label class="mr-4 text-gray-700 font-bold inline-block mb-2" for="name">Mot de
                            passe</label>
                        <input type="password"
                            class="border bg-gray-100 py-2 px-4 w-96 outline-none focus:ring-2 focus:ring-indigo-400 rounded"
                            placeholder="" name="password" required />
                    </div>
                    <span
                        class="text-sm text-gray-700 inline-block mt-4 hover:text-indigo-600 hover:underline hover:cursor-pointer transition duration-200">Mot
                        de passe oublié ?</span>
                    <button type="submit"
                        class="w-full mt-6 text-indigo-50 font-bold bg-indigo-600 py-3 rounded-md hover:bg-indigo-500 transition duration-300 disabled:bg-indigo-300">Se
                        connecter</button>
                </div>
            </form>

        </div>
    </div>
</body>

</html>
