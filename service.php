<?php include 'shared/header.php'; ?>

<main class="service">

  <section class="query">
    <div class="container">
      <h2 class="mb-4">Pain Assessment Form</h2>
      <form id="painForm" action="pre_assessment_form.php" method="POST">
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" id="name" class="form-control" required />
        </div>
        <div class="mb-3">
          <label for="age" class="form-label">Age</label>
          <input type="number" id="age" class="form-control" required />
        </div>
        <div class="mb-3">
          <label class="form-label">Gender</label>
          <select class="form-select" id="gender" required>
            <option value="">Choose...</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="occupation" class="form-label">Occupation</label>
          <select id="occupation" name="occupation" class="form-select" required>
            <option value="">-- Select Occupation --</option>
            <option value="Student">Student</option>
            <option value="Office Worker">Office Worker</option>
            <option value="Manual Labour">Manual Labour</option>
            <option value="Retired">Retired</option>
            <option value="Homemaker">Homemaker</option>
            <option value="Other">Other</option>
          </select>
        </div>
        <div class="mb-3">
          <label class="form-label">Condition</label>
          <div class="form-check">
            <input type="radio" id="neckPain" name="condition" value="Neck Pain" class="form-check-input" required />
            <label for="neckPain" class="form-check-label">Neck Pain</label>
          </div>
          <div class="form-check">
            <input type="radio" id="backPain" name="condition" value="Back Pain" class="form-check-input" />
            <label for="backPain" class="form-check-label">Back Pain</label>
          </div>
          <div class="form-check">
            <input type="radio" id="kneePain" name="condition" value="Knee Pain" class="form-check-input" />
            <label for="kneePain" class="form-check-label">Knee Pain</label>
          </div>
        </div>
        <div class="mb-3">
          <label for="painLevel" class="form-label">Pain Level (0–10)</label>
          <input type="range" id="painLevel" name="painLevel" class="form-range" min="0" max="10" step="1" value="0"
            oninput="updatePainText(this.value)" />
          <div id="painFeedback" class="form-text mt-1 fw-semibold text-success">0 – Light Stretching 🟢</div>
        </div>
        <div class="mb-3">
          <label class="form-label">Symptoms</label><br />
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="Morning Stiffness" id="symptom1" />
            <label class="form-check-label" for="symptom1">Morning Stiffness</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="Night Pain" id="symptom2" />
            <label class="form-check-label" for="symptom2">Night Pain</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="Pain during Activity" id="symptom3" />
            <label class="form-check-label" for="symptom3">Pain during Activity</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="Muscle Weakness" id="symptom4" />
            <label class="form-check-label" for="symptom4">Muscle Weakness</label>
          </div>
        </div>
        <div class="mb-3">
          <label class="form-label">Pain Duration</label>
          <select class="form-select" id="painDuration" required>
            <option value="<1week">Less than 1 week</option>
            <option value="1-2weeks">1–2 weeks</option>
            <option value=">1month">More than 1 month</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </section>


  <!-- Neck Pain Light Section -->
  <!-- <section class="video-gallery py-5" id="NeckPain1" style="display:none;">
    <div class="container">
      <div class="row mx-0" id="bootstrap-video-gallery">
        <a class="col-12 col-md-6 px-2 mb-4"
          data-video='{"source": [{"src":"src/img/service/testing.mp4", "type":"video/mp4"}], "attributes": {"preload": false, "controls": true}}'
          data-poster="src/img/home/neck-pain.jpg" data-sub-html="<h4>Relaxing</h4><p>Recovery Video</p>">
          <img class="img-fluid" src="src/img/home/neck-pain.jpg" alt="Video Thumbnail" />
        </a>
        <a class="col-12 col-md-6 px-2 mb-4"
          data-video='{"source": [{"src":"src/img/home/testing.mp4", "type":"video/mp4"}], "attributes": {"preload": false, "controls": true}}'
          data-poster="src/img/home/neck-pain.jpg" data-sub-html="<h4>Back Pain</h4><p>Video Explanation</p>">
          <img class="img-fluid" src="src/img/home/neck-pain.jpg" alt="Video Thumbnail" />
        </a>

      </div>
    </div>
  </section> -->

  <!-- End Neck pain Light Section -->
  <div id="neck-light" class="video-set" style="display:none">
  <div class="container">
    <div class="heading">
      <h2>Neck Light</h2>
    </div>
      <div class="row mx-0" id="bootstrap-video-gallery">
        <a class="col-12 col-md-6 px-2 mb-4"
          data-video='{"source": [{"src":"src/img/service/testing.mp4", "type":"video/mp4"}], "attributes": {"preload": false, "controls": true}}'
          data-poster="src/img/home/neck-pain.jpg" data-sub-html="<h4>Relaxing</h4><p>Recovery Video</p>">
          <img class="img-fluid" src="src/img/home/neck-pain.jpg" alt="Video Thumbnail" />
        </a>
        <a class="col-12 col-md-6 px-2 mb-4"
          data-video='{"source": [{"src":"src/img/home/testing.mp4", "type":"video/mp4"}], "attributes": {"preload": false, "controls": true}}'
          data-poster="src/img/home/neck-pain.jpg" data-sub-html="<h4>Back Pain</h4><p>Video Explanation</p>">
          <img class="img-fluid" src="src/img/home/neck-pain.jpg" alt="Video Thumbnail" />
        </a>

      </div>
    </div>
  </div>

