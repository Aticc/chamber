<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MemberAuthController;

// ========= ABOUT SUBPAGES =========
Route::get('/about', function () { return view('about'); })->name('about');
Route::get('/about/overview', function () { return view('about.overview'); })->name('about.overview');
Route::get('/about/mission', function () { return view('about.mission'); })->name('about.mission');
Route::get('/about/governance', function () { return view('about.governance'); })->name('about.governance');
Route::get('/about/leadership', function () { return view('about.leadership'); })->name('about.leadership');
Route::get('/about/regional', function () { return view('about.regional'); })->name('about.regional');
Route::get('/about/standards', function () { return view('about.standards'); })->name('about.standards');
Route::get('/about/legal', function () { return view('about.legal'); })->name('about.legal');
Route::get('/about/sectors', function () { return view('about.sectors'); })->name('about.sectors');

// ========= MEMBERSHIP SUBPAGES =========
Route::get('/membership', function () { return view('membership'); })->name('membership');
Route::get('/membership/institutional', function () { return view('membership.institutional'); })->name('membership.institutional');
Route::get('/membership/corporate', function () { return view('membership.corporate'); })->name('membership.corporate');
Route::get('/membership/investor', function () { return view('membership.investor'); })->name('membership.investor');
Route::get('/membership/verified', function () { return view('membership.verified'); })->name('membership.verified');
Route::get('/membership/benefits', function () { return view('membership.benefits'); })->name('membership.benefits');
Route::get('/membership/verification-standards', function () { return view('membership.verification-standards'); })->name('membership.verification-standards');
Route::get('/membership/apply', [MembershipController::class, 'apply'])->name('membership.apply');
Route::post('/membership/submit', [MembershipController::class, 'submit'])->name('membership.submit');
Route::get('/membership/thankyou/{id}', [MembershipController::class, 'thankyou'])->name('membership.thankyou');

// ========= TRADE & INVESTMENT SUBPAGES =========
Route::get('/trade', function () { return view('trade.index'); })->name('trade.index');
Route::get('/trade/facilitation', function () { return view('trade.facilitation'); })->name('trade.facilitation');
Route::get('/trade/market-access', function () { return view('trade.market-access'); })->name('trade.market-access');
Route::get('/trade/sector-programs', function () { return view('trade.sector-programs'); })->name('trade.sector-programs');
Route::get('/trade/investment-coordination', function () { return view('trade.investment-coordination'); })->name('trade.investment-coordination');
Route::get('/trade/capital-matching', function () { return view('trade.capital-matching'); })->name('trade.capital-matching');
Route::get('/trade/project-validation', function () { return view('trade.project-validation'); })->name('trade.project-validation');
Route::get('/trade/partnerships', function () { return view('trade.partnerships'); })->name('trade.partnerships');
Route::get('/trade/infrastructure', function () { return view('trade.infrastructure'); })->name('trade.infrastructure');
Route::get('/trade/digital', function () { return view('trade.digital'); })->name('trade.digital');

// ========= INTELLIGENCE SUBPAGES =========
Route::get('/intelligence', function () { return view('intelligence.index'); })->name('intelligence.index');
Route::get('/intelligence/market', function () { return view('intelligence.market'); })->name('intelligence.market');
Route::get('/intelligence/sector-reports', function () { return view('intelligence.sector-reports'); })->name('intelligence.sector-reports');
Route::get('/intelligence/briefings', function () { return view('intelligence.briefings'); })->name('intelligence.briefings');
Route::get('/intelligence/trade-insights', function () { return view('intelligence.trade-insights'); })->name('intelligence.trade-insights');
Route::get('/intelligence/research', function () { return view('intelligence.research'); })->name('intelligence.research');
Route::get('/intelligence/economic-outlooks', function () { return view('intelligence.economic-outlooks'); })->name('intelligence.economic-outlooks');
Route::get('/intelligence/strategic-reports', function () { return view('intelligence.strategic-reports'); })->name('intelligence.strategic-reports');

// ========= EVENTS & MISSIONS SUBPAGES =========
Route::get('/events', [App\Http\Controllers\EventController::class, 'publicEvents'])->name('events.index');
Route::get('/events/summits', function () { return view('events.summits'); })->name('events.summits');
Route::get('/events/trade-missions', function () { return view('events.trade-missions'); })->name('events.trade-missions');
Route::get('/events/investment-forums', function () { return view('events.investment-forums'); })->name('events.investment-forums');
Route::get('/events/roundtables', function () { return view('events.roundtables'); })->name('events.roundtables');
Route::get('/events/policy-dialogues', function () { return view('events.policy-dialogues'); })->name('events.policy-dialogues');
Route::get('/events/upcoming', function () { return view('events.upcoming'); })->name('events.upcoming');
Route::get('/events/register', function () { return view('events.register'); })->name('events.register');

