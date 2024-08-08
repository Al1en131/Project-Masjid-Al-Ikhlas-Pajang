<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>
    <div class="px-20 py-10">
        <div class="flex flex-col gap-3">
            <div class="py-8">
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg ">
                    <div class="max-w-full">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>

                <div class="mt-10 sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="max-w-full">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>

                <div class="p-4 mt-10 sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="max-w-full">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
