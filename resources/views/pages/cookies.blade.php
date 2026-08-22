@extends('layouts.blogLayout')

@section('title', __('Politique relative aux cookies — Cabinet Dutrieux'))

@section('content')

<style>
    .cookie-policy-page {
        background-color: #f9f1f1;
        padding: 90px 20px 100px;
    }

    .cookie-policy-container {
        width: 100%;
        max-width: 920px;
        margin: 0 auto;
    }

    .cookie-policy-header {
        text-align: center;
        margin-bottom: 65px;
    }

    .cookie-policy-eyebrow {
        margin-bottom: 14px;
        color: #80656a;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 0.72rem;
        font-weight: 700;
        letter-spacing: 0.22em;
        text-transform: uppercase;
    }

    .cookie-policy-title {
        margin: 0;
        color: #681f2d;
        font-family: Georgia, "Times New Roman", serif;
        font-size: 3rem;
        font-weight: 700;
        line-height: 1.2;
    }

    .cookie-policy-divider {
        width: 55px;
        height: 1px;
        margin: 25px auto 22px;
        background-color: #9a7379;
    }

    .cookie-policy-updated {
        margin: 0;
        color: #80656a;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 0.85rem;
        font-style: italic;
    }

    .cookie-policy-card {
        background-color: #ffffff;
        padding: 60px 70px;
        border: 1px solid #eee3e4;
        box-shadow: 0 12px 40px rgba(104, 31, 45, 0.05);
    }

    .cookie-policy-introduction {
        margin-bottom: 50px;
        color: #63565a;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 0.95rem;
        line-height: 1.85;
    }

    .cookie-policy-introduction p {
        margin: 0 0 18px;
    }

    .cookie-policy-section {
        margin-top: 52px;
    }

    .cookie-policy-section:first-of-type {
        margin-top: 0;
    }

    .cookie-policy-section-title {
        margin: 0 0 22px;
        color: #681f2d;
        font-family: Georgia, "Times New Roman", serif;
        font-size: 1.55rem;
        font-weight: 700;
        line-height: 1.35;
    }

    .cookie-policy-subtitle {
        margin: 32px 0 14px;
        color: #30292b;
        font-family: Georgia, "Times New Roman", serif;
        font-size: 1.12rem;
        font-weight: 700;
        line-height: 1.4;
    }

    .cookie-policy-text {
        margin: 0 0 18px;
        color: #63565a;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 0.92rem;
        line-height: 1.8;
    }

    .cookie-policy-list {
        margin: 15px 0 22px;
        padding-left: 22px;
        color: #63565a;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 0.92rem;
        line-height: 1.8;
    }

    .cookie-policy-list li {
        margin-bottom: 7px;
        padding-left: 4px;
    }

    .cookie-policy-list li::marker {
        color: #8b2c3a;
    }

    .cookie-policy-contact {
        margin: 25px 0;
        padding: 25px 28px;
        background-color: #f7f5f5;
        border-left: 3px solid #8b2c3a;
    }

    .cookie-policy-contact p {
        margin: 0 0 7px;
        color: #575052;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 0.9rem;
        line-height: 1.6;
    }

    .cookie-policy-contact p:last-child {
        margin-bottom: 0;
    }

    .cookie-policy-contact strong {
        color: #30292b;
    }

    .cookie-policy-highlight {
        margin: 25px 0;
        padding: 22px 25px;
        background-color: #fbe8e8;
        color: #575052;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 0.88rem;
        line-height: 1.75;
    }

    .cookie-policy-highlight strong {
        color: #681f2d;
    }

    .cookie-policy-link {
        color: #681f2d;
        font-weight: 600;
        text-decoration: underline;
        text-decoration-color: #c9aeb3;
        text-underline-offset: 3px;
    }

    .cookie-policy-link:hover {
        color: #8b2c3a;
    }

    .cookie-policy-table-wrapper {
        width: 100%;
        overflow-x: auto;
        margin: 25px 0;
    }

    .cookie-policy-table {
        width: 100%;
        border-collapse: collapse;
        color: #63565a;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 0.88rem;
    }

    .cookie-policy-table th {
        padding: 14px 12px;
        background-color: #f7f5f5;
        color: #30292b;
        text-align: left;
        border-bottom: 1px solid #e5d9db;
    }

    .cookie-policy-table td {
        padding: 12px;
        border-bottom: 1px solid #eee3e4;
        vertical-align: top;
    }

    .cookie-policy-final-note {
        margin-top: 60px;
        padding-top: 35px;
        border-top: 1px solid #e5d9db;
    }

    .cookie-policy-final-note-title {
        margin: 0 0 18px;
        color: #681f2d;
        font-family: Georgia, "Times New Roman", serif;
        font-size: 1.3rem;
        font-weight: 700;
    }

    .cookie-policy-final-note p {
        margin: 0 0 15px;
        color: #63565a;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 0.88rem;
        line-height: 1.8;
    }

    @media screen and (max-width: 768px) {

        .cookie-policy-page {
            padding: 60px 15px 70px;
        }

        .cookie-policy-header {
            margin-bottom: 40px;
        }

        .cookie-policy-title {
            font-size: 2.25rem;
        }

        .cookie-policy-card {
            padding: 40px 25px;
        }

        .cookie-policy-section {
            margin-top: 42px;
        }

        .cookie-policy-section-title {
            font-size: 1.35rem;
        }

        .cookie-policy-subtitle {
            font-size: 1.05rem;
        }

        .cookie-policy-text,
        .cookie-policy-list {
            font-size: 0.88rem;
        }
    }

    @media screen and (max-width: 480px) {

        .cookie-policy-page {
            padding: 45px 12px 55px;
        }

        .cookie-policy-title {
            font-size: 1.9rem;
        }

        .cookie-policy-card {
            padding: 30px 20px;
        }

        .cookie-policy-eyebrow {
            font-size: 0.62rem;
            letter-spacing: 0.16em;
        }

        .cookie-policy-introduction {
            font-size: 0.88rem;
        }

        .cookie-policy-section-title {
            font-size: 1.25rem;
        }

        .cookie-policy-contact,
        .cookie-policy-highlight {
            padding: 20px;
        }
    }
