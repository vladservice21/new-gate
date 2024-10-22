<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900">Видалити акаунт</h2>
        <p class="mt-1 text-sm text-gray-600">Після видалення вашого облікового запису всі його ресурси та дані буде остаточно видалено. Перш ніж видаляти свій обліковий запис, завантажте будь-які дані чи інформацію, які ви хочете зберегти.</p>
    </header>

    <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
    >Видалити акаунт</x-danger-button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900">Ви впевнені, що хочете видалити свій обліковий запис?</h2>
            <p class="mt-1 text-sm text-gray-600">Після видалення вашого облікового запису всі його ресурси та дані буде остаточно видалено. Будь ласка, введіть свій пароль, щоб підтвердити, що ви хочете остаточно видалити свій обліковий запис.</p>

            <div class="mt-6">
                <x-input-label for="password" value="Password" class="sr-only" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-3/4"
                    placeholder="Password"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Скасувати') }}
                </x-secondary-button>

                <x-danger-button class="ml-3">
                    {{ __('Видалити акаунт') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>
