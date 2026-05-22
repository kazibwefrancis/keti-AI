@extends('layouts.app')

@section('content')
<div class="page-wrap">
    <header class="topbar">
        <div class="brand">
            <div class="brand-mark">
                <img src="{{ asset('assets/keti-logo.png') }}" alt="Keti AI">
            </div>
        </div>
        <nav class="pill-nav">
            <a class="pill-nav__link" href="/">Home</a>
            <a class="pill-nav__link is-active" href="/about">About</a>
            <a class="pill-nav__link" href="/platform">Platform</a>
            <a class="pill-nav__link" href="/publications">Publications</a>
        </nav>
    </header>

    <main class="about-page">

        <!-- ── About Section ─────────────────────────────────── -->
        <section class="about-section">
            <div class="about-inner">

                <div class="about-header">
                    <h1 class="about-title">About Keti AI Lab</h1>
                    <p class="about-lead">We are a multidisciplinary team of oncologists, AI researchers and data scientists building confidence-aware machine learning tools that clinicians can trust.</p>
                </div>

                <div class="about-stats">
                    <div class="stat-item">
                        <span class="stat-value">95%</span>
                        <span class="stat-label">Prediction Accuracy</span>
                    </div>
                    <div class="stat-item">
                        <div class="stat-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                                <polyline points="9 12 11 14 15 10"/>
                            </svg>
                        </div>
                        <span class="stat-label">Clinically validated</span>
                    </div>
                    <div class="stat-item">
                        <div class="stat-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                            </svg>
                        </div>
                        <span class="stat-label">Confidence awareness built in</span>
                    </div>
                </div>

                <div class="about-body">
                    <div class="about-pillars">
                        <div class="pillar">
                            <span class="pillar__label">Research Driven:</span>
                            <span class="pillar__text">Published in top tier oncology and ML journals with reproducible, open source methods.</span>
                        </div>
                        <div class="pillar">
                            <span class="pillar__label">Clinician First:</span>
                            <span class="pillar__text">Every model output is designed to fit into existing clinical workflows and MDT meetings.</span>
                        </div>
                        <div class="pillar">
                            <span class="pillar__label">Patient Safety:</span>
                            <span class="pillar__text">MHRA aligned development with uncertainty quantification to flag when the model is unsure.</span>
                        </div>
                    </div>

                    <div class="about-network" aria-hidden="true">
                        <div class="network-grid">
                            @for ($i = 0; $i < 12; $i++)
                                <div class="network-node"></div>
                            @endfor
                        </div>
                        <svg class="network-lines" viewBox="0 0 300 400" preserveAspectRatio="none">
                            <line x1="75" y1="33" x2="150" y2="100" stroke="#2563eb" stroke-width="1" stroke-opacity=".2"/>
                            <line x1="150" y1="100" x2="225" y2="33" stroke="#2563eb" stroke-width="1" stroke-opacity=".2"/>
                            <line x1="75" y1="133" x2="150" y2="100" stroke="#2563eb" stroke-width="1" stroke-opacity=".2"/>
                            <line x1="150" y1="100" x2="225" y2="166" stroke="#2563eb" stroke-width="1" stroke-opacity=".2"/>
                            <line x1="75" y1="233" x2="150" y2="200" stroke="#2563eb" stroke-width="1" stroke-opacity=".2"/>
                            <line x1="150" y1="200" x2="225" y2="266" stroke="#2563eb" stroke-width="1" stroke-opacity=".2"/>
                            <line x1="75" y1="333" x2="150" y2="300" stroke="#2563eb" stroke-width="1" stroke-opacity=".2"/>
                            <line x1="150" y1="200" x2="150" y2="300" stroke="#2563eb" stroke-width="1" stroke-opacity=".15"/>
                            <line x1="75" y1="33" x2="75" y2="133" stroke="#2563eb" stroke-width="1" stroke-opacity=".15"/>
                            <line x1="225" y1="33" x2="225" y2="166" stroke="#2563eb" stroke-width="1" stroke-opacity=".15"/>
                        </svg>
                    </div>
                </div>

            </div>
        </section>

        <!-- ── Get In Touch ──────────────────────────────────── -->
        <section class="contact-section" id="contact">
            <div class="contact-inner">

                <div class="contact-intro">
                    <span class="contact-eyebrow">GET IN TOUCH</span>
                    <h2 class="contact-title">Ready to Explore AI Powered Precision Oncology</h2>
                    <p class="contact-desc">Whether you are a clinician, researcher or healthcare partner, we would love to hear from you. Reach out to discuss collaboration, request a demo or learn more about our platform.</p>
                </div>

                @if(session('contact_sent'))
                    <div class="contact-success">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                        <div>
                            <strong>Message received!</strong> Check your inbox — we've sent you a link to the demo dashboard. Our team will follow up shortly.
                        </div>
                    </div>
                @else
                    <form class="contact-form" action="/about/contact" method="POST">
                        @csrf
                        <div class="form-field">
                            <label class="form-label" for="full_name">Full Name</label>
                            <input class="form-input @error('full_name') form-input--error @enderror"
                                   id="full_name" name="full_name" type="text"
                                   value="{{ old('full_name') }}" placeholder="e.g Mary Jude" required>
                            @error('full_name')<span class="form-error">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-field">
                            <label class="form-label" for="email">Email address</label>
                            <input class="form-input @error('email') form-input--error @enderror"
                                   id="email" name="email" type="email"
                                   value="{{ old('email') }}" placeholder="e.g mayjude54@gmail.com" required>
                            @error('email')<span class="form-error">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-field">
                            <label class="form-label" for="role">Your role</label>
                            <select class="form-input form-select @error('role') form-input--error @enderror"
                                    id="role" name="role" required>
                                <option value="" disabled {{ old('role') ? '' : 'selected' }}>Select your role</option>
                                <option value="Clinician / Oncologist"       {{ old('role') == 'Clinician / Oncologist'       ? 'selected' : '' }}>Clinician / Oncologist</option>
                                <option value="AI / ML Researcher"           {{ old('role') == 'AI / ML Researcher'           ? 'selected' : '' }}>AI / ML Researcher</option>
                                <option value="Data Scientist"               {{ old('role') == 'Data Scientist'               ? 'selected' : '' }}>Data Scientist</option>
                                <option value="Healthcare Partner"           {{ old('role') == 'Healthcare Partner'           ? 'selected' : '' }}>Healthcare Partner</option>
                                <option value="Other"                        {{ old('role') == 'Other'                        ? 'selected' : '' }}>Other</option>
                            </select>
                            @error('role')<span class="form-error">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-field">
                            <label class="form-label" for="message">Message</label>
                            <textarea class="form-input form-textarea" id="message" name="message"
                                      placeholder="Tell us about your interests in the platform" rows="4">{{ old('message') }}</textarea>
                        </div>
                        <button class="btn btn-primary form-submit" type="submit">Send</button>
                    </form>
                @endif

            </div>
        </section>

    </main>
</div>
@endsection
