<x-layout.header />
    <div>
        <x-utils.comeback />

        <x-utils.auth-head />

        <div class="flex flex-col space-y-2 items-center justify-center  p-4 rounded-2xl   w-[70%] ">
            <div class="flex flex-col space-y-2 items-center">
                <h1 class="text-2xl font-bold  text-[20px]"> Connexion Administrateur </h1>
                <p class="text-sm text-gray-500 text-gray-400 text-[14px]"> Accès réservé aux administrateurs de la plateforme </p>
            </div>

            <form action="">
                <div class="flex flex-col space-y-2">
                    <x-utils.label labelfor="email" label="Email administrateur"/>
                    <x-utils.input type="email" name="email" placeholder="admin@standmanagment.com"/>
                </div>

                <div class="flex flex-col space-y-2">
                    <x-utils.label labelfor="password" label="Mot de passe"/>
                    <x-utils.input type="password" name="password" placeholder=""/>
                </div>

            </form>
        </div>
    </div>
<x-layout.footer />
