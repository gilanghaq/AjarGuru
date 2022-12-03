@extends('layouts.app')

@section('content')

<div class="container">
    <!-- Jumbotron -->
    <section>
        <div class="pb-3 mb-4 bg-white rounded-3">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="mb-5 mb-lg-0 text-center text-lg-start">
                            <h1 class="display-5 fw-bold">AjarGuru</h1>
                            <p class="col-md-8 fs-4">
                                Platform penyedia bahan ajar dan tata cara mengajar untuk guru Pendidikan Anak Usia Dini dan Taman Kanak-Kanak.
                            </p>
                            <button class="btn btn-primary btn-lg" type="button">Akses Bahan Ajar</button>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="masthead-device-mockup">
                            <img src="/img/guru.png" class="card-img-top" alt="Guru">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Card -->
    <section>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="/img/belajar alfabet.jpg" class="card-img-top" alt="Belajar Alfabet">
                    <div class="card-body">
                        <h5 class="card-title">Belajar Alfabet</h5>
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium nostrum quisquam sequi inventore veritatis repellat harum suscipit placeat similique tempore.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="/img/belajar hijaiyah.jpg" class="card-img-top" alt="Belajar Hijaiyah">
                    <div class="card-body">
                        <h5 class="card-title">Belajar Hijaiyah</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi maiores tenetur provident laborum, officia at illum.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing -->
    <section>
        <section class="pricing py-5">
            <div class="container">
                <div class="row">
                    <!-- Free Tier -->
                    <div class="col-lg-4">
                        <div class="card mb-5 mb-lg-0">
                            <div class="card-body">
                                <h5 class="card-title text-muted text-uppercase text-center">Free</h5>
                                <h6 class="card-price text-center">$0<span class="period">/month</span></h6>
                                <hr>
                                <ul class="fa-ul">
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Single User</li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>5GB Storage</li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Public Projects</li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Community Access</li>
                                    <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Unlimited
                                        Private Projects</li>
                                    <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Dedicated
                                        Phone Support</li>
                                    <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Free Subdomain
                                    </li>
                                    <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Monthly Status
                                        Reports</li>
                                </ul>
                                <div class="d-grid">
                                    <a href="#" class="btn btn-primary text-uppercase">Button</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Plus Tier -->
                    <div class="col-lg-4">
                        <div class="card mb-5 mb-lg-0">
                            <div class="card-body">
                                <h5 class="card-title text-muted text-uppercase text-center">Plus</h5>
                                <h6 class="card-price text-center">$9<span class="period">/month</span></h6>
                                <hr>
                                <ul class="fa-ul">
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>5 Users</strong></li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>50GB Storage</li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Public Projects</li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Community Access</li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Private Projects</li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Dedicated Phone Support</li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Free Subdomain</li>
                                    <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Monthly Status
                                        Reports</li>
                                </ul>
                                <div class="d-grid">
                                    <a href="#" class="btn btn-primary text-uppercase">Button</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Pro Tier -->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title text-muted text-uppercase text-center">Pro</h5>
                                <h6 class="card-price text-center">$49<span class="period">/month</span></h6>
                                <hr>
                                <ul class="fa-ul">
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>Unlimited Users</strong>
                                    </li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>150GB Storage</li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Public Projects</li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Community Access</li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Private Projects</li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Dedicated Phone Support</li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>Unlimited</strong> Free
                                        Subdomains</li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Monthly Status Reports</li>
                                </ul>
                                <div class="d-grid">
                                    <a href="#" class="btn btn-primary text-uppercase">Button</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <link href="/css/pricingstyle.css" rel="stylesheet">
        </section>
    </section>


</div>

@endsection