<x-app-layout>
    <div class="w-full px-6 py-6 mt-5 mx-auto">
        <div class="flex flex-wrap -mx-3">
            <div class="flex-none w-full max-w-full px-3">
                <div
                    class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                        <div class="flex justify-between items-center">
                            <h6 class="text-lg font-bold">Tambah Kopi Baru</h6>
                            <a href="{{ route('listcoffee') }}"
                                class="bg-gray-950 px-4 py-2 text-white rounded-xl text-sm font-bold">
                                Kembali
                            </a>
                        </div>
                    </div>

                    <div class="flex-auto px-6 pt-4 pb-6">
                        <form action="{{ route('coffee.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-6">
                                <label for="nama" class="block text-sm font-medium text-gray-700 mb-2">Nama
                                    Kopi</label>
                                <input type="text" name="nama" id="nama"
                                    class="px-3 py-2 border border-gray-300 rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-green-500 @error('nama') border-red-500 @enderror"
                                    value="{{ old('nama') }}" required>
                                @error('nama')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-6">
                                <label for="deskripsi"
                                    class="block text-sm font-medium text-gray-700 mb-2">Deskripsi</label>
                                <textarea name="deskripsi" id="deskripsi" rows="4"
                                    class="px-3 py-2 border border-gray-300 rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-green-500 @error('deskripsi') border-red-500 @enderror">{{ old('deskripsi') }}</textarea>
                                @error('deskripsi')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="mb-6">
                                    <label for="harga" class="block text-sm font-medium text-gray-700 mb-2">Harga
                                        (Rp)</label>
                                    <input type="number" name="harga" id="harga"
                                        class="px-3 py-2 border border-gray-300 rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-green-500 @error('harga') border-red-500 @enderror"
                                        value="{{ old('harga') }}" required>
                                    @error('harga')
                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="mb-6">
                                    <label for="stok"
                                        class="block text-sm font-medium text-gray-700 mb-2">Stok</label>
                                    <input type="number" name="stok" id="stok"
                                        class="px-3 py-2 border border-gray-300 rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-green-500 @error('stok') border-red-500 @enderror"
                                        value="{{ old('stok', 0) }}" required>
                                    @error('stok')
                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="mb-6">
                                    <label for="kategori"
                                        class="block text-sm font-medium text-gray-700 mb-2">Kategori</label>
                                    <select name="kategori" id="kategori"
                                        class="px-3 py-2 border border-gray-300 rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-green-500 @error('kategori') border-red-500 @enderror"
                                        required>
                                        <option value="arabica" {{ old('kategori') == 'arabica' ? 'selected' : '' }}>
                                            Arabica</option>
                                        <option value="robusta" {{ old('kategori') == 'robusta' ? 'selected' : '' }}>
                                            Robusta</option>
                                        <option value="liberica" {{ old('kategori') == 'liberica' ? 'selected' : '' }}>
                                            Liberica</option>
                                        <option value="excelsa" {{ old('kategori') == 'excelsa' ? 'selected' : '' }}>
                                            Excelsa</option>
                                    </select>
                                    @error('kategori')
                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="mb-6">
                                    <label for="is_available"
                                        class="block text-sm font-medium text-gray-700 mb-2">Status Ketersediaan</label>
                                    <select name="is_available" id="is_available"
                                        class="px-3 py-2 border border-gray-300 rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-green-500 @error('is_available') border-red-500 @enderror"
                                        required>
                                        <option value="1" {{ old('is_available') == '1' ? 'selected' : '' }}>
                                            Tersedia</option>
                                        <option value="0" {{ old('is_available') == '0' ? 'selected' : '' }}>Tidak
                                            Tersedia</option>
                                    </select>
                                    @error('is_available')
                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-6">
                                <label for="gambar" class="block text-sm font-medium text-gray-700 mb-2">Gambar
                                    Produk</label>
                                <input type="file" name="gambar" id="gambar"
                                    class="px-3 py-2 border border-gray-300 rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-green-500 @error('gambar') border-red-500 @enderror"
                                    accept="image/*">
                                @error('gambar')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                                <p class="text-xs text-gray-500 mt-1">Format yang didukung: JPG, JPEG, PNG. Maksimal 2MB
                                </p>
                            </div>

                            <div class="flex justify-end">
                                <button type="submit"
                                    class="bg-gradient-to-tl from-amber-700 to-amber-950 px-6 py-3 text-white rounded-xl text-sm font-bold hover:from-lime-400 hover:to-green-600 transition-colors">
                                    Simpan Kopi
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
