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
            <a class="pill-nav__link" href="/about">About</a>
            <a class="pill-nav__link" href="/platform">Platform</a>
            <a class="pill-nav__link is-active" href="/publications">Publications</a>
        </nav>
    </header>

    <main class="pub-page">

        {{-- ── Hero: Precision Oncology Decision Support ──────── --}}
        <section class="pub-hero">
            <div class="pub-hero__inner">
                <div class="pub-hero__image">
                    <img src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?w=480&h=560&fit=crop&crop=face" alt="Dr. Shamim Nabuuma Kaliisa" class="pub-hero__photo">
                </div>
                <div class="pub-hero__content">
                    <h1 class="pub-hero__title">Precision Oncology<br>Decision Support</h1>
                    <p class="pub-hero__sub">Quantifying Chemotherapy resistance for Informed Clinical Action</p>
                    <blockquote class="pub-hero__quote">
                        "Our platform doesn't tell doctors what to do. It delivers a data driven second opinion quantifying the probability of success or failure so clinicians can confidently decide whether to continue, adjust or monitor treatment."
                    </blockquote>
                    <div class="pub-hero__stats">
                        <div class="pub-stat">
                            <span class="pub-stat__value pub-stat__value--green">70%</span>
                            <span class="pub-stat__label">Resistance</span>
                        </div>
                        <div class="pub-stat">
                            <span class="pub-stat__value pub-stat__value--orange">12%</span>
                            <span class="pub-stat__label">Survival</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- ── Global Challenge ───────────────────────────────── --}}
        <section class="pub-challenge">
            <div class="pub-section-inner pub-section-inner--narrow">
                <h2 class="pub-section-title">The Global Challenge</h2>
                <p class="pub-section-body">
                    Across 2.3 million annual global cases, drug resistance remains the primary cause of treatment failure. Ineffective therapy adds up to <strong>$5,320/month</strong> in toxicity management costs.
                </p>
            </div>
        </section>

        {{-- ── Regional Impact ─────────────────────────────────── --}}
        <section class="pub-regional">
            <div class="pub-section-inner">
                <h2 class="pub-section-title">Regional Impact</h2>
                <div class="pub-regions">

                    <div class="pub-region">
                        <div class="pub-region__text">
                            <h3 class="pub-region__name pub-region__name--africa">Africa</h3>
                            <p class="pub-region__desc">High mortality with a <strong>33%, 7 year survival</strong> in Sub-Saharan regions. 77% of patients face catastrophic health expenditure due to <em>"trial and error"</em> costs.</p>
                        </div>
                        <div class="pub-region__map">
                            <img src="{{ asset('assets/africa-map.png') }}" alt="Africa map" style="width:180px;height:auto;object-fit:contain;flex-shrink:0;">
                        </div>
                    </div>

                    <div class="pub-region pub-region--reverse">
                        <div class="pub-region__map">
                            <img src="{{ asset('assets/middle-east-map.png') }}" alt="Middle East map" style="width:180px;height:auto;object-fit:contain;flex-shrink:0;">
                        </div>
                        <div class="pub-region__text">
                            <h3 class="pub-region__name pub-region__name--mideast">Middle East</h3>
                            <p class="pub-region__desc">Rising incidence in younger populations requires precise first line selection to preserve long term productivity and family stability.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        {{-- ── Core Platform Values ────────────────────────────── --}}
        <section class="pub-values">
            <div class="pub-section-inner">
                <h2 class="pub-section-title">Core Platform Values</h2>
                <div class="pub-values__list">
                    <div class="pub-value">
                        <span class="pub-value__label">Quantified Probability:</span>
                        <span class="pub-value__text">Replaces binary predictions with statistical confidence scores allowing oncologists to move beyond <em>"gut feelings"</em> to data backed decisions.</span>
                    </div>
                    <div class="pub-value">
                        <span class="pub-value__label">Clinical Co-pilot:</span>
                        <span class="pub-value__text">Enhances physician autonomy by providing the evidence needed for hospital tumor boards and insurance authorizations.</span>
                    </div>
                    <div class="pub-value">
                        <span class="pub-value__label">Toxicity Avoidance:</span>
                        <span class="pub-value__text">Identifies high resistance risks early, sparing patients from the physical toll of ineffective, highly toxic regimens.</span>
                    </div>
                    <div class="pub-value">
                        <span class="pub-value__label">Treatment Agnostic:</span>
                        <span class="pub-value__text">Evaluates standard and emerging protocols without bias, ensuring the patient's first choice is their best choice.</span>
                    </div>
                </div>
            </div>
        </section>

        {{-- ── Research Publications ───────────────────────────── --}}
        <section class="pub-papers">
            <div class="pub-section-inner">
                <h2 class="pub-section-title">Research Publications</h2>
                <p class="pub-section-subtitle">Peer-reviewed work underpinning the Keti AI platform</p>

                {{-- Paper 1 --}}
                <div class="doc-wrap">
                    <div class="doc-sheet">
                        <h1 class="doc-h1">INTERPRETABLE AI FOR CHEMOTHERAPY RESPONSE<br>IN BREAST CANCER: AN AFRICAN PERSPECTIVE</h1>
                        <p class="doc-author">Dr. Shamim Nabuuma Kaliisa</p>

                        <p class="doc-p">Breast cancer has emerged as the most frequently diagnosed malignancy among women across the African continent, presenting a clinical burden that is both substantial and growing. Current estimates indicate that Africa records over 190,000 new cases annually, characterized by mortality rates that remain disproportionately high relative to incidence (Sung et al, 2021). Within sub-Saharan Africa, the mortality to incidence ratio often exceeds 0.5, signifying that more than half of diagnosed patients succumb to the disease, a stark disparity compared to high income regions (Bay et al, 2018).</p>

                        <p class="doc-p">This crisis is compounded by the fact that over 60% of patients present with advanced disease stages III or IV (Jedy-Agba et al, 2016). In these resource constrained environments, chemotherapy often serves as the primary systematic intervention. However, pathological complete response rates remain highly variable, ranging from 10% to 40% (Cortazar et al, 2014; Spring et al, 2020). The lack of access to genomic profiling, currently available in fewer than 15% of regional oncology centers, leaves clinicians without the tools necessary to predict treatment sensitivity effectively (WHO 2020, Vanderpuye et al, 2017).</p>

                        <h2 class="doc-h2">Background and Rationale</h2>
                        <p class="doc-p">To address these systematic gaps, we have developed an interpretable artificial intelligence model specifically tailored to African healthcare realities. Unlike traditional "black box" algorithms our approach focuses on transparency by integrating routinely available clinical variables including tumor stage, histological subtype and receptor status with imaging features derived from standard diagnostic scans. The system generates a quantified probability of tumor shrinkage and treatment resistance, providing a clear breakdown of the clinical drivers behind each prediction.</p>

                        <p class="doc-p">Interpretability is not merely a technical preference but a clinical necessity in environments with high patient volumes and limited diagnostic infrastructure. By ensuring that AI outputs can be understood and validated by oncologists in real time, we align our technology with global ethical standards for healthcare (WHO 2021; Topol, 2019). This transparency fosters the trust required for clinical adoption supports rigorous evidence based decision making (Holzinger et al, 2017).</p>

                        <p class="doc-p">Our long term objective is to bridge the global oncology divide by creating precision medical tools adapted for African populations. By focussing on robustness in low data environments and diverse genetic backgrounds, we aim to improve treatment efficiency and patient outcomes. Identifying non-responders early allows for the optimization of limited chemotherapy resources and the timely consideration of alternative referral pathways, ultimately working toward a more equitable future in global cancer care.</p>

                        <h2 class="doc-h2">Selected References</h2>
                        <ul class="doc-refs">
                            <li>Bray, F et al (2018). Global cancer statistics 2018. <em>CA A Cancer Journal for Clinicians.</em></li>
                            <li>Cortazar, P et al (2014) Pathological complete response in breast cancer. CTNeoBC pooled analysis. <em>Lancet Oncology.</em></li>
                            <li>Holzinger, A et al (2017) Explainable AI in medicine. <em>Knowledge Based Systems.</em></li>
                            <li>Jedy Agba, E et al (2016) Cancer incidence in sub-Saharan Africa. <em>Lancet Global Health.</em></li>
                            <li>Spring, L.M et al (2020) pCR and survival outcomes in breast cancer. <em>Clinical Cancer Research.</em></li>
                            <li>Sung, H et al (2021) Global Cancer Statistics 2020. <em>CA: A Cancer Journal for Clinicians.</em></li>
                            <li>Topol, E (2019) High performance medicine and AI in healthcare. <em>Nature Medicine.</em></li>
                            <li>Vanderpuye, V et al (2017) Cancer care in Africa, challenges and opportunities. <em>The Lancet Oncology.</em></li>
                            <li>WHO (2021). Ethics and governance of artificial intelligence for health, World Health Organization.</li>
                        </ul>
                        <button class="doc-request-btn" data-title="INTERPRETABLE AI FOR CHEMOTHERAPY RESPONSE IN BREAST CANCER: AN AFRICAN PERSPECTIVE">Request Full Publication</button>
                    </div>
                </div>

                {{-- Paper 2 --}}
                <div class="doc-wrap">
                    <div class="doc-sheet">
                        <h1 class="doc-h1">INVESTIGATING CHEMOTHERAPY RESISTANCE<br>IN BREAST CANCER</h1>
                        <p class="doc-author">Dr. Shamim Nabuuma Kaliisa, MRes Data Science for Health</p>

                        <p class="doc-p">As a researcher, I have examined numerous medical publications to understand the systematic failure of breast cancer to respond to therapeutic interventions. My background in a Master of Research in patient datasets<sup>5</sup>. My findings indicate that chemotherapy resistance is far from a singular mechanical failure, rather it is a sophisticated, multi-layered defensive strategy orchestrated by the malignancy itself<sup>5,6</sup>.</p>

                        <p class="doc-p">Current data suggests that between 30% and 50% of patients will experience treatment resistance during their clinical journey<sup>5</sup>. This phenomenon stems from the inherent heterogeneity of tumors, which contain diverse cell populations. While standard chemotherapy may successfully eliminate the majority of malignant cells, specialized resistant populations survive and initiate tumor regrowth — a process fueled by both pre-existing intrinsic traits and treatment induced acquired factors <sup>5,6</sup>. These cells employ molecular pumps, specifically from the ATP binding casette (ABC) transporter family including P-gp and BCRP, to actively expel pharmaceutical agents from the intracellular environment before they can exert a therapeutic effect<sup>5,6</sup>. Furthermore, tumors produce intracellular enzymes such as glutathione S-transferase, that chemically neutralize drugs. Malignant cells may also alter specific molecular targets, such as <strong>&beta;-tubulin</strong> or utilize sophiscated DNA repair pathways to counteract chemotherapy induced damage<sup>5,6</sup>.</p>

                        <p class="doc-p">Beyond cellular mechanics, the tumor microenvironment serves as a critical sanctuary. Hypoxic conditions activate the HIF1&alpha; protein, which facilitates metabolic reprogramming and sustained drug resistance<sup>5,6</sup>. Additionally, specialized cancer stem cells, identified by CD44+/CD24- markers, remain dormant during active treatment to regenerate the tumor at a later stage<sup>5,6</sup>. Perhaps most strikingly, resistant cells utilize exosomes to transmit functional proteins and genetic material, effectively training surrounding cells to survive therapeutic pressure<sup>5,6</sup>. My research is dedicated to mapping these survival pathways to improve our ability to predict resistance and develop precision strategies to dismantle these biological defenses<sup>5</sup>.</p>

                        <h2 class="doc-h2">References</h2>
                        <ul class="doc-refs">
                            <li>Al-Hajji, M et al (2003) Prospective identification of tumorigenenic breast cancer cells. <em>PNAS.</em></li>
                            <li>Robey, R.W et al (2018) Revisiting the role of ABC transporters in multidrug resistant cancer. <em>Nature Reviews Cancer.</em></li>
                            <li>Zhang, Y et al (2024) Hypoxia-inducible factor in breast cancer: role and target. <em>Frontiers in Immunology.</em></li>
                            <li>Xiong, Y et al (2025) Emerging strategies to overcome resistance in breast cancer. <em>Cancers.</em></li>
                            <li>Research Analysis by Dr. Shamim Nabuuma Kaliisa (2026) Chil AI Lab &amp; Chil Femtech Center.</li>
                            <li>Scientific Facts: Chemotherapy Resistance in Breast Cancer Summary. Chil Group Precision Oncology Division.</li>
                        </ul>
                        <button class="doc-request-btn" data-title="INVESTIGATING CHEMOTHERAPY RESISTANCE IN BREAST CANCER">Request Full Publication</button>
                    </div>
                </div>

            </div>
        </section>

    </main>

    {{-- ── Publication Request Modal ──────────────────────── --}}
    <div id="pub-modal-overlay" class="pub-modal-overlay" aria-modal="true" role="dialog" hidden>
        <div class="pub-modal">
            <button class="pub-modal__close" id="pub-modal-close" aria-label="Close">&times;</button>
            <h2 class="pub-modal__pub-title" id="pub-modal-pub-title"></h2>
            <p class="pub-modal__desc">Enter your details below and we will send you access to the full publication.</p>

            <div id="pub-modal-success" class="pub-modal__success" hidden>
                Thank you! Your request has been received. We will be in touch shortly.
            </div>

            <form id="pub-modal-form" class="pub-modal__form" novalidate>
                <input type="hidden" id="pub-modal-pub-input" name="publication">
                <div class="pub-modal__field">
                    <label class="pub-modal__label" for="pub-modal-name">Full Name</label>
                    <input class="pub-modal__input" id="pub-modal-name" type="text" name="name" placeholder="Your full name" required>
                    <span class="pub-modal__error" id="pub-modal-name-err"></span>
                </div>
                <div class="pub-modal__field">
                    <label class="pub-modal__label" for="pub-modal-email">Email Address</label>
                    <input class="pub-modal__input" id="pub-modal-email" type="email" name="email" placeholder="you@example.com" required>
                    <span class="pub-modal__error" id="pub-modal-email-err"></span>
                </div>
                <button class="pub-modal__btn" type="submit" id="pub-modal-submit">Send Request</button>
            </form>
        </div>
    </div>

