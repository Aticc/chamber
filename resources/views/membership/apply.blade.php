@extends('layouts.app')

@section('content')

@if($errors->any())
    <div class="error-alert">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(session('error'))
    <div class="error-alert">
        {{ session('error') }}
    </div>
@endif

<div class="tier-application-container">
    <div class="application-header">
        <div class="breadcrumb">Membership / Accession Application</div>
        <h1>ATICC MEMBERSHIP <span class="gold-accent">ACCESSION FORM</span></h1>
        <p class="subtitle" id="selectedTierDisplay">Complete the form below based on your selected membership tier</p>
    </div>

    <div class="application-content">
        <form id="membershipForm" method="POST" action="{{ route('membership.submit') }}" enctype="multipart/form-data" novalidate>
            @csrf
            <input type="hidden" name="selected_tier" id="selectedTier" value="">
            <input type="hidden" name="tier_name" id="tierName" value="">
            <input type="hidden" name="tier_price" id="tierPrice" value="">

            <!-- Selected Plan Summary -->
            <div class="selected-plan-card" id="selectedPlanCard">
                <div class="selected-plan-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M19 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2z"/>
                        <path d="M9 3v18M15 3v18M3 9h18M3 15h18"/>
                    </svg>
                </div>
                <div class="selected-plan-details">
                    <h4 id="selectedPlanName">No tier selected</h4>
                    <p id="selectedPlanPrice"></p>
                </div>
                <a href="{{ route('access.plans') }}" class="change-plan-link">Change Plan →</a>
            </div>

            <!-- Multi-step Progress -->
            <div class="progress-steps">
                <div class="step active" data-step="1">
                    <div class="step-num">1</div>
                    <div class="step-text">Organization Profile</div>
                </div>
                <div class="step-line"></div>
                <div class="step" data-step="2">
                    <div class="step-num">2</div>
                    <div class="step-text">Contact & Strategy</div>
                </div>
                <div class="step-line"></div>
                <div class="step" data-step="3">
                    <div class="step-num">3</div>
                    <div class="step-text">Documents & Verification</div>
                </div>
                <div class="step-line"></div>
                <div class="step" data-step="4">
                    <div class="step-num">4</div>
                    <div class="step-text">Preview & Submit</div>
                </div>
            </div>

            <!-- STEP 1: Organization Profile -->
            <div class="form-step active" id="step1">
                <div class="form-card">
                    <div class="form-card-header">
                        <h3>SECTION 1 — ORGANIZATION PROFILE</h3>
                        <span class="section-badge">Required</span>
                    </div>
                    <div class="form-card-body">
                        <div class="form-group">
                            <label>Legal Name of Institution / Organization <span class="required">*</span></label>
                            <input type="text" name="legal_name" id="legal_name" class="form-input" placeholder="Enter legal name">
                        </div>

                        <div class="form-group">
                            <label>Type of Institution / Business <span class="required">*</span></label>
                            <select name="institution_type" id="institution_type" class="form-select">
                                <option value="">Select Type</option>
                                <optgroup label="Tier I & II Options">
                                    <option value="Private Equity Group">Private Equity Group</option>
                                    <option value="Asset Management Firm">Asset Management Firm</option>
                                    <option value="Family Office">Family Office</option>
                                    <option value="Global Conglomerate">Global Conglomerate</option>
                                    <option value="Trade Finance Institution">Trade Finance Institution</option>
                                    <option value="Infrastructure Investment Group">Infrastructure Investment Group</option>
                                    <option value="Institutional Capital Partner">Institutional Capital Partner</option>
                                    <option value="Multinational Corporation">Multinational Corporation</option>
                                    <option value="Industrial Conglomerate">Industrial Conglomerate</option>
                                </optgroup>
                                <optgroup label="Tier III Options">
                                    <option value="SME">SME</option>
                                    <option value="Supplier">Supplier</option>
                                    <option value="Professional Service Provider">Professional Service Provider</option>
                                    <option value="Trade Company">Trade Company</option>
                                </optgroup>
                                <option value="Other">Other</option>
                            </select>
                            <input type="text" name="institution_type_other" id="institution_type_other" class="form-input mt-2" placeholder="Other / Individual" style="display:none;">
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label>Country of Registration <span class="required">*</span></label>
                                <input type="text" name="country_registration" id="country_registration" class="form-input" placeholder="Country">
                            </div>
                            <div class="form-group">
                                <label>Registration / Incorporation Number</label>
                                <input type="text" name="registration_number" id="registration_number" class="form-input" placeholder="Registration number">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label>Year Established</label>
                                <input type="number" name="year_established" id="year_established" class="form-input" placeholder="YYYY">
                            </div>
                            <div class="form-group">
                                <label>Official Website</label>
                                <input type="url" name="website" id="website" class="form-input" placeholder="https://">
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Headquarters Address / Business Address <span class="required">*</span></label>
                            <textarea name="address" id="address" class="form-textarea" rows="2" placeholder="Full address"></textarea>
                        </div>

                        <div class="form-group">
                            <label>Regional Operating Jurisdictions / Primary Operating Region</label>
                            <textarea name="operating_jurisdictions" id="operating_jurisdictions" class="form-textarea" rows="2" placeholder="List countries/regions where you operate..."></textarea>
                        </div>
                    </div>
                </div>
                <div class="step-navigation">
                    <button type="button" class="btn-next" id="step1Next">Continue to Contact & Strategy →</button>
                </div>
            </div>

            <!-- STEP 2: Contact & Strategy -->
            <div class="form-step" id="step2">
                <div class="form-card">
                    <div class="form-card-header">
                        <h3>SECTION 2 — PRIMARY CONTACT REPRESENTATIVE</h3>
                        <span class="section-badge">Required</span>
                    </div>
                    <div class="form-card-body">
                        <div class="form-row">
                            <div class="form-group">
                                <label>Full Name <span class="required">*</span></label>
                                <input type="text" name="contact_name" id="contact_name" class="form-input" placeholder="Full name">
                            </div>
                            <div class="form-group">
                                <label>Position / Title <span class="required">*</span></label>
                                <input type="text" name="contact_position" id="contact_position" class="form-input" placeholder="Position/Title">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label>Official Email <span class="required">*</span></label>
                                <input type="email" name="contact_email" id="contact_email" class="form-input" placeholder="email@organization.com">
                            </div>
                            <div class="form-group">
                                <label>Mobile / Direct Contact Number <span class="required">*</span></label>
                                <input type="tel" name="contact_phone" id="contact_phone" class="form-input" placeholder="+123 456 7890">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>LinkedIn / Professional Profile</label>
                            <input type="url" name="linkedin" id="linkedin" class="form-input" placeholder="https://linkedin.com/in/">
                        </div>
                        <div class="form-group">
                            <label>Authorized Representative Status <span class="required">*</span></label>
                            <div class="radio-group">
                                <label class="radio-label"><input type="radio" name="authorized_status" value="Yes"> <span>Yes</span></label>
                                <label class="radio-label"><input type="radio" name="authorized_status" value="No"> <span>No</span></label>
                            </div>
                            <p class="help-text">Are you authorized to represent the institution in strategic onboarding discussions?</p>
                        </div>
                    </div>
                </div>

                <div class="form-card">
                    <div class="form-card-header">
                        <h3>SECTION 3 — INSTITUTIONAL CAPACITY & STRATEGIC ALIGNMENT</h3>
                        <span class="section-badge">Required</span>
                    </div>
                    <div class="form-card-body">
                        <div class="form-group">
                            <label>Primary Sector Focus <span class="required">*</span></label>
                            <select name="primary_sector" id="primary_sector" class="form-select">
                                <option value="">Select Sector</option>
                                <option value="Infrastructure">Infrastructure</option>
                                <option value="Energy">Energy</option>
                                <option value="Trade Finance">Trade Finance</option>
                                <option value="Logistics">Logistics</option>
                                <option value="Agriculture">Agriculture</option>
                                <option value="Manufacturing">Manufacturing</option>
                                <option value="Technology">Technology</option>
                                <option value="Mining">Mining</option>
                                <option value="Supply Chain">Supply Chain</option>
                                <option value="Cross-Border Trade">Cross-Border Trade</option>
                                <option value="Capital Markets">Capital Markets</option>
                                <option value="Trade">Trade</option>
                                <option value="Professional Services">Professional Services</option>
                                <option value="Other">Other</option>
                            </select>
                            <input type="text" name="primary_sector_other" id="primary_sector_other" class="form-input mt-2" placeholder="Other" style="display:none;">
                        </div>

                        <div class="form-group">
                            <label>Intended Trade & Investment Corridors</label>
                            <div class="checkbox-grid">
                                <label class="checkbox-label"><input type="checkbox" name="trade_corridors[]" value="Nigeria"> Nigeria</label>
                                <label class="checkbox-label"><input type="checkbox" name="trade_corridors[]" value="Rwanda"> Rwanda</label>
                                <label class="checkbox-label"><input type="checkbox" name="trade_corridors[]" value="United Kingdom"> United Kingdom</label>
                                <label class="checkbox-label"><input type="checkbox" name="trade_corridors[]" value="East Africa"> East Africa</label>
                                <label class="checkbox-label"><input type="checkbox" name="trade_corridors[]" value="Southern Africa"> Southern Africa</label>
                                <label class="checkbox-label"><input type="checkbox" name="trade_corridors[]" value="West Africa"> West Africa</label>
                                <label class="checkbox-label"><input type="checkbox" name="trade_corridors[]" value="Middle East"> Middle East</label>
                                <label class="checkbox-label"><input type="checkbox" name="trade_corridors[]" value="Europe"> Europe</label>
                                <label class="checkbox-label"><input type="checkbox" name="trade_corridors[]" value="Pan-African"> Pan-African</label>
                            </div>
                            <input type="text" name="trade_corridors_other" class="form-input mt-2" placeholder="Other">
                        </div>

                        <div class="form-group" id="capacity_field">
                            <label>Estimated Capacity (Annual)</label>
                            <select name="capacity" id="capacity" class="form-select">
                                <option value="">Select Capacity</option>
                                <option value="$10M – $50M">$10M – $50M</option>
                                <option value="$50M – $100M">$50M – $100M</option>
                                <option value="$100M – $500M">$100M – $500M</option>
                                <option value="$500M+">$500M+</option>
                                <option value="$1M – $10M">$1M – $10M</option>
                                <option value="$100M+">$100M+</option>
                                <option value="Below $100K">Below $100K</option>
                                <option value="$100K – $500K">$100K – $500K</option>
                                <option value="$500K – $1M">$500K – $1M</option>
                                <option value="$1M+">$1M+</option>
                                <option value="Prefer Confidential Disclosure During Review">Prefer Confidential Disclosure During Review</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Strategic Interest Within the ATICC Ecosystem</label>
                            <div class="checkbox-grid">
                                <label class="checkbox-label"><input type="checkbox" name="strategic_interests[]" value="Corridor Development"> Corridor Development</label>
                                <label class="checkbox-label"><input type="checkbox" name="strategic_interests[]" value="Capital Alignment"> Capital Alignment</label>
                                <label class="checkbox-label"><input type="checkbox" name="strategic_interests[]" value="Trade Facilitation"> Trade Facilitation</label>
                                <label class="checkbox-label"><input type="checkbox" name="strategic_interests[]" value="Infrastructure Development"> Infrastructure Development</label>
                                <label class="checkbox-label"><input type="checkbox" name="strategic_interests[]" value="Strategic Partnerships"> Strategic Partnerships</label>
                                <label class="checkbox-label"><input type="checkbox" name="strategic_interests[]" value="Cross-Border Expansion"> Cross-Border Expansion</label>
                                <label class="checkbox-label"><input type="checkbox" name="strategic_interests[]" value="Institutional Market Access"> Institutional Market Access</label>
                                <label class="checkbox-label"><input type="checkbox" name="strategic_interests[]" value="Supply Chain Integration"> Supply Chain Integration</label>
                                <label class="checkbox-label"><input type="checkbox" name="strategic_interests[]" value="Project Financing"> Project Financing</label>
                                <label class="checkbox-label"><input type="checkbox" name="strategic_interests[]" value="Supplier Participation"> Supplier Participation</label>
                                <label class="checkbox-label"><input type="checkbox" name="strategic_interests[]" value="Institutional Visibility"> Institutional Visibility</label>
                                <label class="checkbox-label"><input type="checkbox" name="strategic_interests[]" value="Market Expansion"> Market Expansion</label>
                            </div>
                            <input type="text" name="strategic_interests_other" class="form-input mt-2" placeholder="Other">
                        </div>

                        <div class="form-group">
                            <label>Intended Participation Objective / Business Growth Objectives</label>
                            <textarea name="participation_objective" id="participation_objective" class="form-textarea" rows="4" placeholder="Please provide a brief overview of your institutional objectives..."></textarea>
                        </div>
                    </div>
                </div>

                <div class="form-card">
                    <div class="form-card-header">
                        <h3>SECTION 4 — CAPITAL ALIGNMENT & EXECUTION READINESS</h3>
                        <span class="section-badge">Required</span>
                    </div>
                    <div class="form-card-body">
                        <div class="form-group">
                            <label>Are you seeking: (Select all that apply)</label>
                            <div class="checkbox-grid">
                                <label class="checkbox-label"><input type="checkbox" name="seeking_opportunities[]" value="Investment Opportunities"> Investment Opportunities</label>
                                <label class="checkbox-label"><input type="checkbox" name="seeking_opportunities[]" value="Trade Opportunities"> Trade Opportunities</label>
                                <label class="checkbox-label"><input type="checkbox" name="seeking_opportunities[]" value="Strategic Partnerships"> Strategic Partnerships</label>
                                <label class="checkbox-label"><input type="checkbox" name="seeking_opportunities[]" value="Corridor Participation"> Corridor Participation</label>
                                <label class="checkbox-label"><input type="checkbox" name="seeking_opportunities[]" value="Co-Investment Structures"> Co-Investment Structures</label>
                                <label class="checkbox-label"><input type="checkbox" name="seeking_opportunities[]" value="Infrastructure Projects"> Infrastructure Projects</label>
                                <label class="checkbox-label"><input type="checkbox" name="seeking_opportunities[]" value="Capital Deployment Opportunities"> Capital Deployment Opportunities</label>
                                <label class="checkbox-label"><input type="checkbox" name="seeking_opportunities[]" value="Verified Suppliers"> Verified Suppliers</label>
                                <label class="checkbox-label"><input type="checkbox" name="seeking_opportunities[]" value="Regional Expansion Support"> Regional Expansion Support</label>
                            </div>
                            <input type="text" name="seeking_opportunities_other" class="form-input mt-2" placeholder="Other">
                        </div>

                        <div class="form-group">
                            <label>Existing African Market Exposure / Presence</label>
                            <textarea name="market_exposure" id="market_exposure" class="form-textarea" rows="3" placeholder="Please summarize your current operational or investment exposure across African markets..."></textarea>
                        </div>

                        <div class="form-group">
                            <label>Execution Readiness Status</label>
                            <select name="readiness_status" id="readiness_status" class="form-select">
                                <option value="Immediate Engagement">Immediate Engagement</option>
                                <option value="Within 3 Months">Within 3 Months</option>
                                <option value="Within 6 Months">Within 6 Months</option>
                                <option value="Exploratory Discussion Stage">Exploratory Discussion Stage</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="step-navigation">
                    <button type="button" class="btn-prev">← Back</button>
                    <button type="button" class="btn-next" id="step2Next">Continue to Documents →</button>
                </div>
            </div>

            <!-- STEP 3: Documents & Verification -->
            <div class="form-step" id="step3">
                <div class="form-card">
                    <div class="form-card-header">
                        <h3>SECTION 5 — TRUST & VERIFICATION (T&V) REQUIREMENTS</h3>
                        <span class="section-badge">Required</span>
                    </div>
                    <div class="form-card-body">
                        <div class="notice-box warning">
                            <div class="notice-icon">⚠️</div>
                            <div class="notice-content">
                                <h4>Mandatory Institutional Verification Notice</h4>
                                <p>ATICC operates under a Trust & Verification (T&V) framework designed to preserve: Institutional integrity; Transaction credibility; Cross-border accountability; Ecosystem trust standards.</p>
                                <p>All accession requests are subject to: Identity verification; Beneficial ownership review; KYC procedures; AML review; Institutional integrity assessment.</p>
                            </div>
                        </div>

                        <div class="checkbox-wrapper">
                            <label class="checkbox-container">
                                <input type="checkbox" name="verification_acknowledgement" id="verification_ack">
                                <span class="checkmark"></span>
                                <span class="checkbox-text">Verification Acknowledgment — I acknowledge and understand that: The Trust & Verification (T&V) review is mandatory; Verification-related fees are non-refundable; False documentation or material misrepresentation may result in immediate rejection; ATICC reserves the right to suspend or decline accession requests where institutional integrity standards are not satisfied.</span>
                            </label>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label>Signature <span class="required">*</span></label>
                                <input type="text" name="signature" id="signature" class="form-input" placeholder="Type your full name as signature">
                            </div>
                            <div class="form-group">
                                <label>Date <span class="required">*</span></label>
                                <input type="date" name="signature_date" id="signature_date" class="form-input">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-card">
                    <div class="form-card-header">
                        <h3>SECTION 6 — REQUIRED DOCUMENTATION</h3>
                        <span class="section-badge">Upload</span>
                    </div>
                    <div class="form-card-body">
                        <div class="doc-grid">
                            <div class="upload-card">
                                <label>Certificate of Incorporation / Registration <span class="required">*</span></label>
                                <div class="upload-area" onclick="document.getElementById('incorporation_file').click()">
                                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3">
                                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                                        <polyline points="14 2 14 8 20 8"/>
                                    </svg>
                                    <p>Click to upload</p>
                                    <span>PDF, PNG, JPG (Max 10MB)</span>
                                </div>
                                <input type="file" id="incorporation_file" name="incorporation_file" style="display:none">
                                <span class="file-status" id="incorporation_status"></span>
                            </div>
                            <div class="upload-card">
                                <label>Corporate / Business Profile</label>
                                <div class="upload-area" onclick="document.getElementById('profile_file').click()">
                                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3">
                                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                                        <polyline points="14 2 14 8 20 8"/>
                                    </svg>
                                    <p>Click to upload</p>
                                    <span>PDF, DOC (Max 10MB)</span>
                                </div>
                                <input type="file" id="profile_file" name="profile_file" style="display:none">
                                <span class="file-status" id="profile_status"></span>
                            </div>
                            <div class="upload-card">
                                <label>Proof of Address</label>
                                <div class="upload-area" onclick="document.getElementById('address_file').click()">
                                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3">
                                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                                        <polyline points="14 2 14 8 20 8"/>
                                    </svg>
                                    <p>Click to upload</p>
                                    <span>PDF, PNG, JPG (Max 5MB)</span>
                                </div>
                                <input type="file" id="address_file" name="address_file" style="display:none">
                                <span class="file-status" id="address_status"></span>
                            </div>
                            <div class="upload-card">
                                <label>Authorized Representative ID</label>
                                <div class="upload-area" onclick="document.getElementById('id_file').click()">
                                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3">
                                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                                        <polyline points="14 2 14 8 20 8"/>
                                    </svg>
                                    <p>Click to upload</p>
                                    <span>PDF, PNG, JPG (Max 5MB)</span>
                                </div>
                                <input type="file" id="id_file" name="id_file" style="display:none">
                                <span class="file-status" id="id_status"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="notice-box info">
                    <div class="notice-icon">📋</div>
                    <div class="notice-content">
                        <h4>SECRETARIAT-GENERAL REVIEW NOTICE</h4>
                        <p>Submission of this accession request initiates a structured institutional review process. All applications are reviewed by the Secretariat-General in alignment with: The ATICC Accession Protocol; Trust & Verification (T&V) standards; Institutional governance procedures; Operational alignment requirements.</p>
                        <p>ATICC reserves the right to: request additional documentation; conduct supplementary verification procedures; approve, defer, or decline accession requests based on institutional review outcomes.</p>
                    </div>
                </div>

                <div class="notice-box success">
                    <div class="notice-icon">🔒</div>
                    <div class="notice-content">
                        <h4>DATA PROTECTION & SUBMISSION ASSURANCE</h4>
                        <p>ATICC is committed to protecting the confidentiality, security, and integrity of all information and supporting documentation submitted through this accession process. All records and materials provided are handled under strict internal review and verification protocols and are used solely for institutional assessment, onboarding, and engagement purposes.</p>
                        <p><span>Thank you for choosing ATICC. We appreciate your trust and look forward to engaging with your institution.</span></p>
                    </div>
                </div>

                <div class="step-navigation">
                    <button type="button" class="btn-prev">← Back</button>
                    <button type="button" class="btn-next" id="step3Next">Review Application →</button>
                </div>
            </div>

            <!-- STEP 4: Preview & Submit -->
            <div class="form-step" id="step4">
                <div class="form-card">
                    <div class="form-card-header">
                        <h3>Application Preview</h3>
                        <span class="section-badge">Review</span>
                    </div>
                    <div class="form-card-body">
                        <div id="previewContent" class="preview-content"></div>
                        
                        <div class="checkbox-wrapper">
                            <label class="checkbox-container">
                                <input type="checkbox" id="final_consent">
                                <span class="checkmark"></span>
                                <span class="checkbox-text">I confirm that the information provided is accurate and complete; the institution agrees to operate within the ATICC governance and verification framework; all submitted documentation may be reviewed during institutional verification procedures; submission of this accession request does not constitute automatic approval or acceptance into the ATICC ecosystem.</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="step-navigation">
                    <button type="button" class="btn-prev">← Back</button>
                    <button type="submit" class="btn-submit" id="submitBtn">
                        <span>Submit Application</span>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="5" y1="12" x2="19" y2="12"/>
                            <polyline points="12 5 19 12 12 19"/>
                        </svg>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

