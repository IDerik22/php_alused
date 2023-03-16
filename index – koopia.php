<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
            crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.3/umd/popper.min.js"></script>
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="admin.css">
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
            integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer">

        <title>Main Page</title>
    </head>
    <body>
        
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">Logo</a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-toggle="collapse"
                    data-target="#navbarNav"
                    aria-controls="navbarNav"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto justify-content-end">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home
                                <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?content_id=Features">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Team</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <form action="login.php" method="POST">
                            <li class="nav-item">
                                <button type="submit" class="btn ml-2">Admin page</button>
                            </li>
                        </form>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="video-banner">
            <video id="myVideo" loop="loop" preload="auto">
                <source src="video.mp4" type="video/mp4">
            </video>
            <div class="video-banner-text">
                <h1>Erik Teppan</h1>
                <p>Tere tulemast!</p>
            </div>
        </div>

        <script>
            var video = document.getElementById("myVideo");
            video.addEventListener('loadedmetadata', function () {
                video.play();
            });
        </script>

        
            <div class="container1">
                <div class="row justify-content-between">
                    <div class="col col-md-12 pr-md-5 pl-md-5">
                        <div class="bd-example bd-example-tabs">
                            <ul
                                class="nav nav-pills flex-column justify-content-center flex-sm-row mb-3"
                                id="pills-tab"
                                role="tablist">
                                <li class="border border-light rounded text-sm-center nav-item mr-md-1">
                                    <a
                                        class="nav-link pt-md-3 pb-md-3 pr-md-5 pl-md-5 active show"
                                        id="pills-home-tab"
                                        data-toggle="pill"
                                        href="#pills-home"
                                        role="tab"
                                        aria-controls="pills-home"
                                        aria-selected="false">
                                        <i class="fas fa-laptop fa-lg mr-2"></i>Home
                                    </a>
                                </li>
                                <li class="border border-light rounded text-sm-center mr-md-1 nav-item">
                                    <a
                                        class="nav-link pt-md-3 pb-md-3 pr-md-5 pl-md-5"
                                        id="pills-profile-tab"
                                        data-toggle="pill"
                                        href="#pills-profile"
                                        role="tab"
                                        aria-controls="pills-profile"
                                        aria-selected="false">
                                        <i class="far fa-gem fa-lg mr-2"></i>Profile
                                    </a>
                                </li>
                                <li class="border border-light rounded text-sm-center nav-item mr-md-1">
                                    <a
                                        class="nav-link pt-md-3 pb-md-3 pr-md-5 pl-md-5"
                                        id="pills-contact-tab"
                                        data-toggle="pill"
                                        href="#pills-contact"
                                        role="tab"
                                        aria-controls="pills-contact"
                                        aria-selected="false">
                                        <i class="fas fa-comments fa-lg mr-2"></i>Contact
                                    </a>
                                </li>
                                <li class="border border-light rounded text-sm-center mr-md-1 nav-item">
                                    <a
                                        class="nav-link pt-md-3 pb-md-3 pr-md-5 pl-md-5"
                                        id="pills-info-tab"
                                        data-toggle="pill"
                                        href="#pills-info"
                                        role="tab"
                                        aria-controls="pills-info"
                                        aria-selected="true">
                                        <i class="fas fa-code fa-lg mr-2"></i>Info
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content pt-5 pb-5" id="pills-tabContent">
                                <div
                                    class="tab-pane fade active show"
                                    id="pills-home"
                                    role="tabpanel"
                                    aria-labelledby="pills-home-tab">
                                    <div class="container-fluid">
                                        <div class="row align-items-center justify-content-between">
                                            <div class="col-12 col-md-5  text-left">
                                                <h2>Tab 1 Lorem ipsum efficitur
                                                </h2>
                                                <p class=" mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
                                                    pharetra varius quam sit amet vulputate. Quisque mauris augue, molestie
                                                    tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis dolor, in
                                                    sagittis nisi.
                                                </p>
                                                <blockquote class="card  text-left  py-3 px-4 mb-3 mt-4  ">
                                                    <div class="row align-items-center justify-content-between">
                                                        <div class="col-3  p-md-1 text-center rounded">
                                                            <img
                                                                src="https://via.placeholder.com/80/5fa9f8/efefef"
                                                                class="img-fluid py-0 rounded"
                                                                alt="features">
                                                            <footer class="blockquote-footer small p-1">
                                                                <span class="small">John Doe
                                                                    <cite class="font-weight-bold">COMPANY NAME</cite></span></footer>
                                                        </div>
                                                        <div class="col-9">

                                                            <p class=" m-0 text-muted small">
                                                                Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero.
                                                                Aenean sit amet felis dolor, in sagittis nisi. Etiam sed iaculis libero, at
                                                                euismod massain venenatis ligula.
                                                            </p>
                                                            <i
                                                                class="fa fa-quote-right fa-2x text-muted pull-right mt-3"
                                                                aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                </blockquote>
                                            </div>
                                            <div class="col-12 col-md-5 mb-4 ml-md-auto">
                                                <img
                                                    alt="image"
                                                    class="img-fluid img-center mr-auto ml-auto d-none d-md-block"
                                                    src="https://via.placeholder.com/600/5fa9f8/efefef">
                                            </div>
                                        </div>
                                    </div>
                                    <section class="pt-5 pb-5">
                                        <div class="row align-items-center justify-content-center pt-5 pb-5">
                                            <div class="col-12 col-md-4 offset-md-1  ">
                                                <h2>Nice Heading</h2>
                                                <p class="text-h3 mt-3">A collection of coded HTML and CSS elements to help your
                                                    build your new website. Clean design, fully responsive and based on Bootstrap 4.</p>

                                            </div>
                                            <div class="col-12 col-md-6   mt-4 mt-md-0">
                                                <img
                                                    alt="image"
                                                    class="img-fluid"
                                                    src="http://via.placeholder.com/650x450/5fa9f8/fff">
                                            </div>
                                        </div>
                                        <div class="row align-items-center justify-content-center">
                                            <div class="col-12 col-md-6   mt-4 mt-md-0 order-md-1 order-2">
                                                <img
                                                    alt="image"
                                                    class="img-fluid"
                                                    src="http://via.placeholder.com/650x450/5fa9f8/fff">
                                            </div>
                                            <div class="col-12 col-md-4 order-1 order-md-2">
                                                <h2>Nice Heading</h2>
                                                <p class="text-h3 mt-3">A collection of coded HTML and CSS elements to help your
                                                    build your new website. Clean design, fully responsive and based on Bootstrap 4.</p>
                                            </div>
                                        </div>
                                        <div class="row align-items-center justify-content-center pt-5 pb-5">
                                            <div class="col-12 col-md-4 offset-md-1  ">
                                                <h2>Nice Heading</h2>
                                                <p class="text-h3 mt-3">A collection of coded HTML and CSS elements to help your
                                                    build your new website. Clean design, fully responsive and based on Bootstrap 4.</p>

                                            </div>
                                            <div class="col-12 col-md-6   mt-4 mt-md-0">
                                                <img
                                                    alt="image"
                                                    class="img-fluid"
                                                    src="http://via.placeholder.com/650x450/5fa9f8/fff">
                                            </div>
                                        </div>
                                    </section>
                                    <section class="py-5">
                                        <div class="row justify-content-center">
                                            <div class="col-12">
                                                <h3 class="mb-2 text-center h2">Blueprints</h3>
                                            </div>
                                            <div class="col-sm-6 col-md-6">
                                                <article class="card mb-6 border-right-0 border-left-0 border-top-0">
                                                    <p class="card-text py-md-3 px-md-4">Lorem ipsum, dolor sit amet consectetur
                                                        adipisicing elit. Unde enim corporis earum odit quibusdam dicta repellendus
                                                        eligendi aliquid ipsum doloremque vero, voluptatibus sapiente tenetur?
                                                        Voluptates, blanditiis! Vitae laboriosam saepe pariatur.</p>

                                                    <img
                                                        alt="image"
                                                        class="img-fluid"
                                                        src="http://via.placeholder.com/650x450/5fa9f8/fff">
                                                    <div class="card-body">
                                                        <h3 class="mb-2 h2">Awesome Things</h3>
                                                        <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                            Dolorem harum praesentium provident optio, perferendis in quae accusantium
                                                            veritatis, sed magnam ut sint consectetur! Fugit, beatae. Eius dolor quidem
                                                            perspiciatis sunt!</p>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col-sm-6 col-md-6">
                                                <article class="card mb-6 border-right-0 border-left-0 border-top-0">
                                                    <p class="card-text py-md-3 px-md-4">Lorem ipsum, dolor sit amet consectetur
                                                        adipisicing elit. Unde enim corporis earum odit quibusdam dicta repellendus
                                                        eligendi aliquid ipsum doloremque vero, voluptatibus sapiente tenetur?
                                                        Voluptates, blanditiis! Vitae laboriosam saepe pariatur.</p>

                                                    <img
                                                        alt="image"
                                                        class="img-fluid"
                                                        src="http://via.placeholder.com/650x450/5fa9f8/fff">
                                                    <div class="card-body">
                                                        <h3 class="mb-2 h2">More Awesomeness</h3>
                                                        <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                            Dolorem harum praesentium provident optio, perferendis in quae accusantium
                                                            veritatis, sed magnam ut sint consectetur! Fugit, beatae. Eius dolor quidem
                                                            perspiciatis sunt!</p>
                                                    </div>
                                                </article>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="pt-5 pb-5">
                                        <div class="row align-items-center justify-content-center pt-5 pb-5">
                                            <div class="col-12 col-md-4 offset-md-1  ">
                                                <h2>What you'll get</h2>
                                                <p class="text-h3 mt-3 display-5">Here are some of our top features.</p>
                                                <ul>
                                                    <li>Add your own blocks</li>
                                                    <li>React Native app source included for Andorid and iOS</li>
                                                    <li>Premium support</li>
                                                    <li>User friendly and intuitive</li>
                                                    <li>Media browser soon</li>
                                                    <li>Bootstrap 4 support</li>
                                                </ul>
                                            </div>
                                            <div class="col-12 col-md-6   mt-4 mt-md-0">
                                                <img
                                                    alt="image"
                                                    class="img-fluid"
                                                    src="http://via.placeholder.com/650x450/5fa9f8/fff">
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <div
                                    class="tab-pane fade active show"
                                    id="pills-profile"
                                    role="tabpanel"
                                    aria-labelledby="pills-profile-tab">
                                    <div class="container-fluid">
                                        <div class="row align-items-center justify-content-between">
                                            <div class="col-12 col-md-5  text-left">
                                                <h2>Tab 2 Lorem ipsum efficitur
                                                </h2>
                                                <p class=" mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
                                                    pharetra varius quam sit amet vulputate. Quisque mauris augue, molestie
                                                    tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis dolor, in
                                                    sagittis nisi.
                                                </p>
                                                <blockquote class="card  text-left  py-3 px-4 mb-3 mt-4  ">
                                                    <div class="row align-items-center justify-content-between">
                                                        <div class="col-3  p-md-1 text-center rounded">
                                                            <img
                                                                src="https://via.placeholder.com/80/5fa9f8/efefef"
                                                                class="img-fluid py-0 rounded"
                                                                alt="features">
                                                            <footer class="blockquote-footer small p-1">
                                                                <span class="small">John Doe
                                                                    <cite class="font-weight-bold">COMPANY NAME</cite></span></footer>
                                                        </div>
                                                        <div class="col-9">

                                                            <p class=" m-0 text-muted small">
                                                                Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero.
                                                                Aenean sit amet felis dolor, in sagittis nisi. Etiam sed iaculis libero, at
                                                                euismod massain venenatis ligula.
                                                            </p>
                                                            <i
                                                                class="fa fa-quote-right fa-2x text-muted pull-right mt-3"
                                                                aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                </blockquote>
                                            </div>
                                            <div class="col-12 col-md-5 mb-4 ml-md-auto">
                                                <img
                                                    alt="image"
                                                    class="img-fluid img-center mr-auto ml-auto d-none d-md-block"
                                                    src="https://via.placeholder.com/600/5fa9f8/efefef">
                                            </div>
                                        </div>
                                    </div>
                                    <section class="pt-5 pb-5">
                                        <div class="row align-items-center justify-content-center pt-5 pb-5">
                                            <div class="col-12 col-md-4 offset-md-1  ">
                                                <h2>Nice Heading</h2>
                                                <p class="text-h3 mt-3">A collection of coded HTML and CSS elements to help your
                                                    build your new website. Clean design, fully responsive and based on Bootstrap 4.</p>

                                            </div>
                                            <div class="col-12 col-md-6   mt-4 mt-md-0">
                                                <img
                                                    alt="image"
                                                    class="img-fluid"
                                                    src="http://via.placeholder.com/650x450/5fa9f8/fff">
                                            </div>
                                        </div>
                                        <div class="row align-items-center justify-content-center">
                                            <div class="col-12 col-md-6   mt-4 mt-md-0 order-md-1 order-2">
                                                <img
                                                    alt="image"
                                                    class="img-fluid"
                                                    src="http://via.placeholder.com/650x450/5fa9f8/fff">
                                            </div>
                                            <div class="col-12 col-md-4 order-1 order-md-2">
                                                <h2>Nice Heading</h2>
                                                <p class="text-h3 mt-3">A collection of coded HTML and CSS elements to help your
                                                    build your new website. Clean design, fully responsive and based on Bootstrap 4.</p>
                                            </div>
                                        </div>
                                        <div class="row align-items-center justify-content-center pt-5 pb-5">
                                            <div class="col-12 col-md-4 offset-md-1  ">
                                                <h2>Nice Heading</h2>
                                                <p class="text-h3 mt-3">A collection of coded HTML and CSS elements to help your
                                                    build your new website. Clean design, fully responsive and based on Bootstrap 4.</p>

                                            </div>
                                            <div class="col-12 col-md-6   mt-4 mt-md-0">
                                                <img
                                                    alt="image"
                                                    class="img-fluid"
                                                    src="http://via.placeholder.com/650x450/5fa9f8/fff">
                                            </div>
                                        </div>
                                    </section>
                                    <section class="py-5">
                                        <div class="row justify-content-center">
                                            <div class="col-12">
                                                <h3 class="mb-2 text-center h2">Blueprints</h3>
                                            </div>
                                            <div class="col-sm-6 col-md-6">
                                                <article class="card mb-6 border-right-0 border-left-0 border-top-0">
                                                    <p class="card-text py-md-3 px-md-4">Lorem ipsum, dolor sit amet consectetur
                                                        adipisicing elit. Unde enim corporis earum odit quibusdam dicta repellendus
                                                        eligendi aliquid ipsum doloremque vero, voluptatibus sapiente tenetur?
                                                        Voluptates, blanditiis! Vitae laboriosam saepe pariatur.</p>

                                                    <img
                                                        alt="image"
                                                        class="img-fluid"
                                                        src="http://via.placeholder.com/650x450/5fa9f8/fff">
                                                    <div class="card-body">
                                                        <h3 class="mb-2 h2">Awesome Things</h3>
                                                        <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                            Dolorem harum praesentium provident optio, perferendis in quae accusantium
                                                            veritatis, sed magnam ut sint consectetur! Fugit, beatae. Eius dolor quidem
                                                            perspiciatis sunt!</p>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col-sm-6 col-md-6">
                                                <article class="card mb-6 border-right-0 border-left-0 border-top-0">
                                                    <p class="card-text py-md-3 px-md-4">Lorem ipsum, dolor sit amet consectetur
                                                        adipisicing elit. Unde enim corporis earum odit quibusdam dicta repellendus
                                                        eligendi aliquid ipsum doloremque vero, voluptatibus sapiente tenetur?
                                                        Voluptates, blanditiis! Vitae laboriosam saepe pariatur.</p>

                                                    <img
                                                        alt="image"
                                                        class="img-fluid"
                                                        src="http://via.placeholder.com/650x450/5fa9f8/fff">
                                                    <div class="card-body">
                                                        <h3 class="mb-2 h2">More Awesomeness</h3>
                                                        <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                            Dolorem harum praesentium provident optio, perferendis in quae accusantium
                                                            veritatis, sed magnam ut sint consectetur! Fugit, beatae. Eius dolor quidem
                                                            perspiciatis sunt!</p>
                                                    </div>
                                                </article>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="pt-5 pb-5">
                                        <div class="row align-items-center justify-content-center pt-5 pb-5">
                                            <div class="col-12 col-md-4 offset-md-1  ">
                                                <h2>What you'll get</h2>
                                                <p class="text-h3 mt-3 display-5">Here are some of our top features.</p>
                                                <ul>
                                                    <li>Add your own blocks</li>
                                                    <li>React Native app source included for Andorid and iOS</li>
                                                    <li>Premium support</li>
                                                    <li>User friendly and intuitive</li>
                                                    <li>Media browser soon</li>
                                                    <li>Bootstrap 4 support</li>
                                                </ul>
                                            </div>
                                            <div class="col-12 col-md-6   mt-4 mt-md-0">
                                                <img
                                                    alt="image"
                                                    class="img-fluid"
                                                    src="http://via.placeholder.com/650x450/5fa9f8/fff">
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <div
                                    class="tab-pane fade"
                                    id="pills-contact"
                                    role="tabpanel"
                                    aria-labelledby="pills-contact-tab">
                                    <div class="container-fluid">
                                        <div class="row align-items-center justify-content-between">
                                            <div class="col-12 col-md-5  text-left">
                                                <h2>Tab 3 Lorem ipsum efficitur
                                                </h2>
                                                <p class=" mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
                                                    pharetra varius quam sit amet vulputate. Quisque mauris augue, molestie
                                                    tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis dolor, in
                                                    sagittis nisi.
                                                </p>
                                                <blockquote class="card  text-left  py-3 px-4 mb-3 mt-4  ">
                                                    <div class="row align-items-center justify-content-between">
                                                        <div class="col-3  p-md-1 text-center rounded">
                                                            <img
                                                                src="https://via.placeholder.com/80/5fa9f8/efefef"
                                                                class="img-fluid py-0 rounded"
                                                                alt="features">
                                                            <footer class="blockquote-footer small p-1">
                                                                <span class="small">John Doe
                                                                    <cite class="font-weight-bold">COMPANY NAME</cite></span></footer>
                                                        </div>
                                                        <div class="col-9">

                                                            <p class=" m-0 text-muted small">
                                                                Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero.
                                                                Aenean sit amet felis dolor, in sagittis nisi. Etiam sed iaculis libero, at
                                                                euismod massain venenatis ligula.
                                                            </p>
                                                            <i
                                                                class="fa fa-quote-right fa-2x text-muted pull-right mt-3"
                                                                aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                </blockquote>
                                            </div>
                                            <div class="col-12 col-md-5 mb-4 ml-md-auto">
                                                <img
                                                    alt="image"
                                                    class="img-fluid img-center mr-auto ml-auto d-none d-md-block"
                                                    src="https://via.placeholder.com/600/5fa9f8/efefef">
                                            </div>
                                        </div>
                                    </div>
                                    <section class="pt-5 pb-5">
                                        <div class="row align-items-center justify-content-center pt-5 pb-5">
                                            <div class="col-12 col-md-4 offset-md-1  ">
                                                <h2>Nice Heading</h2>
                                                <p class="text-h3 mt-3">A collection of coded HTML and CSS elements to help your
                                                    build your new website. Clean design, fully responsive and based on Bootstrap 4.</p>

                                            </div>
                                            <div class="col-12 col-md-6   mt-4 mt-md-0">
                                                <img
                                                    alt="image"
                                                    class="img-fluid"
                                                    src="http://via.placeholder.com/650x450/5fa9f8/fff">
                                            </div>
                                        </div>
                                        <div class="row align-items-center justify-content-center">
                                            <div class="col-12 col-md-6   mt-4 mt-md-0 order-md-1 order-2">
                                                <img
                                                    alt="image"
                                                    class="img-fluid"
                                                    src="http://via.placeholder.com/650x450/5fa9f8/fff">
                                            </div>
                                            <div class="col-12 col-md-4 order-1 order-md-2">
                                                <h2>Nice Heading</h2>
                                                <p class="text-h3 mt-3">A collection of coded HTML and CSS elements to help your
                                                    build your new website. Clean design, fully responsive and based on Bootstrap 4.</p>
                                            </div>
                                        </div>
                                        <div class="row align-items-center justify-content-center pt-5 pb-5">
                                            <div class="col-12 col-md-4 offset-md-1  ">
                                                <h2>Nice Heading</h2>
                                                <p class="text-h3 mt-3">A collection of coded HTML and CSS elements to help your
                                                    build your new website. Clean design, fully responsive and based on Bootstrap 4.</p>

                                            </div>
                                            <div class="col-12 col-md-6   mt-4 mt-md-0">
                                                <img
                                                    alt="image"
                                                    class="img-fluid"
                                                    src="http://via.placeholder.com/650x450/5fa9f8/fff">
                                            </div>
                                        </div>
                                    </section>
                                    <section class="py-5">
                                        <div class="row justify-content-center">
                                            <div class="col-12">
                                                <h3 class="mb-2 text-center h2">Blueprints</h3>
                                            </div>
                                            <div class="col-sm-6 col-md-6">
                                                <article class="card mb-6 border-right-0 border-left-0 border-top-0">
                                                    <p class="card-text py-md-3 px-md-4">Lorem ipsum, dolor sit amet consectetur
                                                        adipisicing elit. Unde enim corporis earum odit quibusdam dicta repellendus
                                                        eligendi aliquid ipsum doloremque vero, voluptatibus sapiente tenetur?
                                                        Voluptates, blanditiis! Vitae laboriosam saepe pariatur.</p>

                                                    <img
                                                        alt="image"
                                                        class="img-fluid"
                                                        src="http://via.placeholder.com/650x450/5fa9f8/fff">
                                                    <div class="card-body">
                                                        <h3 class="mb-2 h2">Awesome Things</h3>
                                                        <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                            Dolorem harum praesentium provident optio, perferendis in quae accusantium
                                                            veritatis, sed magnam ut sint consectetur! Fugit, beatae. Eius dolor quidem
                                                            perspiciatis sunt!</p>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col-sm-6 col-md-6">
                                                <article class="card mb-6 border-right-0 border-left-0 border-top-0">
                                                    <p class="card-text py-md-3 px-md-4">Lorem ipsum, dolor sit amet consectetur
                                                        adipisicing elit. Unde enim corporis earum odit quibusdam dicta repellendus
                                                        eligendi aliquid ipsum doloremque vero, voluptatibus sapiente tenetur?
                                                        Voluptates, blanditiis! Vitae laboriosam saepe pariatur.</p>

                                                    <img
                                                        alt="image"
                                                        class="img-fluid"
                                                        src="http://via.placeholder.com/650x450/5fa9f8/fff">
                                                    <div class="card-body">
                                                        <h3 class="mb-2 h2">More Awesomeness</h3>
                                                        <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                            Dolorem harum praesentium provident optio, perferendis in quae accusantium
                                                            veritatis, sed magnam ut sint consectetur! Fugit, beatae. Eius dolor quidem
                                                            perspiciatis sunt!</p>
                                                    </div>
                                                </article>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="pt-5 pb-5">
                                        <div class="row align-items-center justify-content-center pt-5 pb-5">
                                            <div class="col-12 col-md-4 offset-md-1  ">
                                                <h2>What you'll get</h2>
                                                <p class="text-h3 mt-3 display-5">Here are some of our top features.</p>
                                                <ul>
                                                    <li>Add your own blocks</li>
                                                    <li>React Native app source included for Andorid and iOS</li>
                                                    <li>Premium support</li>
                                                    <li>User friendly and intuitive</li>
                                                    <li>Media browser soon</li>
                                                    <li>Bootstrap 4 support</li>
                                                </ul>
                                            </div>
                                            <div class="col-12 col-md-6   mt-4 mt-md-0">
                                                <img
                                                    alt="image"
                                                    class="img-fluid"
                                                    src="http://via.placeholder.com/650x450/5fa9f8/fff">
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <div
                                    class="tab-pane fade active show"
                                    id="pills-info"
                                    role="tabpanel"
                                    aria-labelledby="pills-info-tab">
                                    <div class="container-fluid">
                                        <div class="row align-items-center justify-content-between">
                                            <div class="col-12 col-md-5  text-left">
                                                <h2>Tab 4 Lorem ipsum efficitur
                                                </h2>
                                                <p class=" mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
                                                    pharetra varius quam sit amet vulputate. Quisque mauris augue, molestie
                                                    tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis dolor, in
                                                    sagittis nisi.
                                                </p>
                                                <blockquote class="card  text-left  py-3 px-4 mb-3 mt-4  ">
                                                    <div class="row align-items-center justify-content-between">
                                                        <div class="col-3  p-md-1 text-center rounded">
                                                            <img
                                                                src="https://via.placeholder.com/80/5fa9f8/efefef"
                                                                class="img-fluid py-0 rounded"
                                                                alt="features">
                                                            <footer class="blockquote-footer small p-1">
                                                                <span class="small">John Doe
                                                                    <cite class="font-weight-bold">COMPANY NAME</cite></span></footer>
                                                        </div>
                                                        <div class="col-9">

                                                            <p class=" m-0 text-muted small">
                                                                Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero.
                                                                Aenean sit amet felis dolor, in sagittis nisi. Etiam sed iaculis libero, at
                                                                euismod massain venenatis ligula.
                                                            </p>
                                                            <i
                                                                class="fa fa-quote-right fa-2x text-muted pull-right mt-3"
                                                                aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                </blockquote>
                                            </div>
                                            <div class="col-12 col-md-5 mb-4 ml-md-auto">
                                                <img
                                                    alt="image"
                                                    class="img-fluid img-center mr-auto ml-auto d-none d-md-block"
                                                    src="https://via.placeholder.com/600/5fa9f8/efefef">
                                            </div>
                                        </div>
                                    </div>
                                    <section class="pt-5 pb-5">
                                        <div class="row align-items-center justify-content-center pt-5 pb-5">
                                            <div class="col-12 col-md-4 offset-md-1  ">
                                                <h2>Nice Heading</h2>
                                                <p class="text-h3 mt-3">A collection of coded HTML and CSS elements to help your
                                                    build your new website. Clean design, fully responsive and based on Bootstrap 4.</p>

                                            </div>
                                            <div class="col-12 col-md-6   mt-4 mt-md-0">
                                                <img
                                                    alt="image"
                                                    class="img-fluid"
                                                    src="http://via.placeholder.com/650x450/5fa9f8/fff">
                                            </div>
                                        </div>
                                        <div class="row align-items-center justify-content-center">
                                            <div class="col-12 col-md-6   mt-4 mt-md-0 order-md-1 order-2">
                                                <img
                                                    alt="image"
                                                    class="img-fluid"
                                                    src="http://via.placeholder.com/650x450/5fa9f8/fff">
                                            </div>
                                            <div class="col-12 col-md-4 order-1 order-md-2">
                                                <h2>Nice Heading</h2>
                                                <p class="text-h3 mt-3">A collection of coded HTML and CSS elements to help your
                                                    build your new website. Clean design, fully responsive and based on Bootstrap 4.</p>
                                            </div>
                                        </div>
                                        <div class="row align-items-center justify-content-center pt-5 pb-5">
                                            <div class="col-12 col-md-4 offset-md-1  ">
                                                <h2>Nice Heading</h2>
                                                <p class="text-h3 mt-3">A collection of coded HTML and CSS elements to help your
                                                    build your new website. Clean design, fully responsive and based on Bootstrap 4.</p>

                                            </div>
                                            <div class="col-12 col-md-6   mt-4 mt-md-0">
                                                <img
                                                    alt="image"
                                                    class="img-fluid"
                                                    src="http://via.placeholder.com/650x450/5fa9f8/fff">
                                            </div>
                                        </div>
                                    </section>
                                    <section class="py-5">
                                        <div class="row justify-content-center">
                                            <div class="col-12">
                                                <h3 class="mb-2 text-center h2">Blueprints</h3>
                                            </div>
                                            <div class="col-sm-6 col-md-6">
                                                <article class="card mb-6 border-right-0 border-left-0 border-top-0">
                                                    <p class="card-text py-md-3 px-md-4">Lorem ipsum, dolor sit amet consectetur
                                                        adipisicing elit. Unde enim corporis earum odit quibusdam dicta repellendus
                                                        eligendi aliquid ipsum doloremque vero, voluptatibus sapiente tenetur?
                                                        Voluptates, blanditiis! Vitae laboriosam saepe pariatur.</p>

                                                    <img
                                                        alt="image"
                                                        class="img-fluid"
                                                        src="http://via.placeholder.com/650x450/5fa9f8/fff">
                                                    <div class="card-body">
                                                        <h3 class="mb-2 h2">Awesome Things</h3>
                                                        <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                            Dolorem harum praesentium provident optio, perferendis in quae accusantium
                                                            veritatis, sed magnam ut sint consectetur! Fugit, beatae. Eius dolor quidem
                                                            perspiciatis sunt!</p>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col-sm-6 col-md-6">
                                                <article class="card mb-6 border-right-0 border-left-0 border-top-0">
                                                    <p class="card-text py-md-3 px-md-4">Lorem ipsum, dolor sit amet consectetur
                                                        adipisicing elit. Unde enim corporis earum odit quibusdam dicta repellendus
                                                        eligendi aliquid ipsum doloremque vero, voluptatibus sapiente tenetur?
                                                        Voluptates, blanditiis! Vitae laboriosam saepe pariatur.</p>

                                                    <img
                                                        alt="image"
                                                        class="img-fluid"
                                                        src="http://via.placeholder.com/650x450/5fa9f8/fff">
                                                    <div class="card-body">
                                                        <h3 class="mb-2 h2">More Awesomeness</h3>
                                                        <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                            Dolorem harum praesentium provident optio, perferendis in quae accusantium
                                                            veritatis, sed magnam ut sint consectetur! Fugit, beatae. Eius dolor quidem
                                                            perspiciatis sunt!</p>
                                                    </div>
                                                </article>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="pt-5 pb-5">
                                        <div class="row align-items-center justify-content-center pt-5 pb-5">
                                            <div class="col-12 col-md-4 offset-md-1  ">
                                                <h2>What you'll get</h2>
                                                <p class="text-h3 mt-3 display-5">Here are some of our top features.</p>
                                                <ul>
                                                    <li>Add your own blocks</li>
                                                    <li>React Native app source included for Andorid and iOS</li>
                                                    <li>Premium support</li>
                                                    <li>User friendly and intuitive</li>
                                                    <li>Media browser soon</li>
                                                    <li>Bootstrap 4 support</li>
                                                </ul>
                                            </div>
                                            <div class="col-12 col-md-6   mt-4 mt-md-0">
                                                <img
                                                    alt="image"
                                                    class="img-fluid"
                                                    src="http://via.placeholder.com/650x450/5fa9f8/fff">
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="mb-2 text-center">What people say</h2>
                        <p class="mb-5 text-center">Masonry testimonial cards grid</p>
                    </div>
                    <div class="col-12">
                        <div class="card-columns">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <blockquote
                                        class=" ">
                            <i class="
                                        fa="fa"
                                        fa-quote-right="fa-quote-right"
                                        fa-2x="fa-2x"
                                        text-muted="text-muted"
                                        pull-right="pull-right"
                                        mt-3="mt-3"
                                        mb-3" aria-hidden="
                                        true"="
                                        true""="true"
                                        ""></i>
                                    <p class=" m-0 text-muted ">
                                        Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero.
                                        Aenean sit amet felis dolor, in sagittis nisi.
                                    </p>
                                    <footer class="blockquote-footer small p-1">
                                        <span class="small">John Doe
                                            <cite class="font-weight-bold">COMPANY NAME</cite>
                                        </span>
                                    </footer>
                                </blockquote>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-body">
                                <blockquote
                                    class=" ">
                            <i class="
                                    fa="fa"
                                    fa-quote-right="fa-quote-right"
                                    fa-2x="fa-2x"
                                    text-muted="text-muted"
                                    pull-right="pull-right"
                                    mt-3="mt-3"
                                    mb-3" aria-hidden="
                                    true"="
                                    true""="true"
                                    ""></i>
                                <p class=" m-0 text-muted ">
                                    Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero.
                                    Etiam sed iaculis libero, at euismod massain venenatis ligula.
                                </p>
                                <footer class="blockquote-footer small p-1">
                                    <span class="small">John Doe
                                        <cite class="font-weight-bold">COMPANY NAME</cite>
                                    </span>
                                </footer>
                            </blockquote>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-body">
                            <blockquote
                                class=" ">
                            <i class="
                                fa="fa"
                                fa-quote-right="fa-quote-right"
                                fa-2x="fa-2x"
                                text-muted="text-muted"
                                pull-right="pull-right"
                                mt-3="mt-3"
                                mb-3" aria-hidden="
                                true"="
                                true""="true"
                                ""></i>
                            <p class=" m-0 text-muted ">
                                Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero.
                                Aenean sit amet felis dolor, in sagittis nisi. Etiam sed iaculis libero, at
                                euismod massain venenatis ligula.
                            </p>
                            <footer class="blockquote-footer small p-1">
                                <span class="small">John Doe
                                    <cite class="font-weight-bold">COMPANY NAME</cite>
                                </span>
                            </footer>
                        </blockquote>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body">
                        <blockquote
                            class=" ">
                            <i class="
                            fa="fa"
                            fa-quote-right="fa-quote-right"
                            fa-2x="fa-2x"
                            text-muted="text-muted"
                            pull-right="pull-right"
                            mt-3="mt-3"
                            mb-3" aria-hidden="
                            true"="
                            true""="true"
                            ""></i>
                        <p class=" m-0 text-muted ">
                            Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero.
                            Aenean sit amet felis dolor, in sagittis nisi. Etiam sed iaculis libero, at
                            euismod massain venenatis ligula.
                        </p>
                        <footer class="blockquote-footer small p-1">
                            <span class="small">John Doe
                                <cite class="font-weight-bold">COMPANY NAME</cite>
                            </span>
                        </footer>
                    </blockquote>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <blockquote
                        class=" ">
                            <i class="
                        fa="fa"
                        fa-quote-right="fa-quote-right"
                        fa-2x="fa-2x"
                        text-muted="text-muted"
                        pull-right="pull-right"
                        mt-3="mt-3"
                        mb-3" aria-hidden="
                        true"="
                        true""="true"
                        ""></i>
                    <p class=" m-0 text-muted ">
                        Etiam sed iaculis libero, at euismod massain venenatis ligula.
                    </p>
                    <footer class="blockquote-footer small p-1">
                        <span class="small">John Doe
                            <cite class="font-weight-bold">COMPANY NAME</cite>
                        </span>
                    </footer>
                </blockquote>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-body">
                <blockquote
                    class=" ">

                            <i class="
                    fa="fa"
                    fa-quote-right="fa-quote-right"
                    fa-2x="fa-2x"
                    text-muted="text-muted"
                    pull-right="pull-right"
                    mt-3="mt-3"
                    mb-3" aria-hidden="
                    true"="
                    true""="true"
                    ""></i>
                <p class=" m-0 text-muted ">
                    Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero.
                    Aenean sit amet felis dolor, in sagittis nisi. Etiam sed iaculis libero, at
                    euismod massain venenatis ligula.
                </p>
                <footer class="blockquote-footer small p-1">
                    <span class="small">John Doe
                        <cite class="font-weight-bold">COMPANY NAME</cite>
                    </span>
                </footer>
            </blockquote>
        </div>
    </div>
