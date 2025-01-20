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
                                <label class="block text-sm font-medium text-gray-700 mb-2">Gambar Kopi</label>

                                <div
                                    class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-lg relative">
                                    <div class="space-y-1 text-center">
                                        <!-- Preview Image -->
                                        <div class="hidden preview-wrapper mb-4">
                                            <img id="preview" class="max-h-[200px] mx-auto" src="#"
                                                alt="Preview" />
                                            <button type="button" id="remove-image"
                                                class="mt-2 text-sm text-red-600 hover:text-red-800">Hapus
                                                Gambar</button>
                                        </div>

                                        <!-- Upload Area -->
                                        <div class="upload-wrapper">
                                            <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor"
                                                fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                                <path
                                                    d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            <div class="flex text-sm text-gray-600">
                                                <label for="gambar"
                                                    class="relative cursor-pointer bg-white rounded-md font-medium text-amber-600 hover:text-amber-700 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-amber-500">
                                                    <span>Upload gambar</span>
                                                    <input id="gambar" name="gambar" type="file" class="sr-only"
                                                        accept="image/*">
                                                </label>
                                                <p class="pl-1">atau drag and drop</p>
                                            </div>
                                            <p class="text-xs text-gray-500">PNG, JPG, GIF hingga 2MB</p>
                                        </div>
                                    </div>
                                </div>

                                @error('gambar')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const input = document.querySelector('#gambar');
            const preview = document.querySelector('#preview');
            const previewWrapper = document.querySelector('.preview-wrapper');
            const uploadWrapper = document.querySelector('.upload-wrapper');
            const removeButton = document.querySelector('#remove-image');

            // Preview image
            input.addEventListener('change', function() {
                const file = this.files[0];
                if (file) {
                    // Validate file size (2MB)
                    if (file.size > 2 * 1024 * 1024) {
                        alert('Ukuran file terlalu besar. Maksimal 2MB');
                        this.value = '';
                        return;
                    }

                    // Validate file type
                    if (!file.type.startsWith('image/')) {
                        alert('File harus berupa gambar');
                        this.value = '';
                        return;
                    }

                    const reader = new FileReader();
                    reader.onload = function(e) {
                        preview.src = e.target.result;
                        previewWrapper.classList.remove('hidden');
                        uploadWrapper.classList.add('hidden');
                    }
                    reader.readAsDataURL(file);
                }
            });

            // Remove image
            removeButton.addEventListener('click', function() {
                input.value = '';
                preview.src = '#';
                previewWrapper.classList.add('hidden');
                uploadWrapper.classList.remove('hidden');
            });

            // Drag and drop functionality
            const dropZone = document.querySelector('.border-dashed');

            ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
                dropZone.addEventListener(eventName, preventDefaults, false);
            });

            function preventDefaults(e) {
                e.preventDefault();
                e.stopPropagation();
            }

            ['dragenter', 'dragover'].forEach(eventName => {
                dropZone.addEventListener(eventName, highlight, false);
            });

            ['dragleave', 'drop'].forEach(eventName => {
                dropZone.addEventListener(eventName, unhighlight, false);
            });

            function highlight(e) {
                dropZone.classList.add('border-amber-500');
            }

            function unhighlight(e) {
                dropZone.classList.remove('border-amber-500');
            }

            dropZone.addEventListener('drop', handleDrop, false);

            function handleDrop(e) {
                const dt = e.dataTransfer;
                const file = dt.files[0];
                input.files = dt.files;

                // Trigger change event
                const event = new Event('change');
                input.dispatchEvent(event);
            }
        });
    </script>
</x-app-layout>
