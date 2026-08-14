
                    {{-- ================================================= --}}
                    {{-- Status --}}
                    {{-- ================================================= --}}

                    <div
                        class="overflow-hidden rounded-2xl
                           border border-gray-200
                           bg-white shadow-sm">


                        {{-- Header --}}
                        <div
                            class="flex items-start justify-between
                               border-b border-gray-100
                               px-6 py-5">

                            <div>

                                <h2 class="text-lg font-semibold
                                       text-gray-900">

                                    Status

                                </h2>

                                <p class="mt-1 text-sm text-gray-500">

                                    Tentukan apakah kategori
                                    dapat digunakan.

                                </p>

                            </div>


                            <div
                                class="flex h-11 w-11 shrink-0
                                   items-center justify-center
                                   rounded-xl bg-green-50
                                   text-green-600">

                                <i class="ri-toggle-line text-xl"></i>

                            </div>

                        </div>


                        {{-- Body --}}
                        <div class="p-6">

                            <label
                                class="flex cursor-pointer
                                   items-start gap-4
                                   rounded-xl border
                                   border-green-200
                                   bg-green-50 p-4">

                                <input type="checkbox" name="is_active" value="1" checked
                                    class="mt-1 rounded
                                       border-gray-300
                                       text-red-600
                                       focus:ring-red-500">


                                <div>

                                    <p class="font-medium
                                          text-gray-900">

                                        Aktifkan kategori

                                    </p>

                                    <p
                                        class="mt-1 text-sm
                                          leading-6
                                          text-gray-500">

                                        Kategori dapat dipilih saat
                                        membuat atau mengedit artikel.

                                    </p>

                                </div>

                            </label>

                        </div>

                    </div>
