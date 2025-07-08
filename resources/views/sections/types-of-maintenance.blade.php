@php
    $data = [
        "heading" => "Types of",
        "subheading" => "maintenance",
        "accentDescription" => "Our support service guarantees that requests",
        "description" => "are treated with the highest priority.",
        "image" => "./storage/images/maintenance-image.svg",
        "maintenances" => [
            [
                "title" => "Corrective maintenance",
                "description" => "\"Bug\" maintenance, or corrective maintenance, fixes user-reported errors and is the most urgent type, addressing issues like security, compatibility, and compliance."
            ],
            [
                "title" => "Preventive maintenance",
                "description" => "\"Preventive maintenance\" maintenance, or corrective maintenance, fixes user-reported errors and is the most urgent type, addressing issues like security, compatibility, and compliance."
            ],
            [
                "title" => "Perfective maintenance",
                "description" => "\"Perfective maintenance\" maintenance, or corrective maintenance, fixes user-reported errors and is the most urgent type, addressing issues like security, compatibility, and compliance."
            ],
        ],
        "banners" => [
            [
                "label" => "Issue detected"
            ],
            [
                "label" => "Repair onsite"
            ],
            [
                "label" => "Create work order"
            ]
        ]
    ];
@endphp

<section class="type-maintenances-wrapper">
    <div class="type-maintenances-heading">
        <h1 class="leading-[normal]">
            {{ $data['heading'] }}
            <br />
            <span class="text-gradient-blue">{{ $data['subheading'] }}</span>
        </h1>
        <p class="font-medium text-gray-400">
            <span class="font-semibold text-gray-800">{{ $data['accentDescription'] }}</span>
            <br />
            {{ $data['description'] }}
        </p>
    </div>
    <div class="type-maintenances">
        <div
            x-data="{ selectedAccordionItem: 0 }"
            class="type-maintenances-accordion"
        >
            @foreach ($data['maintenances'] as $key=>$maintenance)
                <div class="border-gray-200">
                    <button
                        type="button"
                        id="{{ 'controlsAccordionItem_' . $key }}"
                        class="flex w-full items-center justify-between gap-4 py-4 font-semibold text-gray-800 text-left text-[1.5rem] underline-offset-2 focus-visible:underline focus-visible:outline-hidden cursor-pointer"
                        aria-controls="accordionItemOne"
                        x-on:click="selectedAccordionItem = {{ $key }}"
                        x-bind:class="selectedAccordionItem === {{ $key }}
                            ? 'text-on-surface-strong dark:text-on-surface-dark-strong font-bold'
                            : 'text-on-surface dark:text-on-surface-dark font-medium'"
                        x-bind:aria-expanded="selectedAccordionItem === {{ $key }}
                            ? 'true'
                            : 'false'"
                        >
                        {{ $maintenance['title'] }}
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke="currentColor" class="text-gray-400 size-5 shrink-0 transition w-[1.6rem] h-[1.6rem]" aria-hidden="true"
                            x-bind:class="selectedAccordionItem === {{ $key }}  ?  'rotate-180'  :  ''">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                        </svg>
                    </button>
                    <div
                        x-cloak
                        x-show="selectedAccordionItem === {{ $key }}"
                        id="accordionItemOne"
                        role="region"
                        aria-labelledby="{{ 'controlsAccordionItem_' . $key }}"
                        x-collapse
                    >
                        <div class="max-w-[80%] pb-9 text-sm text-gray-800 sm:text-base text-pretty">
                            {{ $maintenance['description'] }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="type-maintenances-image">
            <img src="{{ $data['image'] }}" alt="{{ $data['heading'] . '' . $data['subheading'] }}" />
            <div class="banners">
                @foreach ($data['banners'] as $banner)
                    <x-banner text="{{ $banner['label'] }}" />
                @endforeach
            </div>
        </div>
    </div>
</section>