</div>

<style>
.doc-request-btn {
    display: inline-block;
    margin-top: 2rem;
    padding: 0.65rem 1.4rem;
    background: #16a34a;
    color: #fff;
    border: none;
    border-radius: 6px;
    font-size: 0.875rem;
    font-weight: 600;
    cursor: pointer;
    letter-spacing: 0.01em;
    transition: background 0.18s;
}
.doc-request-btn:hover { background: #15803d; }

.pub-modal-overlay {
    position: fixed;
    inset: 0;
    background: rgba(0,0,0,0.55);
    z-index: 9000;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 1rem;
}
.pub-modal-overlay[hidden] { display: none; }

.pub-modal {
    background: #fff;
    border-radius: 12px;
    padding: 2.5rem 2rem 2rem;
    width: 100%;
    max-width: 480px;
    position: relative;
    box-shadow: 0 20px 60px rgba(0,0,0,0.25);
}

.pub-modal__close {
    position: absolute;
    top: 1rem;
    right: 1rem;
    background: none;
    border: none;
    font-size: 1.5rem;
    line-height: 1;
    color: #6b7280;
    cursor: pointer;
    padding: 0.25rem 0.5rem;
    border-radius: 4px;
}
.pub-modal__close:hover { color: #111; background: #f3f4f6; }

.pub-modal__pub-title {
    font-size: 1rem;
    font-weight: 700;
    color: #111827;
    margin: 0 0 0.5rem;
    padding-right: 2rem;
    line-height: 1.4;
    text-transform: uppercase;
    letter-spacing: 0.02em;
}

.pub-modal__desc {
    font-size: 0.875rem;
    color: #6b7280;
    margin: 0 0 1.5rem;
}

.pub-modal__success {
    background: #f0fdf4;
    border: 1px solid #bbf7d0;
    color: #166534;
    border-radius: 6px;
    padding: 0.875rem 1rem;
    font-size: 0.9rem;
    margin-bottom: 0;
}
.pub-modal__success[hidden] { display: none; }

.pub-modal__form { display: flex; flex-direction: column; gap: 1rem; }

.pub-modal__field { display: flex; flex-direction: column; gap: 0.3rem; }

.pub-modal__label {
    font-size: 0.8125rem;
    font-weight: 600;
    color: #374151;
}

.pub-modal__input {
    border: 1px solid #d1d5db;
    border-radius: 6px;
    padding: 0.6rem 0.875rem;
    font-size: 0.9rem;
    color: #111827;
    outline: none;
    transition: border-color 0.15s;
}
.pub-modal__input:focus { border-color: #16a34a; box-shadow: 0 0 0 2px rgba(22,163,74,0.15); }
.pub-modal__input--error { border-color: #ef4444; }

.pub-modal__error {
    font-size: 0.78rem;
    color: #ef4444;
    min-height: 1em;
}

.pub-modal__btn {
    margin-top: 0.5rem;
    padding: 0.7rem 1.5rem;
    background: #16a34a;
    color: #fff;
    border: none;
    border-radius: 6px;
    font-size: 0.9rem;
    font-weight: 600;
    cursor: pointer;
    transition: background 0.18s;
    align-self: flex-start;
}
.pub-modal__btn:hover:not(:disabled) { background: #15803d; }
.pub-modal__btn:disabled { opacity: 0.6; cursor: not-allowed; }
</style>

<script>
(function () {
    const overlay  = document.getElementById('pub-modal-overlay');
    const closeBtn = document.getElementById('pub-modal-close');
    const pubTitle = document.getElementById('pub-modal-pub-title');
    const pubInput = document.getElementById('pub-modal-pub-input');
    const form     = document.getElementById('pub-modal-form');
    const success  = document.getElementById('pub-modal-success');
    const submitBtn = document.getElementById('pub-modal-submit');
    const nameInput  = document.getElementById('pub-modal-name');
    const emailInput = document.getElementById('pub-modal-email');
    const nameErr    = document.getElementById('pub-modal-name-err');
    const emailErr   = document.getElementById('pub-modal-email-err');

    function openModal(title) {
        pubTitle.textContent = title;
        pubInput.value = title;
        success.hidden = true;
        form.hidden = false;
        form.reset();
        nameErr.textContent = '';
        emailErr.textContent = '';
        overlay.hidden = false;
        nameInput.focus();
    }

    function closeModal() {
        overlay.hidden = true;
    }

    document.querySelectorAll('.doc-request-btn').forEach(function (btn) {
        btn.addEventListener('click', function () {
            openModal(btn.dataset.title);
        });
    });

    closeBtn.addEventListener('click', closeModal);

    overlay.addEventListener('click', function (e) {
        if (e.target === overlay) closeModal();
    });

    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && !overlay.hidden) closeModal();
    });

    form.addEventListener('submit', async function (e) {
        e.preventDefault();
        nameErr.textContent = '';
        emailErr.textContent = '';

        const name  = nameInput.value.trim();
        const email = emailInput.value.trim();
        const publication = pubInput.value;

        let valid = true;
        if (!name) { nameErr.textContent = 'Full name is required.'; valid = false; }
        if (!email) { emailErr.textContent = 'Email address is required.'; valid = false; }

        if (!valid) return;

        submitBtn.disabled = true;
        submitBtn.textContent = 'Sending…';

        try {
            const res = await fetch('/publications/request', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Accept': 'application/json',
                },
                body: JSON.stringify({ name, email, publication }),
            });

            const data = await res.json();

            if (res.ok) {
                form.hidden = true;
                success.hidden = false;
            } else {
                if (data.errors) {
                    if (data.errors.name)  nameErr.textContent = data.errors.name[0];
                    if (data.errors.email) emailErr.textContent = data.errors.email[0];
                } else {
                    nameErr.textContent = 'Something went wrong. Please try again.';
                }
            }
        } catch (err) {
            nameErr.textContent = 'Network error. Please try again.';
        } finally {
            submitBtn.disabled = false;
            submitBtn.textContent = 'Send Request';
        }
    });
})();
</script>

@endsection
