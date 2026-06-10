@extends("layouts.app")

@section('content')


<!-- ========= EVENTS HERO SECTION ========= -->
<div id="hero" class="hero-section" style="position: relative; background-color: white; overflow: hidden; min-height: 100vh;">
  
  <!-- Image as a soft background element on the right -->
  <div style="position: absolute; top: 0; right: 0; width: 75%; height: 100%; pointer-events: none;">
    <div style="position: absolute; top: 0; right: 0; width: 90%; height: 100%; background: url('{{ asset('assets/images/ATICC Image  (2).png') }}') no-repeat right center; background-size: cover; mask-image: linear-gradient(to left, black 71%, transparent 100%); -webkit-mask-image: linear-gradient(to left, black 71%, transparent 100%);"></div>
  </div>
  
  <!-- Text content - consistent padding -->
  <div class="hero-content" style="position: relative; z-index: 2; max-width: 55%; margin: 0; padding: 60px 40px;">
    <div class="breadcrumb fade-up revealed" style="margin-bottom: 20px;">Home / Events</div>
    <h1 class="headline fade-up revealed" style="max-width: 65%;">Events</h1>
    <div class="body-text fade-up delay-2 revealed" style="max-width: 108%; line-height: 1.5;">Institutional engagements and strategic convenings.</div>
  </div>
</div>

<!-- ========= UPCOMING EVENTS SECTION ========= -->
<div id="summits" class="full-width-white">
  <div class="wide-container">
    <div class="centered-eyebrow fade-up" style="text-align: center;">UPCOMING EVENTS</div>
    <div class="large-statement fade-up delay-1" style="text-align: center; font-size: 36px;">Institutional Summits & Conferences</div>
    <p class="section-text-dark fade-up delay-2" style="text-align: center; max-width: 700px; margin: 0 auto 50px auto;">ATICC convenes institutional summits and strategic engagements to align capital, policy, and market participants within structured environments.</p>
    
    @forelse($upcomingEvents as $event)
    <!-- Dynamic Event Card -->
    <div class="event-card glide-in delay-1" style="display: flex; gap: 40px; align-items: center; margin-bottom: 50px; background: #F5F6F8; border-radius: 20px; overflow: hidden; flex-wrap: wrap;">
      <div style="flex: 1; padding: 40px;">
        <div style="font-size: 13px; letter-spacing: 0.08em; text-transform: uppercase; color: #C49A6C; margin-bottom: 10px;">
          {{ $event->start_date->format('F j, Y') }}
          @if($event->start_date->format('Y-m-d') != $event->end_date->format('Y-m-d'))
            - {{ $event->end_date->format('F j, Y') }}
          @endif
        </div>
        <h3 style="font-size: 28px; font-weight: 400; color: #0e0e0e; margin-bottom: 15px;">{{ $event->title }}</h3>
        <p style="font-size: 16px; color: #3a4c5e; line-height: 1.6; margin-bottom: 20px;">{{ $event->description }}</p>
        <div style="display: flex; gap: 15px; flex-wrap: wrap;">
          <span style="background: #041931; color: white; padding: 5px 15px; border-radius: 20px; font-size: 12px;">{{ ucfirst($event->event_type) }}</span>
          @if($event->is_invitation_only)
            <span style="background: #E8EBED; color: #2E4156; padding: 5px 15px; border-radius: 20px; font-size: 12px;">By Invitation Only</span>
          @else
            <span style="background: #E8EBED; color: #2E4156; padding: 5px 15px; border-radius: 20px; font-size: 12px;">Open Registration</span>
          @endif
          <span style="background: #E8EBED; color: #2E4156; padding: 5px 15px; border-radius: 20px; font-size: 12px;">{{ $event->location }}</span>
        </div>
      </div>
      @if($event->featured_image)
      <div style="flex: 0.5; min-width: 200px; height: 250px; background: url('{{ Storage::url($event->featured_image) }}') no-repeat center center; background-size: cover; margin: 20px 40px 20px 0; border-radius: 16px;"></div>
      @else
      <div style="flex: 0.5; min-width: 200px; height: 250px; background: linear-gradient(135deg, #041931, #031B4E); margin: 20px 40px 20px 0; border-radius: 16px; display: flex; align-items: center; justify-content: center; color: white; font-size: 14px;">Event Image</div>
      @endif
    </div>
    @empty
    <div style="text-align: center; padding: 60px; background: #F5F6F8; border-radius: 20px;">
      <p style="font-size: 18px; color: #7A8B9B;">No upcoming events at this time. Please check back later.</p>
    </div>
    @endforelse
  </div>
</div>

