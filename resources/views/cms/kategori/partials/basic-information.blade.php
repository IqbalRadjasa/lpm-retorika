

                    {{-- ================================================= --}}
                    {{-- Basic Information --}}
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

                                <h2 class="text-lg font-semibold text-gray-900">

                                    Informasi Kategori

                                </h2>

                                <p class="mt-1 text-sm text-gray-500">

                                    Informasi dasar kategori artikel.

                                </p>

                            </div>


                            <div
                                class="flex h-11 w-11 shrink-0
                                   items-center justify-center
                                   rounded-xl bg-red-50
                                   text-red-600">

                                <i class="ri-price-tag-3-line text-xl"></i>

                            </div>

                        </div>


                        {{-- Body --}}
                        <div class="space-y-6 p-6">


                            {{-- ================================================= --}}
                            {{-- Name --}}
                            {{-- ================================================= --}}

                            <div>

                                <label for="name"
                                    class="mb-2 block text-sm
                                       font-medium text-gray-700">

                                    Nama Kategori

                                </label>


                                <input id="name" type="text" name="name" placeholder="Contoh: Isu Kampus"
                                    class="w-full rounded-xl
                                       border-gray-300
                                       focus:border-red-500
                                       focus:ring-red-500">


                                <p class="mt-2 text-xs text-gray-400">

                                    Gunakan nama yang singkat dan mudah
                                    dipahami oleh pembaca.

                                </p>

                            </div>


                            {{-- ================================================= --}}
                            {{-- Description --}}
                            {{-- ================================================= --}}

                            <div>

                                <label for="description"
                                    class="mb-2 block text-sm
                                       font-medium text-gray-700">

                                    Deskripsi

                                </label>


                                <textarea id="description" name="description" rows="5"
                                    placeholder="Contoh: Berita dan informasi seputar kehidupan kampus."
                                    class="w-full rounded-xl
                                       border-gray-300
                                       focus:border-red-500
                                       focus:ring-red-500"></textarea>


                                <p class="mt-2 text-xs text-gray-400">

                                    Deskripsi singkat untuk menjelaskan
                                    isi atau fokus kategori.

                                </p>

                            </div>

                        </div>

                    </div>
