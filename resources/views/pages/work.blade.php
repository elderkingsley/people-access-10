<x-layouts.app>
<x-slot:title>The Work — People Access</x-slot>
<x-slot:description>Systems that hold companies together. Strategic people systems for growth-stage organizations.</x-slot>

{{-- ═══════════════════════════════════════════════════
     HERO
════════════════════════════════════════════════════ --}}
<section class="hero-section" style="
    position: relative;
    min-height: 100vh;
    min-height: 100dvh;

    background-image: url('/images/work.jpeg');
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
            rgba(15,14,12,0.85) 0%,
            rgba(15,14,12,0.6) 55%,
            rgba(15,14,12,0.2) 75%,
            rgba(15,14,12,0) 100%
        );
        z-index: 1;
    "></div>
    {{-- TW decorative letters top right --}}
    <div class="deco-letters" style="
        position:absolute;
        top:0.2em;
        right:-0.05em;
        font-family:'Cormorant Garamond',serif;
        font-size:clamp(180px,28vw,380px);
        font-weight:300;
        color:transparent;
        -webkit-text-stroke:1px rgba(232,225,212,0.07);
        line-height:0.85;
        pointer-events:none;
        user-select:none;
        letter-spacing:-0.02em;
    ">TW</div>

    <div class="hero-content" style="max-width:1200px; width:100%; position:relative; z-index:2;">
        <p style="
            font-family:'Jost',sans-serif;
            font-size:0.7rem;
            font-weight:400;
            letter-spacing:0.22em;
            text-transform:uppercase;
            color:#ffffff;
            margin-bottom:1.5rem;
        ">The Work</p>

        {{-- Copper accent line --}}
        <div style="width: 48px; height: 1px; background-color: #39808d; margin-bottom: 2.5rem;"></div>

        <h1 style="
            font-family:'Cormorant Garamond',serif;
            font-size:clamp(3rem,7vw,6rem);
            font-weight:300;
            font-style:italic;
            line-height:1.0;
            color:#e8e1d4;
            max-width:700px;
            margin-bottom:2.5rem;
        ">
            Systems that<br>
            <span style="color:#39808d;">hold companies</span><br>
            together.
        </h1>

        {{-- Body + CTA row --}}
        <div style="display: flex; align-items: flex-end; justify-content: space-between; flex-wrap: wrap; gap: 2rem;">

            <p style="
                font-family: 'Jost', sans-serif;
                font-size: 0.9rem;
                font-weight: 300;
                color: #7a7268;
                max-width: 380px;
                line-height: 1.8;
            ">
                Structure should serve strategy. We build the people systems that let growth-stage companies scale without fracturing.
            </p>

            {{-- Two buttons --}}
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
                onmouseout="this.style.background='#39808d'"
                >Start Conversation</a>

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
                onmouseout="this.style.borderColor='rgba(232,225,212,0.25)'"
                >See Our Approach</a>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════
     EXPERTISE GRID