@include('layouts.footer')

<style>

body {
    background: var(--bg-gray-2);
}

/* Using Updated Color Variables - All colors updated to new specification */
  .full-width-white { 
    width: 100%; 
    background: var(--bg-white-2); 
    padding: 80px 0; 
    border-bottom: 1px solid var(--color-text-muted-2);
  }
  
/* Error Alert */
.error-alert {
    max-width: 1000px;
    margin: 20px auto 0;
    background: rgba(201, 160, 61, 0.1);
    border-left: 4px solid var(--color-accent);
    padding: 15px 20px;
    border-radius: 12px;
}
.error-alert ul { margin: 0 0 0 20px; color: var(--color-accent); }

/* Main Container */
.tier-application-container { max-width: 1000px; margin: 0 auto; padding: 40px 20px; }
.application-header { text-align: center; margin-bottom: 40px; }
.application-header .breadcrumb { font-size: 12px; letter-spacing: 0.12em; text-transform: uppercase; color: var(--color-accent); margin-bottom: 15px; font-weight: 500; }
.application-header h1 { font-family: var(--font-heading); font-size: 42px; color: var(--color-text-lighter-2); margin-bottom: 10px; font-weight: 400; letter-spacing: -0.01em; }
.gold-accent { color: var(--color-accent); }
.application-header .subtitle { font-size: 16px; color: var(--color-text-gray-2); }