</div>
</div>
</div>
</div>
</section>
<div class="container mt-4 mb-4">
<div class="col-md-8">
<h1 class="text-center">Frequently asked questions(FAQ)</h1>
<div id="accordion" class="accordion">
<div class="card">
<div class="card-header" id="headingOne">
    <h5 class="mb-0">
        <button
            class="btn btn-link"
            data-toggle="collapse"
            data-target="#collapseOne"
            aria-expanded="true"
            aria-controls="collapseOne">
            Esimene küsimus?
        </button>
    </h5>
</div>
<div
    id="collapseOne"
    class="collapse show"
    aria-labelledby="headingOne"
    data-parent="#accordion">
    <div class="card-body">
        Vastus
    </div>
</div>
</div>
<div class="card">
<div class="card-header" id="headingTwo">
    <h5 class="mb-0">
        <button
            class="btn btn-link collapsed"
            data-toggle="collapse"
            data-target="#collapseTwo"
            aria-expanded="false"
            aria-controls="collapseTwo">
            Teine küsimus?
        </button>
    </h5>
</div>
<div
    id="collapseTwo"
    class="collapse"
    aria-labelledby="headingTwo"
    data-parent="#accordion">
    <div class="card-body">
        Vastus2
    </div>
</div>
</div>
<div class="card">
<div class="card-header" id="headingThree">
    <h5 class="mb-0">
        <button
            class="btn btn-link collapsed"
            data-toggle="collapse"
            data-target="#collapseThree"
            aria-expanded="false"
            aria-controls="collapseThree">
            Kolmas küsimus?
        </button>
    </h5>
</div>
<div
    id="collapseThree"
    class="collapse"
    aria-labelledby="headingThree"
    data-parent="#accordion">
    <div class="card-body">
        Vastus3
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<footer class="bg-light py-3">
<div class="container">
<p class="text-center">&copy; Erik Teppan
<?php echo date('Y'); ?></p>
</div>
</footer>
</body>
</html>