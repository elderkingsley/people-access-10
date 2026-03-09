<footer style="background-color:#0f0e0c; border-top:1px solid #2a2724;">

    {{-- Newsletter --}}
    <div style="padding:3.5rem 3rem; border-bottom:1px solid #2a2724;">
        <div class="newsletter-flex" style="max-width:1200px; margin:0 auto; display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:2rem;">
            <div>
                <p style="font-family:'Jost',sans-serif; font-size:0.7rem; letter-spacing:0.22em; text-transform:uppercase; color:#39808d; margin-bottom:0.4rem;">
                    Stay Informed
                </p>
                <p style="font-family:'Jost',sans-serif; font-size:0.88rem; font-weight:300; color:#7a7268;">
                    Insights on scaling organizations.
                </p>
            </div>
            <div class="newsletter-input-wrap" style="display:flex; flex:1; max-width:480px;">
                <input
                    type="email"
                    placeholder="Your email address"
                    style="
                        flex:1;
                        font-family:'Jost',sans-serif;
                        font-size:0.85rem;
                        font-weight:300;
                        background:#1a1916;
                        border:1px solid #2a2724;
                        border-right:none;
                        color:#e8e1d4;
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
                    background:#39808d;
                    color:#0f0e0c;
                    border:none;
                    padding:0.85rem 1.5rem;
                    cursor:pointer;
                    white-space:nowrap;
                    transition:background 0.2s;
                "
                onmouseover="this.style.background='#2d6b77'"
                onmouseout="this.style.background='#39808d'"
                >Subscribe</button>
            </div>
        </div>
    </div>

    {{-- Main footer --}}
    <div style="padding:4rem 3rem 2rem;">
        <div style="max-width:1200px; margin:0 auto;">
            <div style="display:grid; grid-template-columns:1fr 1fr 1fr; gap:4rem; margin-bottom:3rem;" class="footer-grid">

                {{-- Brand + social --}}
                <div>
                    <img
                        src="{{ asset('images/pa-logo.png') }}"
                        alt="People Access"
                        style="height:100px; width:auto; display:block; mix-blend-mode:screen; margin-bottom:1.25rem;"
                    />
                    <div style="display:flex; gap:1.25rem; align-items:center;">
                        @foreach(['IG','LI','M'] as $social)
                        <a href="#" style="
                            font-family:'Jost',sans-serif;
                            font-size:0.7rem;
                            font-weight:500;
                            letter-spacing:0.08em;
                            color:#7a7268;
                            text-decoration:none;
                            transition:color 0.2s;
                        "
                        onmouseover="this.style.color='#e8e1d4'"
                        onmouseout="this.style.color='#7a7268'"
                        >{{ $social }}</a>
                        @endforeach
                    </div>
                </div>

                {{-- Expertise links --}}
                <div>
                    <p style="font-family:'Jost',sans-serif; font-size:0.65rem; letter-spacing:0.22em; text-transform:uppercase; color:#7a7268; margin-bottom:1.5rem;">
                        Expertise
                    </p>
                    @foreach(['About','Team','Cases','Contact'] as $link)
                    <a href="#" style="
                        display:block;
                        font-family:'Jost',sans-serif;
                        font-size:0.85rem;
                        font-weight:300;
                        color:#a09488;
                        text-decoration:none;
                        margin-bottom:0.85rem;
                        transition:color 0.2s;
                    "
                    onmouseover="this.style.color='#e8e1d4'"
                    onmouseout="this.style.color='#a09488'"
                    >{{ $link }}</a>
                    @endforeach
                </div>

                {{-- Contact --}}
                <div>
                    <a href="mailto:advisory@peopleaccessng.com" style="
                        display:block;
                        font-family:'Jost',sans-serif;
                        font-size:0.85rem;
                        font-weight:300;
                        color:#39808d;
                        text-decoration:none;
                        margin-bottom:0.5rem;
                        word-break:break-all;
                    ">advisory@peopleaccessng.com</a>
                    <p style="font-family:'Jost',sans-serif; font-size:0.85rem; font-weight:300; color:#7a7268;">
                        Gbagada, Lagos
                    </p>
                </div>
            </div>

            @include('components.rule')

            <div style="padding-top:1.5rem;">
                <p style="font-family:'Jost',sans-serif; font-size:0.75rem; color:#7a7268;">
                    All rights reserved &copy; {{ date('Y') }} People Access
                </p>
            </div>
        </div>
    </div>
</footer>