════════════════════════════════════════════════════ --}}
<section style="background-color:#f4efe6; padding:6rem 3rem;">
    <div style="max-width:1200px; margin:0 auto;">
        <div style="display:grid; grid-template-columns:1fr 2fr; gap:4rem; align-items:start;" class="expertise-outer-grid">

            {{-- Left label --}}
            <div style="padding-top:1rem;">
                <p style="font-family:'Jost',sans-serif; font-size:0.7rem; letter-spacing:0.22em; text-transform:uppercase; color:#39808d; margin-bottom:1.5rem;">
                    Our Expertise
                </p>
                <h2 style="
                    font-family:'Cormorant Garamond',serif;
                    font-size:clamp(2rem,4vw,3.2rem);
                    font-weight:300;
                    font-style:italic;
                    color:#1a1815;
                    line-height:1.05;
                    margin-bottom:1.5rem;
                ">Strategic People Systems</h2>
                <hr style="border:none; border-top:1px solid #ddd5c8; margin-bottom:1.5rem;" />
                <p style="font-family:'Jost',sans-serif; font-size:0.88rem; font-weight:300; color:#7a7268; line-height:1.8;">
                    Discover how we can work with you.
                </p>
            </div>

            {{-- Right 2x2 grid --}}
            @php
            $expertise = [
                ['image' => 'people_colaborating1.jpeg', 'label' => 'Organizational Design',    'title' => 'Crafting Scalable Structures'],
                ['image' => 'tab_in_hand.jpeg',          'label' => 'Performance Management',   'title' => 'Optimizing Team Efficiency'],
                ['image' => 'one_on_one.jpeg',           'label' => 'Leadership Architecture',  'title' => 'Hiring and Empowering Leaders'],
                ['image' => 'keyboard.jpeg',             'label' => 'Tech Empowered Processes', 'title' => 'Innovative Solutions'],
            ];
            @endphp

            <div style="display:grid; grid-template-columns:1fr 1fr; gap:2rem;" class="expertise-inner-grid">
                @foreach($expertise as $item)
                <div style="margin-bottom:1rem;">
                    <img
                        src="{{ asset('images/' . $item['image']) }}"
                        alt="{{ $item['label'] }}"
                        style="width:100%; height:200px; object-fit:cover; object-position:center; display:block; margin-bottom:0.85rem;"
                    />
                    <p style="
                        font-family:'Jost',sans-serif;
                        font-size:0.72rem;
                        font-weight:300;
                        color:#7a7268;
                        margin:0 0 0.4rem 0;
                        padding:0;
                        line-height:1.4;
                    ">{{ $item['label'] }}</p>
                    <p style="
                        font-family:'Jost',sans-serif;
                        font-size:1rem;
                        font-weight:700;
                        color:#1a1815;
                        margin:0;
                        padding:0;
                        line-height:1.3;
                    ">{{ $item['title'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>


{{-- ═══════════════════════════════════════════════════
     SECTION 1 — ORGANIZATIONAL DESIGN (light)
════════════════════════════════════════════════════ --}}
<section style="background-color:#f4efe6; padding:6rem 3rem; border-top:1px solid #ddd5c8;">
    <div style="max-width:1200px; margin:0 auto;">
        <div style="display:grid; grid-template-columns:1fr 1fr; gap:5rem; align-items:center;" class="work-section-grid">

            {{-- Left — text --}}
            <div>
                <p style="font-family:'Jost',sans-serif; font-size:0.7rem; letter-spacing:0.22em; text-transform:uppercase; color:#39808d; margin-bottom:1.5rem;">
                    Organizational Design
                </p>
                <h2 style="
                    font-family:'Cormorant Garamond',serif;
                    font-size:clamp(2rem,4.5vw,3.5rem);
                    font-weight:300;
                    font-style:italic;
                    color:#1a1815;
                    line-height:1.05;
                    margin-bottom:2rem;
                ">
                    Aligning structure with strategic intent
                </h2>
                <hr style="border:none; border-top:1px solid #ddd5c8; margin-bottom:2rem;" />
                <p style="font-family:'Jost',sans-serif; font-size:0.88rem; font-weight:300; color:#7a7268; line-height:1.85; margin-bottom:1.25rem;">
                    Structure should serve strategy, not convention. But in most growth-stage companies, org charts lag behind reality. Roles lack clarity. Decision rights overlap. Reporting lines reflect history, not current operating needs.
                </p>
                <p style="font-family:'Jost',sans-serif; font-size:0.88rem; font-weight:300; color:#7a7268; line-height:1.85; margin-bottom:2rem;">
                    We don't reorganize for the sake of reorganizing. We map your operating cadence, growth trajectory, and decision-making patterns, then design role architecture that clarifies accountability without creating bureaucracy.
                </p>
                <p style="font-family:'Jost',sans-serif; font-size:0.7rem; letter-spacing:0.16em; text-transform:uppercase; color:#a09488; margin-bottom:1rem;">
                    Core Architecture Pillars
                </p>
                <div style="display:flex; gap:0.6rem; flex-wrap:wrap;">
                    @foreach(['Organizational Design', 'Grading Framework', 'Job Profiles'] as $tag)
                    <span style="
                        font-family:'Jost',sans-serif;
                        font-size:0.62rem;
                        font-weight:500;
                        letter-spacing:0.12em;
                        text-transform:uppercase;
                        color:#1a1815;
                        border:1px solid rgba(26,24,21,0.25);
                        padding:0.45rem 0.85rem;
                    ">{{ $tag }}</span>
                    @endforeach
                </div>
            </div>

            {{-- Right — image with offset frame --}}
            <div class="offset-frame" style="position:relative; padding:1.5rem 0 0 1.5rem;">
                <div class="offset-frame-border" style="
                    position:absolute;
                    top:0; left:0; right:1.5rem; bottom:1.5rem;
                    border:1px solid #ddd5c8;
                    pointer-events:none;
                "></div>
                <img
                    src="{{ asset('images/align.jpeg') }}"
                    alt="Organizational Design"
                    class="work-image"
                    style="display:block; width:100%; height:420px; object-fit:cover; object-position:center; position:relative; z-index:1;"
                />
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════
     SECTION 2 — PERFORMANCE SYSTEMS (dark)