<div id="neck-moderate" class="video-set" style="display:none">
  <div class="container">
  <div class="heading"><h2>Neck Moderate</h2>
  <div class="row mx-0" id="bootstrap-video-gallery">
        <a class="col-12 col-md-6 px-2 mb-4"
          data-video='{"source": [{"src":"src/img/service/testing.mp4", "type":"video/mp4"}], "attributes": {"preload": false, "controls": true}}'
          data-poster="src/img/home/neck-pain.jpg" data-sub-html="<h4>Relaxing</h4><p>Recovery Video</p>">
          <img class="img-fluid" src="src/img/home/neck-pain.jpg" alt="Video Thumbnail" />
        </a>
        <a class="col-12 col-md-6 px-2 mb-4"
          data-video='{"source": [{"src":"src/img/home/testing.mp4", "type":"video/mp4"}], "attributes": {"preload": false, "controls": true}}'
          data-poster="src/img/home/neck-pain.jpg" data-sub-html="<h4>Back Pain</h4><p>Video Explanation</p>">
          <img class="img-fluid" src="src/img/home/neck-pain.jpg" alt="Video Thumbnail" />
        </a>

      </div>
  </div>
</div>
</div>
<div id="neck-strong" class="video-set" style="display:none">
<div class="container">
  <div class="heading"><h2>Neck Strong</h2>
  <div class="row mx-0" id="bootstrap-video-gallery">
        <a class="col-12 col-md-6 px-2 mb-4"
          data-video='{"source": [{"src":"src/img/service/testing.mp4", "type":"video/mp4"}], "attributes": {"preload": false, "controls": true}}'
          data-poster="src/img/home/neck-pain.jpg" data-sub-html="<h4>Relaxing</h4><p>Recovery Video</p>">
          <img class="img-fluid" src="src/img/home/neck-pain.jpg" alt="Video Thumbnail" />
        </a>
        <a class="col-12 col-md-6 px-2 mb-4"
          data-video='{"source": [{"src":"src/img/home/testing.mp4", "type":"video/mp4"}], "attributes": {"preload": false, "controls": true}}'
          data-poster="src/img/home/neck-pain.jpg" data-sub-html="<h4>Back Pain</h4><p>Video Explanation</p>">
          <img class="img-fluid" src="src/img/home/neck-pain.jpg" alt="Video Thumbnail" />
        </a>

      </div>
  </div>
</div>
</div>

