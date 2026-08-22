@extends('layouts.blogLayout')

@section('title', 'Cabinet Dutrieux')

@section('content')

<style>
    .legal-page {
        background-color: #f9f1f1;
        padding: 90px 20px 100px;
    }

    .legal-container {
        width: 100%;
        max-width: 920px;
        margin: 0 auto;
    }

    .legal-header {
        text-align: center;
        margin-bottom: 65px;
    }

    .legal-eyebrow {
        margin-bottom: 14px;
        color: #80656a;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 0.72rem;
        font-weight: 700;
        letter-spacing: 0.22em;
        text-transform: uppercase;
    }

    .legal-title {
        margin: 0;
        color: #681f2d;
        font-family: Georgia, "Times New Roman", serif;
        font-size: 3rem;
        font-weight: 700;
        line-height: 1.2;
    }

    .legal-divider {
        width: 55px;
        height: 1px;
        margin: 25px auto 22px;
        background-color: #9a7379;
    }

    .legal-card {
        background-color: #ffffff;
        padding: 60px 70px;
        border: 1px solid #eee3e4;
        box-shadow: 0 12px 40px rgba(104, 31, 45, 0.05);
    }

    .legal-introduction {
        margin-bottom: 50px;
        color: #63565a;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 0.95rem;
        line-height: 1.85;
    }

    .legal-introduction p {
        margin: 0 0 18px;
    }

    .legal-section {
        margin-top: 52px;
    }

    .legal-section:first-of-type {
        margin-top: 0;
    }

    .legal-section-title {
        margin: 0 0 22px;
        color: #681f2d;
        font-family: Georgia, "Times New Roman", serif;
        font-size: 1.55rem;
        font-weight: 700;
        line-height: 1.35;
    }

    .legal-subtitle {
        margin: 32px 0 14px;
        color: #30292b;
        font-family: Georgia, "Times New Roman", serif;
        font-size: 1.12rem;
        font-weight: 700;
        line-height: 1.4;
    }

    .legal-text {
        margin: 0 0 18px;
        color: #63565a;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 0.92rem;
        line-height: 1.8;
    }

    .legal-list {
        margin: 15px 0 22px;
        padding-left: 22px;
        color: #63565a;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 0.92rem;
        line-height: 1.8;
    }

    .legal-list li {
        margin-bottom: 7px;
        padding-left: 4px;
    }

    .legal-list li::marker {
        color: #8b2c3a;
    }

    .legal-contact {
        margin: 25px 0;
        padding: 25px 28px;
        background-color: #f7f5f5;
        border-left: 3px solid #8b2c3a;
    }

    .legal-contact p {
        margin: 0 0 7px;
        color: #575052;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 0.9rem;
        line-height: 1.6;
    }

    .legal-contact p:last-child {
        margin-bottom: 0;
    }

    .legal-contact strong {
        color: #30292b;
    }

    .legal-link {
        color: #681f2d;
        font-weight: 600;
        text-decoration: underline;
        text-decoration-color: #c9aeb3;
        text-underline-offset: 3px;
    }

    .legal-link:hover {
        color: #8b2c3a;
    }

    .legal-highlight {
        margin: 25px 0;
        padding: 22px 25px;
        background-color: #fbe8e8;
        color: #575052;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 0.88rem;
        line-height: 1.75;
    }

    .legal-highlight strong {
        color: #681f2d;
    }

    .legal-final-note {
        margin-top: 60px;
        padding-top: 35px;
        border-top: 1px solid #e5d9db;
    }

    .legal-final-note-title {
        margin: 0 0 18px;
        color: #681f2d;
        font-family: Georgia, "Times New Roman", serif;
        font-size: 1.3rem;
        font-weight: 700;
    }

    .legal-final-note p {
        margin: 0 0 15px;
        color: #63565a;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 0.88rem;
        line-height: 1.8;
    }

    @media screen and (max-width: 768px) {

        .legal-page {
            padding: 60px 15px 70px;
        }

        .legal-header {
            margin-bottom: 40px;
        }

        .legal-title {
            font-size: 2.25rem;
        }

        .legal-card {
            padding: 40px 25px;
        }

        .legal-section {
            margin-top: 42px;
        }

        .legal-section-title {
            font-size: 1.35rem;
        }

        .legal-subtitle {
            font-size: 1.05rem;
        }

        .legal-text,
        .legal-list {
            font-size: 0.88rem;
        }
    }

    @media screen and (max-width: 480px) {

        .legal-page {
            padding: 45px 12px 55px;
        }

        .legal-title {
            font-size: 1.9rem;
        }

        .legal-card {
            padding: 30px 20px;
        }

        .legal-eyebrow {
            font-size: 0.62rem;
            letter-spacing: 0.16em;
        }

        .legal-introduction {
            font-size: 0.88rem;
        }

        .legal-section-title {
            font-size: 1.25rem;
        }

        .legal-contact,
        .legal-highlight {
            padding: 20px;
        }
    }
