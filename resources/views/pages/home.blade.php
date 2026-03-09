<x-layouts.app>
<x-slot:title>People Access — HR Consultancy</x-slot>
<x-slot:description>We build the people systems that let growth-stage companies scale without fracturing.</x-slot>

{{-- ═══════════════════════════════════════════════════
     HERO
════════════════════════════════════════════════════ --}}
<section class="hero-section" style="
    position: relative;
    min-height: 100vh;
    min-height: 100dvh;

    background-image: url('/images/project_board.jpeg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;

    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    padding: 0 3rem 4rem;
    overflow: hidden;
">

    <!-- Gradient overlay -->
    <div style="
        position: absolute;
        inset: 0;
        background: linear-gradient(
            90deg,
            rgba(15,14,12,0.95) 0%,
            rgba(15,14,12,0.85) 30%,
            rgba(15,14,12,0.6) 55%,
            rgba(15,14,12,0.2) 75%,
            rgba(15,14,12,0) 100%
        );
        z-index: 1;
    "></div>


    <!-- Decorative PA -->
    <div class="deco-letters" style="
        position: absolute;
        top: 0.2em;
        right: -0.05em;
        font-family: 'Cormorant Garamond', serif;
        font-size: clamp(220px, 32vw, 420px);
        font-weight: 300;
        color: transparent;
        -webkit-text-stroke: 1px rgba(232,225,212,0.07);
        line-height: 0.85;
        pointer-events: none;
        user-select: none;
        letter-spacing: -0.02em;
        z-index: 1;
    ">PA</div>


    <!-- Content -->
    <div class="hero-content" style="
        max-width: 1200px;
        width: 100%;
        position: relative;
        z-index: 2;
    ">

        <!-- Eyebrow -->
        <p style="
            font-family: 'Jost', sans-serif;
            font-size: 0.7rem;
            font-weight: 400;
            letter-spacing: 0.22em;
            text-transform: uppercase;
            color: #e7e1da;
            margin-bottom: 1.5rem;
        ">People Systems for Growth</p>

        <!-- Accent line -->
        <div style="
            width: 48px;
            height: 1px;
            background-color: #39808d;
            margin-bottom: 2.5rem;
        "></div>

        <!-- Headline -->
        <h1 style="
            font-family: 'Cormorant Garamond', serif;
            font-size: clamp(3.2rem, 7vw, 6.5rem);
            font-weight: 300;
            font-style: italic;
            line-height: 1.0;
            color: #e8e1d4;
            margin-bottom: 2.5rem;
            max-width: 800px;
        ">
            We design<br>
            the architecture<br>
            <span style="color: #39808d;">that holds.</span>
        </h1>


        <!-- Body + CTA -->
        <div style="
            display: flex;
            align-items: flex-end;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 2rem;
        ">

            <p style="
                font-family: 'Jost', sans-serif;
                font-size: 0.9rem;
                font-weight: 300;
                color: #f0e0e0;
                max-width: 380px;
                line-height: 1.8;
            ">
                Structure should serve strategy. We build the people systems that let growth-stage companies scale without fracturing.
            </p>

            <div style="display: flex; gap: 0.75rem; flex-wrap: wrap;">

                <a href="{{ route('contact') }}" style="
                    display: inline-block;
                    font-family: 'Jost', sans-serif;
                    font-size: 0.75rem;
                    font-weight: 500;
                    letter-spacing: 0.12em;
                    text-transform: uppercase;
                    color: #e9e4d9;
                    background-color: #39808d;
                    padding: 0.85rem 1.75rem;
                    transition: background 0.2s;
                "
                onmouseover="this.style.background='#2d6b77'"
                onmouseout="this.style.background='#39808d'">
                    Start Here
                </a>

                <a href="{{ route('work') }}" style="
                    display: inline-block;
                    font-family: 'Jost', sans-serif;
                    font-size: 0.75rem;
                    font-weight: 500;
                    letter-spacing: 0.12em;
                    text-transform: uppercase;
                    color: #e8e1d4;
                    background: transparent;
                    border: 1px solid rgba(232,225,212,0.25);
                    padding: 0.85rem 1.75rem;
                    transition: border-color 0.2s;
                "
                onmouseover="this.style.borderColor='rgba(232,225,212,0.6)'"
                onmouseout="this.style.borderColor='rgba(232,225,212,0.25)'">
                    The Work
                </a>

            </div>
        </div>


        <!-- Scroll indicator -->
        <div style="position: absolute; bottom: -3rem; right: 0;">
            <p style="
                font-family: 'Jost', sans-serif;
                font-size: 0.65rem;
                letter-spacing: 0.2em;
                text-transform: uppercase;
                color: #2a2724;
            ">
                Scroll
            </p>
        </div>

    </div>
</section>

{{-- ═══════════════════════════════════════════════════
     WHAT BREAKS — light background
════════════════════════════════════════════════════ --}}
<section style="background-color: #f4efe6; padding: 6rem 3rem;">
    <div style="max-width: 1200px; margin: 0 auto;">
        <div style="
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 5rem;
            align-items: center;
        " class="what-breaks-grid">

            {{-- Left --}}
            <div>
                <p style="font-family:'Jost',sans-serif; font-size:0.7rem; letter-spacing:0.22em; text-transform:uppercase; color:#39808d; margin-bottom:2rem;">
                    The Problem
                </p>
                <h2 style="
                    font-family:'Cormorant Garamond',serif;
                    font-size:clamp(2.4rem,5vw,4rem);
                    font-weight:300;
                    font-style:italic;
                    color:#1a1815;
                    line-height:1.05;
                    margin-bottom:2rem;
                ">
                    What breaks<br>when you scale?
                </h2>
                <p style="font-family:'Jost',sans-serif; font-size:0.9rem; font-weight:300; color:#7a7268; line-height:1.8; margin-bottom:1.25rem;">
                    People don't know what they own. Growth outpaces leadership capability. There's no clear line between good and great performance. What worked at 20 fails at 200.
                </p>
                <p style="font-family:'Jost',sans-serif; font-size:0.9rem; font-weight:500; color:#1a1815; line-height:1.7;">
                    These fractures are predictable. The architecture to prevent them is designable.
                </p>
            </div>

            {{-- Right — image with offset frame --}}
            <div class="offset-frame" style="position: relative; padding: 1.5rem 0 0 1.5rem;">
                <div class="offset-frame-border" style="
                    position: absolute;
                    top: 0;
                    left: 0;
                    right: 1.5rem;
                    bottom: 1.5rem;
                    border: 1px solid #ddd5c8;
                    pointer-events: none;
                "></div>
                <img
                    src="{{ asset('images/many_looking.jpeg') }}"
                    alt="Project board"
                    class="work-image"
                    style="
                        display: block;
                        width: 100%;
                        height: 420px;
                        object-fit: cover;
                        object-position: center;
                        position: relative;
                        z-index: 1;
                    "
                />
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════
     SERVICES
════════════════════════════════════════════════════ --}}
<section style="background-color: #0f0e0c; padding: 6rem 3rem;">
    <div style="max-width: 1200px; margin: 0 auto;">

        {{-- Section header --}}
        <div style="
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            margin-bottom: 4rem;
            align-items: end;
        " class="services-header-grid">
            <div>
                <p style="font-family:'Jost',sans-serif; font-size:0.7rem; letter-spacing:0.22em; text-transform:uppercase; color:#39808d; margin-bottom:1.5rem;">
                    What We Build
                </p>
                <h2 style="
                    font-family:'Cormorant Garamond',serif;
                    font-size:clamp(2rem,4.5vw,3.5rem);
                    font-weight:300;
                    font-style:italic;
                    color:#e8e1d4;
                    line-height:1.05;
                ">
                    Architecture for<br>scaling organizations
                </h2>
            </div>
            <div style="padding-bottom: 0.5rem;">
                <p style="font-family:'Jost',sans-serif; font-size:0.9rem; font-weight:300; color:#7a7268; line-height:1.8;">
                    Eight core pillars. Each one designed to support the others. Together, they form the infrastructure your organization needs to grow without breaking.
                </p>
            </div>
        </div>

        {{-- Service rows --}}
        @php
        $services = [
            ['01', 'Organizational Design',   'We map how your company should be structured to execute its strategy — roles, reporting lines, decision rights, and team architecture.'],
            ['02', 'Performance Systems',      'We build performance management frameworks that are honest, fair, and actually used — not filed and forgotten.'],
            ['03', 'People Process Design',    'From onboarding to offboarding, we design the processes that shape how people experience working at your company.'],
            ['04', 'Leadership Architecture',  'We define what leadership looks like at each level of your organisation and build the pathways to develop it.'],
            ['05', 'People Planning',          'We help you anticipate your talent needs before they become urgent — headcount planning, capability mapping, succession.'],
            ['06', 'HR Governance',            'Clear policies and controls to ensure compliance, consistency, and people risk mitigation.'],
            ['07', 'People Risk Mitigation',   'We identify and address the people-related risks that could derail your growth — culture, key-person dependency, attrition.'],
            ['08', 'Strategic Hiring',         'We build the hiring infrastructure that lets you attract and select the right people, consistently, at pace.'],
        ];
        @endphp

        <div x-data="{ open: null }">
            @foreach($services as $i => $s)
            <div
                style="border-top: 1px solid #2a2724; cursor: pointer;"
                @click="open = (open === {{ $i }}) ? null : {{ $i }}"
                x-data="{ hovered: false }"
                @mouseenter="hovered = true"
                @mouseleave="hovered = false"
            >
                <div class="service-row-inner" style="display:flex; align-items:center; justify-content:space-between; padding:1.6rem 0; gap:1rem;">
                    <div style="display:flex; align-items:center; gap:3rem; flex:1;" class="service-row-inner">
                        <span style="
                            font-family:'Jost',sans-serif;
                            font-size:0.7rem;
                            letter-spacing:0.12em;
                            color:#39808d;
                            min-width:24px;
                        ">{{ $s[0] }}</span>
                        <h3 style="
                            font-family:'Cormorant Garamond',serif;
                            font-size:clamp(1.25rem,2.2vw,1.65rem);
                            font-weight:400;
                            font-style:normal;
                            line-height:1.2;
                            transition:color 0.2s;
                        "
                        :style="(open === {{ $i }} || hovered) ? 'color:#e8e1d4' : 'color:#a09488'"
                        >{{ $s[1] }}</h3>
                    </div>
                    <span style="font-size:1.1rem; transition:all 0.3s; opacity:0;"
                        :style="(open === {{ $i }} || hovered)
                            ? 'color:#39808d; opacity:1; transform:rotate(0deg)'
                            : 'color:#39808d; opacity:0; transform:rotate(-45deg)'"
                    >→</span>
                </div>
                <div
                    x-show="open === {{ $i }}"
                    x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100"
                    class="service-expanded-text"
                    style="padding:0 0 1.5rem 5.5rem;"
                >
                    <p style="font-family:'Jost',sans-serif; font-size:0.88rem; font-weight:300; color:#7a7268; line-height:1.85; max-width:560px;">
                        {{ $s[2] }}
                    </p>
                </div>
            </div>
            @endforeach
            <div style="border-top: 1px solid #2a2724;"></div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════
     COPPER BAND