// ========= VERIFICATION SUBPAGES =========
Route::get('/verification', function () { return view('verification.index'); })->name('verification.index');
Route::get('/verification/framework', function () { return view('verification.framework'); })->name('verification.framework');
Route::get('/verification/due-diligence', function () { return view('verification.due-diligence'); })->name('verification.due-diligence');
Route::get('/verification/validation', function () { return view('verification.validation'); })->name('verification.validation');
Route::get('/verification/compliance', function () { return view('verification.compliance'); })->name('verification.compliance');
Route::get('/verification/risk-assessment', function () { return view('verification.risk-assessment'); })->name('verification.risk-assessment');
Route::get('/verification/access', function () { return view('verification.access'); })->name('verification.access');
Route::get('/verification/submit', function () { return view('verification.submit'); })->name('verification.submit');

// ========= CONTACT SUBPAGES =========
Route::get('/contact', function () { return view('contact.index'); })->name('contact.index');
Route::get('/contact/inquiry', function () { return view('contact.inquiry'); })->name('contact.inquiry');
Route::get('/contact/partnership', function () { return view('contact.partnership'); })->name('contact.partnership');
Route::get('/contact/transaction', function () { return view('contact.transaction'); })->name('contact.transaction');
Route::get('/contact/verification-support', function () { return view('contact.verification-support'); })->name('contact.verification-support');
Route::get('/contact/media', function () { return view('contact.media'); })->name('contact.media');
Route::get('/contact/offices', function () { return view('contact.offices'); })->name('contact.offices');

// ========= HOME PAGE =========
Route::get('/', function () { return view('welcome'); })->name('home');

// Access Plans Page
Route::get('/access-plans', [MembershipController::class, 'plans'])->name('access.plans');

// Contact Routes
Route::post('/contact/send', [ContactController::class, 'sendContact'])->name('contact.send');
Route::post('/contact/opportunity', [ContactController::class, 'sendOpportunity'])->name('contact.opportunity');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Regular User Dashboard
Route::get('/dashboard', function () {
    return view('users.dashboard');
})->middleware('auth')->name('dashboard');

// Member Portal Routes
Route::prefix('member')->name('member.')->group(function () {
    Route::get('/login', [MemberAuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [MemberAuthController::class, 'login'])->name('login.submit');
    Route::post('/logout', [MemberAuthController::class, 'logout'])->name('logout');
    
    Route::middleware(['member.auth'])->group(function () {
        Route::get('/dashboard', [MemberAuthController::class, 'dashboard'])->name('dashboard');
        Route::get('/events', [MemberAuthController::class, 'events'])->name('events');
        Route::get('/tier1', [MemberAuthController::class, 'tier1Dashboard'])->name('tier1');
        Route::get('/tier2', [MemberAuthController::class, 'tier2Dashboard'])->name('tier2');
        Route::get('/tier3', [MemberAuthController::class, 'tier3Dashboard'])->name('tier3');
        Route::get('/profile', [MemberAuthController::class, 'profile'])->name('profile');
        Route::put('/profile', [MemberAuthController::class, 'updateProfile'])->name('profile.update');
    });
});

// Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    
    Route::middleware(['admin'])->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/dashboard/login-as-member/{id}', [DashboardController::class, 'loginAsMember'])->name('members.login-as');
        Route::get('/dashboard/stop-impersonating', [DashboardController::class, 'stopImpersonating'])->name('stop-impersonating');
        
        Route::get('/events', [EventController::class, 'index'])->name('events.index');
        Route::get('/events/create', [EventController::class, 'create'])->name('events.create');
        Route::post('/events', [EventController::class, 'store'])->name('events.store');
        Route::get('/events/{id}/edit', [EventController::class, 'edit'])->name('events.edit');
        Route::put('/events/{id}', [EventController::class, 'update'])->name('events.update');
        Route::delete('/events/{id}', [EventController::class, 'destroy'])->name('events.destroy');
        Route::get('/events/{id}/registrations', [EventController::class, 'registrations'])->name('events.registrations');
        Route::put('/events/registrations/{id}/status', [EventController::class, 'updateRegistrationStatus'])->name('events.registration-status');
        Route::get('/events/{id}/download-agenda', [EventController::class, 'downloadAgenda'])->name('events.download-agenda');

        Route::get('/members', [MemberController::class, 'index'])->name('members.index');
        Route::get('/members/{member}', [MemberController::class, 'show'])->name('members.show');
        Route::put('/members/{member}/status', [MemberController::class, 'updateStatus'])->name('members.status');
        Route::delete('/members/{member}', [MemberController::class, 'destroy'])->name('members.destroy');
        Route::get('/members/{id}/download/{type}', [MemberController::class, 'download'])->name('members.download');
        
        Route::get('/membership-applications', [MembershipController::class, 'adminIndex'])->name('membership.applications');
        Route::get('/membership-application/{id}', [MembershipController::class, 'adminShow'])->name('membership.show');
        Route::post('/membership-application/{id}/status', [MembershipController::class, 'adminUpdateStatus'])->name('membership.update-status');
        Route::get('/membership-application/{id}/download/{field}', [MembershipController::class, 'adminDownloadFile'])->name('membership.download');
    });
});