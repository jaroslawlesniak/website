@extends('layouts/home')

@section('content')
    <div class="hero">
        <h1>Tworzenie stron www</h1>
    </div>
    <div class="container">
        <section>
            <h2>Kilka słów o mnie</h2>
            <p>Exercitation sint sit cupidatat ipsum aliqua voluptate elit proident nulla pariatur proident. Lorem ut ullamco ea incididunt ea aliquip esse ad laboris. Eiusmod irure consectetur esse magna adipisicing. Nostrud in officia velit velit aliqua. Dolor quis pariatur ad fugiat ad cupidatat reprehenderit velit duis sint laborum.</p>
        </section>
        <section>
            <h2>Portfolio</h2>
            <p>Exercitation sint sit cupidatat ipsum aliqua voluptate elit proident nulla pariatur proident. Lorem ut ullamco ea incididunt ea aliquip esse ad laboris. Eiusmod irure consectetur esse magna adipisicing. Nostrud in officia velit velit aliqua. Dolor quis pariatur ad fugiat ad cupidatat reprehenderit velit duis sint laborum.</p>
        </section>
    </div>
    <div class="row">
        <div class="col-md-4 portfolio angular">
            <img src="assets/angular.svg" alt="">
        </div>
        <div class="col-md-4 portfolio react">
            <img src="assets/react.png" alt="">
        </div>
        <div class="col-md-4 portfolio vue">
            <img src="assets/vue.png" alt="">
        </div>
    </div>
@endsection