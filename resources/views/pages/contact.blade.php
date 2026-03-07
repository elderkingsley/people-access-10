<x-layouts.app>
<x-slot:title>Start Here — People Access</x-slot>
<x-slot:description>Start a diagnostic conversation with the People Access advisory team.</x-slot>

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
    ">SH</div>

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
        ">Strategic People Systems for Growth</p>

        <h1 style="
            font-family:'Cormorant Garamond',serif;
            font-size:clamp(3rem,6.5vw,5.5rem);
            font-weight:300;
            font-style:italic;
            line-height:1.0;
            color:#e8e1d4;
        ">
            Start a<br>
            diagnostic<br>
            <span style="color:#39808d;">conversation</span>
        </h1>
    </div>

    {{-- Right — body + buttons --}}
    <div style="position:relative; z-index:2;">
        <p style="font-family:'Jost',sans-serif; font-size:0.9rem; font-weight:300; color:#7a7268; line-height:1.85; margin-bottom:1rem;">
            Most conversations start the same way: "Some things are breaking, but I am not sure exactly what."
        </p>
        <p style="font-family:'Jost',sans-serif; font-size:0.9rem; font-weight:600; color:#e8e1d4; margin-bottom:2.5rem;">
            That's the signal. Let's diagnose it.
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
    <div style="max-width:1000px; margin:0 auto;">

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
            ">Start here</h2>
            <p style="font-family:'Jost',sans-serif; font-size:0.88rem; font-weight:300; color:#7a7268; line-height:1.8;">
                Connect with our advisory team to discuss your challenges. We respond promptly to qualified inquiries.
            </p>
        </div>

        {{-- Form card --}}
        <div style="
            background:#fff;
            border:1px solid #ddd5c8;
            display:grid;
            grid-template-columns:1fr 280px;
            gap:0;
        " class="form-card-grid">

            {{-- Left — Alpine form --}}
