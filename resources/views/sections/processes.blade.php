@php
    $data = [
        "heading" => "Our process",
        "processes" => [
            [
                "accent" => "Formal request.",
                "description" => "After receiving your request, we aim to quickly implement the correct solution. We'll schedule a meeting to discuss your software's current state and potential factors."
            ],
            [
                "accent" => "System analysis.",
                "description" => "Once we understand the impacts, we assess your systems to identify the root cause, reviewing code and checking for outdated subscriptions and malware."
            ],
            [
                "accent" => "Solution evaluation.",
                "description" => "Our engineers identify solutions, scope affected features, and review options with you to determine the best resolution."
            ],
            [
                "accent" => "Implementation.",
                "description" => "Our Technical Support Lead creates bug tickets for immediate action. Using debugging tools and reviewing logs, our team resolves each error."
            ],
            [
                "accent" => "Testing.",
                "description" => "After verifying stability in our test environment, we deploy bug fixes to production. We then request your sign-off before closing the request."
            ],
            [
                "accent" => "Final steps.",
                "description" => "Once you approve the changes, we monitor the live environment to ensure smooth operation and remain available for further support."
            ]

        ]
    ];
@endphp

<section class="processes-wrapper">
    <div class="processes-heading">
        <h1>{{ $data['heading'] }}</h1>
    </div>
    <div class="processes">
        @foreach ($data['processes'] as $key=>$process)
            <div>
                <p>
                    {{ ++$key }}.
                </p>
                <p class="font-medium text-sm">
                    <span class="font-semibold text-gray-800">
                        {{ $process['accent'] }}
                    </span>
                    {{ $process['description'] }}
                </p>
            </div>
        @endforeach
    </div>
    <x-button
        type="submit"
        text="Let's talk"
        size="sm"
        class="text-sm justify-self-center"
    />
</section>
