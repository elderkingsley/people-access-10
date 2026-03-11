<style>
    .pa-mobile-menu {
        display: none;
        position: fixed;
        inset: 0;
        background-color: #0f0e0c;
        z-index: 1000;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 2rem;
    }
    .pa-mobile-menu.is-open {
        display: flex !important;
    }
    .pa-mobile-menu a {
        font-family: 'Cormorant Garamond', serif;
        font-size: 2.2rem;
        font-weight: 300;
        color: #e8e1d4;
        text-decoration: none;
    }
    .pa-mobile-menu .pa-close-btn {
        position: absolute;
        top: 1.25rem;
        right: 1.25rem;
        background: none;
        border: none;
        cursor: pointer;
        z-index: 1001;
        padding: 0.75rem;
    }
</style>

<div
    x-data="{ scrolled: false, open: false }"
    x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 50 })"
>
    <nav :class="scrolled ? 'navbar scrolled' : 'navbar'">

        {{-- Logo --}}
        <a href="{{ route('home') }}"
        style="display:block; text-decoration:none; z-index:100; position:relative; height:50px; width:160px;">
        <img src="{{ asset('images/pa-logo.png') }}" alt="People Access"
            class="navbar-logo-img"
            style="position:absolute; left:0; top:-75px; height:200px; width:auto; display:block; mix-blend-mode:screen; pointer-events:none;"/>
        </a>

        {{-- Desktop nav links — truly centered --}}
        <ul style="
            position:absolute;
            left:50%;
            transform:translateX(-50%);
            display:flex;
            align-items:center;
            gap:2.5rem;
            list-style:none;
            margin:0;
            padding:0;
        " class="navbar-links-desktop">
            <li><a href="{{ route('home') }}" style="font-family:'Jost',sans-serif; font-size:0.75rem; font-weight:400; letter-spacing:0.1em; text-transform:uppercase; color:#f5f0eb; text-decoration:none; transition:color 0.2s;" onmouseover="this.style.color='#e8e1d4'" onmouseout="this.style.color='#a09488'">Home</a></li>
            <li><a href="{{ route('work') }}" style="font-family:'Jost',sans-serif; font-size:0.75rem; font-weight:400; letter-spacing:0.1em; text-transform:uppercase; color:#a09488; text-decoration:none; transition:color 0.2s;" onmouseover="this.style.color='#e8e1d4'" onmouseout="this.style.color='#a09488'">The Work</a></li>
            <li><a href="{{ route('contact') }}" style="font-family:'Jost',sans-serif; font-size:0.75rem; font-weight:400; letter-spacing:0.1em; text-transform:uppercase; color:#a09488; text-decoration:none; transition:color 0.2s;" onmouseover="this.style.color='#e8e1d4'" onmouseout="this.style.color='#a09488'">Start Here</a></li>
            <li><a href="{{ route('careers') }}" style="font-family:'Jost',sans-serif; font-size:0.75rem; font-weight:400; letter-spacing:0.1em; text-transform:uppercase; color:#a09488; text-decoration:none; transition:color 0.2s;" onmouseover="this.style.color='#e8e1d4'" onmouseout="this.style.color='#a09488'">Careers</a></li>
        </ul>
        </ul>

        {{-- Desktop BEGIN button --}}
        <a href="{{ route('contact') }}" class="navbar-begin-desktop" style="font-family:'Jost',sans-serif; font-size:0.72rem; font-weight:500; letter-spacing:0.12em; text-transform:uppercase; color:#e8e1d4; border:1px solid rgba(57,128,141,0.6); padding:0.5rem 1.4rem; text-decoration:none; transition:all 0.2s; z-index:2;" onmouseover="this.style.background='rgba(57,128,141,0.15)'; this.style.borderColor='#39808d'" onmouseout="this.style.background='transparent'; this.style.borderColor='rgba(57,128,141,0.6)'">Begin</a>

        {{-- Hamburger (mobile only) --}}
        <button
            class="hamburger"
            @click="open = true"
            :style="open ? 'display:none !important' : ''"
            aria-label="Open menu"
        >
            <span></span>
            <span></span>
            <span></span>
        </button>
    </nav>

    {{-- Mobile full-screen menu --}}
    <div class="pa-mobile-menu" :class="open ? 'is-open' : ''">

        {{-- Close button --}}
        <button class="pa-close-btn" @click="open = false" aria-label="Close menu">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#e8e1d4" stroke-width="1.5">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
            </svg>
        </button>

        {{-- Logo in menu --}}
        <img src="{{ asset('images/pa-logo.png') }}" alt="People Access" style="height:52px; width:auto; margin-bottom:1rem; mix-blend-mode:screen;" />

        <a href="{{ route('home') }}" @click="open = false">Home</a>
        <a href="{{ route('work') }}" @click="open = false">The Work</a>
        <a href="{{ route('contact') }}" @click="open = false">Start Here</a>
        <a href="{{ route('careers') }}" @click="open = false">Careers</a>
        <a href="{{ route('contact') }}" @click="open = false" style="color:#39808d;">Begin →</a>
    </div>
</div>