.application-content { background: var(--bg-white-2); border-radius: 24px; box-shadow: 0 20px 40px rgba(0,0,0,0.06); padding: 40px; border: 1px solid var(--color-text-muted-2); }

/* Selected Plan Card */
.selected-plan-card { display: flex; align-items: center; gap: 20px; background: var(--bg-gray-2); border: 1px solid var(--color-text-muted-2); border-radius: 20px; padding: 20px 25px; margin-bottom: 30px; }
.selected-plan-icon { width: 55px; height: 55px; background: rgba(4, 21, 46, 0.08); border-radius: 16px; display: flex; align-items: center; justify-content: center; color: var(--color-text-dark-2); }
.selected-plan-details { flex: 1; }
.selected-plan-details h4 { font-size: 18px; font-weight: 500; color: var(--color-text-lighter-2); margin-bottom: 5px; }
.selected-plan-details p { font-size: 13px; color: var(--color-text-gray-2); }
.change-plan-link { font-size: 13px; color: var(--color-accent); text-decoration: none; font-weight: 500; padding: 8px 16px; border-radius: 30px; transition: all 0.2s ease; }
.change-plan-link:hover { background: rgba(201, 160, 61, 0.1); }

/* Progress Steps */
.progress-steps { display: flex; align-items: center; justify-content: center; margin-bottom: 40px; flex-wrap: wrap; gap: 10px; }
.step { display: flex; align-items: center; gap: 8px; cursor: pointer; }
.step-num { width: 38px; height: 38px; background: var(--bg-gray-2); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 500; font-size: 14px; color: var(--color-text-gray-2); transition: all 0.3s ease; border: 1px solid var(--color-text-muted-2); }
.step.active .step-num { background: var(--color-text-dark-2); color: var(--color-text-white-2); border-color: var(--color-text-dark-2); }
.step.completed .step-num { background: var(--color-accent); color: var(--color-text-dark-2); border-color: var(--color-accent); }
.step-text { font-size: 12px; color: var(--color-text-gray-2); font-weight: 500; }
.step.active .step-text { color: var(--color-accent); }
.step-line { width: 50px; height: 2px; background: var(--color-text-muted-2); margin: 0 5px; }