════════════════════════════════════════════════════ --}}
<section style="background-color: #39808d; padding: 5rem 3rem; position: relative; overflow: hidden;">

    {{-- Ghost C watermark --}}
    <div class="deco-letters" style="
        position:absolute;
        right:-0.1em;
        top:50%;
        transform:translateY(-50%);
        font-family:'Cormorant Garamond',serif;
        font-size:clamp(200px,28vw,360px);
        font-weight:300;
        font-style:italic;
        color:transparent;
        -webkit-text-stroke:1px rgba(15,14,12,0.12);
        line-height:1;
        pointer-events:none;
        user-select:none;
    ">C</div>

    <div style="max-width:1200px; margin:0 auto; position:relative; z-index:2;">
        <h2 style="
            font-family:'Cormorant Garamond',serif;
            font-size:clamp(2.5rem,6vw,5rem);
            font-weight:300;
            font-style:italic;
            color:#ffffff;
            line-height:1.0;
            margin-bottom:1.5rem;
            max-width:700px;
        ">
            Structure for sustainable scale
        </h2>

        <p style="font-family:'Jost',sans-serif; font-size:0.88rem; font-weight:300; color:rgb(255, 255, 255); line-height:1.8; max-width:480px; margin-bottom:2.5rem;">
            People systems are infrastructure. Infrastructure determines sustainability. Every company scales differently. Every system we design reflects that.
        </p>

        {{-- Pill tags --}}
        <div style="display:flex; gap:0.75rem; flex-wrap:wrap;">
            @foreach(['Organizational Architecture', 'Performance Frameworks', 'Leadership Systems'] as $tag)
            <span style="
                font-family:'Jost',sans-serif;
                font-size:0.65rem;
                font-weight:500;
                letter-spacing:0.14em;
                text-transform:uppercase;
                color:#0f0e0c;
                border:1px solid rgba(15,14,12,0.35);
                padding:0.5rem 1rem;
            ">{{ $tag }}</span>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════
     CASE STUDIES