<div style="padding:2.5rem;" x-data="{
    firstName: '',
    lastName: '',
    email: '',
    phone: '',
    role: '',
    prompts: [],
    message: '',
    submitted: false,
    submitting: false,
    errors: {},
    validate() {
        this.errors = {};
        if (!this.firstName.trim()) this.errors.firstName = 'First name is required.';
        if (!this.lastName.trim())  this.errors.lastName  = 'Last name is required.';
        if (!this.email.trim() || !this.email.includes('@')) this.errors.email = 'A valid email is required.';
        if (!this.role) this.errors.role = 'Please select your role.';
        return Object.keys(this.errors).length === 0;
    },
    async submit() {
        if (!this.validate()) return;
        this.submitting = true;
        try {
            const res = await fetch('https://api.web3forms.com/submit', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json', 'Accept': 'application/json' },
                body: JSON.stringify({
                    access_key: 'a144aaeb-2ec9-4612-95f2-49425205950e',
                    name:        this.firstName + ' ' + this.lastName,
                    email:       this.email,
                    phone:       this.phone,
                    role:        this.role,
                    prompts:     this.prompts.join(', '),
                    message:     this.message,
                    subject:     'New People Access Inquiry — ' + this.firstName + ' ' + this.lastName,
                })
            });
            const data = await res.json();
            if (data.success) {
                this.submitted = true;
            } else {
                this.errors.general = data.message || 'Something went wrong. Please try again.';
            }
        } catch(e) {
            this.errors.general = 'Network error. Please try again or email us directly.';
        }
        this.submitting = false;
    }
}">

    {{-- Success --}}
    <template x-if="submitted">
        <div style="text-align:center; padding:3rem 1rem;">
            <div style="
                width:48px; height:48px; background:#39808d;
                border-radius:50%;
                display:flex; align-items:center; justify-content:center;
                margin:0 auto 1.5rem;
            ">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
            </div>
            <h3 style="font-family:'Cormorant Garamond',serif; font-size:1.8rem; font-weight:300; font-style:italic; color:#1a1815; margin-bottom:0.75rem;">
                Message received
            </h3>
            <p style="font-family:'Jost',sans-serif; font-size:0.88rem; font-weight:300; color:#7a7268; line-height:1.8;">
                Thank you for reaching out. We'll review your message and respond promptly.
            </p>
        </div>
    </template>

    {{-- Form --}}
    <template x-if="!submitted">
        <div>

            {{-- General error --}}
            <template x-if="errors.general">
                <div style="font-family:'Jost',sans-serif; font-size:0.82rem; color:#c0392b; background:#fdf0ef; border:1px solid #f5c6c2; padding:0.75rem 1rem; margin-bottom:1.5rem;" x-text="errors.general"></div>
            </template>

            @php
            $inputStyle = "width:100%; font-family:'Jost',sans-serif; font-size:0.85rem; font-weight:300; background:#fff; border:1px solid #ddd5c8; color:#1a1815; padding:0.75rem 1rem; outline:none; box-sizing:border-box;";
            $labelStyle = "display:block; font-family:'Jost',sans-serif; font-size:0.65rem; font-weight:500; letter-spacing:0.16em; text-transform:uppercase; color:#7a7268; margin-bottom:0.4rem;";
            $errStyle   = "font-family:'Jost',sans-serif; font-size:0.75rem; color:#c0392b; margin-top:0.25rem;";
            @endphp

            {{-- Row 1 --}}
            <div style="display:grid; grid-template-columns:1fr 1fr; gap:1rem; margin-bottom:1.25rem;" class="form-row">
                <div>
                    <label style="{{ $labelStyle }}">First Name</label>
                    <input type="text" x-model="firstName" placeholder="First name" style="{{ $inputStyle }}" />
                    <template x-if="errors.firstName"><p style="{{ $errStyle }}" x-text="errors.firstName"></p></template>
                </div>
                <div>
                    <label style="{{ $labelStyle }}">Last Name</label>
                    <input type="text" x-model="lastName" placeholder="Last name" style="{{ $inputStyle }}" />
                    <template x-if="errors.lastName"><p style="{{ $errStyle }}" x-text="errors.lastName"></p></template>
                </div>
            </div>

            {{-- Row 2 --}}
            <div style="display:grid; grid-template-columns:1fr 1fr; gap:1rem; margin-bottom:1.25rem;" class="form-row">
                <div>
                    <label style="{{ $labelStyle }}">Email Address</label>
                    <input type="email" x-model="email" placeholder="email@website.com" style="{{ $inputStyle }}" />
                    <template x-if="errors.email"><p style="{{ $errStyle }}" x-text="errors.email"></p></template>
                </div>
                <div>
                    <label style="{{ $labelStyle }}">Phone</label>
                    <input type="tel" x-model="phone" placeholder="+1 (555) 000-0000" style="{{ $inputStyle }}" />
                </div>
            </div>

            {{-- Role --}}
            <div style="margin-bottom:1.25rem;">
                <label style="{{ $labelStyle }}">Your Role or Focus Area</label>
                <div style="display:flex; gap:1.5rem; flex-wrap:wrap; margin-top:0.25rem;">
                    @foreach(['Founder / CEO', 'Executive team', 'Board / Investor', 'People leader'] as $r)
                    <label style="display:flex; align-items:center; gap:0.5rem; font-family:'Jost',sans-serif; font-size:0.82rem; font-weight:300; color:#1a1815; cursor:pointer;">
                        <input type="radio" x-model="role" value="{{ $r }}" style="accent-color:#39808d;" />
                        {{ $r }}
                    </label>
                    @endforeach
                </div>
                <template x-if="errors.role"><p style="{{ $errStyle }}" x-text="errors.role"></p></template>
            </div>

            {{-- Checkboxes --}}
            <div style="margin-bottom:1.25rem;">
                <label style="{{ $labelStyle }}">What's prompting this conversation?</label>
                @foreach([
                    "We're hiring but can't define what we need",
                    "Performance conversations aren't landing",
                    "Our structure doesn't match our strategy anymore",
                    "Board/investors are asking questions we can't answer cleanly",
                    "We're scaling and things are fracturing",
                    "Leadership capacity isn't keeping pace with growth",
                    "Something else"
                ] as $option)
                <label style="display:flex; align-items:flex-start; gap:0.6rem; font-family:'Jost',sans-serif; font-size:0.82rem; font-weight:300; color:#1a1815; cursor:pointer; margin-top:0.6rem; line-height:1.4;">
                    <input type="checkbox" x-model="prompts" value="{{ $option }}" style="accent-color:#39808d; margin-top:2px; flex-shrink:0;" />
                    {{ $option }}
                </label>
                @endforeach
            </div>

            {{-- Message --}}
            <div style="margin-bottom:1.75rem;">
                <label style="{{ $labelStyle }}">Anything else we should know before we connect?</label>
                <textarea x-model="message" placeholder="Type your message..." rows="5" style="{{ $inputStyle }} resize:vertical;"></textarea>
            </div>

            {{-- Submit --}}
            <button
                @click="submit"
                :disabled="submitting"
                style="font-family:'Jost',sans-serif; font-size:0.75rem; font-weight:500; letter-spacing:0.12em; text-transform:uppercase; color:#fff; background:#1a1815; border:none; padding:0.9rem 2rem; cursor:pointer; transition:background 0.2s;"
                onmouseover="this.style.background='#39808d'"
                onmouseout="this.style.background='#1a1815'"
            >
                <span x-show="!submitting">Submit</span>
                <span x-show="submitting">Sending...</span>
            </button>

        </div>
    </template>

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
                ">Contact information</h3>
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
