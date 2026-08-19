<section class="home-article py-5">
    <div class="container">

        {{-- En-tête de la section --}}
        <div class="home-article__header">

    <div>
        <span class="home-article__kicker">
            {{ __('Actualités') }}
        </span>

        <h2 class="home-article__title">
            {{ __('Nos dernières actualités') }}
        </h2>
    </div>

    <a href="{{ route('blog') }}" class="home-article__more">
        {{ __('Voir plus') }}

        <i class="bi bi-arrow-right"></i>
    </a>

</div>

        {{-- Les 3 articles --}}
        <div class="row g-4">

            <div class="col-12 col-md-6 col-lg-4">
                <x-home.article-item
                    title="{{ __('Acheter un bien immobilier en Belgique : les étapes à connaître avant de signer') }}"
                    description="{{ __('Découvrez les principales étapes à connaître avant de concrétiser votre projet d’achat immobilier en Belgique.') }}"
                    image="{{ asset('images/services/s.jpeg') }}"
                    category="{{ __('IMMOBILIER') }}"
                    date="{{ __('12 Jan 2025') }}"
                />
            </div>

            <div class="col-12 col-md-6 col-lg-4">
                <x-home.article-item
                    title="{{ __('Quels frais prévoir lors de l’achat d’un bien immobilier en Belgique ?') }}"
                    description="{{ __('Prix du bien, taxes, frais d’acte et financement : découvrez les principaux coûts à anticiper lors d’un achat immobilier en Belgique.') }}"
                    image="{{ asset('images/blog/d.jpeg') }}"
                    category="{{ __('IMMOBILIER') }}"
                    date="{{ __('05 Fév 2025') }}"
                />
            </div>

            <div class="col-12 col-md-6 col-lg-4">
                <x-home.article-item
                    title="{{ __('Vendre son bien immobilier : que fait réellement le notaire et quelles sont les étapes ?') }}"
                    description="{{ __('Découvrez les principales étapes d’une vente immobilière et le rôle du notaire dans la préparation et la sécurisation de la transaction.') }}"
                    image="{{ asset('images/new/im4.jpeg') }}"
                    category="{{ __('IMMOBILIER') }}"
                    date="{{ __('19 Mars 2025') }}"
                />
            </div>

        </div>
    </div>
</section>