════════════════════════════════════════════════════ --}}
@php
$cases = [
    [
        'tab'    => 'Health-Tech',
        'sub'    => '150+ Employees',
        'label'  => 'Multi-Country · Rapid Growth',
        'body'   => 'Designed and scaled the foundational people systems of a multi-country health technology company over six years — embedding grading, reward, performance, governance, and capability architecture to sustain complex, cross-border growth.',
        'detail' => 'Health-Tech',
        'image'  => 'board_room.jpeg',
    ],
    [
        'tab'    => 'Event & Hosting',
        'sub'    => '40+ Employees',
        'label'  => 'Formalising People Infrastructure | Multi-Facility Operations',
        'body'   => 'Built and formalised the end-to-end people architecture — establishing compliant policy frameworks, contracting, compliance, structured recruitment processes, grading and performance systems, ongoing workforce management, and HRIS implementation to institutionalise the organization’s people operations.',
        'detail' => 'Event & Hosting',
        'image'  => 'couch_talk.jpeg',
    ],
    [
        'tab'    => 'Advisory Firm',
        'sub'    => '20+ Employees',
        'label'  => 'Founder-focused Advisory | Multi-Country',
        'body'   => 'Delivered sustained people support including remuneration design and recalibration, performance framework refinement, intentional policy development, and advisory on sensitive people matters; working closely with the founder to align people systems with strategic ambition',
        'detail' => 'Advisory Firm',
        'image'  => 'one_on_one.jpeg',
    ],
    [
        'tab'    => 'Creative Co',
        'sub'    => '10+ Employees',
        'label'  => 'Structuring Expansion | Multi-Country',
        'body'   => 'Designing and institutionalising the operating architecture across multiple business- clarifying reporting, defining scope, aligning capability to growth priorities, and establishing focused 3–12 month execution discipline to transition the organization from founder-driven to structured, scalable growth.',
        'detail' => 'Creative Co',
        'image'  => 'table_tab.jpeg',
    ],
];
@endphp

