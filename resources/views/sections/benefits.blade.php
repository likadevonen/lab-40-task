@php
    $data = [
        "heading" => "Benefits",
        "headingUrl" => "https://labforty.com/bg/contacts",
        "benefits" => [
            [
                "title" => "Expert",
                "description" => "technical assistance",
                "accent" => "./storage/images/benefit-heart.svg"
            ],
            [
                "title" => "Available",
                "description" => "customer support",
                "accent" => "24/7",
            ],
            [
                "title" => "High customer satisfaction",
                "description" => "",
                "accent" => "./storage/images/benefit-top-right-arrows.svg"
            ]
        ]
    ];
@endphp

<section class="benefits-wrapper">
    <div class="benefits-heading">
        <h2 class="text-gray-800">{{ $data['heading'] }}</h2>
        <x-link
            text="Speak with an expert >"
            href="{{ $data['headingUrl'] }}"
            target="_self"
            class="justify-self-center hover:underline"
        />
    </div>
    <div class="benefits">
        @foreach ($data['benefits'] as $key=>$benefit)
            <div>
                @if ($key === 2)
                    <img src="{{ $benefit['accent'] }}" alt="{{ $benefit['title'] }}" />
                @endif

                <p class="font-semibold text-[1.25rem] text-center text-gray-400 max-w-[9rem] leading-[normal]">
                    {{ $benefit['title'] }}
                </p>

                @if ($key === 0)
                    <img src="{{ $benefit['accent'] }}" alt="{{ $benefit['title'] }}" />
                @elseif ($key === 1)
                    <p class="text-[4.375rem] text-gray-800 font-semibold leading-[1]">{{ $benefit['accent'] }}</p>
                @else
                    <img src="{{ $benefit['accent'] }}" alt="{{ $benefit['title'] }}" />
                @endif

                @if (!empty($benefit['description']))
                    <p class="font-semibold text-[1.25rem] text-center text-gray-400 max-w-[9rem] leading-[normal]">
                        {{ $benefit['description'] }}
                    </p>
                @endif
            </div>
        @endforeach
    </div>
</section>
