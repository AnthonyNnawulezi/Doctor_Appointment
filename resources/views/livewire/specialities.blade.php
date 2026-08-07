<!-- Table Section -->
<div class="max-w-7xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    @if (session()->has('message'))
        <div class="bg-teal-500 text-sm text-foreground-inverse rounded-lg p-4" role="alert" tabindex="-1"
            aria-labelledby="hs-solid-color-success-label">
            <span id="hs-solid-color-success-label" class="font-bold">Success</span> {{ message }}
        </div>
    @endif
    <!-- Card -->
    <div class="flex flex-col">
        <div
            class="overflow-x-auto [&::-webkit-scrollbar]:h-2 [&::-webkit-scrollbar-thumb]:rounded-none [&::-webkit-scrollbar-track]:bg-scrollbar-track [&::-webkit-scrollbar-thumb]:bg-scrollbar-thumb">
            <div class="min-w-full inline-block align-middle">
                <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden">
                    <!-- Header -->
                    <div
                        class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200">
                        <div>
                            <h2 class="text-xl font-semibold text-gray-900">
                                Specialities
                            </h2>
                            <p class="text-sm text-gray-600">
                                View Our Specialities.
                            </p>
                        </div>

                        <div>
                            <div class="inline-flex gap-x-2">


                                <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg bg-primary border border-primary-line text-primary-foreground hover:bg-primary-hover focus:outline-none focus:bg-primary-focus disabled:opacity-50 disabled:pointer-events-none"
                                    href="/admin/speciality/create">
                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14" />
                                        <path d="M12 5v14" />
                                    </svg>
                                    Create Speciality
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Header -->

                    <!-- Table -->
                    <table class="min-w-full divide-y divide-table-line">
                        <thead class="bg-muted">
                            <th scope="col" class="px-6 py-3 text-start">
                                <div class="flex items-center gap-x-2">
                                    <span class="text-xs font-semibold uppercase text-gray-900">
                                        S/N
                                    </span>
                                </div>
                            </th>

                            <th scope="col" class="px-6 py-3 text-start">
                                <div class="flex items-center gap-x-2">
                                    <span class="text-xs font-semibold uppercase text-gray-900">
                                        SPECIALITY NAME
                                    </span>
                                </div>
                            </th>

                            <th scope="col" class="px-6 py-3 text-start">
                                <div class="flex items-center gap-x-2">
                                    <span class="text-xs font-semibold uppercase text-gray-900">
                                        ACTIONS
                                    </span>
                                </div>
                            </th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-table-line">
                            @if (count() > 0)
                                @foreach ($specialities as $speciality)
                                    <tr>

                                        <td class="h-px w-72 whitespace-nowrap">
                                            <div class="px-6 py-3">
                                                <span
                                                    class="block text-sm font-semibold text-gray-900">{{ $loop->iteration }}</span>

                                            </div>
                                        </td>
                                        <td class="h-px w-72 whitespace-nowrap">
                                            <div class="px-6 py-3">
                                                <span
                                                    class="block text-sm font-semibold text-gray-900">{{ $speciality->speciality_name }}</span>

                                            </div>
                                        </td>

                                        <td class="size-px whitespace-nowrap" colspan="2">
                                            <a type="button" href="/admin/edit/{{ $speciality_id }}/speciality"
                                                class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg bg-blue border border-none text-white hover:bg-gray-300 focus:outline-none focus:bg-gray-300 disabled:opacity-50 disabled:pointer-events-none">
                                                Edit
                                            </a>
                                        </td>
                                        <td class="size-px whitespace-nowrap">
                                            <a type="button" href="/admin/delete/{{ $speciality_id }}/speciality"
                                                class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg bg-red-500 border border-none text-white hover:bg-gray-300 focus:outline-none focus:bg-gray-300 disabled:opacity-50 disabled:pointer-events-none">
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                    <!-- End Table -->

                    <!-- Footer -->
                    <div
                        class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200">
                        <div>
                            <p class="text-sm text-gray-600">
                                <span class="font-semibold text-gray-900">12</span> results
                            </p>
                        </div>

                        <div>
                            <div class="inline-flex gap-x-2">
                                <button type="button"
                                    class="py-1.5 px-2.5 inline-flex items-center gap-x-1 text-sm font-medium rounded-lg bg-white border border-gray-200 text-layer-foreground shadow-sm hover:bg-white-hover disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-white-focus">
                                    <svg class="shrink-0 size-4 -ms-1" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m15 18-6-6 6-6" />
                                    </svg>
                                    Prev
                                </button>

                                <button type="button"
                                    class="py-1.5 px-2.5 inline-flex items-center gap-x-1 text-sm font-medium rounded-lg bg-white border border-gray-200 text-layer-foreground shadow-sm hover:bg-white-hover disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-white-focus">
                                    Next
                                    <svg class="shrink-0 size-4 -me-1" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m9 18 6-6-6-6" />
                                    </svg>
                                </button>
                            </div>
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
