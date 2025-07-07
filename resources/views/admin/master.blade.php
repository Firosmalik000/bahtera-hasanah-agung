<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('About') }}
        </h2>
    </x-slot>

    <div class="py-16 bg-gray-50 min-h-screen">
        <div class="max-w-4xl mx-auto px-6">
            <div class="bg-white shadow-lg rounded-2xl p-8">
                <div class="flex items-center justify-between">
                    <h2 class="text-2xl font-bold text-indigo-700 mb-6">Tambah Data</h2>

                    <button
                        class="text-white hover:text-blue-600 transition bg-blue-600 px-3 py-2 hover:bg-blue-300 rounded-md duration-200 ease-in-out text-xl"
                        onclick="openModal()">
                        <i class="fa fa-plus"></i>
                    </button>
                </div>

                <div>
                    <table class="w-full border-collapse border border-gray-200">
                        <thead>
                            <tr class="bg-indigo-100 text-gray-800">
                                <th class="px-4 py-2 border">No</th>
                                <th class="px-4 py-2 border">Icon</th>
                                <th class="px-4 py-2 border">Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($icon as $i => $item)
                                <tr class="text-center">
                                    <td class="px-4 py-2 border">{{ $i + 1 }}</td>
                                    <td class="px-4 py-2 border">
                                        <i class="{{ $item->icon }}"></i>
                                    </td>
                                    <td class="px-4 py-2 border">
                                        <button onclick="openModal({{ json_encode($item) }})" type="button"
                                            id="editButton" title="Edit"
                                            class="bg-yellow-600 text-white px-4 py-2 rounded hover:bg-yellow-500">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
<!-- Overlay Modal -->
<div id="myModal" class="fixed inset-0 bg-black bg-opacity-50  items-center justify-center z-50 hidden">
    <div
        class="bg-white rounded-lg shadow-lg w-full max-w-md p-6 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 relative">
        <!-- Tombol Close -->
        <div class="flex items-center justify-between border-b py-2 mb-4 relative">
            <h2 class="text-2xl font-bold text-indigo-700">Edit Data</h2>

            <button onclick="closeModal()"
                class="   text-white hover:text-red-600 transition bg-red-600 px-3 py-2 hover:bg-red-300 rounded-md duration-200 ease-in-out text-xl">
                <i class="fa fa-times"></i>
            </button>
        </div>


        <!-- Konten Modal -->

        <form id="master" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="space-y-6 text-gray-800">

                <!-- Title -->
                <div>
                    <label for="icon" class="block text-sm font-medium text-gray-700 mb-1">Icon</label>
                    <input type="hidden" name="id" id="id">
                    <input type="text" name="icon" id="icon"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                        placeholder="Masukkan judul">
                </div>


                <!-- Tombol Submit -->
                <div class="pt-4 flex items-center justify-end gap-x-2">
                    <button type="button" onclick="closeModal()"
                        class="bg-gray-300 px-4 py-2 rounded mr-2 hover:bg-gray-400">
                        Batal
                    </button>
                    <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">
                        Simpan
                    </button>
                </div>
            </div>
        </form>

        <!-- Tombol Aksi -->

    </div>
</div>
<script>
    $('#image').on('change', function(event) {
        const file = event.target.files[0];
        const previewImage = $('#previewImage');

        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                previewImage.attr('src', e.target.result);
            };
            reader.readAsDataURL(file);
        }
    });

    function openModal(item) {

        $("#myModal").show();

        setTimeout(() => {
            $("#icon").val(item.icon).trigger('change');
        }, 200);
    }


    function closeModal() {
        $("#myModal").hide();
    }
    $('#master').submit(function(e) {
        e.preventDefault();
        const formData = new FormData(this);

        $.ajax({
            url: "{{ route('admin.master.store') }}",
            method: 'POST',
            data: formData,
            processData: false,
            contentType: false,

            success: function(response) {
                $("#myModal").hide();
                location.reload();
                Swal.fire({
                    icon: 'success',
                    title: 'Data berhasil disimpan',
                    showConfirmButton: false,
                    timer: 1500
                })
            },
            error: function(xhr, status, error) {
                console.error(error);
                Swal.fire({
                    icon: 'error',
                    title: 'Data gagal disimpan',
                    showConfirmButton: false,
                    timer: 1500
                })
            }
        });
    });
</script>