<!-- ========= SUMMITS SECTION ========= -->
<div id="investment-forums" class="full-width-gray">
  <div class="wide-container">
    <div class="breadcrumb-light fade-up" style="text-align: center;">STRATEGIC CONVENINGS</div>
    <h2 class="section-title-dark fade-up delay-1" style="text-align: center;">Summits</h2>
    <p class="section-text-dark fade-up delay-2" style="text-align: center; max-width: 800px; margin: 0 auto;">ATICC convenes institutional summits to align capital, policy, and market participants within structured engagement environments.</p>
    <div class="products-grid" style="display: flex; gap: 32px; margin-top: 50px; flex-wrap: wrap;">
      @foreach($summitTypes as $summit)
      <div class="product-card glide-in delay-1" style="flex: 1;">
        <h4>{{ $summit['title'] }}</h4>
        <p>{{ $summit['description'] }}</p>
      </div>
      @endforeach
    </div>
    <p class="section-text-dark fade-up delay-3" style="text-align: center; max-width: 600px; margin: 40px auto 0; font-size: 14px;">Participation is structured and by invitation or verified access.</p>
  </div>
</div>

<div class="section-spacer"></div>

<!-- ========= MISSIONS SECTION ========= -->
<div id="trade-missions" class="full-width-white">
  <div class="wide-container">
    <div class="breadcrumb-light fade-up" style="text-align: center;">STRATEGIC DEPLOYMENTS</div>
    <h2 class="section-title-dark fade-up delay-1" style="text-align: center;">Missions</h2>
    <p class="section-text-dark fade-up delay-2" style="text-align: center; max-width: 800px; margin: 0 auto;">ATICC executes targeted trade and investment missions across priority markets and sectors.</p>
    
    @if($missions->count() > 0)
    <div style="margin-top: 50px;">
      @foreach($missions as $mission)
      <div class="mission-item" style="display: flex; justify-content: space-between; align-items: center; padding: 20px; background: #F8F9FA; border-radius: 16px; margin-bottom: 15px; flex-wrap: wrap; gap: 15px;">
        <div>
          <h4 style="font-size: 18px; font-weight: 600; color: #031B4E; margin-bottom: 5px;">{{ $mission->title }}</h4>
          <p style="font-size: 14px; color: #5D6F7F;">{{ $mission->location }} • {{ $mission->start_date->format('M Y') }}</p>
        </div>
        <div>
          <span style="display: inline-block; padding: 4px 12px; background: #E8EBED; border-radius: 20px; font-size: 11px; margin-right: 15px;">{{ $mission->getAccessBadgeAttribute() }}</span>
          @if($mission->registration_link)
          <a href="{{ $mission->registration_link }}" target="_blank" style="background: #041931; color: white; padding: 8px 20px; border-radius: 30px; text-decoration: none; font-size: 13px;">Register Interest →</a>
          @endif
        </div>
      </div>
      @endforeach
    </div>
    @else
    <div style="text-align: center; padding: 40px; background: #F8F9FA; border-radius: 16px;">
      <p style="font-size: 14px; color: #7A8B9B;">No upcoming trade missions scheduled.</p>
    </div>
    @endif
    
    <div class="framework-split" style="margin-top: 50px;">
      <div class="split-left fade-left">
        <ul class="bullet-list">
          <li><span>Market Entry Missions:</span> On-ground coordination for institutional partners entering African markets</li>
          <li><span>Trade Facilitation Missions:</span> Structured engagements to enable cross-border trade flows</li>
          <li><span>Investment Promotion Missions:</span> Targeted deployments showcasing verified opportunities to global capital</li>
        </ul>
      </div>
      <div class="split-right fade-right">
        <ul class="bullet-list">
          <li><span>Sector-Specific Missions:</span> Focused deployments across priority industries</li>
          <li><span>Bilateral Trade Missions:</span> Structured engagements between African markets and international partners</li>
          <li><span>Project Validation Missions:</span> On-ground verification of execution-ready opportunities</li>
        </ul>
      </div>
    </div>
    <p class="section-text-dark fade-up delay-3" style="text-align: center; max-width: 600px; margin: 40px auto 0; font-size: 14px;">All missions operate within defined institutional frameworks and oversight.</p>
  </div>
</div>

<div class="section-spacer"></div>