<div id="back-light" class="video-set" style="display:none"><div class="container">
  <div class="heading"><h2>back-light</h2>
  <div class="row mx-0" id="bootstrap-video-gallery">
        <a class="col-12 col-md-6 px-2 mb-4"
          data-video='{"source": [{"src":"src/img/service/testing.mp4", "type":"video/mp4"}], "attributes": {"preload": false, "controls": true}}'
          data-poster="src/img/home/neck-pain.jpg" data-sub-html="<h4>Relaxing</h4><p>Recovery Video</p>">
          <img class="img-fluid" src="src/img/home/neck-pain.jpg" alt="Video Thumbnail" />
        </a>
        <a class="col-12 col-md-6 px-2 mb-4"
          data-video='{"source": [{"src":"src/img/home/testing.mp4", "type":"video/mp4"}], "attributes": {"preload": false, "controls": true}}'
          data-poster="src/img/home/neck-pain.jpg" data-sub-html="<h4>Back Pain</h4><p>Video Explanation</p>">
          <img class="img-fluid" src="src/img/home/neck-pain.jpg" alt="Video Thumbnail" />
        </a>

      </div>
  </div>
</div></div>
<div id="back-moderate" class="video-set" style="display:none">
<div class="container">
  <div class="heading"><h2>back Moderate</h2>
  <div class="row mx-0" id="bootstrap-video-gallery">
        <a class="col-12 col-md-6 px-2 mb-4"
          data-video='{"source": [{"src":"src/img/service/testing.mp4", "type":"video/mp4"}], "attributes": {"preload": false, "controls": true}}'
          data-poster="src/img/home/neck-pain.jpg" data-sub-html="<h4>Relaxing</h4><p>Recovery Video</p>">
          <img class="img-fluid" src="src/img/home/neck-pain.jpg" alt="Video Thumbnail" />
        </a>
        <a class="col-12 col-md-6 px-2 mb-4"
          data-video='{"source": [{"src":"src/img/home/testing.mp4", "type":"video/mp4"}], "attributes": {"preload": false, "controls": true}}'
          data-poster="src/img/home/neck-pain.jpg" data-sub-html="<h4>Back Pain</h4><p>Video Explanation</p>">
          <img class="img-fluid" src="src/img/home/neck-pain.jpg" alt="Video Thumbnail" />
        </a>

      </div>
  </div>
</div>
</div>
<div id="back-strong" class="video-set" style="display:none">
<div class="container">
  <div class="heading"><h2>back strong</h2>
  <div class="row mx-0" id="bootstrap-video-gallery">
        <a class="col-12 col-md-6 px-2 mb-4"
          data-video='{"source": [{"src":"src/img/service/testing.mp4", "type":"video/mp4"}], "attributes": {"preload": false, "controls": true}}'
          data-poster="src/img/home/neck-pain.jpg" data-sub-html="<h4>Relaxing</h4><p>Recovery Video</p>">
          <img class="img-fluid" src="src/img/home/neck-pain.jpg" alt="Video Thumbnail" />
        </a>
        <a class="col-12 col-md-6 px-2 mb-4"
          data-video='{"source": [{"src":"src/img/home/testing.mp4", "type":"video/mp4"}], "attributes": {"preload": false, "controls": true}}'
          data-poster="src/img/home/neck-pain.jpg" data-sub-html="<h4>Back Pain</h4><p>Video Explanation</p>">
          <img class="img-fluid" src="src/img/home/neck-pain.jpg" alt="Video Thumbnail" />
        </a>

      </div>
  </div>
</div>
</div>

<div id="knee-light" class="video-set" style="display:none">
<div class="container">
  <div class="heading"><h2>knee light</h2>
  <div class="row mx-0" id="bootstrap-video-gallery">
        <a class="col-12 col-md-6 px-2 mb-4"
          data-video='{"source": [{"src":"src/img/service/testing.mp4", "type":"video/mp4"}], "attributes": {"preload": false, "controls": true}}'
          data-poster="src/img/home/neck-pain.jpg" data-sub-html="<h4>Relaxing</h4><p>Recovery Video</p>">
          <img class="img-fluid" src="src/img/home/neck-pain.jpg" alt="Video Thumbnail" />
        </a>
        <a class="col-12 col-md-6 px-2 mb-4"
          data-video='{"source": [{"src":"src/img/home/testing.mp4", "type":"video/mp4"}], "attributes": {"preload": false, "controls": true}}'
          data-poster="src/img/home/neck-pain.jpg" data-sub-html="<h4>Back Pain</h4><p>Video Explanation</p>">
          <img class="img-fluid" src="src/img/home/neck-pain.jpg" alt="Video Thumbnail" />
        </a>

      </div>
  </div>
