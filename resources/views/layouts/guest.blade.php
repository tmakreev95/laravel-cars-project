@props(['title' => '', 'bodyClass' => ''])
<x-base-layout :$title :$bodyClass>
    <main>
        <div class="container-small page-login">
            <div class="flex" style="gap: 5rem">
                <div class="auth-page-form">
                    <div class="text-center">
                        <a href="/">
                            <img src="/img/logoipsum-265.svg" alt="" />
                        </a>
                    </div>
                    {{ $slot }}

                    <div class="grid grid-cols-2 gap-1 social-auth-buttons">
                        <x-button-icon btnClass="btn-default flex justify-center items-center gap-1"
                            imgAlt="Google Button Image" imgStyle="width: 20px"
                            imgSrc="/img/google.png">Google</x-button-icon>
                        <x-button-icon btnClass="btn-default flex justify-center items-center gap-1"
                            imgAlt="Facebook Button Image" imgStyle="width: 20px"
                            imgSrc="/img/facebook.png">Facebook</x-button-icon>
                    </div>

                    {{ $linkSlot }}
                </div>
                <div class="auth-page-image">
                    <img src="/img/car-png-39071.png" alt="" class="img-responsive" />
                </div>
            </div>
        </div>
    </main>

</x-base-layout>
