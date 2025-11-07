<x-layout.header />
    <x-utils.comeback />

    <x-utils.auth-head />

    <div>
        <div class="flex flex-col space-y-2 items-center">
            <h1> Connexion Administrateur </h1>
            <p> Accès réservé aux administrateurs de la plateforme </p>
        </div>

        <form >
            <div class="flex flex-col space-y-2">
                <x-utils.label for="email" label="Email administrateur"/>
                <x-utils.input type="email" name="email" placeholder="admin@standmanagment.com"/>
            </div>
        </form>
    </div>


<x-layout.footer />
