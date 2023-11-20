<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Flux') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                @php
                $messages = Message::take(2)->get();
                @endphp

                @for ($i = 0; $i < count($messages); $i++) <!-- individual listings -->
                    @php
                    $message = $messages[$i];
                    @endphp
                    <x-post-flux name={{$message->id_utilisateur}}
                        text={{$message->text}}
                        like={{$message->like}}
                        retweet={{$message->retweet}}
                        date={{$message->created_at}}
                        comment={{$message->comment}} />
                        @endfor
            </div>
        </div>
    </div>
</x-app-layout>