{{-- Intro header — light background --}}
<section style="background-color:#f4efe6; padding:6rem 3rem 4rem;">
    <div style="max-width:1200px; margin:0 auto;">
        <div style="display:grid; grid-template-columns:1fr 1fr; gap:4rem; align-items:end;" class="cases-header-grid">
            <div>
                <p style="font-family:'Jost',sans-serif; font-size:0.7rem; letter-spacing:0.22em; text-transform:uppercase; color:#39808d; margin-bottom:1.5rem;">
                    Client Work
                </p>
                <h2 style="
                    font-family:'Cormorant Garamond',serif;
                    font-size:clamp(2.2rem,5vw,4rem);
                    font-weight:300;
                    font-style:italic;
                    color:#1a1815;
                    line-height:1.05;
                ">
                    Trusted by<br>Growth Leaders
                </h2>
            </div>
            <div style="padding-bottom:0.5rem;">
                <p style="font-family:'Jost',sans-serif; font-size:0.88rem; font-weight:300; color:#7a7268; line-height:1.8;">
                    Founders and executives partnering with People Access to architect scalable, resilient organizations.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- Case image + tabs --}}
<div x-data="{ active: 0 }">

    @foreach($cases as $i => $case)
    <div
        x-show="active === {{ $i }}"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        class="case-image-wrap"
        style="position:relative; height:520px; overflow:hidden;"
    >
        <img
            src="{{ asset('images/' . $case['image']) }}"
            alt="{{ $case['tab'] }}"
            style="width:100%; height:100%; object-fit:cover; object-position:center; display:block;"
        />
        <div style="position:absolute; inset:0; background:linear-gradient(to right, rgba(15,14,12,0.82) 0%, rgba(15,14,12,0.4) 55%, rgba(15,14,12,0.1) 100%);"></div>

        <div class="case-overlay-text" style="position:absolute; top:50%; left:0; transform:translateY(-50%); padding:0 3rem; max-width:620px;">
            <p style="font-family:'Jost',sans-serif; font-size:0.65rem; letter-spacing:0.2em; text-transform:uppercase; color:#b2dee6; margin-bottom:1.25rem;">
                {{ $case['label'] }}
            </p>
            <p style="
                font-family:'Cormorant Garamond',serif;
                font-size:clamp(1.3rem,2.8vw,2rem);
                font-weight:300;
                font-style:italic;
                color:#e8e1d4;
                line-height:1.55;
                margin-bottom:1.25rem;
            ">{{ $case['body'] }}</p>
            <p style="font-family:'Jost',sans-serif; font-size:0.78rem; font-weight:300; color:#a09488; letter-spacing:0.06em;">
                {{ $case['detail'] }}
            </p>
        </div>
    </div>
    @endforeach

    {{-- Tab bar — light background --}}
    <div class="case-tabs-bar" style="background-color:#f4efe6; display:grid; grid-template-columns:repeat(4,1fr);">
        @foreach($cases as $i => $case)
        <button
            @click="active = {{ $i }}"
            style="
                padding:1.5rem 1.25rem;
                background:none;
                border:none;
                border-bottom:2px solid transparent;
                border-right:{{ $i < 3 ? '1px solid #ddd5c8' : 'none' }};
                cursor:pointer;
                text-align:left;
                transition:border-bottom-color 0.2s;
            "
            :style="active === {{ $i }} ? 'border-bottom-color:#39808d;' : 'border-bottom-color:transparent;'"
        >
            <p style="font-family:'Jost',sans-serif; font-size:0.82rem; font-weight:500; margin-bottom:0.2rem;"
               :style="active === {{ $i }} ? 'color:#1a1815' : 'color:#7a7268'"
            >{{ $case['tab'] }}</p>
            <p style="font-family:'Jost',sans-serif; font-size:0.72rem; font-weight:300; color:#a09488;">
                {{ $case['sub'] }}
            </p>
        </button>
        @endforeach
    </div>
