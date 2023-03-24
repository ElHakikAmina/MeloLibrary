@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="about-section bg-black ">
        <br>
        <h1 class="mb-5 ">À propos de nous</h1>
        
        <h3>Bienvenue sur MeloLibrary. Un réseau musical dédié aux passionnés de musique ! Notre plateforme est conçue pour permettre aux artistes, musiciens et fans de musique du monde entier de se connecter, de collaborer et de partager leur passion pour la musique. Que vous soyez un artiste en herbe, un musicien professionnel ou simplement un amateur de musique, notre communauté est ouverte à tous. Nous proposons une variété de fonctionnalités, telles que des forums de discussion, des salles de chat en direct, des critiques de musique et des outils de création de musique, pour vous aider à interagir avec d'autres membres et à découvrir de nouveaux talents. Rejoignez-nous dès maintenant pour découvrir une communauté dynamique et passionnée de musiciens et de fans de musique !
        </h3>
    </div>

    <h2 style="text-align:center">Our Team</h2>
    <div class="row">
        <div class="column">
            <div class="card">
                <img src="{{ asset('images/1.jpg') }}" alt="Jane" style="width:100%">
                <div class="container">
                    <h2>Jane Doe</h2>
                    <p class="title">CEO & Founder</p>
                    <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                    <p>jane@example.com</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <img src="{{ asset('images/1.jpg') }}" alt="Mike" style="width:100%">
                <div class="container">
                    <h2>Mike Ross</h2>
                    <p class="title">Art Director</p>
                    <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                    <p>mike@example.com</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <img src="{{ asset('images/1.jpg') }}" alt="John" style="width:100%">
                <div class="container">
                    <h2>John Doe</h2>
                    <p class="title">Designer</p>
                    <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                    <p>john@example.com</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection