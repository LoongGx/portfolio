<div class="container mx-auto">
    <div class="flex justify-center items-center min-h-0 sm:min-h-screen">
        <div class="border w-full sm:max-w-md px-10 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <!-- Logo -->
            <div class="flex justify-center my-4">
                {{ $logo }}
            </div>

            <!-- Form -->
            <div>
                {{ $slot }}
            </div>
        </div>
    </div>
</div>