@php
    $data = [
        "heading" => "We prioritize",
        "subheading" => "customer requests.",
        "description" => "Ensuring swift and top-priority support for your needs.",
        "image" => "../images/phone-support.png",
        "url" => "https://labforty.com/bg/contacts",
        "requests" => [
            [
                "accent" => "Priority service.",
                "description" => "Your service requests are treated with the highest priority. Customers will always receive a response to requests within two hours.",
                "image" => "./storage/images/priority-service.svg"
            ],
            [
                "accent" => "Monitoring & optimization.",
                "description" => "Live monitoring ensures always-on web apps and seamless user experiences by quickly identifying and analyzing performance issues.",
                "image" => "./storage/images/monitoring-optimization.svg"
            ],
            [
                "accent" => "Software updates.",
                "description" => "Updates keep your software secure and fast. Our support contracts ensure your business is always up to date and ready to grow.",
                "image" => "./storage/images/software-update.svg"
            ]
        ]
    ];
@endphp

<section class="customer-requests-wrapper">
    <div class="customer-requests-container">
        <div class="customer-requests">
            <div class="customer-requests-heading">
                <h1 class="text-gray-800 leading-[normal]">
                    {{ $data['heading'] }}
                    <span class="block text-gradient-blue">{{ $data['subheading'] }}</span>
                </h1>
                <p class="font-semibold text-gray-400 max-w-[60%]">{{ $data['description'] }}</p>
            </div>
            <ul>
                @foreach ($data['requests'] as $request)
                    <li>
                        <img src="{{ $request['image'] }}" alt="{{ $request['accent'] }}" />
                        <p class="font-medium text-gray-400 max-w-[50%]">
                            <span class="font-semibold text-gray-800">
                                {{ $request['accent'] }}
                            </span>
                            {{ $request['description'] }}
                        </p>
                    </li>
                @endforeach
            </ul>
            <x-button
                type="submit"
                text="Let's talk"
                size="sm"
                class="text-sm"
            />
        </div>
    </div>
</section>