</div>
</div>
<div id="knee-moderate" class="video-set" style="display:none">
<div class="container">
  <div class="heading"><h2>knee Moderate</h2>
  <div class="row mx-0" id="bootstrap-video-gallery">
        <a class="col-12 col-md-6 px-2 mb-4"
          data-video='{"source": [{"src":"src/img/service/testing.mp4", "type":"video/mp4"}], "attributes": {"preload": false, "controls": true}}'
          data-poster="src/img/home/neck-pain.jpg" data-sub-html="<h4>Relaxing</h4><p>Recovery Video</p>">
          <img class="img-fluid" src="src/img/home/neck-pain.jpg" alt="Video Thumbnail" />
        </a>
        <a class="col-12 col-md-6 px-2 mb-4"
          data-video='{"source": [{"src":"src/img/home/testing.mp4", "type":"video/mp4"}], "attributes": {"preload": false, "controls": true}}'
          data-poster="src/img/home/neck-pain.jpg" data-sub-html="<h4>Back Pain</h4><p>Video Explanation</p>">
          <img class="img-fluid" src="src/img/home/neck-pain.jpg" alt="Video Thumbnail" />
        </a>

      </div>
  </div>
</div>
</div>
<div id="knee-strong" class="video-set" style="display:none">
<div class="container">
  <div class="heading"><h2>knee strong</h2>
  <div class="row mx-0" id="bootstrap-video-gallery">
        <a class="col-12 col-md-6 px-2 mb-4"
          data-video='{"source": [{"src":"src/img/service/testing.mp4", "type":"video/mp4"}], "attributes": {"preload": false, "controls": true}}'
          data-poster="src/img/home/neck-pain.jpg" data-sub-html="<h4>Relaxing</h4><p>Recovery Video</p>">
          <img class="img-fluid" src="src/img/home/neck-pain.jpg" alt="Video Thumbnail" />
        </a>
        <a class="col-12 col-md-6 px-2 mb-4"
          data-video='{"source": [{"src":"src/img/home/testing.mp4", "type":"video/mp4"}], "attributes": {"preload": false, "controls": true}}'
          data-poster="src/img/home/neck-pain.jpg" data-sub-html="<h4>Back Pain</h4><p>Video Explanation</p>">
          <img class="img-fluid" src="src/img/home/neck-pain.jpg" alt="Video Thumbnail" />
        </a>

      </div>
  </div>
</div>
</div>




</main>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script>
    $(document).ready(function () {
    lightGallery(document.getElementById('bootstrap-video-gallery'), {
      selector: 'a',
      plugins: [lgVideo],
      speed: 500,
      thumbnail: false
    });
  });


  $(function () {
    // Slider feedback update
    $('#painLevel').on('input', function () {
      const val = parseInt($(this).val());
      const feedback = $('#painFeedback');
      let text = '', color = '';

      if (val <= 3) {
        text = `${val} – Light Stretching 🟢`;
        color = 'text-success';
      } else if (val <= 6) {
        text = `${val} – Moderate 🟡`;
        color = 'text-warning';
      } else {
        text = `${val} – Strong Pain 🔴`;
        color = 'text-danger';
      }

      feedback
        .text(text)
        .removeClass('text-success text-warning text-danger')
        .addClass(color);
    });

    // Form submit handling
    $('#painForm').on('submit', function (e) {
      e.preventDefault();

      const selected = $('input[name="condition"]:checked');
      if (selected.length === 0) {
        alert("Please select a condition.");
        return;
      }

      // ✅ Remove just the word " Pain"
      const condition = selected.val().toLowerCase().replace(' pain', '');
      const painLevel = parseInt($('#painLevel').val());

      let level = '';
      if (painLevel <= 3) level = 'light';
      else if (painLevel <= 6) level = 'moderate';
      else level = 'strong';

      const sectionId = `${condition}-${level}`; // e.g. neck-light
      const sectionEl = $('#' + sectionId);

      // Hide all sections first
      $('.video-set').hide();

      if (sectionEl.length) {
        sectionEl.show();
      } else {
        alert("No video section matched. Check IDs!");
      }
    });
  });
</script>



<?php include 'shared/footer.php'; ?>