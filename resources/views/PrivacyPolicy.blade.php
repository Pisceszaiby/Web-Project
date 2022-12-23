
    @extends('layouts.main2')
    @push('title')
    <title>Landing Page</title>
    @endpush
    @push('css')
    <link rel="stylesheet" href="css/PrivacyPolicy.css">
    <link rel="stylesheet" href="css/navbar.css">
    @endpush

    @section('main-section')
    <div class="container-fluid">
    <x-NavBar></x-NavBar>
    <h1 style="font-size: 50px;">ZASH BEAUTY</h1>
    <section>
        <div>
            <h1 >
                1. Scope of this Policy
            </h1>
            <p class="psize">
                Thank you for visiting ZASH-Beauty. We are committed to respecting privacy rights and concerns and have established and implemented this Privacy Policy to inform users of our website and our customers, of what personal information we collect, and how we use, share, and protect such information. If you have any questions regarding this information or our privacy practices, please see the section entitled Contact Us at the end of this Privacy Policy.
            </p>
        </div>
        <div>
            <h1>
                2. Agreement to Terms
            </h1>
            <p class="psize">
                If you do not agree with the terms of this Privacy Policy or our Terms of Use, then you should immediately discontinue use of the ZASH-Beauty website (the “Site”) and/or our services without providing us any personally identifiable information
            </p>
        </div>
        <div>
            <h1>
                3.  Effective Date and Changes to this Policy
            </h1>
            <p class="psize">
                This Privacy Policy is effective as of the date above and will remain in effect until a new policy supersedes it. We may choose to update this Privacy Policy at our discretion, so you should check this page periodically as the terms may change from time-to-time. The most recent version of the Policy will be reflected by the “Effective” date noted at the top of the page. In the event of a material change to this Privacy Policy, we will provide a conspicuous message either through the Site or via an email address associated with your account informing you of the change. Your affirmative consent or continued use of the Site and/or our services will constitute your acknowledgment of this Policy in its current version and your understanding of the terms of this Policy.

                Minor changes to our Privacy Policy
            </p>
        </div>

        <div>
            <h1>
                4.  Cookies
            </h1>
            <p class="psize">
                A cookie is a small string of information that a website that you visit transfers to your browser for identification purposes. Cookies can be used to follow your activity while using a website or across websites, and that information helps companies understand your preferences and tendencies, as well as improve and personalize your website experience. Some cookies are necessary to operate a website, while others can be functional, analytical, or used for targeted advertising (as discussed in more detail below). Cookies are data files which are sent from a website to a browser to record information about users for various purposes.

                We use cookies and similar technologies on our website, including essential, functional, analytical and advertising cookies and web beacons.
            </p>
        </div>

        <div>
            <h1>
                5.Your Privacy Choices
            </h1>
            <p class="psize">
                At checkout and upon first arriving to the site you will have the option to receive marketing communications from us, by ticking a box indicating that you would like to receive such communications during checkout or at any time while browsing the site by entering your email address into our newsletter sign-up form.  You may sign-up for our e-newsletter on our website or opt-in to receive news, offers, or updates on out-of-stock items.

You have control regarding our use of your personal information for direct marketing.  If you no longer wish to receive any marketing communications, remain on a mailing list to which you previously subscribed, or receive any other marketing communication, you can choose to not receive such communications at any time.  Please follow the unsubscribe link in the relevant communication (e.g., ticking a box to opt-out, clicking “unsubscribe” in email from us, or replying STOP to a text message) or contact us as detailed below.
            </p>
        </div>


    </section>
</div>
<x-Foot />
    @endsection
