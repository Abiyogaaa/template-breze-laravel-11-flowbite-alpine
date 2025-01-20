<x-app-layout>
    <div class="w-full px-6 py-6 mt-5 mx-auto">
        <div class="flex flex-wrap -mx-3">
            <div class="w-full px-3">
                <div class="relative flex flex-col bg-white shadow-md rounded-lg">
                    <div class="p-6 border-b">
                        <div class="flex justify-between items-center">
                            <h6 class="text-lg font-bold">Daftar Kopi</h6>
                            <a href="{{ route('coffee.create') }}"
                                class="bg-amber-700 hover:bg-amber-800 text-white font-bold py-2 px-4 rounded">
                                Tambah Kopi
                            </a>
                        </div>
                    </div>
                    <div class="p-4 overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3">Kopi</th>
                                    <th scope="col" class="px-6 py-3">Kategori & Harga</th>
                                    <th scope="col" class="px-6 py-3 text-center">Status</th>
                                    <th scope="col" class="px-6 py-3 text-center">Stok</th>
                                    <th scope="col" class="px-6 py-3">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kopis as $kopi)
                                    <tr class="bg-white border-b hover:bg-gray-50">
                                        <td class="px-6 py-4 flex items-center space-x-4">
                                            @if ($kopi->gambar)
                                                <img src="{{ asset('storage/' . $kopi->gambar) }}"
                                                    class="w-10 h-10 rounded-lg object-cover" alt="{{ $kopi->nama }}">
                                            @else
                                                <div class="w-10 h-10 bg-gray-300 rounded-lg"></div>
                                            @endif
                                            <div>
                                                <h6 class="text-sm font-medium text-gray-900">{{ $kopi->nama }}</h6>
                                                <p class="text-xs text-gray-500">{{ Str::limit($kopi->deskripsi, 50) }}
                                                </p>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <p class="text-sm font-medium text-gray-900">Rp
                                                {{ number_format($kopi->harga, 0, ',', '.') }}</p>
                                            <p class="text-xs text-gray-500 capitalize">{{ $kopi->kategori }}</p>
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            <span
                                                class="px-3 py-1 text-xs font-medium rounded-full text-white {{ $kopi->is_available ? 'bg-green-500' : 'bg-red-500' }}">
                                                {{ $kopi->is_available ? 'Tersedia' : 'Tidak Tersedia' }}
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 text-center text-sm text-gray-500">
                                            {{ $kopi->stok }}
                                        </td>
                                        <td class="px-6 py-4 text-center flex space-x-2">
                                            <a href="#"
                                                class="bg-blue-600 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded">Edit</a>
                                            <form action="#" method="POST" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="bg-red-600 hover:bg-red-800 text-white font-bold py-2 px-4 rounded"
                                                    onclick="return confirm('Apakah Anda yakin ingin menghapus kopi ini?')">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
