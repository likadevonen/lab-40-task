@php
    $data = [
        "heading" => "Global Support &",
        "subheading" => "Maintenance",
        "accentDescription" => "Your project is unique, and we acknowledge this by adopting a tailored strategy.",
        "description" => "This ensures that your specific goals and requirements are met with precision and care.",
        "image" => "./storage/images/focus-support-image.svg",
        "url" => "https://labforty.com/bg/contacts",
        "focuses" => [
            [
                "accent" => "Focus on",
                "description" => "expanding your business",
                "icon" => "focus",
                "href" => "https://labforty.com/bg/contacts"
            ],
            [
                "accent" => "While",
                "description" => "reducing expenses",
                "icon" => "reduce-expenses",
                "href" => "https://labforty.com/bg/contacts"
            ],
            [
                "accent" => "Maintenance",
                "description" => "issues in-house",
                "icon" => "maintenance",
                "href" => "https://labforty.com/bg/contacts"
            ]
        ]
    ];
@endphp

<section class="focuses-wrapper">
    <h1 class="leading-[normal]">
        {{ $data['heading'] }}
        <br />
        <span class="text-gradient-blue">{{ $data['subheading'] }}</span>
    </h1>
    <div class="focuses">
        <div class="focuses-image">
            <img src="{{ $data['image'] }}" alt="{{ $data['heading'] . ' ' .$data['subheading'] }}" />
        </div>
        <div class="focuses-list">
            <ul>
                @foreach ($data['focuses'] as $focus)
                    <li>
                        <x-link href="{{ $focus['href'] }}">
                            <x-focus-icon icon="{{ $focus['icon'] }}" />
                            <p class="font-semibold max-w-[90%]">
                                {{ $focus['accent'] }}
                                <span>
                                    {{ $focus['description'] }}
                                </span>
                            </p>
                        </x-link>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <p class="font-medium text-gray-400 max-w-[27%] pt-2 pb-4">
        <span class="font-semibold text-gray-800">{{ $data['accentDescription'] }}</span>
        {{ $data['description'] }}
    </p>
    <x-button
        type="submit"
        text="Let's talk"
        size="sm"
        class="btn text-sm"
    />
</section>
