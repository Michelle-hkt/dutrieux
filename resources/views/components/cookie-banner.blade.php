<div
    id="cookie-banner"
    class="cookie-banner"
    role="dialog"
    aria-modal="false"
    aria-labelledby="cookie-banner-title"
    aria-describedby="cookie-banner-description"
>
    <div class="cookie-banner-content">

        <div class="cookie-banner-text">

            <h2 id="cookie-banner-title" class="cookie-banner-title">
                {{ __('Votre vie privée compte') }}
            </h2>

            <p id="cookie-banner-description" class="cookie-banner-description">
                {{ __('Ce site utilise des cookies afin d’assurer son bon fonctionnement, d’améliorer votre expérience de navigation et, avec votre accord, de mesurer sa fréquentation.') }}

                <a
                    href="{{ route('cookies') }}"
                    class="cookie-banner-link"
                >
                    {{ __('En savoir plus sur notre politique relative aux cookies') }}
                </a>
            </p>

        </div>

        <div class="cookie-banner-actions">

            <button
                type="button"
                id="cookie-reject"
                class="cookie-banner-button cookie-banner-button-secondary"
            >
                {{ __('Refuser') }}
            </button>

            <button
                type="button"
                id="cookie-accept"
                class="cookie-banner-button cookie-banner-button-primary"
            >
                {{ __('Accepter') }}
            </button>

        </div>

    </div>
</div>