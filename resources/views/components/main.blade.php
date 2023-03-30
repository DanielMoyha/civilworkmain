<!--LAYOUT MAIN-->
<x-body x-data="" x-bind="$store.global.documentBody" {{ $attributes }}>

    @include('layouts.pre-loader')

    <!-- Page Wrapper -->
    <div id="root" class="min-h-100vh flex grow bg-slate-50 dark:bg-navy-900" x-cloak>
        @include('layouts.sidebar')

        @include('layouts.header')

        @include('layouts.search-bar')

        @include('layouts.right-sidebar')

        <!-- Main Content Wrapper -->
        @yield('content')
    </div>
    <div id="x-teleport-target"></div>
    <script>
        window.addEventListener("DOMContentLoaded", () => Alpine.start());

        function validateLettersOnly() {
            const regex = /[^a-zA-ZáéíóúÁÉÍÓÚñÑ\s]/g;
            this.value = this.value.replace(regex, "");
        }

        function validateNumbersOnly() {
            const regexNumber = /[^0-9]]/g;
            this.value = this.value.replace(regexNumber, "");
        }

        function validarLetrasYPuntos() {
            const regexLettersDots = /[^A-Za-záéíóúÁÉÍÓÚñÑ.\s'"()\[\]]/g;
            this.value = this.value.replace(regexLettersDots, "");
        }

        const inputsLetters = document.querySelectorAll('.onlyLetters');
            inputsLetters.forEach(input => {
            input.addEventListener('input', validateLettersOnly);
        });

        const inputsNumbers = document.querySelectorAll('.onlyNumbers');
            inputsNumbers.forEach(input => {
            input.addEventListener('input', validateNumbersOnly);
        });

        const inputsLettersDots = document.querySelectorAll('.lettersDots');
            inputsLettersDots.forEach(input => {
            input.addEventListener('input', validarLetrasYPuntos);
        });
    </script>
</x-body>