════════════════════════════════════════════════════ --}}
<section style="background-color:#0f0e0c; padding:6rem 3rem;">
    <div style="max-width:1200px; margin:0 auto;">
        <div style="display:grid; grid-template-columns:1fr 1fr; gap:5rem; align-items:center;" class="work-section-grid">

            {{-- Left — image --}}
            <div>
                <img
                    src="{{ asset('images/board_meeting.jpeg') }}"
                    alt="Performance Systems"
                    class="work-image"
                    style="display:block; width:100%; height:420px; object-fit:cover; object-position:center;"
                />
            </div>

            {{-- Right — text --}}
            <div>
                <p style="font-family:'Jost',sans-serif; font-size:0.7rem; letter-spacing:0.22em; text-transform:uppercase; color:#39808d; margin-bottom:1.5rem;">
                    Performance Systems
                </p>
                <h2 style="
                    font-family:'Cormorant Garamond',serif;
                    font-size:clamp(2rem,4.5vw,3.5rem);
                    font-weight:300;
                    font-style:italic;
                    color:#e8e1d4;
                    line-height:1.05;
                    margin-bottom:2rem;
                ">
                    Systems that drive accountability, not compliance.
                </h2>
                <hr style="border:none; border-top:1px solid #2a2724; margin-bottom:2rem;" />
                <p style="font-family:'Jost',sans-serif; font-size:0.88rem; font-weight:300; color:#7a7268; line-height:1.85; margin-bottom:1.25rem;">
                    Performance management in most companies is a ritual, not a system. Annual reviews that no one trusts. Goals that disconnect from strategy. Managers who can't differentiate between solid and exceptional work.
                </p>
                <p style="font-family:'Jost',sans-serif; font-size:0.88rem; font-weight:300; color:#7a7268; line-height:1.85; margin-bottom:2rem;">
                    We build performance systems that make expectations explicit, create meaningful differentiation, and enable managers to have structured conversations that actually shift behavior.
                </p>
                <p style="font-family:'Jost',sans-serif; font-size:0.7rem; letter-spacing:0.16em; text-transform:uppercase; color:#7a7268; margin-bottom:1rem;">
                    Core Architecture Pillars
                </p>
                <div style="display:flex; gap:0.6rem; flex-wrap:wrap;">
                    @foreach(['Performance Standards', 'Competency Framework', 'Performance Decisioning', 'Performance Rewards'] as $tag)
                    <span style="
                        font-family:'Jost',sans-serif;
                        font-size:0.62rem;
                        font-weight:500;
                        letter-spacing:0.12em;
                        text-transform:uppercase;
                        color:#e8e1d4;
                        border:1px solid rgba(232,225,212,0.2);
                        padding:0.45rem 0.85rem;
                    ">{{ $tag }}</span>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════
     SECTION 3 — PROCESS & TECHNOLOGY (light)
