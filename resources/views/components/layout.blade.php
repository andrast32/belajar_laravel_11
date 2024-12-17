<x-header> Home</x-header>
    <x-navbar></x-navbar>
        <x-breadcumb> {{ $title }}</x-breadcumb>

            <main>
                <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                    {{ $slot }}
                </div>
            </main>

        </div>
    </body>

</html>