</style>

<section class="cookie-policy-page">

    <div class="cookie-policy-container">

        <header class="cookie-policy-header">

            <div class="cookie-policy-eyebrow">
                {{ __('CABINET DUTRIEUX SRL') }}
            </div>

            <h1 class="cookie-policy-title">
                {{ __('Politique relative aux cookies') }}
            </h1>

            <div class="cookie-policy-divider"></div>

            

        </header>

        <article class="cookie-policy-card">

            <div class="cookie-policy-introduction">

                <p>
                    {{ __('La présente politique relative aux cookies explique comment le site internet du Cabinet Dutrieux utilise des cookies et des technologies similaires, quelles sont leurs finalités, combien de temps ils peuvent être conservés et comment vous pouvez gérer vos préférences.') }}
                </p>

                <p>
                    {{ __('Le Cabinet Dutrieux accorde une importance particulière au respect de la vie privée et veille à utiliser les cookies conformément à la réglementation applicable en Belgique et au Règlement général sur la protection des données.') }}
                </p>

                <p>
                    {{ __('Cette politique complète la Politique de confidentialité du Cabinet Dutrieux, qui présente de manière plus générale les traitements de données à caractère personnel réalisés dans le cadre du site et des activités de l’étude.') }}
                </p>

            </div>


            {{-- 1. QU'EST-CE QU'UN COOKIE --}}

            <section class="cookie-policy-section">

                <h2 class="cookie-policy-section-title">
                    {{ __('1. Qu’est-ce qu’un cookie ?') }}
                </h2>

                <p class="cookie-policy-text">
                    {{ __('Un cookie est un petit fichier texte ou un dispositif similaire enregistré sur votre ordinateur, votre smartphone, votre tablette ou tout autre appareil lorsque vous consultez un site internet.') }}
                </p>

                <p class="cookie-policy-text">
                    {{ __('Les cookies permettent notamment à un site de fonctionner correctement, de mémoriser certaines préférences, de sécuriser les services, de mesurer la fréquentation ou encore de permettre le fonctionnement de fonctionnalités fournies par des services externes.') }}
                </p>

            </section>


            {{-- 2. RESPONSABLE --}}

            <section class="cookie-policy-section">

                <h2 class="cookie-policy-section-title">
                    {{ __('2. Responsable du traitement') }}
                </h2>

                <p class="cookie-policy-text">
                    {{ __('Le responsable du traitement des données personnelles éventuellement traitées au moyen des cookies du site est :') }}
                </p>

                <div class="cookie-policy-contact">

                    <p>
                        <strong>
                            {{ __('Cabinet Dutrieux SRL — Étude notariale de Maître Charles Yves Dutrieux') }}
                        </strong>
                    </p>

                    <p>
                        {{ __('Rue du Mail 1050 IXELLES CEDEX 4, Belgique') }}
                    </p>

                    <p>
                        <strong>{{ __('Numéro d’entreprise (BCE) :') }}</strong>
                        BE 0798.456.321
                    </p>

                    <p>
                        <strong>{{ __('Téléphone :') }}</strong>
                        +32 465 502 801
                    </p>

                    <p>
                        <strong>{{ __('E-mail général :') }}</strong>
                        contact@cabinetdutrieux.be
                    </p>

                    <p>
                        <strong>{{ __('E-mail relatif à la protection des données :') }}</strong>
                        contact@cabinetdutrieux.be
                    </p>

                </div>

            </section>


            {{-- 3. CATEGORIES --}}

            <section class="cookie-policy-section">

                <h2 class="cookie-policy-section-title">
                    {{ __('3. Quelles catégories de cookies utilisons-nous ?') }}
                </h2>

                <h3 class="cookie-policy-subtitle">
                    {{ __('3.1. Cookies strictement nécessaires') }}
                </h3>

                <p class="cookie-policy-text">
                    {{ __('Ces cookies sont nécessaires au fonctionnement technique du site ou à la fourniture d’un service expressément demandé par l’utilisateur. Ils peuvent notamment permettre la gestion de la session, la sécurité du site, la mémorisation de certains paramètres essentiels ou la gestion du consentement.') }}
                </p>

                <p class="cookie-policy-text">
                    {{ __('Ces cookies ne nécessitent pas de consentement lorsqu’ils sont strictement nécessaires au fonctionnement du service demandé.') }}
                </p>

                <h3 class="cookie-policy-subtitle">
                    {{ __('3.2. Cookies de mesure d’audience') }}
                </h3>

                <p class="cookie-policy-text">
                    {{ __('Le site peut utiliser Google Analytics 4 afin de mesurer la fréquentation du site, de comprendre la manière dont les visiteurs utilisent les différentes pages et d’améliorer le contenu et le fonctionnement du site.') }}
                </p>

                <p class="cookie-policy-text">
                    {{ __('Lorsque ces cookies ne sont pas strictement nécessaires au fonctionnement du site, ils ne sont activés qu’après obtention de votre consentement.') }}
                </p>

                <h3 class="cookie-policy-subtitle">
                    {{ __('3.3. Cookies et technologies liés aux services externes') }}
                </h3>

                <p class="cookie-policy-text">
                    {{ __('Certaines fonctionnalités du site peuvent faire appel à des services externes, notamment Google Maps pour la cartographie et Microsoft Bookings pour la prise de rendez-vous.') }}
                </p>

                <p class="cookie-policy-text">
                    {{ __('Ces services peuvent utiliser leurs propres cookies ou technologies similaires. Lorsqu’un consentement est requis, leur activation intervient conformément à vos préférences.') }}
                </p>

            </section>


            {{-- 4. TABLEAU --}}

            <section class="cookie-policy-section">

                <h2 class="cookie-policy-section-title">
                    {{ __('4. Cookies et technologies utilisés sur le site') }}
                </h2>

                <p class="cookie-policy-text">
                    {{ __('Le tableau ci-dessous présente les principales catégories de cookies ou technologies susceptibles d’être utilisées sur le site. La liste exacte peut évoluer en fonction des services et de leur configuration technique.') }}
                </p>

                <div class="cookie-policy-table-wrapper">

                    <table class="cookie-policy-table">

                        <thead>

                            <tr>
                                <th>{{ __('Service ou cookie') }}</th>
                                <th>{{ __('Finalité') }}</th>
                                <th>{{ __('Catégorie') }}</th>
                                <th>{{ __('Durée indicative') }}</th>
                            </tr>

                        </thead>

                        <tbody>

                            <tr>
                                <td>CookieYes</td>
                                <td>
                                    {{ __('Mémorisation et gestion des préférences de consentement aux cookies.') }}
                                </td>
                                <td>
                                    {{ __('Strictement nécessaire') }}
                                </td>
                                <td>
                                    {{ __('Selon la configuration du service') }}
                                </td>
                            </tr>

                            <tr>
                                <td>Google Analytics 4</td>
                                <td>
                                    {{ __('Mesure d’audience, statistiques de fréquentation et amélioration du site.') }}
                                </td>
                                <td>
                                    {{ __('Mesure d’audience') }}
                                </td>
                                <td>
                                    {{ __('Selon la configuration de Google Analytics') }}
                                </td>
                            </tr>

                            <tr>
                                <td>Google Maps</td>
                                <td>
                                    {{ __('Affichage de cartes et localisation de l’étude.') }}
                                </td>
                                <td>
                                    {{ __('Service externe') }}
                                </td>
                                <td>
                                    {{ __('Selon la configuration de Google') }}
                                </td>
                            </tr>

                            <tr>
                                <td>Microsoft Bookings</td>
                                <td>
                                    {{ __('Gestion et fonctionnement de la prise de rendez-vous en ligne.') }}
                                </td>
                                <td>
                                    {{ __('Service externe') }}
                                </td>
                                <td>
                                    {{ __('Selon la configuration du service') }}
                                </td>
                            </tr>

                        </tbody>

                    </table>

                </div>

                <div class="cookie-policy-highlight">

                    <strong>{{ __('Important :') }}</strong>

                    {{ __('La présence, le nom exact, la durée de conservation et le comportement des cookies peuvent varier en fonction de la configuration technique des services utilisés. Le Cabinet Dutrieux tient à jour cette politique en fonction de l’évolution de son site et de ses prestataires.') }}

                </div>

            </section>


            {{-- 5. GOOGLE ANALYTICS --}}

            <section class="cookie-policy-section">

                <h2 class="cookie-policy-section-title">
                    {{ __('5. Google Analytics 4') }}
                </h2>

                <p class="cookie-policy-text">
                    {{ __('Le site utilise Google Analytics 4, un service d’analyse statistique fourni par Google, afin de comprendre comment les visiteurs utilisent le site et d’améliorer ses performances et son contenu.') }}
                </p>

                <p class="cookie-policy-text">
                    {{ __('Les fonctionnalités de mesure d’audience qui nécessitent votre consentement sont activées uniquement après votre accord.') }}
                </p>

                <p class="cookie-policy-text">
                    {{ __('Google peut traiter certaines informations techniques et relatives à l’utilisation du site conformément à ses propres conditions et politiques de confidentialité.') }}
                </p>

                <p class="cookie-policy-text">
                    {{ __('Pour plus d’informations, nous vous invitons à consulter les informations publiées par Google relatives à la protection des données et à Google Analytics.') }}
                </p>

            </section>


            {{-- 6. GOOGLE MAPS --}}

            <section class="cookie-policy-section">

                <h2 class="cookie-policy-section-title">
                    {{ __('6. Google Maps') }}
                </h2>

                <p class="cookie-policy-text">
                    {{ __('Certaines pages du site peuvent intégrer Google Maps afin de permettre aux visiteurs de localiser le Cabinet Dutrieux.') }}
                </p>

                <p class="cookie-policy-text">
                    {{ __('L’utilisation de ce service peut entraîner la transmission de certaines informations techniques à Google et, selon la configuration du service, l’utilisation de cookies ou de technologies similaires.') }}
                </p>

                <p class="cookie-policy-text">
                    {{ __('Lorsque le chargement du service nécessite votre consentement, celui-ci n’est effectué qu’après votre accord.') }}
                </p>

            </section>


            {{-- 7. BOOKINGS --}}

            <section class="cookie-policy-section">

                <h2 class="cookie-policy-section-title">
                    {{ __('7. Microsoft Bookings') }}
                </h2>

                <p class="cookie-policy-text">
                    {{ __('Le site peut utiliser Microsoft Bookings afin de permettre aux visiteurs de demander ou de gérer un rendez-vous avec l’étude.') }}
                </p>

                <p class="cookie-policy-text">
                    {{ __('Lorsque la fonctionnalité de prise de rendez-vous est utilisée, les informations communiquées sont traitées dans le cadre de la gestion du rendez-vous et conformément à la Politique de confidentialité du Cabinet Dutrieux.') }}
                </p>

                <p class="cookie-policy-text">
                    {{ __('Microsoft peut également utiliser certaines technologies nécessaires au fonctionnement de son service. Les modalités applicables dépendent de la configuration du service et des conditions de Microsoft.') }}
                </p>

            </section>


            {{-- 8. CONSENTEMENT --}}

            <section class="cookie-policy-section">

                <h2 class="cookie-policy-section-title">
                    {{ __('8. Votre consentement') }}
                </h2>

                <p class="cookie-policy-text">
                    {{ __('Lorsque votre consentement est requis, les cookies et technologies non strictement nécessaires ne doivent pas être installés ou utilisés avant que vous ayez exprimé un choix clair et positif.') }}
                </p>

                <p class="cookie-policy-text">
                    {{ __('Le fait de poursuivre simplement votre navigation sur le site ne constitue pas un consentement.') }}
                </p>

                <p class="cookie-policy-text">
                    {{ __('Vous pouvez accepter ou refuser les cookies nécessitant un consentement au moyen du bandeau de gestion des cookies affiché lors de votre première visite.') }}
                </p>

                <div class="cookie-policy-highlight">

                    <strong>{{ __('Votre choix vous appartient :') }}</strong>

                    {{ __('le refus des cookies non nécessaires ne vous empêche pas d’accéder aux contenus essentiels du site. Certaines fonctionnalités fournies par des services externes peuvent toutefois ne pas être disponibles si vous refusez leur activation.') }}

                </div>

            </section>


            {{-- 9. MEMORISATION --}}

            <section class="cookie-policy-section">

                <h2 class="cookie-policy-section-title">
                    {{ __('9. Mémorisation de vos préférences') }}
                </h2>

                <p class="cookie-policy-text">
                    {{ __('Le site mémorise votre choix concernant le consentement afin de ne pas vous présenter inutilement le même message à chaque changement de page ou à chaque visite.') }}
                </p>

                <p class="cookie-policy-text">
                    {{ __('Cette mémorisation peut notamment utiliser le stockage local de votre navigateur ou une technologie équivalente dédiée à la conservation de votre préférence.') }}
                </p>

                <p class="cookie-policy-text">
                    {{ __('La mémorisation de votre choix de consentement ne constitue pas, en elle-même, un suivi de votre activité à des fins publicitaires.') }}
                </p>

            </section>


            {{-- 10. RETRAIT DU CONSENTEMENT --}}

            <section class="cookie-policy-section">

                <h2 class="cookie-policy-section-title">
                    {{ __('10. Modifier ou retirer votre consentement') }}
                </h2>

                <p class="cookie-policy-text">
                    {{ __('Vous pouvez retirer ou modifier votre consentement à tout moment lorsque le site met à votre disposition le mécanisme de gestion des préférences de cookies.') }}
                </p>

                <p class="cookie-policy-text">
                    {{ __('Le retrait du consentement n’affecte pas la licéité des traitements effectués avant ce retrait.') }}
                </p>

                <p class="cookie-policy-text">
                    {{ __('Le Cabinet Dutrieux veille à ce que le retrait du consentement soit aussi simple que son octroi.') }}
                </p>

            </section>


            {{-- 11. NAVIGATEURS --}}

            <section class="cookie-policy-section">

                <h2 class="cookie-policy-section-title">
                    {{ __('11. Gestion des cookies depuis votre navigateur') }}
                </h2>

                <p class="cookie-policy-text">
                    {{ __('Vous pouvez également configurer votre navigateur afin de bloquer, supprimer ou limiter certains cookies.') }}
                </p>

                <p class="cookie-policy-text">
                    {{ __('Les modalités de gestion des cookies varient selon le navigateur utilisé. La désactivation de certains cookies strictement nécessaires peut toutefois affecter le fonctionnement du site ou de certaines fonctionnalités.') }}
                </p>

            </section>


            {{-- 12. DONNEES PERSONNELLES --}}

            <section class="cookie-policy-section">

                <h2 class="cookie-policy-section-title">
                    {{ __('12. Cookies et données à caractère personnel') }}
                </h2>

                <p class="cookie-policy-text">
                    {{ __('Certains cookies peuvent permettre de collecter ou de générer des informations susceptibles d’être associées à un utilisateur ou à un appareil. Lorsqu’un traitement implique des données à caractère personnel, celui-ci est réalisé conformément aux exigences du RGPD et aux règles applicables en matière de protection des données.') }}
                </p>

                <p class="cookie-policy-text">
                    {{ __('Pour obtenir des informations complémentaires sur vos droits, les bases juridiques des traitements, les destinataires des données et les durées de conservation, veuillez consulter notre') }}

                    <a
                        href="{{ route('privacy-policy') }}"
                        class="cookie-policy-link"
                    >
                        {{ __('Politique de confidentialité') }}
                    </a>.
                </p>

            </section>


            {{-- 13. TIERS --}}

            <section class="cookie-policy-section">

                <h2 class="cookie-policy-section-title">
                    {{ __('13. Services et sites de tiers') }}
                </h2>

                <p class="cookie-policy-text">
                    {{ __('Certaines fonctionnalités du site reposent sur des services fournis par des sociétés tierces, notamment Google et Microsoft.') }}
                </p>

                <p class="cookie-policy-text">
                    {{ __('Ces sociétés peuvent appliquer leurs propres politiques de confidentialité, politiques relatives aux cookies et conditions d’utilisation. Le Cabinet Dutrieux ne contrôle pas les pratiques de confidentialité de ces prestataires au-delà des mesures qu’il met en œuvre dans le cadre de son propre site.') }}
                </p>

            </section>


            {{-- 14. SECURITE --}}

            <section class="cookie-policy-section">

                <h2 class="cookie-policy-section-title">
                    {{ __('14. Sécurité') }}
                </h2>

                <p class="cookie-policy-text">
                    {{ __('Le Cabinet Dutrieux prend les mesures techniques et organisationnelles appropriées afin de limiter les risques liés à l’utilisation des cookies et technologies similaires et de protéger les informations traitées dans le cadre de son site.') }}
                </p>

            </section>


            {{-- 15. EVOLUTION --}}

            <section class="cookie-policy-section">

                <h2 class="cookie-policy-section-title">
                    {{ __('15. Mise à jour de la présente politique') }}
                </h2>

                <p class="cookie-policy-text">
                    {{ __('La présente politique relative aux cookies peut être mise à jour afin de tenir compte de l’évolution du site, des services utilisés, des technologies employées, de la réglementation ou des recommandations des autorités compétentes.') }}
                </p>

                <p class="cookie-policy-text">
                    {{ __('La version la plus récente de cette politique est publiée sur cette page et indique sa date de dernière mise à jour.') }}
                </p>

            </section>


            {{-- 16. CONTACT --}}

            <section class="cookie-policy-section">

                <h2 class="cookie-policy-section-title">
                    {{ __('16. Contact') }}
                </h2>

                <p class="cookie-policy-text">
                    {{ __('Pour toute question concernant l’utilisation des cookies ou la présente politique, vous pouvez contacter le Cabinet Dutrieux :') }}
                </p>

                <div class="cookie-policy-contact">

                    <p>
                        <strong>
                            {{ __('Cabinet Dutrieux SRL — Étude notariale de Maître Charles Yves Dutrieux') }}
                        </strong>
                    </p>

                    <p>
                        {{ __('Rue du Mail 1050 IXELLES CEDEX 4, Belgique') }}
                    </p>

                    <p>
                        <strong>{{ __('Numéro d’entreprise (BCE) :') }}</strong>
                        BE 0798.456.321
                    </p>

                    <p>
                        <strong>{{ __('Téléphone :') }}</strong>
                        +32 465 502 801
                    </p>

                    <p>
                        <strong>{{ __('E-mail général :') }}</strong>
                        contact@cabinetdutrieux.be
                    </p>

                    <p>
                        <strong>{{ __('E-mail relatif à la protection des données :') }}</strong>
                        contact@cabinetdutrieux.be
                    </p>

                </div>

            </section>


            <div class="cookie-policy-final-note">

                <h2 class="cookie-policy-final-note-title">
                    {{ __('Informations complémentaires') }}
                </h2>

                <p>
                    {{ __('Pour plus d’informations sur le traitement de vos données personnelles et l’exercice de vos droits, veuillez consulter notre') }}

                    <a
                        href="{{ route('privacy-policy') }}"
                        class="cookie-policy-link"
                    >
                        {{ __('Politique de confidentialité') }}
                    </a>.
                </p>

                <p>
                    {{ __('Dernière mise à jour : août 2026.') }}
                </p>

            </div>

        </article>

    </div>

</section>

@endsection