@extends('layouts.app')
    @section('content')

            <section class="main-content" style="min-height: 400px;">
                <h1>About us</h1>
                <p>
                    Maqura Realty is a real estate agency and property management company with a commitment to delivering high-quality, efficient and personal service covering sale, acquisition, letting and management of properties.
                </p>
                <p>
                    If you own a property, chances are that it’s the most valuable asset you have, and if you’re looking to sell, let or manage it, you’ll want to get the best possible tenant, price or solutions for the least amount of stress. Maqura Realty executes value added strategies and excellent innovative solutions to help get you there.
                </p>

                <ul class="vision-mission">
                    <li>
                        <h2>Vision</h2>
                        To be a premier real estate agency and property manager of residential and commercial real property.
                    </li>

                    <li>
                        <h2>Mission</h2>
                        Our passion for service excellence drives us to deliver experiences that exceed expectations.
                    </li>
                </ul>

                
            </section>

            <article class="core-values">
                    <h1>Our Core Values</h1>
                        <ul>
                            <li>
                                <img src="{{ url('images/ServiceExcellence-Icon.png') }}">
                                <h2>SERVICE EXCELLENCE</h2>
    We believe the key to exceeding expectations is delivering superior service, going above and beyond for our clients, residents, investors, colleagues and communities.
                            </li>

                            <li id="mid">
                                <img src="{{ url('images/Empowerment-Icon.png') }}">
                                <h2>EMPOWERMENT</h2>
    We are all owners of the customer experience, we are each responsible for delivering service that exceeds expectations and we are empowered to make decisions that improve the customer experience.
                            </li>

                            <li>
                                <img src="{{ url('images/Teamwork-Icon.png') }}">
                                <h2>TEAMWORK</h2>
    We operate as a team to exceed expectations, we collaborate to deliver an exceptional customer experience and we succeed together not individually.
                            </li>

                            <li>
                                <img src="{{ url('images/Integirty-Icon.png') }}">
                                <h2>INTEGRITY</h2>
    We do what is right, even when it is not to our advantage and when no one is watching.
                            </li>

                            <li id="mid">
                                <img src="{{ url('images/Passion-Icon.png') }}">
                                <h2>PASSION</h2>
    We are passionate and dedicated, holding ourselves to the highest of expectations, which exudes in our daily work.
                            </li>

                            <li>
                                <img src="{{ url('images/Achievement-Icon.png') }}">
                                <h2>ACHIEVEMENT</h2>
    We take initiative to perform at the highest level through innovation and our entrepreneurial spirit.
                            </li>
                        </ul>
                </article>

    @endsection