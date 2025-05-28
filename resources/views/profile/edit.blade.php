<x-app-layout>
    <x-slot name="header">
        <h2 class="fw-semibold fs-4 text-dark">
            {{ __('Profile User') }}
        </h2>
    </x-slot>

    <div class="py-2">
        <div class="container">
            <div class="mb-3 p-4 bg-white shadow rounded">
                <div class="w-100" style="max-width: 600px;">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="mb-3 p-4 bg-white shadow rounded">
                <div class="w-100" style="max-width: 600px;">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="mb-3 p-4 bg-white shadow rounded">
                <div class="w-100" style="max-width: 600px;">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
