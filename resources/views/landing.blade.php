<x-frontend-layout>
    <x-container class="mt-12" id="vpb-heroine-container">
        <div class="vpb-heroine relative">
            <div class="vpb-heroine__image">
                <picture>
                    <source srcset="{{asset('images/heroine_image.webp')}}" type="image/webp">
                    <img src="{{asset('images/heroine_image.jpg')}}" alt="Heroine" class="w-full h-auto">
                </picture>
            </div>
            <x-dynamic-component :component="'eye-catcher.' . app()->getLocale()" class="vpb-heroine__eye-catcher"/>
        </div>
    </x-container>
    <x-container class="vpb-section" id="vpb-testimonials">
        <h1 class="vpb-section__title">{{__("pages.landing.sections.testimonials.title")}}</h1>
        <div class="bg-foreground h-96 flex justify-center items-center">
            <p class="text-white italic">Testimonial Slider folgt</p>
        </div>
    </x-container>
    <x-container class="vpb-section" id="{{__('pages.landing.anchors.arguments')}}">
        <h1 class="vpb-section__title">{{__("pages.landing.sections.arguments.title")}}</h1>
        <x-argument :title="__('pages.landing.sections.arguments.argument1.title')">
            {{__("pages.landing.sections.arguments.argument1.content")}}
        </x-argument>
        <x-argument :title="__('pages.landing.sections.arguments.argument2.title')">
            {{__("pages.landing.sections.arguments.argument2.content")}}
        </x-argument>
        <x-argument :title="__('pages.landing.sections.arguments.argument3.title')">
            {{__("pages.landing.sections.arguments.argument3.content")}}
        </x-argument>
        <div class="mt-8">
            <x-link-button :label="__('pages.landing.sections.arguments.cta')" :href="'/'" target="_blank"/>
        </div>
    </x-container>
    <x-container class="vpb-section" id="{{__('pages.landing.anchors.facts')}}">
        <h1 class="vpb-section__title">{{__("pages.landing.sections.facts.title")}}</h1>
        <div class="vpb-facts">
            <x-fact :title="__('pages.landing.sections.facts.fact1.title')">
            {!!__("pages.landing.sections.facts.fact1.content")!!}
            </x-fact>
            <x-fact :title="__('pages.landing.sections.facts.fact2.title')">
            {!!__("pages.landing.sections.facts.fact2.content")!!}
            </x-fact>
            <x-fact :title="__('pages.landing.sections.facts.fact3.title')">
            {!!__("pages.landing.sections.facts.fact3.content")!!}
            </x-fact>
            <x-fact :title="__('pages.landing.sections.facts.fact4.title')">
            {!!__("pages.landing.sections.facts.fact4.content")!!}
            </x-fact>
            <x-fact :title="__('pages.landing.sections.facts.fact5.title')">
            {!!__("pages.landing.sections.facts.fact5.content")!!}
            </x-fact>
        </div>
    </x-container>
    <x-container class="vpb-section" id="{{__('pages.landing.anchors.faq')}}">
        <h1 class="vpb-section__title">{{__("pages.landing.sections.faq.title")}}</h1>
        <x-question :question="__('pages.landing.sections.faq.question1')">
            <p class="text-lg md:text-xl">{{__("pages.landing.sections.faq.answer1")}}</p>
        </x-question>
        <x-question :question="__('pages.landing.sections.faq.question2')">
            <p class="text-lg md:text-xl">{{__("pages.landing.sections.faq.answer2")}}</p>
        </x-question>
        <x-question :question="__('pages.landing.sections.faq.question3')">
            <p class="text-lg md:text-xl">{{__("pages.landing.sections.faq.answer3")}}</p>
        </x-question>
        <x-question :question="__('pages.landing.sections.faq.question4')">
            <p class="text-lg md:text-xl">{{__("pages.landing.sections.faq.answer4")}}</p>
        </x-question>
        <x-question :question="__('pages.landing.sections.faq.question5')">
            <p class="text-lg md:text-xl">{{__("pages.landing.sections.faq.answer5")}}</p>
        </x-question>
        <x-question :question="__('pages.landing.sections.faq.question6')">
            <p class="text-lg md:text-xl">{{__("pages.landing.sections.faq.answer6")}}</p>
        </x-question>
        <x-question :question="__('pages.landing.sections.faq.question7')">
            <p class="text-lg md:text-xl">{{__("pages.landing.sections.faq.answer7")}}</p>
        </x-question>
        <x-question :question="__('pages.landing.sections.faq.question8')">
            <p class="text-lg md:text-xl">{{__("pages.landing.sections.faq.answer8")}}</p>
        </x-question>
        <x-question :question="__('pages.landing.sections.faq.question9')">
            <p class="text-lg md:text-xl">{{__("pages.landing.sections.faq.answer9")}}</p>
        </x-question>
    </x-container>
</x-frontend-layout>
