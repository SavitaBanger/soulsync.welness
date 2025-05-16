<?php
// === FORM HANDLING SECTION ===
require_once 'db_connect.php';
$showSuccess = false;
$error = '';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    function clean_input($data)
    {
        return htmlspecialchars(stripslashes(trim($data)));
    }

    $first_name = clean_input($_POST['first_name'] ?? '');
    $last_name = clean_input($_POST['last_name'] ?? '');
    $email = clean_input($_POST['email'] ?? '');
    $phone = clean_input($_POST['phone'] ?? '');
    $message = clean_input($_POST['message'] ?? '');

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email format.";
    } elseif (!preg_match("/^[0-9]{10}$/", $phone)) {
        $error = "Invalid phone number.";
    } else {
        $stmt = $conn->prepare("INSERT INTO contacts (first_name, last_name, email, phone, message) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $first_name, $last_name, $email, $phone, $message);

        if ($stmt->execute()) {
            $showSuccess = true;
        } else {
            $error = "Error: " . $stmt->error;
        }
        $stmt->close();
    }
    $conn->close();
}
?>

<?php include 'shared/header.php'; ?>

<main class="contact">
  <!-- Contact Page Banner Section -->
  <section class="banner d-flex align-items-center py-5">
    <div class="container">
      <div class="banner-container row align-items-center position-relative">
        <!-- Right: Heading and Text -->
        <div class="col-md-6 text-center text-md-start">
          <h1 class="banner-title text-blue">Contact Us</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="query">
    <div class="container">
      <div class="row g-4">
        <!-- Contact Form -->
        <div class="query-container col-12 col-lg-10 p-4 shadow rounded-4">
          <div class="contact-form col-lg-10">
            <h2 class="text-blue mb-3">Send us a message</h2>
            <p class="text-muted small mb-4">Do You Have A Question? A Complaint? Or need any help to choose the right
              treatment choice, Feel free to contact us.</p>

            <?php if (!empty($error)): ?>
              <div class="alert alert-danger"><?= $error ?></div>
            <?php endif; ?>

            <form action="" method="POST">
              <div class="row g-3">
                <div class="col-12 col-md-6">
                  <label class="form-label small">First Name</label>
                  <input type="text" name="first_name" class="form-control" placeholder="Enter your first name" required>
                </div>
                <div class="col-12 col-md-6">
                  <label class="form-label small">Last Name</label>
                  <input type="text" name="last_name" class="form-control" placeholder="Enter your last name" required>
                </div>
                <div class="col-12 col-md-6">
                  <label class="form-label small">Email</label>
                  <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
                </div>
                <div class="col-12 col-md-6">
                  <label class="form-label small">Phone</label>
                  <div class="input-group">
                    <span class="input-group-text">+91</span>
                    <input type="tel" name="phone" class="form-control" placeholder="Phone Number" pattern="[0-9]{10}" required>
                  </div>
                </div>
                <div class="col-12">
                  <label class="form-label small">Message</label>
                  <textarea name="message" class="form-control" rows="4" placeholder="Enter your message" required></textarea>
                </div>
                <div class="col-12 mt-3">
                  <button type="submit" class="submit-btn bg-blue text-white rounded-3 px-3 py-2">Submit</button>
                </div>
              </div>
            </form>
          </div>
        </div>

        <!-- Support Card -->
        <div class="support col-12">
          <div class="support-card shadow p-4 bg-blue">
            <h5>Hi! We are always here to help you.</h5>
            <div class="support-option mt-4">
              <i class="fa-solid fa-headset"></i>
              <div>
                <small class="fw-bold">Hotline:</small><br>
                +971 56 498 3456
              </div>
            </div>
            <div class="support-option">
              <i class="fa-regular fa-comment"></i>
              <div>
                <small class="fw-bold">SMS / Whatsapp:</small><br>
                +971 55 343 6433
              </div>
            </div>
            <div class="support-option">
              <i class="fa-regular fa-envelope"></i>
              <div>
                <small class="fw-bold">Email:</small><br>
                support@physiocare.com
              </div>
            </div>
            <hr class="border-light">
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php include 'shared/footer.php'; ?>

<?php if ($showSuccess): ?>
<!-- Thank You Modal -->
<div class="modal fade" id="thankYouModal" tabindex="-1" aria-labelledby="thankYouLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-0 shadow">
      <div class="modal-header bg-success text-white">
        <h5 class="modal-title" id="thankYouLabel">Thank You!</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <p class="mb-0">Thanks for your feedback!<br>We will get back to you shortly.</p>
      </div>
    </div>
  </div>
</div>

<script>
// Show modal only after form submission, then clear history so it doesn’t show again
document.addEventListener("DOMContentLoaded", function () {
  var thankYouModal = new bootstrap.Modal(document.getElementById('thankYouModal'));
  thankYouModal.show();

  // Clear POST data using history API to prevent popup on refresh
  if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
  }
});
</script>
<?php endif; ?>