/* Form Steps */
.form-step { display: none; }
.form-step.active { display: block; animation: fadeIn 0.4s ease; }
@keyframes fadeIn { from { opacity: 0; transform: translateY(15px); } to { opacity: 1; transform: translateY(0); } }

/* Form Cards */
.form-card { background: var(--bg-white-2); border: 1px solid var(--color-text-muted-2); border-radius: 20px; margin-bottom: 25px; overflow: hidden; }
.form-card-header { display: flex; justify-content: space-between; align-items: center; padding: 18px 24px; background: var(--bg-gray-2); border-bottom: 1px solid var(--color-text-muted-2); }
.form-card-header h3 { font-size: 16px; color: var(--color-text-lighter-2); font-weight: 600; margin: 0; letter-spacing: 0.5px; }
.section-badge { font-size: 10px; padding: 4px 12px; background: var(--color-text-dark-2); color: var(--color-text-white-2); border-radius: 30px; font-weight: 500; letter-spacing: 0.5px; }
.form-card-body { padding: 28px; }

/* Form Elements */
.form-group { margin-bottom: 22px; }
.form-group label { display: block; margin-bottom: 8px; font-weight: 600; font-size: 13px; color: var(--color-text-lighter-2); }
.form-input, .form-select, .form-textarea { width: 100%; padding: 12px 16px; border: 1.5px solid var(--color-text-muted-2); border-radius: 12px; font-size: 14px; transition: all 0.2s ease; font-family: inherit; background: var(--bg-white-2); color: var(--color-text-dark-2); }
.form-input:focus, .form-select:focus, .form-textarea:focus { outline: none; border-color: var(--color-accent); box-shadow: 0 0 0 3px rgba(201, 160, 61, 0.1); }
.form-textarea { resize: vertical; font-family: inherit; }
.form-row { display: flex; gap: 20px; }
.form-row .form-group { flex: 1; }
.required { color: #d32f2f; margin-left: 3px; }

/* Validation Styles */
.form-input.error, .form-select.error, .form-textarea.error { border-color: #d32f2f !important; background-color: rgba(211, 47, 47, 0.05); }
.error-message { color: #d32f2f; font-size: 11px; margin-top: 6px; display: block; }

/* Radio & Checkbox */
.radio-group { display: flex; gap: 30px; }
.radio-label { display: flex; align-items: center; gap: 8px; cursor: pointer; font-weight: normal; font-size: 14px; color: var(--color-text-lighter-2); }
.radio-label input { width: 16px; height: 16px; accent-color: var(--color-accent); }
.help-text { font-size: 11px; color: var(--color-text-gray-2); margin-top: 6px; }

.checkbox-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 12px; margin-top: 5px; }
.checkbox-label { display: flex; align-items: center; gap: 8px; cursor: pointer; font-size: 13px; color: var(--color-text-lighter-2); }
.checkbox-label input { width: 16px; height: 16px; accent-color: var(--color-accent); }
.mt-2 { margin-top: 12px; }

/* Checkbox Wrapper */
.checkbox-wrapper { margin: 20px 0; }
.checkbox-container { display: flex; align-items: flex-start; gap: 12px; cursor: pointer; font-size: 13px; line-height: 1.5; color: var(--color-text-lighter-2); }
.checkbox-container input { position: absolute; opacity: 0; cursor: pointer; height: 0; width: 0; }
.checkmark { position: relative; display: inline-block; width: 20px; height: 20px; background: var(--bg-white-2); border: 2px solid var(--color-text-muted-2); border-radius: 5px; flex-shrink: 0; margin-top: 1px; transition: all 0.2s ease; }
.checkbox-container input:checked ~ .checkmark { background: var(--color-accent); border-color: var(--color-accent); }
.checkbox-container input:checked ~ .checkmark:after { content: ''; position: absolute; left: 6px; top: 2px; width: 5px; height: 10px; border: solid var(--color-text-dark-2); border-width: 0 2px 2px 0; transform: rotate(45deg); }
.checkbox-text { flex: 1; }

/* Notice Boxes */
.notice-box { display: flex; gap: 15px; padding: 20px; border-radius: 16px; margin-bottom: 25px; }
.notice-box.warning { background: rgba(201, 160, 61, 0.1); border-left: 4px solid var(--color-accent); }
.notice-box.info { background: rgba(4, 21, 46, 0.05); border-left: 4px solid var(--color-text-dark-2); }
.notice-box.success { background: rgba(46, 125, 50, 0.1); border-left: 4px solid #2e7d32; }
.notice-icon { font-size: 24px; flex-shrink: 0; }
.notice-content h4 { font-size: 14px; font-weight: 600; margin-bottom: 8px; color: var(--color-text-lighter-2); }
.notice-content p { font-size: 13px; color: var(--color-text-gray-2); line-height: 1.5; margin-bottom: 8px; }

/* Document Upload */
.doc-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; }
.upload-card { background: var(--bg-gray-2); border-radius: 16px; padding: 18px; }
.upload-card label { font-weight: 600; font-size: 13px; display: block; margin-bottom: 12px; color: var(--color-text-lighter-2); }
.upload-area { border: 2px dashed var(--color-text-muted-2); border-radius: 12px; padding: 20px; text-align: center; cursor: pointer; transition: all 0.2s ease; background: var(--bg-white-2); }
.upload-area:hover { border-color: var(--color-accent); background: rgba(201, 160, 61, 0.02); }
.upload-area svg { margin-bottom: 8px; color: var(--color-text-gray-2); }
.upload-area p { font-size: 12px; color: var(--color-text-lighter-2); margin-top: 8px; font-weight: 500; }
.upload-area span { font-size: 10px; color: var(--color-text-gray-2); display: block; margin-top: 4px; }
.file-status { font-size: 11px; color: #2e7d32; display: block; margin-top: 8px; text-align: center; font-weight: 500; }

/* Step Navigation */
.step-navigation { display: flex; justify-content: space-between; margin-top: 30px; padding-top: 20px; border-top: 1px solid var(--color-text-muted-2); }
.btn-prev, .btn-next, .btn-submit { padding: 12px 32px; border-radius: 1px; font-size: 13px; font-weight: 600; cursor: pointer; transition: all 0.3s ease; font-family: inherit; letter-spacing: 0.5px; }
.btn-prev { background: transparent; border: 1.5px solid var(--color-text-muted-2); color: var(--color-text-lighter-2); }
.btn-prev:hover { border-color: var(--color-accent); color: var(--color-accent); transform: translateX(-2px); }
.btn-next, .btn-submit { background: var(--color-accent); border: none; color: var(--color-text-dark-2); display: flex; align-items: center; gap: 10px; }
.btn-next:hover:not(:disabled), .btn-submit:hover { background: var(--color-accent-hover); transform: translateX(2px); }
.btn-next:disabled { opacity: 0.5; cursor: not-allowed; transform: none; }

/* Preview Content */
.preview-content { background: var(--bg-gray-2); border-radius: 20px; padding: 30px; max-height: 550px; overflow-y: auto; font-size: 13px; line-height: 1.6; }
.preview-content h3 { color: var(--color-text-lighter-2); text-align: center; margin-bottom: 20px; font-size: 18px; font-weight: 600; }
.preview-content h4 { color: var(--color-accent); margin: 20px 0 12px; padding-bottom: 6px; border-bottom: 2px solid var(--color-text-muted-2); font-size: 14px; font-weight: 600; }
.preview-content .preview-row { display: flex; padding: 10px 0; border-bottom: 1px solid var(--color-text-muted-2); }
.preview-content .preview-label { width: 220px; font-weight: 600; color: var(--color-text-lighter-2); flex-shrink: 0; }
.preview-content .preview-value { flex: 1; color: var(--color-text-gray-2); }

/* Responsive */
@media (max-width: 768px) {
    .application-content { padding: 25px; }
    .application-header h1 { font-size: 32px; }
    .form-row { flex-direction: column; gap: 0; }
    .checkbox-grid { grid-template-columns: repeat(2, 1fr); }
    .doc-grid { grid-template-columns: 1fr; }
    .progress-steps { flex-wrap: wrap; justify-content: center; }
    .step-line { width: 30px; }
    .preview-content .preview-row { flex-direction: column; }
    .preview-content .preview-label { width: 100%; margin-bottom: 5px; }
    .form-card-header { flex-direction: column; gap: 10px; align-items: flex-start; }
    .step-navigation { flex-direction: column; gap: 12px; }
    .btn-prev, .btn-next, .btn-submit { justify-content: center; }
}
</style>

<script>
let selectedTier = '';
let currentStep = 1;
let step1Attempted = false;
let step2Attempted = false;
let step3Attempted = false;

const step1Fields = ['legal_name', 'institution_type', 'country_registration', 'address'];
const step2Fields = ['contact_name', 'contact_position', 'contact_email', 'contact_phone'];
const step3Fields = ['verification_ack', 'signature', 'signature_date'];

document.addEventListener('DOMContentLoaded', function() {
    const urlParams = new URLSearchParams(window.location.search);
    const tier = urlParams.get('tier');
    const planName = urlParams.get('plan');
    const planPrice = urlParams.get('price');
    
    if (tier && planName && planPrice) {
        let mappedTier = '';
        if (tier === 'tier1' || tier === 'tier_i') mappedTier = 'tier_i';
        else if (tier === 'tier2' || tier === 'tier_ii') mappedTier = 'tier_ii';
        else if (tier === 'tier3' || tier === 'tier_iii') mappedTier = 'tier_iii';
        else mappedTier = tier;
        
        selectedTier = mappedTier;
        document.getElementById('selectedTier').value = mappedTier;
        document.getElementById('selectedPlanName').innerHTML = decodeURIComponent(planName);
        document.getElementById('selectedPlanPrice').innerHTML = decodeURIComponent(planPrice);
        document.getElementById('tierName').value = decodeURIComponent(planName);
        document.getElementById('tierPrice').value = decodeURIComponent(planPrice);
        document.getElementById('selectedTierDisplay').innerHTML = `Complete the form below for ${decodeURIComponent(planName)}`;
    } else {
        const storedTier = localStorage.getItem('selectedTier');
        const storedPlan = localStorage.getItem('selectedPlan');
        const storedPrice = localStorage.getItem('selectedPrice');
        
        if (storedTier && storedPlan && storedPrice) {
            let mappedTier = '';
            if (storedTier === 'tier1' || storedTier === 'tier_i') mappedTier = 'tier_i';
            else if (storedTier === 'tier2' || storedTier === 'tier_ii') mappedTier = 'tier_ii';
            else if (storedTier === 'tier3' || storedTier === 'tier_iii') mappedTier = 'tier_iii';
            else mappedTier = storedTier;
            
            selectedTier = mappedTier;
            document.getElementById('selectedTier').value = mappedTier;
            document.getElementById('selectedPlanName').innerHTML = decodeURIComponent(storedPlan);
            document.getElementById('selectedPlanPrice').innerHTML = decodeURIComponent(storedPrice);
            document.getElementById('tierName').value = decodeURIComponent(storedPlan);
            document.getElementById('tierPrice').value = decodeURIComponent(storedPrice);
            document.getElementById('selectedTierDisplay').innerHTML = `Complete the form below for ${decodeURIComponent(storedPlan)}`;
        } else {
            alert('Please select a membership tier first.');
            window.location.href = "{{ route('access.plans') }}";
        }
    }
    
    // Add live error removal for Step 1 fields
    step1Fields.forEach(fieldId => {
        const field = document.getElementById(fieldId);
        if (field) {
            field.addEventListener('input', function() {
                if (this.value.trim() !== '') {
                    this.classList.remove('error');
                    const errorMsg = this.parentElement.querySelector('.error-message');
                    if (errorMsg) errorMsg.remove();
                }
            });
        }
    });
    
    step2Fields.forEach(fieldId => {
        const field = document.getElementById(fieldId);
        if (field) {
            field.addEventListener('input', function() {
                if (fieldId === 'contact_email') {
                    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                    if (emailRegex.test(this.value.trim()) || this.value.trim() === '') {
                        this.classList.remove('error');
                        const errorMsg = this.parentElement.querySelector('.error-message');
                        if (errorMsg) errorMsg.remove();
                    }
                } else if (this.value.trim() !== '') {
                    this.classList.remove('error');
                    const errorMsg = this.parentElement.querySelector('.error-message');
                    if (errorMsg) errorMsg.remove();
                }
            });
        }
    });
    
    const radioButtons = document.querySelectorAll('input[name="authorized_status"]');
    radioButtons.forEach(radio => {
        radio.addEventListener('change', function() {
            if (this.checked) {
                const radioError = document.querySelector('.radio-group .error-message');
                if (radioError) radioError.remove();
            }
        });
    });
    
    const verificationAck = document.getElementById('verification_ack');
    if (verificationAck) {
        verificationAck.addEventListener('change', function() {
            if (this.checked) {
                this.classList.remove('error');
                const wrapper = this.closest('.checkbox-wrapper');
                const errorMsg = wrapper?.querySelector('.error-message');
                if (errorMsg) errorMsg.remove();
            }
        });
    }
    
    const signatureField = document.getElementById('signature');
    if (signatureField) {
        signatureField.addEventListener('input', function() {
            if (this.value.trim() !== '') {
                this.classList.remove('error');
                const errorMsg = this.parentElement.querySelector('.error-message');
                if (errorMsg) errorMsg.remove();
            }
        });
    }
    
    const signatureDateField = document.getElementById('signature_date');
    if (signatureDateField) {
        signatureDateField.addEventListener('change', function() {
            if (this.value !== '') {
                this.classList.remove('error');
                const errorMsg = this.parentElement.querySelector('.error-message');
                if (errorMsg) errorMsg.remove();
            }
        });
    }
});

function clearFieldError(fieldId) {
    const field = document.getElementById(fieldId);
    if (field) {
        field.classList.remove('error');
        const errorMsg = field.parentElement.querySelector('.error-message');
        if (errorMsg) errorMsg.remove();
    }
}

function clearStepErrors(stepFields) {
    stepFields.forEach(fieldId => clearFieldError(fieldId));
    const radioError = document.querySelector('.radio-group .error-message');
    if (radioError) radioError.remove();
    const verificationAck = document.getElementById('verification_ack');
    if (verificationAck) {
        const wrapper = verificationAck.closest('.checkbox-wrapper');
        const checkboxError = wrapper?.querySelector('.error-message');
        if (checkboxError) checkboxError.remove();
    }
}

function validateStep1(showErrors = true) {
    let allValid = true;
    
    step1Fields.forEach(fieldId => {
        const field = document.getElementById(fieldId);
        if (field) {
            const isValid = field.value.trim() !== '';
            if (!isValid) {
                allValid = false;
                if (showErrors) {
                    field.classList.add('error');
                    if (!field.parentElement.querySelector('.error-message')) {
                        const errorMsg = document.createElement('span');
                        errorMsg.className = 'error-message';
                        errorMsg.textContent = 'This field is required';
                        field.parentElement.appendChild(errorMsg);
                    }
                }
            } else if (showErrors) {
                field.classList.remove('error');
                const errorMsg = field.parentElement.querySelector('.error-message');
                if (errorMsg) errorMsg.remove();
            }
        }
    });
    
    return allValid;
}

function validateStep2(showErrors = true) {
    let allValid = true;
    
    step2Fields.forEach(fieldId => {
        const field = document.getElementById(fieldId);
        if (field) {
            let value = field.value.trim();
            let isValid = value !== '';
            
            if (fieldId === 'contact_email' && isValid) {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                isValid = emailRegex.test(value);
            }
            
            if (!isValid) {
                allValid = false;
                if (showErrors) {
                    field.classList.add('error');
                    if (!field.parentElement.querySelector('.error-message')) {
                        const errorMsg = document.createElement('span');
                        errorMsg.className = 'error-message';
                        errorMsg.textContent = fieldId === 'contact_email' && value !== '' ? 'Enter a valid email address' : 'This field is required';
                        field.parentElement.appendChild(errorMsg);
                    }
                }
            } else if (showErrors) {
                field.classList.remove('error');
                const errorMsg = field.parentElement.querySelector('.error-message');
                if (errorMsg) errorMsg.remove();
            }
        }
    });
    
    const radioChecked = document.querySelector('input[name="authorized_status"]:checked');
    if (!radioChecked) {
        allValid = false;
        if (showErrors) {
            const radioGroup = document.querySelector('.radio-group');
            if (radioGroup && !radioGroup.parentElement.querySelector('.error-message')) {
                const errorMsg = document.createElement('span');
                errorMsg.className = 'error-message';
                errorMsg.textContent = 'Please select Yes or No';
                radioGroup.parentElement.appendChild(errorMsg);
            }
        }
    } else if (showErrors) {
        const radioError = document.querySelector('.radio-group .error-message');
        if (radioError) radioError.remove();
    }
    
    return allValid;
}

function validateStep3(showErrors = true) {
    let allValid = true;
    
    const verificationAck = document.getElementById('verification_ack');
    if (verificationAck && !verificationAck.checked) {
        allValid = false;
        if (showErrors) {
            verificationAck.classList.add('error');
            const wrapper = verificationAck.closest('.checkbox-wrapper');
            if (wrapper && !wrapper.querySelector('.error-message')) {
                const errorMsg = document.createElement('span');
                errorMsg.className = 'error-message';
                errorMsg.textContent = 'You must acknowledge the verification notice';
                wrapper.appendChild(errorMsg);
            }
        }
    } else if (verificationAck && showErrors) {
        verificationAck.classList.remove('error');
        const wrapper = verificationAck.closest('.checkbox-wrapper');
        const errorMsg = wrapper?.querySelector('.error-message');
        if (errorMsg) errorMsg.remove();
    }
    
    const signature = document.getElementById('signature');
    if (signature) {
        const isValid = signature.value.trim() !== '';
        if (!isValid) {
            allValid = false;
            if (showErrors) {
                signature.classList.add('error');
                if (!signature.parentElement.querySelector('.error-message')) {
                    const errorMsg = document.createElement('span');
                    errorMsg.className = 'error-message';
                    errorMsg.textContent = 'Signature is required';
                    signature.parentElement.appendChild(errorMsg);
                }
            }
        } else if (showErrors) {
            signature.classList.remove('error');
            const errorMsg = signature.parentElement.querySelector('.error-message');
            if (errorMsg) errorMsg.remove();
        }
    }
    
    const signatureDate = document.getElementById('signature_date');
    if (signatureDate) {
        const isValid = signatureDate.value !== '';
        if (!isValid) {
            allValid = false;
            if (showErrors) {
                signatureDate.classList.add('error');
                if (!signatureDate.parentElement.querySelector('.error-message')) {
                    const errorMsg = document.createElement('span');
                    errorMsg.className = 'error-message';
                    errorMsg.textContent = 'Date is required';
                    signatureDate.parentElement.appendChild(errorMsg);
                }
            }
        } else if (showErrors) {
            signatureDate.classList.remove('error');
            const errorMsg = signatureDate.parentElement.querySelector('.error-message');
            if (errorMsg) errorMsg.remove();
        }
    }
    
    return allValid;
}

document.getElementById('institution_type')?.addEventListener('change', function() {
    const otherField = document.getElementById('institution_type_other');
    if (otherField) otherField.style.display = this.value === 'Other' ? 'block' : 'none';
});

document.getElementById('primary_sector')?.addEventListener('change', function() {
    const otherField = document.getElementById('primary_sector_other');
    if (otherField) otherField.style.display = this.value === 'Other' ? 'block' : 'none';
});

function showStep(step) {
    document.querySelectorAll('.form-step').forEach(el => el.classList.remove('active'));
    document.getElementById(`step${step}`).classList.add('active');
    document.querySelectorAll('.step').forEach((el, idx) => {
        const stepNum = idx + 1;
        if (stepNum === step) el.classList.add('active');
        else el.classList.remove('active');
        if (stepNum < step) el.classList.add('completed');
        else el.classList.remove('completed');
    });
    currentStep = step;
    window.scrollTo({ top: 0, behavior: 'smooth' });
}

document.querySelectorAll('.btn-next').forEach(btn => {
    btn.addEventListener('click', function(e) {
        let canProceed = false;
        
        if (currentStep === 1) {
            step1Attempted = true;
            canProceed = validateStep1(true);
            if (!canProceed) {
                const firstError = document.querySelector('#step1 .error');
                if (firstError) firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
        }
        else if (currentStep === 2) {
            step2Attempted = true;
            canProceed = validateStep2(true);
            if (!canProceed) {
                const firstError = document.querySelector('#step2 .error');
                if (firstError) firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
        }
        else if (currentStep === 3) {
            step3Attempted = true;
            canProceed = validateStep3(true);
            if (!canProceed) {
                const firstError = document.querySelector('#step3 .error');
                if (firstError) firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
        }
        
        if (canProceed && currentStep < 4) {
            if (currentStep === 1) clearStepErrors(step1Fields);
            if (currentStep === 2) clearStepErrors(step2Fields);
            if (currentStep === 3) clearStepErrors(step3Fields);
            showStep(currentStep + 1);
        }
    });
});

document.querySelectorAll('.btn-prev').forEach(btn => {
    btn.addEventListener('click', () => { 
        if (currentStep > 1) {
            if (currentStep === 2) clearStepErrors(step2Fields);
            if (currentStep === 3) clearStepErrors(step3Fields);
            if (currentStep === 4) {
                clearStepErrors(step3Fields);
                clearStepErrors(step2Fields);
                clearStepErrors(step1Fields);
            }
            showStep(currentStep - 1);
        }
    });
});

document.querySelectorAll('.step').forEach((step, idx) => {
    step.addEventListener('click', () => {
        const targetStep = idx + 1;
        
        if (targetStep < currentStep) {
            if (currentStep === 2) clearStepErrors(step2Fields);
            if (currentStep === 3) clearStepErrors(step3Fields);
            if (currentStep === 4) {
                clearStepErrors(step3Fields);
                clearStepErrors(step2Fields);
                clearStepErrors(step1Fields);
            }
            showStep(targetStep);
            return;
        }
        
        if (targetStep > currentStep) {
            let canProceed = false;
            
            if (currentStep === 1) {
                step1Attempted = true;
                canProceed = validateStep1(true);
                if (!canProceed) {
                    const firstError = document.querySelector('#step1 .error');
                    if (firstError) firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
                }
            }
            else if (currentStep === 2) {
                step2Attempted = true;
                canProceed = validateStep2(true);
                if (!canProceed) {
                    const firstError = document.querySelector('#step2 .error');
                    if (firstError) firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
                }
            }
            else if (currentStep === 3) {
                step3Attempted = true;
                canProceed = validateStep3(true);
                if (!canProceed) {
                    const firstError = document.querySelector('#step3 .error');
                    if (firstError) firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
                }
            }
            
            if (canProceed) {
                if (currentStep === 1) clearStepErrors(step1Fields);
                if (currentStep === 2) clearStepErrors(step2Fields);
                if (currentStep === 3) clearStepErrors(step3Fields);
                showStep(targetStep);
            }
        }
    });
});

function setupFileUpload(inputId, statusId) {
    const input = document.getElementById(inputId);
    if (input) {
        input.addEventListener('change', function(e) {
            if (e.target.files[0]) {
                document.getElementById(statusId).innerHTML = `✓ ${e.target.files[0].name}`;
            }
        });
    }
}
setupFileUpload('incorporation_file', 'incorporation_status');
setupFileUpload('profile_file', 'profile_status');
setupFileUpload('address_file', 'address_status');
setupFileUpload('id_file', 'id_status');

const reviewBtn = document.getElementById('step3Next');
if (reviewBtn) {
    reviewBtn.addEventListener('click', function() {
        step3Attempted = true;
        if (validateStep3(true)) {
            generatePreview();
            showStep(4);
        } else {
            const firstError = document.querySelector('#step3 .error');
            if (firstError) firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }
    });
}

function generatePreview() {
    const planName = document.getElementById('selectedPlanName')?.innerHTML || 'Not selected';
    const legalName = document.getElementById('legal_name')?.value || 'Not provided';
    const institutionType = document.getElementById('institution_type')?.value || 'Not provided';
    const country = document.getElementById('country_registration')?.value || 'Not provided';
    const contactName = document.getElementById('contact_name')?.value || 'Not provided';
    const contactEmail = document.getElementById('contact_email')?.value || 'Not provided';
    const primarySector = document.getElementById('primary_sector')?.value || 'Not provided';
    const readinessStatus = document.getElementById('readiness_status')?.value || 'Not provided';
    const signature = document.getElementById('signature')?.value || 'Not provided';
    
    const selectedCorridors = Array.from(document.querySelectorAll('input[name="trade_corridors[]"]:checked')).map(cb => cb.value);
    
    const fileStatus = [];
    if (document.getElementById('incorporation_file')?.files[0]) fileStatus.push('✓ Certificate of Incorporation');
    if (document.getElementById('profile_file')?.files[0]) fileStatus.push('✓ Corporate Profile');
    if (document.getElementById('address_file')?.files[0]) fileStatus.push('✓ Proof of Address');
    if (document.getElementById('id_file')?.files[0]) fileStatus.push('✓ Authorized ID');
    
    const previewDiv = document.getElementById('previewContent');
    if (previewDiv) {
        previewDiv.innerHTML = `
            <div style="text-align:center; margin-bottom:25px;">
                <h3>ATICC MEMBERSHIP ACCESSION FORM</h3>
                <p><span style="color: var(--color-accent); font-weight: 500;">${escapeHtml(planName)}</span></p>
            </div>
            
            <h4>SECTION 1 — ORGANIZATION PROFILE</h4>
            <div class="preview-row"><div class="preview-label">Legal Name:</div><div class="preview-value">${escapeHtml(legalName)}</div></div>
            <div class="preview-row"><div class="preview-label">Type of Institution:</div><div class="preview-value">${escapeHtml(institutionType)}</div></div>
            <div class="preview-row"><div class="preview-label">Country of Registration:</div><div class="preview-value">${escapeHtml(country)}</div></div>
            
            <h4>SECTION 2 — PRIMARY CONTACT</h4>
            <div class="preview-row"><div class="preview-label">Full Name:</div><div class="preview-value">${escapeHtml(contactName)}</div></div>
            <div class="preview-row"><div class="preview-label">Email:</div><div class="preview-value">${escapeHtml(contactEmail)}</div></div>
            
            <h4>SECTION 3 — STRATEGIC ALIGNMENT</h4>
            <div class="preview-row"><div class="preview-label">Primary Sector:</div><div class="preview-value">${escapeHtml(primarySector)}</div></div>
            <div class="preview-row"><div class="preview-label">Trade Corridors:</div><div class="preview-value">${escapeHtml(selectedCorridors.join(', ') || 'None selected')}</div></div>
            <div class="preview-row"><div class="preview-label">Readiness Status:</div><div class="preview-value">${escapeHtml(readinessStatus)}</div></div>
            
            <h4>SECTION 4 — DECLARATION</h4>
            <div class="preview-row"><div class="preview-label">Signature:</div><div class="preview-value">${escapeHtml(signature)}</div></div>
            
            <h4>SECTION 5 — DOCUMENTATION</h4>
            <div class="preview-row"><div class="preview-label">Documents Uploaded:</div><div class="preview-value">${escapeHtml(fileStatus.join(', ') || 'No documents uploaded')}</div></div>
        `;
    }
}

function escapeHtml(text) { 
    if (!text || text === 'Not provided') return 'Not provided'; 
    const div = document.createElement('div');
    div.textContent = text;
    return div.innerHTML;
}

const form = document.getElementById('membershipForm');
if (form) {
    form.addEventListener('submit', function(e) {
        const selectedTierValue = document.getElementById('selectedTier').value;
        
        if (!selectedTierValue) { 
            e.preventDefault(); 
            alert('Please select a membership tier.'); 
            return false; 
        }
        if (!document.getElementById('verification_ack')?.checked) { 
            e.preventDefault(); 
            alert('Please acknowledge the verification notice.'); 
            return false; 
        }
        if (!document.getElementById('final_consent')?.checked) { 
            e.preventDefault(); 
            alert('Please confirm the declaration.'); 
            return false; 
        }
        
        const submitBtn = document.getElementById('submitBtn');
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<span>Submitting...</span>';
    });
}
</script>
@endsection