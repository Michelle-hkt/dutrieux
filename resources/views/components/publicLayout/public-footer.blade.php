<footer class="public-footer">

    <div class="container">

        {{-- =====================================================
             MAIN FOOTER
        ====================================================== --}}
        <div class="row gy-5">

            {{-- =================================================
                 BRAND
            ================================================== --}}
            <div class="col-lg-5">

                <a
                    href="{{ url('/') }}"
                    class="public-footer__brand"
                >
                    <span class="public-footer__brand-name">
                        DUTRIEUX
                    </span>

                    <span class="public-footer__brand-tagline">
                        CABINET
                    </span>
                </a>

                <p class="public-footer__description">
                    {{ __('Une expertise notariale au service de vos projets, de vos transactions et de vos engagements.') }}
                </p>

            </div>


            {{-- =================================================
                 NAVIGATION
            ================================================== --}}
            <div class="col-6 col-lg-3">

                <h3 class="public-footer__title">
                    {{ __('Navigation') }}
                </h3>

                <ul class="public-footer__links list-unstyled mb-0">

                    <li>
                        <a href="{{ url('/') }}">
                            {{ __('Accueil') }}
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('services') }}">
                            {{ __('Nos services') }}
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('/blog') }}">
                            {{ __('Article & blog') }}
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('appointment') }}">
                            {{ __('Rendez-vous') }}
                        </a>
                    </li>

                </ul>

            </div>


            {{-- =================================================
                 CONTACT
            ================================================== --}}
            <div class="col-6 col-lg-4">

                <h3 class="public-footer__title">
                    {{ __('Contact') }}
                </h3>

                <div class="public-footer__contact">

                    <p>
                        <i class="bi bi-geo-alt"></i>
                        <span>
                            Rue du Mail 1050 IXELLES CEDEX 4
                        </span>
                    </p>

                    <p>
                        <i class="bi bi-telephone"></i>
                        <a href="tel:+32465502801">
                            +32 465 50 28 01
                        </a>
                    </p>

                    <p class="public-footer__emails">
                        <i class="bi bi-envelope"></i>

                        <span>
                            <a href="mailto:contact@cabinetdutrieux.be">
                                contact@cabinetdutrieux.be
                            </a>

                            <a href="mailto:maitre.dutrieux@gmail.com">
                                maitre.dutrieux@gmail.com
                            </a>
                        </span>
                    </p>

                </div>

            </div>

        </div>


        {{-- =====================================================
             FOOTER BOTTOM
        ====================================================== --}}
        <div class="public-footer__bottom">

            <p class="mb-0">
                © {{ date('Y') }} Cabinet Dutrieux.
                {{ __('Tous droits réservés.') }}
            </p>

            <div class="public-footer__legal">

                <a href="{{ url('/legal-notice') }}">
                    {{ __('Mentions légales') }}
                </a>

                <a href="{{ url('/privacy-policy') }}">
                    {{ __('Politique de confidentialité') }}
                </a>

            </div>

        </div>

    </div>

</footer>