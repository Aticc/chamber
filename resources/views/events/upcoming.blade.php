@extends("layouts.app")

@section('content')


<!-- ========= UPCOMING EVENTS HERO SECTION ========= -->
<div id="hero" class="hero-section" style="position: relative; background-color: white; overflow: hidden; min-height: 60vh;">
  
  <!-- Image as a soft background element on the right -->
  <div style="position: absolute; top: 0; right: 0; width: 65%; height: 100%; pointer-events: none;">
    <div style="position: absolute; top: 0; right: 0; width: 90%; height: 100%; background: url('{{ asset('assets/images/Upcoming Events.png') }}') no-repeat right center; background-size: cover; mask-image: linear-gradient(to left, black 71%, transparent 100%); -webkit-mask-image: linear-gradient(to left, black 71%, transparent 100%);"></div>
  </div>
  
  <!-- Text content - consistent padding -->
  <div class="hero-content" style="position: relative; z-index: 2; max-width: 55%; margin: 0; padding: 60px 40px;">
    <div class="breadcrumb fade-up revealed" style="margin-bottom: 20px;">Home / Events / Upcoming Events</div>
    <h1 class="headline fade-up revealed" style="max-width: 65%;">Upcoming <span>Events</span></h1>
    <div class="body-text fade-up delay-2 revealed" style="max-width: 108%; line-height: 1.5;">View all upcoming ATICC institutional engagements and strategic convenings.</div>
  </div>
</div>

<!-- ========= UPCOMING EVENTS SECTION ========= -->
<div class="full-width-white">
  <div class="wide-container">
    <div class="centered-eyebrow fade-up" style="text-align: center;">INSTITUTIONAL CALENDAR</div>
    <div class="large-statement fade-up delay-1" style="text-align: center; font-size: 36px;">Upcoming Engagements</div>
    <p class="section-text-dark fade-up delay-2" style="text-align: center; max-width: 800px; margin: 0 auto;">ATICC convenes institutional summits, missions, and strategic engagements throughout the year.</p>
    
    @forelse($upcomingEvents ?? [] as $event)
    <div class="event-card glide-in delay-1" style="display: flex; gap: 40px; align-items: center; margin-top: 50px; background: #F5F6F8; border-radius: 20px; overflow: hidden; flex-wrap: wrap;">
      <div style="flex: 1; padding: 40px;">
        <div style="font-size: 13px; letter-spacing: 0.08em; text-transform: uppercase; color: #C49A6C; margin-bottom: 10px;">{{ $event->start_date->format('F j, Y') }}</div>
        <h3 style="font-size: 28px; font-weight: 400; color: #0e0e0e; margin-bottom: 15px;">{{ $event->title }}</h3>
        <p style="font-size: 16px; color: #3a4c5e; line-height: 1.6; margin-bottom: 20px;">{{ $event->description }}</p>
        <div style="display: flex; gap: 15px; flex-wrap: wrap;">
          <span style="background: #041931; color: white; padding: 5px 15px; border-radius: 20px; font-size: 12px;">{{ ucfirst($event->event_type) }}</span>
          <span style="background: #E8EBED; color: #2E4156; padding: 5px 15px; border-radius: 20px; font-size: 12px;">{{ $event->location }}</span>
        </div>
      </div>
      <div style="flex: 0.5; min-width: 200px; height: 250px; background: linear-gradient(135deg, #041931, #031B4E); margin: 20px 40px 20px 0; border-radius: 16px; display: flex; align-items: center; justify-content: center; color: white; font-size: 14px;">Event Image</div>
    </div>
    @empty
    <div style="text-align: center; padding: 60px; background: #F5F6F8; border-radius: 20px; margin-top: 50px;">
      <p style="font-size: 18px; color: #7A8B9B;">No upcoming events at this time. Please check back later.</p>
    </div>
    @endforelse
  </div>
</div>

<!-- ========= FINAL QUOTE ========= -->
<div class="final-quote">
  <p class="scale-in" style="font-size: 18px;">Structure defines authority.<br>Integrity anchors capital.<br>Execution drives value.</p>
</div>

@include('layouts.footer')

<style>
  .full-width-white { width: 100%; background: white; padding: 80px 0; }
  .centered-eyebrow { font-size: 13px; letter-spacing: 0.15em; text-transform: uppercase; color: #C49A6C; margin-bottom: 15px; text-align: center; }
  .large-statement { font-size: 48px; font-weight: 400; color: #031B4E; margin-bottom: 20px; text-align: center; }
  .final-quote { background: white; text-align: center; padding: 80px 20px; }
  .final-quote p { font-size: 28px; color: #0e0e0e; line-height: 1.4; }
  @media (max-width: 768px) { .full-width-white { padding: 40px 0; } .large-statement { font-size: 28px !important; } .event-card { flex-direction: column; } .event-card > div:last-child { margin: 0 20px 20px 20px; width: auto; } .final-quote p { font-size: 22px !important; } }
</style>
<script>
  const animatedElements = document.querySelectorAll('.fade-up, .fade-left, .fade-right, .scale-in, .glide-in');
  const observer = new IntersectionObserver((entries) => { entries.forEach(entry => { if (entry.isIntersecting) { entry.target.classList.add('revealed'); observer.unobserve(entry.target); } }); }, { threshold: 0.15 });
  animatedElements.forEach(el => observer.observe(el));
  window.addEventListener('scroll', function() { const nav = document.getElementById('stickyNav'); if (window.scrollY > 50) { nav.classList.add('scrolled'); document.body.classList.add('nav-shrunk'); } else { nav.classList.remove('scrolled'); document.body.classList.remove('nav-shrunk'); } });
</script>
@endsection