@extends('layouts.blogLayout')

@section('title', 'Politique de confidentialité — Cabinet Dutrieux')

@section('content')

<style>
    .privacy-page {
        background-color: #f9f1f1;
        padding: 90px 20px 100px;
    }

    .privacy-container {
        width: 100%;
        max-width: 920px;
        margin: 0 auto;
    }

    .privacy-header {
        text-align: center;
        margin-bottom: 65px;
    }

    .privacy-eyebrow {
        margin-bottom: 14px;
        color: #80656a;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 0.72rem;
        font-weight: 700;
        letter-spacing: 0.22em;
        text-transform: uppercase;
    }

    .privacy-title {
        margin: 0;
        color: #681f2d;
        font-family: Georgia, "Times New Roman", serif;
        font-size: 3rem;
        font-weight: 700;
        line-height: 1.2;
    }

    .privacy-divider {
        width: 55px;
        height: 1px;
        margin: 25px auto 22px;
        background-color: #9a7379;
    }

    .privacy-updated {
        margin: 0;
        color: #80656a;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 0.85rem;
        font-style: italic;
    }

    .privacy-card {
        background-color: #ffffff;
        padding: 60px 70px;
        border: 1px solid #eee3e4;
        box-shadow: 0 12px 40px rgba(104, 31, 45, 0.05);
    }

    .privacy-introduction {
        margin-bottom: 50px;
        color: #63565a;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 0.95rem;
        line-height: 1.85;
    }

    .privacy-introduction p {
        margin: 0 0 18px;
    }

    .privacy-section {
        margin-top: 52px;
    }

    .privacy-section:first-of-type {
        margin-top: 0;
    }

    .privacy-section-title {
        margin: 0 0 22px;
        color: #681f2d;
        font-family: Georgia, "Times New Roman", serif;
        font-size: 1.55rem;
        font-weight: 700;
        line-height: 1.35;
    }

    .privacy-subtitle {
        margin: 32px 0 14px;
        color: #30292b;
        font-family: Georgia, "Times New Roman", serif;
        font-size: 1.12rem;
        font-weight: 700;
        line-height: 1.4;
    }

    .privacy-text {
        margin: 0 0 18px;
        color: #63565a;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 0.92rem;
        line-height: 1.8;
    }

    .privacy-list {
        margin: 15px 0 22px;
        padding-left: 22px;
        color: #63565a;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 0.92rem;
        line-height: 1.8;
    }

    .privacy-list li {
        margin-bottom: 7px;
        padding-left: 4px;
    }

    .privacy-list li::marker {
        color: #8b2c3a;
    }

    .privacy-contact {
        margin: 25px 0;
        padding: 25px 28px;
        background-color: #f7f5f5;
        border-left: 3px solid #8b2c3a;
    }

    .privacy-contact p {
        margin: 0 0 7px;
        color: #575052;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 0.9rem;
        line-height: 1.6;
    }

    .privacy-contact p:last-child {
        margin-bottom: 0;
    }

    .privacy-contact strong {
        color: #30292b;
    }

    .privacy-highlight {
        margin: 25px 0;
        padding: 22px 25px;
        background-color: #fbe8e8;
        color: #575052;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 0.88rem;
        line-height: 1.75;
    }

    .privacy-highlight strong {
        color: #681f2d;
    }

    .privacy-link {
        color: #681f2d;
        font-weight: 600;
        text-decoration: underline;
        text-decoration-color: #c9aeb3;
        text-underline-offset: 3px;
    }

    .privacy-link:hover {
        color: #8b2c3a;
    }

    .privacy-final-note {
        margin-top: 60px;
        padding-top: 35px;
        border-top: 1px solid #e5d9db;
    }

    .privacy-final-note-title {
        margin: 0 0 18px;
        color: #681f2d;
        font-family: Georgia, "Times New Roman", serif;
        font-size: 1.3rem;
        font-weight: 700;
    }

    .privacy-final-note p {
        margin: 0 0 15px;
        color: #63565a;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 0.88rem;
        line-height: 1.8;
    }

    @media screen and (max-width: 768px) {

        .privacy-page {
            padding: 60px 15px 70px;
        }

        .privacy-header {
            margin-bottom: 40px;
        }

        .privacy-title {
            font-size: 2.25rem;
        }

        .privacy-card {
            padding: 40px 25px;
        }

        .privacy-section {
            margin-top: 42px;
        }

        .privacy-section-title {
            font-size: 1.35rem;
        }

        .privacy-subtitle {
            font-size: 1.05rem;
        }

        .privacy-text,
        .privacy-list {
            font-size: 0.88rem;
        }
    }

    @media screen and (max-width: 480px) {

        .privacy-page {
            padding: 45px 12px 55px;
        }

        .privacy-title {
            font-size: 1.9rem;
        }

        .privacy-card {
            padding: 30px 20px;
        }

        .privacy-eyebrow {
            font-size: 0.62rem;
            letter-spacing: 0.16em;
        }

        .privacy-introduction {
            font-size: 0.88rem;
        }

        .privacy-section-title {
            font-size: 1.25rem;
        }

        .privacy-contact,
        .privacy-highlight {
            padding: 20px;
        }
    }
