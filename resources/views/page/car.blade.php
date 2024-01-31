<div class="h-screen">
    <div class="max-w-[85rem] pt-[4rem] mx-auto w-full h-full">
        <main id="content" role="main">
            <div class="text-start py-10 px-4 sm:px-6 lg:px-16">
                <div class="flex justify-between">
                    <h1 class="block text-2xl font-semibold text-slate-700 sm:text-2xl">Manajemen Mobil</h1>

                    <button type="button"
                        class="py-2 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                        data-hs-overlay="#hs-add">
                        <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14" />
                            <path d="M12 5v14" />
                        </svg>
                        Tambah
                    </button>
                </div>

                <div id="hs-add"
                    class="hs-overlay hidden w-full h-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto">
                    <div
                        class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
                        <div
                            class="relative flex flex-col bg-white border shadow-sm rounded-xl overflow-hidden dark:bg-gray-800 dark:border-gray-700">
                            <form method="POST" action="/addcar">
                                <div class="p-4 sm:p-10 overflow-y-auto">
                                    <div class="mb-6 text-start">
                                        <h3 class="mb-2 text-xl font-bold text-gray-800 dark:text-gray-200">
                                            Tambah Mobil
                                        </h3>
                                    </div>

                                    <div class="space-y-4">
                                        <div class="grid gap-y-4">
                                            @csrf
                                            <!-- Form Group -->
                                            <div>
                                                <label for="brand"
                                                    class="block text-sm mb-2 dark:text-white">Merek</label>
                                                <div class="relative">
                                                    <input type="text" id="brand" name="brand"
                                                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                                                        required>
                                                </div>
                                            </div>
                                            <!-- End Form Group -->

                                            <!-- Form Group -->
                                            <div>
                                                <label for="model"
                                                    class="block text-sm mb-2 dark:text-white">Model</label>
                                                <div class="relative">
                                                    <input type="text" id="model" name="model"
                                                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                                                        required>
                                                </div>
                                            </div>
                                            <!-- End Form Group -->

                                            <!-- Form Group -->
                                            <div>
                                                <label for="noplat" class="block text-sm mb-2 dark:text-white">Nomor
                                                    Plat</label>
                                                <div class="relative">
                                                    <input type="text" id="noplat" name="noplat"
                                                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                                                        required>
                                                </div>
                                            </div>
                                            <!-- End Form Group -->

                                            <!-- Form Group -->
                                            <div>
                                                <label for="cost"
                                                    class="block text-sm mb-2 dark:text-white">Tarif</label>
                                                <div class="relative">
                                                    <input type="text" id="cost" name="cost"
                                                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                                                        required>
                                                </div>
                                            </div>
                                            <!-- End Form Group -->

                                            <!-- Form Group -->
                                            <div>
                                                <label for="available"
                                                    class="block text-sm mb-2 dark:text-white">Status</label>
                                                <div class="relative">
                                                    <select
                                                        id="available"class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                                                        name="available" id="" required>
                                                        <option value="true" selected>Tersedia</option>
                                                        <option value="false">Tidak Tersedia</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- End Form Group -->

                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="flex justify-end items-center gap-x-2 py-3 px-4 bg-gray-50 border-t dark:bg-gray-800 dark:border-gray-700">
                                    <button type="button"
                                        class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                        data-hs-overlay="#hs-add">
                                        Batal
                                    </button>
                                    <button type="submit"
                                        class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                        Simpan
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Table Section -->
                <div class="max-w-[85rem] py-4 lg:py-6 mx-auto">
                    <!-- Card -->
                    <div class="flex flex-col">
                        <div class="-m-1.5 overflow-x-auto">
                            <div class="min-w-full inline-block align-middle">
                                <div
                                    class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-slate-900 dark:border-gray-700">
                                    <!-- Header -->
                                    <div
                                        class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-gray-700">
                                        <!-- Input -->
                                        <div class="sm:col-span-1">
                                            <label for="hs-as-table-product-review-search"
                                                class="sr-only">Search</label>
                                            <div class="relative">
                                                <input type="text" id="hs-as-table-product-review-search"
                                                    name="hs-as-table-product-review-search"
                                                    class="py-2 px-3 ps-11 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                                                    placeholder="Search">
                                                <div
                                                    class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4">
                                                    <i class="fa-solid fa-magnifying-glass h-4 w-4 text-gray-400"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Input -->

                                        <div class="sm:col-span-2 md:grow">
                                            <div class="flex justify-end gap-x-2">

                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Header -->

                                    <!-- Table -->
                                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                        <thead class="bg-gray-50 dark:bg-slate-800">
                                            <tr>
                                                <th scope="col" class="ps-6 py-3 text-start">
                                                    <div class="flex items-center gap-x-2">
                                                        <span
                                                            class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                            Model
                                                        </span>
                                                    </div>
                                                </th>

                                                <th scope="col" class="pe-6 py-3 text-start">
                                                    <div class="flex items-center gap-x-2">
                                                        <span
                                                            class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                            Merek
                                                        </span>
                                                    </div>
                                                </th>

                                                <th scope="col" class="px-6 py-3 text-start">
                                                    <div class="flex items-center gap-x-2">
                                                        <span
                                                            class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                            Nomor Plat
                                                        </span>
                                                    </div>
                                                </th>

                                                <th scope="col" class="px-6 py-3 text-start">
                                                    <div class="flex items-center gap-x-2">
                                                        <span
                                                            class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                            Tarif
                                                        </span>
                                                    </div>
                                                </th>

                                                <th scope="col" class="px-6 py-3 text-start">
                                                    <div class="flex items-center gap-x-2">
                                                        <span
                                                            class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                            Status
                                                        </span>
                                                    </div>
                                                </th>

                                                <th scope="col" class="px-6 py-3 text-end"></th>
                                            </tr>
                                        </thead>

                                        <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                            @if (count($carData) > 0)
                                                @foreach ($carData as $car)
                                                    <tr>
                                                        <td class="h-px w-px whitespace-nowrap">
                                                            <div class="px-6 py-2">
                                                                <span
                                                                    class="text-sm text-gray-600 dark:text-gray-400">{{ $car->model }}</span>
                                                            </div>
                                                        </td>
                                                        <td class="h-px w-px whitespace-nowrap">
                                                            <div class="px-6 py-2">
                                                                <span
                                                                    class="text-sm text-gray-600 dark:text-gray-400">{{ $car->brand }}</span>
                                                            </div>
                                                        </td>
                                                        <td class="h-px w-px whitespace-nowrap">
                                                            <div class="px-6 py-2">
                                                                <span
                                                                    class="text-sm text-gray-600 dark:text-gray-400">{{ $car->noplat }}</span>
                                                            </div>
                                                        </td>
                                                        <td class="h-px w-px whitespace-nowrap">
                                                            <div class="px-6 py-2">
                                                                <span
                                                                    class="text-sm text-gray-600 dark:text-gray-400">{{ 'Rp. ' . number_format($car->cost, 0, '.', ',') }}</span>
                                                            </div>
                                                        </td>
                                                        <td class="h-px w-px whitespace-nowrap">
                                                            <div class="px-6 py-2">
                                                                <span
                                                                    class="text-sm text-gray-600 dark:text-gray-400">{{ $car->available ? 'Tersedia' : 'Tidak Tersedia' }}</span>
                                                            </div>
                                                        </td>
                                                        <td class="h-px w-px whitespace-nowrap">
                                                            <div class="px-6 py-1.5">
                                                                <div
                                                                    class="hs-dropdown relative inline-block [--placement:bottom-right]">
                                                                    <button id="hs-car-dropdown-{{ $car->id }}"
                                                                        type="button"
                                                                        class="hs-dropdown-toggle py-1.5 px-2 inline-flex justify-center items-center gap-2 rounded-lg text-gray-700 align-middle disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                                                                        <svg class="flex-shrink-0 w-4 h-4 text-blue-800"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round">
                                                                            <circle cx="12" cy="12"
                                                                                r="1" />
                                                                            <circle cx="19" cy="12"
                                                                                r="1" />
                                                                            <circle cx="5" cy="12"
                                                                                r="1" />
                                                                        </svg>
                                                                    </button>
                                                                    <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden mt-2 divide-y divide-gray-200 min-w-[10rem] z-10 bg-white shadow-2xl rounded-lg p-2 mt-2 dark:divide-gray-700 dark:bg-gray-800 dark:border dark:border-gray-700"
                                                                        aria-labelledby="hs-car-dropdown-{{ $car->id }}">
                                                                        <div class="py-2 first:pt-0 last:pb-0">
                                                                            <button type="button"
                                                                                data-hs-overlay="#hs-update"
                                                                                class="w-full flex items-center gap-x-3 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                                                                Edit
                                                                            </button>
                                                                        </div>
                                                                        <div class="py-2 first:pt-0 last:pb-0">
                                                                            <button type="button"
                                                                                data-hs-overlay="#hs-delete-{{ $car->id }}"
                                                                                class="w-full flex items-center gap-x-3 py-2 px-3 rounded-lg text-sm text-red-600 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-red-500 dark:hover:bg-gray-700">
                                                                                Delete
                                                                            </button>


                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <div id="hs-delete-{{ $car->id }}"
                                                        class="hs-overlay hidden w-full h-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto">
                                                        <div
                                                            class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all md:max-w-2xl md:w-full m-3 md:mx-auto">
                                                            <div
                                                                class="relative flex flex-col bg-white border shadow-sm rounded-xl overflow-hidden dark:bg-gray-800 dark:border-gray-700">
                                                                <form method="POST" action="/deletecar">
                                                                    @csrf
                                                                    <input type="hidden" name="id"
                                                                        value="{{ $car->id }}">
                                                                    <div class="absolute top-2 end-2">
                                                                        <button type="button"
                                                                            class="flex justify-center items-center w-7 h-7 text-sm font-semibold rounded-lg border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:border-transparent dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                                                            data-hs-overlay="#hs-delete-{{ $car->id }}">
                                                                            <span class="sr-only">Close</span>
                                                                            <svg class="flex-shrink-0 w-4 h-4"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round">
                                                                                <path d="M18 6 6 18" />
                                                                                <path d="m6 6 12 12" />
                                                                            </svg>
                                                                        </button>
                                                                    </div>

                                                                    <div class="p-4 sm:p-10 overflow-y-auto">
                                                                        <div class="flex gap-x-4 md:gap-x-7">
                                                                            <!-- Icon -->
                                                                            <span
                                                                                class="flex-shrink-0 inline-flex justify-center items-center w-[46px] h-[46px] sm:w-[62px] sm:h-[62px] rounded-full border-4 border-red-50 bg-red-100 text-red-500 dark:bg-red-700 dark:border-red-600 dark:text-red-100">
                                                                                <svg class="flex-shrink-0 w-5 h-5"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    width="16" height="16"
                                                                                    fill="currentColor"
                                                                                    viewBox="0 0 16 16">
                                                                                    <path
                                                                                        d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                                                                </svg>
                                                                            </span>
                                                                            <!-- End Icon -->

                                                                            <div class="grow">
                                                                                <h3
                                                                                    class="mb-2 text-xl font-bold text-gray-800 dark:text-gray-200">
                                                                                    Hapus Mobil
                                                                                </h3>
                                                                                <p class="text-gray-500">
                                                                                    Data yang sudah di hapus tidak dapat
                                                                                    dipulihkan.
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div
                                                                        class="flex justify-end items-center gap-x-2 py-3 px-4 bg-gray-50 border-t dark:bg-gray-800 dark:border-gray-700">
                                                                        <button type="button"
                                                                            class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                                                            data-hs-overlay="#hs-delete-{{ $car->id }}">
                                                                            Batal
                                                                        </button>
                                                                        <button type="submit"
                                                                            class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-red-500 text-white hover:bg-red-600 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                                                            Hapus
                                                                        </button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td colspan="6"
                                                        class="h-px w-px py-4 bg-slate-100 whitespace-nowrap text-center">
                                                        Tidak Ada Data
                                                    </td>
                                                </tr>
                                            @endif
                                        </tbody>
                                    </table>
                                    <!-- End Table -->

                                    <!-- Footer -->
                                    <div
                                        class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200 dark:border-gray-700">
                                        <div>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                <span
                                                    class="font-semibold text-gray-800 dark:text-gray-200">{{ count($carData) }}</span>
                                                results
                                            </p>
                                        </div>
                                    </div>
                                    <!-- End Footer -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->
                </div>
                <!-- End Table Section -->
            </div>
        </main>
    </div>
</div>