════════════════════════════════════════════════════ --}}
<section style="background-color:#f4efe6; padding:6rem 3rem;">
    <div style="max-width:1200px; margin:0 auto;">
        <div style="display:grid; grid-template-columns:1fr 1fr; gap:5rem; align-items:center;" class="work-section-grid">

            {{-- Left — text --}}
            <div>
                <p style="font-family:'Jost',sans-serif; font-size:0.7rem; letter-spacing:0.22em; text-transform:uppercase; color:#39808d; margin-bottom:1.5rem;">
                    Process & Technology
                </p>
                <h2 style="
                    font-family:'Cormorant Garamond',serif;
                    font-size:clamp(2rem,4.5vw,3.5rem);
                    font-weight:300;
                    font-style:italic;
                    color:#1a1815;
                    line-height:1.05;
                    margin-bottom:2rem;
                ">
                    Employee lifecycle with technology that scales
                </h2>
                <hr style="border:none; border-top:1px solid #ddd5c8; margin-bottom:2rem;" />
                <p style="font-family:'Jost',sans-serif; font-size:0.88rem; font-weight:300; color:#7a7268; line-height:1.85; margin-bottom:1.25rem;">
                    Most companies build people processes manually — spreadsheets, email threads, documents scattered across drives. It works at 20 people. It breaks at 200.
                </p>
                <p style="font-family:'Jost',sans-serif; font-size:0.88rem; font-weight:300; color:#7a7268; line-height:1.85; margin-bottom:2rem;">
                    We design end-to-end employee lifecycle architecture — from hire to exit — then implement it through technology platforms that make processes systematic, visible, and scalable.
                </p>
                <p style="font-family:'Jost',sans-serif; font-size:0.7rem; letter-spacing:0.16em; text-transform:uppercase; color:#a09488; margin-bottom:1rem;">
                    Core Architecture Pillars
                </p>
                <div style="display:flex; gap:0.6rem; flex-wrap:wrap;">
                    @foreach(['HR Tech Implementation', 'Employee Data & Documentation Systems', 'Process Design'] as $tag)
                    <span style="
                        font-family:'Jost',sans-serif;
                        font-size:0.62rem;
                        font-weight:500;
                        letter-spacing:0.12em;
                        text-transform:uppercase;
                        color:#1a1815;
                        border:1px solid rgba(26,24,21,0.25);
                        padding:0.45rem 0.85rem;
                    ">{{ $tag }}</span>
                    @endforeach
                </div>
            </div>

            {{-- Right — image with offset frame --}}
            <div class="offset-frame" style="position:relative; padding:1.5rem 0 0 1.5rem;">
                <div class="offset-frame-border" style="
                    position:absolute;
                    top:0; left:0; right:1.5rem; bottom:1.5rem;
                    border:1px solid #ddd5c8;
                    pointer-events:none;
                "></div>
                <img
                    src="{{ asset('images/keyboard.jpeg') }}"
                    alt="Process and Technology"
                    class="work-image"
                    style="display:block; width:100%; height:420px; object-fit:cover; object-position:center; position:relative; z-index:1;"
                />
            </div>
        </div>
    </div>
</section>


{{-- ═══════════════════════════════════════════════════
     IJEOMA BIO
════════════════════════════════════════════════════ --}}
<section style="background-color:#0f0e0c; padding:6rem 3rem;">
    <div style="max-width:1200px; margin:0 auto;">
        <div style="display:grid; grid-template-columns:1fr 1fr; gap:5rem; align-items:start;" class="work-section-grid">

            {{-- Left — photo with offset frame --}}
            <div class="offset-frame" style="position:relative; padding:1.5rem 0 0 1.5rem;">
                <div class="offset-frame-border" style="
                    position:absolute;
                    top:0; left:0; right:1.5rem; bottom:1.5rem;
                    border:1px solid #2a2724;
                    pointer-events:none;
                "></div>
                <img
                    src="{{ asset('images/ijeoma.jpeg') }}"
                    alt="Ijeoma Oyeyinka"
                    class="work-image"
                    style="display:block; width:100%; height:560px; object-fit:cover; object-position:top; position:relative; z-index:1;"
                />
            </div>

            {{-- Right — bio --}}
            <div style="padding-top:1rem;">
                <p style="font-family:'Jost',sans-serif; font-size:0.7rem; letter-spacing:0.22em; text-transform:uppercase; color:#39808d; margin-bottom:1.5rem;">
                    Founder
                </p>
                <h2 style="
                    font-family:'Cormorant Garamond',serif;
                    font-size:clamp(2.5rem,5vw,4.5rem);
                    font-weight:300;
                    font-style:italic;
                    color:#e8e1d4;
                    line-height:1.0;
                    margin-bottom:2rem;
                ">
                    Ijeoma<br>Oyeyinka
                </h2>
                <hr style="border:none; border-top:1px solid #2a2724; margin-bottom:2rem;" />
                <p style="font-family:'Jost',sans-serif; font-size:0.88rem; font-weight:300; color:#7a7268; line-height:1.85; margin-bottom:1.25rem;">
                    My background began in engineering, where I was trained to think in systems — to understand how structure, pressure, and design determine long-term stability.
                </p>
                <p style="font-family:'Jost',sans-serif; font-size:0.88rem; font-weight:300; color:#7a7268; line-height:1.85; margin-bottom:1.25rem;">
                    Over the past decade, I have led and redesigned people systems in growth-stage environments across Africa and multi-country operations, working with founder-led companies, executive teams, and boards.
                </p>
                <p style="font-family:'Jost',sans-serif; font-size:0.88rem; font-weight:300; color:#7a7268; line-height:1.85; margin-bottom:1.25rem;">
                    I have built and overhauled people infrastructure in health technology, professional advisory environments, operational businesses, and complex multi-entity organizations.
                </p>
                <p style="font-family:'Jost',sans-serif; font-size:0.88rem; font-weight:300; color:#7a7268; line-height:1.85;">
                    At People Access, we bring systems-level thinking, structured design, and calm strategic clarity to your people challenges.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════
     WORK CTA — light email form
