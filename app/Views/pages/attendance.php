
<section class="page-hero page-hero--light text-center">
    <div class="container">
      <!--div class="section-kicker">Attendance</div-->
      <h1 class="text-center">Confirm you're coming.</h1>
      <p class="text-center">28 October 2026 &middot; Grand Pacific Hotel, Suva. Register your attendance below and we'll send a confirmation to your inbox.</p>
    </div>
  </section>

  <div class="breadcrumb-bar">
    <div class="container">
      <a href="<?php echo base_url(); ?>">Home</a><span class="sep">/</span><span class="current">Attendance</span>
    </div>
  </div>

  <section class="section-pad">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-7">

          <div id="formNote" class="alert alert-success d-none" role="alert" tabindex="-1"></div>

          <form id="attendanceForm" class="contact-form row g-3" novalidate>
            <?= csrf_field() ?>

            <div class="col-md-12">
              <label for="af-name">Full name</label>
              <input type="text" class="form-control" id="af-name" name="full_name" required>
              <div class="invalid-feedback">Please enter your full name.</div>
            </div>

            <div class="col-md-12">
              <label for="af-org">Organisation</label>
              <input type="text" class="form-control" id="af-org" name="organisation" required>
              <div class="invalid-feedback">Please enter your organisation.</div>
            </div>

            <div class="col-md-12">
              <label for="af-email">Email address</label>
              <input type="email" class="form-control" id="af-email" name="email" required>
              <div class="invalid-feedback">Please enter a valid email address.</div>
            </div>

            <div class="col-12">
              <button type="submit" class="btn btn-accent">Confirm Attendance</button>
            </div>
          </form>

        </div>
      </div>
    </div>
  </section>

  <script>
    document.getElementById('attendanceForm').addEventListener('submit', async function (e) {
        e.preventDefault();
        e.stopPropagation();

        const form = e.target;
        const note = document.getElementById('formNote');
        const submitBtn = form.querySelector('button[type="submit"]');

        // Bootstrap-style validation
        if (!form.checkValidity()) {
            form.classList.add('was-validated');
            return;
        }

        // Reset previous state
        note.classList.add('d-none');
        note.classList.remove('alert-success', 'alert-danger');
        submitBtn.disabled = true;
        const originalText = submitBtn.textContent;
        submitBtn.textContent = 'Submitting…';

        try {
            const formData = new FormData(form);

            const response = await fetch('<?= site_url('attendance/submit') ?>', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            });

            const data = await response.json();

            if (data.status === 'success') {
                note.textContent = data.message;
                note.classList.remove('d-none');
                note.classList.add('alert-success');
                note.focus();
                form.reset();
                form.classList.remove('was-validated');
            } else {
                let msg = data.message || 'Something went wrong.';
                if (data.errors) {
                    msg += ' ' + Object.values(data.errors).join(' ');
                }
                note.textContent = msg;
                note.classList.remove('d-none');
                note.classList.add('alert-danger');
                note.focus();
            }
        } catch (err) {
            note.textContent = 'Network error. Please try again.';
            note.classList.remove('d-none');
            note.classList.add('alert-danger');
            note.focus();
        } finally {
            submitBtn.disabled = false;
            submitBtn.textContent = originalText;
        }
    });
  </script>
