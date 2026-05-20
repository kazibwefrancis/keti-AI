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
            <a class="pill-nav__link" href="#">About</a>
            <a class="pill-nav__link" href="#">Contact</a>
            <a class="pill-nav__link is-active" href="/platform">Platform</a>
            <a class="pill-nav__link" href="/publications">Publications</a>
        </nav>
    </header>

    <main class="pf-page">

        <div class="pf-hero">
            <span class="badge">How It Works</span>
            <h1 class="pf-hero__title">Our AI-Powered Pipeline</h1>
            <p class="pf-hero__sub">Takes patient data from upload to actionable clinical insight in four streamlined steps</p>
        </div>

        <!-- Step 1 -->
        <div class="pf-step">
            <div class="pf-step__text">
                <span class="pf-step__num">01</span>
                <h2 class="pf-step__title">Upload Data</h2>
                <p class="pf-step__desc">Import MRI scans (DICOM), pathology slides (TIFF, SVS), and genomic data (VCF, CSV) through our secure, HIPAA-compliant portal. Simply drag and drop your files or browse to upload — and the rest is handled automatically by the pipeline.</p>
                <ul class="pf-step__bullets">
                    <li>Supports DICOM, TIFF, SVS, VCF, CSV formats</li>
                    <li>End-to-end encrypted and HIPAA compliant</li>
                    <li>Instant validation and sample data available</li>
                </ul>
            </div>
            <div class="pf-step__media">
                <img src="{{ asset('assets/dashboard1.png') }}" alt="Upload Medical Data portal" class="pf-step__img">
            </div>
        </div>

        <!-- Step 2 -->
        <div class="pf-step">
            <div class="pf-step__text">
                <span class="pf-step__num">02</span>
                <h2 class="pf-step__title">AI Neural Network Analysis</h2>
                <p class="pf-step__desc">Deep learning models analyze tumor morphology, genomic markers, and treatment response patterns in real time. Watch each processing stage complete — from MRI preprocessing and tumor region detection through to genomic marker analysis.</p>
                <ul class="pf-step__bullets">
                    <li>Preprocessing MRI data with DICOM parsing</li>
                    <li>Detecting tumor regions via convolutional networks</li>
                    <li>Analyzing cell morphology and genomic markers</li>
                </ul>
            </div>
            <div class="pf-step__media">
                <img src="{{ asset('assets/dashboard2.png') }}" alt="AI Analysis in Progress" class="pf-step__img">
            </div>
        </div>

        <!-- Step 3 -->
        <div class="pf-step">
            <div class="pf-step__text">
                <span class="pf-step__num">03</span>
                <h2 class="pf-step__title">Risk Prediction</h2>
                <p class="pf-step__desc">Confidence-aware predictions quantify chemotherapy resistance probability with uncertainty bounds — giving clinicians a precise, interpretable risk picture. Results include tumor classification, predicted staging, resistance risk, and 5-year survival estimates.</p>
                <ul class="pf-step__bullets">
                    <li>87% confidence malignancy detection</li>
                    <li>Chemotherapy resistance risk scoring</li>
                    <li>Survival rate projections with uncertainty bounds</li>
                </ul>
            </div>
            <div class="pf-step__media">
                <img src="{{ asset('assets/dashboard3.png') }}" alt="AI Analysis and Prediction results" class="pf-step__img">
            </div>
        </div>

        <!-- Step 4 -->
        <div class="pf-step">
            <div class="pf-step__text">
                <span class="pf-step__num">04</span>
                <h2 class="pf-step__title">Clinical Report</h2>
                <p class="pf-step__desc">Generate detailed reports covering molecular profiles (HER2, ER, PR, Ki-67), recommended treatment plans with efficacy predictions, patient next steps, and risk factors — all ready for multidisciplinary team review with one-click PDF download.</p>
                <ul class="pf-step__bullets">
                    <li>Full molecular subtype profiling</li>
                    <li>Primary and alternative treatment recommendations</li>
                    <li>Downloadable Full Clinical Report (PDF)</li>
                </ul>
            </div>
            <div class="pf-step__media">
                <img src="{{ asset('assets/dashboard4.png') }}" alt="Clinical Report with treatment plan" class="pf-step__img">
            </div>
        </div>

    </main>
</div>
@endsection
