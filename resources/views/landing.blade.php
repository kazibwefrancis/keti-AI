@extends('layouts.app')

@section('content')
    <div class="page-bg"></div>
    <div class="page-wrap">
        <header class="topbar">
            <div class="brand">
                <div class="brand-mark">
                    <img src="https://i.pravatar.cc/64?img=47" alt="Keti AI" style="width:100%;height:100%;object-fit:cover;">
                </div>
                <div class="brand-name">Keti AI</div>
            </div>
            <nav class="pill-nav">
                <a class="pill-nav__link is-active" href="#">Home</a>
                <a class="pill-nav__link" href="/about">About</a>
                <a class="pill-nav__link" href="#">Contact</a>
                <a class="pill-nav__link" href="/platform">Platform</a>
                <a class="pill-nav__link" href="/publications">Publications</a>
            </nav>
        </header>

        <main class="hero">
            <section class="hero-visual">
                <div class="hero-media">
                    <img class="hero-image" src="{{ asset('assets/hero.png') }}" alt="Medical illustration">
                </div>
                <button class="scroll-hint" type="button" aria-label="Scroll">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M12 5v14M7 14l5 5 5-5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
                <div class="risk-card">
                    <div class="risk-card__header">
                        <div class="risk-card__label">Risk Score</div>
                        <svg class="risk-card__heart" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M12 21s-9-6.5-9-11a5 5 0 0 1 9-3 5 5 0 0 1 9 3c0 4.5-9 11-9 11z" />
                        </svg>
                    </div>
                    <div class="risk-card__value">0.05%</div>
                    <div class="risk-card__chart">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="risk-card__note">Normal Breast Dedicated</div>
                </div>
            </section>

            <section class="hero-content">
                <div class="badge">AI-Powered</div>
                <h1>Prediction of Breast Cancer Chemotherapy Resistance</h1>
                <p class="subtitle">Accurate . Confidence - Aware . Clinically Trusted</p>
                <div class="cta">
                    <a class="btn btn-primary" href="#">Explore Platform</a>
                    <a class="btn btn-ghost" href="#">Request Demo</a>
                </div>
                <div class="social-proof">
                    <div class="rating">
                        <span class="rating__score">5.0</span>
                        <div class="rating__stars">
                            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3.5l2.6 5.3 5.8.8-4.2 4.1 1 5.8-5.2-2.7-5.2 2.7 1-5.8-4.2-4.1 5.8-.8z" /></svg>
                            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3.5l2.6 5.3 5.8.8-4.2 4.1 1 5.8-5.2-2.7-5.2 2.7 1-5.8-4.2-4.1 5.8-.8z" /></svg>
                            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3.5l2.6 5.3 5.8.8-4.2 4.1 1 5.8-5.2-2.7-5.2 2.7 1-5.8-4.2-4.1 5.8-.8z" /></svg>
                            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3.5l2.6 5.3 5.8.8-4.2 4.1 1 5.8-5.2-2.7-5.2 2.7 1-5.8-4.2-4.1 5.8-.8z" /></svg>
                            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3.5l2.6 5.3 5.8.8-4.2 4.1 1 5.8-5.2-2.7-5.2 2.7 1-5.8-4.2-4.1 5.8-.8z" /></svg>
                        </div>
                    </div>
                    <div class="avatars">
                        <img class="avatar" src="https://i.pravatar.cc/64?img=47" alt="">
                        <img class="avatar" src="https://i.pravatar.cc/64?img=32" alt="">
                        <img class="avatar" src="https://i.pravatar.cc/64?img=12" alt="">
                        <img class="avatar" src="https://i.pravatar.cc/64?img=25" alt="">
                    </div>
                    <div class="proof-text">
                        Advanced AI prediction diagnosis for accurate treatment plans tailored to patients
                    </div>
                </div>
            </section>
        </main>

    </div>
@endsection