</div>

{{-- ═══════════════════════════════════════════════════
     WHO WE WORK WITH
════════════════════════════════════════════════════ --}}
<section style="background-color:#0f0e0c; padding:6rem 3rem;">
    <div style="max-width:1200px; margin:0 auto;">
        <div style="display:grid; grid-template-columns:1fr 1fr; gap:5rem; align-items:center;" class="who-grid">

            <div>
                <p style="font-family:'Jost',sans-serif; font-size:0.7rem; letter-spacing:0.22em; text-transform:uppercase; color:#39808d; margin-bottom:1.5rem;">
                    Our Clients
                </p>
                <h2 style="
                    font-family:'Cormorant Garamond',serif;
                    font-size:clamp(2.2rem,5vw,3.8rem);
                    font-weight:300;
                    font-style:italic;
                    color:#e8e1d4;
                    line-height:1.05;
                    margin-bottom:2rem;
                ">
                    Who we<br>work with
                </h2>
                <hr style="border:none; border-top:1px solid #2a2724; margin-bottom:2rem;" />
                <p style="font-family:'Jost',sans-serif; font-size:0.88rem; font-weight:300; color:#7a7268; line-height:1.85; margin-bottom:1rem;">
                    Growth-stage companies who recognize that what got them here won't get them there.
                </p>
                <p style="font-family:'Jost',sans-serif; font-size:0.88rem; font-weight:300; color:#7a7268; line-height:1.85; margin-bottom:1rem;">
                    Leadership teams willing to examine uncomfortable truths about their systems.
                </p>
                <p style="font-family:'Jost',sans-serif; font-size:0.88rem; font-weight:300; color:#7a7268; line-height:1.85; margin-bottom:2.5rem;">
                    Organizations ready to design for their next stage, not just solve for today.
                </p>
                <p style="font-family:'Jost',sans-serif; font-size:0.88rem; font-weight:500; color:#e8e1d4; margin-bottom:2.5rem;">
                    If that's you, we should talk.
                </p>
                <a href="{{ route('contact') }}" style="
                    display:inline-block;
                    font-family:'Jost',sans-serif;
                    font-size:0.75rem;
                    font-weight:500;
                    letter-spacing:0.12em;
                    text-transform:uppercase;
                    color:#e8e1d4;
                    border:1px solid rgba(232,225,212,0.25);
                    padding:0.85rem 1.75rem;
                    transition:all 0.2s;
                "
                onmouseover="this.style.borderColor='#39808d'; this.style.color='#39808d'"
                onmouseout="this.style.borderColor='rgba(232,225,212,0.25)'; this.style.color='#e8e1d4'"
                >Begin the conversation</a>
            </div>

            <div>
                <img
                    src="{{ asset('images/work_with.jpeg') }}"
                    alt="Who we work with"
                    class="work-image"
                    style="width:100%; height:500px; object-fit:cover; object-position:center; display:block;"
                />
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════
     FOOTER CTA
