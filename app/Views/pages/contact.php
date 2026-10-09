<section class="page-hero">
    <div class="container">
      <div class="section-kicker">Contact Us</div>
      <h1>Talk to the forum team.</h1>
      <p>Questions about delegate passes, speaking, sponsorship or press &mdash; send a note and we'll route it to the right person.</p>
    </div>
  </section>

  <div class="breadcrumb-bar">
    <div class="container">
      <a href="index.html">Home</a><span class="sep">/</span><span class="current">Contact Us</span>
    </div>
  </div>

  <section class="section-pad">
    <div class="container">
      <div class="row g-5">

        <!-- Form -->
        <div class="col-lg-7">
          <h2 class="mb-4">Send a message</h2>

          <div id="formNote" class="alert alert-success d-none" role="alert" tabindex="-1">
            Thanks &mdash; your message has been recorded. We usually reply within two business days.
          </div>

          <form id="contactForm" class="contact-form row g-3" novalidate>
            <div class="col-md-6">
              <label for="cf-name">Full name</label>
              <input type="text" class="form-control" id="cf-name" required>
              <div class="invalid-feedback">Please enter your name.</div>
            </div>
            <div class="col-md-6">
              <label for="cf-email">Email address</label>
              <input type="email" class="form-control" id="cf-email" required>
              <div class="invalid-feedback">Please enter a valid email.</div>
            </div>
            <div class="col-md-6">
              <label for="cf-org">Organisation</label>
              <input type="text" class="form-control" id="cf-org">
            </div>
            <div class="col-md-6">
              <label for="cf-topic">Topic</label>
              <select class="form-control" id="cf-topic" required>
                <option value="">Choose one&hellip;</option>
                <option>Delegate passes</option>
                <option>Speaking &amp; facilitating</option>
                <option>Sponsorship</option>
                <option>Press &amp; media</option>
                <option>Something else</option>
              </select>
              <div class="invalid-feedback">Please choose a topic.</div>
            </div>
            <div class="col-12">
              <label for="cf-message">Message</label>
              <textarea class="form-control" id="cf-message" rows="5" required></textarea>
              <div class="invalid-feedback">Please write a short message.</div>
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-accent">Send Message</button>
            </div>
            <div class="col-12">
              <p class="text-muted mb-0" style="font-size: 0.82rem;">This is a demo form &mdash; it validates in the browser but does not send email. Wire it to your provider (Formspree, Netlify Forms, a backend endpoint) before launch.</p>
            </div>
          </form>
        </div>

        <!-- Details -->
        <div class="col-lg-5">
          <h2 class="mb-4">Reach us directly</h2>

          <div class="contact-detail">
            <i class="bi bi-geo-alt"></i>
            <div><h6>Venue &amp; office</h6><p>Grand Pacific Harbour Centre<br>Victoria Parade, Suva, Fiji</p></div>
          </div>
          <div class="contact-detail">
            <i class="bi bi-envelope"></i>
            <div><h6>General enquiries</h6><p><a href="mailto:info@digital.gov.fj">info@digital.gov.fj</a></p></div>
          </div>
          <div class="contact-detail">
            <i class="bi bi-people"></i>
            <div><h6>Sponsorship</h6><p><a href="mailto:partners@digital.gov.fj">partners@digital.gov.fj</a></p></div>
          </div>
          <div class="contact-detail">
            <i class="bi bi-mic"></i>
            <div><h6>Speaking &amp; press</h6><p><a href="mailto:program@digital.gov.fj">program@digital.gov.fj</a></p></div>
          </div>
          <div class="contact-detail">
            <i class="bi bi-telephone"></i>
            <div><h6>Phone</h6><p><a href="tel:+6796701234">+679 670 1234</a> &middot; Mon&ndash;Fri, 9:00&ndash;17:00 FJT</p></div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Map -->
  <section class="section-pad pt-0">
    <div class="container">
      <iframe
        class="map-embed"
        src="https://www.google.com/maps?q=Suva%20Fiji&output=embed"
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
        title="Map showing Suva, Fiji"></iframe>
    </div>
  </section>

  <!-- FAQ -->
  <section class="section-pad" style="background-color: var(--bg-light);">
    <div class="container">
      <div class="row g-5">
        <div class="col-lg-4">
          <div class="section-kicker">Before You Write</div>
          <h2>Common questions.</h2>
          <p>A few answers that might save you a message.</p>
        </div>
        <div class="col-lg-8">
          <div class="accordion" id="faqAccordion">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">How do I register as a delegate?</button>
              </h2>
              <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">Delegate registration for 2026 opens in February. Join the mailing list via the form above and we'll send the link when it's live. Passes are curated &mdash; you'll complete a short profile as part of registration.</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">Can I propose a session or speaker?</button>
              </h2>
              <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">Yes. Email <a href="mailto:program@digital.gov.fj">program@digital.gov.fj</a> with a one-paragraph outline and the names involved. The program committee reviews proposals monthly through March.</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">What sponsorship tiers are available?</button>
              </h2>
              <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">Navigator, Voyager and Anchor tiers, plus session and reception sponsorships. The full prospectus is on the <a href="resources.html">Event Resources</a> page.</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">Do you help with visas and travel?</button>
              </h2>
              <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">We issue invitation letters for visa applications on request after registration is confirmed, and the resources page lists recommended hotels with forum rates.</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>