@php
    $data = [
        "heading" => "Find the right",
        "subheading" => "support plan for you.",
        "plans" => [
            [
                "title" => "Enterprise",
                "description" => "Support and updates for your peace of mind.",
                "contact" => "https://labforty.com/bg/contacts",
                "items" => [
                    "Free SSL Certificate",
                    "Free CDN",
                    "Certificates & software updates",
                    "Performance scans and optimization suggestions",
                    "SEO consulting",
                    "Weekly backups",
                    "Updates to web content as needed"
                ],
                "href" => "https://labforty.com/bg/features"
            ],
            [
                "title" => "Professional",
                "description" => "Support and updates for your peace of mind.",
                "contact" => "https://labforty.com/bg/contacts",
                "items" => [
                    "Free SSL Certificate",
                    "Certificates & software updates",
                    "Security monitoring",
                    "Performance scans and optimization suggestions",
                    "Weekly backups",
                    "Server maintenance",
                    "Updates to web content as needed"
                ],
                "href" => "https://labforty.com/bg/features"
            ],
            [
                "title" => "Essential",
                "description" => "Support and updates for your peace of mind.",
                "contact" => "https://labforty.com/bg/contacts",
                "items" => [
                    "Certificates & software updates",
                    "Performance scans",
                    "Weekly backups",
                    "Server maintenance",
                    "Updates to web content as needed",
                    "Response within 72 hours",
                    "3 hours of support time"
                ]
            ]
        ]
    ];
@endphp

<section class="support-plans-wrapper">
    <h1 class="text-center">
        {{ $data['heading'] }}
        <span class="block text-gradient-blue">{{ $data['subheading'] }}</span>
    </h1>
    <div class="support-plans">
        @foreach ($data['plans'] as $plan)
            <div>
                <h2>{{ $plan['title'] }}</h2>
                <p class="font-medium text-sm text-gray-400">{{ $plan['description'] }}</p>
                <x-button
                    type="submit"
                    text="Contact us"
                    size="xs"
                    class="text-xs"
                />
                <ul>
                    @foreach ($plan['items'] as $item)
                        <li>
                            <svg class="h-5 w-5 flex-none text-gray-800" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                            </svg>
                            {{ $item }}
                        </li>
                    @endforeach
                </ul>

                @if (!empty($plan['href']))
                    <x-link
                        text="See all features >"
                        href="{{ $plan['href'] }}"
                        target="_self"
                        class="text-sm justify-self-center mt-6 hover:underline"
                    />
                @endif
            </div>
        @endforeach
    </div>
</section>
