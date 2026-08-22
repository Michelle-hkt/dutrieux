@extends('layouts.blogLayout')

@section('title', 'Cabinet Dutrieux')

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
                {{ __('CABINET DUTRIEUX SRL') }}
            </div>

            <h1 class="privacy-title">
                
                {{ __('Politique de confidentialité et de protection des données') }}
            </h1>

            <div class="privacy-divider"></div>

        </header>

        <article class="privacy-card">

            {{-- INTRODUCTION --}}

            <div class="privacy-introduction">

                <p>
                    {{ __('Le Cabinet Dutrieux SRL, étude notariale établie en Belgique, accorde une importance particulière à la protection de vos données à caractère personnel et au respect de votre vie privée.') }}
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
                        <strong>{{ __('Cabinet Dutrieux SRL — Étude notariale de Maître Charles Yves Dutrieux') }}</strong>
                    </p>

                    <p>
                        {{ __('Rue du Mail 1050 IXELLES CEDEX 4, Belgique') }}
                    </p>

                    <p>
                        <strong>{{ __("Numéro d'entreprise (BCE) :") }}</strong>
                        {{ __('BE 0798.456.321') }}
                    </p>

                    <p>
                        <strong>{{ __('Téléphone :') }}</strong>
                        {{ __('+32 465 502 801') }}
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

                <p class="privacy-text">
                    {{ __("Le Cabinet Dutrieux détermine les finalités et les moyens des traitements de données à caractère personnel réalisés dans le cadre de son activité.") }}
                </p>

                <h3 class="privacy-subtitle">
                    {{ __('1.1. Délégué à la protection des données (DPO)') }}
                </h3>

                <div class="privacy-contact">

                    <p>
                        <strong>{{ __('Sophie Lambert') }}</strong>
                    </p>

                    <p>
                        <strong>{{ __('Contact :') }}</strong>
                        contact@cabinetdutrieux.be
                    </p>

                </div>

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
                    <li>{{ __('nom et prénom') }}</li>
                    <li>{{ __('adresse e-mail') }}</li>
                    <li>{{ __('numéro de téléphone') }}</li>
                    <li>{{ __('objet de votre demande') }}</li>
                    <li>{{ __('contenu du message') }}</li>
                    <li>{{ __('informations relatives à votre demande de rendez-vous') }}</li>
                    <li>{{ __('date et heure souhaitées pour un rendez-vous') }}</li>
                    <li>{{ __('toute autre information que vous choisissez volontairement de nous communiquer') }}</li>
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
                    <li>{{ __("données d'identification") }}</li>
                    <li>{{ __('coordonnées') }}</li>
                    <li>{{ __("données relatives à l'état civil") }}</li>
                    <li>{{ __('données relatives à la situation familiale') }}</li>
                    <li>{{ __('données relatives à la capacité juridique des personnes') }}</li>
                    <li>{{ __('données patrimoniales, immobilières, financières et fiscales') }}</li>
                    <li>{{ __('données professionnelles') }}</li>
                    <li>{{ __('données relatives aux sociétés et à leurs représentants') }}</li>
                    <li>{{ __('données relatives aux testaments, successions et donations') }}</li>
                    <li>{{ __('données contenues dans les actes et documents notariés') }}</li>
                    <li>{{ __("toute autre donnée nécessaire à l'accomplissement d'une mission notariale") }}</li>
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

                <ul class="privacy-list">
                    <li>{{ __('vous utilisez le formulaire de contact du site') }}</li>
                    <li>{{ __('vous demandez un rendez-vous') }}</li>
                    <li>{{ __("vous correspondez avec l'étude par e-mail, téléphone ou courrier") }}</li>
                    <li>{{ __('vous confiez un dossier au Cabinet Dutrieux') }}</li>
                    <li>{{ __('vous participez à une opération ou à un acte notarié') }}</li>
                    <li>{{ __("vous êtes partie ou intervenant dans un dossier traité par l'étude") }}</li>
                    <li>{{ __('vous nous fournissez volontairement des documents ou informations nécessaires au traitement de votre dossier') }}</li>
                    <li>{{ __("nous devons obtenir certaines informations auprès de sources authentiques, d'administrations ou de professionnels habilités, conformément à la législation applicable") }}</li>
                </ul>

            </section>


            {{-- 4. FINALITÉS --}}

            <section class="privacy-section">

                <h2 class="privacy-section-title">
                    {{ __('4. Pourquoi utilisons-nous vos données ?') }}
                </h2>

                <h3 class="privacy-subtitle">
                    {{ __('4.1. Répondre à vos demandes') }}
                </h3>

                <ul class="privacy-list">
                    <li>{{ __('répondre à votre demande') }}</li>
                    <li>{{ __('vous recontacter') }}</li>
                    <li>{{ __('vous fournir les informations demandées') }}</li>
                    <li>{{ __('identifier le service ou le collaborateur compétent') }}</li>
                </ul>

                <h3 class="privacy-subtitle">
                    {{ __('4.2. Gérer les rendez-vous') }}
                </h3>

                <ul class="privacy-list">
                    <li>{{ __('enregistrer votre demande') }}</li>
                    <li>{{ __('vérifier les disponibilités') }}</li>
                    <li>{{ __('organiser, confirmer ou modifier le rendez-vous') }}</li>
                    <li>{{ __('vous contacter en cas de changement ou de nécessité liée au rendez-vous') }}</li>
                </ul>

                <h3 class="privacy-subtitle">
                    {{ __('4.3. Gérer les dossiers notariaux') }}
                </h3>

                <ul class="privacy-list">
                    <li>{{ __('analyser votre situation et vous conseiller') }}</li>
                    <li>{{ __('préparer les documents nécessaires') }}</li>
                    <li>{{ __('rédiger et recevoir les actes notariés') }}</li>
                    <li>{{ __('accomplir les formalités légales et administratives') }}</li>
                    <li>{{ __('communiquer avec les parties, professionnels et autorités concernés') }}</li>
                    <li>{{ __('assurer le suivi administratif, juridique et financier du dossier') }}</li>
                    <li>{{ __('respecter les obligations légales et réglementaires applicables au notariat') }}</li>
                </ul>

                <h3 class="privacy-subtitle">
                    {{ __('4.4. Respecter nos obligations légales') }}
                </h3>

                <p class="privacy-text">
                    {{ __("Certaines données doivent être traitées afin de respecter les obligations légales et réglementaires auxquelles le notaire est soumis, notamment celles relatives à l'identification des parties, à la lutte contre le blanchiment de capitaux, aux obligations fiscales, aux formalités administratives et aux différentes obligations propres à l'activité notariale.") }}
                </p>

            </section>


            {{-- 5. BASES LÉGALES --}}

            <section class="privacy-section">

                <h2 class="privacy-section-title">
                    {{ __('5. Sur quelles bases légales traitons-nous vos données ?') }}
                </h2>

                <ul class="privacy-list">
                    <li>{{ __("l'exécution de mesures précontractuelles ou d'un contrat") }}</li>
                    <li>{{ __("le respect d'une obligation légale") }}</li>
                    <li>{{ __("l'exécution d'une mission d'intérêt public ou relevant de l'exercice de l'autorité publique") }}</li>
                    <li>{{ __("l'intérêt légitime, lorsque vos droits et libertés ne prévalent pas") }}</li>
                    <li>{{ __('votre consentement, lorsque celui-ci est juridiquement requis') }}</li>
                </ul>

            </section>


            {{-- 6. DONNÉES OBLIGATOIRES --}}

            <section class="privacy-section">

                <h2 class="privacy-section-title">
                    {{ __('6. Les données sont-elles obligatoires ?') }}
                </h2>

                <p class="privacy-text">
                    {{ __('Certaines informations sont indispensables pour permettre au Cabinet Dutrieux de répondre à votre demande ou d’accomplir une mission notariale. Leur absence peut empêcher l’étude de traiter votre demande, de vous proposer un rendez-vous, d’ouvrir ou de traiter un dossier, d’établir certains documents ou actes, ou d’accomplir les formalités nécessaires.') }}
                </p>

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
                    {{ __('Le Cabinet Dutrieux ne vend ni ne loue vos données personnelles. Selon la nature du dossier et uniquement lorsque cela est nécessaire ou légalement requis, certaines données peuvent être communiquées à :') }}
                </p>

                <ul class="privacy-list">
                    <li>{{ __('administrations publiques') }}</li>
                    <li>{{ __('autorités judiciaires ou administratives') }}</li>
                    <li>{{ __('services fiscaux') }}</li>
                    <li>{{ __('organismes ou institutions compétents dans le cadre des missions notariales') }}</li>
                    <li>{{ __("autres notaires lorsque cela est nécessaire à l'accomplissement d'une opération") }}</li>
                    <li>{{ __('banques et établissements financiers lorsque cela est nécessaire au dossier') }}</li>
                    <li>{{ __('avocats, experts, comptables ou autres professionnels intervenant dans le dossier') }}</li>
                    <li>{{ __("prestataires techniques agissant pour le compte de l'étude") }}</li>
                    <li>{{ __('autres parties concernées par une opération notariale, dans les limites de ce qui est nécessaire et autorisé') }}</li>
                </ul>

            </section>


            {{-- 8. SOUS-TRAITANTS --}}

            <section class="privacy-section">

                <h2 class="privacy-section-title">
                    {{ __('8. Recours à des prestataires et sous-traitants') }}
                </h2>

                <p class="privacy-text">
                    {{ __('Le Cabinet Dutrieux fait appel à des prestataires externes pour certaines fonctions techniques ou administratives, notamment :') }}
                </p>

                <ul class="privacy-list">
                    <li>{{ __('Hébergement du site internet : bifycloud') }}</li>
                    <li>{{ __('Gestion des rendez-vous en ligne : Microsoft Bookings') }}</li>
                    <li>{{ __('Affichage cartographique : Google Maps') }}</li>
                    <li>{{ __('Mesure d’audience : Google Analytics') }}</li>
                    <li>{{ __('Gestion du consentement aux cookies : CookieYes') }}</li>
                    <li>{{ __('Messagerie électronique et sécurisation des systèmes informatiques') }}</li>
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
                    {{ __("Lorsque l'utilisation d'un prestataire (par exemple Google ou Microsoft) implique un transfert de données vers un pays situé en dehors de l'EEE, le Cabinet Dutrieux veille à ce que ce transfert soit effectué conformément au RGPD et qu'un mécanisme juridique approprié (clauses contractuelles types notamment) garantisse un niveau de protection adéquat.") }}
                </p>

            </section>


            {{-- 10. CONSERVATION --}}

            <section class="privacy-section">

                <h2 class="privacy-section-title">
                    {{ __('10. Combien de temps conservons-nous vos données ?') }}
                </h2>

                <p class="privacy-text">
                    {{ __('La durée de conservation dépend de la nature des données et de la finalité du traitement :') }}
                </p>

                <div style="overflow-x: auto; margin: 25px 0;">

                    <table style="width: 100%; border-collapse: collapse; font-family: Arial, Helvetica, sans-serif; font-size: 0.88rem; color: #63565a;">

                        <thead>
                            <tr>
                                <th style="text-align: left; padding: 14px 12px; background-color: #f7f5f5; color: #30292b; border-bottom: 1px solid #e5d9db;">
                                    {{ __('Catégorie de données') }}
                                </th>

                                <th style="text-align: left; padding: 14px 12px; background-color: #f7f5f5; color: #30292b; border-bottom: 1px solid #e5d9db;">
                                    {{ __('Durée de conservation') }}
                                </th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>
                                <td style="padding: 12px; border-bottom: 1px solid #eee3e4;">
                                    {{ __('Formulaire de contact sans ouverture de dossier') }}
                                </td>
                                <td style="padding: 12px; border-bottom: 1px solid #eee3e4;">
                                    {{ __('12 mois après le dernier échange') }}
                                </td>
                            </tr>

                            <tr>
                                <td style="padding: 12px; border-bottom: 1px solid #eee3e4;">
                                    {{ __('Demandes de rendez-vous sans ouverture de dossier') }}
                                </td>
                                <td style="padding: 12px; border-bottom: 1px solid #eee3e4;">
                                    {{ __('12 mois') }}
                                </td>
                            </tr>

                            <tr>
                                <td style="padding: 12px; border-bottom: 1px solid #eee3e4;">
                                    {{ __('Données relatives aux prospects') }}
                                </td>
                                <td style="padding: 12px; border-bottom: 1px solid #eee3e4;">
                                    {{ __('3 ans à compter du dernier contact') }}
                                </td>
                            </tr>

                            <tr>
                                <td style="padding: 12px; border-bottom: 1px solid #eee3e4;">
                                    {{ __('Données relatives aux clients et aux dossiers notariaux') }}
                                </td>
                                <td style="padding: 12px; border-bottom: 1px solid #eee3e4;">
                                    {{ __('Durée nécessaire au traitement du dossier, puis selon les obligations légales et archivistiques applicables au notariat') }}
                                </td>
                            </tr>

                            <tr>
                                <td style="padding: 12px; border-bottom: 1px solid #eee3e4;">
                                    {{ __('Actes et documents notariaux') }}
                                </td>
                                <td style="padding: 12px; border-bottom: 1px solid #eee3e4;">
                                    {{ __('Selon les obligations légales et archivistiques applicables aux actes et dossiers notariaux') }}
                                </td>
                            </tr>

                            <tr>
                                <td style="padding: 12px; border-bottom: 1px solid #eee3e4;">
                                    {{ __('Factures et pièces comptables') }}
                                </td>
                                <td style="padding: 12px; border-bottom: 1px solid #eee3e4;">
                                    {{ __('10 ans') }}
                                </td>
                            </tr>

                            <tr>
                                <td style="padding: 12px; border-bottom: 1px solid #eee3e4;">
                                    {{ __('Documents nécessaires aux obligations fiscales') }}
                                </td>
                                <td style="padding: 12px; border-bottom: 1px solid #eee3e4;">
                                    {{ __('Selon les délais légaux applicables') }}
                                </td>
                            </tr>

                            <tr>
                                <td style="padding: 12px; border-bottom: 1px solid #eee3e4;">
                                    {{ __('Correspondances électroniques relatives à un dossier') }}
                                </td>
                                <td style="padding: 12px; border-bottom: 1px solid #eee3e4;">
                                    {{ __("Durée du dossier, puis selon les obligations d'archivage applicables") }}
                                </td>
                            </tr>

                            <tr>
                                <td style="padding: 12px; border-bottom: 1px solid #eee3e4;">
                                    {{ __('Candidatures') }}
                                </td>
                                <td style="padding: 12px; border-bottom: 1px solid #eee3e4;">
                                    {{ __('6 mois après la fin du processus de recrutement, sauf accord pour une conservation plus longue') }}
                                </td>
                            </tr>

                            <tr>
                                <td style="padding: 12px; border-bottom: 1px solid #eee3e4;">
                                    {{ __('Journaux techniques et logs de sécurité') }}
                                </td>
                                <td style="padding: 12px; border-bottom: 1px solid #eee3e4;">
                                    {{ __('12 mois') }}
                                </td>
                            </tr>

                            <tr>
                                <td style="padding: 12px; border-bottom: 1px solid #eee3e4;">
                                    {{ __('Données statistiques Google Analytics') }}
                                </td>
                                <td style="padding: 12px; border-bottom: 1px solid #eee3e4;">
                                    {{ __('14 mois') }}
                                </td>
                            </tr>

                            <tr>
                                <td style="padding: 12px; border-bottom: 1px solid #eee3e4;">
                                    {{ __('Preuves et préférences de consentement cookies') }}
                                </td>
                                <td style="padding: 12px; border-bottom: 1px solid #eee3e4;">
                                    {{ __('13 mois') }}
                                </td>
                            </tr>

                            <tr>
                                <td style="padding: 12px;">
                                    {{ __('Demandes d’exercice des droits RGPD') }}
                                </td>
                                <td style="padding: 12px;">
                                    {{ __('5 ans après clôture de la demande') }}
                                </td>
                            </tr>

                        </tbody>

                    </table>

                </div>

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
                    {{ __("Le Cabinet Dutrieux met en œuvre des mesures techniques et organisationnelles destinées à protéger les données personnelles contre l'accès non autorisé, la perte, la destruction, l'altération, la divulgation non autorisée ou toute autre forme de traitement illicite, notamment :") }}
                </p>

                <ul class="privacy-list">
                    <li>{{ __("limitation des accès aux données et gestion des droits d'accès") }}</li>
                    <li>{{ __('authentification des utilisateurs') }}</li>
                    <li>{{ __('sécurisation des systèmes informatiques et des communications électroniques') }}</li>
                    <li>{{ __('sauvegarde régulière des données') }}</li>
                    <li>{{ __('sensibilisation des collaborateurs à la confidentialité') }}</li>
                </ul>

                <h3 class="privacy-subtitle">
                    {{ __('11.1. En cas de violation de données') }}
                </h3>

                <p class="privacy-text">
                    {{ __("En cas de violation de données à caractère personnel susceptible d'engendrer un risque pour les droits et libertés des personnes concernées, le Cabinet Dutrieux notifiera cette violation à l'Autorité de protection des données dans les délais prévus par le RGPD et, lorsque le risque est élevé, en informera les personnes concernées.") }}
                </p>

            </section>


            {{-- 12. SECRET PROFESSIONNEL --}}

            <section class="privacy-section">

                <h2 class="privacy-section-title">
                    {{ __('12. Secret professionnel et confidentialité') }}
                </h2>

                <p class="privacy-text">
                    {{ __("La confidentialité constitue un principe essentiel de l'activité notariale. Les informations auxquelles le notaire a accès dans le cadre de ses fonctions peuvent être soumises au secret professionnel ou au devoir de discrétion conformément aux règles applicables à la profession notariale.") }}
                </p>

                <p class="privacy-text">
                    {{ __("Le notaire est notamment tenu à un devoir de discrétion qui limite la communication d'informations à des tiers, sauf lorsque cette communication est nécessaire ou utile à l'opération dont il est chargé ou lorsqu'une disposition légale l'autorise ou l'impose.") }}
                </p>

            </section>


            {{-- 13. DROITS --}}

            <section class="privacy-section">

                <h2 class="privacy-section-title">
                    {{ __('13. Vos droits') }}
                </h2>

                <h3 class="privacy-subtitle">
                    {{ __("Droit d'accès") }}
                </h3>

                <p class="privacy-text">
                    {{ __('Vous pouvez demander à savoir si vos données personnelles sont traitées et, dans certaines conditions, obtenir une copie des données vous concernant.') }}
                </p>

                <h3 class="privacy-subtitle">
                    {{ __('Droit de rectification') }}
                </h3>

                <p class="privacy-text">
                    {{ __("Vous pouvez demander la correction de données inexactes ou leur complément lorsqu'elles sont incomplètes.") }}
                </p>

                <h3 class="privacy-subtitle">
                    {{ __("Droit à l'effacement") }}
                </h3>

                <p class="privacy-text">
                    {{ __("Vous pouvez, dans certaines situations prévues par le RGPD, demander l'effacement de vos données. Ce droit n'est toutefois pas absolu : certaines données doivent être conservées lorsque leur conservation est imposée par une obligation légale ou nécessaire à l'exercice des missions notariales.") }}
                </p>

                <h3 class="privacy-subtitle">
                    {{ __('Droit à la limitation du traitement') }}
                </h3>

                <p class="privacy-text">
                    {{ __('Dans certaines situations, vous pouvez demander que le traitement de vos données soit limité.') }}
                </p>

                <h3 class="privacy-subtitle">
                    {{ __("Droit d'opposition") }}
                </h3>

                <p class="privacy-text">
                    {{ __('Lorsque le traitement repose sur certains fondements juridiques, vous pouvez vous opposer au traitement de vos données pour des raisons tenant à votre situation particulière.') }}
                </p>

                <h3 class="privacy-subtitle">
                    {{ __('Droit à la portabilité') }}
                </h3>

                <p class="privacy-text">
                    {{ __('Lorsque les conditions prévues par le RGPD sont réunies, vous pouvez recevoir certaines données dans un format structuré et lisible par machine, ou demander leur transmission à un autre responsable du traitement.') }}
                </p>

                <h3 class="privacy-subtitle">
                    {{ __('Droit de retirer votre consentement') }}
                </h3>

                <p class="privacy-text">
                    {{ __('Lorsque le traitement repose sur votre consentement, vous pouvez le retirer à tout moment, sans que cela n’affecte la licéité des traitements effectués avant ce retrait.') }}
                </p>

            </section>


            {{-- 14. EXERCER SES DROITS --}}

            <section class="privacy-section">

                <h2 class="privacy-section-title">
                    {{ __('14. Comment exercer vos droits ?') }}
                </h2>

                <p class="privacy-text">
                    {{ __('Pour exercer vos droits ou obtenir des informations complémentaires, vous pouvez contacter le Cabinet Dutrieux :') }}
                </p>

                <div class="privacy-contact">

                    <p>
                        <strong>{{ __('Cabinet Dutrieux SRL — Étude notariale de Maître Charles Yves Dutrieux') }}</strong>
                    </p>

                    <p>
                        {{ __('Rue du Mail 1050 IXELLES CEDEX 4, Belgique') }}
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
                    {{ __("Le Cabinet Dutrieux traitera votre demande dans un délai d'un mois à compter de sa réception, conformément aux délais et conditions prévus par le RGPD, ce délai pouvant être prolongé de deux mois supplémentaires en cas de demande complexe.") }}
                </p>

            </section>


            {{-- 15. RÉCLAMATION --}}

            <section class="privacy-section">

                <h2 class="privacy-section-title">
                    {{ __("15. Droit d'introduire une réclamation") }}
                </h2>

                <p class="privacy-text">
                    {{ __("Si vous estimez que le traitement de vos données personnelles ne respecte pas les règles applicables, vous pouvez contacter le Cabinet Dutrieux afin de rechercher une solution. Vous disposez également du droit d'introduire une réclamation auprès de l'autorité de contrôle compétente en Belgique :") }}
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

            </section>


            {{-- 16. COOKIES --}}

            <section class="privacy-section">

                <h2 class="privacy-section-title">
                    {{ __('16. Cookies') }}
                </h2>

                <p class="privacy-text">
                    {{ __('Le site internet du Cabinet Dutrieux utilise des cookies ou technologies similaires afin d’assurer son fonctionnement technique, de mémoriser certaines préférences, d’améliorer la sécurité et d’établir des statistiques de fréquentation. Lorsque certains cookies nécessitent votre consentement, celui-ci est recueilli via notre bandeau de gestion des cookies (CookieYes) conformément à la réglementation applicable.') }}
                </p>

                <div style="overflow-x: auto; margin: 25px 0;">

                    <table style="width: 100%; border-collapse: collapse; font-family: Arial, Helvetica, sans-serif; font-size: 0.88rem; color: #63565a;">

                        <thead>
                            <tr>
                                <th style="text-align: left; padding: 14px 12px; background-color: #f7f5f5; color: #30292b; border-bottom: 1px solid #e5d9db;">
                                    {{ __('Cookie') }}
                                </th>

                                <th style="text-align: left; padding: 14px 12px; background-color: #f7f5f5; color: #30292b; border-bottom: 1px solid #e5d9db;">
                                    {{ __('Finalité') }}
                                </th>

                                <th style="text-align: left; padding: 14px 12px; background-color: #f7f5f5; color: #30292b; border-bottom: 1px solid #e5d9db;">
                                    {{ __('Durée de conservation') }}
                                </th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>
                                <td style="padding: 12px; border-bottom: 1px solid #eee3e4;">
                                    cookieyes-consent
                                </td>
                                <td style="padding: 12px; border-bottom: 1px solid #eee3e4;">
                                    {{ __("Enregistrement des préférences de consentement de l'utilisateur") }}
                                </td>
                                <td style="padding: 12px; border-bottom: 1px solid #eee3e4;">
                                    {{ __('1 an') }}
                                </td>
                            </tr>

                            <tr>
                                <td style="padding: 12px; border-bottom: 1px solid #eee3e4;">
                                    _ga
                                </td>
                                <td style="padding: 12px; border-bottom: 1px solid #eee3e4;">
                                    {{ __('Analyse statistique et distinction des utilisateurs') }}
                                </td>
                                <td style="padding: 12px; border-bottom: 1px solid #eee3e4;">
                                    {{ __('2 ans') }}
                                </td>
                            </tr>

                            <tr>
                                <td style="padding: 12px; border-bottom: 1px solid #eee3e4;">
                                    _ga_*
                                </td>
                                <td style="padding: 12px; border-bottom: 1px solid #eee3e4;">
                                    {{ __('Maintien de l’état de session Google Analytics') }}
                                </td>
                                <td style="padding: 12px; border-bottom: 1px solid #eee3e4;">
                                    {{ __('2 ans') }}
                                </td>
                            </tr>

                            <tr>
                                <td style="padding: 12px; border-bottom: 1px solid #eee3e4;">
                                    _gid
                                </td>
                                <td style="padding: 12px; border-bottom: 1px solid #eee3e4;">
                                    {{ __('Distinction des utilisateurs à des fins statistiques') }}
                                </td>
                                <td style="padding: 12px; border-bottom: 1px solid #eee3e4;">
                                    {{ __('24 heures') }}
                                </td>
                            </tr>

                            <tr>
                                <td style="padding: 12px; border-bottom: 1px solid #eee3e4;">
                                    _gat
                                </td>
                                <td style="padding: 12px; border-bottom: 1px solid #eee3e4;">
                                    {{ __('Limitation du nombre de requêtes adressées à Google Analytics') }}
                                </td>
                                <td style="padding: 12px; border-bottom: 1px solid #eee3e4;">
                                    {{ __('1 minute') }}
                                </td>
                            </tr>

                            <tr>
                                <td style="padding: 12px; border-bottom: 1px solid #eee3e4;">
                                    {{ __('Cookies Microsoft Bookings') }}
                                </td>
                                <td style="padding: 12px; border-bottom: 1px solid #eee3e4;">
                                    {{ __('Fonctionnement et gestion des rendez-vous') }}
                                </td>
                                <td style="padding: 12px; border-bottom: 1px solid #eee3e4;">
                                    {{ __('Durée de session ou selon configuration du service') }}
                                </td>
                            </tr>

                            <tr>
                                <td style="padding: 12px;">
                                    {{ __('Cookies Google Maps') }}
                                </td>
                                <td style="padding: 12px;">
                                    {{ __('Fonctionnement et affichage de la carte') }}
                                </td>
                                <td style="padding: 12px;">
                                    {{ __('Selon la configuration Google et le consentement de l’utilisateur') }}
                                </td>
                            </tr>

                        </tbody>

                    </table>

                </div>

                <p class="privacy-text">
                    {{ __('Vous pouvez à tout moment modifier vos préférences de cookies via le bandeau de consentement accessible sur le site.') }}
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

                <h3 class="privacy-subtitle">
                    {{ __('Formulaire de contact') }}
                </h3>

                <ul class="privacy-list">
                    <li>{{ __('votre identité') }}</li>
                    <li>{{ __('vos coordonnées') }}</li>
                    <li>{{ __('votre message et les informations nécessaires pour vous répondre') }}</li>
                </ul>

                <h3 class="privacy-subtitle">
                    {{ __('Formulaire de rendez-vous') }}
                </h3>

                <ul class="privacy-list">
                    <li>{{ __('votre identité et vos coordonnées') }}</li>
                    <li>{{ __('votre demande') }}</li>
                    <li>{{ __('vos disponibilités ou préférences de rendez-vous') }}</li>
                    <li>{{ __("les informations strictement nécessaires à l'organisation de celui-ci") }}</li>
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
                    {{ __('Le site du Cabinet Dutrieux peut contenir des liens vers des sites internet ou services appartenant à des tiers. Le Cabinet Dutrieux n’est pas responsable des pratiques de confidentialité, du contenu ou de la sécurité de ces sites tiers.') }}
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
                    {{ __("La présente politique de confidentialité peut être mise à jour afin de tenir compte de l'évolution de la législation, des recommandations des autorités compétentes, de l'évolution des activités du Cabinet Dutrieux, du site internet et de ses fonctionnalités, ou des technologies utilisées.") }}
                </p>

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
                        <strong>{{ __('Cabinet Dutrieux SRL — Étude notariale de Maître Charles Yves Dutrieux') }}</strong>
                    </p>

                    <p>
                        {{ __('Rue du Mail 1050 IXELLES CEDEX 4, Belgique') }}
                    </p>

                    <p>
                        <strong>{{ __("Numéro d'entreprise :") }}</strong>
                        BE 0798.456.321
                    </p>

                    <p>
                        <strong>{{ __('Téléphone :') }}</strong>
                        +32 465 502 801
                    </p>

                    <p>
                        <strong>{{ __('E-mail :') }}</strong>
                        contact@cabinetdutrieux.be
                    </p>

                </div>

            </section>

        </article>

    </div>

</section>

@endsection