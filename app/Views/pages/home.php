  <!-- =========================================================
       Hero — video banner with dark overlay
       ========================================================= -->
  <section class="hero hero--centered" id="home">
    <div class="hero-slides" aria-hidden="true">
      <div class="hero-slide is-active" style="background-image:url('assets/img/hero/1-suva-harbour.jpg')"></div>
      <div class="hero-slide" style="background-image:url('assets/img/hero/2-parliament-house.jpg')"></div>
      <div class="hero-slide" style="background-image:url('assets/img/hero/3-technology.jpg')"></div>
      <div class="hero-slide" style="background-image:url('assets/img/hero/4-commercial.jpg')"></div>
    </div>
    <div class="hero-overlay"></div>

    <div class="container hero-content text-center">
      <div class="row justify-content-center">
        <div class="col-xl-9">
          <div class="section-kicker">25 OCTOBER 2026 &nbsp;&middot;&nbsp; SUVA, FIJI</div>
          <h1 class="hero-heading">Stronger Together. Safer Online.</h1>
          <p class="hero-sub">One day. One mission. Plenaries, workshops and working sessions uniting government, industry and communities to secure Fiji's digital future.</p>
          <div class="d-flex flex-wrap gap-3 justify-content-center">
            <a href="<?php echo base_url('schedule'); ?>" class="btn btn-accent">View Schedule</a>
            <!--a href="#about" class="btn btn-outline-light-custom">Learn More</a-->
          </div>

          <div class="hero-meta">
            <!--div><strong>60+</strong>Speakers &amp; facilitators</div>
            <div><strong>18</strong>Countries represented</div>
            <div><strong>1,200</strong>Delegates expected</div-->
          </div>
        </div>
      </div>
    </div>

    <div class="scroll-cue"><span>SCROLL</span><span class="line"></span></div>
  </section>

  <!-- =========================================================
       About — col-lg-4 image / col-lg-8 text
       ========================================================= -->
  <section class="section-pad" id="about">
    <div class="container">
      <div class="row align-items-center g-5">
        <div class="col-lg-4">
          <div class="about-media">
            <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?q=80&w=800&auto=format&fit=crop" alt="Delegates in discussion at a previous Digital Fiji Forum session">
            <div class="about-media-badge"><strong>NEW</strong> inaugural event.</div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="about-text">
            <div class="section-kicker">About the Convention</div>
            <h2>Cyber resilience is a shared responsibility.</h2>
            <p>The National Cybersecurity and Resilience Convention 2026 is Fiji’s inaugural national forum dedicated to strengthening cybersecurity and building a more resilient digital environment.</p>
            <p>The Convention will bring together government representatives, industry leaders, cybersecurity professionals, development partners, and key stakeholders to explore emerging cyber threats, share knowledge and best practices, and foster collaboration. It will provide a platform for meaningful dialogue and collective action to enhance Fiji’s cybersecurity capabilities, strengthen national resilience, and safeguard the nation’s digital future.</p>
            <p>The National Cybersecurity and Resilience Convention 2026 aims to bring Fiji together to build a more cyber-aware and resilient nation. Through dialogue, collaboration and knowledge-sharing, the Convention will support the implementation of the National Cybersecurity and Resilience Strategy 2026–2031 and strengthen collective efforts to protect Fiji’s digital environment.</p>

            <div class="about-stats">
              <div><strong>32</strong><span>Working sessions</span></div>
              <div><strong>9</strong><span>Industry tracks</span></div>
              <div><strong>4.8/5</strong><span>2025 delegate rating</span></div>
            </div>

            <!--a href="about.html" class="btn btn-navy">Read More About Us</a-->
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- =========================================================
       Speakers — 9 speakers, 3 per row, hover reveal
       ========================================================= -->
  <section class="section-pad speakers-section" id="speakers">
    <div class="container">
      <div class="row mb-5">
        <div class="col-lg-7 section-heading-block">
          <div class="section-kicker">On the Program</div>
          <h2>Speakers charting the course.</h2>
          <p class="mb-0">Operators, regulators and investors who are building the Pacific's next chapter &mdash; hover a card for a closer look.</p>
        </div>
      </div>

      <div class="row g-4">

        <!-- Speaker 1 -->
        <div class="col-md-6 col-lg-4">
          <div class="speaker-card">
            <img class="speaker-photo" src="https://randomuser.me/api/portraits/women/44.jpg" alt="Portrait of Litia Nakauta">
            <div class="speaker-default-label">
              <h5>Litia Nakauta</h5>
              <span>Chief Executive, Oceania Ventures</span>
            </div>
            <div class="speaker-overlay">
              <h5>Litia Nakauta</h5>
              <p class="designation">Chief Executive, Oceania Ventures</p>
              <p class="experience">15+ years scaling regional funds; has led investment into more than 40 Pacific-based startups since 2016.</p>
              <span class="experience-tag">Investment &amp; Growth</span>
            </div>
          </div>
        </div>

        <!-- Speaker 2 -->
        <div class="col-md-6 col-lg-4">
          <div class="speaker-card">
            <img class="speaker-photo" src="https://randomuser.me/api/portraits/men/32.jpg" alt="Portrait of Api Tuilagi">
            <div class="speaker-default-label">
              <h5>Api Tuilagi</h5>
              <span>Founder &amp; CEO, Reef Logistics</span>
            </div>
            <div class="speaker-overlay">
              <h5>Api Tuilagi</h5>
              <p class="designation">Founder &amp; CEO, Reef Logistics</p>
              <p class="experience">Built Reef Logistics into a 6-country freight network after 12 years in maritime operations and port authority management.</p>
              <span class="experience-tag">Logistics &amp; Trade</span>
            </div>
          </div>
        </div>

        <!-- Speaker 3 -->
        <div class="col-md-6 col-lg-4">
          <div class="speaker-card">
            <img class="speaker-photo" src="https://randomuser.me/api/portraits/women/68.jpg" alt="Portrait of Mele Fifita">
            <div class="speaker-default-label">
              <h5>Mele Fifita</h5>
              <span>Director of Digital Policy, Pacific Islands Forum</span>
            </div>
            <div class="speaker-overlay">
              <h5>Mele Fifita</h5>
              <p class="designation">Director of Digital Policy, Pacific Islands Forum</p>
              <p class="experience">Shapes cross-border data and telecoms policy across 14 member states; former regulator with 18 years in public service.</p>
              <span class="experience-tag">Policy &amp; Regulation</span>
            </div>
          </div>
        </div>

        <!-- Speaker 4 -->
        <div class="col-md-6 col-lg-4">
          <div class="speaker-card">
            <img class="speaker-photo" src="https://randomuser.me/api/portraits/men/65.jpg" alt="Portrait of Sione Taufa">
            <div class="speaker-default-label">
              <h5>Sione Taufa</h5>
              <span>Head of Engineering, Waitui Bank</span>
            </div>
            <div class="speaker-overlay">
              <h5>Sione Taufa</h5>
              <p class="designation">Head of Engineering, Waitui Bank</p>
              <p class="experience">Leads core banking modernization across 5 island nations; 11 years building financial infrastructure for underbanked markets.</p>
              <span class="experience-tag">Fintech &amp; Infrastructure</span>
            </div>
          </div>
        </div>

        <!-- Speaker 5 -->
        <div class="col-md-6 col-lg-4">
          <div class="speaker-card">
            <img class="speaker-photo" src="https://randomuser.me/api/portraits/women/12.jpg" alt="Portrait of Adi Vasiti Rokotuivuna">
            <div class="speaker-default-label">
              <h5>Adi Vasiti Rokotuivuna</h5>
              <span>Minister Advisor, Trade &amp; Investment</span>
            </div>
            <div class="speaker-overlay">
              <h5>Adi Vasiti Rokotuivuna</h5>
              <p class="designation">Minister Advisor, Trade &amp; Investment</p>
              <p class="experience">Advises on regional trade agreements and foreign direct investment strategy; 20 years across diplomacy and economic planning.</p>
              <span class="experience-tag">Trade &amp; Government</span>
            </div>
          </div>
        </div>

        <!-- Speaker 6 -->
        <div class="col-md-6 col-lg-4">
          <div class="speaker-card">
            <img class="speaker-photo" src="https://randomuser.me/api/portraits/men/76.jpg" alt="Portrait of Peniasi Waqa">
            <div class="speaker-default-label">
              <h5>Peniasi Waqa</h5>
              <span>Founder, Blue Coral Renewables</span>
            </div>
            <div class="speaker-overlay">
              <h5>Peniasi Waqa</h5>
              <p class="designation">Founder, Blue Coral Renewables</p>
              <p class="experience">Deploys off-grid solar and micro-hydro systems to outer islands; 9 years in renewable energy project finance.</p>
              <span class="experience-tag">Energy &amp; Sustainability</span>
            </div>
          </div>
        </div>

        <!-- Speaker 7 -->
        <div class="col-md-6 col-lg-4">
          <div class="speaker-card">
            <img class="speaker-photo" src="https://randomuser.me/api/portraits/women/50.jpg" alt="Portrait of Talei Vuki">
            <div class="speaker-default-label">
              <h5>Talei Vuki</h5>
              <span>VP People, Southern Cross Group</span>
            </div>
            <div class="speaker-overlay">
              <h5>Talei Vuki</h5>
              <p class="designation">VP People, Southern Cross Group</p>
              <p class="experience">Built HR systems for a 3,000-employee regional conglomerate; 13 years in organizational design across hospitality and retail.</p>
              <span class="experience-tag">People &amp; Culture</span>
            </div>
          </div>
        </div>

        <!-- Speaker 8 -->
        <div class="col-md-6 col-lg-4">
          <div class="speaker-card">
            <img class="speaker-photo" src="https://randomuser.me/api/portraits/men/22.jpg" alt="Portrait of Tomasi Naiveli">
            <div class="speaker-default-label">
              <h5>Tomasi Naiveli</h5>
              <span>Managing Partner, Nadi Capital</span>
            </div>
            <div class="speaker-overlay">
              <h5>Tomasi Naiveli</h5>
              <p class="designation">Managing Partner, Nadi Capital</p>
              <p class="experience">Structures cross-border M&amp;A and private equity deals across tourism and agribusiness; 17 years in corporate finance.</p>
              <span class="experience-tag">Finance &amp; M&amp;A</span>
            </div>
          </div>
        </div>

        <!-- Speaker 9 -->
        <div class="col-md-6 col-lg-4">
          <div class="speaker-card">
            <img class="speaker-photo" src="https://randomuser.me/api/portraits/women/33.jpg" alt="Portrait of Elenoa Baleicagi">
            <div class="speaker-default-label">
              <h5>Elenoa Baleicagi</h5>
              <span>Product Lead, Navuli Systems</span>
            </div>
            <div class="speaker-overlay">
              <h5>Elenoa Baleicagi</h5>
              <p class="designation">Product Lead, Navuli Systems</p>
              <p class="experience">Leads product strategy for education technology deployed across 60+ Pacific schools; 8 years in ed-tech and public sector software.</p>
              <span class="experience-tag">Technology &amp; Education</span>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- =========================================================
       Program schedule teaser
       ========================================================= -->
  <section class="section-pad" id="schedule">
    <div class="container">
      <div class="row mb-5">
        <div class="col-lg-12">
          <div class="section-kicker">Program</div>
          <h2>Event day, mapped out.</h2>
          <p class="mb-0">The National Cybersecurity and Resilience Convention 2026 aims to strengthen national dialogue, collaboration and leadership in building a cyber-aware and resilient Fiji. The Convention will provide a platform for Government, industry, academia, civil society, development partners and the public to come together to discuss emerging cybersecurity challenges, share knowledge and best practices, and support the implementation of Fiji’s National Cybersecurity and Resilience Strategy 2026–2031.</p>
        </div>
      </div>

      <ul class="nav schedule-tabs mb-3" id="scheduleTab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="day1-tab" data-bs-toggle="tab" data-bs-target="#day1" type="button" role="tab">Event Day &mdash; 25 Oct</button>
        </li>
        <!--li class="nav-item" role="presentation">
          <button class="nav-link" id="day2-tab" data-bs-toggle="tab" data-bs-target="#day2" type="button" role="tab">Day Two &mdash; 15 May</button>
        </li-->
      </ul>

      <div class="tab-content">
        <div class="tab-pane fade show active" id="day1" role="tabpanel">

            <!-- 08:00 – 08:30 -->
            <div class="schedule-row">
            <div class="schedule-time">08:00 &ndash; 08:30</div>
            <div class="schedule-detail">
                <h6>Registration &amp; Arrival</h6>
                <span>Delegates, school groups, MSME representatives and members of the public register and collect programs/badges. &middot; Foyer, GPH</span>
            </div>
            </div>

            <!-- 08:30 – 09:00 -->
            <div class="schedule-row">
            <div class="schedule-time">08:30 &ndash; 09:00</div>
            <div class="schedule-detail">
                <h6>Official Arrival</h6>
                <span>Arrival of the Chief Guest and official party. &middot; MC: Master of Ceremonies &middot; Ballroom A, GPH</span>
            </div>
            </div>

            <!-- 09:00 – 09:10 -->
            <div class="schedule-row">
            <div class="schedule-time">09:00 &ndash; 09:10</div>
            <div class="schedule-detail">
                <h6>Welcome Remarks</h6>
                <span>Opening remarks reflecting on the purpose of Cybersecurity Awareness Month and progress under the National Cybersecurity and Resilience Strategy 2026–2031. &middot; Hon. Minister for Policing and Communications &middot; Ballroom A, GPH</span>
            </div>
            </div>

            <!-- 09:10 – 09:20 -->
            <div class="schedule-row">
            <div class="schedule-time">09:10 &ndash; 09:20</div>
            <div class="schedule-detail">
                <h6>Keynote Address</h6>
                <span>Official launch of the Cybersecurity and Resilience Convention, the Cyber Champions Program, and the National Cybersecurity Portal. &middot; Hon. Deputy Prime Minister &middot; Ballroom A, GPH</span>
            </div>
            </div>

            <!-- 09:20 – 09:30 -->
            <div class="schedule-row">
            <div class="schedule-time">09:20 &ndash; 09:30</div>
            <div class="schedule-detail">
                <h6>Partnership Address – Google</h6>
                <span>Address by Google's Vice President – Network Solutions, announcing the partnership between Google and Fiji, including 1,000 Google Career Certificate Scholarships. &middot; Mr Brian Quigley, VP, Google Network Solutions &middot; Ballroom A, GPH</span>
            </div>
            </div>

            <!-- 09:30 – 09:40 -->
            <div class="schedule-row">
            <div class="schedule-time">09:30 &ndash; 09:40</div>
            <div class="schedule-detail">
                <h6>Fireside Chat – Cybersecurity in the Region</h6>
                <span>A high-level conversation with leaders from Fiji, Australia and PNG on the evolving Pacific cybersecurity landscape, regional cooperation, and building stronger capacity. &middot; Moderator: Ms Hannah Bradshaw &middot; Ballroom A, GPH</span>
            </div>
            </div>

            <!-- 09:40 – 09:50 -->
            <div class="schedule-row">
            <div class="schedule-time">09:40 &ndash; 09:50</div>
            <div class="schedule-detail">
                <h6>Official Group Photo</h6>
                <span>Preceded by a 5–7 minute address with TFL. &middot; Ballroom A, GPH</span>
            </div>
            </div>

            <!-- 09:50 – 10:20 -->
            <div class="schedule-row">
            <div class="schedule-time">09:50 &ndash; 10:20</div>
            <div class="schedule-detail">
                <h6>Morning Tea</h6>
                <span>Expo Hall, GPH</span>
            </div>
            </div>

            <!-- 10:20 – 10:35 -->
            <div class="schedule-row">
            <div class="schedule-time">10:20 &ndash; 10:35</div>
            <div class="schedule-detail">
                <h6>Cybersecurity: The Regional Threat Landscape</h6>
                <span>A 15-minute high-level briefing on the evolving regional cybercrime and financial crime threat landscape. &middot; CyberCX representative &middot; Ballroom A, GPH</span>
            </div>
            </div>

            <!-- 10:35 – 10:50 -->
            <div class="schedule-row">
            <div class="schedule-time">10:35 &ndash; 10:50</div>
            <div class="schedule-detail">
                <h6>Cybersecurity: The Fijian Perspective</h6>
                <span>Overview of Fiji's current cyber threat landscape, emerging threats and vulnerabilities, and practical priorities for strengthening resilience. &middot; Permanent Secretary, Ministry of Policing and Communications &amp; Ms Catherine Subhaydas, Director, Fiji CERT &middot; Ballroom A, GPH</span>
            </div>
            </div>

            <!-- 10:50 – 11:10 -->
            <div class="schedule-row">
            <div class="schedule-time">10:50 &ndash; 11:10</div>
            <div class="schedule-detail">
                <h6>Track A – Keeping Our Children Safe Online</h6>
                <span>A practical session for parents, caregivers, educators and the community on digital risks facing children — cyberbullying, CSAM, scams, gaming and social media. &middot; Mr Vytenis Benetis, EU Cybernet &middot; Ballroom A, GPH</span>
            </div>
            </div>

            <div class="schedule-row">
            <div class="schedule-time">10:50 &ndash; 11:10</div>
            <div class="schedule-detail">
                <h6>Track B – Youth &amp; Careers in Cyber: Pathways into the Digital Workforce</h6>
                <span>A session for youth (15–25) on cyber awareness, online safety, and pathways into cybersecurity careers, including the Cyber Champions Program. &middot; Moderator: Mr Ron Bala, Fiji CERT &middot; Ballroom B, GPH</span>
            </div>
            </div>

            <!-- 11:10 – 11:30 -->
            <div class="schedule-row">
            <div class="schedule-time">11:10 &ndash; 11:30</div>
            <div class="schedule-detail">
                <h6>Cyber Hygiene: Scams</h6>
                <span>A practical session on scam calls, caller impersonation and deepfakes — what to check, what not to share, and what to do. &middot; Ms Seema Shandil, CEO, Fiji Consumer Council &middot; Ballroom A</span>
            </div>
            </div>

            <div class="schedule-row">
            <div class="schedule-time">11:10 &ndash; 11:30</div>
            <div class="schedule-detail">
                <h6>Youth Mini Hackathon Challenge (Part 1)</h6>
                <span>A fast-paced cybersecurity challenge for children — design a solution to help people stay safe online, prototype it, and present to the group. &middot; EU Cybernet &middot; Ballroom B</span>
            </div>
            </div>

            <!-- 11:30 – 12:00 -->
            <div class="schedule-row">
            <div class="schedule-time">11:30 &ndash; 12:00</div>
            <div class="schedule-detail">
                <h6>Beyond Defense: Building Cyber Resilience for Critical Infrastructure</h6>
                <span>How critical infrastructure organisations prepare for, withstand and recover from cyber disruption — with insights from Google on securing complex systems at scale. &middot; Mr Shirshendu Bhattacharya, Google &middot; Ballroom A</span>
            </div>
            </div>

            <!-- 12:00 – 13:00 -->
            <div class="schedule-row">
            <div class="schedule-time">12:00 &ndash; 13:00</div>
            <div class="schedule-detail">
                <h6>Lunch</h6>
                <span>Expo Hall, GPH</span>
            </div>
            </div>

            <!-- 13:00 – 13:20 -->
            <div class="schedule-row">
            <div class="schedule-time">13:00 &ndash; 13:20</div>
            <div class="schedule-detail">
                <h6>Fiji's 24/7 Security Operations Centre – An Overview</h6>
                <span>Insights on how the 24/7 SOC detects, investigates and responds to cyber threats in real time and why it matters for Fiji. &middot; Mr Tomasi Buli, ITC Services &middot; Ballroom A, GPH</span>
            </div>
            </div>

            <div class="schedule-row">
            <div class="schedule-time">13:00 &ndash; 13:20</div>
            <div class="schedule-detail">
                <h6>Youth Mini Hackathon Challenge (Continued)</h6>
                <span>Continuation of the hands-on cybersecurity challenge for children. &middot; EU Cybernet &middot; Ballroom B</span>
            </div>
            </div>

            <!-- 13:20 – 13:40 -->
            <div class="schedule-row">
            <div class="schedule-time">13:20 &ndash; 13:40</div>
            <div class="schedule-detail">
                <h6>Data Protection and Governance</h6>
                <span>How a new data protection policy and emerging legislation will change how organisations think about information — and why cyber awareness builds public trust. &middot; Ms Shariffah Rashidah binti Syed Othman, Personal Data Protection Commissioner, Malaysia &middot; Ballroom A, GPH</span>
            </div>
            </div>

            <!-- 13:40 – 14:00 -->
            <div class="schedule-row">
            <div class="schedule-time">13:40 &ndash; 14:00</div>
            <div class="schedule-detail">
                <h6>Rethinking Security When Using AI</h6>
                <span>Practical ways to protect data, manage AI-related threats, verify AI-generated information, and use AI responsibly and securely. &middot; Mr Lee Sea Lin, Senior VP, Toppan Ecquaria &middot; Ballroom A, GPH</span>
            </div>
            </div>

            <!-- 14:00 – 15:00 -->
            <div class="schedule-row">
            <div class="schedule-time">14:00 &ndash; 15:00</div>
            <div class="schedule-detail">
                <h6>Cyber Think Before You Click: Cyber Awareness Challenge</h6>
                <span>An interactive session exploring everyday cyber risks — phishing, scams, social engineering, password security — through realistic examples. &middot; Ms Catherine Subhaydas &amp; Mr Ron Bala, Fiji CERT &middot; Ballroom A, GPH</span>
            </div>
            </div>

            <!-- 15:00 – 15:15 -->
            <div class="schedule-row">
            <div class="schedule-time">15:00 &ndash; 15:15</div>
            <div class="schedule-detail">
                <h6>Afternoon Tea</h6>
                <span>Expo Hall, GPH</span>
            </div>
            </div>

            <!-- 15:15 – 15:45 -->
            <div class="schedule-row">
            <div class="schedule-time">15:15 &ndash; 15:45</div>
            <div class="schedule-detail">
                <h6>Panel: The Human Side of Cybersecurity — Gendered Threats and Shared Responsibility</h6>
                <span>How women and men are targeted through doxxing, phishing, identity compromise, impersonation and account takeover — and how we work together to reduce harm. &middot; Moderator: Ms Hannah Bradshaw &middot; Ballroom A, GPH</span>
            </div>
            </div>

            <!-- 15:45 – 16:00 -->
            <div class="schedule-row">
            <div class="schedule-time">15:45 &ndash; 16:00</div>
            <div class="schedule-detail">
                <h6>Upcoming Initiatives and Announcements</h6>
                <span>A high-level overview of Fiji's ongoing and upcoming cybersecurity initiatives and key actions under the National Cybersecurity and Resilience Strategy 2026–2031. &middot; Hon. Minister for Policing and Communications &middot; Ballroom A, GPH</span>
            </div>
            </div>

            <!-- 16:00 – 16:30 -->
            <div class="schedule-row">
            <div class="schedule-time">16:00 &ndash; 16:30</div>
            <div class="schedule-detail">
                <h6>Closing Remarks &amp; Way Forward</h6>
                <span>Reflections on the day and Fiji's continued partnership with regional and international stakeholders on cybersecurity. &middot; Mr Avish Naidu, Director – Communications, Ministry of Policing and Communications &middot; Ballroom A, GPH</span>
            </div>
            </div>

        </div>
        </div>

      <div class="mt-5">
        <a href="#" class="btn btn-navy">Download Program</a>
      </div>
    </div>
  </section>

  <!-- =========================================================
       Sponsors
       ========================================================= -->
  <section class="section-pad" style="background-color: var(--bg-light);" id="sponsors">
    <div class="container">
      <div class="row mb-4">
        <div class="col-lg-7">
          <div class="section-kicker">Backed By</div>
          <h2>Forum partners &amp; sponsors.</h2>
        </div>
      </div>

      <div class="sponsor-tier-label">NAVIGATOR TIER</div>
      <div class="row g-3 mb-4">
        <div class="col-6 col-md-3"><div class="sponsor-box"><img src="assets/img/sponsors/fiji-water.svg" alt="Fiji Water" class="sponsor-logo"></div></div>
        <div class="col-6 col-md-3"><div class="sponsor-box"><img src="assets/img/sponsors/fiji-airways.svg" alt="Fiji Airways" class="sponsor-logo"></div></div>
        <div class="col-6 col-md-3"><div class="sponsor-box"><img src="assets/img/sponsors/vodafone.svg" alt="Vodafone" class="sponsor-logo"></div></div>
        <div class="col-6 col-md-3"><div class="sponsor-box"><img src="assets/img/sponsors/anz.svg" alt="ANZ" class="sponsor-logo"></div></div>
      </div>

      <div class="sponsor-tier-label">VOYAGER TIER</div>
      <div class="row g-3 mb-4">
        <div class="col-6 col-md-2"><div class="sponsor-box"><img src="assets/img/sponsors/coca-cola.svg" alt="Coca-Cola" class="sponsor-logo"></div></div>
        <div class="col-6 col-md-2"><div class="sponsor-box"><img src="assets/img/sponsors/westpac.svg" alt="Westpac" class="sponsor-logo"></div></div>
        <div class="col-6 col-md-2"><div class="sponsor-box"><img src="assets/img/sponsors/hilton.svg" alt="Hilton" class="sponsor-logo"></div></div>
        <div class="col-6 col-md-2"><div class="sponsor-box"><img src="assets/img/sponsors/digicel.svg" alt="Digicel" class="sponsor-logo"></div></div>
        <div class="col-6 col-md-2"><div class="sponsor-box"><img src="assets/img/sponsors/bsp.svg" alt="BSP Bank" class="sponsor-logo"></div></div>
        <div class="col-6 col-md-2"><div class="sponsor-box"><img src="assets/img/sponsors/fiji-bitter.svg" alt="Fiji Bitter - Carlton Brewery" class="sponsor-logo"></div></div>
      </div>

      <div class="sponsor-tier-label">ANCHOR TIER</div>
      <div class="row g-3">
        <div class="col-6 col-md-2"><div class="sponsor-box"><img src="assets/img/sponsors/coral-air.svg" alt="Coral Air" class="sponsor-logo"></div></div>
        <div class="col-6 col-md-2"><div class="sponsor-box"><img src="assets/img/sponsors/lagoon-studio.svg" alt="Lagoon Studio" class="sponsor-logo"></div></div>
        <div class="col-6 col-md-2"><div class="sponsor-box"><img src="assets/img/sponsors/vanua-print.svg" alt="Vanua Print Co." class="sponsor-logo"></div></div>
        <div class="col-6 col-md-2"><div class="sponsor-box"><img src="assets/img/sponsors/bula-roasters.svg" alt="Bula Roasters" class="sponsor-logo"></div></div>
      </div>
    </div>
  </section>