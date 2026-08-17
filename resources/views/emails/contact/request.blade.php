<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Nouvelle demande de contact</title>

    <style>
        html,
        body {
            margin: 0 !important;
            padding: 0 !important;
            width: 100% !important;
        }

        body {
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
        }

        @media screen and (max-width: 576px) {

            .mail-page {
                padding: 35px 15px !important;
            }

            .mail-brand {
                font-size: 1.9rem !important;
            }

            .mail-title {
                font-size: 1.45rem !important;
            }

            .mail-section-heading-text {
                font-size: 0.72rem !important;
            }

            .mail-info-value {
                font-size: 0.85rem !important;
            }
        }
    </style>
</head>

<body
    style="
        margin:0;
        padding:0;
        width:100%;
        background-color:#ffffff;
        font-family:Arial, Helvetica, sans-serif;
    "
>

<table
    role="presentation"
    width="100%"
    cellpadding="0"
    cellspacing="0"
    border="0"
    style="
        width:100%;
        background-color:#ffffff;
    "
>
    <tr>
        <td
            align="center"
            class="mail-page"
            style="
                padding:50px 20px;
            "
        >

            <table
                role="presentation"
                width="650"
                cellpadding="0"
                cellspacing="0"
                border="0"
                style="
                    width:100%;
                    max-width:650px;
                    margin:0 auto;
                "
            >

                <!-- =====================================================
                     EN-TÊTE
                ====================================================== -->

                <tr>
                    <td
                        align="center"
                        style="
                            padding:0 0 38px 0;
                            text-align:center;
                        "
                    >

                        <div
                            class="mail-brand"
                            style="
                                margin:0;
                                color:#681f2d;
                                font-family:Georgia, 'Times New Roman', serif;
                                font-size:36px;
                                font-weight:700;
                                line-height:1;
                                letter-spacing:0.02em;
                            "
                        >
                            DUTRIEUX
                        </div>

                        <div
                            style="
                                margin-top:9px;
                                color:#80656a;
                                font-family:Arial, Helvetica, sans-serif;
                                font-size:11px;
                                font-weight:600;
                                letter-spacing:0.28em;
                                line-height:1.4;
                            "
                        >
                            CABINET NOTARIAL
                        </div>

                    </td>
                </tr>


                <!-- =====================================================
                     TITRE
                ====================================================== -->

                <tr>
                    <td
                        align="center"
                        style="
                            padding:0 0 42px 0;
                            text-align:center;
                        "
                    >

                        <h1
                            class="mail-title"
                            style="
                                margin:0;
                                padding:0;
                                color:#681f2d;
                                font-family:Georgia, 'Times New Roman', serif;
                                font-size:27px;
                                font-weight:700;
                                line-height:1.3;
                            "
                        >
                            Nouvelle demande de contact
                        </h1>

                        <div
                            style="
                                width:55px;
                                height:1px;
                                margin:22px auto 0;
                                background-color:#9a7379;
                                font-size:0;
                                line-height:0;
                            "
                        ></div>

                    </td>
                </tr>


                <!-- =====================================================
                     INTRODUCTION
                ====================================================== -->

                <tr>
                    <td
                        align="center"
                        style="
                            padding-bottom:38px;
                            color:#63565a;
                            font-family:Arial, Helvetica, sans-serif;
                            font-size:14px;
                            line-height:1.7;
                            text-align:center;
                        "
                    >

                        <p style="margin:0;">

                            Une nouvelle requête de la part

                            <strong style="color:#681f2d;">
                                {{ $data['firstname'] ?? '' }}
                                {{ $data['lastname'] ?? '' }}
                            </strong>.

                        </p>

                    </td>
                </tr>


                <!-- =====================================================
                     INFORMATIONS DU DEMANDEUR
                ====================================================== -->

                <tr>
                    <td style="padding:0;">

                        <!-- Titre de section -->

                        <table
                            role="presentation"
                            width="100%"
                            cellpadding="0"
                            cellspacing="0"
                            border="0"
                        >
                            <tr>

                                <td
                                    class="mail-section-heading-text"
                                    style="
                                        width:1%;
                                        white-space:nowrap;
                                        padding-right:9px;
                                        color:#30292b;
                                        font-family:Arial, Helvetica, sans-serif;
                                        font-size:13px;
                                        font-weight:700;
                                        letter-spacing:0.08em;
                                        line-height:1.4;
                                    "
                                >
                                    INFORMATIONS DU DEMANDEUR
                                </td>

                                <td
                                    style="
                                        width:100%;
                                        height:1px;
                                        background-color:#e5d9db;
                                        font-size:0;
                                        line-height:0;
                                    "
                                ></td>

                            </tr>
                        </table>


                        <!-- Nom complet -->

                        <table
                            role="presentation"
                            width="100%"
                            cellpadding="0"
                            cellspacing="0"
                            border="0"
                            style="margin-top:23px;"
                        >
                            <tr>

                                <td style="padding:0;">

                                    <div
                                        style="
                                            color:#8a7c7f;
                                            font-family:Arial, Helvetica, sans-serif;
                                            font-size:10px;
                                            font-weight:600;
                                            letter-spacing:0.1em;
                                            line-height:1.4;
                                        "
                                    >
                                        NOM COMPLET
                                    </div>

                                    <div
                                        class="mail-info-value"
                                        style="
                                            margin-top:2px;
                                            color:#383133;
                                            font-family:Arial, Helvetica, sans-serif;
                                            font-size:14px;
                                            line-height:1.5;
                                        "
                                    >
                                        {{ $data['firstname'] ?? '' }}
                                        {{ $data['lastname'] ?? '' }}
                                    </div>

                                </td>

                            </tr>
                        </table>


                        <!-- Adresse e-mail -->

                        <table
                            role="presentation"
                            width="100%"
                            cellpadding="0"
                            cellspacing="0"
                            border="0"
                            style="margin-top:23px;"
                        >
                            <tr>

                                <td style="padding:0;">

                                    <div
                                        style="
                                            color:#8a7c7f;
                                            font-family:Arial, Helvetica, sans-serif;
                                            font-size:10px;
                                            font-weight:600;
                                            letter-spacing:0.1em;
                                            line-height:1.4;
                                        "
                                    >
                                        ADRESSE E-MAIL
                                    </div>

                                    <div
                                        class="mail-info-value"
                                        style="
                                            margin-top:2px;
                                            color:#383133;
                                            font-family:Arial, Helvetica, sans-serif;
                                            font-size:14px;
                                            line-height:1.5;
                                            word-break:break-word;
                                        "
                                    >
                                        {{ $data['email'] ?? '' }}
                                    </div>

                                </td>

                            </tr>
                        </table>


                        <!-- Téléphone -->

                        @if (!empty($data['phone']))

                            <table
                                role="presentation"
                                width="100%"
                                cellpadding="0"
                                cellspacing="0"
                                border="0"
                                style="margin-top:23px;"
                            >
                                <tr>

                                    <td style="padding:0;">

                                        <div
                                            style="
                                                color:#8a7c7f;
                                                font-family:Arial, Helvetica, sans-serif;
                                                font-size:10px;
                                                font-weight:600;
                                                letter-spacing:0.1em;
                                                line-height:1.4;
                                            "
                                        >
                                            TÉLÉPHONE
                                        </div>

                                        <div
                                            class="mail-info-value"
                                            style="
                                                margin-top:2px;
                                                color:#383133;
                                                font-family:Arial, Helvetica, sans-serif;
                                                font-size:14px;
                                                line-height:1.5;
                                            "
                                        >
                                            {{ $data['phone'] }}
                                        </div>

                                    </td>

                                </tr>
                            </table>

                        @endif

                    </td>
                </tr>


                <!-- =====================================================
                     INFORMATIONS DE LA DEMANDE
                ====================================================== -->

                <tr>
                    <td
                        style="
                            padding-top:48px;
                        "
                    >

                        <!-- Titre de section -->

                        <table
                            role="presentation"
                            width="100%"
                            cellpadding="0"
                            cellspacing="0"
                            border="0"
                        >
                            <tr>

                                <td
                                    class="mail-section-heading-text"
                                    style="
                                        width:1%;
                                        white-space:nowrap;
                                        padding-right:9px;
                                        color:#30292b;
                                        font-family:Arial, Helvetica, sans-serif;
                                        font-size:13px;
                                        font-weight:700;
                                        letter-spacing:0.08em;
                                        line-height:1.4;
                                    "
                                >
                                    INFORMATIONS DE LA DEMANDE
                                </td>

                                <td
                                    style="
                                        width:100%;
                                        height:1px;
                                        background-color:#e5d9db;
                                        font-size:0;
                                        line-height:0;
                                    "
                                ></td>

                            </tr>
                        </table>


                        <!-- Objet -->

                        <table
                            role="presentation"
                            width="100%"
                            cellpadding="0"
                            cellspacing="0"
                            border="0"
                            style="margin-top:23px;"
                        >
                            <tr>

                                <td style="padding:0;">

                                    <div
                                        style="
                                            color:#8a7c7f;
                                            font-family:Arial, Helvetica, sans-serif;
                                            font-size:10px;
                                            font-weight:600;
                                            letter-spacing:0.1em;
                                            line-height:1.4;
                                        "
                                    >
                                        OBJET
                                    </div>

                                    <div
                                        class="mail-info-value"
                                        style="
                                            margin-top:2px;
                                            color:#383133;
                                            font-family:Arial, Helvetica, sans-serif;
                                            font-size:14px;
                                            line-height:1.5;
                                        "
                                    >
                                        {{ $data['object'] ?? '' }}
                                    </div>

                                </td>

                            </tr>
                        </table>


                        <!-- Message -->

                        <table
                            role="presentation"
                            width="100%"
                            cellpadding="0"
                            cellspacing="0"
                            border="0"
                            style="margin-top:23px;"
                        >
                            <tr>

                                <td style="padding:0;">

                                    <div
                                        style="
                                            color:#8a7c7f;
                                            font-family:Arial, Helvetica, sans-serif;
                                            font-size:10px;
                                            font-weight:600;
                                            letter-spacing:0.1em;
                                            line-height:1.4;
                                        "
                                    >
                                        MESSAGE DU DEMANDEUR
                                    </div>

                                </td>

                            </tr>
                        </table>


                        <!-- Message box -->

                        <div
                            style="
                                margin-top:5px;
                                padding:17px 20px;
                                background-color:#f7f5f5;
                                border-radius:7px;
                                color:#575052;
                                font-family:Arial, Helvetica, sans-serif;
                                font-size:13px;
                                font-style:italic;
                                line-height:1.65;
                                word-break:break-word;
                            "
                        >
                            "{{ $data['message'] ?? '' }}"
                        </div>

                    </td>
                </tr>


                <!-- =====================================================
                     ESPACE FINAL
                ====================================================== -->

                <tr>
                    <td
                        style="
                            height:35px;
                            font-size:0;
                            line-height:0;
                        "
                    >
                        &nbsp;
                    </td>
                </tr>

            </table>

        </td>
    </tr>
</table>

</body>
</html>