════════════════════════════════════════════════════ --}}
<section style="background-color:#f4efe6; padding:6rem 3rem;">
    <div style="max-width:1200px; margin:0 auto;">
        <div style="display:grid; grid-template-columns:1fr 1fr; gap:5rem; align-items:center;" class="work-cta-grid">

            <h2 style="
                font-family:'Cormorant Garamond',serif;
                font-size:clamp(2rem,4vw,3.2rem);
                font-weight:300;
                font-style:italic;
                color:#1a1815;
                line-height:1.1;
            ">Start your diagnostic conversation</h2>

            <div>
                <p style="font-family:'Jost',sans-serif; font-size:0.88rem; font-weight:300; color:#7a7268; line-height:1.8; margin-bottom:1.5rem;">
                    Speak with an advisor about scaling challenges and next steps.
                </p>
                <div style="display:flex;">
                    <input
                        type="email"
                        placeholder="Your email"
                        style="
                            flex:1;
                            font-family:'Jost',sans-serif;
                            font-size:0.85rem;
                            font-weight:300;
                            background:#fff;
                            border:1px solid #ddd5c8;
                            border-right:none;
                            color:#1a1815;
                            padding:0.85rem 1.25rem;
                            outline:none;
                            min-width:0;
                        "
                    />
                    <button style="
                        font-family:'Jost',sans-serif;
                        font-size:0.7rem;
                        font-weight:500;
                        letter-spacing:0.12em;
                        text-transform:uppercase;
                        background:#1a1815;
                        color:#f4efe6;
                        border:none;
                        padding:0.85rem 1.5rem;
                        cursor:pointer;
                        white-space:nowrap;
                        transition:background 0.2s;
                    "
                    onmouseover="this.style.background='#39808d'"
                    onmouseout="this.style.background='#1a1815'"
                    >Submit</button>
                </div>
                <p style="font-family:'Jost',sans-serif; font-size:0.78rem; font-weight:300; color:#a09488; margin-top:0.75rem;">
                    We advise growth-stage leaders navigating scale.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════
     DARK CTA SECTION
════════════════════════════════════════════════════ --}}
<section style="background-color:#0f0e0c; padding:5rem 3rem; border-top:1px solid #2a2724;">
    <div style="max-width:1200px; margin:0 auto;">
        <div style="display:grid; grid-template-columns:1fr 1fr; gap:4rem; align-items:center;" class="footer-cta-grid">

            <h2 style="
                font-family:'Cormorant Garamond',serif;
                font-size:clamp(2rem,4vw,3.2rem);
                font-weight:300;
                font-style:italic;
                color:#e8e1d4;
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
                        text-decoration:none;
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
                        color:#e8e1d4;
                        border:1px solid rgba(232,225,212,0.25);
                        padding:0.85rem 1.75rem;
                        text-decoration:none;
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