════════════════════════════════════════════════════ --}}
<section style="background-color:#ece8df; padding:5rem 3rem; border-top:1px solid #2a2724;">
    <div style="max-width:1200px; margin:0 auto;">
        <div style="display:grid; grid-template-columns:1fr 1fr; gap:4rem; align-items:center;" class="footer-cta-grid">

            <h2 style="
                font-family:'Cormorant Garamond',serif;
                font-size:clamp(2rem,4vw,3.2rem);
                font-weight:300;
                font-style:italic;
                color:#0c0c0b;
                line-height:1.1;
            ">Start your diagnostic conversation</h2>

            <div>
                <p style="font-family:'Jost',sans-serif; font-size:0.88rem; font-weight:300; color:#7a7268; line-height:1.8; margin-bottom:2rem;">
                    Connect with us to assess your people systems, address scaling risks, and strengthen your leadership structure.
                </p>
                <div style="display:flex; gap:0.75rem; flex-wrap:wrap;">
                    <a href="{{ route('contact') }}" style="
                        display:inline-block;
                        font-family:'Jost',sans-serif;
                        font-size:0.75rem;
                        font-weight:500;
                        letter-spacing:0.12em;
                        text-transform:uppercase;
                        color:#0f0e0c;
                        background:#39808d;
                        padding:0.85rem 1.75rem;
                        transition:background 0.2s;
                    "
                    onmouseover="this.style.background='#2d6b77'"
                    onmouseout="this.style.background='#39808d'"
                    >Begin</a>

                    <a href="{{ route('work') }}" style="
                        display:inline-block;
                        font-family:'Jost',sans-serif;
                        font-size:0.75rem;
                        font-weight:500;
                        letter-spacing:0.12em;
                        text-transform:uppercase;
                        color:#050505;
                        border:1px solid rgba(221, 166, 63, 0.644);
                        padding:0.85rem 1.75rem;
                        transition:border-color 0.2s;
                    "
                    onmouseover="this.style.borderColor='rgba(232,225,212,0.6)'"
                    onmouseout="this.style.borderColor='rgba(232,225,212,0.25)'"
                    >The Work</a>
                </div>
            </div>
        </div>
    </div>
</section>

</x-layouts.app>