<!-- ========= ROUNDTABLES SECTION ========= -->
<div id="roundtables" class="full-width-gray">
  <div class="wide-container">
    <div class="breadcrumb-light fade-up" style="text-align: center;">EXECUTIVE ENGAGEMENTS</div>
    <h2 class="section-title-dark fade-up delay-1" style="text-align: center;">Executive Roundtables</h2>
    <p class="section-text-dark fade-up delay-2" style="text-align: center; max-width: 800px; margin: 0 auto;">ATICC hosts executive roundtables for institutional partners to address strategic market developments and transaction environments.</p>
    <div class="products-grid" style="display: flex; gap: 32px; margin-top: 50px; flex-wrap: wrap;">
      <div class="product-card glide-in delay-1" style="flex: 1;">
        <h4>Capital Allocation Roundtables</h4>
        <p>Strategic discussions on capital deployment into African markets and priority sectors.</p>
      </div>
      <div class="product-card glide-in delay-2" style="flex: 1;">
        <h4>Trade Policy Dialogues</h4>
        <p>Engagements with policy makers and institutional stakeholders on trade frameworks.</p>
      </div>
      <div class="product-card glide-in delay-3" style="flex: 1;">
        <h4>Sector Investment Forums</h4>
        <p>Focused roundtables on infrastructure, energy, agro-processing, and digital trade.</p>
      </div>
    </div>
  </div>
</div>

<div class="section-spacer"></div>

<!-- ========= POLICY DIALOGUES SECTION ========= -->
<div id="policy-dialogues" class="full-width-white">
  <div class="wide-container">
    <div class="breadcrumb-light fade-up" style="text-align: center;">INSTITUTIONAL ENGAGEMENTS</div>
    <h2 class="section-title-dark fade-up delay-1" style="text-align: center;">Policy Dialogues</h2>
    <p class="section-text-dark fade-up delay-2" style="text-align: center; max-width: 800px; margin: 0 auto;">ATICC facilitates structured policy dialogues between institutional stakeholders, governments, and regulatory bodies.</p>
    <div class="framework-split">
      <div class="split-left fade-left">
        <ul class="bullet-list">
          <li><span>AfCFTA Implementation Dialogues:</span> Strategic engagements on corridor development and trade facilitation</li>
          <li><span>Regulatory Alignment Forums:</span> Discussions on cross-border compliance and investment frameworks</li>
          <li><span>Capital Market Policy Roundtables:</span> Engagements with institutional investors and policy makers</li>
        </ul>
      </div>
      <div class="split-right fade-right">
        <ul class="bullet-list">
          <li><span>Sector Policy Dialogues:</span> Focused discussions on energy, infrastructure, and digital trade policy</li>
          <li><span>Bilateral Investment Frameworks:</span> Structured engagements between African markets and international partners</li>
          <li><span>Institutional Governance Forums:</span> Policy discussions on verification and compliance standards</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="section-spacer"></div>

<!-- ========= PAST EVENTS HIGHLIGHTS ========= -->
<div id="event-registration" class="full-width-gray">
  <div class="wide-container">
    <div class="centered-eyebrow fade-up" style="text-align: center;">INSTITUTIONAL MILESTONES</div>
    <div class="large-statement fade-up delay-1" style="text-align: center; font-size: 32px;">Past Events</div>
    <div class="products-grid" style="display: flex; gap: 32px; margin-top: 50px; flex-wrap: wrap;">
      @forelse($pastEvents as $event)
      <div class="product-card glide-in delay-1" style="flex: 1;">
        <h4>{{ $event->title }}</h4>
        <p>{{ Str::limit($event->description, 100) }}</p>
        <p style="margin-top: 10px; color: #C49A6C; font-size: 12px;">{{ $event->start_date->format('F Y') }} | {{ $event->location }}</p>
        @if($event->highlights_link)
        <a href="{{ $event->highlights_link }}" target="_blank" style="color: #031B4E; font-size: 12px; text-decoration: none; margin-top: 10px; display: inline-block;">View Highlights →</a>
        @endif
      </div>
      @empty
      <div style="text-align: center; width: 100%; padding: 40px;">
        <p style="font-size: 14px; color: #7A8B9B;">No past events to display.</p>
      </div>
      @endforelse
    </div>
  </div>
</div>

<!-- ========= REGISTRATION CTA ========= -->
<div class="full-width-white">
  <div class="wide-container" style="text-align: center;">
    <div class="centered-eyebrow fade-up" style="text-align: center;">PARTICIPATION</div>
    <div class="large-statement fade-up delay-1" style="text-align: center; font-size: 32px;">Secure Your Invitation</div>
    <p class="section-text-dark fade-up delay-2" style="text-align: center; max-width: 600px; margin: 0 auto 30px auto;">Access to ATICC summits and missions is structured and based on verification status. Institutional partners and verified members receive priority access.</p>
    <a href="#" class="cta-button" style="display: inline-block; background-color: #0e0e0e; color: white; border: none; padding: 16px 36px; font-size: 16px; font-weight: 600; letter-spacing: 0.05em; border-radius: 4px; text-decoration: none; text-transform: uppercase;">Request Invitation →</a>
  </div>
</div>

<!-- ========= FINAL QUOTE ========= -->
<div class="final-quote">
  <p class="scale-in" style="font-size: 18px;">Structure defines authority.<br>Integrity anchors capital.<br>Execution drives value.</p>
