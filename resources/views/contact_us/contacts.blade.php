@extends('layouts.app_contacts')
    @section('content')

            <section class="main-content">
                <h1>Contact us</h1>

                <h2>contact information</h2>
                <ul class="contact-info">
                    <li>
                        <h3><i class="fa fa-map-marker"></i> location</h3>
                        Star Tower, R2, Abia, Ningo-Prampram, Greater Accra, Ghana.
                    </li>
                    <li>
                        <h3><i class="fa fa-clock-o"></i> work hours</h3>
                        Monday to Friday - 8am to 5pm<br>
                        Saturday - 8am to 2pm
                    </li>
                    <li>
                        <h3><i class="fa fa-phone"></i> telephone</h3>
                        +233 24 406 2242<br>
                        +233 20 704 9559
                    </li>
                    <li>
                        <h3><i class="fa fa-envelope-o"></i> email</h3>
                        <a href="mailto:info@maqurarealty.com">info@maqurarealty.com</a><br>
                        <a href="mailto:maqurarealty@gmail.com">maqurarealty@gmail.com</a>
                    </li>
                </ul>


                <form action="{{ url('/contact-us') }}" method="POST" class="feedback-form">
                    {{ csrf_field() }}
                    <h2>feedback form</h2>
                    <input type="text" name="fName" placeholder="Name" style="margin-left: 0;">
                    <input type="tel" name="fTele" placeholder="Tele">
                    <input type="email" name="fEmail" placeholder="Email">
                    <textarea placeholder="Message" name="fMsg"></textarea>

                    <button type="submit">
                        submit message
                    </button>
                </form>
            </section>

    @endsection