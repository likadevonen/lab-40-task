@php
    $data = [
        "logo" => "./storage/images/logo.svg",
        "url" => "https://labforty.com",
        "login" => [
            "name" => "Get in touch >",
            "href" => "https://labforty.com/bg/get-in-touch"
        ],
        "menu" => [
            [
                "name" => "Company",
                "href" => "https://labforty.com/bg/company",
                "children" => [
                    [
                        "name" => "Company subitem 1",
                        "href" => "https://labforty.com/bg/company-subitem-1",
                    ],
                    [
                        "name" => "Company subitem 2",
                        "href" => "https://labforty.com/bg/company-subitem-2",
                    ],
                    [
                        "name" => "Company subitem 3",
                        "href" => "https://labforty.com/bg/company-subitem-3",
                    ],
                    [
                        "name" => "Company subitem 4",
                        "href" => "https://labforty.com/bg/company-subitem-4",
                    ]
                ]
            ],
            [
                "name" => "Services",
                "href" => "https://labforty.com/bg/services",
                "children" => [
                    [
                        "name" => "Services subitem 1",
                        "href" => "https://labforty.com/bg/services-subitem-1",
                    ],
                    [
                        "name" => "Services subitem 2",
                        "href" => "https://labforty.com/bg/services-subitem-2",
                    ],
                    [
                        "name" => "Services subitem 3",
                        "href" => "https://labforty.com/bg/services-subitem-3",
                    ]
                ]
            ],
            [
                "name" => "Insights",
                "href" => "https://labforty.com/bg/insights",
                "children" => []
            ],
            [
                "name" => "Careers",
                "href" => "https://labforty.com/bg/careers",
                "children" => []
            ]
        ]
    ];
@endphp

<header>
    <img src="{{ $data['logo'] }}" alt="Home page" />
    <nav>
        @foreach ($data['menu'] as $item)
            <div
                x-data="{ isOpen: false, openedWithKeyboard: false, leaveTimeout: null }"
                x-on:mouseleave.prevent="leaveTimeout = setTimeout(() => { isOpen = false }, 250)"
                x-on:mouseenter="leaveTimeout
                    ? clearTimeout(leaveTimeout)
                    : true"
                x-on:keydown.esc.prevent="isOpen = false, openedWithKeyboard = false"
                x-on:click.outside="isOpen = false, openedWithKeyboard = false"
                class="relative w-fit"
            >
                <x-link
                    href="{{ $item['href'] }}"
                    class="{{ count($item['children']) > 0 ? 'has-submenu' : '' }} font-medium text-xs text-gray-800 hover:underline"
                    x-on:mouseover="isOpen = true"
                    x-on:keydown.space.prevent="openedWithKeyboard = true"
                    x-on:keydown.enter.prevent="openedWithKeyboard = true"
                    x-on:keydown.down.prevent="openedWithKeyboard = true"
                    x-bind:class="isOpen || openedWithKeyboard
                        ? 'text-on-surface-strong dark:text-on-surface-dark-strong'
                        : 'text-on-surface dark:text-on-surface-dark'"
                    x-bind:aria-expanded="isOpen || openedWithKeyboard"
                    aria-haspopup="true"
                >
                    {{ $item['name'] }}
                    @if (count($item['children']) > 0)
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke="currentColor" class="text-gray-400 size-5 shrink-0 transition w-[1rem] h-[1rem]" aria-hidden="true"
                            x-bind:class="isOpen === true  ?  'rotate-180'  :  ''">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                        </svg>
                        <ul
                            class="submenu"
                            x-cloak
                            x-show="isOpen || openedWithKeyboard"
                            x-transition
                            x-trap="openedWithKeyboard"
                            x-on:click.outside="isOpen = false, openedWithKeyboard = false"
                            x-on:keydown.down.prevent="$focus.wrap().next()"
                            x-on:keydown.up.prevent="$focus.wrap().previous()"
                            role="menu"
                        >
                            @foreach ($item['children'] as $child)
                                <li>
                                    <x-link
                                        text="{{ $child['name']}}"
                                        href="{{ $child['href']}}"
                                        role="menuitem"
                                    />
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </x-link>
            </div>
        @endforeach
    </nav>
    <x-link
        href="{{ $data['login']['href'] }}"
        class="hidden lg:grid font-semibold text-xs text-gray-800 hover:underline"
    >
        {{ $data['login']['name'] }}
    </x-link>
</header>