</style>

<section class="legal-page">

    <div class="legal-container">

        <header class="legal-header">

            <div class="legal-eyebrow">
                {{ __('CABINET DUTRIEUX SRL') }}
            </div>

            <h1 class="legal-title">
                {{ __('Mentions légales') }}
            </h1>

            <div class="legal-divider"></div>

        </header>

        <article class="legal-card">

            {{-- 1. ÉDITEUR DU SITE --}}

            <section class="legal-section">

                <h2 class="legal-section-title">
                    {{ __('1. Éditeur du site') }}
                </h2>

                <p class="legal-text">
                    {{ __('Le présent site internet est édité par :') }}
                </p>

                <div class="legal-contact">

                    <p>
                        <strong>{{ __('Nom commercial / Enseigne :') }}</strong>
                        {{ __('Cabinet Dutrieux') }}
                    </p>

                    <p>
                        <strong>{{ __('Dénomination :') }}</strong>
                        {{ __('Cabinet Dutrieux SRL') }}
                    </p>

                    <p>
                        <strong>{{ __('Numéro SIREN :') }}</strong>
                        {{ __('584 584 854') }}
                    </p>

                    <p>
                        <strong>{{ __('Code NAF :') }}</strong>
                        {{ __('5874Z') }}
                    </p>

                    <p>
                        <strong>{{ __('Statut juridique :') }}</strong>
                        {{ __('Société à responsabilité limitée (SRL)') }}
                    </p>

                    <p>
                        <strong>{{ __('Activité :') }}</strong>
                        {{ __('Étude notariale') }}
                    </p>

                    <p>
                        <strong>{{ __('Notaire :') }}</strong>
                        {{ __('Maître Charles Yves Dutrieux, notaire') }}
                    </p>

                    <p>
                        <strong>{{ __("Numéro d'entreprise (BCE) :") }}</strong>
                        {{ __('BE 0798.456.321') }}
                    </p>

                    <p>
                        <strong>{{ __('Siège social :') }}</strong>
                        {{ __('Rue du Mail 1050 IXELLES CEDEX 4, Belgique') }}
                    </p>

                    <p>
                        <strong>{{ __('Téléphone :') }}</strong>
                        {{ __('+32 465 502 801') }}
                    </p>

                    <p>
                        <strong>{{ __('Adresse e-mail :') }}</strong>
                        contact@cabinetdutrieux.be
                    </p>

                    <p>
                        <strong>{{ __('Adresse e-mail relative à la protection des données :') }}</strong>
                        contact@cabinetdutrieux.be
                    </p>

                </div>

            </section>


            {{-- 2. PROFESSION RÉGLEMENTÉE --}}

            <section class="legal-section">

                <h2 class="legal-section-title">
                    {{ __('2. Profession réglementée') }}
                </h2>

                <p class="legal-text">
                    {{ __('Le Cabinet Dutrieux exerce une activité notariale réglementée en Belgique.') }}
                </p>

                <p class="legal-text">
                    {{ __('Maître Charles Yves Dutrieux exerce la profession de notaire conformément aux dispositions légales et réglementaires applicables à la profession notariale en Belgique.') }}
                </p>

                <p class="legal-text">
                    {{ __("L'activité notariale est soumise aux règles professionnelles et déontologiques applicables aux notaires ainsi qu'à la supervision des autorités et instances compétentes.") }}
                </p>

                <p class="legal-text">
                    {{ __('Pour plus d’informations sur la profession notariale et son cadre réglementaire, l’utilisateur peut consulter le site de la Fédération Royale du Notariat belge (Fednot).') }}
                </p>

            </section>


            {{-- 3. ACTIVITÉ --}}

            <section class="legal-section">

                <h2 class="legal-section-title">
                    {{ __('3. Activité') }}
                </h2>

                <p class="legal-text">
                    {{ __('Le Cabinet Dutrieux est une étude notariale établie en Belgique.') }}
                </p>

                <p class="legal-text">
                    {{ __("L'étude accompagne les particuliers, les entreprises et les professionnels dans leurs démarches et opérations notariales, notamment en matière de droit immobilier, droit familial, successions, donations, droit des sociétés et autres actes relevant de la compétence du notaire.") }}
                </p>

                <p class="legal-text">
                    {{ __('Les informations présentées sur le présent site ont pour objectif de fournir une information générale sur les activités et services de l’étude. Elles ne constituent pas, à elles seules, un avis juridique personnalisé.') }}
                </p>

            </section>


            {{-- 4. RESPONSABILITÉ --}}

            <section class="legal-section">

                <h2 class="legal-section-title">
                    {{ __('4. Responsabilité') }}
                </h2>

                <p class="legal-text">
                    {{ __('Le Cabinet Dutrieux apporte une attention particulière à l’exactitude et à la mise à jour des informations publiées sur son site internet.') }}
                </p>

                <p class="legal-text">
                    {{ __('Toutefois, les informations disponibles sur le site sont fournies à titre général et informatif. Le Cabinet Dutrieux ne peut garantir que l’ensemble des informations publiées soit exhaustif, constamment à jour ou exempt d’erreurs.') }}
                </p>

                <p class="legal-text">
                    {{ __('L’utilisation des informations publiées sur le site relève de la responsabilité de l’utilisateur.') }}
                </p>

                <p class="legal-text">
                    {{ __('Les informations publiées sur le site ne remplacent pas une consultation personnalisée auprès d’un notaire ou d’un professionnel compétent.') }}
                </p>

            </section>


            {{-- 5. PROPRIÉTÉ INTELLECTUELLE --}}

            <section class="legal-section">

                <h2 class="legal-section-title">
                    {{ __('5. Propriété intellectuelle') }}
                </h2>

                <p class="legal-text">
                    {{ __('L’ensemble des éléments composant le présent site, notamment les textes, photographies, illustrations, logos, éléments graphiques, vidéos, documents et éléments de mise en page, est protégé par les dispositions applicables en matière de propriété intellectuelle.') }}
                </p>

                <p class="legal-text">
                    {{ __('Sauf indication contraire, ces éléments sont la propriété du Cabinet Dutrieux ou sont utilisés avec l’autorisation de leurs titulaires respectifs.') }}
                </p>

                <p class="legal-text">
                    {{ __('Toute reproduction, représentation, modification, adaptation, distribution ou exploitation, totale ou partielle, du contenu du site sans autorisation préalable est interdite, sauf dans les limites autorisées par la loi.') }}
                </p>

            </section>


            {{-- 6. PROTECTION DES DONNÉES PERSONNELLES --}}

            <section class="legal-section">

                <h2 class="legal-section-title">
                    {{ __('6. Protection des données personnelles') }}
                </h2>

                <p class="legal-text">
                    {{ __('Le Cabinet Dutrieux accorde une importance particulière à la protection des données à caractère personnel traitées dans le cadre de ses activités.') }}
                </p>

                <p class="legal-text">
                    {{ __('Les données personnelles collectées par l’intermédiaire du site sont traitées conformément au Règlement (UE) 2016/679 relatif à la protection des données (RGPD) et aux dispositions belges applicables en matière de protection des données.') }}
                </p>

                <p class="legal-text">
                    {{ __('Les informations relatives aux finalités des traitements, aux bases juridiques, aux destinataires des données, aux durées de conservation et aux droits des personnes concernées sont détaillées dans la Politique de confidentialité du Cabinet Dutrieux.') }}
                </p>

                <p class="legal-text">
                    {{ __('Pour toute question relative à la protection des données ou pour exercer ses droits, l’utilisateur peut contacter :') }}
                </p>

                <div class="legal-contact">

                    <p>
                        <strong>{{ __('Cabinet Dutrieux SRL — Étude notariale de Maître Charles Yves Dutrieux') }}</strong>
                    </p>

                    <p>
                        <strong>{{ __('E-mail :') }}</strong>
                        contact@cabinetdutrieux.be
                    </p>

                </div>

            </section>


            {{-- 7. COOKIES --}}

            <section class="legal-section">

                <h2 class="legal-section-title">
                    {{ __('7. Cookies') }}
                </h2>

                <p class="legal-text">
                    {{ __('Le site utilise des cookies et technologies similaires nécessaires à son fonctionnement ainsi que, lorsque l’utilisateur y consent, des cookies destinés notamment à l’analyse statistique et à certaines fonctionnalités externes.') }}
                </p>

                <p class="legal-text">
                    {{ __('L’utilisateur peut gérer ses préférences en matière de cookies à partir du module de gestion du consentement disponible sur le site.') }}
                </p>

                <p class="legal-text">
                    {{ __('Les informations détaillées relatives aux cookies utilisés, à leurs finalités et à leur durée de conservation sont présentées dans la Politique relative aux cookies.') }}
                </p>

            </section>


            {{-- 8. HÉBERGEMENT --}}

            <section class="legal-section">

                <h2 class="legal-section-title">
                    {{ __('8. Hébergement') }}
                </h2>

                <p class="legal-text">
                    {{ __('Le site internet est hébergé par :') }}
                </p>

                <div class="legal-contact">

                    <p>
                        <strong>{{ __('OVHcloud') }}</strong>
                    </p>

                    <p>
                        {{ __('2 rue Kellermann') }}
                    </p>

                    <p>
                        {{ __('59100 Roubaix, France') }}
                    </p>

                </div>

                <p class="legal-text">
                    {{ __('Les services d’hébergement sont fournis conformément aux conditions contractuelles applicables à l’utilisation des services OVHcloud.') }}
                </p>

            </section>


            {{-- 9. MESSAGERIE ÉLECTRONIQUE --}}

            <section class="legal-section">

                <h2 class="legal-section-title">
                    {{ __('9. Messagerie électronique') }}
                </h2>

                <p class="legal-text">
                    {{ __('Les services de messagerie professionnelle du Cabinet Dutrieux sont fournis au moyen de Microsoft 365 / Exchange Online.') }}
                </p>

                <p class="legal-text">
                    {{ __('Les adresses électroniques professionnelles du Cabinet utilisent le domaine :') }}
                </p>

                <div class="legal-highlight">
                    <strong>@cabinetdutrieux.be</strong>
                </div>

            </section>


            {{-- 10. PRISE DE RENDEZ-VOUS --}}

            <section class="legal-section">

                <h2 class="legal-section-title">
                    {{ __('10. Prise de rendez-vous') }}
                </h2>

                <p class="legal-text">
                    {{ __('Le site permet aux visiteurs de prendre contact avec l’étude et, lorsque cette fonctionnalité est disponible, de demander un rendez-vous en ligne au moyen de Microsoft Bookings.') }}
                </p>

                <p class="legal-text">
                    {{ __('Les données communiquées lors de la prise de rendez-vous sont traitées uniquement dans le cadre de la gestion de la demande et conformément à la Politique de confidentialité du Cabinet Dutrieux.') }}
                </p>

            </section>


            {{-- 11. STATISTIQUES ET ANALYSE DU SITE --}}

            <section class="legal-section">

                <h2 class="legal-section-title">
                    {{ __('11. Statistiques et analyse du site') }}
                </h2>

                <p class="legal-text">
                    {{ __('Le site utilise Google Analytics 4 afin de mesurer la fréquentation du site et d’améliorer son contenu et son fonctionnement.') }}
                </p>

                <p class="legal-text">
                    {{ __('Les fonctionnalités statistiques non nécessaires au fonctionnement du site sont activées conformément aux choix exprimés par l’utilisateur dans le module de gestion du consentement.') }}
                </p>

            </section>


            {{-- 12. CARTOGRAPHIE --}}

            <section class="legal-section">

                <h2 class="legal-section-title">
                    {{ __('12. Cartographie') }}
                </h2>

                <p class="legal-text">
                    {{ __('Certaines pages du site peuvent intégrer un service de cartographie fourni par Google Maps afin de permettre aux visiteurs de localiser l’étude.') }}
                </p>

                <p class="legal-text">
                    {{ __('Lorsque cette fonctionnalité implique le dépôt ou la lecture de cookies ou le traitement de données nécessitant un consentement, le service est chargé conformément aux préférences exprimées par l’utilisateur.') }}
                </p>

            </section>


            {{-- 13. LIENS EXTERNES --}}

            <section class="legal-section">

                <h2 class="legal-section-title">
                    {{ __('13. Liens externes') }}
                </h2>

                <p class="legal-text">
                    {{ __('Le site peut contenir des liens vers des sites internet ou services exploités par des tiers.') }}
                </p>

                <p class="legal-text">
                    {{ __('Le Cabinet Dutrieux n’exerce aucun contrôle sur le contenu, les politiques de confidentialité ou les pratiques de ces sites tiers et ne peut être tenu responsable de leur contenu ou de leur fonctionnement.') }}
                </p>

            </section>


            {{-- 14. DROIT APPLICABLE --}}

            <section class="legal-section">

                <h2 class="legal-section-title">
                    {{ __('14. Droit applicable') }}
                </h2>

                <p class="legal-text">
                    {{ __('Le présent site et son utilisation sont soumis au droit belge, sous réserve des dispositions impératives du droit de l’Union européenne qui seraient applicables.') }}
                </p>

                <p class="legal-text">
                    {{ __('Tout litige relatif au site sera traité conformément aux règles de compétence applicables en Belgique.') }}
                </p>

            </section>


            {{-- 15. MISE À JOUR --}}

            <section class="legal-section">

                <h2 class="legal-section-title">
                    {{ __('15. Mise à jour') }}
                </h2>

                <p class="legal-text">
                    {{ __('Les présentes mentions légales peuvent être modifiées à tout moment afin de tenir compte de l’évolution du site, de l’activité du Cabinet Dutrieux ou des exigences légales et réglementaires applicables.') }}
                </p>

            </section>


            {{-- NOTE FINALE --}}

            <div class="legal-final-note">

                <h3 class="legal-final-note-title">
                    {{ __('Dernière mise à jour') }}
                </h3>

                <p>
                    {{ __('Août 2026') }}
                </p>

            </div>

        </article>

    </div>

</section>

@endsection