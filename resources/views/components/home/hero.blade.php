<section class="home-hero">

    {{-- Image de fond --}}
    <div class="home-hero__background animate-zoom-out"></div>


    {{-- Forme rouge --}}
    <div class="home-hero__shape animate-fade-in-left animate-delay-100"></div>


    {{-- Contenu --}}
    <div class="container home-hero__container">

        <div class="row h-100 align-items-center">

            <div class="col-lg-7">

                <div class="home-hero__content">

                    <h1 class="home-hero__title animate-fade-in-up animate-delay-500">
                        {{ __("Conseiller aujourd'hui") }}
                        <br>
                        {{ __('sécuriser demain.') }}
                    </h1>


                    <p class="home-hero__description animate-fade-in-up animate-delay-700">
                        {{ __('Le Cabinet Dutrieux vous accompagne dans vos choix des étapes de votre vie personnelle, familiale et professionnelle.') }}
                    </p>


                    <div class="home-hero__actions animate-fade-in-up animate-delay-900">

                        <a
                            href="{{ route('services') }}"
                            class="btn home-hero__button home-hero__button--primary"
                        >
                            {{ __('Découvrez nos services') }}
                        </a>


                        <a
                            href="{{ route('contact') }}"
                            class="btn home-hero__button home-hero__button--outline"
                        >
                            {{ __('Nous Contacter') }}
                            <span aria-hidden="true">→</span>
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>