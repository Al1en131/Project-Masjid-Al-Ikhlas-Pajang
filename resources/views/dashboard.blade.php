<x-app-layout>

    @if (session('success'))
        <div align="center">
            <script>
                document.addEventListener('DOMContentLoaded', () => {
                    function showSuccessAlert() {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            text: '{{ session('success') }}',
                            customClass: {
                                confirmButton: 'btn-success'
                            },
                        });
                    }
                    showSuccessAlert();
                });
            </script>
            <style>
                .btn-success {
                    background-color: #40534C;
                    color: #fff;
                    border: none;
                    border-radius: 4px;
                    padding: 0.5em 1em;
                    font-size: 16px;
                }
            </style>
        </div>
    @endif
    <div class="py-12">
        <div class="px-6 mx-auto max-w-7xl lg:px-20">
            <div class="overflow-hidden text-center bg-white rounded-lg shadow-sm md:text-start">
                <div class="p-6 text-gray-900">
                    {{ __('Hallo Admin') }}
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</x-app-layout>
