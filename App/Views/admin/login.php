

<!--CSS: Importar Fuente de iconos google-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--CSS: Importar materialize.css-->
<!--  CSS: AOS Animated -->
<link type="text/css" rel="stylesheet" href="<?= $baseUrl ?>src/css/aos.css">
<!-- CSS: Importar css personalizado -->
<link rel="stylesheet" type="text/css" href="<?= $baseUrl ?>src/css/styles.css?v=1.0.1">
<!-- CSS: Importar css personalizado -->
<link rel="stylesheet" href="<?= $baseUrl ?>src/css/jquery.bxslider.css">


<!-- CSS: Iconos font awesome-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

<!--Shortcut icon: Favicon -->
<link rel="icon" href="<?= $baseUrl ?>src/images/emblemas/emblema.png" sizes="32x32">
<script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>

</head>
<body class="text-xs	">
<main role="main" class="">
<div class="min-h-screen bg-gray-100 flex flex-col justify-center  sm:px-6 lg:px-8">

    <div class="mt-8 max-w-sm sm:mx-auto sm:w-full sm:max-w-md">
        <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
            <form class="space-y-6" action="<?= $baseUrl ?>Home/login" method="post" id="loginmysouvenirsprojec" name="loginmysouvenirsprojec" base="<?= $baseUrl ?>">
                <div>
                    <label for="email" class="block text-xs font-medium text-gray-700 font-Georgia">
                        Email:
                    </label>
                    <div class="mt-1">
                        <input id="email" name="email" type="email" autocomplete="email" required
                            class="font-Georgia appearance-none rounded-md relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900  sm:text-xs"
                            >
                    </div>
                </div>

                <div>
                    <label for="password" class="block text-xs	 font-medium text-gray-700 font-Georgia">
                        Password:
                    </label>
                    <div class="mt-1">
                        <input id="password" name="password" type="password" autocomplete="current-password" required
                            class="font-Georgia appearance-none rounded-md relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900  sm:text-xs"
                            >
                    </div>
                </div>

                <div>
                    <div class="flex justify-center pt-10">
                        <button type="submit" style="background-color: #FFE983;" class="azul  focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xs w-full sm:w-auto px-5 py-2.5 text-center ">Iniciar Sesión </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</main>
<!--Carga JS al final-->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.all.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.7.3/axios.min.js"></script>
<!-- <script type="text/javascript" src="<?= $baseUrl ?>src/js/proyecto/login.js"></script> -->