</style>


<section class="privacy-page">

    <div class="privacy-container">

        <header class="privacy-header">

            <div class="privacy-eyebrow">
                {{ __('Cabinet Dutrieux') }}
            </div>

            <h1 class="privacy-title">
                {{ __('Politique de confidentialité') }}
            </h1>

            <div class="privacy-divider"></div>

        </header>

        <article class="privacy-card">

            {{-- INTRODUCTION --}}

            <div class="privacy-introduction">

                <p>
                    {{ __('Le Cabinet Dutrieux, étude notariale établie en Belgique, accorde une importance particulière à la protection de vos données à caractère personnel et au respect de votre vie privée.') }}
                </p>

                <p>
                    {{ __("La présente politique de confidentialité a pour objectif de vous informer de manière claire et transparente sur la manière dont vos données à caractère personnel sont collectées, utilisées, conservées et protégées lorsque vous utilisez le site internet du Cabinet Dutrieux ou lorsque vous entrez en relation avec l'étude dans le cadre de ses activités notariales.") }}
                </p>

                <p>
                    {{ __("Le Cabinet Dutrieux traite vos données conformément au Règlement (UE) 2016/679 du 27 avril 2016 relatif à la protection des données à caractère personnel (« RGPD »), aux dispositions légales belges applicables ainsi qu'aux règles et obligations propres à la profession notariale en matière de confidentialité, de secret professionnel et de protection des données.") }}
                </p>

            </div>


            {{-- 1. RESPONSABLE DU TRAITEMENT --}}

            <section class="privacy-section">

                <h2 class="privacy-section-title">
                    {{ __('1. Responsable du traitement') }}
                </h2>

                <p class="privacy-text">
                    {{ __('Le responsable du traitement de vos données à caractère personnel est :') }}
                </p>

                <div class="privacy-contact">

                    <p>
                        <strong>{{ __('Cabinet Dutrieux') }}</strong>
                    </p>

                    <p>
                        {{ __('Étude notariale') }}
                    </p>

                    <p>
                        Rue du Mail 1050 Ixelles Belgique
                    </p>

                    <p>
                        <strong>{{ __("Numéro d'entreprise :") }}</strong>
                        +32 465 50 28 01
                    </p>

                    <p>
                        <strong>{{ __('Téléphone :') }}</strong>
                        +32 465 50 28 01
                    </p>

                    <p>
                        <strong>{{ __('E-mail :') }}</strong>
                        contact@cabinetdutrieux.be
                    </p>

                    <p>
                        <strong>{{ __('E-mail relatif à la protection des données :') }}</strong>
                        contact@cabinetdutrieux.be
                    </p>

                </div>

                <p class="privacy-text">
                    {{ __("Le Cabinet Dutrieux détermine les finalités et les moyens des traitements de données à caractère personnel réalisés dans le cadre de son activité.") }}
                </p>

                <p class="privacy-text">
                    {{ __("Lorsque la réglementation applicable l'exige, le Cabinet Dutrieux fait appel à un délégué à la protection des données (DPO). Les coordonnées de celui-ci seront indiquées dans la présente politique lorsqu'elles sont applicables.") }}
                </p>

            </section>


            {{-- 2. DONNÉES PERSONNELLES --}}

            <section class="privacy-section">

                <h2 class="privacy-section-title">
                    {{ __('2. Quelles données personnelles pouvons-nous traiter ?') }}
                </h2>

                <p class="privacy-text">
                    {{ __('Selon la nature de votre relation avec le Cabinet Dutrieux, différentes catégories de données peuvent être traitées.') }}
                </p>

                <h3 class="privacy-subtitle">
                    {{ __('2.1. Données communiquées via le site internet') }}
                </h3>

                <p class="privacy-text">
                    {{ __('Lorsque vous utilisez le formulaire de contact, le formulaire de demande de rendez-vous ou tout autre formulaire disponible sur le site, nous pouvons notamment traiter :') }}
                </p>

                <ul class="privacy-list">
                    <li>{{ __('nom et prénom ;') }}</li>
                    <li>{{ __('adresse e-mail ;') }}</li>
                    <li>{{ __('numéro de téléphone ;') }}</li>
                    <li>{{ __('objet de votre demande ;') }}</li>
                    <li>{{ __('contenu du message ;') }}</li>
                    <li>{{ __('informations relatives à votre demande de rendez-vous ;') }}</li>
                    <li>{{ __('date et heure souhaitées pour un rendez-vous ;') }}</li>
                    <li>{{ __('toute autre information que vous choisissez volontairement de nous communiquer.') }}</li>
                </ul>

                <p class="privacy-text">
                    {{ __('Nous vous invitons à ne communiquer, via les formulaires du site, que les informations nécessaires au traitement de votre demande.') }}
                </p>

                <h3 class="privacy-subtitle">
                    {{ __("2.2. Données traitées dans le cadre d'un dossier notarial") }}
                </h3>

                <p class="privacy-text">
                    {{ __("Dans le cadre de l'exercice de ses missions, le Cabinet Dutrieux peut être amené à traiter des catégories plus larges de données, notamment :") }}
                </p>

                <ul class="privacy-list">
                    <li>{{ __("données d'identification ;") }}</li>
                    <li>{{ __('coordonnées ;') }}</li>
                    <li>{{ __("données relatives à l'état civil ;") }}</li>
                    <li>{{ __('données relatives à la situation familiale ;') }}</li>
                    <li>{{ __('données relatives à la capacité juridique des personnes ;') }}</li>
                    <li>{{ __('données patrimoniales ;') }}</li>
                    <li>{{ __('données immobilières ;') }}</li>
                    <li>{{ __('données financières et fiscales ;') }}</li>
                    <li>{{ __('données professionnelles ;') }}</li>
                    <li>{{ __('données relatives aux sociétés et à leurs représentants ;') }}</li>
                    <li>{{ __('données relatives aux testaments, successions et donations ;') }}</li>
                    <li>{{ __('données contenues dans les actes et documents notariés ;') }}</li>
                    <li>{{ __("toute autre donnée nécessaire à l'accomplissement d'une mission notariale.") }}</li>
                </ul>

                <p class="privacy-text">
                    {{ __("Certaines de ces données peuvent présenter un caractère particulièrement confidentiel. Leur traitement est soumis aux obligations professionnelles applicables aux notaires, notamment au secret professionnel et au devoir de discrétion.") }}
                </p>

            </section>


            {{-- 3. COLLECTE --}}

            <section class="privacy-section">

                <h2 class="privacy-section-title">
                    {{ __('3. Dans quelles situations collectons-nous vos données ?') }}
                </h2>

                <p class="privacy-text">
                    {{ __('Vos données peuvent notamment être collectées lorsque :') }}
                </p>

                <ul class="privacy-list">
                    <li>{{ __('vous utilisez le formulaire de contact du site ;') }}</li>
                    <li>{{ __('vous demandez un rendez-vous ;') }}</li>
                    <li>{{ __("vous correspondez avec l'étude par e-mail, téléphone ou courrier ;") }}</li>
                    <li>{{ __('vous confiez un dossier au Cabinet Dutrieux ;') }}</li>
                    <li>{{ __('vous participez à une opération ou à un acte notarié ;') }}</li>
                    <li>{{ __("vous êtes partie ou intervenant dans un dossier traité par l'étude ;") }}</li>
                    <li>{{ __('vous nous fournissez volontairement des documents ou informations nécessaires au traitement de votre dossier ;') }}</li>
                    <li>{{ __('nous devons obtenir certaines informations auprès de sources authentiques, d’administrations ou de professionnels habilités, conformément à la législation applicable.') }}</li>
                </ul>

                <p class="privacy-text">
                    {{ __('Dans le cadre de ses missions notariales, le notaire peut être légalement autorisé ou tenu de recueillir certaines informations auprès de sources officielles et d’administrations.') }}
                </p>

            </section>


            {{-- 4. FINALITÉS --}}

            <section class="privacy-section">

                <h2 class="privacy-section-title">
                    {{ __('4. Pourquoi utilisons-nous vos données ?') }}
                </h2>

                <p class="privacy-text">
                    {{ __('Vos données sont traitées uniquement pour des finalités déterminées, explicites et légitimes.') }}
                </p>

                <h3 class="privacy-subtitle">
                    {{ __('4.1. Répondre à vos demandes') }}
                </h3>

                <ul class="privacy-list">
                    <li>{{ __('répondre à votre demande ;') }}</li>
                    <li>{{ __('vous recontacter ;') }}</li>
                    <li>{{ __('vous fournir les informations demandées ;') }}</li>
                    <li>{{ __('identifier le service ou le collaborateur compétent.') }}</li>
                </ul>

                <h3 class="privacy-subtitle">
                    {{ __('4.2. Gérer les rendez-vous') }}
                </h3>

                <ul class="privacy-list">
                    <li>{{ __('enregistrer votre demande ;') }}</li>
                    <li>{{ __('vérifier les disponibilités ;') }}</li>
                    <li>{{ __('organiser le rendez-vous ;') }}</li>
                    <li>{{ __('vous confirmer ou modifier celui-ci ;') }}</li>
                    <li>{{ __('vous contacter en cas de changement ou de nécessité liée au rendez-vous.') }}</li>
                </ul>

                <h3 class="privacy-subtitle">
                    {{ __('4.3. Gérer les dossiers notariaux') }}
                </h3>

                <ul class="privacy-list">
                    <li>{{ __('analyser votre situation ;') }}</li>
                    <li>{{ __('vous conseiller dans le cadre de la mission confiée ;') }}</li>
                    <li>{{ __('préparer les documents nécessaires ;') }}</li>
                    <li>{{ __('rédiger et recevoir les actes notariés ;') }}</li>
                    <li>{{ __('accomplir les formalités légales et administratives ;') }}</li>
                    <li>{{ __('communiquer avec les parties, professionnels et autorités concernés ;') }}</li>
                    <li>{{ __('assurer le suivi administratif, juridique et financier du dossier ;') }}</li>
                    <li>{{ __('respecter les obligations légales et réglementaires applicables au notariat.') }}</li>
                </ul>

                <h3 class="privacy-subtitle">
                    {{ __('4.4. Respecter nos obligations légales') }}
                </h3>

                <p class="privacy-text">
                    {{ __('Certaines données doivent être traitées afin de respecter les obligations légales et réglementaires auxquelles le notaire est soumis.') }}
                </p>

                <p class="privacy-text">
                    {{ __("Cela peut notamment concerner les obligations relatives à l'identification des parties, à la lutte contre le blanchiment de capitaux, aux obligations fiscales, aux formalités administratives et aux différentes obligations propres à l'activité notariale.") }}
                </p>

            </section>


            {{-- 5. BASES LÉGALES --}}

            <section class="privacy-section">

                <h2 class="privacy-section-title">
                    {{ __('5. Sur quelles bases légales traitons-nous vos données ?') }}
                </h2>

                <p class="privacy-text">
                    {{ __('Selon le contexte, le traitement de vos données peut reposer sur différentes bases juridiques prévues par le RGPD.') }}
                </p>

                <ul class="privacy-list">
                    <li>
                        <strong>{{ __("l'exécution de mesures précontractuelles ou d'un contrat") }}</strong>,
                        {{ __('lorsque vous nous contactez afin de préparer une prestation ou lorsque vous nous confiez une mission ;') }}
                    </li>

                    <li>
                        <strong>{{ __("le respect d'une obligation légale") }}</strong>,
                        {{ __('lorsque le traitement est imposé par la législation applicable ;') }}
                    </li>

                    <li>
                        <strong>{{ __("l'exécution d'une mission d'intérêt public ou relevant de l'exercice de l'autorité publique") }}</strong>,
                        {{ __('lorsque cela est applicable aux missions notariales ;') }}
                    </li>

                    <li>
                        <strong>{{ __("l'intérêt légitime") }}</strong>,
                        {{ __('lorsque celui-ci constitue une base juridique appropriée et que vos droits et libertés ne prévalent pas ;') }}
                    </li>

                    <li>
                        <strong>{{ __('votre consentement') }}</strong>,
                        {{ __('lorsque celui-ci est juridiquement requis.') }}
                    </li>
                </ul>

            </section>


            {{-- 6. DONNÉES OBLIGATOIRES --}}

            <section class="privacy-section">

                <h2 class="privacy-section-title">
                    {{ __('6. Les données sont-elles obligatoires ?') }}
                </h2>

                <p class="privacy-text">
                    {{ __('Certaines informations sont indispensables pour permettre au Cabinet Dutrieux de répondre à votre demande ou d’accomplir une mission notariale.') }}
                </p>

                <p class="privacy-text">
                    {{ __("Lorsque certaines données sont nécessaires à l'accomplissement d'une obligation légale ou à l'exécution d'une mission, leur absence peut empêcher l'étude :") }}
                </p>

                <ul class="privacy-list">
                    <li>{{ __('de traiter votre demande ;') }}</li>
                    <li>{{ __('de vous proposer un rendez-vous ;') }}</li>
                    <li>{{ __("d'ouvrir ou de traiter un dossier ;") }}</li>
                    <li>{{ __("d'établir certains documents ou actes ;") }}</li>
                    <li>{{ __('d’accomplir les formalités nécessaires.') }}</li>
                </ul>

                <p class="privacy-text">
                    {{ __('Lorsque vous utilisez un formulaire du site, seuls les champs nécessaires à son fonctionnement sont demandés comme obligatoires.') }}
                </p>

            </section>


            {{-- 7. DESTINATAIRES --}}

            <section class="privacy-section">

                <h2 class="privacy-section-title">
                    {{ __('7. À qui vos données peuvent-elles être communiquées ?') }}
                </h2>

                <p class="privacy-text">
                    {{ __('Le Cabinet Dutrieux ne vend ni ne loue vos données personnelles.') }}
                </p>

                <p class="privacy-text">
                    {{ __('Selon la nature du dossier et uniquement lorsque cela est nécessaire ou légalement requis, certaines données peuvent être communiquées à des destinataires habilités, notamment :') }}
                </p>

                <ul class="privacy-list">
                    <li>{{ __('administrations publiques ;') }}</li>
                    <li>{{ __('autorités judiciaires ou administratives ;') }}</li>
                    <li>{{ __('services fiscaux ;') }}</li>
                    <li>{{ __('organismes ou institutions compétents dans le cadre des missions notariales ;') }}</li>
                    <li>{{ __('autres notaires lorsque cela est nécessaire à l’accomplissement d’une opération ;') }}</li>
                    <li>{{ __('banques et établissements financiers lorsque cela est nécessaire au dossier ;') }}</li>
                    <li>{{ __('avocats, experts, comptables ou autres professionnels intervenant dans le dossier ;') }}</li>
                    <li>{{ __('prestataires techniques agissant pour le compte de l’étude ;') }}</li>
                    <li>{{ __('autres parties concernées par une opération notariale, dans les limites de ce qui est nécessaire et autorisé.') }}</li>
                </ul>

                <p class="privacy-text">
                    {{ __("Ces communications ne sont effectuées que lorsqu'elles sont nécessaires à l'accomplissement des missions du Cabinet Dutrieux, à l'exécution d'une obligation légale ou lorsque vous les avez autorisées lorsque cette autorisation est nécessaire.") }}
                </p>

            </section>


            {{-- 8. SOUS-TRAITANTS --}}

            <section class="privacy-section">

                <h2 class="privacy-section-title">
                    {{ __('8. Recours à des prestataires et sous-traitants') }}
                </h2>

                <p class="privacy-text">
                    {{ __('Le Cabinet Dutrieux peut faire appel à des prestataires externes pour certaines fonctions techniques ou administratives, par exemple :') }}
                </p>

                <ul class="privacy-list">
                    <li>{{ __('hébergement du site internet ;') }}</li>
                    <li>{{ __('gestion et sécurisation des systèmes informatiques ;') }}</li>
                    <li>{{ __('messagerie électronique ;') }}</li>
                    <li>{{ __('maintenance informatique ;') }}</li>
                    <li>{{ __('outils de gestion des rendez-vous ;') }}</li>
                    <li>{{ __('services nécessaires au fonctionnement du site.') }}</li>
                </ul>

                <p class="privacy-text">
                    {{ __('Lorsque ces prestataires traitent des données personnelles pour le compte du Cabinet Dutrieux, ils sont sélectionnés avec une attention particulière portée à la sécurité et à la protection des données.') }}
                </p>

            </section>


            {{-- 9. TRANSFERTS --}}

            <section class="privacy-section">

                <h2 class="privacy-section-title">
                    {{ __("9. Transferts de données en dehors de l'Espace économique européen") }}
                </h2>

                <p class="privacy-text">
                    {{ __("Le Cabinet Dutrieux privilégie, dans la mesure du possible, des solutions permettant de traiter les données au sein de l'Espace économique européen.") }}
                </p>

                <p class="privacy-text">
                    {{ __("Lorsque l'utilisation d'un prestataire implique un transfert de données vers un pays situé en dehors de l'Espace économique européen, le Cabinet Dutrieux veille à ce que ce transfert soit effectué conformément au RGPD et qu'un mécanisme juridique approprié garantisse un niveau de protection adéquat.") }}
                </p>

            </section>


            {{-- 10. CONSERVATION --}}

            <section class="privacy-section">

                <h2 class="privacy-section-title">
                    {{ __('10. Combien de temps conservons-nous vos données ?') }}
                </h2>

                <p class="privacy-text">
                    {{ __('La durée de conservation dépend de la nature des données et de la finalité du traitement.') }}
                </p>

                <p class="privacy-text">
                    {{ __('Les données relatives aux demandes de contact ou de rendez-vous sont conservées pendant la durée nécessaire à leur traitement et, lorsque cela est justifié, pendant une durée supplémentaire nécessaire à la gestion administrative ou à la défense des droits du cabinet.') }}
                </p>

                <p class="privacy-text">
                    {{ __('Les données relatives aux dossiers notariaux peuvent, quant à elles, être conservées pendant les durées imposées ou autorisées par les dispositions légales et réglementaires applicables à la profession notariale.') }}
                </p>

                <p class="privacy-text">
                    {{ __("En raison de la nature particulière des actes et dossiers notariaux, certaines données doivent être conservées pendant des périodes importantes afin de respecter les obligations légales, d'assurer la conservation des actes et de permettre l'exercice des droits des personnes concernées.") }}
                </p>

            </section>


            {{-- 11. SÉCURITÉ --}}

            <section class="privacy-section">

                <h2 class="privacy-section-title">
                    {{ __('11. Comment protégeons-nous vos données ?') }}
                </h2>

                <p class="privacy-text">
                    {{ __('Le Cabinet Dutrieux met en œuvre des mesures techniques et organisationnelles destinées à protéger les données personnelles contre :') }}
                </p>

                <ul class="privacy-list">
                    <li>{{ __('l’accès non autorisé ;') }}</li>
                    <li>{{ __('la perte ;') }}</li>
                    <li>{{ __('la destruction ;') }}</li>
                    <li>{{ __("l'altération ;") }}</li>
                    <li>{{ __('la divulgation non autorisée ;') }}</li>
                    <li>{{ __('toute autre forme de traitement illicite.') }}</li>
                </ul>

                <p class="privacy-text">
                    {{ __('Ces mesures peuvent notamment comprendre :') }}
                </p>

                <ul class="privacy-list">
                    <li>{{ __('la limitation des accès aux données ;') }}</li>
                    <li>{{ __("l'authentification des utilisateurs ;") }}</li>
                    <li>{{ __('la gestion des droits d’accès ;') }}</li>
                    <li>{{ __('la sécurisation des systèmes informatiques ;') }}</li>
                    <li>{{ __('la sauvegarde des données ;') }}</li>
                    <li>{{ __('la sécurisation des communications électroniques ;') }}</li>
                    <li>{{ __('la sensibilisation des collaborateurs à la confidentialité ;') }}</li>
                    <li>{{ __('des mesures de protection contre les accès non autorisés.') }}</li>
                </ul>

            </section>


            {{-- 12. SECRET PROFESSIONNEL --}}

            <section class="privacy-section">

                <h2 class="privacy-section-title">
                    {{ __('12. Secret professionnel et confidentialité') }}
                </h2>

                <p class="privacy-text">
                    {{ __("La confidentialité constitue un principe essentiel de l'activité notariale.") }}
                </p>

                <p class="privacy-text">
                    {{ __('Les informations auxquelles le notaire a accès dans le cadre de ses fonctions peuvent être soumises au secret professionnel ou au devoir de discrétion conformément aux règles applicables à la profession notariale.') }}
                </p>

                <p class="privacy-text">
                    {{ __("Le notaire est notamment tenu à un devoir de discrétion qui limite la communication d'informations à des tiers, sauf lorsque cette communication est nécessaire ou utile à l'opération dont il est chargé ou lorsqu'une disposition légale l'autorise ou l'impose.") }}
                </p>

                <p class="privacy-text">
                    {{ __('La protection des données personnelles s’inscrit ainsi dans un cadre plus large comprenant les obligations professionnelles, légales et déontologiques propres au notariat.') }}
                </p>

            </section>


            {{-- 13. DROITS --}}

            <section class="privacy-section">

                <h2 class="privacy-section-title">
                    {{ __('13. Vos droits') }}
                </h2>

                <p class="privacy-text">
                    {{ __('Conformément au RGPD, vous disposez, selon les circonstances et sous réserve des limitations prévues par la loi, de différents droits concernant vos données personnelles.') }}
                </p>

                <h3 class="privacy-subtitle">
                    {{ __("D'un droit d'accès") }}
                </h3>

                <p class="privacy-text">
                    {{ __('Vous pouvez demander à savoir si vos données personnelles sont traitées et, dans certaines conditions, obtenir une copie des données vous concernant ainsi que certaines informations sur leur traitement.') }}
                </p>

                <h3 class="privacy-subtitle">
                    {{ __('D’un droit de rectification') }}
                </h3>

                <p class="privacy-text">
                    {{ __("Vous pouvez demander la correction de données personnelles inexactes ou leur complément lorsqu'elles sont incomplètes." ) }}
                </p>

                <h3 class="privacy-subtitle">
                    {{ __("D'un droit à l'effacement") }}
                </h3>

                <p class="privacy-text">
                    {{ __('Vous pouvez, dans certaines situations prévues par le RGPD, demander l’effacement de vos données.') }}
                </p>

                <p class="privacy-text">
                    {{ __("Ce droit n'est toutefois pas absolu. Certaines données doivent notamment être conservées lorsque leur conservation est imposée par une obligation légale ou nécessaire à l'exercice des missions notariales.") }}
                </p>

                <h3 class="privacy-subtitle">
                    {{ __('D’un droit à la limitation du traitement') }}
                </h3>

                <p class="privacy-text">
                    {{ __('Dans certaines situations, vous pouvez demander que le traitement de vos données soit limité.') }}
                </p>

                <h3 class="privacy-subtitle">
                    {{ __("D'un droit d'opposition") }}
                </h3>

                <p class="privacy-text">
                    {{ __('Lorsque le traitement repose sur certains fondements juridiques, vous pouvez vous opposer au traitement de vos données pour des raisons tenant à votre situation particulière.') }}
                </p>

                <h3 class="privacy-subtitle">
                    {{ __('D’un droit à la portabilité') }}
                </h3>

                <p class="privacy-text">
                    {{ __('Lorsque les conditions prévues par le RGPD sont réunies, vous pouvez recevoir certaines données personnelles dans un format structuré, couramment utilisé et lisible par machine, ou demander leur transmission à un autre responsable du traitement.') }}
                </p>

                <h3 class="privacy-subtitle">
                    {{ __('D’un droit de retirer votre consentement') }}
                </h3>

                <p class="privacy-text">
                    {{ __('Lorsque le traitement repose sur votre consentement, vous pouvez retirer celui-ci à tout moment.') }}
                </p>

                <p class="privacy-text">
                    {{ __("Le retrait du consentement n'affecte pas la licéité des traitements effectués avant ce retrait.") }}
                </p>

            </section>


            {{-- 14. EXERCER SES DROITS --}}

            <section class="privacy-section">

                <h2 class="privacy-section-title">
                    {{ __('14. Comment exercer vos droits ?') }}
                </h2>

                <p class="privacy-text">
                    {{ __('Pour exercer vos droits ou obtenir des informations complémentaires concernant le traitement de vos données, vous pouvez contacter le Cabinet Dutrieux :') }}
                </p>

                <div class="privacy-contact">

                    <p>
                        <strong>{{ __('Cabinet Dutrieux') }}</strong>
                    </p>

                    <p>
                        Rue du Mail 1050 Ixelles Belgique
                    </p>

                    <p>
                        <strong>{{ __('E-mail :') }}</strong>
                        contact@cabinetdutrieux.be
                    </p>

                </div>

                <p class="privacy-text">
                    {{ __("Votre demande doit permettre au cabinet de vous identifier de manière raisonnable afin d'éviter qu'une personne non autorisée puisse accéder à vos données.") }}
                </p>

                <p class="privacy-text">
                    {{ __('Le Cabinet Dutrieux traitera votre demande conformément aux délais et conditions prévus par le RGPD et les dispositions légales applicables.') }}
                </p>

            </section>


            {{-- 15. RÉCLAMATION --}}

            <section class="privacy-section">

                <h2 class="privacy-section-title">
                    {{ __("15. Droit d'introduire une réclamation") }}
                </h2>

                <p class="privacy-text">
                    {{ __('Si vous estimez que le traitement de vos données personnelles ne respecte pas les règles applicables en matière de protection des données, vous pouvez contacter le Cabinet Dutrieux afin de rechercher une solution.') }}
                </p>

                <p class="privacy-text">
                    {{ __('Vous disposez également du droit d’introduire une réclamation auprès de l’autorité de contrôle compétente en Belgique :') }}
                </p>

                <div class="privacy-contact">

                    <p>
                        <strong>{{ __('Autorité de protection des données (APD)') }}</strong>
                    </p>

                    <p>
                        <strong>{{ __('Site officiel :') }}</strong>
                        <a
                            href="https://www.autoriteprotectiondonnees.be"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="privacy-link"
                        >
                            autoriteprotectiondonnees.be
                        </a>
                    </p>

                </div>

                <p class="privacy-text">
                    {{ __('L’Autorité de protection des données constitue l’autorité belge compétente en matière de protection des données à caractère personnel.') }}
                </p>

            </section>


            {{-- 16. COOKIES --}}

            <section class="privacy-section">

                <h2 class="privacy-section-title">
                    {{ __('16. Cookies') }}
                </h2>

                <p class="privacy-text">
                    {{ __('Le site internet du Cabinet Dutrieux peut utiliser des cookies ou technologies similaires nécessaires à son fonctionnement.') }}
                </p>

                <p class="privacy-text">
                    {{ __('Les cookies peuvent notamment être utilisés afin :') }}
                </p>

                <ul class="privacy-list">
                    <li>{{ __('d’assurer le fonctionnement technique du site ;') }}</li>
                    <li>{{ __('de mémoriser certaines préférences ;') }}</li>
                    <li>{{ __('d’améliorer la sécurité ;') }}</li>
                    <li>{{ __('d’établir des statistiques de fréquentation lorsque cela est applicable.') }}</li>
                </ul>

                <p class="privacy-text">
                    {{ __('Lorsque certains cookies nécessitent votre consentement, celui-ci sera recueilli conformément à la réglementation applicable.') }}
                </p>

            </section>


            {{-- 17. FORMULAIRES --}}

            <section class="privacy-section">

                <h2 class="privacy-section-title">
                    {{ __('17. Formulaires de contact et de rendez-vous') }}
                </h2>

                <p class="privacy-text">
                    {{ __('Les informations communiquées via les formulaires du site sont destinées au Cabinet Dutrieux et sont utilisées uniquement dans la mesure nécessaire pour traiter votre demande.') }}
                </p>

                <p class="privacy-text">
                    {{ __("Le formulaire de contact peut notamment permettre à l'étude de recevoir :") }}
                </p>

                <ul class="privacy-list">
                    <li>{{ __('votre identité ;') }}</li>
                    <li>{{ __('vos coordonnées ;') }}</li>
                    <li>{{ __('votre message ;') }}</li>
                    <li>{{ __('les informations nécessaires pour vous répondre.') }}</li>
                </ul>

                <p class="privacy-text">
                    {{ __("Le formulaire de rendez-vous peut notamment permettre à l'étude de recevoir :") }}
                </p>

                <ul class="privacy-list">
                    <li>{{ __('votre identité ;') }}</li>
                    <li>{{ __('vos coordonnées ;') }}</li>
                    <li>{{ __('votre demande ;') }}</li>
                    <li>{{ __('vos disponibilités ou préférences de rendez-vous ;') }}</li>
                    <li>{{ __('les informations strictement nécessaires à l’organisation de celui-ci.') }}</li>
                </ul>

                <div class="privacy-highlight">
                    <strong>{{ __('Important :') }}</strong>
                    {{ __("nous vous recommandons de ne pas transmettre de données sensibles ou de documents confidentiels via le formulaire de contact, sauf lorsque cela vous est expressément demandé par l'étude et via un moyen de transmission approprié.") }}
                </div>

            </section>


            {{-- 18. SITES TIERS --}}

            <section class="privacy-section">

                <h2 class="privacy-section-title">
                    {{ __('18. Liens vers des sites tiers') }}
                </h2>

                <p class="privacy-text">
                    {{ __('Le site du Cabinet Dutrieux peut contenir des liens vers des sites internet ou services appartenant à des tiers.') }}
                </p>

                <p class="privacy-text">
                    {{ __("Le Cabinet Dutrieux n'est pas responsable des pratiques de confidentialité, du contenu ou de la sécurité de ces sites tiers.") }}
                </p>

                <p class="privacy-text">
                    {{ __('Nous vous invitons à consulter leurs propres politiques de confidentialité avant de leur communiquer des données personnelles.') }}
                </p>

            </section>


            {{-- 19. MODIFICATIONS --}}

            <section class="privacy-section">

                <h2 class="privacy-section-title">
                    {{ __('19. Modifications de la présente politique') }}
                </h2>

                <p class="privacy-text">
                    {{ __('La présente politique de confidentialité peut être mise à jour afin de tenir compte :') }}
                </p>

                <ul class="privacy-list">
                    <li>{{ __('de l’évolution de la législation ;') }}</li>
                    <li>{{ __('des recommandations des autorités compétentes ;') }}</li>
                    <li>{{ __('de l’évolution des activités du Cabinet Dutrieux ;') }}</li>
                    <li>{{ __('de l’évolution du site internet et de ses fonctionnalités ;') }}</li>
                    <li>{{ __('de l’évolution des technologies utilisées.') }}</li>
                </ul>

                <p class="privacy-text">
                    {{ __('La version la plus récente sera publiée sur cette page et indiquera sa date de dernière mise à jour.') }}
                </p>

            </section>


            {{-- 20. CONTACT --}}

            <section class="privacy-section">

                <h2 class="privacy-section-title">
                    {{ __('20. Contact') }}
                </h2>

                <p class="privacy-text">
                    {{ __('Pour toute question concernant la présente politique de confidentialité ou le traitement de vos données personnelles, vous pouvez contacter :') }}
                </p>

                <div class="privacy-contact">

                    <p>
                        <strong>{{ __('Cabinet Dutrieux') }}</strong>
                    </p>

                    <p>
                        {{ __('Étude notariale') }}
                    </p>

                    <p>
                        Rue du Mail
                        1050 Ixelles
                        Belgique
                    </p>

                    <p>
                        <strong>{{ __('E-mail :') }}</strong>
                        contact@cabinetdutrieux.be
                    </p>

                    <p>
                        <strong>{{ __('Téléphone :') }}</strong>
                        +32 465 50 28 01
                    </p>

                </div>

            </section>


            {{-- INFORMATIONS IMPORTANTES --}}

            <div class="privacy-final-note">

                <h2 class="privacy-final-note-title">
                    {{ __('Informations importantes') }}
                </h2>

                <p>
                    {{ __("La présente politique constitue un modèle adapté au contexte d'un cabinet notarial belge et à un site internet comprenant notamment des formulaires de contact et de prise de rendez-vous.") }}
                </p>

                <p>
                    {{ __("Avant sa mise en ligne définitive, elle doit être vérifiée et complétée avec les informations propres au Cabinet Dutrieux, notamment l'identité juridique exacte du responsable du traitement, le numéro d'entreprise, les coordonnées officielles, l'adresse e-mail destinée aux demandes relatives aux données personnelles, ainsi que les outils réellement utilisés par le site.") }}
                </p>

                <p>
                    {{ __('Les informations relatives à l’hébergement, à la messagerie, aux cookies, aux éventuels services d’analyse, de statistiques, de carte ou de prise de rendez-vous, ainsi que les durées de conservation effectivement appliquées par l’étude doivent également être vérifiées.') }}
                </p>

                <div class="privacy-highlight">

                    <strong>{{ __('Attention :') }}</strong>
                    {{ __('cette politique ne doit pas être publiée comme un document juridiquement définitif sans cette vérification préalable.') }}

                </div>

            </div>

        </article>

    </div>

</section>

@endsection