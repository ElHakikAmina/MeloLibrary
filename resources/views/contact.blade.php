@extends('layouts.app')

@section('content')
<div class="container">
    <section class="mb-4">
        <h2 class="h1-responsive text-white font-weight-bold text-center my-4">Contactez-nous</h2>
        <p class="text-center text-white w-responsive mx-auto mb-5">
            Avez-vous des questions? N'hésitez pas à nous contacter directement. Notre équipe reviendra vers vous dans les heures qui suivent pour vous aider.
        </p>
        <div class="row text-white">
            <div class="col-md-9 mb-md-0 mb-5">
                <form id="contact-form" name="contact-form">
                    <div class="row ">
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" id="name" name="name" class="form-control">
                                <label for="name">Nom Complet</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" id="email" name="email" class="form-control">
                                <label for="email">Email</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form mb-0">
                                <input type="text" id="subject" name="subject" class="form-control">
                                <label for="subject">Le sujet</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form">
                                <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                <label for="message">Votre message</label>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="text-center text-md-left">
                    <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit()">Envoyer</a>
                </div>
                <div class="status"></div>
            </div>
            <div class="col-md-3 text-center">
                <ul class="list-unstyled mb-0">
                    <li>
                        <i class="fas fa-map-marker-alt fa-2x"></i>
                        <p>San Francisco, CA 94126, USA</p>
                    </li>
                    <li>
                        <i class="fas fa-phone mt-4 fa-2x"></i>
                        <p>+ 01 234 567 89</p>
                    </li>
                    <li>
                        <i class="fas fa-envelope mt-4 fa-2x"></i>
                        <p>contact@mdbootstrap.com</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</div>
@endsection