<x-layouts.app>
<x-slot:title>Careers — People Access</x-slot>
<x-slot:description>Checkout current positions looking for the right people.</x-slot>

{{-- ═══════════════════════════════════════════════════
     HERO
════════════════════════════════════════════════════ --}}
<section class="contact-hero-grid" style="
    position:relative;
    min-height:100vh;
    background-color:#0f0e0c;
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:4rem;
    align-items:center;
    padding:8rem 3rem 5rem;
    overflow:hidden;
">

    {{-- SH decorative letters top right --}}
    <div class="deco-letters" style="
        position:absolute;
        top:0.2em;
        right:-0.05em;
        font-family:'Cormorant Garamond',serif;
        font-size:clamp(180px,28vw,380px);
        font-weight:300;
        font-style:italic;
        color:transparent;
        -webkit-text-stroke:1px rgba(57,128,141,0.12);
        line-height:0.85;
        pointer-events:none;
        user-select:none;
        letter-spacing:-0.02em;
    ">C</div>

    {{-- Left — headline --}}
    <div style="max-width:600px; position:relative; z-index:2;">
        <p style="
            font-family:'Jost',sans-serif;
            font-size:0.7rem;
            font-weight:400;
            letter-spacing:0.22em;
            text-transform:uppercase;
            color:#7a7268;
            margin-bottom:2.5rem;
        ">Connecting People to Roles</p>

        <h1 style="
            font-family:'Cormorant Garamond',serif;
            font-size:clamp(3rem,6.5vw,5.5rem);
            font-weight:300;
            font-style:italic;
            line-height:1.0;
            color:#e8e1d4;
        ">
            Can you<br>
            play in<br>
            <span style="color:#39808d;">a team?</span>
        </h1>
    </div>

    {{-- Right — body + buttons --}}
    <div style="position:relative; z-index:2;">
        <p style="font-family:'Jost',sans-serif; font-size:0.9rem; font-weight:300; color:#7a7268; line-height:1.85; margin-bottom:1rem;">
            Are you the one we've been searching for?
        </p>
        <p style="font-family:'Jost',sans-serif; font-size:0.9rem; font-weight:600; color:#e8e1d4; margin-bottom:2.5rem;">
            Lets find out. Together.
        </p>
        <div style="display:flex; gap:0.75rem; flex-wrap:wrap;">
            <a href="#contact-form" style="
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
            >Start Now</a>

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
            >See the Work</a>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════
     CONNECT label
════════════════════════════════════════════════════ --}}
<div style="background-color:#f4efe6; padding:3rem 3rem 0; text-align:center;">
    <p style="font-family:'Jost',sans-serif; font-size:0.7rem; letter-spacing:0.22em; text-transform:uppercase; color:#39808d;">
        Connect
    </p>
</div>

{{-- ═══════════════════════════════════════════════════
     FORM SECTION
════════════════════════════════════════════════════ --}}

<section id="contact-form" style="background-color:#f4efe6; padding:2rem 3rem 6rem;">
    <div style="max-width:1400px; margin:0 auto;">

        {{-- Centered heading --}}
        <div style="text-align:center; margin-bottom:3rem;">
            <h2 style="
                font-family:'Cormorant Garamond',serif;
                font-size:clamp(2.5rem,5vw,4rem);
                font-weight:300;
                font-style:italic;
                color:#1a1815;
                line-height:1.05;
                margin-bottom:0.75rem;
            ">Available Positions</h2>
            <p style="font-family:'Jost',sans-serif; font-size:0.88rem; font-weight:300; color:#7a7268; line-height:1.8;">
                Apply for any of the positions below and we'll be in touch.
            </p>
        </div>

        {{-- Form card --}}
       <div style="
            background:#fff;
            border:1px solid #ddd5c8;
            padding:2rem;">

            <iframe
                src="https://www.careers-page.com/people-access-ng"
                style="width:100%; min-height:800px; border:none;">
            </iframe>

        </div>

            {{-- Right — contact sidebar --}}
            <div style="
                padding:2.5rem;
                border-left:1px solid #ddd5c8;
                background:#faf7f3;
            ">
                <h3 style="
                    font-family:'Cormorant Garamond',serif;
                    font-size:1.4rem;
                    font-weight:400;
                    font-style:italic;
                    color:#1a1815;
                    margin-bottom:0.75rem;
                ">Want to reach out to us?</h3>
                <p style="font-family:'Jost',sans-serif; font-size:0.8rem; font-weight:300; color:#7a7268; line-height:1.7; margin-bottom:2rem;">
                    For direct inquiries or to schedule a consultation, use the details below.
                </p>
                <hr style="border:none; border-top:1px solid #ddd5c8; margin-bottom:2rem;" />

                {{-- Email --}}
                <div style="display:flex; align-items:flex-start; gap:0.75rem; margin-bottom:1.25rem;">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#39808d" stroke-width="1.5" style="margin-top:2px; flex-shrink:0;">
                        <rect x="2" y="4" width="20" height="16" rx="2"/>
                        <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/>
                    </svg>
                    <a href="mailto:people@peopleaccessng.com" style="
                        font-family:'Jost',sans-serif;
                        font-size:0.82rem;
                        font-weight:300;
                        color:#39808d;
                        text-decoration:none;
                        line-height:1.5;
                        word-break:break-all;
                    ">people@peopleaccessng.com</a>
                </div>

                {{-- Location --}}
                <div style="display:flex; align-items:flex-start; gap:0.75rem;">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#39808d" stroke-width="1.5" style="margin-top:2px; flex-shrink:0;">
                        <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/>
                        <circle cx="12" cy="10" r="3"/>
                    </svg>
                    <p style="font-family:'Jost',sans-serif; font-size:0.82rem; font-weight:300; color:#7a7268; line-height:1.5; margin:0;">
                        Gbagada, Lagos
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

</x-layouts.app>
