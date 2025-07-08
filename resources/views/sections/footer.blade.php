@php
    $year = date("Y");
    $domain = "https://labforty.com/bg/";

    $data = [
        "trade" => [
            "copyright" => "@" . $year,
            "logo" => "./storage/images/small-logo.svg",
            "socials" => [
                "facebook" => [
                   "image" => "./storage/images/facebook.svg",
                   "href" => "https://facebook.com"
                ],
                "x" => [
                    "image" => "./storage/images/x.svg",
                    "href" => "https://x.com"
                ],
                "linkedIn" => [
                    "image" => "./storage/images/linkedin.svg",
                    "href" => "https://linkedin.com"
                ]
            ]
        ],
        "products" => [
            "title" => "Products",
            "items" => [
                "E-commerce",
                "Websites",
                "Apps",
                "Fintech",
                "Support"
            ]
        ],
        "company" => [
            "title" => "Company",
            "items" => [
                "About us",
                "Insights",
                "FAQ",
                "Careers",
                "Privacy policy"
            ]
        ],
        "contact" => [
            "title" => "Contact",
            "items" => [
                "Lets talk",
                "hello@labforty.com",
                "Meet us on Teams"
            ]
        ]
    ];
@endphp

<footer>
    <div>
        <div>
            <img src="{{ $data['trade']['logo'] }}" alt="Logo Image" />
            <span class="font-medium text-xs">{{ $data['trade']['copyright'] }}</span>
        </div>
        <ul>
            @foreach ($data['trade']['socials'] as $key => $link)
                <x-link
                    href="{{ $link['href'] }}"
                    title="{{ 'Visit our ' . $key . ' page'}}"
                    target="_blank"
                >
                    <img src="{{ $link['image'] }}" alt="Social image logos" />
                </x-link>
            @endforeach
        </ul>
    </div>
    <ul>
        <li class="font-semibold">
            {{ $data['products']['title'] }}
        </li>
        @foreach ($data['products']['items'] as $link)
            <li>
                <x-link
                    text="{{ $link }}"
                    href="{{ $domain . '' . strtolower($link) }}"
                    class="text-gray-800 hover:underline"
                />
            </li>
        @endforeach
    </ul>
    <ul>
        <li class="font-semibold">
            {{ $data['company']['title'] }}
        </li>
        @foreach ($data['company']['items'] as $link)
            <li>
                <x-link
                    text="{{ $link }}"
                    href="{{ $domain . '' . strtolower($link) }}"
                    class="text-gray-800 hover:underline"
                />
            </li>
        @endforeach
    </ul>
    <ul>
        <li class="font-semibold">
            {{ $data['contact']['title'] }}
        </li>
        @foreach ($data['contact']['items'] as $link)
            <li>
                <x-link
                    text="{{ $link }}"
                    href="{{ $domain . '' . strtolower($link) }}"
                    class="text-gray-800 hover:underline"
                />
            </li>
        @endforeach
    </ul>
</footer>