</div>

@include('layouts.footer')

<style>
  /* Additional styles for Events Page */
  .full-width-white {
    width: 100%;
    background: white;
    padding: 80px 0;
  }
  
  .full-width-gray {
    width: 100%;
    background: #F5F6F8;
    padding: 80px 0;
  }
  
  .breadcrumb-light {
    font-size: 14px;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    color: #5d6f7f;
    margin-bottom: 20px;
    font-weight: 400;
  }
  
  .section-title-dark {
    font-size: 48px;
    font-weight: 300;
    color: #0e0e0e;
    margin-bottom: 20px;
  }
  
  .section-text-dark {
    font-size: 16px;
    color: #3a4c5e;
    line-height: 1.7;
  }
  
  .products-grid {
    display: flex;
    gap: 32px;
    flex-wrap: wrap;
  }
  
  .product-card {
    flex: 1;
    background: #f5f6f8;
    padding: 32px 28px;
    border-radius: 16px;
  }
  
  .product-card h4 {
    font-size: 20px;
    font-weight: 300;
    margin-bottom: 12px;
    color: #0e0e0e;
  }
  
  .product-card p {
    font-size: 14px;
    color: #4a5e72;
    line-height: 1.5;
  }
  
  .centered-eyebrow {
    font-size: 13px;
    letter-spacing: 0.15em;
    text-transform: uppercase;
    color: #C49A6C;
    margin-bottom: 15px;
  }
  
  .large-statement {
    font-size: 48px;
    font-weight: 300;
    color: #031B4E;
    margin-bottom: 20px;
  }
  
  .policy-split, .framework-split {
    display: flex;
    gap: 60px;
    align-items: flex-start;
  }
  
  .split-left, .split-right {
    flex: 1;
  }
  
  .bullet-list {
    list-style: none;
    padding: 0;
  }
  
  .bullet-list li {
    padding: 8px 28px;
    font-size: 15px;
    color: #1A1A1A;
    border-bottom: 1px solid #E8EBED;
  }
  
  .bullet-list li::before {
    content: "✓";
    color: #031B4E;
    margin-right: 12px;
    font-weight: bold;
  }
  
  .final-quote {
    background: white;
    text-align: center;
    padding: 80px 20px;
  }
  
  .final-quote p {
    font-size: 28px;
    color: #0e0e0e;
    line-height: 1.4;
  }
  
  .section-spacer {
    height: 1px;
    background: transparent;
  }
  
  .breadcrumb {
    font-size: 13px;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    color: #C49A6C;
    margin-bottom: 15px;
  }
  
  .cta-button {
    transition: all 0.3s cubic-bezier(0.2, 0.9, 0.4, 1.1);
  }
  
  .cta-button:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(11, 31, 58, 0.12);
  }
  
  .hero-section {
    margin-top: 0;
  }
  
  @media (max-width: 1100px) {
    .section-title-dark {
      font-size: 38px;
    }
    .full-width-white, .full-width-gray {
      padding: 60px 0;
    }
    .large-statement {
      font-size: 32px !important;
    }
    .policy-split, .framework-split {
      flex-direction: column;
      gap: 30px;
    }
    .event-card > div:first-child {
      padding: 30px;
    }
  }
  
  @media (max-width: 768px) {
    .section-title-dark {
      font-size: 32px;
    }
    .full-width-white, .full-width-gray {
      padding: 40px 0;
    }
    .products-grid {
      flex-direction: column;
    }
    .large-statement {
      font-size: 24px !important;
    }
    .final-quote p {
      font-size: 22px !important;
    }
    .hero-content h1 {
      max-width: 100% !important;
    }
    .hero-content .body-text {
      max-width: 100% !important;
    }
    .event-card {
      flex-direction: column;
    }
    .event-card > div:last-child {
      margin: 0 20px 20px 20px;
      width: auto;
      min-width: auto;
    }
    .hero-section {
      padding-top: 100px !important;
    }
  }
</style>

<script>
  // Intersection Observer for smooth scroll-triggered animations
  const animatedElements = document.querySelectorAll('.fade-up, .fade-left, .fade-right, .scale-in, .glide-in, .grid-card, .product-card, .event-card');
  
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('revealed');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.15, rootMargin: '0px 0px -50px 0px' });

  animatedElements.forEach(el => observer.observe(el));

  // Nav scroll effect
  window.addEventListener('scroll', function() {
    const nav = document.getElementById('stickyNav');
    if (window.scrollY > 50) {
      nav.classList.add('scrolled');
      document.body.classList.add('nav-shrunk');
    } else {
      nav.classList.remove('scrolled');
      document.body.classList.remove('nav-shrunk');
    }
  });
</script>

@endsection