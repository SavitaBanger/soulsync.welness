 <?php include 'shared/header.php'; ?>

  <main class="home">

    <!-- Banner Section -->
    <section class="banner bg-light py-5">
      <div class="container">
        <div class="banner-container row align-items-center">

          <!-- Left Content -->
          <div
            class="banner-content col-12 col-md-6 text-center text-md-start align-items-center d-flex flex-column align-items-md-start  mb-4 mb-md-0">
            <h1 class="fw-bold text-white">Personal Attention, Real Relief, Thoughtfully Delivered Physiotherapy Treatment</h1>
            <p class="text-light mt-3">
              Personalized treatment plans to help you move better and live pain-free.
            </p>
            <!-- Button to Open the Modal -->
            <!-- <div class="buttons">
              <a href="javascriptvoid:(0);" class="btn-blue" data-bs-toggle="modal"
                data-bs-target="#preAssessmentModal">Pre-Assessment</a>
            </div> -->
          </div>

          <!-- Left Image -->
          <div class="banner-info col-12 col-md-6 text-center mb-4 mb-md-0">
            <img src="src/img/home/banner-info.jpg" alt="banner-info" class="img-fluid shadow"
              style="max-height: 400px;">
          </div>

        </div>
      </div>
    </section>
    <!-- End Banner Section -->

    <!-- Start About Section -->
    <section class="about bg-grey">
      <div class="container">
        <div class="about-container row">
          <div class="heading center-heading mb-5">
            <h2>What We Treat</h2>
            <p class="text-center">At Physiocare, we specialize in evidence-based treatments to relieve pain and restore
              mobility.</p>
          </div>

          <div class="about-item col-lg-4 d-flex flex-column align-items-center">
            <span class="d-flex mb-3">
              <img src="src/img/home/knee-pain.jpg" alt="Knee Pain" class="img-fluid shadow rounded-circle">
            </span>
            <h3>Knee Pain</h3>
            <p class="text-center">Our personalized physiotherapy programs help reduce knee pain caused by arthritis,
              injuries, or post-surgical recovery. Strength training, manual therapy, and guided exercises support
              long-term relief.</p>
          </div>

          <div class="about-item col-lg-4 d-flex flex-column align-items-center">
            <span class="d-flex mb-3">
              <img src="src/img/home/back-pain.jpg" alt="Back Pain" class="img-fluid shadow rounded-circle">
            </span>
            <h3>Back Pain</h3>
            <p class="text-center">We treat chronic and acute back pain with a combination of spinal mobilization,
              posture correction, and core strengthening techniques to improve spinal health and flexibility.</p>
          </div>

          <div class="about-item col-lg-4 d-flex flex-column align-items-center">
            <span class="d-flex mb-3">
              <img src="src/img/home/neck-pain.jpg" alt="Neck Pain" class="img-fluid shadow rounded-circle">
            </span>
            <h3>Neck Pain</h3>
            <p class="text-center">Neck stiffness, tension, or postural pain is treated through manual therapy, soft
              tissue mobilization, and customized exercises to improve neck movement and reduce discomfort.</p>
          </div>

        </div>
      </div>
    </section>
    <!-- End About Section -->

    <!-- Start Overview Section -->
    <section class="overview">
      <div class="container">
        <div class="overview-conatiner">
          <div class="row gy-4 gx-5 align-items-center ">
            <div class="content col-md-7" data-aos="fade-up" data-aos-delay="100">
              <h3 class="text-blue">About Us</h3>
              <p>
                PhysioCare is a modern physiotherapy clinic that combines expert care with the power of technology.
                We specialize in personalized video-based treatment plans to help you recover from the comfort of your
                home.
              </p>
              <ul>
                <li>Online video consultations & treatments</li>
                <li>Access to expert-curated exercise video library</li>
                <li>Convenient, safe & effective care at home</li>
              </ul>
              <div class="buttons">
                <a href="javascriptvoid:(0);" class="btn-blue">Know More</a>
              </div>
            </div>

            <span class="d-flex col-12 col-md-5">
              <img src="src/img/home/about-info.png" alt="about-info" class="img-fluid">
            </span>

          </div>
        </div>
      </div>
    </section>
    <!-- End Overview Section -->

    <!-- Start work Section -->
    <section class="work bg-blue">
      <div class="container">
        <div class="work-container">
          <div class="heading center-heading white-heading">
            <h2>How we Works</h2>
          </div>
          <div class="row justify-content-md-around">
            <!-- Step 1 -->
            <div class="work-item mb-5 text-center  align-items-center d-flex flex-column col-md-5 col-lg-4">
              <span class="d-flex justify-content-center align-items-center mb-2">
                <img src="src/img/home/clipboard.svg" alt="clipboard">
              </span>
              <h5 class="fw-semibold text-white">Pre-Assessment Form</h5>
              <p class="text-white">Patients fill out a form providing information about their condition before any
                treatment.</p>
            </div>

            <!-- Step 2 -->
            <div class="work-item mb-5 text-center align-items-center d-flex flex-column col-md-5 col-lg-4">
              <span class="d-flex justify-content-center align-items-center mb-2">
                <img src="src/img/home/play-button.svg" alt="play-button">
              </span>
              <h5 class="fw-semibold text-white">Video-Based Exercise</h5>
              <p class="text-white">Patients are shown curated exercise videos based on their assessment results.</p>
            </div>

            <!-- Step 3 -->
            <div class="work-item mb-5 text-center  align-items-center d-flex flex-column col-md-5 col-lg-4">
              <span class="d-flex justify-content-center align-items-center mb-2">
                <img src="src/img/home/bar-chart.svg" alt="bar-chart">
              </span>
              <h5 class="fw-semibold text-white">Post-Assessment</h5>
              <p class="text-white">We collect recovery feedback from the patient to evaluate progress after exercises.
              </p>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- End work Section -->

    <!-- FAQ Section -->
    <section class="faq py-5">
      <div class="container">
        <div class="heading">
          <h2>Frequently Asked Questions</h2>
        </div>
        <div class="accordion" id="faqAccordion">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                What is physiotherapy?
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                Physiotherapy is a treatment method that focuses on restoring movement and function when someone is
                affected by injury, illness, or disability.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseTwo">
                How can music therapy help with stress relief?
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                Music therapy can help reduce stress by promoting relaxation, improving mood, and enhancing overall
                mental
                well-being.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseThree">
                Do I need a doctor’s referral for physiotherapy?
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                In most cases, a doctor's referral is not required to see a physiotherapist. However, some insurance
                plans
                may require a referral for coverage.
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End FAQ Section -->








































    <!-- Pre-Assessment Modal -->
    <div class="modal fade" id="preAssessmentModal" tabindex="-1" aria-labelledby="preAssessmentLabel"
      aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="preAssessmentLabel">Pre-Assessment Form</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form>
              <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter your full name" required>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
              </div>
              <div class="mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number" required>
              </div>
              <div class="mb-3">
                <label for="symptoms" class="form-label">Describe Your Symptoms</label>
                <textarea class="form-control" id="symptoms" rows="4"
                  placeholder="Briefly describe your condition and symptoms" required></textarea>
              </div>
              <div class="mb-3">
                <label for="history" class="form-label">Medical History</label>
                <textarea class="form-control" id="history" rows="4"
                  placeholder="List any previous injuries, surgeries, or medical conditions"></textarea>
              </div>
              <div class="mb-3">
                <label for="painLevel" class="form-label">Pain Level (1-10)</label>
                <input type="number" class="form-control" id="painLevel" min="1" max="10"
                  placeholder="Rate your pain level" required>
              </div>
              <div class="mb-3">
                <label for="mobility" class="form-label">Mobility Issues</label>
                <select class="form-select" id="mobility" required>
                  <option value="" disabled selected>Select an option</option>
                  <option value="None">No mobility issues</option>
                  <option value="Mild">Mild difficulty</option>
                  <option value="Moderate">Moderate difficulty</option>
                  <option value="Severe">Severe difficulty</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="goal" class="form-label">What are your therapy goals?</label>
                <textarea class="form-control" id="goal" rows="3" placeholder="Describe your recovery goals"></textarea>
              </div>
              <button type="submit" class="btn btn-primary w-100">Submit Assessment</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- End Pre-assesment-popup -->
  </main>

  <?php include 'shared/footer.php'; ?>
