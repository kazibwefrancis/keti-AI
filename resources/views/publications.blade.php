@extends('layouts.app')

@section('content')
<div class="page-wrap">
    <header class="topbar">
        <div class="brand">
            <div class="brand-mark">
                <img src="https://i.pravatar.cc/64?img=47" alt="Keti AI" style="width:100%;height:100%;object-fit:cover;">
            </div>
            <div class="brand-name">Keti AI</div>
        </div>
        <nav class="pill-nav">
            <a class="pill-nav__link" href="/">Home</a>
            <a class="pill-nav__link" href="/about">About</a>
            <a class="pill-nav__link" href="/about#contact">Contact</a>
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
                            {{-- Africa SVG --}}
                            <svg viewBox="0 0 220 260" fill="none" xmlns="http://www.w3.org/2000/svg" class="map-svg">
                                <path d="M60 10 C40 12 28 28 22 48 C14 72 18 95 24 115 C30 138 28 155 32 172 C38 196 52 218 70 238 C82 252 98 262 112 255 C128 248 136 228 148 210 C162 188 178 168 185 145 C192 120 188 92 178 70 C168 48 150 32 132 20 C118 10 98 6 80 8 Z" fill="#4ade80" stroke="#16a34a" stroke-width="2"/>
                                <circle cx="145" cy="55" r="12" fill="#f43f5e" stroke="white" stroke-width="2"/>
                                <circle cx="145" cy="55" r="6" fill="white"/>
                                <path d="M145 40 C145 40 133 52 133 58 C133 65 138.4 71 145 71 C151.6 71 157 65 157 58 C157 52 145 40 145 40Z" fill="#f43f5e" opacity=".3"/>
                            </svg>
                        </div>
                    </div>

                    <div class="pub-region pub-region--reverse">
                        <div class="pub-region__map">
                            {{-- Middle East SVG --}}
                            <svg viewBox="0 0 220 200" fill="none" xmlns="http://www.w3.org/2000/svg" class="map-svg">
                                <path d="M30 60 C28 42 40 28 58 22 C76 16 98 18 118 24 C138 30 158 38 172 52 C186 66 190 84 186 102 C182 120 168 134 152 144 C134 154 112 158 92 152 C70 146 50 132 38 114 C26 96 24 78 28 62 Z" fill="#86efac" stroke="#16a34a" stroke-width="2"/>
                                <circle cx="85" cy="75" r="14" fill="#f43f5e" stroke="white" stroke-width="2.5"/>
                                <circle cx="85" cy="75" r="7" fill="white"/>
                                <path d="M85 56 C85 56 70 70 70 78 C70 87 77 94 85 94 C93 94 100 87 100 78 C100 70 85 56 85 56Z" fill="#f43f5e" opacity=".3"/>
                                <circle cx="150" cy="55" r="5" fill="#f43f5e" stroke="white" stroke-width="1.5" opacity=".6"/>
                            </svg>
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
                    </div>
                </div>

            </div>
        </section>

    </main>
</div>
@endsection
